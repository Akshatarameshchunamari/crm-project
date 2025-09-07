CREATE DATABASE crm;
USE crm;

CREATE TABLE customers (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100),
  phone VARCHAR(20)
);

CREATE TABLE service_requests (
  id INT AUTO_INCREMENT PRIMARY KEY,
  customer_id INT,
  description TEXT,
  status VARCHAR(50) DEFAULT 'Pending',
  FOREIGN KEY (customer_id) REFERENCES customers(id)
);