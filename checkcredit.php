<?php
session_start();
$dbhost='localhost';
$username='root';
$password='';
$database='getdetail';
$con=mysqli_connect("$dbhost","$username","$password","$database");
//echo $_SESSION['Name'];
$name1=$_SESSION['Name'];
//echo $name1;
$q="select Credit from UserDetail where Name='$name1'";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
$var=$row['Credit'];
$from=$_SESSION['Name'];
//echo $var;
//echo $_POST["transfer"];
//echo $_SESSION['to'];
$to=$_SESSION['to'];
//echo $_SESSION['Name'];
$q1="select Credit from UserDetail where Name='$to'";
$result1=mysqli_query($con,$q1);
$row=mysqli_fetch_array($result1);
$var1=$row['Credit'];
//echo $var1;
session_destroy();
if ( $var1 > $_POST["transfer"] )
{
    $sub=$var-$_POST["transfer"];
    $q="update UserDetail set Credit='$sub' where Name='$from' ";
    $result=mysqli_query($con,$q);
    $sum=$var1+$_POST["transfer"];
    $q="update UserDetail set Credit='$sum' where Name='$to' ";
    $result=mysqli_query($con,$q);
    
        $message="Successful transfer";
   echo"<script type='text/javascript'>alert('$message');
   </script>";
    include 'index.php';
    
}
else
{
    $message="Insufficient Balance";
   echo"<script type='text/javascript'>alert('$message');
   </script>";
    
    include 'index.php';

}
?>