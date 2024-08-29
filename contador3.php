<?php
    //Requisição de outro componente/arquivo
    require('conect.php');    

        

        //Query (pergunta - Select) para o Banco de Dados
        $sql_count="SELECT COUNT(*) AS qtd_stream FROM tb_stream";
        //$variável = Resultados;
        //echo $sql_count;
        $result_count3=mysqli_query($conecta,$sql_count);
        while($consulta_count3=mysqli_fetch_array($result_count3))
        {
            echo $consulta_count3['qtd_stream'];
            $_SESSION['qtd_stream'] = $consulta_count3['qtd_stream'];
        }
        require('disconect.php');

?>