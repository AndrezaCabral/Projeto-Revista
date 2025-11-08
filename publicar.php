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
            <h3 class="fw-bold pb-5">Meus artigos publicados</h3>

            <div class="row">
                <?php
                include("./backend/conexao-banco.php");
                $autor = $_SESSION["nome"];

                // Busca artigos do autor logado
                $sql = "SELECT * FROM artigos WHERE autor = ? ORDER BY id DESC";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("s", $autor);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0):
                    while ($artigo = $result->fetch_assoc()):
                ?>
                    <div class="col-md-6 mb-3" id="artigo-<?php echo $artigo['id']; ?>">
                        <div class="card-meus-artigos p-5 py-4">
                            <div class="card-body">
                                <h5 class="card-title pb-3 fw-bold">
                                    <?= htmlspecialchars($artigo['titulo']); ?>
                                </h5>
                                <p class="card-text">
                                    <?= htmlspecialchars(substr($artigo['conteudo'], 0, 120)); ?>...
                                </p>
                                <small class="text-muted">
                                    Publicado em <?= date("d/m/Y H:i", strtotime($artigo['data_publicacao'])); ?>
                                </small>
                            </div>
                            <div class="card-footer pt-3 text-end">
                                <button 
                                    type="button"
                                    class="btn btn-md btn-danger" 
                                    onclick="confirmarExclusao(<?= $artigo['id']; ?>)">
                                    Excluir
                                </button>
                            </div>
                        </div>
                    </div>
                <?php
                    endwhile;
                else:
                    echo "<p class='text-muted'>Você ainda não publicou nenhum artigo.</p>";
                endif;

                $conn->close();
                ?>
            </div>

            <div class="text-end my-5 mx-5">
                <a href="index.php" class="btn btn-lg btn-secondary">Voltar para a página inicial</a>
            </div>
        </div>
    </section>

    <?php
        include("footer.php");
    ?>

