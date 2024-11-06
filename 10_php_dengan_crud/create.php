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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $genre_game = $_POST['genre_game'];
    $game_favorit = $_POST['game_favorit'];
    $tahun_rilis = $_POST['tahun_rilis'];
    $perangkat_bermain = $_POST['perangkat_bermain'];

    $sql = "INSERT INTO game_data (nama, genre_game, game_favorit, tahun_rilis, perangkat_bermain) VALUES (?, ?, ?, ?, ?)";
    $params = [$nama, $genre_game, $game_favorit, $tahun_rilis, $perangkat_bermain];
    $stmt = sqlsrv_prepare($conn, $sql, $params);

    if (sqlsrv_execute($stmt)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Gagal menambahkan data.<br>";
        die(print_r(sqlsrv_errors(), true));
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Game</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Kuesioner Game Favorit</h1>
        <p>Data ini akan memberikan insight untuk pengembangan game ke depannya.</p>
    </header>
    <h1>Tambah Data Game</h1>
    <form method="post">
        Nama: <input type="text" name="nama" required><br>
        Genre Game: <input type="text" name="genre_game" required><br>
        Game Favorit: <input type="text" name="game_favorit" required><br>
        Tahun Rilis: <input type="number" name="tahun_rilis" required><br>
        Perangkat Bermain: <input type="text" name="perangkat_bermain" required><br>
        <input type="submit" value="Tambahkan">
    </form>
    <a href="index.php">Kembali</a>
</body>
</html>

<?php
sqlsrv_close($conn);
?>
