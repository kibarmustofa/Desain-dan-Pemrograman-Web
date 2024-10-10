<?php

$data = array ("nama" => "Jane", "usia" => 25);
if (isset($data["nama"])){
    echo "nama: " . $data["nama"];
}else{
    echo "variabel 'nama' tidak ditemukan dalam array. ";
}

?>