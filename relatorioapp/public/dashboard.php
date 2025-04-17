<?php
session_start();
if (!isset($_SESSION['nome'])) {
    header("Location: login.php");
    exit();
}
$nome = $_SESSION['nome'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f8f9fa, #e3f2fd);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .card {
            border-radius: 25px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        .emoji {
            font-size: 1.8rem;
        }
    </style>
</head>
<body>
    <div class="card p-5 text-center">
        <h2 class="mb-4">Olá, <strong><?= $nome ?></strong>! Bem vindo ao seu painel <span class="emoji">🎉</span></h2>
        <a href="logout.php" class="btn btn-danger btn-lg rounded-pill px-4">Sair</a>
    </div>
</body>
</html>
