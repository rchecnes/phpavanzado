<?php

if ($_POST) {
	require_once('core/models/Class.Acceso.php');

	$acceso = new Acceso();
	$acceso->Login();
}else{

	$template = new Smarty();
	$template->display('Public/login.tpl');
}

