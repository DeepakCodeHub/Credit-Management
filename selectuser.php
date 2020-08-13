<?php
session_start();
$dbhost='localhost';
$username='root';
$password='';
$database='getdetail';
$con=mysqli_connect("$dbhost","$username","$password","$database");
$q="select * from UserDetail";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select User</title>
       <link rel="stylesheet" href="Assets/css/style1.css">
</head>
<body>


<form  action="userdetail.php" method="post">
    <h1 style="margin-left: 200px; font-family:Agency Bc"> Select User from list</h1>
    <table class="flat-table-1">


    <?php 
$dbhost='localhost';
$username='root';
$password='';
$database='getdetail';
$con=mysqli_connect("$dbhost","$username","$password","$database");
$q="select * from UserDetail";
$result=mysqli_query($con,$q);
//echo $_SESSION['name'];

?>




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


    <div class="view">

<table cellspacing=50px style="position: relative; left: 40%;">
  <tr>
      <td> <h2>Select User</h2></td>
   
<td>

<?php
$dbhost='localhost';
$username='root';
$password='';
$database='getdetail';
$con=mysqli_connect("$dbhost","$username","$password","$database");
$q="select * from UserDetail";
$result=mysqli_query($con,$q);
?>


  <select name="Name" onchange="this.form.submit()">
      <option style="text-align: left;" >--Select--</option>
   <?php  
     while($row = $result->fetch_assoc()) { ?>

      <option value="<?php echo $row['Name']; ?>"> <?php echo $row["Name"]; ?></option>

<?php }
  ?>
  
        </select>
      </td>
    </tr>
       <tr>
           <td></td>
           <!--<td><input type="submit" value="submit"></td>-->
    </tr>
        </table>
</div>
    </form> 
</body>
</html>