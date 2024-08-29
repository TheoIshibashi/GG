<?php
    //Requisição de outro componente/arquivo
    require('conect.php');
    
    $edita_insert = $_GET['edita_insert'];
   
    //Verifica qual o time de Insert
    if ($edita_insert == "usuarios"){
        //Buscar os dados enviados pelo usuário -   Login.html
        $id = $_GET['id'];
        $nome = $_GET['nome']; 
        $senha = $_GET['senha'];
        $email = $_GET['email'];
        $perfil = $_GET['perfil'];

        //Query (pergunta - Select) para o Banco de Dados
        $sql_alterar="UPDATE tb_usuario SET 
            nome = '$nome', 
            senha = '$senha', 
            email = '$email', 
            perfil = '$perfil'
            WHERE id = $id";
    }    
    echo $sql_alterar;
    mysqli_query($conecta,$sql_alterar);
    require('disconect.php');
    
    //Verifica qual é o insert para redirecionar

    header("Location: exibe_usuario.php");

?>