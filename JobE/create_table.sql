CREATE DATABASE IF NOT EXISTS jobe CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE jobe;

DROP TABLE IF EXISTS job_applications;

CREATE TABLE job_applications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ref_no VARCHAR(100) NULL,
    apply_date VARCHAR(50) NULL,

    position_1 VARCHAR(255) NULL,
    position_2 VARCHAR(255) NULL,
    expected_salary VARCHAR(100) NULL,
    starting_date VARCHAR(50) NULL,

    fullname_th VARCHAR(255) NULL,
    fullname_en VARCHAR(255) NULL,
    contact_address TEXT NULL,
    phone VARCHAR(100) NULL,
    email VARCHAR(255) NULL,
    current_staying VARCHAR(255) NULL,

    birth_date VARCHAR(50) NULL,
    age VARCHAR(50) NULL,
    place_of_birth VARCHAR(255) NULL,
    weight VARCHAR(50) NULL,
    height VARCHAR(50) NULL,
    blood_group VARCHAR(50) NULL,

    race VARCHAR(100) NULL,
    nationality VARCHAR(100) NULL,
    religion VARCHAR(100) NULL,

    id_card_no VARCHAR(100) NULL,
    id_card_expiry VARCHAR(50) NULL,
    id_card_issued_by VARCHAR(255) NULL,

    military_status VARCHAR(255) NULL,
    marital_status VARCHAR(255) NULL,

    emergency_name VARCHAR(255) NULL,
    emergency_relation VARCHAR(255) NULL,
    emergency_phone VARCHAR(100) NULL,

    father_name VARCHAR(255) NULL,
    father_occupation VARCHAR(255) NULL,
    father_phone VARCHAR(100) NULL,

    mother_name VARCHAR(255) NULL,
    mother_occupation VARCHAR(255) NULL,
    mother_phone VARCHAR(100) NULL,

    siblings_count VARCHAR(50) NULL,
    sibling_order VARCHAR(50) NULL,

    spouse_name VARCHAR(255) NULL,
    spouse_id_card VARCHAR(100) NULL,
    spouse_phone VARCHAR(100) NULL,
    spouse_workplace VARCHAR(255) NULL,
    children_count VARCHAR(50) NULL,

    education_level VARCHAR(255) NULL,
    institute VARCHAR(255) NULL,
    major VARCHAR(255) NULL,
    graduation_year VARCHAR(50) NULL,
    gpa VARCHAR(50) NULL,

    present_study_level VARCHAR(255) NULL,
    present_study_institute VARCHAR(255) NULL,
    present_study_major VARCHAR(255) NULL,
    expected_graduation VARCHAR(50) NULL,

    company_1 VARCHAR(255) NULL,
    business_type_1 VARCHAR(255) NULL,
    company_address_1 TEXT NULL,
    company_phone_1 VARCHAR(100) NULL,
    responsibility_1 TEXT NULL,
    achievement_1 TEXT NULL,
    date_employed_1 VARCHAR(50) NULL,
    date_to_1 VARCHAR(50) NULL,
    first_position_1 VARCHAR(255) NULL,
    last_position_1 VARCHAR(255) NULL,
    starting_salary_1 VARCHAR(100) NULL,
    last_salary_1 VARCHAR(100) NULL,
    other_benefits_1 VARCHAR(100) NULL,
    reason_leave_1 TEXT NULL,

    company_2 VARCHAR(255) NULL,
    business_type_2 VARCHAR(255) NULL,
    company_address_2 TEXT NULL,
    company_phone_2 VARCHAR(100) NULL,
    responsibility_2 TEXT NULL,
    achievement_2 TEXT NULL,
    date_employed_2 VARCHAR(50) NULL,
    date_to_2 VARCHAR(50) NULL,
    first_position_2 VARCHAR(255) NULL,
    last_position_2 VARCHAR(255) NULL,
    starting_salary_2 VARCHAR(100) NULL,
    last_salary_2 VARCHAR(100) NULL,
    other_benefits_2 VARCHAR(100) NULL,
    reason_leave_2 TEXT NULL,

    training_course_1 VARCHAR(255) NULL,
    training_period_1 VARCHAR(100) NULL,
    training_degree_1 VARCHAR(255) NULL,
    training_institute_1 VARCHAR(255) NULL,
    training_course_2 VARCHAR(255) NULL,
    training_period_2 VARCHAR(100) NULL,
    training_degree_2 VARCHAR(255) NULL,
    training_institute_2 VARCHAR(255) NULL,

    toeic_score VARCHAR(50) NULL,
    lang_th_speaking VARCHAR(50) NULL,
    lang_th_writing VARCHAR(50) NULL,
    lang_th_understanding VARCHAR(50) NULL,
    lang_en_speaking VARCHAR(50) NULL,
    lang_en_writing VARCHAR(50) NULL,
    lang_en_understanding VARCHAR(50) NULL,

    drive_car VARCHAR(50) NULL,
    own_car VARCHAR(50) NULL,
    car_license VARCHAR(50) NULL,
    car_license_no VARCHAR(100) NULL,
    ride_motorcycle VARCHAR(50) NULL,
    own_motorcycle VARCHAR(50) NULL,
    motorcycle_license VARCHAR(50) NULL,
    motorcycle_license_no VARCHAR(100) NULL,

    typing_thai VARCHAR(50) NULL,
    typing_english VARCHAR(50) NULL,
    office_machine_skill TEXT NULL,
    special_knowledge TEXT NULL,
    computer_skills TEXT NULL,
    special_ability TEXT NULL,

    health_issue VARCHAR(255) NULL,
    hospitalized VARCHAR(255) NULL,
    general_health VARCHAR(255) NULL,
    legal_action VARCHAR(255) NULL,
    terminated VARCHAR(255) NULL,
    relative_in_company VARCHAR(255) NULL,
    work_upcountry VARCHAR(255) NULL,
    debt_issue VARCHAR(255) NULL,

    source_apply VARCHAR(255) NULL,
    pdpa_consent VARCHAR(50) NULL,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO job_applications (
    ref_no, apply_date, position_1, position_2, expected_salary, starting_date,
    fullname_th, fullname_en, contact_address, phone, email, current_staying,
    birth_date, age, place_of_birth, weight, height, blood_group,
    race, nationality, religion, id_card_no, id_card_expiry, id_card_issued_by,
    military_status, marital_status,
    emergency_name, emergency_relation, emergency_phone,
    father_name, father_occupation, father_phone,
    mother_name, mother_occupation, mother_phone,
    siblings_count, sibling_order,
    education_level, institute, major, graduation_year, gpa,
    company_1, business_type_1, responsibility_1, date_employed_1, date_to_1,
    first_position_1, last_position_1, starting_salary_1, last_salary_1, other_benefits_1, reason_leave_1,
    toeic_score, computer_skills, source_apply, pdpa_consent
) VALUES (
    'REF-001', '29/05/2026', 'พนักงานคลังสินค้า', 'สต๊อก OUT', '12000', '2026-06-02',
    'อริสา คำพุฒ', 'Arisa Khamphut', '1099/77 เขตลาดกระบัง กรุงเทพฯ', '0965618837', '122541arisa@gmail.com', 'บ้านเช่า',
    '1998-04-12', '28', 'พิษณุโลก', '67', '164', 'A',
    'ไทย', 'ไทย', 'พุทธ', '1650801213153', '2031-04-11', 'อำเภอวังทอง',
    'ได้รับยกเว้น', 'แต่งงานแล้ว',
    'นาย รัตนพงษ์ จันหม่อน', 'สามี/ภรรยา', '0809080583',
    'นาย เหมือน คำพุฒ', 'รับจ้าง', '0946988805',
    'นาง ประจวบ คำพุฒ', 'รับจ้าง', '0946988805',
    '2', '2',
    'มัธยมศึกษา', 'โรงเรียนบ้านแม่ระกา', 'สายสามัญ', '2014', '1.77',
    'DHL', 'ขนส่ง', 'รับงานจากลูกค้า', '2017-04-03', '2021-05-20',
    'ออร์ไซร์', 'ออร์ไซร์', '13000', '13000', '4000', 'หมดสัญญาจ้าง',
    '1.77', 'พอใช้', 'ไม่มี', 'ยินยอม'
);
