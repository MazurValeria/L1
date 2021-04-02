CREATE TABLE users (
                       id int(5) unsigned auto_increment primary key,
                       name varchar(255) NOT NULL,
                       age int(3) NULL
);
INSERT INTO users (name, age) VALUES ('Dmytro Kotenko', 32);

INSERT INTO users (name, age)
VALUES
('Bart Simpson', 7),
('Homer Simpson', 40),
('Marge Simpson', 32),
('Meggie Simpson', 2);

INSERT INTO users (name) VALUES ('Snowball');

SELECT * FROM users;
SELECT name FROM users;

create table user_contacts
(
    id      int(11) unsigned auto_increment primary key,
    type    enum ('phone', 'email', 'address', 'fax'),
    contact varchar(255) not null unique,
    user_id int(5) unsigned,
    CONSTRAINT `fk-user_contacts-user_id-users-id`
        FOREIGN KEY (user_id)
            REFERENCES users (id)
            ON DELETE RESTRICT
            ON UPDATE CASCADE
);

INSERT INTO user_contacts (type, contact, user_id)
VALUES
       ('phone', '+37369584354', 1),
       ('email', 'mazurvaleria@gmail.com', 1),
       ('fax', '+37369584354', 1);