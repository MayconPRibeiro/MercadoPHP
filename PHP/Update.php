<?php
    require_once('Conexao.php');
    class Atualizar{
        public function AtualizaProduto(Conexao $conectar, string $nomeDaTabela, int $codigo, string $campo, string $valor){
            //Atualizar
            try{
                $conn = $conectar->Conectar();
                $sql = "update $nomeDaTabela set $campo = '$valor' where codigo = $codigo";
                $result = mysqli_query($conn,$sql);

                if($result){
                    return "<br><br>Atualizado com Sucesso!";
                }else{
                    return "<br><br>Não Atualizado!";
                }

                mysqli_close($conn);
            }catch(Except $erro){
                echo $erro;
            }
        }//fim do Atualizar
        public function Atualiza(Conexao $conectar, string $nomeDaTabela, int $id, string $campo, string $valor){
            //Atualizar
            try{
                $conn = $conectar->Conectar();
                $sql = "update $nomeDaTabela set $campo = '$valor' where codigo = $id";
                $result = mysqli_query($conn,$sql);

                if($result){
                    return "<br><br>Atualizado com Sucesso!";
                }else{
                    return "<br><br>Não Atualizado!";
                }

                mysqli_close($conn);
            }catch(Except $erro){
                echo $erro;
            }
        }//fim do Atualizar
    }//fim da classe
?>