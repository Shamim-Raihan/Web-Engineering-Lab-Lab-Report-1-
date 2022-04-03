<!DOCTYPE html>
<html lang="en">
<?php
include_once("config.php");
session_start();
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM reg_user WHERE user_email='$email' and user_pass='$password'";

    $result = mysqli_query($mysqli, $query);
    $rows = mysqli_num_rows($result);

    if ($rows == 1) {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;


        header("Location: user_list.php");
    } else {
        echo "error";
    }
}
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Register</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="top-content">
        <div class="inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <h1><strong>Login Register Form</strong></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <div class="form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3><strong>Sign in</strong></h3>
                                    <p><strong>Enter username and password :</strong></p>
                                </div>
                                <div class="form-top-right"> </div>
                            </div>
                            <div class="form-bottom">
                                <form role="form" action="" method="post" class="login-form">
                                    <div class="form-group">
                                        <label class="sr-only" for="form-username">Email</label>
                                        <input type="text" name="email" placeholder="email..." class="form-username form-control" id="form-username">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-password">Password</label>
                                        <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
                                    </div>
                                    <button type="submit" class="btn" name="submit"><strong>Sign in</strong></button>
                                </form>
                            </div>
                            <a href="registration.php" class="btn btn-info" role="button" style="float:right;">Registration</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>