-- create database CV
create table account
(
	userId int primary key AUTO_INCREMENT,
	name varchar(40) not null,
	age int not null,
	address varchar(50) not null,
	email varchar (30) not null,
	username varchar(40) not null,
	password varchar(20) not null,
	carrer varchar(60) not null,
	phone varchar(16) not null,
	description varchar(999) not null,
	get_in_touch varchar(255),
	image varchar(255)
);
create table skills
(
	skillId int primary key,
	name varchar(20) not null,
	parameter varchar(10) not null,
	userId int,
	foreign key (userId) references account(userId)
);
create table achievement
(
	achievementId int primary key,
	name varchar(20) not null,
	parameter varchar(10) not null,
	userId int,
	foreign key (userId) references account(userId)
);
create table services
(
	serviceId int primary key,
	name varchar(30) not null,
	decription varchar(999) not null,
	userId int,
	foreign key (userId) references account(userId)
);

create table history
(
	historyId int primary key,
	name varchar(30) not null,
	content varchar(999) not null,
	userId int,
	foreign key (userId) references account(userId)
);
create table education_history
(
	educationId int primary key,
    name varchar(30) not null,
	content varchar(999) not null,
	year_start int not null,
	course_time varchar(10) not null,
	userId int,
	foreign key (userId) references account(userId)
);
create table teams
(
	teamId int primary key,
	name varchar(20) not null,
	decription varchar(999) not null,
	userId int,
	foreign key (userId) references account(userId)
);
create table product
(
	productId int primary key,
	name varchar(50) not null,
	image varchar(255) ,
	product_date date not null,
	userId int,
	foreign key (userId) references account(userId)
);
create table Product_detail
(
	pro_detailID int primary key,
	client varchar(50) not null,
	project_url varchar(40) not null,
	content varchar(999) not null,
	title varchar(50),
	category varchar(30) not null,
    userId int,
	foreign key (userId) references account(userId)
);

