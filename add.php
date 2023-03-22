    <!-- Makes website more secure  -->

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Poppins:wght@200&family=Rubik:ital,wght@1,600&display=swap" rel="stylesheet">

        <title>SMS</title>
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
                border:2px solid black;
            }
        </style>
        
    </head>
    <body>
        <!-- <navbar class="navbar">
            <img> 
            <h1>Students Records</h1>
            <button onclick="logout()" >
                
                Log Out</button>
        </navbar>
        <div class="allbtn">
            <button onClick="myFunction()">Add Records</button>
            <button onClick="view()" >View All Records</button>
            <button>Update Records</button>
            <button>Delete Records</button>


        </div> -->

        <?php
            include "header.php";
        ?>
        <!-- Input Fields student -->
        <div class="heading">
            <form action="addrecord.php" method="post" >
                <h1>Enter Student Data</h1>
                <div class="info">
                <div class="col-25">  <Label>Student Name</Label></div>
                <div class="col-75"><input type="text" name="studentname"></div>
                    
                <div class="col-25"> <Label>Address</Label></div>
                <div class="col-75"><input type="text" name="address"></div>

            </div>
            
            <!-- <h1>Course Details</h1> -->
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
                    <input class="number" name="coursefee" type="number">
                </div>
                <div class="col-25">
                    <label>Advance Amount </label>
                </div>
                <div class="col-75">
                    <input class="number" name="advancefee" type="number">
                </div>
                
            </div>
            <div class="savebtndiv">
                <button  class="save-btn" type="submit">Save</button>
            </div>
        </form>
        
        </div>

        <!-- Sidebar (logout button also here placed) -->
        <!-- Right Side Dashboard -->
        <div class="dashboard">
            <div class="sub-dashboard">
                <div class="totalfee">
                    <span>150,000</span>
                    <div class="txtfee">Total Fees</div>
                </div>
                <div class="debt">

                </div>
                <div class="totalstudent">
                    
                </div>
                
            </div>
        </div>
     
      

        <!-- <script>
        function myFunction() {
        window.location.href = "add.php";
        }
        function logout() {
        window.location.href = "logout.php";
        }
        function view() {
        window.location.href = "view.php";
        }
    </script>  -->
    
    </body>
    </html>