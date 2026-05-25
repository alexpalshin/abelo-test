# Simple PHP Blog

A lightweight, fully functional blog built with **PHP 8.1**, **MySQL**, and **Smarty** — no frameworks.  
Features categories, articles, pagination, sorting.

---

## Features

- **Categories** – each with name, description, and article count
- **Articles** – title, description, full text, image, views, publishing date
- **Home page** – shows categories with the 3 latest posts each
- **Category page** – article list with sorting (by date or views) and pagination
- **Article page** – full content, view counter, related posts (same categories)
- **Database seeder** – CLI script to populate test data
- **SCSS** – compiled with npm scripts

---

## Technology Stack

- **PHP** 8.1+
- **MySQL** 8.0
- **Smarty** 4 (template engine)
- **SCSS** (styles)
- **Composer** for PHP dependencies
- **npm** for front‑end tooling
- **Faker** (for seeding)

---

## Requirements

- Local PHP 8.1+ with `pdo_mysql`, MySQL server, Composer, Node.js + npm

---

## Local installation

1. **Clone / copy the project** into a directory.
2. Create a MySQL database (e.g., blog) and import the schema: `mysql -u root -p blog < sql/schema.sql`.
3. Copy .env.example to .env and fill in your database credentials.
4. Install PHP dependencies: `composer install`.
5. Install Node dependencies and compile SCSS: `npm install`, `npm run sass`.
6. Run `npm run sass:watch` to track changes.
7. Seed the database: `php seeds/seed.php`.
5. Open `http://localhost/abelo-test` in your browser.