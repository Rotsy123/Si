create user compte with password 'compte';

create database compte;
\c compte;
grant all privileges on database compte to compte;

-- create table compteprincipal(
--     NumeroCompte integer,
--     NomCompte varchar(20)
-- );
-- grant all privileges on compteprincipal to compte;

create table comptes(
    id              serial PRIMARY key,
    NumeroCompte    integer Unique,
    NomCompte       varchar(50)
);
grant all privileges on comptes to compte;

CREATE TABLE account (
    id      serial primary key,
    mail    VARCHAR(50),
    mdp     VARCHAR(50)
);
grant all privileges on account to compte;

create table exercice(
    idExercice      serial primary key,
    idEntreprise    int,
    Debut           date ,
    Fin             date,
    FOREIGN KEY (idEntreprise) REFERENCES entreprise(idEntreprise)
);
grant all privileges on exercice to compte;

CREATE TABLE devise(
    id      serial PRIMARY KEY,
    devise  VARCHAR,
    valeur  DOUBLE precision,
    daty    DATE
);
grant all privileges on devise to compte;

create table entreprise(
    idEntreprise            serial primary key,
    NomSociete              varchar(50),
    AdressePhysique         varchar(50),
    AdresseExploitation     varchar(50),
    Dirigeant               varchar(70),
    Creation                date,
    Identificationfiscal    varchar(70),
    Numstatistique          varchar(70),
    NumRegistre             varchar(70),
    statusEntreprise        text,
    tenueCompte             VARCHAR(30),
    equivalence             int,
    logo                    VARCHAR(50),
    FOREIGN KEY (idEntreprise) REFERENCES account(id),
    FOREIGN KEY (equivalence)REFERENCES devise(id)
);
grant all privileges on entreprise to compte;

insert into comptes values(10100, 'Capital');
insert into comptes values(10610, 'RESERVE LEGALE');
insert into comptes values(10620, 'RESERVES STATUAIRES');
insert into comptes values(11000, 'REPORT A NOUVEAU');
insert into comptes values(11010, 'REPORT A NOUVEAU SOLDE CREDITEUR');
insert into comptes values(11200, 'AUTRES PRODUITS ET CHARGES');
insert into comptes values(11900, 'REPORT A NOUVEAUN SOLDE DEBITEUR');
insert into comptes values(12800, 'RESULTAT EN INSTANCE');
insert into comptes values(13100, 'SUBVENTION D EQUIPEMENT');
insert into comptes values(13300, 'IMPOTS DIFFERES ACTIFS');
insert into comptes values(16110, 'EMPRUNT A LT');
insert into comptes values(16510, 'EMPRUNT A MOYEN TERME');
insert into comptes values(20124, 'FRAIS DE REHABILITATION');
insert into comptes values(20800, 'AUTRES IMMOB INCORPORELLES');
insert into comptes values(21100, 'TERRAINS');
insert into comptes values(21200, 'CONSTRUCTION');
insert into comptes values(21300, 'MATERIEL ET OUTILLAGE');
insert into comptes values(21510, 'MATERIEL AUTOMOBILE');
insert into comptes values(21520, 'MATERIEL MOTO');
insert into comptes values(21600, 'AGENCEMENT .AM.INST');
insert into comptes values(21810, 'MATERIELS ET MOBILIERS DE BUREAU');
insert into comptes values(21819, 'MATERIELS INFORMAIQUES ET AUTRES');
insert into comptes values(21820, 'MAT.MOB DE LOEMENT');
insert into comptes values(21880, 'AUTRES IMMOBILISATIONS CORP');
insert into comptes values(23000, 'IMMOBILISATION EN COURS');
insert into comptes values(28000, 'AMORT IMMOB INCORP');
insert into comptes values(28120, 'AMORTISSEMENT DES CONSTRUCTIONS');
insert into comptes values(28130, 'AMORT MACH-MATER-OUTIL');
insert into comptes values(28150, 'AMORT MAT DE TRANSPORT');
insert into comptes values(28160, 'AMORT A.A.I');
insert into comptes values(28181, 'AMORT MATERIEL&MOB');
insert into comptes values(28182, 'AMORTISSEMENTS MATERIELS INFORMATIQ');
insert into comptes values(28183, 'AMORT MATER & MOB LOGT');
insert into comptes values(32110, 'STOCK MATIERES PREMIERES');
insert into comptes values(32120, 'PETITES FOURNITURES');


INSERT into devise VALUES(default, 'EUROS',4500,'2023-03-18');
INSERT into devise VALUES(default, 'DOLLARS',3600,'2023-03-18');
INSERT into devise VALUES(default, 'ROUPI',4500,'2023-03-18');

insert into exercice VALUES(DEFAULT,1, '2022-12-31','2023-01-12');
insert into exercice VALUES(DEFAULT,1, '2023-01-25','2023-03-02');

insert into account VALUES(DEFAULT, 'abc@gmail.com', 'abc123');
INSERT INTO entreprise values(1,'ABC','Lot IB 199 bis Andfotsy','Lot CO 69 ter Antovotany','Raherinirina Mino','2022-10-29','M0122','NUMF003','NUMR000','Indray andro any e!!','MDG',3,'face28.jpg');



