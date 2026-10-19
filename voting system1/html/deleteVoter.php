<!-- <!DOCTYPE html> -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/deleteVoterCandi.css">
    <link href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css rel='stylesheet'>

    <style>

    </style>
</head>

<body>
    <div>
        <?php
        include("navbar2.php");
        ?>
    </div>
    <div class="container1">
        <div class="wrapper">
            <form method=post>
                <h1>Remove Voter</h1>
                <div class="inputbox">
                    <h4 style="text-align: center;">Your addhar ID</h4>
                    <!-- <input type="text" placeholder="Username" required> -->
                    <!-- <i class="fa fa-sort-numeric-desc" ></i> -->

                </div>

                <div class="inputbox">
                    <input type="text" placeholder="addhar Number" name=aadhartxt>
                    <!-- <input type="password" onclick="myFunction()"> -->
                    <i class="fa fa-sort-numeric-desc" id="lock" aria-hidden="true"></i>
                </div>

                <button type="submit" class="btn" name=btn1>Delete</button>
        </div>
        <br>
        <?php
        extract($_POST);
        if (isset($btn1)) {
            $con = mysqli_connect('localhost', 'root', '', 'voting system');
            $q = "select * from voter_details where aadhar='$aadhartxt'";
            $result = mysqli_query($con, $q);
            $n = $result->num_rows;
            if ($n == 0) {
                ?>
                <script>alert('Not Present');</script>
                <?php
            } else {
                $con = mysqli_connect('localhost', 'root', '', 'voting system');
                $q2 = "delete from voter_details where aadhar='$aadhartxt'";
                if (mysqli_query($con, $q2)) {
                    ?>
                    <script>alert('Successfully Remove');</script>
                    <?php
                }

            }
        }
        ?>
        </form>
    </div>
</body>

</html>