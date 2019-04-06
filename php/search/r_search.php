<?php
$nekoapp = '404';
include('../../assets/includes/app_start.php');
header('Content-type: text/html; charset=UTF-8');
$iduser = $_COOKIE['iduser'];
$userd = "SELECT * FROM busca_recente WHERE id and iduser = $iduser ORDER BY id DESC LIMIT 10";
$usera = mysqli_query($conn, $userd);
$userar = mysqli_fetch_assoc($usera);
if(isset($userar)){
echo '<p style="position: relative; top: 5px; left: 10px;">Buscas recentes</p>
<hr>';
foreach ($usera as $usera => $useras) {
$idquem = $useras['idquem'];
$result_userquem = "SELECT * FROM user WHERE id = $idquem";
$resultado_userquem = mysqli_query($conn, $result_userquem);
$userquem = mysqli_fetch_assoc($resultado_userquem);
?>
<a href="/perfil/<?php echo $userquem['id'];?>" style="color: #000 !important; display: block; position: relative; top: -10px;"><img src="<?php echo $site_url;?>/themes/<?php echo $theme;?>/img/avatar/default.png" style="border-radius: 50%;width: 40px; height: 40px; margin-right: 10px;"><?php echo $userquem['nome'];?></a>
<?php } }  else{ echo '404'; } ?>