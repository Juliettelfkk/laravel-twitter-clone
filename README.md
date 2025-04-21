<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Laravel Twitter Clone 🐦

A social media web application built with **Laravel** that mimics core features of **Twitter**. This clone showcases authentication, tweeting, following, liking, and more — built with clean MVC architecture and modern development practices.

---

## 🛠️ Installation

1. Clone the repo and move into the project:
   ```bash
   git clone https://github.com/Juliettelfkk/laravel-twitter-clone.git
   cd laravel-twitter-clone
   ```

2. Install backend and frontend dependencies:
   ```bash
   composer install
   npm install
   ```

3. Create `.env` file and generate app key:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Set up your database:
   - Open `.env` and update your DB settings (`DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`)
   - Then run:
     ```bash
     php artisan migrate
     ```

5. Start the development server:
   ```bash
   php artisan serve
   ```


## 🔧 Features

- User Authentication (Login, Register, Logout)
- Tweet: Create, Edit, Delete
- Like/Unlike Tweets
- Follow/Unfollow Users
- User Profiles & Timelines

---

## 🚀 Tech Stack

- PHP (Laravel Framework)
- MySQL
- Blade Templating Engine
- TailwindCSS / Bootstrap
- Git & GitHub

---

## 📸 Screenshots

### 🏠 Home Page
![Home Page](public/screenshots/image2.png)

### 👤 Profile Page
![Profile Page](public/screenshots/image3.png)

### 📝 Tweet Page
![Tweet Page](public/screenshots/image1.png)

---

## 📚 Built With Laravel

Powered by the Laravel framework and its modern features:

- [Routing](https://laravel.com/docs/routing)
- [Eloquent ORM](https://laravel.com/docs/eloquent)
- [Migrations](https://laravel.com/docs/migrations)
- [Queues](https://laravel.com/docs/queues)
- [Broadcasting](https://laravel.com/docs/broadcasting)
- [Blade Templates](https://laravel.com/docs/blade)

---

## 🪪 License

This project uses the [MIT License](https://opensource.org/licenses/MIT).

