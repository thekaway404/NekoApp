<?php
$nekoapp = '404';
include('../../assets/includes/app_start.php');



if(empty($_POST['email'])){
	$status_email = "0";
}

if(empty($_POST['senha'])){
	$status_senha = "0";
}

if (@$status_email == "0" OR @$status_senha == "0") {
	echo '01';
	exit();
}

else{
$email = $_POST['email'];
$senha = sha1($_POST['senha']);
$senha = preg_replace('/[^[:alnum:]_]/', '',$senha);
$result_usuario = "SELECT * FROM user WHERE id and email = '$email' and senha = '$senha' LIMIT 1";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$resultado = mysqli_fetch_assoc($resultado_usuario);
if(isset($resultado)){
if($resultado['status'] == 0){
	echo 'verificar';
	setcookie("verificar", $resultado['id'], time() + (86400 * 30), "/");
}
else{
	echo 'sucess';
	setcookie("verificar", '', time() + (86400 * 30), "/");
	setcookie("iduser", $resultado['id'], time() + (86400 * 30), "/");
	setcookie("cry", $resultado['idcry'], time() + (86400 * 30), "/");
}
}
else{
	echo 'invalid';
}
}