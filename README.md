# Task Manager Application

A simple Task Manager application built with Laravel that allows users to perform basic CRUD operations on tasks.

---

## Table of Contents
1. [Prerequisites](#prerequisites)
2. [Setup Instructions](#setup-instructions)
3. [Database Setup](#database-setup)
4. [Model Creation](#model-creation)
5. [Controller Creation](#controller-creation)
6. [Routing](#routing)
7. [Views](#views)
8. [Basic Validation](#basic-validation)
9. [User Interface](#user-interface)
10. [Running the Application](#running-the-application)

---

## Prerequisites
- PHP 8.0 or higher
- Composer
- Laravel 8.x or higher
- SQLite or any other supported database

---

## Setup Instructions

### Step 1: Install Composer
1. Download and install Composer from [getcomposer.org](https://getcomposer.org/).
2. Verify installation:
   ```bash
   composer --version
   ```

---

### Step 2: Create a New Laravel Project
1. Create a Laravel project:
   ```bash
   composer create-project --prefer-dist laravel/laravel task-manager
   ```
2. Navigate to the project directory:
   ```bash
   cd task-manager
   ```

---

## Database Setup

### Step 3: Set Up the Database
1. Configure the `.env` file for SQLite:
   ```env
   DB_CONNECTION=sqlite
   DB_DATABASE=database/database.sqlite
   ```
2. Create the SQLite database file:
   ```bash
   touch database/database.sqlite
   ```

---

### Step 4: Create Database Migration
1. Create a migration for the `tasks` table:
   ```bash
   php artisan make:migration create_tasks_table
   ```
2. Update the migration file to include `title`, `description`, `completed`, and timestamps.
3. Run the migration:
   ```bash
   php artisan migrate
   ```

---

## Model Creation

### Step 5: Create the Task Model
1. Create the `Task` model:
   ```bash
   php artisan make:model Task
   ```

---

## Controller Creation

### Step 6: Create the Task Controller
1. Create the `TaskController`:
   ```bash
   php artisan make:controller TaskController
   ```
2. Implement CRUD methods (`index`, `create`, `store`, `edit`, `update`, `destroy`) in the controller.

---

## Routing

### Step 7: Set Up Routes
1. Define routes in `routes/web.php`:
   ```php
   use App\Http\Controllers\TaskController;

   Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
   Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
   Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
   Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
   Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
   Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');
   ```

---

## Views

### Step 8: Create Blade Views
1. Create `index.blade.php` to display all tasks.
2. Create `create.blade.php` for adding new tasks.
3. Create `edit.blade.php` for updating tasks.
4. Use Tailwind CSS for styling.

---

## Basic Validation

### Step 9: Implement Validation
1. Add validation rules in the `store` and `update` methods of `TaskController`:
   - `title`: Required, max 255 characters.
   - `description`: Optional.
   - `completed`: Boolean.

---

## User Interface

### Step 10: Use Tailwind CSS for Styling
1. Ensure Tailwind CSS is installed and configured.
2. Include the compiled CSS file in `layouts/app.blade.php`.

---

## Running the Application

### Step 11: Start the Development Server
1. Run the Laravel development server:
   ```bash
   php artisan serve
   ```
2. Access the application at `http://localhost:8000/tasks`.

---

This `README.md` provides a concise guide to setting up and running the Task Manager application. For detailed code, refer to the respective files in the project.
