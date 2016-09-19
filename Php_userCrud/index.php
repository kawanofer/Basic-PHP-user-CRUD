<?php
	require_once($_SERVER['DOCUMENT_ROOT'].'/Php_userCrud/Controller/Sistema.php');
	$sistema= new Sistema();
	$sistema->SistemaAll();
?>
