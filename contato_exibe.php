<?php
    require('conect.php');

        
    $sql_all="SELECT id_contato, nome_contato, email_contato, celular_contato, mensagem_contato FROM `tb_contato`";
    
        $result=mysqli_query($conecta,$sql_all);
        while($consulta_count=mysqli_fetch_array($result))
        {
            echo "<tr>";
            if($_SESSION ['perfil'] == 'admin'){
            echo "<td> <a href=contato_deleta.php?id=".$consulta_count['id_contato']."><i class='fas fa-trash fa-fw'></i></a>";
                      
            }
            echo "<td>".$consulta_count['email_contato']."</td>";
            echo "<td>".$consulta_count['nome_contato']."</td>";
            echo "<td>".$consulta_count['celular_contato']."</td>";
            echo "<td>".$consulta_count['mensagem_contato']."</td>";
            echo "</tr>";
        }
        require('disconect.php');    

?>