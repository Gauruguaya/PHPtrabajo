-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2024 a las 02:12:48
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ofertasempleo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulacion`
--

CREATE TABLE `postulacion` (
  `idPostulacion` int(11) NOT NULL,
  `idVacante` int(11) NOT NULL,
  `usuarioId` int(11) NOT NULL,
  `fechaPostulacion` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `postulacion`
--

INSERT INTO `postulacion` (`idPostulacion`, `idVacante`, `usuarioId`, `fechaPostulacion`) VALUES
(1, 4, 1, 0),
(2, 5, 1, 0),
(7, 1, 5, 0),
(8, 1, 1, 0),
(9, 2, 1, 0),
(10, 7, 7, 0),
(12, 3, 1, 0),
(13, 3, 7, 0),
(14, 6, 2, 0),
(15, 7, 3, 0),
(16, 4, 6, 0),
(17, 1, 7, 0),
(19, 8, 4, 0),
(20, 1, 8, 0),
(21, 1, 9, 0),
(22, 4, 9, 0),
(23, 3, 7, 0),
(24, 6, 7, 0),
(25, 2, 7, 0),
(26, 2, 3, 2147483647),
(27, 8, 10, 2147483647),
(28, 2, 10, 2147483647),
(29, 3, 10, 2147483647),
(30, 10, 1, 2147483647),
(31, 2, 11, 2147483647),
(32, 10, 1, 2147483647);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuarioId` int(11) NOT NULL,
  `nombreUsuario` varchar(200) NOT NULL,
  `emailUsuario` varchar(200) NOT NULL,
  `fotoUsuario` varchar(200) NOT NULL,
  `linkedInUsuario` varchar(200) NOT NULL,
  `tipoUsuario` tinyint(1) NOT NULL DEFAULT 0,
  `estadoUsuario` tinyint(1) NOT NULL DEFAULT 0,
  `contrasenaUsuario` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuarioId`, `nombreUsuario`, `emailUsuario`, `fotoUsuario`, `linkedInUsuario`, `tipoUsuario`, `estadoUsuario`, `contrasenaUsuario`) VALUES
(1, 'Rosalía', 'rosalia@gmail.com', 'https://goo.su/pqXl', 'https://www.linkedin.com/in/rosal%C3%ADa-larocca-a5288211b?miniProfileUrn=urn%3Ali%3Afs_miniProfile%3AACoAAB3Z614BYUXXd16YbDVNES7P6qlkdDA_6kM&lipi=urn%3Ali%3Apage%3Ad_flagship3_search_srp_all%3BZBiCkm', 0, 1, '37fPb9X!:J4^}8;'),
(2, 'Hansen', 'hansen@gmail.com', 'https://goo.su/UWz6DI', 'https://www.linkedin.com/search/results/all/?fetchDeterministicClustersOnly=true&heroEntityKey=urn%3Ali%3Afsd_profile%3AACoAAA6QI9oBA1nzngddr1sgtNryVOUjTgDgMEw&keywords=f%C3%A1bio%20c%C3%A9sar%20hanse', 0, 1, '37fPb9X!:J4^}8;'),
(3, 'Lucas Alto', 'lucasalto@gmail.com', 'https://goo.su/FGwZ86', 'https://www.linkedin.com/in/lucas-monte-alto-5457531b4?miniProfileUrn=urn%3Ali%3Afs_miniProfile%3AACoAADHxwEUBmYGTXZQuvaYNMcrHvv_kqwIAed8&lipi=urn%3Ali%3Apage%3Ad_flagship3_search_srp_all%3BTbZAA0h2Ty', 0, 1, '37fPb9X!:J4^}8;'),
(4, 'Gabriela', 'gmdm@gmail.com', 'https://media.licdn.com/media/AAYQAQSOAAgAAQAAAAAAAB-zrMZEDXI2T62PSuT6kpB6qg.png', 'https://www.linkedin.com/in/gabriela-mart%C3%ADnez-de-mattia-49545768/', 1, 1, '37fPb9X!:J4^}8;'),
(5, 'José', 'jose@gmail.com', 'https://goo.su/bKLA5h', 'https://www.linkedin.com/in/jos%C3%A9-fager-perez-9923a423?miniProfileUrn=urn%3Ali%3Afs_miniProfile%3AACoAAATc3n4Bk8xnYj3sZUF5SbpjGGjEccek7zI&lipi=urn%3Ali%3Apage%3Ad_flagship3_search_srp_all%3BhBZxQN', 0, 1, '37fPb9X!:J4^}8;'),
(6, 'Baltazar Viana', 'baltazar@gmail.com', 'https://goo.su/99s1G2Y', 'https://www.linkedin.com/in/baltazar-viana-rodrigues-425627339/', 0, 1, '37fPb9X!:J4^}8;'),
(7, 'Pepito', 'pepito@gmail.com', 'https://goo.su/T44OO61', 'https://www.linkedin.com/in/pepe-riquelme-a72b7570/', 0, 1, '37fPb9X!:J4^}8;'),
(8, 'Atahualpa Amerise', 'atahualpa@gmail.com', 'https://goo.su/RHL51CD', 'https://www.linkedin.com/in/atahualpaamerise/', 0, 1, '37fPb9X!:J4^}8;'),
(9, 'Sabrina Bianchi', 'sabrina@gmail.com', 'https://goo.su/HFdZzr', 'https://www.linkedin.com/in/sabrinabianchicabrera/', 0, 1, '37fPb9X!:J4^}8;'),
(10, 'Ricardo Dossetti', 'ricardo@gmail.com', 'https://goo.su/d060C', 'https://www.linkedin.com/in/ricardo-dossetti-98654630/', 0, 1, '37fPb9X!:J4^}8;'),
(11, 'Laura Pérez', 'laura@gmail.com', 'https://goo.su/un2mk', 'https://www.linkedin.com/in/ana-laura-p%C3%A9rez-espagnolo-4ba21b10a/', 0, 1, '37fPb9X!:J4^}8;');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacante`
--

CREATE TABLE `vacante` (
  `idVacante` int(11) NOT NULL,
  `tituloVacante` varchar(200) NOT NULL,
  `ubicacionV` varchar(200) NOT NULL,
  `salarioV` int(11) NOT NULL,
  `descVacante` varchar(200) NOT NULL,
  `fechaPublicacion` date NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 1,
  `usuarioId` int(11) NOT NULL,
  `contacto` varchar(200) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vacante`
--

INSERT INTO `vacante` (`idVacante`, `tituloVacante`, `ubicacionV`, `salarioV`, `descVacante`, `fechaPublicacion`, `estado`, `usuarioId`, `contacto`, `imagen`) VALUES
(1, 'Creativo/a publicitario/a', 'Skema Publicidad', 80000, 'Participa de un equipo de alta demanda en atención a redes sociales empresariales y construcción de estrategias de branding.', '2024-12-02', 1, 4, '098823513', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0r_dbaLsaGCNw6bdlt3CuWAMcimYWzJCwHA&s'),
(2, 'Vendedor/a', 'Kamikaze', 20000, 'Tienda de prendas deportivas', '2024-12-02', 1, 4, '098823513', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSH-DekwbNRj4fIPMcgqRHXBHiyNzI2soGQsA&s'),
(3, 'Limpidador/a', 'Sinn City', 25000, 'Auxiliar de servicio para tarea de limpieza en depósito comercial.', '2024-12-02', 1, 4, '098823513', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGrfU3_UVoweVZzwF0LFZhzDRJAjsrokO1lg&s'),
(4, 'Agente inmobiliario', 'Bertín Inmobiliaria', 30000, 'Encargado de captación de clientes y firma de contratos de arrendamiento.', '2024-12-02', 1, 4, '098823513', 'https://img.freepik.com/vector-premium/casa-venta-inmobiliaria-diseno-flyer-marketing-digital-publicacion-instagram_473719-146.jpg'),
(5, 'Chef', 'Pantagruel', 50000, 'Especializado en cocina vegana.', '2024-12-03', 1, 4, '098823513', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTL1Br67eJHyfTnV9NB4Wm5gWZsf1K64QJgCQ&s'),
(6, 'Asistente de cuidados', 'Su Salud', 30000, 'Acompañamiento de convalecencia posquirúrgica.', '2024-12-03', 0, 4, '098823513', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnH2B4CEkZuU0Ms7u9usi7arpTpd-stwEilw&s'),
(7, 'Práctico/a farmacéutico/a', 'Apotheke', 40000, 'Experiencia mínima de cuatro años en atención al público y manejo de stock de farmacia.', '2024-12-08', 1, 4, '098823513', 'https://goo.su/BYgGkdq'),
(8, 'Asistente de logística', 'Polo Sur', 28000, 'Asistencia en depósitos comerciales.', '2024-12-08', 1, 4, '098823513', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkgrCGHflrRJJiYNTHq06z5KQ_Qb_v1kMT5w&s'),
(9, 'Asistente comercio', 'Dana Deportes', 20000, 'Ventas al público.', '2024-12-08', 0, 4, '098823513', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSjdHb318b1duwIsJFmZBsbNMIZahGEyqlCw&s'),
(10, 'Verdulero', 'Fruta fresca', 15000, 'Atención al público en el puesto.', '2024-12-08', 1, 4, '098823513', 'https://goo.su/rsmz9l8'),
(11, 'Asistente bicicletero', 'Max Rodados', 15000, 'Reparaciones en el taller. No  se requiere experiencia.', '2024-12-08', 1, 4, '098823513', 'https://goo.su/QWF8X');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `postulacion`
--
ALTER TABLE `postulacion`
  ADD PRIMARY KEY (`idPostulacion`),
  ADD KEY `idVacante` (`idVacante`),
  ADD KEY `usuarioId` (`usuarioId`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuarioId`);

--
-- Indices de la tabla `vacante`
--
ALTER TABLE `vacante`
  ADD PRIMARY KEY (`idVacante`),
  ADD KEY `usuarioId` (`usuarioId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `postulacion`
--
ALTER TABLE `postulacion`
  MODIFY `idPostulacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuarioId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `vacante`
--
ALTER TABLE `vacante`
  MODIFY `idVacante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `postulacion`
--
ALTER TABLE `postulacion`
  ADD CONSTRAINT `postulacion_ibfk_1` FOREIGN KEY (`idVacante`) REFERENCES `vacante` (`idVacante`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `postulacion_ibfk_2` FOREIGN KEY (`usuarioId`) REFERENCES `usuario` (`usuarioId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `vacante`
--
ALTER TABLE `vacante`
  ADD CONSTRAINT `vacante_ibfk_1` FOREIGN KEY (`usuarioId`) REFERENCES `usuario` (`usuarioId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
