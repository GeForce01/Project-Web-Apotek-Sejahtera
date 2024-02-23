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
                        <form class="requires-validation" novalidate method="POST" action="cek_register.php">

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" required>
                                <div class="valid-feedback">Nama Lengkap valid!</div>
                                <div class="invalid-feedback">Nama Lengkap tidak boleh kosong!</div>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="username" placeholder="Nama pengguna" required>
                                <div class="valid-feedback">Nama pengguna valid!</div>
                                <div class="invalid-feedback">Nama pengguna tidak boleh kosong!</div>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="email" name="email" placeholder="Alamat Email" required>
                                <div class="valid-feedback">Alamat email valid!</div>
                                <div class="invalid-feedback">Alamat email tidak boleh kosong!</div>
                            </div>


                            <div class="col-md-12">
                                <input class="form-control" type="password" name="password" placeholder="Password" required>
                                <div class="valid-feedback">Password valid!</div>
                                <div class="invalid-feedback">Password tidak boleh kosong!</div>
                            </div>

                            <input type="hidden" name="level" value="pengguna" required>

                            <div class="col-md-12 mt-3">
                                <label class="mb-3 mr-1" for="gender">Jenis kelamin:</label>

                                <input type="radio" class="btn-check" name="gender" value="Laki-Laki" id="male" autocomplete="off"  required>
                                <label class="btn btn-sm btn-outline-secondary" for="male">Laki-Laki</label>

                                <input type="radio" class="btn-check" name="gender" value="Perempuan" id="female" autocomplete="off" required>
                                <label class="btn btn-sm btn-outline-secondary" for="female">Perempuan</label>

                                <div class="valid-feedback mv-up">Anda memilih jenis kelamin!</div>
                                <div class="invalid-feedback mv-up">Pilih jenis kelamin!</div>
                            </div>

                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary" name="register">Register</button>
                            </div>
                        </form>
                        <p>Jika sudah punya akun ? <a class="white" href="login.php">Login</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./assets/Js/register.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/bootstrap.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
</body>

</html>