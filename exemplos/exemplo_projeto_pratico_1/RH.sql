DROP DATABASE IF EXISTS RH;
CREATE DATABASE IF NOT EXISTS RH;
USE RH;

CREATE TABLE IF NOT EXISTS REGIAO (
    ID_REGIAO INT NOT NULL PRIMARY KEY,
    NOME_REGIAO VARCHAR(25)
);

CREATE TABLE IF NOT EXISTS PAIS (
    ID_PAIS CHAR(2) NOT NULL PRIMARY KEY,
    NOME_PAIS VARCHAR(40),
    ID_REGIAO INT,
    FOREIGN KEY (ID_REGIAO)
        REFERENCES REGIAO (ID_REGIAO)
        ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS LOCALIZACAO (
    ID_LOCALIZACAO INT NOT NULL PRIMARY KEY,
    ENDERECO VARCHAR(40),
    CEP VARCHAR(12),
    CIDADE VARCHAR(30),
    ESTADO VARCHAR(25),
    ID_PAIS CHAR(2),
    FOREIGN KEY (ID_PAIS)
        REFERENCES PAIS (ID_PAIS)
        ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS FUNCAO (
    ID_FUNCAO VARCHAR(10) NOT NULL PRIMARY KEY,
    TITULO_FUNCAO VARCHAR(35),
    SALARIO_MINIMO FLOAT(22 , 2 ),
    SALARIO_MAXIMO FLOAT(22 , 2 )
);

CREATE TABLE IF NOT EXISTS DEPARTAMENTO (
    ID_DEPARTAMENTO INT NOT NULL PRIMARY KEY,
    NOME_DEPARTAMENTO VARCHAR(30),
    ID_GERENTE INT,
    ID_LOCALIZACAO INT,
    FOREIGN KEY (ID_LOCALIZACAO)
        REFERENCES LOCALIZACAO (ID_LOCALIZACAO)
        ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS FUNCIONARIO (
    ID_FUNCIONARIO INT NOT NULL PRIMARY KEY,
    NOME VARCHAR(20),
    SOBRENOME VARCHAR(25),
    EMAIL VARCHAR(25),
    TELEFONE VARCHAR(20),
    DATA_CONTRATACAO DATE,
    ID_FUNCAO VARCHAR(10),
    SALARIO FLOAT(22 , 2 ),
    COMISSAO INT,
    ID_GERENTE INT,
    ID_DEPARTAMENTO INT,
    FOREIGN KEY (ID_GERENTE)
        REFERENCES FUNCIONARIO (ID_FUNCIONARIO)
        ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (ID_DEPARTAMENTO)
        REFERENCES DEPARTAMENTO (ID_DEPARTAMENTO)
        ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (ID_FUNCAO)
        REFERENCES FUNCAO (ID_FUNCAO)
        ON UPDATE CASCADE ON DELETE CASCADE
);

        
CREATE TABLE IF NOT EXISTS HISTORICO_FUNCOES (
    ID_FUNCIONARIO INT NOT NULL,
    DATA_INICIAL DATE,
    DATA_FINAL DATE,
    ID_FUNCAO VARCHAR(10),
    ID_DEPARTAMENTO INT,
    PRIMARY KEY (ID_FUNCIONARIO , DATA_INICIAL),
    FOREIGN KEY (ID_FUNCIONARIO)
        REFERENCES FUNCIONARIO (ID_FUNCIONARIO)
        ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (ID_FUNCAO)
        REFERENCES FUNCAO (ID_FUNCAO)
        ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (ID_DEPARTAMENTO)
        REFERENCES DEPARTAMENTO (ID_DEPARTAMENTO)
        ON UPDATE CASCADE ON DELETE CASCADE
);

SHOW TABLES;
INSERT INTO REGIAO VALUES (1,'Europa');
INSERT INTO REGIAO VALUES (2,'Americas');
INSERT INTO REGIAO VALUES (3,'Asia');
INSERT INTO REGIAO VALUES (4,'Oriente Medio and Africa');
SELECT 
    *
FROM
    REGIAO;
INSERT INTO PAIS VALUES ('AR','Argentina',2);
INSERT INTO PAIS VALUES ('AU','Australia',3);
INSERT INTO PAIS VALUES ('BE','Belgica',1);
INSERT INTO PAIS VALUES ('BR','Brasil',2);
INSERT INTO PAIS VALUES ('CA','Canada',2);
INSERT INTO PAIS VALUES ('CH','Suica',1);
INSERT INTO PAIS VALUES ('CN','China',3);
INSERT INTO PAIS VALUES ('DE','Alemanha',1);
INSERT INTO PAIS VALUES ('DK','Dinamarca',1);
INSERT INTO PAIS VALUES ('EG','Egito',4);
INSERT INTO PAIS VALUES ('FR','Franca',1);
INSERT INTO PAIS VALUES ('IL','Israel',4);
INSERT INTO PAIS VALUES ('IN','India',3);
INSERT INTO PAIS VALUES ('IT','Italia',1);
INSERT INTO PAIS VALUES ('JP','Japao',3);
INSERT INTO PAIS VALUES ('KW','Kuwait',4);
INSERT INTO PAIS VALUES ('ML','Malasia',3);
INSERT INTO PAIS VALUES ('MX','Mexico',2);
INSERT INTO PAIS VALUES ('NG','Nigeria',4);
INSERT INTO PAIS VALUES ('NL','Holanda',1);
INSERT INTO PAIS VALUES ('SG','Singapura',3);
INSERT INTO PAIS VALUES ('UK','Reino Unido',1);
INSERT INTO PAIS VALUES ('US','Estados Unidos',2);
INSERT INTO PAIS VALUES ('ZM','Zambia',4);
INSERT INTO PAIS VALUES ('ZW','Zimbabwe',4);
SELECT 
    *
FROM
    PAIS;
INSERT INTO LOCALIZACAO VALUES (1000,'1297 Via Cola di Rie','00989','Roma',NULL,'IT');
INSERT INTO LOCALIZACAO VALUES (1100,'93091 Calle della Testa','10934','Venice',NULL,'IT');
INSERT INTO LOCALIZACAO VALUES (1200,'2017 Shinjuku-ku','1689','Tokyo','Tokyo Prefecture','JP');
INSERT INTO LOCALIZACAO VALUES (1300,'9450 Kamiya-cho','6823','Hiroshima',NULL,'JP');
INSERT INTO LOCALIZACAO VALUES (1400,'2014 Jabberwocky Rd','26192','Southlake','Texas','US');
INSERT INTO LOCALIZACAO VALUES (1500,'2011 Interiors Blvd','99236','South San Francisco','California','US');
INSERT INTO LOCALIZACAO VALUES (1600,'2007 Zagora St','50090','South Brunswick','New Jersey','US');
INSERT INTO LOCALIZACAO VALUES (1700,'2004 Charade Rd','98199','Seattle','Washington','US');
INSERT INTO LOCALIZACAO VALUES (1800,'147 Spadina Ave','M5V 2L7','Toronto','Ontario','CA');
INSERT INTO LOCALIZACAO VALUES (1900,'6092 Boxwood St','YSW 9T2','Whitehorse','Yukon','CA');
INSERT INTO LOCALIZACAO VALUES (2000,'40-5-12 Laogianggen','190518','Beijing',NULL,'CN');
INSERT INTO LOCALIZACAO VALUES (2100,'1298 Vileparle (E)','490231','Bombay','Maharashtra','IN');
INSERT INTO LOCALIZACAO VALUES (2200,'12-98 Victoria Street','2901','Sydney','New South Wales','AU');
INSERT INTO LOCALIZACAO VALUES (2300,'198 Clementi North','540198','Singapore',NULL,'SG');
INSERT INTO LOCALIZACAO VALUES (2400,'8204 Arthur St',NULL,'London',NULL,'UK');
INSERT INTO LOCALIZACAO VALUES (2600,'9702 Chester Road','09629850293','Stretford','Manchester','UK');
INSERT INTO LOCALIZACAO VALUES (2700,'Schwanthalerstr. 7031','80925','Munich','Bavaria','DE');
INSERT INTO LOCALIZACAO VALUES (2800,'Rua Frei Caneca 1360 ','01307-002','Sao Paulo','Sao Paulo','BR');
INSERT INTO LOCALIZACAO VALUES (2900,'20 Rue des Corps-Saints','1730','Geneva','Geneve','CH');
INSERT INTO LOCALIZACAO VALUES (3000,'Murtenstrasse 921','3095','Bern','BE','CH');
INSERT INTO LOCALIZACAO VALUES (3100,'Pieter Breughelstraat 837','3029SK','Utrecht','Utrecht','NL');
SELECT 
    *
FROM
    LOCALIZACAO;
INSERT INTO FUNCAO VALUES ('AC_ACCOUNT','Contador Publico',4200.00,9000.00);
INSERT INTO FUNCAO VALUES ('AC_MGR','Gerente Contabil',8200.00,16000.00);
INSERT INTO FUNCAO VALUES ('AD_ASST','Assistente Administrativo',3000.00,6000.00);
INSERT INTO FUNCAO VALUES ('AD_PRES','Presidente',20080.00,40000.00);
INSERT INTO FUNCAO VALUES ('AD_VP','Vice Presidente Administrativo',15000.00,30000.00);
INSERT INTO FUNCAO VALUES ('FI_ACCOUNT','Contador',4200.00,9000.00);
INSERT INTO FUNCAO VALUES ('FI_MGR','Gerente Financeiro',8200.00,16000.00);
INSERT INTO FUNCAO VALUES ('HR_REP','Representante de Recursos HUmanos',4000.00,9000.00);
INSERT INTO FUNCAO VALUES ('IT_PROG','Programador',4000.00,10000.00);
INSERT INTO FUNCAO VALUES ('MK_MAN','Gerente de Marketing',9000.00,15000.00);
INSERT INTO FUNCAO VALUES ('MK_REP','Representante de Marketing',4000.00,9000.00);
INSERT INTO FUNCAO VALUES ('PR_REP','Representante de Relacoes Publicas',4500.00,10500.00);
INSERT INTO FUNCAO VALUES ('PU_CLERK','Balconista de Compras',2500.00,5500.00);
INSERT INTO FUNCAO VALUES ('PU_MAN','Gerente de Compras',8000.00,15000.00);
INSERT INTO FUNCAO VALUES ('SA_MAN','Gerente de Vendas',10000.00,20080.00);
INSERT INTO FUNCAO VALUES ('SA_REP','Representante de Vendas',6000.00,12008.00);
INSERT INTO FUNCAO VALUES ('SH_CLERK','Balconista de Entrega',2500.00,5500.00);
INSERT INTO FUNCAO VALUES ('ST_CLERK','Balconista de Estoque',2008.00,5000.00);
INSERT INTO FUNCAO VALUES ('ST_MAN','Gerente de Estoque',5500.00,8500.00);
INSERT INTO FUNCAO VALUES ('AI_ESP','Especialista em IA',5500.00,8500.00);

SELECT 
    *
FROM
    FUNCAO;
INSERT INTO DEPARTAMENTO VALUES (10,'Administracao',200,1700);
INSERT INTO DEPARTAMENTO VALUES (20,'Marketing',201,1800);
INSERT INTO DEPARTAMENTO VALUES (30,'Compras',114,1700);
INSERT INTO DEPARTAMENTO VALUES (40,'Recursos Humanos',203,2400);
INSERT INTO DEPARTAMENTO VALUES (50,'Entrega',121,1500);
INSERT INTO DEPARTAMENTO VALUES (60,'TI',103,1400);
INSERT INTO DEPARTAMENTO VALUES (70,'Relacoes Publicas',204,2700);
INSERT INTO DEPARTAMENTO VALUES (90,'Executivo',100,1700);
INSERT INTO DEPARTAMENTO VALUES (100,'Financeiro',108,1700);
INSERT INTO DEPARTAMENTO VALUES (110,'Contabilidade',205,1700);
INSERT INTO DEPARTAMENTO VALUES (120,'Tesouro',NULL,1700);
INSERT INTO DEPARTAMENTO VALUES (130,'Taxa Corporativa',NULL,1700);
INSERT INTO DEPARTAMENTO VALUES (140,'Controle e Credito',NULL,1700);
INSERT INTO DEPARTAMENTO VALUES (150,'Servicos para Acionistas',NULL,1700);
INSERT INTO DEPARTAMENTO VALUES (160,'Benficios',NULL,1700);
INSERT INTO DEPARTAMENTO VALUES (170,'Manufatura',NULL,1700);
INSERT INTO DEPARTAMENTO VALUES (180,'Construcao',NULL,1700);
INSERT INTO DEPARTAMENTO VALUES (190,'Contratos',NULL,1700);
INSERT INTO DEPARTAMENTO VALUES (200,'Operacoes',NULL,1700);
INSERT INTO DEPARTAMENTO VALUES (210,'Suporte de TI',NULL,1700);
INSERT INTO DEPARTAMENTO VALUES (220,'NOC',NULL,1700);
INSERT INTO DEPARTAMENTO VALUES (230,'Helpdesk de TI',NULL,1700);
INSERT INTO DEPARTAMENTO VALUES (240,'Vendas para Governo',NULL,1700);
INSERT INTO DEPARTAMENTO VALUES (250,'Vendas no Varejo',NULL,1700);
INSERT INTO DEPARTAMENTO VALUES (260,'Recrutamento',NULL,1700);
INSERT INTO DEPARTAMENTO VALUES (270,'Folha de Pagamento',NULL,1700);
INSERT INTO DEPARTAMENTO VALUES (280,'Inovação',NULL,NULL);


        
SELECT 
    *
FROM
    DEPARTAMENTO;

INSERT INTO FUNCIONARIO (ID_FUNCIONARIO,NOME,SOBRENOME,EMAIL,TELEFONE,DATA_CONTRATACAO,ID_FUNCAO,SALARIO,COMISSAO,ID_GERENTE,ID_DEPARTAMENTO) VALUES (100,'Steven','King','SKING','515.123.4567','2003-07-03','AD_PRES',24000.00,NULL,NULL,90);
INSERT INTO FUNCIONARIO VALUES (101,'Neena','Kochhar','NKOCHHAR','515.123.4568','2005-09-21','AD_VP',17000.00,NULL,100,90);
INSERT INTO FUNCIONARIO VALUES (102,'Lex','De Haan','LDEHAAN','515.123.4569','2001-01-13','AD_VP',17000.00,NULL,100,90);
INSERT INTO FUNCIONARIO VALUES (103,'Alexander','Hunold','AHUNOLD','590.423.4567','2006-01-03','IT_PROG',9000.00,NULL,102,60);
INSERT INTO FUNCIONARIO VALUES (104,'Bruce','Ernst','BERNST','590.423.4568','2007-05-21','IT_PROG',6000.00,NULL,103,60);
INSERT INTO FUNCIONARIO VALUES (105,'David','Austin','DAUSTIN','590.423.4569','2005-06-25','IT_PROG',4800.00,NULL,103,60);
INSERT INTO FUNCIONARIO VALUES (106,'Valli','Pataballa','VPATABAL','590.423.4560','2006-02-05','IT_PROG',4800.00,NULL,103,60);
INSERT INTO FUNCIONARIO VALUES (107,'Diana','Lorentz','DLORENTZ','590.423.5567','2007-02-07','IT_PROG',4200.00,NULL,103,60);
INSERT INTO FUNCIONARIO VALUES (108,'Nancy','Greenberg','NGREENBE','515.124.4569','2002-08-17','FI_MGR',12008.00,NULL,101,100);
INSERT INTO FUNCIONARIO VALUES (109,'Daniel','Faviet','DFAVIET','515.124.4169','2002-08-16','FI_ACCOUNT',9000.00,NULL,108,100);
INSERT INTO FUNCIONARIO VALUES (110,'John','Chen','JCHEN','515.124.4269','2005-09-28','FI_ACCOUNT',8200.00,NULL,108,100);
INSERT INTO FUNCIONARIO VALUES (111,'Ismael','Sciarra','ISCIARRA','515.124.4369','2005-09-30','FI_ACCOUNT',7700.00,NULL,108,100);
INSERT INTO FUNCIONARIO VALUES (112,'Jose Manuel','Urman','JMURMAN','515.124.4469','2006-03-07','FI_ACCOUNT',7800.00,NULL,108,100);
INSERT INTO FUNCIONARIO VALUES (113,'Luis','Popp','LPOPP','515.124.4567','2007-12-07','FI_ACCOUNT',6900.00,NULL,108,100);
INSERT INTO FUNCIONARIO VALUES (114,'Den','Raphaely','DRAPHEAL','515.127.4561','2002-12-07','PU_MAN',11000.00,NULL,100,30);
INSERT INTO FUNCIONARIO VALUES (115,'Alexander','Khoo','AKHOO','515.127.4562','2003-05-18','PU_CLERK',3100.00,NULL,114,30);
INSERT INTO FUNCIONARIO VALUES (116,'Shelli','Baida','SBAIDA','515.127.4563','2005-12-24','PU_CLERK',2900.00,NULL,114,30);
INSERT INTO FUNCIONARIO VALUES (117,'Sigal','Tobias','STOBIAS','515.127.4564','2005-07-24','PU_CLERK',2800.00,NULL,114,30);
INSERT INTO FUNCIONARIO VALUES (118,'Guy','Himuro','GHIMURO','515.127.4565','2006-11-15','PU_CLERK',2600.00,NULL,114,30);
INSERT INTO FUNCIONARIO VALUES (119,'Karen','Colmenares','KCOLMENA','515.127.4566','2007-08-10','PU_CLERK',2500.00,NULL,114,30);
INSERT INTO FUNCIONARIO VALUES (120,'Matthew','Weiss','MWEISS','650.123.1234','2004-07-18','ST_MAN',8000.00,NULL,100,50);
INSERT INTO FUNCIONARIO VALUES (121,'Adam','Fripp','AFRIPP','650.123.2234','2005-04-10','ST_MAN',8200.00,NULL,100,50);
INSERT INTO FUNCIONARIO VALUES (122,'Payam','Kaufling','PKAUFLIN','650.123.3234','2003-05-01','ST_MAN',7900.00,NULL,100,50);
INSERT INTO FUNCIONARIO VALUES (123,'Shanta','Vollman','SVOLLMAN','650.123.4234','2005-10-10','ST_MAN',6500.00,NULL,100,50);
INSERT INTO FUNCIONARIO VALUES (124,'Kevin','Mourgos','KMOURGOS','650.123.5234','2007-11-16','ST_MAN',5800.00,NULL,100,50);
INSERT INTO FUNCIONARIO VALUES (125,'Julia','Nayer','JNAYER','650.124.1214','2005-07-16','ST_CLERK',3200.00,NULL,120,50);
INSERT INTO FUNCIONARIO VALUES (126,'Irene','Mikkilineni','IMIKKILI','650.124.1224','2006-09-28','ST_CLERK',2700.00,NULL,120,50);
INSERT INTO FUNCIONARIO VALUES (127,'James','Landry','JLANDRY','650.124.1334','2007-01-14','ST_CLERK',2400.00,NULL,120,50);
INSERT INTO FUNCIONARIO VALUES (128,'Steven','Markle','SMARKLE','650.124.1434','2008-03-08','ST_CLERK',2200.00,NULL,120,50);
INSERT INTO FUNCIONARIO VALUES (129,'Laura','Bissot','LBISSOT','650.124.5234','2005-08-20','ST_CLERK',3300.00,NULL,121,50);
INSERT INTO FUNCIONARIO VALUES (130,'Mozhe','Atkinson','MATKINSO','650.124.6234','2005-10-30','ST_CLERK',2800.00,NULL,121,50);
INSERT INTO FUNCIONARIO VALUES (131,'James','Marlow','JAMRLOW','650.124.7234','2005-02-16','ST_CLERK',2500.00,NULL,121,50);
INSERT INTO FUNCIONARIO VALUES (132,'TJ','Olson','TJOLSON','650.124.8234','2007-04-10','ST_CLERK',2100.00,NULL,121,50);
INSERT INTO FUNCIONARIO VALUES (133,'Jason','Mallin','JMALLIN','650.127.1934','2004-06-14','ST_CLERK',3300.00,NULL,122,50);
INSERT INTO FUNCIONARIO VALUES (134,'Michael','Rogers','MROGERS','650.127.1834','2006-08-26','ST_CLERK',2900.00,NULL,122,50);
INSERT INTO FUNCIONARIO VALUES (136,'Hazel','Philtanker','HPHILTAN','650.127.1634','2008-02-06','ST_CLERK',2200.00,NULL,122,50);
INSERT INTO FUNCIONARIO VALUES (137,'Renske','Ladwig','RLADWIG','650.121.1234','2003-07-14','ST_CLERK',3600.00,NULL,123,50);
INSERT INTO FUNCIONARIO VALUES (138,'Stephen','Stiles','SSTILES','650.121.2034','2005-10-26','ST_CLERK',3200.00,NULL,123,50);
INSERT INTO FUNCIONARIO VALUES (139,'John','Seo','JSEO','650.121.2019','2006-02-12','ST_CLERK',2700.00,NULL,123,50);
INSERT INTO FUNCIONARIO VALUES (140,'Joshua','Patel','JPATEL','650.121.1834','2006-04-06','ST_CLERK',2500.00,NULL,123,50);
INSERT INTO FUNCIONARIO VALUES (141,'Trenna','Rajs','TRAJS','650.121.8009','2003-10-17','ST_CLERK',3500.00,NULL,124,50);
INSERT INTO FUNCIONARIO VALUES (142,'Curtis','Davies','CDAVIES','650.121.2994','2005-01-29','ST_CLERK',3100.00,NULL,124,50);
INSERT INTO FUNCIONARIO VALUES (143,'Randall','Matos','RMATOS','650.121.2874','2006-03-15','ST_CLERK',2600.00,NULL,124,50);
INSERT INTO FUNCIONARIO VALUES (144,'Peter','Vargas','PVARGAS','650.121.2004','2006-07-09','ST_CLERK',2500.00,NULL,124,50);
INSERT INTO FUNCIONARIO VALUES (180,'Winston','Taylor','WTAYLOR','650.507.9876','2006-01-24','SH_CLERK',3200.00,NULL,120,50);
INSERT INTO FUNCIONARIO VALUES (181,'Jean','Fleaur','JFLEAUR','650.507.9877','2006-02-23','SH_CLERK',3100.00,NULL,120,50);
INSERT INTO FUNCIONARIO VALUES (182,'Martha','Sullivan','MSULLIVA','650.507.9878','2007-06-21','SH_CLERK',2500.00,NULL,120,50);
INSERT INTO FUNCIONARIO VALUES (183,'Girard','Geoni','GGEONI','650.507.9879','2008-02-03','SH_CLERK',2800.00,NULL,120,50);
INSERT INTO FUNCIONARIO VALUES (184,'Nandita','Sarchand','NSARCHAN','650.509.1876','2004-01-27','SH_CLERK',4200.00,NULL,121,50);
INSERT INTO FUNCIONARIO VALUES (185,'Alexis','Bull','ABULL','650.509.2876','2005-02-20','SH_CLERK',4100.00,NULL,121,50);
INSERT INTO FUNCIONARIO VALUES (186,'Julia','Dellinger','JDELLING','650.509.3876','2006-06-24','SH_CLERK',3400.00,NULL,121,50);
INSERT INTO FUNCIONARIO VALUES (187,'Anthony','Cabrio','ACABRIO','650.509.4876','2007-02-07','SH_CLERK',3000.00,NULL,121,50);
INSERT INTO FUNCIONARIO VALUES (188,'Kelly','Chung','KCHUNG','650.505.1876','2005-06-14','SH_CLERK',3800.00,NULL,122,50);
INSERT INTO FUNCIONARIO VALUES (189,'Jennifer','Dilly','JDILLY','650.505.2876','2005-08-13','SH_CLERK',3600.00,NULL,122,50);
INSERT INTO FUNCIONARIO VALUES (190,'Timothy','Gates','TGATES','650.505.3876','2006-07-11','SH_CLERK',2900.00,NULL,122,50);
INSERT INTO FUNCIONARIO VALUES (191,'Randall','Perkins','RPERKINS','650.505.4876','2007-12-19','SH_CLERK',2500.00,NULL,122,50);
INSERT INTO FUNCIONARIO VALUES (192,'Sarah','Bell','SBELL','650.501.1876','2004-02-04','SH_CLERK',4000.00,NULL,123,50);
INSERT INTO FUNCIONARIO VALUES (193,'Britney','Everett','BEVERETT','650.501.2876','2005-03-03','SH_CLERK',3900.00,NULL,123,50);
INSERT INTO FUNCIONARIO VALUES (194,'Samuel','McCain','SMCCAIN','650.501.3876','2006-07-01','SH_CLERK',3200.00,NULL,123,50);
INSERT INTO FUNCIONARIO VALUES (195,'Vance','Jones','VJONES','650.501.4876','2007-03-17','SH_CLERK',2800.00,NULL,123,50);
INSERT INTO FUNCIONARIO VALUES (196,'Alana','Walsh','AWALSH','650.507.9811','2006-04-24','SH_CLERK',3100.00,NULL,124,50);
INSERT INTO FUNCIONARIO VALUES (197,'Kevin','Feeney','KFEENEY','650.507.9822','2006-05-23','SH_CLERK',3000.00,NULL,124,50);
INSERT INTO FUNCIONARIO VALUES (198,'Donald','OConnell','DOCONNEL','650.507.9833','2007-06-21','SH_CLERK',2600.00,NULL,124,50);
INSERT INTO FUNCIONARIO VALUES (199,'Douglas','Grant','DGRANT','650.507.9844','2008-01-13','SH_CLERK',2600.00,NULL,124,50);
INSERT INTO FUNCIONARIO VALUES (200,'Jennifer','Whalen','JWHALEN','515.123.4444','2003-09-17','AD_ASST',4400.00,NULL,101,10);
INSERT INTO FUNCIONARIO VALUES (201,'Michael','Hartstein','MHARTSTE','515.123.5555','2004-02-17','MK_MAN',13000.00,NULL,100,20);
INSERT INTO FUNCIONARIO VALUES (203,'Susan','Mavris','SMAVRIS','515.123.7777','2002-06-07','HR_REP',6500.00,NULL,101,40);
INSERT INTO FUNCIONARIO VALUES (204,'Hermann','Baer','HBAER','515.123.8888','2002-06-07','PR_REP',10000.00,NULL,101,70);
INSERT INTO FUNCIONARIO VALUES (205,'Shelley','Higgins','SHIGGINS','515.123.8080','2002-06-07','AC_MGR',12008.00,NULL,101,110);
INSERT INTO FUNCIONARIO VALUES (206,'William','Gietz','WGIETZ','515.123.8181','2002-06-07','AC_ACCOUNT',8300.00,NULL,205,110);
INSERT INTO FUNCIONARIO VALUES (207,'Renata','Moraes','RMORAES','333.123.8181','2002-06-07',NULL,8300.00,NULL,NULL,NULL);

SELECT 
    *
FROM
    FUNCIONARIO;

INSERT INTO HISTORICO_FUNCOES VALUES (101,'1997-09-21','2001-10-27','AC_ACCOUNT',110);
INSERT INTO HISTORICO_FUNCOES VALUES (101,'2001-10-28','2005-03-15','AC_MGR',110);
INSERT INTO HISTORICO_FUNCOES VALUES (102,'2001-01-13','2006-07-24','IT_PROG',60);
INSERT INTO HISTORICO_FUNCOES VALUES (114,'2006-03-24','2007-12-31','ST_CLERK',50);
INSERT INTO HISTORICO_FUNCOES VALUES (122,'2007-01-01','2007-12-31','ST_CLERK',50);
INSERT INTO HISTORICO_FUNCOES VALUES (200,'1995-09-17','2001-06-17','AD_ASST',90);
INSERT INTO HISTORICO_FUNCOES VALUES (201,'2004-02-17','2007-12-19','MK_REP',20);
SELECT 
    *
FROM
    HISTORICO_FUNCOES;

ALTER TABLE DEPARTAMENTO 
	ADD FOREIGN KEY (ID_GERENTE) 
		REFERENCES FUNCIONARIO (ID_FUNCIONARIO) ON UPDATE CASCADE ON DELETE CASCADE;