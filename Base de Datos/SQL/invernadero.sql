-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-03-2022 a las 01:11:20
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `invernadero`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aphidoidea`
--

CREATE TABLE `aphidoidea` (
  `ID_Plant` int(11) NOT NULL,
  `Value` int(5) NOT NULL,
  `Date` datetime(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beds`
--

CREATE TABLE `beds` (
  `ID` int(11) NOT NULL,
  `Quantity_Plants` int(5) NOT NULL,
  `Descrip` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diameter`
--

CREATE TABLE `diameter` (
  `ID_Plant` int(11) NOT NULL,
  `Value` float NOT NULL,
  `Date` datetime(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `height`
--

CREATE TABLE `height` (
  `ID_Plant` int(11) NOT NULL,
  `Value` float NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `num_sheets`
--

CREATE TABLE `num_sheets` (
  `ID_Plant` int(11) NOT NULL,
  `Value` int(5) NOT NULL,
  `Date` datetime(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plants`
--

CREATE TABLE `plants` (
  `ID` int(11) NOT NULL,
  `ID_Bed` int(11) NOT NULL,
  `Position` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `results_sen`
--

CREATE TABLE `results_sen` (
  `ID_Sensor` int(11) NOT NULL,
  `Value` float NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sensors`
--

CREATE TABLE `sensors` (
  `ID` int(11) NOT NULL,
  `Name` enum('Humedad Ambiente','Temperatura','Flujo') NOT NULL,
  `Unit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `substrate_moisture`
--

CREATE TABLE `substrate_moisture` (
  `ID_Bed` int(11) NOT NULL,
  `Value` float NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `ID` varchar(20) NOT NULL,
  `Pwd` varchar(20) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aphidoidea`
--
ALTER TABLE `aphidoidea`
  ADD KEY `Aphidoidea_fk0` (`ID_Plant`);

--
-- Indices de la tabla `beds`
--
ALTER TABLE `beds`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `diameter`
--
ALTER TABLE `diameter`
  ADD KEY `Diameter_fk0` (`ID_Plant`);

--
-- Indices de la tabla `height`
--
ALTER TABLE `height`
  ADD KEY `Height_fk0` (`ID_Plant`);

--
-- Indices de la tabla `num_sheets`
--
ALTER TABLE `num_sheets`
  ADD KEY `Num_Sheets_fk0` (`ID_Plant`);

--
-- Indices de la tabla `plants`
--
ALTER TABLE `plants`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Plants_fk0` (`ID_Bed`);

--
-- Indices de la tabla `results_sen`
--
ALTER TABLE `results_sen`
  ADD KEY `Results_Sen_fk0` (`ID_Sensor`);

--
-- Indices de la tabla `sensors`
--
ALTER TABLE `sensors`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Unit` (`Unit`);

--
-- Indices de la tabla `substrate_moisture`
--
ALTER TABLE `substrate_moisture`
  ADD KEY `substrate_moisture_fk0` (`ID_Bed`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `beds`
--
ALTER TABLE `beds`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `plants`
--
ALTER TABLE `plants`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sensors`
--
ALTER TABLE `sensors`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `aphidoidea`
--
ALTER TABLE `aphidoidea`
  ADD CONSTRAINT `Aphidoidea_fk0` FOREIGN KEY (`ID_Plant`) REFERENCES `plants` (`ID`);

--
-- Filtros para la tabla `diameter`
--
ALTER TABLE `diameter`
  ADD CONSTRAINT `Diameter_fk0` FOREIGN KEY (`ID_Plant`) REFERENCES `plants` (`ID`);

--
-- Filtros para la tabla `height`
--
ALTER TABLE `height`
  ADD CONSTRAINT `Height_fk0` FOREIGN KEY (`ID_Plant`) REFERENCES `plants` (`ID`);

--
-- Filtros para la tabla `num_sheets`
--
ALTER TABLE `num_sheets`
  ADD CONSTRAINT `Num_Sheets_fk0` FOREIGN KEY (`ID_Plant`) REFERENCES `plants` (`ID`);

--
-- Filtros para la tabla `plants`
--
ALTER TABLE `plants`
  ADD CONSTRAINT `Plants_fk0` FOREIGN KEY (`ID_Bed`) REFERENCES `beds` (`ID`);

--
-- Filtros para la tabla `results_sen`
--
ALTER TABLE `results_sen`
  ADD CONSTRAINT `Results_Sen_fk0` FOREIGN KEY (`ID_Sensor`) REFERENCES `sensors` (`ID`);

--
-- Filtros para la tabla `substrate_moisture`
--
ALTER TABLE `substrate_moisture`
  ADD CONSTRAINT `substrate_moisture_fk0` FOREIGN KEY (`ID_Bed`) REFERENCES `beds` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
