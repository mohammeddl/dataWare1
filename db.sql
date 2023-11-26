CREATE DATABASE DataWare CHARACTER SET utf8 COLLATE utf8_general_ci;

-- Table for projects
CREATE TABLE projects (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255),
    date_Debut DATE,
    date_Fin DATE
);

-- Table for equipes
CREATE TABLE equipes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    project_ID INT,
    scrumMaster_ID INT,
    FOREIGN KEY (project_ID) REFERENCES projects(id)
);

-- Table for persons
CREATE TABLE persons (
    id INT PRIMARY KEY AUTO_INCREMENT,
    Nom VARCHAR(255),
    Prenom VARCHAR(255),
    Email VARCHAR(255),
    Telephone VARCHAR(20),
    pass VARCHAR(255),
    Role VARCHAR(255) DEFAULT 'member',
    equipe_ID INT,
    project_ID INT,
    FOREIGN KEY (equipe_ID) REFERENCES equipes(id),
    FOREIGN KEY (project_ID) REFERENCES projects(id)
);
