<?php
$dbhost = 'localhost';
$dbuser = 'st2018b';
$dbpass = 'st2018b';
$dbname = 'st2018b';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass); 
if(!$conn)
        die("無法對資料庫連線");

//資料庫連線採UTF8
mysqli_query("SET NAMES utf8");

//選擇資料庫
if(!@mysqli_select_db($conn,$dbname))
        die("無法使用資料庫");
?>
