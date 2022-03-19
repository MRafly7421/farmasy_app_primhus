<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        <div class="align-self-center login__box">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <h1 class="login__title">LOGIN</h1>
                </div>
            </div>
            <form method="post" action="controller/action_login.php" class="row g-3 justify-content-center">
                <div class="form-group col-8">
                    <div class="d-flex justify-content-center">
                        <label class="login__label" for="email">Email</label>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text border border-info bg-info text-light" id="basic-addon1"><i class="fa fa-user"></i></span>
                        </div>
                        <input name="email" type="email" class="form-control border border-info" id="email" placeholder="Email" required>
                    </div>
                </div>
                <div class="form-group col-8">
                    <div class="d-flex justify-content-center">
                        <label class="login__label" for="password">Password</label>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text border border-info bg-info text-light" id="basic-addon1"><i class="fa fa-key"></i></span>
                        </div>
                        <input name="password" type="password" class="form-control border border-info" id="password" placeholder="Password" required>
                        <div class="input-group-append">
                            <span class="input-group-text border border-info bg-transparent"><i style="cursor: pointer;" class="fa fa-eye-slash" id="togglePassword" onclick="togglePassword()"></i></span>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center col-8">
                    <p>Belum Punya Akun? <a href="signup.php" class="login__link">Daftar</a></p>
                </div>
                <div class="d-flex justify-content-center col-8 btn__login">
                    <button type="submit" class="btn btn-success">Login</button>
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