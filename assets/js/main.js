//CARREGAMENTO DA PÁGINA
function loading(){
    document.getElementsByClassName("box-load")[0].style.display="none";
    document.getElementsByClassName("content")[0].style.display="block";
}

//MODAIS LEITOR
// Seleciona os modais
const modalPerguntaLeitor = new bootstrap.Modal(document.getElementById('modalPerguntaLeitor'));
const modalLoginLeitor = new bootstrap.Modal(document.getElementById('modalLoginLeitor'));
const modalCadastroLeitor = new bootstrap.Modal(document.getElementById('modalCadastroLeitor'));

// Abrir modal pergunta ao clicar no botão "Ler nossos artigos"
document.getElementById('btn-leitor').addEventListener('click', function(e){
  e.preventDefault();
  modalPerguntaLeitor.show();
});

// Botão "Sim" -> abre modal login leitor
document.getElementById('btnSimLeitor').addEventListener('click', function(){
  modalPerguntaLeitor.hide();
  modalLoginLeitor.show();
});

// Botão "Não" -> abre modal cadastro leitor
document.getElementById('btnNaoLeitor').addEventListener('click', function(){
  modalPerguntaLeitor.hide();
  modalCadastroLeitor.show();
});


//MODAIS ESCRITOR
// Seleciona os modais
  const modalPergunta = new bootstrap.Modal(document.getElementById('modalPergunta'));
  const modalLogin = new bootstrap.Modal(document.getElementById('modalLogin'));
  const modalCadastro = new bootstrap.Modal(document.getElementById('modalCadastro'));

  // Abrir modal pergunta ao clicar no botão "Tornar-se escritor"
  document.getElementById('btn-escritor').addEventListener('click', function(e){
    e.preventDefault();
    modalPergunta.show();
  });

  // Botão "Sim" -> abre modal login
  document.getElementById('btnSim').addEventListener('click', function(){
    modalPergunta.hide();
    modalLogin.show();
  });

  // Botão "Não" -> abre modal cadastro
  document.getElementById('btnNao').addEventListener('click', function(){
    modalPergunta.hide();
    modalCadastro.show();
  });
  

 //Redirecionar para modal de login correto
  document.addEventListener("DOMContentLoaded", function() {
    const params = new URLSearchParams(window.location.search);
    const loginType = params.get("login");

    if (loginType === "leitor") {
        var loginModalLeitor = new bootstrap.Modal(document.getElementById("modalLoginLeitor"));
        loginModalLeitor.show();
    } 
    else if (loginType === "escritor") {
        var loginModalEscritor = new bootstrap.Modal(document.getElementById("modalLogin"));
        loginModalEscritor.show();
    }
  });

  
// Função chamada ao clicar em "Excluir"

function confirmarExclusao(id) {
    if (confirm("Tem certeza que deseja excluir este artigo?")) {
        fetch('./backend/manipula-artigo.php?action=delete', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: 'id=' + encodeURIComponent(id)
        })
        .then(response => response.text())
        .then(data => {
            // Mostra aviso de sucesso
            alert('Artigo excluído com sucesso!');
            
            // Remove o artigo da tela
            const card = document.querySelector(`#artigo-${id}`);
            if (card) card.remove();

            // Recarrega a página para atualizar a lista
            setTimeout(() => location.reload(), 1000);
        })
        .catch(err => {
            alert('Erro ao excluir o artigo.');
            console.error(err);
        });
    }
}



