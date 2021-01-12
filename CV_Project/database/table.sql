-- create database CV
create table Personal_information
(
	ID_personal int primary key AUTO_INCREMENT,
	Name varchar(40) not null,
	Age int not null,
	Address varchar(50) not null,
	Email varchar (30) not null,
	Username varchar(40) not null,
	Pass varchar(20) not null,
	Carrer varchar(60) not null,
	Phone varchar(16) not null,
	Description varchar(999) not null,
	Get_in_touch varchar(255),
	Image varchar(255)
);
create table Skill
(
	ID_skill int primary key,
	Name varchar(20) not null,
	Parameter varchar(10) not null,
	ID_personal int,
	foreign key (ID_personal) references Personal_information(ID_personal)
);
create table Achievement
(
	ID_achievement int primary key,
	Name varchar(20) not null,
	Parameter varchar(10) not null,
	ID_personal int,
	foreign key (ID_personal) references Personal_information(ID_personal)
);
create table Service_list
(
	ID_service int primary key,
	Services_name varchar(30) not null,
	Decription varchar(999) not null,
	ID_personal int,
	foreign key (ID_personal) references Personal_information(ID_personal)
);

create table Job_history
(
	ID_job int primary key,
	Name varchar(30) not null,
	Content varchar(999) not null,
	ID_personal int,
	foreign key (ID_personal) references Personal_information(ID_personal)
);
create table Education_history
(
	ID_education int primary key,
	Name varchar(30) not null,
	Content varchar(999) not null,
	Year_start int not null,
	Course_time varchar(10) not null,
	ID_personal int,
	foreign key (ID_personal) references Personal_information(ID_personal)
);
create table Team
(
	ID_partner int primary key,
	Name varchar(20) not null,
	Decription varchar(999) not null,
	ID_personal int not null,
	foreign key (ID_personal) references Personal_information(ID_personal)
);
create table Product
(
	ID_product int primary key,
	Name varchar(50) not null,
	Image varchar(255) ,
	Product_date date not null,
	ID_personal int,
	foreign key (ID_personal) references Personal_information(ID_personal)
);
create table Product_detail
(
	ID_detail int primary key,
	Client varchar(50) not null,
	Project_url varchar(40) not null,
	Content varchar(999) not null,
	Title varchar(50),
	Category varchar(30) not null,
	ID_product int ,
	foreign key (ID_product) references Product(ID_product)
);

