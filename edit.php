<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PiksMart</title>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
</head>
<body>
    <div class="container col-md-6 mt-4">
    <h1>Table Barang</h1>
    <div class="card">
        <div class="card-header bg-dark text-white">
            Edit Barang
        </div>
        <div class="card-body">
            <?php
            include('koneksi.php');

            $id = $_GET['id'];
            $data = mysqli_query($koneksi, "select * from product where id = '$id'");
            $row = mysqli_fetch_assoc($data);

            ?>
            <form action="" method="post" role="form">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" required="" class="form-control" value="<?= $row['name'];?>">

                    <input type="hidden" name="id" required="" value="<?= $row['id']?>">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="text" name="image" class="form-control" value="<?=$row['image'];?>">
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" name="price" class="form-control" value="<?=$row['price'];?>">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" name="description" value="<?=$row['description'];?>"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="submit" value="save">Update Data</button>
            </form>

            <?php

            if(isset($_POST['submit'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $image = $_POST['image'];
                $price = $_POST['price'];
                $description = $_POST['description'];

                mysqli_query($koneksi, "update product set name='$name', image='$image', price='$price', 
                description='$description' where id='$id'") or die(mysqli_error($koneksi));

                echo "<script>alert('data berhasil update.');window.location='barang.php';</script>";
            }

            ?>
        </div>
    </div>
    </div>

    <script type="text/javascript" src="assets/bootstrap.min.js"></script>
    
</body>
</html>