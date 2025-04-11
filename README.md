# php_login_ua92_Installation
-----------------------------------------------
-- **Step 1: Install MAMP** --

Download MAMP from: https://www.mamp.info/en/

-----------------------------------------------
-- **Step 2: MAMP Basic Configuration** --

**Open MAMP → Preferences:**
	**Enable:**
	•	Start servers
	•	Check for updates
	•	Open WebStart page
	•	PHP Cache: OPCache

**Go to “Server” Tab:**
	•	Web Server: Apache
	•	PHP Version: 8.3.14
	•	Document Root: /Applications/MAMP/htdocs

-----------------------------------------------
-- **Step 3: Project Placement** --

**Move your project folder (example: PHP_Login) into:**
    /Applications/MAMP/htdocs/

-----------------------------------------------
-- **Step 4: Access phpMyAdmin** --

**Open browser and go to:**
    http://localhost:8888/phpMyAdmin

    Create a new database
    Example name: test_db

**Create a table:**

    CREATE TABLE users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(100) UNIQUE,
        password VARCHAR(255)
    );

-----------------------------------------------
-- **Step 5: Update Database Connection** --

**In db.php file inside your project:**

    $connection = new mysqli('localhost', 'root', 'root', 'test_db');

**Default MAMP MySQL password is usually root**
(Check MAMP → Preferences → Ports → MySQL Password)

-----------------------------------------------
-- **Step 6: Start MAMP Server** --

	1.	Open MAMP
	2.	Click Start Servers

-----------------------------------------------
-- **Step 7: Open Website** --

**Register page URL:**
    http://localhost:8888/PHP_Login/register.php

**Login page URL:**
    http://localhost:8888/PHP_Login/login.php

**Dashboard (after login/register sucess):**
    http://localhost:8888/PHP_Login/dashboard.php



**Done!**
