JobE Fixed Demo - PHP + MySQL + CSV + Word Export แบบไม่ใช้ Composer

วิธีติดตั้งบน XAMPP
1) แตกไฟล์ JobE_fixed.zip ไปไว้ที่:
   C:\xampp-php82\htdocs\JobE
   หรือ C:\xampp\htdocs\JobE

2) เปิด XAMPP แล้ว Start Apache และ MySQL

3) เข้า phpMyAdmin แล้ว Import ไฟล์ create_table.sql
   หมายเหตุ: create_table.sql มีคำสั่ง DROP TABLE IF EXISTS job_applications;
   ถ้ามีข้อมูลเก่า ให้ backup ก่อน import

4) เปิดเว็บ:
   http://localhost/JobE/

5) ทดสอบ:
   - กรอกใบสมัครที่ index.php
   - ไปหน้า admin.php
   - กด Export CSV ทั้งหมด
   - กด Export Word

Database:
- ชื่อ database: jobe
- ตาราง: job_applications

ไฟล์สำคัญ:
- db.php / config.php = เชื่อมต่อฐานข้อมูล
- create_table.sql = สร้าง database + table
- index.php = หน้า form
- save.php = บันทึกข้อมูล
- admin.php = ดูรายการ + ปุ่ม export
- export_csv.php = export CSV
- export_word.php = export Word .docx โดยใช้ ZipArchive ไม่ต้องใช้ Composer
- templates/application_template.docx = Word template

Placeholder ใน Word template:
ใช้รูปแบบ ${ชื่อ_column} เช่น
${fullname_th}
${phone}
${email}
${position_1}
${expected_salary}

ถ้าจะแก้ template:
เปิด templates/application_template.docx แล้วพิมพ์ placeholder ตามชื่อ column ใน create_table.sql
แนะนำให้พิมพ์ placeholder ใหม่ด้วยมือ อย่า copy จากหลาย style เพราะ Word อาจแยกข้อความเป็นหลาย run แล้วแทนค่าไม่เจอ
