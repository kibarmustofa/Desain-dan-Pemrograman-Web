<?php
if (isset($_FILES['file'])) {
    $errors = array();
    $extensions = array("jpg", "jpeg", "png", "gif"); // Ekstensi gambar yang diizinkan
    $maxSize = 2097152; 

    // Menghitung jumlah file yang diunggah
    $totalFiles = count($_FILES['file']['name']);

    for ($i = 0; $i < $totalFiles; $i++) {
        $file_name = $_FILES['file']['name'][$i];
        $file_size = $_FILES['file']['size'][$i];
        $file_tmp = $_FILES['file']['tmp_name'][$i];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION)); // Menggunakan pathinfo untuk mendapatkan ekstensi file

        
        if (!in_array($file_ext, $extensions)) {
            $errors[] = "$file_name: Ekstensi file yang diizinkan hanya JPG, JPEG, PNG, dan GIF.";
        }

        
        if ($file_size > $maxSize) {
            $errors[] = "$file_name: Ukuran file tidak boleh lebih dari 2 MB.";
        }

      
        if (empty($errors)) {
            move_uploaded_file($file_tmp, "documents/" . $file_name);
            echo "$file_name berhasil diunggah.<br>";
        } else {
            echo implode("<br>", $errors) . "<br>";
            $errors = array(); 
        }
    }
}
?>