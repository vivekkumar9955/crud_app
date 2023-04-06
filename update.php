<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
    input {
        margin: 10px;
    }
    </style>
</head>

<body>

    <?php  
include 'config.php';
$id=$_GET['id'];
$record=mysqli_query($conn,"SELECT * FROM `tblcrud2` WHERE id= $id");
$data=mysqli_fetch_array($record);
?>
    <center>
        <div class="main">
            <form action="updata1.php" method="POST" enctype="multipart/form-data">
                <label for="">Name:</label>
                <input type="text" value="<?php echo $data['name']?>" name="name" id=""><br>
                <label for="">Price:</label>
                <input type="text" value="<?php echo $data['price']?>" name="price" id=""><br>
                <label for="">Image:</label>
                <input type="file" name="image" id="">
                <input type="hidden" name="old_image" value="<?php echo $data['image']?>">

                <div>
                    <img src="<?php echo $data['image']?>" width='200px' height='120px' alt="">
                </div>
                <input type="hidden" name="id" value="<?php echo $data['id']?>">
                <button type="submit" name="submit" class="btn btn-danger my-2">Update</button>
            </form>
        </div>
    </center>
</body>

</html>