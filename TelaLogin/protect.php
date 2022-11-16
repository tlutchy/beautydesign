<?php
if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['id'])){
    die("
    
<head>
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
                    <p class='mb-4'>Você não pode acessar essa página porque não está logado.</p>
                    <a class='btn btn-primary rounded-pill py-3 px-5' href='/tcc/TelaLogin/tela-login.html'>Fazer Login</a>
                </div>
            </div>
        </div>   
    </div>       
    
  </section>

  

  <!-- ======= Footer ======= -->
  <footer id='footer' class='footer'>

    <div class='footer-top'
      style='background-image: url(../global-assets/textura-footer.png); background-repeat: no-repeat; background-size: cover;'>
      <div class='container'>
        <div class='row gy-4'>
          <div class='col-lg-5 col-md-12 footer-info'>
            <a href='index.html' class='logo d-flex align-items-center'>
              <img src='../global-assets/Logo Inteira BD Horizontal.png' alt=''>
            </a>
            <p>Somos uma empresa especializada em Design, pronta para te deixar arrasando em todos os momentos.</p>
            <div class='social-links mt-3'>
              <a href='https://www.facebook.com/jaque.sato.921/' class='facebook'><i class='bi bi-facebook' target='_blank'></i></a>
              <a href='https://www.instagram.com/ls.conte/' class='instagram'><i class='bi bi-instagram' target='_blank'></i></a>
              <a href='https://www.linkedin.com/in/thiago-lutchy-rico-silva-246a3b17a/' class='linkedin' target='_blank'><i
                  class='bi bi-linkedin'></i></a>
            </div>
          </div>

          <div class='col-lg-2 col-6 footer-links'>
            <h4>Institucional</h4>
            <ul>
              <li><i class='bi bi-chevron-right'></i> <a href='#hero' target='_blank'>Página Inicial</a></li>
              <li><i class='bi bi-chevron-right'></i> <a href='#about' target='_blank'>Sobre</a></li>
              <li><i class='bi bi-chevron-right'></i> <a href='#services' target='_blank'>Serviços</a></li>
              <li><i class='bi bi-chevron-right'></i> <a href='#portfolio' target='_blank'>Portfólio</a></li>
              <li><i class='bi bi-chevron-right'></i> <a href='#contato' target='_blank'>Contato</a></li>
            </ul>
          </div>

          <div class='col-lg-2 col-6 footer-links'>
            <h4>Beauty System</h4>
            <ul>
              <li><i class='bi bi-chevron-right' target='_blank'></i> <a href='#'>Sobre o Sistema</a></li>
              <li><i class='bi bi-chevron-right' target='_blank'></i> <a href='#'>Suporte</a></li>
            </ul>
          </div>

          <div class='col-lg-3 col-md-12 footer-contact text-md-start'>
            <h4>Formas de Contato</h4>
            <p>
              Av. dos Estudantes, 3278 <br>
              Jd. Novo Aeroporto<br>
              São José do Rio Preto - SP<br><br>
              <strong>Telefone:</strong> (17) 3233-9266<br>
              <strong>Email:</strong> beautydesign@gmail.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class='container'>
      <div class='copyright'>
        &copy; Copyright <strong><span>Beauty Design</span></strong> • Todos os direitos reservados
      </div>
      <div class='credits'>
        Desenvolvido por <a href='#'>Team Beauty Design System</a> <!-- Levar para a página *Sobre o Sistema* -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <!-- Vendor JS Files -->
  <script src='assets/vendor/purecounter/purecounter_vanilla.js'></script>
  <script src='assets/vendor/aos/aos.js'></script>
  <script src='assets/vendor/bootstrap/js/bootstrap.bundle.min.js'></script>
  <script src='assets/vendor/glightbox/js/glightbox.min.js'></script>
  <script src='assets/vendor/isotope-layout/isotope.pkgd.min.js'></script>
  <script src='assets/vendor/swiper/swiper-bundle.min.js'></script>

  <!-- Template Main JS File -->
  <script src='assets/js/main.js'></script>

</body>
    
    
    
    
    
    
    ");
}

?>
