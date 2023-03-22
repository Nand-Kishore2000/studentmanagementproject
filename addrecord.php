<?php
include "config.php";
// $con=mysqli_connect('localhost','root','','nspcollege') or die("connection failed");
// print_r($_POST);
$studentname=$_POST['studentname'];
$address=$_POST['address'];
$coursetype=$_POST['coursetype'];
$coursefee=$_POST['coursefee'];
$advancefee=$_POST['advancefee'];
// error_reporting(1);

$sql="INSERT INTO studentrecords(studentname,address,coursetype,coursefee,advancefee)VALUES('$studentname','$address','$coursetype','$coursefee','$advancefee')";
$result=mysqli_query($con,$sql);
if($result)
{
  header("Location:{$hostname}/view.php");
}
else
{
    echo "somthing went wrong";
}
mysqli_close($con);
// echo "hello";
?>
