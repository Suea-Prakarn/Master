-- Create the database
CREATE DATABASE IF NOT EXISTS pixiv_like;

-- Use the database
USE pixiv_like;

-- Create the images table
CREATE TABLE images (
    id INT AUTO_INCREMENT PRIMARY KEY,
    src VARCHAR(255) NOT NULL,
    alt VARCHAR(255) NOT NULL
);

-- Insert some example data
INSERT INTO images (src, alt) VALUES
    ('image1.jpg', 'Image 1'),
    ('image2.jpg', 'Image 2'),
    ('image3.jpg', 'Image 3'),
    ('image4.jpg', 'Image 4');