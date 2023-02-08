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
        

        

        




    }//Fim da classe
?>