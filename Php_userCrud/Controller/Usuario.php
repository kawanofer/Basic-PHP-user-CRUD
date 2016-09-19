<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Php_userCrud/DAO/UsuarioDao.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Php_userCrud/Model/UsuarioModel.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Php_userCrud/Model/Conexao.php';

class Controle_usuario
{
	public function Controle_usuario()
	{

	}
	public function redireciona($local)
	{
		header('Location: ' . $local);
	}

	public function SalvarUsuario()
	{
		$usuarioModel = new UsuarioModel();
		$usuario      = new UsuarioDao();

		if (isset($_POST['submit'])):
			$p = $_POST;
			$usuario->setNome($p['nome']);
			$usuario->setSobrenome($p['sobrenome']);
			$usuario->setEndereco($p['endereco']);

			$usuarioModel->inserir($usuario->getNome(), $usuario->getSobrenome(), $usuario->getEndereco());
			$this->redireciona('index.php?mostrar=usuario');

		endif;

		include 'View/Usuario.php';

	}
	public function IdUsuario()
	{
		$usuarioModel = new UsuarioModel();
		$usuario      = new UsuarioDao()	;
		@$id          = $_GET['idu'];
		$usuario->setId($id);

		if (isset($_POST['submit'])) {

			$p = $_POST;
			@$usuario->setNome($p['nome']);
			@$usuario->setSobrenome($p['sobrenome']);
			@$usuario->setEndereco($p['endereco']);

			$usuarios = $usuarioModel->listarId($usuario->getId());
			$usuarioModel->editar($usuario->getId(), $usuario->getNome(), $usuario->getSobrenome(), $usuario->getEndereco());
			$usuarios = $usuarioModel->listarId($usuario->getId());
			$this->redireciona('index.php?mostrar=usuario');
		} else {
			$usuarios = $usuarioModel->listarId($usuario->getId());
		}

		include 'View/EditarUsuario.php';
	}

	public function TodosUsuario()
	{
		require_once $_SERVER['DOCUMENT_ROOT'] . '/Php_userCrud/View/ListaUsuario.php';
		$usuario      = new UsuarioDao();
		$usuarioModel = new UsuarioModel();
		$usuarios     = $usuarioModel->listar();
		return $usuarios;
	}

	public function ExcluirUsuario()
	{
		$usuario      = new UsuarioDao();
		$usuarioModel = new UsuarioModel();
		@$id          = $_GET['idu'];

		$usuario->setId($id);
		$usuarioModel->deletar($usuario->getId());
		$this->redireciona('index.php?mostrar=usuario');
	}

	public function requisicaoUsuario()
	{
		@$op = $_GET['opcao'];

		if ($op == 'novo') {
			$this->SalvarUsuario();
		} elseif (!$op || $op == 'listar') {
			$this->TodosUsuario();

		} elseif ($op == 'excluir') {
			$this->ExcluirUsuario();
		} elseif ($op == 'editar') {
			$this->IdUsuario();
		} else {
			echo "Erro!";
		}
	}
}
