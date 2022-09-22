<?php
    $x = 90;

    function tampilX(){
        global $x;
        echo $x;
    }

    echo $x;
    echo "<br>";
    tampilX();

?>