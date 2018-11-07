use agenda;

show tables;

create table curso(
	curso_id int 

);

describe curso;

insert into curso(curso_nombre,curso_dia,curso_hora_inicio,curso_fecha)values('MONGO','Monday','15:47:15',null);
select * from curso where curso_id=1;

select * from curso;

show create table agenda.curso;

drop table curso;

CREATE TABLE `curso` (
   
`curso_id` int(11) NOT NULL AUTO_INCREMENT,
`curso_nombre` varchar(200) NOT NULL,
`curso_dia` varchar(100) DEFAULT NULL,
`curso_hora_inicio` varchar(100) DEFAULT NULL,
`curso_tipo` varchar(50) NOT NULL,
`curso_fecha` datetime DEFAULT NULL,
`curso_activo` varchar(50),
PRIMARY KEY (`curso_id`)
 ) ;


insert into curso(curso_nombre,curso_dia,curso_hora_inicio,curso_tipo,curso_fecha,curso_activo)
values('LEER',null,'10:00','0','2011-08-19T13:45:00','0');

select * from curso;

select * from curso where curso_id = 1;

select * from curso where curso_tipo =0 and curso_activo = 1;


