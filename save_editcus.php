<?php
include"c.php";

$firstname = $_POST['firstname'];
$email = $_POST['email'];
$id = $_GET['id'];
$phone = $_POST['phone'];
$img = $_POST['img'];

$sql = mysqli_query($c,"UPDATE c_member SET 
				firstname = '$firstname',
				email = '$email',
				phone = '$phone',
				img = '$img'
				WHERE id = '$id'
				");
if($sql){
	header('location: customer.php');
}else{
	echo 'Can not Update!';
}
?>