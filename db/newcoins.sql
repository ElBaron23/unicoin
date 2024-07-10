crete table user(
    id int PRIMARY ,
    firstname VARCHAR(25),
    lastname  VARCHAR(25),
    email  VARCHAR(25),
    phone VARCHAR(25),
    password VARCHAR(25),
);
ALTER TABLE `user` ADD `phone` TEXT NOT NULL AFTER `email`, 
ADD `adress` VARCHAR(25) NOT NULL AFTER `phone`;