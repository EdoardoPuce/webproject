-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Dic 19, 2021 alle 15:29
-- Versione del server: 10.4.21-MariaDB
-- Versione PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `progettowebdb`
--

--
-- Dump dei dati per la tabella `articolo`
--

INSERT INTO `articolo` (`idArticolo`, `nomeArticolo`, `descrizione`, `taglia`, `prezzo`, `imgArticolo`, `qtaMagazzino`, `categoria`, `rivenditore`) VALUES
(2, 'Scaldacollo', 'Protegge dalle intemperie', 'unisex', 15, '', 30, 1, 1),
(3, 'Berretta uomo', 'Tieni al caldo i pensieri', 'S', 25, '', 20, 1, 1);

--
-- Dump dei dati per la tabella `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `nomeCategoria`) VALUES
(1, 'Accessori');

--
-- Dump dei dati per la tabella `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nome`, `cognome`, `email`, `password`, `paese`, `citta`, `indirizzo`, `civico`, `cap`) VALUES
(1, 'Giorgio', 'Verdi', 'giorgio.verdi@gmail.com', 'webproject', 'Italia', 'Cesena', 'Via dell\'università', 50, 47521);

--
-- Dump dei dati per la tabella `ordine`
--

INSERT INTO `ordine` (`idOrdine`, `idCliente`) VALUES
(1, 1),
(2, 1);

--
-- Dump dei dati per la tabella `rigaordine`
--

INSERT INTO `rigaordine` (`qta`, `idArticolo`, `idOrdine`) VALUES
(2, 2, 1),
(1, 3, 2);

--
-- Dump dei dati per la tabella `rivenditore`
--

INSERT INTO `rivenditore` (`idRivenditore`, `nome`, `cognome`, `email`, `password`, `piva`, `citta`, `indirizzo`, `civico`, `cap`) VALUES
(1, 'Mario', 'Bianchi', 'mario.bianchi@gmail.com', 'webproject', '12345678901', 'Cesena', 'Via dell\'università', 50, 47521);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
