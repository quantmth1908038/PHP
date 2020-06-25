create table customer(
    id int not null auto_increment primary key,
    fullname char(255) not null ,
    email char(255) not null ,
    username char(255) not null unique ,
    password char(255) not null
)