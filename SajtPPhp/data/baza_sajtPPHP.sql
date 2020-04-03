-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 06, 2019 at 01:43 PM
-- Server version: 10.3.14-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id9920150_praktikum`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `naziv` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `slika` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `godina` int(50) NOT NULL,
  `istaknut` bit(1) NOT NULL,
  `opis` varchar(20000) COLLATE utf8_unicode_ci NOT NULL,
  `id_kategorija` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `naziv`, `slika`, `alt`, `godina`, `istaknut`, `opis`, `id_kategorija`) VALUES
(1, 'Simply Sound', 'assets/images/pic11.jpg', 'Slika 1', 1988, b'1', 'Parklife is the third studio album by the English rock band Blur, released in April 1994 on Food Records. After disappointing sales for their previous album Modern Life Is Rubbish (1993), Parklife returned Blur to prominence in the UK, helped by its four hit singles: \"Girls & Boys\", \"End of a Century\", \"Parklife\" and \"To the End\".Certified four times platinum in the United Kingdom, in the year following its release the album came to define the emerging Britpop scene, along with the album Definitely Maybe by future rivals Oasis. Britpop in turn would form the backbone of the broader Cool Britannia movement. Parklife therefore has attained a cultural significance above and beyond its considerable sales and critical acclaim, cementing its status as a landmark in British rock music. It has sold over five million copies worldwide.', 1),
(2, 'Emotions Notes', 'assets/images/pic6.jpg', 'Slika 2', 1998, b'1', 'Since Let It Be was The Beatles last album, it made an appropriate statement about leaving problems behind and moving on in life. The album was supposed to convey an entirely different message. It was going to be called \"Get Back,\" and they were going to record it in front of an audience on live TV, with another TV special showing them practicing the songs in the studio. It was going to be The Beatles getting back to their roots and playing unadorned live music instead of struggling in the studio like they did for The White Album.', 2),
(3, 'Wind-wall Music', 'assets/images/pic7.jpg', 'Slika 3', 2014, b'1', 'The Wall is the eleventh studio album by English rock band Pink Floyd, released in 1979 through Harvest and Columbia Records. Conceived during the In The Flesh tour, recording spanned nearly a year, from December 1978 to November 1979, and took place in France, England, New York, and Los Angeles. It was produced by Bob Erzin, who helped to refine the concept and bridge tensions during recording. Some of the outtakes from the recording sessions were used on the band\'s next album, The Final Cut (1983).', 3),
(4, 'Cold Air', 'assets/images/pic8.jpg', 'Slika 4', 1965, b'1', 'The Chronic is the debut studio album by American hip hop recording artist Dr. Dre. It was released on December 15, 1992, by his own record label Death Row Records and distributed by Interscope Records and Priority Records. Recording sessions for the album took place in June 1992 at Death Row Studios in Los Angeles and at Bernie Grundman Mastering in Hollywood. The album is named after a slang term for high-grade cannabis, and its cover is a homage to Zig-Zag rolling papers. It was Dr. Dre\'s first solo album after he had departed from hip hop group N.W.A and its label Ruthless Records over a financial dispute. On The Chronic, he included both subtle and direct insults at Ruthless and its owner, former N.W.A member Eazy-E. Although a solo album, it features many appearances by American rapper Snoop Doggy Dogg, who used the album as a launch pad for his own solo career.', 5),
(5, 'Personality', 'assets/images/pic10.jpg', 'Slika 5', 1963, b'1', 'Too Dark Park is the sixth studio album by the industrial music group Skinny Puppy. The album cover features the debut appearance of the band\'s \"SP\" logo. The cover art was created by Vancouver based artist Jim Cummins. The artwork for this album and its associated singles was inspired by cosmic horror stories such as the Cthulhu Mythos.  The album was recorded \"spontaneously\" at Mushroom Studios and mixed at Little Mountain Sound Studios in Vancouver, British Columbia. Though guitar is used throughout, the album takes a step back from the Ministry-inspired direction of the band\'s previous release, favoring instead a more chaotic, electronic sound.', 6),
(6, 'Cool Jazz', 'assets/images/pic11.jpg', 'Slika 6', 1994, b'0', 'Tunnel of Love is the eighth studio album by Bruce Springsteen, released on October 9, 1987. Although members of the E Street Band occasionally performed on the album, Springsteen recorded most of the parts himself, often with drum machines and synthesizers. While the album\'s liner notes list the E Street Band members under that name, Shore Fire Media, Springsteen\'s public relations firm, does not count it as an E Street Band album and 2002\'s The Rising was advertised as his first studio album with the E Street Band since Born in the USA. The album won Best Rock Vocal Performance, Solo at the 1988 Grammy Awards.', 7),
(7, 'Indie Music', 'assets/images/pic12.jpg', 'Slika 7', 1990, b'0', 'Born to Run is the third studio album by American singer-songwriter Bruce Springsteen. As his effort to break into the mainstream, the album was a commercial success, peaking at number three on the Billboard 200 and eventually selling six million copies in the United States. Two singles were released from the album: \"Born to Run\" and \"Tenth Avenue Freeze-Out\"; the first helped Springsteen to reach mainstream popularity. The tracks \"Thunder Road\", \"She\'s the One\", and \"Jungleland\" became staples of album-oriented rock radio and Springsteen concert high points.', 8),
(8, 'Texas Music', 'assets/images/pic13.jpg', 'Slika 8', 1982, b'0', 'Dark Light is the fifth studio album by Finnish gothic rock band HIM. Released on 26 September 2005, HIM began recording the album in March 2005 at the Paramour Estate is Los Angeles, California, with producer Tim Palmer, who had also mixed the band\'s previous album Love Metal. Dark Light also served as HIM\'s first worldwide release with Sire Records, with whom the band had signed with in September 2004. In Finland, however, the album was released under the band\'s own label Heartagram. Musically, Dark Light featured a more \"polished\" and \"accessible\" sound than previous albums, and was written as a cross between Black Sabbath and U2, also influenced by the work of composer Angelo Badalamenti.', 8),
(9, 'Hard Rock', 'assets/images/pic14.jpg', 'Slika 9', 1992, b'0', 'Disintegration is the eighth studio album by English rock band the Cure, released on 2 May 1989 by Fiction Records. The record marks a return to the introspective and gloomy gothic rock style the band had established in the early 1980s. As he neared the age of 30, vocalist and guitarist Robert Smith had felt an increased pressure to follow up on the group\'s pop successes with a more enduring work. This, coupled with a distaste for the group\'s newfound popularity, caused Smith to lapse back into the use of hallucinogenic drugs, the effects of which had a strong influence on the production of the album. The Cure recorded Disintegration at Hookend Recording Studios in Checkendon, Oxfordshire, with co-producer David M. Allen from late 1988 to early 1989. Following the completion of the mixing of the album, founding member Lol Tolhurst was fired from the band.', 2),
(10, 'Relax Music', 'assets/images/pic9.jpg', 'Slika 10', 2000, b'0', 'Imagine is the third studio album by Dutch DJ and record producer Armin van Buuren. It was released on 18 April 2008 by Armada Music. The album entered the Dutch album chart at number one. In the US, it debuted at number 4 on the Billboard Dance/Electronic Albums chart.  The first single \"Going Wrong\" debuted on van Buuren\'s A State of Trance radio show. The single sees the collaboration of Armin van Buuren with DJ Shah and Chris Jones. On iTunes, \"If You Should Go\" was offered as a bonus track along with the Inpetto vs. Duderstadt version which was only up for pre-order. \"In and Out of Love\", which features Sharon den Adel from the band Within Temptation, became the second single from Imagine.', 2),
(11, 'Getting Warmer', 'assets/images/pic1.jpg', 'Slika 11', 2004, b'0', 'After moving back to the United States from Cornwall, England in 1978 and settling in Woodstock, New York, twenty-three-year-old VanWarmer signed to local label Bearsville Records. A year later Warmer was released and produced by Del Newman. It was initially released on vinyl, 8-track, and cassette, and in 1995 it was released on compact disc. \"Just When I Needed You Most\" was written by VanWarmer when he was eighteen and still in England, and the song has been described as \"a ballad of heartbreak from a man\'s point of view.\" It reached No. 4 on Billboard in 1979.', 4),
(12, 'Loveable', 'assets/images/pic2.jpg', 'Slika 12', 2008, b'0', 'Parklife is the third studio album by the English rock band Blur, released in April 1994 on Food Records. After disappointing sales for their previous album Modern Life Is Rubbish (1993), Parklife returned Blur to prominence in the UK, helped by its four hit singles: \"Girls & Boys\", \"End of a Century\", \"Parklife\" and \"To the End\".  Certified four times platinum in the United Kingdom, in the year following its release the album came to define the emerging Britpop scene, along with the album Definitely Maybe by future rivals Oasis. Britpop in turn would form the backbone of the broader Cool Britannia movement. Parklife therefore has attained a cultural significance above and beyond its considerable sales and critical acclaim, cementing its status as a landmark in British rock music. It has sold over five million copies worldwide.', 4),
(13, 'My Gift is You', 'assets/images/pic3.jpg', 'Slika 13', 2003, b'0', 'Since Let It Be was The Beatles last album, it made an appropriate statement about leaving problems behind and moving on in life. The album was supposed to convey an entirely different message. It was going to be called \"Get Back,\" and they were going to record it in front of an audience on live TV, with another TV special showing them practicing the songs in the studio. It was going to be The Beatles getting back to their roots and playing unadorned live music instead of struggling in the studio like they did for The White Album.', 6),
(14, 'Warmer Winter', 'assets/images/pic4.jpg', 'Slika 14', 2005, b'0', 'Disintegration is the eighth studio album by English rock band the Cure, released on 2 May 1989 by Fiction Records. The record marks a return to the introspective and gloomy gothic rock style the band had established in the early 1980s. As he neared the age of 30, vocalist and guitarist Robert Smith had felt an increased pressure to follow up on the group\'s pop successes with a more enduring work. This, coupled with a distaste for the group\'s newfound popularity, caused Smith to lapse back into the use of hallucinogenic drugs, the effects of which had a strong influence on the production of the album. The Cure recorded Disintegration at Hookend Recording Studios in Checkendon, Oxfordshire, with co-producer David M. Allen from late 1988 to early 1989. Following the completion of the mixing of the album, founding member Lol Tolhurst was fired from the band.', 7),
(15, 'Dark Light', 'assets/images/pic5.jpg', 'Slika 15', 1995, b'0', 'After moving back to the United States from Cornwall, England in 1978 and settling in Woodstock, New York, twenty-three-year-old VanWarmer signed to local label Bearsville Records. A year later Warmer was released and produced by Del Newman. It was initially released on vinyl, 8-track, and cassette, and in 1995 it was released on compact disc. \"Just When I Needed You Most\" was written by VanWarmer when he was eighteen and still in England, and the song has been described as \"a ballad of heartbreak from a man\'s point of view.\" It reached No. 4 on Billboard in 1979.', 7),
(16, 'The Dark Side', 'assets/images/pic6.jpg', 'Slika 16', 1999, b'0', 'Tunnel of Love is the eighth studio album by Bruce Springsteen, released on October 9, 1987. Although members of the E Street Band occasionally performed on the album, Springsteen recorded most of the parts himself, often with drum machines and synthesizers. While the album\'s liner notes list the E Street Band members under that name, Shore Fire Media, Springsteen\'s public relations firm, does not count it as an E Street Band album and 2002\'s The Rising was advertised as his first studio album with the E Street Band since Born in the USA. The album won Best Rock Vocal Performance, Solo at the 1988 Grammy Awards.', 8),
(17, 'Back in Black', 'assets/images/pic7.jpg', 'Slika 17', 1963, b'0', 'Dark Light is the fifth studio album by Finnish gothic rock band HIM. Released on 26 September 2005, HIM began recording the album in March 2005 at the Paramour Estate is Los Angeles, California, with producer Tim Palmer, who had also mixed the band\'s previous album Love Metal. Dark Light also served as HIM\'s first worldwide release with Sire Records, with whom the band had signed with in September 2004. In Finland, however, the album was released under the band\'s own label Heartagram. Musically, Dark Light featured a more \"polished\" and \"accessible\" sound than previous albums, and was written as a cross between Black Sabbath and U2, also influenced by the work of composer Angelo Badalamenti.', 1),
(18, 'Born to Run', 'assets/images/pic8.jpg', 'Slika 18', 1994, b'0', 'After moving back to the United States from Cornwall, England in 1978 and settling in Woodstock, New York, twenty-three-year-old VanWarmer signed to local label Bearsville Records. A year later Warmer was released and produced by Del Newman. It was initially released on vinyl, 8-track, and cassette, and in 1995 it was released on compact disc. \"Just When I Needed You Most\" was written by VanWarmer when he was eighteen and still in England, and the song has been described as \"a ballad of heartbreak from a man\'s point of view.\" It reached No. 4 on Billboard in 1979.', 2),
(19, 'Tunnel of Love', 'assets/images/pic9.jpg', 'Slika 19', 1985, b'0', 'Too Dark Park is the sixth studio album by the industrial music group Skinny Puppy. The album cover features the debut appearance of the band\'s \"SP\" logo. The cover art was created by Vancouver based artist Jim Cummins. The artwork for this album and its associated singles was inspired by cosmic horror stories such as the Cthulhu Mythos.  The album was recorded \"spontaneously\" at Mushroom Studios and mixed at Little Mountain Sound Studios in Vancouver, British Columbia. Though guitar is used throughout, the album takes a step back from the Ministry-inspired direction of the band\'s previous release, favoring instead a more chaotic, electronic sound.', 3),
(20, 'Too Dark Park', 'assets/images/pic10.jpg', 'Slika 20', 1975, b'0', 'Dark Light is the fifth studio album by Finnish gothic rock band HIM. Released on 26 September 2005, HIM began recording the album in March 2005 at the Paramour Estate is Los Angeles, California, with producer Tim Palmer, who had also mixed the band\'s previous album Love Metal. Dark Light also served as HIM\'s first worldwide release with Sire Records, with whom the band had signed with in September 2004. In Finland, however, the album was released under the band\'s own label Heartagram. Musically, Dark Light featured a more \"polished\" and \"accessible\" sound than previous albums, and was written as a cross between Black Sabbath and U2, also influenced by the work of composer Angelo Badalamenti.', 5),
(21, 'Parklife', 'assets/images/pic14.jpg', 'Slika 21', 1983, b'0', 'Imagine is the third studio album by Dutch DJ and record producer Armin van Buuren. It was released on 18 April 2008 by Armada Music. The album entered the Dutch album chart at number one. In the US, it debuted at number 4 on the Billboard Dance/Electronic Albums chart.  The first single \"Going Wrong\" debuted on van Buuren\'s A State of Trance radio show. The single sees the collaboration of Armin van Buuren with DJ Shah and Chris Jones. On iTunes, \"If You Should Go\" was offered as a bonus track along with the Inpetto vs. Duderstadt version which was only up for pre-order. \"In and Out of Love\", which features Sharon den Adel from the band Within Temptation, became the second single from Imagine.', 5),
(22, 'The Chronic', 'assets/images/pic13.jpg', 'Slika 22', 2008, b'0', 'Born to Run is the third studio album by American singer-songwriter Bruce Springsteen. As his effort to break into the mainstream, the album was a commercial success, peaking at number three on the Billboard 200 and eventually selling six million copies in the United States. Two singles were released from the album: \"Born to Run\" and \"Tenth Avenue Freeze-Out\"; the first helped Springsteen to reach mainstream popularity. The tracks \"Thunder Road\", \"She\'s the One\", and \"Jungleland\" became staples of album-oriented rock radio and Springsteen concert high points.', 6),
(23, 'Bad', 'assets/images/pic12.jpg', 'Slika 23', 1987, b'0', 'Dark Light is the fifth studio album by Finnish gothic rock band HIM. Released on 26 September 2005, HIM began recording the album in March 2005 at the Paramour Estate is Los Angeles, California, with producer Tim Palmer, who had also mixed the band\'s previous album Love Metal. Dark Light also served as HIM\'s first worldwide release with Sire Records, with whom the band had signed with in September 2004. In Finland, however, the album was released under the band\'s own label Heartagram. Musically, Dark Light featured a more \"polished\" and \"accessible\" sound than previous albums, and was written as a cross between Black Sabbath and U2, also influenced by the work of composer Angelo Badalamenti.', 7),
(24, 'Let It Be', 'assets/images/pic11.jpg', 'Slika 24', 1994, b'0', 'After moving back to the United States from Cornwall, England in 1978 and settling in Woodstock, New York, twenty-three-year-old VanWarmer signed to local label Bearsville Records. A year later Warmer was released and produced by Del Newman. It was initially released on vinyl, 8-track, and cassette, and in 1995 it was released on compact disc. \"Just When I Needed You Most\" was written by VanWarmer when he was eighteen and still in England, and the song has been described as \"a ballad of heartbreak from a man\'s point of view.\" It reached No. 4 on Billboard in 1979.', 8),
(25, 'The Wall', 'assets/images/pic5.jpg', 'Slika 25', 1991, b'0', 'Too Dark Park is the sixth studio album by the industrial music group Skinny Puppy. The album cover features the debut appearance of the band\'s \"SP\" logo. The cover art was created by Vancouver based artist Jim Cummins. The artwork for this album and its associated singles was inspired by cosmic horror stories such as the Cthulhu Mythos.  The album was recorded \"spontaneously\" at Mushroom Studios and mixed at Little Mountain Sound Studios in Vancouver, British Columbia. Though guitar is used throughout, the album takes a step back from the Ministry-inspired direction of the band\'s previous release, favoring instead a more chaotic, electronic sound.', 1),
(26, 'Disintegration', 'assets/images/pic4.jpg', 'Slika 26', 2006, b'0', 'Parklife is the third studio album by the English rock band Blur, released in April 1994 on Food Records. After disappointing sales for their previous album Modern Life Is Rubbish (1993), Parklife returned Blur to prominence in the UK, helped by its four hit singles: \"Girls & Boys\", \"End of a Century\", \"Parklife\" and \"To the End\".  Certified four times platinum in the United Kingdom, in the year following its release the album came to define the emerging Britpop scene, along with the album Definitely Maybe by future rivals Oasis. Britpop in turn would form the backbone of the broader Cool Britannia movement. Parklife therefore has attained a cultural significance above and beyond its considerable sales and critical acclaim, cementing its status as a landmark in British rock music. It has sold over five million copies worldwide.', 3),
(27, 'Californication', 'assets/images/pic3.jpg', 'Slika 27', 2017, b'0', 'The Wall is the eleventh studio album by English rock band Pink Floyd, released in 1979 through Harvest and Columbia Records. Conceived during the In The Flesh tour, recording spanned nearly a year, from December 1978 to November 1979, and took place in France, England, New York, and Los Angeles. It was produced by Bob Erzin, who helped to refine the concept and bridge tensions during recording. Some of the outtakes from the recording sessions were used on the band\'s next album, The Final Cut (1983).', 3),
(28, 'The Bends', 'assets/images/pic2.jpg', 'Slika 28', 1995, b'0', 'After moving back to the United States from Cornwall, England in 1978 and settling in Woodstock, New York, twenty-three-year-old VanWarmer signed to local label Bearsville Records. A year later Warmer was released and produced by Del Newman. It was initially released on vinyl, 8-track, and cassette, and in 1995 it was released on compact disc. \"Just When I Needed You Most\" was written by VanWarmer when he was eighteen and still in England, and the song has been described as \"a ballad of heartbreak from a man\'s point of view.\" It reached No. 4 on Billboard in 1979.', 4),
(29, 'Imagine', 'assets/images/pic1.jpg', 'Slika 29', 1980, b'0', 'Imagine is the third studio album by Dutch DJ and record producer Armin van Buuren. It was released on 18 April 2008 by Armada Music. The album entered the Dutch album chart at number one. In the US, it debuted at number 4 on the Billboard Dance/Electronic Albums chart.  The first single \"Going Wrong\" debuted on van Buuren\'s A State of Trance radio show. The single sees the collaboration of Armin van Buuren with DJ Shah and Chris Jones. On iTunes, \"If You Should Go\" was offered as a bonus track along with the Inpetto vs. Duderstadt version which was only up for pre-order. \"In and Out of Love\", which features Sharon den Adel from the band Within Temptation, became the second single from Imagine.', 5),
(30, 'Straight Outta', 'assets/images/pic8.jpg', 'Slika 30', 1992, b'0', 'Born to Run is the third studio album by American singer-songwriter Bruce Springsteen. As his effort to break into the mainstream, the album was a commercial success, peaking at number three on the Billboard 200 and eventually selling six million copies in the United States. Two singles were released from the album: \"Born to Run\" and \"Tenth Avenue Freeze-Out\"; the first helped Springsteen to reach mainstream popularity. The tracks \"Thunder Road\", \"She', 6);

-- --------------------------------------------------------

--
-- Table structure for table `anketa`
--

CREATE TABLE `anketa` (
  `id` int(11) NOT NULL,
  `pitanje` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `aktivna` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `anketa`
--

INSERT INTO `anketa` (`id`, `pitanje`, `aktivna`) VALUES
(1, 'How do You like my website?', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `autor`
--

CREATE TABLE `autor` (
  `id` int(11) NOT NULL,
  `slika` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `opis` varchar(2000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `autor`
--

INSERT INTO `autor` (`id`, `slika`, `opis`) VALUES
(1, 'assets/images/autor.jpg', 'My name is Damnjan Askovic. I am 19 years old and I live in Obrenovac. I\'m studying at Visoka ICT skola in Belgrade. I completed computer science at the Gymnasium in Obrenovac. I would like to become a software developer.');

-- --------------------------------------------------------

--
-- Table structure for table `informacija`
--

CREATE TABLE `informacija` (
  `id` int(11) NOT NULL,
  `naziv` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `putanja` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `informacija`
--

INSERT INTO `informacija` (`id`, `naziv`, `putanja`) VALUES
(1, 'Documentation', 'dokumentacija.pdf'),
(2, 'Sitemap', 'sitemap.xml'),
(3, 'Export to WORD', 'models/exportWord.php'),
(4, 'Export to EXCEL', 'models/exportExcel.php');

-- --------------------------------------------------------

--
-- Table structure for table `izvodjac`
--

CREATE TABLE `izvodjac` (
  `id` int(11) NOT NULL,
  `ime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prezime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `slika` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `opis` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `izvodjac`
--

INSERT INTO `izvodjac` (`id`, `ime`, `prezime`, `slika`, `alt`, `opis`) VALUES
(1, 'John', 'Cramer', 'assets/images/pic8.jpg', 'Izvodjac 1', 'Is an American rapper and philanthropist from Oakland, California. His first major - label album, These Things Happen, was released on June 23, 2014 and peaked at number 3 on the US Billboard 200. His second studio album, When It\'s Dark Out, was released on December 4, 2015.'),
(2, 'Eric', 'Matthews', 'assets/images/pic2.jpg', 'Izvodjac 2', 'Is an American singer, songwriter and record producer. His initial exposure came through the viral success of his song videos uploaded to YouTube. \"See You Again\" was released as debut single in 2015, which he co - wrote, co - produced, and performed with Wiz Khalifa for the Furious 7.'),
(3, 'Amanda', 'Young', 'assets/images/pic1.jpg', 'Izvodjac 3', 'Is an American singer, songwriter and actress. She began her career in 2008. Her third album Dangerous Woman (2016), explored pop and dancem and became her first number - one album in the United Kingdom.'),
(4, 'Lawrence', 'Gordon', 'assets/images/pic4.jpg', 'Izvodjac 4', 'Is an Indian singer, songwriter, author, record producer, performer and environmentalist. He is credited with making Bhangra popular worldwide, and helping to set up a parallel non - film Indian pop music industry to the pre - Daler era\'s then existent Bollywood music.');

-- --------------------------------------------------------

--
-- Table structure for table `kategorija`
--

CREATE TABLE `kategorija` (
  `id` int(11) NOT NULL,
  `naziv` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kategorija`
--

INSERT INTO `kategorija` (`id`, `naziv`) VALUES
(1, 'Blues'),
(2, 'Children'),
(3, 'Rock'),
(4, 'Country'),
(5, 'Jazz'),
(6, 'Dance'),
(7, 'Pop'),
(8, 'Reggae');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `ime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prezime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lozinka` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `datum_registracije` datetime NOT NULL,
  `aktivan` int(1) NOT NULL,
  `id_uloga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `prezime`, `email`, `lozinka`, `datum_registracije`, `aktivan`, `id_uloga`) VALUES
(1, 'user', 'user', 'user123@gmail.com', '202cb962ac59075b964b07152d234b70', '2019-04-14 00:00:00', 0, 1),
(2, 'admin', 'admin', 'admin123@gmail.com', '202cb962ac59075b964b07152d234b70', '2019-04-14 00:00:00', 0, 2),
(4, 'Damnjan', 'Askovic', 'damnjan123@gmail.com', '202cb962ac59075b964b07152d234b70', '2019-06-13 10:03:04', 0, 1),
(5, 'Ognjen', 'Askovic', 'ogi123@gmail.com', '202cb962ac59075b964b07152d234b70', '2019-06-19 23:48:39', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `korisnik_odgovor`
--

CREATE TABLE `korisnik_odgovor` (
  `id_korisnika` int(11) NOT NULL,
  `id_odgovora` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `korisnik_odgovor`
--

INSERT INTO `korisnik_odgovor` (`id_korisnika`, `id_odgovora`) VALUES
(1, 1),
(2, 4),
(4, 5),
(5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `meni`
--

CREATE TABLE `meni` (
  `id` int(11) NOT NULL,
  `naziv` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `href` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `meni`
--

INSERT INTO `meni` (`id`, `naziv`, `href`) VALUES
(1, 'Home', 'home'),
(2, 'Artists', 'artists'),
(3, 'Specials', 'specials'),
(4, 'Contact', 'contact'),
(5, 'About', 'about');

-- --------------------------------------------------------

--
-- Table structure for table `odgovor`
--

CREATE TABLE `odgovor` (
  `id` int(11) NOT NULL,
  `odg` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_anketa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `odgovor`
--

INSERT INTO `odgovor` (`id`, `odg`, `id_anketa`) VALUES
(1, 'Very bad', 1),
(2, 'Bad', 1),
(3, 'Good', 1),
(4, 'Very good', 1),
(5, 'Excellent', 1);

-- --------------------------------------------------------

--
-- Table structure for table `uloga`
--

CREATE TABLE `uloga` (
  `id` int(11) NOT NULL,
  `naziv` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `uloga`
--

INSERT INTO `uloga` (`id`, `naziv`) VALUES
(1, 'Korisnik'),
(2, 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategorija` (`id_kategorija`);

--
-- Indexes for table `anketa`
--
ALTER TABLE `anketa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informacija`
--
ALTER TABLE `informacija`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `izvodjac`
--
ALTER TABLE `izvodjac`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategorija`
--
ALTER TABLE `kategorija`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_uloga` (`id_uloga`);

--
-- Indexes for table `korisnik_odgovor`
--
ALTER TABLE `korisnik_odgovor`
  ADD PRIMARY KEY (`id_korisnika`,`id_odgovora`),
  ADD KEY `id_odgovora` (`id_odgovora`);

--
-- Indexes for table `meni`
--
ALTER TABLE `meni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `odgovor`
--
ALTER TABLE `odgovor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_anketa` (`id_anketa`);

--
-- Indexes for table `uloga`
--
ALTER TABLE `uloga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `anketa`
--
ALTER TABLE `anketa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `autor`
--
ALTER TABLE `autor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `informacija`
--
ALTER TABLE `informacija`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `izvodjac`
--
ALTER TABLE `izvodjac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategorija`
--
ALTER TABLE `kategorija`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `meni`
--
ALTER TABLE `meni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `odgovor`
--
ALTER TABLE `odgovor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `uloga`
--
ALTER TABLE `uloga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_ibfk_1` FOREIGN KEY (`id_kategorija`) REFERENCES `kategorija` (`id`);

--
-- Constraints for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD CONSTRAINT `korisnik_ibfk_1` FOREIGN KEY (`id_uloga`) REFERENCES `uloga` (`id`);

--
-- Constraints for table `korisnik_odgovor`
--
ALTER TABLE `korisnik_odgovor`
  ADD CONSTRAINT `korisnik_odgovor_ibfk_1` FOREIGN KEY (`id_korisnika`) REFERENCES `korisnik` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `korisnik_odgovor_ibfk_2` FOREIGN KEY (`id_odgovora`) REFERENCES `odgovor` (`id`);

--
-- Constraints for table `odgovor`
--
ALTER TABLE `odgovor`
  ADD CONSTRAINT `odgovor_ibfk_1` FOREIGN KEY (`id_anketa`) REFERENCES `anketa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
