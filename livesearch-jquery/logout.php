<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();

setcookie('key1', '', 0);
setcookie('key2', '', 0);

header('Location: login.php');
exit();
