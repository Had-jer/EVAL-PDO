-- Active: 1748644731931@@localhost@8889@books

DROP DATABASE IF EXISTS books;

CREATE DATABASE books;

USE books;
DROP TABLE IF EXISTS post;
DROP TABLE IF EXISTS categorie;
DROP TABLE IF EXISTS commentaire;





CREATE TABLE categorie(
    id    TINYINT   NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name   VARCHAR(100) 
);
DROP TABLE IF EXISTS post;
CREATE TABLE post(
    id    TINYINT   NOT NULL PRIMARY KEY AUTO_INCREMENT,
    titre   VARCHAR(255)   NOT NULL,
    contenu VARCHAR(255)   NOT NULL,
    date_creation          DATE,
    categorie_id           TINYINT NOT NULL,
    FOREIGN KEY (categorie_id) REFERENCES categorie(id)
    
);


CREATE TABLE commentaire(
    id TINYINT   NOT NULL PRIMARY KEY AUTO_INCREMENT,
    auteur    VARCHAR(100) NOT NULL,
    contenu    VARCHAR(100)  NOT NULL,
    date_creation  DATETIME 
);

INSERT INTO categorie (name) VALUES
('Mindset'),
('Productivité'),
('Bien-être'),
('Communication'),
('Objectifs de vie');

INSERT INTO post (titre, contenu, date_creation, categorie_id) VALUES
('The 7 Habits of Highly Effective People', 'Stephen R. Covey', '1989-08-15', 1),
('Mindset: The New Psychology of Success', 'Carol S. Dweck', '2006-02-28', 1),
('LAlchimiste', 'Paulo Coelho', '1988-04-01', 1),


('Deep Work', 'Cal Newport', '2016-01-05', 2),
('Atomic Habits', 'James Clear', '2018-10-16', 2),
('The One Thing', 'Gary Keller & Jay Papasan', '2013-04-01', 2),


('The Power of Now', 'Eckhart Tolle', '1997-10-01', 3),
('The Subtle Art of Not Giving a F*ck', 'Mark Manson', '2016-09-13', 3),
('The Gifts of Imperfection', 'Brené Brown', '2010-09-20', 3),


('How to Win Friends and Influence People', 'Dale Carnegie', '1936-10-01', 4),
('Nonviolent Communication', 'Marshall B. Rosenberg', '1999-09-01', 4),


('Ikigai', 'Héctor García & Francesc Miralles', '2016-09-27', 5),
('Start With Why', 'Simon Sinek', '2009-10-29', 5);


