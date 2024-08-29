<?php
    require('conect.php');

    $id = $_GET['id'];

    $sql_del="DELETE FROM `tb_jogos` WHERE id_jogo = $id";

    mysqli_query($conecta,$sql_del);
    header('Location: jogos_exibe.php');

    require('disconect.php');
?>