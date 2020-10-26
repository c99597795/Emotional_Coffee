<?php 
require_once "connect.php";
$code=$_GET['code'];
$time=1;
$insert = $connect -> prepare("INSERT INTO costumercode(code,time)VALUES(?,?)");
$insert -> execute(array($code,$time));
?>