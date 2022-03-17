<?php
    include("koneksi.php");
    include("../php/UID.php");

    $email = $_POST['email'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenisKelamin = $_POST['jenisKelamin'];
    $tempatLahir = $_POST['tempatLahir'];
    $tanggalLahir = $_POST['tanggal'];
    $noTelepon = $_POST['noTelepon'];

    $idUser = uid("user");

    mysqli_query($koneksi, "insert into user set
        id_user = '$idUser',
        email = '$email',
        password = '$password',
        nama_lengkap = '$nama',
        alamat = '$alamat',
        jenis_kelamin = '$jenisKelamin',
        tempat_lahir = '$tempatLahir',
        tanggal_lahir = '$tanggalLahir',
        no_telepon = '$noTelepon'
    ");
    
    header("Location: ../signup.php");
?>