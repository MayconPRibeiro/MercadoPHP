<?php
    require_once("Pessoa.php");
    require_once("Endereco.php");

    class Funcionario extends Pessoa{
        protected int $cod;
        protected string $sexo;
        protected string $funcao;
        protected float $salario;


        public function __construct(
            string $nome,
            string $cpf,
            string $telefone,
            Endereco $endereco,
            int $cod,
            string $sexo,
            string $funcao,
            float $salario


        ){

            parent::__construct($nome, $cpf, $telefone, $endereco);
            $this->cod = $cod;
            $this->sexo = $sexo;
            $this->funcao = $funcao;
            $this->salario = $salario;
            

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
            "<br>Código: ".$this->cod.
            "<br>Nome: ".$this->nome.
            "<br>Cargo: ".$this->funcao.
            "<br>Salario R$".$this->salario.
            "<br>Telefone: ".$this->telefone.
            "<br>Sexo: ".$this->sexo.
            "<br>Endereço: ".$this->endereco;
        
        }



    }//Fim da classe






?>