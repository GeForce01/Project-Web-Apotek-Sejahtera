<?php
session_start();

    include("./koneksi.php");
    
    if(isset($_POST["simpan-data"])) {
        $id = $_POST['id_user'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $level = $_POST['level']; 

        $data = "UPDATE `users` SET username='$username', email='$email', password='$password', level='$level' WHERE id_user='$id'";
        if (mysqli_query($kon, $data)) {
            echo'<script type="text/javascript">
            window.location="../user.php?page=simpan"; </script>';
      } else {
            echo '<script type="text/javascript">
            alert(""Error: " . $sql . "<br>" . mysqli_error($kon)");
            window.location="edit_u_1.php"; </script>';
      }
    }