<?php
$host = 'localhost';//資料庫位置
$dbuser='root';//資料庫使用者名稱
$dbpw='';//資料庫使用者密碼
$dbname='test';
$link = mysqli_connect($host,$dbuser,$dbpw,$dbname);
if($link){
    mysqli_query($link,"SET NAMES utf8");
    echo'以正確連線';
}
else{
    echo'Cant connect mysql Database :<br/>'.mysqli_connect_error();
}
?>