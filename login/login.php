<?php
require 'functions.php';
if (isset($_POST['login'])) {
    // if (login($_POST) > 0) {
    //     echo "<script>alert('berhasil login')</script>";
    // }else{

    // }

    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1) {
        //cek password

        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            header('Location: index.php');
            exit;
        }
    }

    $error = true;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<style>
    label {
        display: block;
    }

    .error {
        color: red;
        font-style: italic;
    }
</style>

<body>
    <h1>Halaman Login</h1>

    <?php if (isset($error)) : ?>
        <p class="error">username/password salah</p>
    <?php endif; ?>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username: </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password: </label>
                <input type="password" name="password" id="password">

            </li>
            <li>
                <button type="submit" name="login">Login!</button>
            </li>
        </ul>
    </form>
</body>

</html>