-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2025 at 11:08 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rp`
--
CREATE DATABASE IF NOT EXISTS `rp` DEFAULT CHARACTER SET cp1250 COLLATE cp1250_croatian_ci;
USE `rp`;

-- --------------------------------------------------------

--
-- Table structure for table `clanak`
--

CREATE TABLE `clanak` (
  `id` int(11) NOT NULL,
  `datum` varchar(32) NOT NULL,
  `naslov` varchar(255) NOT NULL,
  `sazetak` text NOT NULL,
  `tekst` text NOT NULL,
  `slika` varchar(64) NOT NULL,
  `kategorija` varchar(64) NOT NULL,
  `arhiva` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

--
-- Dumping data for table `clanak`
--

INSERT INTO `clanak` (`id`, `datum`, `naslov`, `sazetak`, `tekst`, `slika`, `kategorija`, `arhiva`) VALUES
(23, '22.06.2025.', 'DEG präsentiert neuen Spieler aus Augsburg', 'Die Düsseldorfer EG hat einen weiteren Zugang präsentiert. Kristian Blumenschein spielte zuletzt in der DEL, kennt sich in der zweithöchsten Spielklasse aber ebenfalls bestens aus.', 'Zugang der Düsseldorfer EG. Der 28-Jährige wechselt von den Augsburger Panthern ins Rheinland. Für sie bestritt er in der vergangenen Saison 40 Spiele in der Deutschen Eishockey-Liga (DEL), wobei ihm vier Assists gelangen. Zuvor war der Verteidiger zwei Jahre für die Lausitzer Füchse in der DEL2 aktiv gewesen. In der Saison 2023/24 gab er ganze 22 Torvorlagen bei fünf eigenen Treffern und war damit punktstärkster Verteidiger der Liga. „Kristian Blumenschein ist ein guter Schlittschuhläufer und kann sicher mit der Scheibe umgehen. Er hat auch im Spiel unter Druck und als Puck-Verteiler im Powerplay seine Qualitäten“, erklärt DEG-Cheftrainer Rich Chernomaz. Blumenschein selbst sagt: „Ein völlig neu formiertes Team wie das der DEG in der kommenden Saison ist immer eine Herausforderung – aber auch eine große Chance. Ich bin sehr gespannt auf diese Aufgabe und freue mich auf die neue Saison!“', 'hockey.jpg', 'Sport', 0),
(24, '22.06.2025.', 'Erstrunden-Aus für Maria, Sorgen um Lys', 'In Bad Homburg bereiten sich die Tennisspielerinnen Tatjana Maria und Eva Lys auf Wimbledon vor. Beide erleiden bei der Generalprobe für den Rasenklassiker Rückschläge. In unserem Tennis-Telegramm verpassen Sie nichts.', 'Der sensationelle Erfolgslauf von Tennisspielerin Tatjana Maria (37) ist bei der Wimbledon-Generalprobe in Bad Homburg abrupt zu Ende gegangen. Eine Woche nach ', 'tenis.jpg', 'Sport', 0),
(25, '22.06.2025.', 'Ex-Schiedsrichter vermacht Borussia besonderen Spielball', 'Eugen Strigel, der 1995 das Pokalfinale leitete, hat Borussias Vereinsmuseum den Spielball aus der damaligen Begegnung vermacht. Es ist jedoch nicht die einzige Verbindung, die Strigel zu den Gladbachern hat – eine führt sogar zum Büchsenwurf.', 'In wenigen Tagen jährt sich Borussias letzter großer Titelgewinn zum 30. Mal. Am 24. Juni 1995 gewannen die Gladbacher das Endspiel im DFB-Pokal gegen den VfL Wolfsburg 3:0 und damit zum dritten Mal den nationalen Cup-Wettbewerb – ein bedeutender Tag der Vereinsgeschichte. Erinnerungsstücke zu solch einem Ereignis sind besonders wertvoll, das kann eine Eintrittskarte vom Finale in Berlin sein oder das Originaltrikot eines Spielers.\r\n\r\n', 'football.jpg', 'Sport', 0),
(26, '22.06.2025.', 'Nato-Staaten einigen sich auf Fünf-Prozent-Ausgabenziel', 'Nur wenige Tage vor dem Nato-Gipfel in Den Haag haben die 32 Bündnisstaaten eine Einigung über die geplante neue Zielvorgabe für die Mindesthöhe der nationalen Verteidigungsausgaben erzielt.', 'Wie die Deutsche Presse-Agentur nach dem Ende eines schriftlichen Entscheidungsverfahrens erfuhr, wollen sich die Alliierten beim Gipfel bereiterklären, ihre jährlichen verteidigungsrelevanten Ausgaben auf mindestens fünf Prozent des Bruttoinlandsprodukts (BIP) zu erhöhen.\r\n\r\nEin Betrag von mindestens 3,5 Prozent des BIP soll dabei auf klassische Militärausgaben entfallen. Zudem werden zum Beispiel Ausgaben für die Terrorismusbekämpfung und militärisch nutzbare Infrastruktur angerechnet werden können. Das könnten zum Beispiel Investitionen in Bahnstrecken, panzertaugliche Brücken und erweiterte Häfen sein. Als Frist für die Erfüllung des neuen Ziels für die Verteidigungsausgaben soll das Jahr 2035 gelten, wie nach Angaben von Diplomaten aus dem Text für die geplante Abschlusserklärung des Nato-Gipfels hervorgeht.', 'nato.jpg', 'Politika', 0),
(27, '22.06.2025.', 'Was wir zu den US-Angriffen auf Atomanlagen im Iran wissen', 'Nach tagelanger unentschlossener Kommunikation von Trump nahm das US-Militär nun doch iranische Atomanlagen ins Visier – und riskiert damit eine weitere Eskalation im Nahen Osten.', 'Die USA haben in der Nacht zu Sonntag Atomanlagen im Iran angegriffen: die unterirdische Uran-Anreicherungsanlage in Fordo sowie Einrichtungen in Natans und Isfahan. US-Präsident Donald Trump spricht von einer vollständigen Zerstörung der Anlagen und droht mit noch größeren Attacken, sollte die iranische Seite nicht einen Weg des Friedens einschlagen. Irans Atomorganisation erklärte unterdessen, dass trotz der „bösartigen Verschwörungen der Feinde“ Irans Nuklearprogramm nicht gestoppt werde. Vieles ist also noch unklar – einige Fragen aber lassen sich bereits beantworten. Hier sind die wichtigsten zum jetzigen Zeitpunkt:\r\n\r\nWie Israel argumentieren auch die USA, das militärische Eingreifen sei nötig, um eine drohende nukleare Aufrüstung des Irans zu verhindern. Vor den Angriffen der Nacht hatte Trump immer wieder betont, Teheran dürfe niemals in den Besitz einer Atombombe gelangen. Die Angriffe Israels, die den amerikanischen Attacken vorhergingen, könnten aus Sicht der US-Regierung die Gelegenheit geboten haben, mit einem eigenen Schlag das iranische Atomprogramm entscheidend zu schwächen. Allerdings gibt es in Trumps republikanischer Partei auch ein Lager, das seit Langem einen politischen Umsturz in Teheran anstrebt.', 'iran.jpeg', 'Politika', 0),
(28, '22.06.2025.', 'Europäische Hersteller testen Drohnen in der Ukraine', 'Drohnenproduzenten aus Europa erproben ihre Erzeugnisse an der ukrainisch-russischen Front – und nutzen dies als Verkaufsargument. So wollen sie auch zivile Märkte erschließen.', 'Etwa einmal im Monat unternimmt der französische Drohnenhersteller Henri Seydoux eine Reise, die für viele in seiner Branche zum Muss geworden ist: Er fährt in die Ukraine. Denn was Drohnentechnologie angeht, gibt es keinen herausfordernden Ort als die Front im russischen Angriffskrieg. Beide Seiten nutzen dort unbemannte Luftfahrzeuge in allen Formen und Größen für tödliche Attacken und zur Beobachtung – eine Zäsur in der modernen Kriegsführung.', 'drone.jpg', 'Politika', 0);

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `ime` varchar(50) NOT NULL,
  `prezime` varchar(50) NOT NULL,
  `korisnicko_ime` varchar(50) NOT NULL,
  `lozinka` varchar(255) NOT NULL,
  `razina` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `prezime`, `korisnicko_ime`, `lozinka`, `razina`) VALUES
(1, 'Domagoj', 'Kovacic', 'dkovacic', '$2y$10$Gbm63zyh0l/RBEhK1DnlyuvEkltRADoyLOiYf/xBHJzjFugMy4AwW', 1),
(2, 'Ignac', 'Kovacic', 'ikovacic', '$2y$10$/Balwo9HIFNNn4QrHWcMeOJ6yHY.zUbU4YZ5I2apoQAf2FqA67eMe', 0),
(3, 'Domi', 'Kova', 'domagoj', '$2y$10$ugabq1mzfxRtOyRzvnlKYucQEIir0UbCOtGfS/Z5xtO58uF0Oe7ju', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clanak`
--
ALTER TABLE `clanak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `korisnicko_ime` (`korisnicko_ime`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clanak`
--
ALTER TABLE `clanak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
