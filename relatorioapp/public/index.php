<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Login / Cadastro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #fdfbfb, #ebedee);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .card-container {
      width: 100%;
      max-width: 400px;
      background: white;
      padding: 2rem;
      border-radius: 20px;
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
    }
    .nav-tabs .nav-link {
      width: 50%;
      text-align: center;
      font-weight: 600;
    }
    .tab-content {
      margin-top: 1.5rem;
    }
    .btn {
      border-radius: 30px;
    }
  </style>
</head>
<body>
  <div class="card-container">
    <ul class="nav nav-tabs" id="authTabs" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab">Login</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="cadastro-tab" data-bs-toggle="tab" data-bs-target="#cadastro" type="button" role="tab">Cadastro</button>
      </li>
    </ul>

    <div class="tab-content">
      <!-- LOGIN -->
      <div class="tab-pane fade show active" id="login" role="tabpanel">
        <h4 class="text-center mt-3">Bem-vindo de volta 👋</h4>
        <form action="autenticar.php" method="post">
          <div class="mb-3">
            <label for="emailLogin" class="form-label">E-mail</label>
            <div class="input-group">
              <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
              <input type="email" class="form-control" id="emailLogin" name="email" placeholder="Digite seu e-mail" required>
            </div>
          </div>
          <div class="mb-4">
            <label for="senhaLogin" class="form-label">Senha</label>
            <div class="input-group">
              <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
              <input type="password" class="form-control" id="senhaLogin" name="senha" placeholder="Digite sua senha" required>
            </div>
          </div>
          <button type="submit" class="btn btn-primary w-100">Entrar</button>
        </form>
      </div>

      <!-- CADASTRO -->
      <div class="tab-pane fade" id="cadastro" role="tabpanel">
        <h4 class="text-center mt-3">Crie sua conta 🚀</h4>
        <form action="process_cadastro.php" method="post">
          <div class="mb-3">
            <label for="nomeCadastro" class="form-label">Nome</label>
            <div class="input-group">
              <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
              <input type="text" class="form-control" id="nomeCadastro" name="nome" placeholder="Digite seu nome" required>
            </div>
          </div>
          <div class="mb-3">
            <label for="emailCadastro" class="form-label">E-mail</label>
            <div class="input-group">
              <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
              <input type="email" class="form-control" id="emailCadastro" name="email" placeholder="Digite seu e-mail" required>
            </div>
          </div>
          <div class="mb-4">
            <label for="senhaCadastro" class="form-label">Senha</label>
            <div class="input-group">
              <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
              <input type="password" class="form-control" id="senhaCadastro" name="senha" placeholder="Digite sua senha" required>
            </div>
          </div>
          <button type="submit" class="btn btn-success w-100">Cadastrar</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Scripts Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
