CREATE TABLE account (
	id int NOT NULL AUTO_INCREMENT,
	username varchar(50) NOT NULL,
	password varchar(50) NOT NULL,
	nom varchar(50),
	prenom varchar(50),
	PRIMARY KEY (id)
);

INSERT into account(username, password, nom, prenom) VALUES
				(12345, 12345, "John", "Doe"),
				(54321, 54321, "Johanne", "Doe");