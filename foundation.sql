--
-- Database: `foundation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` int(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `pass`, `name`, `mobile`, `gender`, `address`, `country`, `dob`) VALUES
('mukeshmeena@gmail.com', '1234mukesh', 'mukesh meena', 1234567890, 'male', 'bikaner', 'india', '1995-06-08');

-- --------------------------------------------------------

--
-- Table structure for table `allmember`
--

CREATE TABLE `allmember` (
  `sn` int(11) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allmember`
--

INSERT INTO `allmember` (`sn`, `emailid`, `name`, `mobile`, `address`, `message`) VALUES
(1, 'teja@gmail.com', 'taranzan', '9636631400', 'barmer', ''),
(2, 'teja@tzn.com', 'Taraznan', '2836487236', 'rajasthan', ''),
(3, 'taranzansihag1400@gmail.com', 'teja Ram', '123', 'bikaner', 'bhagvan aap jese logo ka hmesha sath de'),
(4, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `award`
--

CREATE TABLE `award` (
  `sn` int(11) NOT NULL,
  `news` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `award`
--

INSERT INTO `award` (`sn`, `news`) VALUES
(1, 'my first award');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `sn` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `controller` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`sn`, `name`, `controller`, `address`, `mobile`) VALUES
(1, 'meena foundation', 'bhagirath', 'bikaner', '2147483647'),
(2, 'Reliance foundation', 'Taranzan Sihag', 'Bikaner rajasthan', '2147483647'),
(3, 'smile foundation', 'Vikram Singh', 'Fatehpur Sikar', '9782233401');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `sn` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`sn`, `email`, `name`, `address`, `mobile`) VALUES
(1, 'teja@gmail.com', 'teju', 'barmer', '9636631400'),
(2, 'harish@gmail.com', 'Harsih', 'barmer rajasth', '9660520097');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `sn` int(11) NOT NULL,
  `news` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`sn`, `news`) VALUES
(1, 'first event is'),
(2, 'in pathik lok sewa samiti campus programm');

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

CREATE TABLE `gallary` (
  `sn` int(11) NOT NULL,
  `news` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallary`
--

INSERT INTO `gallary` (`sn`, `news`) VALUES
(1, 'save girls'),
(2, 'news paper news of pathik lok sewa samiti'),
(3, 'mission of pathik lok sewa samiti'),
(4, 'culture event of pathik lok sewa samiti'),
(5, 'in media again'),
(6, 'some more weekend programm');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `sn` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`sn`, `email`) VALUES
(0, 'teja@gmail.com'),
(1, 'mukeshmeena@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `sn` int(11) NOT NULL,
  `news` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`sn`, `news`) VALUES
(4, 'bharat mata ki jai'),
(5, 'newspaper');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `sn` int(11) NOT NULL,
  `work` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`sn`, `work`) VALUES
(1, 'Advocacy and Research, Aged and elderly, Animal Husbandry, Dairying & Fisheries, Animal Welfare, Art & Culture, Children, Civic Issues, Dalit Welfare, Disability, Disaster Management, Eco tourism, Education & Literacy, Environment and natural resource management, Food and Agriculture, Health & Nutrition, HIV/AIDS, Housing and shelter, Human Rights, Information & Communication Technology (ICT) , Labour & Employment, Legal Awareness & Aid, Micro Finance (SHGs), Micro Small & Medium Enterprises, Mi');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
