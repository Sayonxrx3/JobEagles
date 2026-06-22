<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JobE | Job Application</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-slate-100 text-slate-800">

<nav class="sticky top-0 z-30 border-b border-slate-200 bg-white/90 backdrop-blur">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-3">
        <a href="index.php" class="flex items-center gap-3">
            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-600 text-white font-bold">E</div>
            <div>
                <div class="font-bold text-slate-900">JobEagles</div>
                <div class="text-xs text-slate-500">Employment Application</div>
            </div>
        </a>
        <div class="flex gap-2">
        </div>
    </div>
</nav>

<header class="bg-gradient-to-br from-blue-700 via-blue-600 to-sky-500 text-white">
    <div class="mx-auto max-w-7xl px-4 py-10">
        <div class="max-w-3xl">
            <span class="inline-flex rounded-full bg-white/15 px-4 py-1 text-sm font-semibold ring-1 ring-white/20">Eagles Air & Sea</span>
            <h1 class="mt-4 text-3xl md:text-4xl font-extrabold">ใบสมัครงาน</h1>
            <p class="mt-3 text-blue-50">กรอกข้อมูลผู้สมัคร ระบบจะบันทึกลง MySQL และสามารถ Export เป็น CSV / Word ได้จากหน้า Admin</p>
        </div>
    </div>
</header>

<main class="mx-auto max-w-7xl px-4 py-8">
<form action="save.php" method="post" class="space-y-6">

    <!-- 1 -->
    <section class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
        <div class="flex items-center gap-3 px-6 py-4 bg-gradient-to-r from-blue-50 to-sky-50 border-b border-slate-200"><div class="flex h-9 w-9 items-center justify-center rounded-full bg-blue-600 text-white text-sm font-bold">1</div><h2 class="text-lg font-bold text-slate-800">ข้อมูลตำแหน่งงาน</h2></div>
        <div class="p-6 space-y-5">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">วันที่สมัคร</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="date" name="apply_date"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">วันที่พร้อมเริ่มงาน</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="date" name="starting_date"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ตำแหน่งที่สมัคร 1 <span class="text-red-500">*</span></label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="position_1" required></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ตำแหน่งที่สมัคร 2</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="position_2"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">เงินเดือนที่ต้องการ</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="expected_salary" placeholder="เช่น 18,000"></div>
            </div>
        </div>
    </section>

    <!-- 2 -->
    <section class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
        <div class="flex items-center gap-3 px-6 py-4 bg-gradient-to-r from-blue-50 to-sky-50 border-b border-slate-200"><div class="flex h-9 w-9 items-center justify-center rounded-full bg-blue-600 text-white text-sm font-bold">2</div><h2 class="text-lg font-bold text-slate-800">ข้อมูลส่วนตัว</h2></div>
        <div class="p-6 space-y-5">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ชื่อ-นามสกุล ภาษาไทย <span class="text-red-500">*</span></label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="fullname_th" required></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ชื่อ-นามสกุล ภาษาอังกฤษ</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="fullname_en"></div>
            </div>
            <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ที่อยู่ที่สามารถติดต่อได้</label><textarea class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100 resize-y" name="contact_address" rows="3"></textarea></div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">เบอร์โทรศัพท์ <span class="text-red-500">*</span></label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="phone" required></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">อีเมล</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="email" name="email"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ปัจจุบันพักอาศัย</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="current_staying" placeholder="บ้านตนเอง / บ้านเช่า / อื่น ๆ"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-5">
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">วัน/เดือน/ปีเกิด</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="date" name="birth_date"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">อายุ</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="age"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ภูมิลำเนา</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="place_of_birth"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">กรุ๊ปเลือด</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="blood_group"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-5">
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">น้ำหนัก</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="weight"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ส่วนสูง</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="height"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">เชื้อชาติ</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="race"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">สัญชาติ</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="nationality"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ศาสนา</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="religion"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">สถานภาพทางทหาร</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="military_status"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">สถานภาพการสมรส</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="marital_status"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">เลขบัตรประชาชน</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="id_card_no"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">วันหมดอายุบัตร</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="date" name="id_card_expiry"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">สถานที่ออกบัตร</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="id_card_issued_by"></div>
            </div>
        </div>
    </section>

    <!-- 3 -->
    <section class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
        <div class="flex items-center gap-3 px-6 py-4 bg-gradient-to-r from-blue-50 to-sky-50 border-b border-slate-200"><div class="flex h-9 w-9 items-center justify-center rounded-full bg-blue-600 text-white text-sm font-bold">3</div><h2 class="text-lg font-bold text-slate-800">บุคคลติดต่อฉุกเฉิน</h2></div>
        <div class="p-6 space-y-5">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ชื่อผู้ติดต่อฉุกเฉิน</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="emergency_name"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ความสัมพันธ์</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="emergency_relation"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">เบอร์โทร</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="emergency_phone"></div>
            </div>
        </div>
    </section>

    <!-- 4 -->
    <section class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
        <div class="flex items-center gap-3 px-6 py-4 bg-gradient-to-r from-blue-50 to-sky-50 border-b border-slate-200"><div class="flex h-9 w-9 items-center justify-center rounded-full bg-blue-600 text-white text-sm font-bold">4</div><h2 class="text-lg font-bold text-slate-800">รายละเอียดครอบครัว</h2></div>
        <div class="p-6 space-y-5">
            <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">สถานะบิดา/มารดา</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="parent_status"></div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ชื่อบิดา</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="father_name"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">อาชีพบิดา</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="father_occupation"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">เบอร์โทรบิดา</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="father_phone"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ชื่อมารดา</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="mother_name"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">อาชีพมารดา</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="mother_occupation"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">เบอร์โทรมารดา</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="mother_phone"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">จำนวนพี่น้อง</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="siblings_count"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ท่านเป็นคนที่</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="sibling_order"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">จำนวนบุตร/ธิดา</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="children_count"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">สถานะคู่สมรส</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="spouse_status"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ชื่อคู่สมรส</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="spouse_name"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">เลขบัตรประชาชนคู่สมรส</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="spouse_id_card"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">เบอร์โทรคู่สมรส</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="spouse_phone"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">สถานที่ทำงานคู่สมรส</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="spouse_workplace"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">บุตรอายุเกิน 21 ปี</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="children_over"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">บุตรที่ยังไม่เข้าศึกษา</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="children_notschool"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">บุตรที่กำลังศึกษา</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="children_school"></div>
            </div>
        </div>
    </section>

    <!-- 5 -->
    <section class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
        <div class="flex items-center gap-3 px-6 py-4 bg-gradient-to-r from-blue-50 to-sky-50 border-b border-slate-200"><div class="flex h-9 w-9 items-center justify-center rounded-full bg-blue-600 text-white text-sm font-bold">5</div><h2 class="text-lg font-bold text-slate-800">การศึกษา</h2></div>
        <div class="p-6 space-y-5">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ระดับการศึกษา</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="education_level"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">สถาบันการศึกษา</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="institute"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">คณะ/สาขาวิชาเอก</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="major"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ปีที่จบการศึกษา</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="graduation_year"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">คะแนนเฉลี่ย</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="gpa"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">กำลังศึกษาต่อระดับ</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="present_study_level"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">สถาบันที่กำลังศึกษา</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="present_study_institute"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">สาขาที่กำลังศึกษา</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="present_study_major"></div>
            </div>
            <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">คาดว่าจะจบปี</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="expected_graduation"></div>
        </div>
    </section>

    <!-- 6 -->
    <section class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
        <div class="flex items-center gap-3 px-6 py-4 bg-gradient-to-r from-blue-50 to-sky-50 border-b border-slate-200"><div class="flex h-9 w-9 items-center justify-center rounded-full bg-blue-600 text-white text-sm font-bold">6</div><h2 class="text-lg font-bold text-slate-800">ประสบการณ์ทำงาน</h2></div>
        <div class="p-6 space-y-5">
            <div class="rounded-xl border border-slate-200 p-5">
                <div class="mb-4"><span class="rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-700">งานล่าสุด / บริษัท 1</span></div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5"><div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ชื่อบริษัท</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="company_1"></div><div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ประเภทธุรกิจ</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="business_type_1"></div></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ที่อยู่บริษัท</label><textarea class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100 resize-y" name="company_address_1" rows="2"></textarea></div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5"><div><label class="block text-sm font-semibold text-slate-700 mb-1.5">โทรศัพท์บริษัท</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="company_phone_1"></div><div><label class="block text-sm font-semibold text-slate-700 mb-1.5">เหตุผลที่ออกจากงาน</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="reason_leave_1"></div></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ลักษณะงานที่รับผิดชอบ</label><textarea class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100 resize-y" name="responsibility_1" rows="4"></textarea></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ผลงานที่โดดเด่น</label><textarea class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100 resize-y" name="achievement_1" rows="3"></textarea></div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5"><div><label class="block text-sm font-semibold text-slate-700 mb-1.5">วันเริ่มงาน</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="date" name="date_employed_1"></div><div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ถึงวันที่</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="date" name="date_to_1"></div></div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5"><div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ตำแหน่งแรกเข้า</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="first_position_1"></div><div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ตำแหน่งสุดท้าย</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="last_position_1"></div></div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-5"><div><label class="block text-sm font-semibold text-slate-700 mb-1.5">เงินเดือนแรกเข้า</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="starting_salary_1"></div><div><label class="block text-sm font-semibold text-slate-700 mb-1.5">เงินเดือนสุดท้าย</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="last_salary_1"></div><div><label class="block text-sm font-semibold text-slate-700 mb-1.5">รายได้อื่น ๆ</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="other_benefits_1"></div></div>
            </div>

            <div class="rounded-xl border border-slate-200 p-5">
                <div class="mb-4"><span class="rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-700">บริษัท 2</span></div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5"><div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ชื่อบริษัท</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="company_2"></div><div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ประเภทธุรกิจ</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="business_type_2"></div></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ที่อยู่บริษัท</label><textarea class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100 resize-y" name="company_address_2" rows="2"></textarea></div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5"><div><label class="block text-sm font-semibold text-slate-700 mb-1.5">โทรศัพท์บริษัท</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="company_phone_2"></div><div><label class="block text-sm font-semibold text-slate-700 mb-1.5">เหตุผลที่ออกจากงาน</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="reason_leave_2"></div></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ลักษณะงานที่รับผิดชอบ</label><textarea class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100 resize-y" name="responsibility_2" rows="4"></textarea></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ผลงานที่โดดเด่น</label><textarea class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100 resize-y" name="achievement_2" rows="3"></textarea></div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5"><div><label class="block text-sm font-semibold text-slate-700 mb-1.5">วันเริ่มงาน</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="date" name="date_employed_2"></div><div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ถึงวันที่</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="date" name="date_to_2"></div></div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5"><div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ตำแหน่งแรกเข้า</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="first_position_2"></div><div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ตำแหน่งสุดท้าย</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="last_position_2"></div></div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-5"><div><label class="block text-sm font-semibold text-slate-700 mb-1.5">เงินเดือนแรกเข้า</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="starting_salary_2"></div><div><label class="block text-sm font-semibold text-slate-700 mb-1.5">เงินเดือนสุดท้าย</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="last_salary_2"></div><div><label class="block text-sm font-semibold text-slate-700 mb-1.5">รายได้อื่น ๆ</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="other_benefits_2"></div></div>
            </div>
        </div>
    </section>

    <!-- 7 -->
    <section class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
        <div class="flex items-center gap-3 px-6 py-4 bg-gradient-to-r from-blue-50 to-sky-50 border-b border-slate-200"><div class="flex h-9 w-9 items-center justify-center rounded-full bg-blue-600 text-white text-sm font-bold">7</div><h2 class="text-lg font-bold text-slate-800">ฝึกอบรม / ภาษา / ความสามารถ</h2></div>
        <div class="p-6 space-y-5">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-5">
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">หลักสูตรอบรม 1</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="training_course_1"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ระยะเวลา</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="training_period_1"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">วุฒิที่ได้รับ</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="training_degree_1"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">สถาบัน</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="training_institute_1"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-5">
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">หลักสูตรอบรม 2</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="training_course_2"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ระยะเวลา</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="training_period_2"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">วุฒิที่ได้รับ</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="training_degree_2"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">สถาบัน</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="training_institute_2"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">คะแนน TOEIC</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="toeic_score"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">พิมพ์ดีดไทย คำ/นาที</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="typing_thai"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">พิมพ์ดีดอังกฤษ คำ/นาที</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="typing_english"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">พูดไทย</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="lang_th_speaking"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">เขียนไทย</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="lang_th_writing"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">เข้าใจไทย</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="lang_th_understanding"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">พูดอังกฤษ</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="lang_en_speaking"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">เขียนอังกฤษ</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="lang_en_writing"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">เข้าใจอังกฤษ</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="lang_en_understanding"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-5">
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ขับรถยนต์</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="drive_car"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">มีรถยนต์ส่วนตัว</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="own_car"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ใบขับขี่รถยนต์</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="car_license"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">เลขที่ใบขับขี่รถยนต์</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="car_license_no"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-5">
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ขับรถจักรยานยนต์</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="ride_motorcycle"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">มีรถจักรยานยนต์ส่วนตัว</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="own_motorcycle"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ใบขับขี่จักรยานยนต์</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="motorcycle_license"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">เลขที่ใบขับขี่จักรยานยนต์</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="motorcycle_license_no"></div>
            </div>
            <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ความสามารถใช้เครื่องใช้สำนักงาน</label><textarea class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100 resize-y" name="office_machine_skill" rows="2"></textarea></div>
            <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ความรู้พิเศษ</label><textarea class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100 resize-y" name="special_knowledge" rows="2"></textarea></div>
            <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ความสามารถใช้โปรแกรมคอมพิวเตอร์</label><textarea class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100 resize-y" name="computer_skills" rows="3"></textarea></div>
            <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ความสามารถพิเศษ / อื่น ๆ</label><textarea class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100 resize-y" name="special_ability" rows="3"></textarea></div>
        </div>
    </section>

    <!-- 8 -->
    <section class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
        <div class="flex items-center gap-3 px-6 py-4 bg-gradient-to-r from-blue-50 to-sky-50 border-b border-slate-200"><div class="flex h-9 w-9 items-center justify-center rounded-full bg-blue-600 text-white text-sm font-bold">8</div><h2 class="text-lg font-bold text-slate-800">ข้อมูลอื่น ๆ และ PDPA</h2></div>
        <div class="p-6 space-y-5">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">โรคประจำตัว / ความบกพร่อง</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="health_issue"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">เคยเข้ารักษาในโรงพยาบาลหรือไม่</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="hospitalized"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">สุขภาพโดยรวม</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="general_health"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">เคยถูกดำเนินคดีหรือไม่</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="legal_action"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">เคยถูกให้ออกจากงานหรือไม่</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="fired"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">มีญาติ/เพื่อนทำงานที่บริษัทหรือไม่</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="relative_in_company"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">สามารถไปปฏิบัติงานต่างจังหวัดได้หรือไม่</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="work_upcountry"></div>
                <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">มีหนี้ที่ถูกฟ้อง/บัตรเครดิตหรือไม่</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="debt_issue"></div>
            </div>
            <div><label class="block text-sm font-semibold text-slate-700 mb-1.5">ทราบข่าวการรับสมัครจาก</label><input class="w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-slate-800 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" type="text" name="source_apply"></div>
            <label class="flex items-start gap-3 rounded-xl border border-blue-200 bg-blue-50 p-4">
                <input type="checkbox" name="pdpa_consent" value="ยินยอม" class="mt-1 h-5 w-5 rounded border-slate-300">
                <span>
                    <span class="font-bold text-slate-800">ยินยอมตาม PDPA</span>
                    <span class="block text-sm font-normal text-slate-600">ยินยอมให้บริษัทเก็บ ใช้ และเปิดเผยข้อมูลส่วนบุคคลเพื่อการสมัครงาน</span>
                </span>
            </label>
        </div>
    </section>

    <div class="sticky bottom-0 z-20 -mx-4 border-t border-slate-200 bg-white/95 px-4 py-4 backdrop-blur">
        <div class="mx-auto flex max-w-7xl flex-col gap-3 md:flex-row md:items-center md:justify-end">
            <button class="inline-flex items-center justify-center rounded-xl bg-blue-600 px-6 py-3 font-bold text-white shadow-sm hover:bg-blue-700 transition" type="submit">ส่งใบสมัคร</button>
        </div>
    </div>

</form>
</main>

</body>
</html>
