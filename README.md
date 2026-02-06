# 🍽 Restaurant Management System (Laravel)

## 📌 Project Overview
This project is a full-stack restaurant management system developed with Laravel as my **graduation project at OFPPT**.

The system helps manage restaurant operations such as employees, meals, tables, orders, suppliers, ingredients, and billing.
It also includes an online ordering website for clients.

The project focuses on real-world business logic, database design, and structured backend development.

---

## 🚀 Features

### 👨‍🍳 Restaurant Administration
- Employee management
- User roles and authentication
- Category and meal management
- Ingredient and supplier management
- Stock and ingredient tracking

### 🪑 Restaurant Operations
- Table management
- Table orders
- Client orders
- Automatic bill generation
- Order–meal relationships

### 🧾 Billing System
- Client bills
- Table bills
- Supplier bills
- Order history tracking

### 🌐 Client Website
- Online menu browsing
- Client registration
- Online food ordering
- Order tracking

---

## 🧰 Tech Stack
- **Backend:** Laravel (PHP)
- **Frontend:** Blade, Bootstrap
- **Database:** MySQL
- **Authentication:** Laravel Auth
- **Architecture:** MVC
- **ORM:** Eloquent

---

## 🗂 Database Design (Key Tables)
- Users
- Employees
- Clients
- Tables
- Categories
- Meals
- Ingredients
- Suppliers
- Orders (clients / tables / suppliers)
- Bills
- Pivot tables for many-to-many relations

The database was designed to reflect real restaurant workflows and relationships.

---

## 📷 Screenshots

### Dashboard
![Details](avocat_screenshots/details.png)

### Client Side
![Homepage](avocat_screenshots/home.png)



---

## ⚙️ Installation & Setup

```bash
git clone https://github.com/your-username/restaurant-management-system.git
cd restaurant-management-system
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
