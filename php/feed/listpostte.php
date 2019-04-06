<?php
$nekoapp = '404';
include('../../assets/includes/app_start.php');
header('Content-type: text/html; charset=UTF-8');
$msg = $_POST['msg'];
$name = $_POST['name'];
?>

<div class="post_mama">

<img style="width: 60px; height: 60px; border-radius: 50%;" src="<?php echo $site_url;?>/themes/<?php echo $theme;?>/img/avatar/default.png">
<p style="position: relative; top: -40px; left: 70px;"><?php echo $name;?></p>

<hr style="position: relative; top: -20px;">

<p style="position: relative; top: -10px; left: 10px;"><?php echo $msg;?></p>
</div>