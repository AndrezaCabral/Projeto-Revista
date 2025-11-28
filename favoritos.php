<?php
session_start();
if (!isset($_SESSION["id"])) {
    header("Location: index.php");
    exit;
}

include("./backend/conexao-banco.php");

$id_usuario = $_SESSION["id"];

$sql = "SELECT artigos.* FROM artigos 
        INNER JOIN favoritos ON favoritos.id_artigo = artigos.id
        WHERE favoritos.id_usuario = ?
        ORDER BY favoritos.id DESC";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id_usuario);
$stmt->execute();
$result = $stmt->get_result();

include("header.php");
?>
<body>
    <nav class="menu-artigos navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <div class="favoritos">
                <a class="navbar-brand" href="#"><i class="fa-solid fa-star"></i> Favoritos</a>
            </div>
            <div class="text-end">
                <a href="artigos.php" class="btn btn-lg btn-secondary">Voltar</a>
            </div>
        </div>
    </nav>

    <section class="artigos-publicados">
        <div class="container">
            <h1>Meus Favoritos</h1>

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
                <a href="artigos.php" class="btn btn-lg btn-secondary">Voltar</a>
            </div>
        </div>
    </section>
</body>
