<?php
include "connection.php";

$id=$_GET['id'];

$q="select * from users where id=$id";

$result=mysqli_query($conn,$q);

while($row=mysqli_fetch_array($result)){

echo "name:".$row['name']."</br>";
echo "email:".$row['email']."</br>";
echo "moblie:".$row['mobile_no']."</br>";
echo "name:".$row['pass_word']."</br>";

}
