-- sql file to create database and table

CREATE DATABASE `mindarc_assessment`;
use `mindarc_assessment`;

CREATE TABLE `original_data` (
	product_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	product_code VARCHAR(50) NOT NULL,
	product_label VARCHAR(255) NOT NULL,
	gender VARCHAR(255),
	date TIMESTAMP
);

CREATE TABLE `migrated_data` (
	product_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	sku VARCHAR(50) NOT NULL,
	name VARCHAR(255) NOT NULL,
	image_url VARCHAR(255),
	date TIMESTAMP
);