CREATE DATABASE WebDevEnvironment;

USE WebDevEnvironment;

CREATE TABLE IF NOT EXISTS User (
  id INT PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS Logbook (
  id INT PRIMARY KEY AUTO_INCREMENT,
  userID INT NOT NULL,
  logbook TEXT,
  CONSTRAINT userIDFK FOREIGN KEY (userID) REFERENCES User(id)
);

CREATE TABLE IF NOT EXISTS Question (
  id INT PRIMARY KEY AUTO_INCREMENT,
  userID INT NOT NULL,
  question TEXT NOT NULL,
  detail TEXT,
  created TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  CONSTRAINT user_IDFK FOREIGN KEY (userID) REFERENCES User(id)
);

CREATE TABLE IF NOT EXISTS Reply (
  id INT PRIMARY KEY AUTO_INCREMENT,
  questionID INT NOT NULL,
  userID INT NOT NULL,
  reply TEXT NOT NULL,
  created TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  CONSTRAINT user__IDFK FOREIGN KEY (userID) REFERENCES User(id),
  CONSTRAINT questionIDFK FOREIGN KEY (questionID) REFERENCES Question(id)
);

INSERT INTO `WebDevEnvironment`.`User` (`id`, `username`, `password`) VALUES (NULL, 'RyanAdmin', 'admin');
INSERT INTO `WebDevEnvironment`.`Question` (`id`, `userID`, `question`, `detail`, `created`) VALUES (NULL, 1, 'Why is HTML annoying?', 'LOL JK Its ok really', CURRENT_TIMESTAMP), (NULL, 1, 'Why do you have to test things?', 'They should work straight away', CURRENT_TIMESTAMP);
INSERT INTO `WebDevEnvironment`.`Question` (`id`, `userID`, `question`, `detail`, `created`) VALUES (NULL, 1, 'When do I need to use Node.js?', 'Is Node.js the way forward??', CURRENT_TIMESTAMP);

INSERT INTO `WebDevEnvironment`.`Question` (`id`, `userID`, `question`, `created`) VALUES (NULL, 1, 'test', CURRENT_TIMESTAMP);