<?php 
session_start();
require 'function.php';


//  Cek Cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])){
    $username = $_COOKIE['username'];
    $hash = $_COOKIE['hash'];

    // Ambil username berdasarkan id
    $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if ($hash === hash('hash256', $row['id'], false)){
        $_SESSION['username'] = $row['username'];
        header("location: admin.php");
        exit;
    }
}

// Melakukan Pengecekan user Login
if (isset($_SESSION['username']))
{
    header("location: admin.php");
    exit;
}

// Login
if (isset($_POST['submit'])) {
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
}

// Mencocokan username dan password
if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['hash'] = hash('sha256', $row['id'], false);

           // Jika remember me di ceklis
    if (isset($_POST['remember'])) {
        setcookie('username', $row['username'], time() + 60 * 60 * 24);
        $hash = hash('sha256', $row['id']);
        setcookie('hash', $hash, time() + 60 * 60 * 24);
    }
    if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        header ("location: admin.php");
        die;
    }
    header ("location: ../index.php");
    die;
    }
}
    $error = true;
}
?>

<form action="" method="post">
<?php if (isset($error)) : ?>
    <p>Username atau Password salah</p>
<?php endif; ?>

<table>
    <tr>
        <td><label for="username">Username</label></td>
        <td>:</td>
        <td><input type="text" name="username"></td>
    </tr>

    <tr>
        <td><label for="password">Password</label></td>
        <td>:</td>
        <td><input type="password" name="password"></td>
    </tr>
</table>

<div class="remember">
    <input type="checkbox" name="remember">
    <label for="remember">Remember me</label>
</div>

<button type="submit" name="submit">Login</button>
</form>

<div class="registrasi">
    <p>Belum Punya akun? Registrasi <a href="registrasi.php">Disini</a></p>
</div>