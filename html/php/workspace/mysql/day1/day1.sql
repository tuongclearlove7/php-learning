SELECT * FROM my_guitar_shop1.products;
SELECT * FROM my_guitar_shop1.categories;
select * from products order by listprice asc limit 5;
select productID, productname, categoryname, listprice from products, categories where categories.categoryid = products.categoryid;
select productID, productname, categoryname, listprice from products, categories where categories.categoryid = products.categoryid and listprice < 500;
select * from products, categories;
select * from products inner join categories on categories.categoryid = products.categoryid;
select productID, productname, categoryname, listprice 
from products inner join categories on categories.categoryid = products.categoryid order by listprice desc limit 5, 3;








