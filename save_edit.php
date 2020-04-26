<?php
include"c.php";

$car_regis = $_POST['car_regis'];
$car_name = $_POST['car_name'];
$car_id = $_GET['car_id'];
$car_type = $_POST['car_type'];
$car_price = $_POST['car_price'];
$car_img = $_POST['car_img'];

$sql = mysqli_query($c,"UPDATE cartable SET 
				car_regis = '$car_regis',
				car_name = '$car_name',
				car_type = '$car_type',
				car_price = '$car_price',
				car_img = '$car_img'
				WHERE car_id = '$car_id'
				");
if($sql){
	header('location: showcar.php');
}else{
	echo 'Can not Update!';
}
?>