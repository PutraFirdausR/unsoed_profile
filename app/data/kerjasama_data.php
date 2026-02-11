<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "unsoed_db"; 

try {
    $conn = new mysqli($host, $user, $pass, $db);
    
    if ($conn->connect_error) {
        throw new Exception("Koneksi gagal: " . $conn->connect_error);
    }
} catch (Exception $e) {
    die("Maaf, terjadi kesalahan koneksi database.");
}

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
                'level' => $row['level'] ?? '-',
                'judul' => $row['judul'],
                'waktu' => $row['periode'] 
            ];
        }
    }
    return $data;
}

$researchData  = getKerjasama($conn, 'penelitian');
$communityData = getKerjasama($conn, 'pengabdian');
$educationData = getKerjasama($conn, 'pendidikan');

$conn->close();
?>