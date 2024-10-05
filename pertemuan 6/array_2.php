<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil Dosen</title>
    <style>
      table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }
        th, td {
            padding: 12px;
            border: 1px solid lightgray; 
            text-align: left;
        }
        th {
            background-color: green; 
            color: white;
        }
        tr:nth-child(even) {
            background-color: lightgray; 
        }
    </style>
</head>
<body>

<?php
    $Dosen = [
        "nama" => "Elok Nur Hamdana",
        "domisili" => "Malang",
        "jenis_kelamin" => "Perempuan"
    ];
?>

<table>
    <tr>
        <th>Label</th>
        <th>Data</th>
    </tr>
    <tr>
        <td>Nama</td>
        <td><?php echo $Dosen["nama"]; ?></td>
    </tr>
    <tr>
        <td>Domisili</td>
        <td><?php echo $Dosen["domisili"]; ?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td><?php echo $Dosen["jenis_kelamin"]; ?></td>
    </tr>
</table>

</body>
</html>
