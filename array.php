<?php

$mahasiswa = [

    [
        "Nama" => "Ken Jayakusuma",
        "Kelas" => "XII RPL 2",
        "No" => "28",
        "Jurusan" => "Rekayasa Perangkat Lunak"
    ],
    [
        "Nama" => "Ken Jayakusuma",
        "Kelas" => "XII RPL 2",
        "No" => "28",
        "Jurusan" => "Rekayasa Perangkat Lunak"
    ],
    [
        "Nama" => "Ken Bagus",
        "Kelas" => "Kelas 5 SD",
        "No" => "11",
        "Jurusan" => "Unknown"
    ]
];

$month = ["January", "June", "February", "March"];

echo "<br>";

print_r($month[0]);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>array</title>
</head>
<style>
    .kotak {
        background-color: salmon;
        padding: 10px;
        list-style: none;
        float: left;
        margin: 5px;
    }
</style>

<body>
    <h1>Daftar Siswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li><?= $mhs["Nama"] ?></li>
            <li><?= $mhs["No"] ?></li>
            <li><?= $mhs["Kelas"] ?></li>
            <li><?= $mhs["Jurusan"] ?></li>
        </ul>
    <?php endforeach; ?>


    <?php
    $angka = [1, 4, 5, 6, 9, 7, 10];

    ?>
    <ul>
        <?php foreach ($angka as $a) : ?>
            <li class="kotak"><?= $a ?></li>
        <?php endforeach; ?>

    </ul>

    <br>
    <br>
    <br>
    <br>
    <ul>
        <?php for ($i = 0; $i <= 7; $i++) : ?>
            <li><?= $angka[0]; ?></li>
        <?php endfor; ?>
    </ul>


</body>

</html>