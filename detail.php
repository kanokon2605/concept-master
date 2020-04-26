
<?php
include"c.php";

$car_id = $_GET['car_id'];
$sql = mysqli_query($c,"SELECT * FROM cartable WHERE car_id = '".$car_id."' ");
$row = mysqli_fetch_assoc($sql);
?>
<table border="1" align="center">
<tr>
			<td>Registration : </td>
			<td>
				<input type="text" name="car_regis"
				value="<?=$row['car_regis']; ?>">
			</td>
		</tr>
		<tr>
			<td>Name Car : </td>
			<td>
				<input type="text" name="car_name"
				value="<?=$row['car_name']; ?>">
			</td>
		</tr>
		<tr>
			<td>Type : </td>
			<td>
				<input type="text" name="car_type"
				value="<?=$row['car_type']; ?>">
			</td>
		</tr>
		<tr>
			<td>Price : </td>
			<td>
				<input type="text" name="car_price"
				value="<?=$row['car_price']; ?>">
			</td>
		</tr>
		<tr>
			<td>Img : </td>
			<td>
				<input type="text" name="car_img"
				value="<?=$row['car_img']; ?>">
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" value="Save">
			</td>
		</tr>
</table>
</body>
</html>