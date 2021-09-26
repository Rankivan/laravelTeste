-- Scripts relacionados ao sistema de bares e restaurantes
-- ====================================================================================================================

-- Criação da tabela usuarios
CREATE TABLE usuario
(
    id            INT                                NOT NULL AUTO_INCREMENT PRIMARY KEY,
    usuario       VARCHAR(50)                        NOT NULL,
    senha         VARCHAR(100)                       NOT NULL,
    nome          VARCHAR(50)                        not NULL,
    nivel_acesso  int(11) not null,
    usu_inclusao  INT(11) NULL,
    usu_alteracao INT(11) NULL,
    dat_inclusao  DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL,
    dat_alteracao DATETIME NULL,
    removido      INT(11) DEFAULT 0 NOT NULL,

    constraint fk_usuarios_nivel_acesso foreign key (nivel_acesso) references A1.nivel_acesso (id)
);

-- Insere dados em usuarios
INSERT INTO A1.usuario
(usuario, senha, nome, nivel_acesso)
VALUES ('usuarioComum', '151921', 'Usuário Comum', 1);


-- Criação da tabela nivel_acesso
CREATE TABLE nivel_acesso
(
    id           INT                                NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome         VARCHAR(50)                        NOT NULL,
    role         VARCHAR(100)                       NOT NULL,
    dat_inclusao DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL,
    removido     INT(11) DEFAULT 0 NOT NULL

);

-- Insere dados em nivel_acesso
INSERT INTO A1.nivel_acesso
(nome, role)
VALUES ('Perfil usuário comum', 'ROLE_USUARIO_COMUM');





