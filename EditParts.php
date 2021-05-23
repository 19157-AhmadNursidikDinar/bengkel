<?php
include("includes/defines.php");
include("includes/connect.php");

$NoParts=$_GET['NoParts'];
$query=mysql_query("SELECT * FROM parts WHERE NoParts='$NoParts'");
$data=mysql_fetch_array($query);
extract($data);
?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
	<head>
		<title>Edit Parts</title>
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
	<table width="80%" border="11" align="center" bgcolor="yellow">
		<tr>
			<td align="center"><h1>Edit Parts</h1></td>
		</tr>
	</table>
	<br>
	<form action='AdminParts.php' method='POST'>
		<table bgcolor="#C1DAD7" width='40%' align="center">
			<tr>
				<td>No.Parts</td>
					<td><input class='input' type='hidden' name='NoParts' value="<?php echo $NoParts; ?>">
					<input class='input' type='text' name='NoParts' value="<?php echo $NoParts; ?>" disabled></td>
			</tr>
			<tr>
				<td>Nama Parts</td>
					<td><input class='input' type='hidden' name='NamaParts' value="<?php echo $NamaParts; ?>">
					<input class='input' type='text' name='NamaParts' value="<?php echo $NamaParts; ?>"></td>
			</tr>
			<tr>
				<td>Model</td>
					<td><input class='input' type='hidden' name='Model' value="<?php echo $Model; ?>">
					<input class='input' type='text' name='Model' value="<?php echo $Model; ?>"></td>
			</tr>
			<tr>
			<td>Harga</td>
					<td><input class='input' type='hidden' name='Harga' value="<?php echo $Harga; ?>">
					<input class='input' type='text' name='Harga' value="<?php echo $Harga; ?>"></td>
			<tr><td></td>
				<td><button type='submit' name='edit' value='Update' class="btn">Update</button>
			</tr>
		</table>
	</form>
</body>
</html>
