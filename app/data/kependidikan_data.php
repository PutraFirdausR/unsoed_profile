<?php

require_once __DIR__ . '/../config/database.php';

try {
    $stmt = $pdo->query("SELECT * FROM staff ORDER BY department ASC, name ASC");
    $all_staff = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $grouped_staff = [];
    foreach ($all_staff as $staf) {
        $department = $staf['department'];
        if (!isset($grouped_staff[$department])) {
            $grouped_staff[$department] = [];
        }
        $grouped_staff[$department][] = $staf;
    }

    $departments = array_keys($grouped_staff);

} catch (PDOException $e) {
    $grouped_staff = [];
    $departments = [];
}

return [
    'grouped_staff' => $grouped_staff,
    'departments'   => $departments
];