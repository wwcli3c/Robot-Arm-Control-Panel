# Robot-Arm-Control-Panel

Robot Arm Control Panel
This project is a web-based control interface for a robotic arm with 6 motors (degrees of freedom). It allows users to control, save, run, and manage multiple motor positions through a simple webpage.

Features
Control 6 motor angles using sliders.

Save motor positions ("poses") into a MySQL database.

Load and run saved poses.

View a table of all saved poses.

Remove unwanted poses.

Automatically reset pose status after running.

Technologies Used
Frontend: HTML, CSS, JavaScript

Backend: PHP

Database: MySQL

Server: XAMPP / WAMP / MAMP (for local development)

Database Setup
Create a new MySQL database:

CREATE DATABASE robot_arm;
Select the database:

USE robot_arm;
Create the table:
CREATE TABLE poses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    motor1 INT NOT NULL,
    motor2 INT NOT NULL,
    motor3 INT NOT NULL,
    motor4 INT NOT NULL,
    motor5 INT NOT NULL,
    motor6 INT NOT NULL,
    status TINYINT DEFAULT 1
);
