
<?php
include"c.php";

$car_id = $_GET['id'];
$sql = mysqli_query($c,"SELECT * FROM c_member WHERE id = '".$id."' ");
$row = mysqli_fetch_assoc($sql);
?>
<table border="1" align="center">
<tr>
			<td>Name : </td>
			<td>
				<input type="text" name="firstname"
				value="<?=$row['firstname']; ?>">
			</td>
		</tr>
		<tr>
			<td>Email : </td>
			<td>
				<input type="text" name="email"
				value="<?=$row['email']; ?>">
			</td>
		</tr>
		<tr>
			<td>Phone : </td>
			<td>
				<input type="text" name="phone"
				value="<?=$row['phone']; ?>">
			</td>
		</tr>
		<tr>
			<td>Img : </td>
			<td>
				<input type="text" name="img"
				value="<?=$row['img']; ?>">
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" value="บันทึก">
			</td>
		</tr>
</table>
</body>
</html>