<?php
include("conexao-banco.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura e limpa os dados
    $nome  = trim($_POST["nome"]);
    $email = trim($_POST["email"]);
    $senha = trim($_POST["senha"]);

    // Valida campos
    if (empty($nome) || empty($email) || empty($senha)) {
        echo "<script>alert('Por favor, preencha todos os campos.'); window.history.back();</script>";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('E-mail inválido.'); window.history.back();</script>";
        exit;
    }

    // Verifica se o e-mail já está cadastrado
    $check = $conn->prepare("SELECT id FROM usuarios WHERE email = ?");
    $check->bind_param("s", $email);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        echo "<script>alert('Erro: E-mail já cadastrado.'); window.history.back();</script>";
        exit;
    }

    // Hash da senha
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    // Insere no banco
    $sql = "INSERT INTO usuarios (nome, email, senha, tipo) VALUES (?, ?, ?, 'leitor')";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nome, $email, $senha_hash);

    if ($stmt->execute()) {
        echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href='../index.php?login=leitor';</script>";
    } else {
        // Mostra erro real do MySQL
        echo "<pre>Erro ao cadastrar: " . $stmt->error . "</pre>";
    }
}
