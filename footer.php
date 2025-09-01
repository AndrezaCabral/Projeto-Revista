<!-- FOOTER-->
      <footer>

      <!-- Modal pergunta leitor -->
      <div class="modal fade" id="modalPerguntaLeitor" tabindex="-1" aria-labelledby="modalPerguntaLeitorLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalPerguntaLeitorLabel">Caro leitor, você já possui cadastro?</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body text-center">
              <button type="button" class="btn btn-primary me-2" id="btnSimLeitor">Sim</button>
              <button type="button" class="btn btn-secondary" id="btnNaoLeitor">Não</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal Login Leitor -->
      <div class="modal fade" id="modalLoginLeitor" tabindex="-1" aria-labelledby="modalLoginLeitorLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalLoginLeitorLabel">Realize seu login</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
              <form method="POST" action="./backend/login-leitor.php">
                <div class="mb-3">
                  <label for="loginEmailLeitor" class="form-label">E-mail</label>
                  <input type="email" class="form-control" id="loginEmailLeitor" placeholder="Digite seu e-mail">
                </div>
                <div class="mb-3">
                  <label for="loginSenhaLeitor" class="form-label">Senha</label>
                  <input type="password" class="form-control" id="loginSenhaLeitor" placeholder="Digite sua senha">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Acessar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal Cadastro Leitor -->
      <div class="modal fade" id="modalCadastroLeitor" tabindex="-1" aria-labelledby="modalCadastroLeitorLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalCadastroLeitorLabel">Cadastro de Leitor</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
              <form method="POST" action="./backend/cadastro-leitor.php">
                <div class="mb-3">
                  <label for="cadNomeLeitor" class="form-label">Nome</label>
                  <input type="text" class="form-control" id="cadNomeLeitor" placeholder="Digite seu nome">
                </div>
                <div class="mb-3">
                  <label for="cadEmailLeitor" class="form-label">E-mail</label>
                  <input type="email" class="form-control" id="cadEmailLeitor" placeholder="Digite seu e-mail">
                </div>
                <div class="mb-3">
                  <label for="cadSenhaLeitor" class="form-label">Senha</label>
                  <input type="password" class="form-control" id="cadSenhaLeitor" placeholder="Crie uma senha">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal pergunta escritor -->
        <div class="modal fade" id="modalPergunta" tabindex="-1" aria-labelledby="modalPerguntaLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalPerguntaLabel">Caro escritor, você já possui cadastro?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
              </div>
              <div class="modal-body text-center">
                <button type="button" class="btn btn-primary me-2" id="btnSim">Sim</button>
                <button type="button" class="btn btn-secondary" id="btnNao">Não</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal Login Escritor -->
        <div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="modalLoginLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalLoginLabel">Realize seu login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
              </div>
              <div class="modal-body">
                <form method="POST" action="./backend/login-escritor.php">
                  <div class="mb-3">
                    <label for="loginCpf" class="form-label">CPF</label>
                    <input type="text" class="form-control" name="cpf" id="loginCpf" placeholder="Digite seu CPF" required>
                  </div>
                  <div class="mb-3">
                    <label for="loginSenha" class="form-label">Senha</label>
                    <input type="password" class="form-control" name="senha" id="loginSenha" placeholder="Digite sua senha" required>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Acessar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal Cadastro Escritor -->
        <div class="modal fade" id="modalCadastro" tabindex="-1" aria-labelledby="modalCadastroLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalCadastroLabel">Cadastro de Escritor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
              </div>
              <div class="modal-body">
                <form method="POST" action="./backend/cadastro-escritor.php">
                  <div class="mb-3">
                    <label for="cadNome" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="nome" id="cadNome" placeholder="Digite seu nome">
                  </div>
                  <div class="mb-3">
                    <label for="cadEmail" class="form-label">E-mail</label>
                    <input type="email" class="form-control" name="email" id="cadEmail" placeholder="Digite seu e-mail">
                  </div>
                  <div class="mb-3">
                    <label for="cadCpf" class="form-label">CPF</label>
                    <input type="text" class="form-control" name="cpf" id="cadCpf" placeholder="Digite seu CPF (apenas números)">
                  </div>
                  <div class="mb-3">
                    <label for="cadSenha" class="form-label">Senha</label>
                    <input type="password" class="form-control" name="senha" id="cadSenha" placeholder="Crie uma senha">
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        
      </footer>

      <!-- SCRIPTS -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script><!--responsável pelo carroussel de produtos-->
      <script src="./assets/js/main.js"></script>
    

    </div><!--div fechamento content loading no header-->
  </body>

  <script>
      var swiper = new Swiper(".slide-container", {
          slidesPerView: 3,
          spaceBetween: 20,
          sliderPerGroup: 3,
          speed: 800,
          
          autoplay: {
              delay: 6000,
              disableOnInteraction: true,
          },
          loop: true,
          centerSlide: "true",
          fade: "true",
          grabCursor: "true",
          pagination: {
              el: ".swiper-pagination",
              clickable: true,
              dynamicBullets: true,
          },
          navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
          },
          breakpoints: {
              0: {
              slidesPerView: 1,
              },
              520: {
              slidesPerView: 2,
              },
              768: {
              slidesPerView: 2,
              },
              1000: {
              slidesPerView: 3,
              },
          },
      });
  </script><!--responsável pelo carroussel de produtos-->

</html>