<?php
    include("koneksi.php");

    $idUser = $_POST['idUser'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenisKelamin = $_POST['jenisKelamin'];
    $tempatLahir = $_POST['tempatLahir'];
    $tanggalLahir = $_POST['tanggal'];
    $noTelepon = $_POST['noTelepon'];

    $button = $_POST['button'];

    if(!($email) && !($password)) {
        header("Location: ../user/edit_profil.php");
    } else {
        if($button == "simpan") {
            mysqli_query($koneksi, "update user set
                email = '$email',
                password = '$password',
                nama_lengkap = '$nama',
                alamat = '$alamat',
                jenis_kelamin = '$jenisKelamin',
                tempat_lahir = '$tempatLahir',
                tanggal_lahir = '$tanggalLahir',
                no_telepon = '$noTelepon'
            where id_user = '$idUser'");
        }

        header("Location: ../user/");
    }

?>