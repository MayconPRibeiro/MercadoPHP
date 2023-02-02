<?php

    


    class Endereco{

        private string $logradouro;
        private string $numero;
        private string $complemento;
        private string $bairro;
        private string $cidade;
        private string $estado;
        private string $UF;
        private string $pais;
        private string $CEP;


        //Metodo construtor
        public function __construct(
            string $logradouro, 
            string $numero, 
            string $complemento, 
            string $bairro,
            string $cidade,
            string $estado,
            string $UF,
            string $pais,
            string $CEP)
        {
            $this->logradouro  = $logradouro;
            $this->numero      = $numero;
            $this->complemento = $complemento;
            $this->bairro      = $bairro;
            $this->cidade      = $cidade;
            $this->estado      = $estado;
            $this->UF          = $UF;
            $this->pais        = $pais;
            $this->CEP         = $CEP;
        }//fim do construtor


        public function __get(string $nomeDaVariavel){
            return $this->$nomeDaVariavel;
        }

        public function __set(string $nomeDaVariavel, string $valor): void{
            $this->nomeDaVariavel = $valor;
        }

        public function __toString() : string {
            return 
            "Logradouro: ".$this->logradouro.
            ", Numero: ".$this->numero.
            ", Complemento: ".$this->complemento.
            ", Bairro: ".$this->bairro.
            ", Cidade: ".$this->cidade.
            ", Estado: ".$this->estado.
            ", UF: ".$this->UF.
            ", País: ".$this->pais.
            ", CEP: ".$this->CEP;
        }

       



    }//Fim da classe



?>