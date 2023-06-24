drop database if exists Blog;

create database if not exists Blog;

use Blog;

create table if not exists admin_user(
	`_id` int not null primary key auto_increment,
	username varchar(255) not null,
	`password` varchar(255) not null
);

create table if not exists blog_data(
	`_id` int not null primary key auto_increment,
	blog_title varchar(255) not null,
	blog_date date not null,
	blog_type varchar(255) not null,
	blog_weather varchar(255) not null,
	blog_pic varchar(255) not null,
	blog_content text(255) not null
);