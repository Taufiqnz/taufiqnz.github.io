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
        <h1>Data Customer</h1>
        <div class="card">
            <div class="card-header bg-dark text-white">
                Isi Data Terlebih Dahulu
            </div>
            <div class="card-body">
                <form action="" method="post" role="form">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="customer_name" required="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label></label>

                    </div>
                    <button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan data</button>
                </form>
                <?php

                include('koneksi.php');

                if (isset($_POST['submit'])) {
                    $customer_name = $_POST['customer_name'];
                    $email = $_POST['email'];
                    $datas = mysqli_query($koneksi, "insert into customer (customer_name,email)values
                ('$customer_name', '$email')") or die(mysqli_error($koneksi));

                    echo "<script>alert('data berhasil disimpan.');window.location='https://api.whatsapp.com/send?phone=6283807025715&text=HaloPiksMartSayaInginOrder';</script>";
                }
                ?>
            </div>

        </div>

    </div>
    <script type="text/javascript" src="assets/bootstrap.min.js"></script>
</body>

</html>