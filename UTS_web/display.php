<!DOCTYPE html>
<html>
<head>
    <title>Kolase Gambar</title>
</head>
<body>

    <header>
        <h1>Kolase Gambar</h1>
    </header>

    <main>
        <section>
            
            <h2>Unggah Gambar Baru</h2>
            <form action="upload.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="file" id="file" required>
                <input type="submit" value="Unggah Gambar">
            </form>
        </section>

        <section>
            <!-- Kolase Gambar -->
            <h2>Kolase Karya</h2>
            <div class="grid-container" id="gallery-grid">
                <?php
                // Load semua file gambar dari folder uploads
                $files = glob('uploads/*.*');
                foreach ($files as $file) {
                    echo '<div class="grid-item">';
                    echo '<img src="' . $file . '" alt="Gambar Kolase">';
                    echo '</div>';
                }
                ?>
            </div>
        </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
