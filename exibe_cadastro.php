<?php
    require('conect.php');

        
    $sql_all="SELECT id, nome, perfil, email FROM `tb_usuario`";
    
    $result=mysqli_query($conecta,$sql_all);
        while($consulta_count=mysqli_fetch_array($result))
        {
            echo "<tr>";
            if($_SESSION ['perfil'] == 'admin'){
                if($_SESSION ['email'] != $consulta_count['email']){
                    echo "<td> <a href=deleta_usuario.php?id=".$consulta_count['id']."><i class='fas fa-trash fa-fw'></i></a>";
                    echo "<a href=editar_usuario.php?id=".$consulta_count['id']."><i class='fas fa-edit fa-fw'></i></a></td>";
                }
                
            }
            echo "<td>".$consulta_count['id']."</td>";
            echo "<td>".$consulta_count['nome']."</td>";
            echo "<td>".$consulta_count['perfil']."</td>";
            echo "<td>".$consulta_count['email']."</td>";
            echo "</tr>";
        }
        require('disconect.php');    

?>