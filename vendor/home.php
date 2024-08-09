<?php
include "authguard.php";
include "menu.html";

?>

<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="d-flex justify-content-center align-items-center vh-100">
  <form action="uploadproduct.php" method="post" enctype="multipart/form-data" class="w-50 bg-dark p-4">
    <h3 class="text-center text-white">Upload Products</h3>
    <input class="form-control mt-3" type="text" name="name" placeholder="Product name">
    <input class="form-control mt-2" type="text" name="price" min="0" placeholder="Product price">
    <textarea class="form-control mt-2" name="detail" cols="30" rows="5" placeholder="Product Description"></textarea>
    <input class="form-control mt-2" type="file" name="pdtimg" accept=".jpg, .png">
    <div class="text-center mt-3">
      <button class="btn btn-primary">Add product</button>
    </div>
  </form>
</div>
</body>
</html>