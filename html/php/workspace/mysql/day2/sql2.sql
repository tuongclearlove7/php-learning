create database followings COLLATE utf8_unicode_ci;
create database if not EXISTS followings COLLATE utf8_unicode_ci;

use followings;

create table vendors(
	
		vendor_id int(10) primary key auto_increment,
        vendor_name varchar(45) not null,
        vendor_address varchar(45),
        vendor_city varchar(45),
        vendor_state varchar(45),
        vendor_zipcode varchar(45),
        vendor_phone varchar(45),
        create_at timestamp,
        update_at datetime
	
);

create table invoices(
	
		invoice_id int(10) primary key auto_increment,
        vendor_id int(10),
        invoice_number varchar(45),
        invoice_date datetime,
        invoice_total decimal,
        payment_total decimal,
        create_at timestamp,
        update_at datetime
	
);
-- tạo khóa ngoại trong bảng
CREATE  TABLE IF NOT EXISTS lineItems (
	  lineItem_id     INT          NOT NULL  AUTO_INCREMENT,
	  invoice_id     INT          NOT NULL,
	  description    VARCHAR(45)  NOT NULL,
	  quantity       INT          NOT NULL,
	  price          DECIMAL      NOT NULL,
	  lineItemTotal  DECIMAL      NOT NULL,
	  PRIMARY KEY (lineItem_id),
	  CONSTRAINT lineItemsFkInvoices
		FOREIGN KEY (invoice_id) REFERENCES invoices(invoice_id)
);

show tables;
alter table invoices
add constraint invoicesFkvendors
	foreign key (vendor_id) references vendors(vendor_id);
    
alter table lineItems
-- add constraint invoicesFklineItems	foreign key (lineItem_id) references lineItems(lineItem_id);
add CONSTRAINT lineItemsFkInvoices
    FOREIGN KEY (invoice_id) REFERENCES invoices(invoice_id);
-- xem cấu trúc bảng
desc invoices;
drop table lineItems;





























