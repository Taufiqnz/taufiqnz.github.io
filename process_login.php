<?php
// Sambungkan ke database
$conn = mysqli_connect("localhost", "root", "", "ecommerce");

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

// Ambil data dari formulir login
$username = $_POST['username'];
$password = $_POST['password'];

// Lindungi dari SQL Injection
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

// Query untuk mencari pengguna dengan username yang sesuai
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query gagal: " . mysqli_error($conn));
}

// Periksa apakah pengguna ditemukan
if (mysqli_num_rows($result) == 1) {
    session_start();
    $_SESSION['username'] = $username;
    header("Location: index.php"); // Alihkan ke halaman dashboard
} else {
    echo "Login gagal. Silakan coba lagi <a href='login.php'>di sini</a>.";
}

mysqli_close($conn);
?>
