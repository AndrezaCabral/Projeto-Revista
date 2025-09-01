<?php
session_start();
include("conexao-banco.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cpf   = trim($_POST["cpf"]);
    $senha = trim($_POST["senha"]);

    if (!preg_match("/^[0-9]{11}$/", $cpf)) {
        echo "<script>alert('CPF inválido!'); window.history.back();</script>";
        exit;
    }

    $sql = "SELECT * FROM usuarios WHERE cpf = ? AND tipo = 'escritor'";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $cpf);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();

        if (password_verify($senha, $usuario["senha"])) {
            $_SESSION["id"]   = $usuario["id"];
            $_SESSION["nome"] = $usuario["nome"];
            $_SESSION["tipo"] = $usuario["tipo"];

            header("Location: ../publicar.php");
            exit;
        } else {
            echo "<script>alert('Senha incorreta!'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('Usuário não encontrado!'); window.history.back();</script>";
    }
}
?>
