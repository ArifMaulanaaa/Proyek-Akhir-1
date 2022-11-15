-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2022 at 05:10 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gameshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `nt`
--

CREATE TABLE `nt` (
  `id` int(11) NOT NULL,
  `nama_game` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori` text NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar_game` varchar(255) NOT NULL,
  `product_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nt`
--

INSERT INTO `nt` (`id`, `nama_game`, `deskripsi`, `kategori`, `harga`, `gambar_game`, `product_status`) VALUES
(2, 'Mortal Kombat 11', '....', 'Switch - Disc', 349, '203-mk11.jpg', 0),
(3, 'Gear Club Unlimited 2: Porsche Edition', '...', 'Switch - Disc', 429, '429-gcu2.jpg', 0),
(4, 'BloodStained: Ritual of The Night', '...', 'Switch - Disc', 239, '107-lgp.jpg', 0),
(5, 'Super Mario: Odyssey', '...', 'Switch - Disc', 429, '204-smo.jpg', 0),
(6, 'Pokemon Scarlet (Japan Version)', '...', 'Switch - Disc', 400, '258-pss.jpg', 0),
(7, 'The LEGO Movie Videogame 2', '...', 'Switch - Disc', 255, '849-tlm2.jpg', 0),
(8, 'Mario + Rabbits Kingdom Battle', '...', 'Switch - Disc', 345, '920-mrkb.jpg', 0),
(9, 'Super Smash Bros: Ultimate', '...', 'Switch - Digital', 559, '783-ssbu.jpg', 0),
(10, 'De Blob', '...', 'Switch - Disc', 229, '295-db.jpg', 0),
(11, 'Cars 3:  Driven to Win', '...', 'Switch - Digital', 159, '862-cars 3.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ps4`
--

CREATE TABLE `ps4` (
  `id` int(11) NOT NULL,
  `nama_game` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori` text NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar_game` varchar(255) NOT NULL,
  `product_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ps4`
--

INSERT INTO `ps4` (`id`, `nama_game`, `deskripsi`, `kategori`, `harga`, `gambar_game`, `product_status`) VALUES
(3, 'God of War', '...', 'PS4 - Disc', 229, '449-gow.jpg', 0),
(8, 'Okami', '....', 'PS4 - Disc', 247, '442-o.jpg', 0),
(9, 'Deadpool', '....', 'PS4 - Disc', 244, '92-dp.jpg', 0),
(10, 'Digimon Survive', '....', 'PS4 - Disc', 339, '810-dsg.jpg', 0),
(11, 'Horizon: Zero Dawn', '....', 'PS4 - Disc', 459, '167-hzd.jpg', 0),
(12, 'Spiderman: Miles Morales', '....', 'PS4 - Disc', 442, '806-sp.jpg', 0),
(13, 'The Last of Us : Part II', '...', 'PS4 - Disc', 549, '1-tlofp2.jpg', 0),
(14, 'Need for Speed Heat', '...', 'PS4 - Digital', 789, '393-nfsh.jpg', 0),
(15, 'Maneater', '...', 'PS4 - Digital', 459, '973-man.jpg', 0),
(16, 'Battlefield 2042', '...', 'PS4 - Disc', 569, '318-bf2042ps4.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ps5`
--

CREATE TABLE `ps5` (
  `id` int(11) NOT NULL,
  `nama_game` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori` text NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar_game` varchar(255) NOT NULL,
  `product_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ps5`
--

INSERT INTO `ps5` (`id`, `nama_game`, `deskripsi`, `kategori`, `harga`, `gambar_game`, `product_status`) VALUES
(1, 'BattleField 2042', '...', 'PS5 - Disc', 480, '498-bf2042.jpg', 0),
(3, 'Death Strainding: Directur Cut', '...', 'PS5 - Disc', 789, '534-dsdc.jpg', 0),
(4, 'FIFA 23', '...', 'PS5 - Disc', 799, '465-ff23ps5.jpg', 0),
(5, 'The Last of Us: Part I', '...', 'PS5 - Disc', 659, '902-tlofp1.jpg', 0),
(6, 'Road 96', '...', 'PS5 - Disc', 342, '777-r96.jpg', 0),
(7, 'Wreckfest', '...', 'PS5 - Disc', 458, '866-wf.jpg', 0),
(8, 'Ratchet and Clank: Rift Apart', '...', 'PS5 - Disc', 689, '365-racra.jpg', 0),
(9, 'Sony Destruction All-Star', '...', 'PS5 - Disc', 547, '210-sdas.jpg', 0),
(10, 'Returnal', '...', 'PS5 - Disc', 449, '372-r.jpg', 0),
(11, 'Klonoa', '...', 'PS5 - Disc', 329, '914-klonoa.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` set('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'user', 'user', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `xbox1`
--

CREATE TABLE `xbox1` (
  `id` int(11) NOT NULL,
  `nama_game` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori` text NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar_game` varchar(255) NOT NULL,
  `product_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xbox1`
--

INSERT INTO `xbox1` (`id`, `nama_game`, `deskripsi`, `kategori`, `harga`, `gambar_game`, `product_status`) VALUES
(1, 'Gears 5', '.....', 'Xbox One - Disc', 258, '711-g5.jpg', 0),
(6, 'Halo Infinity', '...', 'Xbox One - Disc', 449, '285-hi.jpg', 0),
(7, 'Minecraft', '...', 'Xbox One - Disc', 368, '443-mc.jpg', 0),
(8, 'Metro Exodus', '...', 'Xbox One - Disc', 319, '144-me.jpg', 0),
(9, 'Evil Dead The Game', '...', 'Xbox One - Disc', 247, '680-ed.jpg', 0),
(10, 'Forza Horizon 5', '...', 'Xbox One - Disc', 679, '470-fh5.jpg', 0),
(11, 'FIFA 19', '....', 'Xbox One - Disc', 339, '701-ff19.jpg', 0),
(12, 'Star Wars: Jeda Fallen Orders', '...', 'Xbox One - Digital', 449, '368-swjfo.jpg', 0),
(13, 'FIFA 22', '...', 'Xbox One - Digital', 889, '884-ff23xb1.jpg', 0),
(14, 'Lego Star Wars: The Skywalker Saga', '...', 'Xbox  One - Disc', 450, '407-lswtss.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `xboxx`
--

CREATE TABLE `xboxx` (
  `id` int(11) NOT NULL,
  `nama_game` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori` text NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar_game` varchar(255) NOT NULL,
  `product_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xboxx`
--

INSERT INTO `xboxx` (`id`, `nama_game`, `deskripsi`, `kategori`, `harga`, `gambar_game`, `product_status`) VALUES
(5, 'Resident Evil: Village', '....', 'Xbox X - Digital', 459, '344-rev.jpg', 0),
(6, 'Elden Ring', '...', 'Xbox X - Digital', 849, '692-er.jpg', 0),
(7, 'It Takes Two', '...', 'Xbox X - Disc', 559, '649-itt.jpg', 0),
(8, 'The Elder Scrolls V: Skyrim Annivesary Edition', '...', 'Xbox X - Digital', 554, '449-tesv.jpg', 0),
(9, 'The Medium', '...', 'Xbox X - Disc', 423, '626-tm.jpg', 0),
(10, 'Dying Light 2: Stay Human', '...', 'Xbox X - Digital', 555, '145-dl2sh.jpg', 0),
(11, 'Battlefield 2042', '...', 'Xbox X - Digital', 845, '727-bf2042xb.jpg', 0),
(12, 'The Quary', '...', 'Xbox X - Disc', 550, '335-tq.jpg', 0),
(13, 'Scarlet Nexus', '...', 'Xbox  X - Digital', 419, '557-sn.jpg', 0),
(14, 'Back 4 Blood', '...', 'Xbox X - Digital', 409, '438-b4b.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nt`
--
ALTER TABLE `nt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ps4`
--
ALTER TABLE `ps4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ps5`
--
ALTER TABLE `ps5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xbox1`
--
ALTER TABLE `xbox1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xboxx`
--
ALTER TABLE `xboxx`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nt`
--
ALTER TABLE `nt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ps4`
--
ALTER TABLE `ps4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `ps5`
--
ALTER TABLE `ps5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `xbox1`
--
ALTER TABLE `xbox1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `xboxx`
--
ALTER TABLE `xboxx`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
