
CREATE TABLE IF NOT EXISTS `uzytkownicy` (
`id` int(11) NOT NULL,
  `user` text COLLATE utf8_polish_ci NOT NULL,
  `pass` text COLLATE utf8_polish_ci NOT NULL,
  `email` text COLLATE utf8_polish_ci NOT NULL,
  `kabona` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `user`, `pass`, `email`, `kabona`) VALUES
(1, 'adam', 'qwerty', 'adam@gmail.com', 213),
(2, 'marek', 'asdfg', 'marek@gmail.com', 324),
(3, 'anna', 'zxcvb', 'anna@gmail.com', 4536),
(4, 'andrzej', 'asdfg', 'andrzej@gmail.com', 5465),
(5, 'justyna', 'yuiop', 'justyna@gmail.com', 245),
(6, 'kasia', 'hjkkl', 'kasia@gmail.com', 267),
(7, 'beata', 'fgthj', 'beata@gmail.com', 565),
(8, 'jakub', 'ertyu', 'jakub@gmail.com', 2467),
(9, 'janusz', 'cvbnm', 'janusz@gmail.com', 65),
(10, 'roman', 'dfghj', 'roman@gmail.com', 97);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
