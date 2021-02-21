-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20 Feb 2021 pada 05.48
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sea`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblcategories`
--

CREATE TABLE `tblcategories` (
  `categories_id` int(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `AliasName` varchar(30) NOT NULL,
  `parentID` int(10) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '1',
  `admin` int(10) NOT NULL,
  `hexcolor` text NOT NULL,
  `iconpath` text NOT NULL,
  `emptystatepath` text NOT NULL,
  `dashboard` varchar(1) NOT NULL,
  `urlredirection` text NOT NULL,
  `sequeceID` int(10) DEFAULT NULL,
  `createdby` int(10) NOT NULL,
  `createddate` date NOT NULL,
  `updatedby` int(10) NOT NULL,
  `updateddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblcategories`
--

INSERT INTO `tblcategories` (`categories_id`, `Name`, `AliasName`, `parentID`, `active`, `admin`, `hexcolor`, `iconpath`, `emptystatepath`, `dashboard`, `urlredirection`, `sequeceID`, `createdby`, `createddate`, `updatedby`, `updateddate`) VALUES
(1, 'Chapter', 'Chapter', 0, 0, 1, '', '', '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00'),
(2, 'Group', 'Group', 0, 0, 1, '', '', '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00'),
(3, 'Category', 'Category', 0, 0, 1, '', '', '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00'),
(4, 'Menu', 'Menu', 0, 0, 0, '', '', '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00'),
(5, 'Dashboard', 'Dashboard', 4, 0, 0, '', '', '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00'),
(6, 'Admin', 'Admin', 4, 0, 1, '', '', '', '', '', 1, 0, '0000-00-00', 0, '0000-00-00'),
(7, 'Directory', 'Directory', 4, 0, 0, '', '', '', '', '', 2, 0, '0000-00-00', 0, '0000-00-00'),
(8, 'Reports', 'Reports', 4, 0, 0, '', '', '', '', '', 3, 0, '0000-00-00', 0, '0000-00-00'),
(9, 'Sample', 'Sample', 4, 0, 0, '', '', '', '', '', 4, 0, '0000-00-00', 0, '0000-00-00'),
(10, 'Contacts', 'Contacts', 4, 0, 0, '', '', '', '', '', 5, 0, '0000-00-00', 0, '0000-00-00'),
(11, 'Referals', 'Referals', 4, 0, 0, '', '', '', '', '', 6, 0, '0000-00-00', 0, '0000-00-00'),
(12, 'Opportunities', 'Opportunities', 4, 0, 0, '', '', '', '', '', 7, 0, '0000-00-00', 0, '0000-00-00'),
(13, 'IT', 'IT', 2, 0, 0, '', '', '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00'),
(14, 'Food', 'Food', 2, 0, 0, '', '', '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00'),
(15, 'Customer Service', 'Customer Service', 2, 0, 0, '', '', '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00'),
(16, 'Real Estate', 'Real Estate', 3, 0, 0, '', '', '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00'),
(17, 'IT Services', 'IT Services', 3, 0, 0, '', '', '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00'),
(18, 'Food Processing', 'Food Processing', 3, 0, 0, '', '', '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00'),
(19, 'Air Conditioners', 'Air Conditioners', 3, 0, 0, '', '', '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00'),
(20, 'Contact Type', 'Contact Type', 0, 0, 0, '', '', '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00'),
(21, 'Mobile', 'Mobile', 20, 0, 0, '', '', '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00'),
(22, 'Email', 'Email', 20, 0, 0, '', '', '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00'),
(23, 'Whatsapp', 'Whatsapp', 20, 0, 0, '', '', '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00'),
(24, 'Website', 'Website', 20, 0, 0, '', '', '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00'),
(25, 'Twitter', 'Twitter', 20, 0, 0, '', '', '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00'),
(26, 'Facebook', 'Facebook', 20, 0, 0, '', '', '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00'),
(27, 'LinkedIN', 'LinkedIN', 20, 0, 0, '', '', '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00'),
(28, 'Instagram', 'Instagram', 20, 0, 0, '', '', '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00'),
(29, 'Landline', 'Landline', 20, 0, 0, '', '', '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00'),
(30, 'LeftMenu', 'LeftMenu', 0, 0, 0, '', '', '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00'),
(31, 'Expenditure', 'Ependiture', 30, 0, 0, '', '', '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00'),
(32, 'Annual News', 'Annual News', 30, 0, 0, '', '', '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00'),
(33, 'SerialNo', 'SerialNo', 0, 0, 0, '', '', '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00'),
(34, 'Membership', 'Membership', 34, 0, 0, '', '', '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00'),
(35, 'Contact', 'Contact', 34, 0, 0, '', '', '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00'),
(36, 'Opportunities', 'Opportunities', 34, 0, 0, '', '', '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00'),
(37, 'Referals', 'Referals', 34, 0, 0, '', '', '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblcontacts`
--

CREATE TABLE `tblcontacts` (
  `contacts_id` int(10) NOT NULL,
  `contactnumber` varchar(30) NOT NULL,
  `MemberName` varchar(30) NOT NULL,
  `website` text NOT NULL,
  `SEAMember` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblmemberbusinessdetails`
--

CREATE TABLE `tblmemberbusinessdetails` (
  `memberID` int(10) NOT NULL,
  `businessname` varchar(50) NOT NULL,
  `businessdescription` text NOT NULL,
  `Communicationaddress` varchar(30) NOT NULL,
  `Pincode` varchar(30) NOT NULL,
  `City` varchar(30) NOT NULL,
  `businesslogo` varchar(50) NOT NULL,
  `businessbaner` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblmemberchapter`
--

CREATE TABLE `tblmemberchapter` (
  `chapterID` int(10) NOT NULL,
  `memberID` int(10) NOT NULL,
  `chaptername` varchar(30) NOT NULL,
  `chapteralias` varchar(30) NOT NULL,
  `primaryChapter` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblmemberchapter`
--

INSERT INTO `tblmemberchapter` (`chapterID`, `memberID`, `chaptername`, `chapteralias`, `primaryChapter`) VALUES
(1, 160591, 'Hyderabad', 'Hyderabad alias', '0'),
(2, 160591, 'Visakhapatanam', 'Visakhapatanam alias', '0'),
(3, 160591, 'Vijayawada', 'Vijayawada alias', '0'),
(4, 160591, 'Gie', 'Nugraha', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblmembercontact`
--

CREATE TABLE `tblmembercontact` (
  `memberContact_id` int(10) NOT NULL,
  `memberID` int(10) NOT NULL,
  `contacttype` varchar(30) NOT NULL,
  `contactypename` varchar(30) NOT NULL,
  `contactdetail` varchar(30) NOT NULL,
  `externalMemberContact` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblmemberdetails`
--

CREATE TABLE `tblmemberdetails` (
  `memberdetails_id` int(10) NOT NULL,
  `memberID` int(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Gotram` text NOT NULL,
  `memberphoto` text NOT NULL,
  `createddate` date NOT NULL,
  `createdby` int(10) NOT NULL,
  `updateddate` date NOT NULL,
  `updatedby` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblmembergroupdetails`
--

CREATE TABLE `tblmembergroupdetails` (
  `memberGroupDetails_id` int(10) NOT NULL,
  `memberID` int(10) NOT NULL,
  `GroupID` int(10) NOT NULL,
  `groupname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblmemberlogin`
--

CREATE TABLE `tblmemberlogin` (
  `memberlogin_id` int(10) NOT NULL,
  `memberID` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `unqueID` int(6) NOT NULL,
  `memberrole` int(1) NOT NULL,
  `memberstatus` int(1) NOT NULL,
  `createddate` date NOT NULL,
  `createdby` int(10) NOT NULL,
  `updateddate` date NOT NULL,
  `updatedby` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblmemberlogin`
--

INSERT INTO `tblmemberlogin` (`memberlogin_id`, `memberID`, `password`, `unqueID`, `memberrole`, `memberstatus`, `createddate`, `createdby`, `updateddate`, `updatedby`) VALUES
(1, '160591', '160591', 160591, 1, 0, '2021-02-19', 1, '2021-02-19', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblmembermetadata`
--

CREATE TABLE `tblmembermetadata` (
  `memberMetadata_id` int(10) NOT NULL,
  `memberID` int(10) NOT NULL,
  `documenturl` text NOT NULL,
  `youtubevideourl` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblmemberproductdetails`
--

CREATE TABLE `tblmemberproductdetails` (
  `memberProductDetails_id` int(10) NOT NULL,
  `memberID` int(10) NOT NULL,
  `ProductName` varchar(30) NOT NULL,
  `Description` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblreferalopportunity`
--

CREATE TABLE `tblreferalopportunity` (
  `referal_id` int(10) NOT NULL,
  `TypeReferral` varchar(30) NOT NULL,
  `referedbyID` int(10) NOT NULL,
  `contactID` int(10) NOT NULL,
  `status` varchar(30) NOT NULL,
  `torefereredID` int(10) NOT NULL,
  `referalamount` int(10) NOT NULL,
  `finalamount` int(10) NOT NULL,
  `createdby` int(10) NOT NULL,
  `createdate` date NOT NULL,
  `updatedby` int(10) NOT NULL,
  `updatedate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblserialno`
--

CREATE TABLE `tblserialno` (
  `serialno_id` int(10) NOT NULL,
  `typeSerialNo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcategories`
--
ALTER TABLE `tblcategories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Indexes for table `tblmemberchapter`
--
ALTER TABLE `tblmemberchapter`
  ADD PRIMARY KEY (`chapterID`);

--
-- Indexes for table `tblmemberdetails`
--
ALTER TABLE `tblmemberdetails`
  ADD PRIMARY KEY (`memberdetails_id`);

--
-- Indexes for table `tblmemberlogin`
--
ALTER TABLE `tblmemberlogin`
  ADD PRIMARY KEY (`memberlogin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcategories`
--
ALTER TABLE `tblcategories`
  MODIFY `categories_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tblmemberchapter`
--
ALTER TABLE `tblmemberchapter`
  MODIFY `chapterID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblmemberdetails`
--
ALTER TABLE `tblmemberdetails`
  MODIFY `memberdetails_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblmemberlogin`
--
ALTER TABLE `tblmemberlogin`
  MODIFY `memberlogin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
