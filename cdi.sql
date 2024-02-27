CREATE TABLE `cdi_multimedia` (
  `id_multimedia` int(11) NOT NULL,
  `nombre_archivo` varchar(100) DEFAULT NULL,
  `url` varchar(300) DEFAULT NULL,
  `extension` varchar(20) DEFAULT NULL,
  `fecha_registro` date DEFAULT NULL,
  `tamaño` varchar(20) DEFAULT NULL,
  `hash_archivo` varchar(500) DEFAULT NULL,
  `estado` enum('A','E') DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_modificacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Disparadores `multimedia`
--
DELIMITER $$
CREATE TRIGGER `t_multimedia_in` BEFORE INSERT ON `cdi_multimedia` FOR EACH ROW begin 
set new.fecha_creacion = now();
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `t_multimedia_up` BEFORE UPDATE ON `cdi_multimedia` FOR EACH ROW begin 
set new.fecha_modificacion = now();
end
$$
DELIMITER ;



CREATE TABLE `cdi_publicaciones` (
  `id_publicacion` int(11) NOT NULL,
  `id_usuario` int(11) UNSIGNED DEFAULT NULL,
  `detalle` varchar(255) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `id_tipo_publicacion` int(11) DEFAULT NULL,
  `estado` enum('0','1','2') DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_modificacion` date DEFAULT NULL,
  `visibilidad` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Disparadores `p_publicaciones`
--
DELIMITER $$
CREATE TRIGGER `t_publicaciones_insert` BEFORE INSERT ON `cdi_publicaciones` FOR EACH ROW begin 
	set new.fecha_creacion = now();
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `t_publicaciones_update` BEFORE UPDATE ON `cdi_publicaciones` FOR EACH ROW begin 
	set new.fecha_modificacion = now();
end
$$
DELIMITER ;