<?php

$view = isset($_GET['view'])? ucwords($_GET['view']) : 'Index';

require_once('core/libs/smarty/Smarty.class.php');

if (file_exists('core/controllers/'.$view.'Controller.php')) {
	
	require_once('core/controllers/'.$view.'Controller.php');

}else{
	//Pagina de error
	require_once('core/controllers/IndexController.php');
}