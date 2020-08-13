<?php 
session_start();
$dbhost='localhost';
$username='root';
$password='';
$database='getdetail';
$con=mysqli_connect("$dbhost","$username","$password","$database");
$name=$_POST['Name'];
$q="select * from UserDetail where Name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$_SESSION['Name']=$name;

?>
<html>
<head>
   <title>
   viewUser
    </title>
    <link rel="stylesheet" href="Assets/css/style1.css">

</head>
    <body>
    <div class="view1">
        <h2 style="margin-left: 200px;font-family: Agency FB;font-size: 50px">User Information</h2>
       <table style="margin-left: 70px" class="a th1 flat-table-1">
          
           <th class="b">Name</th>
           <th class="b">Email</th>
           <th class="b">Mobile No.</th>
           <th class="b">Credit</th>
           <th class="b">User Id</th>
           <tr>
           <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td class="b"><?php echo  $row["Name"]; ?></td>
  <td class="b"><?php echo  $row["Email"]; ?></td>
   <td class="b"><?php echo  $row["Mobile No."]; ?></td>
  <td class="b"><?php echo  $row["Credit"]; ?></td>
   <td class="b"><?php echo  $row["User Id"]; ?></td>
    </tr>
    <tr>
        </table>

        </div>
        <br>
        <div class="css-button" >
                 <p class="css-button-text">Transfer To</p>
                 <div class="css-button-inner">
                 <a href="viewuser.php" >
                 <div class="reset-skew">
                 <p class="css-button-inner-text">Transfer To</p>
               </div></a>
               </div>
               </div>


               <br> <br> <br> <br> <br>
               <div class="css-button" >
                 <p class="css-button-text">Back</p>
                 <div class="css-button-inner">
                 <a href="selectuser.php.php" >
                 <div class="reset-skew">
                 <p class="css-button-inner-text">Back</p>
               </div></a>
               </div>
               </div>
               


    </body>
</html>