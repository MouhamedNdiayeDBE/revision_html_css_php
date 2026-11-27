create database if not exists revisionhtml_php;
use revisionhtml_php;

create table personne(login varchar(16) primary key not null ,mdp varchar(24),nom varchar(24));