-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jul 25, 2017 at 10:07 AM
-- Server version: 5.5.25
-- PHP Version: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `db_online`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `tamu`
-- 

CREATE TABLE `tamu` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `komentar` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `tamu`
-- 

INSERT INTO `tamu` (`id`, `nama`, `alamat`, `email`, `komentar`) VALUES 
(1, 'STEKOM SEMARANG', 'jl. majapahit 605 semarang', 'info@stekom.ac.id', 'test.. '),
(1, 'sekolah tinggi elektronika kom', 'jl. majapahit 605 semarang', 'info@stekom.ac.id', 'test.. ');
