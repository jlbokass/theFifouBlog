-- Creation de la base
-- CREATE DATABASE the_fifou_blog
-- Tables Article
CREATE TABLE article (
    `id` INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    `title` VARCHAR(255) NOT NULL,
    `content` TEXT NOT NULL
);

-- Get all article
SELECT id,title, content FROM article;