<?php
    //Requisição de outro componente/arquivo
    require('conect.php');
    
    $edita_insert = $_GET['edita_insert'];
   
    //Verifica qual o time de Insert
    if ($edita_insert == "jogos"){
        //Buscar os dados enviados pelo usuário -   Login.html
        $id_jogo = $_GET['id_jogo'];
        $nome_jogo = $_GET['nome_jogo']; 
        $ano_jogo = $_GET['ano_jogo'];
        $genero_jogo = $_GET['genero_jogo'];

        //Query (pergunta - Select) para o Banco de Dados
        $sql_alterar="UPDATE tb_jogos SET 
            nome_jogo = '$nome_jogo', 
            ano_jogo = '$ano_jogo', 
            genero_jogo = '$genero_jogo'
            WHERE id_jogo = $id_jogo";
    }    
    echo $sql_alterar;
    mysqli_query($conecta,$sql_alterar);
    require('disconect.php');
    
    //Verifica qual é o insert para redirecionar
   header("Location: jogos_exibe.php");
      
  
?>