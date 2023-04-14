-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2023 at 03:53 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `img` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `insert_date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `img`, `content`, `insert_date`, `user_id`) VALUES
(1, 'Counter-Strike 2 Resmi Diumumkan, Valve Bakal Rilis CS2 Musim Panas 2023', 'counter_strike_2.jpg', 'Valve secara resmi mengumumkan bakal merilis game terbaru dari seri Counter-Strike andalan mereka, dengan judul Counter-Strike 2.\r\n\r\nBakal menjadi pengganti dari CS:GO atau Counter-Strike: Global Offensive, yang selama ini sudah dimainkan para gamer, Counter-Strike atau CS2, direncanakan untuk rilis pada musim panas tahun 2023 ini.\r\n\r\nMelalui laman resmi untuk CS2, Kamis (23/3/2023), Valve menyebut game ini sebagai \"lompatan teknis terbesar dalam sejarah Counter-Strike, memastikan fitur dan pembaruan baru untuk tahun-tahun mendatang.\"\r\n\r\nValve baru akan mengungkap semua fitur-fitur game-nya dalam perilisan musim panas mendatang. Namun, CS2 sudah memulai Limited Test atau tes secara terbatas, bagi beberapa pemain yang terpilih.\r\n\r\nSelama uji coba terbatas ini, Valve baru akan mengevaluasi sekumpulan fitur, untuk nantinya menghilangkan masalah yang ada sebelum diluncurkan secara resmi.\r\n\r\nSelain itu, Counter-Strike 2 juga akan dirilis sebagai upgrade gratis dari CS:GO. Dikutip dari IGN, pemain item-item yang sudah dimiliki oleh pemain di CS:GO, juga akan dibawa ke CS2.\r\n\r\nAda beberapa fitur yang disorot oleh Valve, melalui beberapa video yang mereka unggah di situs CS2. Misalnya mengenai \"peta yang ditingkatkan dan dirombak\", granat asap yang bisa \"mengubah permainan\", dan efek visual serta audio yang didesain ulang.\r\n\r\nValve mengatakan, seluruh map di CS2 dirombak dan sudah digarap kembali sepenuhnya dari dasar ke atas, \"memanfaatkan semua alat Source 2 dan fitur rendering.\"', '2023-03-29 01:17:18', 1),
(2, 'Kata FIFA soal Wacana Piala Dunia U-20 Batal Digelar di Indonesia', 'piala-dunia-u-20-2023.png', 'Status Indonesia sebagai tuan rumah Piala Dunia U-20 2023 sedang disorot. Ada potensi ajang tersebut batal digelar di Tanah Air. Apa respons FIFA?\r\n\r\nStatus tuan rumah Indonesia untuk menggelar Piala Dunia U-20 2023, yang digelar Mei mendatang, ramai dibahas. Penyebabnya adalah batalnya acara drawing yang sedianya digelar di Bali akhir bulan ini.\r\n\r\nDengan batalnya acara drawing, kini status tuan rumah Indonesia jadi ikut disorot. PSSI mengatakan ada \'potensi\' terkena sanksi berat andai Indonesia akhirnya batal menyelenggarakan Piala Dunia U-20 2023.', '2023-03-29 02:36:16', 1),
(3, 'FIFA menghapus Indonesia sebagai tuan rumah FIFA U-20 World Cup 2023™', 'Host-REMOVE-FIFA-U-20-World-Cup.webp', 'Menyusul pertemuan hari ini antara Presiden FIFA Gianni Infantino dan Presiden Persatuan Sepak Bola Seluruh Indonesia (PSSI) Erick Thohir, FIFA telah memutuskan, karena keadaan saat ini, untuk menghapus Indonesia sebagai tuan rumah FIFA U-20 World Cup 2023™. Tuan rumah baru akan diumumkan sesegera mungkin, dengan tanggal turnamen saat ini tetap tidak berubah. Potensi sanksi terhadap PSSI juga dapat diputuskan pada tahap selanjutnya.\r\n\r\nFIFA ingin menggarisbawahi bahwa terlepas dari keputusan tersebut, tetap berkomitmen untuk aktif membantu PSSI, bekerja sama erat dan dengan dukungan pemerintahan Presiden Widodo, dalam proses transformasi sepakbola Indonesia pascatragedi yang terjadi pada Oktober 2022. Anggota tim FIFA akan terus hadir di Indonesia dalam beberapa bulan mendatang dan akan memberikan bantuan yang dibutuhkan kepada PSSI, di bawah kepemimpinan Presiden Thohir.\r\n\r\nPertemuan baru antara Presiden FIFA dan Presiden PSSI untuk pembahasan lebih lanjut akan dijadwalkan dalam waktu dekat.', '2023-03-30 00:02:37', 1),
(5, 'Ganjar dan Koster &#039;Dirujak&#039; Netizen, PDIP Pasang Badan', 'ganjar-dirujak.jpeg', '<p>Politisi PDIP, Adian Napitupulu menyebut batalnya gelaran Piala Dunia U-20 di Indonesia bukan karena penolakan dari Ganjar Pranowo dan I Wayan Koster. Ia menilai ada sesuatu yang memiliki tingkat kebahayaan lebih dari pada pernyataan kedua gubernur tersebut.<br><br>\"Banyak orang berfikir batalnya karena selembar surat dari gubernur Koster atau gubernur Ganjar menurut saya enggak. Ada peristiwa lain yang mungkin tidak dikemukakan yang saya pikir jauh lebih punya nilai kebahayaan,\" ujar Adian Napitupulu.<br><br>Ganjar Pranomo menjadi sasaran publik melampiaskan rasa kecewa atas batalnya Indonesia jadi tuan rumah Piala Dunia U-20. Hal ini dikarenakan Ganjar adalah salah seorang yang membuat gaduh dengan menolak kedatangan Timnas Israel.&nbsp;<br><br>Gubernur Jawa Tengah ini mengaku juga kecewa terhadap putusan FIFA. Ia berharap para pesepakbola Timnas U-20 Indonesia tetap semangat.&nbsp;</p>', '0000-00-00 00:00:00', 1),
(6, 'Medsos Berlama-Lama Tak Ada Guna', 'Medsos-berlama-lama.jpg', '<p>Dengan lebih dari 4,7 miliar users media sosial, durasi dan waktu users meningkat tiap tahun. Laporan Digital 2022 October Global Statshot Report dari We Are Social mengungkap fakta menarik.&nbsp;</p><p>&nbsp;</p><p>Saat ini lebih banyak waktu online dihabiskan di platform medsos. Di mana 30% waktu dalam satu hari seseorang dihabiskan untuk medsos daripada menonton TV.</p><p>&nbsp;</p><p>Sedang laporan GWI melihat ada peningkatan 2% (38%) jumlah user tahun 2022 yang bermedsos per hari dari tahun 2021. Secara rata-rata global, users menghabiskan waktu 147 menit per hari di medsos. Orang Indonesia menghabiskan waktu 3 jam 18 menit setiap di medsos, dari 7 jam lebih waktu mereka online.</p><p>&nbsp;</p><p>Data-data di atas menunjukkan bahwa waktu dan durasi medsos terus meningkat. Selain itu, kehidupan manusia modern tidak lepas dari medsos. Baik untuk berkomunikasi, jual-beli, sampai mengisi kegabutan, medsos selalu dilirik. Mungkin hampir setiap menit, ponsel pintar selalu dicek untuk notifikasi.</p><p>&nbsp;</p><p>Seringkali waktu, durasi, dan frekuensi di medsos begitu spontan dan acak. Kadang di waktu bekerja, belajar, atau berbicara dengan orang lain. Dampaknya ada distraksi dari belajar dan bekerja. Atau dirasa tidak sopan mengecek ponsel terus saat mengobrol. Maka detoks media sosial terkait erat dengan mengatur waktu dan durasi.</p><p>&nbsp;</p><p>Karena detoks medsos merupakan proses pemulihan diri mengonsumsi medsos yang terkontrol. Walau secara teknis, mengatur durasi dan waktu di medsos bisa digunakan aplikasi. Tapi dengan aktivitas berikut, proses mengatur waktu dan durasi di medsos bisa jadi lebih bermakna.</p><p>&nbsp;</p><p><strong>Pertama, buatlah rencana yang mencakup waktu dan durasi yang tepat untuk mengecek medsos.&nbsp;</strong></p><p>Misalnya, pada pagi hari bisa disisihkan 30 menit menjawab email, chat, atau notifikasi. Siang saat bekerja atau belajar, usahakan tidak mengecek medsos, dst. Pastikan diri tidak terjebak di medsos pada waktu-waktu penting dalam satu hari.</p><p>&nbsp;</p><p><strong>Kedua, tetapkan durasi dan frekuensi mengecek medsos. Durasi dan frekuensi sebaiknya cukup untuk mengecek konten atau trending di medsos.&nbsp;</strong></p><p>Jika durasi dan frekuensi medsos terlalu lama bisa menjebak rutinitas medsos berlebihan. Pastikan durasi dan frekuensi cukup untuk mengecek medsos tanpa mengurangi waktu bekerja, belajar, dsb.</p><p>&nbsp;</p><p><strong>Ketiga, gunakan timer atau stopwatch saat mengecek medsos.&nbsp;</strong></p><p>Fitur timer atau stopwatch biasanya ada di ponsel pintar. Dengan men-set alarm pada timer dapat mengontrol dan mengingatkan lamanya di medsos. Cukup pastikan diri tetap konsisten dalam menaati durasi di medsos, walau memang cukup sulit.</p><p>&nbsp;</p><p><strong>Keempat, minta teman untuk mengingatkan.&nbsp;</strong></p><p>Teman juga bisa menjadi <i>alarm</i> untuk mengingatkan durasi di medsos. Baik teman di luring atau daring, bisa menjadi pengingat. Namun pastikan sebelumnya teman ini sudah mengetahui rencana untuk detoks medsos. Terutama dengan fokus mengatur waktu, durasi, dan frekuensi di medsos.</p><p>&nbsp;</p><p>Dengan memastikan ada perencanaan untuk mengontrol waktu, durasi, dan frekuensi di medsos, detoks medsos bisa berhasil. Hal ini jelas menunjukkan bahwa diri bisa mengendalikan perlunya waktu di medsos. Sehingga dalam prosesnya, bisa tidak terjebak dalam durasi dan frekuensi acak dan lama yang berlebihan di medsos.</p><p>&nbsp;</p><p>Perlu diingat, proses ini membutuhkan ketelitian dan kesabaran. Mengubah kebiasaan mengecek medsos memang butuh waktu. Yang terpenting adalah progress bukan pencapaian. Dengan mengatur waktu, durasi, dan frekuensi di medsos, adalah salah satu cara untuk detoks medsos.</p>', '0000-00-00 00:00:00', 2),
(7, 'Timnas Indonesia U-20 Resmi Dibubarkan', 'timnas-u-20-indonesia.jpeg', '<p>Jakarta, CNN Indonesia -- Timnas Indonesia U-20&nbsp;resmi dibubarkan pada Sabtu (1/4), setelah Indonesia batal menggelar Piala Dunia U-20 2023.<br>Kepastian itu disampaikan Shin Tae Yong dalam sesi latihan bersama Timnas Indonesia U-20 dan Timnas Indonesia U-22 di Stadion Utama Gelora Bung Karno (SUGBK) Jakarta, Sabtu (1/4) sore.<br><br>\"Setelah ini akan dibubarkan para pemain [Timnas Indonesia U-20] dan semua [pihak di tim] yang mempersiapkan Piala Dunia U-20 kemarin,\" kata Shin Tae Yong.<br><br>Jakarta, CNN Indonesia -- Timnas Indonesia U-20&nbsp;resmi dibubarkan pada Sabtu (1/4), setelah Indonesia batal menggelar Piala Dunia U-20 2023.<br>Kepastian itu disampaikan Shin Tae Yong dalam sesi latihan bersama Timnas Indonesia U-20 dan Timnas Indonesia U-22 di Stadion Utama Gelora Bung Karno (SUGBK) Jakarta, Sabtu (1/4) sore.<br><br>\"Setelah ini akan dibubarkan para pemain [Timnas Indonesia U-20] dan semua [pihak di tim] yang mempersiapkan Piala Dunia U-20 kemarin,\" kata Shin Tae Yong.</p>', '2023-04-01 19:18:06', 2);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'Author'),
(3, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(10) NOT NULL,
  `last_name` varchar(10) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` char(1) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `birthdate`, `gender`, `username`, `email`, `password`, `id_role`) VALUES
(1, 'Narapati', 'Anandi', '2004-02-24', 'M', 'lio_keysa24', 'narapatikeysa00@gmail.com', 'smpn1bdg', 1),
(2, 'Catherine', 'Nathania', '2004-07-16', 'F', 'catherinenathania16', 'catherinenathania16@gmail.com', 'apayahlupa1', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `username_2` (`username`,`email`),
  ADD KEY `username_3` (`username`),
  ADD KEY `id_role` (`id_role`),
  ADD KEY `id_role_2` (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
