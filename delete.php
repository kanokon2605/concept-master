<?php
include"c.php";

$car_id = $_GET['car_id'];

$sql = mysqli_query($c,"DELETE FROM cartable WHERE car_id = '".$car_id."' ");

if($sql){
	header('location: showcar.php');
}else{
	echo 'Can not Delete!';
}
?>