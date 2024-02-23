<?php
@session_start();

include "../koneksi.php";

if(@$_GET['page']=="simpan"){
        echo'<script type="text/javascript">
            alert("Selamat Anda Berhasil !");
        </script>';
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/png" href="../assets/Img/icons/Utama.jfif">
        <title>
            Admin Apotek Sejaktera </title>
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
        <!-- Nucleo Icons -->
        <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
        <link href="./assets/css/black-dashboard.css" rel="stylesheet" />
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- CSS Files -->
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="./assets/css/demo.css" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/fa200c420d.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="js/jquery.tabledit.min.js"></script>
    </head>

    <body>
        <div class="wrapper">
            <div class="sidebar">
                <div class="sidebar-wrapper">
                    <div class="logo">
                        <a href="javascript:void(0)" class="simple-text logo-mini">
            CT 1
          </a>
                        <a href="javascript:void(0)" class="simple-text logo-normal">
            Creative Tim 1
          </a>
                    </div>
                    <ul class="nav active">
                        <li>
                            <a href="./dashboard.php">
                                <i class="tim-icons icon-chart-pie-36"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li>
                            <a href="./user.php">
                                <i class="tim-icons icon-single-02"></i>
                                <p>Profile User</p>
                            </a>
                        </li>
                        <li>
                            <a href="./user.php">
                                <i class="tim-icons icon-single-02"></i>
                                <p>Produk</p>
                            </a>
                            </li>
                            <li>
                            <a href="./user.php">
                                <i class="tim-icons icon-single-02"></i>
                                <p>Transaksi</p>
                            </a>
                            </li>
                    </ul>
                </div>
            </div>
            <div class="main-panel">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
                    <div class="container-fluid">
                        <div class="navbar-wrapper">
                            <div class="navbar-toggle d-inline">
                                <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
                            </div>
                            <a class="navbar-brand" href="javascript:void(0)">Apotek Sejaktera</a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
                        <div class="collapse navbar-collapse" id="navigation">
                            <ul class="navbar-nav ml-auto">
                                <li class="search-bar input-group">
                                    <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal"><i class="tim-icons icon-zoom-split" ></i>
                                        <span class="d-lg-none d-md-block">Search</span>
                                    </button>
                                </li>
                                <li class="dropdown nav-item">
                                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                        <div class="photo">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <b class="caret d-none d-lg-block d-xl-block"></b>
                                        <p class="d-lg-none">
                                            Log out
                                        </p>
                                    </a>
                                    <ul class="dropdown-menu dropdown-navbar">
                                        <li class="nav-link"><a href="#profile" class="nav-item dropdown-item">Profile</a></li>
                                        <li class="dropdown-divider"></li>
                                        <li class="nav-link"><a href="../logout.php" class="nav-item dropdown-item">Log out</a></li>
                                    </ul>
                                </li>
                                <li class="separator d-lg-none"></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
                                            </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Navbar -->
                <div class="content" id="profile">
                    <div class="row">
                        <div class="col-12">
                            <div class="col-md-12">
                            <div class="card border-success mb-3">
                                    <div class="card-header bg-transparent border-success">Profile user</div>
                                    <div class="card-body text-success">
                                        <div class="row">
                                            <div class="card-header">
                                                <h4 class="card-title">Daftar Login</h4>
                                            </div>
                                            <div class="align-self-center">
                                                <a class="btn btn-fill" href="inputdata_login.php">Tambah</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-transparent border-success">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                <th>ID</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sql1 = "SELECT * FROM `users`";
                                                $cek = mysqli_query($kon, $sql1);

                                                while($login = mysqli_fetch_array($cek)){
                                                ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $login['id_user']?>
                                                    </td>
                                                    <td>   
                                                        <?php echo $login['username']?>
                                                    </td>
                                                    <td>
                                                        <?php echo $login['email']?>
                                                    </td>
                                                    <td>
                                                        <?php echo $login['password']?>
                                                    </td>
                                                    <td>
                                                        <?php echo $login['level']?>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-warning btn-fill btn-sm" href="edit_u_1.php?id_user=<?php echo $login['id_user']; ?>"><i class='fa fa-edit'></i> Edit</a> &nbsp;
                                                        <a class="btn btn-danger btn-fill btn-sm" href="hapus_u_1.php?id_user=<?php echo $login['id_user']; ?>"><i class='fa fa-times'></i> Delete</a>
                                                    </td> 
                                                </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                            <div class="card border-success mb-3">
                                    <div class="card-header bg-transparent border-success"></div>
                                    <div class="card-body text-success">
                                        <div class="row">
                                            <div class="card-header">
                                                <h4 class="card-title">Daftar lengkap</h4>
                                            </div>
                                            <div class="align-self-center">
                                                <a class="btn btn-fill" href="inputdata_login.php">Tambah</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-transparent border-success">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                <th>ID</th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>Gender</th>
                                                <th>No Hp</th>
                                                <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sql2 = "SELECT * FROM `users`";
                                                $cek2 = mysqli_query($kon, $sql1);

                                                while($lengkap = mysqli_fetch_array($cek2)){
                                                ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $lengkap['id_user']?>
                                                    </td>
                                                    <td>   
                                                        <?php echo $lengkap['nama']?>
                                                    </td>
                                                    <td>
                                                        <?php echo $lengkap['alamat']?>
                                                    </td>
                                                    <td>
                                                        <?php echo $lengkap['gender']?>
                                                    </td>
                                                    <td>
                                                        <?php echo $lengkap['no_hp']?>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-warning btn-fill btn-sm" href="edit_u_2.php?id_user=<?php echo $lengkap['id_user']; ?>"><i class='fa fa-edit'></i> Edit</a> &nbsp;
                                                        <a class="btn btn-danger btn-fill btn-sm" href="hapus_u_2.php?id_user=<?php echo $lengkap['id_user']; ?>"><i class='fa fa-times'></i> Delete</a>
                                                    </td> 
                                                </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fixed-plugin">
            <div class="dropdown show-dropdown">
                <a href="#" data-toggle="dropdown">
                    <i class="fa fa-cog fa-2x"> </i>
                </a>
                <ul class="dropdown-menu">
                    <li class="header-title"> Latar Belakang Sidebar</li>
                    <li class="adjustments-line">
                        <a href="javascript:void(0)" class="switch-trigger background-color">
                            <div class="badge-colors text-center">
                                <span class="badge filter badge-primary active" data-color="primary"></span>
                                <span class="badge filter badge-info" data-color="blue"></span>
                                <span class="badge filter badge-success" data-color="green"></span>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li class="adjustments-line text-center color-change">
                        <span class="color-label">MODE Cerah</span>
                        <span class="badge light-badge mr-2"></span>
                        <span class="badge dark-badge ml-2"></span>
                        <span class="color-label">Mode Gelap</span>
                    </li>
                    <li class="button-container">
                        <a href="https://www.creative-tim.com/product/black-dashboard" target="_blank" class="btn btn-primary btn-block btn-round">Download Now</a>
                        <a href="https://demos.creative-tim.com/black-dashboard/docs/1.0/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block btn-round">
                            Documentation
                            </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
        <!--   Core JS Files   -->
        <script src="./assets/js/jquery.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
        <script src="./assets/js/perfect-scrollbar.jquery.min.js"></script>
        <!--  Google Maps Plugin    -->
        <!-- Place this tag in your head or just before your close body tag. -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
        <!-- Chart JS -->
        <script src="./assets/js/chartjs.min.js"></script>
        <!--  Notifications Plugin    -->
        <script src="./assets/js/bootstrap-notify.js"></script>
        <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="./assets/js/black-dashboard.js"></script>
        <!-- Black Dashboard DEMO methods, don't include it in your project! -->
        <script src="./assets/js/demo.js"></script>
        <script>
            $(document).ready(function() {
                $().ready(function() {
                    $sidebar = $('.sidebar');
                    $navbar = $('.navbar');
                    $main_panel = $('.main-panel');

                    $full_page = $('.full-page');

                    $sidebar_responsive = $('body > .navbar-collapse');
                    sidebar_mini_active = true;
                    white_color = false;

                    window_width = $(window).width();

                    fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



                    $('.fixed-plugin a').click(function(event) {
                        if ($(this).hasClass('switch-trigger')) {
                            if (event.stopPropagation) {
                                event.stopPropagation();
                            } else if (window.event) {
                                window.event.cancelBubble = true;
                            }
                        }
                    });

                    $('.fixed-plugin .background-color span').click(function() {
                        $(this).siblings().removeClass('active');
                        $(this).addClass('active');

                        var new_color = $(this).data('color');

                        if ($sidebar.length != 0) {
                            $sidebar.attr('data', new_color);
                        }

                        if ($main_panel.length != 0) {
                            $main_panel.attr('data', new_color);
                        }

                        if ($full_page.length != 0) {
                            $full_page.attr('filter-color', new_color);
                        }

                        if ($sidebar_responsive.length != 0) {
                            $sidebar_responsive.attr('data', new_color);
                        }
                    });

                    $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
                        var $btn = $(this);

                        if (sidebar_mini_active == true) {
                            $('body').removeClass('sidebar-mini');
                            sidebar_mini_active = false;
                            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
                        } else {
                            $('body').addClass('sidebar-mini');
                            sidebar_mini_active = true;
                            blackDashboard.showSidebarMessage('Sidebar mini activated...');
                        }

                        // we simulate the window Resize so the charts will get updated in realtime.
                        var simulateWindowResize = setInterval(function() {
                            window.dispatchEvent(new Event('resize'));
                        }, 180);

                        // we stop the simulation of Window Resize after the animations are completed
                        setTimeout(function() {
                            clearInterval(simulateWindowResize);
                        }, 1000);
                    });

                    $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
                        var $btn = $(this);

                        if (white_color == true) {

                            $('body').addClass('change-background');
                            setTimeout(function() {
                                $('body').removeClass('change-background');
                                $('body').removeClass('white-content');
                            }, 900);
                            white_color = false;
                        } else {

                            $('body').addClass('change-background');
                            setTimeout(function() {
                                $('body').removeClass('change-background');
                                $('body').addClass('white-content');
                            }, 900);

                            white_color = true;
                        }


                    });

                    $('.light-badge').click(function() {
                        $('body').addClass('white-content');
                    });

                    $('.dark-badge').click(function() {
                        $('body').removeClass('white-content');
                    });
                });
            });
        </script>
        <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
        <script>
            window.TrackJS &&
                TrackJS.install({
                    token: "ee6fab19c5a04ac1a32a645abde4613a",
                    application: "black-dashboard-free"
                });
        </script>
    </body>
    </html>