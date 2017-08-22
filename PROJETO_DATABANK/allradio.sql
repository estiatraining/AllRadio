/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     18/04/2011 13:21:08                          */
/*==============================================================*/


drop index INDEX_FAVORITOS on FAVORITOS;

drop table if exists FAVORITOS;

drop index INDEX_GENEROS on GENEROS;

drop table if exists GENEROS;

drop index INDEX_IPSACESSO on IPSACESSO;

drop table if exists IPSACESSO;

drop index INDEX_LINKS on LINKSRADIO;

drop table if exists LINKSRADIO;

drop index INDEX_PAIS on PAIS;

drop table if exists PAIS;

drop index INDEX_RADIO on RADIO;

drop table if exists RADIO;

/*==============================================================*/
/* Table: FAVORITOS                                             */
/*==============================================================*/
create table FAVORITOS
(
   FAVORITOS_ID         integer not null AUTO_INCREMENT,
   FAVORITOS_IP         varchar(256) not null,
   FAVORITOS_NIVEL      integer,
   FAVORITOS_DATA       date,
   primary key (FAVORITOS_ID)
);

alter table FAVORITOS comment 'tabela de favoritos';

/*==============================================================*/
/* Index: INDEX_FAVORITOS                                       */
/*==============================================================*/
create index INDEX_FAVORITOS on FAVORITOS
(
   FAVORITOS_ID,
   FAVORITOS_IP,
   FAVORITOS_DATA
);

/*==============================================================*/
/* Table: GENEROS                                               */
/*==============================================================*/
create table GENEROS
(
   GENEROS_ID           integer not null AUTO_INCREMENT,
   GENEROS_NOME         varchar(256) not null,
   GENEROS_STS          bool not null,
   primary key (GENEROS_ID)
);

alter table GENEROS comment 'tabela de generos de tipos de radios';

/*==============================================================*/
/* Index: INDEX_GENEROS                                         */
/*==============================================================*/
create index INDEX_GENEROS on GENEROS
(
   GENEROS_ID,
   GENEROS_NOME
);

/*==============================================================*/
/* Table: IPSACESSO                                             */
/*==============================================================*/
create table IPSACESSO
(
   IPSACESSO_ID         integer not null AUTO_INCREMENT,
   IPSACESSO_RADIO_ID   integer,
   IPSACESSO_DATA       date not null,
   IPSACESSO_HORA       time not null,
   IPSACESSO_IP         varchar(40) not null,
   primary key (IPSACESSO_ID)
);

alter table IPSACESSO comment 'tabela de controle de ips de acesso a allradio';

/*==============================================================*/
/* Index: INDEX_IPSACESSO                                       */
/*==============================================================*/
create index INDEX_IPSACESSO on IPSACESSO
(
   IPSACESSO_ID,
   IPSACESSO_DATA,
   IPSACESSO_IP
);

/*==============================================================*/
/* Table: LINKSRADIO                                            */
/*==============================================================*/
create table LINKSRADIO
(
   LINKSRADIO_ID        integer not null AUTO_INCREMENT,
   LINKSRADIO_DESC      varchar(256) not null,
   LINKSRADIO_STS       bool not null,
   primary key (LINKSRADIO_ID)
);

alter table LINKSRADIO comment 'links ou ips de acessos as radios';

/*==============================================================*/
/* Index: INDEX_LINKS                                           */
/*==============================================================*/
create index INDEX_LINKS on LINKSRADIO
(
   LINKSRADIO_ID,
   LINKSRADIO_DESC
);

/*==============================================================*/
/* Table: PAIS                                                  */
/*==============================================================*/
create table PAIS
(
   PAIS_ID              integer not null AUTO_INCREMENT,
   PAIS_NOME            varchar(256) not null,
   PAIS_SIGLA           varchar(4),
   PAIS_CODAREA         integer,
   PAIS_IMG_BAND        varchar(256),
   primary key (PAIS_ID)
);

alter table PAIS comment 'tabela de paises do mundo';

/*==============================================================*/
/* Index: INDEX_PAIS                                            */
/*==============================================================*/
create index INDEX_PAIS on PAIS
(
   PAIS_ID,
   PAIS_NOME
);

/*==============================================================*/
/* Table: RADIO                                                 */
/*==============================================================*/
create table RADIO
(
   RADIO_ID             integer not null AUTO_INCREMENT,
   RADIO_LINKSRADIO_ID  integer,
   RADIO_PAIS_ID        integer,
   RADIO_GENEROS_ID     integer,
   RADIO_NOME           varchar(256),
   RADIO_STS            bool not null,
   RADIO_DATA           date not null,
   primary key (RADIO_ID)
);

alter table RADIO comment 'tabela de radios';

/*==============================================================*/
/* Index: INDEX_RADIO                                           */
/*==============================================================*/
create index INDEX_RADIO on RADIO
(
   RADIO_ID,
   RADIO_NOME
);

alter table IPSACESSO add constraint FK_REFERENCE_4 foreign key (IPSACESSO_RADIO_ID)
      references RADIO (RADIO_ID) on delete restrict on update restrict;

alter table RADIO add constraint FK_REFERENCE_1 foreign key (RADIO_LINKSRADIO_ID)
      references LINKSRADIO (LINKSRADIO_ID) on delete restrict on update restrict;

alter table RADIO add constraint FK_REFERENCE_2 foreign key (RADIO_PAIS_ID)
      references PAIS (PAIS_ID) on delete restrict on update restrict;

alter table RADIO add constraint FK_REFERENCE_3 foreign key (RADIO_GENEROS_ID)
      references GENEROS (GENEROS_ID) on delete restrict on update restrict;

