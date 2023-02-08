<?php
require_once('Conexao.php');


class Excluir{
    public function DeletarProduto(Conexao $conexao, string $nomeDaTabela, int $codigo){
        //Excluir
        try{
            $conn = $conexao->Conectar();
            $sql = "delete from $nomeDaTabela where codigo = $codigo";
            $result = mysqli_query($conn,$sql);

            if($result){
                return "<br><br>Excluido com sucesso!";
            }else{
                return "<br><br>Não consultado!";
            }

            mysqli_close($conn);
        }catch(Except $erro){
            echo $erro;
        }
    }//fim do Excluir
    public function Deletar(Conexao $conexao, string $nomeDaTabela, int $id){
        //Excluir
        try{
            $conn = $conexao->Conectar();
            $sql = "delete from $nomeDaTabela where codigo = $id";
            $result = mysqli_query($conn,$sql);

            if($result){
                return "<br><br>Excluido com sucesso!";
            }else{
                return "<br><br>Não consultado!";
            }

            mysqli_close($conn);
        }catch(Except $erro){
            echo $erro;
        }
    }//fim do Excluir
}    
?>