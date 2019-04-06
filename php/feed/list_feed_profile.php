<?php
$nekoapp = '404';
include('../../assets/includes/app_start.php');
header('Content-type: text/html; charset=UTF-8');
if(isset($_POST['idstranger'])){
$idstranger = $_POST['idstranger'];
$result_post = "SELECT * FROM postagem WHERE id and iduser = $idstranger order by id DESC";
$resultado_post = mysqli_query($conn, $result_post);
$post = mysqli_fetch_assoc($resultado_post);
if(isset($post)){
foreach ($resultado_post as $resultado_post => $resultado_posts) {
$iduserquem = $resultado_posts['iduser'];
$result_userquem = "SELECT * FROM user WHERE id = $iduserquem";
$resultado_userquem = mysqli_query($conn, $result_userquem);
$userquem = mysqli_fetch_assoc($resultado_userquem);
?>

<div class="post_mama">
<img style="width: 60px; height: 60px; border-radius: 50%;" src="<?php echo $site_url;?>/themes/<?php echo $theme;?>/img/avatar/default.png">
<p style="position: relative; top: -40px; left: 70px;"><a href="/perfil/<?php echo $userquem['id'];?>"><?php echo $userquem['nome'];?></a></p>

<hr style="position: relative; top: -20px;">

<p style="position: relative; top: -10px; left: 10px;"><?php echo strip_tags($resultado_posts['texto'], '<a><i>');?></p>
<div class="bottom">

<?php
include("../../themes/$theme/layout/dashboard/post/like.phtml");
?>

</div>
</div>


<?php }}
else{
	include("../../themes/$theme/layout/profile/post404.phtml");
}
}