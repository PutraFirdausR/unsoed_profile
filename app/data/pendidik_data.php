<?php

require_once __DIR__ . '/../config/database.php';

try {
    $stmt = $pdo->query("SELECT * FROM lecturers ORDER BY department ASC, name ASC");
    $all_lecturers = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $grouped_lecturers = [];
    foreach ($all_lecturers as $dosen) {
        $grouped_lecturers[$dosen['department']][] = $dosen;
    }

    $special_key = 'Dosen Baru CPNS 2025';
    if (array_key_exists($special_key, $grouped_lecturers)) {
        $temp_data = $grouped_lecturers[$special_key];
        unset($grouped_lecturers[$special_key]); 
        $grouped_lecturers[$special_key] = $temp_data; 
    }

    $departments = array_keys($grouped_lecturers);

} catch (PDOException $e) {
    $grouped_lecturers = [];
    $departments = [];
}

return [
    'grouped_lecturers' => $grouped_lecturers,
    'departments'       => $departments
];