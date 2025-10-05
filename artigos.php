<?php
session_start();
if (!isset($_SESSION["id"]) || $_SESSION["tipo"] != "leitor") {
    header("Location: index.php");
    exit;
}

include("./backend/conexao-banco.php");
$sql = "SELECT * FROM artigos ORDER BY id DESC";
$result = $conn->query($sql);
include("header.php");
?>

<body>
    <nav class="menu-artigos navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <img src="./assets/images/logo/logo.png" width="50" class="mx-3" alt="">
            <a class="navbar-brand" href="#">Rosa de Ferro</a>
            <span class="ms-auto">
                Bem vindo <?php echo htmlspecialchars($_SESSION["nome"]); ?> !
            </span>
        </div>
    </nav>

    <!-- SEÇÃO ARTIGOS PUBLICADOS -->
    <section class="artigos-publicados">
        <div class="container">
            <h1>Artigos Publicados</h1>

            <div class="artigos-grid col-md-12 mb-5">
            <?php while($artigo = $result->fetch_assoc()): ?>
                <div class="artigo-card">
                <h5><?= htmlspecialchars($artigo['titulo']); ?></h5>
                <p><?= nl2br(htmlspecialchars(substr($artigo['conteudo'], 0, 250))); ?>...</p>
                <small>Por <?= htmlspecialchars($artigo['autor']); ?></small>
                </div>
            <?php endwhile; ?>
            </div>

            <div class="text-center">
                <a href="index.php" class="btn btn-lg btn-secondary">Voltar para a página inicial</a>
            </div>
        </div>
    </section>
</body>

