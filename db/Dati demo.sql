-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Gen 05, 2022 alle 18:21
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
-- Dump dei dati per la tabella `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `nomeCategoria`) VALUES
(1, 'Accessori'),
(2, 'Pantaloni'),
(3, 'Felpe'),
(4, 'T-shirt'),
(5, 'Strumenti'),
(6, 'Calzature'),
(7, 'Racchette');

--
-- Dump dei dati per la tabella `rivenditore`
--

INSERT INTO `rivenditore` (`idRivenditore`, `nome`, `cognome`, `email`, `password`, `piva`, `citta`, `indirizzo`, `civico`, `cap`) VALUES
(1, 'Mario', 'Bianchi', 'mario.bianchi@gmail.com', 'webproject', '12345678901', 'Cesena', "Via dell\'università", 50, 47521);

--
-- Dump dei dati per la tabella `articolo`
--

INSERT INTO `articolo` (`idArticolo`, `nomeArticolo`, `descrizione`, `taglia`, `prezzo`, `imgArticolo`, `qtaMagazzino`, `categoria`, `rivenditore`) VALUES
(1, 'Scaldacollo', 'Protegge dalle intemperie', 'unisex', 15.5, 'paracollo.png', 30, 1, 1),
(2, 'Berretta uomo', 'Tieni al caldo i pensieri', 'unisex', 25, 'berrettaUomo.png', 20, 1, 1),
(3, 'Berretta donna', 'Tieni al caldo i pensieri', 'unisex', 25, 'berrettaDonna.png', 3, 1, 1),
(4, 'Pantaloni uomo', 'descrizione pantaloni uomo', 'M', 25, 'pantaloniUomo.jpg', 4, 2, 1),
(5, 'Pantaloni donna', 'descrizione pantaloni donna', 'S', 2, 'pantaloniDonna.jpg', 0, 2, 1),
(6, 'Felpa montagna uomo NH100 Hybrid blu', "Questa felpa con cappuccio calda e confortevole è il prodotto ideale in qualunque occasione. Tasca ventrale.\r\n\r\nI nostri ideatori appassionati di montagna e trekking hanno sviluppato questa felpa antivento per le tue escursioni nella natura.\r\n\r\nLa nostra motivazione?Offrirti il massimo del comfort.Puoi anche usare questa felpa sotto una giacca in caso di pioggia.Ha una protezione anti vento sul busto e un pile morbido smerigliato all\'interno", 'M', 24.99, 'felpa-montagna-uomo-nh100-hybrid-blu.jpg', 30, 3, 1),
(7, 'Maglietta uomo', 'Abbiamo ideato questa maglia per i tuoi allenamenti, fino a due volte alla settimana. Maglia resistente e leggera, per un comfort ottimale.', 'xl', 9.99, 'maglia-rugby-uomo-nera.jpg', 50, 4, 1),
(8, 'Calze PLANET', "Realizzato con filo di bottiglia di plastica riciclata, prodotto in modo sostenibile. Gambo semi-compressivo che stabilizza la caviglia e protegge il tendine d'Achille.", 'unisex', 9.99, 'calze-trekking-planet.jpg', 4, 6,1),
(9, 'Racchette blu cross', "Ideati per l'escursionista intensivo che cerca la solidità e la leggerezza di un bastoncino con un'impugnatura più lunga per ciaspolate e gite in montagna.Bastoncino da trekking per chi cerca un bastoncino leggero e resistente, con un grip più lungo da utilizzare con le ciaspole o su traversi.", 'unisex', 99.99, 'racchette blu.jpg', 0, 7, 1),
(10, 'Bussola moschettone orienteering COMPACT 50 arancione', "La bussola più semplice e più essenziale: ha un unico obiettivo, indicare il nord. Prodotto pratico e leggero, si può agganciare dappertutto!Questa piccola bussola a bagno d'olio è pratica e compatta! Leggera e facile da trasportare grazie al moschettone, si può agganciare dappertutto!", 'unisex', 4.99, 'moschettone-orienteering.jpg', 3, 5,1);


--
-- Dump dei dati per la tabella `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nome`, `cognome`, `email`, `password`, `paese`, `citta`, `indirizzo`, `civico`, `cap`) VALUES
(1, 'Giorgio', 'Verdi', 'giorgio.verdi@gmail.com', 'webproject', 'Italia', 'Cesena', 'Via dell\'università', 50, 47521);

--
-- Dump dei dati per la tabella `ordine`
--

INSERT INTO `ordine` (`idOrdine`, `idCliente`, `stato`, `visualizzato`) VALUES
(1, 1, 0, b'0'),
(2, 1, 0, b'0');

--
-- Dump dei dati per la tabella `rigaordine`
--

INSERT INTO `rigaordine` (`qta`, `idArticolo`, `idOrdine`) VALUES
(2, 2, 1),
(1, 3, 2),
(4, 4, 1);


COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
