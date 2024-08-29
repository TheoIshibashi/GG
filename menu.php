<?php

    if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

    $perfil = $_SESSION['perfil'];
    
    if ($perfil == 'admin'){
        echo "<div class='sidebar-heading'>
        CADASTROS ADMIN
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class='nav-item'>
        <a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#collapseTwo'
            aria-expanded='true' aria-controls='collapseTwo'>
            <i class='fas fa-fw fa-cog'></i>
            <span>Cadastros</span>
        </a>
        <div id='collapseTwo' class='collapse' aria-labelledby='headingTwo' data-parent='#accordionSidebar'>
            <div class='bg-white py-2 collapse-inner rounded'>
                <h6 class='collapse-header'>Usuários:</h6>
                <a class='collapse-item' href='cadastro_usuario.php'>Cadastro de Usuários</a>
                <a class='collapse-item' href='exibe_usuario.php'>Exibição de Usuários</a>
            </div>

            <div class='bg-white py-2 collapse-inner rounded'>
                <h6 class='collapse-header'>Jogos:</h6>
                <a class='collapse-item' href='jogos_cadastro.php'>Cadastro de Jogos</a>
                <a class='collapse-item' href='jogos_exibe.php'>Exibição de Jogos</a>
            </div>

            <div class='bg-white py-2 collapse-inner rounded'>
                <h6 class='collapse-header'>Stream:</h6>
                <a class='collapse-item' href='stream_cadastro.php'>Cadastro de Stream</a>
                <a class='collapse-item' href='stream_exibe.php'>Exibição de Stream</a>
            </div>
            <div class='bg-white py-2 collapse-inner rounded'>
                <h6 class='collapse-header'>Mensagens</h6>
                <a class='collapse-item' href='contato_mensagem.php'>Mensagens</a>
            </div>
            
        </div>
    </li>";
    }

?>    
