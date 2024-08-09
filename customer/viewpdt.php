<html>

     <head>
          <style>
.container{
display: flex;
gap: 20px;
}
.pdt-card{
border: 3px solid white;
padding: 10px;
background-color: black ;
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
background-color: ;
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
button{
  color: white;
  background-color: blue;
}
 </style>
  </head>
   </html>


<?php
 include "menu.html";
 include "authguard.php";
include_once "../shared/connection.php";
$sql_result=mysqli_query($conn, "select * from product");
echo "<div class='container'>";
while($dbrow=mysqli_fetch_assoc($sql_result)){
echo "<div class='pdt-card'>
<div class='name'>#$dbrow[pid]$dbrow[name]</div>

<div class='price'>$dbrow[price]</div>

<div class='img-container'>
<img src='$dbrow[impath]'>
</div>
<div class='detail'>$dbrow[detail]</div>
<div class='action'>
 <a href='addcart.php?pid=$dbrow[pid]'> 

<button>Add to Cart</button>
</a>
</div>
</div>";
}
echo "</div>";
?>

