<?php // ตัวอย่างปุ่มในหน้า admin.php ภายใน while ($row = mysqli_fetch_assoc($result)) { ... } ?>
<a href="export_word.php?id=<?= $row['id']; ?>" target="_blank">Export Word</a>
