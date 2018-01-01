
CREATE TABLE IF NOT EXISTS users 
(
`id` int(11) NOT NULL,
  `user` text COLLATE utf8_polish_ci NOT NULL,
  `pass` text COLLATE utf8_polish_ci NOT NULL
) 
--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO users (id, user, pass) 
VALUES
(
(1, 'adam', 'qwerty'),
(2, 'marek', 'asdfg'),
(3, 'anna', 'zxcvb'),
(4, 'andrzej', 'asdfg'),
(5, 'justyna', 'yuiop'),
(6, 'kasia', 'hjkkl'),
(7, 'beata', 'fgthj'),
(8, 'jakub', 'ertyu'),
(9, 'janusz', 'cvbnm'),
(10, 'roman', 'dfghj')
)
--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `uzytkownicy`
--