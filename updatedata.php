<?php

$id=$_POST['id'];
$studentname=$_POST['studentname'];
$address=$_POST['address'];
$coursetype=$_POST['coursetype'];
$coursefee=$_POST['coursefee'];
$advancefee=$_POST['advancefee'];

$con=mysqli_connect('localhost','root','','nspcollege') or die("conneciton failed");
$sql="UPDATE studentrecords SET studentname='{$studentname}', address ='{$address}', coursetype ='{$coursetype}',coursefee='{$coursefee}',advancefee ='{$advancefee}' WHERE id='{$id}'";

$result=mysqli_query($con,$sql);

mysqli_close($con);
header("Location:{$hostname}/studentproject/view.php");


?>