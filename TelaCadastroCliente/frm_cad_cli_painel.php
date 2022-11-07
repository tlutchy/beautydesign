<!--?php
    include "protect.php";
?-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../global-assets/favicon.png" rel="icon">
    <link href="../global-assets/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../global-assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../global-assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../global-assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../global-assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../global-assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../global-assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Template Main CSS File -->
    <link href="../TelaCadastroCliente/assets/css/style.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../TelaPainelAdmin/painellib/owlcarousel/owl.carousel.min.js" rel="stylesheet">
    <link href="../TelaPainelAdmin/painellib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../TelaPainelAdmin/painelcss/painelbootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../TelaPainelAdmin/painelcss/painelstyle.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="../TelaPainelAdmin/index.php" class="navbar-brand mx-4 mb-3">
                    <img src="../global-assets/Logo Inteira BD Horizontal.png" class="fa fa-user-edit" width="150px">
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div
                            class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="../TelaPainelAdmin/index.php" class="nav-item nav-link active"><i
                            class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Agendamentos</a>
                    <a href="frm_cad_cli_painel.php" class="nav-item nav-link"><i
                            class="fa fa-keyboard me-2"></i>Clientes</a>
                    <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Serviços</a>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Calendário</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item">Blank Page</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="../TelaPainelAdmin/index.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><img src="../global-assets/icone-formulario.png"
                            class="fa fa-user-edit" width="40px"></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                
                <div class="navbar-nav align-items-center ms-auto">
                    <!--div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div-->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt=""
                                style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">John Doe</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="/tcc/TelaLogin/logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today Sale</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Sale</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today Revenue</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Revenue</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->

            <!-- Recent Sales Start -->
            <!--div class="container-fluid pt-4 px-4">
                <div class="col-md-6 col-lg-5">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Cadastro de Cliente</h6>
                        <a href="">Mostrar Tudo</a>
                    </div>
                    <div class="login-wrap p-4 p-md-5">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <img src="../global-assets/icone-formulario.png">
                        </div>
                        <h3 class="text-center mb-4">CADASTRAR CLIENTE</h3>
                        <form action="cadastra_cliente_beauty.php" class="form align-middle mb-0" id="form"
                            method="post">
                            <div class="form-group" id="form-nome">
                                <input type="text" name="nome" id="nome" class="form-control rounded-left"
                                    placeholder="Nome">
                                <i class="fas fa-exclamation-circle"></i>
                                <i class="fas fa-check-circle"></i>
                                <small>Mensagem de erro</small>
                            </div>
                            <div class="form-group" id="form-cpf">
                                <input type="text" name="cpf" id="cpf" class="form-control rounded-left"
                                    placeholder="CPF">
                                <i class="fas fa-exclamation-circle"></i>
                                <i class="fas fa-check-circle"></i>
                                <small>Mensagem de erro</small>
                            </div>
                            <div class="form-group" id="form-fone">
                                <input type="text" name="fone" id="fone" class="form-control rounded-left"
                                    placeholder="Telefone">
                                <i class="fas fa-exclamation-circle"></i>
                                <i class="fas fa-check-circle"></i>
                                <small>Mensagem de erro</small>
                            </div>
                            <div class="form-group" id="form-obs">
                                <input type="text" name="obs" id="obs" class="form-control rounded-left"
                                    placeholder="Observação">
                                <i class="fas fa-exclamation-circle"></i>
                                <i class="fas fa-check-circle"></i>
                                <small>Mensagem de erro</small>
                            </div>

                            <div class="botaosubmit">
                                <input type="submit" class="btn btn-primary rounded submit p-3 px-5" value="CADASTRAR">
                            </div>

                        </form>
                    </div>
                </div>
            </div-->
            <!-- Recent Sales End -->


            <!-- Sales Chart Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="d-flex align-items-center justify-content-between mb-4 ">
                            <h6 class="mb-0">Cadastro de Cliente</h6>
                            <a href="">Mostrar Tudo</a>
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <img src="../global-assets/icone-formulario.png">
                            </div>
                            <!--h3 class="text-center mb-4">CADASTRAR CLIENTE</h3-->
                            <form action="cadastra_cliente_beauty.php" class="form align-middle mb-0" id="form"
                                method="post">
                                <div class="form-group" id="form-nome">
                                    <input type="text" name="nome" id="nome" class="form-control rounded-left"
                                        placeholder="Nome">
                                    <i class="fas fa-exclamation-circle"></i>
                                    <i class="fas fa-check-circle"></i>
                                    <small>Mensagem de erro</small>
                                </div>
                                <div class="form-group" id="form-cpf">
                                    <input type="text" name="cpf" id="cpf" class="form-control rounded-left"
                                        placeholder="CPF">
                                    <i class="fas fa-exclamation-circle"></i>
                                    <i class="fas fa-check-circle"></i>
                                    <small>Mensagem de erro</small>
                                </div>
                                <div class="form-group" id="form-fone">
                                    <input type="text" name="fone" id="fone" class="form-control rounded-left"
                                        placeholder="Telefone">
                                    <i class="fas fa-exclamation-circle"></i>
                                    <i class="fas fa-check-circle"></i>
                                    <small>Mensagem de erro</small>
                                </div>
                                <div class="form-group" id="form-obs">
                                    <input type="text" name="obs" id="obs" class="form-control rounded-left"
                                        placeholder="Observação">
                                    <i class="fas fa-exclamation-circle"></i>
                                    <i class="fas fa-check-circle"></i>
                                    <small>Mensagem de erro</small>
                                </div>
    
                                <div class="botaosubmit">
                                    <input type="submit" class="btn btn-primary rounded submit p-3 px-5" value="CADASTRAR">
                                </div>
    
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Lista de Clientes</h6>
                                <a href="">Mostrar Tudo</a>
                            </div>
                            <canvas id="salse-revenue"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sales Chart End -->





            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Calender</h6>
                                <a href="">Show All</a>
                            </div>
                            <div id="calender"></div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- Widgets End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                            <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../TelaPainelAdmin/painellib/chart/chart.min.js"></script>
    <script src="../TelaPainelAdmin/painellib/easing/easing.min.js"></script>
    <script src="../TelaPainelAdmin/painellib/waypoints/waypoints.min.js"></script>
    <script src="../TelaPainelAdmin/painellib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../TelaPainelAdmin/painellib/tempusdominus/js/moment.min.js"></script>
    <script src="../TelaPainelAdmin/painellib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../TelaPainelAdmin/painellib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="../TelaPainelAdmin/paineljs/painelmain.js"></script>

    <!-- Vendor JS Files -->
    <script src="../TelaCadastroCliente/assets/js/scripts.js"></script>
    

    <!-- Template Main JS File -->
    <script src="https://kit.fontawesome.com/f9e19193d6.js" crossorigin="anonymous"></script>
</body>

</html>