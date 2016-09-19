<?php
class Conexao
{
    public $host;
    public $usuario;
    public $pass;
    public $nome_banco;
    public $saida;
    public $status;
    public $query_conexao;

    public function Conexao()
    {

    }

    public function conecta()
    {
        $this->status        = 0;
        $this->host          = "localhost";
        $this->user          = "root";
        $this->pass          = "";
        $this->nome_banco    = "db_userTable";
        $this->query_conexao = mysql_connect($this->host, $this->user, $this->pass);
        if (!$this->nome_banco) {
            echo "Erro ao conectar ao banco de dados" . mysql_error();
        } else {
            $this->status = 1;
        }
        mysql_select_db($this->nome_banco);
        mysql_set_charset("utf-8");
        mysql_query("SET NAMES 'utf8'");
        mysql_query('SET character_set_connection=utf8');
        mysql_query('SET character_set_client=utf8');
        mysql_query('SET character_set_results=utf8');
    }

    public function desconecta()
    {
        return mysql_close($this->query_conexao);
    }

    public function execQuery($query)
    {
        if ($this->status == 1) {
            if ($this->saida = mysql_query($query)) {
                return $this->saida;
            } else {
                echo "<pre class=\"error\">";
                echo "SQL ERROR: " . mysql_error();
                echo "SQL : " . $query;
                echo "</pre>";
                $this->desconecta();
            }
        }
    }
    public function AtualQuery($query)
    {
        if ($this->status == 1) {
            if ($this->entrada = mysql_query($query)) {
                return true;
            } else {
                echo "<pre class=\"error\">";
                echo "SQL ERROR: " . mysql_error();
                echo "</pre>";
                $this->desconecta();
                return false;
            }
        }
    }
}
