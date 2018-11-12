<!-- Barra de menu -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Handport</a>
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
              Como Jogar
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
