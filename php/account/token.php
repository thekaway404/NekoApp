<?php
$nekoapp = '404';
include('../../assets/includes/app_start.php');
$token = $_POST['token'];
$iduser = $_COOKIE['verificar'];

if(empty($_POST['token'])){
	echo '01';
}

if(empty($_COOKIE['verificar'])){
	echo '02';
}

else{
$result_usuario = "SELECT * FROM verificar WHERE iduser = '$iduser' and ativo = '1' and code = '$token' LIMIT 1";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$resultado = mysqli_fetch_assoc($resultado_usuario);

$result_usuario5 = "SELECT * FROM user WHERE id = '$iduser' LIMIT 1";
$resultado_usuario5 = mysqli_query($conn, $result_usuario5);
$resultado5 = mysqli_fetch_assoc($resultado_usuario5);

if(isset($resultado)){
	$sql = "UPDATE user SET status= '1' WHERE id='$iduser'";
	if ($conn->query($sql) === TRUE) {
		echo 'sucess';
		setcookie("verificar", '', time() + (86400 * 30), "/");
		setcookie("iduser", $resultado5['id'], time() + (86400 * 30), "/");
		setcookie("cry", $resultado5['idcry'], time() + (86400 * 30), "/");
	}
}
else{
	echo 'invalid';
}
}