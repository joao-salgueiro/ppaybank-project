# Simplified PicPay

Laravel PicPay project with support for **two user types** (common users and retailers) and a digital wallet system with balance and transactions.

## 🔧 Technologies Used

- Laravel 11.x
- PHP 8.x
- SQLite (database)
- Laravel Breeze (simple authentication)
- UUIDs as primary keys
- Eloquent relationships
- Seeders to populate example data

## ⚙️ Features

- Registration and login for **common users** and **retailers**
- Each user type has a **digital wallet** (Wallet)
- Dashboard showing wallet balance
- Seeders to populate the database with initial data
- Eloquent relationship structure between Users, Retailers, and Wallets

## 📁 Model Structure

- **Users**: Represents common users
- **Retailers**: Represents retailers
- **Wallets**: Stores balance and belongs to Users or Retailers

### Relationships

- **Users** → hasOne Wallet  
- **Retailers** → hasOne Wallet  
- **Wallets** → belongsTo Users **or** Retailers (via `user_id` and `retailer_id` fields)  
- **Transactions**

## 🚀 How to Run the Project

Follow these steps to set up the project in your local environment:

```bash
# 1. Install PHP dependencies
composer install

# 2. Configure environment (create .env file)
copy .env.example .env

# 3. Generate application key
php artisan key:generate

# 4. Create and populate database
php artisan migrate:fresh --seed

# 5. Install JavaScript dependencies
npm install

# 6. Compile front-end assets
npm run build

# 7. Start local server
php artisan serve
