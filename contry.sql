-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2025 at 11:58 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `country`
--

-- --------------------------------------------------------

--
-- Table structure for table `passysystem_countries`
--

CREATE TABLE `passysystem_countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `iso2_code` varchar(2) DEFAULT NULL COMMENT 'رمز الدولة ISO2',
  `iso3_code` varchar(3) DEFAULT NULL COMMENT 'رمز الدولة ISO3',
  `flag_url` varchar(255) DEFAULT NULL COMMENT 'رابط علم الدولة',
  `continent` varchar(50) DEFAULT NULL COMMENT 'القارة',
  `population` bigint(20) DEFAULT NULL COMMENT 'عدد السكان',
  `area_km2` decimal(15,2) DEFAULT NULL COMMENT 'المساحة بالكيلومتر المربع',
  `capital` varchar(255) DEFAULT NULL,
  `currency_code` varchar(3) DEFAULT NULL COMMENT 'رمز العملة',
  `phone_code` varchar(10) DEFAULT NULL COMMENT 'رمز الهاتف'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `passysystem_countries`
--

INSERT INTO `passysystem_countries` (`id`, `name`, `iso2_code`, `iso3_code`, `flag_url`, `continent`, `population`, `area_km2`, `capital`, `currency_code`, `phone_code`) VALUES
(1, 'Afghanistan', 'AF', 'AFG', NULL, 'Asia', 38928346, 652230.00, 'Kabul', 'AFN', '93'),
(2, 'Albania', 'AL', 'ALB', NULL, 'Europe', 2877797, 28748.00, 'Tirana', 'ALL', '355'),
(3, 'Algeria', 'DZ', 'DZA', NULL, 'Africa', 43851044, 2381741.00, 'Algiers', 'DZD', '213'),
(4, 'Andorra', 'AD', 'AND', NULL, 'Europe', 77265, 468.00, 'Andorra la Vella', 'EUR', '376'),
(5, 'Angola', 'AO', 'AGO', NULL, 'Africa', 32866272, 1246700.00, 'Luanda', 'AOA', '244'),
(6, 'Antigua and Barbuda', 'AG', 'ATG', NULL, 'North America', 97928, 442.00, 'Saint John\'s', 'XCD', '-267'),
(7, 'Argentina', 'AR', 'ARG', NULL, 'South America', 45195774, 2780400.00, 'Buenos Aires', 'ARS', '54'),
(8, 'Armenia', 'AM', 'ARM', NULL, 'Asia', 2963243, 29743.00, 'Yerevan', 'AMD', '374'),
(9, 'Australia', 'AU', 'AUS', NULL, 'Oceania', 25766605, 7692024.00, 'Canberra', 'AUD', '61'),
(10, 'Austria', 'AT', 'AUT', NULL, 'Europe', 9006398, 83871.00, 'Vienna', 'EUR', '43'),
(11, 'Azerbaijan', 'AZ', 'AZE', NULL, 'Asia', 10139177, 86600.00, 'Baku', 'AZN', '994'),
(12, 'Bahamas', 'BS', 'BHS', NULL, 'North America', 393244, 13943.00, 'Nassau', 'BSD', '-241'),
(13, 'Bahrain', 'BH', 'BHR', NULL, 'Asia', 1701575, 765.00, 'Manama', 'BHD', '973'),
(14, 'Bangladesh', 'BD', 'BGD', NULL, 'Asia', 164689383, 147570.00, 'Dhaka', 'BDT', '880'),
(15, 'Barbados', 'BB', 'BRB', NULL, 'North America', 287375, 430.00, 'Bridgetown', 'BBD', '-245'),
(16, 'Belarus', 'BY', 'BLR', NULL, 'Europe', 9449323, 207600.00, 'Minsk', 'BYN', '375'),
(17, 'Belgium', 'BE', 'BEL', NULL, 'Europe', 11589623, 30528.00, 'Brussels', 'EUR', '32'),
(18, 'Belize', 'BZ', 'BLZ', NULL, 'North America', 397621, 22966.00, 'Belmopan', 'BZD', '501'),
(19, 'Benin', 'BJ', 'BEN', NULL, 'Africa', 12123200, 112622.00, 'Porto-Novo', 'XOF', '229'),
(20, 'Bhutan', 'BT', 'BTN', NULL, 'Asia', 771608, 38394.00, 'Thimphu', 'BTN', '975'),
(21, 'Bolivia', 'BO', 'BOL', NULL, 'South America', 11673021, 1098581.00, 'Sucre', 'BOB', '591'),
(22, 'Bosnia and Herzegovina', 'BA', 'BIH', NULL, 'Europe', 3280819, 51209.00, 'Sarajevo', 'BAM', '387'),
(23, 'Botswana', 'BW', 'BWA', NULL, 'Africa', 2351627, 582000.00, 'Gaborone', 'BWP', '267'),
(24, 'Brazil', 'BR', 'BRA', NULL, 'South America', 212559417, 8514877.00, 'Brasília', 'BRL', '55'),
(25, 'Brunei', 'BN', 'BRN', NULL, 'Asia', 437479, 5765.00, 'Bandar Seri Begawan', 'BND', '673'),
(26, 'Bulgaria', 'BG', 'BGR', NULL, 'Europe', 6948445, 110879.00, 'Sofia', 'BGN', '359'),
(27, 'Burkina Faso', 'BF', 'BFA', NULL, 'Africa', 20903273, 272967.00, 'Ouagadougou', 'XOF', '226'),
(28, 'Burundi', 'BI', 'BDI', NULL, 'Africa', 11890784, 27834.00, 'Gitega', 'BIF', '257'),
(29, 'Cambodia', 'KH', 'KHM', NULL, 'Asia', 16718965, 181035.00, 'Phnom Penh', 'KHR', '855'),
(30, 'Cameroon', 'CM', 'CMR', NULL, 'Africa', 26545863, 475442.00, 'Yaoundé', 'XAF', '237'),
(31, 'Canada', 'CA', 'CAN', NULL, 'North America', 38005238, 9984670.00, 'Ottawa', 'CAD', '1'),
(32, 'Cape Verde', 'CV', 'CPV', NULL, 'Africa', 555987, 4033.00, 'Praia', 'CVE', '238'),
(33, 'Central African Republic', 'CF', 'CAF', NULL, 'Africa', 4829767, 622984.00, 'Bangui', 'XAF', '236'),
(34, 'Chad', 'TD', 'TCD', NULL, 'Africa', 16425864, 1284000.00, 'N\'Djamena', 'XAF', '235'),
(35, 'Chile', 'CL', 'CHL', NULL, 'South America', 19116201, 756102.00, 'Santiago', 'CLP', '56'),
(36, 'China', 'CN', 'CHN', NULL, 'Asia', 1439323776, 9596961.00, 'Beijing', 'CNY', '86'),
(37, 'Colombia', 'CO', 'COL', NULL, 'South America', 50882891, 1141748.00, 'Bogotá', 'COP', '57'),
(38, 'Comoros', 'KM', 'COM', NULL, 'Africa', 869601, 1862.00, 'Moroni', 'KMF', '269'),
(39, 'Congo', 'CD', 'COD', NULL, 'Africa', 89561403, 2344858.00, 'Kinshasa', 'CDF', '243'),
(40, 'DR Congo', 'CG', 'COG', NULL, 'Africa', 5518092, 342000.00, 'Brazzaville', 'XAF', '242'),
(41, 'Costa Rica', 'CR', 'CRI', NULL, 'North America', 5094118, 51100.00, 'San José', 'CRC', '506'),
(42, 'Ivory Coast', 'CI', 'CIV', NULL, 'Africa', 26378274, 322463.00, 'Yamoussoukro', 'XOF', '225'),
(43, 'Croatia', 'HR', 'HRV', NULL, 'Europe', 4105267, 56594.00, 'Zagreb', 'HRK', '385'),
(44, 'Cuba', 'CU', 'CUB', NULL, 'North America', 11326616, 109884.00, 'Havana', 'CUP', '53'),
(45, 'Cyprus', 'CY', 'CYP', NULL, 'Europe', 1207359, 9251.00, 'Nicosia', 'EUR', '357'),
(46, 'Czech Republic', 'CZ', 'CZE', NULL, 'Europe', 10708981, 78865.00, 'Prague', 'CZK', '420'),
(47, 'Denmark', 'DK', 'DNK', NULL, 'Europe', 5792202, 43094.00, 'Copenhagen', 'DKK', '45'),
(48, 'Djibouti', 'DJ', 'DJI', NULL, 'Africa', 988000, 23200.00, 'Djibouti', 'DJF', '253'),
(49, 'Dominica', 'DM', 'DMA', NULL, 'North America', 71986, 751.00, 'Roseau', 'XCD', '-766'),
(50, 'Dominican Republic', 'DO', 'DOM', NULL, 'North America', 10847910, 48671.00, 'Santo Domingo', 'DOP', '-808'),
(51, 'Ecuador', 'EC', 'ECU', NULL, 'South America', 17643054, 276841.00, 'Quito', 'USD', '593'),
(52, 'Egypt', 'EG', 'EGY', NULL, 'Africa', 102334404, 1001449.00, 'Cairo', 'EGP', '20'),
(53, 'El Salvador', 'SV', 'SLV', NULL, 'North America', 6486205, 21041.00, 'San Salvador', 'USD', '503'),
(54, 'Equatorial Guinea', 'GQ', 'GNQ', NULL, 'Africa', 1402985, 28051.00, 'Malabo', 'XAF', '240'),
(55, 'Eritrea', 'ER', 'ERI', NULL, 'Africa', 3546421, 117600.00, 'Asmara', 'ERN', '291'),
(56, 'Estonia', 'EE', 'EST', NULL, 'Europe', 1326535, 45227.00, 'Tallinn', 'EUR', '372'),
(57, 'Eswatini', 'SZ', 'SWZ', NULL, 'Africa', 1160164, 17364.00, 'Mbabane', 'SZL', '268'),
(58, 'Ethiopia', 'ET', 'ETH', NULL, 'Africa', 114963588, 1104300.00, 'Addis Ababa', 'ETB', '251'),
(59, 'Fiji', 'FJ', 'FJI', NULL, 'Oceania', 896445, 18272.00, 'Suva', 'FJD', '679'),
(60, 'Finland', 'FI', 'FIN', NULL, 'Europe', 5540720, 338424.00, 'Helsinki', 'EUR', '358'),
(61, 'France', 'FR', 'FRA', NULL, 'Europe', 65273511, 551695.00, 'Paris', 'EUR', '33'),
(62, 'Gabon', 'GA', 'GAB', NULL, 'Africa', 2225728, 267668.00, 'Libreville', 'XAF', '241'),
(63, 'Gambia', 'GM', 'GMB', NULL, 'Africa', 2416668, 10689.00, 'Banjul', 'GMD', '220'),
(64, 'Georgia', 'GE', 'GEO', NULL, 'Asia', 3989167, 69700.00, 'Tbilisi', 'GEL', '995'),
(65, 'Germany', 'DE', 'DEU', NULL, 'Europe', 83783942, 357114.00, 'Berlin', 'EUR', '49'),
(66, 'Ghana', 'GH', 'GHA', NULL, 'Africa', 31072940, 238533.00, 'Accra', 'GHS', '233'),
(67, 'Greece', 'GR', 'GRC', NULL, 'Europe', 10423054, 131990.00, 'Athens', 'EUR', '30'),
(68, 'Grenada', 'GD', 'GRD', NULL, 'North America', 112519, 344.00, 'Saint George\'s', 'XCD', '-472'),
(69, 'Guatemala', 'GT', 'GTM', NULL, 'North America', 17915568, 108889.00, 'Guatemala City', 'GTQ', '502'),
(70, 'Guinea', 'GN', 'GIN', NULL, 'Africa', 13132795, 245857.00, 'Conakry', 'GNF', '224'),
(71, 'Guinea-Bissau', 'GW', 'GNB', NULL, 'Africa', 1968001, 36125.00, 'Bissau', 'XOF', '245'),
(72, 'Guyana', 'GY', 'GUY', NULL, 'South America', 786552, 214969.00, 'Georgetown', 'GYD', '592'),
(73, 'Haiti', 'HT', 'HTI', NULL, 'North America', 11402528, 27750.00, 'Port-au-Prince', 'HTG', '509'),
(74, 'Honduras', 'HN', 'HND', NULL, 'North America', 9904607, 112492.00, 'Tegucigalpa', 'HNL', '504'),
(75, 'Hong Kong', 'HK', 'HKG', NULL, 'Asia', 7482500, 1104.00, 'Hong Kong', 'HKD', '852'),
(76, 'Hungary', 'HU', 'HUN', NULL, 'Europe', 9660351, 93028.00, 'Budapest', 'HUF', '36'),
(77, 'Iceland', 'IS', 'ISL', NULL, 'Europe', 341243, 103000.00, 'Reykjavik', 'ISK', '354'),
(78, 'India', 'IN', 'IND', NULL, 'Asia', 1380004385, 3287263.00, 'New Delhi', 'INR', '91'),
(79, 'Indonesia', 'ID', 'IDN', NULL, 'Asia', 273523615, 1904569.00, 'Jakarta', 'IDR', '62'),
(80, 'Iran', 'IR', 'IRN', NULL, 'Asia', 83992949, 1648195.00, 'Tehran', 'IRR', '98'),
(81, 'Iraq', 'IQ', 'IRQ', NULL, 'Asia', 40222493, 438317.00, 'Baghdad', 'IQD', '964'),
(82, 'Ireland', 'IE', 'IRL', NULL, 'Europe', 4937786, 70273.00, 'Dublin', 'EUR', '353'),
(83, 'Israel', 'IL', 'ISR', NULL, 'Asia', 8655535, 20770.00, 'Jerusalem', 'ILS', '972'),
(84, 'Italy', 'IT', 'ITA', NULL, 'Europe', 60461826, 301336.00, 'Rome', 'EUR', '39'),
(85, 'Jamaica', 'JM', 'JAM', NULL, 'North America', 2961167, 10991.00, 'Kingston', 'JMD', '-875'),
(86, 'Japan', 'JP', 'JPN', NULL, 'Asia', 126476461, 377930.00, 'Tokyo', 'JPY', '81'),
(87, 'Jordan', 'JO', 'JOR', NULL, 'Asia', 10203134, 89342.00, 'Amman', 'JOD', '962'),
(88, 'Kazakhstan', 'KZ', 'KAZ', NULL, 'Asia', 18776707, 2724900.00, 'Nur-Sultan', 'KZT', '7'),
(89, 'Kenya', 'KE', 'KEN', NULL, 'Africa', 53771296, 580367.00, 'Nairobi', 'KES', '254'),
(90, 'Kiribati', 'KI', 'KIR', NULL, 'Oceania', 119449, 811.00, 'Tarawa', 'AUD', '686'),
(91, 'Kosovo', 'XK', 'XKS', NULL, 'Europe', 1810366, 10908.00, 'Pristina', 'EUR', '383'),
(92, 'Kuwait', 'KW', 'KWT', NULL, 'Asia', 4270571, 17818.00, 'Kuwait City', 'KWD', '965'),
(93, 'Kyrgyzstan', 'KG', 'KGZ', NULL, 'Asia', 6524195, 199951.00, 'Bishkek', 'KGS', '996'),
(94, 'Laos', 'LA', 'LAO', NULL, 'Asia', 7275560, 236800.00, 'Vientiane', 'LAK', '856'),
(95, 'Latvia', 'LV', 'LVA', NULL, 'Europe', 1886198, 64559.00, 'Riga', 'EUR', '371'),
(96, 'Lebanon', 'LB', 'LBN', NULL, 'Asia', 6825445, 10452.00, 'Beirut', 'LBP', '961'),
(97, 'Lesotho', 'LS', 'LSO', NULL, 'Africa', 2142249, 30355.00, 'Maseru', 'LSL', '266'),
(98, 'Liberia', 'LR', 'LBR', NULL, 'Africa', 5057681, 111369.00, 'Monrovia', 'LRD', '231'),
(99, 'Libya', 'LY', 'LBY', NULL, 'Africa', 6871292, 1759540.00, 'Tripoli', 'LYD', '218'),
(100, 'Liechtenstein', 'LI', 'LIE', NULL, 'Europe', 38128, 160.00, 'Vaduz', 'CHF', '423'),
(101, 'Lithuania', 'LT', 'LTU', NULL, 'Europe', 2722289, 65300.00, 'Vilnius', 'EUR', '370'),
(102, 'Luxembourg', 'LU', 'LUX', NULL, 'Europe', 625978, 2586.00, 'Luxembourg', 'EUR', '352'),
(103, 'Macao', 'MO', 'MAC', NULL, 'Asia', 649335, 30.00, 'Macao', 'MOP', '853'),
(104, 'Madagascar', 'MG', 'MDG', NULL, 'Africa', 27691018, 587041.00, 'Antananarivo', 'MGA', '261'),
(105, 'Malawi', 'MW', 'MWI', NULL, 'Africa', 19129952, 118484.00, 'Lilongwe', 'MWK', '265'),
(106, 'Malaysia', 'MY', 'MYS', NULL, 'Asia', 32365999, 330803.00, 'Kuala Lumpur', 'MYR', '60'),
(107, 'Maldives', 'MV', 'MDV', NULL, 'Asia', 540544, 300.00, 'Malé', 'MVR', '960'),
(108, 'Mali', 'ML', 'MLI', NULL, 'Africa', 20250833, 1240192.00, 'Bamako', 'XOF', '223'),
(109, 'Malta', 'MT', 'MLT', NULL, 'Europe', 441543, 316.00, 'Valletta', 'EUR', '356'),
(110, 'Marshall Islands', 'MH', 'MHL', NULL, 'Oceania', 59190, 181.00, 'Majuro', 'USD', '692'),
(111, 'Mauritania', 'MR', 'MRT', NULL, 'Africa', 4649658, 1030700.00, 'Nouakchott', 'MRU', '222'),
(112, 'Mauritius', 'MU', 'MUS', NULL, 'Africa', 1271768, 2040.00, 'Port Louis', 'MUR', '230'),
(113, 'Mexico', 'MX', 'MEX', NULL, 'North America', 128932753, 1964375.00, 'Mexico City', 'MXN', '52'),
(114, 'Micronesia', 'FM', 'FSM', NULL, 'Oceania', 548914, 702.00, 'Palikir', 'USD', '691'),
(115, 'Moldova', 'MD', 'MDA', NULL, 'Europe', 4033963, 33846.00, 'Chișinău', 'MDL', '373'),
(116, 'Monaco', 'MC', 'MCO', NULL, 'Europe', 39242, 2.00, 'Monaco', 'EUR', '377'),
(117, 'Mongolia', 'MN', 'MNG', NULL, 'Asia', 3278290, 1564116.00, 'Ulaanbaatar', 'MNT', '976'),
(118, 'Montenegro', 'ME', 'MNE', NULL, 'Europe', 628066, 13812.00, 'Podgorica', 'EUR', '382'),
(119, 'Morocco', 'MA', 'MAR', NULL, 'Africa', 36910560, 446550.00, 'Rabat', 'MAD', '212'),
(120, 'Mozambique', 'MZ', 'MOZ', NULL, 'Africa', 31255435, 801590.00, 'Maputo', 'MZN', '258'),
(121, 'Myanmar', 'MM', 'MMR', NULL, 'Asia', 54409800, 676578.00, 'Naypyidaw', 'MMK', '95'),
(122, 'Namibia', 'NA', 'NAM', NULL, 'Africa', 2540905, 825615.00, 'Windhoek', 'NAD', '264'),
(123, 'Nauru', 'NR', 'NRU', NULL, 'Oceania', 10824, 21.00, 'Yaren', 'AUD', '674'),
(124, 'Nepal', 'NP', 'NPL', NULL, 'Asia', 29136808, 147181.00, 'Kathmandu', 'NPR', '977'),
(125, 'Netherlands', 'NL', 'NLD', NULL, 'Europe', 17134872, 41850.00, 'Amsterdam', 'EUR', '31'),
(126, 'New Zealand', 'NZ', 'NZL', NULL, 'Oceania', 4822233, 270467.00, 'Wellington', 'NZD', '64'),
(127, 'Nicaragua', 'NI', 'NIC', NULL, 'North America', 6624554, 130373.00, 'Managua', 'NIO', '505'),
(128, 'Niger', 'NE', 'NER', NULL, 'Africa', 24206644, 1267000.00, 'Niamey', 'XOF', '227'),
(129, 'Nigeria', 'NG', 'NGA', NULL, 'Africa', 206139589, 923768.00, 'Abuja', 'NGN', '234'),
(130, 'North Korea', 'KP', 'PRK', NULL, 'Asia', 25778816, 120538.00, 'Pyongyang', 'KPW', '850'),
(131, 'North Macedonia', 'MK', 'MKD', NULL, 'Europe', 2083374, 25713.00, 'Skopje', 'MKD', '389'),
(132, 'Norway', 'NO', 'NOR', NULL, 'Europe', 5421241, 323802.00, 'Oslo', 'NOK', '47'),
(133, 'Oman', 'OM', 'OMN', NULL, 'Asia', 5106626, 309500.00, 'Muscat', 'OMR', '968'),
(134, 'Pakistan', 'PK', 'PAK', NULL, 'Asia', 220892340, 881913.00, 'Islamabad', 'PKR', '92'),
(135, 'Palau', 'PW', 'PLW', NULL, 'Oceania', 18094, 459.00, 'Ngerulmud', 'USD', '680'),
(136, 'Palestine', 'PS', 'PSE', NULL, 'Asia', 5101416, 6020.00, 'Ramallah', 'ILS', '970'),
(137, 'Panama', 'PA', 'PAN', NULL, 'North America', 4314767, 75417.00, 'Panama City', 'PAB', '507'),
(138, 'Papua New Guinea', 'PG', 'PNG', NULL, 'Oceania', 8947024, 462840.00, 'Port Moresby', 'PGK', '675'),
(139, 'Paraguay', 'PY', 'PRY', NULL, 'South America', 7132538, 406752.00, 'Asunción', 'PYG', '595'),
(140, 'Peru', 'PE', 'PER', NULL, 'South America', 32971854, 1285216.00, 'Lima', 'PEN', '51'),
(141, 'Philippines', 'PH', 'PHL', NULL, 'Asia', 109581078, 342353.00, 'Manila', 'PHP', '63'),
(142, 'Poland', 'PL', 'POL', NULL, 'Europe', 37846611, 312679.00, 'Warsaw', 'PLN', '48'),
(143, 'Portugal', 'PT', 'PRT', NULL, 'Europe', 10196709, 92090.00, 'Lisbon', 'EUR', '351'),
(144, 'Qatar', 'QA', 'QAT', NULL, 'Asia', 2881053, 11586.00, 'Doha', 'QAR', '974'),
(145, 'Romania', 'RO', 'ROU', NULL, 'Europe', 19237691, 238391.00, 'Bucharest', 'RON', '40'),
(146, 'Russia', 'RU', 'RUS', NULL, 'Europe', 145934462, 17098242.00, 'Moscow', 'RUB', '7'),
(147, 'Rwanda', 'RW', 'RWA', NULL, 'Africa', 12952218, 26338.00, 'Kigali', 'RWF', '250'),
(148, 'Saint Kitts and Nevis', 'KN', 'KNA', NULL, 'XCD', 0, 261.00, 'North America', 'XCD', '869'),
(149, 'Saint Lucia', 'LC', 'LCA', NULL, 'XCD', 0, 616.00, 'North America', 'XCD', '757'),
(150, 'Samoa', 'WS', 'WSM', NULL, 'Oceania', 198414, 2842.00, 'Apia', 'WST', '685'),
(151, 'San Marino', 'SM', 'SMR', NULL, 'Europe', 33931, 61.00, 'San Marino', 'EUR', '378'),
(152, 'Sao Tome and Principe', 'ST', 'STP', NULL, 'Africa', 219159, 964.00, 'São Tomé', 'STN', '239'),
(153, 'Saudi Arabia', 'SA', 'SAU', NULL, 'Asia', 34813871, 2149690.00, 'Riyadh', 'SAR', '966'),
(154, 'Senegal', 'SN', 'SEN', NULL, 'Africa', 16743927, 196722.00, 'Dakar', 'XOF', '221'),
(155, 'Serbia', 'RS', 'SRB', NULL, 'Europe', 8737371, 88361.00, 'Belgrade', 'RSD', '381'),
(156, 'Seychelles', 'SC', 'SYC', NULL, 'Africa', 98347, 452.00, 'Victoria', 'SCR', '248'),
(157, 'Sierra Leone', 'SL', 'SLE', NULL, 'Africa', 7976983, 71740.00, 'Freetown', 'SLL', '232'),
(158, 'Singapore', 'SG', 'SGP', NULL, 'Asia', 5850342, 728.00, 'Singapore', 'SGD', '65'),
(159, 'Slovakia', 'SK', 'SVK', NULL, 'Europe', 5459642, 49035.00, 'Bratislava', 'EUR', '421'),
(160, 'Slovenia', 'SI', 'SVN', NULL, 'Europe', 2078938, 20273.00, 'Ljubljana', 'EUR', '386'),
(161, 'Solomon Islands', 'SB', 'SLB', NULL, 'Oceania', 686884, 28896.00, 'Honiara', 'SBD', '677'),
(162, 'Somalia', 'SO', 'SOM', NULL, 'Africa', 15893222, 637657.00, 'Mogadishu', 'SOS', '252'),
(163, 'South Africa', 'ZA', 'ZAF', NULL, 'Africa', 59308690, 1221037.00, 'Cape Town', 'ZAR', '27'),
(164, 'South Korea', 'KR', 'KOR', NULL, 'Asia', 51269185, 100210.00, 'Seoul', 'KRW', '82'),
(165, 'South Sudan', 'SS', 'SSD', NULL, 'Africa', 11193725, 619745.00, 'Juba', 'SSP', '211'),
(166, 'Spain', 'ES', 'ESP', NULL, 'Europe', 46754778, 505992.00, 'Madrid', 'EUR', '34'),
(167, 'Sri Lanka', 'LK', 'LKA', NULL, 'Asia', 21413249, 65610.00, 'Sri Jayawardenepura Kotte', 'LKR', '94'),
(168, 'Saint Vincent and the Grenadines', 'VC', 'VCT', NULL, 'North America', 110947, 389.00, 'Kingstown', 'XCD', '0'),
(169, 'Sudan', 'SD', 'SDN', NULL, 'Africa', 43849260, 1886068.00, 'Khartoum', 'SDG', '249'),
(170, 'Suriname', 'SR', 'SUR', NULL, 'South America', 586632, 163820.00, 'Paramaribo', 'SRD', '597'),
(171, 'Sweden', 'SE', 'SWE', NULL, 'Europe', 10353442, 450295.00, 'Stockholm', 'SEK', '46'),
(172, 'Switzerland', 'CH', 'CHE', NULL, 'Europe', 8654622, 41284.00, 'Bern', 'CHF', '41'),
(173, 'Syria', 'SY', 'SYR', NULL, 'Asia', 17500658, 185180.00, 'Damascus', 'SYP', '963'),
(174, 'Taiwan', 'TW', 'TWN', NULL, 'Asia', 23816775, 36197.00, 'Taipei', 'TWD', '886'),
(175, 'Tajikistan', 'TJ', 'TJK', NULL, 'Asia', 9537645, 143100.00, 'Dushanbe', 'TJS', '992'),
(176, 'Tanzania', 'TZ', 'TZA', NULL, 'Africa', 59734218, 945087.00, 'Dodoma', 'TZS', '255'),
(177, 'Thailand', 'TH', 'THA', NULL, 'Asia', 69799978, 513120.00, 'Bangkok', 'THB', '66'),
(178, 'Timor-Leste', 'TL', 'TLS', NULL, 'Asia', 1318445, 14874.00, 'Dili', 'USD', '670'),
(179, 'Togo', 'TG', 'TGO', NULL, 'Africa', 8278724, 56785.00, 'Lomé', 'XOF', '228'),
(180, 'Tonga', 'TO', 'TON', NULL, 'Oceania', 105695, 747.00, 'Nuku\'alofa', 'TOP', '676'),
(181, 'Trinidad and Tobago', 'TT', 'TTO', NULL, 'North America', 1399491, 5130.00, 'Port of Spain', 'TTD', '-867'),
(182, 'Tunisia', 'TN', 'TUN', NULL, 'Africa', 11818619, 163610.00, 'Tunis', 'TND', '216'),
(183, 'Turkmenistan', 'TM', 'TKM', NULL, 'Asia', 6031200, 488100.00, 'Ashgabat', 'TMT', '993'),
(184, 'Tuvalu', 'TV', 'TUV', NULL, 'Oceania', 11792, 26.00, 'Funafuti', 'AUD', '688'),
(185, 'Turkey', 'TR', 'TUR', NULL, 'Asia', 84339067, 783562.00, 'Ankara', 'TRY', '90'),
(186, 'Uganda', 'UG', 'UGA', NULL, 'Africa', 45741007, 241550.00, 'Kampala', 'UGX', '256'),
(187, 'Ukraine', 'UA', 'UKR', NULL, 'Europe', 43733762, 603500.00, 'Kiev', 'UAH', '380'),
(188, 'United Arab Emirates', 'AE', 'ARE', NULL, 'Asia', 9890402, 83600.00, 'Abu Dhabi', 'AED', '971'),
(189, 'United Kingdom', 'GB', 'GBR', NULL, 'Europe', 67508936, 243610.00, 'London', 'GBP', '44'),
(190, 'United States', 'US', 'USA', NULL, 'North America', 331002651, 9833517.00, 'Washington D.C.', 'USD', '1'),
(191, 'Uruguay', 'UY', 'URY', NULL, 'South America', 3473730, 181034.00, 'Montevideo', 'UYU', '598'),
(192, 'Uzbekistan', 'UZ', 'UZB', NULL, 'Asia', 33469203, 447400.00, 'Tashkent', 'UZS', '998'),
(193, 'Vanuatu', 'VU', 'VUT', NULL, 'Oceania', 307145, 12189.00, 'Port Vila', 'VUV', '678'),
(194, 'Vatican', 'VA', 'VAT', NULL, 'Europe', 801, 0.00, 'Vatican City', 'EUR', '379'),
(195, 'Venezuela', 'VE', 'VEN', NULL, 'South America', 28435940, 916445.00, 'Caracas', 'VES', '58'),
(196, 'Vietnam', 'VN', 'VNM', NULL, 'Asia', 97338579, 331212.00, 'Hanoi', 'VND', '84'),
(197, 'Yemen', 'YE', 'YEM', NULL, 'Asia', 29825964, 527968.00, 'Sana\'a', 'YER', '967'),
(198, 'Zambia', 'ZM', 'ZMB', NULL, 'Africa', 18383955, 752612.00, 'Lusaka', 'ZMW', '260'),
(199, 'Zimbabwe', 'ZW', 'ZWE', NULL, 'Africa', 14862924, 390757.00, 'Harare', 'ZWL', '263');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `passysystem_countries`
--
ALTER TABLE `passysystem_countries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `passysystem_countries_iso2_code_index` (`iso2_code`),
  ADD KEY `passysystem_countries_iso3_code_index` (`iso3_code`),
  ADD KEY `passysystem_countries_continent_index` (`continent`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `passysystem_countries`
--
ALTER TABLE `passysystem_countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
