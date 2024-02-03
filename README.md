# Woj-pizzeria_online-shoop-
Card shopping in written in PHP. Add to card and buy the product you want + System of couting. Adding new products in Data Bases add new product in a website. Easy to use for restaurant owners.
There are still small staff to polish up. I made it to a local restaurant as they made best pizza on the world!


# Installation

To get started, download or clone the files into your server. The system includes an implemented error handling system for robust performance.

## Steps for Setup

1. **Upload Files**: 
   After downloading, upload the files to your server. It do not need additional installation. Make sure PHP is installed on server. You will need to conficure 'connect.php'.

2. **Database Configuration**: 
   In the `connect.php` file, update the database credentials (database name, user, password) to match your server's database configuration. It's written in traditional simple way, not comlicated. 

3. **Database Creation**: 
   Next, you need to create a database and a table on your server. You can do this via your database server's console or any other preferred method. Here are the MySQL/MariaDB commands to set up your database:

mysql -u root -p

CREATE DATABASE menu;

USE menu;

CREATE TABLE dishes (
id INT AUTO_INCREMENT PRIMARY KEY,
type VARCHAR(50),
name VARCHAR(255) NOT NULL,
description TEXT,
price_s DECIMAL(10, 2),
price_l DECIMAL(10, 2)
);

EXIT;


After these steps, your system should be ready to run. If you encounter any issues, refer to the error logs for troubleshooting.


# Features

**Dynamic Menu and Product Display:**
Your site features a dynamically generated menu (from menu-content.php), showcasing various types of pizzas with descriptions and prices. This is a key feature that allows users to easily browse and select products.

**Order Management:**
        Functions in load-colected-dish-order.php and dishes.php facilitate efficient processing and management of customer orders. This includes collecting order data and presenting it in an accessible manner.

**Interactive Photo Gallery:**
    Using JavaScript (main.js), you create an interactive photo gallery, allowing users to view images of dishes and the restaurant’s ambiance. This is important for visually engaging customers.

**Responsiveness and Styling:**
        The use of Bootstrap ensures that the site is responsive and looks good on various devices. Styling and layout are crucial for providing a pleasant user experience.

**Modular Components:**
        The use of modular components (components.php) indicates an efficient structure of the site, allowing for easy modifications and future development.

**Advanced JavaScript Features:**
        Functions like pickUpLargeDish in main.js showcase advanced JavaScript capabilities, enabling dynamic interactions such as updating the shopping cart and managing the state of the page.

**SEO and Accessibility:**
        Optimization for SEO and accessibility through proper meta tags and alt attributes for images enhances the site's usability and visibility in search engines.
