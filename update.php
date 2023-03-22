<?php
    include "header.php";
    ?>
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- <link rel="stylesheet" href="style.css"> -->

<link href="https://fonts.googleapis.com/css2?family=Anton&family=Poppins:wght@200&family=Rubik:ital,wght@1,600&display=swap" rel="stylesheet">
<!-- <link rel="stylesheet" href="style.css"> -->

    <title>SMS</title>
    <style>
        .search{
            display:flex;
            margin-left:0px;
            width:70%;
            padding-top:0px;
            max-height: 200px;
            background: white;
            margin:auto;
            /* height: fit-contents; */
            margin-top:30px;
            text-align: center;
            /* align-items: center; */
             justify-content: center;
             border-radius:10px;
            position: relative;
        }
        .search input[type=number]{
            max-width:100px;
        }
       
        .col-75{
            /* margin-left:20px;  */
           width:300px;

            }
            
            .or{
                display: block;
                width:30px;
                padding-top:25px;
                /* border:2px solid black; */
                 text-align:center; 
                 align-items: center; 
                  justify-content: center 
            }
            .search-btn{
                position: relative;
                width:fit-content;
                height: fit-content;
                /* margin-left:300px; */
                width:200px;
            height: 50px;
            margin-top:10px;
            padding-left:20px;
            align-items:center;
            position: relative;
            
            }
            .savebtndiv{
                display:block;
                width:100px;
                margin:auto;
                padding-top:50px;

            }
          
            .heading{
                display:block;
                width:500px;
                padding-top:20%;
                margin-left:-700px;
                height: 400px;
                margin-top:60px;
                align-items:center;
                /* border:2px solid; */
                
                }

                .heading input{
                display:block;
                width:200px;

                align-items:center;
                
                /* margin-left:-1000px; */
                /* height: 600px; */
                /* margin-top:20px; */
                
                }
                .info{
                    display:block;
                    align-items:center;
                }
   
             body{
                display:block;
                width:100%;
                height:400px;
                /* border:2px solid; */
                position: absolute;
                }
                
        </style>
</head>
<body>
   
<div class="main">
    <form action="<?php  $_SERVER['PHP_SELF'];?>" method="GET">
        <div class="search">
             <div class="col-25">
                <label>Enter ID</label>
            </div>
            <div class="col-75">
                 <input type="number" name="id" placeholder="Enter ID...">
            </div>
            <div class="or">
                     OR
            </div>
            <div class="col-25">
                <label>Enter Name</label>
            </div>
            <div class="col-75">
                    <input type="text" name="studentname" placeholder="Enter Enter...">
            </div>
            <div class="search-btn">
                <button  class="save-btn" type="submit">Search</button>
            <div>
                
                </form>
    
</div>
<?php
$con=mysqli_connect('localhost','root','','nspcollege') or die("connection filaied");
$id=$_GET['id'];
$sql="SELECT * FROM studentrecords WHERE id='$id'" or die("Query");

$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0){

    while($row=mysqli_fetch_assoc($result)){
    ?>
      
    <div class="heading">
        <form action="updatedata.php" method="post" >
            <!-- <h1>Enter Student Data</h1> -->
            <div class="info">
               <div class="col-25">  <Label>Student Name</Label></div>
               <div class="col-75">
               <input type="hidden" name="id" value="<?php echo $row['id']?>"/>

                <input type="text" name="studentname" value="<?php echo $row['studentname']?>"></div>
                
               <div class="col-25"> <Label>Address</Label></div>
               <div class="col-75"><input type="text" name="address" value="<?php echo $row['address']?>"></div>

             </div>
            <!-- dfdsfjsldkjfsdfsdfsdfsadf -->
 <div class="course">
            <!-- <hr style="margin-top:20px;">  -->
            <div class="col-25">

                <label>Course Type</label>
            </div>
            <div class="col-75">
                <select  name="coursetype">
                <option value="" selected disabled>Select Course Type</option>
                <option>B.com</option>
                <option>BA</option>
                <option>BSC</option>
                <option>Mcom</option>
                <option>MA</option>
                <option>MSC</option>
                </select>
            </div>
            <div class="col-25">
                <label>Course Fees</label>
            </div>
            <div class="col-75">
                 <input class="number" name="coursefee" type="number" value="<?php echo $row['coursefee']?>">
            </div>
            <div class="col-25">
                <label>Advance Amount </label>
            </div>
            <div class="col-75">
                 <input class="number" name="advancefee" type="number" value="<?php echo $row['advancefee']?>">
            </div>

            <div class="savebtndiv">
            <button  class="save-btn" type="submit">Update</button>
        </div> 
 </div>
        </form>
        <?php } 
    }
    ?>    

    <!-- Sidebar (logout button also here placed) -->
    
 

</body>
</html>