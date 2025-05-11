CREATE DATABASE luxury_watches;
USE luxury_watches;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- Insert a sample user (password: 'password123')
INSERT INTO users (username, email, password) VALUES
('admin', 'admin@example.com', '$2y$10$W8Qz8z5z5z5z5z5z5z5z5u5z5z5z5z5z5z5z5z5z5z5z5z5z5z5z');