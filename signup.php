<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="css/main.css?<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css?<?php echo time(); ?>">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"></script>
    <style>
        body {
            background-color: #3fbbc0;
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="header__box">
            <div class="header__brand">
                <div class="d-flex justify-content-center">
                    <img src="img/logo_rsu_primhus.png" alt="Logo Primhus" class="logo__primhus">
                </div>
                <div class="d-flex justify-content-center text-center">
                    <h1>Aplikasi Obat</h1>
                </div>
            </div>
        </div>
    </header>

    <main class="m-auto">
        <div class="align-self-center signup__box">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <h1 class="signup__title">SIGN UP</h1>
                </div>
            </div>
            <form method="post" action="controller/action_signup.php" class="row g-3 justify-content-center">
                <div class="form-row col-10">
                    <div class="form-group col-md-6">
                        <label class="signup__label" for="email">Email</label>
                        <input name="email" type="email" class="form-control border border-info" id="email" placeholder="Email" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="signup__label" for="password">Password</label>
                        <div class="input-group mb-3">
                            <input name="password" type="password" class="form-control border border-info" id="password" placeholder="Password" required>
                            <div class="input-group-append">
                                <span class="input-group-text border border-info bg-transparent"><i style="cursor: pointer;" class="fa fa-eye-slash" id="togglePassword" onclick="togglePassword()"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group col-10">
                    <label class="signup__label" for="nama">Nama Lengkap</label>
                    <input name="nama" type="text" class="form-control border border-info" id="nama" placeholder="Nama Lengkap" required>
                </div>
                <div class="form-group col-10">
                    <label class="signup__label" for="alamat">Alamat</label>
                    <input name="alamat" type="text" class="form-control border border-info" id="alamat" placeholder="Alamat" required>
                </div>
                <div class="form-group col-10">
                    <label class="signup__label" for="jenisKelamin">Jenis Kelamin</label>
                    <input name="jenisKelamin" type="text" class="form-control border border-info" id="jenisKelamin" placeholder="(Laki-laki/Perempuan)" required>
                </div>
                <div class="form-row col-10">
                    <div class="form-group col-md-6">
                        <label class="signup__label" for="tempatLahir">Tempat Lahir</label>
                        <input name="tempatLahir" type="text" class="form-control border border-info" id="tempatLahir" placeholder="Tempat Lahir" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="signup__label" for="tanggal">Tanggal Lahir</label>
                        <input name="tanggal" type="date" class="form-control border border-info" id="tanggal" required>
                    </div>
                </div>
                <div class="form-group col-10">
                    <label class="signup__label" for="noTelepon">No. Telepon</label>
                    <input name="noTelepon" type="text" class="form-control border border-info" id="noTelepon" placeholder="(08xxxxxxxxxx)">
                </div>
                <div class="d-flex justify-content-center col-10">
                    <p>Sudah Mempunyai Akun? <a href="./" class="signup__link">Masuk</a></p>
                </div>
                <div class="col-10 d-flex justify-content-center">
                    <button type="submit" class="btn btn-danger">Sign up</button>
                </div>

            </form>
        </div>
    </main>

    <script>
        function togglePassword() {
            var password = document.getElementById("password");
            var togglePassword = document.getElementById("togglePassword");

            if (password.type === "password") {
                password.type = "text";
                password.autocomplete = "off";
                togglePassword.classList.toggle('fa-eye');
            } else {
                password.type = "password";
                togglePassword.classList.toggle('fa-eye-slash');
            }
        }
    </script>
</body>

</html>