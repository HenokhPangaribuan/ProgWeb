CREATE DATABASE db_siswa;
USE db_siswa;

CREATE TABLE siswa(
id INT AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(100),
kelas VARCHAR(50)
);

INSERT INTO siswa VALUES
(2,'John Doe','12'),
(3,'Tim Berners-Lee','12'),
(4,'Quenel','12');
