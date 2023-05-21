USE my_guitar_shop2;

select productName, listPrice, discountPercent, dateAdded from products
where (dateAdded >= '2021-06-01' 
and dateAdded <= '2021-06-30' 
and discountPercent > 25);
    
select productName, listPrice, discountPercent, dateAdded from products
where (month(dateAdded) = 6 and year(dateAdded) = 2021
and discountPercent > 25);

select productName, listPrice, discountPercent, dateAdded, description from products
where dateAdded between '2021-06-01' and '2021-06-30' 
and discountPercent > 25;

select productName, listPrice, discountPercent, dateAdded, description from products
where dateAdded like '2021-07-%' 
and '2021-06-30' and discountPercent > 15;

-- bổ sung thêm tên loại sản phẩm (categoryName thuộc bảng categories)
-- 
select productName, categoryName, listPrice, 
discountPercent, dateAdded, description 
from products 
inner join categories on products.categoryID = categories.categoryID;

select productName as name , listPrice as 'price', 
discountPercent as countPercent, dateAdded from products
where discountPercent > 10;
-- đếm số sp có đơn giá lớn hơn 500
select count(productName) as 'Số sản phẩm lớn hơn 500' from products
where listPrice>500;

-- Tính giá trung bình của mỗi sp
select avg(listPrice) as 'Giá trung bình' from products;
-- Tìm giá lớn nhất
select  max(listPrice) as 'Giá lớn nhất' from products;
-- tìm sản phẩm có giá lớn nhất
select productName as 'Sản phẩm có giá lớn nhất' from products
where listPrice = (select  max(listPrice) as 'Giá lớn nhất' from products);

select * from products;
    
    
    
    
    
    
    
    
    
    
    
    
    