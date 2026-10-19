<html>
	<body>
		<form method=post>
			<center>
				<font size=5>DELETE OLD BOOK ORDER</FONT><p>
				Enter Order No&nbsp;&nbsp;&nbsp;<input type=text name=ordernotxt size=20>&nbsp;&nbsp;&nbsp;
				<input type=submit value="SHOW DETAILS" name=b1 style="color:black;background-color:green;width:150;height:25;">
			</center>
			<p>
			<?php
				extract($_POST);
				if(isset($b1))
				{
			?>
					<center><font size=7>BOOK DETAILS</font></center>
					<table border=1  width=1300>
						<tr>
							<td>Order No</td>
							<td>Order Date</td>
							<td>Book No</td>
							<td>Subject</td>
							<td>Title</td>
							<td>Author</td>
							<td>Publication</td>
							<td>Price</td>
							<td>Quantity</td>
							<td>Name</td>
							<td>Address</td>
							<td>Phone</td>
						</tr>
		
				<?php
					$con=mysqli_connect('localhost','root','','book_db');
					$q="select * from purchase_old where order_no='$ordernotxt'";
					$result=mysqli_query($con,$q);
					$n=$result->num_rows;
					for($i=1;$i<=$n;$i++)
					{
						$row=$result->fetch_array();
				?>
						<tr>
							<td><?php echo$row['order_no'];?></td>
							<td><?php echo$row['order_date'];?></td>
							<td><?php echo$row['book_no'];?></td>
							<td><?php echo$row['subject'];?></td>
							<td><?php echo$row['title'];?></td>
							<td><?php echo$row['author'];?></td>
							<td><?php echo$row['publication'];?></td>
							<td><?php echo$row['price'];?></td>
							<td><?php echo$row['quantity'];?></td>
							<td><?php echo$row['name'];?></td>
							<td><?php echo$row['address'];?></td>
							<td><?php echo$row['phone'];?></td>
						</tr>
					</table>
					<p>
					<center><input type=submit value=DELETE name=deletebtn style="background-color:black;color:white;width:150;height:25;"></center>
			<?php
					}
				}
			?>
			<?php
					extract($_POST);
					if(isset($deletebtn))
					{
						$con=mysqli_connect('localhost','root','','book_db');
						$q="delete from purchase_old where order_no='$ordernotxt'";
						if(mysqli_query($con,$q))
							echo"<h1>Successfully Delete</h1>";
						else
							echo"<h1>Not Delete</h1>";
					}
				?>
		</form>
	</body>
</html>