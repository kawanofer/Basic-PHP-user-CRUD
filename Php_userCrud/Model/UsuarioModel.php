<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/Php_userCrud/Model/Conexao.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/Php_userCrud/DAO/UsuarioDao.php";
class UsuarioModel
{
	public function UsuarioModel()
	{

	}

	public function inserir($nome, $sobrenome, $endereco)
	{
		$sql = "INSERT INTO `usuario`(`Nome`, `Sobrenome`,`Endereco`) VALUES ('" . $nome . "','" . $sobrenome . "','" . $endereco . "')";
		$conexao = new Conexao();
		$conexao->conecta();
		$rs = $conexao->AtualQuery($sql);
		$conexao->desconecta();
	}

	public function listar()
	{
		$sql = "SELECT `id`, `Nome`, `Sobrenome`, `Endereco` FROM `usuario`";

		$conexao = new Conexao();
		$conexao->conecta();
		$rs           = $conexao->execQuery($sql);
		$ArrayUsuario = array();

		$indice = 0;
		while ($row = mysql_fetch_array($rs)) {
			$usuario = new UsuarioDao();
			$usuario->setId($row['id']);
			$usuario->setNome($row['Nome']);
			$usuario->setSobrenome($row['Sobrenome']);
			$usuario->setEndereco($row['Endereco']);
			$ArrayUsuario[$indice] = $usuario;
			$indice++;
		}
		$conexao->desconecta();
		return $ArrayUsuario;
	}
	public function listarId($id)
	{
		$sql = "SELECT `id`,`Nome`, `Sobrenome`, `Endereco` FROM `usuario` WHERE id='" . $id . "'";

		$conexao = new Conexao();
		$conexao->conecta();
		$usuario = new UsuarioDao();
		$rs      = $conexao->execQuery($sql);

		if ($row = mysql_fetch_array($rs)) {
			$usuario->setId($row['id']);
			$usuario->setNome($row['Nome']);
			$usuario->setSobrenome($row['Sobrenome']);
			$usuario->setEndereco($row['Endereco']);
		}
		$conexao->desconecta();
		return $usuario;
	}

	public function editar($id, $nome, $sobrenome, $endereco)
	{
		echo $sql = "UPDATE `usuario` SET `Nome`='" . $nome . "',`Sobrenome`='" . $sobrenome . "',`Endereco`='" . $endereco . "' WHERE id='" . $id . "'";

		$conexao = new Conexao();
		$conexao->conecta();
		$conexao->AtualQuery($sql);
		$conexao->desconecta();
	}

	public function deletar($id)
	{
		$sql     = "DELETE FROM `usuario` WHERE id='" . $id . "'";
		$conexao = new Conexao();
		$conexao->conecta();
		$conexao->execQuery($sql);
		$conexao->AtualQuery($sql);
		$conexao->desconecta();
	}

}
