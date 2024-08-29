<?php
    require('conect.php');

    $id = $_GET['id'];

    $sql_del="DELETE FROM `tb_stream` WHERE id_stream = $id";

    mysqli_query($conecta,$sql_del);
    header('Location: stream_exibe.php');

    require('disconect.php');
?>