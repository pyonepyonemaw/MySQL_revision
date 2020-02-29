select query

SELECT * FROM `users`;
SELECT * FROM `users` WHERE id = 1;
SELECT * FROM `users` WHERE id > 1;
SELECT * FROM `users` WHERE id >= 1;
SELECT name,email FROM users;
SELECT * FROM `users` WHERE email = 'hlaing@gmail.com';
SELECT * FROM `users` WHERE id < 2;
SELECT * FROM `users` WHERE id <> 2;
SELECT * FROM `users` WHERE id IN (1,3,4);
SELECT * FROM `users` WHERE id NOT IN (1,3,4);


create query

CREATE DATABASE cars;

show query

SHOW DATABASES;

table create query

CREATE TABLE testing(
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    testing_name VARCHAR(100) NOT NULL,
    testing_email VARCHAR(100) NOT NULL,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)

insert query

INSERT INTO users (id,name,email) VALUES ('10','testuser','testemail@email');

alter query

ALTER TABLE users CHANGE COLUMN digit price char(100) NOT NUll;
ALTER TABLE users ADD COLUMN testingcolumn char(100);
ALTER TABLE users DROP COLUMN testingcolumn;

RENAME TABLE testing TO testingupdate;
DROP TABLE testingupdate;

Aggregation query

SELECT COUNT(*) from users;
SELECT DISTINCT name FROM users;
SELECT MIN(price) FROM users;
SELECT MAX(price) FROM users;
SELECT SUM(price) FROM users;
SELECT AVG(price) FROM users;

limit query,offset query,order query,search query

SELECT * FROM users LIMIT 2;
SELECT * FROM users LIMIT 4,2;
SELECT * FROM `users` ORDER BY id DESC;
SELECT * FROM `users` ORDER BY id ASC;
SELECT * FROM `users` WHERE name LIKE '%hla%';

join query

SELECT * FROM users 
INNER JOIN class
ON users.id = class.user_id;

SELECT * FROM users 
LEFT JOIN class
ON users.id = class.user_id;

SELECT * FROM users 
RIGHT JOIN class
ON users.id = class.user_id;

SELECT * FROM users 
LEFT JOIN class
ON users.id = class.user_id
UNION
SELECT * FROM users 
RIGHT JOIN class
ON users.id = class.user_id;