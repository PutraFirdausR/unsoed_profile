<?php
// FILE: app/data/pendidik_data.php

require_once __DIR__ . '/../config/database.php';

try {
    // 1. Ambil data, urutkan berdasarkan departemen lalu nama
    $stmt = $pdo->query("SELECT * FROM lecturers ORDER BY department ASC, name ASC");
    $all_lecturers = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // 2. Kelompokkan data per Departemen
    $grouped_lecturers = [];
    foreach ($all_lecturers as $dosen) {
        $grouped_lecturers[$dosen['department']][] = $dosen;
    }

    // 3. LOGIKA CUSTOM SORT: Pindahkan 'Dosen Baru CPNS 2025' ke paling bawah
    $special_key = 'Dosen Baru CPNS 2025';
    if (array_key_exists($special_key, $grouped_lecturers)) {
        $temp_data = $grouped_lecturers[$special_key];
        unset($grouped_lecturers[$special_key]); // Hapus dari posisi lama
        $grouped_lecturers[$special_key] = $temp_data; // Masukkan kembali di akhir array
    }

    $departments = array_keys($grouped_lecturers);

} catch (PDOException $e) {
    // Error handling sederhana
    $grouped_lecturers = [];
    $departments = [];
}

return [
    'grouped_lecturers' => $grouped_lecturers,
    'departments'       => $departments
];