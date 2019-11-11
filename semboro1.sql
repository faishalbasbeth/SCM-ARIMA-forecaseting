-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2019 at 10:40 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `semboro1`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(22) NOT NULL,
  `gambar` varchar(22) NOT NULL,
  `judul` text NOT NULL,
  `berita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `gambar`, `judul`, `berita`) VALUES
(9, 'berita4.jpg', 'Kawal Revitalisasi Pabrik Gula', '(19/03/2019) PT Perkebunan Nusantara XI dan PT Perkebunan Nusantara III (Persero) selaku Holding BUMN Perkebunan menggelar rapat koordinasi untuk mengawal penyelesaian program revitalisasi Pabrik Gula Assembagoes.  “ Kami apresiasi upaya ini, merubah presepsi pesimis dan akan menjadi role model bagi program lainnya “, jelas Moch. Cholidi Direktur Tanaman Semusim PT Perkebunan Nusantara III (Persero). Direncanakan proyek revitalisasi Pabrik Gula Assembagoes tersebut selesai bulan Juli tahun ini.Sebagaimana diketahui PT Perkebunan Nusantara XI tengah menggarap dua proyek revitalisasi Pabrik Gula yakni PG Djatiroto dan PG Assembagoes. Peningkatan kapasitas PG Djatiroto dan Assembagoes masing-masing menjadi sebesar 10.000 TCD dan 6.000 TCD, perbaikan mutu produksi memenuhi kualitas SNI dan pengembangan Co Generation 10 MW.Selain Direksi PTPN III (Persero) rapat koordinasi tersebut dihadiri oleh Plt Direktur Utama PTPN XI, PMC dan Direksi masing-masing anggota KSO WIKA-BARATA-MULTINAS serta Tim PMN PTPN XI. (Jo)'),
(11, 'berita6.png', 'PTPN XI Berharap Ada Regulasi Pemerintah', '(06/02/2018) PTPN XI meminta dukungan kebijakan pemerintah adanya ketersediaan lahan tebu di Jatim termasuk regulasi yang mendukung pengembangan industri gula dan komoditas beserta program teknis lainnya, ini dimaksudkan sebagai upaya pemenuhan kapasitas pabrik gula BUMN.  Mengingat saat ini makin menyusutnya lahan pertanian terutama lahan tebu di Indonesia. Akibatnya membuat produksi gula nasional pun menurun. Berbagai upaya telah dilakukan PT Perkebunan Nusantara (PTPN) XI untuk meningkatkan produksi gula maupun tebu, baik melalui pengadaan lahan-lahan baru maupun melakukan revitalisasi pabrik-pabrik gula agar menjadi lebih efisien dan mampu menghasilkan gula lebih banyak.  Menurut PTPN XI untuk mewujudkan hal tersebut, perlu ada kebijakan dari pemerintah daerah yang mendorong pertumbuhan lahan-lahan tebu agar berdampak pada produksi gula.  Hal ini terungkap dalam diskusi bersama Ruang Ide bertajuk Revitalisasi Agroindustri Menuju Industri Mandiri yang di gelar PTPN XII bersama Jawa Pos Group pada Senin (29/01/2018) di Graha Pena Surabaya.  Direktur Utama PTPN XI M. Cholidi mengatakan, saat ini perseroan telah berupaya penuh untuk meningkatkan kapasitas pabrik gula (PG) agar pencapaian swasembada gula nasional dapat terpenuhi.  “Saat ini yang sudah masuk revitalisasi adalah PG Djatiroto di Lumajang yang akan ditingkatkan menjadi 10.000 TCD dan PG Assembagoes di Situbondo akan ditingkatkan menjadi 6.000 TCD,” jelasnya.  Sedangkan jangka panjang PTPN XI akan memodernisasi 5 PG masing-masing menjadi 4.000 TCD, dan  berencana membangun PG baru di Kabupaten Situbondo dengan kapasitas giling 6.000 TCD.  “Dengan peningkatan kapasitas produksi pabrik kita ini juga mengarah pada kemandirian energi yang menghasilkan energi baru terbarukan yakni exces power, biofuel,” jelas Cholidi.  Sementara jangka pendek yang sudah dilakukan PTPN XI memperluas lahan tebu dan pemenuhan bahan baku gula melalui proyek Agro Forestry kerjasama dengan Perum Perhutani seluas 374,9 ha untuk budidaya tanaman tebu di lahan Perum Perhutani Wilayah Padangan, Bojonegoro, Ngawi, dan Saradan pada Maret 2017, serta pemanfaatan lahan Pemkab Jember seluas 25 ha untuk budidaya tanaman tebu.  “Kita juga investasi pengadaan lahan 367 ha untuk budidaya tanaman tebu dan agrowisata di daerah Baluran Situbondo,” urainya seraya menambahkan turunnya produksi tebu tahun lalu dipengaruhi oleh konsolidasi lahan dan petani yang belum optimal, serta tumpang tindih tata guna lahan dengan komoditas pangan lain dan alihfungsi lahan tebu. Termasuk penyediaan sarpras dan kredit petani tidak tepat waktu.  “Dari sisi biaya produksi juga meningkat tapi HPP belum kompetitif dengan harga gula dunia,” imbuhnya.  Sementara itu, Gubernur Jawa Timur Soekarwo justru mendorong industri gula dari segi produksi di pabrik. Tahun ini akan membeli 1 unit mesin penggiling tebu dari India senilai Rp60 miliar yang akan diujicobakan di Jawa Timur.  “Saya beli mesin dengan kapasitas 500 TCD atau bisa untuk merasionalitas proses produksi gula, mesinnya bisa di uji coba untuk tebu dari lahan 700 ha. Jatim pernah bawa tebu kita ke India bisa sampai 9% rendemennya, di sini rata-rata hanya 7,6%,” kata Pakde panggilan akrabnya.  Dengan mesin tersebut membuat ongkos produksi menjadi lebih murah yakni Rp5.000/kg, sehingga jika dijual di pasaran dengan Harga Eceran Tertinggi (HET) Rp12.500 maka diharapkan keuntungan petani akan lebih banyak.  Rencananya, Pakde Karwo akan ke India pada 2 Februari mendatang untuk melakukan checking mesin.'),
(12, 'berita7.png', 'Komitmen Jaga Lahan Pertanian', '(18/12/2017) \"Hingga akhir tahun tingkat inflasi Jawa Timur diperiksa terkendali direntang 3,8 - 4,0%, terutama disebabkan oleh meredanya tekanan inflasi volatile food dan stabil nya inflasi inti\" ungkap Difi Ahmad Johansyah Kepala Perwakilan Bank Indonesia Provinsi Jawa Timur dalam acara Pertemuan Tahunan Bank Indonesia 2017 dan Outlook Perekonomian Tahun 2018 yang bertajuk Memperkuat Momentum Perekonomian Jawa Timur yang digelar Kamis (13/12) lalu di Surabaya.  Sedangkan Soekarwo Gubernur Jawa Timur dalam sambutannya menyebut ada tiga sektor dominan di Jawa Timur yakni industri 28,79%, perdagangan 18,25%, pertanian 13,55%. Sedangkan sektor lainnya sebesar 39,41% . Pertumbuhan Sektor Pertanian melambat 1,65% pada tahun 2017 bila di banding tahun sebelumnya.  Menyikapi hal ini Agus Priambodo Corporate Secretary PT Perkebunan Nusantara XI yang turut hadir dalam acara tersebut berharap kedepan ada kebijakan pemerintah Provinsi Jawa Timur dan pemda terkait. \"Pemprov dan pemkab harus mempunyai komitmen kuat untuk meningkatkan pertumbuhan sektor pertanian, diantaranya regulasi tata ruang untuk menjaga keberadaan lahan pertanian\" terangnya.  Lebih lanjut pihaknya menyoroti menurunnya lahan pertanian karena beralih fungsi. \"Banyak daerah giat melakukan pembangunan, tetapi kami berharap lahan pertanian yang sudah ada jangan dikurangi dengan alasan pengembangan perumahan bahkan industri\" harapnya lebih lanjut.  Dengan adanya regulasi penataan lahan pertanian dan komitmen bersama yang kuat, jaminan keberadaan lahan pertanian dan perkebunan serta upaya para pelaku agribisnis dan agroindustri serta petani untuk meningkatkan produktivitas maka potensi pertumbuhan sektor pertanian besar terwujud dan mendukung keberadaan Jawa Timur sebagai lumbung pangan nasional, terutama gula.  Acara tersebut diikuti oleh pemerintah provinsi dan pemerintah daerah, serta para pelaku ekonomi dan bisnis Jawa Timur.');

-- --------------------------------------------------------

--
-- Table structure for table `lahan`
--

CREATE TABLE `lahan` (
  `id_lahan` int(22) NOT NULL,
  `lokasi` text NOT NULL,
  `no_surat` int(22) NOT NULL,
  `lahan` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lahan`
--

INSERT INTO `lahan` (`id_lahan`, `lokasi`, `no_surat`, `lahan`) VALUES
(1, 'Rejoagung, Semboro, Jember', 65312, 4888);

-- --------------------------------------------------------

--
-- Table structure for table `member_petani`
--

CREATE TABLE `member_petani` (
  `id_memberpetani` int(22) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `alamat` text NOT NULL,
  `lokasi` text NOT NULL,
  `nik` int(22) NOT NULL,
  `no_hp` varchar(22) NOT NULL,
  `lahan` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_petani`
--

INSERT INTO `member_petani` (`id_memberpetani`, `nama`, `alamat`, `lokasi`, `nik`, `no_hp`, `lahan`) VALUES
(1, 'Saiful Bachri', 'Perumahan Umbul no 13, Lumajang', 'Pondok Telo, Banyu Putih Lor, Lumajang', 18672, '086534213333', 40),
(2, 'Hermanto', 'Desa Sumber Jeding, no. 08, Kedung Jajang, Lumajang', 'Desa Curah Petung, Kedung Jajang, Lumajang', 65239, '087988654321', 30),
(3, 'Fauzia Farid', 'Jl. Mangga, no. 02, Kepuharjo, Lumajang, Lumajang', 'Yonif 527, Lumajang', 76123, '081253944194', 40),
(4, 'Muhamad Nizar', 'Jl. Manggis, no. 56, Kutorenon, Lumajang, Lumajang', 'Kutorenan, Lapangan Olah Raga, lumajang', 78623, '087343211456', 45),
(5, 'Jumaati', 'Jenggrong, no 43, Klakah, Lumajang', 'Jl. Ahmad Yani, Klakah, Lumajang', 14532, '081234432567', 70),
(6, 'Yaro', 'Jl. Apukat, no 32, Lumajang, Lumajang', 'Loksuki, Sukodono, Lumajang', 143233, '081145543654', 60),
(7, 'Abdul Sodiq', 'Jl. Kertanegara, Tokom, Lumajang', 'JLT, Galingan, Lumajang', 786655, '082335676789', 100),
(8, 'Yoga Yudaswara', 'Stadion Tempeh, Perumahan Tempeh, Lumajang.', 'Jl. Pulo, Tempeh, Lumajang', 67556, '087757655432', 115),
(9, 'M. Adin Fikri', 'Perumahan Mastrip, blok i-36, Jember', 'Jl. Kaliurang, Mastrip, Jember', 788654, '081122311434', 150),
(10, 'Ridhofa Rizal', 'Jl. Ahmad Yani, no 76, Lumajang, Lumajang', 'Jl. Diponegoro, Jogoyudan, Lumajang', 76556, '087777654432', 150),
(11, 'Abdul Rozak', 'Jl. mastrip 4, no 67, Jember', 'Jl. Tawang Mangu, Antirogo, Jember', 34212, '087765543343', 130),
(12, 'Andi Fijai', 'Jl. Riau no 8, Mastrip, Jember', 'Antirogo, Jember', 32114, '085232434222', 170),
(13, 'Adi Nugroho', 'Jl. Tawang Mangu, no 45, Jember', 'Tawang Mangu, Jember', 65443, '082234434542', 300),
(14, 'Ilham Gimnastiar', 'Jl. Slamet Riyadi no 76, Baratan, Jember', 'Baratan, Jember', 12321, '082232434156', 300),
(15, 'Indra Gunawan', 'Jl. Curahwaru no 67, Bangsalsari, Jember', 'Jl. Curahwaru, Bangsalsari, Jember', 11245, '085234412678', 300),
(16, 'Abdul Kapit', 'Jl. Patemon no 2, Patemon, Tanggul, Jember', 'Patemon, Tanggul, Jember', 45323, '085455321111', 400),
(17, 'Ahmad Khotib', 'Jl. Srikaya no 8, Pondok Dalem, Tanggul, Jember', 'Pondok Dalem, Tanggul, jember', 12211, '081121323444', 200),
(18, 'Junaedi', 'Jl. Ahmad Yani no 8, Sumber Agung, Tanggul, Jember', 'Sumber Agung, Tanggul, jember', 12246, '082565886412', 300),
(19, 'Nur Hasan', 'Jl. Apukat no. 43, Rowo Tengah, Tanggul, Jember', 'Rowo Tengah, Tanggul, Jember', 12213, '087655432343', 100);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(22) NOT NULL,
  `id_targetproduksi` int(22) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `alamat` text NOT NULL,
  `tgl` date NOT NULL,
  `berat` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id_penjualan`, `id_targetproduksi`, `nama`, `alamat`, `tgl`, `berat`) VALUES
(1, 2, 'PT. Mitratani Dua Tujuh', 'Jl. Mangga, no. 02, Kepuharjo, Lumajang, Lumajang', '2006-11-23', 21132),
(2, 3, 'PT. Mitratani Dua Tujuh', 'Jl. Mangga, no. 02, Kepuharjo, Lumajang, Lumajang', '2007-11-15', 24669),
(3, 4, 'PT. Mitratani Dua Tujuh', 'Jl. Mangga, no. 02, Kepuharjo, Lumajang, Lumajang', '2008-11-21', 28083),
(4, 5, 'PT. Mitratani Dua Tujuh', 'Jl. Mangga, no. 02, Kepuharjo, Lumajang, Lumajang', '2009-11-26', 29578),
(5, 6, 'PT. Mitratani Dua Tujuh', 'Jl. Mangga, no. 02, Kepuharjo, Lumajang, Lumajang', '2010-11-25', 30828),
(6, 7, 'PT. Mitratani Dua Tujuh', 'Jl. Mangga, no. 02, Kepuharjo, Lumajang, Lumajang', '2011-11-17', 29889),
(7, 8, 'PT. Mitratani Dua Tujuh', 'Jl. Mangga, no. 02, Kepuharjo, Lumajang, Lumajang', '2012-11-22', 23407),
(8, 9, 'PT. Mitratani Dua Tujuh', 'Jl. Mangga, no. 02, Kepuharjo, Lumajang, Lumajang', '2013-01-15', 22388),
(9, 10, 'PT. Mitratani Dua Tujuh', 'Jl. Mangga, no. 02, Kepuharjo, Lumajang, Lumajang', '2014-11-26', 23023),
(10, 11, 'PT. Mitratani Dua Tujuh', 'Jl. Mangga, no. 02, Kepuharjo, Lumajang, Lumajang', '2015-11-26', 31438),
(11, 12, 'PT. Mitratani Dua Tujuh', 'Jl. Mangga, no. 02, Kepuharjo, Lumajang, Lumajang', '2016-11-24', 32243),
(12, 13, 'PT. Mitratani Dua Tujuh', 'Jl. Mangga, no. 02, Kepuharjo, Lumajang, Lumajang', '2017-11-23', 36860);

-- --------------------------------------------------------

--
-- Table structure for table `produksi`
--

CREATE TABLE `produksi` (
  `id_produksi` int(22) NOT NULL,
  `id_targetproduksi` int(22) NOT NULL,
  `produksi` int(22) NOT NULL,
  `produksi1` int(22) NOT NULL,
  `vm` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produksi`
--

INSERT INTO `produksi` (`id_produksi`, `id_targetproduksi`, `produksi`, `produksi1`, `vm`) VALUES
(1, 2, 21132, 24669, 1),
(2, 3, 24669, 28083, 1),
(3, 4, 28083, 29578, 1),
(5, 5, 29578, 30828, 1),
(6, 6, 30828, 29889, 1),
(7, 7, 29889, 23407, 1),
(8, 8, 23407, 22388, 1),
(9, 9, 22388, 23023, 1),
(10, 10, 23023, 31438, 1),
(11, 11, 31438, 32243, 1),
(12, 12, 32243, 36860, 1),
(13, 13, 36860, 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ramal`
--

CREATE TABLE `ramal` (
  `id_ramal` int(22) NOT NULL,
  `id_produksi` int(22) NOT NULL,
  `tahun` int(22) NOT NULL,
  `ramal_ar` int(22) NOT NULL,
  `mape_ar` int(22) NOT NULL,
  `error_ar` int(22) NOT NULL,
  `ramal_ma` int(22) NOT NULL,
  `mape_ma` int(22) NOT NULL,
  `error_ma` int(22) NOT NULL,
  `ramal_arma` int(22) NOT NULL,
  `mape_arma` int(22) NOT NULL,
  `error_arma` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ramal`
--

INSERT INTO `ramal` (`id_ramal`, `id_produksi`, `tahun`, `ramal_ar`, `mape_ar`, `error_ar`, `ramal_ma`, `mape_ma`, `error_ma`, `ramal_arma`, `mape_arma`, `error_arma`) VALUES
(5, 7, 2012, 30363, -23, -6956, 33053, -29, -9646, 32114, -27, -8707),
(6, 8, 2013, 26448, -15, -4060, 24451, -8, -2063, 23589, -5, -1201),
(7, 9, 2014, 24805, -7, -1782, 26058, -12, -3035, 24313, -5, -1290),
(8, 10, 2015, 24674, 27, 6764, 25217, 25, 6221, 24175, 30, 7263),
(9, 11, 2016, 29166, 11, 3077, 29501, 9, 2742, 32697, -1, -454),
(10, 12, 2017, 30432, 21, 6428, 28327, 30, 8533, 30217, 22, 6643),
(11, 13, 2018, 35304, 0, 0, 32979, 0, 0, 39585, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `target_produksi`
--

CREATE TABLE `target_produksi` (
  `id_targetproduksi` int(22) NOT NULL,
  `tahun` int(22) NOT NULL,
  `target_produksi` int(22) NOT NULL,
  `berat` int(22) NOT NULL,
  `lahan` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `target_produksi`
--

INSERT INTO `target_produksi` (`id_targetproduksi`, `tahun`, `target_produksi`, `berat`, `lahan`) VALUES
(2, 2006, 21132, 301886, 5031),
(3, 2007, 24669, 352414, 5874),
(4, 2008, 28083, 401186, 6686),
(5, 2009, 29578, 422543, 7042),
(6, 2010, 30828, 440400, 7340),
(7, 2011, 29889, 426986, 7116),
(8, 2012, 23407, 334386, 5573),
(9, 2013, 22388, 319829, 5330),
(10, 2014, 23023, 328900, 5482),
(11, 2015, 31438, 449114, 7485),
(12, 2016, 32243, 460614, 7677),
(13, 2017, 36860, 526571, 8776);

-- --------------------------------------------------------

--
-- Table structure for table `tebu`
--

CREATE TABLE `tebu` (
  `id_tebu` int(22) NOT NULL,
  `id_targetproduksi` int(22) NOT NULL,
  `id_memberpetani` int(22) DEFAULT NULL,
  `id_lahan` int(22) DEFAULT NULL,
  `nama` varchar(55) NOT NULL,
  `alamat` text NOT NULL,
  `lokasi` text NOT NULL,
  `lahan` int(22) NOT NULL,
  `tgl` date NOT NULL,
  `berat` int(22) NOT NULL,
  `status` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tebu`
--

INSERT INTO `tebu` (`id_tebu`, `id_targetproduksi`, `id_memberpetani`, `id_lahan`, `nama`, `alamat`, `lokasi`, `lahan`, `tgl`, `berat`, `status`) VALUES
(4, 2, 12, NULL, '', '', 'Antirogo, Jember', 170, '2006-01-24', 8350, 'Terkirim'),
(5, 2, 14, NULL, '', '', 'Baratan, Jember', 300, '2006-01-18', 14500, 'Terkirim'),
(6, 2, 2, NULL, '', '', 'Desa Curah Petung, Kedung Jajang, Lumajang', 30, '2006-01-22', 1650, 'Terkirim'),
(7, 2, 5, NULL, '', '', 'Jl. Ahmad Yani, Klakah, Lumajang', 70, '2006-01-17', 2850, 'Terkirim'),
(8, 2, 15, NULL, '', '', 'Jl. Curahwaru, Bangsalsari, Jember', 300, '2006-01-03', 22200, 'Terkirim'),
(9, 2, 10, NULL, '', '', 'Jl. Diponegoro, Jogoyudan, Lumajang', 150, '2006-01-09', 8250, 'Terkirim'),
(10, 2, 9, NULL, '', '', 'Jl. Kaliurang, Mastrip, Jember', 150, '2006-01-10', 6250, 'Terkirim'),
(11, 2, 8, NULL, '', '', 'Jl. Pulo, Tempeh, Lumajang', 115, '2006-01-09', 6325, 'Terkirim'),
(12, 2, 11, NULL, '', '', 'Jl. Tawang Mangu, Antirogo, Jember', 130, '2006-01-02', 9150, 'Terkirim'),
(13, 2, 7, NULL, '', '', 'JLT, Galingan, Lumajang', 100, '2006-01-09', 5500, 'Terkirim'),
(14, 2, 4, NULL, '', '', 'Kutorenan, Lapangan Olah Raga, lumajang', 45, '2006-01-11', 2475, 'Terkirim'),
(15, 2, 6, NULL, '', '', 'Loksuki, Sukodono, Lumajang', 60, '2006-01-10', 2300, 'Terkirim'),
(16, 2, 16, NULL, '', '', 'Patemon, Tanggul, Jember', 400, '2006-01-16', 13000, 'Terkirim'),
(17, 2, 17, NULL, '', '', 'Pondok Dalem, Tanggul, jember', 200, '2006-01-13', 9000, 'Terkirim'),
(18, 2, 1, NULL, '', '', 'Pondok Telo, Banyu Putih Lor, Lumajang', 40, '2006-01-10', 2200, 'Terkirim'),
(19, 2, 19, NULL, '', '', 'Rowo Tengah, Tanggul, Jember', 100, '2006-01-18', 4500, 'Terkirim'),
(20, 2, 18, NULL, '', '', 'Sumber Agung, Tanggul, jember', 300, '2006-01-10', 23500, 'Terkirim'),
(21, 2, 13, NULL, '', '', 'Tawang Mangu, Jember', 300, '2006-01-10', 22500, 'Terkirim'),
(22, 2, 3, NULL, '', '', 'Yonif 527, Lumajang', 40, '2006-01-10', 3500, 'Terkirim'),
(23, 2, NULL, 1, '', '', 'Rejoagung, Semboro, Jember', 2285, '2006-01-09', 111300, 'Terkirim'),
(24, 3, 12, NULL, '', '', 'Antirogo, Jember', 170, '2007-01-08', 8350, 'Terkirim'),
(25, 3, 14, NULL, '', '', 'Baratan, Jember', 300, '2007-01-09', 24500, 'Terkirim'),
(26, 3, 2, NULL, '', '', 'Desa Curah Petung, Kedung Jajang, Lumajang', 30, '2007-01-09', 1650, 'Terkirim'),
(27, 3, 5, NULL, '', '', 'Jl. Ahmad Yani, Klakah, Lumajang', 70, '2007-01-10', 2850, 'Terkirim'),
(28, 3, 15, NULL, '', '', 'Jl. Curahwaru, Bangsalsari, Jember', 300, '2007-01-10', 21780, 'Terkirim'),
(29, 3, 10, NULL, '', '', 'Jl. Diponegoro, Jogoyudan, Lumajang', 150, '2007-01-17', 6250, 'Terkirim'),
(30, 3, 9, NULL, '', '', 'Jl. Kaliurang, Mastrip, Jember', 150, '2007-01-07', 6350, 'Terkirim'),
(31, 3, 8, NULL, '', '', 'Jl. Pulo, Tempeh, Lumajang', 115, '2007-01-17', 5275, 'Terkirim'),
(32, 3, 11, NULL, '', '', 'Jl. Tawang Mangu, Antirogo, Jember', 130, '2007-01-16', 7150, 'Terkirim'),
(33, 3, 7, NULL, '', '', 'JLT, Galingan, Lumajang', 100, '2007-01-18', 5590, 'Terkirim'),
(34, 3, 4, NULL, '', '', 'Kutorenan, Lapangan Olah Raga, lumajang', 45, '2007-01-18', 2175, 'Terkirim'),
(35, 3, 6, NULL, '', '', 'Loksuki, Sukodono, Lumajang', 60, '2007-01-17', 2300, 'Terkirim'),
(36, 3, 16, NULL, '', '', 'Patemon, Tanggul, Jember', 400, '2007-01-01', 25350, 'Terkirim'),
(37, 3, 17, NULL, '', '', 'Pondok Dalem, Tanggul, jember', 200, '2007-01-17', 9000, 'Terkirim'),
(38, 3, 1, NULL, '', '', 'Pondok Telo, Banyu Putih Lor, Lumajang', 40, '2007-01-22', 2200, 'Terkirim'),
(39, 3, 19, NULL, '', '', 'Rowo Tengah, Tanggul, Jember', 100, '2007-01-23', 4600, 'Terkirim'),
(40, 3, 18, NULL, '', '', 'Sumber Agung, Tanggul, jember', 300, '2007-01-23', 17600, 'Terkirim'),
(41, 3, 13, NULL, '', '', 'Tawang Mangu, Jember', 300, '2007-01-17', 6500, 'Terkirim'),
(42, 3, 3, NULL, '', '', 'Yonif 527, Lumajang', 40, '2007-01-23', 2200, 'Terkirim'),
(43, 3, NULL, 1, '', '', 'Rejoagung, Semboro, Jember', 2245, '2007-01-17', 173930, 'Terkirim'),
(44, 4, 12, NULL, '', '', 'Antirogo, Jember', 170, '2008-01-08', 17000, 'Terkirim'),
(45, 4, 14, NULL, '', '', 'Baratan, Jember', 300, '2008-01-15', 8000, 'Terkirim'),
(46, 4, 2, NULL, '', '', 'Desa Curah Petung, Kedung Jajang, Lumajang', 30, '2008-01-08', 3000, 'Terkirim'),
(47, 4, 5, NULL, '', '', 'Jl. Ahmad Yani, Klakah, Lumajang', 70, '2008-01-14', 7000, 'Terkirim'),
(48, 4, 15, NULL, '', '', 'Jl. Curahwaru, Bangsalsari, Jember', 300, '2008-01-14', 10000, 'Terkirim'),
(49, 4, 10, NULL, '', '', 'Jl. Diponegoro, Jogoyudan, Lumajang', 150, '2008-01-14', 15000, 'Terkirim'),
(50, 4, 9, NULL, '', '', 'Jl. Kaliurang, Mastrip, Jember', 150, '2008-01-14', 15000, 'Terkirim'),
(51, 4, 8, NULL, '', '', 'Jl. Pulo, Tempeh, Lumajang', 115, '2008-01-15', 8000, 'Terkirim'),
(52, 4, 11, NULL, '', '', 'Jl. Tawang Mangu, Antirogo, Jember', 130, '2008-01-15', 13000, 'Terkirim'),
(53, 4, 7, NULL, '', '', 'JLT, Galingan, Lumajang', 100, '2008-01-15', 7000, 'Terkirim'),
(54, 4, 4, NULL, '', '', 'Kutorenan, Lapangan Olah Raga, lumajang', 45, '2008-01-15', 4500, 'Terkirim'),
(55, 4, 6, NULL, '', '', 'Loksuki, Sukodono, Lumajang', 60, '2008-01-24', 3400, 'Terkirim'),
(56, 4, 16, NULL, '', '', 'Patemon, Tanggul, Jember', 400, '2008-01-21', 31000, 'Terkirim'),
(57, 4, 17, NULL, '', '', 'Pondok Dalem, Tanggul, jember', 200, '2008-01-15', 13000, 'Terkirim'),
(58, 4, 1, NULL, '', '', 'Pondok Telo, Banyu Putih Lor, Lumajang', 40, '2008-01-23', 4000, 'Terkirim'),
(59, 4, 19, NULL, '', '', 'Rowo Tengah, Tanggul, Jember', 100, '2008-01-23', 9800, 'Terkirim'),
(60, 4, 18, NULL, '', '', 'Sumber Agung, Tanggul, jember', 300, '2008-01-16', 15000, 'Terkirim'),
(61, 4, 13, NULL, '', '', 'Tawang Mangu, Jember', 300, '2008-01-22', 24000, 'Terkirim'),
(62, 4, 3, NULL, '', '', 'Yonif 527, Lumajang', 40, '2008-01-23', 4000, 'Terkirim'),
(63, 4, NULL, 1, '', '', 'Rejoagung, Semboro, Jember', 2125, '2008-01-16', 170000, 'Terkirim'),
(64, 5, 12, NULL, '', '', 'Antirogo, Jember', 170, '2009-01-13', 11900, 'Terkirim'),
(65, 5, 14, NULL, '', '', 'Baratan, Jember', 300, '2009-01-20', 21000, 'Terkirim'),
(66, 5, 2, NULL, '', '', 'Desa Curah Petung, Kedung Jajang, Lumajang', 30, '2009-01-14', 2100, 'Terkirim'),
(67, 5, 5, NULL, '', '', 'Jl. Ahmad Yani, Klakah, Lumajang', 70, '2009-01-12', 3900, 'Terkirim'),
(68, 5, 15, NULL, '', '', 'Jl. Curahwaru, Bangsalsari, Jember', 300, '2009-01-19', 20000, 'Terkirim'),
(69, 5, 10, NULL, '', '', 'Jl. Diponegoro, Jogoyudan, Lumajang', 150, '2009-01-19', 10500, 'Terkirim'),
(70, 5, 9, NULL, '', '', 'Jl. Kaliurang, Mastrip, Jember', 150, '2009-01-21', 9400, 'Terkirim'),
(71, 5, 8, NULL, '', '', 'Jl. Pulo, Tempeh, Lumajang', 115, '2009-01-21', 7000, 'Terkirim'),
(72, 5, 11, NULL, '', '', 'Jl. Tawang Mangu, Antirogo, Jember', 130, '2009-01-19', 9000, 'Terkirim'),
(73, 5, 7, NULL, '', '', 'JLT, Galingan, Lumajang', 100, '2009-01-20', 6000, 'Terkirim'),
(74, 5, 4, NULL, '', '', 'Kutorenan, Lapangan Olah Raga, lumajang', 45, '2009-01-13', 3120, 'Terkirim'),
(75, 5, 6, NULL, '', '', 'Loksuki, Sukodono, Lumajang', 60, '2009-01-21', 3100, 'Terkirim'),
(76, 5, 16, NULL, '', '', 'Patemon, Tanggul, Jember', 400, '2009-01-21', 27000, 'Terkirim'),
(77, 5, 17, NULL, '', '', 'Pondok Dalem, Tanggul, jember', 200, '2009-01-14', 14000, 'Terkirim'),
(78, 5, 1, NULL, '', '', 'Pondok Telo, Banyu Putih Lor, Lumajang', 40, '2009-01-21', 2700, 'Terkirim'),
(79, 5, 19, NULL, '', '', 'Rowo Tengah, Tanggul, Jember', 100, '2009-01-21', 5000, 'Terkirim'),
(80, 5, 18, NULL, '', '', 'Sumber Agung, Tanggul, jember', 300, '2009-01-20', 20000, 'Terkirim'),
(81, 5, 13, NULL, '', '', 'Tawang Mangu, Jember', 300, '2009-01-14', 21000, 'Terkirim'),
(82, 5, 3, NULL, '', '', 'Yonif 527, Lumajang', 40, '2009-01-20', 2700, 'Terkirim'),
(83, 5, NULL, 1, '', '', 'Rejoagung, Semboro, Jember', 3214, '2009-01-05', 214980, 'Terkirim'),
(84, 6, 12, NULL, '', '', 'Antirogo, Jember', 170, '2010-01-11', 11050, 'Terkirim'),
(85, 6, 14, NULL, '', '', 'Baratan, Jember', 300, '2010-01-10', 19500, 'Terkirim'),
(86, 6, 2, NULL, '', '', 'Desa Curah Petung, Kedung Jajang, Lumajang', 30, '2010-01-17', 1950, 'Terkirim'),
(87, 6, 5, NULL, '', '', 'Jl. Ahmad Yani, Klakah, Lumajang', 70, '2010-01-19', 4550, 'Terkirim'),
(88, 6, 15, NULL, '', '', 'Jl. Curahwaru, Bangsalsari, Jember', 300, '2010-01-18', 15500, 'Terkirim'),
(89, 6, 10, NULL, '', '', 'Jl. Diponegoro, Jogoyudan, Lumajang', 150, '2010-01-18', 9750, 'Terkirim'),
(90, 6, 9, NULL, '', '', 'Jl. Kaliurang, Mastrip, Jember', 150, '2010-01-19', 9750, 'Terkirim'),
(91, 6, 8, NULL, '', '', 'Jl. Pulo, Tempeh, Lumajang', 115, '2010-01-19', 7475, 'Terkirim'),
(92, 6, 11, NULL, '', '', 'Jl. Tawang Mangu, Antirogo, Jember', 130, '2010-01-12', 8450, 'Terkirim'),
(93, 6, 7, NULL, '', '', 'JLT, Galingan, Lumajang', 100, '2010-01-18', 6500, 'Terkirim'),
(94, 6, 4, NULL, '', '', 'Kutorenan, Lapangan Olah Raga, lumajang', 45, '2010-01-11', 2925, 'Terkirim'),
(95, 6, 6, NULL, '', '', 'Loksuki, Sukodono, Lumajang', 60, '2010-01-20', 3600, 'Terkirim'),
(96, 6, 16, NULL, '', '', 'Patemon, Tanggul, Jember', 400, '2010-01-19', 20000, 'Terkirim'),
(97, 6, 17, NULL, '', '', 'Pondok Dalem, Tanggul, jember', 200, '2010-01-20', 13000, 'Terkirim'),
(98, 6, 1, NULL, '', '', 'Pondok Telo, Banyu Putih Lor, Lumajang', 40, '2010-01-13', 2600, 'Terkirim'),
(99, 6, 19, NULL, '', '', 'Rowo Tengah, Tanggul, Jember', 100, '2010-01-12', 6500, 'Terkirim'),
(100, 6, 18, NULL, '', '', 'Sumber Agung, Tanggul, jember', 300, '2010-01-19', 19500, 'Terkirim'),
(101, 6, 13, NULL, '', '', 'Tawang Mangu, Jember', 300, '2010-01-27', 19200, 'Terkirim'),
(102, 6, 3, NULL, '', '', 'Yonif 527, Lumajang', 40, '2010-01-19', 2600, 'Terkirim'),
(103, 6, NULL, 1, '', '', 'Rejoagung, Semboro, Jember', 4429, '2010-01-20', 267800, 'Terkirim'),
(105, 7, 12, NULL, '', '', 'Antirogo, Jember', 170, '2011-01-11', 10200, 'Terkirim'),
(106, 7, 14, NULL, '', '', 'Baratan, Jember', 300, '2011-01-09', 18000, 'Terkirim'),
(107, 7, 2, NULL, '', '', 'Desa Curah Petung, Kedung Jajang, Lumajang', 30, '2011-01-18', 1800, 'Terkirim'),
(108, 7, 5, NULL, '', '', 'Jl. Ahmad Yani, Klakah, Lumajang', 70, '2011-01-17', 3840, 'Terkirim'),
(109, 7, 15, NULL, '', '', 'Jl. Curahwaru, Bangsalsari, Jember', 300, '2011-01-18', 15000, 'Terkirim'),
(110, 7, 10, NULL, '', '', 'Jl. Diponegoro, Jogoyudan, Lumajang', 150, '2011-01-18', 9000, 'Terkirim'),
(111, 7, 9, NULL, '', '', 'Jl. Kaliurang, Mastrip, Jember', 150, '2011-01-17', 9000, 'Terkirim'),
(112, 7, 8, NULL, '', '', 'Jl. Pulo, Tempeh, Lumajang', 115, '2011-01-17', 5450, 'Terkirim'),
(113, 7, 11, NULL, '', '', 'Jl. Tawang Mangu, Antirogo, Jember', 130, '2011-01-02', 7800, 'Terkirim'),
(114, 7, 7, NULL, '', '', 'JLT, Galingan, Lumajang', 100, '2011-01-10', 6000, 'Terkirim'),
(115, 7, 4, NULL, '', '', 'Kutorenan, Lapangan Olah Raga, lumajang', 45, '2011-01-17', 1350, 'Terkirim'),
(116, 7, 6, NULL, '', '', 'Loksuki, Sukodono, Lumajang', 60, '2011-01-10', 3600, 'Terkirim'),
(117, 7, 16, NULL, '', '', 'Patemon, Tanggul, Jember', 400, '2011-01-10', 29000, 'Terkirim'),
(118, 7, 17, NULL, '', '', 'Pondok Dalem, Tanggul, jember', 200, '2011-01-10', 12000, 'Terkirim'),
(119, 7, 1, NULL, '', '', 'Pondok Telo, Banyu Putih Lor, Lumajang', 40, '2011-01-16', 2700, 'Terkirim'),
(120, 7, 19, NULL, '', '', 'Rowo Tengah, Tanggul, Jember', 100, '2011-01-10', 6000, 'Terkirim'),
(121, 7, 18, NULL, '', '', 'Sumber Agung, Tanggul, jember', 300, '2011-01-03', 18000, 'Terkirim'),
(122, 7, 13, NULL, '', '', 'Tawang Mangu, Jember', 300, '2011-01-10', 18000, 'Terkirim'),
(123, 7, 3, NULL, '', '', 'Yonif 527, Lumajang', 40, '2011-01-17', 1200, 'Terkirim'),
(124, 7, NULL, 1, '', '', 'Rejoagung, Semboro, Jember', 4356, '2011-01-17', 250360, 'Terkirim'),
(125, 8, 12, NULL, '', '', 'Antirogo, Jember', 170, '2012-01-09', 8500, 'Terkirim'),
(126, 8, 14, NULL, '', '', 'Baratan, Jember', 300, '2012-01-09', 15000, 'Terkirim'),
(127, 8, 2, NULL, '', '', 'Desa Curah Petung, Kedung Jajang, Lumajang', 30, '2012-01-08', 1500, 'Terkirim'),
(128, 8, 5, NULL, '', '', 'Jl. Ahmad Yani, Klakah, Lumajang', 70, '2012-01-09', 3500, 'Terkirim'),
(129, 8, 15, NULL, '', '', 'Jl. Curahwaru, Bangsalsari, Jember', 300, '2012-01-10', 15000, 'Terkirim'),
(130, 8, 10, NULL, '', '', 'Jl. Diponegoro, Jogoyudan, Lumajang', 150, '2012-01-08', 7500, 'Terkirim'),
(131, 8, 9, NULL, '', '', 'Jl. Kaliurang, Mastrip, Jember', 150, '2012-01-08', 7500, 'Terkirim'),
(132, 8, 8, NULL, '', '', 'Jl. Pulo, Tempeh, Lumajang', 115, '2012-01-16', 7750, 'Terkirim'),
(133, 8, 11, NULL, '', '', 'Jl. Tawang Mangu, Antirogo, Jember', 130, '2012-01-17', 8600, 'Terkirim'),
(134, 8, 7, NULL, '', '', 'JLT, Galingan, Lumajang', 100, '2012-01-09', 5000, 'Terkirim'),
(135, 8, 4, NULL, '', '', 'Kutorenan, Lapangan Olah Raga, lumajang', 45, '2012-01-16', 3250, 'Terkirim'),
(136, 8, 6, NULL, '', '', 'Loksuki, Sukodono, Lumajang', 60, '2012-01-17', 4000, 'Terkirim'),
(137, 8, 16, NULL, '', '', 'Patemon, Tanggul, Jember', 400, '2012-01-16', 20000, 'Terkirim'),
(138, 8, 17, NULL, '', '', 'Pondok Dalem, Tanggul, jember', 200, '2012-01-15', 10000, 'Terkirim'),
(139, 8, 1, NULL, '', '', 'Pondok Telo, Banyu Putih Lor, Lumajang', 40, '2012-01-17', 4100, 'Terkirim'),
(140, 8, 19, NULL, '', '', 'Rowo Tengah, Tanggul, Jember', 100, '2012-01-18', 7100, 'Terkirim'),
(141, 8, 18, NULL, '', '', 'Sumber Agung, Tanggul, jember', 300, '2012-01-17', 16000, 'Terkirim'),
(142, 8, 13, NULL, '', '', 'Tawang Mangu, Jember', 300, '2012-01-24', 16000, 'Terkirim'),
(143, 8, 3, NULL, '', '', 'Yonif 527, Lumajang', 40, '2012-01-24', 4100, 'Terkirim'),
(144, 8, NULL, 1, '', '', 'Rejoagung, Semboro, Jember', 3486, '2012-01-16', 174300, 'Terkirim'),
(145, 9, 12, NULL, '', '', 'Antirogo, Jember', 170, '2013-01-06', 10200, 'Terkirim'),
(146, 9, 14, NULL, '', '', 'Baratan, Jember', 300, '2013-01-07', 18000, 'Terkirim'),
(147, 9, 2, NULL, '', '', 'Desa Curah Petung, Kedung Jajang, Lumajang', 30, '2013-01-07', 1800, 'Terkirim'),
(148, 9, 5, NULL, '', '', 'Jl. Ahmad Yani, Klakah, Lumajang', 70, '2013-01-16', 5200, 'Terkirim'),
(149, 9, 15, NULL, '', '', 'Jl. Curahwaru, Bangsalsari, Jember', 300, '2013-01-15', 20000, 'Terkirim'),
(150, 9, 10, NULL, '', '', 'Jl. Diponegoro, Jogoyudan, Lumajang', 150, '2013-01-14', 9000, 'Terkirim'),
(151, 9, 9, NULL, '', '', 'Jl. Kaliurang, Mastrip, Jember', 150, '2013-01-08', 9000, 'Terkirim'),
(152, 9, 8, NULL, '', '', 'Jl. Pulo, Tempeh, Lumajang', 115, '2013-01-08', 6900, 'Terkirim'),
(153, 9, 11, NULL, '', '', 'Jl. Tawang Mangu, Antirogo, Jember', 130, '2013-01-15', 8800, 'Terkirim'),
(154, 9, 7, NULL, '', '', 'JLT, Galingan, Lumajang', 100, '2013-01-22', 9000, 'Terkirim'),
(155, 9, 4, NULL, '', '', 'Kutorenan, Lapangan Olah Raga, lumajang', 45, '2013-01-22', 2700, 'Terkirim'),
(156, 9, 6, NULL, '', '', 'Loksuki, Sukodono, Lumajang', 60, '2013-01-23', 5700, 'Terkirim'),
(157, 9, 16, NULL, '', '', 'Patemon, Tanggul, Jember', 400, '2013-01-22', 15000, 'Terkirim'),
(158, 9, 17, NULL, '', '', 'Pondok Dalem, Tanggul, jember', 200, '2013-01-22', 12000, 'Terkirim'),
(159, 9, 1, NULL, '', '', 'Pondok Telo, Banyu Putih Lor, Lumajang', 40, '2013-01-30', 4510, 'Terkirim'),
(160, 9, 19, NULL, '', '', 'Rowo Tengah, Tanggul, Jember', 100, '2013-01-16', 6000, 'Terkirim'),
(161, 9, 18, NULL, '', '', 'Sumber Agung, Tanggul, jember', 300, '2013-01-21', 21000, 'Terkirim'),
(162, 9, 13, NULL, '', '', 'Tawang Mangu, Jember', 300, '2013-01-30', 19110, 'Terkirim'),
(163, 9, 3, NULL, '', '', 'Yonif 527, Lumajang', 40, '2013-01-23', 5500, 'Terkirim'),
(164, 9, NULL, 1, '', '', 'Rejoagung, Semboro, Jember', 3018, '2013-01-22', 197080, 'Terkirim'),
(165, 10, 12, NULL, '', '', 'Antirogo, Jember', 170, '2014-01-19', 10200, 'Terkirim'),
(166, 10, 14, NULL, '', '', 'Baratan, Jember', 300, '2014-01-13', 18000, 'Terkirim'),
(167, 10, 2, NULL, '', '', 'Desa Curah Petung, Kedung Jajang, Lumajang', 30, '2014-01-12', 1800, 'Terkirim'),
(168, 10, 5, NULL, '', '', 'Jl. Ahmad Yani, Klakah, Lumajang', 70, '2014-01-12', 4200, 'Terkirim'),
(169, 10, 15, NULL, '', '', 'Jl. Curahwaru, Bangsalsari, Jember', 300, '2014-01-20', 18000, 'Terkirim'),
(170, 10, 10, NULL, '', '', 'Jl. Diponegoro, Jogoyudan, Lumajang', 150, '2014-01-13', 9000, 'Terkirim'),
(171, 10, 9, NULL, '', '', 'Jl. Kaliurang, Mastrip, Jember', 150, '2014-01-21', 9000, 'Terkirim'),
(172, 10, 8, NULL, '', '', 'Jl. Pulo, Tempeh, Lumajang', 115, '2014-01-21', 6900, 'Terkirim'),
(173, 10, 11, NULL, '', '', 'Jl. Tawang Mangu, Antirogo, Jember', 130, '2014-01-20', 7800, 'Terkirim'),
(174, 10, 7, NULL, '', '', 'JLT, Galingan, Lumajang', 100, '2014-01-28', 6000, 'Terkirim'),
(175, 10, 4, NULL, '', '', 'Kutorenan, Lapangan Olah Raga, lumajang', 45, '2014-01-20', 2700, 'Terkirim'),
(176, 10, 6, NULL, '', '', 'Loksuki, Sukodono, Lumajang', 60, '2014-01-20', 3600, 'Terkirim'),
(177, 10, 16, NULL, '', '', 'Patemon, Tanggul, Jember', 400, '2014-01-21', 24000, 'Terkirim'),
(178, 10, 17, NULL, '', '', 'Pondok Dalem, Tanggul, jember', 200, '2014-01-21', 12000, 'Terkirim'),
(179, 10, 1, NULL, '', '', 'Pondok Telo, Banyu Putih Lor, Lumajang', 40, '2014-01-20', 2400, 'Terkirim'),
(180, 10, 19, NULL, '', '', 'Rowo Tengah, Tanggul, Jember', 100, '2014-01-21', 6000, 'Terkirim'),
(181, 10, 18, NULL, '', '', 'Sumber Agung, Tanggul, jember', 300, '2014-01-21', 18000, 'Terkirim'),
(182, 10, 13, NULL, '', '', 'Tawang Mangu, Jember', 300, '2014-01-14', 18000, 'Terkirim'),
(183, 10, 3, NULL, '', '', 'Yonif 527, Lumajang', 40, '2014-01-13', 2400, 'Terkirim'),
(184, 10, NULL, 1, '', '', 'Rejoagung, Semboro, Jember', 2751, '2014-01-06', 160700, 'Terkirim'),
(185, 11, 12, NULL, '', '', 'Antirogo, Jember', 170, '2015-01-04', 10200, 'Terkirim'),
(186, 11, 14, NULL, '', '', 'Baratan, Jember', 300, '2015-01-11', 18000, 'Terkirim'),
(187, 11, 2, NULL, '', '', 'Desa Curah Petung, Kedung Jajang, Lumajang', 30, '2015-01-11', 1800, 'Terkirim'),
(188, 11, 5, NULL, '', '', 'Jl. Ahmad Yani, Klakah, Lumajang', 70, '2015-01-11', 4200, 'Terkirim'),
(189, 11, 15, NULL, '', '', 'Jl. Curahwaru, Bangsalsari, Jember', 300, '2015-01-19', 10000, 'Terkirim'),
(190, 11, 10, NULL, '', '', 'Jl. Diponegoro, Jogoyudan, Lumajang', 150, '2015-01-18', 9000, 'Terkirim'),
(191, 11, 9, NULL, '', '', 'Jl. Kaliurang, Mastrip, Jember', 150, '2015-01-19', 7000, 'Terkirim'),
(192, 11, 8, NULL, '', '', 'Jl. Pulo, Tempeh, Lumajang', 115, '2015-01-20', 4900, 'Terkirim'),
(193, 11, 11, NULL, '', '', 'Jl. Tawang Mangu, Antirogo, Jember', 130, '2015-01-20', 5800, 'Terkirim'),
(194, 11, 7, NULL, '', '', 'JLT, Galingan, Lumajang', 100, '2015-01-20', 4000, 'Terkirim'),
(195, 11, 4, NULL, '', '', 'Kutorenan, Lapangan Olah Raga, lumajang', 45, '2015-01-19', 2700, 'Terkirim'),
(196, 11, 6, NULL, '', '', 'Loksuki, Sukodono, Lumajang', 60, '2015-01-21', 3600, 'Terkirim'),
(197, 11, 16, NULL, '', '', 'Patemon, Tanggul, Jember', 400, '2015-01-28', 22000, 'Terkirim'),
(198, 11, 17, NULL, '', '', 'Pondok Dalem, Tanggul, jember', 200, '2015-01-20', 10000, 'Terkirim'),
(199, 11, 1, NULL, '', '', 'Pondok Telo, Banyu Putih Lor, Lumajang', 40, '2015-01-12', 2400, 'Terkirim'),
(200, 11, 19, NULL, '', '', 'Rowo Tengah, Tanggul, Jember', 100, '2015-01-21', 4000, 'Terkirim'),
(201, 11, 18, NULL, '', '', 'Sumber Agung, Tanggul, jember', 300, '2015-01-27', 15000, 'Terkirim'),
(202, 11, 13, NULL, '', '', 'Tawang Mangu, Jember', 300, '2015-01-26', 15000, 'Terkirim'),
(203, 11, 3, NULL, '', '', 'Yonif 527, Lumajang', 40, '2015-01-26', 2400, 'Terkirim'),
(204, 11, NULL, 1, '', '', 'Rejoagung, Semboro, Jember', 4030, '2015-01-27', 231900, 'Terkirim'),
(205, 12, 12, NULL, '', '', 'Antirogo, Jember', 170, '2016-01-10', 10200, 'Terkirim'),
(206, 12, 14, NULL, '', '', 'Baratan, Jember', 300, '2016-01-12', 18000, 'Terkirim'),
(207, 12, 2, NULL, '', '', 'Desa Curah Petung, Kedung Jajang, Lumajang', 30, '2016-01-19', 1800, 'Terkirim'),
(208, 12, 5, NULL, '', '', 'Jl. Ahmad Yani, Klakah, Lumajang', 70, '2016-01-17', 4200, 'Terkirim'),
(209, 12, 15, NULL, '', '', 'Jl. Curahwaru, Bangsalsari, Jember', 300, '2016-01-18', 18000, 'Terkirim'),
(210, 12, 10, NULL, '', '', 'Jl. Diponegoro, Jogoyudan, Lumajang', 150, '2016-01-18', 9000, 'Terkirim'),
(211, 12, 9, NULL, '', '', 'Jl. Kaliurang, Mastrip, Jember', 150, '2016-01-25', 9000, 'Terkirim'),
(212, 12, 8, NULL, '', '', 'Jl. Pulo, Tempeh, Lumajang', 115, '2016-01-25', 9900, 'Terkirim'),
(213, 12, 11, NULL, '', '', 'Jl. Tawang Mangu, Antirogo, Jember', 130, '2016-01-25', 7800, 'Terkirim'),
(214, 12, 7, NULL, '', '', 'JLT, Galingan, Lumajang', 100, '2016-01-18', 6000, 'Terkirim'),
(215, 12, 4, NULL, '', '', 'Kutorenan, Lapangan Olah Raga, lumajang', 45, '2016-01-19', 2700, 'Terkirim'),
(216, 12, 6, NULL, '', '', 'Loksuki, Sukodono, Lumajang', 60, '2016-01-26', 3640, 'Terkirim'),
(217, 12, 16, NULL, '', '', 'Patemon, Tanggul, Jember', 400, '2016-01-26', 28000, 'Terkirim'),
(218, 12, 17, NULL, '', '', 'Pondok Dalem, Tanggul, jember', 200, '2016-01-25', 14000, 'Terkirim'),
(219, 12, 1, NULL, '', '', 'Pondok Telo, Banyu Putih Lor, Lumajang', 40, '2016-01-19', 2400, 'Terkirim'),
(220, 12, 19, NULL, '', '', 'Rowo Tengah, Tanggul, Jember', 100, '2016-01-26', 8000, 'Terkirim'),
(221, 12, 18, NULL, '', '', 'Sumber Agung, Tanggul, jember', 300, '2016-01-25', 20000, 'Terkirim'),
(222, 12, 13, NULL, '', '', 'Tawang Mangu, Jember', 300, '2016-01-25', 20000, 'Terkirim'),
(223, 12, 3, NULL, '', '', 'Yonif 527, Lumajang', 40, '2016-01-18', 2400, 'Terkirim'),
(224, 12, NULL, 1, '', '', 'Rejoagung, Semboro, Jember', 4021, '2016-01-26', 241260, 'Terkirim'),
(225, 13, 12, NULL, '', '', 'Antirogo, Jember', 170, '2017-01-23', 10200, 'Terkirim'),
(227, 13, 14, NULL, '', '', 'Baratan, Jember', 300, '2017-01-16', 18000, 'Terkirim'),
(228, 13, 2, NULL, '', '', 'Desa Curah Petung, Kedung Jajang, Lumajang', 30, '2017-01-23', 1800, 'Terkirim'),
(229, 13, 5, NULL, '', '', 'Jl. Ahmad Yani, Klakah, Lumajang', 70, '2017-01-23', 4200, 'Terkirim'),
(230, 13, 15, NULL, '', '', 'Jl. Curahwaru, Bangsalsari, Jember', 300, '2017-01-09', 18000, 'Terkirim'),
(231, 13, 10, NULL, '', '', 'Jl. Diponegoro, Jogoyudan, Lumajang', 150, '2017-01-17', 9000, 'Terkirim'),
(232, 13, 9, NULL, '', '', 'Jl. Kaliurang, Mastrip, Jember', 150, '2017-01-24', 9000, 'Terkirim'),
(233, 13, 8, NULL, '', '', 'Jl. Pulo, Tempeh, Lumajang', 115, '2017-01-23', 6900, 'Terkirim'),
(234, 13, 11, NULL, '', '', 'Jl. Tawang Mangu, Antirogo, Jember', 130, '2017-01-23', 7800, 'Terkirim'),
(235, 13, 7, NULL, '', '', 'JLT, Galingan, Lumajang', 100, '2017-01-23', 6000, 'Terkirim'),
(236, 13, 4, NULL, '', '', 'Kutorenan, Lapangan Olah Raga, lumajang', 45, '2017-01-25', 2700, 'Terkirim'),
(237, 13, 6, NULL, '', '', 'Loksuki, Sukodono, Lumajang', 60, '2017-01-24', 3600, 'Terkirim'),
(238, 13, 16, NULL, '', '', 'Patemon, Tanggul, Jember', 400, '2017-01-13', 24000, 'Terkirim'),
(239, 13, 17, NULL, '', '', 'Pondok Dalem, Tanggul, jember', 200, '2017-01-24', 12000, 'Terkirim'),
(240, 13, 1, NULL, '', '', 'Pondok Telo, Banyu Putih Lor, Lumajang', 40, '2017-01-19', 2400, 'Terkirim'),
(241, 13, 19, NULL, '', '', 'Rowo Tengah, Tanggul, Jember', 100, '2017-01-27', 12000, 'Terkirim'),
(242, 13, 18, NULL, '', '', 'Sumber Agung, Tanggul, jember', 300, '2017-01-28', 18000, 'Terkirim'),
(243, 13, 13, NULL, '', '', 'Tawang Mangu, Jember', 300, '2017-01-30', 18300, 'Terkirim'),
(244, 13, 3, NULL, '', '', 'Yonif 527, Lumajang', 40, '2017-01-25', 2400, 'Terkirim'),
(245, 13, NULL, 1, '', '', 'Rejoagung, Semboro, Jember', 4888, '2017-01-30', 263300, 'Terkirim');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(22) NOT NULL,
  `hak_akses` varchar(22) NOT NULL,
  `level` int(22) NOT NULL,
  `password` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `hak_akses`, `level`, `password`) VALUES
(1, 'manajer', 'Manajer', 1, 'manajer'),
(2, 'produksi', 'Produksi', 2, 'produksi'),
(3, 'logistik', 'Logistik', 3, 'logistik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `lahan`
--
ALTER TABLE `lahan`
  ADD PRIMARY KEY (`id_lahan`);

--
-- Indexes for table `member_petani`
--
ALTER TABLE `member_petani`
  ADD PRIMARY KEY (`id_memberpetani`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD KEY `id_lahan` (`id_targetproduksi`);

--
-- Indexes for table `produksi`
--
ALTER TABLE `produksi`
  ADD PRIMARY KEY (`id_produksi`),
  ADD KEY `id_tebu` (`id_targetproduksi`);

--
-- Indexes for table `ramal`
--
ALTER TABLE `ramal`
  ADD PRIMARY KEY (`id_ramal`),
  ADD KEY `id_produksi` (`id_produksi`);

--
-- Indexes for table `target_produksi`
--
ALTER TABLE `target_produksi`
  ADD PRIMARY KEY (`id_targetproduksi`);

--
-- Indexes for table `tebu`
--
ALTER TABLE `tebu`
  ADD PRIMARY KEY (`id_tebu`),
  ADD KEY `id_lahan` (`id_targetproduksi`),
  ADD KEY `id_memberpetani` (`id_memberpetani`),
  ADD KEY `id_lahan_2` (`id_lahan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `lahan`
--
ALTER TABLE `lahan`
  MODIFY `id_lahan` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `member_petani`
--
ALTER TABLE `member_petani`
  MODIFY `id_memberpetani` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `produksi`
--
ALTER TABLE `produksi`
  MODIFY `id_produksi` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ramal`
--
ALTER TABLE `ramal`
  MODIFY `id_ramal` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `target_produksi`
--
ALTER TABLE `target_produksi`
  MODIFY `id_targetproduksi` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tebu`
--
ALTER TABLE `tebu`
  MODIFY `id_tebu` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`id_targetproduksi`) REFERENCES `target_produksi` (`id_targetproduksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produksi`
--
ALTER TABLE `produksi`
  ADD CONSTRAINT `produksi_ibfk_1` FOREIGN KEY (`id_targetproduksi`) REFERENCES `target_produksi` (`id_targetproduksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ramal`
--
ALTER TABLE `ramal`
  ADD CONSTRAINT `ramal_ibfk_1` FOREIGN KEY (`id_produksi`) REFERENCES `produksi` (`id_produksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tebu`
--
ALTER TABLE `tebu`
  ADD CONSTRAINT `tebu_ibfk_1` FOREIGN KEY (`id_targetproduksi`) REFERENCES `target_produksi` (`id_targetproduksi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tebu_ibfk_2` FOREIGN KEY (`id_memberpetani`) REFERENCES `member_petani` (`id_memberpetani`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tebu_ibfk_3` FOREIGN KEY (`id_lahan`) REFERENCES `lahan` (`id_lahan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
