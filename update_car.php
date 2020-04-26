<?php
include"c.php";

$car_id = $_GET['car_id'];


$sql = mysqli_query($c,"UPDATE cartable SET 
				car_status = 'ว่าง'
				WHERE car_id = '$car_id'
				");
if($sql){
	header('location: showcar.php');
}else{
	echo 'Can not Update!';
}
?>