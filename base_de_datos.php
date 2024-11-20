REATE TABLE users(
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(20) NOT NULL,
    second_name VARCHAR(20) NOT NULL,
    lastname VARCHAR (20) NOT NULL,
    second_lastname VARCHAR (20) NOT NULL,
    document BIGINT (10) UNIQUE NOT NULL,
    password  VARCHAR (100)  NULL,
    email VARCHAR (50) NULL,
    phone BIGINT(10) NULL,
    age INT (2) NULL
 );

 