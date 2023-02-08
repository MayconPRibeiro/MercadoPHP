<?php

    //namespace PHP;
   

    require_once("Cliente.php");
    require_once("ClienteSemCadastro.php");
    require_once("Compra.php");
    require_once("Endereco.php");
    require_once("Funcionario.php");
    require_once("Pessoa.php");
    require_once("Estoque.php");

    //use PHP\Pessoa;

    

    $enderec = new Endereco("Av. Senador", "400", "Senac SBC", "Centro", "São Bernardo do Campo", "São Paulo", "SP", "Brasil", "09750-000");

    $estoque = new Estoque(1 , "potato", "15", 12.99);

    $func = new Funcionario("Ricardo Sobral", "123", "1199999999", $enderec, "1", "Máquina", "Analista", 1800);

    $clieNoCad = new ClienteSemCadastro("Allan", "6464865156115", "1198484655", $enderec);

    $clie = new Cliente("João", "1646651651", "11-9594468464", $enderec);

    //echo $estoque;
   
    //echo $func;

    //echo $clieNoCad;

    //echo $clie;

    

    $compraCliente = new Compra($clie, "15/05/1999", $estoque, 500);
    echo $compraCliente;






?>