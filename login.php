<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>LOGIN</h1>
	<form method="post" action="">
		<input type="email" name="email" placeholder="email"><br>
		<input type="password" name="pass" placeholder="password"><br>
		<button type="submit" name="kirim">Login</button>
	</form>
	<?php 
	session_start();
	if (isset($_POST['kirim'])) {
		if ($_SESSION['tes_email']==$_POST['email'] && $_SESSION['tes_pass']==md5($_POST['pass'])) {
				echo "berhasil";
			}	
		else{
			echo "gagal";
		}
	}
	?>
	<a href="daftar.php">ke halaman daftar</a>
</body>
</html>
