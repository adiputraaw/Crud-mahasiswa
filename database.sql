CREATE DATABASE db_mahasiswa;

USE db_mahasiswa;

CREATE TABLE mahasiswa (
id INT AUTO_INCREMENT PRIMARY KEY,
nim VARCHAR(20),
nama VARCHAR(50),
jurusan VARCHAR(50)
);