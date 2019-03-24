<?php 
session_start();
$_SESSION['tes']="qwe";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Daftar</h1>
	<div>
		<form method="post" action="">
			<input type="email" name="email" placeholder="email"><br>
			<input type="password" name="pass" placeholder="password"><br>
			<button type="submit" name="kirim">Daftar</button>
		</form>
	</div>
	<?php 
	if (isset($_POST['kirim'])) {
		$_SESSION['tes_email'] = $_POST['email'];
		$_SESSION['tes_pass']  = md5($_POST['pass']);
	}
	?>
	<a href="login.php">ke halaman login</a>
</body>
</html>