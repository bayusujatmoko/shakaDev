-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2018 at 08:38 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shaka`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(15) NOT NULL,
  `img` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `img`, `nama`, `telepon`, `email`, `alamat`, `username`, `password`, `level`) VALUES
(10000001, 'no-image.png', 'Bayu Aprilananda Sujatmoko', '081275191997', 'bayusujatmoko@yahoo.com', 'Jl. Kaliurang', 'admin', '202cb962ac59075b964b07152d234b70', 1);

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `informasi` longtext NOT NULL,
  `id_admin` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `img`, `judul`, `tanggal`, `informasi`, `id_admin`) VALUES
(3, 'berita1.jpg', 'Informatika Perkuat Jejaring Internasional', '2017-06-04', 'Hendrik, M.Eng, Ketua Program Studi (Prodi) Teknik Informatika sebagai anggota Delegasi Fakultas Teknologi Industri Universitas Islam Indonesia (FTI-UII), melakukan rangkaian kunjungan inisiasi kerjasama ke berbagai Perguruan Tinggi di Jepang, yaitu ke Hokkaido Information University (HIU), Kumamoto University dan Kansai University. (26 April 2017) "Kunjungan tersebut sebagai upaya meningkatkan rekognisi dan jejaring Internasional antara Prodi Teknik Informatika (TF) FTI UII dengan Perguruan Tinggi di Jepang" demikian disampaikan dalam rilisnya Prodi Teknik Informatika (5 Mei 2017). Prof. Jun Nishihira, M.D, Ph.D, Vice President HIU, menerima langsung Delegasi FTI-UII ini dipimpin oleh Dr. Imam Djati Widodo, Dekan FTI UII. Turut serta Dr. Teduh Dirgahayu, Dosen Teknik informatika sekaligus Ketua Pascasarjana, Dr.Eng. Hendra Setiawan, Ketua Prodi Teknik Elektro dan Yuli Augusti Rochman, M.Eng., Ketua Prodi Teknik Industri. "Insya Allah, pada bulan September 2017 Prodi Teknik Informatika akan mengirimkan mahasiswanya untuk mengikuti program student exchange di HIU, dengan sumber pendanaan melalui skema Sakura Science Plan" ujar Hendrik. Hendrik menambahkan "selain diskusi dengan saling mempresentasikan profil masing-masing institusi, juga dilakukan diskusi terkait bentuk-bentuk kerjasama yang mungkin dilakukan oleh kedua belah pihak. Salah satu bentuk kegiatan kerjasama yang akan dilakukan berkaitan dengan mahasiswa adalah program kompetisi bersama". "Kompetisi tersebut meliputi pemrograman, desain web dan pembuatan film pendek, sudah berlangsung selama 7 tahun atara HIU dan Rajamangala University of Technology Tanyaburi (RMUTT)-Thailand" ujarnya. Dalam diskusi tersebut Prof. Yuichi Anada, sebagai penanggung jawab kegiatan ini menjanjikan untuk mengusahakan agar mahasiswa TF FTI-UII, dapat bergabung dengan rekan-rekan mahasiswa dari HIU maupun RMUTT. "Namun pada bulan September tahun ini, kemungkinan Mahasiswa Teknik Informatika FTI UII baru dapat hadir menjadi observer" tegas Prof. Yuichi Anada "Semoga kegiatan ini dapat terealisir sehingga mahasiswa Mahasiswa Teknik Informatika FTI UII memiliki lebih banyak kesempatan berinteraksi dan menjalin jejaring internasional" pungkas Hendrik. ', 10000001),
(4, 'berita2.jpg', 'Tujuh Kebiasaan Wirausaha Sukses', '2017-06-04', '"Lakukan hal yang paling penting dalam hidup, jelaslah tentang prioritas anda dan bertindaklah, percaya pada prinsip yang benar dan nilai terdalam dari kita sendiri, serta dahulukan yang utama". Hal tersebut disampaikan oleh Wahyudi Sutrisno, ST., MM., saat menjadi narasumber kebiasaan wirausaha sukses yang merupakan Kegiatan Pengabdian Masyarakat atas kerjasama Fakultas Teknologi Industri Universitas Islam Indonesia (FTI UII) dengan Pemerintahan Desa Widodomartani Kecamatan Ngemplak Kabupaten Sleman (9 Mei 2017). Wahyudi Sutrisno, ST., MM., menjelaskan tentang attitude menjadi seorang pengusaha yaitu terdapat Tujuh Kebiasaan Wirausaha Sukses meliputi, "menjadi proaktif, mulai dengan tujuan akhir, dahulukan yang utama, berpikir menang-menang, berusaha mengerti terlebih dahulu, baru di mengerti, wujudkan sinergi, serta asahlah gergaji" ujar Dosen Program Studi Teknik Industri tersebut. Selain memberi motivasi kita harus memberi contoh supaya jelas dan bisa ditiru hal itu diungkapkan Wahyudi saat menjawab dari salah satu peserta dalam diskusi â€œBagaimana cara memberi motivasi kepada teman-teman pengusaha termasuk bawahanâ€. Kegiatan ini merupakan salah satu Rangkaian Milad Universitas Islam Indonesia ke-74, yang dilaksanakan di Balai Desa Widodomartani ini diikuti oleh 33 peserta utusan dari Kelompok Usaha Bersama (KUBE), Kelompok Petani Ternak Sapi Taruna Mandiri Dusun Ngaliyan. ', 10000001),
(5, 'berita3.jpg', 'Reuni FTT 84, gagas Galang Dana Sosial', '2017-06-04', 'Banyak cara untuk menyambung tali silaturahmi.,diantaranya dengan reuni, saling memberi hadiah, atau dengan pemberian yang lain. Sambunglah silaturahmi itu dengan berlemah lembut, berkasih sayang, wajah berseri, memuliakan, dan dengan segala hal yang sudah dikenal manusia dalam membangun silaturahmi. Dengan silaturahmi, pahala yang besar insha Allah akan diproleh dariNya. Silaturahim menyebabkan seseorang dapat masuk ke dalam surga. Silaturahim juga menyebabkan seorang hamba tidak akan putus hubungan dengan Allah di dunia dan akhirat. Hal tersebut menjadi salah satu alasan alumni Fakultas Teknik Tekstil (sekarang Program Studi Teknik Kimia) mengadakan reuni, setelah 33 tahun yang lalu mencatatkan diri sebagai bagian dari citivas akademik atau keluarga UII. Dalam sambutannya M Abdul Najib mengagas mengalang Dana Sosial, yang kepentingannya untuk kemaslahatan bersama. Tampak hadir, beberapa dedengkot alumni FTT, diantaranya Ir Siti Wartiningsih, M.Pd, Ir Nuki W, Ir. H. Suratno dan Ir. H. Muhammad Abdul Najid, MBA, sebagai promotor kegiatan reuni yang diadakan di bilangan sebuah rumah makan di kawasan Jalan Magelang Sleman Yogyakarta (30 April 2017). Jerri Irgo ', 10000001);

-- --------------------------------------------------------

--
-- Table structure for table `bimbingan`
--

CREATE TABLE `bimbingan` (
  `id` int(255) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `nidn` varchar(15) NOT NULL,
  `dosen` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `fakultas` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(25) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `tanggapan` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bimbingan`
--

INSERT INTO `bimbingan` (`id`, `nim`, `nidn`, `dosen`, `nama`, `jurusan`, `fakultas`, `email`, `telepon`, `judul`, `tanggapan`, `tanggal`) VALUES
(1, '15523090', '0524038701', 'Galang Prihadi Mahardika, M.Kom', 'Bayu Aprilananda Sujatmoko', 'Teknik Informatika', 'Teknologi Industri', 'bayusujatmoko@yahoo.com', '081275191997', 'PKM SHAKA 2016', 'Menunggu konfirmasi dosen...', '2017-08-18');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nidn` varchar(15) NOT NULL,
  `img` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(2) NOT NULL,
  `id_admin` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nidn`, `img`, `nama`, `jurusan`, `fakultas`, `email`, `username`, `password`, `level`, `id_admin`) VALUES
('0524038701', 'founder.jpg', 'Galang P. Mahardhika, M.Kom', 'Teknik Informatika', 'Teknologi Industri', 'galang.prihadi@uii.ac.id', 'galangprihadi', '123', 3, 10000001);

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `id` int(11) NOT NULL,
  `tanggal_upload` date NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `tipe_file` varchar(10) NOT NULL,
  `ukuran_file` varchar(20) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`id`, `tanggal_upload`, `nama_file`, `tipe_file`, `ukuran_file`, `file`) VALUES
(1, '2018-02-14', 'mp0', 'pdf', '437869', 'files/mp0.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `forum_answer`
--

CREATE TABLE `forum_answer` (
  `question_id` int(255) NOT NULL,
  `a_id` int(255) NOT NULL,
  `a_name` varchar(65) NOT NULL DEFAULT '',
  `a_email` varchar(65) NOT NULL DEFAULT '',
  `a_answer` longtext NOT NULL,
  `a_datetime` varchar(50) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forum_question`
--

CREATE TABLE `forum_question` (
  `id` int(255) NOT NULL,
  `topic` varchar(255) NOT NULL DEFAULT '',
  `detail` longtext NOT NULL,
  `name` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL DEFAULT '',
  `datetime` varchar(25) NOT NULL DEFAULT '',
  `id_admin` int(15) NOT NULL,
  `view` int(4) NOT NULL DEFAULT '0',
  `reply` int(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum_question`
--

INSERT INTO `forum_question` (`id`, `topic`, `detail`, `name`, `email`, `datetime`, `id_admin`, `view`, `reply`) VALUES
(6, 'a', 'a', 'Bayu Aprilananda Sujatmoko', 'bayusujatmoko@yahoo.com', '18/08/17 20:16:42', 10000001, 2, 0),
(7, 'bb', 'b', 'Bayu Aprilananda Sujatmoko', 'bayusujatmoko@yahoo.com', '18/08/17 21:21:19', 10000001, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(15) NOT NULL,
  `img` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(2) NOT NULL,
  `id_admin` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `img`, `nama`, `jurusan`, `fakultas`, `email`, `username`, `password`, `level`, `id_admin`) VALUES
('15523090', 'Bayu.jpg', 'Bayu Aprilananda Sujatmoko', 'Teknik Informatika', 'Teknologi Industri', 'bayusujatmoko@yahoo.com', 'bayusujatmoko', '123', 2, 10000001),
('15523091', '', 'hakaman', 'Teknik Informatika', 'Teknologi Industri', 'hakaman99@gmail.com', 'hakaman', '202cb962ac59075b964b07152d234b70', 2, 10000001);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `bimbingan`
--
ALTER TABLE `bimbingan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nidn` (`nidn`),
  ADD KEY `nidn_2` (`nidn`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nidn`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_answer`
--
ALTER TABLE `forum_answer`
  ADD PRIMARY KEY (`a_id`),
  ADD KEY `a_id` (`a_id`),
  ADD KEY `a_id_2` (`a_id`);

--
-- Indexes for table `forum_question`
--
ALTER TABLE `forum_question`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `id_admin` (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `bimbingan`
--
ALTER TABLE `bimbingan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `forum_answer`
--
ALTER TABLE `forum_answer`
  MODIFY `a_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `forum_question`
--
ALTER TABLE `forum_question`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bimbingan`
--
ALTER TABLE `bimbingan`
  ADD CONSTRAINT `bimbingan_ibfk_1` FOREIGN KEY (`nidn`) REFERENCES `dosen` (`nidn`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bimbingan_ibfk_2` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
