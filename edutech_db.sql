-- 1. Criação do Banco de Dados
CREATE DATABASE IF NOT EXISTS edutech_db
DEFAULT CHARACTER SET utf8mb4 
COLLATE utf8mb4_unicode_ci;

-- 2. Seleção do Banco de Dados para uso
USE edutech_db;

-- 3. Criação da Tabela 'cursos'
CREATE TABLE IF NOT EXISTS cursos (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome_curso` VARCHAR(150) NOT NULL,
  `area_tecnologica` VARCHAR(100) NOT NULL,
  `quantidade_alunos` INT NOT NULL,
  `empresa_patrocinadora` VARCHAR(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

select * from cursos;
