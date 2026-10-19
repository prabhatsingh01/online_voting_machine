<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/RegVoter.css">

</head>

<body>
	<div>
		<?php
		require_once("navbar2.php");
		?>
	</div>
	<br><br><br><br>
	<section>
		<div class="container2">
			<h1>VOTER REGISTRATION</h1>
			<h5>Fill details</h5>
			<form method="post">
				<table class="center" style="width: 60%;">
					<tr>
						<td>
							<h3>Name</h3>
						</td>
						<td>
							<h3><input type="text" placeholder="" name=nametxt></h3>
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
					$q = "insert into voter_details values('$nametxt','$aadhartxt','$agetxt','$phonetxt','$addresstxt',0)";
					if ($agetxt <= 18)
						echo "<h1>Can't Vote</h1>";
					else {
						if (mysqli_query($con, $q)) {
							?>
							<script>alert("Registration Successfull");</script>
							<?php
						}else
							echo "<h1>Error</h1>";
					}
				}
				?>
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