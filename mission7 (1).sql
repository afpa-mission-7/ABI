-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2020 at 03:22 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mission7`
--

-- --------------------------------------------------------

--
-- Table structure for table `collaborator`
--

CREATE TABLE `collaborator` (
  `id` int(11) NOT NULL,
  `username` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `function` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contract` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `collaborator`
--

INSERT INTO `collaborator` (`id`, `username`, `password`, `firstname`, `lastname`, `function`, `phone`, `email`, `contract`, `status`, `qualification`, `salary`) VALUES
(5, 'ChantalMa', 'Chantal', 'Chantal', 'Marion', 'Directeur Administratif', '0647250720', 'chantal.marion@abi.fr', 'CDI', NULL, NULL, 98500),
(6, 'DominiqueAr', 'Dominique', 'Dominique', 'Arnaud', 'Directeur Général', '0674766318', 'dominique.arnaud@abi.fr', 'CDI', NULL, NULL, 117000),
(7, 'RogerEv', 'Roger', 'Roger', 'Evrard', 'Directeur Financier', '0699279064', 'roger.evrard@abi.fr', 'CDI', NULL, NULL, 105800),
(8, 'AurélieMa', 'Aurélie', 'Aurélie', 'Masse', 'Responsable des ressources humaines', '0695750429', 'aurélie.masse@abi.fr', 'CDI', NULL, NULL, 82200),
(9, 'OcéaneSa', 'Océane', 'Océane', 'Salmon', 'Secrétaire Administratif', '0622823450', 'océane.salmon@abi.fr', 'CDI', NULL, NULL, 45000),
(10, 'ColetteBa', 'Colette', 'Colette', 'Barthelemy', 'Respoonsable commercial', '0630135964', 'colette.barthelemy@abi.fr', 'CDI', NULL, NULL, 62500),
(11, 'VéroniqueHo', 'Véronique', 'Véronique', 'Hoareau', 'Respoonsable du département développement', '0642313761', 'véronique.hoareau@abi.fr', 'CDI', NULL, NULL, 68500),
(12, 'HortenseBo', 'Hortense', 'Hortense', 'Bouchet', 'Secrétaire Technique', '0686787562', 'hortense.bouchet@abi.fr', 'CDI', NULL, NULL, 42500),
(13, 'MarcelGu', 'Marcel', 'Marcel', 'Guillot', 'Technicien Support', '0647026646', 'marcel.guillot@abi.fr', 'CDI', NULL, NULL, 35500),
(14, 'ÉmileGu', 'Émile', 'Émile', 'Guillot', 'Technicien Support', '0618105072', 'Émile.guillot@abi.fr', 'CDD', NULL, NULL, 35500),
(35, 'AstridCo', 'Astrid', 'Astrid', 'Colas', 'Commercial', '0697896441', 'astrid.colas@abi.fr', 'CDD', NULL, NULL, 43600),
(36, 'ZoéLe', 'Zoé', 'Zoé', 'Lefebvre', 'Commercial', '0629226416', 'zoé.lefebvre@abi.fr', 'CDI', NULL, NULL, 41300),
(37, 'MargauxLa', 'Margaux', 'Margaux', 'Lamy', 'Scrum Master', '0667815309', 'margaux.lamy@abi.fr', 'CDD', NULL, 'Architecte', 39500),
(57, 'DanielBl', 'Daniel', 'Daniel', 'Blin', 'Développeur', '0634459063', 'daniel.blin@abi.fr', 'CDD', NULL, 'Développeur Web', 26900),
(58, 'TimothéeRo', 'Timothée', 'Timothée', 'Roche', 'Développeur', '0647679627', 'timothée.roche@abi.fr', 'CDI', NULL, 'Architecte', 27200),
(59, 'ThibaultMe', 'Thibault', 'Thibault', 'Merle', 'Développeur', '0616326681', 'thibault.merle@abi.fr', 'CDI', NULL, 'Architecte', 26900),
(60, 'DenisCh', 'Denis', 'Denis', 'Chauvet', 'Scrum Master', '0601817490', 'denis.chauvet@abi.fr', 'Stage', NULL, 'Designer', 34900),
(61, 'MartinJa', 'Martin', 'Martin', 'Jacquet', 'Développeur', '0657376062', 'martin.jacquet@abi.fr', 'CDD', NULL, 'Designer', 26800),
(62, 'ArthurPi', 'Arthur', 'Arthur', 'Pineau', 'Développeur', '0606376524', 'arthur.pineau@abi.fr', 'Stage', NULL, 'Développeur Web', 28300),
(63, 'JeanWa', 'Jean', 'Jean', 'Wagner', 'Développeur', '0635636329', 'jean.wagner@abi.fr', 'CDI', NULL, 'Designer', 29200),
(64, 'EmmanuelWe', 'Emmanuel', 'Emmanuel', 'Weiss', 'Développeur', '0669363901', 'emmanuel.weiss@abi.fr', 'CDD', NULL, 'Designer', 29900),
(65, 'RichardNo', 'Richard', 'Richard', 'Normand', 'Développeur', '0608978923', 'richard.normand@abi.fr', 'Intérim', NULL, 'Développeur Web', 30300),
(66, 'CharlotteCo', 'Charlotte', 'Charlotte', 'Coulon', 'Développeur', '0601825672', 'charlotte.coulon@abi.fr', 'CDD', NULL, 'Développeur BDD', 32000),
(67, 'AstridRi', 'Astrid', 'Astrid', 'Richard', 'Scrum Master', '0648134865', 'astrid.richard@abi.fr', 'CDD', NULL, 'Développeur BDD', 33900),
(68, 'AlainMa', 'Alain', 'Alain', 'Martin', 'Développeur', '0649066018', 'alain.martin@abi.fr', 'Intérim', NULL, 'Designer', 28300),
(69, 'ArthurLe', 'Arthur', 'Arthur', 'Leconte', 'Développeur', '0626901666', 'arthur.leconte@abi.fr', 'CDD', NULL, 'Designer', 31800),
(70, 'ClémenceBe', 'Clémence', 'Clémence', 'Besnard', 'Développeur', '0691174619', 'clémence.besnard@abi.fr', 'CDI', NULL, 'Designer', 32100),
(71, 'DominiqueBe', 'Dominique', 'Dominique', 'Berthelot', 'Développeur', '0669017196', 'dominique.berthelot@abi.fr', 'Stage', NULL, 'Designer', 25400),
(72, 'FrançoisePa', 'Françoise', 'Françoise', 'Pascal', 'Développeur', '0697994061', 'françoise.pascal@abi.fr', 'CDD', NULL, 'Designer', 35000),
(73, 'PaulinePa', 'Pauline', 'Pauline', 'Parent', 'Développeur', '0637928805', 'pauline.parent@abi.fr', 'CDI', NULL, 'Designer', 30100),
(74, 'GillesKl', 'Gilles', 'Gilles', 'Klein', 'Développeur', '0654772223', 'gilles.klein@abi.fr', 'Stage', NULL, 'Développeur Web', 33300),
(75, 'ÉricLe', 'Éric', 'Éric', 'Leveque', 'Développeur', '0656266397', 'Éric.leveque@abi.fr', 'CDI', NULL, 'Designer', 27700);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `company_name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sector_activity` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revenue` int(11) NOT NULL,
  `staff` int(11) NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `company_name`, `sector_activity`, `address`, `zip`, `city`, `revenue`, `staff`, `phone`, `comment`) VALUES
(1, 'Lejeune SA', 'Vitae sunt culpa.', 'impasse de Gomez\n23 724 Lesageboeuf', '33974', 'Picard', 4330000, 16, '0692290059', 'Exercitationem quo aliquam cum soluta excepturi eum labore unde. Nulla saepe esse quod quis voluptatem tenetur. Ut amet asperiores error. Odio unde cupiditate perspiciatis illum fugiat possimus itaque. Sed aperiam voluptas impedit sit aliquid. Doloribus consectetur repellat earum quaerat. Iste qui unde in laboriosam dolorem blanditiis ut.'),
(2, 'Marty', 'At iusto sunt vitae.', '82, avenue Moreno\n89163 Sauvage', '23218', 'Arnaud-sur-Mer', 1780000, 19, '0651468670', 'Ut explicabo officiis quis atque nam. Quas ipsa distinctio non asperiores labore. Alias dolorem ut mollitia at qui debitis. Non doloremque nam assumenda in porro nihil. Sapiente totam tenetur iste est deleniti eos quo. Quia consequatur nihil eos ipsa nisi quibusdam dignissimos. Dolore sequi cumque labore earum quibusdam eius at dolorem. Incidunt accusamus esse perferendis aut laborum sequi autem. Distinctio similique in quas vero mollitia qui harum est.'),
(3, 'Labbe', 'Aut at magni.', '8, impasse de Thomas\n82101 Denis-la-Forêt', '55353', 'Andre', 1820000, 5, '0623341473', 'Fuga architecto aperiam ut ab est ex qui. Recusandae non ipsum atque distinctio. Suscipit id blanditiis vitae quo sint. Et sed voluptate at nemo error eius a. Dolores velit ut saepe numquam. Maiores esse recusandae architecto labore consequatur nisi enim. Veniam dolorem laboriosam corrupti ut aspernatur debitis. Nihil doloremque beatae deserunt. Quidem fugit enim error. Optio modi animi molestiae neque est est. Autem a qui porro nobis. Quia minus nam quibusdam ut enim aperiam repudiandae.'),
(4, 'Joseph Leclerc S.A.R.L.', 'Recusandae autem.', '69, boulevard de Leblanc\n32 248 Perrotdan', '58937', 'Grenier-sur-Dumas', 4330000, 13, '0693052679', 'Quod et inventore beatae officia veritatis. Rerum aut sit assumenda nam dignissimos id sequi. Tempore repellendus eum dicta est aut. Vel odio quia dolor error dolores ipsum veritatis. Iure praesentium modi corporis ipsum voluptatum a velit quo. Ut reiciendis quia sed debitis laudantium eveniet similique aut. Illum aperiam non mollitia consequatur amet. Quaerat ipsa voluptas maiores rerum numquam quis rerum laboriosam.'),
(5, 'Carlier S.A.R.L.', 'Pariatur molestiae.', '828, place Audrey Brunel\n42 102 Guilbert-les-', '17978', 'Collin', 7130000, 11, '0600936279', 'Odio et hic enim aut ab voluptates ab. Excepturi sed quia sed voluptatem et. Vitae voluptas suscipit eaque fugit id. Omnis ut eos at animi quia labore quam fugiat. Sed vel et delectus sed blanditiis dolorum. Tempora magni sunt amet omnis explicabo est. Quibusdam impedit quis suscipit. Et suscipit est quaerat harum sequi nostrum. Vel quia est quas voluptas. Magnam magnam et quos rerum.');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `title` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `link` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`id`, `project_id`, `title`, `resume`, `date`, `link`) VALUES
(1, 8, 'Culpa qui provident quo beatae et occaecati e', 'Dolore doloremque qui nihil nihil. Ut suscipi', '2020-05-19', '/project/document1.pdf'),
(2, 9, 'Ut recusandae inventore sapiente non molestia', 'Est dolorem sint adipisci qui ipsa placeat do', '2020-09-19', '/project/document2.pdf'),
(3, 10, 'Maxime dolore totam harum quo pariatur vero.', 'Laborum dolorem sunt labore amet et. Rem ipsu', '2020-04-27', '/project/document3.pdf'),
(4, 8, 'Ullam eum perferendis repellendus.', 'Rerum rem magni nobis. Dolores aperiam aperia', '2020-07-21', '/project/document4.pdf'),
(5, 10, 'Animi veniam porro rerum provident adipisci.', 'Sit optio nam reprehenderit et est. Sit quo e', '2020-10-20', '/project/document5.pdf'),
(6, 6, 'Explicabo laborum pariatur dignissimos.', 'Assumenda aliquam et optio sapiente voluptati', '2020-06-10', '/project/document6.pdf'),
(7, 7, 'Vitae beatae velit reiciendis quia.', 'Veniam nisi et a quo aliquam. Quisquam volupt', '2020-06-05', '/project/document7.pdf'),
(8, 6, 'Necessitatibus omnis iusto saepe.', 'Quia ut adipisci exercitationem quibusdam num', '2020-05-29', '/project/document8.pdf'),
(9, 8, 'Temporibus ipsa est et vero odio molestiae et', 'Quibusdam ut aliquid voluptas dolores facere ', '2020-08-24', '/project/document9.pdf'),
(10, 6, 'Officia facere sunt eum eaque.', 'Voluptatem est dolore quia sequi veniam ut co', '2020-10-17', '/project/document10.pdf'),
(11, 8, 'Non aut quia aperiam alias.', 'Ipsum nulla voluptatibus in sapiente fugit ex', '2020-09-21', '/project/document11.pdf'),
(12, 6, 'Id qui quisquam omnis.', 'Qui sunt aut ullam sed aliquid. Qui libero nu', '2020-05-18', '/project/document12.pdf'),
(13, 6, 'Odio totam qui dicta nobis.', 'Et molestias dolorum voluptas accusamus praes', '2020-09-21', '/project/document13.pdf'),
(14, 9, 'Eum dolorem ut sed laborum.', 'Ut soluta velit quis nostrum omnis dolore vol', '2020-08-03', '/project/document14.pdf'),
(15, 8, 'Ratione voluptatem quaerat dolores velit reru', 'Quia quae sit error adipisci et praesentium. ', '2020-08-16', '/project/document15.pdf'),
(16, 9, 'Ad adipisci a sed illum rerum iure.', 'Libero et vero ipsum fugiat. Voluptas quaerat', '2020-06-11', '/project/document16.pdf'),
(17, 8, 'Vitae earum voluptates quod molestias.', 'Velit labore esse autem ducimus ducimus et. D', '2020-09-04', '/project/document17.pdf'),
(18, 6, 'Porro a doloremque enim libero a ea.', 'Cupiditate natus est nihil perferendis omnis ', '2020-04-28', '/project/document18.pdf'),
(19, 6, 'Sed et excepturi fugiat facilis.', 'Iste voluptatum voluptatem laudantium in culp', '2020-06-15', '/project/document19.pdf'),
(20, 8, 'Nam fuga id ipsum reprehenderit nihil omnis.', 'Iure totam eius culpa facilis accusamus quis ', '2020-08-02', '/project/document20.pdf'),
(21, 6, 'Fuga iste vel magnam sit illo qui deserunt.', 'Vero accusantium sint molestiae sequi nostrum', '2020-09-24', '/project/document21.pdf'),
(22, 10, 'Facere nihil est dolor dicta nam.', 'Dolore cum non minus recusandae id accusamus.', '2020-06-19', '/project/document22.pdf'),
(23, 6, 'Est soluta ut suscipit est eos magnam.', 'Magni qui ut numquam molestias reprehenderit ', '2020-06-13', '/project/document23.pdf'),
(24, 10, 'Labore qui debitis et consequatur.', 'Reiciendis possimus quam soluta enim quaerat.', '2020-10-02', '/project/document24.pdf'),
(25, 7, 'Rerum voluptatem ut optio aut itaque autem.', 'Rerum quae quod soluta in consequatur ut eaqu', '2020-09-27', '/project/document25.pdf'),
(26, 10, 'Labore itaque voluptas minima sequi aut.', 'Nulla beatae ipsam fugit non repudiandae. Rem', '2020-07-24', '/project/document26.pdf'),
(27, 10, 'Repudiandae commodi ut nesciunt sequi eos.', 'Officiis vitae et voluptatem excepturi. Sint ', '2020-08-22', '/project/document27.pdf'),
(28, 10, 'Quibusdam sed aut in sint distinctio quia.', 'Quia odio quia soluta facere. Tenetur quos ac', '2020-07-25', '/project/document28.pdf'),
(29, 9, 'Odio iste rerum quia amet dolores rem veniam.', 'Tempora voluptas illo sed animi non labore. E', '2020-09-06', '/project/document29.pdf'),
(30, 9, 'Consequatur molestiae a nisi voluptatum nisi.', 'Et ut et sed qui. Doloremque pariatur dolor e', '2020-04-21', '/project/document30.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_start` date NOT NULL,
  `date_end` date DEFAULT NULL,
  `expected_date_start` date NOT NULL,
  `expected_date_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `name`, `type`, `date_start`, `date_end`, `expected_date_start`, `expected_date_end`) VALUES
(6, 'Quod harum culpa aut molestiae amet harum.', NULL, '2020-08-20', NULL, '2020-08-10', '2020-12-25'),
(7, 'Reiciendis error quia rem dolores dolorum eni', NULL, '2020-10-22', NULL, '2020-10-05', '2021-03-12'),
(8, 'Repellat occaecati voluptatem dolorem.', NULL, '2020-07-22', NULL, '2020-07-12', '2020-12-02'),
(9, 'A dolorum ullam accusantium necessitatibus ut', NULL, '2020-09-27', NULL, '2020-09-23', '2021-02-18'),
(10, 'Voluptas id ut dolor consequuntur nihil nostr', NULL, '2020-06-26', NULL, '2020-06-09', '2020-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `project_collaborator`
--

CREATE TABLE `project_collaborator` (
  `project_id` int(11) NOT NULL,
  `collaborator_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_collaborator`
--

INSERT INTO `project_collaborator` (`project_id`, `collaborator_id`) VALUES
(6, 5),
(6, 10),
(6, 11),
(6, 37),
(6, 72),
(7, 6),
(7, 7),
(7, 57),
(7, 61),
(7, 66),
(8, 8),
(8, 13),
(8, 35),
(8, 60),
(8, 63),
(8, 67),
(8, 70),
(8, 71),
(9, 9),
(9, 12),
(9, 36),
(9, 59),
(9, 62),
(9, 65),
(9, 68),
(9, 73),
(9, 74),
(10, 14),
(10, 58),
(10, 64),
(10, 69),
(10, 75);

-- --------------------------------------------------------

--
-- Table structure for table `project_customer`
--

CREATE TABLE `project_customer` (
  `project_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_customer`
--

INSERT INTO `project_customer` (`project_id`, `customer_id`) VALUES
(6, 1),
(7, 2),
(8, 3),
(9, 4),
(10, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collaborator`
--
ALTER TABLE `collaborator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D8698A76166D1F9C` (`project_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_collaborator`
--
ALTER TABLE `project_collaborator`
  ADD PRIMARY KEY (`project_id`,`collaborator_id`),
  ADD KEY `IDX_4ACAAC1F166D1F9C` (`project_id`),
  ADD KEY `IDX_4ACAAC1F30098C8C` (`collaborator_id`);

--
-- Indexes for table `project_customer`
--
ALTER TABLE `project_customer`
  ADD PRIMARY KEY (`project_id`,`customer_id`),
  ADD KEY `IDX_BC7705D2166D1F9C` (`project_id`),
  ADD KEY `IDX_BC7705D29395C3F3` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collaborator`
--
ALTER TABLE `collaborator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `FK_D8698A76166D1F9C` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`);

--
-- Constraints for table `project_collaborator`
--
ALTER TABLE `project_collaborator`
  ADD CONSTRAINT `FK_4ACAAC1F166D1F9C` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_4ACAAC1F30098C8C` FOREIGN KEY (`collaborator_id`) REFERENCES `collaborator` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `project_customer`
--
ALTER TABLE `project_customer`
  ADD CONSTRAINT `FK_BC7705D2166D1F9C` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_BC7705D29395C3F3` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
