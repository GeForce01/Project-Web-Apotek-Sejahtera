<?php  
include './koneksi.php';
 
$input = filter_input_array(INPUT_POST);

$id = $_POST['id_user'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$gender = $_POST['gender'];  
$level = $_POST['level']; 
 
if($input["action"] === 'edit'){
	$query = "UPDATE `users` SET `username`=?, `email`=?, `password`=?, `gender`=?,`level`=? WHERE `id_user`=?";
	$dewan1 = $kon->prepare($query);
	$dewan1->bind_param('sssssi', $username, $email, $password, $gender, $level, $id);
	$dewan1->execute();
}
 
if($input["action"] === 'delete'){
	$query = "DELETE FROM `users` WHERE `id_user`=?";
	$dewan1 = $kon->prepare($query);
	$dewan1->bind_param('i', $id);
	$dewan1->execute();
}
 
echo json_encode($input);
?>