<?php
// +------------------------------------------------------------------------+
// | @author Alexandre Silva & Luis Felipe (kaway404)
// | @author_url 1: http://facebook.com/imxandeco
// | @author_email: xande1231231@hotmail.com   
// +------------------------------------------------------------------------+
// | NekoApp - Social Network for Geek
// | Copyright (c) 2018 NekoApp. All rights reserved.
// +------------------------------------------------------------------------+
if(isset($nekoapp)){
	@ini_set('max_execution_time', 0);
	include('../../config.php');
	// Connect to SQL Server
	$conn = mysqli_connect($sql_db_host, $sql_db_user, $sql_db_pass, $sql_db_name);
}
else{
	@ini_set('max_execution_time', 0);
	require 'assets/includes/phpMailer_config.php';
	require_once('config.php');
	// Connect to SQL Server
	$conn = mysqli_connect($sql_db_host, $sql_db_user, $sql_db_pass, $sql_db_name);
	require("assets/includes/rewrite.php");
	require("assets/includes/user.php");
	require("assets/includes/stranger.php");
	require("assets/includes/template.php");
}
?>