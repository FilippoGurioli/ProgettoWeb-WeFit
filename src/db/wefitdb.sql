-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Gen 28, 2023 alle 14:37
-- Versione del server: 10.4.27-MariaDB
-- Versione PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wefitdb`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `comments`
--

CREATE TABLE `comments` (
  `Id` int(11) NOT NULL,
  `Post` int(11) NOT NULL,
  `Text` text NOT NULL,
  `Author` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `comments`
--

INSERT INTO `comments` (`Id`, `Post`, `Text`, `Author`) VALUES
(1, 1, 'Ciao!', 'Giulio33'),
(2, 1, 'aaaaaa', 'Giulio33'),
(3, 3, 'no:(', 'silvia');

-- --------------------------------------------------------

--
-- Struttura della tabella `followed`
--

CREATE TABLE `followed` (
  `User1` varchar(20) NOT NULL,
  `User2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `followed`
--

INSERT INTO `followed` (`User1`, `User2`) VALUES
('Maria', 'Giulio33'),
('Maria', 'silvia');

-- --------------------------------------------------------

--
-- Struttura della tabella `followers`
--

CREATE TABLE `followers` (
  `User1` varchar(20) NOT NULL,
  `User2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `followers`
--

INSERT INTO `followers` (`User1`, `User2`) VALUES
('Giulio33', 'Maria'),
('silvia', 'Maria');

-- --------------------------------------------------------

--
-- Struttura della tabella `images`
--

CREATE TABLE `images` (
  `Post` int(11) NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `images`
--

INSERT INTO `images` (`Post`, `Image`) VALUES
(1, 'aaaa'),
(1, 'bb'),
(1, 'ccc'),
(2, 'ggg'),
(4, 'fff');

-- --------------------------------------------------------

--
-- Struttura della tabella `post`
--

CREATE TABLE `post` (
  `Id` int(11) NOT NULL,
  `User` varchar(20) NOT NULL,
  `Comment` text NOT NULL,
  `Training` text NOT NULL,
  `Weight` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `post`
--

INSERT INTO `post` (`Id`, `User`, `Comment`, `Training`, `Weight`) VALUES
(1, 'Maria', 'Lorem ipsum.', 'Training...', 69),
(2, 'Maria', 'Spit you love on me.', 'Am Training, stop asking', 0),
(3, 'Maria', 'Oh mamamama M A R I A !', '', 97.8),
(4, 'Giulio33', 'Il giulio.', '', 110),
(5, 'Sonia', 'Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa. Lorem Ipsum è considerato il testo segnaposto standard sin dal sedicesimo secolo, quando un anonimo tipografo prese una cassetta di caratteri e li assemblò per preparare un testo campione. ', 'È universalmente riconosciuto che un lettore che osserva il layout di una pagina viene distratto dal contenuto testuale se questo è leggibile. ', 0),
(6, 'Giulio33', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.', 98),
(7, 'silvia', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.', 70);

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `Username` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Birthday` date NOT NULL,
  `Height` float NOT NULL,
  `Weight` float NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `WeightTarget` float DEFAULT NULL,
  `Time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`Username`, `Email`, `Password`, `Birthday`, `Height`, `Weight`, `Photo`, `WeightTarget`, `Time`) VALUES
('Giulio33', 'giugiu@gmail.com', 'giu33', '1997-10-04', 180, 70, 'profile_pictures/WeFitPic.png', NULL, '00:00:00'),
('Maria', 'MaryAzzurri@gmail.com', 'Mary98', '1998-01-12', 165, 55, './upload/profile_pictures/photo1.jpg', NULL, '00:00:00'),
('silvia', 'brunella.battistini@virgilio.it', '123', '0000-00-00', 1, 0.1, 'profile_pictures/WeFitPic.png', NULL, '00:00:00'),
('Sonia', 'asd@g.it', 'sonia', '0000-00-00', 170, 62, './upload/profile_pictures/WeFitPic.png', NULL, NULL);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Post-Comments` (`Post`),
  ADD KEY `Comment-Authors` (`Author`);

--
-- Indici per le tabelle `followed`
--
ALTER TABLE `followed`
  ADD PRIMARY KEY (`User1`,`User2`),
  ADD KEY `friendship3` (`User1`),
  ADD KEY `friendship4` (`User2`);

--
-- Indici per le tabelle `followers`
--
ALTER TABLE `followers`
  ADD PRIMARY KEY (`User1`,`User2`),
  ADD KEY `friendship` (`User1`),
  ADD KEY `friendship2` (`User2`);

--
-- Indici per le tabelle `images`
--
ALTER TABLE `images`
  ADD KEY `Post-Images` (`Post`);

--
-- Indici per le tabelle `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Post-Users` (`User`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `comments`
--
ALTER TABLE `comments`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `post`
--
ALTER TABLE `post`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `Comment-Authors` FOREIGN KEY (`Author`) REFERENCES `users` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Post-Comments` FOREIGN KEY (`Post`) REFERENCES `post` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `followed`
--
ALTER TABLE `followed`
  ADD CONSTRAINT `friendship3` FOREIGN KEY (`User1`) REFERENCES `users` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `friendship4` FOREIGN KEY (`User2`) REFERENCES `users` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `followers`
--
ALTER TABLE `followers`
  ADD CONSTRAINT `friendship` FOREIGN KEY (`User1`) REFERENCES `users` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `friendship2` FOREIGN KEY (`User2`) REFERENCES `users` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `Post-Images` FOREIGN KEY (`Post`) REFERENCES `post` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `Post-Users` FOREIGN KEY (`User`) REFERENCES `users` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
