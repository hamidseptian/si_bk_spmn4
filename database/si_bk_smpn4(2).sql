-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2021 at 05:24 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_bk_smpn4`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `id_ptk` varchar(5) NOT NULL,
  `nama_admin` varchar(25) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` text NOT NULL,
  `level` varchar(15) NOT NULL,
  `foto` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `id_ptk`, `nama_admin`, `username`, `password`, `level`, `foto`) VALUES
(6, '', 'Adit', '11', '11', 'Admin', ''),
(11, '18', '', 'hamidseptian@gmail.com', '18)(!(95', 'Admin', ''),
(10, '2', '', '33', '33', 'Kepala Sekolah', ''),
(9, '11', '', '55', '55', 'Admin', ''),
(12, '1', '', '99', '99', 'Admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_ptk` int(11) NOT NULL,
  `nama_ptk` varchar(35) NOT NULL,
  `nuptk` varchar(18) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `tmpl` varchar(25) NOT NULL,
  `tgll` varchar(25) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `status_pegawai` varchar(20) NOT NULL,
  `jenis_ptk` varchar(25) NOT NULL,
  `gelar_depan` varchar(15) NOT NULL,
  `gelar_belakang` varchar(15) NOT NULL,
  `jenjang_pendidikan` varchar(15) NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `sertifikasi` varchar(25) NOT NULL,
  `tmt_kerja` varchar(16) NOT NULL,
  `tugas_tambahan` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_ptk`, `nama_ptk`, `nuptk`, `jk`, `tmpl`, `tgll`, `nip`, `status_pegawai`, `jenis_ptk`, `gelar_depan`, `gelar_belakang`, `jenjang_pendidikan`, `jurusan`, `sertifikasi`, `tmt_kerja`, `tugas_tambahan`) VALUES
(1, 'Afrina Mardesci', '3636756657300060', 'P', 'PADANG', '1978-03-04', '197803042006042000', 'PNS', 'Guru Mapel', '', 'S.H.', 'S1', 'Ilmu Hukum ', 'Pendidikan Kewarganegaraa', '2012-05-23', ''),
(2, 'Desi Novianti', '4444756658300070', 'P', 'PAKASAI', '1978-11-12', '197811122010012000', 'PNS', 'Guru Mapel', '', 'S.Ag', 'S1', 'Pendidikan Agama Islam', '', '2012-05-23', ''),
(3, 'Desriwati', '4539760661300080', 'P', 'MUARA SIKABALUAN', '1982-02-07', '198202072009012000', 'PNS', 'Guru TIK', '', 'S.Kom, S.Kom', 'S1', 'Teknologi Informasi dan K', 'Teknologi Informasi dan K', '2012-05-23', ''),
(4, 'Deswarni', '9563750653300160', 'P', 'PARIAMAN', '1972-12-31', '197212312005012000', 'PNS', 'Guru Mapel', '', 'A.Md, S.Pd', 'S1', 'Pendidikan Seni Drama, Ta', 'Seni Budaya', '2011-10-03', ''),
(5, 'Devi Karmilawati', '1548762663210040', 'P', 'PARIAMAN', '1984-12-16', '198412162010012000', 'PNS', 'Guru Mapel', '', 'S.Pd', 'S1', 'Pendidikan Bahasa Jerman', '', '2010-01-02', ''),
(6, 'Dewi Sukma', '8862756657210060', 'P', 'PAKANDANGAN', '1978-05-30', '197805302010012000', 'PNS', 'Guru Mapel', '', 'S.S.', 'S1', 'Sejarah', 'Sejarah', '2010-02-11', ''),
(7, 'Dicky Agus', '5252754656200020', 'L', 'JAKARTA', '1976-09-20', '197609202010011000', 'PNS', 'Guru Mapel', '', 'S.Si', 'S1', 'Kimia', 'Kimia', '2010-02-11', 'Pembina OSIS'),
(8, 'Efrihasnul Abrar', '6235769670130080', 'L', 'PARIAMAN', '1991-09-03', '', 'Guru Honor Sekolah', 'Guru Mapel', '', 'S.Pd', 'S1', 'Pendidikan Jasmani dan Ke', '', '2016-07-01', ''),
(9, 'Elfi Hendrayeti', '5933749651300100', 'P', 'KAMPUNG BARU', '1971-06-01', '197106011997022000', 'PNS', 'Guru Mapel', '', 'S.Pd', 'S1', 'Bahasa Inggris', 'Bahasa Inggris', '2010-06-01', 'Guru Piket, Pembina Pramu'),
(10, 'Idval Zikra', '2857766667131180', 'L', 'PADUSUNAN', '1988-05-25', '', 'Tenaga Honor Sekolah', 'Tenaga Administrasi Sekol', '', 'S.Pd.I', 'S1', 'Pendidikan Agama Islam', '', '2015-07-01', ''),
(11, 'Indah Susanti', '2543758659300010', 'P', 'BUKITTINGGI', '1980-02-11', '198002112010012000', 'PNS', 'Guru Mapel', '', 'S.Pd', 'S1', 'Pendidikan Bahasa dan Sas', 'Bahasa Indonesia (dan Sas', '2010-02-11', ''),
(12, 'Akhlisa Febi Triyani', '644765000000000', 'P', 'PADANG', '1986-03-12', '198603122010012000', 'PNS', 'Guru Mapel', '', 'S.Pd', 'S1', 'Kimia', 'Kimia', '2015-01-30', ''),
(13, 'Irja', '1857750653120000', 'L', 'SIMPANG KURAI TAJI', '1972-05-25', '197205252014061000', 'PNS', 'Guru Mapel', '', 'S.E., M.Si', 'S2', 'Ekonomi', '', '2014-09-22', ''),
(14, 'Iskandar Rahman', '4534765666110060', 'L', 'KAMPUNG TANGAH', '1987-02-02', '198702022010011000', 'PNS', 'Guru BK', '', 'S.Pd, M.Pd', 'S2', 'Bimbingan dan Konseling (', 'Bimbingan dan Konseling (', '2010-01-01', ''),
(15, 'Jasnelvi Helvira', '1055754657220000', 'P', 'PAYAKUMBUH', '1976-07-23', '197607232009012000', 'PNS', 'Guru Mapel', '', 'S.S.', 'S1', 'Muatan Lokal Bahasa Daera', '', '2012-05-23', ''),
(16, 'Junaidi', '3054740642200040', 'L', 'PAGUH DALAM', '1962-07-22', '196207221987101000', 'PNS', 'Guru Mapel', '', 'S.Pd, M.Pd', 'S2', 'Bahasa Indonesia', 'Bahasa dan Sastra Indones', '2009-10-26', ''),
(17, 'Khairiyah', '9742744646300080', 'P', 'KAMPUNG BARU', '1966-04-10', '196604102005012000', 'PNS', 'Guru Mapel', 'Dra', '', 'S1', 'Bahasa Inggris', '', '2012-11-26', 'Guru Piket, Pembina Ekstr'),
(18, 'Lisa Handriyani', '3359770671130040', 'P', 'PARIAMAN', '1992-10-27', '', 'Tenaga Honor Sekolah', 'Tenaga Administrasi Sekol', '', 'S.Pd.I', 'S1', 'Pendidikan Agama Islam', '', '2014-05-01', ''),
(19, 'Mardiyah', '7336740643300000', 'P', 'BATANG KABUNG', '1962-10-04', '196210041985122000', 'PNS', 'Guru BK', '', 'S.Pd, S.Pd', 'S1', 'Bimbingan dan Konseling', 'Bimbingan dan Konseling (', '2011-01-01', ''),
(20, 'Mega Sukma Dewi', '1952766667130140', 'P', 'PARIAMAN', '1988-06-20', '', 'Honor Daerah TK.I Pr', 'Tenaga Perpustakaan', '', 'S.Pd', 'S1', 'Pendidikan Jasmani dan Ke', '', '2011-10-01', ''),
(21, 'Munawardi', '                ', 'L', 'KP. BARU', '1983-01-04', '', 'Tenaga Honor Sekolah', 'Tenaga Perpustakaan', '', '', 'SMA / sederajat', 'Ilmu Pengetahuan Alam (IP', '', '2011-10-01', ''),
(22, 'Nasrul', '3442745648200030', 'L', 'KAMPUNG TANJUNG CAMPAGO', '1967-11-10', '196711101991031000', 'PNS', 'Guru Mapel', '', 'S.Pd', 'S1', 'Pendidikan Fisika', 'Fisika', '2010-05-06', 'Kepala Laboratorium'),
(23, 'Ali Nurdin. A', '8261738640200020', 'L', 'PARIAMAN', '1960-09-29', '196009291982021000', 'PNS', 'Guru Mapel', '', 'S.Pd', 'S1', 'Pendidikan Kewarganegaraa', 'Pendidikan Kewarganegaraa', '1982-02-01', ''),
(24, 'Nurni', '1439747653300000', 'P', 'KAJAI', '1969-11-07', '196911071997032000', 'PNS', 'Guru Mapel', '', 'S.Pd', 'S1', 'Bahasa Inggris', 'Bahasa Inggris', '2011-04-25', ''),
(25, 'Nuryetti', '8036739641300010', 'P', 'PADANG', '1961-07-04', '196107041988032000', 'PNS', 'Guru Mapel', '', 'S.Pd, M.Si', 'S2', 'Matematika', 'Matematika', '2011-11-14', ''),
(26, 'Onil Eka Putra', '6448763664130120', 'L', 'PADANG', '1985-01-16', '198501162011011000', 'PNS', 'Tenaga Perpustakaan', '', 'A.Md', 'D3', 'lainnya', '', '2011-01-01', ''),
(27, 'Osmiati', '1452762664210120', 'P', 'TANJUNG JATI', '1984-11-20', '198411202010012000', 'PNS', 'Guru Mapel', '', 'S.Pd', 'S1', 'Pendidikan Bahasa dan Sas', 'Bahasa Indonesia', '2010-02-11', ''),
(28, 'Perdinan Tanjung', '5233761663110040', 'L', 'SIMATORKIS', '1983-09-01', '198309012009011000', 'PNS', 'Guru Mapel', '', 'S.Pd', 'S1', 'Biologi', 'Biologi', '2009-01-01', 'Wakil Kepala Sekolah Sarp'),
(29, 'Reni Sapitri', '346761663300053', 'P', 'GASAN KECIL', '1983-10-14', '198310142010012000', 'PNS', 'Guru Mapel', '', 'S.Pd', 'S1', 'Filsafat dan Sosiologi Pe', 'Sosiologi', '2010-02-11', 'Guru Piket'),
(30, 'Reno Sari', '8345767668130100', 'P', 'CIMPARUH', '1989-10-13', '', 'Guru Honor Sekolah', 'Guru Mapel', '', 'S.Pd.I', 'S1', 'Pendidikan Agama Islam', '', '2014-07-01', ''),
(31, 'Rita Yurtania', '35762663300083', 'P', 'BUKITTINGGI', '1984-03-07', '198403072010012000', 'PNS', 'Guru Mapel', '', 'S.Pd', 'S1', 'Ekonomi', 'Ekonomi', '2010-02-11', 'Guru Piket, Pembina Pramu'),
(32, 'Satni Ridwan', '                ', 'L', 'KP. BARU', '1988-11-05', '', 'Tenaga Honor Sekolah', 'Tenaga Administrasi Sekol', '', 'S.Pd, S.Pd', 'S1', 'Bahasa Inggris', '', '2011-01-01', ''),
(33, 'Seprah Madeni', '2239754655300040', 'P', 'Jambu', '1976-09-07', '197609072000122000', 'PNS', 'Kepala Sekolah', '', 'S.Pd, M.Pd', 'S2', 'Pendidikan Bahasa Inggris', 'Bahasa Inggris', '2002-01-01', 'Kepala Sekolah'),
(34, 'Basril', '4644766667200010', 'L', 'Lembak Pasang', '1988-03-12', '', 'Tenaga Honor Sekolah', 'Tenaga Administrasi Sekol', '', 'S.Kom', 'S1', 'lainnya', '', '2007-01-02', ''),
(35, 'Susi Mustika', '5339756657300040', 'P', 'KAMPUNG BARU', '1978-10-07', '197810072003122000', 'PNS', 'Guru Mapel', '', 'S.Pd', 'S1', 'Pendidikan Matematika', 'Matematika', '2012-05-23', ''),
(36, 'Syadri', '6563744646110850', 'L', 'LOHONG', '1966-12-31', '196612312000031000', 'PNS', 'Guru Mapel', '', 'A.Ma.Pd, S.Pd', 'S1', 'Pendidikan Dunia Usaha', 'Ekonomi', '2010-10-01', ''),
(37, 'Syukril Hamdi Umar', '5453762663110050', 'L', 'GADUR', '1984-01-21', '198401212010011000', 'PNS', 'Guru Mapel', '', 'S.Pd', 'S1', 'Pendidikan Kewarganegaraa', 'Pendidikan Pancasila dan ', '2010-02-11', 'Bendahara BOS, Kepala Per'),
(38, 'Tesi Junita', '5935760661130180', 'P', 'PADANG', '1982-06-03', '198206032010012000', 'PNS', 'Tenaga Administrasi Sekol', '', 'S.E.', 'S1', 'Ekonomi', '', '2014-01-17', ''),
(39, 'Widya Kurniatul Awalia', '2048765666300060', 'P', 'PADANG', '1987-07-16', '198707162010012000', 'PNS', 'Guru Mapel', '', 'S.Pd', 'S1', 'Pendidikan Fisika', 'Fisika', '2010-02-11', ''),
(40, 'Yudhi Rosmen', '2347757659110060', 'L', 'PEKAN BARU', '1979-10-15', '197910152010011000', 'PNS', 'Guru TIK', '', 'S.Kom', 'S1', 'Teknologi Informasi dan K', 'Teknologi Informasi dan K', '2010-02-11', ''),
(41, 'Zulkifli', '139743646200063', 'L', 'KP. KANDANG', '1965-08-07', '196508071993031000', 'PNS', 'Guru Mapel', '', 'S.Pd', 'S1', 'Pendidikan Geografi', 'Geografi', '2012-05-23', ''),
(42, 'Cici Sulastri', '4548759661300080', 'P', 'BUKITTINGGI', '1981-12-16', '198112162010012000', 'PNS', 'Guru Mapel', '', 'S.Si', 'S1', 'Biologi', 'Biologi', '2010-02-11', ''),
(43, 'Danil Putra', '2661763664110060', 'L', 'PADUSUNAN', '1985-03-29', '198503292010011000', 'PNS', 'Guru Mapel', '', 'S.Pd', 'S1', 'Pendidikan Jasmani dan Ke', '', '2010-02-11', ''),
(44, 'David', '4955754656110040', 'L', 'PADANG', '1976-06-23', '197606232009011000', 'PNS', 'Guru Mapel', '', 'S.Sos', 'S1', 'Sosiologi', 'Sosiologi', '2012-05-23', 'Wakil Kepala Sekolah Kesi'),
(45, 'Dedi Hendri', '4649752653200000', 'L', 'APAR', '1974-03-17', '197403172005011000', 'PNS', 'Guru Mapel', '', 'S.Pd', 'S1', 'Sejarah', 'Sejarah', '2012-03-19', ''),
(46, 'Deni Adrivia', '9433758658300040', 'P', 'PARIAMAN', '1984-04-28', '198404282010012000', 'PNS', 'Guru Mapel', '', 'S.Pd', 'S1', 'Pendidikan Matematika', 'Matematika', '2010-01-01', ''),
(47, 'Nama', 'NUPTK', 'J', 'Tempat Lahir', 'Tanggal Lahir', 'NIP', 'Status Kepegawaian', 'Jenis PTK', 'Gelar Depan', 'Gelar Belakang', 'Jenjang', 'Jurusan/Prodi', 'Sertifikasi', 'TMT Kerja', 'Tugas Tambahan'),
(48, 'Hamid Sprtian', '30347', 'L', 'Padang', '2002-12-30', '8235935', 'PNS', 'Guru Mapel', '', '', 'S1', 'Matematika', '', '2020-09-22', '');

-- --------------------------------------------------------

--
-- Table structure for table `guru_lama`
--

CREATE TABLE `guru_lama` (
  `id_guru` int(11) NOT NULL,
  `nama_guru` varchar(25) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `tmpl` varchar(25) NOT NULL,
  `tgll` date NOT NULL,
  `nip` varchar(25) NOT NULL,
  `gol` varchar(25) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `tmt` date NOT NULL,
  `mulai_masuk` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `ijazah_tahun` varchar(25) NOT NULL,
  `foto` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(3) NOT NULL,
  `nama_kelas` varchar(25) NOT NULL,
  `tingkat` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `tingkat`) VALUES
(1, 'VII A', '1'),
(2, 'VIII A', '2'),
(3, 'IXA', '3');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_siswa`
--

CREATE TABLE `kelas_siswa` (
  `id_ks` int(11) NOT NULL,
  `id_siswa` varchar(10) NOT NULL,
  `id_kelas` varchar(5) NOT NULL,
  `id_wali_kelas` varchar(5) NOT NULL,
  `id_ta` varchar(5) NOT NULL,
  `id_next_kelas` varchar(5) NOT NULL,
  `id_ta_next` varchar(5) NOT NULL,
  `status_ks` varchar(15) NOT NULL,
  `catatan_wali_kelas_semester_1` text NOT NULL,
  `catatan_wali_kelas_semester_2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas_siswa`
--

INSERT INTO `kelas_siswa` (`id_ks`, `id_siswa`, `id_kelas`, `id_wali_kelas`, `id_ta`, `id_next_kelas`, `id_ta_next`, `status_ks`, `catatan_wali_kelas_semester_1`, `catatan_wali_kelas_semester_2`) VALUES
(1, '4', '1', '', '2', '2', '3', 'Lanjut', '', ''),
(2, '3', '1', '', '2', '2', '3', 'Lanjut', '', ''),
(3, '1', '1', '', '2', '2', '3', 'Lanjut', '', ''),
(4, '2', '1', '', '2', '2', '3', 'Lanjut', '', ''),
(5, '8', '1', '', '2', '2', '3', 'Lanjut', '', ''),
(6, '9', '1', '', '2', '2', '3', 'Lanjut', '', ''),
(7, '10', '1', '', '2', '1', '3', 'Tinggal', '', ''),
(8, '12', '1', '', '2', '2', '3', 'Lanjut', '', ''),
(9, '13', '1', '', '2', '2', '3', 'Lanjut', '', ''),
(10, '14', '1', '', '2', '2', '3', 'Lanjut', '', ''),
(11, '15', '1', '', '2', '2', '3', 'Lanjut', '', ''),
(12, '16', '1', '', '2', '2', '3', 'Lanjut', '', ''),
(13, '17', '1', '', '2', '2', '3', 'Lanjut', '', ''),
(14, '18', '1', '', '2', '2', '3', 'Lanjut', '', ''),
(15, '19', '1', '', '2', '2', '3', 'Lanjut', '', ''),
(16, '20', '1', '', '2', '2', '3', 'Lanjut', '', ''),
(17, '21', '1', '', '2', '2', '3', 'Lanjut', '', ''),
(18, '4', '2', '', '3', '', '', 'Aktif', '', ''),
(19, '3', '2', '', '3', '', '', 'Aktif', '', ''),
(20, '1', '2', '', '3', '', '', 'Aktif', '', ''),
(21, '2', '2', '', '3', '', '', 'Aktif', '', ''),
(22, '8', '2', '', '3', '', '', 'Aktif', '', ''),
(23, '9', '2', '', '3', '', '', 'Aktif', '', ''),
(24, '12', '2', '', '3', '', '', 'Aktif', '', ''),
(25, '13', '2', '', '3', '', '', 'Aktif', '', ''),
(26, '14', '2', '', '3', '', '', 'Aktif', '', ''),
(27, '15', '2', '', '3', '', '', 'Aktif', '', ''),
(28, '16', '2', '', '3', '', '', 'Aktif', '', ''),
(29, '17', '2', '', '3', '', '', 'Aktif', '', ''),
(30, '18', '2', '', '3', '', '', 'Aktif', '', ''),
(31, '19', '2', '', '3', '', '', 'Aktif', '', ''),
(32, '20', '2', '', '3', '', '', 'Aktif', '', ''),
(33, '21', '2', '', '3', '', '', 'Aktif', '', ''),
(34, '10', '1', '', '3', '', '', 'Aktif', '', ''),
(35, '4', '1', '', '3', '', '', 'Aktif', '', ''),
(36, '3', '1', '', '3', '', '', 'Aktif', '', ''),
(37, '1', '1', '', '3', '', '', 'Aktif', '', ''),
(38, '2', '1', '', '3', '', '', 'Aktif', '', ''),
(39, '8', '1', '', '3', '', '', 'Aktif', '', ''),
(40, '9', '1', '', '3', '', '', 'Aktif', '', ''),
(41, '10', '1', '', '3', '', '', 'Aktif', '', ''),
(42, '12', '1', '', '3', '', '', 'Aktif', '', ''),
(43, '13', '1', '', '3', '', '', 'Aktif', '', ''),
(44, '93', '1', '', '3', '', '', 'Aktif', '', ''),
(45, '96', '1', '', '3', '', '', 'Aktif', '', ''),
(46, '110', '1', '', '3', '', '', 'Aktif', '', ''),
(47, '111', '1', '', '3', '', '', 'Aktif', '', ''),
(48, '4', '1', '', '4', '', '', 'Aktif', '', ''),
(49, '3', '1', '', '4', '', '', 'Aktif', '', ''),
(50, '1', '1', '', '4', '', '', 'Aktif', '', ''),
(51, '2', '1', '', '4', '', '', 'Aktif', '', ''),
(52, '8', '1', '', '4', '', '', 'Aktif', '', ''),
(53, '9', '1', '', '4', '', '', 'Aktif', '', ''),
(54, '10', '1', '', '4', '', '', 'Aktif', '', ''),
(55, '12', '1', '', '4', '', '', 'Aktif', '', ''),
(56, '13', '1', '', '4', '', '', 'Aktif', '', ''),
(57, '14', '1', '', '4', '', '', 'Aktif', '', ''),
(58, '15', '1', '', '4', '', '', 'Aktif', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id_konsultasi` int(11) NOT NULL,
  `id_kelas` varchar(5) NOT NULL,
  `id_ta` varchar(5) NOT NULL,
  `semester` varchar(2) NOT NULL,
  `id_siswa` varchar(10) NOT NULL,
  `tanggal` varchar(25) NOT NULL,
  `konsultasi` text NOT NULL,
  `tindak_lanjut` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`id_konsultasi`, `id_kelas`, `id_ta`, `semester`, `id_siswa`, `tanggal`, `konsultasi`, `tindak_lanjut`) VALUES
(1, '2', '3', '<b', '3', '2021-07-27', 'masalah percintaan', 'putuskan'),
(2, '3', '4', '1', '3', '2021-09-01', 'wwww sss', 'eeeeddd');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_penilaian`
--

CREATE TABLE `kriteria_penilaian` (
  `id_kp` int(4) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `kategori` text NOT NULL,
  `jenis_penilaian` varchar(25) NOT NULL,
  `no_kd` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_penilaian`
--

INSERT INTO `kriteria_penilaian` (`id_kp`, `kode`, `kategori`, `jenis_penilaian`, `no_kd`) VALUES
(15, 'Sikap', 'Sosial', '2', 'Sikap Terhadap Teman'),
(20, 'Sikap', 'Spiritual', '2', 'Akhlak'),
(19, 'Sikap', 'Sosial', '2', 'Sikap Terhadap Guru');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_kelas` varchar(5) NOT NULL,
  `id_ta` varchar(5) NOT NULL,
  `semester` varchar(2) NOT NULL,
  `id_kp` varchar(5) NOT NULL,
  `id_siswa` varchar(10) NOT NULL,
  `nilai` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggaran`
--

CREATE TABLE `pelanggaran` (
  `id_pelanggaran` int(11) NOT NULL,
  `id_kelas` varchar(5) NOT NULL,
  `id_ta` varchar(5) NOT NULL,
  `semester` text NOT NULL,
  `id_siswa` varchar(10) NOT NULL,
  `tanggal` varchar(25) NOT NULL,
  `kasus` text NOT NULL,
  `tindak_lanjut` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggaran`
--

INSERT INTO `pelanggaran` (`id_pelanggaran`, `id_kelas`, `id_ta`, `semester`, `id_siswa`, `tanggal`, `kasus`, `tindak_lanjut`) VALUES
(1, '2', '3', '1', '3', '2021-07-27', 'mencuri', 'potong tangan'),
(2, '3', '4', '1', '2', '2021-09-01', 'mencuri', '3 bulan penjara'),
(3, '1', '4', '<b', '12', '2021-09-01', 'hhhhhy', 'yyyyyyyy'),
(4, '1', '4', '<br />\r\n<b>Notice</b>:  Undefined variable: semester in <b>E:xampphtdocsTAAktifsi_bk_smpn4useradminformpelanggaranpilih_siswa_melanggar.php</b> on line <b>100</b><br />\r\n', '12', '2021-09-01', 'regds', 'gdgdfgdf'),
(6, '1', '4', '1', '13', '2021-09-01', 'AAAA', 'BBBB');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `id_kelas` varchar(5) NOT NULL,
  `id_ta` varchar(5) NOT NULL,
  `semester` varchar(2) NOT NULL,
  `id_siswa` varchar(10) NOT NULL,
  `tanggal` varchar(25) NOT NULL,
  `tingkat` varchar(25) NOT NULL,
  `kegiatan` text NOT NULL,
  `prestasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id_prestasi`, `id_kelas`, `id_ta`, `semester`, `id_siswa`, `tanggal`, `tingkat`, `kegiatan`, `prestasi`) VALUES
(2, '1', '3', '1', '3', '2021-07-29', 'Nasional', 'Olimpiade matimatika', 'Juarn 3'),
(3, '1', '4', '1', '4', '2021-09-01', 'Nasional', 'Q', 'E');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(25) NOT NULL,
  `nis` int(16) NOT NULL,
  `nisn` varchar(16) NOT NULL,
  `tmpl` varchar(25) NOT NULL,
  `tgll` date NOT NULL,
  `jk` varchar(1) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `nama_ayah` varchar(25) NOT NULL,
  `nama_ibu` varchar(25) NOT NULL,
  `kerja_ayah` varchar(25) NOT NULL,
  `kerja_ibu` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `foto` text NOT NULL,
  `status_siswa` varchar(25) NOT NULL,
  `keterangan` text NOT NULL,
  `kelas_awal` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama_siswa`, `nis`, `nisn`, `tmpl`, `tgll`, `jk`, `agama`, `alamat`, `no_telp`, `nama_ayah`, `nama_ibu`, `kerja_ayah`, `kerja_ibu`, `password`, `foto`, `status_siswa`, `keterangan`, `kelas_awal`) VALUES
(4, 'DESRIZAL RANI FITRI', 2263, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2263', '', 'Aktif', '', ''),
(3, 'DAVID ILHAM', 2260, '4334', 'Marani', '2021-03-06', 'L', 'Islam', 'disana', '3', 'Udin', 'klsk', 'dslk', 'sdls', '123', '210331080447bg_home.jpg', 'Aktif', '', ''),
(1, 'AFIFA RAHMADANI', 2238, '66', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '66', '', 'Aktif', '', ''),
(2, 'ALFRENDOM BINTAR', 2243, '77', '', '0000-00-00', 'L', '', '', '', '', '', '', '', '77', '', 'Aktif', '', ''),
(8, 'HENDRI VALDI', 2300, '0', 'fcsa', '2021-07-14', 'L', 'Islam', 'sa', '01221', 'sq', 'sdwsc', 'cdbviu`=', '==whibcvsdhivb', '2300', '', 'Aktif', '', ''),
(9, 'LUSI JAYUSMAN', 2317, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2317', '', 'Aktif', '', ''),
(10, 'M. ARFINUS AKBAR', 2319, '111', '', '0000-00-00', 'L', '', '', '', 'Ucok', 'Upiak', '', '', '111', '', 'Aktif', '', ''),
(12, 'MUHAMAD RAHUL SAPUTRA', 2331, '0', '', '0000-00-00', 'L', '', '', '', '', '', '', '', '2331', '', 'Aktif', '', ''),
(13, 'NADIA RAHMADANI', 2348, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2348', '', 'Aktif', '', ''),
(14, 'NALDI HARIANTO', 2349, '0', '', '0000-00-00', 'L', '', '', '', '', '', '', '', '2349', '', 'Aktif', '', ''),
(15, 'NURAINI SAFITRI', 2358, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2358', '', 'Aktif', '', ''),
(16, 'REVALINA KLARISSA', 2377, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '123', '', 'Aktif', '', ''),
(17, 'RIDHO FEBRI ANANDA', 2384, '0', 'padang', '2021-05-11', 'L', 'islam', 'padang', '0812', 'nas', 'ida', 'ojol', 'irt', '2384', '', 'Aktif', '', ''),
(18, 'RINO AIDIL SAPUTRA', 2389, '0', '', '0000-00-00', 'L', '', '', '', '', '', '', '', '2389', '', 'Aktif', '', ''),
(19, 'RIVA SAPITRI', 2391, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2391', '', 'Aktif', '', ''),
(20, 'RUZI HARDIAN', 2394, '0', '', '0000-00-00', 'L', '', '', '', '', '', '', '', '2394', '', 'Aktif', '', ''),
(21, 'SARI MAHARANI PUTRI', 2400, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2400', '', 'Aktif', '', ''),
(22, 'SAYFUL ANDANIL', 2401, '55', 'padang', '2020-04-29', 'L', 'Islam', 's', '1424', 'kdls', 'klsk', 'dslk', 'sdls', '123', '210328015938hamid_fp.PNG', 'Aktif', '', ''),
(23, 'SILVI GUSNI ASNATUL KHAIR', 2405, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2405', '', 'Aktif', '', ''),
(24, 'TIRA RIMAWATI PUTRI', 2417, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2417', '', 'Aktif', '', ''),
(25, 'WAHYU RASIDI', 2425, '0', '', '0000-00-00', 'L', '', '', '', '', '', '', '', '2425', '', 'Aktif', '', ''),
(26, 'YULIA ANANI', 2431, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2431', '', 'Aktif', '', ''),
(27, 'ZULEYKA DELLA ZAHARA', 2436, '0', 'Padang', '2021-05-10', 'P', 'Islam', 'padang', '0812', 'Nas', 'ida', 'ojol', 'irt', '2436', '', 'Aktif', '', ''),
(28, 'ABDULLAH AZZAM', 2236, '0', '', '0000-00-00', 'L', '', '', '', '', '', '', '', '2236', '', 'Aktif', '', ''),
(29, 'ARIF ABDILLAH', 2250, '0', '', '0000-00-00', 'L', '', '', '', '', '', '', '', '2250', '', 'Aktif', '', ''),
(30, 'CICI SRIWAHYU NINGSIH', 2254, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2254', '', 'Aktif', '', ''),
(31, 'CICI ZULIYANTI', 2255, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2255', '', 'Aktif', '', ''),
(32, 'ELVINA', 2277, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2277', '', 'Aktif', '', ''),
(33, 'FIFO KHAER ARIFIN', 2290, '0', '', '0000-00-00', 'L', '', '', '', '', '', '', '', '2290', '', 'Aktif', '', ''),
(34, 'FITRI', 2293, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2293', '', 'Aktif', '', ''),
(35, 'GIRVARUZI KHALID', 2297, '0', '', '0000-00-00', 'L', '', '', '', '', '', '', '', '2297', '', 'Aktif', '', ''),
(36, 'IKBAL', 2301, '0', '', '0000-00-00', 'L', '', '', '', '', '', '', '', '2301', '', 'Aktif', '', ''),
(37, 'IKRA MUHAMMAD FALENTINO', 2302, '0', '', '0000-00-00', 'L', '', '', '', '', '', '', '', '2302', '', 'Aktif', '', ''),
(39, 'LISA FAUZIAH RAMADHANI', 2316, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2316', '', 'Aktif', '', ''),
(40, 'MELATI APRIANI', 2328, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2328', '', 'Aktif', '', ''),
(41, 'MUHAMMAD AL FIQRAM', 2336, '0', '', '0000-00-00', 'L', '', '', '', '', '', '', '', '2336', '', 'Aktif', '', ''),
(42, 'MUHAMMAD AL HADID', 2338, '0', '', '0000-00-00', 'L', '', '', '', '', '', '', '', '2338', '', 'Aktif', '', ''),
(43, 'NIRAWATI', 2354, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2354', '', 'Aktif', '', ''),
(44, 'NOVY FEBRI ANGGRAINI', 2357, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2357', '', 'Aktif', '', ''),
(45, 'RAJA ASLAM SYAWIR', 2369, '0', '', '0000-00-00', 'L', '', '', '', '', '', '', '', '2369', '', 'Aktif', '', ''),
(46, 'RESI ASMI', 2375, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2375', '', 'Aktif', '', ''),
(47, 'RESTU SYAHDA', 2376, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2376', '', 'Aktif', '', ''),
(48, 'RIAN PUTRA MAIFIDA', 2382, '0', '', '0000-00-00', 'L', '', '', '', '', '', '', '', '2382', '', 'Aktif', '', ''),
(49, 'SALSA BILA', 2397, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2397', '', 'Aktif', '', ''),
(50, 'SELVI JULIA PUTRI', 2402, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2402', '', 'Calon Siswa', '', ''),
(51, 'TEDY FIRMANSYAH', 2413, '0', '', '0000-00-00', 'L', '', '', '', '', '', '', '', '2413', '', 'Calon Siswa', '', ''),
(52, 'UTARI', 2420, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2420', '', 'Aktif', '', ''),
(53, 'VANESYA IVANKA', 2421, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2421', '', 'Aktif', '', ''),
(54, 'ZULFI ANDRE', 2437, '0', '', '0000-00-00', 'L', '', '', '', '', '', '', '', '2437', '', 'Aktif', '', ''),
(55, 'ADI RAHMANTO', 2231, '0', '', '0000-00-00', 'L', '', '', '', '', '', '', '', '2231', '', 'Aktif', '', ''),
(56, 'ADINDA PUSPA SARI', 2232, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2232', '', 'Aktif', '', ''),
(57, 'ALFAUZI IKHRAM', 2242, '22', '', '0000-00-00', 'L', '', '', '', '', '', '', '', '22', '', 'Aktif', '', ''),
(58, 'ANJELIKA SEPTIA', 2247, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2247', '', 'Aktif', '', ''),
(59, 'ARIF RAHMAT SAPUTRA', 2251, '0', '', '0000-00-00', 'L', '', '', '', '', '', '', '', '2251', '', 'Aktif', '', ''),
(60, 'DIMAS ARI', 2268, '0', '', '0000-00-00', 'L', '', '', '', '', '', '', '', '2268', '', 'Calon Siswa', '', ''),
(61, 'ELFIRA FITRIA ARIFIN', 2274, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2274', '', 'Calon Siswa', '', ''),
(62, 'ELSA JUNIARTI', 2276, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2276', '', 'Calon Siswa', '', ''),
(63, 'FIKHRA WINATA', 2291, '0', '', '0000-00-00', 'L', '', '', '', '', '', '', '', '2291', '', 'Calon Siswa', '', ''),
(64, 'ILHAM SAFRIANTO', 2304, '0', '1', '0012-12-12', 'L', 'Islam', '12', '12', '21', '21', '21', '21', '2304', '', 'Calon Siswa', '', ''),
(65, 'INDRY NURFADILLAH', 2305, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2305', '', 'Calon Siswa', '', ''),
(66, 'LIDIA AMELIA SUNDARI', 2315, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2315', '', 'Calon Siswa', '', ''),
(67, 'LUTHFIANSYAH GAYO', 2318, '0', '', '0000-00-00', 'L', '', '', '', '', '', '', '', '2318', '', 'Calon Siswa', '', ''),
(68, 'MUHAMMAD FAUZAN', 2342, '0', '', '0000-00-00', 'L', '', '', '', '', '', '', '', '2342', '', 'Calon Siswa', '', ''),
(69, 'MUHAMMAD VICKY', 2345, '0', '', '0000-00-00', 'L', '', '', '', '', '', '', '', '2345', '', 'Calon Siswa', '', ''),
(70, 'MUTIARA AULIA', 2347, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2347', '', 'Calon Siswa', '', ''),
(71, 'PUTRI INDRI YANI', 2362, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2362', '', 'Calon Siswa', '', ''),
(72, 'REZA ARRIDHO', 2378, '0', '', '0000-00-00', 'L', '', '', '', '', '', '', '', '2378', '', 'Calon Siswa', '', ''),
(73, 'SANTIA RISNI', 2399, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2399', '', 'Calon Siswa', '', ''),
(74, 'SUCI INTAN SARI', 2410, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2410', '', 'Calon Siswa', '', ''),
(75, 'TITI SANTIYA', 2418, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2418', '', 'Calon Siswa', '', ''),
(76, 'FAJRATUL ADNI', 2283, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2283', '', 'Calon Siswa', '', ''),
(77, 'INDAH CAHYANI', 2440, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2440', '', 'Calon Siswa', '', ''),
(78, 'MUHAMMAD PUTRA', 2349, '0', '', '0000-00-00', 'L', '', '', '', '', '', '', '', '2349', '', 'Aktif', '', ''),
(79, 'REZA OKTA SHINTIA', 2379, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2379', '', 'Aktif', '', ''),
(80, 'STEFI MONIKA', 2408, '0', 'RRRRR', '2021-03-30', 'L', 'Islam', 'Disana', '081221', 'Udin', 'Upiak', '-', '-', '123', '210331075745qw.png', 'Aktif', '', ''),
(81, 'ADIT ANUGRAH', 2233, '0', '', '0000-00-00', 'L', '', '', '', '', '', '', '', '2233', '', 'Aktif', '', ''),
(82, 'AFIFA FAUZIAH', 2238, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2238', '', 'Aktif', '', ''),
(83, 'ALIF SURYADI', 2244, '0', '', '0000-00-00', 'L', '', '', '', '', '', '', '', '2244', '', 'Aktif', '', ''),
(84, 'APRIZA WIRANDA', 2248, '0', '', '0000-00-00', 'L', '', '', '', '', '', '', '', '2248', '', 'Aktif', '', ''),
(85, 'DESI DELFITA', 2262, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2262', '', 'Aktif', '', ''),
(86, 'DIMAS ARIO PUTRA', 2269, '0', '', '0000-00-00', 'L', '', '', '', '', '', '', '', '2269', '', 'Aktif', '', ''),
(87, 'EKA JELITA PUTRI', 2273, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2273', '', 'Aktif', '', ''),
(88, 'ELMI NOVITA', 2275, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2275', '', 'Aktif', '', ''),
(89, 'FAJAR SIDDIK DJAAFAR', 0, '0', '', '0000-00-00', 'L', '', '', '', '', '', '', '', '', '', 'Aktif', '', ''),
(90, 'FAUZIAH MAILANI', 2286, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2286', '', 'Aktif', '', ''),
(91, 'HALIMUR RASYID', 2299, '0', '', '0000-00-00', 'L', '', '', '', '', '', '', '', '2299', '', 'Aktif', '', ''),
(92, 'IRWAN FADHILA', 2307, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2307', '', 'Aktif', '', ''),
(93, 'MARINA SYARAH', 2326, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2326', '', 'Aktif', '', ''),
(94, 'MASYURAH NABILLA SARI', 2327, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2327', '', 'Aktif', '', ''),
(95, 'NATHASYA NOVIA RAMADHAN', 2350, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2350', '', 'Selesai', '', ''),
(96, 'NAURA AMELIA PUTRI', 2352, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2352', '', 'Aktif', '', ''),
(97, 'NISA ANA DINDA', 2355, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2355', '', 'Selesai', '', ''),
(98, 'RARA FITRI', 2371, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2371', '', 'Selesai', '', ''),
(99, 'RIDO MUHAMAD PRATAMA', 2386, '0', 'padang', '2012-12-12', 'L', 'Islam', 'padang', '081212121212', 'Nas', 'ida', 'ojol', 'itr', '6666', '210624081106padi.jpg', 'Selesai', '', ''),
(100, 'RIZKA AULIA PUTRI', 2392, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2392', '', 'Calon Siswa', '', ''),
(101, 'SALSA ASHYIFA', 2396, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2396', '', 'Calon Siswa', '', ''),
(102, 'SITI SA`DIAH', 2406, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2406', '', 'Calon Siswa', '', ''),
(103, 'ZHIARA SINTA MUTIARANI', 2434, '0', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '2434', '', 'Calon Siswa', '', ''),
(104, 'Hamid Septian', -2, '-2', 'Ampang', '2019-12-11', 'P', 'Hindu', 'Maransi', '-1', 'nasril', 'zurnida', 'ojek', 'irt', '123', '210213120035cbt us.PNG', 'Calon Siswa', '', ''),
(105, 'A', 12312312, '1231231', '1A', '1111-11-12', 'L', 'Islam', '1', '1', '1', '1', '1', '1', '123', '210220113506fokis.jpg', 'Calon Siswa', '', ''),
(106, 'Ucok Baba', 12433, '232', 'Padang', '2021-04-27', 'P', 'Kristen', 'disana', '-2', 'kdls', 'klsk', 'dslk', 'sdls', '123', '210328125423logoandroid.PNG', 'Calon Siswa', '', ''),
(107, '8', 8, '8', '8', '1212-08-08', 'L', 'Islam', '8', '8', '8', '8', '8', '8', '123', '210405083251himasi.jpg', 'Calon Siswa', '', ''),
(108, '6', 6, '6', '6', '0006-06-06', 'L', 'Islam', '6', '6', '6', '6', '6', '6', '123', '210405083748pantiasuhan.PNG', 'Calon Siswa', '', ''),
(109, 'Udin penyok', 1234, '1234', 'Padang', '2022-05-10', 'L', 'Islam', 'Maransi', '0812', 'Udin', 'penyok', 'ojol', 'irt', '123', '210409051604mapala.jpg', 'Calon Siswa', '', ''),
(110, 'ucok baba', 123, '0', 'padang', '2022-05-12', 'P', 'Kristen', 'disana', '-2', 'Udin', 'klsk', 'erhbdsfx', 'sdls', '123', '210411072241hotel.PNG', 'Aktif', '', ''),
(111, 'Zurnida', 123456, '', 'Padang City', '2022-05-12', 'P', 'Kristen', 'disana', '-2', 'Udin', 'klsk', 'dslk', 'sdls', '123', '210411073009mapala.jpg', 'Aktif', '', ''),
(112, 'cssdv', -3, '', 'Padang City', '2019-02-09', 'P', 'Hindu', 'disana', '-2', 'Udin', 'klsk', 'dslk', 'sdls', '123', '210411073037hotel.PNG', 'Calon Siswa', '', ''),
(113, 'vvkhb', -2, '', 'Padang City', '2019-02-09', 'P', 'Hindu', 'disana', '-2', 'Udin', 'klsk', 'dslk', 'sdls', '123', '210411073138coverdicoding.PNG', 'Calon Siswa', '', ''),
(114, 'M R X', 99, '', 'padang', '1212-12-12', 'L', 'Islam', 'disana', '3', 'Udin', 'Upiak', 'ojek', 'sdls', '123', '210411073226personalweb.PNG', 'Calon Siswa', '', ''),
(115, 'ppppppppppppppp', 12345, '', 'sbsucb', '2022-05-12', 'L', 'Kristen', 'disana', '-2', 'Udin', 'klsk', 'dslk', 'sdls', '123', '210411073727hotel.PNG', 'Aktif', '', ''),
(116, 'Ucok Baba', 9090, '', '909090', '0099-09-09', 'P', 'Hindu', 'disana', '-2', 'Udin', 'klsk', 'dslk', 'sdls', '123', '210416015329fokis.jpg', '', '', ''),
(117, 'sac sjkh bvkdjfhb', -2, '', 'Padang City', '2019-02-14', 'P', 'Hindu', 'disana', '-2', 'ndg', 'klsk', 'dslk', 'sdls', '123', '210416015358hotel.PNG', '', 'dddddddddddd', '3'),
(118, 'ppppppppppppppppppppppppp', -2, '', 'Padang City', '2019-02-14', 'P', 'Kristen', 'disana', '-2', 'Udin', 'klsk', 'dslk', 'sdls', '123', '210416015439logoandroid.PNG', '', 'karena begini', '3'),
(119, '111111111111', 111, '', 'pp', '2019-02-14', 'P', 'Hindu', 'disana', '-2', 'Udin', 'klsk', 'dslk', 'sdls', '123', '210416015507qw.png', 'Aktif', 'pppppppp', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_ajaran`
--

CREATE TABLE `tahun_ajaran` (
  `no` int(11) NOT NULL,
  `id_ta` varchar(5) NOT NULL,
  `nama_ta` varchar(25) NOT NULL,
  `semester` int(2) NOT NULL,
  `status_ta` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun_ajaran`
--

INSERT INTO `tahun_ajaran` (`no`, `id_ta`, `nama_ta`, `semester`, `status_ta`) VALUES
(1, '1', '2018', 1, 'Selesai'),
(2, '1', '2018', 2, 'Selesai'),
(3, '2', '2019', 1, 'Selesai'),
(4, '2', '2019', 2, 'Selesai'),
(5, '3', '2020', 1, 'Selesai'),
(6, '3', '2020', 2, 'Selesai'),
(7, '4', '443', 1, 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_ptk`);

--
-- Indexes for table `guru_lama`
--
ALTER TABLE `guru_lama`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
  ADD PRIMARY KEY (`id_ks`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`);

--
-- Indexes for table `kriteria_penilaian`
--
ALTER TABLE `kriteria_penilaian`
  ADD PRIMARY KEY (`id_kp`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD PRIMARY KEY (`id_pelanggaran`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_ptk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `guru_lama`
--
ALTER TABLE `guru_lama`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
  MODIFY `id_ks` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id_konsultasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kriteria_penilaian`
--
ALTER TABLE `kriteria_penilaian`
  MODIFY `id_kp` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  MODIFY `id_pelanggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
