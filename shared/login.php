<?php
session_start();
$_SESSION['login_status']=false;
// $conn=new mysqli("localhost", "root", "", "harshu2024", 3306);

include_once "connection.php";

$uname=$_POST['username'];

$pass=$_POST['password'];

$query="select * from user where username='$uname' and password='$pass'";
echo $query."<br>";
$sql_result=mysqli_query($conn, $query);
if(mysqli_num_rows($sql_result)>0){
  $dbrow=mysqli_fetch_assoc($sql_result);
  echo "<h1>Login Success</h1>";
  print_r($dbrow);
 
  $_SESSION['login_status']=true;
  $_SESSION['usertype']=$dbrow['usertype'];
  $_SESSION['userid']=$dbrow['userid'];
  $_SESSION['username']=$dbrow['username'];

  if ($dbrow['usertype'] == 'Vendor') 
  {
    header('location:../vendor/home.php');
  } else if ($dbrow['usertype']=='Customer') 
  {
    header('location:../customer/viewpdt.php');
  }
} else{
  echo "<h1>Login Failed</h1>";
}
?>
