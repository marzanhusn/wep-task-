
```markdown
# Secure PHP Authentication System

[![PHP Version](https://img.shields.io/badge/PHP-8.2%2B-blue.svg)](https://www.php.net/)
[![Database](https://img.shields.io/badge/Database-MySQL-orange.svg)](https://www.mysql.com/)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

A lightweight, secure, and fully responsive user authentication system built with **PHP (PDO)** and **MySQL**. It features secure password hashing, prepared statements to prevent SQL injections, session management, and an automated database setup mechanism.

---

## 🚀 Features

* **Secure Authentication**: Password hashing using bcrypt (`password_hash` / `password_verify`).
* **SQL Injection Protection**: Uses PHP Data Objects (PDO) with prepared statements for all database interactions.
* **Session Security**: Session fixation defense using `session_regenerate_id(true)`.
* **Zero-Configuration Setup**: Automatically creates the required MySQL database and table on first run.
* **Modern UI/UX**: Clean, responsive design optimized for desktop and mobile screens.
* **All-In-One Architecture**: Streamlined single-file layout for rapid deployment and easy maintenance.

---

## 🛠️ Prerequisites

Make sure you have the following installed on your local machine:
* [XAMPP](https://www.apachefriends.org/) (or any local server environment running **PHP 8.0+** and **MySQL / MariaDB**).

---

## 📦 Installation & Setup

1. **Clone or Download the Repository**
   Clone this repository or download the source code into your local server's root directory (e.g., `htdocs` in XAMPP):
   ```bash
   git clone [https://github.com/your-username/your-repo-name.git](https://github.com/your-username/your-repo-name.git)

```

2. **Place Files in your Local Directory**
Move the project files into your desired workspace folder, for example:
```text
C:\xampp\htdocs\auth-system\

```


3. **Start XAMPP Services**
* Open your **XAMPP Control Panel**.
* Start **Apache** and **MySQL**.


4. **Run the Application**
* Open your web browser and navigate to:
```text
http://localhost/auth-system/

```


* The system will automatically detect and create the `user_system` database and `users` table for you.



---

## 🗄️ Database Schema

If you prefer setting up the database manually via phpMyAdmin (`http://localhost/phpmyadmin/`), run the following SQL query:

```sql
CREATE DATABASE IF NOT EXISTS user_system;

USE user_system;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

```

---

## 📂 Project Structure

```text
auth-system/
│
├── index.php         # Main controller handling routing, logic, and views
└── README.md         # Project documentation

```

---

## 🔒 Security Practices Implemented

* **Prepared Statements**: Parameterized queries prevent SQL injection flaws.
* **Bcrypt Hashing**: Passwords are never stored in plain text; PHP's native robust hashing algorithm handles credentials.
* **Input Sanitization & Validation**: Email formatting validation and string trimming applied on user inputs.
* **Secure Sessions**: Active state verification and session regeneration upon successful authentication.

---

## 🤝 Contributing

Contributions, issues, and feature requests are welcome! Feel free to check the [issues page](https://www.google.com/search?q=https://github.com/your-username/your-repo-name/issues).

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

---

## 📝 License

Distributed under the **MIT License**. See `LICENSE` for more information.

```

```