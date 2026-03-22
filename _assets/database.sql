CREATE DATABASE crud;
USE crud;

CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NULL,
    email VARCHAR(100) NULL,
    phone VARCHAR(100) NULL,
    address TEXT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    deleted_at TIMESTAMP NULL
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NULL,
    password VARCHAR(255) NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    deleted_at TIMESTAMP NULL
);

INSERT INTO users (email, password) VALUES ('test@test.be', '$2y$10$YYWm.1dpCKz9TtNSy5FCuOjb5OoTHvKihYxtpk8b3Aylr2Cy8d01.');
INSERT INTO contacts (name) VALUES ('John Doe'), ('Jane Doe'), ('John Smith'), ('Jane Smith'), ('John Johnson'), ('Jane Johnson');
