<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<style type="text/css">
		input[type="text"].tes:focus{
			outline: red auto 5px;
		}
		input[value="OKE"]{
			background: #8BC34A;
		    border: 1px solid #8BC34A;
		    padding: 2px 10px 2px 10px;
		    color: white;
		    font-weight: 600;
		    cursor: pointer;
		    transition: 0.3s;
		}
		input[value="OKE"]:hover{
			border: 1px solid #000000;
			color: black;
			background: white;
		}
	</style>
	<form>
		<input class="tes" type="text" name="nama">
		<input type="password" name="pass">
		<input type="submit" value="OKE">
	</form>
</body>
</html>