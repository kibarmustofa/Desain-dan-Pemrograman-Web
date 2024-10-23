<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file = $_FILES['image'];

    $allowedTypes = ['image/png', 'image/jpeg', 'image/gif', 'image/jpg'];
    if (in_array($file['type'], $allowedTypes) && $file['size'] <= 2 * 1024 * 1024) {
        $uploadDir = 'uploads/';
        $fileName = basename($file['name']);
        $filePath = $uploadDir . $fileName;

        
        if (move_uploaded_file($file['tmp_name'], $filePath)) {
            echo "Karya berhasil diunggah! <br>";
            echo '<img src="' . $filePath . '" alt="Uploaded Image" style="max-width: 300px;"/>';
            echo '<br><a href="index.php">Kembali ke halaman utama</a>';
        } else {
            echo "Gagal mengunggah karya.";
        }
    } else {
        echo "File tidak valid atau terlalu besar.";
        echo '<br><a href="index.php">Kembali ke halaman utama</a>';
    }
}
?>
