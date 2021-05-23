<?php
ini_set("display_errors",0);
$username = $_POST['txtusername'];
$password = $_POST['txtpassword'];

include("includes/defines.php");
include("includes/connect.php");
$sql = mysql_query("select * from user where UserName = '$username'");
$i=1;
while ($data = mysql_fetch_array($sql)){
$user = $data['UserName'];
$pass = $data['Password'];
$status = $data['Status'];
$i++;
}
if($username == ""){
echo "<script>
	  alert('Login Gagal');
	  window.location = 'loginawal.html';
	  </script>
	  ";
}

else if (($status == 'admin') && ($password ==$pass )){
session_start();
	$_SESSION['UserName']=$username;
	$_SESSION['Status'] = $status;
	
echo "<script>
	  alert('Login sukses');
	  window.location = 'admin.php';
	  </script>
	  ";
}
else if (($status == 'manager' ) && ($password ==$pass )){
session_start();
	$_SESSION['UserName']=$username;
	$_SESSION['Status'] = $status;
	
echo "<script>
	  alert('Login sukses');
	  window.location = 'Manager.php';
	  </script>
	  ";
}
else{
echo "<script>
	  alert('Login Gagal');
	  window.location = 'loginawal.html';
	  </script>
	  ";
}
?>