# PHP CRUD Application

This project is a basic CRUD (Create, Read, Update, Delete) web application built using PHP and MySQL. It demonstrates the fundamental operations for managing data in a web application with a user-friendly interface.

## 🌟 Features

- **Create**: Add new records to the database.
- **Read**: View and display all existing records.
- **Update**: Edit and modify existing records.
- **Delete**: Remove records from the database securely.

## 🛠️ Technologies Used

- **Backend**: PHP
- **Database**: MySQL
- **Frontend**: HTML, CSS, Bootstrap
- **JavaScript**: jQuery for enhanced user interaction

## ⚙️ Installation and Setup

Follow these steps to set up the project on your local machine:

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/Ashoknegi13/php-curd.git
   cd php-curd
Set Up the Database:

2.Create a database in MySQL (e.g., php_crud).
Import the php_crud.sql file provided in the repository to set up the required tables:
sql
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
);

3 .Update Database Configuration:

Open the conn.php file in the project and update the database credentials:
4 . Run the Project:

Start your local web server (e.g., XAMPP, WAMP).
Move the project folder to your server's root directory (e.g., htdocs for XAMPP).
Access the project in your browser.
  http://localhost/php-curd/index.php

🚀 Usage
Add a Record: Use the form on the homepage to create a new record.
View Records: See all existing records listed on the homepage.
Edit a Record: Click on "Edit" next to a record to modify it.
Delete a Record: Click on "Delete" to remove a record permanently.
🖇️ Project Structure
index.php: Displays the list of records and allows creation of new entries.
edit.php: Handles editing of existing records.
delete.php: Handles deletion of records.
conn.php: Database connection configuration.
🤝 Contributing
Contributions are welcome! If you would like to improve this project, please fork the repository and submit a pull request.

📜 License
This project is licensed under the MIT License. See the LICENSE file for more details.

📬 Contact
If you have any questions or suggestions, feel free to contact me via GitHub.



