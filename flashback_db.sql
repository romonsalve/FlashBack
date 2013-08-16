/*==============================================================*/
/* DBMS name:      PostgreSQL 8                                 */
/* Created on:     14-08-2013 12:59:38                          */
/*==============================================================*/


drop index ACTIVIDADES_PK;

drop table ACTIVIDADES;

drop index ACTIVIDADES_ID;

drop index EVENTOS_ID3;

drop index ACTIVIDADES_EVENTOS_PK;

drop table ACTIVIDADES_EVENTOS;

drop index ACTIVIDADES_ID2;

drop index EVENTO_TIPOS_ID4;

drop index ACTIVIDADES_EVENTO_TIPOS_PK;

drop table ACTIVIDADES_EVENTO_TIPOS;

drop index AUDITORIA_PK;

drop table AUDITORIA;

drop index EVENTOS_ID;

drop index VEHICULOS_ID;

drop index BITACORAS_PK;

drop table BITACORAS;

drop index CLIENTE_TIPOS_ID;

drop index CLIENTES_PK;

drop table CLIENTES;

drop index CLIENTE_TIPOS_PK;

drop table CLIENTE_TIPOS;

drop index EMPLEADO_TIPOS_ID;

drop index EMPLEADOS_PK;

drop table EMPLEADOS;

drop index EVENTOS_ID4;

drop index EMPLEADOS_ID;

drop index EMPLEADOS_EVENTOS_PK;

drop table EMPLEADOS_EVENTOS;

drop index EMPLEADO_TIPOS_PK;

drop table EMPLEADO_TIPOS;

drop index ESTADOS_PK;

drop table ESTADOS;

drop index ESTADO_EVENTO_PK;

drop table ESTADO_EVENTOS;

drop index CLIENTES_ID;

drop index ESTADO_EVENTO_ID;

drop index RECINTOS_ID;

drop index EVENTO_TIPOS_ID;

drop index EVENTOS_PK;

drop table EVENTOS;

drop index EVENTO_TIPOS_PK;

drop table EVENTO_TIPOS;

drop index PARTICIPANTE_TIPOS_ID2;

drop index EVENTO_TIPOS_ID5;

drop index EVENTO_TIP;

drop table EVENTO_TIPOS_PARTICIPANTE_TIPOS;

drop index EVENTO_TIPOS_ID6;

drop index RECINTO_TIPOS_ID3;

drop index EVENTO_TIPOS_RECINTO_TIPOS_PK;

drop table EVENTO_TIPOS_RECINTO_TIPOS;

drop index EVENTOS_ID2;

drop index PARTICIPANTES_ID;

drop index ITINERARIO_PARTICIPANTES_PK;

drop table ITINERARIO_PARTICIPANTES;

drop index MEDIDA_PK;

drop table MEDIDAS;

drop index PROPIEDADES_ID3;

drop index MEDIDA_ID;

drop index MEDIDAS_PROPIEDADES_PK;

drop table MEDIDAS_PROPIEDADES;

drop index PARTICIPANTE_TIPOS_ID3;

drop index SOLICITUD_COTIZACIONES_ID;

drop index PARTICIPAN;

drop table PARTICIPAN;

drop index PARTICIPANTE_TIPOS_ID;

drop index PARTICIPANTES_PK;

drop table PARTICIPANTES;

drop index PARTICIPANTE_TIPOS_PK;

drop table PARTICIPANTE_TIPOS;

drop index PROPIEDADES_PK;

drop table PROPIEDADES;

drop index PROPIEDADES_ID;

drop index RECURSOS_ID;

drop index PROPIEDADES_RECURSOS_PK;

drop table PROPIEDADES_RECURSOS;

drop index RECURSO_TIPOS_ID3;

drop index PROPIEDADES_ID2;

drop index PROPIEDADES_RECURSO_TIPOS_PK;

drop table PROPIEDADES_RECURSO_TIPOS;

drop index PROVEEDORES_PK;

drop table PROVEEDORES;

drop index RECURSO_TIPOS_ID2;

drop index PROVEEDORES_ID2;

drop index PROVEEDORES_RECURSO_TIPOS_PK;

drop table PROVEEDORES_RECURSO_TIPOS;

drop index RECINTO_TIPOS_ID2;

drop index RECINTOS_PK;

drop table RECINTOS;

drop index RECINTO_TIPOS_PK;

drop table RECINTO_TIPOS;

drop index PROVEEDORES_ID;

drop index RECURSO_TIPOS_ID;

drop index RECURSOS_PK;

drop table RECURSOS;

drop index RECURSOS_ID2;

drop index EVENTOS_ID5;

drop index RECURSOS_POR_EVENTO_PK;

drop table RECURSOS_POR_EVENTO;

drop index EVENTO_TIPOS_ID3;

drop index RECURSO_TIPOS_PK;

drop table RECURSO_TIPOS;

drop index EVENTO_TIPOS_ID2;

drop index RECINTO_TIPOS_ID;

drop index ESTADOS_ID;

drop index CLIENTES_ID2;

drop index SOLICITUD_COTIZACIONES_PK;

drop table SOLICITUD_COTIZACIONES;

drop index VEHICULO_TIPOS_ID;

drop index VEHICULOS_PK;

drop table VEHICULOS;

drop index VEHICULO_TIPOS_PK;

drop table VEHICULO_TIPOS;

/*==============================================================*/
/* Table: ACTIVIDADES                                           */
/*==============================================================*/
create table ACTIVIDADES (
   ID                   SERIAL               not null,
   DESC_ACT             TEXT                 null,
   NOMBRE_ACT           TEXT                 null,
   constraint PK_ACTIVIDADES primary key (ID)
);

comment on table ACTIVIDADES is
'Detalle exaustivo de las actividades que se van a realizar en un evento determinado.';

comment on column ACTIVIDADES.ID is
'Identificador del itinerario del evento.';

comment on column ACTIVIDADES.DESC_ACT is
'Descripción del itinerario.';

/*==============================================================*/
/* Index: ACTIVIDADES_PK                                        */
/*==============================================================*/
create unique index ACTIVIDADES_PK on ACTIVIDADES (
ID
);

/*==============================================================*/
/* Table: ACTIVIDADES_EVENTOS                                   */
/*==============================================================*/
create table ACTIVIDADES_EVENTOS (
   EVENTO_ID            INT4                 not null,
   ACTIVIDADE_ID        INT4                 not null,
   ID                   SERIAL               not null,
   FECHA_INI_ACT        TIME                 null,
   FECHA_TER_ACT        TIME                 null,
   ESTADO_ACT           TEXT                 null,
   constraint PK_ACTIVIDADES_EVENTOS primary key (EVENTO_ID, ACTIVIDADE_ID, ID)
);

comment on column ACTIVIDADES_EVENTOS.EVENTO_ID is
'Identificador del Evento.';

comment on column ACTIVIDADES_EVENTOS.ACTIVIDADE_ID is
'Identificador del itinerario del evento.';

/*==============================================================*/
/* Index: ACTIVIDADES_EVENTOS_PK                                */
/*==============================================================*/
create unique index ACTIVIDADES_EVENTOS_PK on ACTIVIDADES_EVENTOS (
EVENTO_ID,
ACTIVIDADE_ID,
ID
);

/*==============================================================*/
/* Index: EVENTOS_ID3                                           */
/*==============================================================*/
create  index EVENTOS_ID3 on ACTIVIDADES_EVENTOS (
EVENTO_ID
);

/*==============================================================*/
/* Index: ACTIVIDADES_ID                                        */
/*==============================================================*/
create  index ACTIVIDADES_ID on ACTIVIDADES_EVENTOS (
ACTIVIDADE_ID
);

/*==============================================================*/
/* Table: ACTIVIDADES_EVENTO_TIPOS                              */
/*==============================================================*/
create table ACTIVIDADES_EVENTO_TIPOS (
   EVENTO_TIPO_ID       INT4                 not null,
   ACTIVIDADE_ID        INT4                 not null,
   constraint PK_ACTIVIDADES_EVENTO_TIPOS primary key (EVENTO_TIPO_ID, ACTIVIDADE_ID)
);

comment on column ACTIVIDADES_EVENTO_TIPOS.EVENTO_TIPO_ID is
'Identificador de un tipo de evento.';

comment on column ACTIVIDADES_EVENTO_TIPOS.ACTIVIDADE_ID is
'Identificador del itinerario del evento.';

/*==============================================================*/
/* Index: ACTIVIDADES_EVENTO_TIPOS_PK                           */
/*==============================================================*/
create unique index ACTIVIDADES_EVENTO_TIPOS_PK on ACTIVIDADES_EVENTO_TIPOS (
EVENTO_TIPO_ID,
ACTIVIDADE_ID
);

/*==============================================================*/
/* Index: EVENTO_TIPOS_ID4                                      */
/*==============================================================*/
create  index EVENTO_TIPOS_ID4 on ACTIVIDADES_EVENTO_TIPOS (
EVENTO_TIPO_ID
);

/*==============================================================*/
/* Index: ACTIVIDADES_ID2                                       */
/*==============================================================*/
create  index ACTIVIDADES_ID2 on ACTIVIDADES_EVENTO_TIPOS (
ACTIVIDADE_ID
);

/*==============================================================*/
/* Table: AUDITORIA                                             */
/*==============================================================*/
create table AUDITORIA (
   ID_AUDIT             SERIAL               not null,
   NOMBRE_TABLA_AUDIT   CHAR(45)             null,
   OPERACION_AUDIT      CHAR(10)             null,
   VALOR_ANTIGUO        TEXT                 null,
   VALOR_NUEVO          TEXT                 null,
   HORA                 DATE                 null,
   USUARIO              CHAR(45)             null,
   constraint PK_AUDITORIA primary key (ID_AUDIT)
);

/*==============================================================*/
/* Index: AUDITORIA_PK                                          */
/*==============================================================*/
create unique index AUDITORIA_PK on AUDITORIA (
ID_AUDIT
);

/*==============================================================*/
/* Table: BITACORAS                                             */
/*==============================================================*/
create table BITACORAS (
   ID                   SERIAL               not null,
   EVENTO_ID            INT4                 null,
   VEHICULO_ID          TEXT                 not null,
   HORA_INI_BIT         TIME                 null,
   HORA_TER_BIT         TIME                 null,
   DESC_BIT             TEXT                 null,
   constraint PK_BITACORAS primary key (ID)
);

comment on table BITACORAS is
'Detalle exaustivo de quien conduce o hace uso del servicio de transporte (vehículo)';

comment on column BITACORAS.ID is
'identificador de la bitácora';

comment on column BITACORAS.EVENTO_ID is
'Identificador del Evento.';

comment on column BITACORAS.VEHICULO_ID is
'Pantente del vehículo';

comment on column BITACORAS.HORA_INI_BIT is
'hora de inicio del uso de un vehículo';

comment on column BITACORAS.HORA_TER_BIT is
'hora de termino del uso de un vehículo';

comment on column BITACORAS.DESC_BIT is
'descripción de lo que se hará con el vehículo en las horas asignadas.';

/*==============================================================*/
/* Index: BITACORAS_PK                                          */
/*==============================================================*/
create unique index BITACORAS_PK on BITACORAS (
ID
);

/*==============================================================*/
/* Index: VEHICULOS_ID                                          */
/*==============================================================*/
create  index VEHICULOS_ID on BITACORAS (
VEHICULO_ID
);

/*==============================================================*/
/* Index: EVENTOS_ID                                            */
/*==============================================================*/
create  index EVENTOS_ID on BITACORAS (
EVENTO_ID
);

/*==============================================================*/
/* Table: CLIENTES                                              */
/*==============================================================*/
create table CLIENTES (
   ID                   INT4                 not null,
   CLIENTE_TIPO_ID      INT4                 not null,
   NOMBRE_CLI           TEXT                 null,
   APELLIDOM_CLI        TEXT                 null,
   APELLIDOP_CLI        TEXT                 null,
   DIRECCION_CLI        TEXT                 null,
   FONO_CLI             TEXT                 null,
   CORREO_CLI           TEXT                 null,
   constraint PK_CLIENTES primary key (ID)
);

comment on table CLIENTES is
'Toda persona que se acerca a la productora a pedir un evento. No se considera como cliente aquellos casos donde una persona de la misma productora crea un evento
';

comment on column CLIENTES.ID is
'Rut del cliente.';

comment on column CLIENTES.NOMBRE_CLI is
'Nombre del cliente.';

comment on column CLIENTES.APELLIDOM_CLI is
'Apellido Materno del cliente.';

comment on column CLIENTES.APELLIDOP_CLI is
'Apellido paterno del cliente.';

comment on column CLIENTES.DIRECCION_CLI is
'Dirección del cliente.';

comment on column CLIENTES.FONO_CLI is
'Teléfono del cliente.';

comment on column CLIENTES.CORREO_CLI is
'Correo electrónico del cliente.';

/*==============================================================*/
/* Index: CLIENTES_PK                                           */
/*==============================================================*/
create unique index CLIENTES_PK on CLIENTES (
ID
);

/*==============================================================*/
/* Index: CLIENTE_TIPOS_ID                                      */
/*==============================================================*/
create  index CLIENTE_TIPOS_ID on CLIENTES (
CLIENTE_TIPO_ID
);

/*==============================================================*/
/* Table: CLIENTE_TIPOS                                         */
/*==============================================================*/
create table CLIENTE_TIPOS (
   ID                   SERIAL               not null,
   NOMBRE_CLI_TIPO      TEXT                 null,
   constraint PK_CLIENTE_TIPOS primary key (ID)
);

/*==============================================================*/
/* Index: CLIENTE_TIPOS_PK                                      */
/*==============================================================*/
create unique index CLIENTE_TIPOS_PK on CLIENTE_TIPOS (
ID
);

/*==============================================================*/
/* Table: EMPLEADOS                                             */
/*==============================================================*/
create table EMPLEADOS (
   ID                   INT4                 not null,
   EMPLEADO_TIPO_ID     INT4                 not null,
   NOMBRE_EMP           TEXT                 null,
   APELLIDOM_EMP        TEXT                 null,
   APELLIDOP_EMP        TEXT                 null,
   DIRECCION_EMP        TEXT                 null,
   FONO_EMP             TEXT                 null,
   CORREO_EMP           TEXT                 null,
   CONTRATO_EMP         TEXT                 null,
   constraint PK_EMPLEADOS primary key (ID)
);

comment on table EMPLEADOS is
'Toda persona que pertenece a la Productora, que trabaja en la planificación o en la realización del evento`';

comment on column EMPLEADOS.EMPLEADO_TIPO_ID is
'Identificador de un tipo de empleado.';

comment on column EMPLEADOS.NOMBRE_EMP is
'nombre del empleado que trabaja para la productora.';

comment on column EMPLEADOS.APELLIDOM_EMP is
'Apellido Materno del empleado que trabaja para la productora.';

comment on column EMPLEADOS.APELLIDOP_EMP is
'Apellido Paterno del empleado.';

comment on column EMPLEADOS.DIRECCION_EMP is
'Dirección del empleado que trabaja para la productora.';

comment on column EMPLEADOS.FONO_EMP is
'Teléfono del empleado que trabaja para la productora.';

comment on column EMPLEADOS.CORREO_EMP is
'Correo electrónico del empleado que trabaja para la productora.';

comment on column EMPLEADOS.CONTRATO_EMP is
'Imagen del contrato que se realizó con algún empleado.';

/*==============================================================*/
/* Index: EMPLEADOS_PK                                          */
/*==============================================================*/
create unique index EMPLEADOS_PK on EMPLEADOS (
ID
);

/*==============================================================*/
/* Index: EMPLEADO_TIPOS_ID                                     */
/*==============================================================*/
create  index EMPLEADO_TIPOS_ID on EMPLEADOS (
EMPLEADO_TIPO_ID
);

/*==============================================================*/
/* Table: EMPLEADOS_EVENTOS                                     */
/*==============================================================*/
create table EMPLEADOS_EVENTOS (
   EMPLEADO_ID          INT4                 not null,
   EVENTO_ID            INT4                 not null,
   ID                   SERIAL               not null,
   HORA_INI_ETE         TIME                 null,
   HORA_TER_ETE         TIME                 null,
   CARGO_ETE            TEXT                 null,
   constraint PK_EMPLEADOS_EVENTOS primary key (EMPLEADO_ID, EVENTO_ID, ID)
);

comment on table EMPLEADOS_EVENTOS is
'Hace referencia al desempeño que realizará un empleado en un evento determinado.';

comment on column EMPLEADOS_EVENTOS.EVENTO_ID is
'Identificador del Evento.';

comment on column EMPLEADOS_EVENTOS.HORA_INI_ETE is
'Hora de incio de trabajo del empleado';

comment on column EMPLEADOS_EVENTOS.HORA_TER_ETE is
'Hora de termino de trabajo del empleado';

comment on column EMPLEADOS_EVENTOS.CARGO_ETE is
'Cargo que ocupa el empleado.';

/*==============================================================*/
/* Index: EMPLEADOS_EVENTOS_PK                                  */
/*==============================================================*/
create unique index EMPLEADOS_EVENTOS_PK on EMPLEADOS_EVENTOS (
EMPLEADO_ID,
EVENTO_ID,
ID
);

/*==============================================================*/
/* Index: EMPLEADOS_ID                                          */
/*==============================================================*/
create  index EMPLEADOS_ID on EMPLEADOS_EVENTOS (
EMPLEADO_ID
);

/*==============================================================*/
/* Index: EVENTOS_ID4                                           */
/*==============================================================*/
create  index EVENTOS_ID4 on EMPLEADOS_EVENTOS (
EVENTO_ID
);

/*==============================================================*/
/* Table: EMPLEADO_TIPOS                                        */
/*==============================================================*/
create table EMPLEADO_TIPOS (
   ID                   SERIAL               not null,
   NOMBRE_EMPT          TEXT                 null,
   constraint PK_EMPLEADO_TIPOS primary key (ID)
);

comment on table EMPLEADO_TIPOS is
'Distintos roles de los personales. Administrador, coordinador, etc etc.
No hace referencia a la jerarquía que podría haber entre ellos
';

comment on column EMPLEADO_TIPOS.ID is
'Identificador de un tipo de empleado.';

comment on column EMPLEADO_TIPOS.NOMBRE_EMPT is
'Nombre de un tipo de empleado.';

/*==============================================================*/
/* Index: EMPLEADO_TIPOS_PK                                     */
/*==============================================================*/
create unique index EMPLEADO_TIPOS_PK on EMPLEADO_TIPOS (
ID
);

/*==============================================================*/
/* Table: ESTADOS                                               */
/*==============================================================*/
create table ESTADOS (
   ID                   SERIAL               not null,
   DESC_EST             TEXT                 null,
   NOMBRE_EST           TEXT                 null,
   constraint PK_ESTADOS primary key (ID)
);

comment on table ESTADOS is
'Estado en el que se encuentra una cotización. Ej: En espera, Aprobada, etc.
';

comment on column ESTADOS.ID is
'Identificador del estado';

comment on column ESTADOS.DESC_EST is
'Descripción de un estado';

/*==============================================================*/
/* Index: ESTADOS_PK                                            */
/*==============================================================*/
create unique index ESTADOS_PK on ESTADOS (
ID
);

/*==============================================================*/
/* Table: ESTADO_EVENTOS                                        */
/*==============================================================*/
create table ESTADO_EVENTOS (
   ID                   SERIAL               not null,
   NOMBRE_ESTADO_EVT    TEXT                 null,
   DESC_ESTADO_EVT      TEXT                 null,
   constraint PK_ESTADO_EVENTOS primary key (ID)
);

/*==============================================================*/
/* Index: ESTADO_EVENTO_PK                                      */
/*==============================================================*/
create unique index ESTADO_EVENTO_PK on ESTADO_EVENTOS (
ID
);

/*==============================================================*/
/* Table: EVENTOS                                               */
/*==============================================================*/
create table EVENTOS (
   ID                   SERIAL               not null,
   RECINTO_ID           INT4                 not null,
   EVENTO_TIPO_ID       INT4                 not null,
   ESTADO_EVENTO_ID     INT4                 not null,
   CLIENTE_ID           INT4                 null,
   NOMBRE_EVENTO        TEXT                 null,
   DESCRIPCION_EVENTO   TEXT                 null,
   FECHA_DE_INICIO      DATE                 null,
   FECHA_DE_TERMINO     DATE                 null,
   PRECIO_EVENTO        INT4                 null,
   LISTA_INVITADOS      TEXT                 null,
   constraint PK_EVENTOS primary key (ID)
);

comment on table EVENTOS is
'Se entiende por evento como toda instancia de alguna reunión de un grupo de gente con algún motivo en particular. Tanto si es solicitado por un cliente o es creado/ideado por alguien
';

comment on column EVENTOS.ID is
'Identificador del Evento.';

comment on column EVENTOS.RECINTO_ID is
'Identificador del recinto';

comment on column EVENTOS.EVENTO_TIPO_ID is
'Identificador de un tipo de evento.';

comment on column EVENTOS.CLIENTE_ID is
'Rut del cliente.';

comment on column EVENTOS.NOMBRE_EVENTO is
'Nombre del Evento.';

comment on column EVENTOS.DESCRIPCION_EVENTO is
'Descripción del Evento.';

/*==============================================================*/
/* Index: EVENTOS_PK                                            */
/*==============================================================*/
create unique index EVENTOS_PK on EVENTOS (
ID
);

/*==============================================================*/
/* Index: EVENTO_TIPOS_ID                                       */
/*==============================================================*/
create  index EVENTO_TIPOS_ID on EVENTOS (
EVENTO_TIPO_ID
);

/*==============================================================*/
/* Index: RECINTOS_ID                                           */
/*==============================================================*/
create  index RECINTOS_ID on EVENTOS (
RECINTO_ID
);

/*==============================================================*/
/* Index: ESTADO_EVENTO_ID                                      */
/*==============================================================*/
create  index ESTADO_EVENTO_ID on EVENTOS (
ESTADO_EVENTO_ID
);

/*==============================================================*/
/* Index: CLIENTES_ID                                           */
/*==============================================================*/
create  index CLIENTES_ID on EVENTOS (
CLIENTE_ID
);

/*==============================================================*/
/* Table: EVENTO_TIPOS                                          */
/*==============================================================*/
create table EVENTO_TIPOS (
   ID                   SERIAL               not null,
   NOMBRE_EVT           TEXT                 null,
   constraint PK_EVENTO_TIPOS primary key (ID)
);

comment on table EVENTO_TIPOS is
'Tipo de eventos con características claras y definidas, por ejemplo un matrimonio, un cumpleaños, etc.';

comment on column EVENTO_TIPOS.ID is
'Identificador de un tipo de evento.';

comment on column EVENTO_TIPOS.NOMBRE_EVT is
'Nombre de un tipo de evento.';

/*==============================================================*/
/* Index: EVENTO_TIPOS_PK                                       */
/*==============================================================*/
create unique index EVENTO_TIPOS_PK on EVENTO_TIPOS (
ID
);

/*==============================================================*/
/* Table: EVENTO_TIPOS_PARTICIPANTE_TIPOS                       */
/*==============================================================*/
create table EVENTO_TIPOS_PARTICIPANTE_TIPOS (
   EVENTO_TIPO_ID       INT4                 not null,
   PARTICIPANTE_TIPO_ID INT4                 not null,
   constraint PK_EVENTO_TIPOS_PARTICIPANTE_T primary key (EVENTO_TIPO_ID, PARTICIPANTE_TIPO_ID)
);

comment on column EVENTO_TIPOS_PARTICIPANTE_TIPOS.EVENTO_TIPO_ID is
'Identificador de un tipo de evento.';

comment on column EVENTO_TIPOS_PARTICIPANTE_TIPOS.PARTICIPANTE_TIPO_ID is
'Identificador de un tipo de participante.';

/*==============================================================*/
/* Index: EVENTO_TIP                                            */
/*==============================================================*/
create unique index EVENTO_TIP on EVENTO_TIPOS_PARTICIPANTE_TIPOS (
EVENTO_TIPO_ID,
PARTICIPANTE_TIPO_ID
);

/*==============================================================*/
/* Index: EVENTO_TIPOS_ID5                                      */
/*==============================================================*/
create  index EVENTO_TIPOS_ID5 on EVENTO_TIPOS_PARTICIPANTE_TIPOS (
EVENTO_TIPO_ID
);

/*==============================================================*/
/* Index: PARTICIPANTE_TIPOS_ID2                                */
/*==============================================================*/
create  index PARTICIPANTE_TIPOS_ID2 on EVENTO_TIPOS_PARTICIPANTE_TIPOS (
PARTICIPANTE_TIPO_ID
);

/*==============================================================*/
/* Table: EVENTO_TIPOS_RECINTO_TIPOS                            */
/*==============================================================*/
create table EVENTO_TIPOS_RECINTO_TIPOS (
   RECINTO_TIPO_ID      INT4                 not null,
   EVENTO_TIPO_ID       INT4                 not null,
   constraint PK_EVENTO_TIPOS_RECINTO_TIPOS primary key (RECINTO_TIPO_ID, EVENTO_TIPO_ID)
);

comment on column EVENTO_TIPOS_RECINTO_TIPOS.RECINTO_TIPO_ID is
'Identificador de un tipo de recinto.';

comment on column EVENTO_TIPOS_RECINTO_TIPOS.EVENTO_TIPO_ID is
'Identificador de un tipo de evento.';

/*==============================================================*/
/* Index: EVENTO_TIPOS_RECINTO_TIPOS_PK                         */
/*==============================================================*/
create unique index EVENTO_TIPOS_RECINTO_TIPOS_PK on EVENTO_TIPOS_RECINTO_TIPOS (
RECINTO_TIPO_ID,
EVENTO_TIPO_ID
);

/*==============================================================*/
/* Index: RECINTO_TIPOS_ID3                                     */
/*==============================================================*/
create  index RECINTO_TIPOS_ID3 on EVENTO_TIPOS_RECINTO_TIPOS (
RECINTO_TIPO_ID
);

/*==============================================================*/
/* Index: EVENTO_TIPOS_ID6                                      */
/*==============================================================*/
create  index EVENTO_TIPOS_ID6 on EVENTO_TIPOS_RECINTO_TIPOS (
EVENTO_TIPO_ID
);

/*==============================================================*/
/* Table: ITINERARIO_PARTICIPANTES                              */
/*==============================================================*/
create table ITINERARIO_PARTICIPANTES (
   PARTICIPANTE_ID      INT4                 not null,
   EVENTO_ID            INT4                 not null,
   ID                   SERIAL               not null,
   HORA_INI_PAR         TIME                 null,
   HORA_TER_PAR         TIME                 null,
   DESC_ITI_PAR         TEXT                 null,
   constraint PK_ITINERARIO_PARTICIPANTES primary key (PARTICIPANTE_ID, EVENTO_ID, ID)
);

comment on table ITINERARIO_PARTICIPANTES is
'Detalle exaustivo de las actividades que realizará el participante en un evento determinado.';

comment on column ITINERARIO_PARTICIPANTES.PARTICIPANTE_ID is
'Rut del participante.';

comment on column ITINERARIO_PARTICIPANTES.EVENTO_ID is
'Identificador del Evento.';

comment on column ITINERARIO_PARTICIPANTES.ID is
'Identificador del itinerario que deben realizar los participantes.';

comment on column ITINERARIO_PARTICIPANTES.HORA_INI_PAR is
'hora de inicio de las actividades que deben realizar los participantes.';

comment on column ITINERARIO_PARTICIPANTES.HORA_TER_PAR is
'hora de termino de las actividades que deben realizar los participantes.';

comment on column ITINERARIO_PARTICIPANTES.DESC_ITI_PAR is
'descripción de las actividades que deben realizar los participantes.';

/*==============================================================*/
/* Index: ITINERARIO_PARTICIPANTES_PK                           */
/*==============================================================*/
create unique index ITINERARIO_PARTICIPANTES_PK on ITINERARIO_PARTICIPANTES (
PARTICIPANTE_ID,
EVENTO_ID,
ID
);

/*==============================================================*/
/* Index: PARTICIPANTES_ID                                      */
/*==============================================================*/
create  index PARTICIPANTES_ID on ITINERARIO_PARTICIPANTES (
PARTICIPANTE_ID
);

/*==============================================================*/
/* Index: EVENTOS_ID2                                           */
/*==============================================================*/
create  index EVENTOS_ID2 on ITINERARIO_PARTICIPANTES (
EVENTO_ID
);

/*==============================================================*/
/* Table: MEDIDAS                                               */
/*==============================================================*/
create table MEDIDAS (
   ID                   TEXT                 not null,
   constraint PK_MEDIDAS primary key (ID)
);

/*==============================================================*/
/* Index: MEDIDA_PK                                             */
/*==============================================================*/
create unique index MEDIDA_PK on MEDIDAS (
ID
);

/*==============================================================*/
/* Table: MEDIDAS_PROPIEDADES                                   */
/*==============================================================*/
create table MEDIDAS_PROPIEDADES (
   MEDIDA_ID            TEXT                 not null,
   PROPIEDADE_ID        INT4                 not null,
   ID                   SERIAL               not null,
   constraint PK_MEDIDAS_PROPIEDADES primary key (MEDIDA_ID, PROPIEDADE_ID, ID)
);

comment on column MEDIDAS_PROPIEDADES.PROPIEDADE_ID is
'Identificador de la propiedad de un tipo de recurso.';

/*==============================================================*/
/* Index: MEDIDAS_PROPIEDADES_PK                                */
/*==============================================================*/
create unique index MEDIDAS_PROPIEDADES_PK on MEDIDAS_PROPIEDADES (
MEDIDA_ID,
PROPIEDADE_ID,
ID
);

/*==============================================================*/
/* Index: MEDIDA_ID                                             */
/*==============================================================*/
create  index MEDIDA_ID on MEDIDAS_PROPIEDADES (
MEDIDA_ID
);

/*==============================================================*/
/* Index: PROPIEDADES_ID3                                       */
/*==============================================================*/
create  index PROPIEDADES_ID3 on MEDIDAS_PROPIEDADES (
PROPIEDADE_ID
);

/*==============================================================*/
/* Table: PARTICIPAN                                            */
/*==============================================================*/
create table PARTICIPAN (
   SOLICITUD_COTIZACIONE_ID INT4                 not null,
   PARTICIPANTE_TIPO_ID INT4                 not null,
   ID                   SERIAL               not null,
   DESC_PAR_SOL         TEXT                 null,
   constraint PK_PARTICIPAN primary key (SOLICITUD_COTIZACIONE_ID, PARTICIPANTE_TIPO_ID, ID)
);

comment on column PARTICIPAN.SOLICITUD_COTIZACIONE_ID is
'Identificador de la cotización';

comment on column PARTICIPAN.PARTICIPANTE_TIPO_ID is
'Identificador de un tipo de participante.';

/*==============================================================*/
/* Index: PARTICIPAN                                            */
/*==============================================================*/
create unique index PARTICIPAN on PARTICIPAN (
SOLICITUD_COTIZACIONE_ID,
PARTICIPANTE_TIPO_ID,
ID
);

/*==============================================================*/
/* Index: SOLICITUD_COTIZACIONES_ID                             */
/*==============================================================*/
create  index SOLICITUD_COTIZACIONES_ID on PARTICIPAN (
SOLICITUD_COTIZACIONE_ID
);

/*==============================================================*/
/* Index: PARTICIPANTE_TIPOS_ID3                                */
/*==============================================================*/
create  index PARTICIPANTE_TIPOS_ID3 on PARTICIPAN (
PARTICIPANTE_TIPO_ID
);

/*==============================================================*/
/* Table: PARTICIPANTES                                         */
/*==============================================================*/
create table PARTICIPANTES (
   ID                   INT4                 not null,
   PARTICIPANTE_TIPO_ID INT4                 not null,
   NOMBRE_CONT_PAR      TEXT                 null,
   APELLIDOM_CONT_PAR   TEXT                 null,
   APELLIDOP_CONT_PAR   TEXT                 null,
   DIRECCION_CONT_PAR   TEXT                 null,
   FONO_CONT_PAR        TEXT                 null,
   CORREO_CONT_PAR      TEXT                 null,
   CONTRATO_PAR         TEXT                 null,
   RANKING_PAR          INT4                 null,
   NOMBRE_ARTISTICO_PAR TEXT                 null,
   DESC_PAR             TEXT                 null,
   constraint PK_PARTICIPANTES primary key (ID)
);

comment on table PARTICIPANTES is
'Toda persona o grupo de personas que participa dentro del evento como parte de las actividades. Tales como animadores, show artísticos, etc';

comment on column PARTICIPANTES.ID is
'Rut del participante.';

comment on column PARTICIPANTES.PARTICIPANTE_TIPO_ID is
'Identificador de un tipo de participante.';

comment on column PARTICIPANTES.NOMBRE_CONT_PAR is
'Nombre del participante.';

comment on column PARTICIPANTES.APELLIDOM_CONT_PAR is
'Apellido materno del participante.';

comment on column PARTICIPANTES.APELLIDOP_CONT_PAR is
'Apellido paterno del participante.';

comment on column PARTICIPANTES.DIRECCION_CONT_PAR is
'Dirección del participante.';

comment on column PARTICIPANTES.FONO_CONT_PAR is
'Teléfono del participante.';

comment on column PARTICIPANTES.CORREO_CONT_PAR is
'Correo electrónico del participante.';

comment on column PARTICIPANTES.CONTRATO_PAR is
'Imagen del contrato que se realizó con algún participante.';

/*==============================================================*/
/* Index: PARTICIPANTES_PK                                      */
/*==============================================================*/
create unique index PARTICIPANTES_PK on PARTICIPANTES (
ID
);

/*==============================================================*/
/* Index: PARTICIPANTE_TIPOS_ID                                 */
/*==============================================================*/
create  index PARTICIPANTE_TIPOS_ID on PARTICIPANTES (
PARTICIPANTE_TIPO_ID
);

/*==============================================================*/
/* Table: PARTICIPANTE_TIPOS                                    */
/*==============================================================*/
create table PARTICIPANTE_TIPOS (
   ID                   SERIAL               not null,
   NOMBRE_PART          TEXT                 null,
   constraint PK_PARTICIPANTE_TIPOS primary key (ID)
);

comment on table PARTICIPANTE_TIPOS is
'Tipo de persona que opera, actúa y participa en un determinado evento.';

comment on column PARTICIPANTE_TIPOS.ID is
'Identificador de un tipo de participante.';

/*==============================================================*/
/* Index: PARTICIPANTE_TIPOS_PK                                 */
/*==============================================================*/
create unique index PARTICIPANTE_TIPOS_PK on PARTICIPANTE_TIPOS (
ID
);

/*==============================================================*/
/* Table: PROPIEDADES                                           */
/*==============================================================*/
create table PROPIEDADES (
   ID                   SERIAL               not null,
   NOMBRE_PROP          TEXT                 null,
   constraint PK_PROPIEDADES primary key (ID)
);

comment on table PROPIEDADES is
'propiedad de un recurso tipo.';

comment on column PROPIEDADES.ID is
'Identificador de la propiedad de un tipo de recurso.';

comment on column PROPIEDADES.NOMBRE_PROP is
'Descripción de la propiedad de un tipo de recurso.';

/*==============================================================*/
/* Index: PROPIEDADES_PK                                        */
/*==============================================================*/
create unique index PROPIEDADES_PK on PROPIEDADES (
ID
);

/*==============================================================*/
/* Table: PROPIEDADES_RECURSOS                                  */
/*==============================================================*/
create table PROPIEDADES_RECURSOS (
   RECURSO_ID           INT4                 not null,
   PROPIEDADE_ID        INT4                 not null,
   ID                   SERIAL               not null,
   VALOR_PRO_REC        TEXT                 null,
   constraint PK_PROPIEDADES_RECURSOS primary key (RECURSO_ID, PROPIEDADE_ID, ID)
);

comment on table PROPIEDADES_RECURSOS is
'propiedades por algún recurso en específico.';

comment on column PROPIEDADES_RECURSOS.RECURSO_ID is
'Identificador del recurso.';

comment on column PROPIEDADES_RECURSOS.PROPIEDADE_ID is
'Identificador de la propiedad de un tipo de recurso.';

/*==============================================================*/
/* Index: PROPIEDADES_RECURSOS_PK                               */
/*==============================================================*/
create unique index PROPIEDADES_RECURSOS_PK on PROPIEDADES_RECURSOS (
RECURSO_ID,
PROPIEDADE_ID,
ID
);

/*==============================================================*/
/* Index: RECURSOS_ID                                           */
/*==============================================================*/
create  index RECURSOS_ID on PROPIEDADES_RECURSOS (
RECURSO_ID
);

/*==============================================================*/
/* Index: PROPIEDADES_ID                                        */
/*==============================================================*/
create  index PROPIEDADES_ID on PROPIEDADES_RECURSOS (
PROPIEDADE_ID
);

/*==============================================================*/
/* Table: PROPIEDADES_RECURSO_TIPOS                             */
/*==============================================================*/
create table PROPIEDADES_RECURSO_TIPOS (
   PROPIEDADE_ID        INT4                 not null,
   RECURSO_TIPO_ID      TEXT                 not null,
   ID                   SERIAL               not null,
   MAX_RANGO_PROP_TIP   INT4                 null,
   MIN_RANGO_PROP_TIP   INT4                 null,
   MEDIDA_PROP_TIP      TEXT                 null,
   constraint PK_PROPIEDADES_RECURSO_TIPOS primary key (PROPIEDADE_ID, RECURSO_TIPO_ID, ID)
);

comment on column PROPIEDADES_RECURSO_TIPOS.PROPIEDADE_ID is
'Identificador de la propiedad de un tipo de recurso.';

comment on column PROPIEDADES_RECURSO_TIPOS.RECURSO_TIPO_ID is
'Nombre de un tipo de recurso.';

/*==============================================================*/
/* Index: PROPIEDADES_RECURSO_TIPOS_PK                          */
/*==============================================================*/
create unique index PROPIEDADES_RECURSO_TIPOS_PK on PROPIEDADES_RECURSO_TIPOS (
PROPIEDADE_ID,
RECURSO_TIPO_ID,
ID
);

/*==============================================================*/
/* Index: PROPIEDADES_ID2                                       */
/*==============================================================*/
create  index PROPIEDADES_ID2 on PROPIEDADES_RECURSO_TIPOS (
PROPIEDADE_ID
);

/*==============================================================*/
/* Index: RECURSO_TIPOS_ID3                                     */
/*==============================================================*/
create  index RECURSO_TIPOS_ID3 on PROPIEDADES_RECURSO_TIPOS (
RECURSO_TIPO_ID
);

/*==============================================================*/
/* Table: PROVEEDORES                                           */
/*==============================================================*/
create table PROVEEDORES (
   ID                   INT4                 not null,
   NOMBRE_PRO           TEXT                 null,
   DIRECCION_PRO        TEXT                 null,
   FONO_PRO             TEXT                 null,
   CORREO_PRO           TEXT                 null,
   RANKING_PRO          INT4                 null,
   CONTRATO_PRO         TEXT                 null,
   NOMBRE_CONTA         TEXT                 null,
   APELLIDO_CONTA       TEXT                 null,
   CORREO_CONTA         TEXT                 null,
   FONO_CONTA           TEXT                 null,
   constraint PK_PROVEEDORES primary key (ID)
);

comment on table PROVEEDORES is
'Actores que proveen (valga la redundancia), tanto servicios como insumos. 
';

comment on column PROVEEDORES.ID is
'Rut del proveedor.';

comment on column PROVEEDORES.NOMBRE_PRO is
'Nombre del proveedor.';

comment on column PROVEEDORES.DIRECCION_PRO is
'Dirección del proveedor.';

comment on column PROVEEDORES.FONO_PRO is
'Teléfono del proveedor.';

comment on column PROVEEDORES.CORREO_PRO is
'Correo electrónico del proveedor.';

comment on column PROVEEDORES.RANKING_PRO is
'Ranking del proveedor.';

comment on column PROVEEDORES.CONTRATO_PRO is
'Imagen del contrato que se realizó con algún proveedor.';

comment on column PROVEEDORES.NOMBRE_CONTA is
'Nombre del contacto de un proveedor';

comment on column PROVEEDORES.APELLIDO_CONTA is
'Apellido paterno del contacto de un proveedor';

comment on column PROVEEDORES.CORREO_CONTA is
'Correo electrónico del contacto de un proveedor';

comment on column PROVEEDORES.FONO_CONTA is
'Teléfono del contacto de un proveedor';

/*==============================================================*/
/* Index: PROVEEDORES_PK                                        */
/*==============================================================*/
create unique index PROVEEDORES_PK on PROVEEDORES (
ID
);

/*==============================================================*/
/* Table: PROVEEDORES_RECURSO_TIPOS                             */
/*==============================================================*/
create table PROVEEDORES_RECURSO_TIPOS (
   PROVEEDORE_ID        INT4                 not null,
   RECURSO_TIPO_ID      TEXT                 not null,
   constraint PK_PROVEEDORES_RECURSO_TIPOS primary key (PROVEEDORE_ID, RECURSO_TIPO_ID)
);

comment on table PROVEEDORES_RECURSO_TIPOS is
'listado de precios que ofrecen los proveedores por algún producto o servicio determinado.';

comment on column PROVEEDORES_RECURSO_TIPOS.PROVEEDORE_ID is
'Rut del proveedor.';

comment on column PROVEEDORES_RECURSO_TIPOS.RECURSO_TIPO_ID is
'Nombre de un tipo de recurso.';

/*==============================================================*/
/* Index: PROVEEDORES_RECURSO_TIPOS_PK                          */
/*==============================================================*/
create unique index PROVEEDORES_RECURSO_TIPOS_PK on PROVEEDORES_RECURSO_TIPOS (
PROVEEDORE_ID,
RECURSO_TIPO_ID
);

/*==============================================================*/
/* Index: PROVEEDORES_ID2                                       */
/*==============================================================*/
create  index PROVEEDORES_ID2 on PROVEEDORES_RECURSO_TIPOS (
PROVEEDORE_ID
);

/*==============================================================*/
/* Index: RECURSO_TIPOS_ID2                                     */
/*==============================================================*/
create  index RECURSO_TIPOS_ID2 on PROVEEDORES_RECURSO_TIPOS (
RECURSO_TIPO_ID
);

/*==============================================================*/
/* Table: RECINTOS                                              */
/*==============================================================*/
create table RECINTOS (
   ID                   SERIAL               not null,
   RECINTO_TIPO_ID      INT4                 not null,
   NOMBRE_RECI          TEXT                 null,
   MAPA_RECI            TEXT                 null,
   DIMENSION_RECI       INT4                 null,
   UBICACION_RECI       TEXT                 null,
   constraint PK_RECINTOS primary key (ID)
);

comment on table RECINTOS is
'lugar físico en donde se realizará un evento.';

comment on column RECINTOS.ID is
'Identificador del recinto';

comment on column RECINTOS.RECINTO_TIPO_ID is
'Identificador de un tipo de recinto.';

comment on column RECINTOS.NOMBRE_RECI is
'Nombre del recinto';

comment on column RECINTOS.MAPA_RECI is
'Mapa guía del recinto';

comment on column RECINTOS.DIMENSION_RECI is
'Dimensión del recinto';

comment on column RECINTOS.UBICACION_RECI is
'Ubicación del recinto';

/*==============================================================*/
/* Index: RECINTOS_PK                                           */
/*==============================================================*/
create unique index RECINTOS_PK on RECINTOS (
ID
);

/*==============================================================*/
/* Index: RECINTO_TIPOS_ID2                                     */
/*==============================================================*/
create  index RECINTO_TIPOS_ID2 on RECINTOS (
RECINTO_TIPO_ID
);

/*==============================================================*/
/* Table: RECINTO_TIPOS                                         */
/*==============================================================*/
create table RECINTO_TIPOS (
   ID                   SERIAL               not null,
   NOMBRE_RECIT         TEXT                 null,
   constraint PK_RECINTO_TIPOS primary key (ID)
);

comment on table RECINTO_TIPOS is
'Tipo de recinto para un evento determinado.';

comment on column RECINTO_TIPOS.ID is
'Identificador de un tipo de recinto.';

comment on column RECINTO_TIPOS.NOMBRE_RECIT is
'Nombre de un tipo de recinto.';

/*==============================================================*/
/* Index: RECINTO_TIPOS_PK                                      */
/*==============================================================*/
create unique index RECINTO_TIPOS_PK on RECINTO_TIPOS (
ID
);

/*==============================================================*/
/* Table: RECURSOS                                              */
/*==============================================================*/
create table RECURSOS (
   ID                   SERIAL               not null,
   RECURSO_TIPO_ID      TEXT                 not null,
   PROVEEDORE_ID        INT4                 null,
   CANTIDAD_REC         INT4                 null,
   constraint PK_RECURSOS primary key (ID)
);

comment on table RECURSOS is
'elemento necesario para la planificación y realización de un evento.';

comment on column RECURSOS.ID is
'Identificador del recurso.';

comment on column RECURSOS.RECURSO_TIPO_ID is
'Nombre de un tipo de recurso.';

comment on column RECURSOS.PROVEEDORE_ID is
'Rut del proveedor.';

/*==============================================================*/
/* Index: RECURSOS_PK                                           */
/*==============================================================*/
create unique index RECURSOS_PK on RECURSOS (
ID
);

/*==============================================================*/
/* Index: RECURSO_TIPOS_ID                                      */
/*==============================================================*/
create  index RECURSO_TIPOS_ID on RECURSOS (
RECURSO_TIPO_ID
);

/*==============================================================*/
/* Index: PROVEEDORES_ID                                        */
/*==============================================================*/
create  index PROVEEDORES_ID on RECURSOS (
PROVEEDORE_ID
);

/*==============================================================*/
/* Table: RECURSOS_POR_EVENTO                                   */
/*==============================================================*/
create table RECURSOS_POR_EVENTO (
   EVENTO_ID            INT4                 not null,
   RECURSO_ID           INT4                 not null,
   ID                   SERIAL               not null,
   CANTIDAD             INT4                 not null,
   constraint PK_RECURSOS_POR_EVENTO primary key (EVENTO_ID, RECURSO_ID, ID)
);

comment on table RECURSOS_POR_EVENTO is
'Se hace referencia a los recursos que se utilizarán en un evento';

comment on column RECURSOS_POR_EVENTO.EVENTO_ID is
'Identificador del Evento.';

comment on column RECURSOS_POR_EVENTO.RECURSO_ID is
'Identificador del recurso.';

comment on column RECURSOS_POR_EVENTO.CANTIDAD is
'cantidad utilizada de un recurso.';

/*==============================================================*/
/* Index: RECURSOS_POR_EVENTO_PK                                */
/*==============================================================*/
create unique index RECURSOS_POR_EVENTO_PK on RECURSOS_POR_EVENTO (
EVENTO_ID,
RECURSO_ID,
ID
);

/*==============================================================*/
/* Index: EVENTOS_ID5                                           */
/*==============================================================*/
create  index EVENTOS_ID5 on RECURSOS_POR_EVENTO (
EVENTO_ID
);

/*==============================================================*/
/* Index: RECURSOS_ID2                                          */
/*==============================================================*/
create  index RECURSOS_ID2 on RECURSOS_POR_EVENTO (
RECURSO_ID
);

/*==============================================================*/
/* Table: RECURSO_TIPOS                                         */
/*==============================================================*/
create table RECURSO_TIPOS (
   ID                   TEXT                 not null,
   EVENTO_TIPO_ID       INT4                 null,
   DESC_RECT            TEXT                 null,
   CLASIF_RECT          TEXT                 null,
   constraint PK_RECURSO_TIPOS primary key (ID)
);

comment on table RECURSO_TIPOS is
'Tipo de recurso que se dispone para la planificacion y realización del evento.';

comment on column RECURSO_TIPOS.ID is
'Nombre de un tipo de recurso.';

comment on column RECURSO_TIPOS.EVENTO_TIPO_ID is
'Identificador de un tipo de evento.';

/*==============================================================*/
/* Index: RECURSO_TIPOS_PK                                      */
/*==============================================================*/
create unique index RECURSO_TIPOS_PK on RECURSO_TIPOS (
ID
);

/*==============================================================*/
/* Index: EVENTO_TIPOS_ID3                                      */
/*==============================================================*/
create  index EVENTO_TIPOS_ID3 on RECURSO_TIPOS (
EVENTO_TIPO_ID
);

/*==============================================================*/
/* Table: SOLICITUD_COTIZACIONES                                */
/*==============================================================*/
create table SOLICITUD_COTIZACIONES (
   ID                   SERIAL               not null,
   ESTADO_ID            INT4                 not null,
   EVENTO_TIPO_ID       INT4                 null,
   CLIENTE_ID           INT4                 not null,
   RECINTO_TIPO_ID      INT4                 null,
   NOMBRE_COT           TEXT                 null,
   DESC_COT             TEXT                 null,
   constraint PK_SOLICITUD_COTIZACIONES primary key (ID)
);

comment on table SOLICITUD_COTIZACIONES is
'Se entiende como una solicitud que realiza un cliente para pedir la realización de un evento.';

comment on column SOLICITUD_COTIZACIONES.ID is
'Identificador de la cotización';

comment on column SOLICITUD_COTIZACIONES.ESTADO_ID is
'Identificador del estado';

comment on column SOLICITUD_COTIZACIONES.EVENTO_TIPO_ID is
'Identificador de un tipo de evento.';

comment on column SOLICITUD_COTIZACIONES.CLIENTE_ID is
'Rut del cliente.';

comment on column SOLICITUD_COTIZACIONES.RECINTO_TIPO_ID is
'Identificador de un tipo de recinto.';

comment on column SOLICITUD_COTIZACIONES.NOMBRE_COT is
'nombre de la solicitud de cotización.';

/*==============================================================*/
/* Index: SOLICITUD_COTIZACIONES_PK                             */
/*==============================================================*/
create unique index SOLICITUD_COTIZACIONES_PK on SOLICITUD_COTIZACIONES (
ID
);

/*==============================================================*/
/* Index: CLIENTES_ID2                                          */
/*==============================================================*/
create  index CLIENTES_ID2 on SOLICITUD_COTIZACIONES (
CLIENTE_ID
);

/*==============================================================*/
/* Index: ESTADOS_ID                                            */
/*==============================================================*/
create  index ESTADOS_ID on SOLICITUD_COTIZACIONES (
ESTADO_ID
);

/*==============================================================*/
/* Index: RECINTO_TIPOS_ID                                      */
/*==============================================================*/
create  index RECINTO_TIPOS_ID on SOLICITUD_COTIZACIONES (
RECINTO_TIPO_ID
);

/*==============================================================*/
/* Index: EVENTO_TIPOS_ID2                                      */
/*==============================================================*/
create  index EVENTO_TIPOS_ID2 on SOLICITUD_COTIZACIONES (
EVENTO_TIPO_ID
);

/*==============================================================*/
/* Table: VEHICULOS                                             */
/*==============================================================*/
create table VEHICULOS (
   ID                   TEXT                 not null,
   VEHICULO_TIPO_ID     INT4                 not null,
   MODELO_VEH           TEXT                 null,
   MARCA_VEH            TEXT                 null,
   DESC_VEH             TEXT                 null,
   constraint PK_VEHICULOS primary key (ID)
);

comment on table VEHICULOS is
'Máquina que se utiliza para transportar los recursos de un evento.';

comment on column VEHICULOS.ID is
'Pantente del vehículo';

comment on column VEHICULOS.VEHICULO_TIPO_ID is
'Identificador de un tipo vehículo';

comment on column VEHICULOS.MODELO_VEH is
'Modelo del vehículo';

comment on column VEHICULOS.MARCA_VEH is
'Marca del vehículo';

comment on column VEHICULOS.DESC_VEH is
'Descripción de la utilización del vehículo.';

/*==============================================================*/
/* Index: VEHICULOS_PK                                          */
/*==============================================================*/
create unique index VEHICULOS_PK on VEHICULOS (
ID
);

/*==============================================================*/
/* Index: VEHICULO_TIPOS_ID                                     */
/*==============================================================*/
create  index VEHICULO_TIPOS_ID on VEHICULOS (
VEHICULO_TIPO_ID
);

/*==============================================================*/
/* Table: VEHICULO_TIPOS                                        */
/*==============================================================*/
create table VEHICULO_TIPOS (
   ID                   SERIAL               not null,
   NOMBRE_VEHT          TEXT                 null,
   constraint PK_VEHICULO_TIPOS primary key (ID)
);

comment on table VEHICULO_TIPOS is
'Tipo de automóvil que se utiliza en un evento determinado, por ejemplo un camnión, furgón, camioneta, etc.';

comment on column VEHICULO_TIPOS.ID is
'Identificador de un tipo vehículo';

comment on column VEHICULO_TIPOS.NOMBRE_VEHT is
'Descripción de un tipo vehículo';

/*==============================================================*/
/* Index: VEHICULO_TIPOS_PK                                     */
/*==============================================================*/
create unique index VEHICULO_TIPOS_PK on VEHICULO_TIPOS (
ID
);

alter table ACTIVIDADES_EVENTOS
   add constraint FK_ACTIVIDA_RELATIONS_EVENTOS foreign key (EVENTO_ID)
      references EVENTOS (ID)
      on delete restrict on update restrict;

alter table ACTIVIDADES_EVENTOS
   add constraint FK_ACTIVIDA_RELATIONS_ACTIVIDA foreign key (ACTIVIDADE_ID)
      references ACTIVIDADES (ID)
      on delete restrict on update restrict;

alter table ACTIVIDADES_EVENTO_TIPOS
   add constraint FK_ACTIVIDA_RELATIONS_EVENTO_T foreign key (EVENTO_TIPO_ID)
      references EVENTO_TIPOS (ID)
      on delete restrict on update restrict;

alter table ACTIVIDADES_EVENTO_TIPOS
   add constraint FK_ACTIVIDA_RELATIONS_ACTIVIDA foreign key (ACTIVIDADE_ID)
      references ACTIVIDADES (ID)
      on delete restrict on update restrict;

alter table BITACORAS
   add constraint FK_BITACORA_RELATIONS_EVENTOS foreign key (EVENTO_ID)
      references EVENTOS (ID)
      on delete restrict on update restrict;

alter table BITACORAS
   add constraint FK_BITACORA_RELATIONS_VEHICULO foreign key (VEHICULO_ID)
      references VEHICULOS (ID)
      on delete restrict on update restrict;

alter table CLIENTES
   add constraint FK_CLIENTES_RELATIONS_CLIENTE_ foreign key (CLIENTE_TIPO_ID)
      references CLIENTE_TIPOS (ID)
      on delete restrict on update restrict;

alter table EMPLEADOS
   add constraint FK_EMPLEADO_RELATIONS_EMPLEADO foreign key (EMPLEADO_TIPO_ID)
      references EMPLEADO_TIPOS (ID)
      on delete restrict on update restrict;

alter table EMPLEADOS_EVENTOS
   add constraint FK_EMPLEADO_RELATIONS_EMPLEADO foreign key (EMPLEADO_ID)
      references EMPLEADOS (ID)
      on delete restrict on update restrict;

alter table EMPLEADOS_EVENTOS
   add constraint FK_EMPLEADO_RELATIONS_EVENTOS foreign key (EVENTO_ID)
      references EVENTOS (ID)
      on delete restrict on update restrict;

alter table EVENTOS
   add constraint FK_EVENTOS_RELATIONS_EVENTO_T foreign key (EVENTO_TIPO_ID)
      references EVENTO_TIPOS (ID)
      on delete restrict on update restrict;

alter table EVENTOS
   add constraint FK_EVENTOS_RELATIONS_ESTADO_E foreign key (ESTADO_EVENTO_ID)
      references ESTADO_EVENTOS (ID)
      on delete restrict on update restrict;

alter table EVENTOS
   add constraint FK_EVENTOS_RELATIONS_RECINTOS foreign key (RECINTO_ID)
      references RECINTOS (ID)
      on delete restrict on update restrict;

alter table EVENTOS
   add constraint FK_EVENTOS_RELATIONS_CLIENTES foreign key (CLIENTE_ID)
      references CLIENTES (ID)
      on delete restrict on update restrict;

alter table EVENTO_TIPOS_PARTICIPANTE_TIPOS
   add constraint FK_EVENTO_T_RELATIONS_EVENTO_T foreign key (EVENTO_TIPO_ID)
      references EVENTO_TIPOS (ID)
      on delete restrict on update restrict;

alter table EVENTO_TIPOS_PARTICIPANTE_TIPOS
   add constraint FK_EVENTO_T_RELATIONS_PARTICIP foreign key (PARTICIPANTE_TIPO_ID)
      references PARTICIPANTE_TIPOS (ID)
      on delete restrict on update restrict;

alter table EVENTO_TIPOS_RECINTO_TIPOS
   add constraint FK_EVENTO_T_RELATIONS_RECINTO_ foreign key (RECINTO_TIPO_ID)
      references RECINTO_TIPOS (ID)
      on delete restrict on update restrict;

alter table EVENTO_TIPOS_RECINTO_TIPOS
   add constraint FK_EVENTO_T_RELATIONS_EVENTO_T foreign key (EVENTO_TIPO_ID)
      references EVENTO_TIPOS (ID)
      on delete restrict on update restrict;

alter table ITINERARIO_PARTICIPANTES
   add constraint FK_ITINERAR_RELATIONS_PARTICIP foreign key (PARTICIPANTE_ID)
      references PARTICIPANTES (ID)
      on delete restrict on update restrict;

alter table ITINERARIO_PARTICIPANTES
   add constraint FK_ITINERAR_RELATIONS_EVENTOS foreign key (EVENTO_ID)
      references EVENTOS (ID)
      on delete restrict on update restrict;

alter table MEDIDAS_PROPIEDADES
   add constraint FK_MEDIDAS__RELATIONS_MEDIDAS foreign key (MEDIDA_ID)
      references MEDIDAS (ID)
      on delete restrict on update restrict;

alter table MEDIDAS_PROPIEDADES
   add constraint FK_MEDIDAS__RELATIONS_PROPIEDA foreign key (PROPIEDADE_ID)
      references PROPIEDADES (ID)
      on delete restrict on update restrict;

alter table PARTICIPAN
   add constraint FK_PARTICIP_RELATIONS_SOLICITU foreign key (SOLICITUD_COTIZACIONE_ID)
      references SOLICITUD_COTIZACIONES (ID)
      on delete restrict on update restrict;

alter table PARTICIPAN
   add constraint FK_PARTICIP_RELATIONS_PARTICIP foreign key (PARTICIPANTE_TIPO_ID)
      references PARTICIPANTE_TIPOS (ID)
      on delete restrict on update restrict;

alter table PARTICIPANTES
   add constraint FK_PARTICIP_RELATIONS_PARTICIP foreign key (PARTICIPANTE_TIPO_ID)
      references PARTICIPANTE_TIPOS (ID)
      on delete restrict on update restrict;

alter table PROPIEDADES_RECURSOS
   add constraint FK_PROPIEDA_RELATIONS_RECURSOS foreign key (RECURSO_ID)
      references RECURSOS (ID)
      on delete restrict on update restrict;

alter table PROPIEDADES_RECURSOS
   add constraint FK_PROPIEDA_RELATIONS_PROPIEDA foreign key (PROPIEDADE_ID)
      references PROPIEDADES (ID)
      on delete restrict on update restrict;

alter table PROPIEDADES_RECURSO_TIPOS
   add constraint FK_PROPIEDA_RELATIONS_PROPIEDA foreign key (PROPIEDADE_ID)
      references PROPIEDADES (ID)
      on delete restrict on update restrict;

alter table PROPIEDADES_RECURSO_TIPOS
   add constraint FK_PROPIEDA_RELATIONS_RECURSO_ foreign key (RECURSO_TIPO_ID)
      references RECURSO_TIPOS (ID)
      on delete restrict on update restrict;

alter table PROVEEDORES_RECURSO_TIPOS
   add constraint FK_PROVEEDO_RELATIONS_PROVEEDO foreign key (PROVEEDORE_ID)
      references PROVEEDORES (ID)
      on delete restrict on update restrict;

alter table PROVEEDORES_RECURSO_TIPOS
   add constraint FK_PROVEEDO_RELATIONS_RECURSO_ foreign key (RECURSO_TIPO_ID)
      references RECURSO_TIPOS (ID)
      on delete restrict on update restrict;

alter table RECINTOS
   add constraint FK_RECINTOS_RELATIONS_RECINTO_ foreign key (RECINTO_TIPO_ID)
      references RECINTO_TIPOS (ID)
      on delete restrict on update restrict;

alter table RECURSOS
   add constraint FK_RECURSOS_RELATIONS_PROVEEDO foreign key (PROVEEDORE_ID)
      references PROVEEDORES (ID)
      on delete restrict on update restrict;

alter table RECURSOS
   add constraint FK_RECURSOS_RELATIONS_RECURSO_ foreign key (RECURSO_TIPO_ID)
      references RECURSO_TIPOS (ID)
      on delete restrict on update restrict;

alter table RECURSOS_POR_EVENTO
   add constraint FK_RECURSOS_RELATIONS_EVENTOS foreign key (EVENTO_ID)
      references EVENTOS (ID)
      on delete restrict on update restrict;

alter table RECURSOS_POR_EVENTO
   add constraint FK_RECURSOS_RELATIONS_RECURSOS foreign key (RECURSO_ID)
      references RECURSOS (ID)
      on delete restrict on update restrict;

alter table RECURSO_TIPOS
   add constraint FK_RECURSO__RELATIONS_EVENTO_T foreign key (EVENTO_TIPO_ID)
      references EVENTO_TIPOS (ID)
      on delete restrict on update restrict;

alter table SOLICITUD_COTIZACIONES
   add constraint FK_SOLICITU_RELATIONS_CLIENTES foreign key (CLIENTE_ID)
      references CLIENTES (ID)
      on delete restrict on update restrict;

alter table SOLICITUD_COTIZACIONES
   add constraint FK_SOLICITU_RELATIONS_RECINTO_ foreign key (RECINTO_TIPO_ID)
      references RECINTO_TIPOS (ID)
      on delete restrict on update restrict;

alter table SOLICITUD_COTIZACIONES
   add constraint FK_SOLICITU_RELATIONS_ESTADOS foreign key (ESTADO_ID)
      references ESTADOS (ID)
      on delete restrict on update restrict;

alter table SOLICITUD_COTIZACIONES
   add constraint FK_SOLICITU_RELATIONS_EVENTO_T foreign key (EVENTO_TIPO_ID)
      references EVENTO_TIPOS (ID)
      on delete restrict on update restrict;

alter table VEHICULOS
   add constraint FK_VEHICULO_RELATIONS_VEHICULO foreign key (VEHICULO_TIPO_ID)
      references VEHICULO_TIPOS (ID)
      on delete restrict on update restrict;

