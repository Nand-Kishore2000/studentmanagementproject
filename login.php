
<?php
 session_start();
?>
<?php
    
    if(isset($_POST["login"])){
            include "config.php";
            $username = mysqli_real_escape_string($con,$_POST['username']);
            $password=$_POST['password'];
        //data fetch from database table studentrecords
           $sql="SELECT username,password FROM logindata WHERE username='{$username}' AND password='{$password}'";
            
            $result= mysqli_query($con, $sql) or die("query failed");
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result))
                {  
                    
                    $_SESSION["username"]=$row['username'];
                    $_SESSION["password"]=$row['password'];
                   
                    //  $_SESSION["id"]=$row['id'];


                    header("Location: {$hostname}/add.php");

                }
                
            }
            else{
                echo "<div >
                    User name and Password are incorrect
                </div>";
            }
        }
   
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Poppins:wght@200&family=Rubik:ital,wght@1,600&display=swap" rel="stylesheet">
    <title>Log In</title>
    <style>
        *{
            font-size: medium;
            font-family: maven pro, Sans-serif;
            font-weight: 700;
            margin: 0px;
            /* background-color:violet; */
            /* line-height: 64px; */
           

        }

        .main {
            padding-top: 100px;
            display: inline-flex;
            width: 100%;
            margin: auto;
            position: relative;
            text-align: center;
            justify-content: center;
        }

        .signup,
        .login {
            max-width: 300px;
            height: 300px;
            
            display: block;
            /* color: white; */
            /* background-color: #9c9797; */
            border-radius: 15px;
            line-height: 25px;
            -webkit-box-shadow: 3px 3px 5px 6px #ccc;
            /* Safari 3-4, iOS 4.0.2 - 4.2, Android 2.3+ */
            -moz-box-shadow: 3px 3px 5px 6px #ccc;
            /* Firefox 3.5 - 3.6 */
            box-shadow: 3px 3px 5px 6px #ccc;

        }

        .signup {
            justify-content: space-between;
            width: 90%;
            box-shadow: 15px;
            /* height: 200px; */
            height: 370px;
            padding-top: 50px;
            margin-left: 500px;



        }

        input {
            outline: none;
            /* border-radius: 2px; */
            line-height: 25px;
            width: 200px;
            border-color: #353535;
            border-width: 0 0 1px;
            border-radius: 0;
            /* border-bottom: 1px solid gray ; */
            font-weight: 100;
            background-color: 1px solid #818a91;
            background-color: transparent;
            /* box-shadow: 1px 1px 1px 1px black; */
        }
     /* / * background-color: rgb(119, 22, 22); */ */
    
        label{
            margin-top: 30px;
        }
          
        .login {
            margin-left: 200px;
            width: 90%;
            padding-top: 20px;
            /* height: 200px; */

        }

        .btn {
            margin-top: 20px;
           color: white;
           background-color: black;
           padding: 5px 10px 5px 10px;
           cursor: pointer;


        }
        .header{
            margin: 0;
            display: block;
            position: relative;
            height: 100px;
            font-size: 50px;
            /* align-items: center; */
            padding-top: 15px;
            text-align: center;
            box-shadow: 0px 0px 10px 0px #ccc;
            /* text-decoration-style: dashed; */
        }
       
     img{
        
            /* object-fit: contain; */
            position: absolute;
            overflow:hidden;
            width: 100%;
            height: 100%;
            background-repeat: no-repeat;
            background-attachment: fixed;
            
        }
        h1{
            font-size: 25px;
            color: white;
            margin-bottom: 20px;
        }
        .loginheading{
            
            margin-top: 20px;
        }
       
    </style>
</head>

<body>
    <img  class="bgc" src="img/bgc.png">
    <header class="header">Student Management System</header>
    <div class="main">
        <!-- Sign-up div -->
        <div class="signup">
          <h1>For New User</h1>
          <form action="signupconfig.php" method="post">

            <label for="name">Name</label><br>
            <input name="name" type="text"><br>
            <label for="email">E-Mail</label><br>
            <input name="email" type="email"><br>
            <label for="password">password</label><br>
            <input name="password" type="password"><br>
            <label for="password">re-password</label><br>
            <input name="repassword" type="password"><br>
            <button class="btn">Sign Up</button>
    </form>
        </div>
        <!-- </br> -->
        <!-- Log In Div -->
        <div class="login">
            <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
            <h1 class="loginheading">Login here</h1>
            <label for="username">Username</label><br><input name="username" type="text"><br>
            <label for="password">Password</label><br><input name="password" type="password"><br>
            <button name="login" class="btn">Log In</button>

    </form>
        </div>

    </div>
    
</body>

</html>