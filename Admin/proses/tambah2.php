<?php
session_start();

    include("./koneksi.php");
    
    if(isset($_POST["simpan-data"])) {

        // ambil data dari formulir
        $nama = $_POST['nama'];
        $no_hp = $_POST['no_hp'];
        $alamat = md5($_POST['alamat']);

        $data = mysqli_query($kon, "SELECT `nama`FROM `users` WHERE nama='$nama'");
        $cek_data1 = mysqli_num_rows($data);
    
        if($cek_data1 > 1){
    
            echo'<script type="text/javascript">
            alert("Maaf nama sudah ada");
            window.location="tambah2.php"; </script>';
    
        }else{
    
        }
    
        $sql="INSERT INTO `users`(`nama`,'no_hp', 'alamat') VALUES ('$nama','$no_hp','$alamat')";
        if (mysqli_query($kon, $sql)) {
            echo'<script type="text/javascript">
            window.location="../user.php?page=simpan"; </script>';
      } else {
            echo '<script type="text/javascript">
            alert(""Error: " . $sql . "<br>" . mysqli_error($kon)");
            window.location="tambah2.php"; </script>';
      }
    }