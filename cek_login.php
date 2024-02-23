 <?php
@session_start();
include "koneksi.php";

if(isset($_POST["login"])){
    $pass = md5($_POST['password']);
    $username = mysqli_escape_string($kon, $_POST['username']);
    $password = mysqli_escape_string($kon, $pass);

    $cek_user = mysqli_query($kon, "SELECT * FROM `users` WHERE username='$username'");
    $user_valid = mysqli_fetch_array($cek_user);

    if($user_valid){
        if($password == $user_valid['password']){

            session_start();

            $_SESSION['nama'] = $user_valid['nama'];
            $_SESSION['username'] = $user_valid['username'];
            $_SESSION['email'] = $user_valid['email'];
            $_SESSION['level'] = $user_valid['level'];
            $_SESSION['gender'] = $user_valid['gender'];

            if( $_SESSION['level'] == "admin"){
                header('location:./Admin/index.php?page=masuk');
            } else if($_SESSION['level'] == "pengguna"){
                header('location:./User/index.php?page=masuk');
            }
            
        }else{
            echo"<script>
                alert('Maaf, login gagal, password anda tidak sesuai !');
                document.location='login.php'
            </script>";
        }
    } else{
        echo"<script>
                alert('Maaf, login gagal, username anda tidak terdaftar !');
                document.location='login.php'
            </script>";
    }
}
