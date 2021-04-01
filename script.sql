CREATE DATABASE IF NOT EXISTS literie3000;
USE literie3000;

CREATE TABLE brands(
    id SMALLINT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL
);

CREATE TABLE dimensions(
    id SMALLINT PRIMARY KEY AUTO_INCREMENT,
    dimension VARCHAR(11) NOT NULL
);

CREATE TABLE mattresses(
    id SMALLINT PRIMARY KEY AUTO_INCREMENT,
    model VARCHAR(50) NOT NULL,
    price DECIMAL(6, 2) NOT NULL
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

INSERT INTO mattresses
	(model, price)
	VALUES
	("Tamoul", 759.00),
	("Waldorf", 709.00),
	("Joris", 529.00),
	("Melon", 509.00),
	("Buldo", 799.00),
	("Rev2code", 999.00);

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

