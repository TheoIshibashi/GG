<?php
    require('conect.php');

    $id = $_GET['id'];

    $sql_del="DELETE FROM `tb_contato` WHERE id_contato = $id";

    mysqli_query($conecta,$sql_del);
    header('Location: contato_mensagem.php');

    require('disconect.php');
?>