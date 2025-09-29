-- Create the database
CREATE DATABASE library;

-- Use the database
USE library;

-- Create the book table
CREATE TABLE book (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(255) NOT NULL,
    publishyear INT NOT NULL
);