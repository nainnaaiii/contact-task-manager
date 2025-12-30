CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    phone VARCHAR(15)
);
CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    contact_id INT,
    task_name VARCHAR(255),
    status ENUM('Pending', 'Done') DEFAULT 'Pending',
    FOREIGN KEY (contact_id) REFERENCES contacts(id) ON DELETE CASCADE
);
