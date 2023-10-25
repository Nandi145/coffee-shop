-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Okt 2023 pada 13.41
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngopi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berat`
--

CREATE TABLE `berat` (
  `id` int(11) NOT NULL,
  `berat` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `harga_satuan` int(11) NOT NULL,
  `jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `berat`
--

INSERT INTO `berat` (`id`, `berat`, `nama`, `harga`, `jumlah`, `status`, `date`, `harga_satuan`, `jenis`) VALUES
(3, 'RED VELVET', 'Gibran', 5000, 5, 'Dicetak', '23-Oct-2023', 1000, 'DESSERT'),
(4, 'KATSUDON', 'Gibran', 1300000, 100, 'Dicetak', '23-Oct-2023', 13000, 'LAUNCH'),
(5, 'PASTA', 'Chylla', 30000, 2, 'Dicetak', '25-Oct-2023', 15000, 'LAUNCH'),
(6, 'KIMCHI', '', 15000, 3, 'Dibuat', '25-Oct-2023', 5000, 'LAUNCH');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cair`
--

CREATE TABLE `cair` (
  `id` int(11) NOT NULL,
  `cair` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `harga_satuan` int(11) NOT NULL,
  `jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `cair`
--

INSERT INTO `cair` (`id`, `cair`, `nama`, `harga`, `jumlah`, `status`, `date`, `harga_satuan`, `jenis`) VALUES
(4, 'LATTE', 'Gibran', 10000, 5, 'Selesai', '23-Oct-2023', 2000, 'KOPI'),
(6, 'LATTE', 'Sisca', 14000, 7, 'Dicetak', '24-Oct-2023', 2000, 'KOPI'),
(8, 'AMERICANO', 'Dadangg', 12000, 12, 'Dicetak', '24-Oct-2023', 1000, 'KOPI'),
(9, 'CAPPUCINO', 'Dadangg', 48000, 32, 'Dicetak', '24-Oct-2023', 1500, 'KOPI'),
(10, 'CAPPUCINO', 'Gibran', 135000, 90, 'Dicetak', '24-Oct-2023', 1500, 'KOPI'),
(11, 'JUS MANGGA', 'Dadangg', 180000, 90, 'Dicetak', '24-Oct-2023', 2000, 'MINUMAN'),
(14, 'JUS MANGGA', 'Gibran', 82000, 41, 'Dibuat', '24-Oct-2023', 2000, 'MINUMAN'),
(15, 'JUS MANGGA', 'Wibuu', 174000, 87, 'Dibuat', '24-Oct-2023', 2000, 'MINUMAN'),
(16, 'LATTE', 'Dadangg', 4000, 2, 'Dibuat', '24-Oct-2023', 2000, 'KOPI'),
(17, 'ESPRESSO', 'Wibuu', 294000, 98, 'Dibuat', '24-Oct-2023', 3000, 'KOPI'),
(18, 'CAPPUCINO', 'Yandi', 4500, 3, 'Dibuat', '24-Oct-2023', 1500, 'KOPI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dessert`
--

CREATE TABLE `dessert` (
  `id` int(11) NOT NULL,
  `dessert` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dessert`
--

INSERT INTO `dessert` (`id`, `dessert`, `harga`, `img`) VALUES
(2, 'RED VELVET', 1000, 'Red Velvet Cheesecake.jpg'),
(3, 'MATCHA', 3000, 'Matcha Zebra Cheesecake.jpg'),
(4, 'CROFFLE', 2500, 'Croffles (Croissant Waffles).jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `drink`
--

CREATE TABLE `drink` (
  `id` int(11) NOT NULL,
  `minum` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `drink`
--

INSERT INTO `drink` (`id`, `minum`, `harga`, `img`) VALUES
(2, 'JUS MANGGA', 2000, 'Best Fuzzy Navel Cocktail Recipe - CopyKat Recipes.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `makanan` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `harga_satuan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kopi`
--

CREATE TABLE `kopi` (
  `id` int(11) NOT NULL,
  `kopi` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kopi`
--

INSERT INTO `kopi` (`id`, `kopi`, `harga`, `img`) VALUES
(2, 'ESPRESSO', 3000, 'espreso.jpg'),
(3, 'CAPPUCINO', 1500, 'Cappuccino.jpg'),
(4, 'LATTE', 2000, 'Holiday Spiced Café Au Lait - The Local Palate.jpg'),
(5, 'AMERICANO', 1000, 'Iced Americano.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `launch`
--

CREATE TABLE `launch` (
  `id` int(11) NOT NULL,
  `launch` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `launch`
--

INSERT INTO `launch` (`id`, `launch`, `harga`, `img`) VALUES
(1, 'KIMCHI', 5000, 'Quick Kimchi Recipe _ A Quick & Easy Recipe for Beginners - Seonkyoung Longest.jpg'),
(2, 'KATSUDON', 13000, 'Chicken Katsudon Recipe.jpg'),
(3, 'PASTA', 15000, 'Pasta Night Package.jpg'),
(4, 'RAMEN', 16500, 'Recettes de bols-repas _ smoothie, ramen et poke _ Zeste.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `pesanan` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `harga_satuan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `pesanan`, `nama`, `harga`, `jumlah`, `status`, `date`, `harga_satuan`) VALUES
(1, 'AMERICANO', 'Gibran', 4000, 4, 'Selesai', '16-Oct-2023', 1000),
(2, 'AMERICANO', 'Gibran', 1000, 1, 'Dibuat', '18-Oct-2023', 1000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `selesai`
--

CREATE TABLE `selesai` (
  `id` int(11) NOT NULL,
  `pesanan` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `selesai`
--

INSERT INTO `selesai` (`id`, `pesanan`, `nama`, `harga`, `jumlah`, `date`, `jenis`) VALUES
(6, 'LATTE', 'Sisca', 14000, 7, '24-Oct-2023', 'KOPI'),
(7, 'ESPRESSO', 'andora', 27000, 9, '24-Oct-2023', 'KOPI'),
(8, 'JUS MANGGA', 'oin', 36000, 18, '24-Oct-2023', 'MINUMAN'),
(9, 'JUS MANGGA', 'Dandi', 2000000, 1000, '24-Oct-2023', 'MINUMAN'),
(10, 'JUS MANGGA', 'oin', 36000, 18, '24-Oct-2023', 'MINUMAN'),
(11, 'PASTA', 'Chylla', 30000, 2, '25-Oct-2023', 'LAUNCH');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL,
  `photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `role`, `photo`) VALUES
(1, 'Gibran', 'gibran135@yahoo.com', '$2y$10$4OQANYt9pU2sCre.aILhcu3O9DRNvzcPaGe6CK4zCcAs0iIdBHdxa', 'admin', 'gbrn.jpg'),
(2, 'Sisca', 'pixiesd63@gmail.com', '$2y$10$jMjhpq/RdK0zmeKn.6dfke6iQLVU3LbYYAYvqoRyDxe7jgoBEdJsG', 'barista', 'sisca.jpg'),
(5, 'Andira', 'luckysnow995@gmail.com', '$2y$10$kzAUL5g6uAMM1Ho1FlvjGeXL60xGqI3z0NMOtfakEVJOJFs1iKScC', 'kasir', 'andira.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berat`
--
ALTER TABLE `berat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cair`
--
ALTER TABLE `cair`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dessert`
--
ALTER TABLE `dessert`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `drink`
--
ALTER TABLE `drink`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kopi`
--
ALTER TABLE `kopi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `launch`
--
ALTER TABLE `launch`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `selesai`
--
ALTER TABLE `selesai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berat`
--
ALTER TABLE `berat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `cair`
--
ALTER TABLE `cair`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `dessert`
--
ALTER TABLE `dessert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `drink`
--
ALTER TABLE `drink`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kopi`
--
ALTER TABLE `kopi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `launch`
--
ALTER TABLE `launch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `selesai`
--
ALTER TABLE `selesai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
