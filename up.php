<?php
 include('config.php');



 if(isset($_POST['updata']))
{
 $ID   = $_POST['id'];
 $NAME = $_POST['name'];
 $PRICE = $_POST['price'];
 $IMAGE = $_FILES['image'];
 $image_extension = $IMAGE['tmp_name'];
 $image_name     = $IMAGE['name'];
 $image_up       = "images/".$image_name;
 $updata = "UPDATE prod SET name ='$NAME' , price = '$PRICE' , image = '$image_up' where id = $ID ";
 mysqli_query($con,$updata);
 move_uploaded_file($image_extension,$image_up);
 header('location: index.php');
}



?>