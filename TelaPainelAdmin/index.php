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

</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <!-- <span class="loader"></span> -->
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pb-3">
            <nav class="navbar navbar-dark">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><img src="../global-assets/Logo Inteira BD Horizontal.png" class="fa fa-user-edit" width="180px"></h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $_SESSION['nome']; ?></h6>
                        <?php 
                        if ($_SESSION['admin'] == '1'){
                        echo "<span>Admin</span>";
                        }
                        ?>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="../TelaPainelAdmin/index.php" class="nav-item nav-link active"><i class="fa-solid fa-house me-2"></i>Painel</a>
                    <a href="../TelaCadastroAgenda/frm_cad_ag_painel.php" class="nav-item nav-link"><i class="fa-solid fa-address-book me-2"></i>Agendamentos</a>
                    <a href="../TelaCadastroCliente/frm_cad_cli_painel.php" class="nav-item nav-link"><i class="fa-solid fa-user me-2"></i>Clientes</a>
                    <a href="../TelaCadastroServicos/frm_cad_serv_painel.php" class="nav-item nav-link"><i class="fa-solid fa-briefcase me-2"></i></i>Serviços</a>
                    <a href="../TelaCadastroFuncionario/frm_cad_func_painel.php" class="nav-item nav-link" <?php if ($_SESSION['admin'] != '1'){echo "hidden";} ?>><i class="fa-solid fa-address-card me-2"></i>Funcionários</a>
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
                        <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <span class="d-none d-lg-inline-flex mostrarTodos"><?php echo $_SESSION['nome']; ?></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                        <!--a href="#" class="dropdown-item">My Profile</a-->
                        <a href="../TelaPainelAdmin/frm_settings.php" class="dropdown-item">Settings</a>
                        <a href="/tcc/TelaLogin/logout.php" class="dropdown-item">Sair</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- Recent Sales Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="bg-secondary text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h3 class="mb-0">Agenda de Hoje</h3>
                    <a class="mostrarTodos" href="../TelaCadastroAgenda/frm_cad_ag_painel.php">Mostrar Tudo</a>
                </div>
                <div class="table-responsive">
                    <table id="tablesorter" class="tablesorter table text-start align-middle table-bordered table-hover mb-0">
                        <thead class="tablesorter">
                            <tr class="text-white">
                                <th scope="col">Data</th>
                                <th scope="col">Cliente</th>
                                <th scope="col">Serviço</th>
                                <th scope="col">Horário</th>
                                <th scope="col">Status</th>
                                <th scope="col">Atendente</th>
                                <th scope="col">Observações</th>
                            </tr>
                        </thead>
                        <tbody><?php
                                //1- realizando a conexao com o banco de dados(local,usuario,senha,nomeBanco)

                                //$con=mysqli_connect("localhost","root","","bd_lavarapido");
                                include "conexao_beauty.php";

                                /*2- criando o comando sql para consulta  dos registros*/

                                $comandoSql = "select * from agenda
                                    as A inner join cliente as C on
                                    a.id_cliente = c.id_cliente inner join
                                    servico as s on s.id_servico = a.id_servico inner join
                                    funcionario as f on f.id_funcionario = a.id_funcionario where data_agenda=current_date()";


                                /*3- executando o comando sql */
                                $resultado = mysqli_query($con, $comandoSql);


                                /*4- pegando os dados da consulta criada e exibindo */
                                while ($dados = mysqli_fetch_assoc($resultado)) {
                                    $id = $dados["id_agenda"];
                                    $data = $dados["data_agenda"];
                                    $cliente = $dados["nome_cliente"];
                                    $servico = $dados["nome_servico"];
                                    $hora = $dados["horainicio_agenda"];
                                    $status = $dados["status_agenda"];
                                    $funcionario = $dados["nome_funcionario"];
                                    $obs = $dados["obs_agenda"];
                                    $data = implode("/",array_reverse(explode("-",$data)));
                                    echo "<tr>                                  
                <td>$data</td>
                <td>$cliente</td>
                <td>$servico</td>
                <td>$hora</td>
                <td>$status</td>
                <td>$funcionario</td>
                <td>$obs</td>                
            </tr>";
                                }
                                
                                ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Recent Sales End -->

        <!-- Widgets Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">                
                <div class="col-sm-12 col-md-6 col-xl-4">
                    <div class="h-100 bg-secondary rounded p-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h6 class="mb-0">Calendário</h6>
                            <a class="mostrarTodos" href="">Mostrar todos</a>
                        </div>
                        <div id="calender"></div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-xl-4">
                    <div class="h-100 bg-secondary rounded p-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h6 class="mb-0">Lista de Tarefas</h6>
                            <a class="mostrarTodos" href="">Mostrar todos</a>
                        </div>
                        <div class="d-flex mb-2">
                            <input class="form-control" type="text" placeholder="Digite sua tarefa">
                            <button type="button" class="btn ms-2">Adicionar</button>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-2">
                            <input class="form-check-input m-0" type="checkbox">
                            <div class="w-100 ms-3">
                                <div class="d-flex w-100 align-items-center justify-content-between">
                                    <span>Short task goes here...</span>
                                    <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-2">
                            <input class="form-check-input m-0" type="checkbox">
                            <div class="w-100 ms-3">
                                <div class="d-flex w-100 align-items-center justify-content-between">
                                    <span>Short task goes here...</span>
                                    <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-2">
                            <input class="form-check-input m-0" type="checkbox" checked>
                            <div class="w-100 ms-3">
                                <div class="d-flex w-100 align-items-center justify-content-between">
                                    <span><del>Short task goes here...</del></span>
                                    <button class="btn btn-sm text-primary"><i class="fa fa-times"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-2">
                            <input class="form-check-input m-0" type="checkbox">
                            <div class="w-100 ms-3">
                                <div class="d-flex w-100 align-items-center justify-content-between">
                                    <span>Short task goes here...</span>
                                    <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center pt-2">
                            <input class="form-check-input m-0" type="checkbox">
                            <div class="w-100 ms-3">
                                <div class="d-flex w-100 align-items-center justify-content-between">
                                    <span>Short task goes here...</span>
                                    <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="bg-secondary rounded h-100 p-4">
                        <h6 class="mb-4">Relatório</h6>
                        <canvas id="worldwide-sales"></canvas>
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

    <!-- Modal -->
    <div class="modal fade" id="modalSenha" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Usuário Novo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <center>
                        <h6>Você ainda não possui uma senha definida. Deseja definí-la agora?</h6>
                    </center>



                    <div class="botaosubmit">
                        <a href="../TelaPainelAdmin/frm_settings.php"><button type="button" class="btn btn-primary">SIM</button></a>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NÃO</button>
                    </div>



                </div>

            </div>
        </div>
    </div>
    <!-- End Modal -->

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
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

    <?php

    $id = $_SESSION['id'];
    $comandoSql = "select * from funcionario where id_funcionario='$id'";
    $resultado = mysqli_query($con, $comandoSql);
    while ($dados = mysqli_fetch_assoc($resultado)) {
        $senha = $dados["senha"];

        if ($senha == "") {
            echo "<script type='text/javascript'>
        $(window).load(function() {
            $('#modalSenha').modal('show');
        });
    </script>";
        }
    }
    ?>


</body>

</html>