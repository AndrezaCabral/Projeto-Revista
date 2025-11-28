<?php
session_start();
if (!isset($_SESSION["id"])) {
    header("Location: ../index.php");
    exit;
}

include("conexao-banco.php");

$id_usuario = $_SESSION["id"];
$id_artigo = $_POST["id_artigo"];

// Verifica se já está favoritado
$sqlCheck = "SELECT * FROM favoritos WHERE id_usuario = ? AND id_artigo = ?";
$stmt = $conn->prepare($sqlCheck);
$stmt->bind_param("ii", $id_usuario, $id_artigo);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    // Insere favorito
    $sqlInsert = "INSERT INTO favoritos (id_usuario, id_artigo) VALUES (?, ?)";
    $stmt = $conn->prepare($sqlInsert);
    $stmt->bind_param("ii", $id_usuario, $id_artigo);
    $stmt->execute();
}

header("Location: ../artigos.php");
exit;
?>
