<?php include "header.php"
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="view.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Poppins:wght@200&family=Rubik:ital,wght@1,600&display=swap" rel="stylesheet">

    <title>SMS</title>
    <style>
    tr {
        background-color: #f2f2f2;
        text-align:center;
        /* border: 1px solid black; */
         /* border-collapse: collapse; */
  }
  .container{
    position: relative;
    display: block;
    width: 70%;
    /* padding-top:50px; */
    height: 500px;
    overflow: scroll;
    margin: auto;
    margin-left:340px;
    

    
}

th,td {
    padding:10px 30px 10px 30px;
    
    
}
th{
    padding:10px 30px 10px 30px;
    

}

thead {
    /* display:block; */
    position: relative;
    margin:0px;
    padding:0px;
    background-color: gray;
}
.heading-line{
    padding-top:20px  ;
    background-color: whitesmoke;
    width: 70%;
    margin:auto;
    margin-left:345px;
    border-radius:10px;
    margin-bottom:5px;
    margin-top:10px;
    align-items: center;

}
tr:nth-child(even) {
  background-color: #D6EEEE;
}

        </style>
   
</head>
<body>
<div class="heading-line">   
    <h1>All Records</h1>
</div>
<div class="container">
<?php
$con = mysqli_connect('localhost','root','','nspcollege');
$sql = "SELECT * FROM studentrecords";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0){
        ?>
   
   <table cellpadding="7px" style="float:right"> 
        <thead>
            <th>ID</th>
            <th style="padding:10px 10px 10px 40px;">Student Name</th>
            <th style="padding:10px 30px 10px 80px;">Address</th>
            <th>Type</th>
            <th>Course Fee</th>
            <th>Advance fee</th>
            <th>Edit</th>
            <th>Delete</th>

        </thead>
        <tbody>
        <?php 
        while($row=mysqli_fetch_assoc($result)){
            ?>
        <tr>
            <td>
                <?php echo $row['id']; ?>
            </td>
            <td>
                <?php echo $row['studentname']; ?>
            </td>
            <td>
                <?php echo $row['address']; ?>
            </td>
            <td>
                <?php echo $row['coursetype']; ?>
            </td>
            <td>
                <?php echo $row['coursefee']; ?>
            </td>
            <td>
                <?php echo $row['advancefee']; ?>
            </td>
            <td>
            <a href='update.php?id=<?php echo $row['id']; ?>'><i class="fa-regular fa-pen-to-square"></i>Edit</a>
            </td>
            <td>
                <a href="delete.php?id=<?php echo $row['id'];?>"><i class="fa-solid fa-trash"></i>Delete</a>
            </td>
        </tr>
        <?php }?>
        </tbody>
  
        
    </table>
    <?php }
    else{
        echo "someting went wrong";
    } ?>
    
</div>

</body>
</html>
