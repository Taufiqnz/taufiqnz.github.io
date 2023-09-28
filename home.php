<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PiksMart</title>
    <!-- Link ke Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link rel="stylesheet" href="bg.css">
</head>

<body class="bg-dark-subtle ">
    
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
    <h1 class="m-5 text-center fst-italic fw-semibold">SELAMAT DATANG DI PIKSMART</h1>
    
    <!-- IMG START -->
    <div class=" m-5 d-flex gap-5">
        <img style="height: 400px;" src="assets/gambar.png" class=" border-black img-thumbnail m-3 rounded float-start" alt="...">
        <img style="height: 400px;" src="assets/piks.png" class=" border-black img-thumbnail m-3 rounded float-end" alt="...">
    </div>
    <!-- IMG END -->
    <h1 class="m-5 text-center fst-italic fw-semibold">BEBERAPA PRODUK KAMI</h1>
    
    <!-- CARD START -->
    <div class="row m-4 text-center">
        <div class="card m-1 col-sm-4 border-black" style="width: 18rem;">
            <img src="assets/headset.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Headset</h5>
                <p class="card-text">Headset Gaming HP.</p>
                <a class=" btn btn-dark" href="beli.php">Order</a>
            </div>
        </div>
        <div class="card m-1 col-sm-4 border-black" style="width: 18rem;">
            <img src="assets/keyboard.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Keyboard</h5>
                <p class="card-text">Keyboard Gaming Rexus.</p>
                <a class=" btn btn-dark" href="beli.php">Order</a>
            </div>
        </div>
        <div class="card m-1 col-sm-4 border-black" style="width: 18rem;">
            <img src="assets/komputer.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Pc+Monitor</h5>
                <p class="card-text">Komputer Asus Gaming.</p>
                <a class=" btn btn-dark" href="beli.php">Order</a>
            </div>
        </div>
        <div class="card m-1 col-sm-4 border-black" style="width: 18rem;">
            <img src="assets/mouse.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Mouse</h5>
                <p class="card-text">Mouse Gaming Joyseus.</p>
                <a class=" btn btn-dark" href="beli.php">Order</a>
            </div>
        </div>
        <div class="card m-1 col-sm-4 border-black" style="width: 18rem;">
            <img src="assets/coolpad.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Coolpad</h5>
                <p class="card-text">Coolpad For Laptop.</p>
                <a class=" btn btn-dark" href="beli.php">Order</a>
            </div>
        </div>
        <div class="card m-1 col-sm-4 border-black" style="width: 18rem;">
            <img src="assets/laptop.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Laptop</h5>
                <p class="card-text">Laptop Gaming Asus.</p>
                <a class=" btn btn-dark" href="beli.php">Order</a>
            </div>
        </div>
        <div class="card m-1 col-sm-4 border-black" style="width: 18rem;">
            <img src="assets/mousepad.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Mousepad</h5>
                <p class="card-text">Mousepad For Mouse.</p>
                <a class=" btn btn-dark" href="beli.php">Order</a>
            </div>
        </div>
        <div class="card m-1 col-sm-4 border-black" style="width: 18rem;">
            <img src="assets/speaker.webp" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Speaker</h5>
                <p class="card-text">Speaker JBL Full Bass.</p>
                <a class=" btn btn-dark" href="beli.php">Order</a>
            </div>
        </div>
    </div>
    <!-- CARD END -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap.min.js"></script>
</body>

</html>