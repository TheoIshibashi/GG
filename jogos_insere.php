<?php
    //Requisição de outro componente/arquivo
    require('conect.php');
    
    $tipo_insert = $_GET['tipo_insert'];
    
    //Verifica qual o time de Insert
    if ($tipo_insert == "jogos"){
        //Buscar os dados enviados pelo usuário -    Login.html
        $nome_jogo = $_GET['nome_jogo'];
        $ano_jogo = $_GET['ano_jogo'];
        $genero_jogo = $_GET['genero_jogo'];

        //Query (pergunta - Select) para o Banco de Dados
        $sql_insert="INSERT INTO tb_jogos 
            (nome_jogo, ano_jogo, genero_jogo)
            values ('$nome_jogo','$ano_jogo','$genero_jogo')";
    }    
    echo $sql_insert;
    mysqli_query($conecta,$sql_insert);
    require('disconect.php');
    
    //Verifica qual é o insert para redirecionar
    switch ($tipo_insert) {
        case "jogos" : header("Location: jogos_exibe.php");
        break;
   }  
?>