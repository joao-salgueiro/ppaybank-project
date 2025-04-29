# PicPagar Simplificado

Projeto Laravel PicPagar, com suporte a múltiplos tipos de usuários e sistema de carteiras digitais com saldo e transações.

## 🔧 Tecnologias Utilizadas

- Laravel 11.x
- PHP 8.x
- SQLite (banco de dados)
- Laravel Breeze (autenticação simples)
- UUIDs como chaves primárias
- Relacionamentos Eloquent
- Seeders para popular dados de exemplo

## ⚙️ Funcionalidades

- Cadastro e login de usuários (`Users`) e lojistas (`Retailers`)
- Cada tipo de usuário possui uma carteira digital (`Wallet`)
- Dashboard exibindo saldo da carteira
- Seeders para popular a base com dados iniciais
- Estrutura escalável para múltiplos relacionamentos via Eloquent

## 📁 Estrutura de Models

- `Users`: usuários comuns
- `Retailers`: lojistas
- `Wallets`: armazena saldo, pode pertencer a `Users` ou `Retailers`

### Relações

- `Users` → hasOne `Wallet`
- `Retailers` → hasOne `Wallet`
- `Wallets` → belongsTo `Users` **ou** `Retailers` (via campos separados `user_id` e `retailer_id`)

## 🧪 Seeders

Para popular o banco com dados de teste:

```bash
php artisan migrate:fresh --seed
