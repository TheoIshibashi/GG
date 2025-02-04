
<!DOCTYPE html>
<html lang='en'>

<head>

    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta name='description' content=''>
    <meta name='author' content=''>

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href='vendor/fontawesome-free/css/all.min.css' rel='stylesheet' type='text/css'>
    <link
        href='https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i'
        rel='stylesheet'>

    <!-- Custom styles for this template-->
    <link href='css/sb-admin-3.css' rel='stylesheet'>

<script>
if()
function funcao1()
{
alert("Cadastro Efetuado");
}
</script>

</head>

<body id='page-top'>

    <!-- Page Wrapper -->
    <div id='wrapper'>

        <!-- Sidebar -->
        <ul class='navbar-nav bg-gradient-primary sidebar sidebar-dark accordion' id='accordionSidebar'>

            <!-- Sidebar - Brand -->
            <a class='sidebar-brand d-flex align-items-center justify-content-center' href='index.php'>
                
                <div class='sidebar-brand-text mx-3'>Portal Admin GG</div>
            </a>

            <!-- Divider -->
            <hr class='sidebar-divider my-0'>

            

            <!-- Divider -->
            <hr class='sidebar-divider'>

            <?php
            require('menu.php');
            ?>
            <!-- Nav Item - Utilities Collapse Menu -->
        

            <!-- Divider -->
            <hr class='sidebar-divider'>

            <!-- Heading -->
         

            <!-- Nav Item - Pages Collapse Menu -->
           

            <!-- Nav Item - Charts -->
           
            <!-- Divider -->
           

            <!-- Sidebar Toggler (Sidebar) -->
            <div class='text-center d-none d-md-inline'>
                <button class='rounded-circle border-0' id='sidebarToggle'></button>
            </div>

            <!-- Sidebar Message -->

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id='content-wrapper' class='d-flex flex-column'>

            <!-- Main Content -->
            <div id='content'>

                <!-- Topbar -->
                <nav class='navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow'>

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id='sidebarToggleTop' class='btn btn-link d-md-none rounded-circle mr-3'>
                        <i class='fa fa-bars'></i>
                    </button>

                    <!-- Topbar Search -->
                 

                    <!-- Topbar Navbar -->
                    <ul class='navbar-nav ml-auto'>

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class='nav-item dropdown no-arrow d-sm-none'>
                            <a class='nav-link dropdown-toggle' href='#' id='searchDropdown' role='button'
                                data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                <i class='fas fa-search fa-fw'></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class='dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in'
                                aria-labelledby='searchDropdown'>
                                <form class='form-inline mr-auto w-100 navbar-search'>
                                    <div class='input-group'>
                                        <input type='text' class='form-control bg-light border-0 small'
                                            placeholder='Search for...' aria-label='Search'
                                            aria-describedby='basic-addon2'>
                                        <div class='input-group-append'>
                                            <button class='btn btn-primary' type='button'>
                                                <i class='fas fa-search fa-sm'></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                       
                            <!-- Dropdown - Alerts -->
                           
                        <!-- Nav Item - Messages -->
                       
                        <!-- Nav Item - User Information -->
                        <li class='nav-item dropdown no-arrow'>
                            <a class='nav-link dropdown-toggle' href='#' id='userDropdown' role='button'
                                data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                <span class='mr-2 d-none d-lg-inline text-gray-600 small'>

                                <?php
                                    
                                    echo $_SESSION['email'];
                                    echo ' \ ';
                                    echo $_SESSION['perfil'];
                                ?>



                                </span>
                                <img class='img-profile rounded-circle'
                                    src='img/undraw_profile.svg'>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class='dropdown-menu dropdown-menu-right shadow animated--grow-in'
                                aria-labelledby='userDropdown'>
                                <a class='dropdown-item' href='#'>
                                    <i class='fas fa-user fa-sm fa-fw mr-2 text-gray-400'></i>
                                    Profile
                                </a>
                                <a class='dropdown-item' href='#'>
                                    <i class='fas fa-cogs fa-sm fa-fw mr-2 text-gray-400'></i>
                                    Settings
                                </a>
                                <a class='dropdown-item' href='#'>
                                    <i class='fas fa-list fa-sm fa-fw mr-2 text-gray-400'></i>
                                    Activity Log
                                </a>
                                <div class='dropdown-divider'></div>
                                <a class='dropdown-item' href='logout.php'>
                                    <i class='fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400'></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class='container-fluid'>

                    <!-- Page Heading -->
                    <div class='d-sm-flex align-items-center justify-content-between mb-4'>
                        <h1 class='h3 mb-0 text-gray-800'>Cadastro de Usuários</h1>
                       
                    </div>

                    <!-- Content Row -->
                    <div class='row'>

                        <!-- Earnings (Monthly) Card Example -->
            
                        <div class='col-xl-12 col-md-6 mb-4'>
                            <div class='card border-left-primary shadow h-100 py-2'>
                                <div class='card-body'>
                                    <div class='row no-gutters align-items-center'>
                                        <div class='col mr-2'>
                                            <form action="insere_cadastro.php" method="get">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email</label>
                                                    <input type="email" class="form-control" placeholder="Digite o E-mail" name="email" id="email" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Nome</label>
                                                    <input type="text" class="form-control" placeholder="Digite nome" name="nome" id="nome" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Perfil</label>
                                                    <select class="form-control" name="perfil" id="perfil" required>
                                                        <option value="" selected>---</option> 
                                                        <option value="admin">Admin</option>
                                                        <option value="usuario">Usuário</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Senha</label>
                                                    <input type="password" class="form-control" placeholder="Digite senha" name="senha" id="senha" required>
                                                </div>
                                                <input type="hidden" value="usuarios" name="tipo_insert" id="tipo_insert">
                                                <button type="submit" onclick="funcao1()" href="exibe_usuario.php">Enviar</button>
                                     
                                            </form>
                                        </div>
                                        <div class='col-auto'>
                                            <i class='fas fa-user fa-2x text-gray-300'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class='row'>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class='sticky-footer bg-white'>
                <div class='container my-auto'>
                    <div class='copyright text-center my-auto'>
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class='scroll-to-top rounded' href='#page-top'>
        <i class='fas fa-angle-up'></i>
    </a>

    <!-- Logout Modal-->
    <div class='modal fade' id='logoutModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel'
        aria-hidden='true'>
        <div class='modal-dialog' role='document'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLabel'>Ready to Leave?</h5>
                    <button class='close' type='button' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>×</span>
                    </button>
                </div>
                <div class='modal-body'>Select 'Logout' below if you are ready to end your current session.</div>
                <div class='modal-footer'>
                    <button class='btn btn-secondary' type='button' data-dismiss='modal'>Cancel</button>
                    <a class='btn btn-primary' href='login.html'>Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src='vendor/jquery/jquery.min.js'></script>
    <script src='vendor/bootstrap/js/bootstrap.bundle.min.js'></script>

    <!-- Core plugin JavaScript-->
    <script src='vendor/jquery-easing/jquery.easing.min.js'></script>

    <!-- Custom scripts for all pages-->
    <script src='js/sb-admin-2.min.js'></script>

    <!-- Page level plugins -->
    <script src='vendor/chart.js/Chart.min.js'></script>

    <!-- Page level custom scripts -->
    <script src='js/demo/chart-area-demo.js'></script>
    <script src='js/demo/chart-pie-demo.js'></script>

</body>

</html>