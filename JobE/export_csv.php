<?php
require 'db.php';

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename="job_applications.csv"');
echo "\xEF\xBB\xBF"; // UTF-8 BOM สำหรับ Excel ภาษาไทย

$output = fopen('php://output', 'w');
fputcsv($output, [
    'ID', 'วันที่บันทึก', 'เลขที่', 'วันที่สมัคร', 'ชื่อไทย', 'ชื่ออังกฤษ', 'เบอร์โทร', 'อีเมล',
    'ตำแหน่ง 1', 'ตำแหน่ง 2', 'เงินเดือนที่ต้องการ', 'วันที่เริ่มงาน',
    'ที่อยู่', 'วันเกิด', 'อายุ', 'การศึกษา', 'สถาบัน', 'บริษัทล่าสุด'
]);

$sql = "SELECT * FROM job_applications ORDER BY id DESC";
$result = $conn->query($sql);
if (!$result) {
    die('Query failed: ' . $conn->error);
}

while ($row = $result->fetch_assoc()) {
    fputcsv($output, [
        $row['id'], $row['created_at'], $row['apply_date'], $row['fullname_th'], $row['fullname_en'],
        $row['phone'], $row['email'], $row['position_1'], $row['position_2'], $row['expected_salary'], $row['starting_date'],
        $row['contact_address'], $row['birth_date'], $row['age'], $row['education_level'], $row['institute'], $row['company_1']
    ]);
}

fclose($output);
exit;
?>
