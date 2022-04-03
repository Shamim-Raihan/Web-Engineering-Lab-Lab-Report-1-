
  

<html>
<head>
  <title>data show</title>
  <link rel="stylesheet" href="css/bootstrap.css"/>
</head>

<body>

<?php

    include ('connection.php');

    session_start();
    
    if (isset($_POST['login'])) {

      $email = $_POST['email'];
      $password = $_POST['password'];

      //$pass = md5($password);
// object oriented query
      $query = $conn->query("SELECT * FROM users WHERE email = '$email'  and pass_word = '$password'");

      if ($query->num_rows > 0) {

        while($row = $query->fetch_assoc()) {
          //session_start();
          $_SESSION['email'] = $row['email'];

          $_SESSION['pass_word'] = $row['pass_word'];

          header('Location: show.php');
          exit;
        }
      } else {
         echo "User name or password invalid";
      }
    }
  
?>

<div class="container">

<div class="row">

 <div class="col-sm-4"> 

 </div>


 <div class="col-sm-4"> 
<h1 class="page-header">Sign In</h1>
<hr>
<form class="form-signin" action="" method="post">
  <h2 class="form-signin-heading">Please sign in</h2>
  <label for="username" class="sr-only">Email address</label>
  <input type="text" id="username" name="email" class="form-control" placeholder="Email or Username" required autofocus>
  <label for="password" class="sr-only">Password</label>
  <input type="password" id="password" name="password" class="form-control" placeholder="Password or your identity number" required>
  <div class="checkbox">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <input type="submit" class="btn btn-lg btn-primary btn-block" type="submit" name="login" id="admin_login" value="Submit">
</form>

</div>

<div class="col-sm-4"> 

 </div>


</div>
</div> <!-- container end-->


</body>
</html>