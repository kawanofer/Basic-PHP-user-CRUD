<?php
     class UsuarioDao{
     	function UsuarioDao(){
     		
     	}
		var $id;
		var $nome;
		var $sobrenome;
		var $endereco;

		// ID
		public function getId(){
			return $this->id;
		}
		public function setId($id){
			$this->id=$id;
		}

		// NOME
		public function getNome(){
			return $this->nome;
		}
		public function setNome($nome){
			$this->nome=$nome;
		}
		
		// SOBERNOME
		public function getSobrenome(){
			return $this->sobrenome;
		}
		public function setSobrenome($sobrenome){
			$this->sobrenome=$sobrenome;
		}
		
		// ENDEREÇO
		public function setEndereco($endereco){
			$this->endereco=$endereco;
		}
		public function getEndereco(){
			return $this->endereco;
		}
     }
?>