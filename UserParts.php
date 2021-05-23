<?php
include("includes/defines.php");
include("includes/connect.php");

if(isset($_POST['beliparts'])){
	$dok1=$_POST['NoParts'];
	$dok2=$_POST['NamaParts'];
	$dok3=$_POST['Harga'];
	$dok4=$_POST['Nama'];
	$dok5=$_POST['Alamat'];
	$dok6=$_POST['Tlp'];
	$dok7=$_POST['Bank'];
	$dok8=$_POST['Rek'];
	mysql_query ("INSERT INTO partsbeli(id, Date, NoParts, NamaParts, Harga, Nama, Alamat, Tlp, Bank, Rek) VALUES('$_POST[id]',Now(),'$dok1','$dok2','$dok3','$dok4','$dok5','$dok6','$dok7','$dok8')");
		echo "<script>
	  alert('Data Tersimpan');
	  window.location = 'Sukses.php';
	  </script>
	  ";	
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
				<nav>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="UserDealer.php">Dealer</a></li>
						<li><a href="UserService.php">Service</a></li>
						<li><a href="UserParts.php" class="current">Parts</a></li>
						<li><a href="Cs.php">Contact US</a></li>
						<li><a href="loginawal.html">Log in</a></li>
					</ul>
				</nav>
			</header>
			<section class="courses">
				<article>
						<table width="70%" border="1" align="center" bgcolor="red">
			<tr>
					<td align="center"><h2>Daftar Harga Service YZF-R25</h2></td>
			</tr>
		</table>	
			<table width="70%" border="1" align="center" >
				<tr align="center" bgcolor="red">
					<td><b>No Parts</b></td>
					<td><b>Nama Parts</b></td>
					<td><b>Model</b></td>
					<td><b>Harga</b></td>
					<td>&nbsp;</td>
				</tr>
					<?php
						$i=0;
						$query = mysql_query("SELECT * FROM parts");
						while ($data= mysql_fetch_assoc ($query)){
						$i++;
					?>
				<tr align="center">
					<td><?php echo $data['NoParts']; ?></td>
					<td><?php echo $data['NamaParts']; ?></td>
					<td><?php echo $data['Model']; ?></td>
					<td><?php echo $data['Harga']; ?></td>
				<td><a href="UserBeliParts.php?NoParts=<?php echo $data['NoParts']; ?>">Beli</a> 
				</tr>
			<?php } ?>
			</table>

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