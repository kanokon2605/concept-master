<?php
$host = 'localhost';
$user = 'root';
$pw = '';
$dbname = 'car';

$c = mysqli_connect($host,$user,$pw,$dbname) or die('Cannot database!');
mysqli_query($c,"SET NAMES utf8");
?>