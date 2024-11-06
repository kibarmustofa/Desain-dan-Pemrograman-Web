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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Kuesioner Game Favorit</h1>
        <p>Data ini akan memberikan insight untuk pengembangan game ke depannya.</p>
    </header>

        <h2>Edit Data Game</h2>
        <form method="post">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="<?php echo $row['nama']; ?>" required>
            
            <label for="genre_game">Genre Game:</label>
            <input type="text" id="genre_game" name="genre_game" value="<?php echo $row['genre_game']; ?>" required>
            
            <label for="game_favorit">Game Favorit:</label>
            <input type="text" id="game_favorit" name="game_favorit" value="<?php echo $row['game_favorit']; ?>" required>
            
            <label for="tahun_rilis">Tahun Rilis:</label>
            <input type="number" id="tahun_rilis" name="tahun_rilis" value="<?php echo $row['tahun_rilis']; ?>" required>
            
            <label for="perangkat_bermain">Perangkat Bermain:</label>
            <input type="text" id="perangkat_bermain" name="perangkat_bermain" value="<?php echo $row['perangkat_bermain']; ?>" required>
            
            <input type="submit" value="Perbarui">
        </form>
        <a href="index.php" class="back-link">Kembali</a>
</body>
</html>

<?php
sqlsrv_free_stmt($stmt);
sqlsrv_close($conn);
?>
