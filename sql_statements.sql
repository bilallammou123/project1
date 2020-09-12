CREATE TABLE account (
    id int not null AUTO_INCREMENT,
    email VARCHAR(255),
    password VARCHAR(255),
    PRIMARY KEY(id)
);

CREATE TABLE Persoon(
    id int not null AUTO_INCREMENT,
    voornaam VARCHAR(255),
    tussenvoegsel VARCHAR(255),
    achternaam VARCHAR(255),
    gebruikersnaam VARCHAR(255),
    account_id int not null,
    PRIMARY KEY(id),
    FOREIGN KEY(account_id) REFERENCES account(id)
);
