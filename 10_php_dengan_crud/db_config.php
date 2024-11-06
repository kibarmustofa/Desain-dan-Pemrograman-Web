<?php
$serverName = "WIN-CRQII76PBDO";//nama server ketika konek
$connectionOptions = [
    "Database" => "game_favorite", //"nama database"
    "Uid" => "", 
    "PWD" => "" 
];
$conn = sqlsrv_connect($serverName, $connectionOptions);
if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}
echo "Koneksi berhasil!";// ngecek konek g?
?>