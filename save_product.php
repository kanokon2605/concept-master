<?php
include"c.php";

$car_regis = $_POST['car_regis'];
$car_name = $_POST['car_name'];
$car_id = $_GET['car_id'];
$car_type = $_POST['car_type'];
$car_price = $_POST['car_price'];
$car_img = $_POST['car_img'];

$sql = mysqli_query($c,"INSERT INTO cartable
			VALUES ('','$car_regis','$car_name','$car_id','$car_type','$car_price','$car_img')");
if($sql){
	header('location: showcar.php');
}else{
	echo 'Can not Insert!';
}
mysqli_close($c);
?>