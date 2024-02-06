-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2024 at 07:21 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sppt3`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon`
--

CREATE TABLE `calon` (
  `NO_KP` varchar(12) NOT NULL,
  `NAMA_CALON` varchar(255) NOT NULL,
  `ANGKA_GILIRAN` varchar(20) DEFAULT NULL,
  `JANTINA` varchar(10) NOT NULL,
  `KETURUNAN` varchar(20) NOT NULL,
  `AGAMA` varchar(20) NOT NULL,
  `ALAMAT` tinytext NOT NULL,
  `NO_KP_PENJAGA` varchar(12) NOT NULL,
  `ID_GURU` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calon`
--

INSERT INTO `calon` (`NO_KP`, `NAMA_CALON`, `ANGKA_GILIRAN`, `JANTINA`, `KETURUNAN`, `AGAMA`, `ALAMAT`, `NO_KP_PENJAGA`, `ID_GURU`) VALUES
('030628101245', 'MUHAMMAD HAZIQ BIN AHMAD RAJI', 'BH169K070', 'LELAKI', 'BUMIPUTERA', 'ISLAM', 'SHAH ALAM', '720405023449', 2),
('031195863142', 'Peter Mann', '[(Xmbmz1o4pbka!q', 'Male', 'ro', 'fijigoaj', 'Hubvec Trail', '253044557035', 2),
('055004101119', 'Pauline Jones', 'F(P@0)tisXcW', 'Female', 'fod', 'pe', 'Veve Square', '789039300251', 2),
('094128251496', 'Marion Barrett', '!g!F#RdSS', 'Female', 'vewoc', 'gobaz', 'Gebi Junction', '722009785701', 2),
('118483521680', 'Jane Wolfe', '1opvF', 'Male', 'ivi', 'oso', 'Jagha Road', '909330841779', 2),
('129158189029', 'Lula Ramsey', 'sWW0WB&3%2&!pMa1', 'Female', 'ninat', 'bewav', 'Caja Park', '677027931174', 2),
('154220236979', 'Nathaniel Frazier', 'oA)BQ(', 'Female', 'ota', 'ucev', 'Ille Boulevard', '972914865304', 2),
('155969769809', 'Jane Rodgers', 'd1rK3Hq#)WSHkfJJ#u', 'Male', 'ini', 'nup', 'Acirob Center', '255464237567', 2),
('167752994633', 'Minerva Byrd', 'iNe(EJu4xUDp]5', 'Female', 'bok', 'pumpat', 'Jufo Drive', '726242028743', 2),
('304812384819', 'Louisa Higgins', 'WqXT7230&dA9Xat', 'Male', 'ubka', 'ejno', 'Kodfoz Turnpike', '002092257670', 2),
('322464034201', 'Lora Hunt', 'OvVCyH0Efbw', 'Female', 'wewiwoat', 'utufet', 'Vizoc Grove', '140019501821', 2),
('355191881133', 'Travis Johnson', '8NqKkO$p', 'Male', 'gu', 'razciddo', 'Tejjoh Road', '688476040996', 2),
('400900976616', 'Polly Norman', 'R[H5B9$hUj$%PO', 'Female', 'luna', 'zejbid', 'Ucju Pike', '112282956509', 2),
('431847224432', 'Jerry Murray', 'XVVJ)JNB(', 'Male', 'bugeko', 'tenjodgot', 'Vura Court', '500306652617', 2),
('469191030763', 'Nora Baker', 's$A4KBeaeg)dBvuN)q', 'Female', 'advaza', 'icuko', 'Mevi Point', '044212588517', 2),
('481988862696', 'Joshua Houston', '#z038Y1j', 'Male', 'tahoce', 'gow', 'Witwov Parkway', '082630491209', 2),
('487553631507', 'Samuel Riley', 'ss#D*GNQwv1t[7', 'Female', 'gag', 'garzuksi', 'Ulosa River', '160897515340', 2),
('522396565357', 'Jesus Morgan', '36JgydKYyRo@Z9em', 'Female', 'fawmodov', 'be', 'Bikne Key', '066060291963', 2),
('524891488353', 'Ronnie Lopez', '66#$XI**$G2(6#3a', 'Female', 'cem', 'hoc', 'Sokwa Center', '805030313656', 2),
('575355107299', 'Walter Bradley', 'k40N%mXqgr', 'Male', 'heni', 'ba', 'Geow Avenue', '836247583920', 2),
('607052121081', 'Leo Barnes', 'TfU&]', 'Female', 'lelho', 'icoujo', 'Esvof Way', '642332878686', 2),
('641791263408', 'Logan Baker', 'sz[DmNA1x$wPPzm', 'Female', 'leku', 'vu', 'Coiz Way', '482245459563', 2),
('643290010140', 'Logan Conner', 'BymG7IV8$3i', 'Female', 'ujo', 'gueciwir', 'Ticreh Pike', '239807594104', 2),
('643516851774', 'Roxie Montgomery', 'bP!ctk!m@J)*k)6w6VC6', 'Male', 'bazuaj', 'armein', 'Jiur Mill', '022741470555', 2),
('670280718125', 'Stella Padilla', 'QLlmkTSoGxMsKMwhi7J', 'Female', 'mazup', 'be', 'Puhzej Path', '870189810700', 2),
('681179492825', 'Rosa Garrett', 'B[k(Ytlc&S', 'Male', 'eci', 'mofu', 'Kokhi Mill', '237983162424', 2),
('691423530059', 'Leah Cunningham', 'uOYVk]P', 'Female', 'pisurkud', 'ekla', 'Atudoh Court', '359876127393', 2),
('718998788498', 'Lula Blair', '5KdUT[)%hZFOeExBnu', 'Male', 'ifuiwba', 'awozazi', 'Ircul Road', '952528384485', 2),
('745857645374', 'Nettie Harrington', 'TFUT#ZTAY#)jT', 'Female', 'sowodah', 'na', 'Suas Junction', '812270302347', 2),
('794395207514', 'Mitchell Sims', 'FYd#MB0l', 'Female', 'peijufes', 'hebdo', 'Bete Manor', '626326780633', 2),
('823729687911', 'Lettie Ross', '^sq!rxprFA1N*W2buAa', 'Male', 'er', 'iluziluh', 'Jahsaw Lane', '214168455433', 2),
('839265927692', 'Rhoda Vaughn', 'YfJuWuWJLI2W$', 'Female', 'hesmi', 'junalwik', 'Odgob Junction', '478786742126', 2),
('841469436310', 'Sadie Tyler', 'Nr0yNHu[8MNcBKQhG', 'Male', 'vol', 'mod', 'Jadac Key', '818324988728', 2),
('859291561453', 'Nancy Burke', 'XH]GoSf', 'Male', 'datar', 'wakohog', 'Tosfah Street', '490678816770', 2),
('948327550946', 'Melvin Hodges', 'WaBbRaVwreXs', 'Female', 'siromcu', 'ko', 'Kispa Point', '622544871226', 2);

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `ID_GURU` int(11) NOT NULL,
  `NAMA_GURU` varchar(255) NOT NULL,
  `USERNAME` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `KATA_LALUAN` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`ID_GURU`, `NAMA_GURU`, `USERNAME`, `EMAIL`, `KATA_LALUAN`) VALUES
(1, 'sesidhren gunaseelan', 'bats', 'bats@gmail.com', '$2y$10$kPv9KUDdf8hGpp5hMkYVq.6XTZKfCwopUuTjFzeXgcBEye518dnbW'),
(2, 'Kal-El', 'superman', 'superman@gmail.com', '$2y$10$OEHdWlrUNd5Y6WDWb5agfejaH6cnsaKPKzmxweQz7z0IZp0Bm6qOu'),
(3, 'Haziq Ahmad', 'haziqahmad', 'haziqraji@gmail.com', '$2y$10$31OZg4/RtVph5XF8QYvb/uJUlv8/89debI5kyfvVKvH7xi1I9TJBG');

-- --------------------------------------------------------

--
-- Table structure for table `penjaga`
--

CREATE TABLE `penjaga` (
  `NO_KP_PENJAGA` varchar(12) NOT NULL,
  `NAMA_PENJAGA` varchar(255) NOT NULL,
  `STATUS` varchar(20) NOT NULL,
  `NO_TEL` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjaga`
--

INSERT INTO `penjaga` (`NO_KP_PENJAGA`, `NAMA_PENJAGA`, `STATUS`, `NO_TEL`) VALUES
('002092257670', 'Leonard Murphy', 'finwu', '(777) 203-4822'),
('022741470555', 'Sadie Sanders', 'seso', '(222) 233-4816'),
('044212588517', 'Kathryn Hunt', 'kehcal', '(920) 797-7429'),
('066060291963', 'Alejandro Kelley', 'javhol', '(652) 878-3065'),
('082630491209', 'Marie Barber', 'sebacli', '(650) 335-5043'),
('112282956509', 'Lottie Stanley', 'god', '(319) 709-9487'),
('140019501821', 'Johnny Sharp', 'nunler', '(787) 251-4141'),
('160897515340', 'Lettie Moran', 'wet', '(238) 271-1896'),
('214168455433', 'Agnes Carroll', 'locez', '(360) 419-7673'),
('237983162424', 'Elijah Lowe', 'ulcehe', '(762) 812-1785'),
('239807594104', 'Jean McCarthy', 'nolfueka', '(503) 507-8633'),
('253044557035', 'Manuel McDaniel', 'utpagwaj', '(584) 218-1681'),
('255464237567', 'Cynthia Burton', 'bas', '(911) 258-9156'),
('359876127393', 'Gussie Olson', 'enker', '(668) 718-1409'),
('478786742126', 'Luke Ellis', 'ohfavine', '(775) 390-3937'),
('482245459563', 'Jeffery Allen', 'bupgava', '(262) 695-3936'),
('490678816770', 'Madge Chavez', 'ebi', '(658) 998-3002'),
('500306652617', 'Austin Howard', 'ficahfa', '(913) 844-5163'),
('622544871226', 'Nicholas Jones', 'puvaih', '(228) 887-7926'),
('626326780633', 'Ethan White', 'od', '(934) 759-9333'),
('642332878686', 'Trevor Steele', 'tavedoiva', '(554) 844-1239'),
('677027931174', 'Sophie Castillo', 'awtu', '(518) 966-8066'),
('688476040996', 'Eugenia Colon', 'udovoti', '(468) 240-1458'),
('720405023449', 'AHMAD RAJI BIN SALLEH', 'BAPA', '0189413908'),
('722009785701', 'Gene Wong', 'huirtu', '(759) 273-6674'),
('726242028743', 'Jacob Shelton', 'dihis', '(934) 489-3867'),
('789039300251', 'Elva Adams', 'remzas', '(554) 539-3632'),
('805030313656', 'Kate Nelson', 'kulelteb', '(603) 239-3442'),
('812270302347', 'Nannie Burke', 'ego', '(643) 421-2434'),
('818324988728', 'Cynthia Wright', 'iwubulu', '(483) 694-9826'),
('836247583920', 'Corey Holt', 'savemru', '(246) 759-1461'),
('870189810700', 'Caleb Reese', 'gahcobwub', '(424) 689-3956'),
('909330841779', 'Raymond Webster', 'bon', '(443) 906-3970'),
('952528384485', 'Lottie Ellis', 'tassooja', '(439) 670-7802'),
('972914865304', 'Jon McLaughlin', 'timupbat', '(555) 467-2113');

-- --------------------------------------------------------

--
-- Table structure for table `peperiksaan`
--

CREATE TABLE `peperiksaan` (
  `NO_KP` varchar(12) NOT NULL,
  `KOD_SUBJEK` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peperiksaan`
--

INSERT INTO `peperiksaan` (`NO_KP`, `KOD_SUBJEK`) VALUES
('030628101245', '02'),
('030628101245', '03'),
('030628101245', '12'),
('030628101245', '13'),
('030628101245', '21'),
('030628101245', '23'),
('030628101245', '32'),
('030628101245', '33'),
('030628101245', '45'),
('030628101245', '50'),
('030628101245', '55'),
('030628101245', '76'),
('030628101245', '77'),
('030628101245', '79');

-- --------------------------------------------------------

--
-- Table structure for table `subjek`
--

CREATE TABLE `subjek` (
  `KOD_SUBJEK` varchar(2) NOT NULL,
  `NAMA_SUBJEK` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjek`
--

INSERT INTO `subjek` (`KOD_SUBJEK`, `NAMA_SUBJEK`) VALUES
('02', 'BAHASA MELAYU UJIAN BERTULIS'),
('03', 'BAHASA MELAYU UJIAN LISAN'),
('12', 'BAHASA INGGERIS UJIAN BERTULIS'),
('13', 'BAHASA INGGERIS UJIAN LISAN'),
('21', 'SEJARAH'),
('23', 'GEOGRAFI'),
('32', 'BAHASA CINA'),
('33', 'BAHASA TAMIL'),
('45', 'PENDIDIKAN ISLAM'),
('50', 'MATEMATIK'),
('55', 'SAINS'),
('76', 'KEMAHIRAN HIDUP BERSEPADU - KEMAHIRAN TEKNIKAL'),
('77', 'KEMAHIRAN HIDUP BERSEPADU - EKONOMI RUMAH TANGGA'),
('79', 'KEMAHIRAN HIDUP BERSEPADU - PERDAGANGAN DAN KEUSAHAWANAN');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `NO_KP` varchar(12) NOT NULL,
  `NAMA_CALON` varchar(255) NOT NULL,
  `ANGKA_GILIRAN` varchar(20) NOT NULL,
  `JANTINA` varchar(10) NOT NULL,
  `KETURUNAN` varchar(20) NOT NULL,
  `AGAMA` varchar(20) NOT NULL,
  `ALAMAT` text NOT NULL,
  `NO_KP_PENJAGA` varchar(12) NOT NULL,
  `NAMA_PENJAGA` varchar(255) NOT NULL,
  `STATUS` varchar(20) NOT NULL,
  `NO_TEL` varchar(20) NOT NULL,
  `ID_GURU` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon`
--
ALTER TABLE `calon`
  ADD PRIMARY KEY (`NO_KP`),
  ADD KEY `NO_KP_PENJAGA` (`NO_KP_PENJAGA`),
  ADD KEY `ID_GURU` (`ID_GURU`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`ID_GURU`);

--
-- Indexes for table `penjaga`
--
ALTER TABLE `penjaga`
  ADD PRIMARY KEY (`NO_KP_PENJAGA`);

--
-- Indexes for table `peperiksaan`
--
ALTER TABLE `peperiksaan`
  ADD PRIMARY KEY (`NO_KP`,`KOD_SUBJEK`),
  ADD KEY `KOD_SUBJEK` (`KOD_SUBJEK`),
  ADD KEY `NO_KP` (`NO_KP`);

--
-- Indexes for table `subjek`
--
ALTER TABLE `subjek`
  ADD PRIMARY KEY (`KOD_SUBJEK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `ID_GURU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `calon`
--
ALTER TABLE `calon`
  ADD CONSTRAINT `calon_ibfk_1` FOREIGN KEY (`ID_GURU`) REFERENCES `guru` (`ID_GURU`),
  ADD CONSTRAINT `calon_ibfk_2` FOREIGN KEY (`NO_KP_PENJAGA`) REFERENCES `penjaga` (`NO_KP_PENJAGA`);

--
-- Constraints for table `peperiksaan`
--
ALTER TABLE `peperiksaan`
  ADD CONSTRAINT `peperiksaan_ibfk_1` FOREIGN KEY (`KOD_SUBJEK`) REFERENCES `subjek` (`KOD_SUBJEK`) ON DELETE NO ACTION,
  ADD CONSTRAINT `peperiksaan_ibfk_2` FOREIGN KEY (`NO_KP`) REFERENCES `calon` (`NO_KP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
