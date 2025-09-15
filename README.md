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
