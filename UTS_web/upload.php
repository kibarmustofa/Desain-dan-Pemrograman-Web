<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $file = $_FILES['file'];

    // Validasi tipe file
    $allowedTypes = ['image/png', 'image/jpeg'];
    if (in_array($file['type'], $allowedTypes) && $file['size'] <= 2 * 1024 * 1024) {
        $uploadDir = 'uploads/';
        $fileName = basename($file['name']);
        $filePath = $uploadDir . $fileName;

        // Memindahkan file ke folder uploads
        if (move_uploaded_file($file['tmp_name'], $filePath)) {
            echo "Karya berhasil diunggah!";
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
