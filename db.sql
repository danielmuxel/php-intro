DROP DATABASE IF EXISTS people;
CREATE DATABASE IF NOT EXISTS people;

CREATE TABLE country (
  id INTEGER PRIMARY KEY AUTO_INCREMENT,
  name TEXT NOT NULL
);

CREATE TABLE person (
  id INTEGER PRIMARY KEY AUTO_INCREMENT,
  firstname TEXT NOT NULL,
  lastname TEXT NOT NULL,
  birthdate DATE NOT NULL,
  image TEXT NOT NULL,
  country_id INTEGER NOT NULL,
  FOREIGN KEY(country_id) REFERENCES country(id)
);

INSERT INTO person (firstname, lastname, birthdate, image)
VALUES ('John', 'Doe', '2000-01-01', 'john.jpg'),
('Jane', 'Doe', '2000-01-01', 'jane.jpg'),
('Jack', 'Doe', '2000-01-01', 'jack.jpg'),
('Jill', 'Doe', '2000-01-01', 'jill.jpg');
