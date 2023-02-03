CREATE DATABASE chen;

USE chen;

CREATE TABLE siswa (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  nomer INT(11),
  nama VARCHAR(100),
  absen INT(11),
  kelas VARCHAR(50),
  foto VARCHAR(255)
);
