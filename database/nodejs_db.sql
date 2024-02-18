-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 14 Nov 2023 pada 04.34
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nodejs_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` int DEFAULT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_contact` int NOT NULL,
  `customer_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `customer_name`, `customer_email`, `customer_contact`, `customer_address`) VALUES
(NULL, 'Ahmad fadli', 'fadli@gmail.com', 62812755, 'tugas bu lia'),
(NULL, 'ahmad fadli', 'fadli@gmail.com', 62812755, 'tugas bu lia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `logingh`
--

CREATE TABLE `logingh` (
  `id` int NOT NULL,
  `name` varchar(70) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `logingh`
--

INSERT INTO `logingh` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'fadli', 'fadli', 'mobileayam@gmail.com', '$2y$10$G50KZv5lwW/kdhSjq5zBnufsVpBYRwrMR.hlHx7CU8XJ/pVqmEkfe'),
(2, 'fadli123', 'fadli123', 'fadli@gmail.com', '$2y$10$fYfHXB7V.uPnByXvFFVyC.8S6moTP8pNoRnye4JRP3mP5FCpxLdeW'),
(3, 'afadli', 'afadli', 'fadli@gmail.com', '$2y$10$rEqbyPWSl5tORHz//CIJe.jUJJVERAQFWFWxBxpjfR5p981Qc.bbi'),
(4, 'ahmadfadli', 'ahmadfadli', 'ahmad@gmail.com', '$2y$10$1s6/ORlsvzjUdCvNrdkN0OFNG5oDkm5SQofiqnbYH2BJG0rDnksH2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblusers`
--

CREATE TABLE `tblusers` (
  `ID` int NOT NULL,
  `FirstName` varchar(200) DEFAULT NULL,
  `LastName` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Address` mediumtext,
  `CreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_alat`
--

CREATE TABLE `tb_alat` (
  `idtanaman` int NOT NULL,
  `nmtanaman` varchar(50) NOT NULL,
  `metodetanaman` char(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `jumlahtanaman` int NOT NULL,
  `ukurantanaman` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_alat`
--

INSERT INTO `tb_alat` (`idtanaman`, `nmtanaman`, `metodetanaman`, `jumlahtanaman`, `ukurantanaman`) VALUES
(1, 'mawar', 'Hidroponik', 2, 10);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `logingh`
--
ALTER TABLE `logingh`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `tb_alat`
--
ALTER TABLE `tb_alat`
  ADD PRIMARY KEY (`idtanaman`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `logingh`
--
ALTER TABLE `logingh`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
