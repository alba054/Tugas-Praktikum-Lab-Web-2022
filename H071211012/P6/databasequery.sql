-- SQLBook: Code
-- Active: 1667760124683@@127.0.0.1@3306@ayncoffee

CREATE DATABASE ayncoffee; -- Membuat Data Base ayn coffee

USE ayncoffee;

-- Membuat tabel minuman
CREATE TABLE
    minuman (
        id INT AUTO_INCREMENT,
        nama_minuman VARCHAR(255) NOT NULL,
        jenis_minuman VARCHAR(15) NOT NULL,
        `description` VARCHAR(255),
        harga INT(6) DEFAULT 0,
        PRIMARY KEY (id)
    );


-- Menambahkan data awal sebagai contoh ke tabel minuman
INSERT INTO minuman
VALUES (
        '',
        'Classic Coffee',
        'Coffee',
        'Satu shoot espresso, susu segar, gula aren, creamy, gula palem',
        '20000'
    );