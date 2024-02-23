<?php
    if(@$_GET['page']=="simpan"){
        echo 
        '<script type="text/javascript">
            alert("Register Berhasil \n Silahkan Anda Login !");
        </script>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Pendaftaran Halo Apotek</title>
    <link rel="stylesheet" href="./assets/Css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/fa200c420d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/Css/re_log.css">
</head>
<body>
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Register</h3>
                        <p>Isi data di bawah ini.</p>
                        <form class="requires-validation" novalidate method="POST" action="cek_login.php">
                            <div class="col-md-12">
                                <input class="form-control " type="text" name="username" id="username"placeholder="Nama pengguna" required>
                                <div class="valid-feedback">Nama pengguna valid!</div>
                                <div class="invalid-feedback">Nama pengguna tidak boleh kosong!</div>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="password" name="password" placeholder="Password" required>
                                <div class="valid-feedback">Password valid!</div>
                                <div class="invalid-feedback">Password tidak boleh kosong!</div>
                            </div>
                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary" name="login">Login</button>
                            </div>
                        </form>
                        <p>Jika belum punya akun ? <a class="white" href="register.php">Register</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./assets/Js/register.js"></script>
    <script src="./assets/Js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
</body>

</html>