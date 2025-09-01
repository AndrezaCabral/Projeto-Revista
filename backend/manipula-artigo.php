<?php
include("conexao-banco.php");

// Verifica qual ação foi pedida
$action = $_GET['action'] ?? '';

switch ($action) {

    // ------------------- CRIAR ARTIGO -------------------
    case 'create':
        $titulo   = $_POST['titulo'] ?? '';
        $conteudo = $_POST['conteudo'] ?? '';
        $autor    = $_POST['autor'] ?? '';

        $sql = "INSERT INTO artigos (titulo, conteudo, autor) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $titulo, $conteudo, $autor);

        if ($stmt->execute()) {
            echo "Artigo criado com sucesso!";
        } else {
            echo "Erro ao criar artigo: " . $conn->error;
        }
        break;

    // ------------------- LER ARTIGOS -------------------
    case 'read':
        $id = $_GET['id'] ?? null;

        if ($id) {
            $sql = "SELECT * FROM artigos WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();
            echo json_encode($result->fetch_assoc());
        } else {
            $sql = "SELECT * FROM artigos ORDER BY id DESC";
            $result = $conn->query($sql);
            echo json_encode($result->fetch_all(MYSQLI_ASSOC));
        }
        break;

    // ------------------- ATUALIZAR ARTIGO -------------------
    case 'update':
        $id       = $_POST['id'] ?? null;
        $titulo   = $_POST['titulo'] ?? '';
        $conteudo = $_POST['conteudo'] ?? '';

        if ($id) {
            $sql = "UPDATE artigos SET titulo = ?, conteudo = ? WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssi", $titulo, $conteudo, $id);

            if ($stmt->execute()) {
                echo "Artigo atualizado com sucesso!";
            } else {
                echo "Erro ao atualizar: " . $conn->error;
            }
        } else {
            echo "ID não informado.";
        }
        break;

    // ------------------- DELETAR ARTIGO -------------------
    case 'delete':
        $id = $_POST['id'] ?? null;

        if ($id) {
            $sql = "DELETE FROM artigos WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $id);

            if ($stmt->execute()) {
                echo "Artigo deletado com sucesso!";
            } else {
                echo "Erro ao deletar: " . $conn->error;
            }
        } else {
            echo "ID não informado.";
        }
        break;

    default:
        echo "Ação inválida ou não especificada.";
}

$conn->close();
?>
