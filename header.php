<?php
    include "config.php";
    session_start();
    if(!isset($_SESSION["username"])){
        header("Location: {$hostname}/login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="view.css">
 
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Poppins:wght@200&family=Rubik:ital,wght@1,600&display=swap" rel="stylesheet">

<style>
         .savebtndiv{
            display: block;
            width:fit-content;
            height: fit-content;
            /* border: 2px solid black; */
            position: relative;
            margin-top:300px;
            overflow-y: hidden;

        }
        .heading-line h1{
            display:block;
            
        }
    </style>
    <title>SMS</title>
    
</head>
<body>
    <navbar class="navbar">
        <img> 
        <h1>Students Records</h1>
       <a href="logout.php"> <button>Log Out</button></a>

    </navbar>
    <div class="allbtn">
        <a href="add.php"><button>Add Records</button></a>
        <a href="view.php"><button>View All Records</button></a>
        <a href="update.php"><button>Update Records</button></a>
        <a href="view.php"><button>Delete Records</button></a>
    </div>

    <!-- Sidebar (logout button also here placed) -->
    <!-- Right Side Dashboard -->

   
   
</body>
</html>