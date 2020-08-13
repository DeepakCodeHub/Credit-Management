<?php
session_start();
$dbhost='localhost';
$username='root';
$password='';
$database='getdetail';
$con=mysqli_connect("$dbhost","$username","$password","$database");
//echo $_SESSION['Name'];
$name1=$_SESSION['Name'];
$q="select Name from UserDetail where not Name='$name1'";
$result=mysqli_query($con,$q);

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
        <h1 style="margin-left: 40px;font-family: Agency FB;font-size: 50px">Choose name of user for  credit transfer</h1>
        <form action="transfer.php" method="post" style="position: relative; left: 20%;">
       <table>
           <th><h2 style="font-family: Agency FB;font-size: 45px">User List</h2></th>
           <?php  
     while($row = $result->fetch_assoc()) { ?>

        
   <tr>
       <td> <input type="radio" name="transfer" value="<?php echo $row["Name"]; ?>"><?php echo $row["Name"]; ?></td>
      
   </tr>
<?php }
  ?>
       <tr>
          
           <td><input class="but" type="submit" value="credit"></td>
           </tr>
        </table>
        </form>
        </div>
    </body>
</html>