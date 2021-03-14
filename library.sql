//Задание 2
CREATE TABLE author (
  id integer PRIMARY KEY AUTO_INCREMENT,
  author_name text NOT NULL
                           );

CREATE TABLE book (
  id integer PRIMARY KEY AUTO_INCREMENT,
  book_name text NOT NULL
                           );


CREATE TABLE author_book (id_author integer not null, 
                          id_book integer not null,
                          FOREIGN KEY (id_author) REFERENCES author(id),
                          FOREIGN KEY (id_book) REFERENCES book(id)
                         );

INSERT INTO author (author_name)
       values ('Толстой Л.Н.');
INSERT INTO author (author_name)
       values ('Лермонтов М.Ю.');

INSERT INTO book (book_name)
       values ('Анна Каренина');
INSERT INTO book (book_name)
       values ('Война и мир');
INSERT INTO book (book_name)
       values ('Детство');
INSERT INTO book (book_name)
       values ('Лев и собачка');
INSERT INTO book (book_name)
       values ('Сказка');
INSERT INTO book (book_name)
       values ('Два товарища');
INSERT INTO book (book_name)
       values ('Казаки');
INSERT INTO book (book_name)
       values ('Воскресенье');





INSERT INTO author_book (id_author,id_book)
       values (1,1);
INSERT INTO author_book (id_author,id_book)
       values (1,2);
INSERT INTO author_book (id_author,id_book)
       values (1,3);
INSERT INTO author_book (id_author,id_book)
       values (1,4);
INSERT INTO author_book (id_author,id_book)
       values (1,5);
INSERT INTO author_book (id_author,id_book)
       values (1,6);
INSERT INTO author_book (id_author,id_book)
       values (1,7);
INSERT INTO author_book (id_author,id_book)
       values (1,8);
INSERT INTO author_book (id_author,id_book)
       values (2,8);
INSERT INTO author_book (id_author,id_book)
       values (2,9);
INSERT INTO author_book (id_author,id_book)
       values (2,10);


SQL - запрос:
SELECT a.author_name from author a, (SELECT id_author from author_book GROUP BY id_author HAVING COUNT(id_book) <= 6) ab 
where a.id = ab.id_author;
