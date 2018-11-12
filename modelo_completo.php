<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Título do seu site</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">

  <!-- Importar o Font awesome -->
  <link href="css/font-awesome.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/one-page-wonder.css" rel="stylesheet">

</head>

<body>

  <!-- Barra de menu -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Seu projeto</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="{% url 'index">
              <i class="fa fa-home" aria-hidden="true"></i>
              Página inicial
              <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fa fa-search" aria-hidden="true"></i>
                Procurar
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{% url 'contato">
                <i class="fa fa-comments" aria-hidden="true"></i>
                Contato
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fa fa-align-left" aria-hidden="true"></i>
                Sobre
              </a>
            </li>
          </ul>
        </div>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fa fa-user-plus" aria-hidden="true"></i>
                Cadastre-se
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fa fa-sign-in" aria-hidden="true"></i>
                Login
              </a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    <!-- Fim da barra de menu -->

    <!-- Início do cabeçalho -->
    <header class="masthead text-center text-white">
      <div class="masthead-content">
        <div class="container">
          <h1 class="masthead-heading mb-0">Adote um animal</h1>
          <h2 class="masthead-subheading mb-0">ou divulgue aqui se você quer doar algum!</h2>

          <a href="#" class="btn btn-primary btn-xl rounded-pill mt-5">
            <i class="fa fa-user-plus" aria-hidden="true"></i>
            Cadastre-se
          </a>

          <br>

          <button id="btn-procurar" class="btn btn-info btn-xl rounded-pill mt-5">
            <i class="fa fa-search" aria-hidden="true"></i>
            Procurar
          </button>

        </div>
      </div>
      <div class="bg-circle-1 bg-circle"></div>
      <div class="bg-circle-2 bg-circle"></div>
      <div class="bg-circle-3 bg-circle"></div>
      <div class="bg-circle-4 bg-circle"></div>
    </header>
    <!-- Fim do cabeçalho -->

    <!-- Início do conteúdo -->
    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="img/01.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="p-5">
              <h2 class="display-4">For those about to rock...</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- fim do conteúdo -->


    <!-- Rodapé -->
    <footer class="py-3 bg-black">
      <div class="container">
        <p class="m-0 text-center text-white small">Copyright &copy; Zottesso.com.br - 2018</p>
      </div>
    </footer>
    <!-- Fim do rodapé -->


    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Só existe para garantir que o bloco js vai ser executado
    depois de importar as bibliotecas -->
    <script type="text/javascript">
    $(document).ready(function() {



    });
    </script>




  </body>

  </html>
