<?php
require 'db.php';

$id = intval($_GET['id'] ?? 0);

if ($id <= 0) {
    die('ไม่พบ id');
}

$stmt = $conn->prepare("SELECT * FROM job_applications WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if (!$row) {
    die('ไม่พบข้อมูลผู้สมัคร');
}

$templatePath = __DIR__ . '/templates/application_template.docx';

if (!file_exists($templatePath)) {
    die('ไม่พบไฟล์ template: templates/application_template.docx');
}

if (!class_exists('ZipArchive')) {
    die('Server ยังไม่ได้เปิด PHP extension: ZipArchive / zip');
}

$outputDir = __DIR__ . '/exports';
if (!is_dir($outputDir)) {
    mkdir($outputDir, 0777, true);
}

$outputFile = $outputDir . '/application_' . $id . '_' . time() . '.docx';

copy($templatePath, $outputFile);

$zip = new ZipArchive();

if ($zip->open($outputFile) !== true) {
    die('เปิดไฟล์ Word ไม่ได้');
}

function xmlSafe($value) {
    return htmlspecialchars((string)$value, ENT_QUOTES | ENT_XML1, 'UTF-8');
}

function placeholderPattern($placeholder) {
    $chars = preg_split('//u', $placeholder, -1, PREG_SPLIT_NO_EMPTY);
    $pattern = '';

    foreach ($chars as $char) {
        $pattern .= preg_quote($char, '/') . '(?:<[^>]+>)*';
    }

    return '/' . $pattern . '/u';
}

$xmlFiles = [];

for ($i = 0; $i < $zip->numFiles; $i++) {
    $name = $zip->getNameIndex($i);

    if (
        preg_match('/^word\/document\.xml$/', $name) ||
        preg_match('/^word\/header[0-9]*\.xml$/', $name) ||
        preg_match('/^word\/footer[0-9]*\.xml$/', $name)
    ) {
        $xmlFiles[] = $name;
    }
}

foreach ($xmlFiles as $xmlFile) {
    $xml = $zip->getFromName($xmlFile);

    foreach ($row as $column => $value) {
        $placeholder = '${' . $column . '}';
        $safeValue = xmlSafe($value ?? '');

        // replace ปกติ
        $xml = str_replace($placeholder, $safeValue, $xml);

        // replace กรณี Word แยก placeholder เป็นหลาย run
        $xml = preg_replace(placeholderPattern($placeholder), $safeValue, $xml);
    }

    $zip->addFromString($xmlFile, $xml);
}

$zip->close();

$downloadName = 'application_' . $id . '.docx';

if (ob_get_length()) {
    ob_end_clean();
}

header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
header('Content-Disposition: attachment; filename="' . $downloadName . '"');
header('Content-Length: ' . filesize($outputFile));
header('Cache-Control: no-cache, must-revalidate');
header('Pragma: no-cache');

readfile($outputFile);
exit;
?>