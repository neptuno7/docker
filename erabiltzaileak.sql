-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 16-10-2022 a las 15:27:21
-- Versión del servidor: 10.8.2-MariaDB-1:10.8.2+maria~focal
-- Versión de PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erabiltzaileak`
--

CREATE TABLE `erabiltzaileak` (
  `Izena` text NOT NULL,
  `Abizenak` text NOT NULL,
  `NAN` varchar(10) NOT NULL,
  `Telefonoa` int(10) NOT NULL,
  `Jaiotze_data` date NOT NULL,
  `Email` text NOT NULL,
  `Pasahitza` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `erabiltzaileak`
--

INSERT INTO `erabiltzaileak` (`Izena`, `Abizenak`, `NAN`, `Telefonoa`, `Jaiotze_data`, `Email`, `Pasahitza`) VALUES
('IKER', 'Palacios', '46373023D', 661545028, '2017-06-01', 'ikerpanu@gmail.com', 'cf83e1357eefb8bdf1542850d66d8007d620e4050b5715dc83f4a921d36ce9ce47d0d13c5d85f2b0ff8318d2877eec2f63b931bd47417a81a538327af927da3e'),
('Iker', 'Maniega', '21831723', 616545028, '2017-06-01', 'mani@gmail.com', 'cf83e1357eefb8bdf1542850d66d8007d620e4050b5715dc83f4a921d36ce9ce47d0d13c5d85f2b0ff8318d2877eec2f63b931bd47417a81a538327af927da3e'),
('jonas', 'martinez', '12345678-X', 321321321, '2017-06-01', 'j@gmail.com', 'cf83e1357eefb8bdf1542850d66d8007d620e4050b5715dc83f4a921d36ce9ce47d0d13c5d85f2b0ff8318d2877eec2f63b931bd47417a81a538327af927da3e'),
('BENITO', 'CAMELA', '12345678-W', 123456789, '2017-06-01', 'erbeni@gmail.com', ''),
('aosdifn', 'opasbgfa', '12345678-Q', 123456789, '2017-06-01', 'aslifb@xn--aiowfn-ywa', ''),
('ear', 'eewer', '46373023-D', 123123123, '2017-06-01', 'easf@adgf', 'cf83e1357eefb8bdf1542850d66d8007d620e4050b5715dc83f4a921d36ce9ce47d0d13c5d85f2b0ff8318d2877eec2f63b931bd47417a81a538327af927da3e'),
('iker', 'palacios', '12345678-A', 123123123, '2017-06-01', 'ikerpanu@gmail.com', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
