<!DOCTYPE html>
<html>
<head>
    <title>Form Input Aman</title>
</head>
<body>
    <h2>Form Input</h2>

    <form method="post" action="">
        <label for="input">Masukkan sesuatu:</label>
        <input type="text" id="input" name="input">
        <input type="submit" value="Submit">
    </form>
    <?php
        // Periksa apakagh dikirim ke post
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input = $_POST['input'];
            $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
            echo "Anda memasukkan: " . $input;
        }
        
    ?>
</body>
</html> 