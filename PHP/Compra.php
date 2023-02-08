<?php
    
    require_once("Cliente.php");
    require_once("Estoque.php");

    class Compra{


        protected Cliente $cliente;
        protected string $dataCompra;
        protected Estoque $informacoes;
        
            

        public function __construct(Cliente $cliente, string $dataCompra, Estoque $informacoes){$this->cliente = $cliente;$this->dataCompra = $dataCompra;$this->informacoes = $informacoes;}//fim do construtor


        public function __get(string $nomeVar){return $this->$nomeVar;}//fim do get
        
        
        public function __set(string $compraVar, string $valor) : void{$this->compraVar = $valor;}//fim do set

        
        
        public function __toString() : string{
        return "<br> Compra feito por: ".$this->cliente."  Data da Compra: ".$this->dataCompra."".$this->informacoes."<br>Valor total da compra R$".$this->informacoes->preco;
        }//fim do ToString
    }//Fim da classe
?>

