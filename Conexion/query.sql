CREATE DATABASE ciisa_backend_v01;
CREATE USER 'ciisa_backend_v01'@'localhost' IDENTIFIED BY 'ciisa2024'; 
GRANT ALL PRIVILEGES ON ciisa_backend_v01 . * TO 'ciisa_backend_v01'@'localhost';
FLUSH PRIVILEGES;

USE ciisa_backend_v01;

CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    email VARCHAR(100),
    mensaje TEXT,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- un select all
select id, nombre, email, mensaje, fecha_registro from clientes;

--un select by id
select id, nombre, email, mensaje, fecha_registro from clientes where id = x;
