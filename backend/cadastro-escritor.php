<?php
include("conexao-banco.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome  = trim($_POST["nome"]);
    $email = trim($_POST["email"]);
    $senha = trim($_POST["senha"]);
    $cpf   = trim($_POST["cpf"]);

    // Validações básicas
    if (empty($nome) || empty($email) || empty($senha) || empty($cpf)) {
        echo "<script>alert('Por favor, preencha todos os campos.'); window.history.back();</script>";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('E-mail inválido.'); window.history.back();</script>";
        exit;
    }

    if (!preg_match("/^[0-9]{11}$/", $cpf)) {
        echo "<script>alert('CPF inválido. Digite apenas números (11 dígitos).'); window.history.back();</script>";
        exit;
    }

    // Verifica se e-mail já existe
    $checkEmail = $conn->prepare("SELECT id FROM usuarios WHERE email = ?");
    $checkEmail->bind_param("s", $email);
    $checkEmail->execute();
    $checkEmail->store_result();
    if ($checkEmail->num_rows > 0) {
        echo "<script>alert('Erro: E-mail já cadastrado.'); window.history.back();</script>";
        exit;
    }

    // Verifica se CPF já existe
    $checkCpf = $conn->prepare("SELECT id FROM usuarios WHERE cpf = ?");
    $checkCpf->bind_param("s", $cpf);
    $checkCpf->execute();
    $checkCpf->store_result();
    if ($checkCpf->num_rows > 0) {
        echo "<script>alert('Erro: CPF já cadastrado.'); window.history.back();</script>";
        exit;
    }

    // Hash da senha
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    // Insere no banco
    $sql = "INSERT INTO usuarios (nome, email, senha, cpf, tipo) VALUES (?, ?, ?, ?, 'escritor')";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $nome, $email, $senha_hash, $cpf);

    if ($stmt->execute()) {
        echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href='../index.php?login=escritor';</script>";
    } else {
        echo "<pre>Erro ao cadastrar: " . $stmt->error . "</pre>";
    }
}
?>
