CREATE DATABASE alunoLaravel;
USE alunoLaravel;

CREATE TABLE Alunos(
	id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100),
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);
    
    
    