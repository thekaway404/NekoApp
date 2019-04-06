<?php
if(isset($_COOKIE['iduser']) && (isset($_COOKIE['cry']) )){
if(isset($_GET['id'])){
$strangerid = $_GET['id'];
$iduser = $_COOKIE['iduser'];
$pontos = array(",", ".", "'");
$strangert = str_replace($pontos, "", $strangerid);
$result_stranger = "SELECT * FROM user WHERE id = '$strangert' LIMIT 1";
$resultado_stranger = mysqli_query($conn, $result_stranger);
$stranger = mysqli_fetch_assoc($resultado_stranger);
$logged = null;

if(isset($stranger)){
$found = 'true';
$ativo = "1";
$nombre = $stranger['nome'];
echo '<p class="logged" style="display: none"></p>';
$result_usuario = "SELECT * FROM busca_recente WHERE iduser = '$iduser' and busca = '$nombre' LIMIT 1";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$resultado = mysqli_fetch_assoc($resultado_usuario);
if(isset($resultado)){
$found = "1";
}
else{
$sql = "INSERT INTO busca_recente (iduser, busca, ativo, idquem)
VALUES ('".$iduser."', '".$nombre."', '".$ativo."', '".$strangerid."')";
if (mysqli_query($conn, $sql)) {
	$sucess = "1";
}
}
}
}
else{
	$found = 'false';
}
}