
CREATE DATABASE BD_CyL
go 
use BD_CyL

create table DEPARTAMENTO(
codigo_Departamento char(2) not null,
Nombre_Departamento varchar(40) not null,
constraint Pk_DEPARTAMENTO primary key (Codigo_Departamento)
)

create table PROVINCIA(
codigo_provincia char(4) not null,
codigo_Departamento char(2) not null,
Nombre_provincia varchar(40) not null,
constraint pk_provincia primary key (codigo_provincia),
constraint fk_provincia_departamento foreign key (codigo_departamento) references DEPARTAMENTO(codigo_departamento)
)

create table DISTRITO(
Codigo_Distrito char(6)  not null,
codigo_provincia char(4) not null,
Nombre_Distrito varchar(40) not null,
constraint pk_codigo_Distrito primary key (Codigo_Distrito),
constraint fk_distrito_provincia foreign key (codigo_provincia) references PROVINCIA(codigo_provincia)
)

create table RUBRO( 
Codigo_rubro char(5) not null,
Nombre_rubro varchar(100) not null,
constraint pk_codigo_rubro primary key (Codigo_rubro)
)
create table PERSONAL(
Codigo_Personal CHAR(10) not null,
Apellidos varchar(50) not null,
Nombres varchar(50) not null,
Direccion varchar(50) not null,
Telefono1 varchar(9) null,
Telefono2 varchar(9) null,
Dni char(8) not null,
Hora_Ingreso time not null,
Hora_Salida time not null,
cargo varchar(30),
Fecha_Nacimiento date not null,
Edad smallint not null,
LugarNacimiento_Departamento char(2) not null,
LugarNacimiento_Provincia char(4) not null,
LugarNacimiento_Distrito char(6) not null,
Estado_Civil varchar(20) not null,
Correo_Electronico varchar(50) null,
Fecha_Inicio date not null,
Foto varchar(200) null,
CONTRASEÑA VARCHAR(30),
constraint pk_codigo_Personal primary key (Codigo_Personal),
constraint fk_personal_departamento foreign key (LugarNacimiento_Departamento) references DEPARTAMENTO(codigo_departamento),
constraint fk_personal_provincia foreign key (LugarNacimiento_Provincia) references provincia(codigo_provincia),
constraint fk_personal_distrito foreign key (LugarNacimiento_Distrito) references DISTRITO(codigo_Distrito)

)

create table PUBLICIDAD(
Codigo_Publicidad char(2) not null,
Descripcion_Publicidad varchar(60) not null,
constraint pk_publicidad primary key (codigo_publicidad) 
)

create table TIPO_EMPRESA(
Codigo_tipoEmpresa char(2) not null,
Descripcion_tipoEmpresa varchar(30) not null,
constraint pk_Tipo_Empresa primary key (Codigo_tipoEmpresa) 
)

create table DEMANDA_EMPRESAS(
RUC char(11)  primary key ,
Nombre varchar(150) null,
Direccion varchar(250) null,
Departamento char(2) null, 
provincia char(4) null,
Distrito char(6) null,
Telefono1 varchar(20) null,
Telefono2 varchar(20) null,
Telefono_Personal varchar(20) null,
Correo_Electronico Varchar(100) null,
LOGO varchar(200) null,
Persona_Contactar Varchar(100) null,
Cargo_Persona varchar(100) null,
Rubro char(5) null,
Tipo_Empresa CHAR(2) null, 
Numero_Personal int null,
Existencia_cyl char(2) null,
Motivo varchar(30) null,
Nombre_Consultor varchar(100) not null,
constraint fk_empresa_rubro foreign key (rubro) references rubro(codigo_Rubro),
constraint fk_empresa_departamento foreign key (Departamento) references DEPARTAMENTO(codigo_Departamento),
constraint fk_empresa_provincia foreign key (provincia) references provincia(codigo_provincia),
constraint fk_empresa_distrito foreign key (distrito) references DISTRITO(codigo_Distrito),
constraint fk_empresa_tipo_Empresa foreign key (Tipo_Empresa) references TIPO_EMPRESA(Codigo_tipoEmpresa),
constraint fk_empresa_publicidad foreign key (Existencia_cyl) references publicidad(codigo_publicidad)
)


--- BUSCAR BD
create table DENOMINACION (
Codigo_Denominacion char(6) not null,
Nombre_Denominacion varchar(80) not null,
constraint pk_DENOMINACION primary key (Codigo_Denominacion)
)

create table PROGRAMAS_COMPUTACION(
Codigo_Programas int not null,
Nombre_Programas varchar(50) not null,
constraint pk_PROGRAMAS_COMPUTACION primary key (Codigo_Programas)
)

create table IDIOMAS(
Codigo_Idiomas int not null,
Nombre_Idiomas varchar(50) not null,
constraint pk_CODIGO_IDIOMAS primary key (Codigo_Idiomas))

create table FORMA_PAGO(
codigo_FormaPago int not null,
Descripcion_FormaPago varchar(50) not null,
constraint pk_CODIGO_FORMAPAGO primary key (codigo_FormaPago)
)
go
create table INFORMACION_OCUPACIONAL(
codigo_InfoOcupacional int not null,
Descripcion_InfoOcupacional varchar(80) not null,
constraint pk_CODIGO_INFOOCUPACIONAL primary key (codigo_InfoOcupacional)
)
go
create table FORMA_TRABAJO(
codigo_FormaTrabajo int not null,
Descripcion_FormaTrabajo varchar(50) not null,
constraint pk_CODIGO_FORMATRABAJO primary key (codigo_FormaTrabajo)
)
go
Create Table HORARIO_TRABAJO(
codigo_HorarioTrabajo int not null,
Descripcion_HorarioTrabajo varchar(50) not null,
constraint pk_CODIGO_HorarioTRABAJO primary key (codigo_HorarioTrabajo)
)
go
create table ESTADO_CIVIL(
Codigo_EstadoCivil int not null,
Descripcion_EstadoCivil varchar(50) not null,
constraint pk_CODIGO_ESTADOCIVIL primary key (Codigo_EstadoCivil)
)
go
create table ZONA_RESIDENCIA(
Codigo_ZonaResidencia int not null,
Descripcion_ZonaResidencia varchar(50) not null,
constraint pk_CODIGO_ZONAS_RESIDENCIA primary key (Codigo_ZonaResidencia)
)


create table ESTUDIOS_FORMALES(
codigo_EstudiosFormales int not null,
descripcion_EstudiosFormales varchar(50),
constraint pk_estudios_Formales primary key (codigo_EstudiosFormales)
)
		

CREATE TABLE GRADO_OBTENIDO(
CODIGO_GRADO INT NOT NULL,
DESCRIPCION_GRADO VARCHAR(30) NOT NULL,
constraint pk_GRADO_OBTENIDO primary key (CODIGO_GRADO)
)

create table CENTRO_ESTUDIOS(
Codigo_CentroEstudios int not null,
Nombre_estudios Varchar(100) not null,
constraint pk_centroEstuidos primary key (Codigo_CentroEstudios)
)


create table DEMANDA_PUESTOS(
codigo_puestos int not null,
fecha_actual date not null,
ruc char(11)  null,
Denominacion char(6) null, 
Numero_Vancantes_Requeridos int  null,
Numero_Candidato_Enviar int null,
Principales_Tareas varchar(100) null,
Actitudes_Personales varchar(100) null,
Estudios_Formales int null,
licencia_Conducir char(2) null,
Categoria_licencia varchar(10) null,
Otras_Licencias varchar(100) null,
Años_Experiencia smallint null,
meses_Experiencia smallint null,
Edad_minima smallint null,
Edad_maxima smallint null,
Estado_civil int null, 
Sexo varchar(30) null,
Zona_ubicacion int null, 
puesto_cargo char(2) null,
Cantidad_cargo smallint null,
forma_trabajo INT null,
Horario_trabajo varchar(30) null,
Dias_Trabajo varchar(50) null,
Horarios varchar(50) null,
Area_Del_Trabajo varchar(50) null,
Beneficios varchar(100) null,
Lugar_Trabajo_Departamento char(2) null,
Lugar_Trabajo_Provincia char(4) null,
Lugar_Trabajo_Distrito char(6) null, 
Contrato_Discapacitados char(2) null,
Renumeracion decimal(8,2) null,
Tipo_forma_pago int null,
Informacion_ocupacional int null, 
Observaciones varchar(100) null,
Tipo_Trabajador varchar(30) null,
Apellidos_nombres  varchar(100) null,
Puesto_ocupa varchar(50) null,
Telefono varchar(30) null,
Direccion varchar(50) null,
Fecha_limite date null, 
Fecha_entrevista date null,
Fecha_inicio_laboral date null,
Consultor int null,
Situacion_Actual_Puesto varchar(30) NOT NULL,
constraint pk_DEMANDA_PUESTOS primary key (codigo_puestos),
constraint fk_PUESTOS_EMPRESA foreign key (ruc) references DEMANDA_EMPRESAS(RUC),
constraint fk_PUESTOS_RUBRO foreign key (Denominacion) references denominacion(Codigo_Denominacion),
constraint fk_PUESTOS_DEPARTAMENTO foreign key (Lugar_Trabajo_Departamento) references Departamento(codigo_Departamento),
constraint fk_PUESTOS_PROVINCIA foreign key (Lugar_Trabajo_Provincia) references Provincia(codigo_Provincia),
constraint fk_PUESTOS_DISTRITO foreign key (Lugar_Trabajo_Distrito) references distrito(codigo_distrito),
constraint fk_PUESTOS_ESTADOCIVIL foreign key (Estado_civil) references estado_civil(codigo_estadoCivil),
constraint fk_PUESTOS_ZONARESIDENCIA foreign key (Zona_ubicacion) references Zona_Residencia(Codigo_ZonaResidencia),
constraint fk_PUESTOS_FORMA_PAGO foreign key (Tipo_forma_pago) references forma_Pago(Codigo_FormaPago),
constraint fk_PUESTOS_INFO_OCUPACIONAL  foreign key (Informacion_ocupacional) references informacion_ocupacional(Codigo_infoocupacional),
constraint fk_PUESTOS_ESTUDIOSFORMALES  foreign key (Estudios_Formales) references estudios_Formales(codigo_EstudiosFormales),
constraint fk_PUESTOS_FORMATRABAJO foreign key (forma_trabajo) references FORMA_TRABAJO(codigo_formaTrabajo)
)


create table DETALLE_IDIOMAS_PUESTOS(
codigo_puestos int not null,
codigo_idiomas int not null,
nivel varchar(20) not null,
constraint fk_detalleIdiomas_puestos foreign key (codigo_puestos) references DEMANDA_PUESTOS(codigo_puestos),
constraint fk_detalleIdiomas_idiomas foreign key (codigo_idiomas) references IDIOMAS(codigo_idiomas)
)

create table DETALLE_PROGRAMAS_PUESTO(
codigo_puestos int not null,
codigo_programas int not null,
nivel varchar(20) not null,
constraint fk_detalleProgramas_puestos foreign key (codigo_puestos) references DEMANDA_PUESTOS(codigo_puestos),
constraint fk_detalleProgramas_programas foreign key (codigo_programas) references PROGRAMAS_COMPUTACION(codigo_programas)
)

create table DETALLE_DENOMINACION_PUESTO(
D int not null,
codigo_denomicacion char(6) not null,
descripcion varchar(20) not null,
constraint fk_detalleDenominacion_puestos foreign key (codigo_puestos) references DEMANDA_PUESTOS(codigo_puestos),
constraint fk_detalleDenominacion_denominacion foreign key (codigo_denomicacion) references denominacion(codigo_denominacion)
)

create table DETALLE_CENTROESTUDIOS_PUESTOS(
Codigo_puesto int not null,
codigo_centro_Estudios int not null,
constraint fk_CentroEstudiosPuestos1 foreign key (Codigo_puesto) references DEMANDA_PUESTOS(codigo_puestos),
constraint fk_CentroEstudiosPuestos foreign key (codigo_centro_Estudios) references centro_Estudios(Codigo_CentroEstudios)
)



create table tipo_Documento(
codigo_TipoDocumento int not null,
descripcion_TipoDocumento varchar(30) not null,
constraint pk_Tipo_Documento primary key (codigo_TipoDocumento)
)

create table Actual_Empleo(
codigo_ActualEmpleo int not null,
descripcion_ActualEmpleo varchar(30) null,
constraint pk_actualEmpleo primary key (codigo_ActualEmpleo)
)

create table OFERTA_POSTULANTE(
/*DATOS PERSONALES*/
codigo_postulante int not null,
Tipo_Documento int not null,
documento_indentidad char(10) not null,	
Fecha_Actual date not null,
observaciones varchar(50) null,
Apellido_Paterno varchar(40) null,
Apellido_Materno varchar(40) null,
Nombres varchar(60) not null,
Direccion varchar(100)  null,
Departamento char(2)  null,
Provincia char(4)  null,
Distrito char(6)  null,
Telefono_Personal varchar(9) null,
Telefono1 varchar(9) null,
Telefono_tipo varchar(10) null,
Telefono_Contacto Varchar(30) null,
Pais varchar(8)  null,
Departamento_nacimiento char(2) null,
Provincia_nacimiento char(4) null,
distrito_nacimiento Char(6) null,
Fecha_nacimiento date null,	
edad date null,
Estado_Civil int not null,
Sexo varchar(10) not null,
Autoridad_Hogar char(2) not null,				
Conforman_Hogar smallint null,
Aportan_Hogar SMALLINT null,
Publicidad char(2) not null,
foto varchar(300) not null,
/*salud*/
Pregunta1 char(2) not null, /*---- ¿sufre de alguna enferemedad?*/
Respuesta1 varchar(50) not null,
Pregunta2 varchar(50) not null, /*---- ¿Cuando fue su ultimop chequeo medico?*/
/*ESTUDIOS*/
Estudios_formales int not null,
completa varchar(10)  null,
numero_año_estudio smallint null,
grado varchar(9) null,
licencia_conducir char(2) null,
categoria_Licencia varchar(5) null,
otros varchar(100) null,
/*experiencia*/
zonas varchar(50) null, 
modalidad int null,
horario int null,
pretencion_salarial decimal(10,2) null,
disposicion_servicios char(2) null,
/*situacion actual*/
actual_Trabajo int null,
ocupacion_actual varchar(50) null,
horas_Semana int null,
ingreso decimal(10,2) null,
tipo_Postulante int null,	
observaciones2 varchar(100) null,
persona_Consultora CHAR(10) not null,
constraint pk_OFERTA_POSTULANTE primary key (codigo_postulante),
constraint FK_OfertaPostulante_TipoDocumento foreign key (Tipo_Documento) references tipo_documento(codigo_TipoDocumento),
constraint FK_OfertaPostulante_departamento foreign key (departamento) references departamento(codigo_departamento),
constraint fk_ofertaPostulante_Provincia foreign key (Provincia) references provincia(codigo_Provincia),
constraint fk_ofertaPostulante_Distrito foreign key (Distrito) references distrito(Codigo_Distrito),
constraint FK_OfertaPostulante_departamento_nac foreign key (departamento_nacimiento) references departamento(codigo_departamento),
constraint fk_ofertaPostulante_Provincia_nac foreign key (Provincia_nacimiento) references Provincia(codigo_Provincia),
constraint fk_ofertaPostulante_Distrito_nac foreign key (Distrito_nacimiento) references distrito(Codigo_Distrito),
constraint fk_OfertaPostulante_actualEmpleo foreign key (actual_Trabajo) references Actual_Empleo(codigo_ActualEmpleo),
constraint fk_OfertaPostulante_estadoCivil foreign key (Estado_Civil) references Estado_civil(Codigo_EstadoCivil),
constraint fk_OfertaPostulante_Publicidad foreign key (Publicidad) references publicidad(codigo_publicidad),
constraint fk_OfertaPostulante_EstudiosFormales foreign key (Estudios_formales) references Estudios_Formales(Codigo_EstudiosFormales),
constraint fk_OfertaPostulante_HorarioTrabajo foreign key (horario) references HORARIO_TRABAJO(Codigo_horarioTrabajo),
constraint fk_OfertaPostulante_HorarioTrabajoActual foreign key (horas_Semana) references HORARIO_TRABAJO(Codigo_horarioTrabajo)
)

CREATE TABLE experiencia (
codigo_postulante  int not null,
Nombre_Empresa varchar(100) not null ,
Rubro_Empresa varchar(100) not null,
Fecha_Inicio date not null,
Fecha_Termino date not null,
Codigo_Denominacion char(6) not null, 
Nombre_Denominacion varchar(80) not null,
Nombre_Jefe varchar(100) not null,
Telefono1 varchar(9) not null,
Telefono2 varchar(9) not null,
constraint fk_experiencia_postulante foreign key (codigo_postulante) references OFERTA_POSTULANTE(CODIGO_POSTULANTE),
constraint fk_experiencia_denominacion foreign key (Codigo_Denominacion) references denominacion(Codigo_Denominacion)

)

create table importar(
codigo_postulante int not null,
guardar_Achivo varchar(300) not null,
constraint fk_importar_postulante foreign key (codigo_postulante) references OFERTA_POSTULANTE(CODIGO_POSTULANTE)
)

create table DETALLE_IDIOMAS_POSTULANTE(
codigo_postulante int not null,
codigo_idiomas int not null,
nivel varchar(20) not null,
constraint fk_detalleIdiomas_postulante foreign key (codigo_postulante) references OFERTA_POSTULANTE(CODIGO_POSTULANTE),
constraint fk_detalleIdiomas_idiomas_pos foreign key (codigo_idiomas) references IDIOMAS(codigo_idiomas)
)

create table DETALLE_PROGRAMAS_POSTULANTE(
codigo_postulantes int not null,
codigo_programas int not null,
nivel varchar(20) not null,
constraint fk_detalleProgramas_postulantes foreign key (codigo_postulantes) references OFERTA_POSTULANTE(CODIGO_POSTULANTE),
constraint fk_detalleProgramas_programas_pos foreign key (codigo_programas) references PROGRAMAS_COMPUTACION(codigo_programas)
)

create table DETALLE_DENOMINACION_POSTULANTE(
codigo_postulantes int not null,
codigo_denomicacion char(6) not null,
descripcion varchar(100) not null,
constraint fk_detalleDenominacion_postulantes foreign key (codigo_postulantes) references OFERTA_POSTULANTE(CODIGO_POSTULANTE),
constraint fk_detalleDenominacion_Denominacion_pos foreign key (codigo_denomicacion) references denominacion(codigo_denominacion)
)

create table DETALLE_CENTOESTUDIOS_POSTULANTE(
codigo_postulantes int not null,
codigo_centro_Estudios int not null,
constraint fk_CentroEstudiosPOSTULANTES foreign key (codigo_postulantes) references OFERTA_POSTULANTE(CODIGO_POSTULANTE),
constraint fk_CentroEstudios foreign key (codigo_centro_Estudios) references centro_Estudios(Codigo_CentroEstudios)
)

create table citacion_Postulantes(
codigo_Citado int not null,
codigo_postulante int not null,
codigo_puestos int not null,
fecha_Citacion date not null,
Hora_Citacion time not null,
Resultado_Citacion varchar(10) null,
Resultado_Entrevista varchar(10) null,
constraint pk_Citacion primary key (Codigo_Citado),
constraint fk_Citacion_Postulante foreign key (codigo_Postulante) references OFERTA_POSTULANTE(codigo_postulante),
constraint fk_Citacion_Puestos foreign key (codigo_puestos) references DEMANDA_PUESTOS(codigo_puestos)

)

create table envío_Postulantes(
codigo_envío int not null,
codigo_Citado int not null,
fecha_Citacion date not null,
Fecha_Envio date not null,
Hora_Envio time not null,
Resultado_envio varchar(10) null,
Resultado_Entrevista varchar(10) null,
constraint pk_envío primary key (Codigo_envío),
constraint fk_envio_Citado foreign key (codigo_Citado) references citacion_Postulantes(codigo_Citado)
)

create table colocación_Postulantes(
codigo_colocacion int not null,
codigo_envío int not null,
fecha_Citacion date not null,
Fecha_Envio date not null,
Fecha_Colocacion date not null,
Resultado_colocacion varchar(10) null,
constraint pk_Colocacion primary key (codigo_colocacion),
constraint fk_Colocacion_Envio foreign key (codigo_envío) references envío_Postulantes(codigo_envío)
)



