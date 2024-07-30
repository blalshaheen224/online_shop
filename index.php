<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop online | اضافة منتجات</title>
    <link rel="stylesheet" href="index.css">

    

</head>
<body>
    <center>
    <div class="main">
      <form action="insert.php" method="post" enctype="multipart/form-data">
        <h2>موقع تسويقي اولانلاين</h2>
        <img src="image\logo.jpg" alt="erro" width = "200px">
        <br>
        <input type="text" name="name" id="">
        <br>
        <input type="text" name = "price">
        <br>
        <input type="file" id ="file" name="image" style='display:none;'>
        <label for="file">اخيار صورة المنتج </label>
        <button name="upload"> رفع المنتجات</button>
        <br> <br>
        <a href="products.php">عرض كل المنتجات</a>
      </form>






    </div>

          <p>Devloper By Blal </p >
    </center>
</body>
</html>