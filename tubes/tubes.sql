-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2023 at 10:25 AM
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
(7, 'Timnas Indonesia U-20 Resmi Dibubarkan', 'timnas-u-20-indonesia.jpeg', '<p>Jakarta, CNN Indonesia -- Timnas Indonesia U-20&nbsp;resmi dibubarkan pada Sabtu (1/4), setelah Indonesia batal menggelar Piala Dunia U-20 2023.<br>Kepastian itu disampaikan Shin Tae Yong dalam sesi latihan bersama Timnas Indonesia U-20 dan Timnas Indonesia U-22 di Stadion Utama Gelora Bung Karno (SUGBK) Jakarta, Sabtu (1/4) sore.<br><br>\"Setelah ini akan dibubarkan para pemain [Timnas Indonesia U-20] dan semua [pihak di tim] yang mempersiapkan Piala Dunia U-20 kemarin,\" kata Shin Tae Yong.<br><br>Jakarta, CNN Indonesia -- Timnas Indonesia U-20&nbsp;resmi dibubarkan pada Sabtu (1/4), setelah Indonesia batal menggelar Piala Dunia U-20 2023.<br>Kepastian itu disampaikan Shin Tae Yong dalam sesi latihan bersama Timnas Indonesia U-20 dan Timnas Indonesia U-22 di Stadion Utama Gelora Bung Karno (SUGBK) Jakarta, Sabtu (1/4) sore.<br><br>\"Setelah ini akan dibubarkan para pemain [Timnas Indonesia U-20] dan semua [pihak di tim] yang mempersiapkan Piala Dunia U-20 kemarin,\" kata Shin Tae Yong.</p>', '2023-04-01 19:18:06', 2),
(8, 'Seluk Beluk Discord, Aplikasi Obrolan Terkait Kebocoran Data AS', 'seluk-beluk-discord.png', '<p>WASHINGTON DC, KOMPAS.com - Aplikasi obrolan Discord, yang merupakan salah satu cara paling populer para gamer berkomunikasi secara online, berada di pusat penyelidikan atas kebocoran dokumen rahasia tentang perang di Ukraina. Investigasi sedang berlangsung saat Discord membuat dorongan ambisius untuk merekrut lebih banyak pengguna dan memperluas cara mereka menggunakan aplikasi serbaguna itu. Discord mengatakan sedang bekerja sama dengan penegak hukum dalam penyelidikan kebocoran, yang diyakini telah dimulai di situs tersebut.</p><p>Dilansir dari Guardian, seorang anggota Garda Nasional Udara Massachusetts dilaporkan memposting di Discord selama bertahun-tahun tentang senjata, permainan, meme favorit dan, menurut beberapa orang yang mengobrol dengannya, rahasia AS yang dijaga ketat.</p><h4>Apa Itu Discord?</h4><p>Discord dimulai pada tahun 2015 sebagai tempat nongkrong online kutu buku untuk para gamer dan mengalami beberapa kendala dalam pencariannya untuk kesuksesan arus utama. Pertumbuhannya dipercepat selama pandemi Covid-19 sebagai forum bagi sebagian besar penggunanya yang lebih muda untuk bergosip atau bahkan saling membantu mengerjakan pekerjaan rumah. “Setiap bulan, lebih dari 150 juta orang datang ke Discord untuk berkumpul dengan keluarga, teman, dan komunitas,” kata salah satu pendiri dan CEO, Jason Citron, bulan lalu di sebuah acara pers. “Ini menjadi tempat di mana mereka bersenang-senang dan menyelesaikan sesuatu bersama,” tambahnya.</p><p>Pengguna Discord cenderung muda, sekitar 38 persen pengguna webnya dan hampir setengah dari pengguna aplikasi Android berusia antara 18 dan 24 tahun, menurut platform intelijen digital Similarweb.</p><p>Baru-baru ini, aplikasi tersebut juga menempatkan dirinya sebagai pintu gerbang ke alat kecerdasan buatan seperti Midjourney, yang memunculkan citra baru berdasarkan perintah yang diberikan dalam obrolan Discord. Discord mengumumkan pada bulan Januari bahwa mereka membeli aplikasi sosial lain yang berfokus pada remaja bernama Gas, yang memungkinkan orang untuk berbagi jajak pendapat online dan pujian yang menggembirakan. Pembelian tersebut merupakan bagian dari dorongan yang lebih besar untuk menargetkan komunitas di luar game, menurut analis Insider Intelligence Jeremy Goldman.</p><p>Discord dapat diakses melalui desktop, smartphone, atau konsol game seperti Xbox dan PlayStation. Ini memungkinkan pengguna untuk membuat \"server\" khusus undangan. Server, yang menyerupai platform perpesanan profesional Slack, memungkinkan pengguna untuk membuat subsaluran tempat mereka dapat berkomunikasi melalui obrolan teks, suara, atau video. Beberapa pengguna mungkin memiliki \"server teman\" dari beberapa lusin orang yang mereka kenal dalam kehidupan nyata. Sementara yang lain mungkin bergabung dengan server yang lebih besar yang dikhususkan untuk komunitas online orang-orang yang tertarik dengan topik tertentu.</p><p>Perusahaan menampung hampir 21.000 server, yang sebagian besar didedikasikan untuk bermain game.<br>Lainnya berfokus pada topik seperti AI generatif, hiburan, atau musik.</p>', '2023-04-14 19:26:25', 2),
(9, 'Geger Raja Salman Izinkan Patung &amp; Bangun &#039;Kabah&#039; Baru', 'sebuah-bendera-arab-saudi-berkibar.jpeg', '<p>Arab Saudi terus membuat perubahan yang dianggap tidak biasa bagi negara tersebut. Kini, salah satu negara petrodolar itu dinilai kerap membuat kebijakan yang mengubah citra konservatif negaranya.</p><p>Diketahui, perubahan kebijakan tersebut dilakukan Kerajaan Raja Salman bin Abdulaziz guna mewujudkan Visi Saudi 2023, yakni membebaskan Arab Saudi dari ketergantungan terhadap minyak dan menggantinya dengan sektor pariwisata.</p><p>Salah satu kebijakan radikal Arab Saudi adalah memperbolehkan patung-patung, bahkan memperbolehkan para seniman menggelar pameran hasil karya mereka.</p><p>Melansir dari <i>Middle East Mirror</i>, salah satu seniman keramik asal Saudi, Awatif Al-Keneibit, dilaporkan bisa memajang sejumlah karya patung dan tembikarnya di Riyadh, Arab Saudi. Patung-patung yang dipamerkan terlihat menggambarkan perempuan Arab Saudi dan memakai kacamata. Selain itu, patung-patung tersebut juga dikenakan gaun gurun tradisional Arab Saudi.</p><p>\"Siapa yang bisa membayangkan bahwa suatu hari, pameran yang berada di ruang bawah tanah ini dapat dipajang di Olaya (pusat kota Riyadh)?\" kata Awatif Al-Keneibit, dikutip dari <i>Reuters</i>, Minggu (23/4/2023).</p><p>\"Mereka dulu mengatakan kepada saya bahwa ini tidak mungkin ditampilkan karena dilarang dalam Islam. Sekarang [dipamerkan] di jantung kota Riyadh,\" tambahnya.</p><p>Keneibit melihat ini sebagai jalan bagi perempuan Arab Saudi untuk melakukan seni yang selama ini didominasi laki-laki. Seniman yang sempat menjalani pendidikan di Amerika Serikat (AS) ini mengatakan bahwa sebelumnya ia terpaksa membuat galeri pribadi di bagian bawah rumahnya khusus teman dan tamu karena larangan pada 2009.</p><p>\"Bagi saya, itu adalah dua kejutan. Satu sebelum dan satu lagi setelahnya,\" katanya.</p><p>\"Kami adalah generasi yang telah mengalami banyak perubahan, dari larangan total hingga keterbukaan total. insyaallah, kita akan mendapatkan keseimbangan,\" tambahnya.</p><p>Fenomena gelaran pameran ini menjadi titik balik kembalinya industri seni ke Arab Saudi setelah puluhan tahun pembatasan agama. Diketahui, sebelumnya Arab Saudi melarang patung dan ekspresi seni lainnya yang menciptakan citra atau bentuk manusia.</p><p>Larangan tersebut dibuat mengacu kepada penafsiran Islam Sunni yang ketat, termasuk doktrin Wahhabi tradisional Kerajaan yang menyerahkan kuasa penciptaan kepada Tuhan. Selain itu, ada pula yang mengatakan bahwa pelarangan itu juga karena dewa-dewa pagan yang disembah orang Arab di era pra-Islam.</p><p>Selain memperbolehkan patung-patung, pembangunan The Mukaab pun turut disorot oleh masyarakat dunia. The Mukaab adalah bangunan berbentuk kubus besar yang memanen banyak kritik dari umat Muslim seluruh dunia.</p><p>Melalui kritiknya, banyak dari mereka yang mengaitkannya dengan kekuasaan Putra Mahkota sekaligus Perdana Menteri Arab Saudi, Mohammed bin Salman (MBS) hingga membuat sejumlah pihak menilai pemerintah makin kapitalis.</p><p>Selain kekuasaan Mohammed bin Salman, proyek ini juga dikaitkan sebagai tanda-tanda kiamat oleh warganet. Salah satu warganet menyebutkan bahwa pembangunan gedung pencakar langit sebenarnya juga merupakan salah satu tanda-tanda kiamat.</p><p>\"Nabi Muhammad (SAW) mengatakan salah satu tanda kiamat adalah bahwa Anda akan melihat para gembala bersaing dalam membangun gedung-gedung tinggi,\" tulis salah pengguna Twitter, dikutip Minggu (23/4/2023).</p><p>Diketahui, Arab Saudi akan membangun pusat kota modern terbesar di dunia di ibu kota Riyadh. Proyek awal telah disahkan Putra Mahkota dan Perdana Menteri (PM) Arab Saudi, Mohammad bin Salman pada Februari 2023 lalu.</p><p>Pusat kota itu merupakan proyek teranyar Perusahaan pengembangan Murabba Baru (NMDC) yang didukung Dana Investasi Publik (PIF) Arab Saudi. Proyek yang langsung dipimpin MBS itu terletak di antara jalan Raja Salman dan Raja Khalid di barat laut Riyadh dan ditarget selesai</p><p>\"Salah satu yang menarik dari pengembangan ini adalah struktur Mukaab, yang digambarkan sebagai tujuan imersif pertama di dunia yang menawarkan pengalaman yang diciptakan oleh teknologi digital dan virtual dengan holografi terbaru,\" tulis <i>Business Traveler</i>.</p><p>\"Bentuk kubik Mukaab akan terinspirasi oleh gaya arsitektur Najdi modern, yang juga digunakan dalam pengembangan proyek giga Diriyah di Riyadh,\" tambah laporan tersebut.</p><p>Mukaab ini akan mencakup sebuah menara di atas landasan spiral. Sebuah struktur yang menampilkan luas lantai 2 juta meter persegi juga akan menjadi tujuan perhotelan premium, termasuk atraksi ritel, budaya, dan wisata.</p><p>Lalu, di dalamnya akan terdapat unit perumahan dan hotel, ruang komersial, dan rekreasi. Dilansir di laporan yang sama, proyek ini diharapkan bisa menggaet wisatawan mancanegara dan mendatangkan 180 miliar Saudi Real ke PDB non minyak kerajaan selain menciptakan 334 ribu pekerjaan langsung dan tidak langsung ke warga.</p>', '2023-04-25 22:20:54', 1),
(10, 'Sekuat Apa Prabowo, Ganjar dan Anies Menatap 2024? Survei Membuktikan', 'prabowo-ganjar-anies-dok-detikcom_169.png', '<p>Ketua Umum PDIP Megawati Soekarnoputri mengumumkan Gubernur Jawa Tengah Ganjar Pranowo sebagai calon presiden usungan PDIP untuk Pemilu 2024. Lantas seberapa kuat Ganjar yang baru saja diusung PDIP jika diadu dengan Ketua Umum Partai Gerindra Prabowo Subianto dan capres usungan Koalisi Perubahan, Anies Baswedan?<br>Sebagai informasi, pengumuman Ganjar capres PDIP disampaikan langsung oleh Megawati di Istana Batutulis, Bogor, Jawa Barat, Jumat (21/4). Pengumuman itu disampaikan di depan Presiden Joko Widodo (Jokowi) dan Ketua DPP PDIP Puan Maharani dan Prananda Prabowo.<br><br>\"Maka pada jam 13.45 dengan mengucapkan bismillahirrohmanirrohim, menetapkan saudara Ganjar pranowo, sekarang adalah Gubernur Jawa Tengah, sebagai kader dan petugas partai untuk ditingkatkan penugasannya sebagai calon Presiden Republik Indonesia dari Partai Demokrasi Indonesia Perjuangan,\" kata Megawati di Istana Batutulis, Bogor, Jawa Barat, Jumat (21/4/2023).<br><br>Namun demikian, belakangan, berdasarkan hasil survei beberapa lembaga survei, trend elektabilitas Ganjar Pranowo menurun. Hal itu disebabkan polemik batalnya Indonesia jadi tuan rumah Piala Duni U-20.<br><br>Lantas, seberapa kuat Ganjar jika diaduk dengan Prabowo dan Anies? Berikut ini rekam elektabilitas ketiganya versi beberapa lembaga survei.</p><h4>Indikator Politik Indonesia</h4><p>Lembaga survei Indikator Politik Indonesia merilis survei elektabilitas calon presiden 2024. Hasilnya, Ketum Partai Gerindra Prabowo Subianto memiliki elektabilitas tertinggi yakni 22,2 persen, diikuti oleh Gubernur Jawa Tengah Ganjar Pranowo dan capres Koalisi Perubahan Anies Baswedan.<br><br>Survei ini digelar pada 8 hingga 13 April 2023 terhadap 1.221 responden. Survei dilakukan dengan cara wawancara via telepon. Pemilihan sampel dilakukan dengan metode random digital dialing atau RDD. Adapun margin of error survei +/- 2,9% dengan tingkat kepercayaan 95%.<br><br>Indikator Politik Indonesia melakukan survei dengan pertanyaan tertutup dengan menyodorkan 19 nama. Hasilnya, nama Prabowo Subianto berada paling atas, diikuti Ganjar dan Anies Baswedan.<br><br>Berikut ini elektabilitas 19 nama capres:<br><br>Prabowo Subianto 22,2%<br>Ganjar Pranowo 19,8%<br>Anies Baswedan 15,9%<br>Ridwan Kamil 4,8%<br>AHY 3,1%<br>Mahfud Md 2,1%<br>Erick Thohir 2%<br>Sandiaga Uno 1,8%<br>Gibran Rakabuming 1,6%<br>Risma 1,4%<br>Maruf Amin 1,3%<br>Puan Maharani 1,2%<br>Airlangga Hartarto 1,2%<br>Cak Imin 0,5%<br>Khofifah I Parawansa 0,4%<br>Gatot Nurmantyo 0,4%<br>Budi Gunawan 0,3%<br>Bamsoet 0,1%<br>Tito Karnavian 0%<br>TT/TJ 19,9%<br>&nbsp;</p><h4>Politika Research and Consulting</h4><p>Politika Research and Consulting (PRC) merilis hasil survei elektabilitas jelang Pilpres 2024.Temuan survei PRC, Prabowo Subianto 22,5%, Ganjar Pranowo 20,2%, dan Anies Baswedan 17,9%.<br>Politika Research and Consulting merilis survei pada Rabu (19/4/2023). Pengambilan sampel dalam survei ini menggunakan metode multi stage random sampling.<br><br>Jumlah responden di tiap provinsi diambil secara proporsional berdasarkan data jumlah penduduk hasil sensus terakhir BPS 2020. Kriteria responden adalah masyarakat yang telah berusia minimal 17 tahun atau sudah menikah.<br><br>Jumlah responden yang ditargetkan sampel adalah sebanyak 1.220 orang. Namun, total responden dengan response rate 99% yang berhasil diwawancara adalah 1.210 orang, karena terdapat kendala teknis di lapangan.<br><br>Sampel representative jika selisih antara persentase sampel dengan populasi di bawah margin of error. Dengan sampel 1.210 responden, margin of error sebesar +- 2.73%.<br><br>Responden diberikan pertanyaan: Jika pemilihan presiden dan wakil presiden dilaksanakan pada hari ini. Siapakah yang akan bapak/ibu pilih sebagai Presiden Republik Indonesia?<br><br>Hasilnya:<br><br>Top of mind:<br><br>Prabowo Subianto 22,5%<br>Ganjar Pranowo 20,2%<br>Anies Baswedan 17,9%<br>Joko Widodo 3,8%<br>Ridwan Kamil 3,6%<br>Agus Harimurti Yudhoyono 1,2%<br>&nbsp;</p><h4>SMRC</h4><p>Saiful Mujani Research and Consulting (SMRC) melakukan survei elektabilitas bakal calon presiden (capres) pada Pilpres 2024. Hasilnya, Ganjar Pranowo yang sempat dikalahkan Prabowo Subianto, kembali ke posisi pertama.<br><br>Dilihat dari keterangan SMRC, Sabtu (15/4/2023), target populasi survei ini adalah warga negara Indonesia berusia 17 tahun ke atas atau sudah menikah dan memiliki telepon/cellphone, sekitar 79% dari total populasi nasional.<br><br>Pemilihan sampel dilakukan melalui metode random digit dialing (RDD), yaitu teknik memilih sampel melalui proses pembangkitan nomor telepon secara acak.<br><br>Dengan teknik RDD sampel sebanyak 1.216 responden dipilih melalui proses pembangkitan nomor telepon secara acak, validasi, dan screening. Margin of error survei diperkirakan ±2.9% pada tingkat kepercayaan 95%, asumsi simple random sampling. Survei dilakukan pada 11-14 April 2023.<br><br>Dalam simulasi top of mind, atau pilihan yang pertama kali muncul, Kader PDIP Ganjar mendapat dukungan tertinggi. Ganjar menang tipis atas Ketua Gerindra Prabowo Subianto. Kemudian, di posisi ketiga ada Anies Baswedan yang didukung oleh Koalisi Perubahan.<br><br>Berikut perolehan elektabilitas masing-masing capres:<br><br>Ganjar: 16,5%<br>Prabowo: 16,3%<br>Anies Baswedan: 9,8%<br>Joko Widodo: 9.2%<br>Ridwan Kamil: 1,6%<br>Belum menjawab: 42,2%</p>', '2023-04-27 02:22:46', 1),
(11, 'Rusia Sambut Komunikasi China-Ukraina, tapi Target Serangan Tak Berubah', '644a62558f533.jpg', '<p>Juru bicara Kremlin Dmitry Peskov mengatakan, Pemerintah Rusia menyambut baik semua hal yang dapat mengakhiri konflik Ukraina termasuk komunikasi antara Presiden China <a href=\"https://www.tempo.co/tag/xi-jinping\"><strong>Xi Jinping</strong></a> dan Presiden Ukraina Volodymyr Zelensky melalui telepon Rabu lalu, 26 April 2023.</p><p>Tetapi ia mengatakan, Kremlin kukuh akan melanjutkan \"operasi militer khusus\" di <a href=\"https://www.tempo.co/tag/ukraina\"><strong>Ukraina </strong></a>sampai tujuan mereka tercapai. Target Rusia di anytaranya membebaskan penutur bahasa Rusia di Donbas.</p><p>Pemimpin China dan Ukraina berbicara untuk pertama kalinya sejak Rusia mengirim pasukannya ke Ukraina pada Februari tahun lalu, memenuhi tujuan lama Kyiv yang telah secara terbuka meminta pembicaraan semacam itu selama berbulan-bulan.</p><p>Peskov mengatakan Rusia mengetahui detail diskusi kedua pemimpin itu dan menyatakan sikap mereka terhadap konflik tersebut sudah diketahui dengan baik.</p><p>\"Kami siap menyambut apa pun yang dapat mempercepat akhir konflik di Ukraina dan Rusia untuk mencapai semua tujuan yang telah ditetapkan sendiri,\" kata Peskov tentang panggilan telepon mereka.</p><p>\"Adapun fakta bahwa mereka berkomunikasi - itu adalah masalah kedaulatan masing-masing negara ini dan masalah dialog bilateral mereka.\"</p><p>Ditanya apakah Rusia dan <a href=\"https://www.tempo.co/tag/china\"><strong>China </strong></a>telah membahas pemulihan Ukraina ke perbatasan tahun 1991 ketika Uni Soviet dibubarkan, selama kunjungan Xi Jinping baru-baru ini ke Moskow, Peskov mengatakan: \"Tidak ada pembahasan tentang itu.\"</p>', '2023-04-27 18:53:57', 2),
(12, 'Disodorkan Sebagai Cawapres Ganjar Pranowo, Yaqut Cholil Qoumas tegaskan Fokus Sebagai Menag', '644b65860e2db.jpg', '<p>Menteri Agama Yaqut Cholil Qoumas menanggapi upaya pengusungan dirinya untuk mendampingi Gubernur Jawa Tengah <strong>Ganjar Pranowo</strong> sebagai calon presiden (Capres) dan calon wakil presiden (Cawapres) pada Pemilihan Presiden (Pilpres) 2024. Yaqut menyatakan dirinya fokus menjalankan tugasnya sebagai Menteri Agama.</p><p>Gus Yaqut, sapaannya, mengaku tidak pernah terpikir untuk ikut serta dalam ajang kontestasi <strong>Pilpres 2024</strong>. Ia menyebut saat ini prioritasnya adalah menjalankan amanah dari Presiden Jokowi sebagai Menteri Agama.</p><p>“Sampai detik ini yang ada di dalam benak saya adalah bagaimana mengemban amanah yang diberikan pak Presiden Jokowi dengan sebaik-baiknya. Sebagai pembantu beliau, saya hanya tegak lurus kepada Presiden Jokowi,” kata Yaqut melalui keterangan tertulisnya, Jum’at, 28 April 2023.</p><p>Selain itu, <strong>Yaqut Cholil Quomas</strong> menyatakan telah berkomitmen untuk menjalankan tugas sebagai Menteri Agama hingga masa tugasnya berakhir. Ia menyebut dirinya tidak akan mendaftar menjadi calon legislatif sebagai bentuk komitmennya tersebut.</p><p>“Saya hanya ingin berfokus dan tidak terbagi-bagi. Sejak awal, ketika diberi mandat ini oleh presiden pada Desember 2020, saya pribadi sudah berjanji mengemban tugas sebagai Menag sampai akhir,” ujarnya.&nbsp;</p><h4><strong>Terima kasih atas dukungan untuk menjadi pendamping Ganjar</strong></h4><p>Meski begitu, Gus Yaqut berterimakasih kepada pihak yang menyodorkan namanya sebagai calon pendamping Ganjar Pranowo. Ia menyebut hal itu sebagai bagian dinamika kehidupan demokrasi suatu negara.</p><p>“Sekali lagi, terimakasih dukungannya seperti sahabat-sahabat dari GMPI. Saya yakin Indonesia memiliki stok pemimpin muda berkualitas dan berpengalaman,” kata Yaqut.&nbsp;</p><p>Dukungan terhadap Yaqut Cholil Quomas untuk menjadi Cawapres Ganjar Pranowo datang dari Generasi Muda Pembangunan Indonesia (GMPI) yang merupakan sayap pemuda Partai Persatuan Pembangunan (PPP).&nbsp; Mereka menilai Yaqut sebagai salah satu sosok muda <strong>Nahdlatul Ulama</strong> yang cocok untuk mendampingi Ganjar.</p><p>Selain Yaqut, GMPI juga menyodorkan nama Sandiaga Uno. Pengusaha sekaligus politikus yang baru pamit dari Partai Gerindra itu disebut akan merapat ke PPP.&nbsp;</p><p>PPP sendiri telah memastikan mengusung Ganjar Pranowo sebagai calon presiden mereka pada Pilpres 2024. Keputusan itu dibuat berdasarkan rapat pimpinan nasional PPP di Yogyakarta pada 25-26 April 2023. Pelaksana tugas <strong>PPP</strong>, Muhammad Mardiono, menyatakan mereka akan segera berkomunikasi dengan PDIP sebagai partai yang menaungi Ganjar.&nbsp;</p>', '2023-04-28 13:19:50', 2);

-- --------------------------------------------------------

--
-- Table structure for table `popularity`
--

CREATE TABLE `popularity` (
  `article_id` int(11) NOT NULL,
  `daily` int(11) NOT NULL DEFAULT 0,
  `monthly` int(11) NOT NULL DEFAULT 0,
  `update_data` date NOT NULL DEFAULT current_timestamp(),
  `lifetime` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `popularity`
--

INSERT INTO `popularity` (`article_id`, `daily`, `monthly`, `update_data`, `lifetime`) VALUES
(1, 0, 24, '2023-05-03', 29),
(2, 0, 1, '2023-05-03', 5),
(3, 1, 9, '2023-05-03', 12),
(5, 0, 2, '2023-05-03', 3),
(6, 0, 0, '2023-05-03', 1),
(7, 0, 0, '2023-05-03', 2),
(8, 3, 3, '2023-05-03', 8),
(9, 0, 0, '2023-05-03', 2),
(10, 1, 2, '2023-05-03', 20),
(11, 1, 54, '2023-05-03', 57),
(12, 0, 23, '2023-05-03', 36);

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
  `img` varchar(50) NOT NULL DEFAULT 'no-profile.png',
  `first_name` varchar(10) NOT NULL,
  `last_name` varchar(10) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` char(1) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_role` int(11) NOT NULL DEFAULT 3
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `img`, `first_name`, `last_name`, `birthdate`, `gender`, `username`, `email`, `password`, `id_role`) VALUES
(1, 'no-profile.png', 'Narapati', 'Anandi', '2004-02-24', 'M', 'lio_keysa24', 'narapatikeysa00@gmail.com', 'smpn1bdg', 1),
(2, 'no-profile.png', 'Catherine', 'Nathania', '2004-07-16', 'F', 'catherinenathania16', 'catherinenathania16@gmail.com', 'apayahlupa1', 2),
(3, 'no-profile.png', 'Fellyvia', 'Marshanda', '2004-03-25', 'F', 'fllymrs_', 'fellyviamarshanda25@gmail.com', 'smpn1bdg', 3);

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
-- Indexes for table `popularity`
--
ALTER TABLE `popularity`
  ADD KEY `article_id` (`article_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `popularity`
--
ALTER TABLE `popularity`
  ADD CONSTRAINT `popularity_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
