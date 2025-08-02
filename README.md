# Laravel Inertia Starter

Starter kit for Laravel + Inertia + Vue 3 + TypeScript + Pinia + Tailwind.

## 🧱 Stack

- Laravel 12
- Inertia.js
- Vue 3 (Composition API + TypeScript)
- Pinia
- Tailwind CSS
- Vite
- PNPM

## 🚀 Features

- Basic auth via Laravel Breeze
- Dashboard layout
- User table with filtering and pagination (soon)
- Clean project structure
- Type-safe frontend

## ⚙️ Setup

```bash
git clone git@github.com:webBeaver777/laravel-inertia-starter.git
cd laravel-inertia-starter
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate
pnpm install && pnpm run dev
php artisan serve
```
