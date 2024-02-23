<?php

    include("./koneksi.php");

    // ambil data dari formulir
    $id_user = $_GET['id_user']; 

    $sql = "DELETE FROM 'users' WHERE id_user=$id_user";
    if (mysqli_query($kon, $sql)) {
        echo'<script type="text/javascript">
        window.location="../user.php?page=simpan"; </script>';
  } else {
        echo '<script type="text/javascript">
        alert(""Error: " . $sql . "<br>" . mysqli_error($kon)");
        window.location="../user.php"; </script>';
  }

?>