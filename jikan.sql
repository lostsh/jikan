--
-- phpMyAdmin SQL Dump
-- Database: `jikan`
--

CREATE DATABASE IF NOT EXISTS jikan;
USE jikan;


DROP TABLE IF EXISTS category;
CREATE TABLE `category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  CONSTRAINT PK_id PRIMARY KEY(id),
  CONSTRAINT UC_name UNIQUE (name)
);

DROP TABLE IF EXISTS products;
CREATE TABLE `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_category` int NOT NULL,
  `description` text NOT NULL,
  `image` varchar(511) NOT NULL,
  `prix` int NOT NULL DEFAULT '0',
  `stock` int NOT NULL DEFAULT '0',
  CONSTRAINT PK_id PRIMARY KEY(id),
  FOREIGN KEY FK_id_category(id_category) REFERENCES category(id) ON DELETE RESTRICT ON UPDATE RESTRICT
);