-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-01-2023 a las 22:55:46
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `citasmedicas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citasmedicas`
--

CREATE TABLE `citasmedicas` (
  `idCitasMedicas` int(10) NOT NULL,
  `IdUsuario` int(20) NOT NULL,
  `fecha` date NOT NULL,
  `especialidad` int(3) NOT NULL,
  `observacion` varchar(100) NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `idEspecialidad` int(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`idEspecialidad`, `nombre`, `estado`) VALUES
(1, 'Medicina General', 1),
(2, 'Nutricionista', 1),
(3, 'Odontología', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(75) NOT NULL,
  `image` varchar(200) NOT NULL,
  `idUsuario` int(20) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`firstname`, `lastname`, `age`, `email`, `image`, `idUsuario`, `status`) VALUES
('Bradford', 'Prohaska', 43, 'vcholdcroftg@ucoz.com', 'https://robohash.org/accusantiumvoluptateseos.png', 139, 1),
('Arely', 'Skiles', 42, 'sberminghamh@chron.com', 'https://robohash.org/nihilharumqui.png', 140, 1),
('Gust', 'Purdy', 46, 'bleveragei@so-net.ne.jp', 'https://robohash.org/delenitipraesentiumvoluptatum.png', 141, 1),
('Lenna', 'Renner', 41, 'aeatockj@psu.edu', 'https://robohash.org/ipsumutofficiis.png', 142, 1),
('Doyle', 'Ernser', 23, 'ckensleyk@pen.io', 'https://robohash.org/providenttemporadelectus.png', 143, 1),
('Tressa', 'Weber', 41, 'froachel@howstuffworks.com', 'https://robohash.org/temporarecusandaeest.png', 144, 1),
('Felicity', 'O\'Reilly', 46, 'beykelhofm@wikispaces.com', 'https://robohash.org/odioquivero.png', 145, 1),
('Jocelyn', 'Schuster', 19, 'brickeardn@fema.gov', 'https://robohash.org/odiomolestiaealias.png', 146, 1),
('Edwina', 'Ernser', 21, 'dfundello@amazon.co.jp', 'https://robohash.org/doloremautdolores.png', 147, 1),
('Griffin', 'Braun', 35, 'lgronaverp@cornell.edu', 'https://robohash.org/laboriosammollitiaut.png', 148, 1),
('Piper', 'Schowalter', 47, 'fokillq@amazon.co.jp', 'https://robohash.org/nequeodiosapiente.png', 149, 1),
('Kody', 'Terry', 28, 'xisherwoodr@ask.com', 'https://robohash.org/consequunturabnon.png', 150, 1),
('Macy', 'Greenfelder', 45, 'jissetts@hostgator.com', 'https://robohash.org/amettemporeea.png', 151, 1),
('Maurine', 'Stracke', 31, 'kdulyt@umich.edu', 'https://robohash.org/perferendisideveniet.png', 152, 1),
('Terry', 'Medhurst', 50, 'atuny0@sohu.com', 'https://robohash.org/hicveldicta.png', 153, 1),
('Sheldon', 'Quigley', 28, 'hbingley1@plala.or.jp', 'https://robohash.org/doloremquesintcorrupti.png', 154, 1),
('Terrill', 'Hills', 38, 'rshawe2@51.la', 'https://robohash.org/consequunturautconsequatur.png', 155, 1),
('Miles', 'Cummerata', 49, 'yraigatt3@nature.com', 'https://robohash.org/facilisdignissimosdolore.png', 156, 1),
('Mavis', 'Schultz', 38, 'kmeus4@upenn.edu', 'https://robohash.org/adverovelit.png', 157, 1),
('Alison', 'Reichert', 21, 'jtreleven5@nhs.uk', 'https://robohash.org/laboriosamfacilisrem.png', 158, 1),
('Oleta', 'Abbott', 31, 'dpettegre6@columbia.edu', 'https://robohash.org/cupiditatererumquos.png', 159, 1),
('Ewell', 'Mueller', 29, 'ggude7@chron.com', 'https://robohash.org/quiaharumsapiente.png', 160, 1),
('Demetrius', 'Corkery', 22, 'nloiterton8@aol.com', 'https://robohash.org/excepturiiuremolestiae.png', 161, 1),
('Eleanora', 'Price', 37, 'umcgourty9@jalbum.net', 'https://robohash.org/aliquamcumqueiure.png', 162, 1),
('Marcel', 'Jones', 39, 'acharlota@liveinternet.ru', 'https://robohash.org/impeditautest.png', 163, 1),
('Assunta', 'Rath', 42, 'rhallawellb@dropbox.com', 'https://robohash.org/namquaerataut.png', 164, 1),
('Trace', 'Douglas', 26, 'lgribbinc@posterous.com', 'https://robohash.org/voluptatemsintnulla.png', 165, 1),
('Enoch', 'Lynch', 21, 'mturleyd@tumblr.com', 'https://robohash.org/quisequienim.png', 166, 1),
('Jeanne', 'Halvorson', 26, 'kminchelle@qq.com', 'https://robohash.org/autquiaut.png', 167, 1),
('Trycia', 'Fadel', 41, 'dpierrof@vimeo.com', 'https://robohash.org/porronumquamid.png', 168, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citasmedicas`
--
ALTER TABLE `citasmedicas`
  ADD PRIMARY KEY (`idCitasMedicas`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`idEspecialidad`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citasmedicas`
--
ALTER TABLE `citasmedicas`
  MODIFY `idCitasMedicas` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `idEspecialidad` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
