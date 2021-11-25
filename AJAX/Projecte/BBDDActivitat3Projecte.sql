create database LloguerVacacional;
use LloguerVacacional;

create table cases (
id int auto_increment primary key not null,
nom varchar(20) not null,
poblacio varchar(30),
caracteristiques varchar(20)
);

insert into cases (nom, poblacio, caracteristiques) values 
("Casa Lina", "Manacor", "Bones"),
("Son Sis", "Artà", "Molt Bones"),
("Can Roca", "Petra", "Normals"),
("Villa Playa", "Llucmajor", "Normals"),
("Sa Cova", "Palma", "Dolentes");

select * from cases;