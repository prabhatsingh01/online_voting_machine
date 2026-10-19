<html>

<head>
	<style>
		body {
			/* background-image: url(img/pr3.jpg); */
			background-repeat: no-repeat;
			background-size: cover;
			background-color: lightgray;
		}
	</style>
</head>

<body>
	<br>
	<br><br><br>
	<div class="table1">
		<form method=post>
			<center>
				<font size=7 color=black><u> Candidate List</u></font>
				<br>
				<br>
				<table border=2 cellspacing=20>
					<tr>
						<td>Name</td>
						<td>Party</td>
						<td>Aadhar</td>
						<td>Age</td>
						<td>Phone</td>
						<td>Address</td>
					</tr>
					<?php
					$con = mysqli_connect('localhost', 'root', '', 'voting system');
					$q = "select * from candidate_details";
					$result = mysqli_query($con, $q);
					$n = $result->num_rows;
					for ($i = 1; $i <= $n; $i++) {
						$row = $result->fetch_array();
						?>
						<tr>
							<td>
								<?php echo $row['Name']; ?>
							</td>
							<td>
								<?php echo $row['party']; ?>
							</td>
							<td>
								<?php echo $row['aadhar']; ?>
							</td>
							<td>
								<?php echo $row['age']; ?>
							</td>
							<td>
								<?php echo $row['phone']; ?>
							</td>
							<td>
								<?php echo $row['address']; ?>
							</td>
						</tr>
						<?php
					}
					?>
				</center>
			</table><br><br>
			<input type=submit value=Back name=logout style="background:black;color:white;font-size:30">
			<?php
			if(isset($_POST["logout"])){
				header("location:candidate_admin.php");
			}
			?>
		</form>
	</div>
</body>

</html>