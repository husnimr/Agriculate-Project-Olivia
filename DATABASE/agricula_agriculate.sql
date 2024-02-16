-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 16, 2024 at 04:07 PM
-- Server version: 10.6.16-MariaDB-cll-lve
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agricula_agriculate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `namaadmin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `namaadmin`) VALUES
(1, 'agriculate', 'husni', 'Husni Mubarok Ramadhan'),
(2, 'agriculate', 'risqi', 'Risqi Akbar Marsudi'),
(3, 'agriculate', 'reno', 'Reno fathan Sofyan'),
(4, 'agriculate', 'fatih', 'Muhammad Fatih Bagaskara'),
(5, 'agriculate', 'regina', 'Regina Frida Zahrani');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `tanggal_publish` date DEFAULT NULL,
  `konten` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `penulis`, `tanggal_publish`, `konten`, `gambar`) VALUES
(3, 'Strategi Berkelanjutan untuk Pengelolaan Tanah', 'Husni Mubarok Ramadhan', '2023-11-28', '&lt;p&gt;Pengelolaan tanah yang berkelanjutan adalah kunci untuk mempertahankan produktivitas pertanian jangka panjang, melindungi lingkungan, dan memastikan ketersediaan pangan untuk generasi mendatang. Dalam upaya mencapai tujuan ini, diperlukan berbagai strategi yang mengintegrasikan prinsip-prinsip kelestarian dan keseimbangan ekologi. Artikel ini akan membahas beberapa strategi penting untuk pengelolaan tanah yang berkelanjutan.&lt;/p&gt;\r\n&lt;h4&gt;Praktik Pertanian Organik&lt;/h4&gt;\r\n&lt;p&gt;Pertanian organik berfokus pada penggunaan bahan-bahan alami dan teknik alami untuk memelihara kesuburan tanah. Ini termasuk penggunaan kompos, pupuk hijau, dan pengendalian hama alami, yang membantu menjaga keseimbangan ekosistem pertanian.&lt;/p&gt;\r\n&lt;h4&gt;Rotasi Tanaman&lt;/h4&gt;\r\n&lt;p&gt;Rotasi tanaman adalah strategi di mana petani mengubah jenis tanaman yang ditanam di lahan mereka dari waktu ke waktu. Hal ini membantu mempertahankan kesuburan tanah dan mengurangi risiko penyebaran penyakit atau hama tertentu.&lt;/p&gt;\r\n&lt;h4&gt;Praktik Konservasi Tanah dan Air&lt;/h4&gt;\r\n&lt;p&gt;Teknik-teknik seperti penggunaan penutup tanah, pembuatan teras, dan penggunaan sistem pengairan yang efisien dapat membantu mencegah erosi dan mempertahankan kelembaban tanah.&lt;/p&gt;\r\n&lt;h4&gt;Agroforestri&lt;/h4&gt;\r\n&lt;p&gt;Agroforestri adalah pendekatan yang mengintegrasikan pohon-pohon ke dalam sistem pertanian. Hal ini tidak hanya meningkatkan biodiversitas, tetapi juga membantu mempertahankan struktur tanah dan menyediakan layanan ekosistem tambahan.&lt;/p&gt;\r\n&lt;h4&gt;Penerapan Teknologi Pertanian Tepat Guna&lt;/h4&gt;\r\n&lt;p&gt;Menggunakan teknologi modern seperti sensor tanah, irigasi otomatis, dan pengelolaan data pertanian dapat membantu petani memantau dan mengelola tanah mereka dengan lebih efisien.&lt;/p&gt;\r\n&lt;h4&gt;Praktik Pengolahan Tanah yang Tepat&lt;/h4&gt;\r\n&lt;p&gt;Pengelolaan tanah yang benar, termasuk penerapan teknik seperti pengolahan minimum atau tanpa olah tanah, dapat membantu mengurangi gangguan struktur tanah dan meminimalkan erosi.&lt;/p&gt;\r\n&lt;h4&gt;Pendekatan Sistemik&lt;/h4&gt;\r\n&lt;p&gt;Menggunakan pendekatan holistik untuk pengelolaan lahan, mengintegrasikan pertanian dengan peternakan dan kehutanan, dapat menciptakan sistem agroekologi yang berkelanjutan.&lt;/p&gt;\r\n&lt;p&gt;Pengelolaan tanah yang berkelanjutan membutuhkan pendekatan komprehensif yang mempertimbangkan kebutuhan pertanian jangka panjang, keseimbangan ekologi, dan kesejahteraan masyarakat lokal. Melalui penerapan strategi-strategi ini, kita dapat memaksimalkan produktivitas pertanian, mengurangi dampak lingkungan, dan memastikan kelangsungan hidup sumber daya alam bagi generasi mendatang. Upaya bersama dari petani, ilmuwan pertanian, pemerintah, dan masyarakat umum sangatlah penting dalam mewujudkan visi pengelolaan tanah yang berkelanjutan.&lt;/p&gt;', '65659ded32746.jpg'),
(4, 'Pentingnya Pengelolaan Tanah', 'Husni Mubarok Ramadhan', '2023-11-29', '&lt;p&gt;Tanah adalah salah satu sumber daya alam yang paling penting dan berperan kunci dalam keberlangsungan kehidupan di Bumi. Pengelolaan tanah yang bijak dan berkelanjutan menjadi esensial dalam memastikan kelangsungan hidup manusia, keberlanjutan lingkungan, dan kelestarian ekosistem. Artikel ini akan mengulas betapa pentingnya pengelolaan tanah dalam konteks global, dan bagaimana hal ini mempengaruhi berbagai aspek kehidupan manusia.&lt;/p&gt;\r\n&lt;h5&gt;Mengamankan Ketahanan Pangan&lt;/h5&gt;\r\n&lt;p&gt;Tanah adalah pangkalan utama bagi produksi makanan. Dengan mengelola tanah dengan baik, kita dapat meningkatkan produktivitas pertanian dan memastikan ketersediaan pangan yang memadai untuk populasi yang terus bertambah.&lt;/p&gt;\r\n&lt;h5&gt;Konservasi Sumber Daya Alami&lt;/h5&gt;\r\n&lt;p&gt;Tanah yang sehat memainkan peran penting dalam konservasi sumber daya alam. Dengan menerapkan praktik-praktik pengelolaan tanah yang tepat, kita dapat mengurangi erosi tanah, menjaga kualitas air, dan meminimalkan pencemaran lingkungan.&lt;/p&gt;\r\n&lt;h5&gt;Pengendalian Perubahan Iklim&lt;/h5&gt;\r\n&lt;p&gt;Tanah yang sehat berperan sebagai penyimpanan karbon alami. Dengan menjaga kelestarian tanah, kita dapat membantu dalam upaya global untuk mengurangi emisi gas rumah kaca dan memitigasi dampak perubahan iklim.&lt;/p&gt;\r\n&lt;h5&gt;Mengelola Ketersediaan Air&lt;/h5&gt;\r\n&lt;p&gt;Tanah yang dikelola dengan baik dapat membantu mengatur siklus air dan mempertahankan kelembaban yang diperlukan untuk pertanian dan kehidupan hewan.&lt;/p&gt;\r\n&lt;h5&gt;Mengurangi Kerentanan terhadap Bencana Alam&lt;/h5&gt;\r\n&lt;p&gt;Tanah yang kokoh dan sehat dapat membantu mengurangi dampak bencana alam seperti banjir dan longsor. Praktik pengelolaan tanah yang benar dapat meminimalkan risiko kerusakan akibat bencana alam.&lt;/p&gt;\r\n&lt;h5&gt;Mendukung Keanekaragaman Hayati&lt;/h5&gt;\r\n&lt;p&gt;Tanah yang sehat adalah rumah bagi berbagai makhluk hidup, termasuk mikroorganisme, tanaman, dan hewan. Dengan merawat tanah dengan benar, kita dapat mempertahankan keanekaragaman hayati yang kritis untuk keseimbangan ekosistem.&lt;/p&gt;\r\n&lt;h5&gt;Mengamankan Mata Pencaharian Petani&lt;/h5&gt;\r\n&lt;p&gt;Petani adalah kelompok utama yang bergantung pada tanah untuk penghidupan mereka. Dengan mempromosikan praktik pengelolaan tanah yang berkelanjutan, kita dapat memastikan keberlanjutan mata pencaharian petani dan mendorong pertumbuhan ekonomi di sektor pertanian.&lt;/p&gt;\r\n&lt;p&gt;Pengelolaan tanah yang bijak dan berkelanjutan adalah kunci untuk memastikan kesejahteraan manusia, keberlangsungan ekosistem, dan kelangsungan hidup planet ini. Dengan memahami dan mengimplementasikan praktik-praktik pengelolaan tanah yang tepat, kita dapat membangun fondasi yang kokoh untuk masa depan yang berkelanjutan bagi generasi-generasi mendatang. Tindakan bersama dari pemerintah, masyarakat, dan sektor pertanian sangatlah penting dalam mewujudkan visi ini.&lt;/p&gt;', '6566305261e89.jpg'),
(7, 'Faktor-faktor yang Mempengaruhi Kualitas Tanah', 'Husni Mubarok Ramadhan', '2023-11-29', '&lt;p&gt;Kualitas tanah adalah aspek kunci dalam keberhasilan pertanian. Faktor-faktor yang mempengaruhi kualitas tanah sangat beragam dan meliputi berbagai aspek fisik, kimia, biologis, dan lingkungan. Pemahaman mendalam tentang faktor-faktor ini menjadi landasan penting dalam upaya mempertahankan dan meningkatkan produktivitas pertanian secara berkelanjutan. Artikel ini akan mengulas beberapa faktor utama yang mempengaruhi kualitas tanah.&lt;/p&gt;\r\n&lt;h5&gt;Komposisi dan Struktur Tanah&lt;/h5&gt;\r\n&lt;p&gt;Komposisi tanah, termasuk kandungan mineral, material organik, dan tekstur, mempengaruhi sifat fisik dan kimia tanah. Tanah berpasir memiliki drainase lebih baik dibandingkan tanah liat. Struktur tanah juga penting, karena dapat mempengaruhi retensi air dan aerasi tanah.&lt;/p&gt;\r\n&lt;h5&gt;Kandungan Organik Tanah&lt;/h5&gt;\r\n&lt;p&gt;Kandungan bahan organik dalam tanah adalah faktor penting dalam menentukan kesuburan tanah. Bahan organik memberikan nutrisi bagi mikroorganisme tanah, meningkatkan retensi air, dan meningkatkan struktur tanah.&lt;/p&gt;\r\n&lt;h5&gt;Kandungan Nutrisi Tanah&lt;/h5&gt;\r\n&lt;p&gt;Ketersediaan nutrisi seperti nitrogen (N), fosfor (P), dan kalium (K) mempengaruhi pertumbuhan tanaman. Tanah yang kaya nutrisi dapat meningkatkan hasil panen dan kualitas tanaman.&lt;/p&gt;\r\n&lt;h5&gt;Kehidupan Mikroorganisme Tanah&lt;/h5&gt;\r\n&lt;p&gt;Mikroorganisme seperti bakteri, fungi, dan cacing tanah memainkan peran penting dalam siklus nutrisi dan dekomposisi bahan organik. Mereka membantu meningkatkan sirkulasi nutrisi dan mempertahankan keseimbangan ekosistem tanah.&lt;/p&gt;\r\n&lt;h5&gt;Kesimbangan pH Tanah&lt;/h5&gt;\r\n&lt;p&gt;pH tanah mengacu pada tingkat keasaman atau kebasaan tanah. Tanah dengan pH yang tepat untuk jenis tanaman yang ditanam dapat memaksimalkan penyerapan nutrisi oleh akar.&lt;/p&gt;\r\n&lt;h5&gt;Pengelolaan Air Tanah&lt;/h5&gt;\r\n&lt;p&gt;Drainase yang baik dan kelembaban yang tepat adalah faktor penting dalam menjaga kualitas tanah. Kelebihan air dapat menyebabkan erosi dan pencucian nutrisi, sementara kekurangan air dapat menghambat pertumbuhan tanaman.&lt;/p&gt;\r\n&lt;h5&gt;Pengelolaan Pertanian dan Praktik Konservasi&lt;/h5&gt;\r\n&lt;p&gt;Praktik pertanian berkelanjutan seperti rotasi tanaman, penanaman penutup tanah, dan konservasi air dapat mempengaruhi positif kualitas tanah.&lt;/p&gt;\r\n&lt;h5&gt;Penggunaan Pupuk dan Pestisida&lt;/h5&gt;\r\n&lt;p&gt;Penggunaan pupuk dan pestisida yang bijak sangat penting dalam mempertahankan keseimbangan nutrisi tanah dan mencegah kontaminasi.&lt;/p&gt;\r\n&lt;h5&gt;Pengaruh Iklim dan Cuaca&lt;/h5&gt;\r\n&lt;p&gt;Faktor iklim seperti curah hujan, suhu, dan kelembaban udara dapat mempengaruhi proses-proses tanah dan pertumbuhan tanaman&lt;/p&gt;\r\n&lt;p&gt;Pengelolaan tanah yang bijak dan berkelanjutan adalah kunci untuk memastikan kesejahteraan manusia, keberlangsungan ekosistem, dan kelangsungan hidup planet ini. Dengan memahami dan mengimplementasikan praktik-praktik pengelolaan tanah yang tepat, kita dapat membangun fondasi yang kokoh untuk masa depan yang berkelanjutan bagi generasi-generasi mendatang. Tindakan bersama dari pemerintah, masyarakat, dan sektor pertanian sangatlah penting dalam mewujudkan visi ini.&lt;/p&gt;', '656631fa00a8e.jpg'),
(8, 'Tantangan dan Kendala dalam Mengelola Ketahanan Pangan di Sektor Pertanian Indonesia', 'Husni Mubarok Ramadhan', '2023-11-29', '&lt;p&gt;Sektor pertanian memiliki peran krusial dalam memastikan ketersediaan pangan bagi penduduk Indonesia. Meskipun demikian, masih terdapat berbagai kendala dan tantangan yang dihadapi dalam upaya meningkatkan ketahanan pangan di negara ini.&lt;/p&gt;\r\n&lt;h4&gt;Kendala-Kendala Utama&lt;/h4&gt;\r\n&lt;h5&gt;Lahan Terbatas&lt;/h5&gt;\r\n&lt;p&gt;Indonesia memiliki lahan pertanian terbatas, sementara populasi terus bertambah. Hal ini menyebabkan tekanan besar terhadap sumber daya tanah untuk memenuhi kebutuhan pangan. Peningkatan produktivitas lahan pertanian menjadi esensial untuk mengatasi masalah ini.&lt;/p&gt;\r\n&lt;h5&gt;Perubahan Iklim dan Bencana Alam&lt;/h5&gt;\r\n&lt;p&gt;Perubahan iklim telah menyebabkan cuaca ekstrem, pola musim yang tidak teratur, dan bencana alam yang lebih sering terjadi. Hal ini mengganggu produksi pertanian dan dapat berdampak negatif pada ketahanan pangan.&lt;/p&gt;\r\n&lt;h5&gt;Ketergantungan pada Monokultur dan Varietas Tanaman Tertentu&lt;/h5&gt;\r\n&lt;p&gt;Praktik monokultur dan ketergantungan pada varietas tanaman tertentu meningkatkan risiko terjadinya kegagalan panen akibat serangan hama atau penyakit yang menyebar dengan cepat.&lt;/p&gt;\r\n&lt;h5&gt;Akses Terbatas terhadap Teknologi dan Pengetahuan Pertanian Modern&lt;/h5&gt;\r\n&lt;p&gt;Sebagian petani di daerah terpencil masih memiliki akses terbatas terhadap teknologi pertanian modern, seperti metode irigasi canggih, pupuk, dan varietas unggul. Ini menghambat peningkatan produktivitas dan ketahanan pangan.&lt;/p&gt;\r\n&lt;h5&gt;Ketidakstabilan Harga dan Pasar&lt;/h5&gt;\r\n&lt;p&gt;Ketidakpastian harga komoditas pertanian dapat mengurangi insentif bagi petani untuk meningkatkan produksi. Selain itu, infrastruktur pasar yang belum memadai juga dapat mempengaruhi akses petani ke pasar yang lebih luas.&lt;/p&gt;\r\n&lt;h5&gt;Kurangnya Fasilitas Penyimpanan dan Distribusi&lt;/h5&gt;\r\n&lt;p&gt;Kurangnya fasilitas penyimpanan dan distribusi menyebabkan sebagian besar hasil pertanian mudah rusak sebelum mencapai konsumen. Hal ini menyebabkan kerugian ekonomi dan mengurangi ketersediaan pangan.&lt;/p&gt;\r\n&lt;h5&gt;Masalah Kesejahteraan Petani&lt;/h5&gt;\r\n&lt;p&gt;Sebagian besar petani di Indonesia masih berada dalam kondisi ekonomi yang rentan. Mereka sering menghadapi kesulitan dalam mengakses kredit, pendidikan pertanian, dan layanan kesehatan.&lt;/p&gt;\r\n&lt;p&gt;Mengatasi kendala dan tantangan di sektor pertanian Indonesia merupakan langkah penting dalam memastikan ketahanan pangan bagi masyarakat. Melalui upaya kolaboratif dari pemerintah, petani, dan pemangku kepentingan lainnya, Indonesia dapat mencapai tujuan untuk meningkatkan produksi pertanian dan mengatasi masalah kelaparan.&lt;/p&gt;', '656632f8614d4.jpg'),
(9, 'Food Estate: Strategi Ambisius Indonesia dalam Meningkatkan Ketahanan Pangan', 'Husni Mubarok Ramadhan', '2023-11-29', '&lt;p&gt;Food estate merupakan konsep ambisius yang diperkenalkan oleh pemerintah Indonesia untuk memperkuat ketahanan pangan negara ini. Program ini dirancang untuk mengoptimalkan penggunaan lahan pertanian dengan cara mengembangkan kawasan pertanian yang sangat produktif. Artikel ini akan membahas lebih lanjut tentang konsep food estate, tujuannya, dan tantangan yang mungkin dihadapi.&lt;/p&gt;\r\n&lt;h4&gt;&lt;strong&gt;Pengertian Food Estate&lt;/strong&gt;&lt;/h4&gt;\r\n&lt;p&gt;Food estate adalah konsep pengembangan kawasan pertanian terpadu yang bertujuan untuk meningkatkan produktivitas pertanian, mengurangi ketergantungan pada impor pangan, dan meningkatkan ketahanan pangan nasional. Program ini mencakup sejumlah kawasan yang dipilih strategis di seluruh Indonesia untuk dikembangkan menjadi sentra produksi pangan yang terintegrasi dan modern.&lt;/p&gt;\r\n&lt;h4&gt;&lt;strong&gt;Tujuan Food Estate&lt;/strong&gt;&lt;/h4&gt;\r\n&lt;h5&gt;Meningkatkan Produksi Pangan&lt;/h5&gt;\r\n&lt;p&gt;Salah satu tujuan utama dari program food estate adalah meningkatkan produksi pangan nasional. Dengan memanfaatkan lahan pertanian yang sangat produktif, diharapkan dapat dihasilkan jumlah pangan yang mencukupi untuk memenuhi kebutuhan dalam negeri.&lt;/p&gt;\r\n&lt;h5&gt;Diversifikasi Tanaman&lt;/h5&gt;\r\n&lt;p&gt;Food estate juga bertujuan untuk mendiversifikasi jenis tanaman yang dihasilkan. Hal ini akan membantu mengurangi ketergantungan pada satu jenis tanaman dan mengurangi risiko terjadinya kegagalan panen akibat serangan hama atau penyakit.&lt;/p&gt;\r\n&lt;h5&gt;Mengurangi Impor Pangan&lt;/h5&gt;\r\n&lt;p&gt;Dengan meningkatkan produksi pangan domestik, pemerintah berharap dapat mengurangi ketergantungan pada impor pangan dari negara lain. Hal ini akan mengurangi tekanan pada neraca perdagangan dan memperkuat kedaulatan pangan.&lt;/p&gt;\r\n&lt;h5&gt;Mendorong Pembangunan Infrastruktur&lt;/h5&gt;\r\n&lt;p&gt;Program food estate juga mencakup pengembangan infrastruktur terkait, seperti jaringan irigasi, jalan, dan fasilitas penyimpanan dan pengolahan hasil pertanian. Hal ini akan mendukung efisiensi dalam produksi dan distribusi pangan.&lt;/p&gt;\r\n&lt;h4&gt;&lt;strong&gt;Tantangan dan Kontroversi&lt;/strong&gt;&lt;/h4&gt;\r\n&lt;h5&gt;Tata Kelola dan Transparansi&lt;/h5&gt;\r\n&lt;p&gt;Ada kekhawatiran terkait tata kelola dan transparansi dalam pelaksanaan program food estate. Penting untuk memastikan bahwa proyek ini dilaksanakan dengan integritas dan akuntabilitas yang tinggi.&lt;/p&gt;\r\n&lt;h5&gt;Dampak Lingkungan&lt;/h5&gt;\r\n&lt;p&gt;Pengembangan lahan pertanian dalam skala besar dapat berdampak pada lingkungan, termasuk kerusakan hutan dan lahan basah. Diperlukan pendekatan yang berkelanjutan dan berwawasan lingkungan untuk meminimalkan dampak negatif.&lt;/p&gt;\r\n&lt;h5&gt;Keterlibatan Masyarakat Lokal Pengelolaan Sumber Daya Air&lt;/h5&gt;\r\n&lt;p&gt;Melibatkan masyarakat lokal dalam proses pengembangan food estate penting untuk memastikan keberlanjutan dan penerimaan program ini di tingkat lokal.&lt;/p&gt;\r\n&lt;h5&gt;Pengelolaan Sumber Daya Air&lt;/h5&gt;\r\n&lt;p&gt;Pengelolaan air yang efisien dan berkelanjutan adalah kunci keberhasilan program food estate. Diperlukan teknologi dan praktik terbaik untuk memastikan sumber daya air yang memadai.&lt;/p&gt;\r\n&lt;p&gt;Food estate adalah strategi ambisius untuk memperkuat ketahanan pangan Indonesia. Dengan pendekatan yang bijak dan berkelanjutan, program ini memiliki potensi untuk meningkatkan produksi pangan, mengurangi ketergantungan pada impor, dan mengurangi kerentanan terhadap krisis pangan. Penting untuk memastikan bahwa implementasi program ini dilakukan dengan memperhatikan tata kelola yang baik dan meminimalkan dampak negatif terhadap lingkungan dan masyarakat lokal.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;', '65663438ef23a.jpg'),
(10, 'Teknologi Inovatif Untuk Meningkatkan Ketahanan Pangan di Indonesia', 'Husni Mubarok Ramadhan', '2023-11-29', '&lt;p&gt;Dalam menghadapi tantangan ketahanan pangan di Indonesia, teknologi memainkan peran penting dalam meningkatkan produktivitas pertanian, mengelola sumber daya secara efisien, dan memastikan ketersediaan pangan bagi populasi yang terus bertambah. Artikel ini akan membahas berbagai teknologi inovatif yang telah digunakan dan dapat digunakan untuk meningkatkan ketahanan pangan di Indonesia.&lt;/p&gt;\r\n&lt;h5&gt;Irigasi Cerdas dan Pengelolaan Air&lt;/h5&gt;\r\n&lt;p&gt;Teknologi irigasi cerdas menggunakan sensor dan sistem otomatisasi untuk memantau dan mengatur penggunaan air secara tepat. Dengan meminimalkan pemborosan air, teknologi ini dapat meningkatkan efisiensi penggunaan air dalam pertanian.&lt;/p&gt;\r\n&lt;h5&gt;Pertanian Vertikal dan Hidroponik&lt;/h5&gt;\r\n&lt;p&gt;Pertanian vertikal dan hidroponik memungkinkan produksi tanaman dalam ruang terbatas dan dengan penggunaan air yang lebih efisien. Teknologi ini dapat menjadi solusi untuk memenuhi kebutuhan pangan di daerah perkotaan yang memiliki lahan terbatas.&lt;/p&gt;\r\n&lt;h5&gt;Pemanfaatan Drone dan Sensor Pertanian&lt;/h5&gt;\r\n&lt;p&gt;Drone dan sensor pertanian dapat digunakan untuk pemantauan tanaman, deteksi hama, dan analisis tanah. Informasi yang diperoleh dari teknologi ini dapat membantu petani mengambil keputusan yang lebih baik dalam manajemen pertanian.&lt;/p&gt;\r\n&lt;h5&gt;Penggunaan Big Data dan Analitika&lt;/h5&gt;\r\n&lt;p&gt;Analisis data besar (big data) dapat memberikan wawasan yang mendalam tentang kondisi pertanian, tren pasar, dan perilaku konsumen. Ini memungkinkan pengambilan keputusan berbasis data untuk meningkatkan efisiensi produksi dan distribusi pangan.&lt;/p&gt;\r\n&lt;h5&gt;Bioteknologi dan Pengembangan Varitas Unggul&lt;/h5&gt;\r\n&lt;p&gt;Melalui bioteknologi, varietas tanaman dapat dimodifikasi untuk menjadi lebih tahan terhadap hama, penyakit, dan kondisi lingkungan yang ekstrem. Teknologi ini dapat meningkatkan produktivitas dan daya tahan tanaman.&lt;/p&gt;\r\n&lt;h5&gt;Pengembangan Aplikasi Pertanian Berbasis Teknologi&lt;/h5&gt;\r\n&lt;p&gt;Aplikasi pertanian yang dirancang khusus dapat memberikan petani akses ke informasi terkini tentang cuaca, teknik pertanian terbaik, dan pasar komoditas. Hal ini dapat membantu meningkatkan produktivitas dan keterampilan petani.&lt;/p&gt;\r\n&lt;h5&gt;Sistem Informasi Geografis (SIG) untuk Perencanaan Pertanian&lt;/h5&gt;\r\n&lt;p&gt;SIG memungkinkan analisis spasial dari berbagai faktor yang mempengaruhi pertanian, seperti jenis tanah, curah hujan, dan topografi. Hal ini dapat membantu dalam perencanaan dan pengelolaan lahan pertanian dengan lebih efektif.&lt;/p&gt;\r\n&lt;h5&gt;Teknologi Pangan Olahan dan Penyimpanan&lt;/h5&gt;\r\n&lt;p&gt;Inovasi dalam teknologi pengolahan makanan dan penyimpanan dapat membantu mengurangi kerugian pangan akibat kegagalan penyimpanan atau distribusi yang tidak memadai.&lt;/p&gt;\r\n&lt;p&gt;Teknologi inovatif memainkan peran kunci dalam meningkatkan ketahanan pangan di Indonesia. Melalui penerapan teknologi yang bijak dan terencana, Indonesia dapat mengoptimalkan produksi pertanian, mengelola sumber daya secara berkelanjutan, dan memastikan ketersediaan pangan bagi populasi yang terus bertambah. Kolaborasi antara pemerintah, industri, dan komunitas pertanian dalam memajukan teknologi ini menjadi esensial dalam mencapai tujuan ketahanan pangan yang kuat.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;', '6566361fb3f45.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_mitra`
--

CREATE TABLE `data_mitra` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `luas_lahan` int(11) NOT NULL,
  `jenis_tanah` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nomor_telepon` varchar(15) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_jenis_tanah` int(11) DEFAULT NULL,
  `hasil_ai` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_mitra`
--

INSERT INTO `data_mitra` (`id`, `judul`, `luas_lahan`, `jenis_tanah`, `nama`, `nomor_telepon`, `kota`, `provinsi`, `created_at`, `updated_at`, `id_jenis_tanah`, `hasil_ai`) VALUES
(17, 'testing', 1000, 'inceptisol', 'Agriculate', '082114224431', 'Surakarta', 'Jawa Tengah', '2023-11-23 22:43:36', '2023-11-23 22:43:36', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gambar_mitra`
--

CREATE TABLE `gambar_mitra` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_tanah`
--

CREATE TABLE `jenis_tanah` (
  `id` int(11) NOT NULL,
  `jenis_tanah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenis_tanah`
--

INSERT INTO `jenis_tanah` (`id`, `jenis_tanah`) VALUES
(1, ''),
(2, 'aluvial'),
(3, ''),
(4, 'aluvial'),
(5, ''),
(6, ''),
(7, 'aluvial');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `id_topik` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `komentar`, `tanggal`, `id_topik`, `id_user`, `gambar`) VALUES
(2, 'oh iya kah? hahaha', '2023-11-09 06:50:04', 2, 3, NULL),
(3, 'kocak', '2023-11-09 06:50:57', 2, 4, NULL),
(4, 'hhh', '2023-11-14 13:45:05', 3, 3, NULL),
(5, 'kamis\r\n', '2023-11-16 15:29:25', 6, 2, NULL),
(7, 'wah keren', '2023-11-16 20:56:05', 6, 11, NULL),
(8, 'keren', '2023-11-16 20:58:24', 6, 12, NULL),
(10, 'dfghjk', '2023-11-20 13:54:18', 8, 3, NULL),
(11, 'test', '2023-11-20 14:40:34', 8, 3, NULL),
(12, 'Tes admin', '2023-11-20 16:36:51', 6, 2, NULL),
(18, 'Menurut saya..', '2023-11-22 11:41:01', 23, 21, NULL),
(19, 'Tes user\r\n', '2023-11-22 11:42:52', 23, 3, NULL),
(20, 'tanahnya luas', '2023-11-22 11:50:25', 23, 3, NULL),
(21, 'cocok nih lahannya', '2023-11-27 12:46:24', 23, 23, NULL),
(22, 'hai', '2023-12-01 23:21:09', 23, 26, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(6) UNSIGNED NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `latitude`, `longitude`, `created_at`) VALUES
(2, -6.422528, 0, '2023-11-19 00:34:22'),
(3, -6.422528, 106.8105728, '2023-11-19 00:34:49'),
(4, -6.422528, 106.8105728, '2023-11-19 00:35:53'),
(5, -6.422528, 106.8105728, '2023-11-19 00:36:40'),
(6, -6.422528, 106.8105728, '2023-11-19 00:42:16'),
(7, -6.422528, 106.8105728, '2023-11-19 00:42:32'),
(8, -6.5752274, 106.7663397, '2023-11-19 01:41:13'),
(9, -6.422528, 106.8105728, '2023-11-19 09:55:40'),
(10, -6.422528, 106.8105728, '2023-11-20 01:15:25'),
(11, -6.422528, 106.8105728, '2023-11-20 01:48:19');

-- --------------------------------------------------------

--
-- Table structure for table `snapshots`
--

CREATE TABLE `snapshots` (
  `id` int(6) UNSIGNED NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `snapshots`
--

INSERT INTO `snapshots` (`id`, `image_path`, `created_at`) VALUES
(5, 'uploads/snapshot_1700354059.png', '2023-11-19 00:34:19'),
(6, 'uploads/snapshot_1700354086.png', '2023-11-19 00:34:46'),
(7, 'uploads/snapshot_1700354149.png', '2023-11-19 00:35:49'),
(8, 'uploads/snapshot_1700354196.png', '2023-11-19 00:36:36'),
(9, 'uploads/snapshot_1700354532.png', '2023-11-19 00:42:12'),
(10, 'uploads/snapshot_1700358068.png', '2023-11-19 01:41:08'),
(11, 'uploads/snapshot_1700387737.png', '2023-11-19 09:55:37'),
(12, 'uploads/snapshot_1700444896.png', '2023-11-20 01:48:16'),
(13, 'uploads/snapshot_1700450225.png', '2023-11-20 03:17:05'),
(14, 'uploads/snapshot_1700469655.png', '2023-11-20 08:40:55');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `rating` int(11) NOT NULL,
  `testi` text NOT NULL,
  `status` varchar(255) DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `nama`, `email`, `jabatan`, `rating`, `testi`, `status`) VALUES
(26, 'Husni Mubarok Ramadhan', 'husniramadhan@apps.ipb.ac.id', 'Web Developer Agriculate', 5, 'Fitur pengembangan situs web yang canggih dan inovatif untuk merevolusi pemahaman, pemantauan, dan pengelolaan ketahanan pangan di Indonesia tampaknya sangat bermanfaat.', 'Accepted'),
(29, 'Fatih', 'husniramadhan@apps.ipb.ac.id', 'Pemilik Lahan', 5, 'GOODD', 'Pending'),
(32, 'Alif', 'alif@apps.ipb.ac.id', 'Kang Naspad', 4, 'Keren huss', 'Pending'),
(34, 'fatih', 'fatih@gmail.com', 'Pemilik Lahan', 4, 'Bagus cuy', 'Pending'),
(35, 'Reno Fathan Sofyan', 'reno@gmail.com', 'Pemilik Lahan', 4, 'Kerennn! Website ini menyediakan fitur-fitur seperti analisis prediktif, notifikasi, kemitraan antarprovinsi, kemitraan swasta-publik, dan peta kebutuhan pangan interaktif.', 'Accepted'),
(36, 'Muhammad Fatih Bagaskara', 'fatih@gmail.com', 'Data Analis Agriculate', 5, 'Baguss banget! bisa memberi informasi yang akurat dan terkini mengenai ketersediaan dan harga pangan, memungkinkan perencanaan yang lebih baik melalui kemampuan prediktif', 'Accepted'),
(37, 'fatih', 'fatih@gmail.com', 'Pemilik Lahan', 3, 'Good', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `topik`
--

CREATE TABLE `topik` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `tanggal` datetime NOT NULL,
  `id_user` int(11) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `topik`
--

INSERT INTO `topik` (`id`, `judul`, `deskripsi`, `tanggal`, `id_user`, `gambar`) VALUES
(2, 'Warning! Jagung lagi surut euy', 'Pangan jagung di bogor lagi berkurang euy, harga jadi naik', '2023-11-09 06:48:43', 2, NULL),
(3, 'Pangan', 'qwewad', '2023-11-10 15:06:45', 2, NULL),
(4, 'gbgbg', 'hb gv vg hbn jbhvgvbnnhubgyfvtdcrfvtbgyh', '2023-11-14 13:46:13', 2, NULL),
(5, 'asrfesfr', 'sadfasfasfds', '2023-11-16 12:03:45', 2, NULL),
(6, 'Testing', 'Vokasi Laper lagi coba euy', '2023-11-16 15:29:06', 2, NULL),
(8, 'Tanah subur euy 2', 'apa coba', '2023-11-20 13:53:46', 2, NULL),
(22, 'Tanah kosong', 'Ada tanah kosong di daerah... kelembapan..', '2023-11-22 11:34:34', 2, 'uploads/lahan-kosong1.jpg'),
(23, 'Lahan kosong di daerah lombok', 'Bagaimana pendapatmu..', '2023-11-22 11:36:52', 2, 'uploads/about.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`) VALUES
(2, 'admin', 'admin@gmail.com', '20eabe5d64b0e216796e834f52d61fd0b70332fc'),
(3, 'Reno', 'reno@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(4, 'husni', 'husni@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(5, 'risqi', 'risqi@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(7, 'fatih', 'fatih@gmail.com', '123456'),
(10, 'Putra', 'saputraananda@apps.ipb.ac.id', 'admin'),
(11, 'farhan', 'farhan@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(12, 'Putra', 'anandasaputra@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(16, 'Husni', 'husnimubaroksvtn@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441'),
(17, 'Husni', 'husniramadhan@apps.ipb.ac.id', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441'),
(20, 'Husni', 'husni@apps.ipb.ac.id', '1234567'),
(21, 'Husni', 'husnimr@gmail.com', '20eabe5d64b0e216796e834f52d61fd0b70332fc'),
(22, 'Muhammad Fiqih', 'muhammadfiqih953@gmail.com', 'muhammadfiqih123'),
(23, 'Muhammad Fiqih', 'muhammadfiqih@apps.ipb.ac.id', 'd6399ee1dc099602236dcb26a14c4a9b0b7d08a7'),
(25, 'Risqi Akbar Marsudi', 'risqiakbar@gmail.com', '1234567'),
(26, 'Risqi Akbar Marsudi', 'risqiakbar1@gmail.com', '20eabe5d64b0e216796e834f52d61fd0b70332fc'),
(27, 'Regina', 'regwinak@gmail.com', 'a2afb20641d695cf6aa7859b3f8a6d325a3f69ca'),
(28, 'pehan', 'pemiliklahan@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_mitra`
--
ALTER TABLE `data_mitra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jenis_tanah` (`id_jenis_tanah`);

--
-- Indexes for table `gambar_mitra`
--
ALTER TABLE `gambar_mitra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_tanah`
--
ALTER TABLE `jenis_tanah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topik_komentar` (`id_topik`),
  ADD KEY `user_komentar` (`id_user`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `snapshots`
--
ALTER TABLE `snapshots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topik`
--
ALTER TABLE `topik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topik_user` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `users` ADD FULLTEXT KEY `email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `data_mitra`
--
ALTER TABLE `data_mitra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `gambar_mitra`
--
ALTER TABLE `gambar_mitra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_tanah`
--
ALTER TABLE `jenis_tanah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `snapshots`
--
ALTER TABLE `snapshots`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `topik`
--
ALTER TABLE `topik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_mitra`
--
ALTER TABLE `data_mitra`
  ADD CONSTRAINT `data_mitra_ibfk_1` FOREIGN KEY (`id_jenis_tanah`) REFERENCES `jenis_tanah` (`id`);

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `topik_komentar` FOREIGN KEY (`id_topik`) REFERENCES `topik` (`id`),
  ADD CONSTRAINT `user_komentar` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `topik`
--
ALTER TABLE `topik`
  ADD CONSTRAINT `topik_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
