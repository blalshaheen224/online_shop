<?php
 include('config.php');



 if(isset($_POST['upload']))
{
 $NAME = $_POST['name'];
 $PRICE = $_POST['price'];
 $IMAGE = $_FILES['image'];
 $image_extension = $IMAGE['tmp_name'];
 $image_name     = $IMAGE['name'];
 $image_up       = "images/".$image_name;
 $insert = "INSERT INTO prod(name , price , image) VALUES ('$NAME','$PRICE',' $image_up ')";
 mysqli_query($con,$insert);
 move_uploaded_file($image_extension,$image_up);
 header('location: index.php');
}



?>