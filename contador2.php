<?php
    //Requisição de outro componente/arquivo
    require('conect.php');    

        

        //Query (pergunta - Select) para o Banco de Dados
        $sql_count="SELECT COUNT(*) AS qtd_jogos FROM tb_jogos";
        //$variável = Resultados;
        //echo $sql_count;
        $result_count2=mysqli_query($conecta,$sql_count);
        while($consulta_count2=mysqli_fetch_array($result_count2))
        {
            echo $consulta_count2['qtd_jogos'];
            $_SESSION['qtd_jogos'] = $consulta_count2['qtd_jogos'];
        }
        require('disconect.php');

?>