<?php
 include "connection.php";
 include "function.php";

 check_session();

 $q="select * from users";

 $result=mysqli_query($conn,$q);
?>

<!DOCTYPE html>
<html>
<head>
  <title>data show</title>
  <link rel="stylesheet" href="css/bootstrap.css"/>
</head>
<body>
  <div class="container">
  <h1   class="text-center btn-primary">show all Information</h1>

  <li class=""><a href="logout.php">Logout</a></li>
  
  <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Password</th>
      <th scope="col">Details</th>
    </tr>
  </thead>
  <tbody>
   <?php

     while($row=mysqli_fetch_array($result)){
     echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['mobile_no']."</td>";
            echo "<td>".$row['pass_word']."</td>";
           echo'<td><a href="details.php?id='.$row['id'].'" class="btn btn-success">Details</a></td>';
        echo "</tr>";
   }
   ?>
  </tbody>
</table>
</div>
</body>
</html>