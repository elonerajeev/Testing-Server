-- Create database
CREATE DATABASE IF NOT EXISTS database1;

-- Use the database
USE database1;

-- Create table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL, 
    collage VARCHAR(300) 
);

INSERT INTO users (username, email, collage) 
VALUES 
      ("ELONE", 'elone@gmail.com', "Samastipur collage");



