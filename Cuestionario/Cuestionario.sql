-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 05, 2014 at 10:47 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Cuestionario`
--

-- --------------------------------------------------------

--
-- Table structure for table `Opciones`
--

CREATE TABLE IF NOT EXISTS `Opciones` (
`id` int(11) NOT NULL,
  `numero_pregunta` int(11) NOT NULL,
  `es_correcto` tinyint(1) NOT NULL DEFAULT '0',
  `texto` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Opciones`
--

INSERT INTO `Opciones` (`id`, `numero_pregunta`, `es_correcto`, `texto`) VALUES
(1, 1, 1, 'PHP: Hypertext Preprocessor.'),
(2, 1, 0, 'Private Home Page.'),
(3, 1, 0, 'Personal Home Page'),
(4, 1, 0, 'Personal Hypertext Processor'),
(5, 1, 0, 'Powerful Hypertext Processor'),
(6, 2, 1, 'echo "hello world"'),
(7, 2, 0, '"Hello World"'),
(8, 2, 0, 'Document.Write("Hello World");'),
(9, 0, 0, 'ASP'),
(10, 0, 0, '.NET'),
(11, 0, 1, 'PHP'),
(12, 3, 0, 'ASP'),
(13, 3, 0, '.NET'),
(14, 3, 1, 'PHP');

-- --------------------------------------------------------

--
-- Table structure for table `Preguntas`
--

CREATE TABLE IF NOT EXISTS `Preguntas` (
  `numero_pregunta` int(11) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Preguntas`
--

INSERT INTO `Preguntas` (`numero_pregunta`, `texto`) VALUES
(1, 'Que significa las iniciales PHP?'),
(2, 'Como escribe "hola mundo" en PHP?'),
(3, 'Lenguaje interpretado que se usa del lado del servidor:');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Opciones`
--
ALTER TABLE `Opciones`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Preguntas`
--
ALTER TABLE `Preguntas`
 ADD PRIMARY KEY (`numero_pregunta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Opciones`
--
ALTER TABLE `Opciones`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
