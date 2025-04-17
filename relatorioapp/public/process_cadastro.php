<?php
require_once '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome  = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // segurança!

    // Validação simples (dá pra expandir depois)
    if (empty($nome) || empty($email) || empty($_POST['senha'])) {
        die('Preencha todos os campos!');
    }

    // Insere no banco
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
    $stmt = $pdo->prepare($sql);
    try {
        $stmt->execute([
            ':nome'  => $nome,
            ':email' => $email,
            ':senha' => $senha
        ]);
        echo "Usuário cadastrado com sucesso!";
    } catch (PDOException $e) {
        echo "Erro ao cadastrar: " . $e->getMessage();
    }
}
