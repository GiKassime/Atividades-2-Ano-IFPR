
create database  Empresa;
use Empresa;

create table Departamento (
	cod_dept int primary key,
    descricao varchar(100) not null
);
create table Funcionario (
cod_func int primary key,
nome varchar(100) not null,
endereco varchar(150),
telefone varchar(15),
cod_departamento int,
foreign key (cod_departamento) references Departamento(cod_dept)
);
create table Dependente (
cod_dep int primary key,
nome varchar(100) not null,
data_nasc date,
cod_funcionario int,
foreign key (cod_funcionario) references Funcionario(cod_func)
);

alter table Funcionario add dataNasc date;
alter table Departamento modify descricao char(50);
alter table Departamento add teste varchar(1000);
alter table Dependente add profissao varchar(50);
alter table Departamento drop column teste;
desc Dependente;

insert into Funcionario values (1,'Jõao Silva', 'Rua A, 123', '9999-1111',1,'1985-01-15'),
(2,'Maria Silva', 'Rua A, 123', '9999-1111',2,'1985-01-15'),
(3,'Carlos Silva', 'Rua A, 123', '9999-1111',3,'1985-01-15');

insert into Departamento values (1,'RH'),
(2,'TI'),
(3,'Financeiro');

insert into Dependente(cod_dep,cod_funcionario,nome,data_nasc) values (1,1,'Ana','1985-01-15'),
(2,2,'Pedro','1985-01-15'),
(3,3,'Carlos Silva','1985-01-15');

select * from Dependente;

alter table medico add crm int;
SHOW CREATE TABLE medico;
alter table medico drop crm;
alter table medico change cidade cidadeNasc varchar(20);
alter table paciente modify cpf varchar(20);
desc medico;
desc paciente;
desc consulta;
alter table consulta add primary key(codmed);
alter table consulta add foreign key();
update medico set especialidade  = 'Dermatologia' where nomeMed = 'Pedro';
delete from paciente where nomeCliente = "Lucia";
desc paciente;
delete from consulta where codPac = 3 ;
select * from consulta;
select * from paciente;

DROP DATABASE empresa;
create database empresa;
use empresa;
CREATE TABLE Departamento (
    Codigo INT PRIMARY KEY,
    Nome VARCHAR(100),
    Localizacao VARCHAR(100),
    CodigoFuncionarioGerente INT
);
CREATE TABLE Funcionario (
    Codigo INT PRIMARY KEY,
    PrimeiroNome VARCHAR(50),
    SegundoNome VARCHAR(50),
    UltimoNome VARCHAR(50),
    DataNasci DATE,
    CPF CHAR(11),
    RG CHAR(9),
    Endereco VARCHAR(200),
    CEP CHAR(8),
    Cidade VARCHAR(100),
    Fone VARCHAR(15),
    CodigoDepartamento INT,
    Funcao VARCHAR(50),
    Salario DECIMAL(10, 2),
    FOREIGN KEY (CodigoDepartamento) REFERENCES Departamento(Codigo)
);
INSERT INTO Departamento (Codigo, Nome, Localizacao, CodigoFuncionarioGerente)
VALUES
(1, 'Recursos Humanos', 'Andar 2', 2), 
(2, 'Tecnologia da Informação', 'Andar 3', 1), 
(3, 'Direção Executiva', 'Andar 10', 3); 
INSERT INTO Funcionario (Codigo, PrimeiroNome, SegundoNome, UltimoNome, DataNasci, CPF, RG, Endereco, CEP, Cidade, Fone, CodigoDepartamento, Funcao, Salario)
VALUES
(1, 'João', 'da Silva', 'Oliveira', '1985-06-15', '12345678901', '123456789', 'Rua A, 123 - Centro', '12345678', 'São Paulo', '(11) 98765-4321', 2, 'Analista', 3500.00),
(2, 'Maria', 'de Souza', 'Santos', '1990-03-22', '98765432100', '987654321', 'Av. B, 456 - Vila Mariana', '87654321', 'São Paulo', '(11) 91234-5678', 1, 'Coordenadora', 5000.00),
(3, 'Carlos', 'Eduardo', 'Lima', '1982-11-10', '11122334455', '112233445', 'Rua C, 789 - Jardim Paulista', '23456789', 'São Paulo', '(11) 92345-6789', 3, 'Diretor', 9000.00),
(4, 'Ana', 'Carolina', 'Fernandes', '1995-01-10', '11223344556', '223344556', 'Rua D, 101 - Vila Progredir', '98765432', 'São Paulo', '(11) 93456-7890', 2, 'Desenvolvedora', 4500.00),
(5, 'Lucas', 'Pereira', 'Gomes', '1988-07-30', '22334455667', '334455667', 'Av. E, 202 - Campo Limpo', '11223344', 'São Paulo', '(11) 98765-1234', 2, 'Analista de Suporte', 4000.00),
(6, 'Juliana', 'Alves', 'Mendes', '1992-05-17', '33445566778', '445566778', 'Rua F, 303 - Zona Norte', '22334455', 'São Paulo', '(11) 93654-4321', 1, 'Assistente de RH', 2500.00);

ALTER TABLE Departamento
ADD CONSTRAINT CodigoFuncionarioGerente  FOREIGN KEY (CodigoFuncionarioGerente) REFERENCES Funcionario(Codigo);

-- Exercicio a) Listar nome e sobrenome ordenado por sobrenome
SELECT PrimeiroNome, SegundoNome FROM Funcionario ORDER BY SegundoNome;
-- b) Listar todos os campos de funcionários ordenados por cidade
SELECT * FROM Funcionario ORDER BY Cidade;
-- c) Liste os funcionários que têm salário superior a R$ 1.000,00
-- ordenados pelo nome completo
SELECT PrimeiroNome, SegundoNome, UltimoNome, Salario FROM Funcionario Where salario > 1000 ORDER BY PrimeiroNome, SegundoNome, UltimoNome;
-- d) Liste a data de nascimento e o primeiro nome dos funcionários
-- ordenados do mais novo para o mais velho
Select DataNasci, PrimeiroNome from Funcionario order by  DataNasci desc;
-- e) Liste os funcionários como uma listagem telefônica
Select PrimeiroNome, SegundoNome, Fone from Funcionario
order by PrimeiroNome,SegundoNome;
-- f) Liste o total da folha de pagamento
Select SUM(Salario) as TotalFolhaPagamento from Funcionario;
-- g) Liste o nome, o nome do departamento e a função de todos os
-- funcionários
SELECT F.PrimeiroNome, D.Nome, F.Funcao
FROM Funcionario F
JOIN Departamento D ON F.CodigoDepartamento = D.Codigo;
-- h) Liste todos departamentos com seus respectivos gerentes
SELECT D.Nome, F.PrimeiroNome, F.Funcao
FROM Departamento D
JOIN Funcionario F ON D.CodigoFuncionarioGerente = F.Codigo;
-- i) Liste o valor da folha de pagamento de cada departamento (nome)
SELECT 
    d.Nome AS Departamento,
    SUM(f.Salario) AS FolhaDePagamento
FROM 
    Departamento d
JOIN 
    Funcionario f ON d.Codigo = f.CodigoDepartamento
GROUP BY 
    d.Nome;
-- j) Liste os departamentos dos funcionários que têm a função de
-- supervisor
SELECT 
    f.PrimeiroNome,
    d.Nome AS Departamento
FROM 
    Funcionario f
JOIN 
    Departamento d ON f.CodigoDepartamento = d.Codigo
WHERE 
    f.Funcao = 'Supervisor';
-- k) Liste a quantidade de funcionários desta empresa
Select count(codigo) as QuantidadeFuncionarios from Funcionario;
-- l) Liste o salário médio pago pela empresa
SELECT 
    AVG(Salario) AS SalarioMedio
FROM 
    Funcionario;
-- m) Liste os nomes dos funcionários que moram em Recife e que exerçam
-- a função de Telefonista
Select PrimeiroNome from Funcionario where Cidade = 'Recife' and Funcao = 'Telefonista';
-- n) Liste o nome do departamento e do funcionário ordenados por
-- departamento e funcionário
Select D.Nome AS NomeDepartamento, F.PrimeiroNome 
From Funcionario F
Join Departamento D ON F.CodigoDepartamento = D.Codigo;
-- o) Liste o nome completo de todos os funcionários que não tenham
-- segundo nome
SELECT PrimeiroNome, SegundoNome, UltimoNome from Funcionario where SegundoNome  is null;
-- p) Liste o menor salário pago pela empresa em cada departamento
Select min(Salario) as MinimoSalarioPagoPelaEmpresa from Funcionario;
