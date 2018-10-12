drop table if exists horasformacionportrabajador;
 create table horasformacionportrabajador as
  (select trabajador, sum(horas) as totalhoras
  from cursos
  group by trabajador);