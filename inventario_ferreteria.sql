create database inventario_ferreteria;
show databases;
use inventario_ferreteria;

create table producto (
id int not null auto_increment,
nombre varchar(255) not null,
descripcion varchar(300) not null,
marca varchar(255) not null,
primary key (id)
);

create table salida (
id int not null auto_increment,
producto_id int not null,
cantidad int not null,
fechaSalida varchar(15) not null,
valorUnitario float not null,
valorTotal float not null,
foreign key (producto_id) references producto(id),
primary key (id)
);

create table ciudad (
id int not null auto_increment,
nombre varchar(255) not null,
primary key (id)
);

create table proveedor (
id int not null auto_increment,
ciudad_id int not null,
nombre varchar(255) not null,
direccion varchar(255) not null,
telefono float not null,
primary key (id),
foreign key (ciudad_id) references ciudad(id)
);

create table pedido (
id int not null auto_increment,
proveedor_id int not null,
producto_id int not null,
cantidad int not null,
fechaIngreso varchar(15) not null,
valorUnitario float not null,
valorTotal float not null,
primary key (id),
foreign key (proveedor_id) references proveedor(id),
foreign key (producto_id) references producto(id)
);

create table inventario (
id int not null auto_increment,
producto_id int not null,
salida_id int,
pedido_id int,
cantidad int not null,
primary key (id),
foreign key (salida_id) references salida(id),
foreign key (producto_id) references producto(id),
foreign key (pedido_id) references pedido(id)
);

/*
insert into ciudad (nombre) value ('Duitama'),('Sogamoso'),('Tunja');
select * from ciudad;
insert into proveedor (ciudad_id,nombre,direccion,telefono) value (1, 'Pintuco','Calle 3 #45',31214);
insert into proveedor (ciudad_id,nombre,direccion,telefono) value (3, 'Asesco','Calle 4 #45',31214);
insert into proveedor (ciudad_id,nombre,direccion,telefono) value (1, 'Maicol Rojas','Calle 2 #45',31214);
select * from proveedor;

select c.id ,c.nombre, p.nombre, p.direccion, p.telefono from ciudad c left join proveedor p on c.id = p.ciudad_id;
select p.nombre, p.descripcion, p.marca, i.cantidad from producto p left join inventario i on p.id = i.producto_id;
select p.nombre, p.descripcion, p.marca, i.cantidad, pd.cantidad from producto p left join inventario i on p.id = i.producto_id JOIN pedido pd ON i.pedido_id = pd.id;
select p.nombre, p.descripcion, p.marca, pd.cantidad,pd.proveedor_id,pd.valorUnitario,pd.valorTotal from producto p left join inventario i on p.id = i.producto_id JOIN pedido pd ON i.pedido_id = pd.id;
*/