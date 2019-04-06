<?php
$nekoapp = '404';
include('../../assets/includes/app_start.php');
header('Content-type: text/html; charset=UTF-8');
$nome = $_POST['nome'];
$iduser = $_COOKIE['iduser'];
if(empty($nome)){
	echo "";
}else{
$userd = "SELECT * FROM user WHERE id <> $iduser and nome LIKE '%$nome%' ORDER BY id DESC LIMIT 30";
$usera = mysqli_query($conn, $userd);
$userar = mysqli_fetch_assoc($usera);
if(isset($userar)){
foreach ($usera as $usera => $useras) {?>
<a href="/perfil/<?php echo $useras['id'];?>" style="color: #000 !important; display: block;"><img src="<?php echo $site_url;?>/themes/<?php echo $theme;?>/img/avatar/default.png" style="width: 40px; height: 40px; margin-right: 10px; border-radius: 50%;"><?php echo $useras['nome'];?></a>
<?php } } else{ echo '404'; } ?>
<?php  } ?>