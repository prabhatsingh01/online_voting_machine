<html>
	<body bgcolor=aliceblue>
		<form method=post> 
			<center><font size=7 color=black><u>Result</u></font><p><p>
			<table border=1  cellspacing=20 cellpadding=20>
				<tr>
					<td>BJP</td>
          <td>
            <?php
              $con=mysqli_connect('localhost','root','','voting system');
              $q1="select * from vote where party_name='bjp'";
              $result=mysqli_query($con,$q1);
              $n=$result->num_rows;
              for($i=1;$i<=$n;$i++)
              {
                $row=$result->fetch_array();
                ?>
                  <?php echo $row['votes'];?>
              <?php
              }
            ?>
          </td>
        </tr>
        <tr>
					<td>Congress</td>
          <td>
            <?php
              $q2="select * from vote where party_name='cong'";
              $result=mysqli_query($con,$q2);
              $n=$result->num_rows;
              for($i=1;$i<=$n;$i++)
              {
                $row=$result->fetch_array();
                ?>
                  <?php echo $row['votes'];?>
              <?php
              }
            ?>
          </td>
        </tr>
        <tr>
					<td>SP</td>
          <td>
            <?php
              $q3="select * from vote where party_name='sp'";
              $result=mysqli_query($con,$q3);
              $n=$result->num_rows;
              for($i=1;$i<=$n;$i++)
              {
                $row=$result->fetch_array();
                ?>
                  <?php echo $row['votes'];?>
              <?php
              }
            ?>
          </td>
        </tr>
        <tr>
					<td>BSP</td>
          <td>
            <?php
              $q4="select * from vote where party_name='bsp'";
              $result=mysqli_query($con,$q4);
              $n=$result->num_rows;
              for($i=1;$i<=$n;$i++)
              {
                $row=$result->fetch_array();
                ?>
                  <?php echo $row['votes'];?>
              <?php
              }
            ?>
          </td>
        </tr>
        <tr>
					<td>AAP</td>
          <td>
            <?php
              $q5="select * from vote where party_name='aap'";
              $result=mysqli_query($con,$q5);
              $n=$result->num_rows;
              for($i=1;$i<=$n;$i++)
              {
                $row=$result->fetch_array();
                ?>
                  <?php echo $row['votes'];?>
              <?php
              }
            ?>
          </td>
        </tr>
			
      </center>
      </table>
      <br><br>
			<input type=submit value=Back name=logout style="background:black;color:white;font-size:30">
			<?php
			if(isset($_POST["logout"])){
				header("location:admin_dashboard.php");
			}
			?>
		</form>
	</body>
</html>