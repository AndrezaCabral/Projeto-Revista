<?php
session_start();
if (!isset($_SESSION["id"]) || $_SESSION["tipo"] != "escritor") {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Área do Escritor - Revista Rosa de Ferro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Rosa de Ferro</a>
            <span class="navbar-text ms-auto">
                Escritor: <?php echo htmlspecialchars($_SESSION["nome"]); ?>
            </span>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="mb-4">Área de Publicação</h1>

        <!-- Formulário de criação de artigo -->
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                Criar novo artigo
            </div>
            <div class="card-body">
                <form method="POST" action="./backend/publicar-artigo.php">
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" required>
                    </div>
                    <div class="mb-3">
                        <label for="conteudo" class="form-label">Conteúdo</label>
                        <textarea class="form-control" id="conteudo" name="conteudo" rows="6" required></textarea>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-success">Publicar</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Lista de artigos publicados (placeholder por enquanto) -->
        <h2>Meus artigos publicados</h2>
        <p>Aqui aparecerão os artigos já publicados pelo escritor.</p>
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Título exemplo</h5>
                        <p class="card-text">Prévia do conteúdo...</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Editar</a>
                        <a href="#" class="btn btn-sm btn-outline-danger">Excluir</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
