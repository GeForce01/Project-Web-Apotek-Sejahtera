<?php
session_start();

    include("./koneksi.php");
    
    if(isset($_POST["simpan-data"])) {
        $id = $_POST['id_user'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $gender = $_POST['gender'];
        $no_hp= $_POST['no_hp']; 

        $data = "UPDATE `users` SET `nama`='$nama',`no_hp`='$no_hp',`alamat`='$alamat',`gender`='$gender', WHERE id_user='$id'";
        if (mysqli_query($kon, $data)) {
            echo'<script type="text/javascript">
            window.location="../user.php?page=simpan"; </script>';
      } else {
            echo '<script type="text/javascript">
            alert(""Error: " . $sql . "<br>" . mysqli_error($kon)");
            window.location="edit_u_2.php"; </script>';
      }
    }