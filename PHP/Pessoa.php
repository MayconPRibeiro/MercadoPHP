<?php


    require_once("Endereco.php");

    abstract class Pessoa{
        protected string $nome;
        protected string $cpf;
        protected string $telefone;
        protected Endereco $endereco;



        public function __construct(string $nome, string $cpf, string $telefone, Endereco $endereco){
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
        }//Fim do construtor

        public function __get(string $nomeDaVariavel){
            return $this->$nomeDaVariavel;
        }

        public function __set(string $nomeDaVariavel, string $valor):void 
        {
            $this->nomeDaVariavel = $valor;
        }

        





    }//Fim da classe






?>