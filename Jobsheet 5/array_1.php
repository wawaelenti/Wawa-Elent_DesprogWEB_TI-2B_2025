<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Array Terindeks</h2>
<?php
    //Membuat array 
    $Listdosen=["Elok Nur Hamdana", "Unggul Pamenag", "Bagas Nugraha"];

    //aksess dengan index manual
    echo $Listdosen[2] . "<br>";
    echo $Listdosen[0] . "<br>";
    echo $Listdosen[1] . "<br><br>";

    //akses dengan loop 
    echo "<h2>Menggunakan loop:</h2><br>";
    for ($i = 0; $i < count($Listdosen); $i++) {
        echo $Listdosen[$i]. "<br>";
    }

?>
</body>
</html>