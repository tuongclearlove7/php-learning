create database shop_db;
use shop_db;
create table categories (
	category_id int primary key,
	 category_name varchar(50)
);
create table products (
	product_id int primary key,
	category_id int,
	product_name varchar(50),
	price decimal,
    dateadded datetime
);
create table orderitems (
	item_id varchar(10) primary key,
    order_id varchar(10),
    item_price decimal,
    quantity int,
    product_id int
);

ALTER TABLE products
ADD CONSTRAINT fk_products_category
FOREIGN KEY (category_id)
REFERENCES categories(category_id);

ALTER TABLE orderitems
ADD CONSTRAINT fk_orderitems_product
FOREIGN KEY (product_id)
REFERENCES products(product_id);




INSERT INTO categories(category_id, category_name)
VALUES (1,'oppo'),
(2,'samsung'),
(3,'apple'),
(4,'motorola'),
(5,'htc');

INSERT INTO products(product_id, category_id, product_name, price, dateadded)
VALUES (1,1,'oppo a83',10000,'2023-10-22'),
(2, 1,'oppo f5',20000,'2023-10-22'),
(3, 1,'samsung galaxy',30000,'2023-10-22'),
(4, 1,'iphone 14',40000,'2023-10-22'),
(5, 1,'vivo v5',10000,'2023-10-22');


INSERT INTO orderitems(item_id, order_id, item_price, quantity, product_id)
VALUES ('I1','OR1', 100000, 3,1),
('I2','OR2', 100000, 4,1),
('I3','OR3', 20000, 5,1),
('I4','OR4', 23000, 6, 1),
('I5','OR5', 30000, 7,1);

select * from products;
select * from categories;
select * from orderitems;


select * from products, categories
where categories.category_id = products.category_id;

select * from products, orderitems
where products.product_id = orderitems.product_id;

update categories
set category_name = 'oppo'
where category_id = 1;












