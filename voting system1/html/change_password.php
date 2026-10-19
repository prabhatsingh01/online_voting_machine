<html>
	<body>
			<div style="color:brown;height:10%;width:100%;">
				<center><font size=10>CHANGE PASSWORD</font></center>
			</div>
			<p>
			<center>
				<form method=post>
					<table>
						<tr>
							<td>New Password :</td>
							<td><input type=password name=passwordtxt size=30>
						</tr>
						<tr>
							<td>Confirm Password :</td>
							<td><input type=password name=conpasswordtxt size=30></td>
						</tr>
					</table>
					<p>
					<input type=submit value=CHANGE name=changebtn style="background-color:black;color:white;width:100;height:25;"><br><br>
					<?php
						extract($_POST);
						if(isset($changebtn))
						{
							if(strcmp($passwordtxt,$conpasswordtxt)!=0)
								echo"Password Not Match";
							else
							{
								$con=mysqli_connect('localhost','root','','voting system');
								$q="update login set password='$conpasswordtxt'";
								if(mysqli_query($con,$q))
									echo"<h1>Successfully Changed</h1>";
								else
									echo"<h1>Not Changed</h1>";
							}
						}
					?>
				</form>
			</center>
	</body>
</html>			