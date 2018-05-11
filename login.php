<!DOCTYPE html>
<html>
<head>
	<title>Pengaduan Masyarakat</title>
<style type="text/css">
body{
	font-family: arial;
	background-color: #fff;
}

#utama{

	width: 300px;
	margin: 0 auto;
	margin-top: 12%;
	background-color: #151515;
}

#judul{
	padding: 20px;
	text-align: center;
	color: #fff;
	font-size: 20px;
	background-color: #3460af;
	border-bottom: 3px solid #333e66;
 }

#inputan{
	background-color: #A9BCF5;
	padding: 20px;
	
}

input{
	padding: 10px;
	border:0;
}
.lg{
	width: 240px;
}
.btn{
	background-color: #3460af;
	border-radius: 10px;
	color: #fff;
}
.btn:hover{
	background-color: #333e66;
	cursor: pointer;
}
</style>
</head>
<body>
	<div id="utama">
		<div id="judul">
			Pengaduan Masyarakat
		</div>
		<div id="inputan">
			<form action="" method="post">
		<div>
			<input type="text" name="user" placeholder="Username" class="lg">
		</div>
		<div style="margin-top: 10px;">
			<input type="password" name="pass" class="lg" placeholder="Password">
		</div>
		<div style="margin-top: 10px;">
			<input type="submit" name="user" value="Login" />
		</div>
			</form>
		</div>
	</div>
</body>
</html> 



<?php 

	if (isset($_POST['kirim'])) {

	include 'koneksi.php';

	$user = addslashes($_POST['user']);
	$pass = addslashes($_POST['pass']);

	echo $pass;

	$con = mysqli_connect('localhost','root','', 'tubes') or die ('Error!');
	$result = mysqli_query($con,"select * form anggota where username='$user' && password='$pass'");

	if (mysqli_num_rows($result)>0){

		$goto = "..\home.php";
		// echo 'Login Sukses';
	}else{
		echo 'Login Gagal, Coba Lagi !';
	}
}
?>