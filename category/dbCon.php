<?php
// $connect =mysqli_connect("localhost","root","","quanlysinhvien");
$host_address = 'phong.mysql.database.azure.com';
$username = 'phong@phong';
$password = 'Admin123';
$db_name = 'quanlysinhvien';
$connect =mysqli_connect($host_address, $username, $password, $db_name);
mysqli_query($connect,"SET NAMES 'utf8'");
?>