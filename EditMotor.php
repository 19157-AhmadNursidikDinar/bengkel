<?php
include("includes/defines.php");
include("includes/connect.php");

$KodeMotor=$_GET['KodeMotor'];
$query=mysql_query("SELECT * FROM motor WHERE KodeMotor='$KodeMotor'");
$data=mysql_fetch_array($query);
extract($data);
?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
	<head>
		<title>Edit Service</title>
			<style type="text/css">
			input.input {
				border: 1px solid #f2f2f2;
				padding: 10px;
				width: 80%;
				}

			button.btn {
				color: #de6581;
				text-decoration: none;
				width: 30%;
				padding: 4px;
				background: rgba(18, 188, 231, 0.26);
				border: 2px solid #f2f2f2;
				}
			
			button.btn:hover {
				background: #ffffff;
				color: #37abc8;
				font-weight: bold;
				}
			td{
				font-weight: bold;
				}

			</style>
	</head>
<body> 
	<table width="80%" border="0" align="center" bgcolor="yellow">
		<tr>
			<td align="center"><h1>Edit Motor</h1></td>
		</tr>
	</table>
	<br>
	<form action='AdminDealer.php' method='POST'>
		<table bgcolor="#C1DAD7" width='40%' align="center">
			<tr>
				<td>Kode Motor</td>
					<td><input class='input' type='hidden' name='KodeMotor' value="<?php echo $KodeMotor; ?>">
					<input class='input' type='text' name='KodeMotor' value="<?php echo $KodeMotor; ?>" disabled></td>
			</tr>
			<tr>
				<td>Merk</td>
					<td><input class='input' type='hidden' name='Merk' value="<?php echo $Merk; ?>">
					<input class='input' type='text' name='Merk' value="<?php echo $Merk; ?>" disabled></td>
			</tr>
			<tr>
				<td>Warna</td>
					<td><input class='input' type='hidden' name='Warna' value="<?php echo $Warna; ?>">
					<input class='input' type='text' name='Warna' value="<?php echo $Warna; ?>"></td>
			</tr>
			<tr>
				<td>Harga</td>
					<td><input class='input' type='hidden' name='Harga' value="<?php echo $Harga; ?>">
					<input class='input' type='text' name='Harga' value="<?php echo $Harga; ?>"></td>
			<tr><td></td>
				<td><button type='submit' name='edit' value='update' class="btn">Update</button>
			</tr>
		</table>
	</form>
</body>
</html>
