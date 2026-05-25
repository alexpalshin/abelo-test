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

## Quick Start with /Docker

1. **Clone / copy the project** into a directory.
2. Make sure you have a `.env` file in the root.
3. Adjust `.env` file with your local MySQL credentials.
4. Run `npm run sass` to compile CSS files, or `npm run sass:watch` to track changes.
5. Head your browser to the project folder i.e. `localhost/abelo-test`.