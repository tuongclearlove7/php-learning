-- 1.	Identify the entities and the related information for them

-- Liệt kê các thực thể


-- Xác định mối quan hệ giữa chúng
-- books n <---> 1 categories 
-- receipts n <---> 1 students
-- receipts n <---> 1 books


-- 2.	Draw a ERD for this system  (ERD: Entities Relationship Diagram) 

-- 1.	Create a database with name is LibManagement
CREATE DATABASE IF NOT EXISTS LibManagement COLLATE utf8_unicode_ci;

-- TẠO BẢNG Categories
CREATE TABLE categories(
    category_id     VARCHAR(3) PRIMARY KEY,
    category_name   VARCHAR(50),
    more_info       VARCHAR(255)
);
-- TẠO BẢNG books
CREATE TABLE books(
    book_id     VARCHAR(6) PRIMARY KEY,
    name   VARCHAR(50),
    publisher       VARCHAR(50),
    author       VARCHAR(50),
    category_id       VARCHAR(3),
    num_of_page       INT(10),
    max_date        INT(5),
    num             INT(5),
    summary         VARCHAR(255),
    picture         VARCHAR(255)
);

-- TẠO BẢNG students
CREATE TABLE students(
    card_id     VARCHAR(8) PRIMARY KEY,
    name   VARCHAR(50),
    address       VARCHAR(255),
    tel     VARCHAR(10)
);

-- TẠO BẢNG receipts
CREATE TABLE receipts(
    card_id     VARCHAR(8),
    book_id     VARCHAR(6),
    date_borow   DateTime,
    date_return  DateTime,
    return_ok    Boolean
);

-- Tạo khoá ngoại cho bảng books
ALTER TABLE books
ADD CONSTRAINT booksFkcategories
    FOREIGN KEY (category_id) REFERENCES categories (category_id);

-- Tạo khoá ngoại cho bảng receipts
ALTER TABLE receipts
ADD CONSTRAINT receiptsFkbooks
    FOREIGN KEY (book_id) REFERENCES books (book_id);

ALTER TABLE receipts
ADD CONSTRAINT receiptsFkstudents
    FOREIGN KEY (card_id) REFERENCES students (card_id);

-- Chèn dữ liệu vào bảng categories
INSERT INTO categories(category_id, category_name, more_info)
VALUES ('CSD','Cơ sở dữ liệu','Access, Oracle'),
       ('ECO','Ecommerce','Sách về thương mại điện tử'),
       ('GTT','Giải thuật','Các bài toán mẫu, các giải thuật, cấu trúc dữ liệu'),
    ('HTT','Hệ thống','Windows, Linux, Unix'),
    ('LTT','Ngôn ngữ lập trình','Visual Basic, C, C++, Java'),
    ('PTK','Phân tích và thiết kế','Phân tích và thiết kế giải thuật, hệ thống thông tin v.v.'),
    ('VPP','Văn phòng','Word, Excel'),
    ('WEB','Web','Javascript, Vbscript,HTML, Flash');

INSERT INTO books(book_id, name, publisher, author, category_id, num_of_page, max_date, num, summary)
('CSD001', 'Cơ sở dữ liệu', 'NXB Giáo dục', 'Ðỗ Trung Tấn', 'CSD', 200, 3, 3, 'Thiết kế CSDL' ),
('CSD002', 'SQL Server 7.0', 'NXB Ðồng Nai', 'Elicom', 'CSD', 200, 3, 2, 'Thiết CSDL và sử dụng SQL Server' ),
('CSD003', 'Oracle 8i', 'NXB Giáo dục', 'Trần Tiến Dũng', 'CSD', 500, 5, 3, 'Từng bước sử dụng Oracle' ),
('HTT001', 'Windows 2000 Professional', 'NXB Giáo dục', 'Anh Thư', 'HTT', 500, 3, 2, 'Sử dụng Windows 2000' ),
('HTT002', 'Windows 2000 Advanced Server', 'NXB Giáo dục', 'Anh Thư', 'HTT', 500, 5, 2, 'Sử dụng Windows 2000 Server' ),
('LTT001', 'Lập trình visual Basic 6', 'NXB Giáo dục', 'Nguyễn Tiến', 'LTT', 600, 3, 3, 'Kỹ thuật lập trình Visual Basic' ),
('LTT002', 'Ngôn ngữ lập trình c++', 'NXB Thống kê', 'Tăng Ðình Quý', 'LTT', 500, 5, 3, 'Hướng dẫn lập trình hướng đối tượng và C++' ),
('LTT003', 'Lập trình Windows bằng Visual c++', 'NXB Giáo dục', 'Ðặng Văn Ðức', 'LTT', 300, 4, 3, 'Hướng dẫn từng bước lập trình trên Windows' ),
('VPP001', 'Excel Toàn tập', 'NXB Trẻ', 'Ðoàn Công Hùng', 'VPP', 1000, 5, 4, 'Trình bày mọi vấn đề về Excel' ),
('VPP002', 'Word 2000 Toàn tập', 'NXB Trẻ', 'Ðoàn Công Hùng', 'VPP', 1000, 4, 3, 'Trình bày mọi vấn đề về Word' ),
('VPP003', 'Làm kế toán bằng Excel', 'NXB Thống kê', 'Vu Duy Sanh', 'VPP', 200, 5, 2, 'Trình bày phương pháp làm kế toán' ),
('WEB001', 'Javascript', 'NXB Trẻ', 'Lê Minh Trí', 'WEB', 200, 5, 2, 'Từng bước thiết kế Web động' ),
('WEB002', 'HTML', 'NXB Giáo Dục', 'Nguyễn Thị Minh Khoa', 'WEB', 100, 3, 2, 'Từng bước làm quen với WEB' );

INSERT INTO students(card_id, name, address, tel)
values
('STIT0001', 'Vy Văn Việt', '92-Quang Trung- Đà Nẵng', '511810583'),
('STIT0002', 'Nguyễn Khánh', '93-Quang Trung- Đà Nẵng', '511810583'),
('STIT0003', 'Nguyễn Minh Quốc', '92-Quang Trung- Đà Nẵng', '511810583'),
('STIT0004', 'Hồ Phước Thoi', '122-Quang Trung- Đà Nẵng', '511810583'),
('STIT0005', 'Nguyễn Văn Định', '132-Quang Trung- Đà Nẵng', '511810583'),
('STIT0006', 'Nguyễn Văn Hải', '162-Quang Trung- Đà Nẵng', '511810583'),
('STIT0007', 'Nguyễn Thị Thuý Hà', '22-Quang Trung- Đà Nẵng', '511810583'),
('STIT0008', 'Đỗ Thị Thiên Ngân', '98-Quang Trung- Đà Nẵng', '511810583'),
('STIT0009', 'Nguyễn Văn A', '30- Phan Chu Trinh- Đà Nẵng', '913576890');

INSERT INTO receipts(card_id,book_id,date_borow,date_return,return_ok)
values
('STIT0001', 'CSD001', '2014-07-30', null,0),
('STIT0001', 'LTT001', '2014-06-30', '2014-07-25',1),
('STIT0002', 'CSD002', '2014-08-15', null,0),
('STIT0002', 'LTT003', '2014-08-10', '2014-08-30',1),
('STIT0003', 'WEB001', '2014-07-10', '2014-07-20',1),
('STIT0004', 'HTT001', '2014-08-10', null,0),
('STIT0004', 'HTT002', '2014-08-20', '2014-08-25',1),
('STIT0006', 'WEB001', '2014-08-30', null,0),
('STIT0006', 'CSD002', '2014-08-10', '2014-08-15',1),
('STIT0006', 'WEB002', '2014-07-15', '2014-07-30',1),
('STIT0007', 'VPP001', '2014-08-30', null,0),
('STIT0007', 'VPP003', '2014-08-20', '2014-08-25',1),
('STIT0008', 'VPP001', '2014-08-30', null,0),
('STIT0009', 'CSD001', '2014-08-20', '2014-08-23',1);


