-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Gen 30, 2023 alle 14:23
-- Versione del server: 10.4.20-MariaDB
-- Versione PHP: 8.0.9

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `comments`
--

INSERT INTO `comments` (`Id`, `Post`, `Text`, `Author`) VALUES
(1, 25, 'Ottimo allenamento!', 'Sonia45'),
(2, 25, 'Graziee <3', 'Maria'),
(3, 27, 'Bella foto!', 'Giulio33'),
(4, 26, 'Continua così!!', 'Giulio33');

-- --------------------------------------------------------

--
-- Struttura della tabella `followed`
--

CREATE TABLE `followed` (
  `User1` varchar(20) NOT NULL,
  `User2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `followed`
--

INSERT INTO `followed` (`User1`, `User2`) VALUES
('Giulio33', 'Maria'),
('Giulio33', 'Sonia45'),
('Maria', 'Giulio33'),
('Maria', 'Silviaaa'),
('Sonia45', 'Maria');

-- --------------------------------------------------------

--
-- Struttura della tabella `followers`
--

CREATE TABLE `followers` (
  `User1` varchar(20) NOT NULL,
  `User2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `followers`
--

INSERT INTO `followers` (`User1`, `User2`) VALUES
('Giulio33', 'Maria'),
('Maria', 'Giulio33'),
('Maria', 'Sonia45'),
('Silviaaa', 'Maria'),
('Sonia45', 'Giulio33');

-- --------------------------------------------------------

--
-- Struttura della tabella `images`
--

CREATE TABLE `images` (
  `Id` int(11) NOT NULL,
  `Post` int(11) NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `images`
--

INSERT INTO `images` (`Id`, `Post`, `Image`) VALUES
(1, 25, '0.jpg'),
(2, 27, '1.jpg'),
(3, 27, '2.jpg');

-- --------------------------------------------------------

--
-- Struttura della tabella `notifications`
--

CREATE TABLE `notifications` (
  `Id` int(11) NOT NULL,
  `User` varchar(20) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Author` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `notifications`
--

INSERT INTO `notifications` (`Id`, `User`, `Type`, `Author`) VALUES
(1, 'Giulio33', 'follow', 'Maria'),
(2, 'Silviaaa', 'follow', 'Maria'),
(3, 'Maria', 'follow', 'Sonia45'),
(4, 'Maria', 'comment', 'Sonia45'),
(5, 'Sonia45', 'post', 'Maria'),
(6, 'Maria', 'post', 'Giulio33'),
(7, 'Maria', 'follow', 'Giulio33'),
(8, 'Maria', 'comment', 'Giulio33'),
(9, 'Maria', 'comment', 'Giulio33'),
(10, 'Sonia45', 'follow', 'Giulio33');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `post`
--

INSERT INTO `post` (`Id`, `User`, `Comment`, `Training`, `Weight`) VALUES
(25, 'Maria', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Corsa,Durata:30min\n', 0),
(26, 'Maria', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '\n', 65),
(27, 'Maria', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '\n', 60),
(28, 'Giulio33', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.', 'Piegamenti,Reps:8,Series:5,Rest:3min\nAddominali,Reps:10,Series:4,Rest:2min\nCorsa,Durata:10min\n', 0);

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
  `Time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`Username`, `Email`, `Password`, `Birthday`, `Height`, `Weight`, `Photo`, `WeightTarget`, `Time`) VALUES
('Giulio33', 'giugiu@gmail.com', 'giu33', '1997-10-04', 180, 80, 'profile_pictures/WeFitPic.png', 70, 2),
('Maria', 'MaryAzzurri@gmail.com', 'Mary98', '1998-01-12', 165, 55, 'profile_pictures/photo1.jpg', NULL, 0),
('Silviaaa', 'silviaVerdi@virgilio.it', '123', '2001-10-19', 155, 50, 'profile_pictures/WeFitPic.png', NULL, 0),
('Sonia45', 'sonia.rossi@alice.it', 'sonia', '2005-01-06', 168, 65, 'profile_pictures/WeFitPic.png', NULL, NULL);

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
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Post-Images` (`Post`);

--
-- Indici per le tabelle `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `receiver` (`User`),
  ADD KEY `author` (`Author`);

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT per la tabella `images`
--
ALTER TABLE `images`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `notifications`
--
ALTER TABLE `notifications`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT per la tabella `post`
--
ALTER TABLE `post`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
-- Limiti per la tabella `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `author` FOREIGN KEY (`Author`) REFERENCES `users` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `receiver` FOREIGN KEY (`User`) REFERENCES `users` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `Post-Users` FOREIGN KEY (`User`) REFERENCES `users` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
