<?php
if(isset($_COOKIE['iduser']) && (isset($_COOKIE['cry']) )){
	$logged = 'false';
	setcookie("iduser", '', time() + (86400 * 30), "/");
	setcookie("cry", '', time() + (86400 * 30), "/");
	header('Location: /');
}

if(isset($_COOKIE['verificar'])){
	$logged = 'false';
	setcookie("verificar", '', time() + (86400 * 30), "/");
	header('Location: /');
}

header('Location: /');
