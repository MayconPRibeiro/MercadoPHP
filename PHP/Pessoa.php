<?php


    require_once("Endereco.php");

    class Pessoa{
        public string $nome;
        public string $cpf;
        public string $telefone;
        public Endereco $endereco;



        public function __construct(string $nome, string $cpf, string $telefone, Endereco $endereco){
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
        }//Fim do construtor

        public function __get(string $nomeDaVariavel){
            return $this->nomeDaVariavel;
        }
    
        public function __set(string $nomeDaVariavel, string $valor):void 
        {
            $this->nomeDaVariavel = $valor;
        }

        public function __toString() : string{
            return  "Nome: ".$this->nome.
            ", CPF: ".$this->cpf.
            ", telefone: ".$this->telefone.
            ", Endereco: ".$this->endereco;
        }

    }//Fim da classe






?>