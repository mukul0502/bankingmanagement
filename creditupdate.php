<?php
session_start();
$con = mysqli_connect("localhost", "id15134030_mukul", "UuV[9eD=+m(Cbn_X", "id15134030_banking");  
$Name1=$_POST['sender'];
$q="select amount from bankingman where Name='$Name1'";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
$var=$row['amount'];
$from=$_POST['sender'];
$to=$_POST['receiver'];
$q1="select amount from bankingman where Name='$to'";
$result1=mysqli_query($con,$q1);
$row=mysqli_fetch_array($result1);
$var1=$row['amount'];
session_destroy();
if ( $var > $_POST["transfer"] )
{
    $sub=$var-$_POST["transfer"];
    $q="update bankingman set amount='$sub' where name='$from' ";
    $result=mysqli_query($con,$q);
    $sum=$var1+$_POST["transfer"];
    $q="update bankingman set amount='$sum' where name='$to' ";
    $result=mysqli_query($con,$q);
    $c=$_POST["transfer"];
date_default_timezone_set("Asia/Kolkata");
$time=date("y-m-d H:i:s");
    $q="insert into record(sender,receiver,amount,timestamp)
		values('$from','$to','$c','$time')";
	$result=mysqli_query($con,$q);
    
        $message="Successful transfer";
   echo"<script type='text/javascript'>alert('$message');
   </script>";
    include 'costumer.php';
    
}
else
{
    $message="Insufficient Balance";
   echo"<script type='text/javascript'>alert('$message');
   </script>";
    include 'costumer.php';

}
?>