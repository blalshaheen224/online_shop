<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> products |   المنتجات </title>
    <style>
      h3
      {
        font-family: "Cairo", sans-serif;   
        font-weight: bold;
        color:white;
                                                                                                                                                                      
       
      }
      .card
      {
        float: right;
        margin-top:20px;
        margin-left:20px;
        margin-right:20px;
      }
      .card img
      {
        width: 100%;
        height:200px;
      }
      main
      {
        width: 80%;
        margin-right:120px;
      }
      #aa
      {
        font-family: "Cairo", sans-serif;   
        font-weight: bold;
        color:white;
      }
    </style>
</head>
<body>
    <nav class=" dark bg-dark">
        <a id="aa" class="navbar-brand" href="card.php">Mycard|عربتي</a>
    <center>
    <h3>جميع المنتجات المتوفرة</h3>
    </center>
 <?php
  include('config.php');
  $result = mysqli_query($con,"SELECT * FROM prod");
  while($row = mysqli_fetch_array($result))
  {
    echo "
    <center>
      <main>
           <div class='card' style='width: 18rem;'>
                 <img src='$row[image]' class='card-img-top'>
              <div class='card-body'>
                 <h5 class='card-title'>$row[name]</h5>
                 <p class='card-text'>$row[price]</p>
                 <a href=' val.php ? id=$row[id] ' class='btn btn-success'>شراء منتج</a>
              </div> 
           </div>
      </main>
    <center> 
    ";
  }
  
 ?>


   
</body>
</html>