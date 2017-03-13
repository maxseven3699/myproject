ตารางผู้ดูแลระบบ
create table admin(
username char(16) not null primary key,
password char(16) not null
);

ตารางผู้ใช้
create table users(
username varchar(20) not null primary key,
password varchar(20) not null,
repassword varchar(20) not null,
answer varchar(50) not null,
address varchar(100) not null,
tel varchar(20) not null,
fax varchar(20) not null,
email varchar(20) not null
);