<?php 
require_once "connect.php";
$code=$_GET['code'];
$update = $connect -> prepare("UPDATE costumercode SET time = time+1 WHERE code= ? ");
$update -> execute(array($code));
?>