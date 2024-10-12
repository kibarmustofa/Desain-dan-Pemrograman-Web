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
        <br><br>
        <label for="email">Masukkan email:</label>
        <input type="email" id="email" name="email">
        <input type="submit" value="Kirim">
    </form>
    </form>
    <?php
        // Periksa apakagh dikirim ke post
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input = $_POST['input'];
            $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
            echo "Anda memasukkan: " . $input;
        }
         if (!empty($_POST["email"])) {
            $email = $_POST["email"];
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<p>Email yang valid: " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . "</p>";
            } else {
                echo "<p>Email tidak valid!</p>";
            }
        } else {
            echo "<p>Email tidak boleh kosong!</p>";
        }
    
    ?>
</body>
</html> 