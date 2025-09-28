<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Data Dosen</title>
    <style>
        /* Style tabel internal CSS */
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid #999;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        caption {
            font-size: 1.3em;
            margin-bottom: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
        $Dosen = [
            'Nama' => 'Elok Nur Hamdana',
            'Domisili' => 'Malang',
            'Jenis Kelamin' => 'Perempuan'
        ];
    ?>

    <table>
        <caption>Data Dosen</caption>
        <tr>
            <th>Keterangan</th>
            <th>Isi</th>
        </tr>
        <tr>
            <td>Nama</td>
            <td><?php echo $Dosen['Nama']; ?></td>
        </tr>
        <tr>
            <td>Domisili</td>
            <td><?php echo $Dosen['Domisili']; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?php echo $Dosen['Jenis Kelamin']; ?></td>
        </tr>
    </table>
</body>
</html>
