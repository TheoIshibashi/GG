<?php
    //Requisição de outro componente/arquivo
    require('conect.php');
    
    $tipo_insert = $_GET['tipo_insert'];
    
    //Verifica qual o time de Insert
    if ($tipo_insert == "jogos"){
        //Buscar os dados enviados pelo usuário -    Login.html
        $nome_stream = $_GET['nome_stream'];
        $plataforma_stream = $_GET['plataforma_stream'];

        //Query (pergunta - Select) para o Banco de Dados
        $sql_insert="INSERT INTO tb_stream
            (nome_stream, plataforma_stream)
            values ('$nome_stream','$plataforma_stream')";
    }    
    echo $sql_insert;
    mysqli_query($conecta,$sql_insert);
    require('disconect.php');
    
    //Verifica qual é o insert para redirecionar
    switch ($tipo_insert) {
        case "jogos" : header("Location: stream_exibe.php");
        break;
   }  
?>