-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2019 at 03:00 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `an 1 is`
--

-- --------------------------------------------------------

--
-- Table structure for table `departament`
--

CREATE TABLE `departament` (
  `Cadru_didactic` varchar(200) NOT NULL,
  `Departament` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departament`
--

INSERT INTO `departament` (`Cadru_didactic`, `Departament`) VALUES
('As.dr.ing. Cristian ZIMBRU', 'AIA'),
('As.dr.ing. Oana-Sorina CHIRILA', 'AIA'),
('As.dr.ing. Raul-Cristian ROMAN', 'AIA'),
('Conf.dr.ing. Florin DRAGAN', 'AIA'),
('Conf.dr.ing. Iosif SZEIDERT', 'AIA'),
('Prof.dr.ing. Gheorghe-Daniel ANDREESCU', 'AIA'),
('Prof.dr.ing. Ioan FILIP', 'AIA'),
('Prof.dr.ing. Lacramioara STOICU-TIVADAR', 'AIA'),
('Prof.dr.ing. Octavian PROSTEAN', 'AIA'),
('Prof.dr.ing. Radu-Emil PRECUP', 'AIA'),
('S.l.dr.ing. Alexandra-Iulia SZEDLAK-STINEAN', 'AIA'),
('S.l.dr.ing. Antonius STANCIU', 'AIA'),
('S.l.dr.ing. Claudia-Adina BOJAN-DRAGOS', 'AIA'),
('S.l.dr.ing. Cristian VASAR', 'AIA'),
('S.l.dr.ing. Dan UNGUREANU', 'AIA'),
('S.l.dr.ing. Daniel IERCAN', 'AIA'),
('S.l.dr.ing. Dorina POPESCU', 'AIA'),
('S.l.dr.ing. Mihaela CRISAN-VIDA', 'AIA'),
('S.l.dr.ing. Mircea-Bogdan RADAC', 'AIA'),
('S.l.dr.ing. Ovidiu BANIAS', 'AIA'),
('Conf. univ. ARIESANU CAMELIA', 'MATEMATICA'),
('Conf. univ.- Director Departament  BINZAR TUDOR ', 'MATEMATICA'),
('Prof. univ.  BOTA CONSTANTIN ', 'MATEMATICA'),
('Prof. univ. BUSE CONSTANTIN ', 'MATEMATICA'),
('Conf. univ. - Prorector CADARIU - BRAILOIU LIVIU - IOAN', 'MATEMATICA'),
('Conf. univ.  CARUNTU BOGDAN ', 'MATEMATICA'),
('Conf. univ. -asociat  GOLET IOAN ', 'MATEMATICA'),
('Asist. univ. LUPA NICOLAE ', 'MATEMATICA'),
('Conf. univ. NEGREA ROMEO-IOSIF', 'MATEMATICA'),
('Conf. univ.  PAUNESCU MARIN-DORU ', 'MATEMATICA'),
('Conf. univ.  BARVINSCHI FLORICICA ', 'FIZICA'),
('Prof. univ. BERE IOAN ', 'FIZICA'),
('Conf. univ.  - Director departament GRECONICI MARIAN ', 'FIZICA'),
('S.l. univ. LUMINOSU IOAN ', 'FIZICA'),
('S.l. univ.  PRETORIAN SIMONA ', 'FIZICA'),
('S.l. univ.  TATAI ILDIKO ', 'FIZICA'),
('Prof. univ. TOADER DUMITRU ', 'FIZICA'),
('S.l. univ. ZAHARIE IOAN ', 'FIZICA'),
('Prof. univ. HERISANU NICOLAE ', 'MECANICA'),
('S.l. univ.  LINUL EMANOIL ', 'MECANICA'),
('Prof. univ. - Director departament  MARSAVINA LIVIU ', 'MECANICA'),
('S.l. univ.  MENYHARDT KAROLY', 'MECANICA'),
('S.l. univ. NAGY RAMONA ', 'MECANICA'),
('Asist. univ. TOTOREAN ALIN ', 'MECANICA'),
('Doctorand BALAN CATALIN-IULIAN ', 'MASURARI SI ELECTRONICA OPTICA'),
('Doctorand  BUTA PETRU ADRIAN ', 'MASURARI SI ELECTRONICA OPTICA'),
('S.l. univ.  IONEL RAUL CIPRIAN ', 'MASURARI SI ELECTRONICA OPTICA'),
('S.l. univ. - Director departament  MATIU IOVAN  LILIANA ', 'MASURARI SI ELECTRONICA OPTICA'),
('Prof. univ.  STOICIU DAN ', 'MASURARI SI ELECTRONICA OPTICA'),
('S.l. univ. VARTOSU ADRIAN-GHEORGHE ', 'MASURARI SI ELECTRONICA OPTICA'),
('S.l. univ. BAIAS COSMIN ', 'LIMBI STRAINE'),
('S.l. univ. COHEN - VIDA MARION ', 'LIMBI STRAINE'),
('Prof. univ.  DEJICA - CARTIS DANIEL ', 'LIMBI STRAINE'),
('Conf. univ. - Director departament GHERHES VASILE ', 'LIMBI STRAINE'),
('S.l. univ.  PALEA ADINA RAMONA', 'LIMBI STRAINE'),
('Prof. univ.  POP MIRELA-CRISTINA ', 'LIMBI STRAINE');

-- --------------------------------------------------------

--
-- Table structure for table `examene`
--

CREATE TABLE `examene` (
  `id_materie` int(5) NOT NULL,
  `nume_profesor` varchar(100) NOT NULL,
  `data_examen` date NOT NULL,
  `ora_examen` time NOT NULL,
  `prezentare` int(2) NOT NULL,
  `tip_examen` varchar(200) NOT NULL,
  `durata_examen` int(10) NOT NULL,
  `sala` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examene`
--

INSERT INTO `examene` (`id_materie`, `nume_profesor`, `data_examen`, `ora_examen`, `prezentare`, `tip_examen`, `durata_examen`, `sala`) VALUES
(3, 'S.l. univ. ZAHARIE IOAN ', '2019-06-20', '08:00:00', 2, '2', 3, 'D1'),
(1, 'Conf. univ. ARIESANU CAMELIA', '2019-06-24', '08:00:00', 1, '1', 2, 'D1'),
(15, 'As.dr.ing. Cristian ZIMBRU', '2019-06-21', '15:00:00', 3, '3', 3, 'ASPC'),
(1, 'Conf. univ. ARIESANU CAMELIA', '2019-07-02', '12:00:00', 3, '2', 3, 'A109'),
(12, 'Conf. univ. NEGREA ROMEO-IOSIF', '2019-06-17', '11:00:00', 1, '2', 4, 'D1'),
(16, 'As.dr.ing. Cristian ZIMBRU', '2019-06-29', '14:00:00', 1, '4', 4, 'D1'),
(1, 'Conf. univ. ARIESANU CAMELIA', '2019-06-29', '15:00:00', 1, '1', 3, 'D1'),
(14, 'Prof. univ. TOADER DUMITRU ', '2019-06-28', '14:00:00', 2, '3', 4, 'D1'),
(1, 'Conf. univ. ARIESANU CAMELIA', '2019-07-05', '08:00:00', 1, '1', 4, 'D1');

-- --------------------------------------------------------

--
-- Table structure for table `materii`
--

CREATE TABLE `materii` (
  `id` int(100) NOT NULL,
  `materie` varchar(100) NOT NULL,
  `an` int(4) NOT NULL,
  `semestru` int(2) NOT NULL,
  `sectie` varchar(20) NOT NULL,
  `departament` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materii`
--

INSERT INTO `materii` (`id`, `materie`, `an`, `semestru`, `sectie`, `departament`) VALUES
(1, 'Analiza Matematica', 1, 1, 'IS', 'MATEMATICA'),
(2, 'Algebra si Geometrie', 1, 1, 'IS', ''),
(3, 'Fizica', 1, 1, 'IS', ''),
(4, 'Programarea Calculatoarelor', 1, 1, 'IS', ''),
(5, 'Fundamente de Inginerie Mecanica si Robotica', 1, 1, 'IS', ''),
(6, 'Logica si Structuri Discrete', 1, 1, 'IS', ''),
(7, 'Limba Engleza', 1, 1, 'IS', ''),
(8, 'Limba Franceza', 1, 1, 'IS', ''),
(9, 'Limba Germana', 1, 1, 'IS', ''),
(11, 'Matematici asistate de Calculator', 1, 2, 'IS', ''),
(12, 'Matematici Speciale', 1, 2, 'IS', ''),
(13, 'Fundamente de Inginerie Electrica', 1, 2, 'IS', ''),
(14, 'Fundamente de Inginerie Electronica', 1, 2, 'IS', ''),
(15, 'Tehnici de Programare', 1, 2, 'IS', ''),
(16, 'Logica Digitala', 1, 2, 'IS', ''),
(17, 'Limba Engleza 2', 1, 2, 'IS', ''),
(18, 'Limba Franceza 2', 1, 2, 'IS', ''),
(19, 'Limba Germana 2', 1, 2, 'IS', '');

-- --------------------------------------------------------

--
-- Table structure for table `sali`
--

CREATE TABLE `sali` (
  `Sala` varchar(30) NOT NULL,
  `Data` date NOT NULL,
  `Ora` int(10) NOT NULL,
  `Ora_sfarsit` int(11) NOT NULL,
  `Standard` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sali`
--

INSERT INTO `sali` (`Sala`, `Data`, `Ora`, `Ora_sfarsit`, `Standard`) VALUES
('D1', '2019-06-20', 8, 11, 1),
('D1', '2019-06-24', 8, 10, 1),
('ASPC', '2019-06-21', 15, 18, 1),
('A109', '2019-07-02', 12, 15, 1),
('D1', '2019-06-17', 11, 15, 1),
('D1', '2019-06-29', 14, 18, 1),
('D1', '2019-06-29', 15, 18, 1),
('D1', '2019-06-28', 14, 18, 1),
('D1', '2019-07-05', 8, 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `utilizatori`
--

CREATE TABLE `utilizatori` (
  `id` int(20) NOT NULL,
  `nume` varchar(100) NOT NULL,
  `parola` varchar(100) NOT NULL,
  `an` int(5) NOT NULL,
  `sectie` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilizatori`
--

INSERT INTO `utilizatori` (`id`, `nume`, `parola`, `an`, `sectie`) VALUES
(1, 'user', '8287458823facb8ff918dbfabcd22ccb', 1, 'IS');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
