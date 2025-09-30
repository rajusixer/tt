# Web Technology Practicals

This repository contains all the practical assignments for Web Technology course, covering PHP, Laravel, and Node.js.

## Table of Contents

### PHP Practicals

#### [Practical 1 — Basic PHP Programs](./PHP_Basic_Programs/)
- [Write a PHP program to calculate the factorial of a given number](./PHP_Basic_Programs/factorial.php)
- [Write a PHP program to generate the Fibonacci series](./PHP_Basic_Programs/fibonacci.php)
- [Write a PHP program to calculate the sum of digits of a given number](./PHP_Basic_Programs/sum_first_n.php)
- [Write a PHP program to create a student registration form and display the details on another page](./PHP_Basic_Programs/Form.html)

#### [Practical 2 — File Handling in PHP](./PHP_File_Handling/)
- [Write a PHP program to reverse a number using file handling](./PHP_File_Handling/reverse.php)
- [Write a PHP program to count characters, words, and lines in a file](./PHP_File_Handling/example.php)
- [Write a PHP program to search for a particular word in a file](./PHP_File_Handling/example.php)
- [Write a PHP program to append employee details into a file and display them](./PHP_File_Handling/employee.php)

#### [Practical 3 — OOP in PHP](./PHP_OOP_Book_Management/)
- [Create a Book class in PHP with attributes like Book ID, Title, Author, Publisher, and Price](./PHP_OOP_Book_Management/book.php)
- [Write functions for Add, Update, Delete, and Display](./PHP_OOP_Book_Management/BookManager.php)
- [Implement it using MySQL database](./PHP_OOP_Book_Management/library_database.sql)

#### [Practical 4A — Sessions in PHP](./PHP_Sessions_Cookies/)
- [Write a PHP program to implement user login using sessions](./PHP_Sessions_Cookies/Logindemo.php)
- [Create pages for Login, Welcome, and Logout](./PHP_Sessions_Cookies/Welcome.php)

#### [Practical 4B — Cookies in PHP](./PHP_Sessions_Cookies/)
- [Write a PHP program to store and retrieve data using cookies](./PHP_Sessions_Cookies/cookie.php)

#### [Practical 5A — Database Operations](./PHP_Database_Operations/)
- [Write a PHP program to perform Insert, Update, Delete, and Display operations on an Employee table using MySQL](./PHP_Database_Operations/data.php)

#### [Practical 5B — Login System](./PHP_Database_Operations/)
- Write a PHP program to create a Login system with options for:
  - [New User Registration](./PHP_Database_Operations/login.php)
  - [Login](./PHP_Database_Operations/login.php)
  - [Change Password](./PHP_Database_Operations/login.php)

#### [Practical 6 — PDO in PHP](./PHP_PDO_Pizza_Orders/)
- [Write a PHP program to insert and search pizza orders using PDO with MySQL](./PHP_PDO_Pizza_Orders/pizzaorder.php)

### Laravel Practicals

#### [Practical 7 — Laravel Basics](./Laravel_Basics_Form/)
- [Create a Laravel application to accept form data and display it on another page](./Laravel_Basics_Form/)

#### [Practical 8 — Laravel BMI Application](./Laravel_BMI_Calculator/)
- [Create a Laravel application to calculate BMI using weight and height, and display the result with an image](./Laravel_BMI_Calculator/)

#### [Practical 9 — Laravel Cookies](./Laravel_Cookies/)
- [Create a Laravel application to store and retrieve data using cookies](./Laravel_Cookies/)

#### [Practical 10 — Laravel CRUD](./Laravel_CRUD_Student/)
- [Create a Laravel application to perform CRUD operations on a Student table (Create, Read, Update, Delete)](./Laravel_CRUD_Student/)

### Node.js Practicals

#### [Practical 11 — Node.js Basics](./NodeJS_HTTP_Server/)
- [Write a Node.js program to display a message in the console](./NodeJS_HTTP_Server/Server1.js)
- [Write a Node.js program to create a simple HTTP server that returns text](./NodeJS_HTTP_Server/Server2.js)
- [Write a Node.js program to create a simple HTTP server that returns HTML](./NodeJS_HTTP_Server/Server3.js)

#### [Practical 12 — Node.js Mini Project](./NodeJS_Bank_Account/)
- Write a Node.js application to manage a bank account with options for Credit and Debit:
  - [Server implementation](./NodeJS_Bank_Account/Server2.js)
  - [HTML form for user input](./NodeJS_Bank_Account/Index.html)

## Getting Started

### Prerequisites
- PHP 7.4 or higher
- MySQL/MariaDB
- Composer (for Laravel projects)
- Node.js and npm (for Node.js projects)
- XAMPP or similar local development environment

### Setup Instructions

#### For PHP Practicals:
1. Place the project folders in your web server's document root (e.g., `htdocs` for XAMPP)
2. Start your Apache and MySQL servers
3. Import the SQL files where provided
4. Access the PHP files through your web browser

#### For Laravel Practicals:
1. Navigate to each Laravel project folder
2. Run `composer install` to install dependencies
3. Copy `.env.example` to `.env` and configure your database
4. Run `php artisan key:generate`
5. Run `php artisan migrate` (if migrations exist)
6. Start the development server with `php artisan serve`

#### For Node.js Practicals:
1. Navigate to each Node.js project folder
2. Run `npm install` to install dependencies (if package.json exists)
3. Run the server files with `node filename.js`
4. Access the application through your web browser at the specified port

## Project Structure

```
├── PHP_Basic_Programs/          # Basic PHP programming concepts
├── PHP_File_Handling/           # File operations in PHP
├── PHP_OOP_Book_Management/     # Object-oriented programming with database
├── PHP_Sessions_Cookies/        # Session and cookie management
├── PHP_Database_Operations/     # Database CRUD operations
├── PHP_PDO_Pizza_Orders/        # PDO database operations
├── Laravel_Basics_Form/         # Laravel form handling
├── Laravel_BMI_Calculator/      # Laravel BMI calculation app
├── Laravel_Cookies/             # Laravel cookie management
├── Laravel_CRUD_Student/        # Laravel CRUD operations
├── NodeJS_HTTP_Server/          # Node.js server basics
└── NodeJS_Bank_Account/         # Node.js bank account management
```

## Contributing

Feel free to contribute to this repository by:
- Adding more examples
- Improving existing code
- Fixing bugs
- Adding documentation

## License

This project is for educational purposes as part of the Web Technology course curriculum.