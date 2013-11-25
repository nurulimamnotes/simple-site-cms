-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Apr 13, 2010 at 09:10 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `simple-site2`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `buku_tamu`
-- 

CREATE TABLE `buku_tamu` (
  `id` int(11) NOT NULL auto_increment,
  `nama` varchar(25) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `pesan` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `buku_tamu`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `produk_kami`
-- 

CREATE TABLE `produk_kami` (
  `id` int(11) NOT NULL auto_increment,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `produk_kami`
-- 

