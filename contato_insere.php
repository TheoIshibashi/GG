<?php
    //Requisição de outro componente/arquivo
    require('conect.php');
    
    $tipo_insert = $_GET['tipo_insert'];
    //Verifica qual o time de Insert

    if ($tipo_insert == "contato"){
        //Buscar os dados enviados pelo usuário -  Login.html
        $nome_contato = $_GET['nome_contato'];
        $email_contato = $_GET['email_contato'];
        $celular_contato = $_GET['celular_contato'];
        $mensagem_contato = $_GET['mensagem_contato'];

        //Query (pergunta - Select) para o Banco de Dados
        $sql_insert="INSERT INTO tb_contato
            (nome_contato, email_contato, celular_contato, mensagem_contato)
            values ('$nome_contato','$email_contato','$celular_contato','$mensagem_contato')";
    }
    echo $sql_insert;
    mysqli_query($conecta,$sql_insert);
    require('disconect.php');

    switch ($tipo_insert) {
        case "contato" : header("Location: site.php");
        break;
   }  
?>
    
?>