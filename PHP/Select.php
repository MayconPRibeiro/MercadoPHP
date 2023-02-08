<?php
    require_once('Conexao.php');
    class Consultar{

        public function ConsultarIndProduto(Conexao $conexao, string $nomeDaTabela, int $codigo){
            //Consultar
            try{
                $conn = $conexao->Conectar();
                $sql = "select * from $nomeDaTabela where codigo = '$codigo'";
                $result = mysqli_query($conn, $sql);
                
                while($dados = mysqli_fetch_Array($result)){
                    if($dados["codigo"] == $codigo){
                        echo "<br><br>Código:  ".$dados["codigo"]."<br>Nome: ".$dados["nome"]."<br>Preço: ".$dados["preco"]."<br>Quantidade: ".$dados["quantidade"];
                    }
                }//fim do while

                mysqli_close($conn);
            }catch(Except $erro){
                echo $erro;
            }
        }//fim do Consultar

        public function ConsultarTudoProduto(Conexao $conexao, string $nomeDaTabela){
            //Consultar
            try{
                $conn = $conexao->Conectar();
                $sql = "select * from $nomeDaTabela";
                $result = mysqli_query($conn, $sql);
                
                while($dados = mysqli_fetch_Array($result)){
                    echo "<br><br>Código:  ".$dados["codigo"]."<br>Nome: ".$dados["nome"]."<br>Preço: ".$dados["preco"]."<br>Quantidade: ".$dados["quantidade"];
                }//fim do while

                mysqli_close($conn);
            }catch(Except $erro){
                echo $erro;
            }
        }//fim do Consultar
        public function ConsultarIndPessoa(Conexao $conexao, string $nomeDaTabela, int $codigo){
            //Consultar
            try{
                $conn = $conexao->Conectar();
                $sql = "select * from $nomeDaTabela where codigo = '$id'";
                $result = mysqli_query($conn, $sql);
                
                while($dados = mysqli_fetch_Array($result)){
                    if($dados["id"] == $id){
                        echo "<br><br>ID:  ".$dados["id"]."<br>Nome: ".$dados["nome"]."<br>CPF: ".$dados["cpf"]."<br>Telefone: ".$dados["telefone"];
                    }
                }//fim do while

                mysqli_close($conn);
            }catch(Except $erro){
                echo $erro;
            }
        }//fim do Consultar

        public function ConsultarTudoPessoa(Conexao $conexao, string $nomeDaTabela){
            //Consultar
            try{
                $conn = $conexao->Conectar();
                $sql = "select * from $nomeDaTabela";
                $result = mysqli_query($conn, $sql);
                
                while($dados = mysqli_fetch_Array($result)){
                    echo "<br><br>ID:  ".$dados["id"]."<br>Nome: ".$dados["nome"]."<br>CPF: ".$dados["cpf"]."<br>Telefone: ".$dados["telefone"];
                }//fim do while

                mysqli_close($conn);
            }catch(Except $erro){
                echo $erro;
            }
        }//fim do Consultar
        public function ConsultarIndEndereco(Conexao $conexao, string $nomeDaTabela, int $codigo){
            //Consultar
            try{
                $conn = $conexao->Conectar();
                $sql = "select * from $nomeDaTabela where codigo = '$id'";
                $result = mysqli_query($conn, $sql);
                
                while($dados = mysqli_fetch_Array($result)){
                    if($dados["id"] == $id){
                        echo "<br><br>ID:  ".$dados["id"]."<br>Logradouro: ".$dados["logradouro"]."<br>Numero: ".$dados["numero"].
                        "<br>Complemento: ".$dados["complemento"]."<br>Bairro:  ".$dados["bairro"]."<br>Cidade: ".$dados["cidade"].
                        "<br>Estado: ".$dados["estado"]."<br>UF: ".$dados["uf"]."<br>Pais: ".$dados["pais"]."<br>CEP: ".$dados["cep"];
                    }
                }//fim do while

                mysqli_close($conn);
            }catch(Except $erro){
                echo $erro;
            }
        }//fim do Consultar

        public function ConsultarTudoEndereco(Conexao $conexao, string $nomeDaTabela){
            //Consultar
            try{
                $conn = $conexao->Conectar();
                $sql = "select * from $nomeDaTabela";
                $result = mysqli_query($conn, $sql);
                
                while($dados = mysqli_fetch_Array($result)){
                    echo "<br><br>ID:  ".$dados["id"]."<br>Logradouro: ".$dados["logradouro"]."<br>Numero: ".$dados["numero"].
                    "<br>Complemento: ".$dados["complemento"]."<br>Bairro:  ".$dados["bairro"]."<br>Cidade: ".$dados["cidade"].
                    "<br>Estado: ".$dados["estado"]."<br>UF: ".$dados["uf"]."<br>Pais: ".$dados["pais"]."<br>CEP: ".$dados["cep"];
                }//fim do while

                mysqli_close($conn);
            }catch(Except $erro){
                echo $erro;
            }
        }//fim do Consultar
        public function ConsultarIndFuncionario(Conexao $conexao, string $nomeDaTabela, int $codigo){
            //Consultar
            try{
                $conn = $conexao->Conectar();
                $sql = "select * from $nomeDaTabela where codigo = '$id'";
                $result = mysqli_query($conn, $sql);
                
                while($dados = mysqli_fetch_Array($result)){
                    if($dados["id"] == $id){
                        echo "<br><br>ID:  ".$dados["id"]."<br>Sexo: ".$dados["sexo"]."<br>Função: ".$dados["funcao"]."<br>Salário: ".$dados["salario"];
                    }
                }//fim do while

                mysqli_close($conn);
            }catch(Except $erro){
                echo $erro;
            }
        }//fim do Consultar

        public function ConsultarTudoFuncionario(Conexao $conexao, string $nomeDaTabela){
            //Consultar
            try{
                $conn = $conexao->Conectar();
                $sql = "select * from $nomeDaTabela";
                $result = mysqli_query($conn, $sql);
                
                while($dados = mysqli_fetch_Array($result)){
                    echo "<br><br>ID:  ".$dados["id"]."<br>Sexo: ".$dados["sexo"]."<br>Função: ".$dados["funcao"]."<br>Salário: ".$dados["salario"];
                }//fim do while

                mysqli_close($conn);
            }catch(Except $erro){
                echo $erro;
            }
        }//fim do Consultar
        public function ConsultarIndCompras(Conexao $conexao, string $nomeDaTabela, int $codigo){
            //Consultar
            try{
                $conn = $conexao->Conectar();
                $sql = "select * from $nomeDaTabela where codigo = '$id'";
                $result = mysqli_query($conn, $sql);
                
                while($dados = mysqli_fetch_Array($result)){
                    if($dados["id"] == $id){
                        echo "<br><br>ID:  ".$dados["id"]."<br>Data da Compra: ".$dados["dataCompra"]."<br>Informações: ".$dados["informacoes"]."<br>Valor Total: ".$dados["valorTotal"];
                    }
                }//fim do while

                mysqli_close($conn);
            }catch(Except $erro){
                echo $erro;
            }
        }//fim do Consultar

        public function ConsultarTudoCompras(Conexao $conexao, string $nomeDaTabela){
            //Consultar
            try{
                $conn = $conexao->Conectar();
                $sql = "select * from $nomeDaTabela";
                $result = mysqli_query($conn, $sql);
                
                while($dados = mysqli_fetch_Array($result)){
                    echo "<br><br>ID:  ".$dados["id"]."<br>Sexo: ".$dados["sexo"]."<br>Função: ".$dados["funcao"]."<br>Salário: ".$dados["salario"];
                }//fim do while

                mysqli_close($conn);
            }catch(Except $erro){
                echo $erro;
            }
        }//fim do Consultar
    }    
      

?>