<?php
include("includes/defines.php");
include("includes/connect.php");
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
				width: 1139px;
				border-right: 1px solid #eeeeee;}
			article {
				padding-bottom: 7px;
				border-bottom-width: 5px;
				padding-top: 4px;
				clear: both;
				overflow: auto;
				width: 100%;}
			hgroup {
				margin-top: 40px;}
			p {
				margin-right: 5px;}
			
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
						<li><a href="Manager.php">Home</a></li>
						<li><a href="ManagerDealer.php">Dealer</a></li>
						<li><a href="ManagerService.php" class="current">Service</a></li>
						<li><a href="ManagerParts.php">Parts</a></li>
						<li><a href="Cs3.php">Contact US</a></li>
						<li><a href="logout2.php">Log out</a></li>
					</ul>
				</nav>
			</header>
			<section class="courses">
				<article>
						<table width="80%" border="1" align="center" bgcolor="#03C1D0">
							<tr>
								<td align="center"><h2>Daftar Transaksi Service</h2></td>
							</tr>
						</table>
				</article>
				<article>
					<table width="70%" border="1" align="center" >
						<tr align="center" bgcolor="red">
							<h2 align="center"></h2></td>
							<td><b>ID Transaksi</b></td>
							<td><b>Date</b></td>
							<td><b>Paket</b></td>
							<td><b>Nama</b></td>
							<td><b>Alamat</b></td>
							<td><b>No.Tlp</b></td>
							<td><b>Model</b></td>
							<td><b>No.Polisi</b></td>
						</tr>
					<?php
						$i=0;
						$query = mysql_query("SELECT * FROM daftarservice");
						while ($data= mysql_fetch_assoc ($query)){
						$i++;
					?>
						<tr align="center">
							<td><?php echo $data['id']; ?></td>
							<td><?php echo $data['Date']; ?></td>
							<td><?php echo $data['Paket']; ?></td>
							<td><?php echo $data['Nama']; ?></td>
							<td><?php echo $data['Alamat']; ?></td>
							<td><?php echo $data['Tlp']; ?></td>
							<td><?php echo $data['Model']; ?></td>
							<td><?php echo $data['NoPolisi']; ?></td>
						</tr>
					<?php } ?>
					</table>
				</article>
			</section>
			<footer>
				&copy; 2019 MD Motor
			</footer>
		</div><!-- .wrapper -->
	</body>
</html>