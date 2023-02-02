<?php

    require_once("Pessoa.php");
    require_once("Endereco.php");


    class ClienteSemCadastro extends Pessoa{
        

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
            ", CPF: ".$this->$cpf.
            ", telefone: ".$this->$telefone.
            ", Endereco: ".$this->$endereco;
        }




    }//Fim da classe
?>