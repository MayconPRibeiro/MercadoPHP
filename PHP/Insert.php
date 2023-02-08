<?php
    require_once('Conexao.php');
    class Inserir{
//construtor lek
        public function cadastrar(
            Conexao $conexao,
            string $nomeDaTabela,
            string $nome,
            string $cpf,
            string $telefone)
    {   
        try
        {
            $conn = $conexao->conectar();//abre a conexao
            $sql  = "insert into $nomeDaTabela (id, nome, cpf, telefone) values ('','$nome','$cpf','$telefone')";//escreve o script
            $result = mysqli_query($conn,$sql);//executa a ação acima.
            if($result){
                return "<br><br>Foi inserido kekw!";
            }
            return "<br><br>Não faz!!!";

            msqli_close($conn);//fechano
        }
        catch(Exception $erro)
        {
            echo $erro;
        }//fim do try catch
    }//fim do cadastrar
    //fim da classe
    //cadastrar produtos
        public function cadastrarProdutos(
            Conexao $conexao,
            string $nomeDaTabela,
            string $nome,
            float $preco,
            int $quantidade)
    {
        try
        {
            $conn = $conexao->conectar();//abre a conexao
            $sql  = "insert into $nomeDaTabela (id, nome, preco, quantidade) values ('','$nome','$preco','$quantidade')";//escreve o script
            $result = mysqli_query($conn,$sql);//executa a ação acima.
            if($result){
                return "<br><br>Foi inserido kekw!";
            }
            return "<br><br>Não faz!!!";

            msqli_close($conn);//fechano
        }
        catch(Exception $erro)
        {
            echo $erro;
        }//fim do try catch
    }//fim do cadastrar

        public function cadastrarEndereco(
            Conexao $conexao,
            string $nomeDaTabela,
            string $logradouro,
            int $numero,
            string $complemento,
            string $bairro,
            string $cidade,
            string $estado,
            string $uf,
            string $pais,
            int $cep)
        {
            try
            {
                $conn = $conexao->conectar();//abre a conexao
                $sql  = "insert into $nomeDaTabela (id, logradouro, numero, complemento, bairro, cidade, estado, uf, pais, cep) 
                values ('','$logradouro', '$numero', '$complemento', '$bairro', '$cidade', '$estado', '$uf', '$pais', '$cep')";//escreve o script
                $result = mysqli_query($conn,$sql);//executa a ação acima.
                if($result){
                    return "<br><br>Foi inserido kekw!";
                }
                return "<br><br>Não faz!!!";

                msqli_close($conn);//fechano
            }
            catch(Exception $erro)
            {
                echo $erro;
            }//fim do try catch
        }//fim do cadastrar
        public function cadastrarFuncionario(
            Conexao $conexao,
            string $nomeDaTabela,
            string $sexo,
            string $funcao,
            float $salario)
        {
            try
            {
                $conn = $conexao->conectar();//abre a conexao
                $sql  = "insert into $nomeDaTabela (id, sexo, funcao, salario) values ('','$sexo','$funcao','$salario')";//escreve o script
                $result = mysqli_query($conn,$sql);//executa a ação acima.
                if($result){
                    return "<br><br>Foi inserido kekw!";
                }
                return "<br><br>Não faz!!!";
        
                msqli_close($conn);//fechano
            }
            catch(Exception $erro)
            {
                echo $erro;
            }//fim do try catch
        }//fim do cadastrar
        public function cadastrarComprar(
            Conexao $conexao,
            string $nomeDaTabela,
            date $dataCompra,
            string $informacoes,
            float $valorTotal)
        {
            try
            {
                $conn = $conexao->conectar();//abre a conexao
                $sql  = "insert into $nomeDaTabela (id, dataCompra, informacoes, valorTotal) values ('','$dataCompra','$informacoes','$valorTotal')";//escreve o script
                $result = mysqli_query($conn,$sql);//executa a ação acima.
                if($result){
                    return "<br><br>Foi inserido kekw!";
                }
                return "<br><br>Não faz!!!";
    
                msqli_close($conn);//fechano
            }
            catch(Exception $erro)
            {
                echo $erro;
            }//fim do try catch
        }//fim do cadastrar
    }//fim da classe inserir
   

?>