<?php
// membuat fungsi
function perkenalan($nama, $salam = "Assalamualaikum"){
    echo $salam . ". ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

// memanggil fungsi yang sudah dibuat
perkenalan("Hamdan", "Hallo");

echo "<hr>";

$saya = "Kibar";
$ucapanSalam = "Selamat pagi";

// memanggil lagi taboa mengisi parameter salam
perkenalan($saya);
?>
