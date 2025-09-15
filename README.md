<<<<<<< HEAD
# Laravel + Blade Starter Kit

---

## Introduction

Our Laravel 12 + Blade starter kit provides the typical functionality found in the Laravel Starter kits, but with a few key differences:

- A CoreUI/AdminLTE inspired design layout
- Blade + AlpineJS code

This kit aims to fill the gap where there is no simple **Blade only** starter kit available.

Our internal goal at Laravel Daily is to start using this starter kit for our Demo applications, to avoid overwhelming our audience with Vue/Livewire/React if we had used one of the official Laravel 12 starter kits.

**Note:** This is Work in Progress kit, so it will get updates and fixes/features as we go.

---

## Screenshots

![](https://laraveldaily.com/uploads/2025/05/LoginPage.png)

![](https://laraveldaily.com/uploads/2025/05/RegisterPage.png)

![](https://laraveldaily.com/uploads/2025/05/DashboardPage.png)

![](https://laraveldaily.com/uploads/2025/05/ProfilePage.png)

---

## What is Inside?

Inside you will find all the functions that you would expect:

- Authentication
    - Login
    - Registration
    - Password Reset Flow
    - Email Confirmation Flow
- Dashboard Page
- Profile Settings
    - Profile Information Page
    - Password Update Page
    - Appearance Preferences

---

## How to use it?

To use this kit, you can install it using:

```bash
laravel new --using=laraveldaily/starter-kit
```

From there, you can modify the kit to your needs.

---

## Design Elements

If you want to see examples of what design elements we have, you can [visit the Wiki](<https://github.com/LaravelDaily/starter-kit/wiki/Design-Examples-(Raw-Files)>) and see the raw HTML files.

---

## Licence

Starter kit is open-sourced software licensed under the MIT license.
=======
# Projeto-Laravel-CRUD

Este é um projeto de demonstração de um CRUD (Create, Read, Update, Delete) completo, desenvolvido com o framework Laravel. A aplicação permite gerenciar um cadastro de produtos de forma segura e eficiente.

## Funcionalidades Implementadas

-   **CRUD Completo:** Funcionalidades para Criar, Listar, Ver, Editar e Apagar produtos.
-   **Autenticação de Usuários:** Sistema completo com telas de login, registro e logout.
-   **Proteção de Rotas:** O acesso ao CRUD de produtos é restrito apenas a usuários autenticados.
-   **Validação no Servidor:** Os formulários de criação e edição possuem regras de validação robustas para garantir a integridade dos dados.
-   **Mensagens de Feedback (Flash Messages):** O usuário recebe mensagens de sucesso ou erro após cada operação (criação, atualização, exclusão).
-   **Interface Responsiva:** O layout foi construído com Bootstrap 5, adaptando-se a diferentes tamanhos de tela (desktop, tablet e mobile).
-   **Tratamento de Estado Vazio:** A página de listagem exibe uma mensagem amigável quando nenhum produto está cadastrado.

## Como Instalar e Rodar o Projeto

Siga os passos abaixo para configurar e executar o projeto em seu ambiente local.

**Pré-requisitos:** PHP >= 8.2, Composer, Node.js e NPM.

1.  **Clone o repositório:**
    ```bash
    git clone [https://github.com/seu-usuario/seu-repositorio.git](https://github.com/seu-usuario/seu-repositorio.git)
    cd seu-repositorio
    ```

2.  **Instale as dependências do PHP:**
    ```bash
    composer install
    ```

3.  **Instale as dependências do Node.js:**
    ```bash
    npm install
    ```

4.  **Configure o arquivo de ambiente:**
    ```bash
    cp .env.example .env
    ```

5.  **Gere a chave da aplicação:**
    ```bash
    php artisan key:generate
    ```

6.  **Configure o Banco de Dados:**
    * Abra o arquivo `.env` e configure as variáveis do seu banco de dados (DB_CONNECTION, DB_HOST, etc.).
    * Para usar o **SQLite** (padrão deste projeto), apenas crie o arquivo na pasta `database`:
        ```bash
        touch database/database.sqlite
        ```

7.  **Execute as Migrations:**
    Este comando irá criar todas as tabelas necessárias no banco de dados.
    ```bash
    php artisan migrate
    ```

8.  **Inicie os servidores:**
    Você precisará de dois terminais abertos.

    * No **Terminal 1**, inicie o servidor do Vite (para os assets):
        ```bash
        npm run dev
        ```
    * No **Terminal 2**, inicie o servidor do Laravel:
        ```bash
        php artisan serve
        ```

9.  **Acesse a aplicação:**
    Abra seu navegador e acesse: [http://127.0.0.1:8000](http://127.0.0.1:8000)

## Usuário de Teste

Você pode usar as seguintes credenciais para acessar o sistema ou criar um novo usuário na página de registro.

-   **E-mail:** `email.teste@gmail.com`
-   **Senha:** `teste123`
>>>>>>> 54c73d80c06b92b40486828def2a9c9881969e14
