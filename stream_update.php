<?php
    //Requisição de outro componente/arquivo
    require('conect.php');
    
    $edita_insert = $_GET['edita_insert'];
   
    //Verifica qual o time de Insert
    if ($edita_insert == "stream"){
        //Buscar os dados enviados pelo usuário -   Login.html
        $id_stream = $_GET['id_str'];
        $nome_stream = $_GET['nome_str'];
        $plataforma_stream = $_GET['plataforma_str'];

        //Query (pergunta - Select) para o Banco de Dados
        $sql_alterar="UPDATE tb_stream SET 
            nome_stream = '$nome_stream',
            plataforma_stream = '$plataforma_stream'
            WHERE id_stream = $id_stream";
    }    
    echo $sql_alterar;
    mysqli_query($conecta,$sql_alterar);
    require('disconect.php');
    
    //Verifica qual é o insert para redirecionar
    header("Location: stream_exibe.php");

?>