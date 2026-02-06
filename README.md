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

👨‍🍳 Chef Dashboard
![Chef Orders](./systeme-MAT3AMI/dashboard/chef/dash-chefs-orders.png)

🚚 Delivery Dashboard
![Delivery Dashboard](./systeme-MAT3AMI/dashboard/delivery/dash-delivery.png)

👑 Owner Dashboard (Management)
![Ingredient Management](./systeme-MAT3AMI/dashboard/owner/dash-ingredient.png)
![User Registration](./systeme-MAT3AMI/dashboard/owner/dash-register.png)
![Reset Password](./systeme-MAT3AMI/dashboard/owner/dash-reset-password.png)
![Create Supplier](./systeme-MAT3AMI/dashboard/owner/dash-suppliers-create.png)
![Show Supplier](./systeme-MAT3AMI/dashboard/owner/dash-suppliers-show.png)
![Suppliers List](./systeme-MAT3AMI/dashboard/owner/dash-suppliers.png)
![User Login](./systeme-MAT3AMI/dashboard/owner/dash-user-login.png)
![Create User](./systeme-MAT3AMI/dashboard/owner/dash-users-create.png)
![Edit User](./systeme-MAT3AMI/dashboard/owner/dash-users-edit.png)
![Users List](./systeme-MAT3AMI/dashboard/owner/dash-users.png)

🍽️ Waiter Dashboard
![Create Table Order](./systeme-MAT3AMI/dashboard/waiter/dash-tables-orders-create.png)
![Tables Overview](./systeme-MAT3AMI/dashboard/waiter/dash-tables.png)

🌐 Restaurant Website for online orders
![Restaurant Home](./systeme-MAT3AMI/template/restaurant-home.png)
![Menu Page](./systeme-MAT3AMI/template/resaurant-menu.png)
![Food Shop](./systeme-MAT3AMI/template/restaurant-food-shop.png)
![Shopping Cart](./systeme-MAT3AMI/template/restaurant-shopping-card.png)
![Checkout](./systeme-MAT3AMI/template/restaurant-checkout.png)
![Contact Us](./systeme-MAT3AMI/template/restaurant-contact.png)
![Login](./systeme-MAT3AMI/template/restaurant-login.png)
![Sign Up](./systeme-MAT3AMI/template/restaurant-sign-up.png)



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
