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
- Estrutura de relacionamentos Eloquent entre `Users`, `Retailers` e `Wallets`

## 📁 Estrutura de Models

- **`Users`**: Representa usuários comuns
- **`Retailers`**: Representa lojistas
- **`Wallets`**: Armazena saldo e pertence a `Users` ou `Retailers`

### Relações

- **`Users`** → `hasOne` `Wallet`
- **`Retailers`** → `hasOne` `Wallet`
- **`Wallets`** → `belongsTo` `Users` **ou** `Retailers` (via campos `user_id` e `retailer_id`)

## 🧪 Seeders

Para popular o banco com dados de teste, execute o comando abaixo:

```bash
php artisan migrate:fresh --seed
