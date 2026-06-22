<?php
require 'db.php';
$result = $conn->query('SELECT id, apply_date, fullname_en, phone, email, position_1, expected_salary FROM job_applications ORDER BY id DESC');
if (!$result) {
    die('Query failed: ' . $conn->error);
}
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <title>Admin - Job Applications</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: Arial, sans-serif; max-width: 1200px; margin: 30px auto; }
        table { width:100%; border-collapse:collapse; margin-top:16px; }
        th, td { border:1px solid #ddd; padding:8px; vertical-align:top; }
        th { background:#f0f3f7; }
        a.btn { display:inline-block; padding:8px 12px; background:#1677ff; color:#fff; border-radius:6px; text-decoration:none; margin:4px 4px 4px 0; }
        a.green { background:#16a34a; }
        a.gray { background:#555; }
        a.orange { background:#f97316; }
    </style>
</head>
<body>
    <h1>รายการผู้สมัครงาน</h1>
    <a class="btn gray" href="index.php">กลับไปหน้า Form</a>
    <a class="btn green" href="export_csv.php">Export CSV ทั้งหมด</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>วันที่สมัคร</th>
                <th>ชื่อ</th>
                <th>เบอร์</th>
                <th>ตำแหน่ง</th>
                <th>Export</th>
            </tr>
        </thead>
        <tbody>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($row['id']) ?></td>
                <td><?= htmlspecialchars($row['apply_date']) ?></td>
                <td><?=htmlspecialchars($row['fullname_en']) ?></td>
                <td><?= htmlspecialchars($row['phone']) ?></td>
                <td><?=htmlspecialchars($row['position_1'])?></td>
                <td><a class="btn orange" href="export_word.php?id=<?= urlencode($row['id']) ?>">Export Word</a></td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>
