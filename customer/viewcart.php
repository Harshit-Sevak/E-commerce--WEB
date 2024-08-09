<html>

     <head>
          <style>
.container{
display: flex;
gap: 20px;
}
.pdt-card{
border: 3px solid black;
padding: 10px;
background-color: black;
}
.name{
font-size: 28px;
     color:white;
   font-weight: bold;
}
 .price{
      font-size: 24px;
         font-family: cursive;
      color: white;
}
.price::after{
content: "Rs ";
font-size: 16px;


}
.detail{
    margin: top 10px;;
background-color: black ;
border-radius: 20px;
color:white;
width: fit-content;
padding: 5px;
}
.action {
  display: flex;
  margin-top: 10px;
  justify-content: space-around;
}

.img-container {
  width: 180px;
  height: 200px;
}

img {
  width: 100%;
  height: 100%;
  border-radius: 16px;
}
 </style>
  </head>
   </html>


<?php

include "authguard.php";
include "../shared/connection.php";
include "menu.html";

$sql_result = mysqli_query($conn, "select * from cart join product on cart.pid = product.pid where userid = $_SESSION[userid]");

echo "<div class='container'>";
while ($dbrow = mysqli_fetch_assoc($sql_result)) {

    echo "<div class='pdt-card'>
        <div class='name'>#$dbrow[pid]$dbrow[name]</div>
        <div class='price'>$dbrow[price]</div>
        <div class='img-container'>
            <img src='$dbrow[impath]'>
        </div>
        <div class='detail'>$dbrow[detail]</div>
        <div class='action'>
            <a href='deletecart.php?cartid=$dbrow[cartid]'>
                <button class='btn btn-danger'>Remove from Cart</button>
            </a>
        </div>
    </div>";
}

echo "</div>";
?>

