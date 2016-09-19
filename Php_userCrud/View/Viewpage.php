<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Php_userCrud/Controller/Sistema.php';
?>

<!DOCTYPE html>
<html lang="pt">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<title>Listar Usuários</title>
		<meta name="description" content="">
		<link type="text/css" rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT']?>/Php_userCrud/View/css/style.css" />
		<link type="text/css" rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT']?>/Php_userCrud/View/css/bootstrap.min.css" />
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	</head>
	<body>
		<div class="container-fluid">
			<div class="navbar navbar-default">
				<div class="navbar-inner">
					<a class="brand" href="index.php">Sistema de Cadastro de Usuários</a>
				</div>
			</div>
		</div>
		<script src="<?php $_SERVER['DOCUMENT_ROOT']?>/Php_userCrud/View/js/jquery.js"></script>
		<script src="<?php $_SERVER['DOCUMENT_ROOT']?>/Php_userCrud/View/js/bootstrap.min.js"></script>
		<script src="<?php $_SERVER['DOCUMENT_ROOT']?>/Php_userCrud/View/js/jquery.validate.js"></script>
	</body>
</html>