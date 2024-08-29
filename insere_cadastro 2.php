

<?php
    //Requisição de outro componente/arquivo
    require('conect.php');
    
    $tipo_insert = $_GET['tipo_insert'];
    //Verifica qual o time de Insert

    if(!$existe){
        $cmd = "INSERT INTO `users`(`id`, `nome`, `email`,`senha`) VALUES(NULL, '$nome', '$email', '$senha')";
        $result = mysql_query($cmd);
        if(!$result){
            echo "<script>alert('Já exite um usuário registrado com os mesmo dados!');</script>";
        }

        else{
            echo "<script>alert('Usuario registrado!');</script>";
        }
    }

    else if($existe){
        echo "<script>alert('Já exite um usuário registrado com os mesmo dados!');</script>";
    }



   function ExisteUsuario($nome, $email){

    $cmd = "SELECT * FROM `tb_usuario` WHERE `nome`='$nome' AND `email`='$email'";
    $result = mysql_query($cmd);
    $rows = mysql_num_rows($result);

    if(1 == $rows){
        return true;
    }

    else{
        return false;
    }
}
?>