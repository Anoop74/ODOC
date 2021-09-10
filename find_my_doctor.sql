-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2020 at 06:41 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `find_my_doctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `aid` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`aid`, `did`, `date`, `title`, `description`, `image`) VALUES
(3, 1, '2020-03-21', 'covid-19', 'What is Novel Coronavirus COVID-19\r\n\r\nCOVID-19 is a disease caused by a newly identified coronavirus called SARS-CoV-2. It has been diagnosed in multiple locations worldwide and has received widespread attention from public health authorities and the news media. from public health authorities and the news media. ', 'co.jpg'),
(5, 1, '2020-03-20', 'Coronary angiograms', 'A coronory angiogram is aprocedure that uses xreay imaging to see your heart\"s blood vessals.The test is generally done to see if there is a restriction in blood flow going to the heart.The test is generally done to see if there is a restriction in blood flow going to the heart', '18129.jpg'),
(8, 1, '2020-03-18', 'Bird flu', 'Bird flu, also called avian influenza, is a viral infection that can infect not only birds, but also humans and other animals. Most forms of the virus are restricted to birds. H5N1 is the most common form of bird flu.Bird flu, also called avian influenza, is a viral infection that can infect not only birds, but also humans and other animals. Most forms of the virus are restricted to birds. H5N1 is the most common form of bird flu.', '739881.jpg'),
(9, 9, '2020-03-21', 'virus', 'qwertyuiopasdfghjklzxcvbnmwertyuio\r\npasdfghjkl.sdfghjwertyuidf\r\nghjkertyuiwertyuioq\r\nwertyuiosdfghjkdfghjkwertyuisdfghjkwertyuisdfghjkdfghjkertyuiosdfghjkrtyui', 'o.jpg'),
(10, 1, '2020-03-21', 'ff', 'ffsf', 'b2.jpg'),
(11, 3, '2020-03-21', 'ss', 'ss', 'c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `consultation`
--

CREATE TABLE `consultation` (
  `cid` int(11) NOT NULL,
  `id` varchar(20) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `symptoms` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consultation`
--

INSERT INTO `consultation` (`cid`, `id`, `patient_id`, `doctor_id`, `symptoms`, `date`, `status`) VALUES
(1, '1--1549', 1, 1, 'dddd', '2020-03-17', 'pending'),
(2, '1-1-5597', 1, 1, 'fever,headache', '2020-03-19', 'pending'),
(3, '1-2-4609', 1, 1, 'fever', '2020-03-23', 'pending'),
(4, '1-3-6218', 1, 1, 'fever', '2020-03-23', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Anuroop', 'anz@gmail.com', 'service charge', 'pharmacy is asking for service charge'),
(2, 'Anuroop', 'anz@gmail.com', 'service charge', 'bad'),
(3, 'babu', 'bau@gamail.com', 'wqrwret', 'wrweerterterr');

-- --------------------------------------------------------

--
-- Table structure for table `diet`
--

CREATE TABLE `diet` (
  `id` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `date` date NOT NULL,
  `about` varchar(50) NOT NULL,
  `description` varchar(300) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diet`
--

INSERT INTO `diet` (`id`, `did`, `date`, `about`, `description`, `image`) VALUES
(2, 1, '2020-03-18', 'Heart-healthy diet', '1. Control your portion size\r\n2. Eat more vegetables and fruits\r\n3. Select whole grains\r\n4. Limit unhealthy fats\r\n5. Choose low-fat protein sources', 'download.jpg'),
(3, 1, '2020-03-18', 'healthy food', 'tunafish,salmon', 'cs-Heart-Healthy-Foods-to-Include-in-Your-Diabetes-Diet-722x406.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_details`
--

CREATE TABLE `doctor_details` (
  `id` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `day` varchar(100) NOT NULL,
  `from_time` varchar(20) NOT NULL,
  `to_time` varchar(20) NOT NULL,
  `max_token` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_details`
--

INSERT INTO `doctor_details` (`id`, `did`, `day`, `from_time`, `to_time`, `max_token`) VALUES
(1, 1, 'monday,tuesday,wednesday', '1pm', '4pm', '30'),
(2, 2, 'sunday,monday,tuesday,wednesday,thursday,friday,saturday', '1pm', '6pm', '60'),
(3, 3, 'sunday,monday,tuesday', '9am', '1pm', '60'),
(4, 9, 'wednesday,thursday,friday,saturday', '9am', '11am', '30'),
(5, 5, 'sunday,monday,tuesday,wednesday,thursday,friday,saturday', '1pm', '6pm', '30'),
(6, 6, 'wednesday,thursday,friday,saturday', '9am', '1pm', '60'),
(7, 4, 'sunday,monday,tuesday,wednesday', '1pm', '4pm', '30'),
(8, 12, 'sunday,monday,tuesday,wednesday,thursday,friday,saturday', '9am', '1pm', '60'),
(9, 7, 'monday,tuesday,wednesday,thursday', '2pm', '6pm', '60'),
(10, 8, 'monday,tuesday,thursday', '2pm', '4pm', '30'),
(11, 10, 'sunday,monday,wednesday,thursday,saturday', '9am', '4pm', '100'),
(12, 11, 'sunday,monday,tuesday,wednesday,thursday,friday,saturday', '9am', '2pm', '60');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_registration`
--

CREATE TABLE `doctor_registration` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `specialization` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone number` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `upload_certificate` varchar(30) NOT NULL,
  `image` varchar(500) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_registration`
--

INSERT INTO `doctor_registration` (`id`, `name`, `specialization`, `age`, `gender`, `address`, `phone number`, `email`, `upload_certificate`, `image`, `qualification`, `username`, `password`, `status`) VALUES
(1, 'shavad', 'CARDIOLOGY', 29, 'male', 'Pthiyangadi', 21474836, 'qwer@gmail.co', 'IMG-20200315-WA0089.jpg', 't1.jpg', 'MBBS', 'sawad', '1234', 'approved'),
(2, 'Nithul', 'CARDIOLOGY', 29, 'male', 'Thalipparamb', 987654321, 'qwe@gmail.com', 'IMG-20200315-WA0089.jpg', 't3.jpg', 'MBBS,MD', 'nithul', '123', 'approved'),
(3, 'Nabeel', 'OPHTHALMOLOGY', 26, 'male', 'Muttam', 2147483647, 'we@gmail.com', 'IMG-20200315-WA0089.jpg', 'Dr. Vishal K Singh_250×280.jpg', 'MBBS', 'nabeel', '123', 'approved'),
(4, 'Muneeb', 'ENT', 45, 'male', 'muttam', 2147483647, '12@gmail.com', 'IMG-20200315-WA0089.jpg', 'Saurabh_250×280.jpg', 'MBBS', 'muneeb', '123', 'approved'),
(5, 'Shahana', 'GYNECOLOGY', 25, 'female', 'Pilathara', 1234567891, 'eq@gmail.com', 'IMG-20200315-WA0089.jpg', 'about-me.jpg', 'MBBS', 'shahana', '123', 'approved'),
(6, 'Rakshana', 'GYNECOLOGY', 29, 'female', 'pilathara', 2147483647, '234@gmail.com', 'IMG-20200315-WA0089.jpg', 'Dr. Esha Kaul_250×280.jpg', 'MBBS', 'rakshana', '123', 'approved'),
(7, 'Adarsh', 'GENERAL SURGERY', 28, 'male', 'pilathara', 2147483647, '123@gmail.com', 'IMG-20200315-WA0089.jpg', '250×280_Vasudevan.jpg', 'MBBS', 'adarsh', '123', 'approved'),
(8, 'Hisana', 'GENERAL SURGERY', 24, 'female', 'pilathara', 2147483647, 'fsfg@gmail.com', 'IMG-20200315-WA0089.jpg', 't4.jpg', 'MBBS', 'hisana', '1234', 'approved'),
(9, 'Antony', 'OPHTHALMOLOGY', 29, 'male', 'pilathara', 2147483647, 'ghgh@gmail.com', 'IMG-20200315-WA0089.jpg', 'Dr. Anil Prasad Bhatt_250×280.jpg', 'MBBS', 'antony', '1234', 'approved'),
(10, 'Thalha', 'ORTHOPEDIC', 23, 'male', 'mattol', 1234567890, 'ss@gmail.com', 'IMG-20200315-WA0089.jpg', 'risking-everything-to-become-a-doctor-jirayut-new-latthivongskorn.jpg', 'MBBS', 'thalha', '1234', 'approved'),
(11, 'Shameema', 'ORTHOPEDIC', 24, 'female', 'pilathara', 2147483647, 'df@gmail.com', 'IMG-20200315-WA0089.jpg', 'Dr. Jyoti Mishra_250×280.jpg', 'MBBS', 'shameema', '1234', 'approved'),
(12, 'Fathima', 'ENT', 29, 'female', 'pilathara', 2147483647, '4321@gmail.com', 'IMG-20200315-WA0089.jpg', 't2.jpg', 'MBBS', 'fathima', '1234', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `emergency`
--

CREATE TABLE `emergency` (
  `id` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `message` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emergency`
--

INSERT INTO `emergency` (`id`, `did`, `message`, `date`) VALUES
(1, 1, 'ok', '2020-03-15'),
(2, 1, 'All my bookings are ', '2020-03-17'),
(3, 1, '', '2020-03-23'),
(4, 1, '', '2020-03-23'),
(5, 1, 'sss', '2020-03-18'),
(6, 2, 'cancelled', '2020-03-19'),
(7, 1, 'cancelled', '2020-03-19');

-- --------------------------------------------------------

--
-- Table structure for table `exercise`
--

CREATE TABLE `exercise` (
  `eid` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `date` date NOT NULL,
  `about` varchar(30) NOT NULL,
  `description` varchar(300) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exercise`
--

INSERT INTO `exercise` (`eid`, `did`, `date`, `about`, `description`, `image`) VALUES
(1, 1, '2020-03-18', 'Boost heart health', 'Brisk walking ,running,swimming', 'diet.jpeg'),
(3, 1, '2020-03-18', ' heart health', 'situp,pullup', 'IMG-20200315-WA0102.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `comment` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `uid`, `comment`, `date`) VALUES
(1, 1, 'good', '2020-03-15'),
(2, 1, 'good', '2020-03-15'),
(3, 13, 'very good', '2020-03-19'),
(4, 13, 'very good', '2020-03-19');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `id` int(11) NOT NULL,
  `hospital name` varchar(40) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone number` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `hospital name`, `address`, `phone number`, `email`, `name`, `password`, `logo`, `status`) VALUES
(1, 'Health care', 'pilathara', 1234567891, 'odoc@gmail.com', 'admin', 'admin', 'favicon.png', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_facilities`
--

CREATE TABLE `hospital_facilities` (
  `id` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  `photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital_facilities`
--

INSERT INTO `hospital_facilities` (`id`, `hid`, `name`, `description`, `photo`) VALUES
(1, 1, 'Ambulence service', 'call 108 for ambulence', 'file73jtdghzv9zh3u6knnq-1576378248.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `rid`, `username`, `password`, `type`) VALUES
(1, 1, 'admin', 'admin', 'admin'),
(2, 1, 'shavad', '1234', 'doctor'),
(3, 1, 'sahil', '1234', 'patient'),
(4, 2, 'Mushraf', '123', 'patient'),
(5, 2, 'nithul', '123', 'doctor'),
(6, 3, 'nabeel', '123', 'doctor'),
(7, 4, 'muneeb', '123', 'doctor'),
(8, 5, 'shahana', '123', 'doctor'),
(9, 6, 'rakshana', '123', 'doctor'),
(10, 7, 'adarsh', '123', 'doctor'),
(11, 8, 'hisana', '1234', 'doctor'),
(12, 9, 'antony', '1234', 'doctor'),
(13, 10, 'thalha', '1234', 'doctor'),
(14, 11, 'shameema', '1234', 'doctor'),
(15, 12, 'fathima', '1234', 'doctor'),
(16, 3, 'anz', '123', 'patient'),
(17, 13, 'gokul', '1234', 'patient'),
(18, 6, 'anz', '123', 'patient'),
(19, 14, 'rahees', '123', 'patient');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `used_for` varchar(200) NOT NULL,
  `quantity` varchar(25) NOT NULL,
  `mfg_date` date NOT NULL,
  `exp_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `name`, `price`, `used_for`, `quantity`, `mfg_date`, `exp_date`) VALUES
(1, 'Paracetamol', '13', 'for pain and fever', '300', '2020-03-17', '2020-12-26'),
(2, 'Tiger balm', '100', 'pain', '18', '2020-03-17', '2020-12-16'),
(4, 'Amoxicilline', '40', 'bacterial infections', '90', '2020-03-17', '2021-06-11'),
(5, 'Adderall', '100', 'Hyper activity disorder', '40', '2020-03-17', '2020-06-12'),
(6, 'Amlodipine', '30', 'pain', '90', '2020-03-19', '2020-10-17'),
(7, 'vix', '30', 'headache,fever', '300', '2020-04-02', '2020-09-26');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_booking`
--

CREATE TABLE `medicine_booking` (
  `id` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `days` varchar(50) NOT NULL,
  `total_price` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine_booking`
--

INSERT INTO `medicine_booking` (`id`, `mid`, `pid`, `days`, `total_price`, `date`, `status`) VALUES
(1, 2, 1, '2', '200', '2020-03-17', 'APPROVE'),
(2, 2, 1, '2', '200', '2020-03-19', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `patient_registration`
--

CREATE TABLE `patient_registration` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `user name` varchar(60) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(60) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone number` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_registration`
--

INSERT INTO `patient_registration` (`id`, `name`, `user name`, `age`, `gender`, `address`, `phone number`, `email`, `password`, `image`, `status`) VALUES
(1, 'sahil', 'sahil', 23, 'Male', 'cherukunnu', '2345678901', 'qwert@gmail.com', '1234', 'author.png', 'approve'),
(2, 'Mushraf', 'Mushraf', 23, 'Male', 'payannur', '6334', 'wehkjewh@gmail.com', '123', 'IMG-20181110-WA0035.jpg', 'approve'),
(3, 'Anuroop', 'anz', 23, 'Male', 'cherukunnu', '2345612341', 'anz@gmail.com', '123', 'cat-post-2.jpg', 'approve'),
(6, 'Anuroop', 'anz', 23, 'Male', 'cherukunnu', '2345612341', 'anz@gmail.com', '123', 'IMG-20181110-WA0035.jpg', 'reject'),
(13, 'Gokul', 'gokul', 24, 'Male', 'pappinishry', '4567812345', 'qw2er@gmail.com', '1234', 'c2.jpg', 'approve'),
(14, 'Rahees', 'rahees', 23, 'Male', 'payyannur', '3221234567', 'qwerer@gmail.co', '123', 'c5.jpg', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(10) NOT NULL,
  `comment` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `comment`, `image`, `date`) VALUES
(1, 'Holiday', 'Vishu holiday \r\nApril 12-13', 'Vishu1.jpg', '2020-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `pid` int(11) NOT NULL,
  `id` varchar(20) NOT NULL,
  `patient` int(11) NOT NULL,
  `doctor` int(11) NOT NULL,
  `prescription` varchar(100) NOT NULL,
  `reply` varchar(300) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`pid`, `id`, `patient`, `doctor`, `prescription`, `reply`, `date`) VALUES
(6, '1-1-5597', 1, 1, 'shavad551.pdf', 'fgdgrg', '2020-03-21'),
(7, '1-1-5597', 1, 1, 'shavad81.pdf', 'fgdgrg', '2020-03-21'),
(8, '1-1-5597', 1, 1, 'shavad564.pdf', 'qwet', '2020-03-21'),
(9, '1-2-4609', 1, 1, 'shavad844.pdf', 'gg', '2020-03-23');

-- --------------------------------------------------------

--
-- Table structure for table `specialization`
--

CREATE TABLE `specialization` (
  `id` int(11) NOT NULL,
  `spacialization` varchar(25) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specialization`
--

INSERT INTO `specialization` (`id`, `spacialization`, `image`) VALUES
(1, 'CARDIOLOGY', 'IMG-20200315-WA0102.JPG'),
(2, 'OPHTHALMOLOGY', 'Ophthalmology.JPG'),
(3, 'GYNECOLOGY', 'IMG-20200315-WA0107.JPG'),
(4, 'ENT', 'IMG-20200315-WA0101.JPG'),
(5, 'GENERAL SURGERY', 'IMG-20200315-WA0099.JPG'),
(6, 'ORTHOPEDIC', 'orthopedic.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `tid` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `bdate` date NOT NULL,
  `date` date NOT NULL,
  `token_no` varchar(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `place` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `token`
--

INSERT INTO `token` (`tid`, `did`, `pid`, `bdate`, `date`, `token_no`, `name`, `age`, `gender`, `place`, `status`) VALUES
(1, 1, 1, '2020-03-17', '2020-03-17', '1', 'sahil', '23', 'Male', 'cherukunnu', 'canceled'),
(2, 1, 1, '2020-03-15', '2020-03-17', '1', 'sahil', '23', 'Male', 'cherukunnu', 'canceled'),
(3, 1, 1, '2020-03-17', '2020-03-17', '2', 'sahil', '23', 'Male', 'cherukunnu', 'canceled'),
(4, 1, 1, '2020-03-23', '2020-03-18', '1', 'sahil', '23', 'Male', 'cherukunnu', 'canceled'),
(5, 3, 1, '2020-04-08', '2020-03-19', '1', 'sahil', '23', 'Male', 'cherukunnu', 'booked'),
(6, 2, 1, '2020-04-06', '2020-03-19', '1', 'sahil', '23', 'Male', 'cherukunnu', 'canceled'),
(7, 1, 1, '2020-04-07', '2020-03-19', '1', 'sahil', '23', 'Male', 'cherukunnu', 'canceled'),
(8, 1, 1, '2020-04-07', '2020-03-19', '2', 'sahil', '23', 'Male', 'cherukunnu', 'booked');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diet`
--
ALTER TABLE `diet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_details`
--
ALTER TABLE `doctor_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_registration`
--
ALTER TABLE `doctor_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emergency`
--
ALTER TABLE `emergency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exercise`
--
ALTER TABLE `exercise`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital_facilities`
--
ALTER TABLE `hospital_facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine_booking`
--
ALTER TABLE `medicine_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_registration`
--
ALTER TABLE `patient_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `specialization`
--
ALTER TABLE `specialization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `consultation`
--
ALTER TABLE `consultation`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `diet`
--
ALTER TABLE `diet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctor_details`
--
ALTER TABLE `doctor_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `doctor_registration`
--
ALTER TABLE `doctor_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `emergency`
--
ALTER TABLE `emergency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `exercise`
--
ALTER TABLE `exercise`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hospital_facilities`
--
ALTER TABLE `hospital_facilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `medicine_booking`
--
ALTER TABLE `medicine_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patient_registration`
--
ALTER TABLE `patient_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `specialization`
--
ALTER TABLE `specialization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `token`
--
ALTER TABLE `token`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
