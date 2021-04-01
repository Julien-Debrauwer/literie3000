CREATE DATABASE IF NOT EXISTS literie3000;
USE literie3000;

CREATE TABLE mattresses(
    id SMALLINT PRIMARY KEY AUTO_INCREMENT,
	brand VARCHAR(50) NOT NULL, 
    model VARCHAR(50) NOT NULL,
	dimensions VARCHAR(11) NOT NULL,
	img text NOT NULL,
    price DECIMAL(6, 2) NOT NULL
);

INSERT INTO mattresses
	(brand, model, dimensions, img, price)
	VALUES
	("Epeda", "Tamoul", "90x190", "https://www.leroidumatelas.fr/media/catalog/product/cache/1/image/1800x/040ec09b1e35df139433887a97daa66f/h/e/heris_1.jpg", 759.00),
	("Dreamway", "Waldorf", "90x190", "https://www.leroidumatelas.fr/media/catalog/product/cache/1/image/1800x/040ec09b1e35df139433887a97daa66f/m/a/matelas_alfred_carr_-1-min_2.jpg", 709.00),
	("Bultex", "Joris", "90x190","https://www.leroidumatelas.fr/media/catalog/product/cache/1/image/1800x/040ec09b1e35df139433887a97daa66f/M/A/MAT-NUNKA_01.jpg", 529.00),
	("Epeda", "Melon", "90x190", "https://www.leroidumatelas.fr/media/catalog/product/cache/1/image/1800x/040ec09b1e35df139433887a97daa66f/w/e/web-nosybe1.jpg", 509.00),
	("Dorsoline", "Buldo", "90x190", "https://www.leroidumatelas.fr/media/catalog/product/cache/1/image/1800x/040ec09b1e35df139433887a97daa66f/M/A/MAT-COPERNIC_01.jpg", 799.00),
	("Memoryline", "Rev2code", "90x190", "https://www.leroidumatelas.fr/media/catalog/product/cache/1/image/1800x/040ec09b1e35df139433887a97daa66f/M/A/MAT-MOLIERE_01.jpg", 999.00);


CREATE TABLE brands(
    id SMALLINT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL
);

CREATE TABLE dimensions(
    id SMALLINT PRIMARY KEY AUTO_INCREMENT,
    dimension VARCHAR(11) NOT NULL
);

CREATE TABLE brands_mattresses (
    brand_id SMALLINT,
    mattress_id SMALLINT,
    PRIMARY KEY (brand_id, mattress_id),
    FOREIGN KEY (brand_id) REFERENCES brands(id),
    FOREIGN KEY (mattress_id) REFERENCES mattresses(id)
);

CREATE TABLE dimensions_mattresses (
    dimension_id SMALLINT,
    mattress_id SMALLINT,
    PRIMARY KEY (dimension_id, mattress_id),
    FOREIGN KEY (dimension_id) REFERENCES dimensions(id),
    FOREIGN KEY (mattress_id) REFERENCES mattresses(id)
);

INSERT INTO brands
	(name)
	VALUES
	("Epeda"),
	("Dreamway"),
	("Bultex"),
	("Dorsoline"),
	("Memoryline");

INSERT INTO dimensions
	(dimension)
	VALUES
	("90x190"),
	("140x190"),
	("160x200"),
	("180x200"),
	("200x200");



INSERT INTO brands_mattresses
	(brand_id, mattress_id)
	VALUES
	(1, 1),
	(1, 4),
	(2, 2),
	(3, 3),
	(4, 5),
	(5, 6);

INSERT INTO dimensions_mattresses
	(dimension_id, mattress_id)
	VALUES
	(1, 1),
	(1, 2),
	(2, 3),
	(3, 4),
	(4, 5),
	(5, 6);

