create table pcategory
(
	id int primary key auto_increment,
	name varchar(200) not null unique,
	description text,
	parent int default '0',
	status tinyint default '1',
	created_at datetime default current_timestamp,
	updated_at datetime default current_timestamp
);
create table category
(
	id int primary key auto_increment,
	name varchar(200) not null unique,
	pcategory_id int not null,
	description text,
	parent int default '0',
	status tinyint default '1',
	created_at datetime default current_timestamp,
	updated_at datetime default current_timestamp
);
Alter table category Add Foreign Key FK_category_pcategory (pcategory_id) References pcategory(id);
create table product
(
	id int primary key auto_increment,
	name varchar(200) not null,
	category_id int not null,
	image varchar(200),
	description text,
	quantity int,
	size varchar(5),
	price float(12,3),
	sale_price float(12,3),
	status tinyint default '1',
	created_at datetime default current_timestamp,
	updated_at datetime default current_timestamp
);

Alter table product Add Foreign Key FK_product_category (category_id) References category(id);


create table product_image
(
	id int primary key auto_increment,
	link_img varchar(255) not null,
	product_id int not null,
	created_at datetime default current_timestamp,
	updated_at datetime default current_timestamp

);
Alter table product_image Add Foreign Key FK_product_image_product (product_id) References product(id);
create table attributes
(
	id int primary key auto_increment,
	name varchar(200) not null unique,
	value varchar(50) not null,
	type varchar(50) not null,
	created_at datetime default current_timestamp,
	updated_at datetime default current_timestamp
);
create table product_attribute
(
	product_id int not null,
	attribute_id int not null
);
Alter table product_attribute Add Foreign Key FK_product_attribute_product (product_id) References product(id);
Alter table product_attribute Add Foreign Key FK_product_attribute_attributes (attribute_id) References attributes(id);

create table users
(
	id int primary key auto_increment,
	name varchar(100) not null,
	email varchar(100) not null unique,
	password varchar(100) not null,
	phone varchar(20),
	address varchar(255),
	gender tinyint default '1',
	birthday date,
	level tinyint default '0',
	created_at datetime default current_timestamp,
	updated_at datetime default current_timestamp
);

create table post
(
	id int primary key auto_increment,
	name varchar(200),
	image varchar(200) default '#',
	brief text,
	content text,
	status tinyint default '0',
	created_at datetime default current_timestamp,
	updated_at datetime default current_timestamp
);

create table comment
(
	id int primary key auto_increment,
	user_id int not null,
	product_id int not null,
	post_id int not null,
	content text,
	status tinyint default '0',
	created_at datetime default current_timestamp,
	updated_at datetime default current_timestamp
);

Alter table comment Add Foreign Key FK_comment_users (user_id) References users(id);
Alter table comment Add Foreign Key FK_comment_post (post_id) References post(id);
Alter table comment Add Foreign Key FK_comment_product (product_id) References product(id);


create table orders
(
	id int primary key auto_increment,
	user_id int not null,
	status tinyint default '0',
	created_at datetime default current_timestamp,
	updated_at datetime default current_timestamp
);
Alter table orders Add Foreign Key FK_orders_users (user_id) References users(id);
create table order_detail
(
	order_id int not null,
	product_id int not null,
	quantity_id int not null,
	price float
);
Alter table order_detail Add Foreign Key FK_order_detail_orders (order_id) References orders(id);
Alter table order_detail Add Foreign Key FK_order_detail_product (product_id) References product(id);
create table slide
(
	id int primary key auto_increment,
	name varchar(200),
	image varchar(200) not null,
	link varchar(200) default '#',
	content text,
	created_at datetime default current_timestamp,
	updated_at datetime default current_timestamp
);

SELECT p.id,p.name,p.image,c.name as 'category',p.quantity,p.size,p.description,p.price,p.sale_price,p.status,p.created_at
FROM product p JOIN category c ON p.category_id = c.id;
