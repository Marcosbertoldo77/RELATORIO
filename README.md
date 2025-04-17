# 💻 Sistema de Login e Cadastro com PHP + Bootstrap

Esse é um projeto de autenticação simples e moderno, desenvolvido com foco em boas práticas, design elegante e estrutura pronta para evoluir!
---

## 🚀 Funcionalidades

- Login com verificação de senha segura (`password_hash`)
- Cadastro de novos usuários com validação
- Interface responsiva e estilosa usando **Bootstrap 5**
- Alternância entre login e cadastro em uma única tela
- Sessões PHP para controle de acesso
- Redirecionamento para **painel personalizado** após o login
---

## 📸 Preview

### Tela de Login
![image](https://github.com/user-attachments/assets/9916eebc-6bf2-471c-b7d6-bced61bab788)

![image](https://github.com/user-attachments/assets/94ff35cc-bae6-4ae2-82d7-41d93ddc7386)

### Tela de Cadastro
![image](https://github.com/user-attachments/assets/7f920b30-5bf1-46c4-a681-f38940e2af7c)


--

## 🛠️ Tecnologias Utilizadas

- **PHP 7+**
- **MySQL** (ou MariaDB)
- **Bootstrap 5**
- **HTML5 + CSS3**
- 🎨 Ícones com **Bootstrap Icons**

---

## ⚙️ Como Rodar Localmente

1. Clone o repositório:
   ```bash
   git clone https://github.com/seu-usuario/seu-repo.git
Coloque o projeto dentro do seu servidor local (ex: htdocs no XAMPP)

Crie um banco de dados e importe o SQL:

sql
Copiar
Editar
CREATE TABLE usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100),
  email VARCHAR(100) UNIQUE,
  senha VARCHAR(255)
);
Atualize o arquivo config/database.php com os dados do seu banco

Acesse no navegador:

http://localhost/seu-projeto/
🧠 Aprendizados
Esse projeto foi construído com o objetivo de:

Praticar integração entre frontend bonito e backend funcional

Aprender sobre segurança básica com hash de senha

Criar um sistema reutilizável para qualquer projeto que precise de login e cadastro

📌 Possíveis Melhorias Futuras
Validação com JavaScript

Recuperação de senha via e-mail

Autenticação com JWT para APIs

Integração com frameworks como Laravel ou CodeIgniter

👤 Autor
Feito com 💙 por Marcos Bertoldo

📝 Licença
Este projeto está sob a licença MIT.

---

### 👉 Dicas finais:
- Cria uma pasta `assets` e joga os prints das telas nela com nome tipo `login-preview.png`, `cadastro-preview.png`.
- Se ainda não tiver os prints, posso te ajudar a gerar imagens bonitas!
- Depois é só colocar esse `README.md` na raiz do projeto no Git.

Se quiser, posso já montar o `README.md` completo com seus dados e gerar o preview com base no que a gente já construiu. Só falar! 🚀







Você disse:
quero mais pro backand eo caminho ?


O ChatGPT disse:
Perfeito! Se o foco é mais back-end, a gente pode moldar a apresentação para valorizar estrutura de código, segurança, lógica de autenticação e organização dos arquivos PHP. Abaixo vai um README.md voltado pra esse lado mais técnico:

markdown
Copiar
Editar
# 🔐 Sistema de Autenticação PHP (Login + Cadastro)

Projeto simples e funcional focado no back-end, com autenticação de usuários via PHP puro e banco de dados MySQL. Ideal como base para sistemas administrativos, portais e dashboards protegidos.

---

## 🧱 Estrutura de Pastas

/ ├── config/ │ └── database.php # Conexão com o banco de dados (PDO) ├── public/ │ ├── index.php # Tela de login/cadastro (interface unificada) │ ├── autenticar.php # Lógica de login │ ├── process_cadastro.php # Lógica de cadastro │ ├── dashboard.php # Painel autenticado │ └── logout.php # Encerramento de sessão ├── assets/ # Imagens e estilos (se aplicável) └── README.md

yaml
Copiar
Editar

---

## 🛠️ Tecnologias e Conceitos

- ✅ **PHP** com **programação procedural**
- ✅ Conexão segura com **PDO**
- ✅ Armazenamento de senha com `password_hash` / `password_verify`
- ✅ **Sessões PHP** para controle de login
- ✅ Validação simples de formulário
- ✅ Organização por responsabilidade (cada arquivo com sua função)

---

## 📂 Fluxo de Acesso

1. Usuário acessa `index.php`, onde pode:
   - Fazer login
   - Se cadastrar
2. Ao logar, é redirecionado para `dashboard.php`
3. Pode encerrar a sessão clicando em "Sair" (`logout.php`)

---

## 📚 Banco de Dados

Crie a tabela no MySQL:

```sql
CREATE TABLE usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  senha VARCHAR(255) NOT NULL
);
🧪 Testando Localmente
Clone o projeto

Suba o ambiente com Apache + MySQL (XAMPP, Laragon ou similar)

Configure o config/database.php com suas credenciais

Acesse no navegador:

ruby
Copiar
Editar
http://localhost/seu-projeto/public/
🔒 Segurança aplicada
Senha não é salva em texto puro (usa password_hash)

Evita SQL Injection com prepared statements

Redirecionamento com session_start() e verificação de login no dashboard.php

📈 Melhorias Futuras
Validações mais robustas

Registro de atividades (logs)

Middleware para rotas protegidas

Uso de JWT ou OAuth para APIs

Separação por camadas (MVC)

👨‍💻 Autor
Desenvolvido por [Seu Nome] — com foco no aprendizado prático de back-end em PHP.
Ideal para quem está começando ou quer uma base sólida para projetos maiores.

📝 Licença
MIT © 2025

yaml
Copiar
Editar

---

Se quiser, posso gerar isso tudo com seu nome de autor e um título personalizado pro seu projeto, tipo:

> `Sistema de Autenticação Simples com PHP e PDO — Por Marcos Bertoldo da Silva`

É só mandar:  
✅ O nome que quer usar  
✅ Nome do projeto (ou deixamos genérico)  
✅ E se quiser, eu te mando o arquivo pronto pra só colar no GitHub! 😎

2/2












