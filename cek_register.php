<?php
@session_start();

include "koneksi.php";

if(isset($_POST["register"])){
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST["password"]);
    $level = $_POST['level'];
    $gender = $_POST['gender'];

    $data = mysqli_query($kon, "SELECT `username`FROM `users` WHERE username='$username'");
    $cek_data1 = mysqli_num_rows($data);

    if($cek_data1 > 1){

        echo'<script type="text/javascript">
		alert("Maaf username sudah ada");
		window.location="register.php"; </script>';

    }else{

    }

	$sql="INSERT INTO `users`(`nama`, `username`, `email`,'password',`gender`, `level`) VALUES ('$nama','$username','$email','$password','$gender','$level')";
	if (mysqli_query($kon, $sql)) {
        echo'<script type="text/javascript">
		window.location="login.php?page=simpan"; </script>';
  } else {
        echo '<script type="text/javascript">
		alert(""Error: " . $sql . "<br>" . mysqli_error($kon)");
		window.location="register.php"; </script>';
  }
}
?>
