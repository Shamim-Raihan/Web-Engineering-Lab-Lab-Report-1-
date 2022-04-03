<?php

include "connection.php";
$name=$_POST['name'];
$email=$_POST['email'];
$mobile_no=$_POST['mobile_no'];
$pass_word=$_POST['pass_word'];

$sql = "INSERT INTO users (name,email,mobile_no,pass_word)
VALUES ('$name', '$email', '$mobile_no','$pass_word')";

$result=mysqli_query($conn, $sql);
if ($result) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>