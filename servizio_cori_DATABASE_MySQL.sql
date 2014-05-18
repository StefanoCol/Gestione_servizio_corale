-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mag 18, 2014 alle 10:32
-- Versione del server: 5.5.36
-- PHP Version: 5.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `servizio_cori`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `chitarristi`
--

CREATE TABLE IF NOT EXISTS `chitarristi` (
  `idChitarrista` int(11) NOT NULL,
  PRIMARY KEY (`idChitarrista`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `chitarristi`
--

INSERT INTO `chitarristi` (`idChitarrista`) VALUES
(5),
(9);

-- --------------------------------------------------------

--
-- Struttura della tabella `cori`
--

CREATE TABLE IF NOT EXISTS `cori` (
  `idCoro` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `Password` varchar(16) NOT NULL,
  PRIMARY KEY (`idCoro`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dump dei dati per la tabella `cori`
--

INSERT INTO `cori` (`idCoro`, `nome`, `Password`) VALUES
(1, 'Le Voci', 'Le Voci'),
(2, 'voci del mare', 'vdm');

-- --------------------------------------------------------

--
-- Struttura della tabella `coristi`
--

CREATE TABLE IF NOT EXISTS `coristi` (
  `IdCorista` int(11) NOT NULL,
  `isSolista` tinyint(1) NOT NULL,
  `Voce` varchar(20) NOT NULL,
  PRIMARY KEY (`IdCorista`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `coristi`
--

INSERT INTO `coristi` (`IdCorista`, `isSolista`, `Voce`) VALUES
(1, 1, 'barittono'),
(14, 0, 'tenore'),
(15, 1, 'tenore');

-- --------------------------------------------------------

--
-- Struttura della tabella `date_servizi`
--

CREATE TABLE IF NOT EXISTS `date_servizi` (
  `idDataServizio` int(11) NOT NULL AUTO_INCREMENT,
  `Data` date NOT NULL,
  `isCoperta` tinyint(1) NOT NULL,
  `OraInizio` time NOT NULL,
  `TipoServizio` varchar(30) NOT NULL,
  `ToponimoIndirizzo` varchar(10) NOT NULL,
  `NomeIndirizzo` varchar(20) NOT NULL,
  `NumeroIndirizzo` varchar(6) NOT NULL,
  `Provincia` varchar(20) NOT NULL,
  PRIMARY KEY (`idDataServizio`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dump dei dati per la tabella `date_servizi`
--

INSERT INTO `date_servizi` (`idDataServizio`, `Data`, `isCoperta`, `OraInizio`, `TipoServizio`, `ToponimoIndirizzo`, `NomeIndirizzo`, `NumeroIndirizzo`, `Provincia`) VALUES
(1, '2014-05-15', 1, '11:00:00', 'Messa Ordinaria', 'viale', 'verdi', '27', 'Vicenza'),
(2, '2014-04-30', 1, '15:00:00', 'Matrimonio', 'Via', 'Parlamento', '18', 'vicenza'),
(3, '2014-03-16', 1, '11:00:00', 'Messa Ordinaria', 'Via', 'Girgi', '12', 'Vicenza'),
(4, '2014-08-14', 1, '11:00:00', 'matrimonio', 'via', 'verdi', '45', 'vicenza'),
(5, '2014-06-30', 0, '11:00:00', 'Messa Ordinaria', 'via', 'mantegna', '47', 'Vicenza'),
(6, '2014-07-12', 0, '11:00:00', 'Matrimonio', 'Via', 'Egidio', '14', 'Vicenza'),
(7, '2014-07-06', 1, '11:00:00', 'Messa Ordinaria', 'Via', 'Giorgi', '15', 'Vicenza'),
(8, '2014-06-15', 0, '11:00:00', 'Matrimonio', 'Piazza', 'Garibaldi', '12', 'Vicenza');

-- --------------------------------------------------------

--
-- Struttura della tabella `membri`
--

CREATE TABLE IF NOT EXISTS `membri` (
  `idMembro` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(30) NOT NULL,
  `Cognome` varchar(30) NOT NULL,
  `Password` varchar(16) NOT NULL,
  `ToponimoIndirizzo` varchar(10) DEFAULT NULL,
  `NomeIndirizzo` varchar(30) DEFAULT NULL,
  `NumeroIndirizzo` varchar(6) DEFAULT NULL,
  `Provincia` varchar(30) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `idCoro` int(11) NOT NULL,
  PRIMARY KEY (`idMembro`),
  KEY `idCoro` (`idCoro`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dump dei dati per la tabella `membri`
--

INSERT INTO `membri` (`idMembro`, `Nome`, `Cognome`, `Password`, `ToponimoIndirizzo`, `NomeIndirizzo`, `NumeroIndirizzo`, `Provincia`, `Telefono`, `idCoro`) VALUES
(1, 'Giorgio', 'Rossi', 'gr', 'Via', 'Roma', '18', 'vicenza', '33391', 2),
(5, 'Luigi', 'Mostardaa', 'lm', 'Via', 'Via', '15', 'vicenza', '4444444', 2),
(9, 'Luigi', 'Scarlett', 'ls', 'Via', 'Roma', '10', 'Vicenza', '335623', 2),
(14, 'Marco', 'Verdi', 'mb', 'Via', 'verdi', '15', 'Vicenza', '356', 2),
(15, 'Luigi', 'Mantegna', 'lm', 'Via', 'accademia', '18', 'Vicenza', '123', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `servizi_coperti_cori`
--

CREATE TABLE IF NOT EXISTS `servizi_coperti_cori` (
  `idDataServizio` int(11) NOT NULL,
  `idCoro` int(11) NOT NULL,
  PRIMARY KEY (`idDataServizio`,`idCoro`),
  KEY `idCoro` (`idCoro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `servizi_coperti_cori`
--

INSERT INTO `servizi_coperti_cori` (`idDataServizio`, `idCoro`) VALUES
(1, 2),
(3, 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `servizi_coperti_solisti`
--

CREATE TABLE IF NOT EXISTS `servizi_coperti_solisti` (
  `idData` int(11) NOT NULL,
  `idSolista` int(11) NOT NULL,
  PRIMARY KEY (`idData`,`idSolista`),
  KEY `servizi_coperti_solisti_ibfk_2` (`idSolista`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `servizi_coperti_solisti`
--

INSERT INTO `servizi_coperti_solisti` (`idData`, `idSolista`) VALUES
(1, 1),
(4, 1);

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `chitarristi`
--
ALTER TABLE `chitarristi`
  ADD CONSTRAINT `chitarristi_ibfk_1` FOREIGN KEY (`idChitarrista`) REFERENCES `membri` (`idMembro`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `coristi`
--
ALTER TABLE `coristi`
  ADD CONSTRAINT `coristi_ibfk_1` FOREIGN KEY (`IdCorista`) REFERENCES `membri` (`idMembro`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `membri`
--
ALTER TABLE `membri`
  ADD CONSTRAINT `membri_ibfk_1` FOREIGN KEY (`idCoro`) REFERENCES `cori` (`idCoro`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `servizi_coperti_cori`
--
ALTER TABLE `servizi_coperti_cori`
  ADD CONSTRAINT `servizi_coperti_cori_ibfk_1` FOREIGN KEY (`idDataServizio`) REFERENCES `date_servizi` (`idDataServizio`),
  ADD CONSTRAINT `servizi_coperti_cori_ibfk_2` FOREIGN KEY (`idCoro`) REFERENCES `cori` (`idCoro`);

--
-- Limiti per la tabella `servizi_coperti_solisti`
--
ALTER TABLE `servizi_coperti_solisti`
  ADD CONSTRAINT `servizi_coperti_solisti_ibfk_1` FOREIGN KEY (`idData`) REFERENCES `date_servizi` (`idDataServizio`),
  ADD CONSTRAINT `servizi_coperti_solisti_ibfk_2` FOREIGN KEY (`idSolista`) REFERENCES `membri` (`idMembro`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
