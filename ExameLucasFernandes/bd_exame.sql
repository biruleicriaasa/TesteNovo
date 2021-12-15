DROP DATABASE bd_exame;
CREATE DATABASE bd_exame;
USE bd_exame;

CREATE TABLE curso (
	id_cur INT NOT NULL AUTO_INCREMENT,
    nome_cur VARCHAR(100),
    duracao_cur VARCHAR(100),
    qtd_vagas_cur INT,
    tipo_cur VARCHAR(100),
    PRIMARY KEY(id_cur)
);

CREATE TABLE aluno (
	id_alu INT NOT NULL AUTO_INCREMENT,
    nome_alu VARCHAR(100),
    cpf_alu VARCHAR(14),
    rg_alu VARCHAR(30),
    endereco VARCHAR(255),
    email_alu VARCHAR(100),
    celular_alu VARCHAR(15),
    PRIMARY KEY(id_alu)
);

CREATE TABLE disciplina (
	id_dis INT NOT NULL AUTO_INCREMENT,
    nome_dis VARCHAR(100),
    carga_horaria_dis INT,
    id_cur_fk INT,
    PRIMARY KEY(id_dis),
    FOREIGN KEY(id_cur_fk) REFERENCES curso (id_cur)
);

CREATE TABLE matricula (
	id_mat INT NOT NULL AUTO_INCREMENT,
    data_mat DATE,
    horario_mat TIME,
	id_alu_fk INT,
    id_cur_fk INT,
    PRIMARY KEY(id_mat),
    FOREIGN KEY(id_alu_fk) REFERENCES aluno (id_alu),
    FOREIGN KEY(id_cur_fk) REFERENCES curso (id_cur)
);

CREATE TABLE matricula_disciplina (
	id_matd INT NOT NULL AUTO_INCREMENT,
    id_matricula_fk int,
    id_disciplina_fk int,
    PRIMARY KEY(id_matd),
    FOREIGN KEY (id_matricula_fk) REFERENCES matricula (id_mat),
    FOREIGN KEY (id_disciplina_fk) REFERENCES disciplina (id_dis)
);

INSERT INTO curso VALUES (NULL, "Téc. Informática", "3 anos", 80, "Integrado");
INSERT INTO aluno VALUES (NULL, "José de Abreu", "123.456.789-76", "84764 SSP/MT", "Rua ABC, 9032 - Jd 1, Sinop/MT",  "abreu@gmail.com", "(65) 99340-3900");
INSERT INTO disciplina VALUES (NULL, "Lógica de Programação", 160, 1);
INSERT INTO disciplina VALUES (NULL, "Introdução a Informática", 80, 1);
INSERT INTO matricula VALUES (NULL, "2021-12-13", "14:30:30", 1, 1);
INSERT INTO matricula_disciplina VALUES (NULL, 1, 1);
INSERT INTO matricula_disciplina VALUES (NULL, 1, 2);

