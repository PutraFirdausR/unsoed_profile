<!DOCTYPE html>
<html lang="<?= $_SESSION['bahasa'] ?? 'id'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Fakultas</title>
    <link rel="stylesheet" href="/unsoed_profile/public/assets/css/output.css">
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <nav>
        <?php require __DIR__ . '/../components/navbar.php'; ?>
    </nav>
    
    <main class="pt-20 min-h-screen">
        <?php 
            $fileView = __DIR__ . '/../views/' . $page . '.php';
            
            if (file_exists($fileView)) {
                require $fileView;
            } else {
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

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 800, // Kecepatan animasi (800ms)
        once: false,    // Animasi cuma jalan sekali saat scroll ke bawah
      });
    </script>
</body>
</html>