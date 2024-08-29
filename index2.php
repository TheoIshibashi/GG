
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Login </title>
</head>
<body>
    <?php
            require('conect.php');

            $email = $_GET['email'];
            $senha = $_GET['senha'];
            session_start();
            $sql="select * FROM bd_tcc_2022 where email='$email' and senha='$senha' ";
            $result=mysqli_query($conecta,$sql);
            while($consulta=mysqli_fetch_array($result))
            {
                print 'Nome:$consulta[email]-RG:$consulta[rg]<br>';
                $_SESSION['email'] = $consulta['email'];
                $_SESSION['nome'] = $consulta['nome'];
                $_SESSION['perfil'] = $consulta['perfil'];
                header('Location: index.php');
            }
            require('disconect.php');
    
    ?>
    <div class="main-login">
        <div class="left-login">
            <h1>Faça login<br>E entre para o time GG </h1>
            <img src="imgdojogo.svg" class="left-login-image" alt="jogo">
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>LOGIN</h1>
                <div class="textfield">
                    <label for="usuario">Usuário</label>
                    <input type="text" name="usuario" placeholder="Usuário">
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Senha">
                </div>
                <div class="btn-senha">
                    <a href="#">Esqueci a senha</a>
                </div>
                <div>
                    
                </div>
                <div class="btn-senha">
                    <a href="cadastro.html">Cadastre-se agora</a>
                </div>
                <button class="btn-login" href="index.php">Login</button>
            </div>
        </div>
    </div>
</body>
</html>