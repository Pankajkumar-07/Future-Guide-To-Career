<?php
// config.php

// Database settings (Update these as needed)
$DB_HOST = '127.0.0.1';
$DB_USER = 'root';
$DB_PASS = '';
$DB_NAME = 'future_guide';

// Attempt DB connection
$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

if ($mysqli->connect_errno) {
    // DB connection failed
    $db_connected = false;
    // Optionally log error: error_log("Failed to connect to MySQL: " . $mysqli->connect_error);
} else {
    // DB connection successful
    $db_connected = true;
    $mysqli->set_charset('utf8mb4');
}

// Start session here as it's required for all pages using logic
session_start();

// Initialize arrays for messages
$errors = [];
$success = '';

// SQL to create database and users table (FOR REFERENCE, DO NOT RUN HERE)
/*
CREATE DATABASE IF NOT EXISTS `future_guide` CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `future_guide`;

CREATE TABLE IF NOT EXISTS `users` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(100) UNIQUE NOT NULL,
    `email` VARCHAR(150) UNIQUE NOT NULL,
    `password_hash` VARCHAR(255) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
*/
?>