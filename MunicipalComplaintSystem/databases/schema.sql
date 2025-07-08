CREATE DATABASE IF NOT EXISTS municipal_complaints;
USE municipal_complaints;

CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    role ENUM('admin', 'user') DEFAULT 'user'
);

CREATE TABLE complaints (
    complaint_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    category VARCHAR(100),
    description TEXT,
    status VARCHAR(50),
    date DATE,
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);