<?php
include"c.php";

$firstname = $_POST['firstname'];
$email = $_POST['email'];
$id = $_GET['id'];
$phone = $_POST['phone'];
$img = $_POST['img'];

$sql = mysqli_query($c,"INSERT INTO c_member
			VALUES ('','$firstname','$email','$id','$phone','$img')");
if($sql){
	header('location: customer.php');
}else{
	echo 'Can not Insert!';
}
mysqli_close($c);
?>