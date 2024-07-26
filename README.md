# RTO-Management-System
The RTO Management Web Application is a streamlined platform tailored to handle various tasks associated with the Regional Transport Office. Utilizing a robust stack comprising XAMPP for server management, PHP for server-side scripting, MySQL for database operations, alongside HTML and CSS for front-end design, it ensures a seamless user experience. The application's core functionality includes CRUD (Create, Read, Update, Delete) operations, enabling the addition and management of new driver records with ease. Furthermore, it is equipped to handle the issuance and tracking of challans, as well as the registration and oversight of vehicles, thereby simplifying the administrative workload and enhancing the efficiency of RTO services.

## Tech Stack
* Frontend: HTML,CSS,Bootstrap
* Backend: PHP, XAMPP
* Database: MySQL

## Prerequisites
Download and install XAMPP

## Setup Instructions
### Step 1: Download and Install XAMPP
1. Download XAMPP.
2. Install XAMPP following the instructions on the website.
### Step 2: Create Project Folder
1. Navigate to the XAMPP installation directory.
2. Inside the htdocs folder, create a new folder for your project (e.g., rto_management_system).
### Step 3: Start Apache and MySQL Servers
1. Open the XAMPP Control Panel.
2. Start the Apache server (used for accepting HTTP requests from users and sending them their desired information in the form of files and web pages).
3. Start the MySQL database server.
### Step 4: Connect PHP to MySQL Database
1. Create a PHP file (e.g., db_connect.php) inside your project folder with the following code:
  ``` php
 <?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = ""; 


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
} 
?>
```
### Step 5: Create Website/Webpage
1. Create HTML and CSS files inside your project folder to design your website/webpage as per your requirements.
### Step 6: Use PHP to Interact with MySQL Database
1. Write PHP scripts to execute SQL queries and interact with the MySQL database.
### Step 7: View Database Information
1. Open your web browser and navigate to localhost/phpmyadmin/.
2. Select your database to view and manage the database information.

## Implementation
### Home Page
![1721997040194](https://github.com/user-attachments/assets/ead37eb2-abc4-43e5-81e0-83dd92f1d097)

### Vehicle Registration
![1721997040283](https://github.com/user-attachments/assets/5149db14-05ff-4892-8b4d-c84fd941fd3f)




