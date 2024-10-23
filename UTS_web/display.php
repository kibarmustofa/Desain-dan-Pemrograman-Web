<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Galeri Karya Ilustrasi</title>
</head>
<body>
    <header>
        <h1>Galeri Karya Ilustrasi</h1>
    </header>

    <main>
        <section id="gallery-section">
            <div id="gallery">
                <?php
                // Load karya ilustrasi dari folder uploads
                $files = glob('uploads/*.*');
                foreach ($files as $file) {
                    echo '<div class="gallery-item">';
                    echo '<img src="' . $file . '" alt="Karya Ilustrasi">';
                    echo '</div>';
                }
                ?>
            </div>
        </section>
        <a href="index.php">Kembali ke halaman utama</a>
    </main>
</body>
</html>
