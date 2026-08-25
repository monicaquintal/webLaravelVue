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
    <summary><a href="./aulas/001e002.md">Aula 01: Introdução</a></summary>

    - Configurando o ambiente de desenvolvimento
    - Canais de comunicação

</details>

<details>
    <summary><a href="./aulas/001e002.md">Aula 02: Preparando-se para o desenvolvimento</a></summary>

    - Instalando o Visual Studio Code
    - Instalando o PHP
    - Instalando o Composer
    - Iniciando um projeto Laravel (Via Composer)
    - Instalando o Laravel Installer
    - Iniciando um projeto Laravel (Via Lavarel Installer)
    
</details>

<details>
    <summary><a href="./aulas/003.md">Aula 03: Introdução às Rotas, Controllers e Views</a></summary>

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
    <summary><a href="./aulas/004.md">Aula 04: Avançando com Rotas (Routes)</a></summary>

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
    <summary><a href="./aulas/005.md">Aula 05: Avançando com Controladores (Controllers) e Visualizações (Views)</a></summary>

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
    <summary><a href="./aulas/006.md">Aula 06: Models, Migrations, Seeders, Factories, Banco de Dados, Tinker e Eloquent ORM</a></summary>

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
    <summary><a href="./aulas/007.md">Aula 07: Trabalhando com formulários</a></summary>

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

<details>
    <summary><a href="./aulas/008.md">Aula 08: Middlewares</a></summary>

    - Introdução aos Middlewares
    - Criando meu primeiro middleware
    - Criando o model LogAcesso e sua migration
    - Implementando middlewares no método construtor dos controllers
    - Implementando um middleware para todas as rotas
    - Apelidando middlewares
    - Encadeamento de middlewares (criando um middleware de autenticação)
    - Adicionando middlewares a um grupo de rotas
    - Passando parâmetros para o middleware
    - Manipulando a resposta de uma requisição via middleware

</details>

<details>
    <summary><a href="./aulas/009.md">Aula 09: Autenticação de usuários (revisando e praticando os assuntos abordados)</a></summary>

    - Implementando o formulário de Login
    - Recebendo os parâmetros de usuário e senha
    - Validando a existência do usuário e senha no Banco de Dados
    - Redirect com envio de parâmetros - Apresentando mensagem de erro de login
    - Iniciando a Superglobal Session e validando o acesso a rotas protegidas
    - Implementando o menu de opções da área protegida da aplicação
    - Adicionando a função logout

</details>

<details>
    <summary><a href="./aulas/010.md">Aula 10: Finalizando o projeto Super Gestão</a></summary>

    - Implementando o cadastro de fornecedores parte 1
    - Implementando o cadastro de fornecedores parte 2 (inclusão de registros)
    - Implementando o cadastro de fornecedores parte 3 (pesquisa de registros)
    - Implementando o cadastro de fornecedores parte 4 (atualização de registros)
    - Paginação de registros
    - Paginação de registros - Métodos count(), total(), firstItem() e lastItem()
    - Implementando o cadastro de fornecedores parte 5 (remoção de registros)
    - Controladores com resources
    - Criando rotas associadas aos resources de um controlador
    - Entendo os métodos HTTP Get, Post, Delete, Put e Patch
    - Implementando o cadastro de produtos parte 1 (index)
    - Implementando o cadastro de produtos parte 2 (create)
    - Implementando o cadastro de produtos parte 3 (store)
    - Implementando o cadastro de produtos parte 4 (validando dados)
    - Implementando o cadastro de produtos parte 5 (show)
    - Implementando o cadastro de produtos parte 6 (edit)
    - Implementando o cadastro de produtos parte 7 (update)
    - Implementando o cadastro de produtos parte 8 (delete)
    - Modificando a forma de edição de registros parte 1
    - Modificando a forma de edição de registros parte 2
    - Relacionamentos 1x1, 1xN e NxN com Eloquent ORM
    - Eloquent ORM 1 para 1 - Implementando produto detalhes parte 1
    - Eloquent ORM 1 para 1 - Implementando produto detalhes parte 2
    - Eloquent ORM 1 para 1 - Implementando produto detalhes parte 3
    - Eloquent ORM 1 para 1 - Exibindo os detalhes do produto
    - Eloquent ORM 1 para 1 - Estabelecendo relacionamento 1x1 (hasOne)
    - Eloquent ORM 1 para 1 - Exibindo informações do produto (belongsTo)
    - Eloquent ORM 1 para 1 - Utilizando hasOne e belongsTo com nomes não padronizados
    - Extra - Lazy Loading vs Eager Loading parte 1
    - Extra - Lazy Loading vs Eager Loading parte 2
    - Eloquent ORM 1 para N - Criando o relacionamento entre Fornecedor e Produto
    - Eloquent ORM 1 para N - Exibindo informações do fornecedor (belongsTo)
    - Extra - Exibindo mais informações do fornecedor
    - Eloquent ORM 1 para N - Estabelecendo relacionamento 1xN (hasMany)
    - Eloquent ORM 1 para N - Associando fornecedores a produtos (Store e Update)
    - Eloquent N para N - Implementando os requisitos para o relacionamento
    - Criando os controladores e rotas para clientes, pedidos e pedidos produtos
    - Implementando a tela de listagem de clientes
    - Implementando a tela de cadastro de clientes
    - Implementando a tela de listagem de pedidos
    - Implementando a tela de cadastro de pedidos
    - Implementando a tela de cadastro de produtos para um determinado pedido parte 1
    - Eloquent ORM N para N - Implementando o relacionamento belongsToMany
    - Eloquent ORM N para N - Praticando um pouco mais o relacionamento belongsToMany
    - Relacionamento N para N - Colunas pivô da tabela de relacionamento (Pivot)
    - Relacionamento N para N - Inserindo registros por meio do relacionamento
    - Relacionamento N para N - Removendo o relacionamento
    - Extra - Removendo o relacionamento pela PK de pedidos_produtos

</details>

<details>
    <summary><a href="./aulas/011.md">Aula 11: Autenticação WEB (Session) e Bootstrap (CSS)</a></summary>

    - Iniciando o projeto Controle de Tarefas
    - [LINUX] Instalando o NodeJS e o NPM
    - Instalando o Laravel UI
    - Entendendo o pacote UI e iniciando a autenticação WEB nativa do Laravel
    - Configurando a conexão com o banco de dados e executando as migrations padrões
    - Registrando novos usuários e efetuando o login na aplicação
    - Validando campos de confirmação (confirmed) e mudando regras de senhas
    - Entendendo como a rota Home está protegida
    - Criando o Model e o Controller para Tarefa
    - Implementando o middleware auth
    - Verificando se o usuário está logado dentro dos métodos do Controller

</details>

<details>
    <summary><a href="#">Aula 12: Implementando o envio de e-mails e a exportação de arquivos XLSX, CSV e PDF</a></summary>
</details>

<details>
    <summary><a href="./aulas/013.md">Aula 13: Vue.JS para iniciantes</a></summary>

    - Introdução ao Vue.JS
    - Instalando as ferramentas de desenvolvimento
    - Iniciando o nosso primeiro front-end com Vue
    - Primeiro App em Vue (instância de Vue e o double mustache)
    - Explorando um pouco mais a propriedade data
    - Methods - Adicionando os nossos primeiros métodos a instância Vue
    - Methods - Recuperando atributos do data
    - Methods - O contexto léxico das arrow functions e o conflito de nomes
    - Diretiva V-Bind - Realizando o bind de atributos de tags HTML
    - Diretiva V-Bind - Sintaxe sugar e a sobreposição/encadeamento de valores
    - Utilizando expressões no data binding
    - Diretiva V-On - Manipulando eventos
    - Methods - Passando parâmetros para os métodos
    - Diretiva V-On - Capturando os dados do evento ($event)
    - Hands on - Praticando com data, methods, template string, v-bind e v-on
    - Diretiva V-On - Implementando modificadores
    - Selecionando elementos HTML e suas propriedades por ID
    - Diretiva V-If - Renderização condicional de elementos HTML
    - Diretiva V-Show - Exibição condicional de elementos HTML
    - Diretiva V-HTML - Injetando elementos HTML
    - Diretiva V-Text - Injetando textos
    - Diretiva V-Once - Evitando que elementos HTML sejam renderizados novamente
    - Diretiva V-For - Implementando laços de repetição parte 1
    - Diretiva V-For - Implementando laços de repetição parte 2
    - Renderização de listas com o atributo Key
    - Diretiva V-For - Implementando laços de repetição parte 3
    - Diretiva V-For - Implementando laços de repetição parte 4
    - Trabalhando com a tag Template para renderização condicional e listas
    - Trabalhando com propriedades computadas (computed) parte 1
    - Trabalhando com propriedades computadas (computed) parte 2
    - Diretiva V-Model - Sincronizando inputs com atributos (two-way-data binding)
    - Diretiva V-Model - Praticando um pouco mais o two-way-data binding
    - Trabalhando com propriedades observadoras (watch)

</details>

<details>
    <summary><a href="#">Aula 14: APIs, WebServices e Rest</a></summary>
</details>

<details>
    <summary><a href="#">Aula 15: Autenticação API - Autorização JWT (JSON Web Token)</a></summary>
</details>

<details>
    <summary><a href="#">Aula 16: Aplicação Full Stack Back-end API Laravel com Front-end Vue.JS</a></summary>
</details>

<details>
    <summary><a href="#">Aula 17: Armazenamento em memória com Redis (Laravel Cache)</a></summary>
</details>