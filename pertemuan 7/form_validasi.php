<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color:red;"></span><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <span id="email-error" style="color:red;"></span><br>

        <input type="submit" value="Submit">
    </form>

    <div id="hasil"></div>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(e) {
                e.preventDefault();

                var nama = $("#nama").val();
                var email = $("#email").val();
                var valid = true;

                // Reset pesan kesalahan
                $("#nama-error").text("");
                $("#email-error").text("");

                // Validasi Nama
                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                }

                // Validasi Email menggunakan tipe input "email"
                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                } else if (!$("#email")[0].checkValidity()) {
                    $("#email-error").text("Format email tidak valid.");
                    valid = false;
                }

                // Jika validasi berhasil, kirim data dengan AJAX
                if (valid) {
                    $.ajax({
                        url: "proses_validasi.php",
                        type: "POST",
                        data: { nama: nama, email: email },
                        success: function(response) {
                            $("#hasil").html(response);
                        },
                        error: function() {
                            $("#hasil").html("Terjadi kesalahan saat mengirim data.");
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
