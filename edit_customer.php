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
            $data = mysqli_query($koneksi, "select * from customer where id = '$id'");
            $row = mysqli_fetch_assoc($data);

            ?>
            <form action="" method="post" role="form">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="name" required="" class="form-control" value="<?= $row['customer_name'];?>">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" value="<?=$row['email'];?>">
                </div>
                <button type="submit" class="btn btn-primary" name="submit" value="save">Update Data</button>
            </form>

            <?php

            if(isset($_POST['submit'])) {
                $customer_name = $_POST['name'];
                $email = $_POST['email'];

                mysqli_query($koneksi, "update customer set customer_name='$customer_name', email='$email'where id='$id'") or die(mysqli_error($koneksi));

                echo "<script>alert('data berhasil update.');window.location='customer.php';</script>";
            }

            ?>
        </div>
    </div>
    </div>

    <script type="text/javascript" src="assets/bootstrap.min.js"></script>
    
</body>
</html>