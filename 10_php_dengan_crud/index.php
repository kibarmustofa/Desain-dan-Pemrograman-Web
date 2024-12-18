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

// Mengambil data dari tabel
$sql = "SELECT * FROM game_data";
$stmt = sqlsrv_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Game Collection</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Kuesioner Game Favorit</h1>
        <p>Data ini akan memberikan insight untuk pengembangan game ke depannya.</p>
    </header>

    <h1>Daftar Game</h1>

    <a href="create.php">Tambahkan Data</a>
    <div>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Genre Game</th>
            <th>Game Favorit</th>
            <th>Tahun Rilis</th>
            <th>Perangkat Bermain</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) : ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['genre_game']; ?></td>
                <td><?php echo $row['game_favorit']; ?></td>
                <td><?php echo $row['tahun_rilis']; ?></td>
                <td><?php echo $row['perangkat_bermain']; ?></td>
                <td>
                    <a href="update.php?id=<?php echo $row['id']; ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $row['id']; ?>">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
    </div>
</body>
</html>

<?php
sqlsrv_free_stmt($stmt);
sqlsrv_close($conn);
?>
