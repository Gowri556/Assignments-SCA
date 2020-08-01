USE tablee:
CREATE TABLE content (
    id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    full_name VARCHAR(50) ,
    email VARCHAR(100) NOT NULL,
    age INT(11) NOT NULL,
    phone_number INT(12) NOT NULL,
    created_at TIMESTAMP,
    PRIMARY KEY (id)
);

INSERT INTO content (full_name, email, age, phone_number, created_at)
VALUES

    ("Gowri Rajesh" , "gowrirajesh6@gmail.com" , 20 , 7852345821 , now()),
    ("Adaa Mgbede" , "adaamgbede@gmail.com" , 22 , 7412583521 , now()),
    ("Laura Okpara" , "lauraokpara@gmail.com" , 22 , 85214785235 , now()),
    ("Swojina" , "swojina@gmail.com" , 21 , 9998765432 , now()),
    ("Goutham" , "goutham@yahoo.com" , 18 , 9998709689 , now())