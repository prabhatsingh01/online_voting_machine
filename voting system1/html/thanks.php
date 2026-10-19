<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		h1{
			font-size: 100px;
		}
	</style>
	<title>Document</title>
</head>
<body bgcolor=lightyellow>
	<center><h1 style="color:Green">Successfully Vote</h1>
	<br>
	<br>
	<form method=post>
	<input type=submit value="Log Out" name=btn style="color:white;background:black; width:125px;height:30px;">
</center>
	<?php
		if(isset($_POST["btn"])){
			header("location:index.php");
		}
	?>
	</form>
</body>
</html>