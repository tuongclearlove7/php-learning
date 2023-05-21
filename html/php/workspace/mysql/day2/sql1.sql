-- tạo database
create database news_db COLLATE utf8_unicode_ci;
create database if not EXISTS news_db COLLATE utf8_unicode_ci;

use news_db;
-- tạo bảng
create table categories(
	
		category_id int(10) primary key auto_increment,
        category_name varchar(255) not null,
        description varchar(255),
        create_at timestamp,
        update_at datetime
	
);
create table articles(
	
		article_id int(10) primary key auto_increment,
        article_name varchar(255) not null,
        description varchar(255),
        content text(10000),
        image varchar(255),
        category_id int(10) ,
        user_id int(10) ,
        create_at timestamp,
        update_at datetime
	
);

create table users(
	
		user_id int(10) primary key auto_increment,
        user_name varchar(255) not null,
        password varchar(255),
        create_at timestamp,
        update_at datetime
	
);

-- tạo khóa ngoại
alter table articles
add constraint articlesFkcategories
	foreign key (category_id) references categories(category_id);
    
alter table articles
add constraint articlesFkusers
	foreign key (user_id) references users(user_id);

















































































