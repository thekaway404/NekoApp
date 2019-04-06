<?php
$nekoapp = '404';
include('../../assets/includes/app_start.php');

$email = $_POST['email'];
$senha = sha1($_POST['senha']);
$senha = preg_replace('/[^[:alnum:]_]/', '',$senha);
$cry = sha1($email);


if(isset($_COOKIE['iduser'],$_COOKIE['cry'])){
	$logado = 1;
}
else{

if(empty($_POST['nome'])){
	$status_nome = 0;
}

if(empty($_POST['sobrenome'])){
	$status_sobrenome = 0;
}
if(empty($_POST['email'])){
		$status_email = "0";
}
if(empty($_POST['senha'])){
		$status_senha = "0";
}

if (@$status_email == "0" OR @$status_senha == "0" OR @$status_nome == "0" OR @$status_sobrenome == "0") {
	echo '01';
	exit();
}

$result_usuario = "SELECT * FROM user WHERE email = '$email' LIMIT 1";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$resultado = mysqli_fetch_assoc($resultado_usuario);
if(isset($resultado)){
			echo '02';
			exit();
}

else{
$nome = $_POST['nome'] . ' ' . $_POST['sobrenome'];
$sql = "INSERT INTO user (idcry, email, senha, nome)
VALUES ('".$cry."', '".$email."', '".$senha."', '".$nome."')";
if (mysqli_query($conn, $sql)) {
	$result_usuario = "SELECT * FROM user WHERE email = '$email' && senha = '$senha' LIMIT 1";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	$resultado = mysqli_fetch_assoc($resultado_usuario);
	setcookie("verificar", $resultado['id'], time() + (86400 * 30), "/");
	require '../../php/account/verificar.php';
	$status = 'sucess';
$idquem = $resultado['id'];
}
}
}