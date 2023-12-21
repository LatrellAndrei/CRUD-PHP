# CRUD PHP Application

This is a simple CRUD (Create, Read, Update, Delete) PHP application for managing product information. It uses Bootstrap for styling and MySQL for data storage.

## Table of Contents
- [Features](#features)
- [Requirements](#requirements)
- [Installation](#installation)
- [Usage](#usage)
- [Database Configuration](#database-configuration)
- [Contributing](#contributing)
- [License](#license)

## Features
- Create, read, update, and delete product information.
- Display product information in a tabular format with image previews.
- Responsive design using Bootstrap.

## Requirements
- PHP (>= 7.0)
- MySQL Database
- Web server (e.g., Apache, Nginx)
- Bootstrap (v5.3.2)

## Installation
1. Clone the repository to your local machine:
   ```bash
   git clone https://github.com/yourusername/your-crud-php.git
Navigate to the project directory:

bash
Copy code
cd your-crud-php
Copy the configuration file:

bash
Copy code
cp config.sample.php config.php
Edit the config.php file and provide your database credentials.

Import the database schema:

Create a database with the name specified in the config.php file.
Import the database.sql file into your database.
Start your web server.

Usage
Open your web browser and navigate to the application's URL.
Click on "Create a Product" to add a new product.
The table displays existing products with options to update or delete each entry.
Database Configuration
In the config.php file, you need to provide your MySQL database credentials:

php
Copy code
// Database configuration
define('DB_HOST', 'your_database_host');
define('DB_USER', 'your_database_user');
define('DB_PASS', 'your_database_password');
define('DB_NAME', 'your_database_name');
Contributing
Feel free to contribute to the project. Create a pull request, report issues, or suggest improvements.

License
This project is licensed under the MIT License.
