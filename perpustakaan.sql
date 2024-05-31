-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2024 at 12:15 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `nim` varchar(15) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `prodi` varchar(100) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`nim`, `gambar`, `nama`, `prodi`, `kelas`, `alamat`) VALUES
('2205102029', '665580fb775b2', 'Ranti Afrianti', 'manajemen informatika', 'mi-4b', 'medan'),
('2205102031', '6648a37fbfd55', 'Auliya Ikhsana Nasution', 'manajemen informatika', 'mi-4b', 'Jalan EFG No. 808, Kota P'),
('2205102098', '6655831db55de', 'Sela Agustina Siregar ', 'manajemen informatika', 'mi-4b', 'jalan sunggal didepan tirtanadi'),
('2205102102', '665580adee53a', 'Nadiyah Hikma Butar Butar', 'manajemen informatika', 'mi-4b', 'ringroad');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `isbn` varchar(50) NOT NULL,
  `gambar_buku` varchar(255) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `id_penerbit` int(11) DEFAULT NULL,
  `pengarang` varchar(255) DEFAULT NULL,
  `tanggal_terbit` date DEFAULT NULL,
  `sinopsis` varchar(255) DEFAULT NULL,
  `stok_buku` int(11) DEFAULT NULL,
  `status` enum('tersedia','habis dipinjam') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`isbn`, `gambar_buku`, `id_kategori`, `judul`, `id_penerbit`, `pengarang`, `tanggal_terbit`, `sinopsis`, `stok_buku`, `status`) VALUES
(' 978-602-02-6651-0', '664f47e787468', 2, '10 Desain Profesional Photoshop ', 16, 'GODC, Muhammad', '2015-03-02', 'Terdiri atas 10 proyek desain yang menarik. Anda akan mengenal teknik, pengetahuan, dan langkah-langkah untuk membuat desain secara profesional. Anda akan dipandu langkah demi langkah dengan penjelasan dan visual yang mudah dipahami sehingga bagi pemula s', 3, 'tersedia'),
(' 978-979-061-024-8', '664f4bee6cdc9', 2, 'PENGANTAR KEUANGAN PERUSAHAAN Corporate Finance Fundamentals, ED. 8, BUKU 1', 24, 'STEPHEN ROSS, RANDOLPH WESTERFIELD, BRADFORD JORDAN ', '2009-08-15', ' Buku ini menekankan peran manajer keuangan sebagai pengambil keputusan yang memiliki kebutuhan akan masukan dan pertimbangan manajerial. Buku ini membahas berbagai pemikiran dasar secara umum yang dilanjutkan dengan contoh dan kasus konkret yang secara s', 5, 'tersedia'),
(' 9786-0279-85155', '664f09aae444c', 6, 'Hukum Adat dahulu, Kini, dan Akan datang', 40, 'Suriyaman Pide', '2017-04-09', 'Buku ini antara lain membahas topik: Proses lahirnya Hukum Adat, pengertian dan ciri-ciri Hukum Adat, Hukum Adat dalam masyarakat, sistem pengendalian sosial. Hukum Adat dalam hukum formal, pengakuan adat oleh hukum formal. Hukum Adat dalam perundang-unda', 3, 'tersedia'),
(' 9786-02798-5933', '664f094773315', 6, 'Hukum Tata Pemerintahan', 18, 'Prof. Dr. Aminuddin Ilmar, S.H., M.H.', '2016-04-04', 'Buku ini membahas tentang ruang lingkup hukum tata pemerintahan, wewenang pemerintah, tindakan atau perbuatan pemerintahan, instrumen (sarana) pemerintahan, keabsahan tindakan atau perbuatan pemerintahan, dan penegakan hukum pemerintahan.', 5, 'tersedia'),
('220-512-947-9', '664ff372d04fa', 5, 'Kisah-kisah Dahsyatnya Keajaiban Sedekah', 31, 'Ahmad Soleh', '2023-12-12', 'Buku ini bercerita tentang keajaiban luar biasa yang didapatkan dari bersedekah. Penulis, Ahmad Soleh, membagikan kisah-kisah orang-orang yang mengalami berkah luar biasa setelah mereka bersedekah. Beliau menjelaskan bahwa sedekah adalah salah satu cara p', 3, 'tersedia'),
('384-335-521-5', '664f46607e1f4', 2, ' Internet Security Control System', 15, 'Benny Benyamin Nasution', '2010-03-12', 'To secure Internet transactions from being threatened or attacked, various technologies have been developed. Current technologies still cannot comprehend various threats and attacks. Inspired by this situation, the work described in this book aims to cont', 10, 'tersedia'),
('628-638-8167-2', '664f0c3471e48', 6, 'Pengantar Filsafat Hukum', 22, 'Scheltens, D.F', '2021-06-15', 'Pengantar filsafat hukum dalam buku ini akan menjelaskan dua hal yaitu kekhasan pendekatan hukum secara filsafat dan hadirnya filsafat dalam ilmu pengetahuan hukum sendiri sebagai telaah hukum positif', 3, 'tersedia'),
('78-602-338-437-8', '664ff9270d956', 5, 'Fikih Khitbah dan Nikah', 37, 'Dr. Muhammad Ra\'fat \'Utsman', '2023-12-18', 'Buku ini membahas tentang fiqih khitbah dan nikah dalam Islam secara komprehensif. Buku ini menguraikan berbagai hal terkait khitbah dan nikah, mulai dari pengertian, rukun, syarat, hingga tata cara pelaksanaannya.', 7, 'tersedia'),
('786-237-495-383', '664f3b1b849b4', 3, 'Incredibe Brothers 1', 13, 'Unianhar', '2023-03-28', ' Langkah kaki terus menggema di sepanjang koridor rumah sakit. Seorang gadis berkuncir satu melangkah cepat seraya menoleh ke sana kemari, mencari kamar yang akan ditujunya. Wajahnya terlihat begitu khawatir. Ketakutan jelas melingkupi dirinya kala menden', 2, 'tersedia'),
('97-862-374-950-24', '664f10660a6c3', 3, 'Cinderella and The Boss', 11, 'Despersa', '2020-01-08', 'Menurut dongeng, meski awalnya apes, Cinderella akan mendapatkan keberuntungan dan kebahagian bersama pangeran tampan nan baik. Tapi, boro-boro beruntung, yang ada malah buntung! Entah kebetulan atau takdir, bukan pangeran yang ia temui, tapi justru bos y', 2, 'tersedia'),
('978-0279-85995', '664f05abed43e', 4, 'Hukum kejahatan bisnis : teori & praktik di era globalisasi', 17, 'Romli Atmasasmita', '2014-03-12', 'Perkembangan dan problem utama kejahatan bisnis (business crime) yang dilakukan oleh perorangan atau suatu korporasi yang legal, baik bisnis domestik maupun bisnis internasional dalam perekonomian global, telah banyak memengaruhi dinamika perekonomian dal', 5, 'tersedia'),
('978-602-02-7281-8', '664f49b057575', 2, '150 teknik profesional CorelDraw X7', 16, 'comobe.com', '2015-02-03', 'Buku ini menggunakan ratusan gambar serta teks yang jelas untuk membantu Anda mempelajari dan menguasai CorelDRAW dengan cepat, tanpa membuang waktu terlalu lama. Buka buku ini, lihat, pelajari, dan kerjakan teknik-teknik yang ada dengan mengikuti langkah', 7, 'tersedia'),
('978-602-03-2367-1', '664f06c6c5876', 4, ' Berbisnis untuk menang atau tidak berbisnis sama sekali ', 44, 'Frans M. Royan', '2015-10-21', 'Pada saat bisnis turun tajam, betapa sulit rasanya mempertahankan bisnis Anda. Agar bisnis Anda tidak tumbang, Anda harus mengecek ulang visi dan misi bisnis Anda untuk mendapatkan kembali tujuan awal dalam berbisnis. Untuk itulah buku ini dihadirkan, aga', 5, 'tersedia'),
('978-602-0806-43-3', '664f072f6d1cf', 4, 'Business Revolution', 43, 'John Afifi', '2015-12-25', ' Apakah Anda mulai bosan dan kebingungan melihat grafik pendapatan usaha yang tidak kunjung mengalami kenaikan? Atau, Anda merasa penasaran bagaimana agar usaha yang baru dirintis dapat langsung mendatangkan profit yang signifikan?\r\nJawabannya adalah deng', 2, 'tersedia'),
('978-602-118-648-0', '664f4a91bbea3', 2, 'Analisis Jaringan Komunikasi', 17, 'Eriyanto', '2014-06-08', 'Buku ini tidak saja menyajikan teori dan analisis jaringan, namun juga memberikan strategi praktis dalam penelitian Ilmu Komunikasi dan ilmu sosial lainnya; antara lain: (1) Apa itu metode jaringan komunikasi?, karakteristik metode jaringan, kelemahan stu', 4, 'tersedia'),
('978-602-175-569-9', '664f0e61d7f6d', 3, 'Perjalanan hati : menapaki jejak rasa', 6, 'Riawani Elyta', '2013-02-19', 'Suara dari masa lalu itu masih bersambung kencang. Menyergapku dalam rindu yang dlngin. la bercerita tentang sebuah rasa yang terus tumbuh dan tepelihara. Jika tidak pada tempatnya, maka ia tak ubahnya ilalang kering. Kusadari, bayang-bayangmu tak hadirka', 8, 'tersedia'),
('978-602-318-041-7', '664f0a3f259f3', 6, 'Pengantar Ilmu Hukum', 21, 'Amiruddin Pabbu, Rahman Syamsuddin', '2014-09-23', ' Buku Pengantar Ilmu Hukum ini menyajikan barbagai tema secara komprehensif dengan sistematika yang sederhana sehingga mudah dipahami. Pembahasan buku ini diawali dengan sejarah hukum, pengertian hukum, tujuan hukum, pembagian ilmu hukum, subjek objek huk', 6, 'tersedia'),
('978-602-338-169-5', '664ff22666cc7', 5, 'NU, Perempuan, Indonesia: Sudut Pandang Islam Tradisional', 30, 'Khofifah Indar Parawansa', '2005-06-18', 'Buku ini membahas tentang peran perempuan dalam Islam tradisional di Indonesia. Penulis buku ini adalah Khofifah Indar Parawansa, seorang politisi dan aktivis perempuan Indonesia.', 8, 'tersedia'),
('978-602-338-352-4', '664ff2b91d0cf', 5, 'Umar bin Abdulaziz: Sosok Pemimpin Zuhud dan Khalifah Cerdas', 29, 'Dr. Abdul Aziz bin Abdullah al-Humaidi', '2021-10-28', 'Buku ini menceritakan kisah hidup Umar bin Abdulaziz, salah satu khalifah paling adil dan bijaksana dalam sejarah Islam. Umar bin Abdulaziz dikenal sebagai pemimpin yang zuhud dan cerdas. Dia selalu berusaha untuk menegakkan keadilan dan kesejahteraan rak', 6, 'tersedia'),
('978-602-338-352-7', '664ff4d76caa2', 5, 'Ulumul Qur\'an Kaidah-kaidah Memahami Firman Tuhan', 28, 'Dr. H. Anshori, L.L. M.A.', '2021-11-26', 'Buku ini membahas tentang ilmu Ulumul Qur\'an, yaitu ilmu yang mempelajari tentang Al-Qur\'an dari berbagai aspek, seperti sejarahnya, pembagiannya, cara membacanya, dan cara memahaminya. Buku ini ditulis oleh Dr. H. Anshori, L.L. M.A., seorang pakar ilmu A', 9, 'tersedia'),
('978-602-338-417-8', '664ff434af597', 5, 'Abdurrahman Wahid: Keislaman, Kemanusiaan, dan Kebangsaan', 35, 'Ahmad Salehudin, S.Th.I., MA, Dr.', '2019-03-19', 'Buku ini membahas pemikiran dan kiprah Abdurrahman Wahid (Gus Dur) dalam konteks Islam, kemanusiaan, dan kebangsaan. Penulis mengkaji bagaimana Gus Dur memahami dan mengamalkan Islam dalam kehidupan sehari-hari, serta bagaimana dia memperjuangkan kemanusi', -3, 'tersedia'),
('978-602-338-437-0', '664ff8cf095a5', 5, 'Sehat dengan Wudhu: Memahami Manfaat Wudhu bagi Kesehatan Fisik dan Mental', 37, 'Syahruddin El-Fikri', '2018-03-03', '\"Sehat dengan Wudhu: Memahami Manfaat Wudhu bagi Kesehatan Fisik dan Mental\" karya Syahruddin El-Fikri membahas tentang manfaat wudhu bagi kesehatan fisik dan mental.', 5, 'tersedia'),
('978-602-338-437-2', '664ff3de1e683', 5, 'Maqashid Ekonomi Syariah: Tujuan dan Aplikasi', 37, 'Dr. Moh. Mufid, Lc., M.H.I.', '2023-12-08', 'Buku ini mengkaji tentang maqashid ekonomi syariah, yaitu tujuan-tujuan yang ingin dicapai dalam sistem ekonomi Islam.', 3, 'tersedia'),
('978-602-338-437-4', '664ff308cd2a6', 5, 'Kumpulan Kultum Terlengkap Sepanjang Tahun Jilid 1', 36, 'Dr. Hasan el-Qudsy', '2023-09-11', 'Buku ini merupakan kumpulan kultum terlengkap sepanjang tahun, yang disusun oleh Dr. Hasan el-Qudsy. Buku ini berisi 30 kultum terbaik untuk bulan Ramadhan, serta kultum-kultum harian yang dapat digunakan sepanjang tahun.', 2, 'tersedia'),
('978-602-338-437-5', '664ff97c42303', 5, 'Paradigma Teoantroposentris Dalam Konstelasi Tafsir Hukum Islam', 37, 'Dr. Abid Rohmanu, M.H.I.', '2022-09-05', 'Buku ini mengkaji paradigma teoantroposentris dalam konstelasi tafsir hukum Islam. Paradigma teoantroposentris merupakan paradigma yang memandang manusia sebagai makhluk yang memiliki hubungan dengan Tuhan dan alam semesta. Paradigma ini menekankan keseim', 4, 'tersedia'),
('978-602-338-455-25', '664ff86831471', 5, 'Ensiklopedia Allah', 29, 'Abu Fikri Ihsani, M.Si', '2023-07-07', 'Buku Ensiklopedia Allah adalah buku yang berisi penjelasan tentang berbagai hal yang berkaitan dengan Allah SWT. Buku ini ditulis oleh Abu Fikri Ihsani, M.Si, seorang dosen dan penulis buku Islam ternama di Indonesia.', 3, 'tersedia'),
('978-602-338-455-5', '664ff16608ba4', 5, 'Peristiwa Dahsyat di Alam Kubur: Perjalanan di Alam Kubur dari Malam Pertama Sampai Hari Kiamat', 29, 'Nur Faizin Muhith, Lc., M.A., al-Hafizh', '2023-09-09', 'Buku ini membahas tentang peristiwa-peristiwa dahsyat yang akan terjadi di alam kubur. Penulis buku ini adalah Nur Faizin Muhith, Lc., M.A., al-Hafizh, seorang ustadz dan penulis buku Islam ternama di Indonesia.', 6, 'tersedia'),
('978-602-518-287-7', '664f10d611088', 3, ' I\'m Alka', 12, 'Siti Umrotun', '2018-07-18', 'Mengisahkan bagaimana brengseknya seorang Alka yang mencintai dua perempuan sekaligus namun ia tidak menyadari bagaimana sakitnya perempuan yang ia cintai saat Alka membagi cinta ketulusan, kepercayaan, dan perjuangan yang berakhir sia-sia. Menyisakan pui', 4, 'tersedia'),
('978-602-531-847-4', '664f0d49c23e1', 3, 'Haughty Boy', 4, 'Yourkiddle', '2018-12-04', 'Ini cerita tentang gadis receh myang selalu saja harus berhadapan dengan ketua ekskul judesnya. Roseanne Dehandar adalah seorang gadis ceria yang tak bisa diam dan apa adanya. Pertemuannya dengan Junaid Keano, ketua ekskul basket yang beru, membuat Rosi m', 10, 'tersedia'),
('978-602-531-849-8', '664f40d6bb450', 3, 'Little Sister ', 4, 'Siti Umrotun', '2019-05-13', 'Kehidupan Agatha jauh dari kata damai karena harus menghadapi kakaknya, Juan, yang terlalu protektif dan posesif. Perilaku Juan melampaui batas kewajaran kasih sayang antar saudara. Agatha merasa terkekang dan dikontrol. Juan seringkali mengganggu privasi', 5, 'tersedia'),
('978-602-532-233-4', '664ffa8010e4e', 5, 'Beginilah Seharusnya Menjadi Seorang Muslim', 29, 'Nurul Chomaria, S.Psi', '2021-06-24', 'Buku ini merupakan panduan praktis bagi umat Islam untuk menjadi muslim sejati. Penulis menguraikan berbagai aspek penting dalam keislaman, mulai dari akidah, ibadah, akhlak, hingga muamalah. Buku ini dikemas dengan bahasa yang mudah dipahami dan dilengka', 5, 'tersedia'),
('978-602-538-661-9', '664f4132d63c4', 3, 'All Out Of Love', 4, 'Novaadhita', '2019-01-24', 'Bagi Barra, kehilangan Ashilla Ainina Gardiawan sudah cukup membuat dunianya berhenti berputar. Sedangkan bagi Killa, Barra adalah malaikat tidak bersayap yang menjelma sebagai sosok manusia. Sebab, Barra-lah yang membuatnya masih tetap hidup di dunia ini', 3, 'tersedia'),
('978-602-538-668-8', '664f4066f2a5d', 3, 'Come Back Home', 4, 'Ika Aulia', '2019-07-17', 'Ada satu hal yang Hana ketahui dari kedatangan Taehyung dalam hidupnya, pemuda itu butuh sebuah pelukan, dekapan yang menenangkan. Pemuda itu rindu akan hadirnya rumah yang telah ia lupakan maknanya jauh-jauh hari. Dan Hana berusaha meraih pemuda itu, mer', 4, 'tersedia'),
('978-602-538-6695', '664f0b6b276e3', 3, 'Perpetual', 4, 'Chaniechanyeol', '2019-03-11', 'Yoo Baekhyun, seorang dokter muda nan tampan. Tapi sayang, dia seorang player. Kejadian tak terduga setelah malam after party, membuat Baekhyun harus menikahi Oh Hani. Namun, masalah seakan selalu menerjang rumah tangga mereka. Seperti film yang di putar ', 7, 'tersedia'),
('978-602-612-283-4', '664f0cc965743', 3, 'You Are My Best Friend', 5, 'Koko Ferdie', '2017-07-03', 'Bagi Lukamu Denganku,\r\nJangan kau Simpan Sendiri\r\nSebelum ini segalanya tak pernah mudah\r\nKehilangan aaalah perasaan seaih paling purba\r\nyang pernah kukenal\r\nAku terluka pada suatu masa yang membuatku\r\ntakut paaa dunia\r\nLalu, kau datang menyembuhkannya da', 2, 'tersedia'),
('978-602-6563-93-4', '664ff66f6a62d', 5, 'Aku Mau Ayah ! Kisah-Kisah Anak yang Terabaikan', 39, ' Irwan Rinaldi', '2021-12-30', 'Aku Mau Ayah ! : Kisah-Kisah Anak yang Terabaikan adalah kumpulan cerita pendek yang mengangkat kisah-kisah anak-anak yang terabaikan oleh ayahnya. Buku ini ditulis oleh Irwan Rinaldi, seorang penulis asal Indonesia.\r\nBuku ini terdiri dari 12 cerita yang ', 4, 'tersedia'),
('978-602-71822-7-1', '664ff7a5d98bf', 5, 'Jalaludin Rumi: Sang Maestro Cinta Ilahi', 38, 'Mahbub Djamaludin', '2018-04-16', 'Buku ini mengisahkan kehidupan dan pemikiran Jalaludin Rumi, seorang sufi dan penyair Muslim yang terkenal dari Persia. Rumi dikenal sebagai pendiri tarikat Mevlevi, yang juga dikenal sebagai Tarikat Sufi Berputar.', 4, 'tersedia'),
('978-602-7374-51-5', '664ffa302f2d5', 5, 'Antara Al-Ghazali dan Kant: Filsafat Islam dan Barat dalam Dialog', 27, 'M. Amin Abdullah', '2021-11-27', 'Antara Al-Ghazali dan Kant: Filsafat Islam dan Barat dalam Dialog adalah buku yang membahas tentang perbandingan pemikiran dua filsuf besar, yaitu Al-Ghazali dan Immanuel Kant. Buku ini ditulis oleh M. Amin Abdullah, seorang cendekiawan Muslim terkemuka d', 4, 'tersedia'),
('978-602-7378-51-2', '664ff61086fa3', 5, 'Catatan Hati Sang Bunda', 25, 'Hajjah Suryati Armaiyn', '2021-06-24', 'Catatan Hati Sangi Bunda adalah buku kumpulan kisah inspiratif tentang kehidupan dan perjuangan Hajjah Suryati Armaiyn, seorang muslimah yang dikenal sebagai Sangi Bunda. Buku ini ditulis oleh Hajjah Suryati Armaiyn sendiri.', 7, 'tersedia'),
('978-602-7378-51-4', '664ff759bcba5', 5, 'Kabar Dari Kubur', 25, 'Muhammad bin Hussein Alu Ya\'qub', '2021-07-28', 'Kabar Dari Kubur adalah buku yang berisi kumpulan hadits-hadits Nabi Muhammad SAW tentang kematian dan akhirat. Buku ini disusun oleh Muhammad bin Hussein Alu Ya\'qub, seorang ulama asal Yaman.', 2, 'tersedia'),
('978-602-9247-19-0', '664ff527b2558', 5, 'Meraih Kebahagiaan Hidup Dengan Zikir dan Doa', 32, 'Adam Cholil', '2013-08-16', 'Buku ini membahas tentang bagaimana meraih kebahagiaan hidup dengan zikir dan doa.\r\n\r\nPenulis buku ini adalah Adam Cholil, seorang ustadz yang aktif dalam dakwah dan pembinaan mualaf. Dalam buku ini, Cholil menjelaskan tentang pentingnya zikir dan doa dal', 3, 'tersedia'),
('978-602-99072-2-3', '664f0fab74eef', 3, 'Red Lipstick', 9, 'Akmal Nasery Basral', '2012-01-18', 'Inilah novel yang berkisah tentang keriangan dan kegilaan dunia anak-anak. Diramu dari sengitnya persaingan, percikan-percikan cinta, hangat kebersamaan, dan keluguan yang menggemaskan. Tegangan mencekam dan inspirasi tak terperi membuat novel ini kaya wa', 5, 'tersedia'),
('978-623-7051-44-7', '664ff11720884', 5, 'Agar Rezeki Turun sederas hujan', 44, ' Asep Maulana', '2023-06-24', 'Buku ini membahas tentang tips dan trik agar rezeki turun deras.\r\nPenulis buku ini adalah Asep Maulana, seorang motivator dan penulis buku motivasi terkenal di Indonesia. Dalam buku ini, Maulana membagikan pengalaman dan pengetahuannya tentang cara mendap', 4, 'tersedia'),
('978-623-7131-26-7', '66559afb3fec7', 2, 'Elektronika dasar : teori dan aplikasi disertai dengan soal-soal dan pembahasan', 21, 'John Adler, dan Sutono', '2020-09-12', 'Buku ini merupakan buku Elektronika bagian pertama atau bagian dasar yang didalamnya dibahas materi tentang teori-teori dasar dan aplikasinya disertai soal- soal dan pembahasan dengan lampiran berupa CD tentang software multisim yang berguna untuk mensimu', 5, 'tersedia'),
('978-623-7219-52-1', '664f078d4c8ed', 4, 'Bisnis Modal 10 Jutaan', 42, 'Oppi Andini', '2020-06-14', ' Modal sering menjadi satu dari beberapa alasan bagi orang untuk memulai sebuah usaha atau bisnis. Sementara itu, perkembangan teknologi dan informasi yang begitu pesat di era digital ini telah menciptakan begitu banyak peluang dan kesempatan munculnya bi', 3, 'tersedia'),
('978-623-749-503-1', '664f434308c21', 3, 'The Darkest Embrace', 11, 'Shan A. Fitriani', '2020-08-05', 'Kehidupan seorang Nora Andreana sejak awal tidaklah begitu indah. Dirinya kehilangan kedua orangtuanya sejak masih begitu kecil sehingga ia diasuh oleh paman dan bibinya yang menyayanginya seperti putri mereka sendiri. Namun, sekali lagi, kedua orang tua ', 3, 'tersedia'),
('978-623-749-578-9', '664f3e3d19ae4', 3, 'My Boss\'s Baby', 13, 'Anothermissjo', '2022-01-26', 'Seumur-umur bekerja menjadi sekretaris Dimas\r\nHaritama, tidak pernah sedikitpun Antari Satwika mengetahui kehidupan pribadi bosnya. Manusia kutub utara seperti bosnya tidak pernah memamerkan hal-hal pribadi, bahkan satu perusahaan tidak dapat mengetahui s', 3, 'tersedia'),
('978-623-7495-35-2', '664f0ebe66a64', 3, 'Red Lipstick', 7, 'Hazelpaper', '2024-01-15', 'Berawal dari sebuah lipstick berwarna merah cabai yang Agatha gunakan pada malam peluncuran produk kosmetik perusahaan tempatnya bekerja, sehingga mempertemukannya dengan sesosok pria kasar yang digosipkan gay bernama Brigan.\r\nTapi siapa yang sangka kalau', 2, 'tersedia'),
('978-623-752-401-4', '664f3c526b3e1', 3, ' Ketika Hujan Menangis', 8, 'Eka aryani', '2019-10-18', 'Novel Ketika Hujan Menangis merupakan sebuah novel yang ditulis oleh Eka Aryani. Novel bergenre romance ini bercerita tentang seorang perempuan bernama Isabella Queen, Isabella sendiri merupakan seorang penulis terkenal yang karya-karyanya begitu dicintai', 4, 'tersedia'),
('978-623-752-409-0', '664f4393e1507', 3, 'Sempiternal', 4, 'Cintaprita', '2020-02-02', 'Novel Sempiternal akan mengisahkan tentang Angkasa dan Mika yang kembali memperjuangkan kisah cintanya. Sebab, mereka memang sudah saling mencintai, sudah satu agama juga, mereka juga saling percaya. Hanya satu hal yang masih menghalangi hubungan mereka, ', 4, 'tersedia'),
('978-623-752-410-6', '664f0f5dedf64', 3, ' Bulan & Bintang', 8, 'Itsmeindriya', '2019-02-14', 'Insiden di depan gerbang ketika Bulan terlambat sekolah membuat Bulan bertemu dengan cowok ganteng bernama Bintang. Bintang adalah salah satu most wanted di SMA Antarnusa. Parasnya yang mirip seperti dewa-dewa yunani membuat hampir sebagian populasi cewek', 4, 'tersedia'),
('978-623-903-323-1', '664f43fb4c48f', 3, 'My Angelic Boyfriend', 4, 'Raenissa', '2019-05-05', 'Novel ini menceritakan kisah cinta antara Arzaylea Josephine dan Arabella Haruka, dua perempuan yang harus berurusan dengan Jimin Neredith Park, si pewaris perusahaan Neredith Group yang dijuluki sebagai \"Hot Casanova\" di kampusnya.\r\nJimin terkenal dengan', 8, 'tersedia'),
('978-623-903-326-2', '664f3d6482842', 3, 'Perfectionist Doctor And Me', 4, 'Dekdi A', '2019-05-16', 'Berprofesi sebagai dokter, Lay tahu persis apa hal-hal yang bisa beresiko bagi kesehatannya sendiri, tak heran ini membuatnya menjadi seorang clean-freak atau penggila kebersihan. Tak hanya itu Lay ternyata juga seorang perfeksionis yang berarti apapun ya', 4, 'tersedia'),
('978-623-903-327-9', '664f100c3d68f', 3, 'Moonlight', 4, 'Dian Mu', '2019-11-21', 'Novel Moonlight menceritakan kisah cinta segitiga antara Eri, Chanyeol, dan Baekhyun. Eri adalah seorang gadis yang baik dan polos, sedangkan Chanyeol adalah seorang cowok yang populer dan playboy. Baekhyun adalah sahabat Chanyeol yang diam-diam menyukai ', 4, 'tersedia'),
('978-623-904-619-4', '664f42c90e64e', 3, 'Quandary', 13, 'Atyampela', '2019-08-15', 'Di saat teman-temannya bingung memilih antara BB Cream atau BB Cushion, Maydina justru bingung harus memilih antara merk diapers yang biasa ia beli atau yang sedang diskon. Saat teman-temannya menghabiskan uang gajian untuk me-time, Maydina justru harus r', 6, 'tersedia'),
('978-623-908-851-9', '664f3cbd4b698', 3, 'Petrichor', 4, 'Sidonsky', '2019-06-12', 'Novel Petrichor menceritakan kisah cinta antara Raynzal, seorang cowok bad boy dengan tato dan sikap galak, dan Keyla, seorang gadis cantik yang centil dan cerewet.\r\nMereka berdua berasal dari dua dunia yang berbeda, namun takdir mempertemukan mereka. Ray', 3, 'tersedia'),
('978-623-908-853-8', '664f0dca835fc', 3, 'Apology', 4, 'Chaca', '2021-07-14', 'Cerita ini berkisah tentang perempuan bernama Jeon Yoora yang memiliki trauma berat hingga harus dirawat di pusat rehabilitasi selama satu bulan. Semua itu dikarenakan masalah yang terjadi di masa lalu bersama Taehyung. Setelahnya, Yoora sendiri memiliki ', 2, 'tersedia'),
('978-979-29 -2742-9', '664f495916a33', 2, 'Membuat Aplikasi untuk Windows Phone', 14, 'Puja Pramudya ', '2011-04-05', 'uku ini disusun untuk menyambut platform pengembangan aplikasi mobile terbaru, yaitu Windows Phone. Pembaca dapat mempelajari apa itu Windows Phone dan sejarahnya, bagaimana menggunakan tools untuk mengembangkan aplikasi pada Windows Phone, fitur-fitur ya', 6, 'tersedia'),
('978-979-29-0521-2', '664f47122cc9f', 2, 'Microsoft Visual Basic 6.0 Untuk Pemula', 14, 'Theresia Ari Prabawati (Ed)', '2008-07-08', 'Buku ini disusun dengan pola pembahasan yang simpel, ringan, dan tidak bertele-tele sehingga menjadikan buku ini mudah untuk dipelajari dan sangat pas jadi teman belajar yang asyik dan menyenangkan. Setiap pokok bahasan disertai sampel dan contoh latihan ', 2, 'tersedia'),
('978-979-29-2775-7', '664f451d1264c', 2, 'Membuat sendiri aplikasi e-commerce dengan PHP dan MySQL menggunakan Codelgniter dan JQuery ', 14, 'Riyanto', '2011-10-12', 'Melalui buku ini, Anda akan dipandu untuk membuat aplikasi PHP menggunakan framework CI, mulai dari instalasi, cara penggunaan, sampai mengembangkan aplikasi e-commerce. Buku ini terbagi dalam empat bab dengan struktur pembahasan yang runtut sehingga memb', 4, 'tersedia'),
('978-979-3862-67-9', '664ff584606c9', 5, 'Nutrisi Al-Qur\'an untuk Buah Hatiku', 33, 'Chichi Sukardjo', '2010-10-03', 'uku ini menceritakan kisah inspiratif seorang ibu bernama Chichi Sukardjo yang berhasil mendidik buah hatinya untuk mencintai Al-Qur\'an. Chichi Sukardjo pada awalnya tidak berniat untuk memiliki anak dan tidak mengenal Islam. Namun, setelah memiliki anak,', 6, 'tersedia'),
('978-979-518-879-7', '664f051c63fdb', 4, 'Pengantar Bisnis : pengelolaan bisnis dalam era globalisasi', 45, 'Pandji Anoraga, S.E., MM', '2007-02-14', 'Buku ini merupakan perombakan dan pembauran total dari buku sejenis tentang Manajemen Bisnis. Pembahasan materi meliputi: Dasar-dasar Bisnis, Manajemen Fungsional, Pendukung Bisnis, dan Pengembangan Bisnis. Buku ini merupakan rangkuman dari pengetahuan da', 5, 'tersedia'),
('978-9790-072787', '664f0846476ea', 6, 'Hukum Hak Kekayaan Intelektual', 19, 'Ermansyah Djaja', '2009-08-26', 'Buku ini ditulis karena semakin maraknya kekayaan intelektual bangsa dan anak bangsa yang dirampas oleh negara lain, yang membuat kita cukup prihatin. Ancaman terhadap karya atau kekayaan intelektual selain datang dari negara lain juga dating dari dalam n', 8, 'tersedia'),
('979-20-2959-1', '664f484300255', 2, 'Sistem Operasi Microsoft Windows XP Professional', 16, 'IAN CHANDRA K. ', '2002-02-15', 'Buku ini membahas tentang pengenalan windows xp profesional, mengatur desktop, mengatur menu start, menjelajah my computer, menggunakan explorer, add/remove programs, multimedia pc, mengatur user accounts, menggunakan administrative tools, dan menggunakan', 3, 'tersedia'),
('979-20-3723-3', '664f46b23967e', 2, 'Bermain-main dengan registry windows : tenggelam dalam windows 98', 16, 'Tri Amperiyanto', '2002-12-08', ' Tak dapat disangkal lagi, sistem operasi windows dapat melakukan fungsinya didukung dengan suatu komponennya yang dinamai registry. Oleh karena itu, untuk lebih menguasai windows, sudah sepantasnya kita mempelajari dan medalami registry. Pembahasan dalam', 4, 'tersedia'),
('979-20-5433-2 ', '664f478306447', 2, 'Buku latihan : aplikasi database pribadi dengan microsoft office access 2003', 16, 'Teddy Awaluddin dan Yudistira', '2004-07-06', 'Buku ini memaparkan dengan mudah dan jelas bagaimana access untuk keperluan database pribadi mulai dari merancang, membuat objek hingga membuat relationship antar objek.', 4, 'tersedia'),
('979-533-691-6', '664f48efc3f41', 2, 'Mari Mengenal Linux', 14, 'Wahana Komputer semarang', '2002-02-03', 'Linux merupakan suatu sistem operasi yang sangat menarik dan mempunyai banyak kelebihan dibanding sistem operasi lainnya. Yang membuat Linux menjadi sangat istimewa adalah linux bersifat open source dan freeware. Sifat ini memberikan kesempatan kepada set', 2, 'tersedia'),
('979-533-914-1', '664f45a8bae86', 2, '10 teknik menjadikan situs web anda profesional : (menggunakan cgi dan asp)', 14, 'Oppi Andini', '2003-06-23', 'Buku ini membahas tentang Authentufikasi, Counter, Banner, Buku tamu, Form mail, Recommended site, Upload File, Greetimh Card, Polling,Forum', 5, 'tersedia'),
('979-731-846-5', '664f4892695e9', 2, 'Desain grafis komputer (teori grafis komputer)', 14, 'Sigit Suyantoro, Fl (Ed)', '2005-08-09', 'Buku ini menjembatani kebutuhan untuk mendalami teori sekaligus mempelajari ketrampilan teknis. Saat ini memang banyak tersedia buku-buku komputer, akan tetapi sebagian besar masih menonjolkan aspek ketrampilan teknis atau bersifat sangat teoritis. Buku-b', 5, 'tersedia'),
('979-741-903-7', '664f064e32e2b', 4, ' Schaum\'s easy outlines : Statistik untuk bisnis', 22, 'Leonard J. Kazmier, Ph.D', '2005-06-21', 'Ketika Anda tidak punya banyak waktu... namun harus lulus dengan nilai baik!\r\nJika Anda terlalu sibuk untuk meluangkan waktu membuka-buka buku tebal, dan ujian sudah di ambang pintum Statistik untuk Bisnis dari seri Schaum’s Easy Outlines ini paling pas b', 5, 'tersedia'),
('979-763-003-9', '664f46064cb97', 2, 'Pengantar jaringan komputer / Melwin Syafrizal', 14, 'Melwin Syafrizal', '2005-09-09', 'Di Abad 21 ini teknologi jaringan komputer mampu menjangkau seluruh dunia. sejak memasyarakatnya Internet, menghubungkan beberapa komputer maupun server dengan sebuah jaringan  dari jenis LAN sampai WAN adalah sebuah hal yang mudah. Dengan konsep downsizi', 2, 'tersedia'),
('979-817-035-0', '664f4b188f990', 2, 'Dasar-dasar manajemen keuangan', 23, 'Husnan, Suad, Pudjiastuti, Enny ', '2012-08-24', 'Buku ini menjelaskan penerapan teori keuangan dalam lingkup perusahaan. Pembahasan dilakukan pada masalah-masalah yang bersifat mendasar atau pokok-pokok. Tujuannya adalah menjelaskan masalah keuangan dalam lingkup perusahaan secara sederhana, tanpa mengh', 4, 'tersedia'),
('979-9140-01-3', '664ff48e49547', 5, 'Mencari Tuhan yang Hilang', 26, 'Yusuf Mansur', '2006-01-17', 'Mencari Tuhan yang Hilang adalah buku kumpulan kisah inspiratif tentang perjalanan spiritual orang-orang yang mencari makna hidup dan kedekatan dengan Tuhan. Buku ini ditulis oleh Yusuf Mansur, seorang pendakwah dan pengusaha terkenal di Indonesia.', 2, 'tersedia'),
('979-9481-69-4', '664ff80161df6', 5, 'Menimbang Ekonomi Islam: Keuangan Publik, Konsep Perpajakan dan Peran Bait al-Mal', 30, 'Sabahuddin Azmi', '2005-03-02', 'Buku ini membahas tentang konsep ekonomi Islam dalam hal keuangan publik, perpajakan, dan peran baitul mal. Penulis buku ini adalah Sabahuddin Azmi, seorang pakar ekonomi Islam dari Malaysia.\r\nAzmi dalam buku ini menjelaskan bahwa ekonomi Islam memiliki k', 2, 'tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `denda`
--

CREATE TABLE `denda` (
  `id_denda` int(11) NOT NULL,
  `id_peminjaman` int(11) DEFAULT NULL,
  `nim` varchar(15) DEFAULT NULL,
  `isbn` varchar(50) DEFAULT NULL,
  `tanggal_peminjaman` date DEFAULT NULL,
  `tanggal_pengembalian_aktual` date DEFAULT NULL,
  `jumlah_hari_terlambat` int(11) DEFAULT NULL,
  `total_denda` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `denda`
--

INSERT INTO `denda` (`id_denda`, `id_peminjaman`, `nim`, `isbn`, `tanggal_peminjaman`, `tanggal_pengembalian_aktual`, `jumlah_hari_terlambat`, `total_denda`) VALUES
(1, 26, '2205102031', '978-623-752-410-6', '2024-05-18', '2024-05-27', 2, 10000.00),
(4, 30, '2205102098', '978-623-752-410-6', '2024-05-19', '2024-05-28', 2, 10000.00);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(2, 'Pendidikan'),
(3, 'Novel/Fiksi'),
(4, 'Bisnis'),
(5, 'Agama'),
(6, 'Hukum');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `nim` varchar(15) DEFAULT NULL,
  `isbn` varchar(50) DEFAULT NULL,
  `tanggal_peminjaman` date DEFAULT NULL,
  `tanggal_pengembalian_rencana` date DEFAULT NULL,
  `tanggal_pengembalian_aktual` date DEFAULT NULL,
  `banyak_buku` int(11) DEFAULT NULL,
  `status` enum('dipinjam','dikembalikan') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `nim`, `isbn`, `tanggal_peminjaman`, `tanggal_pengembalian_rencana`, `tanggal_pengembalian_aktual`, `banyak_buku`, `status`) VALUES
(26, '2205102031', '978-623-752-410-6', '2024-05-18', '2024-05-25', '2024-05-27', 2, 'dikembalikan'),
(29, '2205102102', '978-602-518-287-7', '2024-05-21', '2024-05-28', '2024-05-28', 2, 'dikembalikan'),
(30, '2205102098', '978-623-752-410-6', '2024-05-19', '2024-05-26', '2024-05-28', 1, 'dikembalikan');

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

CREATE TABLE `penerbit` (
  `id_penerbit` int(11) NOT NULL,
  `nama_penerbit` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`id_penerbit`, `nama_penerbit`) VALUES
(2, 'Greenbook.ID.'),
(3, 'Bentang Pustaka.'),
(4, 'Rainbow Books'),
(5, 'Sahabat Fiksi'),
(6, 'Rak Buku'),
(7, ' PT Duta Pustaka Indonesia'),
(8, 'Galaxy Media'),
(9, 'Mizan Media Utama'),
(10, 'Cahaya Fiksi'),
(11, 'Ayna Books'),
(12, 'Hikaru Publishing'),
(13, 'Namina Books'),
(14, 'ANDI'),
(15, 'LAP Lambert Academic Publishing'),
(16, 'PT Elex Media Komputindo'),
(17, 'Jakarta, Kencana.'),
(18, 'Predanamedia Group'),
(19, 'Sinar Grafika'),
(21, 'Mitra Wacana Media'),
(22, 'Erlangga'),
(23, 'UPP AMP YKPN.'),
(24, 'SALEMBA EMPAT'),
(25, 'An Nasional'),
(26, 'Zikrul Hakim'),
(27, 'IRCiSoD'),
(28, 'Politeknik Negeri Medan'),
(29, 'Pustaka Mandiri'),
(30, 'Nuansa, Bandung'),
(31, 'KAAN NASIONAL'),
(32, 'AMP Press, Jakarta Selatan'),
(33, 'MyBook'),
(34, 'Media Utama'),
(35, 'Pustaka Pesantren Nasional'),
(36, ' In Nasional'),
(37, 'CV Tirta Buana Media'),
(38, 'Depok: Senja Publishing'),
(39, 'Senja Media Utama'),
(40, 'Prenada media'),
(41, ' Sinar Grafika'),
(42, 'Garasi'),
(43, 'Laksana'),
(44, 'Gramedia Pustaka Utama'),
(45, 'Rineka Cipta');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `kode_petugas` varchar(50) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`kode_petugas`, `username`, `nama`, `alamat`, `password`) VALUES
('P-001', 'joko67', 'Joko Widodo', 'rahuning pasar 2', '123'),
('P-002', 'liyaaa', 'auliya ikhsana', 'Jalan EFG No. 808, Kota P', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`nim`) USING BTREE;

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`isbn`) USING BTREE,
  ADD KEY `kategori` (`id_kategori`),
  ADD KEY `penerbit` (`id_penerbit`);

--
-- Indexes for table `denda`
--
ALTER TABLE `denda`
  ADD PRIMARY KEY (`id_denda`),
  ADD KEY `buku` (`isbn`),
  ADD KEY `anggota` (`nim`),
  ADD KEY `peminjaman` (`id_peminjaman`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`) USING BTREE;

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `isbn` (`isbn`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`id_penerbit`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`kode_petugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `denda`
--
ALTER TABLE `denda`
  MODIFY `id_denda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `penerbit`
--
ALTER TABLE `penerbit`
  MODIFY `id_penerbit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `penerbit` FOREIGN KEY (`id_penerbit`) REFERENCES `penerbit` (`id_penerbit`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `denda`
--
ALTER TABLE `denda`
  ADD CONSTRAINT `anggota` FOREIGN KEY (`nim`) REFERENCES `anggota` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `buku` FOREIGN KEY (`isbn`) REFERENCES `buku` (`isbn`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `peminjaman` FOREIGN KEY (`id_peminjaman`) REFERENCES `peminjaman` (`id_peminjaman`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `isbn` FOREIGN KEY (`isbn`) REFERENCES `buku` (`isbn`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `nim` FOREIGN KEY (`nim`) REFERENCES `anggota` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
