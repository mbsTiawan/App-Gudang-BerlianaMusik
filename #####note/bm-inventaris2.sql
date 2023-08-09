-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2023 at 11:28 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bm-inventaris2`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'mbsTiawan', NULL, '2023-06-09 09:02:07', 0),
(2, '::1', 'mbsTiawan', NULL, '2023-06-09 09:02:15', 0),
(3, '::1', 'bags070902stw@gmail.com', 1, '2023-06-09 09:03:01', 1),
(4, '::1', 'mbsTiawan', NULL, '2023-06-09 10:39:23', 0),
(5, '::1', 'bags070902stw@gmail.com', 1, '2023-06-09 10:39:32', 1),
(6, '::1', 'bags070902stw@gmail.com', 1, '2023-06-10 04:04:00', 1),
(7, '::1', 'bags070902stw@gmail.com', 1, '2023-06-10 13:09:22', 1),
(8, '::1', 'bags070902stw@gmail.com', 1, '2023-06-11 11:40:43', 1),
(9, '::1', 'bags070902stw@gmail.com', 1, '2023-06-12 02:44:25', 1),
(10, '::1', 'bags070902stw@gmail.com', 1, '2023-06-12 09:50:10', 1),
(11, '::1', 'bags070902stw@gmail.com', 1, '2023-06-15 07:45:51', 1),
(12, '::1', 'mbsTiawan', NULL, '2023-06-16 07:30:01', 0),
(13, '::1', 'bags070902stw@gmail.com', 1, '2023-06-16 07:30:07', 1),
(14, '::1', 'bags070902stw@gmail.com', 1, '2023-06-21 10:04:58', 1),
(15, '::1', 'bags070902stw@gmail.com', 1, '2023-06-22 03:36:27', 1),
(16, '::1', 'mbsTiawan', NULL, '2023-06-22 10:06:59', 0),
(17, '::1', 'admin', NULL, '2023-06-22 10:07:07', 0),
(18, '::1', 'admin2', NULL, '2023-06-22 10:07:17', 0),
(19, '::1', 'admin', NULL, '2023-06-22 10:07:32', 0),
(20, '::1', 'bags070902stw@gmail.com', 1, '2023-06-22 10:17:59', 1),
(21, '::1', 'bags070902stw@gmail.com', 1, '2023-06-23 07:03:18', 1),
(22, '::1', 'bags070902stw@gmail.com', 1, '2023-06-24 06:40:25', 1),
(23, '::1', 'bags070902stw@gmail.com', 1, '2023-06-25 10:49:01', 1),
(24, '::1', 'bags070902stw@gmail.com', 1, '2023-06-26 03:56:36', 1),
(25, '::1', 'bags070902stw@gmail.com', 1, '2023-06-26 11:25:43', 1),
(26, '::1', 'bags070902stw@gmail.com', 1, '2023-06-26 12:40:45', 1),
(27, '::1', 'mbsTiawan', NULL, '2023-06-26 12:41:47', 0),
(28, '::1', 'mbsTiawan', NULL, '2023-06-26 12:43:55', 0),
(29, '::1', 'mbsTiawan', NULL, '2023-06-26 12:44:15', 0),
(30, '::1', 'bags070902stw@gmail.com', 1, '2023-06-26 12:44:23', 1),
(31, '::1', 'bags070902stw@gmail.com', 1, '2023-06-26 13:29:52', 1),
(32, '::1', 'bags070902stw@gmail.com', 1, '2023-06-27 11:46:07', 1),
(33, '::1', 'bags070902stw@gmail.com', 1, '2023-06-28 09:25:21', 1),
(34, '::1', 'bags070902stw@gmail.com', 1, '2023-06-28 09:43:03', 1),
(35, '::1', 'bags070902stw@gmail.com', 1, '2023-06-30 07:57:24', 1),
(36, '::1', 'mbsTiawan', NULL, '2023-06-30 14:04:45', 0),
(37, '::1', 'bags070902stw@gmail.com', 1, '2023-06-30 14:04:52', 1),
(38, '::1', 'mbsTiawan', NULL, '2023-07-01 05:13:08', 0),
(39, '::1', 'bags070902stw@gmail.com', 1, '2023-07-01 05:13:20', 1),
(40, '::1', 'mbsTiawan', NULL, '2023-07-02 08:30:44', 0),
(41, '::1', 'bags070902stw@gmail.com', 1, '2023-07-02 08:30:51', 1),
(42, '::1', 'bags070902stw@gmail.com', 1, '2023-07-02 08:40:10', 1),
(43, '::1', 'bags070902stw@gmail.com', 1, '2023-07-02 08:40:56', 1),
(44, '::1', 'bags070902stw@gmail.com', 1, '2023-07-02 08:43:49', 1),
(45, '::1', 'bags070902stw@gmail.com', 1, '2023-07-02 08:44:34', 1),
(46, '::1', 'bags070902stw@gmail.com', 1, '2023-07-02 08:46:55', 1),
(47, '::1', 'mbsTiawan', NULL, '2023-07-02 08:49:47', 0),
(48, '::1', 'bags070902stw@gmail.com', 1, '2023-07-02 08:49:55', 1),
(49, '::1', 'bags070902stw@gmail.com', 1, '2023-07-02 08:50:51', 1),
(50, '::1', 'bags070902stw@gmail.com', 1, '2023-07-02 08:55:15', 1),
(51, '::1', 'bags070902stw@gmail.com', 1, '2023-07-02 09:04:26', 1),
(52, '::1', 'bags070902stw@gmail.com', 1, '2023-07-02 10:24:20', 1),
(53, '::1', 'bags070902stw@gmail.com', 1, '2023-07-03 06:45:57', 1),
(54, '::1', 'bags070902stw@gmail.com', 1, '2023-07-06 07:39:38', 1),
(55, '::1', 'bags070902stw@gmail.com', 1, '2023-07-06 07:39:53', 1),
(56, '::1', 'bags070902stw@gmail.com', 1, '2023-07-06 07:55:20', 1),
(57, '::1', 'bags070902stw@gmail.com', 1, '2023-07-06 08:03:47', 1),
(58, '::1', 'arsal@gmail.com', 2, '2023-07-06 08:07:30', 1),
(59, '::1', 'bags070902stw@gmail.com', 1, '2023-07-06 08:16:52', 1),
(60, '::1', 'eta@gmail.com', 3, '2023-07-06 08:52:18', 1),
(61, '::1', 'bags070902stw@gmail.com', 1, '2023-07-06 12:19:57', 1),
(62, '::1', 'bags070902stw@gmail.com', 1, '2023-07-10 09:13:33', 1),
(63, '::1', 'bags070902stw@gmail.com', 1, '2023-07-11 04:08:04', 1),
(64, '::1', 'bags070902stw@gmail.com', 1, '2023-07-11 20:21:50', 1),
(65, '::1', 'admin akuntansi', NULL, '2023-07-12 09:37:33', 0),
(66, '::1', 'bags070902stw@gmail.com', 1, '2023-07-12 10:08:36', 1),
(67, '::1', 'bags070902stw@gmail.com', 1, '2023-07-12 11:56:43', 1),
(68, '::1', 'bags070902stw@gmail.com', 1, '2023-07-12 11:58:38', 1),
(69, '::1', 'bags070902stw@gmail.com', 1, '2023-07-13 07:54:34', 1),
(70, '::1', 'bags070902stw@gmail.com', 1, '2023-07-13 12:19:11', 1),
(71, '::1', 'bags070902stw@gmail.com', 1, '2023-07-24 13:12:33', 1),
(72, '::1', 'bags070902stw@gmail.com', 1, '2023-07-24 13:24:40', 1),
(73, '::1', 'bags070902stw@gmail.com', 1, '2023-07-25 12:53:11', 1),
(74, '::1', 'bags070902stw@gmail.com', 1, '2023-07-28 08:48:19', 1),
(75, '::1', 'bags070902stw@gmail.com', 1, '2023-08-06 03:20:05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jml_barang` int(11) NOT NULL,
  `hrg_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `barang_gudang`
--

CREATE TABLE `barang_gudang` (
  `kd_brg` int(11) UNSIGNED NOT NULL,
  `nama_brg` varchar(30) NOT NULL,
  `kategori` enum('Properti','Jasa') NOT NULL DEFAULT 'Properti',
  `stok` int(10) UNSIGNED NOT NULL,
  `stok_pinjam` int(10) UNSIGNED NOT NULL,
  `unit` enum('Satuan','Paket') NOT NULL DEFAULT 'Satuan',
  `status` enum('Active','Nonactive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang_gudang`
--

INSERT INTO `barang_gudang` (`kd_brg`, `nama_brg`, `kategori`, `stok`, `stok_pinjam`, `unit`, `status`) VALUES
(56, 'Kursi', 'Properti', 200, 96, 'Satuan', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `kd_tr` int(10) UNSIGNED NOT NULL,
  `kd_brg` int(10) UNSIGNED NOT NULL,
  `kd_pr` varchar(35) NOT NULL,
  `jumlah_keluar` int(11) NOT NULL,
  `unit` enum('Satuan','Paket') NOT NULL DEFAULT 'Satuan',
  `tanggal_keluar` date NOT NULL,
  `jenis_tr` enum('Stok','Stok Pinjam') NOT NULL DEFAULT 'Stok',
  `status` enum('Belum Selesai','Selesai') NOT NULL DEFAULT 'Belum Selesai'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang_keluar`
--

INSERT INTO `barang_keluar` (`kd_tr`, `kd_brg`, `kd_pr`, `jumlah_keluar`, `unit`, `tanggal_keluar`, `jenis_tr`, `status`) VALUES
(65, 56, 'PR003', 10, 'Satuan', '2023-07-28', 'Stok Pinjam', 'Belum Selesai');

--
-- Triggers `barang_keluar`
--
DELIMITER $$
CREATE TRIGGER `update_stok_barangKeluar` AFTER INSERT ON `barang_keluar` FOR EACH ROW BEGIN
    DECLARE transaksi ENUM('Stok', 'Stok Pinjam');
    
    SET transaksi = NEW.jenis_tr;

    IF transaksi = 'Stok' THEN
        UPDATE barang_gudang
        SET stok = stok - new.jumlah_keluar
        WHERE kd_brg = new.kd_brg;
    ELSEIF transaksi = 'Stok Pinjam' THEN
    	UPDATE barang_gudang
        SET stok_pinjam = stok_pinjam - new.jumlah_keluar
        WHERE kd_brg = new.kd_brg;
        
        UPDATE tr_permintaan SET status = 'Pending' WHERE 			kd_pr = NEW.kd_pr;
    END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_stok_barang_gudang` AFTER UPDATE ON `barang_keluar` FOR EACH ROW BEGIN
    IF NEW.jenis_tr = 'Stok' AND NEW.status = 'Selesai' THEN
        UPDATE barang_gudang
        SET stok = stok + NEW.jumlah_keluar
        WHERE kd_brg = NEW.kd_brg;
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `kd_tr` int(10) UNSIGNED NOT NULL,
  `kd_brg` int(10) UNSIGNED NOT NULL,
  `kd_mitra` int(11) DEFAULT NULL,
  `jumlah_masuk` int(10) UNSIGNED NOT NULL,
  `unit` enum('Satuan','Paket') NOT NULL DEFAULT 'Satuan',
  `tanggal_masuk` date NOT NULL,
  `jenis_tr` enum('Stok','Stok Pinjam') NOT NULL DEFAULT 'Stok',
  `status` enum('Belum Selesai','Selesai') NOT NULL DEFAULT 'Belum Selesai'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang_masuk`
--

INSERT INTO `barang_masuk` (`kd_tr`, `kd_brg`, `kd_mitra`, `jumlah_masuk`, `unit`, `tanggal_masuk`, `jenis_tr`, `status`) VALUES
(83, 56, 45, 10, 'Satuan', '2023-07-28', 'Stok Pinjam', 'Belum Selesai');

--
-- Triggers `barang_masuk`
--
DELIMITER $$
CREATE TRIGGER `update_stok_barangMasuk` AFTER INSERT ON `barang_masuk` FOR EACH ROW BEGIN
    DECLARE transaksi ENUM('Stok', 'Stok Pinjam');
    
    SET transaksi = NEW.jenis_tr;

    IF transaksi = 'Stok' THEN
        UPDATE barang_gudang
        SET stok = stok + new.jumlah_masuk
        WHERE kd_brg = new.kd_brg;
    ELSEIF transaksi = 'Stok Pinjam' THEN
    	UPDATE barang_gudang
        SET stok_pinjam = stok_pinjam + new.jumlah_masuk
        WHERE kd_brg = new.kd_brg;
    	
        UPDATE mitra
        SET stok = stok - new.jumlah_masuk
        WHERE kd_mitra = new.kd_mitra;
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(10) UNSIGNED NOT NULL,
  `nama_jabatan` varchar(35) NOT NULL,
  `deskripsi` text NOT NULL,
  `gaji` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`, `deskripsi`, `gaji`) VALUES
(2, 'Karyawan', 'Melaksanakan tugas yang sudah ditetapkan', 1500000),
(3, 'Admin', 'Melakukan pencatatan transaksi yang ada pada perusahaan', 2000000);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `nip` varchar(35) NOT NULL,
  `nama_karyawan` varchar(35) NOT NULL,
  `alamat` text NOT NULL,
  `id_jabatan` int(11) UNSIGNED NOT NULL,
  `id_kelompok` int(11) UNSIGNED NOT NULL,
  `status` enum('Aktif','Tidak Aktif') NOT NULL DEFAULT 'Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kelompok`
--

CREATE TABLE `kelompok` (
  `id_kelompok` int(10) UNSIGNED NOT NULL,
  `nama_kelompok` varchar(35) NOT NULL,
  `uang_bulanan` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelompok`
--

INSERT INTO `kelompok` (`id_kelompok`, `nama_kelompok`, `uang_bulanan`) VALUES
(1, 'Merah', 10000000);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1686301276, 1),
(2, '2023-05-09-033115', 'App\\Database\\Migrations\\Kategori', 'default', 'App', 1686301276, 1),
(3, '2023-05-09-033153', 'App\\Database\\Migrations\\Barang', 'default', 'App', 1686301276, 1),
(4, '2023-07-06-021230', 'App\\Database\\Migrations\\Barang', 'default', 'App', 1689155035, 2),
(5, '2023-07-06-021622', 'App\\Database\\Migrations\\Karyawan', 'default', 'App', 1689155035, 2);

-- --------------------------------------------------------

--
-- Table structure for table `mitra`
--

CREATE TABLE `mitra` (
  `kd_mitra` int(11) NOT NULL,
  `nama_mitra` varchar(30) NOT NULL,
  `kd_brg` int(10) UNSIGNED NOT NULL,
  `stok` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `pemilik` varchar(30) NOT NULL,
  `jenis_mitra` enum('Perusahaan','Perorangan') NOT NULL DEFAULT 'Perusahaan',
  `tgl_kerjasama` date NOT NULL,
  `kontrak` int(11) NOT NULL,
  `status` enum('Active','Nonactive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mitra`
--

INSERT INTO `mitra` (`kd_mitra`, `nama_mitra`, `kd_brg`, `stok`, `alamat`, `no_hp`, `pemilik`, `jenis_mitra`, `tgl_kerjasama`, `kontrak`, `status`) VALUES
(45, 'Mabel Jati', 56, 205, 'Samborejo', '085150021000', 'Bilal', 'Perorangan', '2023-07-13', 1, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tr_permintaan`
--

CREATE TABLE `tr_permintaan` (
  `kd_pr` varchar(35) NOT NULL,
  `kd_brg` int(11) UNSIGNED NOT NULL,
  `kd_mitra` int(11) NOT NULL,
  `jumlah_diminta` int(11) NOT NULL,
  `nama_penyewa` varchar(35) NOT NULL,
  `tanggal_diminta` date NOT NULL,
  `status` enum('Belum Selesai','Pending','Selesai') NOT NULL DEFAULT 'Belum Selesai'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tr_permintaan`
--

INSERT INTO `tr_permintaan` (`kd_pr`, `kd_brg`, `kd_mitra`, `jumlah_diminta`, `nama_penyewa`, `tanggal_diminta`, `status`) VALUES
('PR001', 56, 45, 2, 'Jamaludin', '2023-07-13', 'Selesai'),
('PR002', 56, 45, 3, 'Bagus', '2023-07-14', 'Selesai'),
('PR003', 56, 45, 10, 'Irfan', '2023-07-28', 'Selesai');

--
-- Triggers `tr_permintaan`
--
DELIMITER $$
CREATE TRIGGER `update_stok_mitra` BEFORE UPDATE ON `tr_permintaan` FOR EACH ROW BEGIN
    IF NEW.status = 'Selesai' AND OLD.status != 'Selesai' THEN
        UPDATE mitra SET stok = stok + NEW.jumlah_diminta WHERE kd_mitra = NEW.kd_mitra;
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'bags070902stw@gmail.com', 'mbsTiawan', '$2y$10$3k3im7NjPYPQ5t05Q20REuGOb4osV1i0uEElYe/i9A7WfztiIjt2K', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-06-09 09:02:54', '2023-06-09 09:02:54', NULL),
(2, 'arsal@gmail.com', 'arsal', '$2y$10$.REbRCfebqxISAXcNtuaneCUAKL5R9kYtoEB0DciabcwCs0Z3hacy', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-07-06 08:07:15', '2023-07-06 08:07:15', NULL),
(3, 'eta@gmail.com', 'eta', '$2y$10$FYR40qcr.gYuLPW3cjcxc.W947G1G15g.XmJeW0e7O9KMF1CZs1ey', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-07-06 08:52:07', '2023-07-06 08:52:07', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_gudang`
--
ALTER TABLE `barang_gudang`
  ADD PRIMARY KEY (`kd_brg`);

--
-- Indexes for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`kd_tr`),
  ADD KEY `kd_brg` (`kd_brg`),
  ADD KEY `kd_pr` (`kd_pr`),
  ADD KEY `kd_brg_2` (`kd_brg`,`kd_pr`);

--
-- Indexes for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`kd_tr`),
  ADD KEY `kd_brg` (`kd_brg`),
  ADD KEY `kd_brg_2` (`kd_brg`),
  ADD KEY `kd_mitra` (`kd_mitra`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `id_jabatan` (`id_jabatan`),
  ADD KEY `id_kelompok` (`id_kelompok`);

--
-- Indexes for table `kelompok`
--
ALTER TABLE `kelompok`
  ADD PRIMARY KEY (`id_kelompok`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`kd_mitra`),
  ADD KEY `kd_brg` (`kd_brg`);

--
-- Indexes for table `tr_permintaan`
--
ALTER TABLE `tr_permintaan`
  ADD PRIMARY KEY (`kd_pr`),
  ADD KEY `kd_brg` (`kd_brg`),
  ADD KEY `kd_mitra` (`kd_mitra`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `barang_gudang`
--
ALTER TABLE `barang_gudang`
  MODIFY `kd_brg` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  MODIFY `kd_tr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  MODIFY `kd_tr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kelompok`
--
ALTER TABLE `kelompok`
  MODIFY `id_kelompok` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mitra`
--
ALTER TABLE `mitra`
  MODIFY `kd_mitra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD CONSTRAINT `barang_keluar_ibfk_2` FOREIGN KEY (`kd_brg`) REFERENCES `barang_gudang` (`kd_brg`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `barang_keluar_ibfk_4` FOREIGN KEY (`kd_pr`) REFERENCES `tr_permintaan` (`kd_pr`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD CONSTRAINT `barang_masuk_ibfk_1` FOREIGN KEY (`kd_brg`) REFERENCES `barang_gudang` (`kd_brg`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `barang_masuk_ibfk_2` FOREIGN KEY (`kd_mitra`) REFERENCES `mitra` (`kd_mitra`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `karyawan_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `karyawan_ibfk_2` FOREIGN KEY (`id_kelompok`) REFERENCES `kelompok` (`id_kelompok`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mitra`
--
ALTER TABLE `mitra`
  ADD CONSTRAINT `mitra_ibfk_1` FOREIGN KEY (`kd_brg`) REFERENCES `barang_gudang` (`kd_brg`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tr_permintaan`
--
ALTER TABLE `tr_permintaan`
  ADD CONSTRAINT `tr_permintaan_ibfk_2` FOREIGN KEY (`kd_brg`) REFERENCES `barang_gudang` (`kd_brg`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tr_permintaan_ibfk_3` FOREIGN KEY (`kd_mitra`) REFERENCES `mitra` (`kd_mitra`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
