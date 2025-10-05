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
                    <input type="email" class="form-control" name="email" id="loginEmailLeitor" placeholder="Digite seu e-mail">
                  </div>
                  <div class="mb-3">
                    <label for="loginSenhaLeitor" class="form-label">Senha</label>
                    <input type="password" class="form-control" name="senha" id="loginSenhaLeitor" placeholder="Digite sua senha">
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
                    <input type="text" class="form-control" name="nome" id="cadNomeLeitor" placeholder="Digite seu nome">
                  </div>
                  <div class="mb-3">
                    <label for="cadEmailLeitor" class="form-label">E-mail</label>
                    <input type="email" class="form-control" name="email" id="cadEmailLeitor" placeholder="Digite seu e-mail">
                  </div>
                  <div class="mb-3">
                    <label for="cadSenhaLeitor" class="form-label">Senha</label>
                    <input type="password" class="form-control" name="senha" id="cadSenhaLeitor" placeholder="Crie uma senha">
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

        <!-- Modal de Feedback -->
<div class="modal fade" id="mensagemModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 shadow">
      <div class="modal-header bg-<?php echo $tipoMensagem; ?> text-white">
        <h5 class="modal-title">
          <?php echo ($tipoMensagem == "success") ? "Sucesso" : "Erro"; ?>
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
        <?php echo $mensagem; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-<?php echo $tipoMensagem; ?>" data-bs-dismiss="modal">Ok</button>
      </div>
    </div>
  </div>
</div>



        
      </footer>

      <!-- SCRIPTS -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
      <script src="./assets/js/main.js"></script>


    <?php if (isset($mensagem) && $mensagem): ?>
    <script>
        var modal = new bootstrap.Modal(document.getElementById('mensagemModal'));
        modal.show();

        // Remove os parâmetros da URL após fechar o modal
        document.getElementById('mensagemModal').addEventListener('hidden.bs.modal', function () {
            if (window.history.replaceState) {
                const url = window.location.href.split("?")[0];
                window.history.replaceState({}, document.title, url);
            }
        });
    </script>
    <?php endif; ?>
        
  </body>


</html>