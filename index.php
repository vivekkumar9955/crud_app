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
</head>

<body>
    <center>
        <div class="main">
            <form action="insert.php" method="POST" enctype="multipart/form-data">
                <label for="">Name:</label>
                <input type="text" name="name" id=""><br>
                <label for="">Price:</label>
                <input type="text" name="price" id=""><br>
                <label for="">Image:</label>
                <input type="file" name="image" id="">
                <button name="upload">Upload</button>
            </form>
        </div>
    </center>
    <div class="container">
        
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Price(rs)</th>
                <th scope="col">Image</th>
                <th scope="col">Delete</th>
                <th scope="col">UPdate</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
        include 'config.php';
        $sql="SELECT * FROM `tblcrud2` ";
        $result=mysqli_query($conn,$sql);
        while($row =mysqli_fetch_array($result)){
            echo "
            <tr>
            <td>$row[id]</td>
            <td>$row[name]</td>
            <td>$row[price]</td>
            <td><img src='$row[image]' width='120px' height='70px'</td>
            <td><a href='delete.php? id=$row[id]' class='btn btn-danger'>Delete</a></td>
            <td><a href='update.php? id=$row[id]' class='btn btn-danger'>Update</a></td>
            </tr>
            ";
        }
        ?>
        </tbody>
    </table>
</div>
</body>

</html>