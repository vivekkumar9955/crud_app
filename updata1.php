<?php
include 'config.php';
$IMAGE='';
if(isset($_POST['submit'])){
//    print_r($_POST);exit;
   
    $id=$_POST['id'];
   $NAME=$_POST["name"];
   $PRICE=$_POST["price"];
   $IMAGE=$_FILES["image"];
   // echo $IMAGE1;exit;
//    print_r($_FILES['image']);
// echo"<pre>";
// print_r($_POST);
// print_r($_FILES);
// exit;
   if(!empty($_FILES['image']['tmp_name'])){
     
    $img_loc=$_FILES['image']['tmp_name'];
    $img_name=$_FILES['image']['name'];
    $img_des="uploadimage/".$img_name;
    move_uploaded_file($img_loc,'uploadimage/'.$img_name);
    $sql="UPDATE `tblcrud2` SET `name`='$NAME',`price`='$PRICE',`image`='$img_des' WHERE id=$id"; 
   }
   else{
    
      $IMAGE1=$_POST["old_image"];
      // echo $IMAGE1;exit;

    $sql="UPDATE `tblcrud2` SET `name`='$NAME',`price`='$PRICE',`image`='$IMAGE1' WHERE id=$id";
   }
   
   // echo $img_name;exit;
            // $img_name=$_FILES['old_image']['name'];
            
        

   //data inserted here

  
    // print_r($sql);exit;
   $result=mysqli_query($conn,$sql);
   header("location:index.php");
   if($result){
    echo "data updata  success";
   }
   header("location:index.php");




}

?> 

