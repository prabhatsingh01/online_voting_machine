<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="css/reg2.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Registration Form</title>
   </head>
<body>
	
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form method=post>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" required name=nametxt>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" required name=usernametxt>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" required name=emailtxt>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" required name=phonetxt>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your password" required name=passtxt>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" placeholder="Confirm your password" required name=conpasstxt>
          </div>
          <div class="input-box">
            <span class="details">Aadhar No</span>
            <input type="text" placeholder="Enter ID No" required name=adhartxt>
          </div>
          
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender" >Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register" name=b>
        </div>
		</div>
  </div>
		
		<?PHP
			extract($_POST);
			if(isset($b))
			{
				$con=mysqli_connect('localhost','root','','voting system');
				$q="insert into registration values('$nametxt','$usernametxt','$emailtxt','$phonetxt','$passtxt','$conpasstxt',$adhartxt,'$gender')";
				if(strcmp($passtxt,$conpasstxt)!=0)
					echo"<h1>Password Not Match</h1>";
				else if(mysqli_query($con,$q))
					echo"<h1>Register</h1>";
				else
					echo"<h1>Error</h1>";
			}
		?>
      </form>
    
</body>
</html>