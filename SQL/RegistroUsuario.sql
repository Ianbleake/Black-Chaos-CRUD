use blackchaos

--drop table users

--create table users (id int primary key, primernombre varchar(20),segundonombre varchar(20),primerapellido varchar(20),segundoapellido varchar(20),correo varchar(100),username varchar(20),pass varchar(20))

--drop table trabajadores

--create table trabajadores (id int primary key, primernombre varchar(20),segundonombre varchar(20),primerapellido varchar(20),segundoapellido varchar(20),correo varchar(100),Telefono varchar(20),puesto varchar(20),salario varchar(10))

--query para registro de trabajador
--insert into trabajadores values(1,'Angel','Ivan','Rangel','Vazquez','ang.ivan.ran@gmail.com','5512182737','Owner','200')

--insert into trabajadores values(2,'Sofia','Ana','Vazquez','Cotero','sofanaVc@gmail.com','5500000000','CEO','100')

--insert into trabajadores values(3,'Adrian','Daniel','Perez','Serrato','correo@gmail.com','0000000000','dev','50')

--insert into trabajadores values(4,'Luis','Adrian','Rangel','Vazquez','correo@gmail.com','0000000000','dev','50')

--insert into trabajadores values(5,'Andrea','Natali','Vazquez','Serrato','correo@gmail.com','0000000000','dev','50')

--query para consulta de trabajadores
--select id, primernombre+' '+segundonombre+' '+primerapellido+' '+segundoapellido as Nombre,correo,telefono,puesto,salario from trabajadores

--query para registro de usuario
--insert into users values(2,'Luis','Adrian','Rangel','Vazquez','luis@gmail.com','Luix','1234')

--query para consulta de usuario
--select id, primernombre+' '+segundonombre+' '+primerapellido+' '+segundoapellido as Nombre,correo,username,pass from users

select * from users

--select username, pass from users where username='admin' and pass='1234'