CREATE TABLE tb_users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE, -- Optional if you're collecting emails
    password VARCHAR(255) NOT NULL, -- Store the hashed password
);
