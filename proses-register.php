<?php
    include 'koneksi.php';
    $country = $_POST['country'];
    $first = $_POST['first'];
    $last = $_POST['last'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $query = "INSERT INTO user (country, first_name, last_name, display_name, email, password, status) VALUES ('$country', '$first', '$last', '$username', '$email', '$password', 1)";
    $push = mysqli_query($koneksi, $query);

    if($push){
        header('location: index.php?pesan=daftar_berhasil');
    } else{
        header('location: iniregister.php?pesan=daftar_gagal');
    }

?>