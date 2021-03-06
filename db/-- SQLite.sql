-- --SQLite
-- CREATE TABLE `professor` (
-- 	`id`	INTEGER PRIMARY KEY AUTOINCREMENT,
-- 	`nome`	TEXT(255),
--     `email` TEXT(255)
-- );
INSERT INTO professor VALUES(1,'André Moraes', 'andre.moraes@ifc.edu.br');
INSERT INTO professor VALUES(2,'Ângelo Frozza', 'angelo.frozza@ifc.edu.br');
INSERT INTO professor VALUES(3,'Daniel Anderle', 'daniel.anderle@ifc.edu.br');
INSERT INTO professor VALUES(4,'Daniel Varela', 'daniel.varela@ifc.edu.br');
INSERT INTO professor VALUES(5,'Rafael Speroni', 'rafael.speroni@ifc.edu.br');
INSERT INTO professor VALUES(6,'Lidiane Visintin', 'lidiane.visintin@ifc.edu.br');

CREATE TABLE `curso` (
	`id`	INTEGER PRIMARY KEY AUTOINCREMENT,
	`nome`	TEXT(255),
	`semestres`	INTEGER,
	`id_coordenador`	INTEGER,
	constraint fk_coordenador
	  foreign key(id_coordenador)
	  references professor(id)
);

INSERT INTO curso VALUES(1,'Tecnologia em Sistemas para Internet - TSI',6,5);
INSERT INTO curso VALUES(2,'Bacharelado em Sistemas de Informação',8,3);
INSERT INTO curso VALUES(3,'Técnico em Informática Integrado',6,2);
INSERT INTO curso VALUES(4,'Bacharelado em Agronomia',8,6);
INSERT INTO curso VALUES(5,'PROEJA',6,5);

CREATE TABLE `disciplina` (
	`id`	INTEGER PRIMARY KEY AUTOINCREMENT,
	`codigo` TEXT(15),
	`nome`	TEXT(255),
	`carga`	INTEGER,
	`ementa`	TEXT(512),
	`semestre`	INTEGER,
	`id_curso`	INTEGER,
	constraint fk_disc_curso
	  foreign key(id_curso)
	  references curso(id)
);

INSERT INTO disciplina VALUES(1,'STB0301','Matemática Elementar',60,'Conjuntos Numéricos: Conjunto dos números Naturais; Conjunto dos números Inteiros; Conjunto dos números Racionais: Frações e operações com frações.',1,1);
INSERT INTO disciplina VALUES(2,'STB0302','Inglês Instrumental',60,'Conscientização do processo de leitura. Estratégias de leitura. Gramática aplicada da língua inglesa. Reconhecimento de gêneros textuais e aquisição de vocabulário. Análise textual de um gênero. Leitura intensiva de diversos gêneros textuais da área de Informática. Redação acadêmica.',1,1);
INSERT INTO disciplina VALUES(3,'STB0303','Introdução à Computação',30,'Evolução da computação (tecnologias e usos). Modelos funcionais dos computadores. Sistemas de códigos e codecs. Sistemas operacionais. Linguagens de programação. Sistemas de rede e Internet. Open Source/Free Software. O estado da arte. TI x Sustentabilidade.',1,1);
INSERT INTO disciplina VALUES(4,'STB0304','Introdução à Programação Web',60,'Infraestrutura do Ambiente Web; Páginas Estáticas e Páginas Dinâmicas; Introdução a Linguagem de Marcação HTML e suas evoluções; Folhas de Estilos (CSS); Introdução a Programação Client-Side (JavaScript); Princípios para Web Design Responsivo.',1,1);
INSERT INTO disciplina VALUES(5,'STB0305','Algoritmos e Técnicas de Programação',90,'Introdução à lógica de programação. Conceitos básicos sobre algoritmos. Algoritmos Estruturados: conceitos, estruturas de controle (seqüência, seleção e repetição)entrada e saída, atribuição; Operadores Básicos (Aritméticos, Relacionais e Lógicos); Resolução de problemas usando algoritmos; Verificação e correção de algoritmos através de testes de mesa; Implementações de algoritmos em uma linguagem de programação.Procedimentos e Funções.',1,1);
INSERT INTO disciplina VALUES(6,'STB0306','Estrutura de Dados',60,'Conjuntos Numéricos: Conjunto dos números Naturais; Conjunto dos números Inteiros; Conjunto dos números Racionais: Frações e operações com frações.',2,1);
INSERT INTO disciplina VALUES(7,'STB0307','Banco de Dados I',60,'Conscientização do processo de leitura. Estratégias de leitura. Gramática aplicada da língua inglesa. Reconhecimento de gêneros textuais e aquisição de vocabulário. Análise textual de um gênero. Leitura intensiva de diversos gêneros textuais da área de Informática. Redação acadêmica.',2,1);
INSERT INTO disciplina VALUES(8,'STB0308','Sistemas Operacionais',60,'Evolução da computação (tecnologias e usos). Modelos funcionais dos computadores. Sistemas de códigos e codecs. Sistemas operacionais. Linguagens de programação. Sistemas de rede e Internet. Open Source/Free Software. O estado da arte. TI x Sustentabilidade.',2,1);
INSERT INTO disciplina VALUES(9,'STB0309','Engenharia de Software I',60,'Infraestrutura do Ambiente Web; Páginas Estáticas e Páginas Dinâmicas; Introdução a Linguagem de Marcação HTML e suas evoluções; Folhas de Estilos (CSS); Introdução a Programação Client-Side (JavaScript); Princípios para Web Design Responsivo.',2,1);
INSERT INTO disciplina VALUES(10,'STB0305','Programação Web',60,'Introdução à lógica de programação. Conceitos básicos sobre algoritmos. Algoritmos Estruturados: conceitos, estruturas de controle (seqüência, seleção e repetição)entrada e saída, atribuição; Operadores Básicos (Aritméticos, Relacionais e Lógicos); Resolução de problemas usando algoritmos; Verificação e correção de algoritmos através de testes de mesa; Implementações de algoritmos em uma linguagem de programação.Procedimentos e Funções.',2,1);
INSERT INTO disciplina VALUES(11,'SIB0312','Desenvolvimento Web I',60,'Introdução à lógica de programação. Conceitos básicos sobre algoritmos. Algoritmos Estruturados: conceitos, estruturas de controle (seqüência, seleção e repetição)entrada e saída, atribuição; Operadores Básicos (Aritméticos, Relacionais e Lógicos); Resolução de problemas usando algoritmos; Verificação e correção de algoritmos através de testes de mesa; Implementações de algoritmos em uma linguagem de programação.Procedimentos e Funções.',5,2);
INSERT INTO disciplina VALUES(12,'SIB0313','Desenvolvimento Web II',60,'Introdução à lógica de programação. Conceitos básicos sobre algoritmos. Algoritmos Estruturados: conceitos, estruturas de controle (seqüência, seleção e repetição)entrada e saída, atribuição; Operadores Básicos (Aritméticos, Relacionais e Lógicos); Resolução de problemas usando algoritmos; Verificação e correção de algoritmos através de testes de mesa; Implementações de algoritmos em uma linguagem de programação.Procedimentos e Funções.',6,2);
