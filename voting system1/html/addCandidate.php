<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/RegVoter.css">

	<!-- <style>
		td {
			border: 1px solid black;
			border-radius: 20px;
			text-align: center;
		}

		h1 {
			margin-top: 5%;
			text-align: center;
		}

		.center {
			border-radius: 20px;
			margin-left: 20%;
			margin-top: 4%;
			border: 2px solid black;
		}

		button {
			align-items: center;
			border-radius: 20px;
		}

		body {
			background-color: url("./img/c8.jpg");
			background-repeat: no-repeat;
			background-size: cover;
		}

		input {
			border-radius: 10px;
			background-color: #FEF5E7;
			border: 2px solid black;
		}

		.container {
			text-align: center;
			padding-top: 40px;
		}

		#btn {
			font-size: 25px;
		}
	</style> -->
</head>

<body>
	<div>
		<?php
		require_once("navbar1.php");
		?>
	</div>
	<br><br><br><br>
	<section>
		<div class="container2">
			<h1>ADD CANDIDATE</h1>
			<form method=post>
				<table class="center" style="width: 60%;">

					<tr>
						<td>
							<br>
							<h3>Name</h3>
						</td>
						<td>
							<h3><input type="text" placeholder="" name=nametxt></h3>
						</td>
					</tr>
					<tr>
						<td>
							<h3>Party</h3>
						</td>
						<td>
							<h3><input type="text" placeholder="" name=partytxt></h3>
						</td>
					</tr>
					<tr>
						<td>
							<h3>Aadhar</h3>
						</td>
						<td>
							<h3><input type="text" placeholder="" name=aadhartxt></h3>
						</td>
					</tr>
					<tr>
						<td>
							<h3>Age</h3>
						</td>
						<td>
							<h3><input type="text" placeholder="" name=agetxt></h3>
						</td>
					</tr>
					<tr>
						<td>
							<h3>Contact</h3>
						</td>
						<td>
							<h3><input type="text" placeholder="" name=phonetxt></h3>
						</td>
					</tr>
					<tr>
						<td>
							<h3>Address</h3>
						</td>
						<td>
							<h3><input type="text" placeholder="" name=addresstxt></h3>
						</td>
					</tr>
				</table>
				<div class="container">
					<input type=submit value=Submit name=btn style="background:black;color:white;height:40px;width:150px;">
				</div>
				<?php
				extract($_POST);
				if (isset($btn)) {
					$con = mysqli_connect('localhost', 'root', '', 'voting system');
					$q = "insert into candidate_details values('$nametxt','$partytxt','$aadhartxt',$agetxt,'$phonetxt','$addresstxt')";
					if (mysqli_query($con, $q))
						echo "<h2 style='color: black;'><br>Registration Successfull</h2>";
					else
						echo "<h1>Error</h1>";
				}
				?>
			</form>
		</div>
	</section>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		crossorigin="anonymous"></script>

</body>

</html>