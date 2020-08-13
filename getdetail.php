<?php 
session_start();
$dbhost='localhost';
$username='root';
$password='';
$database='getdetail';
$con=mysqli_connect("$dbhost","$username","$password","$database");

$q="select * from UserDetail";
$result=mysqli_query($con,$q);
//echo $_SESSION['name'];

?>
<html>
<head>
   <title>
   viewUser
    </title>
    <link rel="stylesheet" href="Assets/css/style1.css">

    </head>
    <body>
        <h1 style="margin-left: 200px;font-family: Agency FB">User Information Detail</h1>
        <table class="flat-table-1">
	<thead class="th1">
		<th>Name</th>
		<th>Email</th>
    <th>Mobile No.</th>
		<th>Credit</th>
    <th>User Id</th>
		
	</thead>
	<tbody>
		<tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["Name"]; ?></td>
  <td><?php echo  $row["Email"]; ?></td>
   <td><?php echo  $row["Mobile No."]; ?></td>
  <td><?php echo  $row["Credit"]; ?></td>
   <td><?php echo  $row["User Id"]; ?></td>
		</tr>
		<tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["Name"]; ?></td>
  <td><?php echo  $row["Email"]; ?></td>
   <td><?php echo  $row["Mobile No."]; ?></td>
  <td><?php echo  $row["Credit"]; ?></td>
   <td><?php echo  $row["User Id"]; ?></td>
    </tr>
    <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["Name"]; ?></td>
  <td><?php echo  $row["Email"]; ?></td>
   <td><?php echo  $row["Mobile No."]; ?></td>
  <td><?php echo  $row["Credit"]; ?></td>
   <td><?php echo  $row["User Id"]; ?></td>
    </tr>
    <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["Name"]; ?></td>
  <td><?php echo  $row["Email"]; ?></td>
   <td><?php echo  $row["Mobile No."]; ?></td>
  <td><?php echo  $row["Credit"]; ?></td>
   <td><?php echo  $row["User Id"]; ?></td>
    </tr>
    <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["Name"]; ?></td>
  <td><?php echo  $row["Email"]; ?></td>
   <td><?php echo  $row["Mobile No."]; ?></td>
  <td><?php echo  $row["Credit"]; ?></td>
   <td><?php echo  $row["User Id"]; ?></td>
    </tr>
    <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["Name"]; ?></td>
  <td><?php echo  $row["Email"]; ?></td>
   <td><?php echo  $row["Mobile No."]; ?></td>
  <td><?php echo  $row["Credit"]; ?></td>
   <td><?php echo  $row["User Id"]; ?></td>
    </tr>
    <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["Name"]; ?></td>
  <td><?php echo  $row["Email"]; ?></td>
   <td><?php echo  $row["Mobile No."]; ?></td>
  <td><?php echo  $row["Credit"]; ?></td>
   <td><?php echo  $row["User Id"]; ?></td>
    </tr>
    <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["Name"]; ?></td>
  <td><?php echo  $row["Email"]; ?></td>
   <td><?php echo  $row["Mobile No."]; ?></td>
  <td><?php echo  $row["Credit"]; ?></td>
   <td><?php echo  $row["User Id"]; ?></td>
    </tr>
    <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["Name"]; ?></td>
  <td><?php echo  $row["Email"]; ?></td>
   <td><?php echo  $row["Mobile No."]; ?></td>
  <td><?php echo  $row["Credit"]; ?></td>
   <td><?php echo  $row["User Id"]; ?></td>
    </tr>
    <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["Name"]; ?></td>
  <td><?php echo  $row["Email"]; ?></td>
   <td><?php echo  $row["Mobile No."]; ?></td>
  <td><?php echo  $row["Credit"]; ?></td>
   <td><?php echo  $row["User Id"]; ?></td>
    </tr>
    <tr>
        
	</tbody>
</table>
         

           

        <br><br>
        <div class="css-button" >
                  <p class="css-button-text">Home</p>
                  <div class="css-button-inner">
                  <a href="index.php" >
                  <div class="reset-skew">
                  <p class="css-button-inner-text">Home</p>
                </div></a>
                </div>
                </div>
        
    </body>
</html>