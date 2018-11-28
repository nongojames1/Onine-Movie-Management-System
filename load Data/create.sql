
DROP TABLE if exists Edit;
DROP TABLE if exists Customer_Address;
DROP TABLE if exists Transaction;
DROP TABLE if exists Manager;
DROP TABLE if exists Address;
DROP TABLE if exists Movies;
DROP TABLE if exists Customer; 

CREATE TABLE Customer (
customer_id varchar (20),
password varchar (20) NOT NULL, 
first_name varchar (20) NOT NULL,
last_name varchar (20) NOT NULL ,
email varchar (40) NOT NULL, 
phone_number varchar (20) NOT NULL, 
primary key (customer_id)
);

CREATE TABLE Movies (
movie_id varchar(20),
title varchar(100) NOT NULL,
release_year YEAR(4) NOT NULL,
rating varchar(20) NOT NULL,
runtime int NOT NULL,
score int NOT NULL,	
box_office float NOT NULL,
availability varchar(20) NOT NULL,
primary key (movie_id)
);

CREATE TABLE Transaction (
transaction_id varchar (20),
customer_id varchar (20),
movie_id varchar(20),
date DATETIME NOT NULL,
primary key (transaction_id), 
foreign key (customer_id) references Customer (customer_id) ON DELETE SET NULL, 
foreign key (movie_id) references Movies (movie_id) ON DELETE SET NULL
);

CREATE TABLE Address (
address_id varchar (20), 
Street varchar (40) NOT NULL,
City varchar (20) NOT NULL,
County varchar (20) NOT NULL, 
State varchar (20) NOT NULL,
Zip_code varchar (20) NOT NULL,
primary key (address_id)
);

CREATE TABLE Customer_Address(
customer_id varchar(20), 
address_id varchar(20), 
primary key (customer_id, address_id), 
foreign key (customer_id) references Customer (customer_id),
foreign key (address_id) references Address (address_id)
);



CREATE TABLE Manager (
manager_id varchar (20),
email varchar (30) NOT NULL,
password varchar (30) NOT NULL, 
primary key (manager_id)
);

CREATE TABLE Edit (
edit_id varchar(20), 
manager_id varchar(20),
movie_id varchar(20),
primary key (edit_id),
foreign key (manager_id) references Manager(manager_id),
foreign key (movie_id) references Movies(movie_id)
);





