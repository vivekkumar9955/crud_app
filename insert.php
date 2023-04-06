<?php
include 'config.php';
if(isset($_POST['upload'])){
   $NAME=$_POST["name"];
   $PRICE=$_POST["price"];
   $IMAGE=$_FILES["image"];
   //print_r($_FILES['image']);
   $img_loc=$_FILES['image']['tmp_name'];
   $img_name=$_FILES['image']['name'];
   $img_des="uploadimage/".$img_name;
   move_uploaded_file($img_loc,'uploadimage/'.$img_name);
   

   //data inserted here

   $sql="INSERT INTO `tblcrud2` ( `name`, `price`, `image`) VALUES ( '$NAME', '$PRICE', '$img_des')";
    
   $result=mysqli_query($conn,$sql);
   if(!$result){
    echo "data does not inserted successfull";
   }
   echo " data inserted success";
   





}

?>
