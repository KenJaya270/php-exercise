<?php
$connect = mysqli_connect("localhost", "root", "", "phpdasar");

if (isset($_POST["submit"])) {
    //ambil data dari tiap element form
    $nama = $_POST["nama"];
    $nrp = $_POST["nrp"];
    $email = $_POST["email"];
    $jurusan = $_POST["jurusan"];
    $gambar = $_POST["gambar"];

    //query insert data
    $query = "INSERT INTO mahasiswa VALUES(null, '$nama', '$nrp', '$email', '$jurusan', '$gambar')";

    mysqli_query($connect, $query);

    //cek apakah data berhasil ditambahkan atau tidak

    if (mysqli_affected_rows($connect) > 0) {
        echo "Berhasil";
    } else {
        echo "gagal <br>";
        echo mysqli_error($connect);
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>

<body>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nrp">NRP:</label>
                <input type="text" name="nrp" id="nrp">
            </li>
            <li>
                <label for="nama">NAMA:</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="email">EMAIL:</label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="jurusan">JURUSAN:</label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar">GAMBAR:</label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>

</html>