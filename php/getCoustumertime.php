<?php
    require_once "connect.php";
    $code=$_GET['code'];
    $update = $connect -> prepare("SELECT time FROM costumercode WHERE code= ? ");
    $update -> execute(array($code));
    $result=$update -> fetch();
    $a=$result;

    echo $a['time'];
?>