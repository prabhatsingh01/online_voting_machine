<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" href="css/ballot.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>

<body style="background-image: url('img/c8.jpg'); background-repeat: no-repeat;	background-size: cover; ">
	<section>
		<?php
		include_once("navbar.php");
		?>
	</section>
	<br><br><br><br>

	<section>
		<h1>BALLOT PAGE</h1>
		<h5>Choose your Candidate</h5>
		<form method=post>
			<table class="center" style="width: 60%;">
				<tr>
					<th>
						<h2>Candidate Name</h2>
					</th>
					<th>
						<h2>Party Name</h2>
					</th>
					<th>
						<h2>Your Choice</h2>
					</th>
				</tr>
				<tr>
					<td>
						<h3>Candidate 1</h3>
					</td>
					<td>
						<h3>BJP</h3>
					</td>
					<td><button id="btn" name=b1>Vote here</button></td>
				</tr>
				<tr>
					<td>
						<h3>Candidate 2</h3>
					</td>
					<td>
						<h3>CONG</h3>
					</td>
					<td><button id="btn" name=b2>Vote Here</button></td>
				</tr>
				<tr>
					<td>
						<h3>Candidate 3</h3>
					</td>
					<td>
						<h3>SP</h3>
					</td>
					<td><button id="btn" name=b3>Vote Here</button></td>
				</tr>
				<tr>
					<td>
						<h3>Candidate 4</h3>
					</td>
					<td>
						<h3>BSP</h3>
					</td>
					<td><button id="btn" name=b4>Vote Here</button></td>
				</tr>
				<tr>
					<td>
						<h3>Candidate 5</h3>
					</td>
					<td>
						<h3>AAP</h3>
					</td>
					<td><button id="btn" name=b5>Vote Here</button></td>
				</tr>
			</table>


			<?php
			$n1 = 0;
			$con = mysqli_connect('localhost', 'root', '', 'voting system');
			$q1 = "select votes from vote where party_name='bjp'";
			$result = mysqli_query($con, $q1);
			$n1 = $result->num_rows;
			if ($n1 == 0)
				$n1 = 1;
			else {
				$row = $result->fetch_array();
				$n1 = $row['votes'];
				$n1++;
			}
			?>
			<?php
			$n2 = 0;
			$con = mysqli_connect('localhost', 'root', '', 'voting system');
			$q1 = "select votes from vote where party_name='cong'";
			$result = mysqli_query($con, $q1);
			$n2 = $result->num_rows;
			if ($n2 == 0)
				$n2 = 1;
			else {
				$row = $result->fetch_array();
				$n2 = $row['votes'];
				$n2++;
			}
			?>
			<?php
			$n3 = 0;
			$con = mysqli_connect('localhost', 'root', '', 'voting system');
			$q1 = "select votes from vote where party_name='sp'";
			$result = mysqli_query($con, $q1);
			$n3 = $result->num_rows;
			if ($n3 == 0)
				$n3 = 1;
			else {
				$row = $result->fetch_array();
				$n3 = $row['votes'];
				$n3++;
			}
			?>
			<?php
			$n4 = 0;
			$con = mysqli_connect('localhost', 'root', '', 'voting system');
			$q1 = "select votes from vote where party_name='bsp'";
			$result = mysqli_query($con, $q1);
			$n4 = $result->num_rows;
			if ($n4 == 0)
				$n4 = 1;
			else {
				$row = $result->fetch_array();
				$n4 = $row['votes'];
				$n4++;
			}
			?>
			<?php
			$n5 = 0;
			$con = mysqli_connect('localhost', 'root', '', 'voting system');
			$q1 = "select votes from vote where party_name='aap'";
			$result = mysqli_query($con, $q1);
			$n5 = $result->num_rows;
			if ($n5 == 0)
				$n5 = 1;
			else {
				$row = $result->fetch_array();
				$n5 = $row['votes'];
				$n5++;
			}
			?>
			<?php
			extract($_POST);
			if (isset($b1)) {
				$con = mysqli_connect('localhost', 'root', '', 'voting system');
				$q2 = "update vote set votes=$n1 where party_name='bjp'";
				if (mysqli_query($con, $q2)) {
					header("location:prthnx.php");
				}
			}
			?>

			<?php
			extract($_POST);
			if (isset($b2)) {
				$con = mysqli_connect('localhost', 'root', '', 'voting system');
				$q3 = "update vote set votes=$n2 where party_name='cong'";
				if (mysqli_query($con, $q3))
				header("location:prthnx.php");			}
			?>
			<?php
			extract($_POST);
			if (isset($b3)) {
				$con = mysqli_connect('localhost', 'root', '', 'voting system');
				$q4 = "update vote set votes=$n3 where party_name='sp'";
				if (mysqli_query($con, $q4))
					echo "<h1> <br>Vote Successfully</h1>";
					header("location:prthnx.php");			}
			?>
			<?php
			extract($_POST);
			if (isset($b4)) {
				$con = mysqli_connect('localhost', 'root', '', 'voting system');
				$q5 = "update vote set votes=$n4 where party_name='bsp'";
				if (mysqli_query($con, $q5))
				header("location:prthnx.php");			}
			?>
			<?php
			extract($_POST);
			if (isset($b5)) {
				$con = mysqli_connect('localhost', 'root', '', 'voting system');
				$q6 = "update vote set votes=$n5 where party_name='aap'";
				if (mysqli_query($con, $q6))
				header("location:prthnx.php");			}
			?>

			<?php
			if (isset($_POST["submit1"])) {
				header("location:index1.php");
			}
			?>

		</form>
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