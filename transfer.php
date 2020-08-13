<?php
session_start();
$dbhost='localhost';
$username='root';
$password='';
$database='getdetail';
$con=mysqli_connect("$dbhost","$username","$password","$database");

$q="select name from UserDetail";
$result=mysqli_query($con,$q);
//echo $_POST["transfer"];
$_SESSION['to']=$_POST["transfer"];
?>
<html>
<head>
   <title>
   viewUser
    </title>
    <link rel="stylesheet" href="Assets/css/style1.css">
   <style>
     
         input[type=text]
        { 
            margin-right: 10px

            width:10em;
            height:2em;
            font-size:20px;
            font-weight: bold;
        }
         input[type=submit]
        { 
            margin-left: 200px;
            width:6em;
            height:2em;
            font-size:15px;
            background-color: brown;
            font-weight: bold;
        }
       
    </style>
    </head>
    <body>
     <form action="checkcredit.php" method="post"  style="position: relative; top:20%; ">
          <div class="view1">
              <h1 style="margin-left: 250px;font-family: Agency FB;font-size: 45px">Transfer Amount:</h1>
          <br>
            <br>
          <input style="margin-left: 250px" type="text" name="transfer"><br>
          <br>
        
          <input style="margin-left: 340px" type="submit">
        
        </div>
        </form>

        
    </body>
</html>
