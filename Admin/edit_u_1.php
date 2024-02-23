<?php
  // memanggil file koneksi.php untuk membuat koneksi
include '../koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id_user'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id_user"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM 'users' WHERE id_user='$id'";
    $result = mysqli_query($kon, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($kon).
         " - ".mysqli_error($kon));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='user.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke tables.php
    echo "<script>alert('error');window.location='user.php';</script>";
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
</head>

<body class="">
    <div class="wrapper">
        <div class="sidebar">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="javascript:void(0)" class="simple-text logo-mini">
            CT
          </a>
                    <a href="javascript:void(0)" class="simple-text logo-normal">
            Creative Tim
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
                            <p>User Profile</p>
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
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title">Edit Data Obat : <?php echo $data['nama']; ?></h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="">
                    <div class="col-md-12">
                          <div class="row">
                          <div class="card-body">
                            <form action="./proses/edit1.php" method="POST" enctype="multipart/form-data" id="inputdata">
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Id</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control" name="id_user" value="<?php echo $data['id_user']; ?>"  hidden />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Username</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control" name="username" type="text" placeholder="Username" value="<?php echo $data['username']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Password</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control" name="password" placeholder="........." type="password" value="<?php echo $data['password']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                        <label class="col-sm-12 col-md-2 col-form-label">Status</label>
                                        <div class="col-sm-12 col-md-10">
                                          <select class="form-select form-control" aria-label="Default select example" name="gender" id="Gender" >
                                            <option <?php echo ($data['level']=='pilihan status') ? "selected":""?>>Pilih Status</option>
                                            <option <?php echo ($data['level']=='admin') ? "selected":""?>>Admin</option>
                                            <option <?php echo ($data['level']=='pengguna') ? "selected":""?>>Pengguna</option>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <a href="tables.php" class="btn btn-warning btn-fill">Batal</a>
                                    <input type="submit" class="btn btn-success btn-fill" value="Simpan" name="simpan-data" />
                                </div>
                            </form>
                        </div>
                        </div>
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