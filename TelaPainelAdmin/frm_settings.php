<?php
include "../TelaLogin/protect.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>System Beauty</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../global-assets/favicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Libraries Stylesheet -->
    <link href="../global-assets/css-tela-admin/painellib/owlcarousel/owl.carousel.min.js" rel="stylesheet">
    <link href="../global-assets/css-tela-admin/painellib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../global-assets/css-tela-admin/painelcss/painelbootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../global-assets/css-tela-admin/painelcss/painelstyle.css" rel="stylesheet">

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            setTimeout(() => {
                document.getElementById("content-start").style.display = "";
                document.getElementById("container-spinner").style.display = "none";
            }, 1500)
        })
    </script>

</head>

<body>

    <!-- Spinner Start -->
    <div id="container-spinner" class="container-spinner"><span class="loader"></span></div>
    <!-- Spinner End -->

    <div id="content-start" style="display: none;" >
        <div class="container-fluid position-relative d-flex p-0">

            <!-- Sidebar Start -->
            <div class="sidebar pb-3">
                <nav class="navbar navbar-dark">
                    <a href="index.php" class="navbar-brand mx-4 mb-3">
                        <h3 class="text-primary"><img src="../global-assets/Logo Inteira BD Horizontal.png" class="fa fa-user-edit" width="180px"></h3>
                    </a>
                    <div class="d-flex align-items-center ms-4 mb-4">
                        <div class="position-relative">
                            <img class="rounded-circle" src="https://www.kindpng.com/picc/m/226-2261322_pink-human-icon-hd-png-download.png" alt="" style="width: 40px; height: 40px;">
                            <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                            </div>
                        </div>
                        <div class="ms-3">
                            <h6 class="mb-0"><?php echo $_SESSION['nome']; ?></h6>
                            <?php
                            if ($_SESSION['admin'] == '1') {
                                echo "<span>Admin</span>";
                            }
                            ?>
                        </div>
                    </div>
                    <div class="navbar-nav w-100">
                        <a href="../TelaPainelAdmin/index.php" class="nav-item nav-link"><i class="fa-solid fa-house me-2"></i>Painel</a>
                        <a href="../TelaCadastroAgenda/frm_cad_ag_painel.php" class="nav-item nav-link"><i class="fa-solid fa-address-book me-2"></i>Agendamentos</a>
                        <a href="../TelaCadastroCliente/frm_cad_cli_painel.php" class="nav-item nav-link"><i class="fa-solid fa-user me-2"></i>Clientes</a>
                        <a href="../TelaCadastroServicos/frm_cad_serv_painel.php" class="nav-item nav-link"><i class="fa-solid fa-briefcase me-2"></i></i>Serviços</a>
                        <a href="../TelaCadastroFuncionario/frm_cad_func_painel.php" class="nav-item nav-link" <?php if ($_SESSION['admin'] != '1') {
                                                                                                                    echo "hidden";
                                                                                                                } ?>><i class="fa-solid fa-address-card me-2"></i>Funcionários</a>
                        <a href="../TelaCalendario/frm_cad_cal_painel.php" class="nav-item nav-link"><i class="fa-solid fa-calendar-days me-2"></i>Calendário</a>
                    </div>
            </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><img src="../global-assets/icone-formulario.png" class="fa fa-user-edit" width="40px"></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>

                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="https://www.kindpng.com/picc/m/226-2261322_pink-human-icon-hd-png-download.png" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex mostrarTodos"><?php echo $_SESSION['nome']; ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <!--a href="#" class="dropdown-item">My Profile</a-->
                            <a href="../TelaPainelAdmin/frm_settings.php" class="dropdown-item">Configurações</a>
                            <a href="/tcc/TelaLogin/logout.php" class="dropdown-item">Sair</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->



            <!-- Recent Sales Start -->
            <div id="" class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded p-5">
                    <h3>Configurar conta</h3>
                    <form action="altera_funcionario.php" method="post">


                        <div class="form-row" style="margin-bottom: 1rem;">
                            <?php

                            include "conexao_beauty.php";
                            $id = $_SESSION['id'];
                            $comandoSql = "select * from funcionario where id_funcionario='$id'";
                            $resultado = mysqli_query($con, $comandoSql);
                            $dados = mysqli_fetch_assoc($resultado);

                            $id_func = $dados["id_funcionario"];
                            $nome_func = $dados["nome_funcionario"];
                            $cpf_func = $dados["cpf_funcionario"];
                            $fone_func = $dados["fone_funcionario"];
                            $senha_func = $dados["senha"];
                            ?>

                            <input type="text" name="id" id="id" class="form-control" value="<?php echo $_SESSION['id'] ?>" hidden>

                            <div class="form-group col-md-6">
                                <label for="nome" class="label-settings">Nome</label>
                                <input type="text" name="nome" id="nome" class="form-control" value="<?php echo $_SESSION['nome'] ?>">
                            </div>

                            <div class="form-group col-md-6 ">
                                <label for="cpf" class="label-settings">CPF</label>
                                <input type="text" class="form-control" name="cpf" id="cpf" value="<?php echo $cpf_func ?>">
                            </div>

                            <div class="form-group col-md-6 ">
                                <label for="fone" class="label-settings">Telefone</label>
                                <input type="text" class="form-control" name="fone" id="fone" value="<?php echo $fone_func ?>">
                            </div>

                            <div class="form-group col-md-6 ">
                                <label for="senha" class="label-settings">Senha</label>
                                <input type="text" class="form-control" name="senha" id="senha" value="<?php echo $senha_func ?>">
                            </div>

                            <div class="form-group col-md-6 ">
                                <label for="senhaconf" class="label-settings">Confirmar Senha</label>
                                <input type="text" class="form-control" name="senhaconf" id="senhaconf">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" style="margin-right: 0.5rem;">Salvar</button>
                        <a href="../TelaPainelAdmin/index.php"><button type="button" class="btn btn-secondary">Cancelar</button></a>
                    </form>

                </div>
            </div>
            <!-- Recent Sales End -->



            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a style="font-weight: 500;">System Beauty Design</a>, Todos os direitos reservados.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            Ir para <a href="../TelaInstitucional/index.html" style="font-weight: 500;">Site Institucional</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../global-assets/css-tela-admin/painellib/chart/chart.min.js"></script>
    <script src="../global-assets/css-tela-admin/painellib/easing/easing.min.js"></script>
    <script src="../global-assets/css-tela-admin/painellib/waypoints/waypoints.min.js"></script>
    <script src="../global-assets/css-tela-admin/painellib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../global-assets/css-tela-admin/painellib/tempusdominus/js/moment.min.js"></script>
    <script src="../global-assets/css-tela-admin/painellib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../global-assets/css-tela-admin/painellib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="../global-assets/js-tela-admin/paineljs/painelmain.js"></script>
    <script src="../global-assets/js-tela-admin/tablejs/jquery-latest.js"></script>
    <script src="../global-assets/js-tela-admin/tablejs/jquery.tablesorter.min.js"></script>
    <script src="../global-assets/js-tela-admin/tablejs/tablescripts.js"></script>


</body>

</html>