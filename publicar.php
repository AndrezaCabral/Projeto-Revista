<?php
session_start();
if (!isset($_SESSION["id"]) || $_SESSION["tipo"] != "escritor") {
    header("Location: index.php");
    exit;
}

// Captura mensagens
$mensagem = "";
$tipoMensagem = "success";
if (isset($_GET['sucesso'])) {
    $mensagem = "Artigo criado com sucesso!";
    $tipoMensagem = "success";
} elseif (isset($_GET['erro'])) {
    $mensagem = "Erro ao criar o artigo. Tente novamente.";
    $tipoMensagem = "danger";
}

include("header.php");
?>

<body>
    <nav class="menu-publicar navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <img src="./assets/images/logo/logo.png" width="50" class="mx-3" alt="">
            <a class="navbar-brand" href="#">Rosa de Ferro</a>
            <span class="ms-auto">
                Autor: <?php echo htmlspecialchars($_SESSION["nome"]); ?>
            </span>
        </div>
    </nav>

    <!--SEÇÃO FORMULARIO-->
    <section class="formulario-publicar py-5">
        <div class="container">
            <div class=" mb-4 col-md-7 offset-md-5 mb-5">
                <h3 class="mb-4 fw-bold">Criar novo artigo</h3>
                <div class="card-body">
                    <form method="POST" action="./backend/manipula-artigo.php?action=create">
                        <div class="mb-3">
                            <label for="titulo" class="form-label fw-bold">Título</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" required>
                        </div>
                        <div class="mb-3">
                            <label for="conteudo" class="form-label fw-bold">Conteúdo</label>
                            <textarea class="form-control" id="conteudo" name="conteudo" rows="6" required></textarea>
                        </div>
                        <div class="text-center mt-5">
                            <button type="submit" class="btn btn-lg btn-primary px-5">Publicar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <hr class="my-0">

    <!-- SEÇÃO ARTIGOS PUBLICADOS -->
    <section class="meus-artigos-publicados py-5">
        <div class="container">
            <!-- Lista de artigos publicados (placeholder por enquanto) -->
            <h3 class="fw-bold pb-5">Meus artigos publicados</h3>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="card-meus-artigos p-5 py-4">
                        <div class="card-body">
                            <h5 class="card-title pb-3 fw-bold">Título exemplo</h5>
                            <p class="card-text">Prévia do conteúdo...</p>
                        </div>
                        <div class="card-footer pt-3 text-end">
                            <a href="#" class="btn btn-md btn-success px-3 mx-2">Editar</a>
                            <a href="#" class="btn btn-md btn-danger">Excluir</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-end my-5 mx-5">
            <a href="index.php" class="btn btn-lg btn-secondary">Voltar para a página inicial</a>
        </div>
    </section>
 
    <?php
        include("footer.php");
    ?>

