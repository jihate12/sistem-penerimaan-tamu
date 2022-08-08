-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2022 at 09:05 AM
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
-- Database: `manajemen_tamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_06_20_021451_create_tb_user_table', 1),
(7, '2022_06_20_021501_create_tb_kegiatan_table', 1),
(8, '2022_06_28_133242_create_tb_karyawan_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `nip` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departemen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`nip`, `name`, `phone`, `email`, `departemen`, `position`, `password`, `level`, `created_at`, `updated_at`) VALUES
('0059443154', 'Elsa Stark', '+1-231-954-4105', 'kwuckert@witting.com', 'Inc', 'Clinical Psychologist', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('0291532705', 'Mr. Kurt Oberbrunner', '(952) 537-5835', 'mclaughlin.eda@kiehn.biz', 'PLC', 'Bailiff', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('0392847914', 'Caleb Rogahn', '+1.530.444.9777', 'yhuels@ebert.info', 'Inc', 'Agricultural Sales Representative', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('047180620X', 'Prof. Emilio Orn DVM', '1-720-781-7838', 'sammie20@grimes.net', 'Group', 'Paperhanger', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('0473637111', 'Ms. Jayne Kozey', '+1-346-309-2677', 'mose14@beatty.net', 'Group', 'Municipal Clerk', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('0486457222', 'Clare Quigley', '+1 (973) 370-5453', 'kathleen.hartmann@wintheiser.com', 'PLC', 'Command Control Center Specialist', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('0546320694', 'Darren Skiles', '(414) 801-7102', 'john16@von.com', 'and Sons', 'Central Office Operator', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('0664067298', 'Carole Anderson Sr.', '(352) 787-6448', 'khahn@koelpin.com', 'Ltd', 'Animal Trainer', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('0802450199', 'Greg Rath', '1-951-536-7515', 'hubert.weissnat@simonis.com', 'PLC', 'Electrical and Electronics Drafter', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('0972318372', 'Ana Schumm', '(949) 793-9519', 'lauryn.hartmann@wolff.org', 'Group', 'User Experience Researcher', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('0979832942', 'Destin Jacobi', '870-791-5152', 'rashad44@gerhold.com', 'and Sons', 'Credit Authorizer', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('098511410X', 'Albert Harber', '(571) 501-8158', 'lelia75@altenwerth.com', 'Group', 'Transportation Attendant', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('1217767797', 'Santina Kuvalis', '(272) 209-1142', 'rhand@lindgren.com', 'Ltd', 'Announcer', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('123456789001', 'Arief', '081285356535', 'ariefshitery@gmail.com', 'MIS', 'Head Office', '123456789', '0', NULL, NULL),
('1315884283', 'Magdalen Kuhn', '626.543.1013', 'jeremy.pagac@homenick.com', 'PLC', 'Radio Mechanic', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('1623538998', 'Isidro Kemmer I', '(337) 373-5642', 'janie79@conroy.com', 'Ltd', 'Distribution Manager', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('1650122020', 'Miss Tiara Eichmann', '847-743-8622', 'hbartell@cole.com', 'Group', 'Electronic Drafter', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('1660346894', 'Obie Grant', '+1 (517) 463-6433', 'lubowitz.colin@purdy.com', 'LLC', 'Home Appliance Repairer', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('1756223238', 'Prof. Cleveland Brekke MD', '346-295-8983', 'lwillms@wilderman.com', 'LLC', 'Correspondence Clerk', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('1831957043', 'Kelli Kunze', '(757) 764-1143', 'lang.marques@gutkowski.com', 'and Sons', 'Compacting Machine Operator', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('1842623370', 'Salvatore Bashirian', '+1 (737) 760-7005', 'trystan.orn@kessler.info', 'PLC', 'Boilermaker', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('1891185349', 'Prof. Maureen Huel II', '+1-641-246-1423', 'russ.aufderhar@runolfsdottir.com', 'LLC', 'Veterinary Assistant OR Laboratory Animal Caretaker', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('1924257742', 'Eric Wolff', '(680) 963-4676', 'pagac.liana@rau.com', 'PLC', 'Human Resource Director', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('1959179462', 'Prof. Unique Roberts', '443-802-9622', 'josiah.rolfson@mitchell.com', 'LLC', 'Control Valve Installer', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('2046779630', 'Ms. Frederique Hickle Sr.', '504-322-0048', 'erin08@ebert.com', 'and Sons', 'Data Processing Equipment Repairer', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('2117416705', 'Tremaine Halvorson V', '+1.937.892.2556', 'hackett.evelyn@wilkinson.com', 'Inc', 'Human Resource Manager', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('2319891900', 'Annamarie Gusikowski', '+12403808269', 'eli91@shanahan.com', 'PLC', 'Respiratory Therapy Technician', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('2499396091', 'Laverne Terry', '240.979.0603', 'gilbert.turcotte@mckenzie.com', 'LLC', 'Soil Scientist OR Plant Scientist', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('2600650911', 'Miss Yasmeen Yost I', '678.325.1860', 'howell.ophelia@wisoky.com', 'Inc', 'Septic Tank Servicer', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('2683439954', 'Loyce Hickle', '+1.419.518.0756', 'srath@leuschke.com', 'Ltd', 'Chemical Engineer', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('3015289500', 'Ruby Kuphal', '318.793.9712', 'erau@white.info', 'Group', 'Roof Bolters Mining', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('3108385836', 'Eladio Von', '+1-360-251-7507', 'melissa30@bradtke.com', 'Inc', 'Secretary', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('3189367507', 'Stone Casper', '562-705-4053', 'orie.feeney@dach.info', 'Group', 'Dietetic Technician', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('3201976806', 'Carolanne Rogahn', '657.831.5366', 'jgrady@schowalter.biz', 'LLC', 'Animal Breeder', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('3214640321', 'Madisyn Hyatt', '347-547-5892', 'xhackett@graham.com', 'Group', 'Bridge Tender OR Lock Tender', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('3233677863', 'Mr. Tito Bradtke IV', '+18727355630', 'elmo.gerlach@ondricka.net', 'and Sons', 'Market Research Analyst', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('3296016597', 'Ms. Gilda Rau', '1-276-642-0844', 'breanne.bauch@nikolaus.biz', 'and Sons', 'Medical Technician', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('3318715727', 'Allen Abshire', '443.549.5959', 'vkautzer@turcotte.com', 'Group', 'Short Order Cook', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('3382873648', 'Eda Nienow', '(434) 918-0047', 'trey33@wolff.net', 'Inc', 'Aircraft Cargo Handling Supervisor', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('3423189436', 'Alfreda Stokes III', '445-293-1123', 'delphia17@stracke.com', 'PLC', 'Artillery Officer', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('353953329X', 'Dr. Treva Jerde', '623-774-4484', 'iweissnat@hagenes.com', 'Group', 'Rail Yard Engineer', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('3593368625', 'Bret Lowe IV', '858.213.6132', 'smitham.brant@hoeger.org', 'LLC', 'Director Of Marketing', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('3674809214', 'Izaiah Cassin', '845.479.5972', 'angelo.weimann@corwin.info', 'and Sons', 'Furniture Finisher', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('3941521306', 'Dr. Myriam Grimes V', '1-681-752-9832', 'murphy.garrett@jaskolski.com', 'Group', 'Insurance Policy Processing Clerk', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4056957789', 'Valentin Ryan', '+1-520-284-5598', 'cordelia88@beer.com', 'Inc', 'Power Plant Operator', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4067012675', 'Isabell Prohaska', '+1-334-663-4423', 'clair.kshlerin@corkery.org', 'PLC', 'Locomotive Engineer', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4309527582', 'Caterina Runolfsson', '1-423-678-2698', 'mante.leora@lynch.info', 'Group', 'Aircraft Structure Assemblers', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4423644959', 'Dr. Abby Quigley', '+1-248-694-3278', 'aschmitt@von.org', 'Ltd', 'Media and Communication Worker', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4431994637', 'Kiarra Sauer IV', '580-894-1598', 'bruen.brain@tromp.biz', 'Group', 'Precision Devices Inspector', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4610288559', 'Kathlyn Koepp', '+1-862-376-2534', 'rusty39@ortiz.net', 'Ltd', 'Janitor', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4666808566', 'Cristopher Volkman', '+1 (534) 305-0742', 'hollis.bailey@osinski.org', 'Inc', 'Psychiatrist', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4730517318', 'Beaulah Greenfelder IV', '831-735-7942', 'runolfsdottir.lesly@baumbach.org', 'Group', 'Casting Machine Set-Up Operator', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4788555689', 'Hobart Kuhic', '(661) 856-9195', 'linda11@pouros.com', 'LLC', 'Director Of Business Development', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('5010069849', 'Rowan Parker', '805-398-0593', 'scot.volkman@corkery.info', 'Ltd', 'Courier', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('5078003967', 'Rachelle Ullrich', '1-470-288-3198', 'dejuan41@welch.net', 'Group', 'Air Traffic Controller', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('5207818511', 'Quinten Smith Sr.', '+1.949.669.1162', 'adaniel@torp.com', 'Inc', 'Ship Mates', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('5229438819', 'Kurtis Swaniawski', '845.996.7812', 'juvenal.tillman@lesch.com', 'Group', 'Watch Repairer', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('527700551X', 'Rhett Friesen', '+1-540-792-7061', 'grant.shemar@welch.com', 'LLC', 'Textile Machine Operator', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('5342232929', 'Merritt Kuvalis', '1-904-410-3609', 'iliana72@skiles.biz', 'Group', 'Security Systems Installer OR Fire Alarm Systems Installer', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('538603877X', 'Rebecca Wolff', '+1 (608) 385-2256', 'bcorwin@gerlach.net', 'LLC', 'Political Science Teacher', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('5477087749', 'Adam Murazik', '(959) 365-4920', 'nkulas@denesik.com', 'Group', 'Head Nurse', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('5524972537', 'Mr. Brandon Davis III', '716.777.4673', 'jeramy94@flatley.com', 'Group', 'Aircraft Engine Specialist', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('5572353930', 'Bridgette Bahringer', '336.320.2748', 'deangelo.bednar@von.biz', 'Inc', 'Casting Machine Operator', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('5611700853', 'Eleonore Wisoky', '513.560.0939', 'rebekah15@gorczany.com', 'Ltd', 'Mathematical Technician', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('562271432X', 'Jessyca Mraz', '+1.720.790.3737', 'davis.jaquelin@shields.com', 'Group', 'Civil Engineering Technician', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('5994529168', 'Mr. Jerrod Gutkowski', '+1 (228) 832-6569', 'smarks@emard.info', 'and Sons', 'Occupational Therapist', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('6039182164', 'Alfredo O\'Connell II', '+1-248-578-3629', 'parisian.timmy@skiles.com', 'Group', 'Medical Technician', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('6132384472', 'Prof. Rowan Paucek DDS', '325-308-1615', 'rosenbaum.dolly@bogisich.org', 'Ltd', 'Logging Tractor Operator', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('628186896X', 'Vicky Casper', '+1-713-666-5019', 'hill.merle@crist.info', 'PLC', 'Terrazzo Workes and Finisher', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('630029062X', 'Prof. Neil Bauch DVM', '(859) 860-9254', 'juwan94@mcdermott.org', 'Inc', 'Camera Operator', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('6349728513', 'Tyree Schneider', '(234) 745-1394', 'kking@fahey.info', 'and Sons', 'Engineering Teacher', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('6596972496', 'Leslie Brown', '+1-551-239-3606', 'eschroeder@herman.net', 'Inc', 'Physics Teacher', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('6600951117', 'Wilton Klein', '+15347284336', 'leatha34@schultz.com', 'Inc', 'Cultural Studies Teacher', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('6979157337', 'Glen Kozey', '+1 (520) 229-8559', 'halvorson.shawna@schulist.info', 'LLC', 'Painter and Illustrator', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('7113599710', 'Prof. Jovani Wiza', '747.881.9282', 'josephine.feest@cormier.org', 'LLC', 'Physician', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('7450681749', 'Amina Carroll', '+1-361-269-2476', 'lorena86@crooks.com', 'Inc', 'Librarian', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('7483266953', 'Laverna West', '+1.724.574.3267', 'ruecker.avery@harris.org', 'Ltd', 'Park Naturalist', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('752758954X', 'Frederik Pacocha', '312-919-6041', 'jakubowski.lisette@upton.org', 'LLC', 'Court Clerk', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('7541251194', 'Mr. Otis Zieme Jr.', '+1-330-362-8618', 'jessy.murazik@sipes.biz', 'Inc', 'Machinery Maintenance', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('7947228507', 'Colton O\'Keefe', '+1-618-624-9914', 'vita.mills@wyman.net', 'Ltd', 'Silversmith', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('8093143777', 'Marianna Bogan', '1-313-424-9578', 'ykub@senger.net', 'and Sons', 'Public Relations Manager', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('8113624988', 'Mr. Einar O\'Reilly', '1-515-989-6450', 'jada07@veum.org', 'Group', 'Protective Service Worker', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('8365467488', 'Dr. Audie Kihn', '279-610-4858', 'jayson18@waelchi.com', 'Ltd', 'Sketch Artist', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('8405386696', 'Jameson Ratke', '(754) 368-2786', 'claude.mayer@ohara.net', 'PLC', 'Foundry Mold and Coremaker', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('8424051424', 'Rosie Ullrich', '+1-810-656-4536', 'rita35@nikolaus.com', 'PLC', 'Trainer', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('8468675113', 'Robert West II', '727-245-3178', 'lilly29@pacocha.com', 'PLC', 'Night Shift', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('8480099364', 'Norma Lesch', '1-737-616-0840', 'kwunsch@hane.com', 'Group', 'Structural Metal Fabricator', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('8525709107', 'Harold Stehr', '(313) 589-2897', 'madie.schulist@hegmann.biz', 'Ltd', 'Painting Machine Operator', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('8533269498', 'Yoshiko Murphy', '(423) 731-6176', 'estell.hodkiewicz@terry.net', 'Ltd', 'Industrial Engineer', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('8736384429', 'Stefan Langworth III', '+1-202-728-1827', 'kyra51@bins.org', 'and Sons', 'Engineering', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('8858306104', 'Rosamond Roob', '(734) 463-9267', 'reichert.colin@von.com', 'Ltd', 'Photographic Processing Machine Operator', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('8974785218', 'Rickey Wisozk', '+1.276.443.8775', 'jedediah06@schuppe.com', 'Inc', 'Director Religious Activities', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('9048576407', 'Michel McDermott', '1-380-318-6515', 'alivia57@gaylord.info', 'Group', 'Detective', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('920095572X', 'Donavon Monahan MD', '+1-360-239-5712', 'friesen.fannie@nader.com', 'Ltd', 'Automotive Specialty Technician', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('9210290348', 'Kelsi O\'Conner', '628-545-2502', 'levi55@beer.net', 'and Sons', 'Ambulance Driver', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('9467910020', 'Ettie Rolfson', '+18788378195', 'okuhlman@mcglynn.info', 'and Sons', 'Designer', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('9528917011', 'Prof. Blanche Hayes', '+1-908-949-3990', 'funk.georgianna@altenwerth.com', 'PLC', 'Heating and Air Conditioning Mechanic', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('9545281324', 'Mrs. Abby Mosciski V', '1-814-251-9026', 'taya.bartell@nolan.com', 'Inc', 'Infantry', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('9721212121', 'Melvina Hudson', '+1.830.518.8887', 'mariah43@williamson.info', 'Inc', 'House Cleaner', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('9795633635', 'Prof. Donato Hartmann II', '636-718-7212', 'runolfsson.adelle@ortiz.org', 'Inc', 'Production Planner', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('9856194296', 'Favian Dickinson', '(901) 432-1741', 'medhurst.augustine@dare.com', 'LLC', 'Coil Winders', NULL, NULL, '2022-07-06 10:04:06', '2022-07-06 10:04:06');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kegiatan`
--

CREATE TABLE `tb_kegiatan` (
  `id_kegiatan` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_datang` time NOT NULL,
  `jam_pulang` time NOT NULL,
  `tanggal` date DEFAULT NULL,
  `departemen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bertemu_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_kegiatan`
--

INSERT INTO `tb_kegiatan` (`id_kegiatan`, `nik`, `jam_datang`, `jam_pulang`, `tanggal`, `departemen`, `lokasi`, `keterangan`, `bertemu_nama`, `plat`, `Status`, `created_at`, `updated_at`) VALUES
(7, '3171234567890123', '13:17:00', '14:17:00', '2022-07-21', 'HRD', 'Main Office', 'Rapat', 'Kelli Kunze', 'A 24567 CD', 'Cencle', '2022-07-13 20:17:49', '2022-07-13 20:25:00'),
(8, '3604052208990002', '11:23:00', '13:23:00', '2022-07-27', 'Service', 'Site', 'Rapat', 'Prof. Cleveland Brekke MD', 'D 2929 AD', 'On-Progress', '2022-07-13 20:23:39', '2022-07-13 20:23:39'),
(9, '3171234567890123', '15:14:00', '16:14:00', '2022-07-31', 'PTL', 'Site', 'Rapat', 'Kelli Kunze', 'D 2929 AD', 'On-Progress', '2022-07-13 21:14:44', '2022-07-13 21:14:44');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `nik` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`nik`, `name`, `gender`, `phone`, `position`, `company`, `address`, `created_at`, `updated_at`) VALUES
('3171234567890123', 'MIRA SETIAWAN', 'P', '081211', 'Pegawai', 'PT. Kepercayaan', 'Bojongsoang', '2022-07-13 20:16:56', '2022-07-13 20:16:56'),
('3273122506000010', 'Ghaluh Wizard Anggoro', 'L', '081211', 'admin', 'PT. Ambatukan', 'Telkom', '2022-07-13 19:55:02', '2022-07-13 19:55:02'),
('3528302566814627', 'Joanie Leannon', 'L', '(985) 900-0466', 'Manager', 'Hayes Inc', '16895 Ethan Lock\nPort Ciaraview, NH 84028', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('3528399908037057', 'Lilla Leannon', 'P', '+1-364-401-3052', 'Rolling Machine Setter', 'Reichert-Brown', '30713 Connelly Mills\nSouth Guillermotown, ID 93801', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('3528490448126698', 'Alexys Bayer', 'P', '480-861-2431', 'Correspondence Clerk', 'Kassulke-Dicki', '74189 Tromp River Apt. 271\nSouth Jacintoberg, NM 05726', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('3528657558407528', 'Savion Wolff', 'L', '425.732.5236', 'Forest Fire Fighter', 'Bailey-Robel', '55689 Emard Divide Apt. 250\nDemondside, ID 50385-0544', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('3528666976229935', 'Dr. Adrien Wintheiser DVM', 'P', '+1-575-286-7124', 'Detective', 'Hagenes, Fisher and Satterfield', '71935 Ullrich Forest\nSouth Elnora, ME 27674', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('3528670318099923', 'Aliya Ondricka', 'P', '1-276-443-5688', 'Child Care', 'Schroeder Group', '74494 Jocelyn Fork Apt. 027\nPort Ashton, KY 54561-5783', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('3589255286679033', 'Prof. Eino Eichmann PhD', 'P', '+1.248.726.9073', 'Claims Adjuster', 'Abernathy and Sons', '2201 Roslyn Inlet Apt. 816\nBeahanmouth, MI 24053-4161', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('3589407209937325', 'Dejah Daniel', 'P', '479-304-6596', 'License Clerk', 'Hill-Mosciski', '6159 Kihn Throughway Suite 349\nNorth Germaine, VT 51680-5226', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('3589672740949564', 'Coleman Schmitt', 'L', '(760) 800-3376', 'Computer Support Specialist', 'Ward, Harris and Schmeler', '1854 Austyn Shores\nSouth Americostad, NE 67481', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('3589697779019088', 'Miss Gerry Feil', 'P', '1-901-585-8384', 'Mechanical Equipment Sales Representative', 'Leffler-Nolan', '8412 Verda Knolls\nMcCulloughside, AL 08610', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('3589705115356799', 'Monty Ledner', 'L', '1-276-489-7615', 'Illustrator', 'Cassin, Kub and Schoen', '8204 Hailie Islands\nEldorabury, FL 33879-6564', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('3604052208990002', 'Muhammad Arief Kasyfurrahman', 'L', '081285555555', 'Pegawai', 'PT. Rasisme', 'Bojongsoang', '2022-07-13 19:53:22', '2022-07-13 19:53:22'),
('370433524521213', 'Devante Yost', 'L', '1-267-351-1798', 'Anthropology Teacher', 'Orn-Moore', '50661 Brenda Passage Apt. 189\nWest Modesto, NY 53266', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('378264700311349', 'Shyanne Huels', 'P', '+1 (706) 373-3333', 'Home Health Aide', 'Watsica, Streich and Willms', '8990 Berenice Parkway\nLake Durwardmouth, SD 97629', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4024007118590420', 'Cordia Murazik', 'L', '+1 (417) 227-1443', 'Marking Clerk', 'Gerlach-Cummerata', '89133 Jo Pine\nNorth Garnett, NH 20875', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4024007144189163', 'Mrs. Barbara Brown II', 'L', '+1.319.370.0093', 'Eligibility Interviewer', 'Borer-Crooks', '3751 Schaden Spur Apt. 645\nWindlerland, AR 84618-2756', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4024007156192352', 'Garth Ward', 'P', '+12408674613', 'Mixing and Blending Machine Operator', 'Murazik, Runolfsson and Weber', '191 Paucek Bridge\nPort Albertaport, DE 50395', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4024007165737', 'Lilliana Halvorson', 'L', '(743) 246-5378', 'Central Office', 'Streich, Runolfsdottir and Konopelski', '72681 Marisa Streets Apt. 978\nPort Madge, MT 01801-5835', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4024007166636570', 'Maximus Langosh', 'P', '1-248-783-5119', 'Locksmith', 'Parisian-Connelly', '52740 Eliezer Fort Suite 736\nSouth Aldenhaven, VA 83347-3605', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4024007175813186', 'June Yost I', 'L', '862-866-8108', 'Bindery Machine Operator', 'Block Inc', '873 Karianne Estate Apt. 750\nRickyville, KS 49343', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4024007190267087', 'Dr. Dino Dare', 'L', '+1 (283) 954-3737', 'Geography Teacher', 'Jacobi-Dietrich', '61989 Yvette Fall Apt. 619\nSouth Austen, TN 44277-0426', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4044526646980460', 'Mr. Danny Leuschke MD', 'P', '+17046059309', 'Security Guard', 'Blick-Bahringer', '98835 Keeling Curve Suite 325\nHayesbury, AZ 42458', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4485667295344362', 'Irving Wintheiser', 'L', '+1-520-799-5865', 'Fire Inspector', 'Kirlin-Murray', '74030 Aglae Flats\nLake Hassanburgh, DE 19450', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4485840291295934', 'Emilio Fritsch', 'P', '(605) 266-8729', 'Embalmer', 'Zboncak, Steuber and Prohaska', '5038 Turcotte Isle\nNorth Verlaberg, AZ 32343-5132', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4532491364637496', 'Mrs. Jailyn Schaden I', 'L', '+18585015661', 'Service Station Attendant', 'Muller LLC', '228 Streich Park Suite 156\nNorth Leonport, MO 37647', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4532798862363841', 'Mr. Alec Marks', 'L', '+1-713-403-3844', 'Title Abstractor', 'Wiegand-Ledner', '8791 Ursula Corners Apt. 630\nDashawnmouth, CA 27958-6458', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4539174701113', 'Quinton Collier', 'L', '+1-218-286-2600', 'Teacher Assistant', 'Ziemann-DuBuque', '24989 Cade Drives Suite 382\nNeilview, MS 32940-3946', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4539250363297899', 'Rebeca Franecki IV', 'L', '(915) 650-1648', 'Bill and Account Collector', 'O\'Kon-Crooks', '331 Corwin Throughway Suite 694\nPort Jeantown, SC 01500', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4539742537228487', 'Alyce Hahn', 'P', '(559) 853-9409', 'Metal Molding Operator', 'Kilback-Runte', '843 Oral Causeway Apt. 922\nMuellerberg, NY 68442', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4539742630057031', 'Percy Keebler', 'L', '+1-947-524-9065', 'Highway Patrol Pilot', 'Kovacek Group', '99586 Heathcote Plain Apt. 380\nNorth Tyrell, IN 20150-6083', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4556037242812', 'Jamaal Kautzer', 'P', '(662) 314-0242', 'Statement Clerk', 'Kirlin-Witting', '5418 Witting Mission\nPort Fosterfurt, CA 40108-5976', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4556190225030633', 'Maya Wilderman', 'P', '947-948-4806', 'Plastic Molding Machine Operator', 'Schamberger and Sons', '63954 Stanton Lane Apt. 189\nSouth Shainashire, NE 39463-7042', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4556355590489231', 'Dr. Rhiannon Mitchell', 'L', '234-750-5342', 'Fire Inspector', 'Keeling Group', '36287 Douglas Stravenue Suite 026\nLake Leolafurt, ID 00815-1883', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4556410844589425', 'Hipolito Gusikowski', 'P', '1-603-305-9930', 'Air Traffic Controller', 'Maggio, Erdman and Pollich', '457 Murazik Turnpike Apt. 754\nNew Stone, RI 43862-8048', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4556552579652397', 'Thurman Schumm', 'L', '1-301-280-7446', 'Sys Admin', 'Schmidt-Ullrich', '85966 Hills Mission Apt. 830\nNorth Katlynn, TN 71247', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4556807213239096', 'Shayna Witting', 'L', '+19182635281', 'Industrial Production Manager', 'Gutkowski-Hahn', '12546 Muller Extensions Suite 122\nPort Tyrell, FL 35250-9463', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4716320100712248', 'Urban Koepp', 'L', '747-771-6104', 'Petroleum Pump Operator', 'Rodriguez PLC', '36619 Nya Fall Apt. 863\nMayerfurt, SC 31471', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4716470657704856', 'Trinity Ebert', 'P', '(715) 461-2582', 'Photographic Processing Machine Operator', 'Bergnaum and Sons', '7155 Rosalia Park\nLake Derekville, NC 85976', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4716489466357987', 'Gail Koch', 'L', '+1 (281) 388-9807', 'Medical Records Technician', 'Will, Thiel and Mayer', '3205 Beatty Corners Apt. 665\nVeumside, CT 32370-6452', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4716575371642727', 'Dr. Margarita Greenholt Jr.', 'L', '+1-616-314-7158', 'Municipal Court Clerk', 'McCullough PLC', '32748 Joyce Cape Apt. 062\nPourosberg, MN 00973', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4716685525964560', 'Maiya Casper', 'L', '1-432-993-2274', 'Word Processors and Typist', 'Nitzsche, Jenkins and Quitzon', '2495 Dickens Camp\nPagactown, SD 40741', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4716807514790653', 'Citlalli Prohaska IV', 'P', '248-892-4641', 'Electrical Power-Line Installer', 'Effertz, Wehner and Stiedemann', '831 Tyrese Station\nKuhicfurt, MN 57560', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4716816906996653', 'Dr. John Metz', 'L', '+1 (240) 287-0329', 'Paste-Up Worker', 'Quitzon-Crona', '26640 Mya Square Apt. 395\nDarronport, SC 06004', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4716948989295', 'Ursula Greenholt', 'P', '+1.585.598.6607', 'Home Entertainment Equipment Installer', 'Volkman Group', '7811 Marcellus Isle Suite 016\nMaxieborough, IA 38531', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4846030852935417', 'Miss Krystina Hayes', 'P', '+1-740-786-9559', 'Production Manager', 'Hansen, Osinski and Jacobi', '1830 Wade Fields\nWest Jaren, AR 17401-1489', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4916126105909780', 'Mr. Mackenzie Smitham', 'P', '458.991.7909', 'Electro-Mechanical Technician', 'Frami Group', '878 Roberts Fall\nPort Shannon, ID 74010', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4916148363999147', 'Katelin Daugherty', 'P', '806.698.4196', 'Forming Machine Operator', 'Treutel and Sons', '6503 Ismael Ramp\nCarleyhaven, TX 02163', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4916313369193745', 'Dr. Ewell Hickle V', 'L', '+18579391478', 'Home Appliance Installer', 'Kris Group', '281 Blanca Pine\nElseberg, WY 48408', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4916325174090502', 'Angela Doyle', 'P', '1-320-821-6800', 'Geography Teacher', 'Marvin PLC', '18481 Turcotte Extension\nNorth Gerardland, VT 21836', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4916343382700762', 'Sylvia Lynch II', 'P', '(606) 585-6633', 'Coaches and Scout', 'Gislason-McDermott', '80679 Schuppe Forks Apt. 129\nNorth Eduardo, MD 59654', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4916393659519395', 'Miss Jewell Spencer Sr.', 'P', '781-809-3042', 'Sewing Machine Operator', 'Batz, Ernser and Marquardt', '47805 Dare Overpass\nRohanfort, NM 76577', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4916556452201615', 'Dr. Harley Goodwin', 'L', '574.238.4694', 'Tire Builder', 'Keebler-Nicolas', '864 Feil Stravenue\nNew Zora, PA 03758', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4916684345610386', 'Prof. Fernando Waelchi Sr.', 'P', '+1.831.896.2095', 'Marking Clerk', 'Harvey, Abbott and Nolan', '965 Tamara Crescent\nEast Tyrelchester, NH 77736-6797', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4929553971398381', 'Lillian Jast', 'P', '1-423-791-1049', 'Claims Examiner', 'McCullough, Torp and Larson', '7592 Kevin Walk\nNew Vergiechester, MO 86301', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4929692778802', 'Willard Rath', 'P', '(617) 255-6522', 'Insulation Worker', 'Hand, Heller and Friesen', '84355 Conroy Greens Suite 695\nLake Anita, NJ 71156-3382', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4929772075290076', 'Guido Hoppe', 'P', '281-544-4805', 'Mechanical Engineer', 'Sanford, Streich and Towne', '831 Welch Well\nMarlinfurt, IL 53587', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4929775186516826', 'Shea Jacobs', 'L', '(321) 708-4692', 'Safety Engineer', 'Frami, Heidenreich and Schroeder', '9685 Tyree Orchard\nLake Mikeshire, RI 73137-4785', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('4929967351731849', 'Blake Farrell', 'P', '1-629-775-6239', 'Clinical School Psychologist', 'O\'Reilly, Cassin and Kertzmann', '692 Camren Lake Suite 027\nCorychester, UT 57284', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('5105534201940252', 'Mr. Anastacio Quigley', 'L', '1-765-966-9342', 'Tax Preparer', 'Schmitt Inc', '98690 Cordelia Viaduct\nNorth Matilda, MD 23723-6620', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('5131035781309114', 'Ms. Mia Strosin', 'L', '938.817.0703', 'Media and Communication Worker', 'Homenick, Kassulke and Hintz', '62494 Keven Station Suite 402\nWest Karson, FL 27423', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('5144246738860712', 'Ms. Ayana Dietrich III', 'L', '+1 (586) 529-8982', 'Nuclear Equipment Operation Technician', 'Macejkovic PLC', '682 Nayeli Brooks\nWest Claudine, RI 87797-5706', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('5160823831327879', 'Marcelino Kiehn', 'L', '+1-262-387-9081', 'Computer Support Specialist', 'Bauch-Trantow', '931 West Plain Suite 268\nBrakusland, LA 32587', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('5187048835444871', 'Margaret Sawayn II', 'L', '1-239-200-5506', 'Security Guard', 'Rogahn-Zulauf', '65511 Alexis Mall\nNorth Malvina, HI 48424-5211', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('5209261367426695', 'Myah Shields', 'L', '+15709256178', 'Kindergarten Teacher', 'Mertz LLC', '7455 Kunze Point Apt. 789\nNorth Codyshire, MS 57835-4538', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('5233678413672503', 'Mrs. Madelyn McCullough', 'P', '+1 (229) 908-8720', 'Dietetic Technician', 'Herzog, Sauer and Weber', '83277 Wiza Wall Apt. 494\nOlsontown, NY 05205-3872', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('5295544012997755', 'Saul Stroman', 'L', '(564) 754-3211', 'Rail Car Repairer', 'Parisian-Abshire', '7498 Ratke Village\nHeidenreichside, MT 10958-4524', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('5369427373597250', 'Kenya Friesen', 'L', '+1.984.502.9545', 'Education Administrator', 'Feest, Bradtke and Abshire', '130 Taurean Course Apt. 830\nPort Claud, WV 31200-4466', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('5437868601483128', 'Lucie Dickens', 'L', '1-857-564-4845', 'Train Crew', 'Konopelski, Olson and Terry', '262 Hudson Viaduct Apt. 307\nHolliebury, OR 72349', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('5462729663576126', 'Dr. Jackeline Bartell V', 'P', '731.989.6835', 'Electrician', 'Rath-Schumm', '584 Tyler Lock\nSouth Lily, FL 31362', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('5497316585701757', 'Mr. Beau Dickinson', 'P', '+1 (404) 896-5120', 'Oil Service Unit Operator', 'Rodriguez, Gorczany and Sawayn', '2595 Stephon Ranch\nWest Manuela, IA 40454', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('5525327003839596', 'Prof. Richard Wilderman', 'L', '+13098732093', 'Dishwasher', 'Rippin, Thiel and Emard', '868 Gutmann Road Apt. 100\nLake Judahhaven, NE 62231-2378', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('5568225497902409', 'Thora Nienow', 'L', '1-531-244-5059', 'Roof Bolters Mining', 'Pacocha, Batz and Armstrong', '686 Lazaro Well Apt. 101\nMontyfort, AR 96229-7861', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('5584719272373554', 'Prof. Rod Doyle PhD', 'P', '+1 (214) 944-2600', 'Heating and Air Conditioning Mechanic', 'Koelpin, Botsford and Lowe', '8553 Deanna Streets Apt. 021\nEast Zelmahaven, AR 80328-3035', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('6011011190470972', 'Karlie Bogisich', 'L', '+1.724.656.9271', 'English Language Teacher', 'Barrows-Schinner', '59363 Waters Land\nO\'Reillyland, DE 89977-4335', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('6011089651317627', 'Raven Dach', 'P', '+1-820-270-8246', 'Warehouse', 'Gusikowski, Kutch and Bauch', '19905 Cornell Road Apt. 715\nFerminview, OR 17488', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('6011148553823965', 'Dr. Viviane Schmeler I', 'L', '+1 (207) 746-8053', 'Event Planner', 'Schaefer Inc', '27362 Joshua Fall\nSwaniawskistad, RI 01660-0500', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('6011289961087114', 'Creola Schaden', 'P', '+1-906-957-4380', 'Waste Treatment Plant Operator', 'Sporer Group', '4741 Cummerata Fields Suite 362\nWest Tess, RI 15028-8514', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('6011645557994080', 'Mitchel Wunsch Sr.', 'L', '+1.815.901.3398', 'Grounds Maintenance Worker', 'Leffler Ltd', '43027 Klein Courts Apt. 419\nLake Eddie, AZ 10257', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('6011810717947788', 'Kristy Hagenes DVM', 'P', '252-312-6989', 'Photographic Restorer', 'Welch-Nitzsche', '603 Amari Mountains Suite 421\nNew Merle, SC 83160-9353', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('6011888330121106', 'Cali Fritsch II', 'P', '251.788.6121', 'Social Sciences Teacher', 'Hintz-Swaniawski', '203 Kay Ranch Apt. 511\nSouth Stephaniechester, MO 31358', '2022-07-06 10:04:06', '2022-07-06 10:04:06'),
('6011988713569085', 'Howell Fay', 'L', '336.270.6323', 'Receptionist and Information Clerk', 'Altenwerth, Ankunding and Mraz', '472 Koepp Key Suite 630\nSouth Carlieside, NJ 62801-6072', '2022-07-06 10:04:06', '2022-07-06 10:04:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`),
  ADD KEY `tb_kegiatan_nik_foreign` (`nik`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  MODIFY `id_kegiatan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD CONSTRAINT `tb_kegiatan_nik_foreign` FOREIGN KEY (`nik`) REFERENCES `tb_user` (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
