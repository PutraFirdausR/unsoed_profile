<?php
// FILE: app/data/kependidikan_data.php

require_once __DIR__ . '/../config/database.php';

try {
    // 1. Ambil data, urutkan berdasarkan departemen lalu nama
    $stmt = $pdo->query("SELECT * FROM staff ORDER BY department ASC, name ASC");
    $all_staff = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // 2. Kelompokkan data per bagian (Department)
    $grouped_staff = [];
    foreach ($all_staff as $staf) {
        $department = $staf['department'];
        // Pastikan key ada
        if (!isset($grouped_staff[$department])) {
            $grouped_staff[$department] = [];
        }
        $grouped_staff[$department][] = $staf;
    }

    // 3. Ambil daftar nama departemen untuk tombol filter
    $departments = array_keys($grouped_staff);

} catch (PDOException $e) {
    // Fallback jika error (bisa ditambahkan logging disini)
    $grouped_staff = [];
    $departments = [];
}

return [
    'grouped_staff' => $grouped_staff,
    'departments'   => $departments
];