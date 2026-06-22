<?php
require 'db.php';

function post_value($name) {
    return trim($_POST[$name] ?? '');
}

function post_date($name) {
    $value = post_value($name);
    return $value === '' ? '' : $value;
}

$fields = [
    'apply_date',
    'position_1',
    'position_2',
    'expected_salary',
    'starting_date',
    'fullname_th',
    'fullname_en', 
    'contact_address', 
    'phone', 
    'email', 
    'current_staying',
    'birth_date', 
    'age', 
    'place_of_birth', 
    'weight', 'height', 
    'blood_group',
    'race', 
    'nationality', 
    'religion',
    'id_card_no', 
    'id_card_expiry', 
    'id_card_issued_by',
    'military_status', 
    'marital_status',
    'parent_status',
    'emergency_name', 
    'emergency_relation', 'emergency_phone',
    'father_name', 
    'father_occupation', 
    'father_phone',
    'mother_name', 
    'mother_occupation', 
    'mother_phone',
    'siblings_count', 
    'sibling_order',
    'spouse_status', 
    'spouse_name', 
    'spouse_id_card', 
    'spouse_phone', 
    'spouse_workplace', 
    'children_count',
    'education_level', 
    'children_over',
    'children_notschool',
    'children_school',
    'institute', 
    'major', 
    'graduation_year', 
    'gpa',
    'present_study_level', 
    'present_study_institute', 
    'present_study_major', 
    'expected_graduation',
    'company_1', 
    'business_type_1', 
    'company_address_1', 
    'company_phone_1', 
    'responsibility_1', 
    'achievement_1',
    'date_employed_1', 
    'date_to_1', 
    'first_position_1', 
    'last_position_1',
    'starting_salary_1', 
    'last_salary_1', 
    'other_benefits_1', 
    'reason_leave_1',
    'company_2', 
    'business_type_2', 
    'company_address_2', 
    'company_phone_2', 
    'responsibility_2', 
    'achievement_2',
    'date_employed_2', 
    'date_to_2', 
    'first_position_2', 
    'last_position_2',
    'starting_salary_2', 
    'last_salary_2', 
    'other_benefits_2', 
    'reason_leave_2',
    'training_course_1', 
    'training_period_1', 
    'training_degree_1', 
    'training_institute_1',
    'training_course_2', 
    'training_period_2', 
    'training_degree_2', 
    'training_institute_2',
    'toeic_score',
    'lang_th_speaking', 
    'lang_th_writing', 
    'lang_th_understanding',
    'lang_en_speaking', 
    'lang_en_writing', 
    'lang_en_understanding',
    'drive_car', 
    'own_car', 
    'car_license', 
    'car_license_no',
    'ride_motorcycle', 
    'own_motorcycle', 
    'motorcycle_license', 
    'motorcycle_license_no',
    'typing_thai', 
    'typing_english', 
    'office_machine_skill', 
    'special_knowledge', 
    'computer_skills', 
    'special_ability',
    'health_issue', 
    'hospitalized', 
    'general_health', 
    'legal_action', 
    'fired', 
    'relative_in_company', 
    'work_upcountry', 
    'debt_issue',
    'source_apply',
    'pdpa_consent'
];

$data = [];
foreach ($fields as $field) {
    $data[$field] = post_value($field);
}
$data['pdpa_consent'] = isset($_POST['pdpa_consent']) ? 'ยินยอม' : 'ไม่ยินยอม';

if ($data['fullname_th'] === '' || $data['phone'] === '' || $data['position_1'] === '') {
    die('กรุณากรอกชื่อ-นามสกุล, เบอร์โทร และตำแหน่งที่สมัครให้ครบ');
}

$columns = $fields;

$columnSql = '`' . implode('`, `', $columns) . '`';
$placeholderSql = implode(', ', array_fill(0, count($columns), '?'));
$sql = "INSERT INTO job_applications ($columnSql) VALUES ($placeholderSql)";

$stmt = $conn->prepare($sql);
if (!$stmt) {
    die('Prepare failed: ' . $conn->error . '<br>SQL: ' . htmlspecialchars($sql));
}

$values = [];
foreach ($columns as $column) {
    $values[] = $data[$column] ?? '';
}
$types = str_repeat('s', count($values));
$stmt->bind_param($types, ...$values);

if (!$stmt->execute()) {
    die('Execute failed: ' . $stmt->error);
}

header('Location: admin.php');
exit;
?>
