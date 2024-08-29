<?php
    require('conect.php');

        
    $sql_all="SELECT id_jogo, nome_jogo, ano_jogo, genero_jogo FROM `tb_jogos`";
    
    $result=mysqli_query($conecta,$sql_all);
        while($consulta_count=mysqli_fetch_array($result))
        {
            echo "<tr>";
            if($_SESSION ['perfil'] == 'admin'){
                echo "<td><a href=jogos_deleta.php?id=".$consulta_count['id_jogo']."><i class='fas fa-trash fa-fw'></i></a>";
                echo "<a href=jogos_editar.php?id=".$consulta_count['id_jogo']."><i class='fas fa-edit fa-fw'></i></a></td>";
            }
            echo "<td>".$consulta_count['id_jogo']."</td>";
            echo "<td>".$consulta_count['nome_jogo']."</td>";
            echo "<td>".$consulta_count['ano_jogo']."</td>";
            echo "<td>".$consulta_count['genero_jogo']."</td>";
            echo "</tr>";
        }
        require('disconect.php');    

?>