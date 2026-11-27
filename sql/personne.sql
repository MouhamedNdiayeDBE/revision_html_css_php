create database if not exists revisionhtml_php;
use revisionhtml_php;

create table personne(login varchar(16) primary key not null ,mdp varchar(24),nom varchar(24));


use revisionhtml_php;

alter table personne add column profil varchar(20);
alter table personne add column classe varchar(20);
