

create table bureau(
	idbureau int not null,
	debut date,
	fin date,
	mail varchar(70),
	password varchar(70),
	idmembre int,
	idressource int,
	idpartenaire int,
	constraint pk_bureau primary key(idbureau)
);


create table membre(
	idmembre int not null,
	nomMembre varchar(50),
	prenomMembre varchar(50),
	mailMembre varchar(50),
	password varchar(50),
	tetelphone int,
	adresse varchar(50),
	dateAdhesion date,
	mois varchar(10),
	constraint pk_membre primary key(idmembre)
);

create table ressource(
	idressource int not null,
	libelleRessource varchar(40),
	montantRessource int,
	dateRessource date,
	constraint pk_ressource primary key(idressource) 
);

create table structure(
	idstructure int not null,
	nomStructure varchar(50),
	idmembre int,
	constraint pk_structure primary key(idstructure)
);

create table partenaire(
	idpartenaire int not null,
	nomPartenaire varchar(50),
	adressePartenaire varchar(50),
	telephonePartenaire int,
	constraint pk_partenaire primary key(idpartenaire)
);


create table depense(
	idDepense int not null,
	libelleDepense varchar(50),
	MontantDepense int,
	DateDepense date,
	idactivite int,
	constraint pk_depense primary key(idDepense)
);

create table activite(
	idactivite int not null,
	libelleActivite varchar(100),
	dateActivite date,
	lieu varchar(70),
	constraint pk_activite primary key(idactivite)
);



