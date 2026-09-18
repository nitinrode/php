# 🍔 Online Food Ordering System

## 📌 Project Overview

The **Online Food Ordering System** is a web-based food ordering application developed using **PHP and MariaDB** and deployed on **AWS EC2**.

The system allows customers to:

- Register an account
- Login securely
- View food items
- Add food to cart
- Checkout
- Place an order
- View order history

The application uses **Nginx + PHP-FPM** as the web server stack and **MariaDB** as the database.

---

## ⭐ Key Features

### 👤 User Management
- User Registration
- User Login
- Session-based authentication
- Password hashing using PHP

### 🍕 Food Menu
- Dynamic food menu
- Food name
- Food description
- Food price
- Food items stored in MariaDB

### 🛒 Shopping Cart
- Add food items to cart
- Quantity handling
- Automatic subtotal calculation
- Automatic total calculation

### 💳 Checkout & Orders
- Checkout page
- Place Order functionality
- Order data stored in database
- Order items stored separately
- Order status
- Order date and time

### 📋 Order History
- Users can view their previous orders
- Shows food name, quantity, price, total amount and order status

### ☁️ AWS Deployment
- Application hosted on AWS EC2
- Amazon Linux 2023
- Nginx Web Server
- PHP-FPM
- MariaDB

---

## 🔄 Complete Project Flow

```text
Online Food Ordering System
            ↓
        Registration
            ↓
           Login
            ↓
        Food Menu
            ↓
       Add to Cart
            ↓
           Cart
            ↓
         Checkout
            ↓
       Place Order
            ↓
        My Orders
            ↓
        MariaDB
```

---

## 🏗️ AWS Architecture

```text
                    Internet
                       |
                       ↓
                    AWS EC2
                       |
                     Nginx
                       |
                    PHP-FPM
                       |
                      PHP
                       |
                    MariaDB
                       |
                 food_ordering
```

---

## 🗄️ Database

**Database Name:**

```text
food_ordering
```

### Main Tables

#### `users`
Stores registered users.

```text
id
name
email
password
```

#### `food_items`
Stores available food items.

```text
id
name
description
price
image
```

#### `orders`
Stores customer orders.

```text
id
user_id
total_amount
status
order_date
```

#### `order_items`
Stores individual items in each order.

```text
id
order_id
food_id
quantity
price
```

### Database Relationship

```text
users
  |
  ↓
orders
  |
  ↓
order_items
  |
  ↓
food_items
```

---

## 💻 Technologies Used

| Technology | Purpose |
|---|---|
| HTML5 | Web page structure |
| CSS3 | User interface and styling |
| PHP | Backend development |
| MariaDB | Database |
| MySQLi | Database connectivity |
| Nginx | Web server |
| PHP-FPM | PHP processing |
| AWS EC2 | Cloud hosting |
| Amazon Linux 2023 | Operating system |
| Git | Version control |
| GitHub | Source code repository |

---

## 📂 Project Structure

```text
online-food-ordering/
│
├── admin/
│   └── manage-food.php
│
├── css/
│   └── style.css
│
├── db.php
├── index.php
├── register.php
├── login.php
├── menu.php
├── cart.php
├── checkout.php
├── orders.php
└── README.md
```

---

# 📸 Project Screenshots

> Add your actual project screenshots in the sections below.

## 1. Home Page

**Online Food Ordering System**

<!-- Add screenshot here -->

![Home Page](index.php.png)


---

## 2. Registration Page

**User Registration**

<!-- Add screenshot here -->

![Registration Page](register.png)

---

## 3. Login Page

**User Login**

<!-- Add screenshot here -->

![Login Page](login.png)

---

## 4. Food Menu

**Available Food Items**

<!-- Add screenshot here -->

![Food Menu](menu.png)

---

## 5. Shopping Cart

**Selected Food Items and Total Amount**

<!-- Add screenshot here -->

![Shopping Cart](cart.png)

---

## 6. Checkout Page

**Order Summary and Place Order**

<!-- Add screenshot here -->

![Checkout](checkout.png)

---

## 7. Order History

**Customer Order History**

<!-- Add screenshot here -->

![Order History](order.png)

---

## 8. MariaDB Database

**Database Tables / Order Data**

<!-- Add screenshot here -->

![Database](database.png)

---

## 9. AWS EC2 Server

**EC2 Instance / Server**

<!-- Add screenshot here -->

![AWS EC2](instance.png)

---



## 🚀 Deployment Steps

### Install Required Packages

```bash
sudo dnf update -y

sudo dnf install git nginx php php-fpm php-mysqlnd -y

sudo dnf install mariadb105-server -y
```

### Start Services

```bash
sudo systemctl start nginx
sudo systemctl enable nginx

sudo systemctl start php-fpm
sudo systemctl enable php-fpm

sudo systemctl start mariadb
sudo systemctl enable mariadb
```

### Clone GitHub Repository

```bash
cd /usr/share/nginx/html

sudo git clone https://github.com/nitinrode/php.git
```

---

## 🔐 Security

- Passwords are stored using `password_hash()`.
- Login uses `password_verify()`.
- Prepared statements are used for database queries.
- Database passwords should not be uploaded to GitHub.
- Only required ports should be allowed in the AWS Security Group.

---

## 🔮 Future Enhancements

- Admin Login
- Admin Dashboard
- Add / Edit / Delete Food
- Manage Orders
- Update Order Status
- Online Payment Gateway
- Order Confirmation
- Email Notifications
- Food Images
- Improved Responsive UI

---

## 🎯 Project Objective

The main objective of this project is to develop a simple and functional online food ordering platform and demonstrate the deployment of a PHP application on AWS.

The project also demonstrates practical knowledge of:

- AWS EC2
- Linux commands
- Nginx
- PHP-FPM
- PHP
- MariaDB
- Git & GitHub
- Database connectivity
- Web application deployment

---

