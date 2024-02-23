<?php
session_start();

include "koneksi.php";

if(isset($_POST['pesan'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $komen = $_POST['komen'];
    $waktu = date("Y-m-d, H:i a");

    $input_chat = "INSERT INTO `komen`(`nama_komen`, `email_komen`, `waktu_komen`, `pesan`) VALUES ('$nama','$email','$waktu','$komen')";
    if(mysqli_query($kon, $input_chat)){
?>
        <script language="JavaScript">
            alert('pesan anda atau komen Anda masukan kepada kami');
            document.location='index.php';
        </script>
<?php
    } else{
?>      
        <script language="JavaScript">
            alert('pesan anda atau komen Anda masukan error');
            document.location='index.php';
        </script>
<?php
    }
}
?>