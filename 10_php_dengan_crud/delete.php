<?php
$serverName = "WIN-CRQII76PBDO"; 
$connectionOptions = [
    "Database" => "game_favorite", 
    "Uid" => "", 
    "PWD" => "" 
];

$conn = sqlsrv_connect($serverName, $connectionOptions);
if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

$id = $_GET['id'];

$sql = "DELETE FROM game_data WHERE id = ?";
$params = [$id];
$stmt = sqlsrv_prepare($conn, $sql, $params);

if (sqlsrv_execute($stmt)) {
    header("Location: index.php");
    exit();
} else {
    echo "Gagal menghapus data.<br>";
    die(print_r(sqlsrv_errors(), true));
}

sqlsrv_free_stmt($stmt);
sqlsrv_close($conn);
?>