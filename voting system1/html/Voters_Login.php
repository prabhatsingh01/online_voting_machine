<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="css/AdminLoginStyle.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

  <link href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css rel='stylesheet'>
</head>

<body>
  <section>
    <?php
    include("navbar.php");
    ?>
  </section>
  <section>
    <div id="container1">
      <form method=post>
        <div class="wrapper">
          <form>
            <h1>Voter Login</h1>
            <div class="inputbox">
              <input type="text" name=nametxt placeholder="Username" required>
              <i class="fa fa-user" aria-hidden="true"></i>
              <!-- <i class="fa-solid fa-user"></i> -->

            </div>

            <div class="inputbox">
              <input type="text" name=aadhartxt placeholder="addharNumber" id="myInput" required>
              <i class="fa fa-sort-numeric-desc" id="lock" aria-hidden="true"></i>
            </div>
            <!-- <div class="form-group has-feedback">
              <input type="text" class="form-control login-input" name="aadhartxt" placeholder="Aadhar No." required>
            </div> -->

            <div class="remember-forget">
              <div class="remember">
                <input type="checkbox" id="remember">
                <label for="remember" required>Remember Me </label>
              </div>
              <a href="addVoter.php">! Not Registerd</a>
            </div>


            <button type="submit" class="btn" name=log>Login</button>

            <!-- <div class="reg">
            <p>Don't have on account?<a href="reg2.php">Register</a></p>
          </div> -->

          </form>
        </div>
        <!-- <script>
          document.getElementById("lock").addEventListener("click", function () {
            var x = document.getElementById("myInput");
            if (x.type == "password") {
              x.type = "text";
              this.classList.add("fa-lock-open");
              this.classList.remove("fa-lock");

            } else {
              x.type = "password";
              this.classList.remove("fa-lock-open");
              this.classList.add("fa-lock");
            }
          });
        </script> -->
        <?php
        extract($_POST);
        if (isset($log)) {
          $con = mysqli_connect('localhost', 'root', '', 'voting system');
          $q1 = "select cast_vote from voter_details where Name='$nametxt' and aadhar='$aadhartxt'";
          $result=mysqli_query($con,$q1);
          $row = $result->fetch_array();
          $ans=$row['cast_vote'];
          if($ans==0){
            $q2 = "select * from voter_details where Name='$nametxt' and aadhar='$aadhartxt'";
            $result = mysqli_query($con, $q2);
            $n = $result->num_rows;
            if ($n == 0) {
              ?>
              <script>alert("Incorrect");</script>
              <?php
            } else {
              $q3="update voter_details set cast_vote=1 where aadhar='$aadhartxt';";
              $res=mysqli_query($con,$q3);
              header("location:ballot.php");
            }  
          }else{
            ?>
            <script>alert('You have already vote');</script>
            <?php
          }        
        }
        ?>
      </form>
    </div>
  </section>
</body>

</html>