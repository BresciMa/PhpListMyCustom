--DROP TABLE mb_preconfirmacaoleads;
--TRUNCATE TABLE mb_preconfirmacaoleads;

CREATE TABLE mb_preconfirmacaoleads (
	id_lead int not null auto_increment,
	email varchar(200) not null,
	is_confirmed tinyint not null default 0,
	entry_date datetime not null,
	confirmed_date datetime,
	list_id int not null,
	redirect_url varchar(500) not null,
	origem varchar(500), 
	primary key (id_lead)
);
	
SET @@auto_increment_increment=7;
SET @@auto_increment_offset=1000;

CREATE UNIQUE INDEX ix_u_mb_preconfirmacaoleads ON mb_preconfirmacaoleads (email, redirect_url);

ALTER TABLE mb_preconfirmacaoleads AUTO_INCREMENT=1001;

INSERT INTO mb_preconfirmacaoleads (email, entry_date,list_id,redirect_url) VALUES ('teste@teste.com', now(), 1,'http://google.com.br');


select * from mb_preconfirmacaoleads;

