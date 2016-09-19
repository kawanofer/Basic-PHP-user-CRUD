<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Php_userCrud/Controller/Usuario.php';
class Sistema
{
    public function Sistema()
    {

    }

    public function SistemaAll()
    {
        require_once $_SERVER['DOCUMENT_ROOT'] . '/Php_userCrud/View/Viewpage.php';
        @$mostrar = $_GET['mostrar'];
        if (!$mostrar || $mostrar == 'usuario') {
            $usuario = new Controle_usuario();
            return $usuario->requisicaoUsuario();
        }
    }
}
