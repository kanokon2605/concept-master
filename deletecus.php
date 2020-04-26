<?php
include"c.php";

$id = $_GET['id'];

$sql = mysqli_query($c,"DELETE FROM c_member WHERE id = '".$id."' ");

if($sql){
	header('location: customer.php');
}else{
	echo 'Can not Delete!';
}
?>