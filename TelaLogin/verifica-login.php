<?php

include "conexao_beauty.php";


$nome=$_POST["nome"];
$senha=$_POST["senha"];


  $comandoSql = "SELECT * FROM funcionario WHERE nome_funcionario = '$nome' AND senha = '$senha'";
  
  
  $resultado=mysqli_query($con, $comandoSql);

  while($dados=mysqli_fetch_assoc($resultado)){
    $id=$dados["id_funcionario"];
    $nome=$dados["nome_funcionario"];
    $admin=$dados["admin"];
    $senha=$dados["senha"];
  }
  
  $quantidade = $resultado->num_rows;

  if($quantidade == 1){
    

    if(!isset($_SESSION)){
        session_start();
    }

    $_SESSION['id'] = $id;
    $_SESSION['nome'] = $nome;
    $_SESSION['admin'] = $admin;
    $_SESSION['senha'] = $senha;

    header("Location: /tcc/TelaPainelAdmin/index.php");


  }else{
    echo "<head>
    <meta charset='utf-8'>
    <meta content='width=device-width, initial-scale=1.0' name='viewport'>
  
    <title>Beauty Design - Login</title>
    <meta content='' name='description'>
    <meta content='' name='keywords'>
  
    <!-- Favicons -->
    <link href='../global-assets/favicon.png' rel='icon'>
    <link href='../global-assets/apple-touch-icon.png' rel='apple-touch-icon'>
  
    <!-- Google Fonts -->
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
  
    <!-- Vendor CSS Files -->
    <link href='../global-assets/vendor/aos/aos.css' rel='stylesheet'>
    <link href='../global-assets/vendor/bootstrap/css/bootstrap.min.css' rel='stylesheet'>
    <link href='../global-assets/vendor/bootstrap-icons/bootstrap-icons.css' rel='stylesheet'>
    <link href='../global-assets/vendor/glightbox/css/glightbox.min.css' rel='stylesheet'>
    <link href='../global-assets/vendor/remixicon/remixicon.css' rel='stylesheet'>
    <link href='../global-assets/vendor/swiper/swiper-bundle.min.css' rel='stylesheet'>
  
    <!-- CSS do Login-->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='../TelaLogin/css/style.css'>
  
  </head>
  
  <body>
  
    <section class='ftco-section'>
  
      <div class='row justify-content-center'>
          <div class='col-md-6 col-lg-5'>
              <div class='row vh-100 login-wrap rounded align-items-center justify-content-center mx-0'>
                  <div class='col-md-6 text-center p-4'>
                      <img src='../global-assets/icone-formulario.png' class='fa fa-user-edit'>
                      <h1 class='display-1 fw-bold'>ERRO</h1>                    
                      <p class='mb-4'>Falha ao logar! Nome ou senha incorretos.</p>
                      <a class='btn btn-primary rounded-pill py-3 px-5' href='/tcc/TelaLogin/tela-login.html'>Voltar</a>
                  </div>
              </div>
          </div>   
      </div>       
      
    </section>
  
    
  
      <div class='container'>
        <div class='copyright'>
          &copy; Copyright <strong><span>Beauty Design</span></strong> • Todos os direitos reservados
        </div>
        <div class='credits'>
          Desenvolvido por <a href='#'>Team Beauty Design System</a>
        </div>
      </div>
    </footer><!-- End Footer -->
  
    <!-- Vendor JS Files -->
    <script src='../TelaCadastroCliente/assets/js/scripts.js'></script>
    <script src='../global-assets/vendor/purecounter/purecounter_vanilla.js'></script>
    <script src='../global-assets/vendor/aos/aos.js'></script>
    <script src='../global-assets/vendor/bootstrap/js/bootstrap.bundle.min.js'></script>
    <script src='../global-assets/vendor/glightbox/js/glightbox.min.js'></script>
    <script src='../global-assets/vendor/isotope-layout/isotope.pkgd.min.js'></script>
    <script src='../global-assets/vendor/swiper/swiper-bundle.min.js'></script>
  
    <!-- Template Main JS File -->
    <script src='assets/js/main.js'></script>
  
  </body>";
    
  }
