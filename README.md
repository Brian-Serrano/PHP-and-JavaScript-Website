# PHP-and-JavaScript-Website
Features include login-signup-updateaccount, quiz, calculator

In order to open the file, follow the step by step instructions below:
Note: this file will not work if you dont have xampp installed on your desktop.

1. Download the zipped code in this github repository and extract it.
2. Move the file in C:\xampp\htdocs.
3. Open http://localhost/phpmyadmin. Make sure that username is root and no password otherwise it will not work.
4. In the SQL section type this query: `CREATE DATABASE mwdb;`.
5. Click on the new generated database.Then on the SQL section type this query:
`CREATE TABLE users
(
id int AUTO_INCREMENT,
username varchar(255),
email varchar(255),
pass varchar(255),
age int,
contact varchar(255),
job varchar(255),
company varchar(255),
summary text,
highscore int,
PRIMARY KEY (id)
);`
6. Click again in that database. Then on the SQL section again type this query:
`CREATE TABLE posts
(
id int AUTO_INCREMENT,
username varchar(255),
date datetime,
title varchar(255),
descr text,
input varchar(255),
output varchar(255),
expl text,
PRIMARY KEY (id)
);`
7. Then it will work now. To access a page just type the name "localhost" then followed by the directory from the htdocs folder.
