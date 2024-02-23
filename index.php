<?php
if(@$_GET['page']=="gagal"){
    echo 
    '<script type="text/javascript">
        alert("username atau password anda salah segera melakukan pendaftaran");
    </script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Apotek Sejaktera</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="./assets/Img/icons/Utama.jfif">

    <link rel="stylesheet" href="./assets/Css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/Css/templatemo.css">
    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="./assets/Css/templatemo.min.css">
    <script src="https://kit.fontawesome.com/fa200c420d.js" crossorigin="anonymous"></script>
</head>

<body>
        <!-- Start Top Nav -->
        <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
            <div class="container text-light">
                <div class="w-100 d-flex justify-content-between">
                    <div>
                        <i class="fa fa-envelope mx-2"></i>
                        <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:Asejaktera@gmail.com">Asejaktera@gmail.com</a>
                        <i class="fa fa-phone mx-2"></i>
                        <a class="navbar-sm-brand text-light text-decoration-none" href="tel:081-010-220-041">081-010-220-041</a>
                    </div>
                    <div>
                        <a class="text-light" href="https://www.facebook.com/" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                        <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                        <a class="text-light" href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Close Top Nav -->


        <!-- Header -->
        <nav class="navbar navbar-expand-lg navbar-light shadow">
            <div class="container d-flex justify-content-between align-items-center">

                <a class="navbar-brand text-success logo h1 align-self-center" href="#">
                ASejaktera
            </a>

                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

                <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                    <div class="flex-fill">
                        <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#hero">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">Tentang Kami</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="shop.php">Belanja</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Kontak Kami</a>
                            </li>
                        </ul>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary me-md-2" type="button"><a href="register.php" class="white">Register</a></button>
                        <button class="btn btn-primary" type="button"><a href="login.php" class="white">login</a></button>
                    </div>
                </div>

            </div>
        </nav>
        <!-- Close Header -->

        <!-- Start Banner Hero -->
        <div id="hero">
            <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
                    <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner bg-abu ">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row p-5">
                                <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                                    <img class="img-fluid" src="./assets/img/Home-1.png" alt="">
                                </div>
                                <div class="col-lg-6 mb-0 d-flex align-items-center">
                                    <div class="text-align-left align-self-center">
                                        <h1 class="h1 text-success">selamat datang</h1>
                                        <h3 class="h2 text-success"><b>Halo Apotek</b></h3>
                                        <p>
                                            Halo Apotek Shop adalah website pembelanjaan dalam bentuk kesehatan.
                                        </p>
                                        <button class="btn btn-primary" type="button"><a href="#about" class="white">Baca anda</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row p-5">
                                <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                                    <img class="img-fluid" src="./assets/img/Home-2.jpg" alt="">
                                </div>
                                <div class="col-lg-6 mb-0 d-flex align-items-center">
                                    <div class="text-align-left">
                                        <h1 class="h1">Promo</h1>
                                        <p>
                                            Produk baru dalam website kami dengan harga yang terjangkau dan halal.
                                        </p>
                                        <button class="btn btn-primary" type="button"><a href="index.php" class="white">Baca anda</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row p-5">
                                <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                                    <img class="img-fluid" src="./assets/img/Home-3.png" alt="">
                                </div>
                                <div class="col-lg-6 mb-0 d-flex align-items-center">
                                    <div class="text-align-left">
                                        <h1 class="h1">Komunikasi</h1>
                                        <p>
                                            dengan melakukan layanan yang dapat memuaskan semua pelanggan yang ingin melakukan transaksi atau permasalahan.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
                    <i class="fas fa-chevron-left"></i>
                </a>
                <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </div>
        </div>
        <!-- End Banner Hero -->


        <!-- Start Categories of The Month -->
        <section class="container py-5">
            <div class="row text-center pt-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Kategori terbaru</h1>
                    <p>
                        memperhatikan, dalam jiwa dan raga, tetapi dalam waktu singkat pengecualian akan ditangani oleh sanjungan tidak menyenangkan, yaitu, untuk memeriksa properti umum orang-orang, itu untuk melakukan pembelian produk kesehatan bagi mereka yang membutuhkan.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 p-5 mt-3">
                    <a href="#"><img src="./assets/img/Cegah Coivd/1.webp" class="rounded-circle img-fluid border"></a>
                    <h5 class="text-center mt-3 mb-3">Cegah Covid</h5>
                    <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
                </div>
                <div class="col-12 col-md-4 p-5 mt-3">
                    <a href="#"><img src="./assets/img/Mata/1.webp" class="rounded-circle img-fluid border"></a>
                    <h2 class="h5 text-center mt-3 mb-3">Mata</h2>
                    <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
                </div>
                <div class="col-12 col-md-4 p-5 mt-3">
                    <a href="#"><img src="./assets/img/Demam/1.webp" class="rounded-circle img-fluid border"></a>
                    <h2 class="h5 text-center mt-3 mb-3">Demam</h2>
                    <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
                </div>
            </div>
        </section>
        <!-- End Categories of The Month -->

        <section class="bg-success py-5" id="about">
            <div class="container">
                <div class="row align-items-center py-5">
                    <div class="col-md-8 text-white">
                        <h1>Tentang Kami</h1>
                        <p>
                            Web atau aplikasi Apotek Sejaktera di dirikan pada tahun 2021 untuk tujuan dalam membantu masyarakat untuk memenuhi kebutuhan kesehatan dengan cara paling mudah ,aman, dan efektif.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <img src="assets/img/about-hero.svg" alt="About Hero">
                    </div>
                </div>
            </div>
        </section>
        <!-- Close Banner -->

        <!-- Start Section -->
        <section class="container py-5">
            <div class="row text-center pt-5 pb-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">pelayanan kami</h1>
                    <p>
                        Membantu pengguna untuk jika ada permasalahan yang tidak bisa dipecahkan oleh pengguna.
                    </p>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6 col-lg-3 pb-5">
                    <div class="h-100 py-5 services-icon-wap shadow">
                        <div class="h1 text-success text-center"><i class="fa fa-truck fa-lg"></i></div>
                        <h2 class="h5 mt-4 text-center">Jasa Pengiriman</h2>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 pb-5">
                    <div class="h-100 py-5 services-icon-wap shadow">
                        <div class="h1 text-success text-center"><i class="fas fa-exchange-alt"></i></div>
                        <h2 class="h5 mt-4 text-center">Pengiriman & Pengembalian</h2>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 pb-5">
                    <div class="h-100 py-5 services-icon-wap shadow">
                        <div class="h1 text-success text-center"><i class="fa fa-percent"></i></div>
                        <h2 class="h5 mt-4 text-center">Promosi</h2>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 pb-5">
                    <div class="h-100 py-5 services-icon-wap shadow">
                        <div class="h1 text-success text-center"><i class="fa fa-user"></i></div>
                        <h2 class="h5 mt-4 text-center">Layanan 24 Jam</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section -->

        <!-- Start Brands -->
        <section class="bg-light py-5">
            <div class="container my-4">
                <div class="row text-center py-3">
                    <div class="col-lg-6 m-auto">
                        <h1 class="h1">Merek dan bantuan</h1>
                        <p>
                            mengetahui bahwa produk kita juga sudah dibantu oleh beberapa produk ternama sampai yang sederhana.
                        </p>
                    </div>
                    <div class="col-lg-9 m-auto tempaltemo-carousel">
                        <div class="row d-flex flex-row">
                            <!--Controls-->
                            <div class="col-1 align-self-center">
                                <a class="h1" href="#templatemo-slide-brand" role="button" data-bs-slide="prev">
                                    <i class="text-light fas fa-chevron-left"></i>
                                </a>
                            </div>
                            <!--End Controls-->

                            <!--Carousel Wrapper-->
                            <div class="col">
                                <div class="carousel slide carousel-multi-item pt-2 pt-md-0" id="templatemo-slide-brand" data-bs-ride="carousel">
                                    <!--Slides-->
                                    <div class="carousel-inner product-links-wap" role="listbox">

                                        <!--First slide-->
                                        <div class="carousel-item active">
                                            <div class="row">
                                                <div class="col-3 p-md-5">
                                                    <a href="#"><img class="img-fluid brand-img" src="./assets/Img/Bantuan-1.jpg" alt="Brand Logo"></a>
                                                </div>
                                                <div class="col-3 p-md-5">
                                                    <a href="#"><img class="img-fluid brand-img" src="./assets/Img/Bantuan-2.jpg" alt="Brand Logo"></a>
                                                </div>
                                                <div class="col-3 p-md-5">
                                                    <a href="#"><img class="img-fluid brand-img" src="./assets/Img/Bantuan-3.png" alt="Brand Logo"></a>
                                                </div>
                                                <div class="col-3 p-md-5">
                                                    <a href="#"><img class="img-fluid brand-img" src="./assets/Img/Bantuan-4.png" alt="Brand Logo"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End First slide-->

                                        <!--Second slide-->
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-3 p-md-5">
                                                    <a href="#"><img class="img-fluid brand-img" src="./assets/Img/Bantuan-1.jpg" alt="Brand Logo"></a>
                                                </div>
                                                <div class="col-3 p-md-5">
                                                    <a href="#"><img class="img-fluid brand-img" src="./assets/Img/Bantuan-2.jpg" alt="Brand Logo"></a>
                                                </div>
                                                <div class="col-3 p-md-5">
                                                    <a href="#"><img class="img-fluid brand-img" src="./assets/Img/Bantuan-3.png" alt="Brand Logo"></a>
                                                </div>
                                                <div class="col-3 p-md-5">
                                                    <a href="#"><img class="img-fluid brand-img" src="./assets/Img/Bantuan-4.png" alt="Brand Logo"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Second slide-->

                                        <!--Third slide-->
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-3 p-md-5">
                                                    <a href="#"><img class="img-fluid brand-img" src="./assets/Img/Bantuan-1.jpg" alt="Brand Logo"></a>
                                                </div>
                                                <div class="col-3 p-md-5">
                                                    <a href="#"><img class="img-fluid brand-img" src="./assets/Img/Bantuan-2.jpg" alt="Brand Logo"></a>
                                                </div>
                                                <div class="col-3 p-md-5">
                                                    <a href="#"><img class="img-fluid brand-img" src="./assets/Img/Bantuan-3.png" alt="Brand Logo"></a>
                                                </div>
                                                <div class="col-3 p-md-5">
                                                    <a href="#"><img class="img-fluid brand-img" src="./assets/Img/Bantuan-4.png" alt="Brand Logo"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Third slide-->

                                    </div>
                                    <!--End Slides-->
                                </div>
                            </div>
                            <!--End Carousel Wrapper-->

                            <!--Controls-->
                            <div class="col-1 align-self-center">
                                <a class="h1" href="#templatemo-slide-brand" role="button" data-bs-slide="next">
                                    <i class="text-light fas fa-chevron-right"></i>
                                </a>
                            </div>
                            <!--End Controls-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Brands-->

        <!-- Start Content -->
        <div class="container-fluid bg-white py-5" id="contact">
            <div class="col-md-6 m-auto text-center">
                <h1 class="h1">kontak Kami</h1>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.3625207821096!2d110.4027746141539!3d-7.751319279003068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59750e3558b7%3A0xe462d839eaf227e!2sJl.%20Rambutan%2C%20Gempol%2C%20Condongcatur%2C%20Kec.%20Depok%2C%20Kabupaten%20Sleman%2C%20Daerah%20Istimewa%20Yogyakarta%2055281!5e0!3m2!1sid!2sid!4v1621855852765!5m2!1sid!2sid"
                width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <!-- Start Contact -->
            <div class="container py-5">
                <div class="row py-5">
                    <form class="col-md-9 m-auto" method="post" role="form" action="proses_kom.php">
                        <div class="row">
                            <div class="form-group col-md-6 mb-3">
                                <label for="inputname">Nama</label>
                                <input type="text" class="form-control mt-1" id="name" name="nama" placeholder="Nama">
                            </div>
                            <div class="form-group col-md-6 mb-3">
                                <label for="inputemail">Email</label>
                                <input type="email" class="form-control mt-1" id="email" name="email" placeholder="Email Anda">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="inputmessage">Pesan</label>
                            <textarea class="form-control mt-1" id="message" name="komen" placeholder="Message" rows="8"></textarea>
                        </div>
                        <div class="row">
                            <div class="col text-end mt-2">
                                <button type="submit" class="btn btn-success btn-lg px-3" name="pesan">Let’s Talk</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Contact -->

        <!-- Start Footer -->
        <footer class="bg-dark" id="tempaltemo_footer">
            <div class="container">
                <div class="row">

                    <div class="col-md-4 pt-5">
                        <h2 class="h2 text-success border-bottom pb-3 border-light logo">Apotek Sejaktera</h2>
                        <ul class="list-unstyled text-light footer-link-list">
                            <li>
                                <i class="fas fa-map-marker-alt fa-fw"></i> Condongcatur Sleman,Yogyakarta 52281
                            </li>
                            <li>
                                <i class="fa fa-phone fa-fw"></i>
                                <a class="text-decoration-none" href="tel:081-010-220-041">081-010-220-041</a>
                            </li>
                            <li>
                                <i class="fa fa-envelope fa-fw"></i>
                                <a class="text-decoration-none" href="mailto:Asejaktera.@gmail.com">Asejaktera@gmail.com</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-4 pt-5">
                        <h2 class="h2 text-light border-bottom pb-3 border-light">Produk</h2>
                        <ul class="list-unstyled text-light footer-link-list">
                            <li><a class="text-decoration-none" href="#">Batuk & flu</a></li>
                            <li><a class="text-decoration-none" href="#">Cegah Covid</a></li>
                            <li><a class="text-decoration-none" href="#">Deman</a></li>
                            <li><a class="text-decoration-none" href="#">Mata</a></li>
                            <li><a class="text-decoration-none" href="#">Antisepitk</a></li>
                        </ul>
                    </div>

                    <div class="col-md-4 pt-5">
                        <h2 class="h2 text-light border-bottom pb-3 border-light">Info lebih lanjut</h2>
                        <ul class="list-unstyled text-light footer-link-list">
                            <li><a class="text-decoration-none" href="#hero">Beranda</a></li>
                            <li><a class="text-decoration-none" href="#about">Tentang Kami</a></li>
                            <li><a class="text-decoration-none" href="#contact">Kontak Kmai</a></li>
                            <li><a class="text-decoration-none" href="shop.php">Belanja</a></li>
                        </ul>
                    </div>

                </div>

                <div class="row text-light mb-4">
                    <div class="col-12 mb-3">
                        <div class="w-100 my-3 border-top border-light"></div>
                    </div>
                    <div class="col-auto me-auto">
                        <ul class="list-inline text-left footer-icons">
                            <li class="list-inline-item border border-light rounded-circle text-center">
                                <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                            </li>
                            <li class="list-inline-item border border-light rounded-circle text-center">
                                <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                            </li>
                            <li class="list-inline-item border border-light rounded-circle text-center">
                                <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                            </li>
                            <li class="list-inline-item border border-light rounded-circle text-center">
                                <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

        <!-- Start Script -->
        <script src="./assets/Js/jquery-1.11.0.min.js"></script>
        <script src="./assets/Js/jquery-migrate-1.2.1.min.js"></script>
        <script src="./assets/Js/bootstrap.bundle.min.js"></script>
        <script src="./assets/Js/templatemo.js"></script>
        <script src="./assets/Js/custom.js"></script>
        <!-- End Script -->
</body>

</html>