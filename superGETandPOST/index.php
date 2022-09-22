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
    <h1>Data Murid</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <a href="index2.php ?nama=<?= $mhs['Nama'] ?>&kelas=<?= $mhs['Kelas']; ?>&no=<?= $mhs['No']; ?>&jurusan=<?= $mhs['Jurusan']; ?>">
                    <?= $mhs["Nama"]; ?>
                </a>
            </li>
        </ul>
    <?php endforeach; ?>
</body>

</html>