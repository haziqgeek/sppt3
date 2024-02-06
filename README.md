# Sistem Pendaftaran PT3 (SPPT3)
Sistem Pendaftaran PT3 (SPPT3) is a web-based registration system for PT3 examination. SPPT3 is written mostly in PHP with some JavaScript and the UI is based on Bootstrap. This system was developed for my high school Computer Science project in 2018, hence the code may be outdated and contains many vulnerabilities. You are required to install Apache HTTP Server, MySQL, and PHP before setting up this system. It is advisable to install a web server solution stack like XAMPP, WAMP, MAMP, or Laragon for easier setup. This instruction is based on XAMPP setup. You may adjust according to your setup. **FOR EDUCATIONAL PURPOSE ONLY. PLEASE DO NOT USE THIS PROJECT FOR ANY COMMERCIAL PROJECT. I WON'T BE RESPONSIBLE IF THERE'S ANY DATA BREACH USING THIS SYSTEM!**

## Installation:
1. Clone this repository in htdocs folder in local XAMPP directory.
2. Start the Apache HTTP Server and MySQL services on XAMPP. Open PHPMyAdmin in the browser. 
3. Import `sppt3.sql` in PHPMyAdmin. The default configuration for SPPT3 database connection is stated as below. Please edit the configuration in `connection.php` so it matches with your database configuration.

Host Name: localhost

DB Username: root

DB Password:

4. Open the web system in browser by visiting http://localhost:8080/sppt3. Please change the port number if the web system cannot be opened.
