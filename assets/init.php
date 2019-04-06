<?php 
// +------------------------------------------------------------------------+
// | @author Alexandre Silva & Luis Felipe (kaway404)
// | @author_url 1: http://facebook.com/imxandeco
// | @author_email: xande1231231@hotmail.com   
// +------------------------------------------------------------------------+
// | NekoApp - Social Network for Geek
// | Copyright (c) 2018 NekoApp. All rights reserved.
// +------------------------------------------------------------------------+

@ini_set('session.cookie_httponly',1);
@ini_set('session.use_only_cookies',1);
@header("X-FRAME-OPTIONS: SAMEORIGIN");
if (!version_compare(PHP_VERSION, '7.0.0', '>=')) {
    exit("Required PHP_VERSION >= 7.0.0 , Your PHP_VERSION is : " . PHP_VERSION . "\n");
}
date_default_timezone_set('Brazil/East');
@ini_set('gd.jpeg_ignore_warning', 1);
require_once('includes/cache.php');
require_once('includes/functions_general.php');