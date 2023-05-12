### Hướng dẫn sử dụng mysql
```javascript 
- di chuyển đến folder mysql
-> cd mysql, cd bin
- Đăng nhập vào mysql 
-> mysql -u root -p
- Hiển thị tất cả các csdl 
-> show databases;
- Chọn và sử dụng cơ sở dữ liệu
-> use my_guitar_shop1;
- Hiển thị bảng trong csdl
-> show tables;
- Xem cấu trúc của bảng 
-> desc categories;
- Hiển thị giá trị trong bảng
- select * from products; ...
- Hiển thị các mặt hàng có listprice < 500
-> select * from products
   where listprice < 500;
   select productID, productName, listprice from products where listprice > 500;
   select * from products where categoryID = 2 and listprice < 500;
- Sắp xếp tăng dần
-> select * from products where listprice > 200 order by listprice asc;
- Sắp xếp giảm dần
select * from products where listprice > 200 order by listprice desc;
- lấy ra top 5 
select * from products order by listprice asc limit 5;
- lấy từ vị trí thứ 5 từ trên xuống lấy ra top 3
select * from products order by listprice desc limit 5, 3;
- Hiển thị nhiều bảng
-> select * from products, categories;
select productID, productname, categoryname, listprice from products, categories where categories.categoryid = products.categoryid;
select productID, productname, categoryname, listprice from products, categories where categories.categoryid = products.categoryid and listprice < 500;
```




























