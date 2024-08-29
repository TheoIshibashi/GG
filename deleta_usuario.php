 <?php session_start();
    require('conect.php');

    $id = $_GET['id'];

    if($_SESSION['email'] != $email)
        $sql_del="DELETE FROM `tb_usuario` WHERE id = $id";
        mysqli_query($conecta,$sql_del);
        header('Location: exibe_usuario.php');   
    require('disconect.php');
?>









