-- SQL Setup for WT Practical 05 - Employee Management System

-- Create database
CREATE DATABASE company;

-- Use the database
USE company;

-- Create employees table
CREATE TABLE employees (
    empid INT PRIMARY KEY,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    salary DECIMAL(10,2) NOT NULL
);