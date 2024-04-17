<?php
CREATE TABLE users (
    user_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
    user_first varchar(256) not null,
    user_last varchar(256) not null,
    user_email varchar(256)not null,
    user_uid varchar(256)not null,
    user_pwd varchar(256)not null,
);

Insert INTO users (user_first, user_last, user_email, user_uid, user_pwd)
VALUES ('Libby', 'Simpson', 'simpsonlee18797@gmail.com', 'Admin', 'test123');
?>

Insert INTO users (user_first, user_last, user_email, user_uid, user_pwd)
VALUES ('Libby', 'Simpson', 'simpson187@gmail.com', 'Admin', 'test123');

Insert INTO users (user_first, user_last, user_email, user_uid, user_pwd)
VALUES ('Lee', 'Sampson', 'Lee@students.jmcss.org', 'A', 'test1234');