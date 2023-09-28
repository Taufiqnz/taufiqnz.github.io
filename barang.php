<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PiksMart</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="bg.css">
</head>
<body class="bg-dark-subtle">
    <!-- NAVBAR START -->
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#"><img height="50px" width="50px" src="assets/logo.png" alt=""></logo></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="barang.php">Barang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="customer.php">Pelanggan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Admin Only</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://api.whatsapp.com/send?phone=6283807025715&text=HaloPiksMartSayaInginOrder">Order</a>
                        </li>
                        <li class="nav-item ">
                            <a class="wobble-hor-bottom nav-link text-white" href="https://www.instagram.com/taufiq1020/" target="_blank">Follow Me</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- NAVBAR END -->
    <div class="container col-md-7 mt-4">
        <h1>TABEL PiksMart</h1>
        <div class="card">
            <div class="card-header bg-dark text-white d-flex justify-content-between">
                <a class='btn btn-sm btn-dark' href="home.php"><i class="bi bi-house-door-fill"></i></a>
                DATA BARANG <a href="tambah.php" class="btn btn-sm btn-dark float-right"><i class="bi bi-plus-circle-fill"></i></a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <body>
                    <?php
                        include('koneksi.php');
                        $datas = mysqli_query($koneksi, "SELECT * FROM `product`;
                        ") or die(mysqli_error($koneksi));
                        $no = 1;

                        while($row = mysqli_fetch_array($datas)){
                            echo "<tr>";

                            echo "<td>".$no++."</td>";
                            echo "<td>".$row['name']."</td>";
                            echo "<td>".$row['image']."</td>";
                            echo "<td>".$row['price']."</td>";
                            echo "<td>".$row['description']."</td>";

                            echo "<td class='d-flex gap-2'>";
                            echo "<a class='btn btn-sm btn-secondary' href='edit.php?id=".$row['id']."'>Edit</a> ";
                            echo "<a class='btn btn-sm btn-dark' onclick='return confirm('anda yakin ingin hapus?');' href='hapus.php?id=".$row['id']."'>Hapus</a>";
                            echo "</td>";

                            echo "</tr>";
                        }
                        
                    ?>
                </body>

            </table>
        </div>
        </div>
    </div>
    <script type="text/javascript" src="assets/bootstrap.min.js"></script>

</body>
</html>