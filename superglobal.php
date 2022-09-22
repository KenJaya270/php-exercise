<?php

    //Masukin data ke $_GET
    // $_GET["nama"] = 'Ken Jayakusuma';

    // $_GET["jurusan"] = 'Rekayasa Perangkat Lunak';
    
    var_dump($_GET);

    //Bisa juga dengan memasukan data melalui url dengan cara ketik diakhir url //
    //?'nama_key'='datanya'

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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($mahasiswa as $mhs) :?>
        <ul>
            <li><?= $mhs["Nama"];?></li>
            <li><?= $mhs["No"];?></li>
            <li><?= $mhs["Kelas"];?></li>
            <li><?= $mhs["Jurusan"];?></li>
        </ul>
    <?php endforeach;?>    

</body>
</html>