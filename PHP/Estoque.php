<?php


    class Estoque{
        protected string $produto;
        protected int $unidade;
        protected float $preco;
    

        public function __construct(string $produto, int $unidade, float $preco){
            $this->produto = $produto;
            $this->unidade = $unidade;
            $this->preco = $preco;
        }//Fim construtor


        public function __get(string $nomeDaVariavel){
            return $this->$nomeDaVariavel;
        }

        public function __set(string $nomeDaVariavel, string $valor) : void
        {
            $this->nomeDaVariavel = $valor;
        }

        public function __toString() : string{
            return "<br>Há ".$this->unidade." unidades de ".$this->produto.", com valor unitário de R$".$this->preco;
        }//Fim do toString





    }//Fim da classe







?>