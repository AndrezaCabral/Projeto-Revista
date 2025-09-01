<?php
session_start();
if (!isset($_SESSION["id"]) || $_SESSION["tipo"] != "leitor") {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Artigos - Revista Rosa de Ferro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Rosa de Ferro</a>
            <span class="navbar-text ms-auto">
                Olá, <?php echo htmlspecialchars($_SESSION["nome"]); ?>
            </span>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="mb-4">Artigos</h1>
        <p>Esta é a página de artigos para leitores logados. Em breve, os artigos serão carregados dinamicamente do banco de dados.</p>

        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Artigo Exemplo 1</h5>
                        <p class="card-text">Resumo do artigo 1...</p>
                        <a href="#" class="btn btn-primary">Ler mais</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Artigo Exemplo 2</h5>
                        <p class="card-text">Resumo do artigo 2...</p>
                        <a href="#" class="btn btn-primary">Ler mais</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Artigo Exemplo 3</h5>
                        <p class="card-text">Resumo do artigo 3...</p>
                        <a href="#" class="btn btn-primary">Ler mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
