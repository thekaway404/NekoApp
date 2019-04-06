<?php
$nekoapp = '404';
include('../../assets/includes/app_start.php');
$iduser = $_COOKIE['iduser'];
$msg = $_POST['msg'];
$ativo = "0";
$tipo = "1";

if(empty($_POST['msg'])){
	$status_msg = 0;
}

if (@$status_msg == "0") {
	echo '01';
	exit();
}
else{
$sql = "INSERT INTO postagem (iduser, texto, tipo)
VALUES ('".$iduser."', '".$msg."', '".$tipo."')";
if (mysqli_query($conn, $sql)) {
$result_post = "SELECT * FROM postagem WHERE id";
$resultado_post = mysqli_query($conn, $result_post);
$post = mysqli_fetch_assoc($resultado_post);
if(isset($post)){
	echo 'not';
}
else{
	echo 'sucess';
}
}
}
