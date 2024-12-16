
create database  InnerJoin;
use InnerJoin;

create table Curso (
id_curso int primary key,
nome varchar(100) not null,
cargaHoraria int not null
);
create table Aluno (
id_aluno int primary key,
nome varchar(100) not null,
email varchar(100),
id_curso int,
foreign key (id_curso) references Curso(id_curso)
);

insert into Curso 
values 
(1,'Orientação a objetos',60),
(2,'Banco de Dados',48),
(3,'Desenvolvimento Web',45);

insert into Aluno values 
(1,'Guilherme','guilherme@gmail.com',1),
(2,'Bianca','bianca@gmail.com',2),
(3,'Livia','livia@gmail.com',3);

SELECT
Aluno.nome as Nome, 
Curso.nome as Nome_Curso
FROM Aluno
INNER JOIN Curso 
ON Aluno.id_curso = Curso.id_curso;

