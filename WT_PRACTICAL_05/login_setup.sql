-- SQL Setup for WT Practical 05 - Login System

-- Create database
CREATE DATABASE mydb;

-- Use the database
USE mydb;

-- Create users table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);