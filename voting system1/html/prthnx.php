<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
	<style>
		@import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
		@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);

		body {
			background-image: url("img/pr5.jpg");
			background-size: cover;
			/* background-position: 50% !important; */
		}

		.myDiv {
			margin-top: 10px;
			text-align: center;
		}
	</style>
	<link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
</head>

<body>
	<header class="site-header" id="header">
		<h1 class="site-header__title" data-lead-id="site-header-title">THANK YOU!</h1>
	</header>

	<div class="main-content">
		<i class="fa fa-check main-content__checkmark" id="checkmark"></i>
		<p class="main-content__body" data-lead-id="main-content-body"><br> <br>Thanks a bunch for giving the vote. It means
			a lot to us, just like you do! We really appreciate you giving us a moment of your time today. Thanks for being
			you.</p>
	</div>
	<div class='myDiv'>
		<!-- <form action='' name='Logout' method='post'>
			<input type='submit' name='submit1' value='Logout'>
		</form> -->
    <form method=post>
    <input type=submit value="Log Out" name=submit1 style="color:white;background:black; width:125px;height:30px;">
	</div>
	<?php
	if (isset($_POST["submit1"])) {
		header("location:index.php");
	}
	?>
  </form>
</body>

</html>