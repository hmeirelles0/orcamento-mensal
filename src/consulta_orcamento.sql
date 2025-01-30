CREATE DATABASE orcamento;

USE orcamento;

CREATE TABLE tblCompras (
	id_compra int not null identity primary key,
	tipo_compra varchar(20) not null,
	valor_compra dec(6, 2) not null,
	local_compra varchar(50) not null,
	metodo_compra varchar(20) not null
);

INSERT INTO tblCompras VALUES (
	'Comida', 100.00, 'Casa de Bolo', 'PIX'
);

SELECT * FROM tblCompras;

INSERT INTO tblCompras VALUES (
	'Presentes', 200.00, 'Riachuelo', 'Cr�dito'
);

SELECT * FROM tblCompras WHERE metodo_compra = 'PIX';