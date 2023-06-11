-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2023 at 04:24 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubespw2023`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int NOT NULL,
  `title` varchar(500) CHARACTER SET utf8mb4 NOT NULL,
  `img` varchar(50) NOT NULL,
  `shortContent` varchar(500) NOT NULL,
  `content` text NOT NULL,
  `keyword_category` varchar(255) NOT NULL,
  `insert_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int NOT NULL,
  `visibility_id` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `img`, `shortContent`, `content`, `keyword_category`, `insert_date`, `user_id`, `visibility_id`) VALUES
(1, 'Counter-Strike 2 Resmi Diumumkan, Valve Bakal Rilis CS2 Musim Panas 2023', 'counter_strike_2.jpg', 'Valve secara resmi mengumumkan bakal merilis game terbaru dari seri Counter-Strike andalan', '&lt;p&gt;Valve secara resmi mengumumkan bakal merilis game terbaru dari seri Counter-Strike andalan mereka, dengan judul Counter-Strike 2. Bakal menjadi pengganti dari CS:GO atau Counter-Strike: Global Offensive, yang selama ini sudah dimainkan para gamer, Counter-Strike atau CS2, direncanakan untuk rilis pada musim panas tahun 2023 ini. Melalui laman resmi untuk CS2, Kamis (23/3/2023), Valve menyebut game ini sebagai &quot;lompatan teknis terbesar dalam sejarah Counter-Strike, memastikan fitur dan pembaruan baru untuk tahun-tahun mendatang.&quot; Valve baru akan mengungkap semua fitur-fitur game-nya dalam perilisan musim panas mendatang. Namun, CS2 sudah memulai Limited Test atau tes secara terbatas, bagi beberapa pemain yang terpilih. Selama uji coba terbatas ini, Valve baru akan mengevaluasi sekumpulan fitur, untuk nantinya menghilangkan masalah yang ada sebelum diluncurkan secara resmi. Selain itu, Counter-Strike 2 juga akan dirilis sebagai upgrade gratis dari CS:GO. Dikutip dari IGN, pemain item-item yang sudah dimiliki oleh pemain di CS:GO, juga akan dibawa ke CS2. Ada beberapa fitur yang disorot oleh Valve, melalui beberapa video yang mereka unggah di situs CS2. Misalnya mengenai &quot;peta yang ditingkatkan dan dirombak&quot;, granat asap yang bisa &quot;mengubah permainan&quot;, dan efek visual serta audio yang didesain ulang. Valve mengatakan, seluruh map di CS2 dirombak dan sudah digarap kembali sepenuhnya dari dasar ke atas, &quot;memanfaatkan semua alat Source 2 dan fitur rendering.&quot;&lt;/p&gt;', 'games', '2023-03-29 01:17:18', 1, 3),
(2, 'Kata FIFA soal Wacana Piala Dunia U-20 Batal Digelar di Indonesia', 'piala-dunia-u-20-2023.png', 'Status Indonesia sebagai tuan rumah Piala Dunia U-20 2023 sedang disorot. Ada potensi ajang tersebut batal digelar di Tanah Air. Apa respons FIFA?', 'Status Indonesia sebagai tuan rumah Piala Dunia U-20 2023 sedang disorot. Ada potensi ajang tersebut batal digelar di Tanah Air. Apa respons FIFA?\n\nStatus tuan rumah Indonesia untuk menggelar Piala Dunia U-20 2023, yang digelar Mei mendatang, ramai dibahas. Penyebabnya adalah batalnya acara drawing yang sedianya digelar di Bali akhir bulan ini.\n\nDengan batalnya acara drawing, kini status tuan rumah Indonesia jadi ikut disorot. PSSI mengatakan ada \'potensi\' terkena sanksi berat andai Indonesia akhirnya batal menyelenggarakan Piala Dunia U-20 2023.', 'sport', '2023-03-29 02:36:16', 1, 3),
(3, 'FIFA menghapus Indonesia sebagai tuan rumah FIFA U-20', 'Host-REMOVE-FIFA-U-20-World-Cup.webp', 'Menyusul pertemuan hari ini antara Presiden FIFA Gianni Infantino dan Presiden Persatuan Sepak Bola Seluruh Indonesia (PSSI) Erick Thohir, FIFA telah memutuskan, karena keadaan saat ini, untuk menghapus Indonesia sebagai tuan rumah FIFA U-20 World Cup 2023™. Tuan rumah baru akan diumumkan sesegera mungkin, dengan tanggal turnamen saat ini tetap tidak berubah. Potensi sanksi terhadap PSSI juga dapat diputuskan pada tahap selanjutnya.', 'Menyusul pertemuan hari ini antara Presiden FIFA Gianni Infantino dan Presiden Persatuan Sepak Bola Seluruh Indonesia (PSSI) Erick Thohir, FIFA telah memutuskan, karena keadaan saat ini, untuk menghapus Indonesia sebagai tuan rumah FIFA U-20 World Cup 2023™. Tuan rumah baru akan diumumkan sesegera mungkin, dengan tanggal turnamen saat ini tetap tidak berubah. Potensi sanksi terhadap PSSI juga dapat diputuskan pada tahap selanjutnya.\n\nFIFA ingin menggarisbawahi bahwa terlepas dari keputusan tersebut, tetap berkomitmen untuk aktif membantu PSSI, bekerja sama erat dan dengan dukungan pemerintahan Presiden Widodo, dalam proses transformasi sepakbola Indonesia pascatragedi yang terjadi pada Oktober 2022. Anggota tim FIFA akan terus hadir di Indonesia dalam beberapa bulan mendatang dan akan memberikan bantuan yang dibutuhkan kepada PSSI, di bawah kepemimpinan Presiden Thohir.\n\nPertemuan baru antara Presiden FIFA dan Presiden PSSI untuk pembahasan lebih lanjut akan dijadwalkan dalam waktu dekat.', 'sport', '2023-03-30 00:02:37', 1, 3),
(5, 'Ganjar dan Koster &#039;Dirujak&#039; Netizen, PDIP Pasang Badan', 'ganjar-dirujak.jpeg', 'Politisi PDIP, Adian Napitupulu menyebut batalnya gelaran Piala Dunia U-20 di Indonesia bu', '&lt;p&gt;Politisi PDIP, Adian Napitupulu menyebut batalnya gelaran Piala Dunia U-20 di Indonesia bukan karena penolakan dari Ganjar Pranowo dan I Wayan Koster. Ia menilai ada sesuatu yang memiliki tingkat kebahayaan lebih dari pada pernyataan kedua gubernur tersebut.&lt;br&gt;&lt;br&gt;&quot;Banyak orang berfikir batalnya karena selembar surat dari gubernur Koster atau gubernur Ganjar menurut saya enggak. Ada peristiwa lain yang mungkin tidak dikemukakan yang saya pikir jauh lebih punya nilai kebahayaan,&quot; ujar Adian Napitupulu.&lt;br&gt;&lt;br&gt;Ganjar Pranomo menjadi sasaran publik melampiaskan rasa kecewa atas batalnya Indonesia jadi tuan rumah Piala Dunia U-20. Hal ini dikarenakan Ganjar adalah salah seorang yang membuat gaduh dengan menolak kedatangan Timnas Israel.&amp;nbsp;&lt;br&gt;&lt;br&gt;Gubernur Jawa Tengah ini mengaku juga kecewa terhadap putusan FIFA. Ia berharap para pesepakbola Timnas U-20 Indonesia tetap semangat.&amp;nbsp;&lt;/p&gt;', 'olahraga politik', '0000-00-00 00:00:00', 1, 3),
(7, 'Timnas Indonesia U-20 Resmi Dibubarkan', 'timnas-u-20-indonesia.jpeg', 'Jakarta, CNN Indonesia -- Timnas Indonesia U-20&nbsp;resmi dibubarkan pada Sabtu (1/4), setelah Indonesia batal menggelar Piala Dunia U-20 2023.', '<p>Jakarta, CNN Indonesia -- Timnas Indonesia U-20&nbsp;resmi dibubarkan pada Sabtu (1/4), setelah Indonesia batal menggelar Piala Dunia U-20 2023.<br>Kepastian itu disampaikan Shin Tae Yong dalam sesi latihan bersama Timnas Indonesia U-20 dan Timnas Indonesia U-22 di Stadion Utama Gelora Bung Karno (SUGBK) Jakarta, Sabtu (1/4) sore.<br><br>\"Setelah ini akan dibubarkan para pemain [Timnas Indonesia U-20] dan semua [pihak di tim] yang mempersiapkan Piala Dunia U-20 kemarin,\" kata Shin Tae Yong.<br><br>Jakarta, CNN Indonesia -- Timnas Indonesia U-20&nbsp;resmi dibubarkan pada Sabtu (1/4), setelah Indonesia batal menggelar Piala Dunia U-20 2023.<br>Kepastian itu disampaikan Shin Tae Yong dalam sesi latihan bersama Timnas Indonesia U-20 dan Timnas Indonesia U-22 di Stadion Utama Gelora Bung Karno (SUGBK) Jakarta, Sabtu (1/4) sore.<br><br>\"Setelah ini akan dibubarkan para pemain [Timnas Indonesia U-20] dan semua [pihak di tim] yang mempersiapkan Piala Dunia U-20 kemarin,\" kata Shin Tae Yong.</p>', '', '2023-04-01 19:18:06', 2, 3),
(8, 'Seluk Beluk Discord, Aplikasi Obrolan Terkait Kebocoran Data AS', 'seluk-beluk-discord.png', 'WASHINGTON DC, KOMPAS.com - Aplikasi obrolan Discord, yang merupakan salah satu cara paling populer para gamer berkomunikasi secara online, berada di pusat penyelidikan atas kebocoran dokumen rahasia tentang perang di Ukraina.', '<p>WASHINGTON DC, KOMPAS.com - Aplikasi obrolan Discord, yang merupakan salah satu cara paling populer para gamer berkomunikasi secara online, berada di pusat penyelidikan atas kebocoran dokumen rahasia tentang perang di Ukraina. Investigasi sedang berlangsung saat Discord membuat dorongan ambisius untuk merekrut lebih banyak pengguna dan memperluas cara mereka menggunakan aplikasi serbaguna itu. Discord mengatakan sedang bekerja sama dengan penegak hukum dalam penyelidikan kebocoran, yang diyakini telah dimulai di situs tersebut.</p><p>Dilansir dari Guardian, seorang anggota Garda Nasional Udara Massachusetts dilaporkan memposting di Discord selama bertahun-tahun tentang senjata, permainan, meme favorit dan, menurut beberapa orang yang mengobrol dengannya, rahasia AS yang dijaga ketat.</p><h4>Apa Itu Discord?</h4><p>Discord dimulai pada tahun 2015 sebagai tempat nongkrong online kutu buku untuk para gamer dan mengalami beberapa kendala dalam pencariannya untuk kesuksesan arus utama. Pertumbuhannya dipercepat selama pandemi Covid-19 sebagai forum bagi sebagian besar penggunanya yang lebih muda untuk bergosip atau bahkan saling membantu mengerjakan pekerjaan rumah. “Setiap bulan, lebih dari 150 juta orang datang ke Discord untuk berkumpul dengan keluarga, teman, dan komunitas,” kata salah satu pendiri dan CEO, Jason Citron, bulan lalu di sebuah acara pers. “Ini menjadi tempat di mana mereka bersenang-senang dan menyelesaikan sesuatu bersama,” tambahnya.</p><p>Pengguna Discord cenderung muda, sekitar 38 persen pengguna webnya dan hampir setengah dari pengguna aplikasi Android berusia antara 18 dan 24 tahun, menurut platform intelijen digital Similarweb.</p><p>Baru-baru ini, aplikasi tersebut juga menempatkan dirinya sebagai pintu gerbang ke alat kecerdasan buatan seperti Midjourney, yang memunculkan citra baru berdasarkan perintah yang diberikan dalam obrolan Discord. Discord mengumumkan pada bulan Januari bahwa mereka membeli aplikasi sosial lain yang berfokus pada remaja bernama Gas, yang memungkinkan orang untuk berbagi jajak pendapat online dan pujian yang menggembirakan. Pembelian tersebut merupakan bagian dari dorongan yang lebih besar untuk menargetkan komunitas di luar game, menurut analis Insider Intelligence Jeremy Goldman.</p><p>Discord dapat diakses melalui desktop, smartphone, atau konsol game seperti Xbox dan PlayStation. Ini memungkinkan pengguna untuk membuat \"server\" khusus undangan. Server, yang menyerupai platform perpesanan profesional Slack, memungkinkan pengguna untuk membuat subsaluran tempat mereka dapat berkomunikasi melalui obrolan teks, suara, atau video. Beberapa pengguna mungkin memiliki \"server teman\" dari beberapa lusin orang yang mereka kenal dalam kehidupan nyata. Sementara yang lain mungkin bergabung dengan server yang lebih besar yang dikhususkan untuk komunitas online orang-orang yang tertarik dengan topik tertentu.</p><p>Perusahaan menampung hampir 21.000 server, yang sebagian besar didedikasikan untuk bermain game.<br>Lainnya berfokus pada topik seperti AI generatif, hiburan, atau musik.</p>', '', '2023-04-14 19:26:25', 2, 3),
(9, 'Geger Raja Salman Izinkan Patung & Bangun \'Kabah\' Baru', 'sebuah-bendera-arab-saudi-berkibar.jpeg', 'Arab Saudi terus membuat perubahan yang dianggap tidak biasa bagi negara tersebut. Kini, salah satu negara petrodolar itu dinilai kerap membuat kebijakan yang mengubah citra konservatif negaranya.', '<p>Arab Saudi terus membuat perubahan yang dianggap tidak biasa bagi negara tersebut. Kini, salah satu negara petrodolar itu dinilai kerap membuat kebijakan yang mengubah citra konservatif negaranya.</p><p>Diketahui, perubahan kebijakan tersebut dilakukan Kerajaan Raja Salman bin Abdulaziz guna mewujudkan Visi Saudi 2023, yakni membebaskan Arab Saudi dari ketergantungan terhadap minyak dan menggantinya dengan sektor pariwisata.</p><p>Salah satu kebijakan radikal Arab Saudi adalah memperbolehkan patung-patung, bahkan memperbolehkan para seniman menggelar pameran hasil karya mereka.</p><p>Melansir dari <i>Middle East Mirror</i>, salah satu seniman keramik asal Saudi, Awatif Al-Keneibit, dilaporkan bisa memajang sejumlah karya patung dan tembikarnya di Riyadh, Arab Saudi. Patung-patung yang dipamerkan terlihat menggambarkan perempuan Arab Saudi dan memakai kacamata. Selain itu, patung-patung tersebut juga dikenakan gaun gurun tradisional Arab Saudi.</p><p>\"Siapa yang bisa membayangkan bahwa suatu hari, pameran yang berada di ruang bawah tanah ini dapat dipajang di Olaya (pusat kota Riyadh)?\" kata Awatif Al-Keneibit, dikutip dari <i>Reuters</i>, Minggu (23/4/2023).</p><p>\"Mereka dulu mengatakan kepada saya bahwa ini tidak mungkin ditampilkan karena dilarang dalam Islam. Sekarang [dipamerkan] di jantung kota Riyadh,\" tambahnya.</p><p>Keneibit melihat ini sebagai jalan bagi perempuan Arab Saudi untuk melakukan seni yang selama ini didominasi laki-laki. Seniman yang sempat menjalani pendidikan di Amerika Serikat (AS) ini mengatakan bahwa sebelumnya ia terpaksa membuat galeri pribadi di bagian bawah rumahnya khusus teman dan tamu karena larangan pada 2009.</p><p>\"Bagi saya, itu adalah dua kejutan. Satu sebelum dan satu lagi setelahnya,\" katanya.</p><p>\"Kami adalah generasi yang telah mengalami banyak perubahan, dari larangan total hingga keterbukaan total. insyaallah, kita akan mendapatkan keseimbangan,\" tambahnya.</p><p>Fenomena gelaran pameran ini menjadi titik balik kembalinya industri seni ke Arab Saudi setelah puluhan tahun pembatasan agama. Diketahui, sebelumnya Arab Saudi melarang patung dan ekspresi seni lainnya yang menciptakan citra atau bentuk manusia.</p><p>Larangan tersebut dibuat mengacu kepada penafsiran Islam Sunni yang ketat, termasuk doktrin Wahhabi tradisional Kerajaan yang menyerahkan kuasa penciptaan kepada Tuhan. Selain itu, ada pula yang mengatakan bahwa pelarangan itu juga karena dewa-dewa pagan yang disembah orang Arab di era pra-Islam.</p><p>Selain memperbolehkan patung-patung, pembangunan The Mukaab pun turut disorot oleh masyarakat dunia. The Mukaab adalah bangunan berbentuk kubus besar yang memanen banyak kritik dari umat Muslim seluruh dunia.</p><p>Melalui kritiknya, banyak dari mereka yang mengaitkannya dengan kekuasaan Putra Mahkota sekaligus Perdana Menteri Arab Saudi, Mohammed bin Salman (MBS) hingga membuat sejumlah pihak menilai pemerintah makin kapitalis.</p><p>Selain kekuasaan Mohammed bin Salman, proyek ini juga dikaitkan sebagai tanda-tanda kiamat oleh warganet. Salah satu warganet menyebutkan bahwa pembangunan gedung pencakar langit sebenarnya juga merupakan salah satu tanda-tanda kiamat.</p><p>\"Nabi Muhammad (SAW) mengatakan salah satu tanda kiamat adalah bahwa Anda akan melihat para gembala bersaing dalam membangun gedung-gedung tinggi,\" tulis salah pengguna Twitter, dikutip Minggu (23/4/2023).</p><p>Diketahui, Arab Saudi akan membangun pusat kota modern terbesar di dunia di ibu kota Riyadh. Proyek awal telah disahkan Putra Mahkota dan Perdana Menteri (PM) Arab Saudi, Mohammad bin Salman pada Februari 2023 lalu.</p><p>Pusat kota itu merupakan proyek teranyar Perusahaan pengembangan Murabba Baru (NMDC) yang didukung Dana Investasi Publik (PIF) Arab Saudi. Proyek yang langsung dipimpin MBS itu terletak di antara jalan Raja Salman dan Raja Khalid di barat laut Riyadh dan ditarget selesai</p><p>\"Salah satu yang menarik dari pengembangan ini adalah struktur Mukaab, yang digambarkan sebagai tujuan imersif pertama di dunia yang menawarkan pengalaman yang diciptakan oleh teknologi digital dan virtual dengan holografi terbaru,\" tulis <i>Business Traveler</i>.</p><p>\"Bentuk kubik Mukaab akan terinspirasi oleh gaya arsitektur Najdi modern, yang juga digunakan dalam pengembangan proyek giga Diriyah di Riyadh,\" tambah laporan tersebut.</p><p>Mukaab ini akan mencakup sebuah menara di atas landasan spiral. Sebuah struktur yang menampilkan luas lantai 2 juta meter persegi juga akan menjadi tujuan perhotelan premium, termasuk atraksi ritel, budaya, dan wisata.</p><p>Lalu, di dalamnya akan terdapat unit perumahan dan hotel, ruang komersial, dan rekreasi. Dilansir di laporan yang sama, proyek ini diharapkan bisa menggaet wisatawan mancanegara dan mendatangkan 180 miliar Saudi Real ke PDB non minyak kerajaan selain menciptakan 334 ribu pekerjaan langsung dan tidak langsung ke warga.</p>', '', '2023-04-25 22:20:54', 1, 3),
(10, 'Sekuat Apa Prabowo, Ganjar dan Anies Menatap 2024?', 'prabowo-ganjar-anies-dok-detikcom_169.png', 'Ketua Umum PDIP Megawati Soekarnoputri mengumumkan Gubernur Jawa Tengah Ganjar Pranowo sebagai calon presiden usungan PDIP untuk Pemilu 2024. ', '<p>Ketua Umum PDIP Megawati Soekarnoputri mengumumkan Gubernur Jawa Tengah Ganjar Pranowo sebagai calon presiden usungan PDIP untuk Pemilu 2024. Lantas seberapa kuat Ganjar yang baru saja diusung PDIP jika diadu dengan Ketua Umum Partai Gerindra Prabowo Subianto dan capres usungan Koalisi Perubahan, Anies Baswedan?<br>Sebagai informasi, pengumuman Ganjar capres PDIP disampaikan langsung oleh Megawati di Istana Batutulis, Bogor, Jawa Barat, Jumat (21/4). Pengumuman itu disampaikan di depan Presiden Joko Widodo (Jokowi) dan Ketua DPP PDIP Puan Maharani dan Prananda Prabowo.<br><br>\"Maka pada jam 13.45 dengan mengucapkan bismillahirrohmanirrohim, menetapkan saudara Ganjar pranowo, sekarang adalah Gubernur Jawa Tengah, sebagai kader dan petugas partai untuk ditingkatkan penugasannya sebagai calon Presiden Republik Indonesia dari Partai Demokrasi Indonesia Perjuangan,\" kata Megawati di Istana Batutulis, Bogor, Jawa Barat, Jumat (21/4/2023).<br><br>Namun demikian, belakangan, berdasarkan hasil survei beberapa lembaga survei, trend elektabilitas Ganjar Pranowo menurun. Hal itu disebabkan polemik batalnya Indonesia jadi tuan rumah Piala Duni U-20.<br><br>Lantas, seberapa kuat Ganjar jika diaduk dengan Prabowo dan Anies? Berikut ini rekam elektabilitas ketiganya versi beberapa lembaga survei.</p><h4>Indikator Politik Indonesia</h4><p>Lembaga survei Indikator Politik Indonesia merilis survei elektabilitas calon presiden 2024. Hasilnya, Ketum Partai Gerindra Prabowo Subianto memiliki elektabilitas tertinggi yakni 22,2 persen, diikuti oleh Gubernur Jawa Tengah Ganjar Pranowo dan capres Koalisi Perubahan Anies Baswedan.<br><br>Survei ini digelar pada 8 hingga 13 April 2023 terhadap 1.221 responden. Survei dilakukan dengan cara wawancara via telepon. Pemilihan sampel dilakukan dengan metode random digital dialing atau RDD. Adapun margin of error survei +/- 2,9% dengan tingkat kepercayaan 95%.<br><br>Indikator Politik Indonesia melakukan survei dengan pertanyaan tertutup dengan menyodorkan 19 nama. Hasilnya, nama Prabowo Subianto berada paling atas, diikuti Ganjar dan Anies Baswedan.<br><br>Berikut ini elektabilitas 19 nama capres:<br><br>Prabowo Subianto 22,2%<br>Ganjar Pranowo 19,8%<br>Anies Baswedan 15,9%<br>Ridwan Kamil 4,8%<br>AHY 3,1%<br>Mahfud Md 2,1%<br>Erick Thohir 2%<br>Sandiaga Uno 1,8%<br>Gibran Rakabuming 1,6%<br>Risma 1,4%<br>Maruf Amin 1,3%<br>Puan Maharani 1,2%<br>Airlangga Hartarto 1,2%<br>Cak Imin 0,5%<br>Khofifah I Parawansa 0,4%<br>Gatot Nurmantyo 0,4%<br>Budi Gunawan 0,3%<br>Bamsoet 0,1%<br>Tito Karnavian 0%<br>TT/TJ 19,9%<br>&nbsp;</p><h4>Politika Research and Consulting</h4><p>Politika Research and Consulting (PRC) merilis hasil survei elektabilitas jelang Pilpres 2024.Temuan survei PRC, Prabowo Subianto 22,5%, Ganjar Pranowo 20,2%, dan Anies Baswedan 17,9%.<br>Politika Research and Consulting merilis survei pada Rabu (19/4/2023). Pengambilan sampel dalam survei ini menggunakan metode multi stage random sampling.<br><br>Jumlah responden di tiap provinsi diambil secara proporsional berdasarkan data jumlah penduduk hasil sensus terakhir BPS 2020. Kriteria responden adalah masyarakat yang telah berusia minimal 17 tahun atau sudah menikah.<br><br>Jumlah responden yang ditargetkan sampel adalah sebanyak 1.220 orang. Namun, total responden dengan response rate 99% yang berhasil diwawancara adalah 1.210 orang, karena terdapat kendala teknis di lapangan.<br><br>Sampel representative jika selisih antara persentase sampel dengan populasi di bawah margin of error. Dengan sampel 1.210 responden, margin of error sebesar +- 2.73%.<br><br>Responden diberikan pertanyaan: Jika pemilihan presiden dan wakil presiden dilaksanakan pada hari ini. Siapakah yang akan bapak/ibu pilih sebagai Presiden Republik Indonesia?<br><br>Hasilnya:<br><br>Top of mind:<br><br>Prabowo Subianto 22,5%<br>Ganjar Pranowo 20,2%<br>Anies Baswedan 17,9%<br>Joko Widodo 3,8%<br>Ridwan Kamil 3,6%<br>Agus Harimurti Yudhoyono 1,2%<br>&nbsp;</p><h4>SMRC</h4><p>Saiful Mujani Research and Consulting (SMRC) melakukan survei elektabilitas bakal calon presiden (capres) pada Pilpres 2024. Hasilnya, Ganjar Pranowo yang sempat dikalahkan Prabowo Subianto, kembali ke posisi pertama.<br><br>Dilihat dari keterangan SMRC, Sabtu (15/4/2023), target populasi survei ini adalah warga negara Indonesia berusia 17 tahun ke atas atau sudah menikah dan memiliki telepon/cellphone, sekitar 79% dari total populasi nasional.<br><br>Pemilihan sampel dilakukan melalui metode random digit dialing (RDD), yaitu teknik memilih sampel melalui proses pembangkitan nomor telepon secara acak.<br><br>Dengan teknik RDD sampel sebanyak 1.216 responden dipilih melalui proses pembangkitan nomor telepon secara acak, validasi, dan screening. Margin of error survei diperkirakan ±2.9% pada tingkat kepercayaan 95%, asumsi simple random sampling. Survei dilakukan pada 11-14 April 2023.<br><br>Dalam simulasi top of mind, atau pilihan yang pertama kali muncul, Kader PDIP Ganjar mendapat dukungan tertinggi. Ganjar menang tipis atas Ketua Gerindra Prabowo Subianto. Kemudian, di posisi ketiga ada Anies Baswedan yang didukung oleh Koalisi Perubahan.<br><br>Berikut perolehan elektabilitas masing-masing capres:<br><br>Ganjar: 16,5%<br>Prabowo: 16,3%<br>Anies Baswedan: 9,8%<br>Joko Widodo: 9.2%<br>Ridwan Kamil: 1,6%<br>Belum menjawab: 42,2%</p>', '', '2023-04-27 02:22:46', 1, 3),
(11, 'Rusia Sambut Komunikasi China-Ukraina, tapi Target Serangan Tak Berubah', '644a62558f533.jpg', 'Juru bicara Kremlin Dmitry Peskov mengatakan, Pemerintah Rusia menyambut baik semua hal yang dapat mengakhiri konflik Ukraina termasuk komunikasi antara Presiden China Xi Jinping dan Presiden Ukraina Volodymyr Zelensky melalui telepon Rabu lalu, 26 April 2023.', '<p>Juru bicara Kremlin Dmitry Peskov mengatakan, Pemerintah Rusia menyambut baik semua hal yang dapat mengakhiri konflik Ukraina termasuk komunikasi antara Presiden China <a href=\"https://www.tempo.co/tag/xi-jinping\"><strong>Xi Jinping</strong></a> dan Presiden Ukraina Volodymyr Zelensky melalui telepon Rabu lalu, 26 April 2023.</p><p>Tetapi ia mengatakan, Kremlin kukuh akan melanjutkan \"operasi militer khusus\" di <a href=\"https://www.tempo.co/tag/ukraina\"><strong>Ukraina </strong></a>sampai tujuan mereka tercapai. Target Rusia di anytaranya membebaskan penutur bahasa Rusia di Donbas.</p><p>Pemimpin China dan Ukraina berbicara untuk pertama kalinya sejak Rusia mengirim pasukannya ke Ukraina pada Februari tahun lalu, memenuhi tujuan lama Kyiv yang telah secara terbuka meminta pembicaraan semacam itu selama berbulan-bulan.</p><p>Peskov mengatakan Rusia mengetahui detail diskusi kedua pemimpin itu dan menyatakan sikap mereka terhadap konflik tersebut sudah diketahui dengan baik.</p><p>\"Kami siap menyambut apa pun yang dapat mempercepat akhir konflik di Ukraina dan Rusia untuk mencapai semua tujuan yang telah ditetapkan sendiri,\" kata Peskov tentang panggilan telepon mereka.</p><p>\"Adapun fakta bahwa mereka berkomunikasi - itu adalah masalah kedaulatan masing-masing negara ini dan masalah dialog bilateral mereka.\"</p><p>Ditanya apakah Rusia dan <a href=\"https://www.tempo.co/tag/china\"><strong>China </strong></a>telah membahas pemulihan Ukraina ke perbatasan tahun 1991 ketika Uni Soviet dibubarkan, selama kunjungan Xi Jinping baru-baru ini ke Moskow, Peskov mengatakan: \"Tidak ada pembahasan tentang itu.\"</p>', '', '2023-04-27 18:53:57', 2, 3),
(12, 'Disodorkan Sebagai Cawapres Ganjar Pranowo, Yaqut Cholil Qoumas tegaskan Fokus Sebagai Menag', '644b65860e2db.jpg', 'Menteri Agama Yaqut Cholil Qoumas menanggapi upaya pengusungan dirinya untuk mendampingi Gubernur Jawa Tengah Ganjar Pranowo sebagai calon presiden (Capres) dan calon wakil presiden (Cawapres) pada Pemilihan Presiden (Pilpres) 2024. Yaqut menyatakan dirinya fokus menjalankan tugasnya sebagai Menteri Agama.', '<p>Menteri Agama Yaqut Cholil Qoumas menanggapi upaya pengusungan dirinya untuk mendampingi Gubernur Jawa Tengah <strong>Ganjar Pranowo</strong> sebagai calon presiden (Capres) dan calon wakil presiden (Cawapres) pada Pemilihan Presiden (Pilpres) 2024. Yaqut menyatakan dirinya fokus menjalankan tugasnya sebagai Menteri Agama.</p><p>Gus Yaqut, sapaannya, mengaku tidak pernah terpikir untuk ikut serta dalam ajang kontestasi <strong>Pilpres 2024</strong>. Ia menyebut saat ini prioritasnya adalah menjalankan amanah dari Presiden Jokowi sebagai Menteri Agama.</p><p>“Sampai detik ini yang ada di dalam benak saya adalah bagaimana mengemban amanah yang diberikan pak Presiden Jokowi dengan sebaik-baiknya. Sebagai pembantu beliau, saya hanya tegak lurus kepada Presiden Jokowi,” kata Yaqut melalui keterangan tertulisnya, Jum’at, 28 April 2023.</p><p>Selain itu, <strong>Yaqut Cholil Quomas</strong> menyatakan telah berkomitmen untuk menjalankan tugas sebagai Menteri Agama hingga masa tugasnya berakhir. Ia menyebut dirinya tidak akan mendaftar menjadi calon legislatif sebagai bentuk komitmennya tersebut.</p><p>“Saya hanya ingin berfokus dan tidak terbagi-bagi. Sejak awal, ketika diberi mandat ini oleh presiden pada Desember 2020, saya pribadi sudah berjanji mengemban tugas sebagai Menag sampai akhir,” ujarnya.&nbsp;</p><h4><strong>Terima kasih atas dukungan untuk menjadi pendamping Ganjar</strong></h4><p>Meski begitu, Gus Yaqut berterimakasih kepada pihak yang menyodorkan namanya sebagai calon pendamping Ganjar Pranowo. Ia menyebut hal itu sebagai bagian dinamika kehidupan demokrasi suatu negara.</p><p>“Sekali lagi, terimakasih dukungannya seperti sahabat-sahabat dari GMPI. Saya yakin Indonesia memiliki stok pemimpin muda berkualitas dan berpengalaman,” kata Yaqut.&nbsp;</p><p>Dukungan terhadap Yaqut Cholil Quomas untuk menjadi Cawapres Ganjar Pranowo datang dari Generasi Muda Pembangunan Indonesia (GMPI) yang merupakan sayap pemuda Partai Persatuan Pembangunan (PPP).&nbsp; Mereka menilai Yaqut sebagai salah satu sosok muda <strong>Nahdlatul Ulama</strong> yang cocok untuk mendampingi Ganjar.</p><p>Selain Yaqut, GMPI juga menyodorkan nama Sandiaga Uno. Pengusaha sekaligus politikus yang baru pamit dari Partai Gerindra itu disebut akan merapat ke PPP.&nbsp;</p><p>PPP sendiri telah memastikan mengusung Ganjar Pranowo sebagai calon presiden mereka pada Pilpres 2024. Keputusan itu dibuat berdasarkan rapat pimpinan nasional PPP di Yogyakarta pada 25-26 April 2023. Pelaksana tugas <strong>PPP</strong>, Muhammad Mardiono, menyatakan mereka akan segera berkomunikasi dengan PDIP sebagai partai yang menaungi Ganjar.&nbsp;</p>', '', '2023-04-28 13:19:50', 2, 3),
(13, 'Hasil SEA Games 2023: Timnas Bola Voli Putra Indonesia Kalahkan Filipina 3-0 di Laga Perdana', '6452404f32adf.jpg', 'Timnas bola voli putra Indonesia berhasil mengalahkan Filipina dalam babak penyisihan grup A pada SEA Games 2023 di Stadium Olimpiade Phnom Penh, Kamboja, Rabu. Tim Merah Putih tampil agresif menghadapi salah satu unggulan itu dan menang dengan skor 3-0 (25-18, 25-18, 25-23).', '<p>Timnas bola voli putra Indonesia berhasil mengalahkan Filipina dalam babak penyisihan grup A pada <a href=\"https://www.tempo.co/tag/sea-games-2023\"><strong>SEA Games 2023</strong></a> di Stadium Olimpiade Phnom Penh, Kamboja, Rabu. Tim Merah Putih tampil agresif menghadapi salah satu unggulan itu dan menang dengan skor 3-0 (25-18, 25-18, 25-23).</p><p>Pelatih timnas bola voli putra Indonesia Jeff Jiang menyambut gembira hasil itu.&nbsp;“Kami berhasil menang, dan tim telah berjuang keras hari ini,” kata dia seusai pertandingan itu.</p><p>Set pertama dibuka dengan kuat lewat formasi yang diisi oleh Nurmulki Rivan, Zulfi Hernanda, Halim Farhan, Julfikar Nizar, Haryono Doni, dan Malizi Muhammad.</p><p>Zulfi yang mengenakan nomor 13 merupakan pencetak skor pertama yang memulai keunggulan pertama di set awal. Pertandingan lalu mulai berjalan seru karena timnas bola voli putra Filipina yang diperkuat oleh Umandal Joshua cs mencoba memberikan perlawanan.</p><p>Meski sempat melakukan beberapa kesalahan kecil, Indonesia melalui spike penuh tenaga dan kerja sama yang solid dari Farhan dan kawan-kawan, semakin di atas angin dengan selisih enam poin di skor krusial 23-17.</p><p>Namun, Filipina sempat membuat skuad Merah-Putih out of system dan tim lawan berhasil merebut poin ke-18 mereka. Tapi, pada akhirnya, pertahanan Indonesia mampu menahan perolehan skor Filipina dan set pembuka berhasil dimenangkan oleh Indonesia.</p><p>Lebih lanjut, set kedua tidak jauh berbeda dengan set pertama, dimana tim lawan masih berusaha untuk memberikan tekanan. Namun, tim Indonesia lebih fokus dan mampu meminimalisir kesalahan sendiri dan unggul jauh serta memenangkan set kedua.</p><p>Upaya tim Filipina untuk memberikan perlawanan mulai membuahkan hasil di set ketiga, terutama ketika kedua tim sempat bersaing dan saling memperkecil ketertinggalan bahkan menghasilkan skor berimbang.</p><p>Tapi, strategi Pelatih Jiang untuk turut melibatkan pemain-pemain muda seperti Anggara Agil Angga itu ternyata cukup memberikan laga yang berjalan seru, terutama Angga juga mencetak ace di momen-momen kritis.</p><p>Sempat memimpin cukup jauh hingga empat poin dari Filipina, tim lawan kembali mencoba menekan Skuad Garuda dan memperkecil ketertinggalan di skor 21-23.</p><p>Dukungan langsung dari puluhan suporter Indonesia yang memadati venue menjadi pemantik semangat timnas dan membuatnya meraih kemenangan melalui tiga set langsung.</p><p>Sementara itu, tim bola voli putra Indonesia akan kembali berlaga di Stadion Olimpiade Kamis, 4 Mei 2023, melawan Singapura.</p>', '', '2023-05-03 18:06:55', 1, 3),
(14, 'Wow! Timnas Indonesia Jadi Beruji Coba Lawan Argentina pada FIFA Matchday Juni 2023?', '645258e286fab.jpg', 'Timnas Indonesia dikabarkan berkesempatan untuk melakukan laga uji tanding melawan juara dunia Argentina pada FIFA Matchday edisi Juni 2023 mendatang.', '<p>Timnas Indonesia dikabarkan berkesempatan untuk melakukan laga uji tanding melawan juara dunia Argentina pada FIFA Matchday edisi Juni 2023 mendatang.</p><p>Rumor itu dihembuskan oleh media asal Argentina, <i>Relevo</i>. Selain Timnas Indonesia, calon lawan Lionel Messi cs lainnya adalah China, Australia, Korea Selatan, hingga Jepang.</p><p>\"Argentina memiliki beberapa opsi, meski dua yang paling memungkinkan saat ini adalah China dan Timnas Indonesia,\" ulas <i>Relevo</i>.</p><p>\"Lebih jauh, opsi lainnya adalah Australia. Pilihan terakhir ialah Korea Selatan dan Jepang,\" tulis <i>Relevo</i>.</p><h4>Persiapan Terakhir</h4><p>FIFA Matchday Juni 2023 bakal menjadi persiapan terakhir Argentina sebelum berkiprah di Kualifikasi Piala Dunia 2026 yang dimulai pada September tahun ini.</p><p>Sesudah menjadi juara Piala Dunia 2022 di Qatar, popularitas Argentina melesat. Banyak negara, terutama negara-negara Asia, yang berminat beruji coba dengan tim berjulukan Albiceleste tersebut.</p><p>\"Saat ini, uangnya ada di Asia. Pada tingkat yang lebih rendah, juga di Amerika Utara,\" papar <i>Relevo</i>.</p><h4>Laporan Media Argentina</h4><p><i>Relevo</i> melaporkan bahwa Argentina juga berpeluang untuk berekspansi ke Amerika Serikat, satu dari tiga tuan rumah Piala Dunia 2026 bersama Kanada dan Meksiko.</p><p>Apalagi, kapten Argentina sekaligus penyerang PSG, Lionel Messi, juga digadang-gadang akan melanjutkan kariernya di Negeri Paman Sam.</p><p>Ide kami adalah memperkuat pasar untuk masa depan Copa Amerika, Piala Dunia berikutnya, dan kota olahraga yang akan kita adakan di sana. Negara ini tidak hanya penting di bidang olahraga, tetapi juga di bidang komersial,\" ujar manajer area komersial Federasi Sepak Bola Argentina (AFA), Leandro Petersen.</p><h4>Sudah Dibocorkan Wakil Ketua PSSI</h4><p>Uji coba kontra Argentina terbuka lebar untuk Timnas Indonesia mengingat kisi-kisinya telah dibocorkan oleh Wakil Ketua PSSI, Zainudin Amali, pada beberapa waktu lalu.</p><p>Di FIFA Matchday terdekat, Timnas Indonesia baru mendapatkan satu lawan latih tanding. Tim berjulukan Skuad Garuda itu bakal menghadapi Timnas Palestina pada 14 Juni 2023.</p><p>\"Yang sedang diusahakan adalah Argentina pada FIFA Matchday Juni 2023. Namun, ini masih rencana. Nanti tunggu Ketua PSSI, Pak Erick Thohir,\" imbuh Amali medio Maret 2023.</p><h4>Erick Thohir Tidak Membantah</h4><p>Erick Thohir tidak membantah bahwa PSSI telah mendekati AFA dengan tujuan ajakan beruji coba dari Timnas Indonesia untuk melawan Argentina.</p><p>\"Kami sudah usaha. Surat sudah dikirim. Apakah sudah ada jawaban black and white, belum,\" imbuh Erick Thohor pada April 2023.</p><p>Bola.net mencoba menghubungi anggota Komite Eksekutif (Exco) PSSI, Arya Sinulingga, untuk mengonfirmasi terkait kemungkinan uji coba Timnas Indonesia kontra Argentina. Namun, belum direspons hingga berita ini tayang.</p>', '', '2023-05-03 19:51:46', 2, 3),
(15, 'Klasemen Sepak Bola SEA Games 2023, Bagaimana Posisi Timnas Indonesia?', '645272876c1af.jpg', 'Timnas Indonesia U-22 sudah mengawali petualangan mereka di SEA Games 2023 ini dengan keme', '<p>Berikut hasil lengkap, klasemen, dan top skor cabor sepak bola putra SEA Games 2023. Timnas Indonesia U-22&nbsp;sudah mengawali petualangan mereka di SEA Games 2023 ini dengan kemenangan 3-0 atas Filipina, Sabtu (29/4/2023) lalu.</p><p>Rabu (3/5/2023) hari ini, ada dua laga dari Grup B yang dimainkan. Menarik diikuti bagaimana persaingan tiga tim unggulan di grup ini, yakni Vietnam, Thailand, dan Malaysia.</p><p>Timnas Indonesia U-22 sendiri akan kembali berlaga pada Kamis (4/5/2023) esok hari. Tim yang bakal menjadi lawan Marselino Ferdinan cs adalah Myanmar.&nbsp;</p><p><i>Untuk mengetahui hasil lengkap, klasemen, dan top skor sepak bola SEA Games 2023, scroll saja terus ke bawah Bolaneters.</i></p><h4><i>Pembagian Grup Sepak Bola SEA Games 2023</i></h4><figure class=\"image\"><img src=\"http://localhost/pw2023_223040155/tubes/_asset/img/article/sub/6452712a07d70.jpg\"></figure><p><strong>Grup A</strong><br>Kamboja (tuan rumah)<br>Indonesia<br>Myanmar<br>Filipina<br>Timor-Leste</p><p><strong>Grup B</strong><br>Vietnam (juara bertahan)<br>Thailand<br>Malaysia<br>Singapura<br>Laos</p><p><i>Berikut jadwal dan hasil lengkap sepak bola SEA Games 2023.</i></p><h4><i>Jadwal Grup A</i></h4><figure class=\"image\"><img src=\"http://localhost/pw2023_223040155/tubes/_asset/img/article/sub/645271618a2b6.jpg\"></figure><p><strong>Sabtu, 29 April 2023</strong></p><ul><li>16.00 WIB: Indonesia 3-0 Filipina <i>(Marselino Ferdinan 45+1, Irfan Jauhari 90, Fajar Fathur Rahman 90+1)</i></li><li>19.00 WIB: Kamboja 4-0 Timor Leste <i>(Chou Sinti 40, 45+2, Rotana Sor 75, Lim Pisoth 84)</i></li></ul><p><strong>Selasa, 2 Mei 2023</strong></p><ul><li>16.00 WIB: Myanmar 1-0 Timor Leste <i>(Thet Hein Soe 72)</i></li><li>19.00 WIB: Filipina 1-1 Kamboja <i>(Dov Carino 90+2; Ky Rina 25)</i></li></ul><p><strong>Kamis, 4 Mei 2023</strong></p><ul><li>16.00 WIB: Indonesia vs Myanmar</li><li>19.00 WIB: Timor Leste vs Filipina</li></ul><p><strong>Minggu, 7 Mei 2023</strong></p><ul><li>16.00 WIB: Timor Leste vs Indonesia</li><li>19.00 WIB: Myanmar vs Kamboja</li></ul><p><strong>Rabu, 10 Mei 2023</strong></p><ul><li>16.00 WIB: Filipina vs Myanmar</li><li>19.00 WIB: Kamboja vs Indonesia</li></ul><h4>Jadwal Grup B</h4><figure class=\"image\"><img src=\"http://localhost/pw2023_223040155/tubes/_asset/img/article/sub/6452718edb39f.jpg\"></figure><p><strong>Minggu, 30 April 2023</strong></p><ul><li>16.00 WIB: Thailand 3-1 Singapura <i>(Teerasak Poeiphimai 8, Achitpol Keereerom 38, Purachet Thodsanit 49; Nicky Melvin Singh 42)</i></li><li>19.00 WIB: Vietnam 2-0 Laos <i>(Nguyen Van Tung 3, Nguyen Quoc Viet 90+3)</i></li></ul><p><strong>Rabu, 3 Mei 2023</strong></p><ul><li>16.00 WIB: Singapura 1-3 Vietnam <i>(Vu Tien Long 90+3 (BD); Nguyen Van Tung 35, Nguyen Thai Son 43, Ilhan Noor 80 (BD))</i></li><li>19.00 WIB: Malaysia 5-1 Laos <i>(Muhammad Ubaidullah 5,&nbsp;Anantaza Siphongphan 27 (BD), Syahir Bashah 76, Najmuddin Akmal 90+2, Fergus Tierney 90+5;&nbsp;Muhammad Ubaidullah 20 (BD))</i></li></ul><p><strong>Sabtu, 6 Mei 2023</strong></p><ul><li>16.00 WIB: Thailand vs Malaysia</li><li>19.00 WIB: Laos vs Singapura</li></ul><p><strong>Senin, 8 Mei 2023</strong></p><ul><li>16.00 WIB: Laos vs Thailand</li><li>19.00 WIB: Malaysia vs Vietnam</li></ul><p><strong>Kamis, 11 Mei 2023</strong></p><ul><li>16.00 WIB: Singapura vs Malaysia</li><li>19.00 WIB: Vietnam vs Thailand</li></ul>', '', '2023-05-03 21:41:11', 1, 3),
(16, 'Megawati Minta Polisi Insaf, Soroti Kasus Ferdy Sambo dan AKBP Achiruddin Hasibuan', '6458b9981c28b.jpg', 'Ketua Umum PDIP Megawati Soekarnoputri turut menyoroti kasus yang menimpa oknum polisi.', '&lt;p&gt;Ketua Umum PDIP &lt;a href=&quot;http://www.tempo.co/tag/megawati-sukarnoputri&quot;&gt;&lt;strong&gt;Megawati &lt;/strong&gt;&lt;/a&gt;Soekarnoputri turut menyoroti kasus yang menimpa oknum polisi belakangan. Presiden ke-5 Republik Indonesia itu meminta anggota polisi yang menyimpang untuk insaf.&lt;/p&gt;&lt;p&gt;Megawati mengaku kesal melihat fenomena polisi justru terlibat perkara hukum. Dia menyinggung sejumlah kasus yang melibatkan anggota polisi belakangan. Di antaranya kasus pembunuhan oleh Ferdy Sambo serta kasus penganiayaan oleh anak AKBP Achiruddin Hasibuan.&lt;/p&gt;&lt;p&gt;“Makanya insaf toh, pak. Bagaimana saya enggak kesal, melihat Sambo lah (&lt;a href=&quot;https://www.tempo.co/search?q=ferdy+sambo&quot;&gt;&lt;strong&gt;Ferdy Sambo&lt;/strong&gt;&lt;/a&gt;), melihat sopo lagi itu (AKBP Achiruddin Hasibuan),” kata Megawati pada Jumat, 5 Mei 2023.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Putri Presiden Pertama RI Sukarno itu mengaku mengaku tak habis pikir terhadap tingkah laku polisi. Menurutinya, polisi sekarang bersikap arogan. Komentar itu disampaikan Megawati menanggapi kasus AKBP Achiruddin Hasibuan yang melakukan pembiaran terhadap anaknya yang menganiaya seorang mahasiswa.&lt;/p&gt;&lt;p&gt;“Polisi sekarang arogan banget ya. Siapa yang terakhir ditangkap itu? Saya bilang, saya kan ngomong kebenaran. Ada, di TV yang nginjek-nginjek anak orang anaknya, eh malah dia, siapa ya namanya Rudin Rudin,” ujarnya.&lt;/p&gt;&lt;p&gt;Berikut kilas balik kasus Ferdy Sambo dan AKBP Achiruddin Hasibuan.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;1. Kasus Ferdy Sambo&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Kasus Ferdy Sambo terungkap bermula ketika Polri mengumumkan kematian Nofriansyah Yosua Hutabarat atau Brigadir J pada 11 Juli 2022. Brigadir J disebut tewas dalam baku tembak dengan rekannya, Bharada Richard Eliezer alias Bharada E pada 8 Juli 2022. Menurut cerita Sambo, kedua ajudannya saling tembak karena Brigadir J diduga melecehkan Putri Candrawathi, istrinya.&lt;/p&gt;&lt;p&gt;Belakangan, apa yang terjadi rupanya jauh lebih keji. Bukan baku tembak, Brigadir J murni mati ditembak. Kematian itu memang direncanakan oleh Sambo. Kadiv Propam Polri itu menyuruh Bharada E mengeksekusi Brigadir J. Rencana itu juga diketahui oleh Putri Candrawathi dan anak buah Sambo yang lain, Ricky Rizal dan Kuat Maruf. Kelimanya ditetapkan sebagai tersangka.&lt;/p&gt;&lt;p&gt;Ternyata pembunuhan itu dipicu oleh kejadian yang terjadi di Magelang sehari sebelum insiden. Namun Sambo tak mengungkapkan detail peristiwa karena menyangkut harkat martabat keluarga. “Masalahnya apa nanti akan terbuka di sidang. Itu sensitif,” kata Kapolri Jenderal Listyo Sigit. Di persidangan, Jaksa menyebut ada hubungan gelap antara istri Sambo dengan Brigadir J.&lt;/p&gt;&lt;p&gt;Kecurigaan Brigadir J tewas bukan karena baku tembak diungkapkan keluarga almarhum. Mulai dari peti jenazah dilarang dibuka hingga luka-luka di tubuh Brigadir J. Bahkan pengumuman kematian yang sela dua hari itu juga dipertanyakan. Keluarga pun meminta dilakukan penyelidikan. Hingga terbukti Sambo memang membuat skenario bohong terkait kematian ajudannya itu.&lt;/p&gt;&lt;p&gt;“Irjen FS menyuruh dan membuat skenario peristiwa seolah-olah ada tembak menembak,” kata Kepala Badan Reserse Kriminal Komisaris Jenderal Agus Andrianto.&lt;/p&gt;&lt;p&gt;Tak cuma itu, Kadiv Propam Polri itu juga melakukan upaya perintangan penegakan hukum. Dia menyuruh anak buahnya merusak sejumlah barang bukti. Beberapa di antaranya menyabotase rekaman kamera pengawas. Akibatnya, sejumlah anak buah Sambo yang terlibat juga terseret dalam kasus ini. Mereka belakangan dipecat dari institusi Polri.&lt;/p&gt;&lt;p&gt;Setelah gelaran sidang yang berlapis-lapis hingga memakan waktu berbulan-bulan, pada Februari 2023, Majelis Hakim Pengadilan Negeri Jakarta memvonis Ferdy Sambo dihukum mati. Sebelumnya Jaksa menuntut eks Kadiv Propam Polri itu dihukum seumur hidup. “Menjatuhkan terdakwa Ferdy Sambo dengan pidana mati,” kata Ketua Majelis Hakim Wahyu Iman Santoso saat membacakan putusan.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;2. Kasus AKBP Achiruddin Hasibuan&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Kasus AKBP Achiruddin Hasibuan bermula ketika sebuah video berisi adegan penganiayaan terhadap seorang mahasiswa bernama Ken Admiral viral di lini masa. Pelaku penganiayaan tersebut adalah Aditya Hasibuan, anak dari Achiruddin. Mirisnya, selaku penegak hukum, Achiruddin membiarkan hal itu terjadi di depan matanya.&lt;/p&gt;&lt;p&gt;Atas pembiaran itu, Kabid Propam Polda Sumatera Utara, Kombes Pol Dudung Adijono menegaskan, Achiruddin dicopot dari jabatannya sebagai Kabag Bin Ops Direktorat Narkoba Polda Sumut . Selain itu, AKBP Achiruddin Hasibuan juga mendapat sanksi penempatan khusus atau patsus di Propam Polda Sumut. “Karena terbukti melakukan pelanggaran kode etik, maka yang bersangkutan akan kami tahan di tempat khusus,” kata dia.&lt;/p&gt;&lt;p&gt;Kasus tersebut ternyata membuka kasus lainnya. Belakangan kekayaan &lt;a href=&quot;https://nasional.tempo.co/read/1721469/kasus-akbp-achiruddin-kapolda-sumut-sampaikan-permohonan-maaf-ke-keluarga-ken-admiral&quot;&gt;&lt;strong&gt;AKBP Achiruddin&lt;/strong&gt;&lt;/a&gt; mulai “dikuliti” oleh pihak kepolisian. Dia terindikasi melakukan Tindak Pidana Pencucian Uang atau TPPU. Achiruddin terpantau melakukan transaksi mutasi bernilai puluhan miliar. Uang itu dialihkan ke rekening atas nama anaknya itu. Selain TPPU, Achiruddin juga diduga memiliki gudang BBM ilegal.&lt;/p&gt;', '', '2023-05-08 15:58:00', 2, 3),
(17, 'Jadwal dan Prediksi Inter Milan vs AC Milan di Leg 2 Semifinal Liga Champions Malam Ini: H2H, Koment', '6462d1f8c07d0.jpg', 'Jadwal Liga Champions pada Rabu dinihari, 17 Mei 2023, akan menampilkan laga Inter Milan vs AC Milan. Derby Milan ini akan tersaji pada leg kedua semifinal di Stadio Giuseppe Meazza, mulai 02.00 WIB dengan disiarkan SCTV dan Vidio.  Simak sejumlah hal penting soal pertandingan ini, termasuk perkiraan pemain, rekor pertemuan, komentar pelatih, dan prediksinya: Latar Belakang Laga dan Performa Terkini   Inter akan menghadapi laga ini dalam posisi diuntungkan. Mereka berpeluang lolos ke final', '&lt;p&gt;Jadwal &lt;a href=&quot;https://www.tempo.co/tag/liga-champions&quot;&gt;&lt;strong&gt;Liga Champions&lt;/strong&gt;&lt;/a&gt; pada Rabu dinihari, 17 Mei 2023, akan menampilkan laga &lt;a href=&quot;https://www.tempo.co/tag/inter-milan-vs-ac-milan&quot;&gt;&lt;strong&gt;Inter Milan vs AC Milan&lt;/strong&gt;&lt;/a&gt;. Derby Milan ini akan tersaji pada leg kedua semifinal di Stadio Giuseppe Meazza, mulai 02.00 WIB dengan disiarkan &lt;i&gt;SCTV &lt;/i&gt;dan &lt;i&gt;Vidio&lt;/i&gt;.&lt;/p&gt;&lt;p&gt;Simak sejumlah hal penting soal pertandingan ini, termasuk perkiraan pemain, rekor pertemuan, komentar pelatih, dan prediksinya:&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Latar Belakang Laga dan Performa Terkini&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Inter akan menghadapi laga ini dalam posisi diuntungkan. Mereka berpeluang lolos ke final pertamanya dalam 13 tahun terakhir setelah menang 2-0 dalam pertemuan pertama. Kemenangan tersebut diraih berkat gol cepat Edin Dzeko dan Henrikh Mkhitaryan.&lt;/p&gt;&lt;p&gt;Setelah laga itu, kedua tim meraih hasil berbeda di kompetisi domestiknya, Serie A Liga Italia. Inter menang menang 4-2 atas Sassuolo, sedangkan Milan kalah 0-2 di kandang Spezia. Inter kini di posisi ketiga klasemen dan AC Milan di urutan kelima.&lt;/p&gt;&lt;p&gt;Inter akan berjuang mengejar laga final Liga Champions keenamnya. Dalam tiga kesempatan sebelumnya, mereka juara. Sedangkan Milan mengincar final ke-12 dan gelar juara kedelapan.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Komentar Pelatih Kedua Tim&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Simone Inzaghi, pelatih Inter:&amp;nbsp;&lt;/p&gt;&lt;p&gt;&quot;Ini adalah salah satu pertandingan terpenting dalam sejarah Inter. Kami harus bermain dengan kepala dan hati untuk mencapai impian mencapai final. Leg pertama 2-0 tetapi Milan selalu tangguh dan memiliki pemain hebat.&quot;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Stefano Pioli, pelatih Milan:&amp;nbsp;&lt;/p&gt;&lt;p&gt;&quot;Kami harus seimbang, kompak, dan bermain seperti tim yang dapat mengalahkan lawan. Kami tahu betapa pentingnya gol pertama: tidak peduli menit berapa gol itu dicetak.&amp;nbsp;&lt;/p&gt;&lt;p&gt;Kami mulai membicarakan pertandingan ini pada Minggu pagi. Kami hanya memiliki satu kesempatan dan kami harus memainkan pertandingan ini dengan sikap yang luar biasa.&quot;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Kabar Pemain Kedua Tim&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Inter Milan tak bisa diperkuat Milan Skriniar dan Dalbert yang cedera. Sedangkan AC Milan akan kehilangan Ismael Bennacer, Rade Krunic, Junior Messias, dan Alessandro Florenzi &amp;nbsp;karena cedera. Kondisi Rafael Leao juga masih meragukan.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Perkiraan Susunan Pemain&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Inter Milan (3-5-2): Onana; Bastoni, Acerbi, Darmian; Dimarco, Mkhitaryan, Calhanoglu, Barella, Dumfries; Lautaro, Dzeko.&lt;br&gt;Pelatih: Simone Inzaghi.&lt;/p&gt;&lt;p&gt;AC Milan (4-2-3-1): Maignan; Theo Hernandez, Tomori, Kjaer, Calabria; Tonali, Krunic; Leao, Diaz, Saelemaekers; Giroud.&lt;br&gt;Pelatih: Stefano Pioli.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Head-to-head di Eropa&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Inter Milan menang: 1&lt;br&gt;Seri: 2&lt;br&gt;AC Milan menang: 2.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;5 Pertemuan Terakhir&lt;/strong&gt;&lt;br&gt;11-05-2023 Milan 0-2 Inter (UCL)&lt;br&gt;06-02-2023 Inter 1-0 Milan (Serie A)&lt;br&gt;19-01-2023 Milan 0-3 Inter (Supercoppa)&lt;br&gt;03-09-2022 Milan 3-2 Inter (Serie A)&lt;br&gt;20-04-2022 Inter 3-0 Milan (Coppa Italia).&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Prediksi Inter Milan vs AC Milan&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Performa terkini di Liga Italia, juga pertemuan leg pertama, menunjukkan Inter Milan memiliki keunggulan dari rival sekotanya itu. Keunggulan 2-0 juga akan membuat pemain Nerazzurri tampil percaya diri. Mereka lebih diunggulkan untuk menang dalam laga ini.&lt;/p&gt;', '', '2023-05-16 07:44:40', 1, 3);
INSERT INTO `article` (`id`, `title`, `img`, `shortContent`, `content`, `keyword_category`, `insert_date`, `user_id`, `visibility_id`) VALUES
(18, 'Hasil SEA Games 2023: Timnas U-22 Indonesia Raih Medali Emas, Kalahkan Thailand 5-2', '6463a1f81ff4a.jpg', 'Timnas U-22 Indonesia meraih medali emas SEA Games 2023 setelah mengalahkan Thailand di babak tambahan waktu. Laga yang digelar di Stadion Nasional Olimpiade, Phnom Penh, Selasa, 16 Mei 2023 berakhir dengan skor 5-2. Ini merupakan emas pertama skuad Garuda sejak terakhir kali diraih pada SEA Games 1991.  Sebelumnya pasukan Merah Putih bermain imbang 2-2 di waktu normal. Indonesia mampu unggul lebih dulu melalui gol Ramadhan Sananta pada menit ke-20 dan menit 45+6. ', '&lt;p&gt;Timnas U-22 Indonesia meraih medali emas &lt;a href=&quot;https://www.tempo.co/tag/sea-games-2023&quot;&gt;&lt;strong&gt;SEA Games 2023&lt;/strong&gt;&lt;/a&gt; setelah mengalahkan Thailand di babak tambahan waktu. Laga yang digelar di Stadion Nasional Olimpiade, Phnom Penh, Selasa, 16 Mei 2023 berakhir dengan skor 5-2. Ini merupakan emas pertama skuad Garuda sejak terakhir kali diraih pada SEA Games 1991.&lt;/p&gt;&lt;p&gt;Sebelumnya pasukan Merah Putih bermain imbang 2-2 di waktu normal. Indonesia mampu unggul lebih dulu melalui gol Ramadhan Sananta pada menit ke-20 dan menit 45+6.&amp;nbsp;&lt;/p&gt;&lt;p&gt;Tim Gajah Perang lalu menyamakan kedudukan berkat gol Anan Yodsangwal pada menit ke-64 dan Yotsakorn Buraphan menit 90+9. Hasil tersebut memaksa pertandingan dilanjutkan ke babak tambahan.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Tak lama setelah babak tambahan dimulai, Indonesia langsung menambah keunggulan lewat gol Irfan Jauhari pada menit ke-91. Memanfaatkan kesalahan umpan pemain belakang Thailand, dia melepaskan tendangan lob yang tak bisa dibendung Soponwit Rakyart. Skor berubah menjadi 3-2.&lt;/p&gt;&lt;p&gt;Thailand melakukan pergantian pemain pada menit ke-98. Songchai Thongcham keluar digantikan Thirawoot Sraunson. Bek Thailand Jonathan Khemdee mendapat kartu kuning kedua setelah melanggar Irfan Jauhari pada menit ke-102. Sebelumnya, kartu kuning pertama dia didapat pada babak pertama waktu normal.&lt;/p&gt;&lt;p&gt;Bagas Kaffa mendapat peluang pada menit ke-105, akan tetapi tendangannya masih berada di atas gawang. Satu menit kemudian, Thailand berbalik mengancam melalui Anan Yodsangwal, namun tendangannya gagal mengenai sasaran.&lt;/p&gt;&lt;p&gt;Hingga peluit babak pertama tambahan waktu dibunyikan, tak ada peluang berbahaya dari kedua tim dan skor bertahan 3-2 untuk keunggulan Garuda Muda.&lt;/p&gt;&lt;p&gt;Memasuki babak kedua tambahan waktu, Indra Sjafri melakukan penyegaran pemain dengan memasukkan Beckham Putra Nugraha yang menggantikan Muhammad Haykal Alhafiz. Hasilnya, Indonesia kembali memperlebar keunggulan. Muhammad Fajar Fathur Rahman melepaskan tendangan keras dari luar kotak penalti yang merobek gawang Thailand pada menit ke-106. Skuad Garuda memimpin sementara 4-2.&lt;/p&gt;&lt;p&gt;Satu lagi pemain &lt;a href=&quot;https://www.tempo.co/tag/timnas-u-22&quot;&gt;&lt;strong&gt;timnas U-22&lt;/strong&gt;&lt;/a&gt; Thailand diganjar kartu kuning kedua, yaitu Teerasak Poeiphimai pada menit ke-118. Tim Gajah Perang kini bermain dengan 8 orang. Di akhir babak kedua tambahan waktu, Beckham Putra menutup pesta gol Indonesia ke gawang Thailand. Skor 5-2 bertahan hingga peluit panjang dibunyikan.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Berikut Susunan Pemain Selengkapnya:&amp;nbsp;&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Indonesia: Ernando Ari; Rizky Ridho, Komang Teguh Trisnanda, Amiruddin Bagas Kaffa, Muhammad Haykal Alhafiz; Alfeandra Dewangga, Muhammad Taufany Muslihuddin, Marselino Ferdinan; Witan Sulaeman, Muhammad Fajar Fathur Rahman, Ramadhan Sananta.&lt;/p&gt;&lt;p&gt;Thailand: Soponwit Rakyart; Bukkorre Lamdee, Songchai Tongcham, Jonathan Khemdee, Chatmongkol Rueangthanarot; Chayapipat Supunpasuch, Airfan Doloh, Channarong Promsrikaew, Settasit Suvannaseat; Achitpol Keereerom, Teerasak Poeiphimai.&lt;/p&gt;', '', '2023-05-16 22:32:08', 1, 3),
(19, 'Seluruh Kategori Tiket Presale Konser Coldplay di Jakarta Sold Out dalam Waktu 4 Jam', '6464cf2828610.jpg', 'Penjualan tiket presale BCA dalam konser Coldplay di Jakarta ludes terjual sepenuhnya dalam waktu empat jam. Informasi ini diberikan oleh pihak tempat pembelian tiket, yakni loket.com.  &quot;Kami sangat berterima kasih untuk respon yang luar biasa. Tiket Presale BCA telah terjual sepenuhnya. Semoga semua orang beruntung dengan General Sale pada 19 Mei. Tiket di semua kategori tersedia untuk dibeli mulai pukul 10.00 (GMT+7/ Waktu setempat Jakarta) hanya di coldplayinjakarta.com,&quot; tulis loke', '<p>Penjualan tiket presale BCA dalam konser <a href=\"https://www.tempo.co/tag/coldplay\"><strong>Coldplay</strong></a> di Jakarta ludes terjual sepenuhnya dalam waktu empat jam. Informasi ini diberikan oleh pihak tempat pembelian tiket, yakni loket.com.</p><p>\"Kami sangat berterima kasih untuk respon yang luar biasa. Tiket Presale <a href=\"https://www.tempo.co/tag/bca\"><strong>BCA</strong></a> telah terjual sepenuhnya. Semoga semua orang beruntung dengan <i>General Sale</i> pada 19 Mei. Tiket di semua kategori tersedia untuk dibeli mulai pukul 10.00 (GMT+7/ Waktu setempat Jakarta) hanya di coldplayinjakarta.com,\" tulis loket.com dikutip dari laman resminya, Rabu, 17 Mei 2023.</p><p>Dengan habisnya tiket dalam presale ini, mala penjualan tanggal 18 Mei besok pun tidak diadakan. Pihak promotor akan membuka kembali penjualan tiket pada lusa, 19 Mei 2023 untuk semua kategori dengan sistem <i>general sale</i>.</p><p>Sementara itu, para netizen yang masih belum mendapatkan tiket banyak yang melakukan mention ke akun Twitter Coldplay dan promotor untuk mendapatkan tambahan tanggal pertunjukan.</p><p>\"<i>Please consider to have Day 2 Concert for Coldplay Music of The Spheres World Tour Jakarta, Indonesia. Many fans are still dont have tickets due to popular demand</i>,\" tulis salah satu netizen di <a href=\"https://www.tempo.co/tag/twitter\"><strong>Twitter</strong></a>.</p><p>Menurut mereka, dengan banyaknya permintaan dan penjualan tiket konser yang begitu cepat, Coldplay perlu menambah hari untuk konser di Indonesia.</p><p><i>\"Plislah nambah sehari cuy, orang-orang yang tinggal di Pulau Jawa tuh hampir setara kek Australia banyaknya, kami yang di kalimantan ini gak kebagian hey kami mau juga nonton,\" </i>tulis akun @Exxrvn pada kolom balasan.</p><p>Selain itu, akun @ttvloml juga menanggapi keinginannya agar Coldplay dapat menambah hari untuk konser di Indonesia, <i>\"Yuk bisa yuk nambah hari kaya Taiwan,\" </i>katanya.</p>', '', '2023-05-17 19:57:12', 2, 3),
(23, 'Johnny Plate Jadi Tersangka, AHY Yakin Koalisi Perubahan Makin Solid', '6466751f281cb.jpeg', 'Ketua Umum Partai Demokrat Agus Harimurti Yudhoyono (AHY) menghormati proses hukum kasus dugaan korupsi proyek BTS yang menjerat Menkominfo Johnny G Plate sebagai tersangka. Dia hukum di Tanah Air ditegakkan secara adil. &quot;Kami tentu dengan hati yang baik ingin benar-benar menghormati proses hukum yang berlaku. Kita ingin juga hukum di Indonesia ini ditegakkan secara adil tentunya, tidak tebang pilih.', '&lt;p&gt;Ketua Umum Partai Demokrat Agus Harimurti Yudhoyono (AHY) menghormati proses hukum kasus dugaan korupsi proyek BTS yang menjerat Menkominfo Johnny G Plate sebagai tersangka. Dia hukum di Tanah Air ditegakkan secara adil.&lt;br&gt;&quot;Kami tentu dengan hati yang baik ingin benar-benar menghormati proses hukum yang berlaku. Kita ingin juga hukum di Indonesia ini ditegakkan secara adil tentunya, tidak tebang pilih. Oleh karena itu, kami berharap bahwa penegakan hukum benar-benar murni penegakan hukum,&quot; kata AHY di Hotel Bidakara, Jakarta Selatan, Kamis (18/5/2023).&lt;br&gt;&lt;br&gt;AHY mengatakan segala bentuk politisasi harus dihindari. Sementara itu, dia tetap menggunakan asas praduga tak bersalah sampai kasus tersebut benar-benar terang.&lt;br&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&quot;Namun demikian sekali lagi, ini adalah sebuah proses yang harus kita hormati bersama. Tentunya kami Partai Demokrat bersama dengan 2 partai lainnya yaitu NasDem dan PKS juga tetap teguh pada semangat membangun Koalisi Perubahan,&quot; ucapnya.&lt;br&gt;&lt;br&gt;Menurut AHY, kasus tersebut tidak mempengaruhi semangat Koalisi Perubahan yang digagas Partai Demokrat, NasDem dan PKS. Bahkan, kata dia, kejadian ini justru akan memicu semangat koalisi agar semakin solid.&lt;br&gt;&lt;br&gt;&quot;Jadi ini tidak mempengaruhi semangat, soliditas. Bahkan saya bisa merasakan setelah situasi ini, inshaallah makin solid, memiliki kekuatan untuk sama-sama kita bisa menghadirkan gerakan perubahan,&quot; ujarnya.&lt;br&gt;&lt;br&gt;AHY tidak ingin berspekulasi adanya unsur politik dalam kasus tersebut. Namun, dia berharap agar penegakan hukum tidak dicampur adukkan dengan politik.&lt;br&gt;&lt;br&gt;&quot;Tapi sekali lagi saya mengimbau bahwa penegakan hukum di Indonesia dalam kasus apapun, dalam situasi apapun, maka harus benar-benar diletakkan secara murni. Kita tidak berharap adanya penegakan hukum dicampur adukkan dengan politik,&quot; imbuhnya.&lt;br&gt;&lt;br&gt;Sebelumnya, Kejaksaan Agung (Kejagung) menetapkan Menteri Komunikasi dan Informatika Johnny G Plate sebagai tersangka kasus dugaan korupsi proyek BTS. Johnny G Plate langsung ditahan.&lt;br&gt;&lt;br&gt;Kasus korupsi ini terkait proyek penyediaan infrastruktur BTS 4G infrastruktur pendukung paket 1, 2, 3, 4, 5 Bakti Kominfo tahun 2020-2022. Kasus ini diduga merugikan negara mencapai Rp 8 triliun.&lt;br&gt;&lt;br&gt;Kepala BPKP ‘Muhammad Yusuf Ateh’ mengungkap hasil perhitungan jumlah kerugian keuangan negara tersebut diserahkan ke Kejaksaan Agung. Total kerugian negara sebesar Rp 8.032.084.133.795 (Rp 8 triliun).&lt;br&gt;&lt;br&gt;&quot;Berdasarkan semua yang kami lakukan dan berdasarkan bukti yang kami peroleh, kami telah menyampaikan kepada Pak Jaksa Agung kami menyimpulkan terdapat kerugian keuangan negara sebesar Rp 8.032.084.133.795 (triliun),&quot; kata Yusuf Ateh, dalam konferensi pers, Senin (15/5).&lt;/p&gt;', 'politik korupsi', '2023-05-19 01:57:35', 1, 3),
(25, '3 Hal yang Disampaikan Ketum PSSI Erick Thohir di Hadapan Warga saat Arak-arakan Timnas Indonesia U-22 SEA Games 2023', '64674582e9927.jpg', 'Ketua Umum Persatuan Sepak Bola Seluruh Indonesia atau PSSI Erick Thohir sempat menyampaikan pidato singkat di hadapan warga saat arak-arakan Timnas U-22 yang berhasil sabet emas di SEA Games 2023.  Rute konvoi arak-arakan tersebut melewati sejumlah jalan protokol di Ibu Kota. Sementara di Bundaran HI, kehadiran Garuda Nusantara disambut lagu Indonesia Raya yang dipandu grup band Coklat dan diikuti warga sekitar.', '&lt;p&gt;Ketua Umum Persatuan Sepak Bola Seluruh Indonesia atau PSSI Erick Thohir sempat menyampaikan pidato singkat di hadapan warga saat &lt;a href=&quot;https://www.liputan6.com/tag/arak-arakan-timnas-u-22&quot;&gt;arak-arakan Timnas U-22&lt;/a&gt; yang berhasil sabet emas di SEA Games 2023.&lt;/p&gt;&lt;p&gt;Rute konvoi &lt;a href=&quot;https://www.liputan6.com/tag/arak-arakan&quot;&gt;arak-arakan&lt;/a&gt; tersebut melewati sejumlah jalan protokol di Ibu Kota. Sementara di Bundaran HI, kehadiran Garuda Nusantara disambut lagu Indonesia Raya yang dipandu grup band Coklat dan diikuti warga sekitar.&lt;/p&gt;&lt;p&gt;Konvoi tiba di Bundaran HI sekitar pukul 10.55 WIB, Jumat (19/5/2023). Warga tampak antusias menyambut bus yang membawa pemain. Sebagian dari mereka tampak melempar berbagai suvenir ke arah pemain, berharap ditandatangani.&lt;/p&gt;&lt;p&gt;Sebelumnya, rombongan bersama atlet-atlet lain yang berlaga di &lt;a href=&quot;https://www.liputan6.com/tag/sea-games-2023&quot;&gt;SEA Games 2023&lt;/a&gt; dilepas dari kantor Kemenpora dan dijadwalkan mengakhiri acara di stadion GBK, Senayan, Jakarta.&lt;/p&gt;&lt;p&gt;Setibanya di Bundara HI, &lt;a href=&quot;https://www.liputan6.com/tag/ketum-pssi-erick-thohir&quot;&gt;Ketum PSSI Erick Thohir&lt;/a&gt;&amp;nbsp;sempat menyampaikan pidato singkat di hadapan warga. Pada kesempatan itu, dia juga meminta maaf kepada para pengguna jalan di Jakarta.&lt;/p&gt;&lt;p&gt;&quot;Saya mohon maaf karena acara konvoi dilakukan sekarang,&quot; kata &lt;a href=&quot;https://www.liputan6.com/tag/erick-thohir&quot;&gt;Erick Thohir&lt;/a&gt; yang juga merupakan Menteri BUMN, Jumat (19/5/2023).&lt;/p&gt;&lt;p&gt;Kemudian, Erick Thohir menjelaskan, &lt;a href=&quot;https://www.liputan6.com/tag/timnas-u-22-indonesia&quot;&gt;Timnas U-22 Indonesia&lt;/a&gt; sudah selama 1 setengah bulan menjalani pemusatan latihan di Ibu Kota Jakarta.&lt;/p&gt;&lt;p&gt;&quot;Lebaran di sini puasa di sini, jadi mereka akan segera dibubarkan, tepok tangan buat mereka,&quot; ujar Erick.&lt;/p&gt;&lt;p&gt;Berikut sederet hal yang disampaikan Ketua Umum Persatuan Sepak Bola Seluruh Indonesia atau PSSI Erick Thohir saat arak-arakan &lt;a href=&quot;https://www.liputan6.com/tag/timnas-indonesia&quot;&gt;Timnas Indonesia&lt;/a&gt; U-22&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;1. Minta Maaf Jika Arak-arakan Timbulkan Kemacetan, Sebut Timnas Sudah 1,5 Bulan di Jakarta&lt;/strong&gt;&lt;/h4&gt;&lt;figure class=&quot;image&quot;&gt;&lt;img src=&quot;http://localhost/pw2023_223040155/tubes/_asset/img/article/sub/646744fbaafd0.jpeg&quot;&gt;&lt;/figure&gt;&lt;p&gt;Timnas U-22 Indonesia dinilai timbulkan kepadatan arus lalu lintas, pada Jumat (19/5/2023). Ketua Umum PSSI Erick Thohir pun menyampaikan permohonan maaf.&lt;/p&gt;&lt;p&gt;&quot;Saya minta maaf pawainya harus hari ini,&quot; kata Erick dalam sambutannya, Jumat (19/5/2023).&lt;/p&gt;&lt;p&gt;Erick ikut bersama rombongan Timnas U-22 dan atlet kontingen Indonesia pada SEA Games 2023 menyapa masyarakat Indonesia yang menunggu di kawasan Bundaran Hotel Indonesia, Jakarta Pusat.&lt;/p&gt;&lt;p&gt;Kehadiran rombongan Timnas U-22 yang menumpangi bus tingkat TransJakarta menyita perhatian publik. Warga berduyun-duyun beriringan di belakang bus mengelilingi Bundaran HI. Bahkan, tak sedikit dari mereka melemparkan kaos, jaket dan topi ke arah para pemain supaya mendapat tanda tangan.&lt;/p&gt;&lt;p&gt;Rombongan berhenti sejenak di dekat panggung hiburan. Lagu Indonesia Raya berkumandang dinyayikan oleh para pemain dan masyarakat yang dipandu oleh seorang perwakilan PSSI dari atas panggung.&lt;/p&gt;&lt;p&gt;Di atas panggung, tampak juga sosok Ketua Umum PSSI Erick Thohir. Dia menjelaskan, Timnas U-22 sudah 1 setengah bulan menjalani pemusatan latihan di Jakarta.&lt;/p&gt;&lt;p&gt;&quot;Lebaran di sini puasa di sini, jadi mereka akan segera dibubarkan, tepok tangan buat mereka,&quot; ujar Erick.&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;2. Ingatkan Jadi Momentum Kebangkitan Sepak Bola&lt;/strong&gt;&lt;/h4&gt;&lt;figure class=&quot;image&quot;&gt;&lt;img src=&quot;http://localhost/pw2023_223040155/tubes/_asset/img/article/sub/6467452a2a1a3.jpg&quot;&gt;&lt;/figure&gt;&lt;p&gt;&lt;a href=&quot;https://www.liputan6.com/bola/read/5291572/konvoi-timnas-indonesia-u-22-tiba-di-bundaran-hi-erick-thohir-serukan-revolusi-mental-dari-sepak-bola&quot;&gt;PSSI&lt;/a&gt; seperti diketahui sangat mengapreseasi perjuangan timnas Indonesia U-22 di arena SEA Games 2023. Pasukan Indra Sjafri tampil perkasa dan memenangkan seluruh pertandingan sejak fase grup.&lt;/p&gt;&lt;p&gt;Di babak final, Timnas Indonesai U-22 lewat perjuangan ekstra ketat akhirnya berhasil mengalahkan Thailand dengan skor 5-2 sekaligus mengakhiri penantian panjang 32 tahun sepak bola Indonesia.&lt;/p&gt;&lt;p&gt;Erick berharap, kemenangan Timnas Indonesia melawan Thailand hingga berujung pada mendali emas pada ajang SEA Games 2023 menjadi momentum kebangkitan sepak bola tanah air.&lt;/p&gt;&lt;p&gt;&quot;Ayo kita bangkitkan sepakbola Indonesia. Kita revolusi mental dari sepakbola, setuju,&quot; teriak Erick.&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;3. Akan Sebar Bonus ke Pemain Timnas Indonesia U-22 SEA Games 2023&lt;/strong&gt;&lt;/h4&gt;&lt;figure class=&quot;image&quot;&gt;&lt;img src=&quot;http://localhost/pw2023_223040155/tubes/_asset/img/article/sub/646745546d8d1.jpeg&quot;&gt;&lt;/figure&gt;&lt;p&gt;&lt;a href=&quot;https://www.liputan6.com/bisnis/read/5291630/erick-thohir-sebar-bonus-ke-pemain-timnas-indonesia-u-22-sea-games-2023-berapa-nilainya&quot;&gt;Erick Thohir&lt;/a&gt; memastikan akan memberikan bonus kepada para pemain Tim Nasional Sepakbola U-22 usai memenangkan laga di SEA Games 2023 di Kamboja. Namun, dia belum mengungkap besaran bonus tersebut.&lt;/p&gt;&lt;p&gt;Erick Thohir mengatakan, besaran bonus akan diketahui usai para pemain punggawa Garuda Muda menerima uang bonus tersebut. Kendati begitu, Menteri BUMN ini enggan mengungkap nominal yang disiapkan.&lt;/p&gt;&lt;p&gt;&quot;Nanti kalau udah ditransfer, tanya aja sama pemainnya,&quot; ujarnya.&lt;/p&gt;&lt;p&gt;Pria yang juga menjabat sebagai Menteri BUMN ini juga memberikan kesan memgalokasikan dana pribadi untuk sebagian bonus yang bakal diberikan kepada Timnas U-22. Itu bakal jadi satu bagian dengan bonus dari pemerintah.&lt;/p&gt;&lt;p&gt;&quot;Ya itu paketnya semua,&quot; kata dia.&lt;/p&gt;&lt;p&gt;Senada dengan kesempatan sebelumnya, Erick menyebut kalau bonus dalam bentuk uang bukanlah segalanya. Dia tetap menekankan perlu adanya prestasi yang lebih dulu dikejar oleh para pemain.&lt;/p&gt;&lt;p&gt;&quot;Uang itu bukan segalanya, prestasi (dulu), baru uang. Nanti aja uangnya masuk,&quot; ungkap Erick Thohir.&lt;/p&gt;&lt;p&gt;Pidato menteri BUMN itu tidak berlangsung lama. Rombongan kemudian diminta untuk segera melanjutkan perjalanan mengingat waktu sholat Jumat yang sudah tidak lama lagi. Selanjutnya konvoi Timnas Indonesia U-22 akan kembali ke kawasan Senayan untuk mengakhiri perjalanan di GBK.&lt;/p&gt;', '', '2023-05-19 16:46:42', 1, 3),
(32, 'Permintaan Anies Baswedan ke Pemerintah: Tak Intervensi Pemilu dan Tak Halangi Pencapresan', '646ba8549ed9d.jpg', 'Bakal calon presiden (Bacapres) dari Koalisi Perubahan untuk Persatuan, nies Baswedan meminta agar negara tak ikut campur dalam proses pencapresan seseorang. Menurut Anies, setelah 25 tahun reformasi, masyarakat masih merasa tertekan dalam melaksanakan demokrasi.   &quot;Hari ini sebagian dari kita merasakan kebebasan yang tertekan. Dulu negara mengatur siapa saja, siapa boleh maju ke caleg, siapa boleh maju ke pilpres, siapa boleh maju wali kota bupati, semua diatur.', '&lt;p&gt;Bakal calon presiden (Bacapres) dari Koalisi Perubahan untuk Persatuan, &lt;a href=&quot;https://www.tempo.co/tag/anies-baswedan&quot;&gt;&lt;strong&gt;Anies Baswedan&lt;/strong&gt;&lt;/a&gt; meminta agar negara tak ikut campur dalam proses pencapresan seseorang. Menurut Anies, setelah 25 tahun reformasi, masyarakat masih merasa tertekan dalam melaksanakan demokrasi.&amp;nbsp;&lt;/p&gt;&lt;p&gt;&quot;Hari ini sebagian dari kita merasakan kebebasan yang tertekan. Dulu negara mengatur siapa saja, siapa boleh maju ke caleg, siapa boleh maju ke pilpres, siapa boleh maju wali kota bupati, semua diatur. Hari ini jangan sampai ada pengaturan siapa yang boleh maju dan siapa yang tidak boleh maju,&quot; kata Anies di Tennis Indoor Senayan, Jakarta Pusat, Ahad, 21 Mei 2023.&amp;nbsp;&lt;/p&gt;&lt;p&gt;Pernyataan ini Anies sampaikan saat menemui relawan di acara Temu Kebangsaan Relawan. Acara tersebut dihadiri oleh ribuan relawan Anies yang berasal dari berbagai daerah.&amp;nbsp;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Ucapan Anies itu tampak menyindir Presiden Joko Widodo atau &lt;a href=&quot;https://www.tempo.co/tag/jokowi&quot;&gt;&lt;strong&gt;Jokowi&lt;/strong&gt;&lt;/a&gt; yang sebelumnya kerap memberikan dukungan terhadap sejumlah calon untuk maju pada Pemilihan Presiden (Pilpres) 2024. Jokowi kerap memberikan sinyal kepada Bacapres dari Partai Demokrasi Indonesia Perjuangan, Ganjar Pranowo, dan Bacapres dari Partai Gerindra, Prabowo Subianto.&amp;nbsp;&lt;/p&gt;&lt;p&gt;Sementara Anies sendiri kerap disebut sebagai calon yang tak direstui oleh Jokowi. Aroma penjegalan dirinya untuk maju pada Pilpres menyeruak setelah Ketua Komisi Pemberantasan Korupsi (KPK) Firli Bahuri dikabarkan memaksakan penyelidikan kasus dugaan korupsi Formula E naik ke tahap penyidikan.&lt;/p&gt;&lt;p&gt;Lebih lanjut, Anies menyebut tugas mengatur seseorang maju atau tidak dalam &lt;a href=&quot;https://www.tempo.co/tag/pilpres-2024&quot;&gt;&lt;strong&gt;Pilpres 2024&lt;/strong&gt;&lt;/a&gt; merupakan kewenangan partai politik dan aspirasi rakyat. Anies mengatakan negara harus menjamin kemerdekaan seseorang yang ingin maju dalam pemilu, bukan justru menghentikannya.&lt;/p&gt;&lt;p&gt;&quot;Bukan malah negara menghentikan, bukan negara melarang. Bahwa negara menjamin kemerdekaan dan itu yang harus sekarang kita perjuangkan,&quot; kata eks Gubernur DKI Jakarta itu.&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;Anies minta isu jabatan presiden tiga periode tak dibiarkan&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;Anies Baswedan pun meminta para relawannya untuk tidak membiarkan isu mengenai wacana jabatan &lt;a href=&quot;https://www.tempo.co/tag/presiden-3-periode&quot;&gt;&lt;strong&gt;presiden 3 periode&lt;/strong&gt;&lt;/a&gt;. Menurut Anies, pada reformasi yang terjadi 25 tahun lalu, masyarakat sepakat jabatan presiden hanya dua periode.&amp;nbsp;&lt;/p&gt;&lt;p&gt;&quot;Jadi ketika ada yang punya gagasan untuk memperpanjang, maka kita katakan, kita komit pada aspirasi reformasi,&quot; ujar Anies disambut tepuk tangan dan sorak dari relawannya.&amp;nbsp;&lt;/p&gt;&lt;p&gt;Lebih lanjut, Anies memberi ilustrasi tentang katak yang bila dimasukkan ke dalam sebuah panci berisi air dingin, lalu dinyalakan api yang secara pelan-pelan membuatnya mendidih, maka katak akan mati karena terebus. Namun, jika langsung dilemparkan ke air mendidih, maka katak akan langsung. elompat.&amp;nbsp;&lt;/p&gt;&lt;p&gt;Menurut Anies, kondisi saat ini jika terus dibiarkan, maka kondisinya akan sama dengan katak yang mati di air mendidih yang dimasak dari air dingin.&amp;nbsp;&lt;/p&gt;&lt;p&gt;&quot;Ketika kita berbicara tentang 25 tahun reformasi, mana yang harus kita pegang? Nampaknya pelan-pelan, jadi kalau ada yang punya ide untuk mengubah, kita harus hentikan,&quot; kata Anies. &quot;Jadi kalau ada petinggi-petinggi negeri ini yang pelan-pelan menggeser, jangan pernah dibiarkan karena ini sama menaikkan suhu air.&quot;&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;Anies Baswedan minta pemerintah netral dan tak intervensi Pemilu 2024&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;Sebelumnya, &lt;a href=&quot;https://nasional.tempo.co/read/1684073/resmi-partai-demokrat-dukung-anies-baswedan-maju-pilpres-2024&quot;&gt;&lt;strong&gt;Anies&lt;/strong&gt;&lt;/a&gt; Baswedan meminta agar pemerintah bersikap netral dan tak ikut mempengaruhi rakyat dalam mengambil keputusan di Pemilu 2024. Hal ini Anies sampaikan di tengah gencarnya Presiden Joko Widodo atau Jokowi &lt;i&gt;mengendorse &lt;/i&gt;capres dan memotori terbentuknya Koalisi Besar.&amp;nbsp; Anies meminta agar negara membiarkan rakyat tanpa dipengaruhi dan meminta tak ada tangan negara yang terlibat.&lt;/p&gt;&lt;p&gt;&quot;Percayakan rakyat akan menitipkan kewenangan itu pada yang memiliki rekam jejak yang benar, rekam karya yang benar, dan rekam karya yang baik. Kalau negara ikut ambil andil, maka negara sedang melecehkan rakyat Indonesia,&quot; kata Anies dalam pidatonya di Istora Senayan, Jakarta Pusat, Ahad, 7 Mei 2023.&lt;/p&gt;&lt;p&gt;Menurut Anies rakyat Indonesia sudah cukup matang dan mampu untuk menentukan pilihan di &lt;a href=&quot;https://koran.tempo.co/tag/pemilu-2024&quot;&gt;&lt;strong&gt;Pemilu 2024&lt;/strong&gt;&lt;/a&gt; tanpa perlu diintervensi. Anies juga mengimbau kepada masyarakat untuk menentukan sikap dan menolak untuk dipengaruhi.&lt;/p&gt;&lt;p&gt;&quot;Kepada seluruh rakyat Indonesia mari kita jaga kekuasaan itu ada pada rakyat, bukan pada yang lain. Jangan jual kekuasaan itu sampai nanti di TPS dan sampai nanti perhitungan. Ini bukan soal statistik perhitungan, ini soal hak saya menentukan bangsa ini,&quot; kata Anies.&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;Singgung ada pihak yang takut kehilangan kekuasaan&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;Dalam pidatonya, Anies juga menyinggung soal adanya pihak yang ketakutan kehilangan kekuasaan. Padahal menurut Anies, kekuasaan sejatinya merupakan milik rakyat, bukan pejabat apa lagi parpol. Rakyat, kata Anies, setiap 5 tahun sekali rakyat berhak menitipkan kekuasaan secara bergantian.&lt;/p&gt;&lt;p&gt;&quot;Karena itu, bila ada yang berpandangan khawatir kehilangan kekuasaan, maka sesungguhnya dia tidak paham prinsip demokrasi. Karena kekuasaan itu tidak hilang, kekuasaan tidak pindah, kekuasaan ada pada saudara-saudara semua rakyat Indonesia,&quot; kata Anies.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;M JULNIS FIRMANSYAH&lt;/strong&gt;&lt;/p&gt;', '', '2023-05-23 00:37:24', 2, 3),
(49, 'Ketua Umum PSSI Erick Thohir Sebut Kontrak Shin Tae-yong Hanya sampai Piala Asia 2024', '6471b9754955c.jpg', 'Ketua Umum PSSI Erick Thohir mengatakan bahwa kontrak pelatih timnas Indonesia Shin Tae-yong hanya sampai Piala Asia 2024. Dia berencana akan melakukan pembicaraan lagi dengan juru taktik asal Korea Selatan itu usai kejuaraan tersebut.  &quot;Memang sudah ada pembicaraan dengan Shin Tae-yong bahwa beliau itu kontraknya habis di bulan Desember (2023).', '&lt;p&gt;&lt;strong&gt;TEMPO.CO&lt;/strong&gt;, &lt;strong&gt;Jakarta&lt;/strong&gt; -&amp;nbsp;Ketua Umum PSSI &lt;a href=&quot;https://www.tempo.co/tag/erick-thohir&quot;&gt;&lt;strong&gt;Erick Thohir&lt;/strong&gt;&lt;/a&gt; mengatakan bahwa kontrak pelatih timnas Indonesia Shin Tae-yong hanya sampai Piala Asia 2024. Dia berencana akan melakukan pembicaraan lagi dengan juru taktik asal Korea Selatan itu usai kejuaraan tersebut.&lt;/p&gt;&lt;p&gt;&quot;Memang sudah ada pembicaraan dengan &lt;a href=&quot;https://www.tempo.co/tag/shin-tae-yong&quot;&gt;&lt;strong&gt;Shin Tae-yong&lt;/strong&gt;&lt;/a&gt; bahwa beliau itu kontraknya habis di bulan Desember (2023). Kan opsinya perpanjang atau tidak, tapi kami ada kesepakatan akan persiapkan sampai Piala Asia (2024),&quot; ujar Erick menjawab pertanyaan awak media seusai acara pelantikan pengurus PSSI periode 2023-2027 di Hotel Fairmont, Senayan, Jakarta, Jumat, 26 Mei 2023.&lt;/p&gt;&lt;p&gt;Piala Asia 2023 dijadwalkan berlangsung di Qatar mulai 10 Januari sampai 12 Februari 2024. Indonesia tergabung di Grup D bersama Jepang, Vietnam, dan Irak.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Setelah itu, skuad Garuda akan dihadapkan dengan babak kedua Kualifikasi Piala Dunia 2026 Zona Asia pada Juni 2024 jika berhasil lolos dari babak pertama yang digelar pada Oktober 2023.&lt;/p&gt;&lt;p&gt;Nantinya, Erick akan membahas ulang kesepakatan kontrak dengan Shin Tae-yong untuk Kualifikasi Piala Dunia 2026. Dengan penambahan jumlah peserta dan slot negara Asia, pasukan Merah Putih dibebani target tinggi oleh Menteri Badan Usaha Milik Negara (BUMN) itu.&lt;/p&gt;&lt;p&gt;&quot;Nanti Juli (Juni 2024) itu ada Kualifikasi Piala Dunia (2026) yang harus kami ulang (pembicaraan dengan Shin Tae-yong) dan kedua belah pihak sudah menyepakati,&quot; kata Erick menambahkan.&lt;/p&gt;&lt;p&gt;Tahun ini, timnas Indonesia senior akan menjalani sejumlah agenda, di antaranya &lt;i&gt;FIFA Matchday&lt;/i&gt;, Kualifikasi Piala Dunia 2026 Zona Asia, hingga Piala Asia 2023.&lt;/p&gt;&lt;p&gt;Untuk persiapan pertandingan &lt;i&gt;FIFA Matchday &lt;/i&gt;bulan Juni nanti, Shin Tae-yong bakal memulai pemusatan latihan (TC) timnas Indonesia pada 5 Juni 2023. Ia berencana memanggil pemain lokal dan pemain yang berkarier di luar negeri.&lt;/p&gt;&lt;p&gt;Agenda terdekat, &lt;a href=&quot;https://www.tempo.co/tag/timnas-indonesia&quot;&gt;&lt;strong&gt;timnas Indonesia&lt;/strong&gt;&lt;/a&gt; akan menghadapi timnas Palestina di Stadion Gelora Bung Tomo Surabaya pada 14 Juni 2023. Berikutnya, skuad Garuda dijadwalkan melawan timnas Argentina di Stadion Utama Gelora Bung Karno (SUGBK), Senayan, Jakarta, pada 19 Juni 2023.&lt;/p&gt;', '', '2023-05-27 15:04:05', 2, 3),
(50, 'CS:GO PARIS MAJOR PLAYERS | THE OVER AND UNDERPERFORMERS', '6479b08c129a0.jpg', 'With the final CS:GO Major now behind us, we can now look back at how everyone in the tournament fared under pressure. These are our over and underperformers of the CS:GO Paris Major players.', '&lt;p&gt;In CYPHER, a star was born in Paris. The Into The Breach entry-fragger made a real name for himself, showing up as one of the best CS:GO players at the Paris Major. He was unfortunate to come up against the winning &lt;a href=&quot;https://www.esports.net/news/csgo/vitality-coast-to-victory-in-blast-tv-paris-major-2023/&quot;&gt;Vitality CS:GO&lt;/a&gt; team in the Quarter-Finals, but even there he put in a competitive performance against ZywOo.&lt;/p&gt;&lt;p&gt;The young Brit won over many fans over the course of the tournament, bringing a great personality to match the fragging ability. He’ll be one to watch going forward.&lt;/p&gt;&lt;h3&gt;&lt;strong&gt;IM&lt;/strong&gt;&lt;/h3&gt;&lt;figure class=&quot;image&quot;&gt;&lt;img src=&quot;http://localhost/pw2023_223040155/tubes/_asset/img/article/sub/6479afdf299f4.jpg&quot;&gt;&lt;/figure&gt;&lt;p&gt;Where did GamerLegion find this guy? Until the Grand Final, he outperformed ZywOo out of all the CS:GO Paris Major players, and was on track for MVP of the event. Prior to the BLAST.tv Paris Major, he was well-regarded, but nothing like this. When &lt;a href=&quot;https://www.esports.net/news/csgo/the-kennys-csgo-legacy-tributes-to-a-legend/&quot;&gt;kennyS retired&lt;/a&gt; prior to iM’s Semi-Final match, it really got the hometown crowd going. He thrived in that environment, when so many others buckle.&lt;/p&gt;&lt;p&gt;Regardless of where GamerLegion goes from here, iM heads straight into the upper echelon of top CS:GO riflers, and will surely be in high demand if this team is broken up by the elite organizations.&lt;/p&gt;&lt;h3&gt;&lt;strong&gt;SDY&lt;/strong&gt;&lt;/h3&gt;&lt;figure class=&quot;image&quot;&gt;&lt;img src=&quot;http://localhost/pw2023_223040155/tubes/_asset/img/article/sub/6479aff76b47a.jpg&quot;&gt;&lt;/figure&gt;&lt;p&gt;Of all the CS:GO Paris Major players, none were on a quest for redemption quite like sdy. After being rejected from NAVI last year, he had a point to prove with his new team, Monte. And boy, did he. Operating in an unfamiliar IGL role, sdy’s calls were truly world-class. His fragging was much improved, too, allowing him to have plenty of impact alongside his teammates. It just seemed as though he knew how to get the very best from his Monte players.&lt;/p&gt;&lt;p&gt;He got his redemption when he conquered NAVI in the Legends Stage. It took eventual finalists GamerLegion to knock Monte out of the competition, but sdy can still be proud of what he’s building at the Ukrainian team. Now among the top teams in the world, there is much anticipation about how the team will continue to perform throughout the year.&lt;/p&gt;&lt;h2&gt;&lt;strong&gt;UNDERPERFORMERS&lt;/strong&gt;&lt;/h2&gt;&lt;h3&gt;&lt;strong&gt;NIKO&lt;/strong&gt;&lt;/h3&gt;&lt;figure class=&quot;image&quot;&gt;&lt;img src=&quot;http://localhost/pw2023_223040155/tubes/_asset/img/article/sub/6479b0269ccd8.jpg&quot;&gt;&lt;/figure&gt;&lt;p&gt;It was always going to be him. The big underperformer of all the CS:GO Paris Major players, NiKo was supposed to be one of the favorites to win the entire thing. As one of the best CS:GO players in the world, NiKo was meant to drag G2 to glory to win his first CS:GO Major. It wasn’t to be, and now he will likely go down as the greatest to never win a Major.&lt;/p&gt;&lt;p&gt;While the team around him underperformed, NiKo didn’t exactly cover himself in glory. He went negative in 2 of the 3 maps of the final match against Fnatic, and unfortunately didn’t show up when it really mattered.&lt;/p&gt;&lt;h3&gt;&lt;strong&gt;TWISTZZ&lt;/strong&gt;&lt;/h3&gt;&lt;figure class=&quot;image&quot;&gt;&lt;img src=&quot;http://localhost/pw2023_223040155/tubes/_asset/img/article/sub/6479b040888ff.jpg&quot;&gt;&lt;/figure&gt;&lt;p&gt;Twistzz himself will tell you that this was a terrible tournament for him. He’s undoubtedly one of the best CS:GO players in the world, but his impact was sorely missed for FaZe. He went negative across the entire tournament, which for a star rifler just isn’t good enough. His most impact came in a matchup of one of the greatest &lt;a href=&quot;https://www.esports.net/news/csgo/top-csgo-rivalries/&quot;&gt;CS:GO rivalries&lt;/a&gt; ever, when FaZe met NAVI. Besides that, it was an anonymous performance from Twistzz.&lt;/p&gt;&lt;p&gt;He’s spoken recently about suffering from exhaustion, and that could certainly explain the problem. FaZe will be hoping it’s not a permanent issue, and Twistzz is back to his best sooner rather than later.&lt;/p&gt;&lt;h3&gt;&lt;strong&gt;ELIGE&lt;/strong&gt;&lt;/h3&gt;&lt;figure class=&quot;image&quot;&gt;&lt;img src=&quot;http://localhost/pw2023_223040155/tubes/_asset/img/article/sub/6479b0577d652.jpg&quot;&gt;&lt;/figure&gt;&lt;p&gt;As a team, Liquid had quite a turnaround in the Paris Major. Unfortunately, the performances of EliGE held them back throughout, culminating in a defeat to Apeks. It was an uncharacteristic performance from one of the best CS:GO players around.&lt;/p&gt;&lt;p&gt;While other CS:GO Paris Major players for Liquid thrived, like NAF and YEKINDAR, EliGE couldn’t rise to the occasion this time. Like NiKo, he remains without a Major in CS:GO, and it will likely be his greatest regret in the game.&lt;/p&gt;', '', '2023-06-02 16:04:12', 2, 3),
(51, 'Lagu Terbaru Happy Asmara &#039;Shopee Maszeh&#039; Sukses Bikin Netizen Kepincut', '6479f0d8b817c.jpg', 'Liputan6.com, Jakarta Happy Rismanda Hendranata atau dikenal Happy Asmara adalah seorang penyanyi asal Kediri yang baru saja merilis lagu terbarunya pada Senin (29/5). Lagu terbarunya bahkan langsung meroket di jagat media sosial dan di kalangan pencinta musik dangdut dalam waktu singkat.   Dalam akun Instagram @happy_asmara77 tepatnya di minggu sebelumnya, Happy sempat mengunggah sebuah video singkat dalam Instagram reels. Happy menuliskan: &quot;Wis bosen karo kopi? Tenang, ana sing anyar', '&lt;p&gt;&lt;strong&gt;Liputan6.com, Jakarta&lt;/strong&gt; Happy Rismanda Hendranata atau dikenal Happy Asmara adalah seorang penyanyi asal Kediri yang baru saja merilis lagu terbarunya pada Senin (29/5). Lagu terbarunya bahkan langsung meroket di jagat media sosial dan di kalangan pencinta musik dangdut dalam waktu singkat.&amp;nbsp;&lt;/p&gt;&lt;p&gt;Dalam akun Instagram @happy_asmara77 tepatnya di minggu sebelumnya, Happy sempat mengunggah sebuah video singkat dalam Instagram reels. Happy menuliskan: &lt;i&gt;&quot;Wis bosen karo kopi? Tenang, ana sing anyar dariku” yang artinya “Sudah bosan dengan kopi? Tenang, ada yang baru dariku.&quot;&lt;/i&gt;&lt;/p&gt;&lt;p&gt;&lt;i&gt;Fanbase Happy Asmara, Pasukan Happy Asmara Sejati alias Pashati, sontak memburu postingan Happy tersebut. Di antara hampir 1.000 komentar, banyak yang bertanya-tanya apa hal baru yang dimaksudkan Happy di video tersebut.&lt;/i&gt;&lt;/p&gt;&lt;p&gt;&lt;i&gt;&quot;Aku tim kopi ireng duuuungs… tp ga nolak lhooo kl ada yg anyar dr mbak’e cantik @happy_asmara77 🥰🥰,&quot;&lt;/i&gt; tulis @may.mdm.&lt;/p&gt;&lt;p&gt;&lt;i&gt;&quot;Dadi penasaran, opo sing anyar dari mba cantik niihh,&quot;&lt;/i&gt; kata @srirenys.&lt;/p&gt;&lt;p&gt;&lt;i&gt;&quot;Sing anyar luwih ambyarrrrr…,&quot;&lt;/i&gt; ujar @tati_htn.&lt;/p&gt;&lt;p&gt;Berbagai akun ternama di Instagram, seperti @lambe_turah, @koplo_in_ajah, @dangdutindonesia_id, dan @musikdangdutt turut mengunggah video Happy Asmara yang satu ini. Mereka juga ikut penasaran dengan hal baru apa yang akan disajikan Happy untuk para fans setianya.&lt;/p&gt;&lt;h2&gt;&lt;strong&gt;Shopee Maszeh Baru Diluncurkan Langsung Viral&lt;/strong&gt;&lt;/h2&gt;&lt;p&gt;Setelah dihujani rasa penasaran warganet, akhirnya pada Senin (29/5), Happy Asmara mengunggah video musik atau MV baru di kanal YouTube Happy Asmara Music, Instagram @happy_asmara77, dan TikTok @happyasmara. Lagu terbarunya itu berjudul Shopee Maszeh.&lt;/p&gt;&lt;p&gt;&lt;i&gt;&quot;Tuku opo wae, Shopee Shopee maszeh. Mesti gratis ongkir, Shopee Shopee maszeh. Nggon blonjo sing mantep, Shopee Shopee maszeh.&quot;&lt;/i&gt;&lt;/p&gt;&lt;p&gt;Begitu potongan lagu terbaru Happy Asmara-Shopee Maszeh yang artinya: &lt;i&gt;&quot;Beli apa saja, Shopee Shopee maszeh. Pasti gratis ongkir, Shopee Shopee maszeh. Tempat belanja yang mantap, Shopee Shopee maszeh&quot;.&lt;/i&gt;&lt;/p&gt;&lt;p&gt;Hanya dalam waktu sehari setelah dirilis, MV Happy Asmara-Shopee Maszeh di YouTube sudah ditonton hampir 3 juta kali. Hingga Kamis (1/6), video tersebut pun sudah menerima hampir 10.000 komentar dari warganet dan disukai oleh lebih dari 15.000 akun.&lt;/p&gt;&lt;p&gt;Komentar-komentar tersebut berisi pujian atas asyiknya lagu Shopee Maszeh yang dinyanyikan Happy Asmara. Mereka memuji lirik, irama, dan suara penyanyi kelahiran 1999 tersebut.&lt;/p&gt;&lt;p&gt;&lt;i&gt;&quot;Aku nontone melu senyum weruh sampean full senyum sepanjang lagu mba hepp, bahagia terus nggeh 👏,&quot;&amp;nbsp;&lt;/i&gt;kata Aryha Noegraha.&lt;/p&gt;&lt;p&gt;&lt;i&gt;&quot;suka banget sama mba happy ini, punya suara yang khas enak banget di dengernya bikin candu, yakin lagu ini bakalan viral dan trending amiin sukses selalu buat mba Happy,&quot;&lt;/i&gt; puji akun Tentang Desaku.&lt;/p&gt;&lt;p&gt;&lt;i&gt;&quot;Wis pokoke ora iso ngomong opo opo. Trending&amp;nbsp; jos gandos kewos kewos,&quot;&lt;/i&gt; ujar Alfiyan Alfiyan.&lt;/p&gt;&lt;p&gt;&lt;i&gt;&quot;Uueennaakkk lagune,sukses terus mbak heppy bismillah trending lagi,&quot;&lt;/i&gt; kata Wiwin Suryani.&lt;/p&gt;&lt;p&gt;Sama viralnya dengan videonya di YouTube, hingga Rabu (1/6), MV Shopee Maszeh yang diunggah Happy Asmara di akun TikTok-nya juga sudah mencapai lebih dari 10 juta views.&lt;/p&gt;&lt;p&gt;Lagu Shopee Maszeh tidak hanya bisa didengarkan di YouTube. Kini, lagu terbaru penyanyi asal Kediri tersebut juga sudah mulai diputar di berbagai radio, baik di kota-kota besar seperti Jakarta hingga ke berbagai pelosok di daerah.&lt;/p&gt;&lt;p&gt;Lagu dan video Shopee Maszeh ini memang terbilang sukses besar dalam membuat netizen heboh. Buktinya, di hari peluncuran lagu terbaru Happy tersebut, hashtag #ShopeeMaszeh berhasil trending #1 di Twitter selama lebih dari 40 jam.&amp;nbsp;&lt;/p&gt;&lt;p&gt;Viralnya lagu ini semakin terasa dengan adanya beberapa artis papan atas yang mengunggah potongan MV Happy Asmara-Shopee Maszeh di Instagram-nya, seperti @raffinagita1717, @attahalilintar, dan @aurelie.hermansyah. Mereka menyatakan sangat menyukai lagu terbaru Happy Asmara yang satu ini.&lt;/p&gt;&lt;p&gt;Berbagai akun Instagram juga mengunggah potongan MV Shopee Maszeh tersebut, seperti @lambe_turah, @jakarta.keras, @mood.jakarta, dan @dangdutjatim.&amp;nbsp;&lt;/p&gt;&lt;p&gt;Adapun pada hari yang sama dengan perilisan lagu Shopee Maszeh, Happy Asmara sempat tampil live di stage Dahsyat Award di RCTI dan membawakan lagu terbarunya itu, perdana di layar TV. Penampilannya ini mendapat respons yang luar biasa meriah dari penonton.&lt;/p&gt;&lt;p&gt;Lalu dalam Kontes Ambyar Indonesia yang tayang pada Rabu (31/5) di MNCTV, Happy yang dikenal sebagai Ratu Ambyar itu membawakan lagu terbarunya Shopee Maszeh yang disebut-sebut sebagai &#039;Lagu Dangdut Paling Ambyar 2023&#039;.&amp;nbsp;&lt;/p&gt;&lt;p&gt;Artinya, hanya dalam beberapa hari setelah diluncurkan, lagu Shopee Maszeh yang dipopulerkan Happy ini sudah berhasil menggetarkan panggung dangdut Indonesia.&lt;/p&gt;&lt;h3&gt;#JogetShopeeMaszeh Ikut Trending di Media Sosial&lt;/h3&gt;&lt;p&gt;Tak hanya dari segi lagu, Happy Asmara juga sukses menjadikan #JogetShopeeMaszeh viral. Gerakan ini memang ia tampilkan dalam MV Shopee Maszeh.&lt;/p&gt;&lt;p&gt;Dengan gerakan yang simpel tetapi asyik, Joget Shopee Maszeh sukses diikuti oleh banyak pengguna media sosial, terutama di TikTok, Instagram, dan Twitter. Hingga kini, sudah ada ratusan video Joget Shopee Maszeh yang diunggah di TikTok dengan background song lagu Shopee Maszeh.&lt;/p&gt;&lt;p&gt;Menariknya, seiring&amp;nbsp;kesuksesan hashtag #ShopeeMaszeh, ternyata hashtag #JogetShopeeMaszeh juga sukses trending #1 di Twitter selama dua hari berturut-turut non-stop. Yup, keviralan lagu terbaru Happy Asmara &#039;Shopee Maszeh&#039; ini memang menjadi bukti, kalau pedangdut cantik ini semakin sukses mencuri hati para Pashati dan pencinta dangdut Tanah Air.&lt;/p&gt;', '', '2023-06-02 20:38:32', 1, 3),
(52, 'Tetris, Game Uni Soviet yang Jadi Rebutan Jepang dan AS', '647b18505a87f.jpg', 'Tetris game paling populer era 80-90an, permainan ini memang terlihat sederhana, tapi merangsang otak kita untuk terus berpikir dalam menyusun balok dengan rapi.  Tetris adalah salah satu permainan paling populer di dunia. Tidak ada data terpadu dan terkonfirmasi tentang perbedaan metode penjualan dan penghitungan. Tetapi gzmd ini secara konsisten berada di urutan ke-3 dalam &#039;permainan terbaik sepanjang masa&#039; hanya sesekali digeser oleh Minecraft', '&lt;p&gt;MOSCOW - Tetris game paling populer era 80-90an, permainan ini memang terlihat sederhana, tapi merangsang otak kita untuk terus berpikir dalam menyusun balok dengan rapi.&lt;/p&gt;&lt;p&gt;Tetris adalah salah satu permainan paling populer di dunia. Tidak ada data terpadu dan terkonfirmasi tentang perbedaan metode penjualan dan penghitungan.&lt;br&gt;Tetapi gzmd ini secara konsisten berada di urutan ke-3 dalam &#039;permainan terbaik sepanjang masa&#039; hanya sesekali digeser oleh Minecraft (238 juta eksemplar) dan Grand Theft Auto 5 (175 juta eksemplar).&lt;br&gt;Menurut pembuat &#039;Tetris&#039;, jika kita mempertimbangkan versi multi-platform, sejak 1984, lebih dari 520 juta salinan gim telah terjual. Di mana penjualan pertama menperoleh kuntungan yang sangat besar.&lt;br&gt;Tapi, intinya bukan pada penjualan &#039;Tetris&#039; dapat dimainkan secara gratis di situs web resmi dan ratusan tempat lainnya. Pasalnya, permainan video ini telah menjadi fenomena budaya, salah satu simbol hiburan digital yang paling dikenal. Tak berapa lama, ada pengusaha Belanda yang biasa membuat game-game di Nintendo bernama Henk Rogers melihat Tetris dan ia pun jatuh cinta. Pajitnov kemudian dibantu untuk mengembangkan Tetris agar lebih bagus dan menjadi terkenal sangat cepat. Tetris lalu meledak. Banyak perusahaan game yang membuat Tetris versi mereka sendiri dan dijual bersama berbagai perangkat game lainnya.&lt;br&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Untuk menjaga hak cipta Tetris, Uni Soviet membuat Elorg yaitu perusahaan yang mengatur segala perizinan dan lisensi terkait game Tetris. Perusahaan Elorg menetapkan dua perusahaan di dunia yang diberi izin untuk menjual Tetris, yaitu Atari dan Nintendo. Atari adalah perusahaan game yang berasal dari Amerika, mereka diizinkan untuk menjual Tetris di Perangkat Komputer. Sedangkan Nintendo adalah perusahaan Jepang yang diberi izin untuk menjual Tetris di perangkat yang lebih kecil semacam gadget. Namun setelah itu, Atari ternyata melanggar perjanjiannya dengan menjual Tetris di gadget yang berukuran kecil, yang dapat dimasukkan ke dalam kantong. Mengetahui itu, Nintendo pun menuntut Atari. Kemudian dalam beberapa tahun kedua perusahaan ini menjadi tidak akur.&lt;br&gt;Mengetahui itu, Nintendo pun menuntut Atari. Kemudian dalam beberapa tahun kedua perusahaan ini menjadi tidak akur. Tetris populer pada 1988 dalam bentuk permainan elektronik bernama Game Boy yang diluncurkan oleh Nintendo. Dulunya Nintendo ingin memasukkan game-nya sendiri, yaitu Super Mario Bros ke dalam Game Boy. Namun tidak jadi dilakukan, mengingat Tetris lebih menarik perhatian semua orang, dibandingkan Super Mario bros yang waktu itu hanya disukai anak-anak. Hingga tahun 1996, akhirnya perusahaan bernama Tetris Company didirikan guna mengurus semua lisensi, pelatihan, dan perizinan. Kini Tetris juga sudah ada dalam Xbox One dan Playstation 4 dengan nama tetris Ultimate, yang merupakan hasil kerja sama dari Ubisoft dan Tetris Company.&lt;br&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Lagu Rusia &#039;Korobushka&#039; (soundtrack dalam permainan) sangat terkait secara khusus dengan &#039;Tetris&#039; di dunia. Bahkan tidak ada yang ingat bahwa, pada kenyataannya, itu memiliki lirik yang dipinjam dari puisi Nikolay Nekrasov &#039;Korobeiniki&#039;, yang ditulis pada abad ke-19.&lt;/p&gt;', '', '2023-06-03 17:39:12', 2, 3),
(53, 'Musisi Favorit Sandiaga Uno di Java Jazz Festival 2023 ', '647b44454d105.jpg', 'Jakarta International BNI Java Jazz Festival (JJF) ke-18 kembali digelar tahun ini mulai tanggal 2-4 Juni 2023 di Jakarta International Expo (JIExpo) Kemayoran. Acara musik bergengsi ini pun hadir dengan beragam line up yang tentunya sangat berbakat di bidangnya. Dengan total 12 panggung, Java Jazz Festival kali ini menyuguhkan kurang lebih 140 musisi lokal maupun internasional yang sangat dinanti para penggemar musik jazz.', '&lt;p&gt;KOMPAS.com - Jakarta International BNI Java Jazz Festival (JJF) ke-18 kembali digelar tahun ini mulai tanggal 2-4 Juni 2023 di Jakarta International Expo (JIExpo) Kemayoran. Acara musik bergengsi ini pun hadir dengan beragam line up yang tentunya sangat berbakat di bidangnya. Dengan total 12 panggung, Java Jazz Festival kali ini menyuguhkan kurang lebih 140 musisi lokal maupun internasional yang sangat dinanti para penggemar musik jazz. Ada pun deretan nama musisi internasional yang hadir memeriahkan Java Jazz Festival 2023, antara lain Stacey Ryan, MAX, Cory Wong, Stephen Sanchez, dan The Chicago Experience Feat. Danny Seraphine &amp;amp; Jeff Coffey. Kemudian, dari musisi Indonesia ada Ardhito Pramono, Mahalini, Lyodra, Rizky Febian, Vina Panduwinata, Fariz RM, Ariel NOAH, Bunga Citra Lestari, dan banyak lagi. Ditemui dalam konferensi pers ALL-Accor Live Limitless, Menteri Pariwisata dan Ekonomi Kreatif Indonesia, Sandiaga Uno, pun menyampaikan apresiasinya terhadap acara internasional tahunan ini. &quot;Java Jazz Festival sangat memberikan dampak yang luar biasa tidak hanya bagi sektor ekonomi dan UMKM, tetapi juga industri musik dan pariwisata,&quot; terangnya di Grand Mercure Kemayoran, Jakarta Pusat, Jumat (2/6/2023). &quot;Terlebih lagi, Java Jazz Festival juga telah masuk ke dalam salah satu Kharisma Event Nusantara yang terkurasi atau acara musik unggulan Indonesia,&quot; tambah Sandiaga. Pada Java Jazz Festival ini, Sandiaga juga membeberkan beberapa musisi favoritnya. Pertama dari internasional ada The Chicago Experience Feat. Danny Seraphine &amp;amp; Jeff Coffey.&lt;br&gt;&lt;br&gt;&quot;Beberapa performer menurut saya tidak boleh dilewatkan. Salah satunya adalah The Chicago. Itu dulu terkenal sekali waktu zaman saya masih muda,&quot; ujarnya. Kemudian, untuk musisi Indonesia, Sandiaga mengaku sangat tertarik melihat penampilan duet antara Ariel Noah dan Bunga Citra Lestari atau BCL. &quot;Kalau Ariel dan BCL pasti bakal membludak penontontonnya karena penggemar pun banyak,&quot; ungkap Sandiaga. Terakhir, jika ada waktu, Sandiaga mengaku ingin menyaksikan penampilan dari musisi termuda Java Jazz Festival. &quot;Ini anaknya teman saya, namanya Kemal Mawira dan usianya masih di bawah 10 tahun,&quot; kata Sandiaga. &quot;Sepertinya dia akan memecahkan MURI karena jadi musisi termuda dalam sejarah 18 tahun Java Jazz Festival telah berlangsung hingga sekarang.&quot; &quot;Nah, karena melihat line up tahun ini semuanya sangat menarik, saya berharap sih semakin banyak festival di Indonesia yang musik-musiknya juga dibawakan oleh para musisi kebanggaan Indonesia,&quot; imbuh dia&lt;br&gt;&amp;nbsp;&lt;/p&gt;', '', '2023-06-03 20:46:45', 1, 3);
INSERT INTO `article` (`id`, `title`, `img`, `shortContent`, `content`, `keyword_category`, `insert_date`, `user_id`, `visibility_id`) VALUES
(54, 'Musim Ini Man City Berpeluang Treble, Musim Depan? Belum Tentu', '647c3bc263616.jpg', 'Bola.net - Josep Guardiola mengatakan Manchester City musim 2022/2023 ini memang berpeluang meraih treble tapi ke depannya peluang itu mungkin sulit mereka dapatkan lagi.  Man City berpeluang mencatatkan sejarah pada musim 2022/2023 ini. Mereka memiliki peluang untuk bisa meraih tiga gelar dalam semusim.', '&lt;p&gt;&lt;strong&gt;Bola.net - &lt;/strong&gt;&lt;a href=&quot;https://www.bola.net/tag/josep-guardiola/&quot;&gt;Josep Guardiola&lt;/a&gt; mengatakan &lt;a href=&quot;https://www.bola.net/tag/manchester-city/&quot;&gt;Manchester City&lt;/a&gt; musim 2022/2023 ini memang berpeluang meraih treble tapi ke depannya peluang itu mungkin sulit mereka dapatkan lagi.&lt;/p&gt;&lt;p&gt;Man City berpeluang mencatatkan sejarah pada musim 2022/2023 ini. Mereka memiliki peluang untuk bisa meraih tiga gelar dalam semusim.&lt;/p&gt;&lt;p&gt;Mereka sebelumnya sudah berhasil menjadi juara Premier League. City melakukannya dengan menikung Arsenal.&lt;/p&gt;&lt;p&gt;City kemudian berhasil meraih trofi FA Cup 2022/2023. Di final, mereka mengalahkan &lt;a href=&quot;https://www.bola.net/tag/manchester-united/&quot;&gt;Manchester United&lt;/a&gt;.&lt;/p&gt;&lt;h2&gt;City Bisa Ikuti Jejak MU&lt;/h2&gt;&lt;p&gt;Kini Manchester City hanya perlu memenangkan trofi Liga Champions. Di final mereka harus bisa menjegal wakil Serie A, &lt;strong&gt;Inter Milan&lt;/strong&gt;.&lt;/p&gt;&lt;p&gt;Jika bisa meraih treble, maka City akan mengikuti jejak Manchester United. Pada tahun 1999 silam, MU sukses meraih treble.&lt;/p&gt;&lt;p&gt;MU jadi satu-satunya tim asal Inggris yang sukses melakukan treble. Pengertian treble di Inggris sendiri adalah memenangkan trofi Premier League, FA Cup, dan Liga Champions.&lt;/p&gt;&lt;h2&gt;Peluang yang Mungkin Cuma Muncul Sekali&lt;/h2&gt;&lt;p&gt;Josep Guardiola lantas mengatakan bahwa skuad Manchester City kini sangat bersemangat untuk bisa meraih treble. Ia juga mengatakan anak-anak asuhnya paham bahwa peluang untuk bisa meraih gelar juara Liga&amp;nbsp; Champions itu harus dimanfaatkan semaksimal mungkin karena musim depan atau musim-musim berikutnya, mereka kemungkinan kesulitan mendapat peluang yang sama.&lt;/p&gt;&lt;p&gt;&quot;Mereka tahu apa yang kita miliki di depan kita. Semua orang mengatakan &#039;satu lagi untuk dijalani, satu pertandingan lagi untuk dijalani&#039;,&quot; ujarnya pada &lt;i&gt;Eurosport&lt;/i&gt;.&lt;/p&gt;&lt;p&gt;&quot;Mereka merasa kita berada dalam posisi kita mungkin tidak akan pernah ada lagi, dan setelah kita memiliki tiga atau empat sesi latihan, untuk bersiap untuk [menghadapi Inter Milan. Saya punya waktu dua hari untuk menonton mereka. Lalu kami pergi ke sana untuk mencoba [meraih kemenangan],&quot; tandas Guardiola.&lt;/p&gt;', 'sport', '2023-06-04 14:22:42', 1, 3),
(55, 'Asteriskk Ungkap Lebih Menantang Main di SEA Games Dibandingkan VCT Indonesia', '647d6748cf7e3.jpeg', 'Pro Player Alter Ego divisi Valorant Nanda &#039;Asteriskk&#039; Rizana mengaku, bermain untuk SEA Games 2023 Kamboja lebih menantang ketimbang bermain di Turnamen Valorant Challenger Indonesia Split 2.  Kendati demikian, Alter Ego harus puasa mendapatkan juara ketiga pada ajang tersebut, timnya berhasil membawa pulang uang senilai 3.500 USD. Asteriskk mengatakan bermain mewakili Tim Nasional (timnas) Indonesia lebih menantang ketimban SEA Games', '&lt;p&gt;&lt;i&gt;Pro Player&lt;/i&gt; &lt;strong&gt;Alter Ego&lt;/strong&gt; divisi &lt;strong&gt;Valorant&lt;/strong&gt; &lt;strong&gt;Nanda &#039;Asteriskk&#039; Rizana&lt;/strong&gt; mengaku, bermain untuk &lt;strong&gt;SEA Games 2023 Kamboja&lt;/strong&gt; lebih menantang ketimbang bermain di &lt;strong&gt;Turnamen Valorant Challenger Indonesia Split 2.&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Kendati demikian, Alter Ego harus puasa mendapatkan juara ketiga pada ajang tersebut, timnya berhasil membawa pulang uang senilai 3.500 USD. Asteriskk mengatakan bermain mewakili Tim Nasional (timnas) Indonesia lebih menantang ketimban SEA Games, karena pada turnamen SEA Games hanya sebentar waktu yang dibutuhkan untuk menjalin kedekatan antar sesama pemain.&lt;/p&gt;&lt;p&gt;&quot;&lt;i&gt;Lebih menantang timnas karena, di Alter Ego event VCT ini bonding sudah lama tapi kalau pas timnas adaptasi lagi,&quot;&lt;/i&gt; ungkapnya kepada esports.id di Jakarta, Minggu (04/06/2023).&lt;/p&gt;&lt;p&gt;Dalam ajang tersebut,&amp;nbsp;Asteriskk mendapatkan penghargaan Best Controller in VCT Indonesia. Sebelumnya, Asteriskk merupakan perain mendali emas pada ajang SEA Games untuk nomor pertandingan Valorant. Pemain asal Riau ini nantinya akan mendapatkan bonus dari capaian yang telah diraihnya tersebut.&lt;/p&gt;&lt;p&gt;Dikutip dari halaman resmi Riau.go.id Asteriskk mengaku bangga menjadi bagian dari Timnas Indonesia. Tidak hanya itu, ia juga merasa bahwa dirinya dapat mengharumkan kampung halamannya itu.&lt;/p&gt;&lt;p&gt;&quot;&lt;i&gt;Saya senang dan bangga bisa membawa nama harum tanah air Indonesia di ajang olaharaga Internasional, SEA Games. Saya bangga memberikan emas bagi tanah kelahiran saya, saya juga bangga mengharumkan nama Riau,”&lt;/i&gt; ujar Nanda Rizana.&lt;/p&gt;&lt;p&gt;Tambah, Ketua umum KONI Riau Iskandar Hoesin, mengatakan, bahwa pihaknya turut bangga dengan prestasi yang dicapai para atlet Riau. Ia bahkan, akan memberikan biaya pembinaan jika atlet yang berprestasi itu benar-benar terus memperkuat atlet Riau.&lt;/p&gt;&lt;p&gt;&quot;&lt;i&gt;Kami turut bangga dengan keberhasilan ini, karena esport adalah olahraga milenial yang tampil atau atletnya itu adalah milenial&lt;/i&gt;,&quot; ujar Iskandar.&lt;/p&gt;&lt;p&gt;Sebagai apresiasi terhadap prestasi yang diraih atlet Riau, KONI Riau akan memberikan uang pembinaan dari serta penghargaan berupa bonus dari pemerintah daerah. Dan untuk uang saku juga sudah disiapkan, bagi atlet yang memperkuat Indonesia pada SEA Games lalu.&lt;/p&gt;&lt;p&gt;&quot;&lt;i&gt;Kita berharap atlet kita ini terus berlatih untuk tetap mempertahankan prestasi,” &lt;/i&gt;kata Iskandar Hoesin.&lt;/p&gt;', 'games  gamer', '2023-06-05 11:40:40', 2, 3),
(56, 'Waspadai Gula Darah Tinggi pada Ibu Hamil, Butuh Penanganan Khusus', '647ead880c35d.jpg', 'Spesialis penyakit dalam konsultan endokrin metabolik diabetes Yuanita Asri Langi mengatakan ibu hamil yang mengalami diabetes perlu mendapatkan penanganan khusus. Pasalnya, gula darah tinggi akan mempengaruhi kehamilan.  &quot;Aliran darah pada ibu yang diabetes melitus dengan kadar gula darah yang tinggi akan memengaruhi proses kehamilan dan proses bayi di dalam kandungan. Itulah yang menyebabkan ibu hamil dengan diabetes melitus perlu penanganan secara khusus,&quot; ', '&lt;p&gt;&lt;strong&gt;TEMPO.CO&lt;/strong&gt;, &lt;strong&gt;Jakarta&lt;/strong&gt; -&amp;nbsp;Spesialis penyakit dalam konsultan endokrin metabolik diabetes Yuanita Asri Langi mengatakan ibu hamil yang mengalami diabetes perlu mendapatkan penanganan khusus. Pasalnya, &lt;a href=&quot;https://www.tempo.co/tag/gula-darah-tinggi&quot;&gt;&lt;strong&gt;gula darah tinggi&lt;/strong&gt;&lt;/a&gt; akan mempengaruhi kehamilan.&lt;/p&gt;&lt;p&gt;&quot;Aliran darah pada ibu yang diabetes melitus dengan kadar gula darah yang tinggi akan memengaruhi proses kehamilan dan proses bayi di dalam kandungan. Itulah yang menyebabkan ibu hamil dengan diabetes melitus perlu penanganan secara khusus,&quot; kata dokter di RSUP Prof. Dr. R.D. Kandou Manado itu.&lt;/p&gt;&lt;p&gt;Menurut Yuanita, ada dua jenis &lt;a href=&quot;https://www.tempo.co/tag/diabetes&quot;&gt;&lt;strong&gt;diabetes&lt;/strong&gt;&lt;/a&gt; pada ibu hamil, yaitu diabetes melitus hamil (DMH) dan diabetes melitus gestasional (DMG). Ia menjelaskan DMH artinya ketika wanita sudah didiagnosis menderita diabetes melitus kemudian hamil.&amp;nbsp;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Sementara DMG adalah ketika ia tidak pernah terdiagnosa diabetes melitus namun ketika hamil kadar gula darahnya di atas normal. Baik DMH maupun DMG perlu dikelola dengan baik karena kadar glukosa darah yang tinggi akan mempengaruhi fungsi dan perkembangan plasenta.&lt;/p&gt;&lt;p&gt;&quot;Apapun juga, kalau gula darah naik di atas normal akan mempengaruhi perkembangan dan fungsi plasenta,&quot; ujar Yuanita.&lt;/p&gt;&lt;p&gt;Padahal, plasenta mengatur nutrisi dan banyak hal lain terhadap janin. Untuk itu, wanita yang sudah didiagnosis &lt;a href=&quot;https://www.tempo.co/tag/diabetes-melitus&quot;&gt;&lt;strong&gt;diabetes melitus &lt;/strong&gt;&lt;/a&gt;kehamilan sebaiknya direncanakan terlebih dulu sehingga tubuh ibu lebih siap menjalaninya.&lt;/p&gt;&lt;p&gt;&quot;Kehamilannya harus direncanakan. Artinya, diusahakan sel sperma bertemu sel telur saat gula darah bagus,&quot; jelasnya.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;3 tahap pengelolaan&lt;/strong&gt;&lt;br&gt;Yuanita menjelaskan perencanaan kehamilan pada wanita dengan diabetes melitus penting sebab ia akan melewati tiga tahap pengelolaan kesehatan, yakni sebelum pembuahan (prakonsepsi), selama hamil (antenatal), dan setelah melahirkan (pospartum). Sementara mengenai DMG, ia mengatakan kondisi tersebut memiliki dampak buruk, baik terhadap ibu maupun bayi.&lt;/p&gt;&lt;p&gt;Pada ibu, dampak jangka pendeknya adalah preeklamsia atau eklamsia dan sulit saat melahirkan. Sedangkan jangka panjang di antaranya mengalami DMG pada kehamilan selanjutnya hingga berisiko mengalami diabetes melitus tipe 2 dan penyakit jantung koroner.&lt;/p&gt;&lt;p&gt;Pada bayi, dampak jangka pendek DMG di antaranya hipoglikemia neonatal dan distosia bahu. Sedangkan jangka panjang termasuk risiko obesitas, diabetes melitus tipe 2, hipertensi, hingga penyakit jantung koroner.&lt;/p&gt;&lt;p&gt;Adapun, penatalaksanaan diabetes pada ibu hamil dengan terapi nutrisi medis melalui pengaturan asupan nutrisi, latihan fisik terjadwal, pemantauan gula darah, baik secara mandiri atau didampingi, serta mengendalikan peningkatan berat badan ibu saat hamil. Jika indeks massa tubuh (IMT) ibu sebelum hamil kurang maka kenaikan berat badan selama hamil yang diperbolehkan adalah 12,5-18 kilogram. Sedangkan jika lebih adalah 7-11,5 kilogram dan jika diabetes adalah 5-9 kilogram.&lt;/p&gt;&lt;p&gt;&quot;Jika IMT ibu sebelum hamil normal maka selama kehamilan dia boleh naik berat badan maksimal 16 kilogram,&quot; ujar Yuanita.&lt;/p&gt;', 'kesehatan healthy', '2023-06-06 10:52:40', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `article_category`
--

CREATE TABLE `article_category` (
  `article_id` int NOT NULL,
  `category_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `article_category`
--

INSERT INTO `article_category` (`article_id`, `category_id`) VALUES
(1, 4),
(2, 2),
(3, 2),
(5, 1),
(5, 2),
(10, 1),
(10, 2),
(12, 1),
(14, 2),
(16, 1),
(17, 2),
(18, 2),
(19, 3),
(23, 1),
(23, 6),
(25, 2),
(32, 1),
(49, 2),
(50, 4),
(51, 3),
(52, 4),
(53, 3),
(54, 2),
(55, 4),
(56, 5);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `category_name`) VALUES
(1, 'political'),
(2, 'sport'),
(3, 'music'),
(4, 'games'),
(5, 'health'),
(6, 'crime');

-- --------------------------------------------------------

--
-- Table structure for table `category_keyword`
--

CREATE TABLE `category_keyword` (
  `id_category_keyword` int NOT NULL,
  `category_id` int NOT NULL,
  `keyword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category_keyword`
--

INSERT INTO `category_keyword` (`id_category_keyword`, `category_id`, `keyword`) VALUES
(1, 1, 'political'),
(2, 2, 'sport'),
(3, 3, 'music'),
(4, 4, 'games'),
(5, 1, 'politik'),
(6, 2, 'olahraga'),
(7, 3, 'musik'),
(8, 4, 'permainan'),
(9, 5, 'kesehatan'),
(10, 5, 'healthy'),
(11, 2, 'sepakbola'),
(12, 2, 'bola'),
(13, 6, 'crime'),
(14, 6, 'korupsi');

-- --------------------------------------------------------

--
-- Table structure for table `commentar`
--

CREATE TABLE `commentar` (
  `id_comment` int NOT NULL,
  `description` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `insert_date` datetime NOT NULL,
  `user_id` int NOT NULL,
  `article_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commentar`
--

INSERT INTO `commentar` (`id_comment`, `description`, `insert_date`, `user_id`, `article_id`) VALUES
(1, 'Indonesia Luar BIASA!', '2023-05-18 21:59:07', 1, 18),
(2, 'MEGAWAT EMANG GG', '2023-05-18 22:01:37', 1, 16),
(3, 'KEREN\r\n', '2023-05-19 09:53:43', 1, 18),
(4, 'ayo king indo, pasti bisa dengan mudah membantai bantai, karna kita adalah king letsgow pasti bisa ', '2023-05-19 10:22:37', 1, 14),
(5, 'Keren Pak Eric Tohir🤩', '2023-05-21 13:14:50', 3, 25),
(6, 'Emang Panutan Bapak👍', '2023-05-21 13:19:13', 1, 25),
(7, 'hai', '2023-05-21 13:34:12', 1, 25),
(8, 'test test', '2023-05-21 15:15:51', 1, 25),
(9, 'yah gitu', '2023-05-21 15:16:15', 1, 25),
(10, 'halo', '2023-05-23 00:42:10', 2, 25);

-- --------------------------------------------------------

--
-- Table structure for table `popularity`
--

CREATE TABLE `popularity` (
  `article_id` int NOT NULL,
  `daily` int NOT NULL DEFAULT '0',
  `weekly` int NOT NULL DEFAULT '0',
  `monthly` int NOT NULL DEFAULT '0',
  `update_data` date NOT NULL,
  `lifetime` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `popularity`
--

INSERT INTO `popularity` (`article_id`, `daily`, `weekly`, `monthly`, `update_data`, `lifetime`) VALUES
(1, 0, 0, 1, '2023-06-11', 46),
(2, 0, 0, 0, '2023-06-11', 5),
(3, 6, 6, 6, '2023-06-11', 18),
(5, 0, 2, 2, '2023-06-11', 7),
(7, 0, 0, 0, '2023-06-11', 3),
(8, 0, 0, 0, '2023-06-11', 19),
(9, 0, 0, 0, '2023-06-11', 4),
(10, 0, 0, 0, '2023-06-11', 20),
(11, 0, 0, 0, '2023-06-11', 59),
(12, 0, 0, 0, '2023-06-11', 37),
(13, 0, 0, 0, '2023-06-11', 15),
(14, 0, 0, 0, '2023-06-11', 44),
(15, 0, 0, 0, '2023-06-11', 41),
(16, 0, 0, 0, '2023-06-11', 13),
(17, 0, 0, 2, '2023-06-11', 18),
(18, 0, 0, 0, '2023-06-11', 39),
(19, 0, 0, 1, '2023-06-11', 17),
(23, 0, 1, 1, '2023-06-11', 70),
(25, 15, 15, 37, '2023-06-11', 265),
(32, 0, 0, 7, '2023-06-11', 24),
(49, 0, 1, 3, '2023-06-11', 19),
(50, 0, 4, 25, '2023-06-11', 25),
(51, 0, 0, 6, '2023-06-11', 6),
(52, 0, 2, 10, '2023-06-11', 10),
(53, 0, 9, 11, '2023-06-11', 11),
(54, 0, 40, 74, '2023-06-11', 74),
(55, 0, 272, 272, '2023-06-11', 272),
(56, 0, 70, 70, '2023-06-11', 70);

-- --------------------------------------------------------

--
-- Table structure for table `reporting`
--

CREATE TABLE `reporting` (
  `id_reporting` int NOT NULL,
  `img_reporting` varchar(255) NOT NULL,
  `desc_reporting` text NOT NULL,
  `status_id` int NOT NULL,
  `article_id` int NOT NULL,
  `reporter_id` int NOT NULL,
  `admin_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reporting`
--

INSERT INTO `reporting` (`id_reporting`, `img_reporting`, `desc_reporting`, `status_id`, `article_id`, `reporter_id`, `admin_id`) VALUES
(1, 'screenshot_1686010704.png', 'si abang jago banget gasuka', 3, 55, 1, NULL),
(2, 'screenshot_1686013266.png', 'bang udah bang', 3, 50, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int NOT NULL,
  `role_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'Author'),
(3, 'User'),
(4, 'Banned');

-- --------------------------------------------------------

--
-- Table structure for table `role_request`
--

CREATE TABLE `role_request` (
  `id_request_role` int NOT NULL,
  `status_id` int NOT NULL,
  `user_id` int NOT NULL,
  `role_id` int NOT NULL,
  `admin_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `role_request`
--

INSERT INTO `role_request` (`id_request_role`, `status_id`, `user_id`, `role_id`, `admin_id`) VALUES
(1, 2, 3, 2, 1),
(2, 1, 3, 3, 1),
(3, 1, 3, 2, 1),
(4, 3, 3, 2, NULL),
(5, 3, 2, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int NOT NULL,
  `status_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `status_name`) VALUES
(1, 'accepted'),
(2, 'denied'),
(3, 'waiting');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `img` varchar(50) NOT NULL DEFAULT 'no-profile.png',
  `first_name` varchar(10) NOT NULL,
  `last_name` varchar(10) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `id_role` int NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `img`, `first_name`, `last_name`, `birthdate`, `gender`, `username`, `email`, `password`, `id_role`) VALUES
(1, '647e8d5410aa2.jpg', 'Narapati', 'Anandi', '2004-02-24', 'Male', 'lio_keysa24', 'narapatikeysa00@gmail.com', '$2y$10$FMwRaVua/PP/ryoxyrr2/unuTiC1/8eS1AUoGoiHwXqTMFxCCq5qO', 1),
(2, 'no-profile.png', 'Catherine', 'Nathania', '2004-07-16', 'Female', 'catherinenathania16', 'catherinenathania16@gmail.com', '$2y$10$F8m2fw/nfGSAWe2/LGy2NuZ.dPLdvPPMcAFLQcsmiHvhdoPvV4kUG', 2),
(3, 'no-profile.png', 'Fellyvia', 'Marshanda', '2004-03-25', 'Female', 'fllymrs_', 'fellyviamarshanda25@gmail.com', '$2y$10$KU8jKxPXtGi2GA7RGh.H0uEAgAikx3awgTNEZyY2McQ7Sa7RVpQWe', 3);

-- --------------------------------------------------------

--
-- Table structure for table `visibility`
--

CREATE TABLE `visibility` (
  `id` int NOT NULL,
  `visibility` varchar(10) NOT NULL DEFAULT 'private'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visibility`
--

INSERT INTO `visibility` (`id`, `visibility`) VALUES
(1, 'private'),
(2, 'unlisted'),
(3, 'public');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `visibility_id` (`visibility_id`);

--
-- Indexes for table `article_category`
--
ALTER TABLE `article_category`
  ADD KEY `article_id` (`article_id`,`category_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `category_keyword`
--
ALTER TABLE `category_keyword`
  ADD PRIMARY KEY (`id_category_keyword`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `commentar`
--
ALTER TABLE `commentar`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `user_id` (`user_id`,`article_id`),
  ADD KEY `article_id` (`article_id`);

--
-- Indexes for table `popularity`
--
ALTER TABLE `popularity`
  ADD KEY `article_id` (`article_id`);

--
-- Indexes for table `reporting`
--
ALTER TABLE `reporting`
  ADD PRIMARY KEY (`id_reporting`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `reporter_id` (`reporter_id`),
  ADD KEY `article_id` (`article_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_request`
--
ALTER TABLE `role_request`
  ADD PRIMARY KEY (`id_request_role`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

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
-- Indexes for table `visibility`
--
ALTER TABLE `visibility`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category_keyword`
--
ALTER TABLE `category_keyword`
  MODIFY `id_category_keyword` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `commentar`
--
ALTER TABLE `commentar`
  MODIFY `id_comment` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reporting`
--
ALTER TABLE `reporting`
  MODIFY `id_reporting` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role_request`
--
ALTER TABLE `role_request`
  MODIFY `id_request_role` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `visibility`
--
ALTER TABLE `visibility`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `article_ibfk_2` FOREIGN KEY (`visibility_id`) REFERENCES `visibility` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `article_category`
--
ALTER TABLE `article_category`
  ADD CONSTRAINT `article_category_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `article_category_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id_category`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Constraints for table `category_keyword`
--
ALTER TABLE `category_keyword`
  ADD CONSTRAINT `category_keyword_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id_category`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Constraints for table `commentar`
--
ALTER TABLE `commentar`
  ADD CONSTRAINT `commentar_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `commentar_ibfk_2` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `popularity`
--
ALTER TABLE `popularity`
  ADD CONSTRAINT `popularity_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `reporting`
--
ALTER TABLE `reporting`
  ADD CONSTRAINT `reporting_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `status` (`id_status`),
  ADD CONSTRAINT `reporting_ibfk_2` FOREIGN KEY (`reporter_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `reporting_ibfk_3` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`),
  ADD CONSTRAINT `reporting_ibfk_4` FOREIGN KEY (`admin_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Constraints for table `role_request`
--
ALTER TABLE `role_request`
  ADD CONSTRAINT `role_request_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `status` (`id_status`),
  ADD CONSTRAINT `role_request_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `role_request_ibfk_3` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `role_request_ibfk_4` FOREIGN KEY (`admin_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
