# Laravel Product CRUD API with AJAX Frontend

A full-stack application demonstrating **RESTful API** development using **Laravel** and a responsive Single Page Application (SPA) frontend using **jQuery AJAX** and **Bootstrap 5**.

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)
![jQuery](https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white)

## 🚀 Features

- **REST API Backend**: Built with Laravel Controllers and Routes.
- **AJAX Frontend**: Create, Read, Update, and Delete (CRUD) without page refreshes.
- **Modern UI**: Styled with **Bootstrap 5** and **FontAwesome**.
- **Interactive Alerts**: Uses **SweetAlert2** for visual feedback.
- **Database**: MySQL integration with migrations.

## 🛠️ Tech Stack

- **Backend**: PHP, Laravel 8.x, MySQL
- **Frontend**: HTML5, Blade Templates, JavaScript (jQuery), Bootstrap 5
- **Tools**: Postman (for API testing), Composer

## 📦 Installation Guide

Follow these steps to run the project locally.

### 1. Clone the Repository
```bash
git clone https://github.com/your-username/repo-name.git
cd repo-name
```

### 2. Install Dependencies
```bash
composer install
```

### 3. Environment Setup
Rename `.env.example` to `.env` and configure your database settings.
```bash
cp .env.example .env
php artisan key:generate
```

**Configure `.env` file:**
```ini
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sanctum-api
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Database Migration
Create the database tables.
```bash
php artisan migrate
```

### 5. Run the Application
Start the local development server.
```bash
php artisan serve
```

Go to `http://localhost:8000` to view the application.

## 🔗 API Endpoints

| Method | Endpoint | Description |
| :--- | :--- | :--- |
| `GET` | `/api/products` | List all products |
| `POST` | `/api/products` | Create a new product |
| `GET` | `/api/products/{id}` | Get a single product |
| `PUT` | `/api/products/{id}` | Update a product |
| `DELETE` | `/api/products/{id}` | Delete a product |

## 📝 Usage

1. **Dashboard**: View the list of all products.
2. **Add Product**: Click "Add New Product", fill in the form, and save.
3. **Edit**: Click the edit icon to modify product details.
4. **Delete**: Click the trash icon to remove a product (includes confirmation).

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
# laravel-crud-with-api
# laravel-crud-with-api
