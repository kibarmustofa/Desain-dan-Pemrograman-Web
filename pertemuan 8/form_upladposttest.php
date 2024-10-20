\<!DOCTYPE html>
<html>
<head>
    <title>Data Game Favorit</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        form {
            background-color: #ffffff;
            border: 1px solid #dddddd;
            padding: 20px;
            max-width: 600px;
            margin: 0 auto 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            color: #333333;
        }

        label {
            display: inline-block;
            margin: 10px 0 5px;
            color: #333333;
        }

        input[type="text"],
        input[type="number"] {
            width: calc(100% - 20px);
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        .error-message {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            background-color: #f9f9f9;
            margin: 8px 0;
            padding: 10px;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
        }

        ul li strong {
            color: #555555;
        }
    </style>
</head>
<body>

<?php
$pesanError = '';
$nama = [];
$game = [];
$genre = [];
$jumlahOrang = isset($_POST['jumlahOrang']) ? $_POST['jumlahOrang'] : '';
?>

<form method="post" action="">
    <label for="jumlahOrang">Masukkan jumlah orang:</label>
    <input type="number" name="jumlahOrang" id="jumlahOrang" value="<?php echo $jumlahOrang; ?>">
    <input type="submit" name="lanjut" value="Lanjut">
    <div class="error-message"><?php echo $pesanError; ?></div>
</form>

<?php
if (isset($jumlahOrang) && $jumlahOrang > 0) {
    echo '<form method="post" action="">';
    echo '<input type="hidden" name="jumlahOrang" value="' . $jumlahOrang . '">';
    for ($i = 0; $i < $jumlahOrang; $i++) {
        echo '<label for="nama_' . $i . '">Nama:</label>';
        echo '<input type="text" name="nama_' . $i . '" id="nama_' . $i . '" value="' . (isset($nama[$i]) ? $nama[$i] : '') . '" required>';
        echo '<label for="game_' . $i . '">Game Favorit:</label>';
        echo '<input type="text" name="game_' . $i . '" id="game_' . $i . '" value="' . (isset($game[$i]) ? $game[$i] : '') . '" required>';
        echo '<label for="genre_' . $i . '">Genre:</label>';
        echo '<input type="text" name="genre_' . $i . '" id="genre_' . $i . '" value="' . (isset($genre[$i]) ? $genre[$i] : '') . '" required>';
        echo '<br><br>';
    }
    echo '<input type="submit" name="kirimData" value="Submit">';
    echo '<div class="error-message">' . $pesanError . '</div>';
    echo '</form>';
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['lanjut'])) {
        if (empty($jumlahOrang) || !is_numeric($jumlahOrang) || $jumlahOrang <= 0) {
            $pesanError = 'Masukkan jumlah orang yang valid!';
        }
    } elseif (isset($_POST['kirimData'])) {
        $jumlahOrang = $_POST['jumlahOrang'];
        $valid = true;

        for ($i = 0; $i < $jumlahOrang; $i++) {
            $nama[$i] = trim($_POST["nama_$i"]);
            $game[$i] = trim($_POST["game_$i"]);
            $genre[$i] = trim($_POST["genre_$i"]);
            if (empty($nama[$i]) || empty($game[$i]) || empty($genre[$i])) {
                $valid = false;
                $pesanError = 'Semua kolom nama, game, dan genre harus diisi!';
                break;
            }
        }

        if ($valid) {
            echo "<h2>Data yang Anda masukkan:</h2>";
            echo "<ul>";
            for ($i = 0; $i < $jumlahOrang; $i++) {
                echo "<li><strong>Nama:</strong> " . $nama[$i] . " | <strong>Game Favorit:</strong> " . $game[$i] . " | <strong>Genre:</strong> " . $genre[$i] . "</li>";
            }
            echo "</ul>";
        }
    }
}
?>

</body>
</html>
