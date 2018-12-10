-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Des 2018 pada 17.21
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lmssma`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `despelajaran`
--

CREATE TABLE `despelajaran` (
  `id` int(3) NOT NULL,
  `judul` varchar(15) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `despelajaran`
--

INSERT INTO `despelajaran` (`id`, `judul`, `isi`) VALUES
(1, 'Matematika', 'Matematika adalah ilmu yang mempelajari tentang besaran, struktur, bangun ruang, dan perubahan-perubahan yang pada suatu bilangan. Matematika  berasal dari bahasa Yunani Mathematikos yang artinya ilmu pasti. Dalam bahasa belanda matematika di sebut sebagai Wiskunde yang artinya ilmu tentang belajar. Dalam kamus besar bahasa Indonesia, definisi matematika adalah ilmu tentang bilangan dan segala sesuatu yang berhubungan Pengertian matematika dengannya yang mencangkup segala bentuk prosedur operasional yang digunakan dalam menyelesaikan masalah mengenai bilangan. Seorang yang ahli dalam bidang matematika di sebut sebagai Matematikawan atau matematikus. Segala hal yang bersangkutan dan berhubungan dengan matematika di sebut sebagai matematis. Matematis juga di gunakan untuk menyebut sesuatu secara sangat pasti dan sangat tepat.\r\n\r\nMatematika merupakan salah satu ilmu yang banyak di manfaatkan dalam kehidupan sehari-hari. Baik secara umum maupun secara khusus. Secara umum matematika di gunakan dalam transaksi perdangangan, pertukangan, dll. Hampir di setiap aspek kehidupan ilmu matematika yang di terapkan. Karena itu matematika mendapat julukan sebagai ratu segala ilmu. Matematika juga mempunyai banyak kelebihan dibanding ilmu pengetahuan lain. Selain sifatnya yang fleksible dan dinamis, matematika juga selalu dapat mengimbangi perkembangan zaman. Terutama di masa sekarang ketika segala sesuatu dapat di lakukan dengan komputer. Matematika menjadi salah satu bahasa program yang efektif dan efisien.'),
(2, 'Kimia', 'Kimia merupakan ilmu pengetahuan yang membahas perubahan suatu materi. Perubahan suatu materi bisa di dapat oleh gambaran melalui reaksi kimia. Menggunakan reaksi kimia, kita dapat menyingkap perubahan-perubahan aneh yang tersembunyi pada suatu zat.'),
(3, 'Biologi', 'Istilah Ilmu Biologi berasal dari bahasa Yunani, yaitu â€œbiosâ€ yang berarti hidup dan â€œlogosâ€ yang berarti ilmu. Jadi, Pengertian Biologi adalah ilmu tentang kehidupan. Kajian Ilmu Biologi sangatlah luas. Ilmu Biologi berbicara tentang semua makhluk hidup yang ada di muka bumi ini. Ilmu Biologi pun mengungkap keterkaitan di antara berbagai makhluk hidup. Ilmu Biologi mengungkap keterkaitan antara makhluk hidup, makhluk tak hidup, dan banda mati. Apakah terdapat keterkaitan antara makhluk hidup dan makhluk tak hidup? Ilmu Biologi tidak hanya membicarakan kehidupan manusia, hewan dan tumbuhan saja. Ilmu Biologi mengungkap kehidupan di samudera yang dalam dan luas. Ilmu Biologi menyibak kehidupan hutan belantara. Ilmu Biologi juga menjadi media untuk menyejahterakan kehidupan manusia melalui penemuan bibit unggul, penemuan obat-obatan, serta pemenuhan kebutuhan sandang, pangan, dan papan.\r\n\r\nPengertian Biologi\r\nSesuai dengan sifat ilmu sains lainnya, Ilmu Biologi memiliki ciri tentatif. Artinya, Ilmu Biologi akan terus berubah sesuai dengan perkembangan waktu. Contohnya, dalam penemuan virus mosaik. Awalnya para ilmuwan Ilmu Biologi menyimpulkan bahwa penyebab penyakit mosaik pada daun tembakau adalah bakteri yang berukuran sangat kecil. Akan tetapi, seiring kemajuan teknologi dan perkembangan waktu, ternyata penyebab dari penyakit mosaik pada daun tembakau tersebut adalah virus.\r\nPerubahan yang terjadi pada Ilmu Biologi tersebut dipengaruhi oleh penemuan baru, perkembangan ilmu lain yang terkait, atau perkembagan teknologi. Misalnya, penemuan mikroskop elektron telah memungkinkan dilakukannya pengamatan terhadap objek ilmu Biologi yang tidak teramati oleh mikroskop cahaya. Ciri lain Ilmu Biologi adalah berlaku universal. Pengetahuan atau teoriyang diungkapkan dalam Ilmu Biologi berlaku untuk seluruh dunia. Contohnya, pengetahuan tentang bakteri berlaku umum untuk semua bakteri yang ada di dunia. Pengetahuan tentang DNA dipelajari sama di seluruh dunia. Dapatkah Anda memberikan contoh yang lainnya?'),
(4, 'Tes 1', 'laksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj dlaksjd lakjsdlkajsdlka jlka jsldkj alksdj laksj dlkaj d'),
(5, 'tes 2', 'asdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as dasdasdasd as dasd asd asd asd asd as d'),
(6, 'tes 3', 'asdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka dasdkjal kjalsk djalks jdlaksj dlaksj dlkaj sldajsjlkdja lskd jalskdjlka jsdlka d'),
(7, 'fani elek', 'banget');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` char(18) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pns` int(1) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `FK_idUser` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `nama`, `nik`, `email`, `pns`, `gambar`, `FK_idUser`) VALUES
(1, 'asdd', '', '', 0, '', 14);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nisn` char(10) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `jurusan` varchar(10) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `FK_idUser` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(4) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hakAkses` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `hakAkses`, `nama`) VALUES
(7, 'aa', '$2y$10$z0HfXdSa', 'admin', 'aa'),
(8, 'a', '0cc175b9c0f1b6a', 'admin', 'a'),
(9, 'asd', '7815696ecbf1c96e6894b779456d330e', 'admin', 'asd'),
(10, 'laduni', '2c22022e63ae3b11a4ad535dbd920e33', 'admin', 'laduni estu syalwa'),
(11, 'zaky', 'cb54b22e2a32ca8284d24a751e69094f', 'admin', 'zaky maula luthfansa'),
(12, 'dwi', '7aa2602c588c05a93baf10128861aeb9', 'siswa', 'dwi ananda irhama'),
(13, 'uya', '7bfe538c798a3848872529996c448e36', 'guru', 'uya'),
(14, 'asdd', '0ec53c34ceb021b4c7907d31db2ff752', 'guru', 'asdd');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `despelajaran`
--
ALTER TABLE `despelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`),
  ADD KEY `guru_user` (`FK_idUser`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `siswa_user` (`FK_idUser`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `despelajaran`
--
ALTER TABLE `despelajaran`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_user` FOREIGN KEY (`FK_idUser`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_user` FOREIGN KEY (`FK_idUser`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
