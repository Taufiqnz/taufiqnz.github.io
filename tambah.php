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
                Tambah Barang
            </div>
        <div class="card-body">
            <form action="" method="post" role="form">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" required="" class="form-control">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="text" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" name="price" class="form-control">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" name="description"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan data</button>
            </form>
            <?php
            include('koneksi.php');

            if(isset($_POST['submit'])) {
                $name = $_POST['name'];
                $image = $_POST['image'];
                $price = $_POST['price'];
                $description = $_POST['description'];

                $datas = mysqli_query($koneksi, "insert into product (name,image,price,description)values
                ('$name', '$image', '$price', '$description')") or die(mysqli_error($koneksi));
                
                echo "<script>alert('data berhasil disimpan.');window.location='barang.php';</script>";
            }
            ?>
        </div>

        </div>

    </div>
        <script type="text/javascript" src="assets/bootstrap.min.js"></script>
</body>
</html>