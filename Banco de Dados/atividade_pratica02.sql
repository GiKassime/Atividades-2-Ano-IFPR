/*1 -Crie e gerencie um banco de dados para uma biblioteca com tabelas para Livros,
Autores e Categorias.*/
create DATABASE biblioteca;
use biblioteca;

/*a) Crie as tabelas Livros, Autores e Categorias com os seguintes campos:
o Livros: id (INT, chave primária), titulo (VARCHAR(100)),
ano_publicacao (YEAR), id_autor (INT, chave estrangeira para
Autores), id_categoria (INT, chave estrangeira para Categorias).
o Autores: id (INT, chave primária), nome (VARCHAR(100)),
nacionalidade (VARCHAR(50)).
o Categorias: id (INT, chave primária), descricao (VARCHAR(50)).
b) Modifique a tabela Livros para adicionar uma coluna preco do tipo
DECIMAL(5,2).
c) Acrescente um novo campo quantidade à tabela Categorias para
representar o número de livros por categoria (tipo INT).*/
create table Categoria(
	id int primary key,
    descricao varchar(50)
);
create table Autor(
	id int primary key,
    nome varchar(100),
    nacionalidade varchar(50)
);

create table Livro(
	id int primary key,
    titulo varchar(100),
    ano_publicacao year,
    id_autor int,
    id_categoria int,
    foreign key (id_categoria) references 		      Categoria(id),
    foreign key (id_autor) references 		     Autor(id) 
);

alter table Livro add preco decimal(5,2);
alter table Categoria add quantidade int;

/*3. Realize a inserção dos dados nas tabelas criadas:
a) Insira ao menos 3 registros em cada tabela com dados fictícios.
b) Adicione um novo autor e insira pelo menos um livro associado a ele na
tabela Livros.*/
INSERT INTO Categoria (id, descricao, quantidade) VALUES
(1, 'Romance', 10),
(2, 'Ficção Científica', 5),
(3, 'História', 8);
INSERT INTO Autor (id, nome, nacionalidade) VALUES
(1, 'Gabriel Garcia Marquez', 'Colombiana'),
(2, 'Isaac Asimov', 'Russa'),
(3, 'Yuval Noah Harari', 'Israelense');
INSERT INTO Livro (id, titulo, ano_publicacao, id_autor, id_categoria, preco) VALUES
(1, 'Cem Anos de Solidão', 1967, 1, 1, 39.90),
(2, 'Fundação', 1951, 2, 2, 49.90),
(3, 'Sapiens: Uma Breve História da Humanidade', 2011, 3, 3, 59.90);
INSERT INTO Autor (id, nome, nacionalidade) VALUES
(4, 'J.K. Rowling', 'Britânica');
INSERT INTO Livro (id, titulo, ano_publicacao, id_autor, id_categoria, preco) VALUES
(4, 'Harry Potter e a Pedra Filosofal', 1997, 4, 1, 29.90);

/*4. Atualize os dados das tabelas:
a) Atualize o campo descricao da categoria com id = 1 para "Romance".
b) Aumente o preço de todos os livros publicados antes do ano 2000 em
10%.
c) Corrija o nome de um autor para "Gabriel García Márquez" se ele foi
inserido incorretamente.*/

update categoria set descricao = "Romance" where id=1;

update Livro
set preco = preco * 1.10
WHERE ano_publicacao < 2000;

update Autor
set nome = 'Gabriel García Márquez'
where id = 2;

/*5. Exclua os dados das tabelas conforme abaixo:
a) Exclua todos os registros da tabela Livros onde o ano_publicacao é
anterior a 1950.
b) Remova a categoria com menos de 5 livros (se o campo quantidade já tiver
sido preenchido na tabela Categorias).*/

drop Livro where ano_publicacao < 1950;

drop Categoria where quantidade < 5;

/*6. Realize a remoção de colunas e tabelas:
a) Delete a coluna quantidade da tabela Categorias.*/

alter table Categorias  drop column quantidade;
