CREATE TABLE addresses (
  id INT AUTO_INCREMENT PRIMARY KEY,
  first_name VARCHAR(60),
  last_name VARCHAR(20),
  email VARCHAR(40),
  street VARCHAR(80),
  zip_code INT(8),
  city_id INT
);

CREATE TABLE cities (
  id INT AUTO_INCREMENT PRIMARY KEY,
  city_name VARCHAR(40)
);

INSERT INTO cities (city_name) VALUES ('New York'), ('Chicago'), ('San Francisco');

INSERT INTO addresses (first_name, last_name, email, street, zip_code, city_id) VALUES
('Doe', 'John', 'john@example.com', '123 St', 12345, 1),
('Smith', 'Jane', 'jane@example.com', '456 St', 67890, 2);
