<?php
include("includes/defines.php");
include("includes/connect.php");

if (isset($_POST['tambah'])){
	$dok1=$_POST['KodeMotor'];
	$dok2=$_POST['Merk'];
	$dok3=$_POST['Warna'];
	$dok4=$_POST['Harga'];
	mysql_query ("INSERT INTO motor VALUE ('$dok1','$dok2','$dok3','$dok4')");
	}
else if (isset($_GET['KodeMotor'])){
	$KodeMotor=$_GET['KodeMotor'];
	mysql_query ("DELETE FROM motor WHERE KodeMotor='$KodeMotor'");
	}
else if (isset($_POST['edit'])){
	$dok1=$_POST['KodeMotor'];
	$dok2=$_POST['Merk'];
	$dok3=$_POST['Warna'];
	$dok4=$_POST['Harga'];
	mysql_query ("UPDATE motor SET Merk='$dok2', Warna='$dok3', Harga='$dok4' WHERE KodeMotor='$dok1'");
	}
?>


<!DOCTYPE html>
<html>
	<head>
		<title>MD Motor</title>
		<style type="text/css">
			header, section, footer, aside, nav, article, figure, figcaption {
				display: block;}
			body {
				color: #666666;
				background-color: #f9f8f6;
				background-image: url("images/motor2.jpg");
				background-position: center;
				font-family: Georgia, Times, serif;
				line-height: 1.4em;
				margin: 0px;}
			.wrapper {
				width: 1140px;
				margin: 30px auto 30px auto;
				border: 2px solid #000000;
				background-color: rgba(255, 255, 255, 0.77);}
			header {
				padding-top: 10px;
				height: 180px;
				background-image: url(images/Banner_MotoGP_Edition_02.png);
				background-position: center;}
			nav, footer {
				margin-top: 150px;
				clear: both;
				color: #ffffff;
				background-color: rgba(22, 46, 222, 0.4);
				height: 30px;}
			nav ul {
				margin: 20px;
				padding: 5px 4px 5px 300px;}
			nav li {
				display: inline;
				margin-right: 47px;}
			nav li a {
				color: #ffffff;
				font-size: 18px;}
			nav li a:hover, nav li a.current {
				color: #F50606;}
			section.courses {
				float: left;
				width: 880px;
				border-right: 1px solid #eeeeee;}
			article {
				padding-bottom: 7px;
				border-bottom-width: 5px;
				padding-top: 21px;
				clear: both;
				overflow: auto;
				width: 100%;}
			hgroup {
				margin-top: 40px;}
			figure {
				float: left;
				width: 210px;
				height: 360px;
				padding: 25px;
				margin: 20px;
				border: 0px solid #eeeeee;}
			figcaption {
				font-size: 90%;
				text-align: left;}
			aside {
				width: 230px;
				float: left;
				padding: 0px 0px 0px 8px;}
			aside section a {
				display: block;
				padding: 10px;
				border-bottom: 1px solid #eeeeee;}
			aside section a:hover {
				color: #985d6a;
				background-color: #efefef;}
			a {
				color: #de6581;
				text-decoration: none;}
			h1, h2, h3 {
				font-weight: normal;}
			h2 {
				margin: 10px 0px 5px 0px;
				padding: 0px;}
			h3 {
				margin: 0px 0px 10px 0px;
				color: #de6581;}
			aside h2 {
				padding: 30px 0px 10px 0px;
				color: #de6581;}
			footer {
				font-size: 80%;
				padding: 7px 0px 0px 20px;}
		</style>
		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="wrapper">
			<header>
				<nav>
					<ul>
						<li><a href="Admin.php">Home</a></li>
						<li><a href="AdminDealer.php" class="current">Dealer</a></li>
						<li><a href="AdminService.php">Service</a></li>
						<li><a href="AdminParts.php">Parts</a></li>
						<li><a href="Cs2.php">Contact US</a></li>
						<li><a href="logout2.php">Log out</a></li>
					</ul>
				</nav>
			</header>
			<section class="courses">
				<article>
						<table width="70%" border="1" align="center" bgcolor="red">
			<tr>
					<td align="center"><h2>Daftar Harga</h2></td>
			</tr>
		</table>	
		<table width="70%" border="1" align="center" >
			<tr align="center" bgcolor="red">
				<td><b>No</b></td>
				<td><b>Kode Motor</b></td>
				<td><b>Merk</b></td>
				<td><b>Warna</b></td>
				<td><b>Harga</b></td>
				<td>&nbsp;</td>
			</tr>
	<?php
	$i=0;
	$query = mysql_query("SELECT * FROM motor");
	while ($data= mysql_fetch_assoc ($query)){
	$i++;
	?>
			
			<tr align="center">
				<td><?php echo $i; ?></td>
				<td><?php echo $data['KodeMotor']; ?></td>
				<td><?php echo $data['Merk']; ?></td>
				<td><?php echo $data['Warna']; ?></td>
				<td><?php echo $data['Harga']; ?></td>
				<td><a href="EditMotor.php?KodeMotor=<?php echo $data['KodeMotor']; ?>">Edit</a> -
				<a href="Admindealer.php?KodeMotor=<?php echo $data['KodeMotor']; ?>">Delete</a></td>
			</tr>
	<?php } ?>
	</table>
				<hgroup>
					<form method="post" action="TambahMotor.php" align="center">
						<input type='submit' value='Tambah Motor'>
					</form>
				</hgroup>
				</article>    				
			</section>
			<aside>
				<section class="logo">
					<h2>MD Motor</h2>
					<a href="SpecR15.php"><img src="images/logo-r15.png"</a>
					<a href="SpecR25.php"><img src="images/logo-r25.png"</a>
					
				</section>
				<section class="contact-details">
					<h2>Contact US</h2>
					<p align="center">MD Motor<br>
						Service & Parts</p>
				</section>
			</aside>
			<footer>
				&copy; 2019 MD Motor
			</footer>
		</div><!-- .wrapper -->
	</body>
</html>