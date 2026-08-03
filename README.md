<div align="center">
    <a href="https://github.com/monicaquintal" target="_blank">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/laravel/laravel-original.svg" width="80px" align="left"/>  
    </a> 
    <h1>Desenvolvimento Web Avançado com PHP, Laravel e Vue.JS</h1>
</div>

<h3>Conteúdo</h3>

- Configurar o ambiente de desenvolvimento nos sistemas operacionais Windows, Linux Ubuntu e OSX.
- Trabalhar com rotas, grupos e com os verbos HTTP Get, Post, Delete, Put e Patch.
- Trabalhar com o motor de renderização de views Blade
- Trabalhar com o desenvolvimento incremental de bancos de dados relacionais utilizando Migrations
- Criar Seeders e Factories para popular tabelas
- Trabalhar com o console Tinker
- Como manipular e validar formulários
- Como interceptar requisições e respostas utilizando Middlewares
- Como implementar as operações CRUD utilizando o Eloquent ORM
- Como implementar autenticação por Session e Token (JWT)
- Como lidar com o padrão de arquitetura MVC (Model, View e Controller)
- Como exportar arquivos nos formatos XLSX, CSV e PDF
- Como enviar e-mails
- Construir APIs Webservices REST
- Dominar os principais recursos do framework Laravel
- Como combinar os frameworks Bootstrap (CSS) e Laravel
- Como combinar os frameworks VueJS e Laravel
- Como combinar o Laravel com o banco de dados Redis para armazenamento de dados em memória (cache)
- Como desenvolver projetos web de forma rápida e estruturada

<h3>Aulas</h3>

<details>
    <summary><a href="./aulas/01e02.md">Aula 01: Introdução</a></summary>

    - Configurando o ambiente de desenvolvimento
    - Canais de comunicação

</details>

<details>
    <summary><a href="./aulas/01e02.md">Aula 02: Preparando-se para o desenvolvimento</a></summary>

    - Instalando o Visual Studio Code
    - Instalando o PHP
    - Instalando o Composer
    - Iniciando um projeto Laravel (Via Composer)
    - Instalando o Laravel Installer
    - Iniciando um projeto Laravel (Via Lavarel Installer)
    
</details>

<details>
    <summary><a href="./aulas/03.md">Aula 03: Introdução às Rotas, Controllers e Views</a></summary>

    - Iniciando o projeto
    - Produtividade com Artisan Console
    - Rotas (Routes) - Introdução
    - Super Gestão - Implementando as rotas principal, sobre-nos e contato
    - Controladores (Controllers) - Introdução
    - Super Gestão - Implementando os controladores principal, sobre-nos e contato
    - Visualizações (Views) - Introdução
    - Super Gestão - Implementando as visualizações principal, sobre-nos e contato

</details>

<details>
    <summary><a href="./aulas/04.md">Aula 04: Avançando com Rotas (Routes)</a></summary>

    - Enviando parâmetros
    - Parâmetros opcionais e valores padrões
    - Tratando parâmetros de rotas com expressões regulares
    - Super Gestão - Criando o menu de navegação
    - Super Gestão - Implementando as rotas login, clientes, fornecedores e produtos
    - Agrupando rotas
    - Nomeando rotas
    - Redirecionamento de rotas
    - Rota de contingência (fallback)

</details>

<details>
    <summary><a href="./aulas/05.md">Aula 05: Avançando com Controladores (Controllers) e Visualizações (Views)</a></summary>

    - Encaminhando parâmetros da rota para o controlador
    - Encaminhando parâmetros do controlador para visualização
    - Sintaxe Blade
    - Blade - Incluíndo comentários e blocos PHP puros
    - Extra - Adicionando a extensão VSCode Laravel-Blade
    - Blade - @if/@else
    - Blade - @unless
    - Blade - @isset
    - Blade - @empty
    - Extra - Operador condicional ternário
    - Blade - Operador condicional de valor default (??)
    - Blade - @switch/case
    - Blade - @for
    - Blade - @while
    - Blade - @foreach
    - Blade - @forelse
    - Blade - Escapando a tag de impressão do Blade
    - Blade - Variável loop
    - Super Gestão - Melhorando o visual
    - O que são assets?
    - Adicionando assets as views (helper asset)
    - Adicionando arquivos CSS externos as páginas web
    - Blade - Template com @extends, @section e @yield parte 1
    - Blade - Template com @extends, @section e @yield parte 2
    - Blade - Realizando include de views (@include)
    - Super Gestão - Enviando o formulário de contato
    - Enviando o formulário de contato via POST
    - Entendendo o token @csrf
    - Blade - Componentes (@component)
    - Blade - Enviando parâmetros para componentes

</details>

<details>
    <summary><a href="./aulas/06.md">Aula 06: Models, Migrations, Seeders, Factories, Banco de Dados, Tinker e Eloquent ORM</a></summary>

    - Criando o Model SiteContato
    - Implementando a migration SiteContato
    - Configurando o BD SQLite e executando as migrations
    - [LINUX] SGBD MySQL - Download e Instalação
    - Conectando-se ao SGBD MySQL via MySQL Workbench
    - Criando a base de dados da aplicação e configurando a conexão (.env)
    - Migration - Executando as migrações
    - Migration - Criando e executando a migration fornecedores
    - Migration - Adicionando campos a uma tabela
    - Migration - Métodos up e down
    - Migration - Modificadores Nullable e Default
    - Migration - Adicionando chaves estrangeiras (Relacionamento um para um)
    - Migration - Adicionando chaves estrangeiras (Relacionamento um para muitos)
    - Migration - Adicionando chaves estrangeiras (Relacionamento muitos para muitos)
    - Migration - Modificador After
    - Migration - Comandos Status, Reset, Refresh e Fresh
    - Entendendo o Eloquent ORM
    - Tinker - Introdução
    - Eloquent - Inserindo registros
    - Eloquent - Ajustando o nome da tabela no Model para um correto ORM
    - Eloquent - Inserindo registros com Create e Fillable
    - Eloquent - Selecionando registros com all()
    - Eloquent - Selecionando registros com find()
    - Eloquent - Selecionando registros com where()
    - Eloquent - Selecionando registros com whereIn() e whereNotIn()
    - Eloquent - Selecionando registros com whereBetween() e whereNotBetween()
    - Eloquent - Selecionando registros com dois ou mais Wheres
    - Eloquent - Selecionando registros com orWhere()
    - Eloquent - Selecionando registros com whereNull() e whereNotNull()
    - Eloquent - Selecionando registros com base em parâmetros do tipo data e hora
    - Eloquent - Selecionando registros com whereColumn()
    - Eloquent - Selecionando registros aplicando precedência em operações lógicas
    - Eloquent - Ordenando registros
    - Eloquent - Introdução as Collections
    - Eloquent - Collection first, last e reverse
    - Eloquent - Collection toArray e toJson
    - Eloquent - Collection pluck
    - Eloquent - Um pouco mais sobre os métodos nativos dos objetos Collection
    - Eloquent - Atualizando registros (save)
    - Eloquent - Atualizando registros (fill e save)
    - Eloquent - Atualizando registros (where e update)
    - Eloquent - Deletando registros (delete e destroy)
    - Eloquent - Deletando registros com SoftDelete
    - Eloquent - Selecionando e restaurando registros deletados com SoftDelete
    - Seeders parte 1
    - Seeders parte 2
    - Factories (semeando tabelas em massa com a dependência Faker)

</details>

<details>
    <summary><a href="./aulas/07.md">Aula 07: Trabalhando com formulários</a></summary>

    - Entendendo o objeto Request
    - Gravando os dados do formulário no banco de dados
    - Validação de campos obrigatórios (required)
    - Validação de quantidades mínimas e máximas de caracteres (min e max)
    - Repopulando o formulário (Request Old Input) parte 1
    - Repopulando o formulário (Request Old Input) parte 2
    - Ajustando o formulário de contato na rota principal
    - Refactoring do projeto Super Gestão parte 1
    - Refactoring do projeto Super Gestão parte 2
    - Validação de campos e-mail
    - Persistindo dados e redirecionando a rota
    - Validação de campos únicos (unique)
    - Customizando a apresentação dos erros de validação parte 1
    - Customizando a apresentação dos erros de validação parte 2
    - Customizando as mensagens de feedback de validação

</details>