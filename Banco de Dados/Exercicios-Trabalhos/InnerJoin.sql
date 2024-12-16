
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
email varchar(100)
);

create table Matricula (
id_aluno int ,
id_curso int,
foreign key (id_curso) references Curso(id_curso),
foreign key (id_aluno) references Aluno(id_aluno)
);

insert into Curso 
values 
(1,'Orientação a objetos',60),
(2,'Banco de Dados',48),
(3,'Desenvolvimento Web',45);

insert into Aluno values 
(1,'Guilherme','guilherme@gmail.com'),
(2,'Bianca','bianca@gmail.com'),
(3,'Livia','livia@gmail.com');

insert into Matricula values 
(1,2),
(2,3),
(3,1);

SELECT
Aluno.nome as Nome, 
Curso.nome as Nome_Curso
FROM Matricula
INNER JOIN Aluno
ON Matricula.id_aluno = Aluno.id_aluno
INNER JOIN Curso
ON Matricula.id_curso = Curso.id_curso;







    






