create database Facturaciondb;

use Facturaciondb;

create table CobroActual(
  numero float(8) primary key,
  nombre varchar(50),
  mes int,
  monto decimal(20, 2),
  impuesto decimal(20, 2),
  mora decimal(20, 2),
  total decimal(20, 2),
  pagado boolean
);

insert into CobroActual(numero, nombre, mes, monto, impuesto, mora, total, pagado) values (13784536, "Alejandro Magno", 3, 102.34, 15.35, 0, 117.69, 0);
insert into CobroActual(numero, nombre, mes, monto, impuesto, mora, total, pagado) values (10382678, "Julio Cesar", 3, 354.33, 53.15, 0, 07.48, 0);
insert into CobroActual(numero, nombre, mes, monto, impuesto, mora, total, pagado) values (11926773, "Gengis Khan", 3, 290.00, 43.50, 0, 333.50, 1);
insert into CobroActual(numero, nombre, mes, monto, impuesto, mora, total, pagado) values (19937274, "Napoleon Pierre", 3, 1299.54, 194.93, 834.23, 2328.70, 0);
