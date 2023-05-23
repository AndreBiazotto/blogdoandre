CREATE DATABASE db_blog_andre;

USE db_blog_andre;

# usuário padrão que pode alterar as postagens
CREATE TABLE user_adm(
	id INT NOT NULL AUTO_INCREMENT,
    email VARCHAR(50) NOT NULL,
    senha VARCHAR(30) NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO user_adm (email, senha) VALUES ("andre@gmail.com", "1234");
