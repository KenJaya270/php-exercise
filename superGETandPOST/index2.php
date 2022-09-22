<?php
if (!isset($_GET['nama']) || !isset($_GET['no']) || !isset($_GET['kelas']) || !isset($_GET['jurusan'])) {
    header("Location: index.php");
    exit;
}

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
    <h1>Detail Mahasiswa</h1>
    <ul>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["no"]; ?></li>
        <li><?= $_GET["kelas"]; ?></li>
        <li><?= $_GET["jurusan"]; ?></li>
    </ul>
    <a href="index.php">Kembali ke index</a>
</body>

</html>