CREATE TABLE subscriptions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    address VARCHAR(255) NOT NULL,
    plan VARCHAR(100) NOT NULL,
    cost DECIMAL(10, 2) NOT NULL,
    subscription_date DATE DEFAULT CURRENT_DATE
);