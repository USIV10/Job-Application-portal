CREATE DATABASE IF NOT EXISTS `applications` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;

CREATE TABLE positions(
    id INT PRIMARY KEY 
    AUTO_INCREMENT,
    position_name VARCHAR(50) NOT
    NULL
);

INSERT INTO positions
(position_name) VALUES
('Data Analyst'),
('Data Scientist'),
('Frontend Developer'),
('Backend Developer'),
('Graphic Designer');

CREATE TABLE applicants (
    id INT PRIMARY KEY AUTO_INCREMENT,
    fullName VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    phone VARCHAR(20) NOT NULL,
    position_id INT NOT NULL,
    education TEXT NOT NULL,
    experience TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT
    CURRENT_TIMESTAMP,
    FOREIGN KEY (position_id)
    REFERENCES positions(id)
);

ALTER TABLE applicants ADD COLUMN approved TINYINT(1) DEFAULT 0;
ALTER TABLE applicants ADD COLUMN rejected TINYINT(1) DEFAULT 0;


