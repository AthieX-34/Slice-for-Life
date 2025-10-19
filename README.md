Slice-for-Life 🍕

An online pizzeria built with Laravel (PHP)

Slice-for-Life is a modern e-commerce web app for browsing pizzas, customizing orders, managing a cart/checkout, and tracking orders in real time. It’s designed to be developer-friendly and production-ready.

⸻

Features
	•	🍕 Menu browsing with categories & search
	•	✏️ Pizza customization (size, crust, toppings)
	•	🛒 Cart & checkout flow with address & delivery options
	•	👤 Auth (register/login, password reset)
	•	📦 Order management & status updates (email notifications)
	•	🖼️ Media management for product photos
	•	🛠️ Admin panel for products, prices, coupons & orders
	•	📱 Responsive UI (Blade)
	•	🔐 CSRF protection, input validation, rate limiting

⸻

Tech Stack
	•	Backend: Laravel 10/11 (PHP 8.2+)
	•	Frontend: Blade (optional: Livewire/Vue/Alpine)
	•	DB: MySQL/MariaDB or PostgreSQL
	•	Cache/Queue (optional): Redis
	•	Mail: SMTP / Mailgun / SES

⸻

Requirements
	•	PHP 8.2+ with extensions: mbstring, openssl, pdo, tokenizer, xml, ctype, json, curl, fileinfo
	•	Composer 2+
	•	Node.js 18+ & npm 9+
	•	MySQL 8+ / MariaDB 10.6+ / PostgreSQL 13+
	•	Redis (optional, for queues/cache)

⸻

Quick Start

# 1) Clone
git clone https://github.com/<your-org>/slice-for-life.git
cd slice-for-life

# 2) Install deps
composer install
npm install

# 3) Environment
cp .env.example .env
php artisan key:generate

# 4) Configure DB in .env, then:
php artisan migrate --seed   # seeds demo pizzas, toppings, an admin user (optional)
php artisan storage:link     # for product images

# 5) Build assets & run
npm run dev                  # or: npm run build for production
php artisan serve            # http://127.0.0.1:8000

# Common Artisan Commands
php artisan tinker
php artisan migrate:fresh --seed
php artisan queue:work           # if using queues
php artisan schedule:work        # or schedule:run via cron
php artisan make:model Pizza -mcr

# Maintainers
    Moses (KodeKnack) & Junaid. 
Happy hacking & buon appetito! 🍕
