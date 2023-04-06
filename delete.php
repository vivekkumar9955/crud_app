<?php
include 'config.php';
$id=$_GET['id'];
$sql="DELETE FROM `tblcrud2` WHERE `id` = $id";

$result=mysqli_query($conn,$sql);
header('location:index.php');
?>