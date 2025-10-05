<?php
  include("header.php");
?>

  <body>

      <header>
        <!--MENU LATERAL DESKTOP-->
        <div class="cabecalho d-none d-md-flex flex-column flex-shrink-0 p-3 position-fixed h-100 bg-cabecalho" style="width: 200px;">
          <a href="#home" class="d-flex align-items-center my-4 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <span class="fs-4  d-sm-inline"><img src="./assets/images/logo/logo.png" class="img-fluid" style="width:150px;" alt=""></span>
          </a>
          <p class="text-center">Rosa de Ferro</p>
        </div>
      </header>

      <main>
        <!--BANNER-->
        <section class="banner pt-md-5" id="home">
          <div class="container">
            <div class="row">
              <div class="d-none d-md-block col-md-7 offset-md-1 px-5 pt-5 text-center">
                <h1 class="pb-2">Olá, Bem vindo!</h1>
                <h5>A Rosa de Ferro é uma revista digital dedicada a dar espaço para histórias, reflexões e debates sobre feminismo. Aqui você pode compartilhar experiências, aprender e inspirar conhecimento.</h5>
                <hr class="d-none d-md-block mt-5">
                <div class="mt-5 text-center">
                  <a href="#" class="btn btn-lg btn-primary px-4 mb-3 mx-1" id="btn-leitor"><i class="fa-brands fa-readme"></i> Ler nossos artigos</a>
                  <a href="#" class="btn btn-lg btn-primary px-4 mb-3 mx-1" id="btn-escritor"><i class="fa-solid fa-pencil"></i> Escrever um artigo</a>
                </div>
              </div>
              
            </div>
          </div>
        </section>
      </main>

      <?php
        include("footer.php");
      ?>