<?php
    require('conect.php');

        
    $sql_all="SELECT id_stream, nome_stream, plataforma_stream FROM `tb_stream`";
    
    $result=mysqli_query($conecta,$sql_all);
        while($consulta_count=mysqli_fetch_array($result))
        {
            echo "<tr>";
            if($_SESSION ['perfil'] == 'admin'){
                echo "<td> <a href=stream_deleta.php?id=".$consulta_count['id_stream']."><i class='fas fa-trash fa-fw'></i></a>";
                echo "<a href=stream_editar.php?id=".$consulta_count['id_stream']."><i class='fas fa-edit fa-fw'></i></a></td>";
            }
            echo "<td>".$consulta_count['id_stream']."</td>";
            echo "<td>".$consulta_count['nome_stream']."</td>";
            echo "<td>".$consulta_count['plataforma_stream']."</td>";
            echo "</tr>";
        }
        require('disconect.php');    

?>