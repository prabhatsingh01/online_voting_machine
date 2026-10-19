<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="css/AdminLoginStyle.css">
  <link href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css rel='stylesheet'>
</head>

<body>
  <!-- style="background-image:url(img/c8.jpg);" -->
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
            <h1>Admin Login</h1>
            <div class="inputbox">
              <input type="text" name=nametxt placeholder="Username" required>
              <i class="fa fa-user" aria-hidden="true"></i>
            </div>

            <div class="inputbox">
              <input type="password" name=passwordtxt placeholder="Password" id="myInput">
              <i class="fa fa-sort-numeric-desc" id="lock" aria-hidden="true"></i>
            </div>

            <div class="remember-forget">
              <div class="remember">
                <input type="checkbox" id="remember">
                <label for="remember" required>Remember Me </label>
              </div>
              <a href="change_password.php">Forget Password</a>
            </div>


            <button type="submit" class="btn" name=b>Login</button>

            <!-- <div class="reg">
            <p>Don't have on account?<a href="reg2.php">Register</a></p>
          </div> -->

          </form>
        </div>
        <script>
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
        </script>
        <?php
        extract($_POST);
        if (isset($b)) {
          $con = mysqli_connect('localhost', 'root', '', 'voting system');
          $q = "select * from registration where name='$nametxt' and conpassword='$passwordtxt'";
          $result = mysqli_query($con, $q);
          $n = $result->num_rows;
          if ($n == 0) {
            ?>
            <script>alert("Incorrect");</script>
            <?php
          } else
            header("location:admin_dashboard.php");
        }
        ?>
      </form>
    </div>
  </section>
</body>

</html>