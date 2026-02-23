-- Database schema for custom commenting system

CREATE TABLE IF NOT EXISTS comments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    comment TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status ENUM('pending', 'approved', 'spam') DEFAULT 'approved'
) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
