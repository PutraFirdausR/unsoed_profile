<?php
// FILE: app/data/kerjasama_data.php

// --- KONFIGURASI DATABASE ---
$host = "localhost";
$user = "root";
$pass = "";
$db   = "unsoed_db"; 

// Buat koneksi (Menggunakan Try-Catch untuk error handling yang lebih baik)
try {
    $conn = new mysqli($host, $user, $pass, $db);
    
    if ($conn->connect_error) {
        throw new Exception("Koneksi gagal: " . $conn->connect_error);
    }
} catch (Exception $e) {
    // Pada production, jangan tampilkan error detail ke user
    die("Maaf, terjadi kesalahan koneksi database.");
}

// Fungsi bantu ambil data
function getKerjasama($conn, $kategori) {
    $data = [];
    $kategori = $conn->real_escape_string($kategori);
    $sql = "SELECT * FROM data_kerjasama WHERE kategori = '$kategori' ORDER BY id ASC";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $no = 1;
        while($row = $result->fetch_assoc()) {
            $data[] = [
                'no'    => $no++, 
                'mitra' => $row['mitra'],
                'level' => $row['level'] ?? '-', // Fallback jika kolom kosong
                'judul' => $row['judul'],
                'waktu' => $row['periode'] 
            ];
        }
    }
    return $data;
}

// Ambil data ke variabel
$researchData  = getKerjasama($conn, 'penelitian');
$communityData = getKerjasama($conn, 'pengabdian');
$educationData = getKerjasama($conn, 'pendidikan');

// Tutup koneksi
$conn->close();
?>