<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Handport - Questão 4</title>

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
          <h1 class="masthead-heading mb-0">Questão 4</h1>
        <!--  <h2 class="masthead-subheading mb-0">ou divulgue aqui se você quer doar algum!</h2> -->
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

              <!-- colocar video aqui -->
              <img class="img-fluid rounded-circle" src="../img/01.jpg" alt="">

            </div>
          </div>
          <div class="col-lg-6">
            <div class="p-5">
        <p class="lead">4- Ordene as frases, colocando na ordem: o elemento que realiza a ação, em seguida, o verbo e depois seu complemento.</p>

        <div class="f1">
          <br>
          <br>
          <span id="letra">A)</span>
          <span class="q1a border rounded p-2 m-2" draggable="true" ondragstart="drag(event)" id="caixa1" width="88" height="31" >A bola</span>
          <span class="q1a border rounded p-2 m-2" draggable="true" ondragstart="drag(event)" id="caixa2" width="88" height="31" >Jogou</span>
          <span class="q1a border rounded p-2 m-2" draggable="true" ondragstart="drag(event)" id="caixa3" width="88" height="31" >O menino</span>
          <div class="limparfloat"></div>
        </div>

        <br>

        <div class="resp1">
          <div class="r1 q1a border rounded p-4 m-3 float-left w-25" ondrop="drop(event)" ondragover="allowDrop(event)">  </div>
          <div class="r1 q1a border rounded p-4 m-3 float-left w-25" ondrop="drop(event)" ondragover="allowDrop(event)">  </div>
          <div class="r1 q1a border rounded p-4 m-3 float-left w-25" ondrop="drop(event)" ondragover="allowDrop(event)">  </div>
          <div class="limparfloat"></div>
        </div>

      </div>

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

    <!-- Só existe para garantir que o bloco js vai ser executado
    depois de importar as bibliotecas -->
    <script type="text/javascript">
    $(document).ready(function() {



    });
    </script>


  </body>

  </html>
