<?php

    class Login{
        private $nome;
        private $senha;

        public function entrar(){
            echo "<br />";
            echo "Seja bem-vindo(a) ". $this->nome;
            echo "<br />";
        }

        public function __construct($nome, $senha){
            $this->nome = $nome;
            $this->senha = $senha;
        }

        public function setNome(){
            $this->nome = $nome;
        }

        public function getNome(){
           return $this->nome;
        }

        public function setSenha(){
            $this->senha = $senha;
        }

        public function getSenha(){
            $this->senha = $senha;
        }

    }
?>