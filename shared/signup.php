<?php
print_r($_POST);
$conn=new mysqli("localhost", "root", "", "harshu2024", 3306);

// include_once "connection.php";

$query="insert into `user` (username, password, usertype) values('$_POST[username]','$_POST[password1]','$_POST[usertype]')";
echo $query;
$status=mysqli_query($conn,$query);
?>