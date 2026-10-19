<html>

<head>
	<style>
		body {
			background-color: aliceblue;
		}
	</style>
</head>

<body>
	 
	<br>
	<br>
	<br>
	
	<form method=post>
		<center>
			<font size="7" color=black><u>Voter List</u></font>
			<p>
			<p>
			<table border=1 cellspacing=10>
				<tr>
					<td>Name</td>
					<td>Aadhar</td>
					<td>Age</td>
					<td>Phone</td>
					<td>Address</td>
				</tr>
				<?php
				$con = mysqli_connect('localhost', 'root', '', 'voting system');
				$q = "select * from voter_details";
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
</body>

</html>