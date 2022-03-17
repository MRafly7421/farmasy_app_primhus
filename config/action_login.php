<?php
    include("koneksi.php");

    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $dataAdmin = mysqli_query($koneksi, "select * from admin where email = '$email' and password = '$password'");
    $dataUser = mysqli_query($koneksi, "select * from user where email = '$email' and password = '$password'");
    
    if($dataAdmin->num_rows > 0) {
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['as'] = "admin";
        header("Location: ../admin");
    } else if($dataUser->num_rows > 0) {
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['as'] = "user";
        header("Location: ../user");
    } else {
        header("Location: ../");
    }
?>