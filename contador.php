<?php
    //Requisição de outro componente/arquivo
    require('conect.php');    

        

        //Query (pergunta - Select) para o Banco de Dados
        $sql_count="SELECT COUNT(*) AS qtd_usuarios FROM tb_usuario WHERE 1";
        //$variável = Resultados;
        //echo $sql_count;
        $result_count=mysqli_query($conecta,$sql_count);
        while($consulta_count=mysqli_fetch_array($result_count))
        {
            echo $consulta_count['qtd_usuarios'];
            $_SESSION['qtd_usuarios'] = $consulta_count['qtd_usuarios'];
        }
        require('disconect.php');

?>