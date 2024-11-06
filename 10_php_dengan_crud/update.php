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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $genre_game = $_POST['genre_game'];
    $game_favorit = $_POST['game_favorit'];
    $tahun_rilis = $_POST['tahun_rilis'];
    $perangkat_bermain = $_POST['perangkat_bermain'];

    $sql = "UPDATE game_data SET nama = ?, genre_game = ?, game_favorit = ?, tahun_rilis = ?, perangkat_bermain = ? WHERE id = ?";
    $params = [$nama, $genre_game, $game_favorit, $tahun_rilis, $perangkat_bermain, $id];
    $stmt = sqlsrv_prepare($conn, $sql, $params);

    if (sqlsrv_execute($stmt)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Gagal memperbarui data.<br>";
        die(print_r(sqlsrv_errors(), true));
    }
} else {
    $sql = "SELECT * FROM game_data WHERE id = ?";
    $stmt = sqlsrv_prepare($conn, $sql, [$id]);
    sqlsrv_execute($stmt);
    $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Game</title>
</head>
<body>
    <h1>Edit Data Game</h1>
    <form method="post">
        Nama: <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required><br>
        Genre Game: <input type="text" name="genre_game" value="<?php echo $row['genre_game']; ?>" required><br>
        Game Favorit: <input type="text" name="game_favorit" value="<?php echo $row['game_favorit']; ?>" required><br>
        Tahun Rilis: <input type="number" name="tahun_rilis" value="<?php echo $row['tahun_rilis']; ?>" required><br>
        Perangkat Bermain: <input type="text" name="perangkat_bermain" value="<?php echo $row['perangkat_bermain']; ?>" required><br>
        <input type="submit" value="Perbarui">
    </form>
    <a href="index.php">Kembali</a>
</body>
</html>

<?php
sqlsrv_free_stmt($stmt);
sqlsrv_close($conn);
?>
