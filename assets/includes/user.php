<?php
if(isset($_COOKIE['iduser']) && (isset($_COOKIE['cry']) )){
$iduser = $_COOKIE['iduser'];
$cry = $_COOKIE['cry'];
$result_usuario = "SELECT * FROM user WHERE id = '$iduser' and idcry = '$cry' LIMIT 1";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$user = mysqli_fetch_assoc($resultado_usuario);
$logged = null;

if($user['status'] == "0"){
	$logged = 'false';
	$verificar = 'true';
	setcookie("verificar", $iduser, time() + (86400 * 30), "/");
	header('Location: /');
}
else{

if(isset($user)){
	$avatar = null;
	$name_full = $user['nome'];
	if($avatar <> ""){
	   $avatar = $user['avatar'];
	}
	else{
		$avatar = '/themes/default/img/avatar/6debd47ed13483642cf09e832ed0bc1b.png';
	}
	$logged = 'true';
	echo '<p class="logged" style="display: none"></p>';
}
else{
	$logged = 'false';
	setcookie("iduser", '', time() + (86400 * 30), "/");
	setcookie("cry", '', time() + (86400 * 30), "/");
	header('Location: /');
}
}
}