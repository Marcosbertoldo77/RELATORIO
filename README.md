# 💻 Sistema de Autenticação com PHP + Bootstrap

Projeto completo de login e cadastro com interface moderna e estrutura de back-end organizada. Ideal para portfólios, testes técnicos e como base para aplicações maiores.

---

## 🚀 Funcionalidades

✅ Login com verificação de senha segura (`password_hash`)  
✅ Cadastro de novos usuários com validação  
✅ Interface responsiva e estilosa com **Bootstrap 5**  
✅ Alternância entre login e cadastro em uma única tela  
✅ Controle de sessão com `$_SESSION`  
✅ Redirecionamento para painel autenticado  
✅ Estrutura preparada para evolução com segurança

---

## 📸 Telas do Projeto

### 🔐 Login

![image](https://github.com/user-attachments/assets/48dd9ec5-3cfa-47d7-90fb-c2e638eb43c7)


### 👤 Cadastro

![image](https://github.com/user-attachments/assets/6d6a0c03-c315-4bb3-bcda-2a88b087405b)

---

## 🧱 Estrutura de Pastas

/RELATORIO/ ├── config/ │ └── database.php # Conexão com o banco (PDO) ├── public/ │ ├── index.php # Tela com login/cadastro integrados │ ├── autenticar.php # Processa login │ ├── process_cadastro.php # Processa cadastro │ ├── dashboard.php # Painel pós-login │ └── logout.php # Encerra a sessão └── assets/ # Imagens de preview

---

## 🧪 Testando localmente

1. Clone o repositório:
   ```bash
   git clone https://github.com/Marcosbertoldo77/RELATORIO.git
Coloque o projeto dentro da pasta htdocs do XAMPP (ou outro servidor local)

Crie o banco de dados e a tabela:

CREATE TABLE usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  senha VARCHAR(255) NOT NULL
);
Atualize os dados de conexão no arquivo:
config/database.php

Acesse no navegador:

http://localhost/RELATORIO/public/index.php

🛠 Tecnologias Utilizadas

PHP 7+

MySQL / MariaDB

Bootstrap 5

HTML5 + CSS3

Bootstrap Icons

📌 Melhorias futuras
Validação com JavaScript (client-side)

Recuperação de senha por e-mail

Cadastro com confirmação de senha

Integração com JWT ou OAuth 2.0

Organização MVC com rotas

Integração com frameworks como Laravel ou CodeIgniter

👨‍💻 Autor
Feito com 💙 por Marcos Bertoldo
GitHub

📝 Licença
Este projeto está sob a licença MIT.



---

Se quiser, posso te gerar esse arquivo `README.md` prontinho com links e tudo formatado pra você colar direto no GitHub.

Só me fala:
- Você já salvou as imagens de preview (`login-preview.png`, `cadastro-preview.png`) dentro da pasta `assets/`?
- Quer que eu gere esse `.md` pra você agora?

Vamo deixar esse projeto tinindo pro mundo ver! 🚀✨












