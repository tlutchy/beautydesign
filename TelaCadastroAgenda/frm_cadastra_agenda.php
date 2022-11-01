<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Inner Page - FlexStart Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Select2 -->
  <link href="select2.css" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.10.1
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <!-- CSS do Login-->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="style.css">

</head>

<body>

  <section class="ftco-section">
    <div class="container">

    </div>
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5">
        <div class="login-wrap p-4 p-md-5">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="fa fa-user-o"></span>
          </div>
          <h3 class="text-center mb-4">Agendamento</h3>
          <form action="cadastra_agenda_beauty.php" class="form" id="form" method="post">
            <div class="form-group" id="form-nome">
              <?php
              include "funcoes_agenda.php";
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
              <input type="date" name="data" id="data" class="form-control rounded-left" placeholder="Data">
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
                
              <input type="submit" class="btn btn-primary rounded submit p-3 px-5" value="Cadastrar">
            </div>

          </form>
        </div>
      </div>
    </div>
    </div>
  </section>

  
  
  <script
      src="https://kit.fontawesome.com/f9e19193d6.js"
      crossorigin="anonymous">
  </script>

  <script>
    $(document).ready(function() {
    $('#nome').select2();
    });
  </script>

</body>

</html>