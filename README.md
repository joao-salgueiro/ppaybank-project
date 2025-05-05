PicPagar Simplificado
Projeto Laravel PicPagar, com suporte a dois tipos de usuários (usuários comuns e lojistas) e sistema de carteiras digitais com saldo e transações.

🔧 Tecnologias Utilizadas
Laravel 11.x
PHP 8.x
SQLite (banco de dados)
Laravel Breeze (autenticação simples)
UUIDs como chaves primárias
Relacionamentos Eloquent
Seeders para popular dados de exemplo
⚙️ Funcionalidades
Cadastro e login de usuários comuns e lojistas
Cada tipo de usuário possui uma carteira digital (Wallet)
Dashboard exibindo saldo da carteira
Seeders para popular a base com dados iniciais
Estrutura de relacionamentos Eloquent entre Users, Retailers e Wallets
📁 Estrutura de Models
Users: Representa usuários comuns
Retailers: Representa lojistas
Wallets: Armazena saldo e pertence a Users ou Retailers
Relações
Users → hasOne Wallet
Retailers → hasOne Wallet
Wallets → belongsTo Users ou Retailers (via campos user_id e retailer_id)
Transactions
🧪 Seeders
Para popular o banco com dados de teste, execute o comando abaixo:

bash

Copiar
php artisan migrate:fresh --seed
🚀 Como Rodar o Projeto
Siga os passos abaixo para configurar e executar o projeto localmente:

Instalar dependências PHP:
bash

Copiar
composer install
Este comando instala todas as dependências do Laravel e bibliotecas PHP necessárias, listadas no arquivo composer.json.
Configurar o arquivo de ambiente:
bash

Copiar
copy .env.example .env
Copia o arquivo de exemplo .env.example para .env, que contém configurações como conexão com o banco de dados e outras variáveis de ambiente.
Gerar a chave da aplicação:
bash

Copiar
php artisan key:generate
Gera uma chave única para a aplicação Laravel, usada para segurança em sessões e criptografia.
Executar as migrações e seeders:
bash

Copiar
php artisan migrate:fresh --seed
Cria as tabelas no banco de dados SQLite e popula com dados de teste (usuários, lojistas e carteiras) para facilitar o desenvolvimento.
Instalar dependências JavaScript:
bash

Copiar
npm install
Instala as dependências de front-end, como Vite e outros pacotes JavaScript, listados no arquivo package.json.
Compilar assets de front-end:
bash

Copiar
npm run build
Compila os arquivos JavaScript e CSS usando o Vite, gerando os assets otimizados para a aplicação.
Iniciar o servidor local:
bash

Copiar
php artisan serve
Inicia o servidor de desenvolvimento do Laravel, geralmente acessível em http://localhost:8000.
