<?php
if (isset($_POST["submit"])) {
    $target_dir = "uploads/"; // Direktori tujuan untuk menyimpan file
    $target_file = $target_dir . basename($_FILES["myfile"]["name"]);
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $allowedExtensions = array("txt", "pdf", "doc", "docx");
    $maxsize = 3 * 1024 * 1024;

    if (in_array($fileType, $allowedExtensions) && $_FILES["myfile"]["size"] <= $maxsize) {
        if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file)) {
            echo "File berhasil diunggah.<br>";

            //  Menampilkan gambar thumbnail dengan lebar 200px
            // echo '<img src="' . $target_file . '" width="200" style="height: auto;">';
        } else {
            echo "Gagal mengunggah file.";
        }
    } else {
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    }
}
?>