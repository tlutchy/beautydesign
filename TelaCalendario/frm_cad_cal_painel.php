<?php
include "../TelaLogin/protect.php";
include_once "conexao_beauty.php";
include "funcoes_agenda.php";
$comandoSql = "select * from agenda
as A inner join cliente as C on
a.id_cliente = c.id_cliente inner join
servico as s on s.id_servico = a.id_servico inner join
funcionario as f on f.id_funcionario = a.id_funcionario";
$resultado = mysqli_query($con, $comandoSql);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">

    <!-- for Bootstrap 4 -->
    <link href='https://use.fontawesome.com/releases/v5.0.6/css/all.css' rel='stylesheet'>

    <!-- Libraries Stylesheet -->
    <link href="../global-assets/css-tela-admin/painellib/owlcarousel/owl.carousel.min.js" rel="stylesheet">
    <link href="../global-assets/css-tela-admin/painellib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../global-assets/css-tela-admin/painelcss/painelbootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../global-assets/css-tela-admin/painelcss/painelstyle.css" rel="stylesheet">

    <link href='../TelaCalendario/lib/main.css' rel='stylesheet' />
    <link href='../TelaCalendario/style.css' rel='stylesheet' />
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css' rel='stylesheet' />
    <script src='../TelaCalendario/lib/main.js'></script>
    <script src='js/theme-chooser.js'></script>
    <script src='../TelaCalendario/lib/locales/pt-br.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar;

            initThemeChooser({

                init: function(themeSystem) {
                    calendar = new FullCalendar.Calendar(calendarEl, {
                        themeSystem: themeSystem,
                        headerToolbar: {
                            left: 'prev,next today',
                            center: 'title',
                            right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
                        },
                        locale: 'pt-br',
                        //initialDate: '2020-09-12',
                        weekNumbers: true,
                        navLinks: true, // can click day/week names to navigate views
                        editable: true,
                        selectable: true,
                        nowIndicator: true,
                        dayMaxEvents: true, // allow "more" link when too many events
                        // showNonCurrentDates: false,
                        select: function(info) {
                            //alert('data selecionada: ' + info.startStr.toLocaleString());
                            $('#janelamodal2').modal('show');
                            $('#janelamodal2 #data').val(info.start.toLocaleString());
                        },
                        events: [
                            <?php
                            while ($dados = mysqli_fetch_array($resultado)) {
                            ?> {
                                    id: '<?php echo $dados['id_agenda']; ?>',
                                    title: '<?php echo $dados['nome_cliente'] . " - " . $dados['nome_servico']; ?>',
                                    color: '<?php echo $dados['corstatus_agenda']; ?>',
                                    start: '<?php echo $dados['data_agenda'] . " " . $dados['horainicio_agenda']; ?>',
                                    cliente: '<?php echo $dados['nome_cliente']; ?>',
                                    servico: '<?php echo $dados['nome_servico']; ?>',
                                    hora: '<?php echo $dados['horainicio_agenda']; ?>',
                                    funcionario: '<?php echo $dados['nome_funcionario']; ?>',
                                    obs: '<?php echo $dados['obs_agenda']; ?>',

                                },
                            <?php
                            }
                            ?>

                        ],

                        eventClick: function(info) {

                            info.jsEvent.preventDefault();
                            $('#janelamodal #id').text(info.event.id);
                            $('#janelamodal #id').val(info.event.id);
                            $('#janelamodal #cliente').text(info.event.extendedProps.cliente);
                            $('#janelamodal #nome').val(info.event.extendedProps.cliente);
                            $('#janelamodal #func').text(info.event.extendedProps.funcionario);
                            $('#janelamodal #funcionario').val(info.event.extendedProps.funcionario);
                            $('#janelamodal #servico').text(info.event.extendedProps.servico);
                            $('#janelamodal #serv').val(info.event.extendedProps.servico);
                            $('#janelamodal #hora').text(info.event.extendedProps.hora);
                            $('#janelamodal #horario').val(info.event.extendedProps.hora);
                            $('#janelamodal #obsv').text(info.event.extendedProps.obs);
                            $('#janelamodal #obs').val(info.event.extendedProps.obs);
                            $('#janelamodal').modal('show')
                        }
                    });
                    calendar.render();
                },

                change: function(themeSystem) {
                    calendar.setOption('themeSystem', themeSystem);
                }

            });

        });
    </script>



</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="../TelaPainelAdmin/index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><img src="../global-assets/icone-formulario.png" class="fa fa-user-edit" width="40px">Beauty Design</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $_SESSION['nome']; ?></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="../TelaPainelAdmin/index.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="../TelaCadastroAgenda/frm_cad_ag_painel.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Agendamentos</a>
                    <a href="../TelaCadastroCliente/frm_cad_cli_painel.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Clientes</a>
                    <a href="../TelaCadastroServicos/frm_cad_serv_painel.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Serviços</a>
                    <a href="../TelaCadastroFuncionario/frm_cad_func_painel.php" class="nav-item nav-link" <?php if ($_SESSION['admin'] != '1'){echo "hidden";} ?>><i class="far fa-file-alt me-2"></i>Funcionários</a>
                    <a href="../TelaCalendario/frm_cad_cal_painel.php" class="nav-item nav-link active"><i class="fa fa-chart-bar me-2"></i>Calendário</a>
                    <a aria-label="Chat on WhatsApp" href="https://wa.me/5517996030791"> <img alt="Chat on WhatsApp" src="WhatsAppButtonGreenLarge.png" />WhatsApp</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="../TelaPainelAdmin/index.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><img src="../global-assets/icone-formulario.png" class="fa fa-user-edit" width="40px"></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>

                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php echo $_SESSION['nome']; ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <!--a href="#" class="dropdown-item">My Profile</a-->
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="/tcc/TelaLogin/logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->




            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Calendário</h6>
                        <!--a href="">Mostrar Tudo</a-->
                    </div>
                    <div id='top' hidden>

                        <div class='left'>

                            <div id='theme-system-selector' class='selector'>
                                Theme System:
                                <select>
                                    <option value='bootstrap5' selected>Bootstrap 5</option>
                                    <option value='bootstrap'>Bootstrap 4</option>
                                    <option value='standard'>unthemed</option>
                                </select>
                            </div>

                            <div data-theme-system="bootstrap,bootstrap5" class='selector' style='display:none'>
                                Theme Name:
                                <select>
                                    <option value='cerulean' selected>Cerulean</option>
                                </select>
                            </div>

                            <span id='loading' style='display:none'>loading theme...</span>

                        </div>

                        <div class='right'>
                            <span class='credits' data-credit-id='bootstrap-standard' style='display:none'>
                                <a href='https://getbootstrap.com/docs/3.3/' target='_blank'>Theme by Bootstrap</a>
                            </span>
                            <span class='credits' data-credit-id='bootstrap-custom' style='display:none'>
                                <a href='https://bootswatch.com/' target='_blank'>Theme by Bootswatch</a>
                            </span>
                        </div>

                        <div class='clear'></div>
                    </div>

                    <div id='calendar'></div>

                    <div class="modal fade" id="janelamodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Agenda</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="visevent">
                                        <dl class="row">
                                            <dt class="col-sm-3" hidden>Id: </dt>
                                            <dd class="col-sm-9" id="id" hidden></dd>

                                            <dt class="col-sm-3">Cliente: </dt>
                                            <dd class="col-sm-9" id="cliente"></dd>

                                            <dt class="col-sm-3">Atendente: </dt>
                                            <dd class="col-sm-9" id="func"></dd>

                                            <dt class="col-sm-3">Serviço: </dt>
                                            <dd class="col-sm-9" id="servico"></dd>

                                            <dt class="col-sm-3">Horário: </dt>
                                            <dd class="col-sm-9" id="hora"></dd>

                                            <dt class="col-sm-3">Observações: </dt>
                                            <dd class="col-sm-9" id="obsv"></dd>
                                        </dl>
                                        <button class="btn btn-warning btn-canc-vis">Editar</button>
                                    </div>
                                    <div class="formedit">
                                        <form action="" method="post" class="editevent" id="editevent">
                                            <div class="form-group" id="form-nome">
                                                <?php
                                                $comandoSql = "select * from cliente";
                                                $resultado = mysqli_query($con, $comandoSql);
                                                echo "<select name='nome' id='nome' class='form-control rounded-left'>";
                                                while ($dados = mysqli_fetch_assoc($resultado)) {
                                                    $id = $dados["id_cliente"];
                                                    $nome = $dados["nome_cliente"];
                                                    if ($id_cliente == $id) {
                                                        echo "<option value='$id' selected>$nome</option>";
                                                    } else {
                                                        echo "<option value=$id>$nome</option>";
                                                    }
                                                }
                                                echo "</select>";
                                                ?>
                                                <i class="fas fa-exclamation-circle"></i>
                                                <i class="fas fa-check-circle"></i>
                                                <small>Mensagem de erro</small>
                                            </div>
                                            <div class="form-group" id="form-funcionario">
                                                <?php
                                                funcionarioSelect();
                                                ?>
                                                <i class="fas fa-exclamation-circle"></i>
                                                <i class="fas fa-check-circle"></i>
                                                <small>Mensagem de erro</small>
                                            </div>
                                            <div class="form-group" id="form-servico">
                                                <?php
                                                servicoSelect();
                                                ?>
                                                <i class="fas fa-exclamation-circle"></i>
                                                <i class="fas fa-check-circle"></i>
                                                <small>Mensagem de erro</small>
                                            </div>
                                            <div class="form-group" id="form-data">
                                                <input type="date" name="data" id="data" class="form-control rounded-left" placeholder="Data" onkeypress="DataHora(event, this)">
                                                <i class="fas fa-exclamation-circle"></i>
                                                <i class="fas fa-check-circle"></i>
                                                <small>Mensagem de erro</small>
                                            </div>
                                            <div class="form-group" id="form-horario">
                                                <input type="time" name="horario" id="horario" class="form-control rounded-left" placeholder="Horário">
                                                <i class="fas fa-exclamation-circle"></i>
                                                <i class="fas fa-check-circle"></i>
                                                <small>Mensagem de erro</small>
                                            </div>
                                            <div class="form-group" id="form-obs">
                                                <input type="text" name="obs" id="obs" class="form-control rounded-left" placeholder="Observações">
                                                <i class="fas fa-exclamation-circle"></i>
                                                <i class="fas fa-check-circle"></i>
                                                <small>Mensagem de erro</small>
                                            </div>
                                            <div class="botaosubmit">
                                                <button type="button" class="btn btn-primary btn-canc-edit">Cancelar</button>
                                                <input type="submit" class="btn btn-primary rounded submit" value="Cadastrar">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="janelamodal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="login-wrap p-4 p-md-5">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <img src="../global-assets/icone-formulario.png">
                                        </div>
                                        <h3 class="text-center mb-4">Agendamento</h3>
                                        <form action="../TelaCalendario/cadastra_agenda_beauty.php" method="post" class="form" id="form">
                                            <div class="form-group" id="form-nome">
                                                <?php
                                                listaClienteSelect();
                                                ?>
                                                <i class="fas fa-exclamation-circle"></i>
                                                <i class="fas fa-check-circle"></i>
                                                <small>Mensagem de erro</small>
                                            </div>

                                            <div class="form-group" id="form-funcionario">
                                                <?php
                                                funcionarioSelect();
                                                ?>
                                                <i class="fas fa-exclamation-circle"></i>
                                                <i class="fas fa-check-circle"></i>
                                                <small>Mensagem de erro</small>
                                            </div>

                                            <div class="form-group" id="form-servico">
                                                <?php
                                                servicoSelect();
                                                ?>
                                                <i class="fas fa-exclamation-circle"></i>
                                                <i class="fas fa-check-circle"></i>
                                                <small>Mensagem de erro</small>
                                            </div>

                                            <div class="form-group" id="form-data">
                                                <input type="date" name="data" id="data" class="form-control rounded-left" placeholder="Data" onkeypress="DataHora(event, this)">
                                                <i class="fas fa-exclamation-circle"></i>
                                                <i class="fas fa-check-circle"></i>
                                                <small>Mensagem de erro</small>
                                            </div>

                                            <div class="form-group" id="form-horario">
                                                <input type="time" name="horario" id="horario" class="form-control rounded-left" placeholder="Horário">
                                                <i class="fas fa-exclamation-circle"></i>
                                                <i class="fas fa-check-circle"></i>
                                                <small>Mensagem de erro</small>
                                            </div>

                                            <div class="form-group" id="form-obs">
                                                <input type="text" name="obs" id="obs" class="form-control rounded-left" placeholder="Observações">
                                                <i class="fas fa-exclamation-circle"></i>
                                                <i class="fas fa-check-circle"></i>
                                                <small>Mensagem de erro</small>
                                            </div>
                                            <div class="botaosubmit">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                                <input type="submit" class="btn btn-primary rounded submit" value="Cadastrar">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->





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

    <script>
        $('.btn-canc-vis').on("click", function() {
            $('.visevent').slideToggle();
            $('.formedit').slideToggle();
        })

        $('.btn-canc-edit').on("click", function() {
            $('.formedit').slideToggle();
            $('.visevent').slideToggle();
        })        
    </script>

</body>

</html>