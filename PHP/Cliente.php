<?php

    require_once("Pessoa.php");

    class Cliente extends Pessoa{  


        public function __construct(
            string $nome,
            string $cpf,
            string $telefone,
            Endereco $endereco
        ){

            parent::__construct($nome, $cpf, $telefone, $endereco);
            

        }//Fim do construtor


        public function __get(string $nomeDaVariavel){
            return $this->$nomeDaVariavel;
        }

        public function __set(string $nomeDaVariavel, string $valor):void 
        {
            $this->nomeDaVariavel = $valor;
        }

        public function __toString() : string{
            return 
            "Nome: ".$this->$nome.
            ", Cpf: ".$this->$cpf.
            ", Telefone: ".$this->$telefone.
            ", Endereco: ".$this->$endereco;
        }
        

    }//Fim da classe





?>