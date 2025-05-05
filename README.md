# PicPagar Simplificado

Projeto Laravel PicPagar, com suporte a **dois tipos de usuários** (usuários comuns e lojistas) e sistema de carteiras digitais com saldo e transações.

## 🔧 Tecnologias Utilizadas

- Laravel 11.x
- PHP 8.x
- SQLite (banco de dados)
- Laravel Breeze (autenticação simples)
- UUIDs como chaves primárias
- Relacionamentos Eloquent
- Seeders para popular dados de exemplo

## ⚙️ Funcionalidades

- Cadastro e login de **usuários comuns** e **lojistas**
- Cada tipo de usuário possui uma **carteira digital** (Wallet)
- Dashboard exibindo saldo da carteira
- Seeders para popular a base com dados iniciais
- Estrutura de relacionamentos Eloquent entre Users, Retailers e Wallets

## 📁 Estrutura de Models

- **Users**: Representa usuários comuns
- **Retailers**: Representa lojistas
- **Wallets**: Armazena saldo e pertence a Users ou Retailers

### Relações

- **Users** → hasOne Wallet  
- **Retailers** → hasOne Wallet  
- **Wallets** → belongsTo Users **ou** Retailers (via campos `user_id` e `retailer_id`)  
- **Transactions**

## 🚀 Como Rodar o Projeto

Siga estes passos para configurar o projeto em seu ambiente local:

```bash
# 1. Instalar dependências PHP
composer install

# 2. Configurar ambiente (criar arquivo .env)
copy .env.example .env

# 3. Gerar chave da aplicação
php artisan key:generate

# 4. Criar e popular banco de dados
php artisan migrate:fresh --seed

# 5. Instalar dependências JavaScript
npm install

# 6. Compilar assets front-end
npm run build

# 7. Iniciar servidor local
php artisan serve
