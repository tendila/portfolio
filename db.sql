CREATE TABLE csao.reviews (
    item_id INT AUTO_INCREMENT,
    title VARCHAR(255),
    content VARCHAR(255),
    PRIMARY KEY (item_id)
);


INSERT INTO csao.reviews (title, content) VALUES ("1st review", "This is the genesis.");
INSERT INTO csao.reviews (title, content) VALUES ("2nd review", "Its amazing.");
INSERT INTO csao.reviews (title, content) VALUES ("3rd review", "Yeah.");
