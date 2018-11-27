<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Handport - Questão 2</title>

  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.css" rel="stylesheet">

  <!-- Importar o Font awesome -->
  <link href="../css/font-awesome.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/one-page-wonder.css" rel="stylesheet">

</head>

<body>

    <?php
    include("../site/menu.php");
     ?>

    <!-- Início do cabeçalho -->
    <header class="masthead text-center text-white">
      <div class="masthead-content">
        <div class="container">
          <h1 class="masthead-heading mt-3 mb-0">Cadatro</h1>
          <!-- <h2 class="masthead-subheading mb-0">Algum texto introdutório pra essa questão! Se não quiser, comente esta linha</h2> -->
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
      <div class="container-fluid py-4" >
        <div class="row">
          <div class="col-lg-5">
            <div class="p-3 text-center">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Uhy3gtZoeOM" allowfullscreen></iframe>
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="p-3">
              <!-- <p class="lead">Aqui vai o conteúdo da sua questão. Seguem alguns exemplos de código...</p> -->



              <div class="row my-3">

                <div class="col-lg">

                <div class="bg-light rounded border p-3 text-center">
                <div class="container">
                  <form action="/action_page.php">
                      <div class="form-group">

                        <div class="form-group">
                        <label for="pwd">Nome:</label>
                          <input type="password" class="form-control font-400" id="pwd" placeholder="digite seu nome" name="nome">
                        </div>

                      <label for="email">Email:</label>
                      <input type="email" class="form-control font-400 " id="email" placeholder="usuario@gmail.com" name="email">
                    </div>

                      <div class="form-group">
                        <label for="pwd">Senha:</label>
                        <input type="password" class="form-control font-400" id="pwd" placeholder="digite sua senha" name="senha">
                      </div>

                      <div class="form-group">
                        <label for="pwd">Confirmar senha:</label>
                        <input type="password" class="form-control font-400" id="pwd" placeholder="digite sua senha" name="confirmaSenha">
                      </div>

                    </form>
                  </div>

                </div>
              </div>

              </div>


            </div>

            <div class="p-3 text-right">
              <button type="button" name="button" class="btn btn-success btn-lg px-3">
                Cadastrar
                <i class="fa fa-arrow-circle-right ml-2" aria-hidden="true"></i>
              </button>
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
    <script src="../js/jquery.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.js"></script>

    <script type="../text/javascript">
    $(document).ready(function() {

      // alert("Ok");

    });
    </script>




  </body>

  </html>
