<?php
include("includes/defines.php");
include("includes/connect.php");

$cari_kd=mysql_query("select max(id)as kode from daftarservice"); //mencari kode yang paling besar atau kode yang baru masuk
$tm_cari=mysql_fetch_array($cari_kd);
$kode=substr($tm_cari['kode'],1,4); //mengambil string mulai dari karakter pertama 'A' dan mengambil 4 karakter setelahnya. 
$tambah=$kode+1; //kode yang sudah di pecah di tambah 1
	if($tambah<10){ //jika kode lebih kecil dari 10 (9,8,7,6 dst) maka
    $id="S000".$tambah;
    }else{
    $id="S00".$tambah;
    }

$Paket=$_GET['Paket'];
$query=mysql_query("SELECT * FROM r25 WHERE Paket='$Paket'");
$data=mysql_fetch_array($query);
extract($data);
?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
	<head>
		<title>Service</title>
			<style type="text/css">
			input.input {
				border: 1px solid #f2f2f2;
				padding: 10px;
				width: 80%;
				}
			textarea.input{
				margin: 0px;
				width: 272px;
				height: 60px;
				border: 1px solid #f2f2f2;
				padding: 10px;
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
				padding-left: 20px;
				}

			</style>
</head>
<body> 
	<table width="80%" border="11" align="center" bgcolor="yellow">
		<tr>
			<td align="center"><h1>Masukkan Data Anda</h1></td>
		</tr>
	</table>
	<br>
	<form action='Sukses2.php' method='POST'>
		<table bgcolor="#C1DAD7" width='40%' align="center">
			<tr>	
				<td><input type='text' name='id' value=<?php echo $id; ?> readonly="readonly"></td>
			</tr>					
			<tr>
				<td>Model Motor</td>
				<td><input class='input' type='hidden' name='Model' value="<?php echo $Model; ?>">
				<input class='input' type='text' value="<?php echo $Model; ?>" disabled></td>
			</tr>
			<tr>
				<td>Paket</td>
				<td><input class='input' type='hidden' name='Paket' value="<?php echo $Paket; ?>">
				<input class='input' type='text' value="<?php echo $Paket; ?>" disabled></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input class='input' type='hidden' name='Harga' value="<?php echo $Harga; ?>">
				<input class='input' type='text' value="<?php echo $Harga; ?>" disabled></td>
			</tr>
			<tr>
				<td>Nama </td>
				<td><input class='input' type='text' name='Nama' required></td>
			</tr>
			<tr>
				<td>Alamat </td>
				<td><textarea class='input' name='Alamat' required></textarea></td>
			</tr>
			<tr>
				<td>No.Tlp </td>
				<td><input class='input' type='text' name='Tlp' required></td>
			</tr>
			<tr>
				<td>No.Polisi </td>
				<td><input class='input' type='text' name='NoPolisi' required></td>
			</tr>
			<tr><td></td>
				<td><button type='submit' name='service' value='Save' class="btn">Save</button>
			</tr>
		</table>
	</form>
</body>
</html>
