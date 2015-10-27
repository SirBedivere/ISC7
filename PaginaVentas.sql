create database PaginaVentas;
use PaginaVentas;

create table Usuario(
	Id int not null auto_increment primary key,
	Nombre varchar(50) not null,
	Apellido varchar(50) not null,
	NombreUsuario varchar(50),
	Correo varchar(255) not null,
	Contraseña varchar(60) not null,
	Imagen varchar(255),
	EsActivo boolean not null default 1,
	EsAdmin boolean not null default 0,
	FechaCreacion datetime not null
);

insert into Usuario(Nombre,Apellido,Correo,Contraseña,EsActivo,EsAdmin,FechaCreacion) value ("Administrador", "","admin","90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad",1,1,NOW());

create table Categoria(
	Id int not null auto_increment primary key,
	Imagen varchar(255),
	Nombre varchar(50) not null,
	Descripcion text not null,
	FechaCreacion datetime not null
);

create table Producto(
	Id int not null auto_increment primary key,
	Imagen varchar(255),
	CodigoBarras varchar(50) not null,
	Nombre varchar(50) not null,
	Descripcion text not null,
	InventarioMin int not null default 10,
	PrecioEntrada float not null,
	PrecioSalida float,
	Unidades varchar(255) not null,
	Presentacion varchar(255) not null,
	UsuarioId int not null,
	CategoriaId int,
	FechaCreacion datetime not null,
	EsActivo boolean not null default 1,
	foreign key (CategoriaId) references Categoria(Id),
	foreign key (UsuarioId) references Usuario(Id)
);

/*
person kind
1.- Client
2.- Provider
*/
create table Persona(
	Id int not null auto_increment primary key,
	Imagen varchar(255) not null,
	Nombre varchar(255) not null,
	Apellido varchar(50) not null,
	Compañia varchar(50) not null,
	Direccion1 varchar(50) not null,
	Direccion2 varchar(50) not null,
	Telefono1 varchar(50) not null,
	Telefono2 varchar(50) not null,
	Correo1 varchar(50) not null,
	Correo2 varchar(50) not null,
	Tipo int,
	FechaCreacion datetime not null
);


create table TipoOperacion(
	Id int not null auto_increment primary key,
	Nombre varchar(50) not null
);

insert into TipoOperacion (Nombre) value ("Entrada");
insert into TipoOperacion (Nombre) value ("Salida");

create table Carrito(
	Id int not null auto_increment primary key,
	FechaCreacion datetime not null
);


create table Venta(
	Id int not null auto_increment primary key,
	PersonaId int ,
	UsuarioId int ,
	TipoOperacionId int default 2,
	CarritoId int,
	foreign key (CarritoId) references Carrito(Id),
	foreign key (TipoOperacionId) references TipoOperacion(Id),
	foreign key (UsuarioId) references Usuario(Id),
	foreign key (PersonaId) references Persona(Id),
	FechaCreacion datetime not null
);

create table Operacion(
	Id int not null auto_increment primary key,
	ProductoId int not null,
	q float not null,
	TipoOperacionId int not null,
	VentaId int,
	FechaCreacion datetime not null,
	foreign key (ProductoId) references Producto(Id),
	foreign key (TipoOperacionId) references TipoOperacion(Id),
	foreign key (VentaId) references Venta(Id)
);

/*
configuration kind
1.- Boolean
2.- Text
3.- Number
*/
create table Configuracion(
	Id int not null auto_increment primary key,
	Titulo varchar(255) not null unique,
	Nombre varchar(255) not null unique,
	Tipo int not null,
	Val varchar(255) not null
);
insert into Configuracion(Titulo,Nombre,Tipo,val) value("title","Titulo del Sistema",2,"Inventio Lite");
insert into Configuracion(Titulo,Nombre,Tipo,val) value("use_image_product","Utilizar Imagenes en los productos",1,0);
insert into Configuracion(Titulo,Nombre,Tipo,val) value("active_clients","Activar clientes",1,0);
insert into Configuracion(Titulo,Nombre,Tipo,val) value("active_providers","Activar proveedores",1,0);
insert into Configuracion(Titulo,Nombre,Tipo,val) value("active_categories","Activar categorias",1,0);
insert into Configuracion(Titulo,Nombre,Tipo,val) value("active_reports_word","Activar reportes en Word",1,0);
insert into Configuracion(Titulo,Nombre,Tipo,val) value("active_reports_excel","Activar reportes en Excel",1,0);
insert into Configuracion(Titulo,Nombre,Tipo,val) value("active_reports_pdf","Activar reportes en PDF",1,0);

