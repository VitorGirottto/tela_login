# Sistema de Login em PHP com MySQL

Este é um sistema de login simples desenvolvido em PHP, com autenticação de usuários e armazenamento de senhas de forma segura usando `password_hash` e `password_verify`. O sistema usa MySQL como banco de dados para armazenar as informações dos usuários.

## Funcionalidades

- **Cadastro de Usuário**: Permite que novos usuários se cadastrem no sistema com nome, email e senha.
- **Login de Usuário**: Usuários podem se autenticar usando seu email e senha.
- **Área Restrita**: Após o login, o usuário é redirecionado para uma página de dashboard.
- **Logout**: O usuário pode sair do sistema a qualquer momento.

## Estrutura do Projeto

O projeto é composto pelos seguintes arquivos:

- `login.php`: Página de login onde os usuários inserem seu email e senha.
- `register.php`: Página de registro onde novos usuários podem se cadastrar.
- `dashboard.php`: Página de boas-vindas para usuários autenticados.
- `logout.php`: Página para destruir a sessão e deslogar o usuário.
- `db.php`: Conexão com o banco de dados MySQL.
- `login.sql`: Script SQL para criar o banco de dados e a tabela de usuários.

## Como Usar

### Pré-requisitos

- PHP >= 7.0
- MySQL
- Servidor web como Apache ou Nginx (recomendado XAMPP ou WAMP para facilidade)

### Passo a Passo

1. **Clone o repositório:**

```bash
git clone https://github.com/VitorGirottto/tela_login.git
cd tela_login
````

ㅤ

2. **Configure o banco de dados:**

Crie o banco de dados utilizando o script login.sql fornecido:

```bash
CREATE DATABASE login;

USE login;

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
````

A tabela users será criada com os campos necessários.

ㅤ

3. **Configure a conexão com o banco de dados:**

Abra o arquivo db.php e configure as credenciais de acesso ao seu banco de dados MySQL. Se estiver usando XAMPP, a configuração padrão geralmente é:

```bash
$host = "localhost";
$dbname = "login";
$username = "root";
$password = "";
````

ㅤ

4. **Inicie o servidor web:**

Se estiver usando XAMPP, inicie o Apache e o MySQL.
Acesse o sistema de login através do navegador no endereço:
ㅤ
http://localhost/tela_login/login.php
ㅤ

5. **Testando o sistema:**

Cadastre um novo usuário.

Realize o login com o email e senha cadastrados.

Após o login, você será redirecionado para o dashboard.php.

Você pode fazer logout clicando no link de "Sair" no dashboard.
