<!DOCTYPE html>
<html lang="<?= $_SESSION['bahasa'] ?? 'id'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Fakultas</title>
    <link rel="stylesheet" href="/unsoed_profile/public/assets/css/output.css">
</head>
<body>
    <nav>
        <?php require __DIR__ . '/../components/navbar.php'; ?>
    </nav>
    
    <main class="pt-20 min-h-screen">
        <?php 
            // Cek apakah file view yang diminta benar-benar ada?
            $fileView = __DIR__ . '/../views/' . $page . '.php';
            
            if (file_exists($fileView)) {
                require $fileView;
            } else {
                // Jika file view fisik benar-benar tidak ada (misal $page='home' tapi home.php hilang)
                // Kita load view 404 sebagai cadangan
                if(file_exists(__DIR__ . '/../views/404.php')) {
                    require __DIR__ . '/../views/404.php';
                } else {
                    echo "<div class='container mx-auto mt-20 text-center text-red-500'>";
                    echo "<h1>Error Fatal: File view tidak ditemukan!</h1>";
                    echo "</div>";
                }
            }
        ?>
    </main>

    <script src="/unsoed_profile/public/assets/js/counter.js"></script>
    
    <footer>
        <?php require __DIR__ . '/../components/footer.php'; ?>
    </footer>
    
    <script src="/unsoed_profile/public/assets/js/app.js"></script>
</body>
</html>