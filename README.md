# Laravel Vue3 SPA Starter

**Laravel Vue3 SPA Starter** — это современный стартовый шаблон для создания одностраничных приложений (SPA) на базе [Laravel](https://laravel.com/) и [Vue 3](https://vuejs.org/). Он объединяет мощь backend-фреймворка Laravel и гибкость frontend-фреймворка Vue.js, чтобы дать разработчикам удобную, масштабируемую и производительную платформу для создания веб-приложений.

---

## 🚀 Особенности

- **Современный стек:** Laravel 10+, Vue 3, TypeScript
- **SPA-архитектура:** Быстрый и отзывчивый интерфейс без перезагрузки страницы
- **Готовая аутентификация:** JWT или Sanctum, регистрация и вход
- **Гибкая структура каталога:** Разделение backend и frontend
- **Tailwind CSS:** Для быстрой стилизации UI
- **API-first подход:** Чистый REST API для фронта
- **Docker-ready:** Легкий запуск в контейнерах
- **Линтеры и форматтеры:** ESLint, Prettier, PHP_CodeSniffer

---

## 📦 Быстрый старт

### 1. Клонируйте репозиторий

```bash
git clone https://github.com/webBeaver777/laravel-vue3-spa-starter.git
cd laravel-vue3-spa-starter
```

### 2. Установите зависимости

#### Backend (Laravel)

```bash
cd backend
composer install
cp .env.example .env
php artisan key:generate
```

#### Frontend (Vue3)

```bash
cd ../frontend
npm install
```

### 3. Запустите приложение

#### Backend

```bash
php artisan serve
```

#### Frontend

```bash
npm run dev
```

---

## 🗂️ Структура проекта

```
laravel-vue3-spa-starter/
├── backend/      # Laravel API
└── frontend/     # Vue 3 SPA
```

---

## ⚙️ Основные технологии

- **Laravel** — Backend, REST API, аутентификация, бизнес-логика
- **Vue 3 + Vite** — Frontend, SPA, реактивный UI
- **TypeScript** — Надежный и масштабируемый JS-код
- **Tailwind CSS** — Современная стилизация
- **Docker** — Легкая разработка и деплой

---

## 🛡️ Аутентификация

- JWT или Sanctum (выберите в настройках backend)
- Примеры регистрации, входа, выхода
- Защита приватных маршрутов на фронте

---

## 📝 Скрипты

### Backend

- `php artisan migrate` — миграции базы данных
- `php artisan test` — запуск тестов

### Frontend

- `npm run dev` — запуск SPA в режиме разработки
- `npm run build` — продакшн-сборка
- `npm run lint` — проверка кода

---

## 📖 Документация

- [Официальная документация Laravel](https://laravel.com/docs)
- [Официальная документация Vue 3](https://vuejs.org/guide/)
- [TypeScript Handbook](https://www.typescriptlang.org/docs/)

---

## 🤝 Вклад

Приветствуются любые pull-request и предложения по улучшению! Открывайте [issues](https://github.com/webBeaver777/laravel-vue3-spa-starter/issues) для обсуждения идей или багов.

---

## 📄 Лицензия

Этот проект распространяется под лицензией MIT.

---

**Создано с ❤️ для разработчиков. Удачи в создании вашего SPA!**
