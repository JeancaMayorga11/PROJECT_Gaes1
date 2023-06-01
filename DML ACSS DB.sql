USE ACSS;


INSERT INTO Habilitado (ID_habilitado, Nombre) values(1, 'Activo' );
INSERT INTO Habilitado (ID_habilitado, Nombre) values(2, 'Inactivo' );


INSERT INTO Usuario (ID_usuario, Email, Clave, Nombres, Apellidos, Telefono, Tipoidentificacion, fk_ID_habilitado) VALUES (1034567890, 'marialop@gmail.com', MD5('Clave'), 'Maria Camila', 'Rojas Parra',	3022456987,	'CÉDULA', 1);
INSERT INTO Usuario (ID_usuario, Email, Clave, Nombres, Apellidos, Telefono, Tipoidentificacion, fk_ID_habilitado) VALUES (51755880, 'sergio@gmail.com', MD5('Clave'), 'Sergio', 'Valencia Guevara',	3124526352,	'CÉDULA', 1);
INSERT INTO Usuario (ID_usuario, Email, Clave, Nombres, Apellidos, Telefono, Tipoidentificacion, fk_ID_habilitado) VALUES (1032544666, 'marce@gmail.com', MD5('Clave'), 'Laura Marcela', 'Reina Reyes',	3154268795, 'CÉDULA', 1);
INSERT INTO Usuario (ID_usuario, Email, Clave, Nombres, Apellidos, Telefono, Tipoidentificacion, fk_ID_habilitado) VALUES (77122900, 'luzmr@gmail.com', MD5('Clave'), 'Luz Alexandra', 'Vargas', 3658907134, 'CÉDULA', 1);
INSERT INTO Usuario (ID_usuario, Email, Clave, Nombres, Apellidos, Telefono, Tipoidentificacion, fk_ID_habilitado) VALUES (1033509992, 'josebernal@gmail.com', MD5('Clave'), 'Jose',	'Pinzón Hastamorir', 3568452156, 'CÉDULA', 1);
INSERT INTO Usuario (ID_usuario, Email, Clave, Nombres, Apellidos, Telefono, Tipoidentificacion, fk_ID_habilitado) VALUES (1035789022, 'pedrolo@gmail.com', MD5('Clave'), 'Pedro José', 'Velandia',	3002221548, 'CÉDULA', 1);
INSERT INTO Usuario (ID_usuario, Email, Clave, Nombres, Apellidos, Telefono, Tipoidentificacion, fk_ID_habilitado) VALUES (1049097789, 'linavelez@gmail.com', MD5('Clave'),	'Lina María', 'Vega Orjuela', 3114563216, 'CÉDULA', 1);
INSERT INTO Usuario (ID_usuario, Email, Clave, Nombres, Apellidos, Telefono, Tipoidentificacion, fk_ID_habilitado) VALUES (1428920678, 'dyldvalen@gmail.com', MD5('Clave'),	'Dylan', 'Valencia Estupiñan', 3666895688, 'CÉDULA', 1);
INSERT INTO Usuario (ID_usuario, Email, Clave, Nombres, Apellidos, Telefono, Tipoidentificacion, fk_ID_habilitado) VALUES (1040508721, 'luisjose@gmail.com', MD5('Clave'), 'Luis','Cadena Henao', 3042589632, 'CÉDULA', 1);
INSERT INTO Usuario (ID_usuario, Email, Clave, Nombres, Apellidos, Telefono, Tipoidentificacion, fk_ID_habilitado) VALUES (1030179981, 'cristiangomez@gmail.com', MD5('Clave'),	'Cristian', 'Ángulo', 3067894512, 'CÉDULA', 1);
INSERT INTO Usuario (ID_usuario, Email, Clave, Nombres, Apellidos, Telefono, Tipoidentificacion, fk_ID_habilitado) VALUES (1023504458, 'zafiros@gmail.com', MD5('Clave'), 'Felipe',	'Escobar Gaviria', 3096323192, 'CÉDULA', 1);
INSERT INTO Usuario (ID_usuario, Email, Clave, Nombres, Apellidos, Telefono, Tipoidentificacion, fk_ID_habilitado) VALUES (1032475396, 'karenbp@gmail.com', MD5('Clave'), 'Karen Andrea','Bravo Puerto','3092639567','CÉDULA', 1);
INSERT INTO Usuario (ID_usuario, Email, Clave, Nombres, Apellidos, Telefono, Tipoidentificacion, fk_ID_habilitado) VALUES (1035507612, 'juancho@gmail.com', MD5('Clave'), 'Juan David', 'Liberato Romero', 3022278555, 'CÉDULA', 1);
INSERT INTO Usuario (ID_usuario, Email, Clave, Nombres, Apellidos, Telefono, Tipoidentificacion, fk_ID_habilitado) VALUES (1043501232, 'mariapaula@gmail.com', MD5('Clave'), 'Paula', 'Cortés Yepes', 3142953366, 'CÉDULA', 1);
INSERT INTO Usuario (ID_usuario, Email, Clave, Nombres, Apellidos, Telefono, Tipoidentificacion, fk_ID_habilitado) VALUES (1032650125, 'jhonvalencia@gmail.com', MD5('Clave'), 'Jhon', 'Estipcianos Ordorgostia', 3258794055, 'CÉDULA', 1);


INSERT INTO Perfil(ID_perfil, Nombre, fk_ID_usuario, fk_ID_habilitado) VALUES (950,'marialop','1034567890',1);						
INSERT INTO Perfil(ID_perfil, Nombre, fk_ID_usuario, fk_ID_habilitado) VALUES (951,'sergio','51755880',1);						
INSERT INTO Perfil(ID_perfil, Nombre, fk_ID_usuario, fk_ID_habilitado) VALUES (952,'marce','1032544666',1);						
INSERT INTO Perfil(ID_perfil, Nombre, fk_ID_usuario, fk_ID_habilitado) VALUES (953,'luzmr','77122900',1);						
INSERT INTO Perfil(ID_perfil, Nombre, fk_ID_usuario, fk_ID_habilitado) VALUES (954,'josebernal','1033509992',1);						
INSERT INTO Perfil(ID_perfil, Nombre, fk_ID_usuario, fk_ID_habilitado) VALUES (955,'pedrolo','1035789022',1);						
INSERT INTO Perfil(ID_perfil, Nombre, fk_ID_usuario, fk_ID_habilitado) VALUES (956,'linavelez','1049097789',1);						
INSERT INTO Perfil(ID_perfil, Nombre, fk_ID_usuario, fk_ID_habilitado) VALUES (957,'dyldvalen','1428920678',1);						
INSERT INTO Perfil(ID_perfil, Nombre, fk_ID_usuario, fk_ID_habilitado) VALUES (958,'luisjose','1040508721',1);						
INSERT INTO Perfil(ID_perfil, Nombre, fk_ID_usuario, fk_ID_habilitado) VALUES (959,'cristiangomez','1030179981',1);						
INSERT INTO Perfil(ID_perfil, Nombre, fk_ID_usuario, fk_ID_habilitado) VALUES (960,'zafiros','1023504458',1);						
INSERT INTO Perfil(ID_perfil, Nombre, fk_ID_usuario, fk_ID_habilitado) VALUES (961,'karenpaola','1032475396',1);						
INSERT INTO Perfil(ID_perfil, Nombre, fk_ID_usuario, fk_ID_habilitado) VALUES (962,'juancho','1035507612',1);						
INSERT INTO Perfil(ID_perfil, Nombre, fk_ID_usuario, fk_ID_habilitado) VALUES (963,'mariapaula','1043501232',1);						
INSERT INTO Perfil(ID_perfil, Nombre, fk_ID_usuario, fk_ID_habilitado) VALUES (964,'jhonvalencia','1032650125',1);						


INSERT INTO Cita(ID_cita, Direccion, FechaVisita, HoraVisita, Ciudad, TipoServicio, fk_ID_perfil, fk_ID_habilitado) VALUES (1,'Cra. 68 #13a -22',NULL,NULL, 'Poznan', 'Mantenimiento',950,1);													
INSERT INTO Cita(ID_cita, Direccion, FechaVisita, HoraVisita, Ciudad, TipoServicio, fk_ID_perfil, fk_ID_habilitado) VALUES (2,'Cra 13 #65-13',NULL,NULL, 'Cracovia', 'Instalación',951,1);													
INSERT INTO Cita(ID_cita, Direccion, FechaVisita, HoraVisita, Ciudad, TipoServicio, fk_ID_perfil, fk_ID_habilitado) VALUES (3,'Cll. 19 #9-10',NULL,NULL, 'Cracovia', 'Instalación',952,1);													
INSERT INTO Cita(ID_cita, Direccion, FechaVisita, HoraVisita, Ciudad, TipoServicio, fk_ID_perfil, fk_ID_habilitado) VALUES (4,'Cra 72 #99-22',NULL,NULL, 'Poznan', 'Mantenimiento',953,1);													
INSERT INTO Cita(ID_cita, Direccion, FechaVisita, HoraVisita, Ciudad, TipoServicio, fk_ID_perfil, fk_ID_habilitado) VALUES (5,'Cll. 170 #19-11',NULL,NULL, 'Cracovia', 'Mantenimiento',954,1);													
INSERT INTO Cita(ID_cita, Direccion, FechaVisita, HoraVisita, Ciudad, TipoServicio, fk_ID_perfil, fk_ID_habilitado) VALUES (6,'Cra. 100 #14f-12',NULL,NULL, 'Cracovia', 'Mantenimiento',955,1);													
INSERT INTO Cita(ID_cita, Direccion, FechaVisita, HoraVisita, Ciudad, TipoServicio, fk_ID_perfil, fk_ID_habilitado) VALUES (7,'Cll. 100 #22-60',NULL,NULL, 'Poznan', 'Mantenimiento',956,1);													
INSERT INTO Cita(ID_cita, Direccion, FechaVisita, HoraVisita, Ciudad, TipoServicio, fk_ID_perfil, fk_ID_habilitado) VALUES (8,'Cll. 22 #14-48',NULL,NULL, 'Cracovia', 'Mantenimiento',957,1);													
INSERT INTO Cita(ID_cita, Direccion, FechaVisita, HoraVisita, Ciudad, TipoServicio, fk_ID_perfil, fk_ID_habilitado) VALUES (9,'Cll. 7 #2-15',NULL,NULL, 'Poznan', 'Instalación',958,1);													
INSERT INTO Cita(ID_cita, Direccion, FechaVisita, HoraVisita, Ciudad, TipoServicio, fk_ID_perfil, fk_ID_habilitado) VALUES (10,'Cra. 17 #85-19',NULL,NULL, 'Poznan', 'Mantenimiento',959,1);													
INSERT INTO Cita(ID_cita, Direccion, FechaVisita, HoraVisita, Ciudad, TipoServicio, fk_ID_perfil, fk_ID_habilitado) VALUES (11,'Cll. 120 #10-42',NULL,NULL, 'Poznan', 'Mantenimiento',960,1);													
INSERT INTO Cita(ID_cita, Direccion, FechaVisita, HoraVisita, Ciudad, TipoServicio, fk_ID_perfil, fk_ID_habilitado) VALUES (12,'Cra. 7 #36-18',NULL,NULL, 'Cracovia', 'Mantenimiento',961,1);													
INSERT INTO Cita(ID_cita, Direccion, FechaVisita, HoraVisita, Ciudad, TipoServicio, fk_ID_perfil, fk_ID_habilitado) VALUES (13,'Cra. 102 #12d-32',NULL,NULL, 'Poznan', 'Mantenimiento',962,1);													
INSERT INTO Cita(ID_cita, Direccion, FechaVisita, HoraVisita, Ciudad, TipoServicio, fk_ID_perfil, fk_ID_habilitado) VALUES (14,'Cll. 19 #19-20',NULL,NULL, 'Cracovia', 'Mantenimiento',963,1);													
INSERT INTO Cita(ID_cita, Direccion, FechaVisita, HoraVisita, Ciudad, TipoServicio, fk_ID_perfil, fk_ID_habilitado) VALUES (15,'Cra. 40 #7-21',NULL,NULL, 'Cracovia', 'Instalación',964,1);														



INSERT INTO Instalacion(ID_instalacion, Descripcion, Estado, FechaInicio, FechaFin, Precio, fk_ID_cita, fk_ID_perfil, fk_ID_habilitado) VALUES (1478,'La instalación se realizó de forma rápida y eficaz de acuerdo  a los requerimientos del cliente.','Finalizado',NULL, NULL, 3000000,1,950,1);										
INSERT INTO Instalacion(ID_instalacion, Descripcion, Estado, FechaInicio, FechaFin, Precio, fk_ID_cita, fk_ID_perfil, fk_ID_habilitado) VALUES (1479,'La instalación se realizó de forma rápida y eficaz de acuerdo  a los requerimientos del cliente.','Finalizado',NULL, NULL, 5000000,2,951,1);										
INSERT INTO Instalacion(ID_instalacion, Descripcion, Estado, FechaInicio, FechaFin, Precio, fk_ID_cita, fk_ID_perfil, fk_ID_habilitado) VALUES (1480,'La instalación se realizó de forma rápida y eficaz de acuerdo  a los requerimientos del cliente.','Finalizado',NULL, NULL, 2000000,3,952,1);										
INSERT INTO Instalacion(ID_instalacion, Descripcion, Estado, FechaInicio, FechaFin, Precio, fk_ID_cita, fk_ID_perfil, fk_ID_habilitado) VALUES (1481,'La instalación se realizó de forma rápida y eficaz de acuerdo  a los requerimientos del cliente.','Finalizado',NULL, NULL, 3000000,4,953,1);										
INSERT INTO Instalacion(ID_instalacion, Descripcion, Estado, FechaInicio, FechaFin, Precio, fk_ID_cita, fk_ID_perfil, fk_ID_habilitado) VALUES (1482,'La instalación se realizó de forma rápida y eficaz de acuerdo  a los requerimientos del cliente.','Finalizado',NULL, NULL, 5000000,5,954,1);										
INSERT INTO Instalacion(ID_instalacion, Descripcion, Estado, FechaInicio, FechaFin, Precio, fk_ID_cita, fk_ID_perfil, fk_ID_habilitado) VALUES (1483,'La instalación se realizó de forma rápida y eficaz de acuerdo  a los requerimientos del cliente.','Finalizado',NULL, NULL, 2000000,6,955,1);										
INSERT INTO Instalacion(ID_instalacion, Descripcion, Estado, FechaInicio, FechaFin, Precio, fk_ID_cita, fk_ID_perfil, fk_ID_habilitado) VALUES (1484,'La instalación se realizó de forma rápida y eficaz de acuerdo  a los requerimientos del cliente.','Finalizado',NULL, NULL, 3000000,7,956,1);										
INSERT INTO Instalacion(ID_instalacion, Descripcion, Estado, FechaInicio, FechaFin, Precio, fk_ID_cita, fk_ID_perfil, fk_ID_habilitado) VALUES (1485,'La instalación se realizó de forma rápida y eficaz de acuerdo  a los requerimientos del cliente.','Finalizado',NULL, NULL, 5000000,8,957,1);										
INSERT INTO Instalacion(ID_instalacion, Descripcion, Estado, FechaInicio, FechaFin, Precio, fk_ID_cita, fk_ID_perfil, fk_ID_habilitado) VALUES (1486,'La instalación se realizó de forma rápida y eficaz de acuerdo  a los requerimientos del cliente.','Finalizado',NULL, NULL, 2000000,9,958,1);										
INSERT INTO Instalacion(ID_instalacion, Descripcion, Estado, FechaInicio, FechaFin, Precio, fk_ID_cita, fk_ID_perfil, fk_ID_habilitado) VALUES (1487,'La instalación se realizó de forma rápida y eficaz de acuerdo  a los requerimientos del cliente.','Finalizado',NULL, NULL, 3000000,10,959,1);										
INSERT INTO Instalacion(ID_instalacion, Descripcion, Estado, FechaInicio, FechaFin, Precio, fk_ID_cita, fk_ID_perfil, fk_ID_habilitado) VALUES (1488,'La instalación se realizó de forma rápida y eficaz de acuerdo  a los requerimientos del cliente.','Finalizado',NULL, NULL, 5000000,11,960,1);										
INSERT INTO Instalacion(ID_instalacion, Descripcion, Estado, FechaInicio, FechaFin, Precio, fk_ID_cita, fk_ID_perfil, fk_ID_habilitado) VALUES (1489,'La instalación se realizó de forma rápida y eficaz de acuerdo  a los requerimientos del cliente.','Finalizado',NULL, NULL, 2000000,12,961,1);										
INSERT INTO Instalacion(ID_instalacion, Descripcion, Estado, FechaInicio, FechaFin, Precio, fk_ID_cita, fk_ID_perfil, fk_ID_habilitado) VALUES (1490,'La instalación se realizó de forma rápida y eficaz de acuerdo  a los requerimientos del cliente.','Finalizado',NULL, NULL, 3000000,13,962,1);										
INSERT INTO Instalacion(ID_instalacion, Descripcion, Estado, FechaInicio, FechaFin, Precio, fk_ID_cita, fk_ID_perfil, fk_ID_habilitado) VALUES (1491,'La instalación se realizó de forma rápida y eficaz de acuerdo  a los requerimientos del cliente.','Finalizado',NULL, NULL, 5000000,14,963,1);										
INSERT INTO Instalacion(ID_instalacion, Descripcion, Estado, FechaInicio, FechaFin, Precio, fk_ID_cita, fk_ID_perfil, fk_ID_habilitado) VALUES (1492,'La instalación se realizó de forma rápida y eficaz de acuerdo  a los requerimientos del cliente.','Finalizado',NULL, NULL, 2000000,15,964,1);		


INSERT INTO Equipo(Numero_referencia, Nombre, Estado, Marca, fk_ID_perfil, fk_ID_habilitado) VALUES (2666,NULL,'BUENO ','GL ', '950', 1);								
INSERT INTO Equipo(Numero_referencia, Nombre, Estado, Marca, fk_ID_perfil, fk_ID_habilitado) VALUES (2667,NULL,'BUENO ','GL ', '951', 1);								
INSERT INTO Equipo(Numero_referencia, Nombre, Estado, Marca, fk_ID_perfil, fk_ID_habilitado) VALUES (2668,NULL,'BUENO ','GL ', '952', 1);								
INSERT INTO Equipo(Numero_referencia, Nombre, Estado, Marca, fk_ID_perfil, fk_ID_habilitado) VALUES (2669,NULL,'BUENO ','GL ', '953', 1);								
INSERT INTO Equipo(Numero_referencia, Nombre, Estado, Marca, fk_ID_perfil, fk_ID_habilitado) VALUES (2670,NULL,'BUENO ','GL ', '954', 1);								
INSERT INTO Equipo(Numero_referencia, Nombre, Estado, Marca, fk_ID_perfil, fk_ID_habilitado) VALUES (2671,NULL,'BUENO ','GL ', '955', 1);								
INSERT INTO Equipo(Numero_referencia, Nombre, Estado, Marca, fk_ID_perfil, fk_ID_habilitado) VALUES (2672,NULL,'BUENO ','GL ', '956', 1);								
INSERT INTO Equipo(Numero_referencia, Nombre, Estado, Marca, fk_ID_perfil, fk_ID_habilitado) VALUES (2673,NULL,'BUENO ','GL ', '957', 1);								
INSERT INTO Equipo(Numero_referencia, Nombre, Estado, Marca, fk_ID_perfil, fk_ID_habilitado) VALUES (2674,NULL,'BUENO ','GL ', '958', 1);								
INSERT INTO Equipo(Numero_referencia, Nombre, Estado, Marca, fk_ID_perfil, fk_ID_habilitado) VALUES (2675,NULL,'BUENO ','GL ', '959', 1);								
INSERT INTO Equipo(Numero_referencia, Nombre, Estado, Marca, fk_ID_perfil, fk_ID_habilitado) VALUES (2676,NULL,'BUENO ','GL ', '960', 1);								
INSERT INTO Equipo(Numero_referencia, Nombre, Estado, Marca, fk_ID_perfil, fk_ID_habilitado) VALUES (2677,NULL,'BUENO ','GL ', '961', 1);								
INSERT INTO Equipo(Numero_referencia, Nombre, Estado, Marca, fk_ID_perfil, fk_ID_habilitado) VALUES (2678,NULL,'BUENO ','GL ', '962', 1);								
INSERT INTO Equipo(Numero_referencia, Nombre, Estado, Marca, fk_ID_perfil, fk_ID_habilitado) VALUES (2679,NULL,'BUENO ','GL ', '963', 1);								
INSERT INTO Equipo(Numero_referencia, Nombre, Estado, Marca, fk_ID_perfil, fk_ID_habilitado) VALUES (2680,NULL,'BUENO ','GL ', '964', 1);	


INSERT INTO Mantenimiento(ID_mantenimiento, Descripcion, Tipo, Estado, Precio, fk_ID_perfil, fk_ID_cita, fk_ID_Numero_referencia, fk_ID_habilitado) VALUES (1478,'La instalación se realizó de forma rápida y eficaz de acuerdo  a los requerimientos del cliente.','Preventivo','Finalizado', 3000000, 950, 1,2666, 1);																
INSERT INTO Mantenimiento(ID_mantenimiento, Descripcion, Tipo, Estado, Precio, fk_ID_perfil, fk_ID_cita, fk_ID_Numero_referencia, fk_ID_habilitado) VALUES (1479,'La instalación se realizó de forma rápida y eficaz de acuerdo  a los requerimientos del cliente.','Preventivo','Finalizado', 5000000, 951, 2,2667, 1);																
INSERT INTO Mantenimiento(ID_mantenimiento, Descripcion, Tipo, Estado, Precio, fk_ID_perfil, fk_ID_cita, fk_ID_Numero_referencia, fk_ID_habilitado) VALUES (1480,'La instalación se realizó de forma rápida y eficaz de acuerdo  a los requerimientos del cliente.','Correctivo','Finalizado', 2000000, 952, 3,2668, 1);																
INSERT INTO Mantenimiento(ID_mantenimiento, Descripcion, Tipo, Estado, Precio, fk_ID_perfil, fk_ID_cita, fk_ID_Numero_referencia, fk_ID_habilitado) VALUES (1481,'La instalación se realizó de forma rápida y eficaz de acuerdo  a los requerimientos del cliente.','Correctivo','Finalizado', 3000000, 953, 4,2669, 1);																
INSERT INTO Mantenimiento(ID_mantenimiento, Descripcion, Tipo, Estado, Precio, fk_ID_perfil, fk_ID_cita, fk_ID_Numero_referencia, fk_ID_habilitado) VALUES (1482,'La instalación se realizó de forma rápida y eficaz de acuerdo  a los requerimientos del cliente.','Preventivo','Finalizado', 5000000, 954, 5,2670, 1);																
INSERT INTO Mantenimiento(ID_mantenimiento, Descripcion, Tipo, Estado, Precio, fk_ID_perfil, fk_ID_cita, fk_ID_Numero_referencia, fk_ID_habilitado) VALUES (1483,'La instalación se realizó de forma rápida y eficaz de acuerdo  a los requerimientos del cliente.','Preventivo','Finalizado', 2000000, 955, 6,2671, 1);																
INSERT INTO Mantenimiento(ID_mantenimiento, Descripcion, Tipo, Estado, Precio, fk_ID_perfil, fk_ID_cita, fk_ID_Numero_referencia, fk_ID_habilitado) VALUES (1484,'La instalación se realizó de forma rápida y eficaz de acuerdo  a los requerimientos del cliente.','Predictivo','Finalizado', 3000000, 956, 7,2672, 1);																
INSERT INTO Mantenimiento(ID_mantenimiento, Descripcion, Tipo, Estado, Precio, fk_ID_perfil, fk_ID_cita, fk_ID_Numero_referencia, fk_ID_habilitado) VALUES (1485,'La instalación se realizó de forma rápida y eficaz de acuerdo  a los requerimientos del cliente.','Correctivo','Finalizado', 5000000, 957, 8,2673, 1);																
INSERT INTO Mantenimiento(ID_mantenimiento, Descripcion, Tipo, Estado, Precio, fk_ID_perfil, fk_ID_cita, fk_ID_Numero_referencia, fk_ID_habilitado) VALUES (1486,'La instalación se realizó de forma rápida y eficaz de acuerdo  a los requerimientos del cliente.','Preventivo','Finalizado', 2000000, 958, 9,2674, 1);																
INSERT INTO Mantenimiento(ID_mantenimiento, Descripcion, Tipo, Estado, Precio, fk_ID_perfil, fk_ID_cita, fk_ID_Numero_referencia, fk_ID_habilitado) VALUES (1487,'La instalación se realizó de forma rápida y eficaz de acuerdo  a los requerimientos del cliente.','Correctivo','Finalizado', 3000000, 959, 10,2675, 1);																
INSERT INTO Mantenimiento(ID_mantenimiento, Descripcion, Tipo, Estado, Precio, fk_ID_perfil, fk_ID_cita, fk_ID_Numero_referencia, fk_ID_habilitado) VALUES (1488,'La instalación se realizó de forma rápida y eficaz de acuerdo  a los requerimientos del cliente.','Preventivo','Finalizado', 5000000, 960, 11,2676, 1);																
INSERT INTO Mantenimiento(ID_mantenimiento, Descripcion, Tipo, Estado, Precio, fk_ID_perfil, fk_ID_cita, fk_ID_Numero_referencia, fk_ID_habilitado) VALUES (1489,'La instalación se realizó de forma rápida y eficaz de acuerdo  a los requerimientos del cliente.','Correctivo','Finalizado', 2000000, 961, 12,2677, 1);																
INSERT INTO Mantenimiento(ID_mantenimiento, Descripcion, Tipo, Estado, Precio, fk_ID_perfil, fk_ID_cita, fk_ID_Numero_referencia, fk_ID_habilitado) VALUES (1490,'La instalación se realizó de forma rápida y eficaz de acuerdo  a los requerimientos del cliente.','Correctivo','Finalizado', 3000000, 962, 13,2678, 1);																
INSERT INTO Mantenimiento(ID_mantenimiento, Descripcion, Tipo, Estado, Precio, fk_ID_perfil, fk_ID_cita, fk_ID_Numero_referencia, fk_ID_habilitado) VALUES (1491,'La instalación se realizó de forma rápida y eficaz de acuerdo  a los requerimientos del cliente.','Predictivo','Finalizado', 5000000, 963, 14,2679, 1);																
INSERT INTO Mantenimiento(ID_mantenimiento, Descripcion, Tipo, Estado, Precio, fk_ID_perfil, fk_ID_cita, fk_ID_Numero_referencia, fk_ID_habilitado) VALUES (1492,'La instalación se realizó de forma rápida y eficaz de acuerdo  a los requerimientos del cliente.','Correctivo','Finalizado', 2000000, 964, 15,2680, 1);																



INSERT INTO Inventario(ID_inventario, Movimiento, CantidadExistente, CantidadSalida, CantidadEntrada, Saldo, ValorEntrada, ValorSalida, fk_ID_perfil, fk_ID_habilitado) VALUES (1598,'Entrada','5','0', 5, 55555, 698476, 0, 950, 1);													
INSERT INTO Inventario(ID_inventario, Movimiento, CantidadExistente, CantidadSalida, CantidadEntrada, Saldo, ValorEntrada, ValorSalida, fk_ID_perfil, fk_ID_habilitado) VALUES (1599,'Salida','10','5', 0, 66666, 0, 24362, 951, 1);													
INSERT INTO Inventario(ID_inventario, Movimiento, CantidadExistente, CantidadSalida, CantidadEntrada, Saldo, ValorEntrada, ValorSalida, fk_ID_perfil, fk_ID_habilitado) VALUES (1600,'Entrada','12','0', 6, 7777, 1489632, 0, 952, 1);													
INSERT INTO Inventario(ID_inventario, Movimiento, CantidadExistente, CantidadSalida, CantidadEntrada, Saldo, ValorEntrada, ValorSalida, fk_ID_perfil, fk_ID_habilitado) VALUES (1601,'Salida','15','7', 0, 3333, 0, 45758, 953, 1);													
INSERT INTO Inventario(ID_inventario, Movimiento, CantidadExistente, CantidadSalida, CantidadEntrada, Saldo, ValorEntrada, ValorSalida, fk_ID_perfil, fk_ID_habilitado) VALUES (1602,'Entrada','23','0', 1, 20556, 13217, 0, 954, 1);													
INSERT INTO Inventario(ID_inventario, Movimiento, CantidadExistente, CantidadSalida, CantidadEntrada, Saldo, ValorEntrada, ValorSalida, fk_ID_perfil, fk_ID_habilitado) VALUES (1603,'Salida','7','1', 0, 42111, 0, 52891, 955, 1);													
INSERT INTO Inventario(ID_inventario, Movimiento, CantidadExistente, CantidadSalida, CantidadEntrada, Saldo, ValorEntrada, ValorSalida, fk_ID_perfil, fk_ID_habilitado) VALUES (1604,'Entrada','1','0', 2, 63667, 19497, 0, 956, 1);													
INSERT INTO Inventario(ID_inventario, Movimiento, CantidadExistente, CantidadSalida, CantidadEntrada, Saldo, ValorEntrada, ValorSalida, fk_ID_perfil, fk_ID_habilitado) VALUES (1605,'Salida','3','2', 0, 85222, 0, 69247, 957, 1);													
INSERT INTO Inventario(ID_inventario, Movimiento, CantidadExistente, CantidadSalida, CantidadEntrada, Saldo, ValorEntrada, ValorSalida, fk_ID_perfil, fk_ID_habilitado) VALUES (1606,'Entrada','6','0', 6, 106778, 412313, 0, 958, 1);													
INSERT INTO Inventario(ID_inventario, Movimiento, CantidadExistente, CantidadSalida, CantidadEntrada, Saldo, ValorEntrada, ValorSalida, fk_ID_perfil, fk_ID_habilitado) VALUES (1607,'Salida','7','6', 0, 128333, 0, 85604, 959, 1);													
INSERT INTO Inventario(ID_inventario, Movimiento, CantidadExistente, CantidadSalida, CantidadEntrada, Saldo, ValorEntrada, ValorSalida, fk_ID_perfil, fk_ID_habilitado) VALUES (1608,'Entrada','14','0', 9, 14988, 705129, 0, 960, 1);													
INSERT INTO Inventario(ID_inventario, Movimiento, CantidadExistente, CantidadSalida, CantidadEntrada, Saldo, ValorEntrada, ValorSalida, fk_ID_perfil, fk_ID_habilitado) VALUES (1609,'Salida','19','10', 0, 1714, 0, 101960, 961, 1);													
INSERT INTO Inventario(ID_inventario, Movimiento, CantidadExistente, CantidadSalida, CantidadEntrada, Saldo, ValorEntrada, ValorSalida, fk_ID_perfil, fk_ID_habilitado) VALUES (1610,'Entrada','13','0', 7, 93000, 997946, 0, 962, 1);													
INSERT INTO Inventario(ID_inventario, Movimiento, CantidadExistente, CantidadSalida, CantidadEntrada, Saldo, ValorEntrada, ValorSalida, fk_ID_perfil, fk_ID_habilitado) VALUES (1611,'Salida','17','8', 0, 14555, 0, 118316, 963, 1);													
INSERT INTO Inventario(ID_inventario, Movimiento, CantidadExistente, CantidadSalida, CantidadEntrada, Saldo, ValorEntrada, ValorSalida, fk_ID_perfil, fk_ID_habilitado) VALUES (1612,'Entrada','19','0', 9, 236111, 1290762, 0, 964, 1);						

INSERT INTO Elemento(COD_elemento, Nombre, Cantidad, Precio, fk_ID_perfil, fk_ID_Habilitado, fk_ID_Inventario) VALUES (7894,'Destornillador','5','47556', '950', 1,1598);												
INSERT INTO Elemento(COD_elemento, Nombre, Cantidad, Precio, fk_ID_perfil, fk_ID_Habilitado, fk_ID_Inventario) VALUES (9864,'Alicates','3','4565', '951', 1,1599);												
INSERT INTO Elemento(COD_elemento, Nombre, Cantidad, Precio, fk_ID_perfil, fk_ID_Habilitado, fk_ID_Inventario) VALUES (1465,'Cinta','15','12210', '952', 1,1600);												
INSERT INTO Elemento(COD_elemento, Nombre, Cantidad, Precio, fk_ID_perfil, fk_ID_Habilitado, fk_ID_Inventario) VALUES (7863,'Gel','2','4245', '953', 1,1601);												
INSERT INTO Elemento(COD_elemento, Nombre, Cantidad, Precio, fk_ID_perfil, fk_ID_Habilitado, fk_ID_Inventario) VALUES (7485,'Aspas ','12','24212', '954', 1,1602);												
INSERT INTO Elemento(COD_elemento, Nombre, Cantidad, Precio, fk_ID_perfil, fk_ID_Habilitado, fk_ID_Inventario) VALUES (6068,'Tornillo','20','52454', '955', 1,1603);												
INSERT INTO Elemento(COD_elemento, Nombre, Cantidad, Precio, fk_ID_perfil, fk_ID_Habilitado, fk_ID_Inventario) VALUES (5786,'Manguera','5','87785', '956', 1,1604);												
INSERT INTO Elemento(COD_elemento, Nombre, Cantidad, Precio, fk_ID_perfil, fk_ID_Habilitado, fk_ID_Inventario) VALUES (5504,'Pinza','6','45445', '957', 1,1605);												
INSERT INTO Elemento(COD_elemento, Nombre, Cantidad, Precio, fk_ID_perfil, fk_ID_Habilitado, fk_ID_Inventario) VALUES (5222,'Llave ','7','21124', '958', 1,1606);												
INSERT INTO Elemento(COD_elemento, Nombre, Cantidad, Precio, fk_ID_perfil, fk_ID_Habilitado, fk_ID_Inventario) VALUES (4944,'Destornillador','9','4554', '959', 1,1607);												
INSERT INTO Elemento(COD_elemento, Nombre, Cantidad, Precio, fk_ID_perfil, fk_ID_Habilitado, fk_ID_Inventario) VALUES (4658,'Alicates','7','4454', '960', 1,1608);												
INSERT INTO Elemento(COD_elemento, Nombre, Cantidad, Precio, fk_ID_perfil, fk_ID_Habilitado, fk_ID_Inventario) VALUES (4375,'Cinta','10','542412', '961', 1,1609);												
INSERT INTO Elemento(COD_elemento, Nombre, Cantidad, Precio, fk_ID_perfil, fk_ID_Habilitado, fk_ID_Inventario) VALUES (4098,'Gel','1','45775', '962', 1,1610);												
INSERT INTO Elemento(COD_elemento, Nombre, Cantidad, Precio, fk_ID_perfil, fk_ID_Habilitado, fk_ID_Inventario) VALUES (3811,'Aspas ','7','4545', '963', 1,1611);												
INSERT INTO Elemento(COD_elemento, Nombre, Cantidad, Precio, fk_ID_perfil, fk_ID_Habilitado, fk_ID_Inventario) VALUES (3529,'Tornillo','1','21210', '964', 1,1612);					



insert into Categoria(ID_Categoria, NombreCategoria, fk_ID_perfil, fk_COD_elemento, fk_ID_Habilitado) values (601,'Repuesto',950,7894, 1);								
insert into Categoria(ID_Categoria, NombreCategoria, fk_ID_perfil, fk_COD_elemento, fk_ID_Habilitado) values (602,'Herramienta ',951,9864, 1);								
insert into Categoria(ID_Categoria, NombreCategoria, fk_ID_perfil, fk_COD_elemento, fk_ID_Habilitado) values (603,'Herramienta ',952,1465, 1);								
insert into Categoria(ID_Categoria, NombreCategoria, fk_ID_perfil, fk_COD_elemento, fk_ID_Habilitado) values (604,'Herramienta ',953,7863, 1);								
insert into Categoria(ID_Categoria, NombreCategoria, fk_ID_perfil, fk_COD_elemento, fk_ID_Habilitado) values (605,'Repuesto',954,7485, 1);								
insert into Categoria(ID_Categoria, NombreCategoria, fk_ID_perfil, fk_COD_elemento, fk_ID_Habilitado) values (606,'Repuesto',955,6068, 1);								
insert into Categoria(ID_Categoria, NombreCategoria, fk_ID_perfil, fk_COD_elemento, fk_ID_Habilitado) values (607,'Repuesto',956,5786, 1);								
insert into Categoria(ID_Categoria, NombreCategoria, fk_ID_perfil, fk_COD_elemento, fk_ID_Habilitado) values (608,'Repuesto',957,5504, 1);								
insert into Categoria(ID_Categoria, NombreCategoria, fk_ID_perfil, fk_COD_elemento, fk_ID_Habilitado) values (609,'Herramienta ',958,5222, 1);								
insert into Categoria(ID_Categoria, NombreCategoria, fk_ID_perfil, fk_COD_elemento, fk_ID_Habilitado) values (610,'Repuesto',959,4944, 1);								
insert into Categoria(ID_Categoria, NombreCategoria, fk_ID_perfil, fk_COD_elemento, fk_ID_Habilitado) values (611,'Repuesto',960,4658, 1);								
insert into Categoria(ID_Categoria, NombreCategoria, fk_ID_perfil, fk_COD_elemento, fk_ID_Habilitado) values (612,'Herramienta ',961,4375, 1);								
insert into Categoria(ID_Categoria, NombreCategoria, fk_ID_perfil, fk_COD_elemento, fk_ID_Habilitado) values (613,'Herramienta ',962,4098, 1);								
insert into Categoria(ID_Categoria, NombreCategoria, fk_ID_perfil, fk_COD_elemento, fk_ID_Habilitado) values (614,'Repuesto',963,3811, 1);								
insert into Categoria(ID_Categoria, NombreCategoria, fk_ID_perfil, fk_COD_elemento, fk_ID_Habilitado) values (615,'Herramienta ',964,3529, 1);			


INSERT INTO Entrada	(ID_entrada, FechaEntrada, fk_ID_perfil, fk_COD_elemento) VALUES (1478, null, 950, 7894);		
INSERT INTO Entrada	(ID_entrada, FechaEntrada, fk_ID_perfil, fk_COD_elemento) VALUES (1479, null, 951, 9864);
INSERT INTO Entrada	(ID_entrada, FechaEntrada, fk_ID_perfil, fk_COD_elemento) VALUES (1480, null, 952, 1465);
INSERT INTO Entrada	(ID_entrada, FechaEntrada, fk_ID_perfil, fk_COD_elemento) VALUES (1481, null, 953, 7863);
INSERT INTO Entrada	(ID_entrada, FechaEntrada, fk_ID_perfil, fk_COD_elemento) VALUES (1482, null, 954, 7485);
INSERT INTO Entrada	(ID_entrada, FechaEntrada, fk_ID_perfil, fk_COD_elemento) VALUES (1483, null, 955, 6068);
INSERT INTO Entrada	(ID_entrada, FechaEntrada, fk_ID_perfil, fk_COD_elemento) VALUES (1484, null, 956, 5786);
INSERT INTO Entrada	(ID_entrada, FechaEntrada, fk_ID_perfil, fk_COD_elemento) VALUES (1485, null, 957, 5504);
INSERT INTO Entrada	(ID_entrada, FechaEntrada, fk_ID_perfil, fk_COD_elemento) VALUES (1486, null, 958, 5222);
INSERT INTO Entrada	(ID_entrada, FechaEntrada, fk_ID_perfil, fk_COD_elemento) VALUES (1487, null, 959, 4944);
INSERT INTO Entrada	(ID_entrada, FechaEntrada, fk_ID_perfil, fk_COD_elemento) VALUES (1488, null, 960, 4658);
INSERT INTO Entrada	(ID_entrada, FechaEntrada, fk_ID_perfil, fk_COD_elemento) VALUES (1489, null, 961, 4375);
INSERT INTO Entrada	(ID_entrada, FechaEntrada, fk_ID_perfil, fk_COD_elemento) VALUES (1490, null, 962, 4098);
INSERT INTO Entrada	(ID_entrada, FechaEntrada, fk_ID_perfil, fk_COD_elemento) VALUES (1491, null, 963, 3811);
INSERT INTO Entrada	(ID_entrada, FechaEntrada, fk_ID_perfil, fk_COD_elemento) VALUES (1492, null, 964, 3529);			


INSERT INTO Salida (ID_Salida, FechaSalida, fk_ID_perfil, fk_COD_elemento)VALUES (2458, null, 950, 7894);
INSERT INTO Salida (ID_Salida, FechaSalida, fk_ID_perfil, fk_COD_elemento)VALUES (2459, null, 951, 9864);
INSERT INTO Salida (ID_Salida, FechaSalida, fk_ID_perfil, fk_COD_elemento)VALUES (2460, null, 952, 1465);
INSERT INTO Salida (ID_Salida, FechaSalida, fk_ID_perfil, fk_COD_elemento)VALUES (2461, null, 953, 7863);
INSERT INTO Salida (ID_Salida, FechaSalida, fk_ID_perfil, fk_COD_elemento)VALUES (2462, null, 954, 7485);
INSERT INTO Salida (ID_Salida, FechaSalida, fk_ID_perfil, fk_COD_elemento)VALUES (2463, null, 955, 6068);
INSERT INTO Salida (ID_Salida, FechaSalida, fk_ID_perfil, fk_COD_elemento)VALUES (2464, null, 951, 9864);
INSERT INTO Salida (ID_Salida, FechaSalida, fk_ID_perfil, fk_COD_elemento)VALUES (2465, null, 957, 5504);
INSERT INTO Salida (ID_Salida, FechaSalida, fk_ID_perfil, fk_COD_elemento)VALUES (2466, null, 958, 5222);
INSERT INTO Salida (ID_Salida, FechaSalida, fk_ID_perfil, fk_COD_elemento)VALUES (2467, null, 959, 4944);
INSERT INTO Salida (ID_Salida, FechaSalida, fk_ID_perfil, fk_COD_elemento)VALUES (2468, null, 960, 4658);
INSERT INTO Salida (ID_Salida, FechaSalida, fk_ID_perfil, fk_COD_elemento)VALUES (2469, null, 961, 4375);
INSERT INTO Salida (ID_Salida, FechaSalida, fk_ID_perfil, fk_COD_elemento)VALUES (2470, null, 962, 4098);
INSERT INTO Salida (ID_Salida, FechaSalida, fk_ID_perfil, fk_COD_elemento)VALUES (2471, null, 963, 3811);
INSERT INTO Salida (ID_Salida, FechaSalida, fk_ID_perfil, fk_COD_elemento)VALUES (2472, null, 964, 3529);		
		
UPDATE Usuario SET Nombres = 'Trencito' WHERE Nombres = 'Sergio' AND ID_usuario =51755880;

SET FOREIGN_KEY_CHECKS=0;
DELETE FROM Equipo where Numero_referencia = 2680;

-- Funciones de agregación (MAX, MIN, AVG, COUNT, SUM) 
SELECT MAX(ID_cita) AS P_element FROM Cita;
SELECT MIN(ID_usuario) FROM Usuario;
SELECT AVG(Precio)FROM Elemento;
SELECT COUNT(Nombres)FROM Usuario;
SELECT SUM(CantidadEntrada) FROM Inventario;

-- Subconsultas
SELECT Nombre, Precio FROM Elemento WHERE Precio > (SELECT AVG (Precio) FROM Elemento);
SELECT ID_inventario, CantidadEntrada, (SELECT MAX(CantidadEntrada) FROM Inventario) AS MAX_CantEnt FROM Inventario;

-- Consultas masivas INNER JOIN
SELECT *FROM Habilitado H INNER JOIN Perfil P ON H.ID_habilitado = P.fk_ID_habilitado;

-- Alias para columnas y tablas
-- Condiciones (WHERE, HAVING)
SELECT Precio, count(*) AS 'Precio de intalación' FROM Instalacion GROUP BY Precio HAVING count(*)<2000000;

SELECT(fk_COD_elemento) FROM Categoria WHERE fk_COD_elemento > 3529;

																								