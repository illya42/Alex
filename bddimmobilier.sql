drop database bddimmobilier;
create database bddimmobilier;
	use bddimmobilier;


create table mandat
	(
		numMandat int(4) not null,
		locationSimple varchar(10),
		locationExclusive varchar(10),
		venteSimple varchar(10),
		venteExclusive varchar(10),
		primary key(numMandat)
	);

create table client
	(
		numClient int(4) not null,
		nomClient varchar(25) not null,
		adresseClient varchar(50) not null,
		telephoneClient varchar(25) not null,
		primary key(numClient)
	);

create table recherche
	(
		numRecherche int(4) not null,
		numClient int(4),
		villeRecherche varchar(20) not null,
		prixMinRecherche int(8) not null,
		prixMaxRecherche int(8) not null,
		natureRecherche varchar(20) not null,
		primary key(numRecherche),
		foreign key(numClient) references client(numClient)
	);

create table bienImmobilier
	(
		numImmobilier int(4) not null,
		numMandat int(4) not null,
		adresseImmobilier varchar(20) not null,
		villeImmobilier varchar(20) not null,
		dispoLocation varchar(25) not null,
		dispoAchat varchar(25) not null,
		prixLocationImmobilier int(6),
		prixAchatImmobilier int(7),
		primary key(numImmobilier),
		foreign key(numMandat) references mandat(numMandat)
	);

/* TABLE CONCERNER = TABLE RELATION ENTRE [RECHERCHE] ET [BIEN],
ça va servir pour sortir les résultats de la recherche */
create table Concerner
	(
		numRecherche int(4) not null,
		numImmobilier int(4) not null,
		primary key(numRecherche),
		primary key(numImmobilier),
		foreign key(numRecherche,numImmobilier)
	)

create table tiers
	(
		numTiers int(4) not null,
		numMandat int(4) not null,
		nomTiers varchar(25) not null,
		adresseTiers varchar(30) not null,
		telephoneTiers varchar(25) not null,
		primary key(numTiers),
		foreign key(numMandat) references mandat(numMandat)
	);

create table collaborateur
	(
		numCollaborateur int(4) not null,
		nomCollaborateur varchar(25) not null,
		adresseCollaborateur varchar(25) not null,
		primary key(numCollaborateur)
	);

create table agence
	(
		numAgence int(4) not null,
		numImmobilier int(4) not null,
		numCollaborateur int(4) not null,
		nomAgence varchar(20) not null,
		telephoneAgence varchar(25) not null,
		primary key(numAgence),
		foreign key(numImmobilier) references bienImmobilier(numImmobilier),
		foreign key(numCollaborateur) references collaborateur(numCollaborateur)
	);


insert into client 
	values
		(1,"Robert","20 rue de paris","01 53 25 65 98"),
		(2,"Robert","20 rue de paris","01 43 25 65 98"),
		(3,"Jean","20 rue de lyon","01 32 17 65 98");

insert into recherche 
	values (1,1,"paris","0","900","location"),
			(2,2,"paris","0","500000","achat"),
			(3,3,"lyon","0","750000","achat");

insert into mandat
	values (1,"oui","non","non","non"),
			(2,"non","oui","non","non"),
			(3,"non","non","non","oui");

insert into bienImmobilier
	values (1,1,"15 rue de gentilly","lyon","disponible","disponible","850","450000"),
			(2,2,"15 rue de paris","paris","disponible","indisponible","850",null),
			(3,3,"15 rue Laplace","paris","indisponible","disponible",null,"750000");

insert into tiers
	values (1,1,"Janus","14 rue des fleurs","01 65 84 75 12"),
			(2,2,"Elvis","14 rue des javelots","01 75 84 75 12"),	
			(3,3,"Louis","14 rue des orcs","01 82 84 75 12");

insert into collaborateur
	values (1,"Nestor","20 rue Nestor"),
			(2,"Thomas","20 rue Thomas"),
			(3,"Blyat","20 rue Blyat");

insert into agence
	values (1,1,1,"Europa","01 69 87 45 21"),
			(2,2,2,"Grants","01 47 87 63 21"),
			(3,3,3,"Noice","01 57 27 63 21");

