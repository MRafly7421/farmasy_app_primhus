<?php
    session_start();
    
    if (!(isset($_SESSION['email'])) || $_SESSION['as'] != "admin") {
        header("Location: ../../");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Data Obat Keluar | Admin</title>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css?<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="../../css/main.css?<?php echo time(); ?>">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"></script>
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <img src="../../img/logo_rsu_primhus.png" alt="Logo Primhus" height="50px">
            </div>

            <ul class="list-unstyled components">
                <!-- <p>Dummy Heading</p> -->
                <li>
                    <a id="a" href="../">Dashboard</a>
                </li>
                <li>
                    <a id="a" href="#obatMasukSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Obat Masuk</a>
                    <ul class="collapse list-unstyled" id="obatMasukSubmenu">
                        <li>
                            <a id="a" href="../obat_masuk/tambah_obat_masuk.php">Tambah Data Obat Masuk</a>
                        </li>
                        <li>
                            <a id="a" href="../obat_masuk/cek_obat_masuk.php">Cek Data Obat Masuk</a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a id="a" href="#obatKeluarSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">Obat Keluar</a>
                    <ul class="collapse list-unstyled show" id="obatKeluarSubmenu">
                        <li>
                            <a id="a" href="tambah_obat_keluar.php">Tambah Data Obat Keluar</a>
                        </li>
                        <li class="active">
                            <a id="a" href="cek_obat_keluar.php">Cek Data Obat Keluar</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a id="a" href="#">Page</a>
                </li>
                <li>
                    <a id="a" href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a id="a" href="#">Page 1</a>
                        </li>
                        <li>
                            <a id="a" href="#">Page 2</a>
                        </li>
                        <li>
                            <a id="a" href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-justify"></i>
                    </button>
                   
                    <button class="btn btn-outline-info" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php
                            echo $_SESSION['email'];
                        ?>
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right menu__account__box" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item text-center menu__account__link" href="#">Temp</a>
                        <a class="dropdown-item text-center menu__account__link logout__link" href="../../config/logout.php">Logout</a>
                    </div>
                    
                </div>
            </nav>

            <p style="font-weight: bold; font-size: 20px;">Data Obat Keluar</p>

            <div class="table__box">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="../../js/jquery.js"></script>
    <script type="text/javascript" src="../../js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>