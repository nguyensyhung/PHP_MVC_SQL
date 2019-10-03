DROP DATABASE IF EXISTS shop_db;
CREATE DATABASE shop_db;
USE shop_db;

CREATE TABLE Category (
	categoryID int AUTO_INCREMENT,
	categoryName varchar(255) not null,
	PRIMARY KEY (categoryID)
);
INSERT INTO Category VALUES
(1, 'OPPO'),
(2, 'SAMSUNG'),
(3, 'APPLE'),
(4, 'MOTOROLA'),
(5, 'HTC');


CREATE TABLE Products (
	productID int  AUTO_INCREMENT,
	categoryID int not null,
	productName varchar(255) not null,
	price decimal(12) not null, 
	dateAdded datetime DEFAULT NOW(),
	PRIMARY KEY (productID),
	FOREIGN KEY (categoryID) REFERENCES Category(categoryID)
);
INSERT INTO Products(productID,categoryID,productName,price) VALUES
(1, 1,'OPPO A83',220),
(2, 1,'OPPO F5',435),
(3, 3,'IPHONE XS MAX',280),
(4, 5,'HTC M9',520),
(5, 4,'MOTOROLA PRO',240);


CREATE TABLE OrderItem (
	itemID		int 		AUTO_INCREMENT,
	oderID  	int not null, 
	productID 	int not null,
	itemPrice  decimal(12) not null,
	quantity 	int,
	PRIMARY KEY (itemID, oderID),
	FOREIGN KEY (productID) REFERENCES Products(productID)

);
INSERT INTO OrderItem VALUES
(1, 1, 1, 220, 1),
(2, 2, 2, 435, 1),
(3, 3, 3, 280, 1),
(4, 4, 4, 520, 1),
(5, 5, 5, 240, 1);
