
# Installation Guide

This guide explains how to install, configure, and run the Laravel Employee CRUD application in a local development environment.

## Prerequisites

Make sure the following software is installed:

| Requirement | Version |
|---|---|
| PHP | 8.3 or later |
| Composer | Latest stable version |
| Database | SQLite or MySQL |

### Required PHP Extensions

Ensure that the following PHP extensions are enabled:

- Ctype
- cURL
- DOM
- Fileinfo
- Filter
- Hash
- Mbstring
- OpenSSL
- PDO
- Session
- Tokenizer
- XML
- PDO SQLite (for SQLite)
- PDO MySQL (for MySQL)

Node.js and npm are not required to run the current application because its Blade views use standard HTML without Vite asset integration.

## Installation Steps

### 1. Clone the Repository

```bash
git clone https://github.com/DorkMeas/laravel-employee-crud.git
```

Navigate to the project directory:

```bash
cd laravel-employee-crud
```

### 2. Install PHP Dependencies

Install the Laravel dependencies using Composer:

```bash
composer install
```

### 3. Configure Environment Variables

Create your local environment file from the example:

```bash
cp .env.example .env
```

On Windows PowerShell:

```powershell
Copy-Item .env.example .env
```

### 4. Generate Application Key

Generate the application encryption key:

```bash
php artisan key:generate
```

### 5. Configure the Database

The project uses SQLite by default.

#### Option A: SQLite (Recommended)

Create the SQLite database file if it does not already exist.

On Windows PowerShell:

```powershell
New-Item -ItemType File -Path database/database.sqlite -Force
```

On Linux or macOS:

```bash
touch database/database.sqlite
```

The default Laravel database configuration already uses SQLite. You can keep the following setting in `.env`:

```env
DB_CONNECTION=sqlite
```

The database file is resolved from `database/database.sqlite` by Laravel's default configuration.

#### Option B: MySQL

Create a database in MySQL:

```sql
CREATE DATABASE laravel_employee_crud;
```

Update your `.env` file:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_employee_crud
DB_USERNAME=root
DB_PASSWORD=
```

Replace the username and password with your actual database credentials.

### 6. Run Database Migrations

Execute the migrations:

```bash
php artisan migrate
```

This creates the required database tables, including:

- `users`
- `cache`
- `jobs`
- `employees`

The employee migration creates the table used by the CRUD functionality.

### 7. Start the Development Server

Run the Laravel development server:

```bash
php artisan serve
```

### 8. Access the Application

Open your browser and visit:

```text
http://127.0.0.1:8000
```

The application redirects the root URL to the employee listing page.

## Useful Artisan Commands

| Command | Description |
|---|---|
| `php artisan serve` | Start the development server |
| `php artisan migrate` | Run database migrations |
| `php artisan migrate:status` | Check migration status |
| `php artisan route:list` | Display registered routes |
| `php artisan optimize:clear` | Clear application caches |
| `php artisan test` | Run automated tests |

## Troubleshooting

### Application Key Missing

Generate a new application key:

```bash
php artisan key:generate
```

### Database Connection Error

Check the following:

- Ensure the database file exists when using SQLite.
- Verify your database credentials when using MySQL.
- Confirm that the database server is running.
- Check that the required PDO extension is enabled.

### Migration Errors

Check migration status:

```bash
php artisan migrate:status
```

Review the database connection and existing table structure before attempting to run migrations again.

### Application Configuration Issues

Clear cached configuration and application files:

```bash
php artisan optimize:clear
```

## Important Notes

- Do not commit your `.env` file to the repository.
- Keep database credentials private.
- Do not use `php artisan migrate:fresh` on a database containing data you want to preserve.
- Node.js and npm are not necessary for running the current application.
- The repository contains Vite-related configuration, but the current employee Blade views do not depend on the Vite asset pipeline.

## Related Documentation

- [Project Overview](project-overview.md)
- [Laravel Documentation](https://laravel.com/docs)
