<!DOCTYPE html>
<html>

<head>
    <title>Halaman Login</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link rel="stylesheet" href="bg.css">
</head>

<body class="color-change-3x">
    <div>

        <!-- <div class="">
            <form method="POST" action="process_login.php">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required><br><br>
                
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br><br>
                
                <input type="submit" value="Login">
            </form>
        </div> -->
        <h2 class="mt-5">
            <center>SILAHKAN LOGIN<br>↘️↙️<br></center>
        </h2>
        <form class="position-absolute top-50 start-50 translate-middle" method="POST" action="process_login.php">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
    <script type="text/javascript" src="assets/bootstrap.min.js"></script>
</body>

</html>