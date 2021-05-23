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
	<table width="80%" border="11" align="center" bgcolor="yellow">
		<tr>
			<td align="center"><h1>Tambah Motor</h1></td>
		</tr>
	</table>
	<br>
	<form action='AdminDealer.php' method='POST'>
		<table bgcolor="#C1DAD7" width='40%' align="center">
			<tr>
				<td>Kode Motor</td>
					<td><input class='input' type='text' name='KodeMotor' placeholder="Masukkan Kode Motor"></td>
			</tr>
			<tr>
				<td>Merk</td>
					<td><input class='input' type='text' name='Merk' placeholder="Masukkan Merk Motor"></td>
			</tr>
			<tr>
				<td>Warna</td>
					<td><input class='input' type='text' name='Warna' placeholder="Masukkan Warna Motor"></td>
			</tr>
			<tr>
				<td>Harga</td>
					<td><input class='input' type='text' name='Harga' placeholder="Masukkan Harga"></td>
			<tr><td></td>
				<td><button type='submit' name='tambah' value='Save' class="btn">Save</button>
			</tr>
		</table>
	</form>
</body>
</html>
