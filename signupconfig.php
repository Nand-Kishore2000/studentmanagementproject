<?php
include "config.php";
// $con=mysqli_connect('localhost','root','','nspcollege');
$username=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];

$sql="INSERT INTO logindata(username,password,repassword,email)
VALUES('$username','$password','$repassword','$email')";
if(mysqli_query($con,$sql)){
    header("Location:{$hostname}/login.php");
}
else{
    echo "something  gone wrong dude";
}
mysqli_close($con);
// print_r($_POST);



?>