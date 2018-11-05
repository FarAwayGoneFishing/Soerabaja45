--
-- Database: `db_webcek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` varchar(10) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` int(11) NOT NULL,
  `cabang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_digital offset`
--

CREATE TABLE `tb_digital offset` (
  `id_dig offset` varchar(10) NOT NULL,
  `nama_produk` text NOT NULL,
  `jenis_produk` text NOT NULL,
  `lands/potrait` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_digital printing`
--

CREATE TABLE `tb_digital printing` (
  `id_dig printing` varchar(50) NOT NULL,
  `nama_produk` text NOT NULL,
  `jenis_produk` text NOT NULL,
  `lands/potrait` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_harga`
--

CREATE TABLE `tb_harga` (
  `id_dig_offset` varchar(10) NOT NULL,
  `id_offset` varchar(10) NOT NULL,
  `id_harga` varchar(10) NOT NULL,
  `harga` int(11) NOT NULL,
  `id_kertas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kertas`
--

CREATE TABLE `tb_kertas` (
  `id_dig_offset` varchar(10) NOT NULL,
  `id_offset` varchar(10) NOT NULL,
  `id_kertas` varchar(10) NOT NULL,
  `kertas` varchar(20) NOT NULL,
  `ukuran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_offset`
--

CREATE TABLE `tb_offset` (
  `id_offset` varchar(10) NOT NULL,
  `nama_produk` text NOT NULL,
  `jenis_produk` text NOT NULL,
  `lands/potrait` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `id_pesan` varchar(10) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `id_harga` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `estimasi` varchar(20) NOT NULL,
  `status_bayar` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `desain_yang_diminta` text NOT NULL,
  `tambah_warna` int(11) NOT NULL,
  `jasa_desain` varchar(5) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(10) NOT NULL,
  `nama_user` varchar(20) NOT NULL,
  `no_telp` int(11) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_digital offset`
--
ALTER TABLE `tb_digital offset`
  ADD PRIMARY KEY (`id_dig offset`);

--
-- Indexes for table `tb_digital printing`
--
ALTER TABLE `tb_digital printing`
  ADD PRIMARY KEY (`id_dig printing`);

--
-- Indexes for table `tb_harga`
--
ALTER TABLE `tb_harga`
  ADD PRIMARY KEY (`id_harga`),
  ADD KEY `id_produk` (`id_dig_offset`);

--
-- Indexes for table `tb_kertas`
--
ALTER TABLE `tb_kertas`
  ADD PRIMARY KEY (`id_kertas`);

--
-- Indexes for table `tb_offset`
--
ALTER TABLE `tb_offset`
  ADD PRIMARY KEY (`id_offset`);

--
-- Indexes for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_digital offset`
--
ALTER TABLE `tb_digital offset`
  ADD CONSTRAINT `tb_digital offset_ibfk_1` FOREIGN KEY (`id_dig offset`) REFERENCES `tb_kertas` (`id_kertas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_harga`
--
ALTER TABLE `tb_harga`
  ADD CONSTRAINT `tb_harga_ibfk_1` FOREIGN KEY (`id_harga`) REFERENCES `tb_digital offset` (`id_dig offset`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_kertas`
--
ALTER TABLE `tb_kertas`
  ADD CONSTRAINT `tb_kertas_ibfk_1` FOREIGN KEY (`id_kertas`) REFERENCES `tb_offset` (`id_offset`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_offset`
--
ALTER TABLE `tb_offset`
  ADD CONSTRAINT `tb_offset_ibfk_1` FOREIGN KEY (`id_offset`) REFERENCES `tb_harga` (`id_harga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD CONSTRAINT `tb_pemesanan_ibfk_1` FOREIGN KEY (`id_pesan`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
