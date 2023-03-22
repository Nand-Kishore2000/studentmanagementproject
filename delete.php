<?php
include "header.php";
// session_start();
$id =$_GET['id'];
include "config.php";
if(!isset($_SESSION["username"])){
    header("Location: {$hostname}/login.php");
}
// $con=mysqli_connect('localhost','root','','nspcollege') or die('Connection failed');

$sql="DELETE FROM studentrecords WHERE id={$id}";
$result_delete=mysqli_query($con,$sql);
if($result_delete>0){

    header("Location: {$hostname}/view.php");
}
mysqli_close($con);
// exit();
?>

