<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		h1{
			text-align: center;
			margin-top: 5%;
		}
		.pilih{
			padding: 0 100px;
			display: flex;
			justify-content: center;
		}
		.pilih a{
			text-decoration: none;
			color: white;
			background: blue;
			display: flex;
			justify-content: center;
			margin-right: 10px;
		}
		.ya{
			visibility: visible;
			/*transition: 0;*/
			opacity: 1;
		}
		.ya:hover{
			visibility: hidden;
			opacity: 0;
		}
		.pilih2{
			visibility: hidden;
			opacity: 0;
		}
		.ya:hover .pilih2{
			visibility: visible;
			opacity: 1;
		}
	</style>
</head>
<body>
	<h1>Apakah anda ingin menaikan gaji anda?</h1>
	<div class="pilih">
		<ul>
			<li>
				<a href="tes__.php" class="ya">Ya</a>
			</li>
			<li>
				<a href="tes_.php">Tidak</a>
			</li>
		</ul>
	</div>
	<div class="pilih2">
		<a href="tes__.php" class="ya">Ya</a>
		<a href="tes_.php">Tidak</a>
	</div>
</body>
</html>