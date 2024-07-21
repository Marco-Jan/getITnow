-- Benutzer-Tabelle erstellen
CREATE TABLE IF NOT EXISTS Benutzer (
    BenutzerID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(100),
    AdresseID INT,
    Email VARCHAR(100),
    Passwort VARCHAR(100),
    Geburtsdatum DATE,
    Rolle ENUM('user', 'admin') DEFAULT 'user'
) ENGINE=InnoDB;

-- Produkte-Tabelle erstellen
CREATE TABLE IF NOT EXISTS Produkte (
    ProduktID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(100),
    Beschreibung TEXT,
    Preis DECIMAL(10, 2),
    KategorieID INT,
    Lagerbestand INT
) ENGINE=InnoDB;

-- Bestellungen-Tabelle erstellen
CREATE TABLE IF NOT EXISTS Bestellungen (
    BestellID INT AUTO_INCREMENT PRIMARY KEY,
    BenutzerID INT,
    Datum DATE,
    Gesamtbetrag DECIMAL(10, 2),
    FOREIGN KEY (BenutzerID) REFERENCES Benutzer(BenutzerID)
) ENGINE=InnoDB;

-- Kategorien-Tabelle erstellen
CREATE TABLE IF NOT EXISTS Kategorien (
    KategorieID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(100)
) ENGINE=InnoDB;

-- Adressen-Tabelle erstellen
CREATE TABLE IF NOT EXISTS Adressen (
    AdresseID INT AUTO_INCREMENT PRIMARY KEY,
    BenutzerID INT,
    Straße VARCHAR(100),
    Stadt VARCHAR(100),
    Postleitzahl VARCHAR(20),
    Land VARCHAR(100),
    FOREIGN KEY (BenutzerID) REFERENCES Benutzer(BenutzerID)
) ENGINE=InnoDB;

-- Warenkorb-Tabelle erstellen
CREATE TABLE IF NOT EXISTS Warenkorb (
    WarenkorbID INT AUTO_INCREMENT PRIMARY KEY,
    BenutzerID INT,
    ProduktID INT,
    Menge INT,
    FOREIGN KEY (BenutzerID) REFERENCES Benutzer(BenutzerID),
    FOREIGN KEY (ProduktID) REFERENCES Produkte(ProduktID)
) ENGINE=InnoDB;

-- Administrator-Tabelle erstellen
CREATE TABLE IF NOT EXISTS Administrator (
    AdminID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(100),
    Email VARCHAR(100),
    Passwort VARCHAR(100)
) ENGINE=InnoDB;

INSERT INTO Benutzer (Name, AdresseID, Email, Passwort, Geburtsdatum, Rolle) VALUES
('John Doe', 1, 'john@example.com', PASSWORD('password123'), '1990-01-01', 'user'),
('Jane Smith', 2, 'jane@example.com', PASSWORD('password123'), '1992-02-02', 'user'),
('Admin User', 3, 'admin@example.com', PASSWORD('adminpassword'), '1985-03-03', 'admin');

INSERT INTO Produkte (Name, Beschreibung, Preis, KategorieID, Lagerbestand) VALUES
('Produkt 1', 'Beschreibung für Produkt 1', 19.99, 1, 100),
('Produkt 2', 'Beschreibung für Produkt 2', 29.99, 1, 150);

INSERT INTO Kategorien (Name) VALUES
('Kategorie 1'),
('Kategorie 2');

INSERT INTO Adressen (BenutzerID, Straße, Stadt, Postleitzahl, Land) VALUES
(1, 'Straße 1', 'Stadt 1', '12345', 'Land 1'),
(2, 'Straße 2', 'Stadt 2', '67890', 'Land 2'),
(3, 'Straße 3', 'Stadt 3', '54321', 'Land 3');

INSERT INTO Warenkorb (BenutzerID, ProduktID, Menge) VALUES
(1, 1, 2),
(2, 2, 1);
