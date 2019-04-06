<?php
if(isset($_COOKIE['iduser']) && (isset($_COOKIE['cry']) )){
	if(isset($_GET['profile']) ){
		if(isset($_GET['id'])){
			include("themes/$theme/layout/profile/user.phtml");
		}
	}
	else{
		include("themes/$theme/layout/dashboard/index.phtml");
	}
}
else{
	include("themes/$theme/layout/home/index.phtml");
}