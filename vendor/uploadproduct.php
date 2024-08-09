<?php
// print_r($_POST);
// echo "<br>";
// print_r($_FILES);

// echo "<br>";
// echo "Name of file=".$_FILES['pdtimg']['name'];
// echo "<br>";

// echo "Temp Path of file=".$_FILES['pdtimg']['tmp_name'];
// echo "<br>";
// echo "Size of file=".$_FILES['pdtimg']['size'];

// $source=$_FILES['pdtimg']["tmp_name"];
// $target="../shared/images/".$_FILES['pdtimg']['name'];
// move_uploaded_file($source, $target);

session_start();
$source=$_FILES['pdtimg']["tmp_name"];
$target="../shared/images/".$_FILES['pdtimg']['name'];
move_uploaded_file($source, $target);
// $conn=new mysqli("localhost", "root", "", "harshu2024", 3306);

include_once "../shared/connection.php";

$sql_status=mysqli_query($conn, "insert into product (name, price, detail, impath, owner) values('$_POST[name]', $_POST[price], '$_POST[detail]','$target', $_SESSION[userid])");
if($sql_status)
{
echo "Product Uploaded Successfully";
}
else{
echo "ERROR".mysqli_error($conn);
}
?>








