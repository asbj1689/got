-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1
-- Genereringstid: 07. 11 2022 kl. 09:14:16
-- Serverversion: 10.4.22-MariaDB
-- PHP-version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game_of_thrones`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `actors`
--

CREATE TABLE `actors` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `full_description` text NOT NULL,
  `resume` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `character_name` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `cimg` text NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Data dump for tabellen `actors`
--

INSERT INTO `actors` (`id`, `name`, `full_description`, `resume`, `img`, `character_name`, `created`, `cimg`, `number`) VALUES
(1, 'Emilia Clarkes', '<p>Emilia Clarke (født 1. maj 1987) er en engelsk skuespillerinde. Hun er bedst kendt for rollen som Daenerys Targaryen i HBO fantasy-serie Game of Thrones.\r\n                            </p>\r\n                            <h3>Biografi</h3>\r\n                            <p>Født i London, England og voksede op i Berkshire. Hendes far er lydtekniker og hendes mor er en forretningskvinde. Hun har en bror der læser politik. Hun begyndte at spille skuespil da hun var tre efter hun så Show Boat, som hendes far arbejdede på. Hun uddannede sig på St Edward\'s School, Oxford (2000-2005), hvorefter hun læste på Drama Centre London, hvor hun blev uddannet i 2009.</p>\r\n                            <h3>Karriere</h3>\r\n                            <p>Clarkes første tv-rolle var som gæstestjerne i Doctors i 2009, som hun fik på sit sidste år. Hendes næste rolle var i 2010, i en tv-film for kanalen SyFy, der hed Triassic Attack hvor hun spillede en karakter der hed Savannah. Hendes store gennembrud var da hun blev castet som Daenerys Targaryen i HBO Game of Thrones, som er baseret på George R. R. Martins bogserie A Song of Ice and Fire. Clarke var castet som erstatning for den britiske skuespillerinde Tamzin Merchant, som blev castet til prøveafsnittet, men senere droppede ud af ukendte årsager. Serien kørte første gang i april 2011 med stor succes og blev hurtig fornyet med endnu en sæson.</p>\r\n                            <p>Kilde: <a href=\"http://da.wikipedia.org/wiki/Emilia_Clarke\" target=\"_blank\">Wikipedia</a></p>', 'Vil Daenerys Targaryen kunne samle en hær, der er stor nok og vil hun kunne styre sine drager?', 'emilia-clarke.jpg', 'DAENERYS TARGARYEN', '2022-11-02 14:00:14', 'actor4.jpg', 4),
(2, 'Lenas Headey', '<p>Lena Headey (født 3. oktober 1973) er en engelsk skuespillerinde, som nok er mest kendt for at spille rollen som Sarah Connor i TV-serien Terminator: The Sarah Connor Chronicles hun er også kendt for at spille Cersei Lannister i Game of Thrones. Derudover har hun også være med i film som: The Remains of the Day, Possession, Imagine Me & You, Gossip, The Brothers Grimm, The Broken og 300.\r\n\r\nHeadey startede sin karriere som 17-årig, da en agent tog et foto af hende til et one-off show, og inviterede hende til audition. Det førte til en rolle sammen med Jeremy Irons og Ethan Hawke i dramafilmen Waterland fra 1992</p>\r\n                            <h3>Baggrund</h3>\r\n                            <p>Headey er født i Bermuda, hvor hendes far som var politibetjent, var udstationeret som rådgiver. Familien kom tilbage til Huddersfield, West Yorkshire, da hun var otte år gammel. Hun fik sin første prøve som skuespiller som elev på Shelley College og fik sin første store rolle som 17-årig, da hun blev opdaget i et skoleskuespil i the Royal National Theatre, og fik en rolle som modspiller til Grant Warnock i filmen Waterland fra 1992. [3]\r\n\r\nHeadey har lidt af klinisk depression siden en alder af 15, og hun sagde i et interview: \"Jeg blev diagnosticeret, da jeg var 15, og det kommer og går. Jeg kan lide af det en gang eller to gange om året, men jeg erkender nu det, og beskæftige sig med det. Jeg bruger ikke medicin, fordi jeg er så bekymret for at blive afhængig af det, men jeg kan forstår folk, der bruger det, fordi du går gennem de mest forfærdelige følelser af isolation</p>\r\n                           \r\n                           <p>Kilde: <a href=\"http://da.wikipedia.org/wiki/Lena_Headey\" target=\"_blank\">Wikipedia</a></p>', '...', 'lena-headey.jpg', 'CERSEI LANNISTER', '2022-11-02 14:04:09', '', 0),
(5, 'Maisie Williams', '<p>Maisie Williams (født 15 April 1997) er en engelsk skuespiller og danser. Hun er bedst kendt for sin rolle som Arya Stark i HBO tv-serien Game of Thrones, der gav hende Portal Awards 2012 for \"bedste kvindelige birolle\", \"bedste unge skuespiller\" og BBC Radio 1 \"Teen Award\" for bedste britiske skuespiller i 2013 . <br>                             Hun har også modtaget nomineringer til Scream Award for \"bedste ensemble\" (2011), og \"Young Artist Award for Best Performance in a TV Series – Supporting Young Actress\" for sin præstation.</p>                             <h3>Baggrund</h3>                             <p>Williams blev født i Bristol, England. Hun er den yngste af fire børn født af Hilary Williams (nu Frances), en tidligere universitetsuddannelses administrator. Hun voksede op i Somerset. Williams gik på Clutton Primary School og Norton Hill School i Midsomer Norton, før hun flyttede til Bath Dance College for at studere \"Performing Arts\".</p>                            <p>Kilde: <a href=\"http://en.wikipedia.org/wiki/Maisie_Williams\" target=\"_blank\">Wikipedia</a></p>', 'Vil drenge-pigen Arya Stark vende tilbage og hævne mordet på sin far, mor og bror med sit sværd kaldet \"Nålen\"?', 'maisie-williams.jpg', 'Arya Stark', '2022-11-03 11:00:37', 'actor5.jpg', 1),
(6, 'Kit Harington', '<p>Christopher Catesby \"Kit\" Harington (født 26 December 1986) er en engelsk skuespiller, der blev berømt i rollen som Jon Snow, en af hovedpersonerne i serien Game of Thrones. Han spillede desuden rollen som Albert Narracott i den oprindelige West End produktion of War Horse. Harington spillede også hovedrollen som \"Milo\" i filmen Pompeji (2014) og \"Eret\" i \"Sådan træner du din drage 2\".</p>                                <h3>Baggrund</h3>                               <p>Harington blev født i London og boede der indtil han var elleve. I en alder af elleve, flyttede han til Worcester, hvor han blev, indtil han var atten, hvor han flyttede tilbage til London.  Han er søn af David Richard Harington og Deborah Jane (født Catesby), som var dramatiker og underviste i kreativ skrivning på Birmingham University. Han blev opkaldt efter Christopher Marlowe.  Harington gik på Southfield Primary School fra 1992 til 1998. Han fortsatte på Chantry High School fra 1998 til 2003. Han deltog Worcester sjette Form College, hvor han studerede Drama og Teatervidenskab mellem 2003 og 2005. Han er uddannet fra \"Central School of Speech and Drama\" i 2008.</p>                             <p>Kilde: <a href=\"http://en.wikipedia.org/wiki/Kit_Harington\" target=\"_blank\">Wikipedia</a></p>', '...', 'john-snow.jpg', 'Jon Snow', '2022-11-03 11:05:02', '', 0),
(7, 'Nikolaj Coster Waldau', '<p>Nikolaj Coster-Waldau (eller Nikolaj Coster Waldau) (født 27. juli 1970 i Rudkøbing) er en dansk skuespiller.</p>                                                          <h3>Baggrund</h3>                             <p>Nikolaj Coster Waldau er vokset op i Tybjerg på Sydsjælland, et sogn der huser færre end tusind indbyggere. Han har to ældre søskende. Hans forældre nåede at blive skilt og gift igen, mens han var barn. De blev skilt igen senere, da han var flyttet hjemmefra. Hans mor arbejdede som overbibliotekar på Glumsø Hovedbibliotek og hans far arbejdede delvist på Grønland og var derfor en del væk hjemmefra. Faderen var desuden alkoholiker og skyld i meget af det kaos, som Coster Waldau følte, der var i hans barndomshjem.                              Gennem hele sin barndom var Coster Waldau en dagdrømmer. Han kunne bruge timevis på at søge ind i sin egen verden og følte sig altid lidt udenfor, på trods af at han dog havde venner. Han led af ekstremt generthed, noget han selv mener skuespillet har hjulpet ham til at leve med at overkomme. Selvom ingen rigtigt troede på hans drømme, havde han selv en indre tro på at han kunne blive skuespiller, så efter sin studentereksamen fra Næstved Gymnasium flyttede han til København og begyndte at tage dramaundervisning.</p>                                                         <h3>Karriere</h3>                             <p>Coster Waldau blev uddannet fra Statens Teaterskole i 1993. Han debuterede på Betty Nansen Teatret i stykket Hamlet, men hans rigtige gennembrud kom med filmen Nattevagten fra 1994. Noget tid efter succesen med Nattevagten, rejste Coster Waldau til England for en periode. Grunden til han blev skuespiller, var netop fordi han ville rejse rundt og ud i verden. De amerikanske film lokkede. Han mødte dog ikke mange danskere, der delte hans høje ambitioner. Tværtimod.                              Det lykkedes ham dog at komme med i en række engelsk-sprogede film, deriblandt krigsfilmen Black Hawk Down fra 2001. For at kunne udfylde rollen som soldat i filmen, måtte Coster Waldau først igennem et hårdt træningsprogram i det amerikanske Fort Bragg i North Carolina. Det var dog først med hovedrollen som John Amsterdam i Fox\'s politiserie New Amsterdam i 2008, at han for alvor fik et gennembrud på amerikansk TV. Serien blev desværre ikke den helt store succes, man havde forventet. Det blev dog heller ikke et decideret flop og mange fik øjenene op for den danske hovedperson. Han fik ros for at spille overbevisende og tale amerikansk uden dansk accent.                              Han har desuden været hovedpersonen i en af SAS\' reklamefilm.</p>                              <p>                             Selv forstår han ikke, hvorfor det skulle være uforståeligt at stile efter udlandet som dansk skuespiller, fordi man taler et andet sprog. Det glæder ham at se, at andre danske skuespillere også går den vej, såsom Iben Hjejle og Mads Mikkelsen.                             </p>                             <p>                             Siden 2011 har han haft en af hovedrollerne i tv-serien Game of Thrones, hvor han spiller Jaime Lannister. Han medvirker desuden i science fiction-filmen Oblivion. han medvirkede også 2013 gyseren \"Mama\"</p>                             <p>Kilde: <a href=\"http://da.wikipedia.org/wiki/Nikolaj_Coster-Waldau\" target=\"_blank\">Wikipedia</a></p>', 'Vil Jaime Lannister kunne lære at fægte med venstre hånd, så han igen kan blive en magtfaktor?', 'nikolaj-coster-waldau.jpg', 'Jamie Lannister', '2022-11-03 11:08:37', 'actor3.jpg', 3),
(8, 'Peter Dinklage', ' <p>Peter Hayden Dinklage (født den 11. juni 1969) er en amerikansk skuespiller. Han er dværg og siden hans gennembrud i The Station Agent (2003) har han optrådt i film som Elf (2003), Find Me Guilty (2006), Underdog (2007), Death at a Funeral (2007) (og genindspilningen af denne i 2010), The Chronicles of Narnia: Prince Caspian (2008) og Ice Age: Continental Drift (2012). <br>                             Siden 2011 har han medvirket som Tyrion Lannister i HBO-serien Game of Thrones, der gav ham en Emmy og Golden Globe Award for bedste mandlige birolle.</p>                             <h3>Baggrund</h3>                             <p>Dinklage blev født i Morristown, New Jersey, som søn af Diane, musiklærer i grundskolen, og John Carl Dinklage, pensioneret forsikringssælger. Dinklage blev født med achondroplasia, en almindelig årsag til dværgvækst. Han voksede op i Mendham Township, New Jersey, og er af tysk og irsk afstamning. [6] Hans tyske forfædre var i familie med den westphalske adelsslægt \"von Dincklage \". Dinklage er uddannet fra Delbarton School i 1987, og Bennington College i 1991.</p>                                                        <p>Kilde: <a href=\"http://da.wikipedia.org/wiki/Peter_Dinklage\" target=\"_blank\">Wikipedia</a></p>', 'Vil Tyrion Lannisters fjender bittert fortryde, at de undervurderede den harmløse dværg?', 'peter-dinklage.jpg', 'Tyrion Lannister', '2022-11-03 11:12:57', 'actor2.jpg', 2);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `frontarticles`
--

CREATE TABLE `frontarticles` (
  `id` int(11) NOT NULL,
  `person` varchar(75) NOT NULL,
  `img` text NOT NULL,
  `bio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Data dump for tabellen `frontarticles`
--

INSERT INTO `frontarticles` (`id`, `person`, `img`, `bio`) VALUES
(1, 'ARYA STARK', 'actor5.jpg', 'Vil drenge-pigen Arya Stark vende tilbage og hævne mordet på sin far, mor og bror med sit sværd kaldet \"Nålen\"?'),
(2, 'TYRION LANNISTER', 'actor2.jpg', 'Vil Tyrion Lannisters fjender bittert fortryde, at de undervurderede den harmløse dværg?'),
(3, 'JAMIE LANNISTER', 'actor3.jpg', 'Vil Jaime Lannister kunne lære at fægte med venstre hånd, så han igen kan blive en magtfaktor?\r\n'),
(4, 'DAENERYS TARGARYEN', 'actor4.jpg', 'Vil Daenerys Targaryen kunne samle en hær, der er stor nok og vil hun kunne styre sine drager?');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Data dump for tabellen `logo`
--

INSERT INTO `logo` (`id`, `logo`) VALUES
(1, 'logo-got.jpg');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Data dump for tabellen `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `created`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin@gmail.com', '2022-11-02 10:32:39');

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `frontarticles`
--
ALTER TABLE `frontarticles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `actors`
--
ALTER TABLE `actors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tilføj AUTO_INCREMENT i tabel `frontarticles`
--
ALTER TABLE `frontarticles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tilføj AUTO_INCREMENT i tabel `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tilføj AUTO_INCREMENT i tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
