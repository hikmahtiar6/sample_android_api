-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 12, 2016 at 04:36 PM
-- Server version: 5.7.12-0ubuntu1.1
-- PHP Version: 5.6.23-2+deb.sury.org~xenial+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `android_sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `content`, `image`, `date_created`) VALUES
(1, 'Tutorial Membuat index.php', 'Content itself is what the end-user derives value from. Thus, "content" can refer to the information provided through the medium, the way in which the information was presented, as well as the added features included in the medium in which that information was delivered. The medium however, provides little to no value to the end-user without the information and experiences that make up the content. Communication theory philosopher Marshall McLuhan famously coined the phrase, "The medium is the message."[3] In the case of content, the channel through which information is delivered, the "medium", affects how the end user perceives content, the "message".', 'http://google.com/test', '2016-07-09 06:23:11'),
(2, 'Ciri-ciri Blogger sukses', 'berikut ini cara untuk menjadi loger sukses, cekidot yaa....', '', '2016-07-09 11:20:37'),
(3, 'Membuat htacess security', 'The author, producer, or publisher of an original source of information or experiences may or may not be directly responsible for the entire value that they attain as content in a specific context. For example, part of an original article (such as a headline from a news story) may be rendered on another web page displaying the results of a user\'s search engine query grouped with headlines from other news publications and related advertisements. The value that the original headline has in this group of query results from the search engine as a medium may be very different from the value that it had as message content in its original article.\n\nContent also leads to influencing other people in creating their own content, sometimes in a way that the original author didn\'t or couldn\'t plan or imagine. This feature adding the option of user innovation in a medium means users can develop their own content from existing content.', 'http://google.com/test', '2016-07-09 06:23:11'),
(4, 'What is bloger', 'berikut ini cara untuk menjadi loger sukses, cekidot yaa....Blogger is a blog-publishing service that allows multi-user blogs with time-stamped entries. It was developed by Pyra Labs, which was bought by Google in 2003. Generally, the blogs are hosted by Google at a subdomain of blogspot.com. Blogs can also be hosted in the registered custom domain of the blogger (like www.example.com).[4] A user can have up to 100 blogs per account.[5]\n\nUp until May 1, 2010, Blogger allowed users to publish blogs on other hosts, via FTP. All such blogs had (or still have) to be moved to Google\'s own servers, with domains other than blogspot.com allowed via custom URLs.[6] Unlike WordPress.com, Blogger allows its users to use their own domain free of charge, while WordPress.com charges around $13 to use a custom domain.[7] Blogger cannot be installed on a web server. One has to use DNS facilities to redirect a custom URL to a blogspot domain.', '', '2016-07-09 11:20:37'),
(5, 'Tutorial membuat CRUD Android dengan Android Studio', 'Traditionally, content was edited and tailored for the public through news editors, authors, and other kinds of content creators. However, not all information content requires creative authoring or editing. Through recent technological developments, truth is found in philosopher Marshall McLuhan\'s idea of a global village; new technologies allow for instantaneous movement of information from every corner to every point at the same time[4] has caused the globe to be contracted into a village by electric technology,[5] such as mobile phones and automated sensors. These new technologies can record events anywhere for publishing and converting in order to potentially reach a global audience on channels such as YouTube. Such recorded or transmitted information and visuals can be referred to as content. Content is no longer a product of only reputable sources; new technology has made primary sources of content more readily available to all. For example, a video of a politician giving a speech compared to an article written by a reporter who witnessed the speech.', 'http://google.com/test', '2016-07-09 06:23:11'),
(6, 'Pemograman PHP idaman', 'cara membuat index.php pertama-tama perlu mengerti bla bla bla..............', 'http://google.com/test', '2016-07-09 06:23:11'),
(7, 'Ipa luar biasa sekali', 'While marketing and media interests have broadly adopted the term "content", some writers complain about the term\'s inherent ambiguity.[6][7] Others assert that the term devalues the work of authors,[8][9] and still others argue that it overemphasizes the work of authors.[10]', 'http://google.com/test', '2016-07-09 06:23:11'),
(8, 'Cara membuat kontent', 'Media production and delivery technology may potentially enhance the value of content by formatting, filtering, and combining original sources of content for new audiences with new contexts. The greatest value for a given source of content for a specific audience is often found through such electronic reworking of content as dynamic and real-time as the trends that fuel its interest. Less emphasis on value from content stored for possible use in its original form, and more emphasis on rapid re-purposing, reuse, and redeployment has led many publishers and media producers to view their primary function less as originators and more as transformers of content. Thus, one finds out that institutions, that used to focus on publishing printed materials, are now publishing both databases and software to combine content from various sources for a wider-variety of audiences.', 'http://google.com/test', '2016-07-09 06:23:11'),
(9, 'Menghitung Jumlah String atau Karakter', 'Menghitung jumlah string atau karakter yang terdapat pada suatu variabel menggunakan fungsi strlen(). Dengan fungsi ini kita bisa mengetahui jumlah karakter pada suatu kata atau kalimat, dihitung termasuk spasi kosong.\nSintaksnya adalah : strlen (string $string);\nstring adalah modus yang akan dihitung panjangnya atau jumlah karakternya.\nContoh script:\n<?PHP\n$kalimat1=”Saya sedang makan”;\n$kalimat2=”Sayasedangmakan”;\n$hasil1=strlen($kalimat1);\n$hasil2=strlen($kalimat2);\necho “Jumlah karakter 1: $kalimat1”;\necho “Jumlah karakter 2: $kalimat2”;\n?>\nHasil dari run script tersebut adalah:\nJumlah karakter 1: 17\nJumlah karakter 2: 15', 'hththt', '2016-07-11 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`) VALUES
(1, 'admin', 'admin', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
