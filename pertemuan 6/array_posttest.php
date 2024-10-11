<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 auto;
            
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        .table-container {
            background-color: yellow;
            display: flex;
            flex-direction: column;
            
        } 
        #toggleButton {
            border: none;
            background-color: inherit;
            cursor: pointer;
            padding: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h2>DATA SISWA</h2>

    <div class="table-container">
        <button id="toggleButton">Tampilkan Data Siswa</button>
        <div id="dataSiswa" style="display: none;">
            <table>
                <tr>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                </tr>
                <?php
                $siswa = array(
                    array("kibar", 20, "TI-2F", "sukun"),
                    array("ferdi", 19, "TI-2E", "pakis"),
                    array("yui", 21, "TI-2G", "melati"),
                    array("uara", 18, "TI-2I", "angsa"),
                );

                $totalUmur = 0; 
                $jumlahSiswa = count($siswa);

                foreach ($siswa as $dataSiswa) {
                    echo "<tr>";
                    $totalUmur += $dataSiswa[1]; 
                    foreach ($dataSiswa as $value) {
                        echo "<td>$value</td>";
                    }
                    echo "</tr>";
                }

                $rataRataUmur = $totalUmur / $jumlahSiswa; 
                ?>
            </table>
            <p>Rata-rata umur siswa: <?php echo number_format($rataRataUmur, 2); ?></p>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $("#toggleButton").click(function(){
                $("#dataSiswa").slideToggle();

                if ($("#dataSiswa").is(":visible")) {
                    $("#toggleButton").text("Sembunyikan Data Siswa");
                } else {
                    $("#toggleButton").text("Tampilkan Data Siswa");
                }
            });
        });
    </script>
</body>
</html>
