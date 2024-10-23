<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['file'])) {
        $fileName = $_POST['file'];
        $filePath = 'uploads/' . $fileName;
        
        if (file_exists($filePath)) {
            if (unlink($filePath)) {
                echo "File berhasil dihapus.";
            } else {
                echo "Gagal menghapus file.";
            }
        } else {
            echo "File tidak ditemukan.";
        }
    } else {
        echo "Tidak ada file yang diberikan.";
    }
}
?>
