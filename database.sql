create database crud_db;

use crud_db;

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `nama_barang` varchar(100),
  `kode_barang` int(100),
  `jumlah_barang` int(15),
  PRIMARY KEY  (`id`)
);