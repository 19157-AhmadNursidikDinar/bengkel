<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
	<head>
		<title>Tambah Service</title>
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
			<td align="center"><h1>Tambah Service</h1></td>
		</tr>
	</table>
	<br>
	<form action='ServiceR15.php' method='POST'>
		<table bgcolor="#C1DAD7" width='40%' align="center">
			<tr>
				<td>Paket</td>
					<td><select name="Paket">
						<option class="input" value="ringan">Ringan</option>
						<option class="input" value="berat">Berat</option>
						<option class="input" value="overhoul">Overhoul</option></td>
			</tr>
			<tr>
				<td>Model</td>
					<td><select name="Model">
						<option class="input" value="YZF-R15">YZF-R15</option>
						<option class="input" value="YZF-R25">YZF-R25</option>
			</tr>
			<tr>
				<td>Kode Service</td>
				<td><input class="input" type='text' name='Kode' placeholder="Masukkan Kode Service" required></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				 <td><input class="input" type='text' name='Keterangan' placeholder="Masukkan Keterangan" required></textarea></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input class="input" type='text' name='Harga' placeholder="Masukkan Harga" required></td>
			</tr>
			<tr><td></td>
				<td><button type='submit' name='Belalang' value='Save' class="btn">Save</button>
			</tr>
		</table>
	</form>
</body>
</html>
