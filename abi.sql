-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 29 oct. 2020 à 16:18
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `abi`
--

-- --------------------------------------------------------

--
-- Structure de la table `collaborator`
--

CREATE TABLE `collaborator` (
  `id` int(11) NOT NULL,
  `username` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `collaborator`
--

INSERT INTO `collaborator` (`id`, `username`, `password`, `firstname`, `lastname`, `phone`, `email`, `status`, `qualification`, `photo`, `address`) VALUES
(5, 'ChantalMa', 'Chantal', 'Chantal', 'Marion', '0647250720', 'chantal.marion@abi.fr', NULL, NULL, NULL, '367, place Hamel\n01714 Dijoux'),
(6, 'DominiqueAr', 'Dominique', 'Dominique', 'Arnaud', '0674766318', 'dominique.arnaud@abi.fr', NULL, NULL, NULL, 'chemin de Martinez\n16572 Nicolasnec'),
(7, 'RogerEv', 'Roger', 'Roger', 'Evrard', '0699279064', 'roger.evrard@abi.fr', NULL, NULL, NULL, 'rue de Muller\n37 169 Ribeiro-les-Bains'),
(8, 'AurélieMa', 'Aurélie', 'Aurélie', 'Masse', '0695750429', 'aurélie.masse@abi.fr', NULL, NULL, NULL, '845, rue Maurice Lefebvre\n25 656 Breton'),
(9, 'OcéaneSa', 'Océane', 'Océane', 'Salmon', '0622823450', 'océane.salmon@abi.fr', NULL, NULL, NULL, '61, avenue Denis Moreno\n99670 Chauveau'),
(10, 'ColetteBa', 'Colette', 'Colette', 'Barthelemy', '0630135964', 'colette.barthelemy@abi.fr', NULL, NULL, NULL, '35, rue Alix Bazin\n46521 Turpin'),
(11, 'VéroniqueHo', 'Véronique', 'Véronique', 'Hoareau', '0642313761', 'véronique.hoareau@abi.fr', NULL, NULL, NULL, '5, boulevard de Lagarde\n18 512 LeroyBourg'),
(12, 'HortenseBo', 'Hortense', 'Hortense', 'Bouchet', '0686787562', 'hortense.bouchet@abi.fr', NULL, NULL, NULL, '6, rue Renaud\n86 084 Guyot-sur-Cordier'),
(13, 'MarcelGu', 'Marcel', 'Marcel', 'Guillot', '0647026646', 'marcel.guillot@abi.fr', NULL, NULL, NULL, 'avenue Jean Barbe\n19648 Meunier-sur-Besson'),
(14, 'ÉmileGu', 'Émile', 'Émile', 'Guillot', '0618105072', 'Émile.guillot@abi.fr', NULL, NULL, NULL, '39, impasse de Millet\n14 884 Pinto'),
(35, 'AstridCo', 'Astrid', 'Astrid', 'Colas', '0697896441', 'astrid.colas@abi.fr', NULL, NULL, NULL, '3, chemin de Seguin\n59 561 Bodin-sur-Charles'),
(36, 'ZoéLe', 'Zoé', 'Zoé', 'Lefebvre', '0629226416', 'zoé.lefebvre@abi.fr', NULL, NULL, NULL, 'chemin de Jacques\n63481 Boulayboeuf'),
(37, 'MargauxLa', 'Margaux', 'Margaux', 'Lamy', '0667815309', 'margaux.lamy@abi.fr', NULL, 'Architecte', NULL, '35, place de Bouvier\n38 283 Bernier-sur-Mer'),
(57, 'DanielBl', 'Daniel', 'Daniel', 'Blin', '0634459063', 'daniel.blin@abi.fr', NULL, 'Développeur Web', NULL, '94, place de Lemoine\n27228 Godardboeuf'),
(58, 'TimothéeRo', 'Timothée', 'Timothée', 'Roche', '0647679627', 'timothée.roche@abi.fr', NULL, 'Architecte', NULL, '4, place Tristan Vincent\n30813 Leleu-les-Bains'),
(59, 'ThibaultMe', 'Thibault', 'Thibault', 'Merle', '0616326681', 'thibault.merle@abi.fr', NULL, 'Architecte', NULL, 'place Alfred Valette\n37 780 Colas'),
(60, 'DenisCh', 'Denis', 'Denis', 'Chauvet', '0601817490', 'denis.chauvet@abi.fr', NULL, 'Designer', NULL, '986, rue de Michaud\n38 781 Guillon-sur-Mer'),
(61, 'MartinJa', 'Martin', 'Martin', 'Jacquet', '0657376062', 'martin.jacquet@abi.fr', NULL, 'Designer', NULL, '7, rue Leger\n03617 Masson'),
(62, 'ArthurPi', 'Arthur', 'Arthur', 'Pineau', '0606376524', 'arthur.pineau@abi.fr', NULL, 'Développeur Web', NULL, '81, boulevard Xavier Marin\n57288 Regniernec'),
(63, 'JeanWa', 'Jean', 'Jean', 'Wagner', '0635636329', 'jean.wagner@abi.fr', NULL, 'Designer', NULL, '2, place de Bonnet\n02998 Etiennedan'),
(64, 'EmmanuelWe', 'Emmanuel', 'Emmanuel', 'Weiss', '0669363901', 'emmanuel.weiss@abi.fr', NULL, 'Designer', NULL, '39, boulevard Bouvier\n39 529 Allard'),
(65, 'RichardNo', 'Richard', 'Richard', 'Normand', '0608978923', 'richard.normand@abi.fr', NULL, 'Développeur Web', NULL, 'rue Thibault\n50498 Arnaud'),
(66, 'CharlotteCo', 'Charlotte', 'Charlotte', 'Coulon', '0601825672', 'charlotte.coulon@abi.fr', NULL, 'Développeur BDD', NULL, '23, boulevard Sanchez\n54317 Pierre-la-Forêt'),
(67, 'AstridRi', 'Astrid', 'Astrid', 'Richard', '0648134865', 'astrid.richard@abi.fr', NULL, 'Développeur BDD', NULL, '70, boulevard Hebert\n55 992 Coste-sur-Legros'),
(68, 'AlainMa', 'Alain', 'Alain', 'Martin', '0649066018', 'alain.martin@abi.fr', NULL, 'Designer', NULL, '65, avenue Honoré Huet\n15 887 Barbe'),
(69, 'ArthurLe', 'Arthur', 'Arthur', 'Leconte', '0626901666', 'arthur.leconte@abi.fr', NULL, 'Designer', NULL, '64, avenue de Torres\n27 806 Marie'),
(70, 'ClémenceBe', 'Clémence', 'Clémence', 'Besnard', '0691174619', 'clémence.besnard@abi.fr', NULL, 'Designer', NULL, '141, impasse Vincent\n80884 Rousseau'),
(71, 'DominiqueBe', 'Dominique', 'Dominique', 'Berthelot', '0669017196', 'dominique.berthelot@abi.fr', NULL, 'Designer', NULL, 'avenue Patrick Martins\n34171 Bonnet'),
(72, 'FrançoisePa', 'Françoise', 'Françoise', 'Pascal', '0697994061', 'françoise.pascal@abi.fr', NULL, 'Designer', NULL, '18, avenue Laurent Evrard\n74282 Lucas-la-Forêt'),
(73, 'PaulinePa', 'Pauline', 'Pauline', 'Parent', '0637928805', 'pauline.parent@abi.fr', NULL, 'Designer', NULL, '23, impasse de Michaud\n51 781 Letellier'),
(74, 'GillesKl', 'Gilles', 'Gilles', 'Klein', '0654772223', 'gilles.klein@abi.fr', NULL, 'Développeur Web', NULL, '81, rue Auguste Lebreton\n74343 Hamel-sur-Torres'),
(75, 'ÉricLe', 'Éric', 'Éric', 'Leveque', '0656266397', 'Éric.leveque@abi.fr', NULL, 'Designer', NULL, '656, place Meunier\n57385 Legros');

-- --------------------------------------------------------

--
-- Structure de la table `contract`
--

CREATE TABLE `contract` (
  `id` int(11) NOT NULL,
  `collaborator_id` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `label` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `hiring_reason` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contract`
--

INSERT INTO `contract` (`id`, `collaborator_id`, `start_date`, `end_date`, `label`, `type`, `salary`, `hiring_reason`) VALUES
(1, 5, NULL, NULL, 'CDI', NULL, 98500, NULL),
(2, 6, NULL, NULL, 'CDI', NULL, 117000, NULL),
(3, 7, NULL, NULL, 'CDI', NULL, 105800, NULL),
(4, 8, NULL, NULL, 'CDI', NULL, 82200, NULL),
(5, 9, NULL, NULL, 'CDI', NULL, 45000, NULL),
(6, 10, NULL, NULL, 'CDI', NULL, 62500, NULL),
(7, 11, NULL, NULL, 'CDI', NULL, 68500, NULL),
(8, 12, NULL, NULL, 'CDI', NULL, 42500, NULL),
(9, 13, NULL, NULL, 'CDI', NULL, 35500, NULL),
(10, 14, NULL, NULL, 'CDD', NULL, 35500, NULL),
(11, 35, NULL, NULL, 'CDD', NULL, 43600, NULL),
(12, 36, NULL, NULL, 'CDI', NULL, 41300, NULL),
(13, 37, NULL, NULL, 'CDD', NULL, 39500, NULL),
(14, 57, NULL, NULL, 'CDD', NULL, 26900, NULL),
(15, 58, NULL, NULL, 'CDI', NULL, 27200, NULL),
(16, 59, NULL, NULL, 'CDI', NULL, 26900, NULL),
(17, 60, NULL, NULL, 'Stage', NULL, 34900, NULL),
(18, 61, NULL, NULL, 'CDD', NULL, 26800, NULL),
(19, 62, NULL, NULL, 'Stage', NULL, 28300, NULL),
(20, 63, NULL, NULL, 'CDI', NULL, 29200, NULL),
(21, 64, NULL, NULL, 'CDD', NULL, 29900, NULL),
(22, 65, NULL, NULL, 'Intérim', NULL, 30300, NULL),
(23, 66, NULL, NULL, 'CDD', NULL, 32000, NULL),
(24, 67, NULL, NULL, 'CDD', NULL, 33900, NULL),
(25, 68, NULL, NULL, 'Intérim', NULL, 28300, NULL),
(26, 69, NULL, NULL, 'CDD', NULL, 31800, NULL),
(27, 70, NULL, NULL, 'CDI', NULL, 32100, NULL),
(28, 71, NULL, NULL, 'Stage', NULL, 25400, NULL),
(29, 72, NULL, NULL, 'CDD', NULL, 35000, NULL),
(30, 73, NULL, NULL, 'CDI', NULL, 30100, NULL),
(31, 74, NULL, NULL, 'Stage', NULL, 33300, NULL),
(32, 75, NULL, NULL, 'CDI', NULL, 27700, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `contract_origin`
--

CREATE TABLE `contract_origin` (
  `id` int(11) NOT NULL,
  `contract_id` int(11) DEFAULT NULL,
  `denomination` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `customer`
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
  `comment` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `customer`
--

INSERT INTO `customer` (`id`, `company_name`, `sector_activity`, `address`, `zip`, `city`, `revenue`, `staff`, `phone`, `comment`, `email`) VALUES
(1, 'Lejeune SA', '1', 'impasse de Gomez', '33974', 'Picard', 4330000, 16, '0692290059', 'Exercitationem quo aliquam cum soluta excepturi eum labore unde. Nulla saepe esse quod quis voluptatem tenetur. Ut amet asperiores error. Odio unde cupiditate perspiciatis illum fugiat possimus itaque. Sed aperiam voluptas impedit sit aliquid. Doloribus consectetur repellat earum quaerat. Iste qui unde in laboriosam dolorem blanditiis ut.', 'contact@lejeune.fr'),
(2, 'Marty', '2', '82, avenue Moreno', '23218', 'Arnaud-sur-Mer', 1780000, 19, '0651468024', 'Ut explicabo officiis quis atque nam. Quas ipsa distinctio non asperiores labore. Alias dolorem ut mollitia at qui debitis. Non doloremque nam assumenda in porro nihil. Sapiente totam tenetur iste est deleniti eos quo. Quia consequatur nihil eos ipsa nisi quibusdam dignissimos. Dolore sequi cumque labore earum quibusdam eius at dolorem. Incidunt accusamus esse perferendis aut laborum sequi autem. Distinctio similique in quas vero mollitia qui harum est.', 'contact@marty.fr'),
(3, 'Labbe', '3', '8, impasse de Thomas', '55353', 'Andre', 1820000, 5, '0623341473', 'Fuga architecto aperiam ut ab est ex qui. Recusandae non ipsum atque distinctio. Suscipit id blanditiis vitae quo sint. Et sed voluptate at nemo error eius a. Dolores velit ut saepe numquam. Maiores esse recusandae architecto labore consequatur nisi enim. Veniam dolorem laboriosam corrupti ut aspernatur debitis. Nihil doloremque beatae deserunt. Quidem fugit enim error. Optio modi animi molestiae neque est est. Autem a qui porro nobis. Quia minus nam quibusdam ut enim aperiam repudiandae.', 'contact@labbe.fr'),
(4, 'Joseph Leclerc S.A.R.L.', '2', '69, boulevard de Leblanc', '58937', 'Grenier-sur-Dumas', 4330000, 13, '0693052679', 'Quod et inventore beatae officia veritatis. Rerum aut sit assumenda nam dignissimos id sequi. Tempore repellendus eum dicta est aut. Vel odio quia dolor error dolores ipsum veritatis. Iure praesentium modi corporis ipsum voluptatum a velit quo. Ut reiciendis quia sed debitis laudantium eveniet similique aut. Illum aperiam non mollitia consequatur amet. Quaerat ipsa voluptas maiores rerum numquam quis rerum laboriosam.', 'contact@joseph.fr'),
(5, 'Carlier S.A.R.L.', '4', '828, place Audrey Brunel', '17978', 'Collin', 7130000, 11, '0600936279', 'Odio et hic enim aut ab voluptates ab. Excepturi sed quia sed voluptatem et. Vitae voluptas suscipit eaque fugit id. Omnis ut eos at animi quia labore quam fugiat. Sed vel et delectus sed blanditiis dolorum. Tempora magni sunt amet omnis explicabo est. Quibusdam impedit quis suscipit. Et suscipit est quaerat harum sequi nostrum. Vel quia est quas voluptas. Magnam magnam et quos rerum.', 'contact@carlier.fr');

-- --------------------------------------------------------

--
-- Structure de la table `document`
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
-- Déchargement des données de la table `document`
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
-- Structure de la table `fonction`
--

CREATE TABLE `fonction` (
  `id` int(11) NOT NULL,
  `collaborator_id` int(11) DEFAULT NULL,
  `label` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `archive` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `fonction`
--

INSERT INTO `fonction` (`id`, `collaborator_id`, `label`, `archive`) VALUES
(1, 5, 'Directeur administratif', 0),
(2, 6, 'Directeur général', 0),
(3, 7, 'Directeur financier', 0),
(4, 8, 'Responsable des ressources humaines', 0),
(5, 9, 'Secrétaire administratif', 0),
(6, 10, 'Respoonsable commercial', 0),
(7, 11, 'Respoonsable du département développement', 0),
(8, 12, 'Secrétaire technique', 0),
(9, 13, 'Technicien support', 0),
(10, 14, 'Technicien support', 0),
(11, 35, 'Commercial', 0),
(12, 36, 'Commercial', 0),
(13, 37, 'Scrum master', 0),
(14, 57, 'Développeur', 0),
(15, 58, 'Développeur', 0),
(16, 59, 'Développeur', 0),
(17, 60, 'Scrum master', 0),
(18, 61, 'Développeur', 0),
(19, 62, 'Développeur', 0),
(20, 63, 'Développeur', 0),
(21, 64, 'Développeur', 0),
(22, 65, 'Développeur', 0),
(23, 66, 'Développeur', 0),
(24, 67, 'Scrum master', 0),
(25, 68, 'Développeur', 0),
(26, 69, 'Développeur', 0),
(27, 70, 'Développeur', 0),
(28, 71, 'Développeur', 0),
(29, 72, 'Développeur', 0),
(30, 73, 'Développeur', 0),
(31, 74, 'Développeur', 0),
(32, 75, 'Développeur', 0);

-- --------------------------------------------------------

--
-- Structure de la table `project`
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
-- Déchargement des données de la table `project`
--

INSERT INTO `project` (`id`, `name`, `type`, `date_start`, `date_end`, `expected_date_start`, `expected_date_end`) VALUES
(6, 'Quod harum culpa aut molestiae amet harum.', NULL, '2020-08-20', NULL, '2020-08-10', '2020-12-25'),
(7, 'Reiciendis error quia rem dolores dolorum eni', NULL, '2020-10-22', NULL, '2020-10-05', '2021-03-12'),
(8, 'Repellat occaecati voluptatem dolorem.', NULL, '2020-07-22', NULL, '2020-07-12', '2020-12-02'),
(9, 'A dolorum ullam accusantium necessitatibus ut', NULL, '2020-09-27', NULL, '2020-09-23', '2021-02-18'),
(10, 'Voluptas id ut dolor consequuntur nihil nostr', NULL, '2020-06-26', NULL, '2020-06-09', '2020-12-12');

-- --------------------------------------------------------

--
-- Structure de la table `project_collaborator`
--

CREATE TABLE `project_collaborator` (
  `project_id` int(11) NOT NULL,
  `collaborator_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `project_collaborator`
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
-- Structure de la table `project_customer`
--

CREATE TABLE `project_customer` (
  `project_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `project_customer`
--

INSERT INTO `project_customer` (`project_id`, `customer_id`) VALUES
(6, 1),
(7, 2),
(8, 3),
(9, 4),
(10, 5);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `collaborator`
--
ALTER TABLE `collaborator`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_E98F285930098C8C` (`collaborator_id`);

--
-- Index pour la table `contract_origin`
--
ALTER TABLE `contract_origin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_E2B1B3532576E0FD` (`contract_id`);

--
-- Index pour la table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D8698A76166D1F9C` (`project_id`);

--
-- Index pour la table `fonction`
--
ALTER TABLE `fonction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_CDD16C3630098C8C` (`collaborator_id`);

--
-- Index pour la table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `project_collaborator`
--
ALTER TABLE `project_collaborator`
  ADD PRIMARY KEY (`project_id`,`collaborator_id`),
  ADD KEY `IDX_4ACAAC1F166D1F9C` (`project_id`),
  ADD KEY `IDX_4ACAAC1F30098C8C` (`collaborator_id`);

--
-- Index pour la table `project_customer`
--
ALTER TABLE `project_customer`
  ADD PRIMARY KEY (`project_id`,`customer_id`),
  ADD KEY `IDX_BC7705D2166D1F9C` (`project_id`),
  ADD KEY `IDX_BC7705D29395C3F3` (`customer_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `collaborator`
--
ALTER TABLE `collaborator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT pour la table `contract`
--
ALTER TABLE `contract`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `contract_origin`
--
ALTER TABLE `contract_origin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `document`
--
ALTER TABLE `document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `fonction`
--
ALTER TABLE `fonction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `contract`
--
ALTER TABLE `contract`
  ADD CONSTRAINT `FK_E98F285930098C8C` FOREIGN KEY (`collaborator_id`) REFERENCES `collaborator` (`id`);

--
-- Contraintes pour la table `contract_origin`
--
ALTER TABLE `contract_origin`
  ADD CONSTRAINT `FK_E2B1B3532576E0FD` FOREIGN KEY (`contract_id`) REFERENCES `contract` (`id`);

--
-- Contraintes pour la table `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `FK_D8698A76166D1F9C` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`);

--
-- Contraintes pour la table `fonction`
--
ALTER TABLE `fonction`
  ADD CONSTRAINT `FK_CDD16C3630098C8C` FOREIGN KEY (`collaborator_id`) REFERENCES `collaborator` (`id`);

--
-- Contraintes pour la table `project_collaborator`
--
ALTER TABLE `project_collaborator`
  ADD CONSTRAINT `FK_4ACAAC1F166D1F9C` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_4ACAAC1F30098C8C` FOREIGN KEY (`collaborator_id`) REFERENCES `collaborator` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `project_customer`
--
ALTER TABLE `project_customer`
  ADD CONSTRAINT `FK_BC7705D2166D1F9C` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_BC7705D29395C3F3` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
