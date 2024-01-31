-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mar. 23 jan. 2024 à 03:44
-- Version du serveur : 5.7.39
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `24_rpni4_site_tim_v2`
--

-- --------------------------------------------------------

--
-- Structure de la table `axes`
--

CREATE TABLE `axes` (
  `id` int(11) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `axes`
--

INSERT INTO `axes` (`id`, `nom`) VALUES
(1, 'Conception'),
(2, 'Intégration'),
(3, 'Programmation'),
(4, 'Médias'),
(5, 'Autre');

-- --------------------------------------------------------

--
-- Structure de la table `axes_cours`
--

CREATE TABLE `axes_cours` (
  `id` int(11) UNSIGNED NOT NULL,
  `axe_id` int(11) UNSIGNED NOT NULL,
  `cours_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `axes_cours`
--

INSERT INTO `axes_cours` (`id`, `axe_id`, `cours_id`) VALUES
(2, 1, 2),
(7, 1, 7),
(11, 1, 11),
(13, 1, 13),
(18, 1, 15),
(20, 1, 17),
(25, 1, 19),
(29, 1, 20),
(32, 1, 23),
(4, 2, 4),
(9, 2, 9),
(14, 2, 13),
(21, 2, 17),
(26, 2, 19),
(33, 2, 23),
(1, 3, 1),
(6, 3, 6),
(10, 3, 10),
(15, 3, 13),
(17, 3, 14),
(22, 3, 17),
(24, 3, 18),
(27, 3, 19),
(30, 3, 21),
(34, 3, 23),
(8, 4, 8),
(12, 4, 12),
(16, 4, 13),
(19, 4, 16),
(23, 4, 17),
(28, 4, 19),
(35, 4, 23),
(3, 5, 3),
(5, 5, 5),
(31, 5, 22),
(36, 5, 24);

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `id` int(11) UNSIGNED NOT NULL,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `session` tinyint(1) NOT NULL,
  `annee` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id`, `nom`, `session`, `annee`) VALUES
(1, 'Introduction à la programmation', 1, 1),
(2, 'Design d\'interface I', 1, 1),
(3, 'Culture numérique et communication', 1, 1),
(4, 'Intégration I', 1, 1),
(5, 'Profession intégrateur', 1, 1),
(6, 'Programmation Web et multimédia I', 2, 1),
(7, 'Design d\'interface II', 2, 1),
(8, 'Montage médiatique : animation', 2, 1),
(9, 'Intégration II', 2, 1),
(10, 'Programmation web et multimédia II', 3, 2),
(11, 'Conception interactive I', 3, 2),
(12, 'Montage médiatique : vidéo', 3, 2),
(13, 'Réalisation de produits numériques interactifs I', 3, 2),
(14, 'Programmation web et multimédia III', 4, 2),
(15, 'Conception interactive II', 4, 2),
(16, 'Montage médiatique : plurimédia', 4, 2),
(17, 'Réalisation de produits numériques interactifs II', 4, 2),
(18, 'Programmation web et multimédia IV', 5, 3),
(19, 'Réalisation de produits numériques interactifs III', 5, 3),
(20, 'Analyse et conception de projets', 5, 3),
(21, 'Programmation spécialisée', 5, 3),
(22, 'Projet de recherche', 6, 3),
(23, 'Réalisation de produits numériques interactifs IV', 6, 3),
(24, 'Stage et activités professionnelles', 6, 3);

-- --------------------------------------------------------

--
-- Structure de la table `diplomes`
--

CREATE TABLE `diplomes` (
  `id` int(11) UNSIGNED NOT NULL,
  `nom` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenom` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `presentation` text COLLATE utf8_unicode_ci,
  `interet_conception` enum('1','2','3','4','5','6','7','8','9','10') COLLATE utf8_unicode_ci NOT NULL DEFAULT '5' COMMENT 'De 1 (pas vraiment ma force) à 10 (vraiment expert)',
  `interet_medias` enum('1','2','3','4','5','6','7','8','9','10') COLLATE utf8_unicode_ci NOT NULL DEFAULT '5' COMMENT 'De 1 (pas vraiment ma force) à 10 (vraiment expert)',
  `interet_integration` enum('1','2','3','4','5','6','7','8','9','10') COLLATE utf8_unicode_ci NOT NULL DEFAULT '5' COMMENT 'De 1 (pas vraiment ma force) à 10 (vraiment expert)',
  `interet_programmation` enum('1','2','3','4','5','6','7','8','9','10') COLLATE utf8_unicode_ci NOT NULL DEFAULT '5' COMMENT 'De 1 (pas vraiment ma force) à 10 (vraiment expert)',
  `courriel` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `linkedin` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `site_web` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `diplomes`
--

INSERT INTO `diplomes` (`id`, `nom`, `prenom`, `presentation`, `interet_conception`, `interet_medias`, `interet_integration`, `interet_programmation`, `courriel`, `linkedin`, `site_web`) VALUES
(26, 'Frigon', 'Ben', '', '8', '8', '10', '10', '', '', ''),
(27, 'Tremblay', 'Simon', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sagittis non nunc vitae scelerisque. Cras dui nibh, ullamcorper in libero non, fringilla <strong>conception</strong> et <strong>d’expérience utilisateur</strong>. Fusce ut nisl eget ex fringilla volutpat. Etiam et turpis imperdiet augue lobortis suscipit et ut tellus. Phasellus maximus leo at mi tempo <strong>d’accessibilité</strong> consequat lectus risus a felis!</p><p> Cras vulputate sed diam in posuere <strong>gestion de projet</strong>, sed imperdiet elit tempor quis. Maecenas quis orci malesuada, euismod libero ut, volutpat arcu. </p><p>Nam eleifend orci et massa faucibus <strong>traitement des médias</strong> sed in <strong>programmation</strong>, euismod libero ut, volutpat arcu. Nam eleifend orci et massa faucibus, quis volutpat tellus tincidun.</p>', '10', '5', '7', '8', 'simontremblay123456@gmail.com', 'https://www.linkedin.com/in/simon-tremblay-2598877a22b/ ', ''),
(28, 'Samson', 'Keven', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sagittis non nunc vitae scelerisque. Cras dui nibh, ullamcorper in libero non, fringilla <strong>conception</strong> et <strong>d’expérience utilisateur</strong>. Fusce ut nisl eget ex fringilla volutpat. Etiam et turpis imperdiet augue lobortis suscipit et ut tellus. Phasellus maximus leo at mi tempo <strong>d’accessibilité</strong> consequat lectus risus a felis!</p><p> Cras vulputate sed diam in posuere <strong>gestion de projet</strong>, sed imperdiet elit tempor quis. Maecenas quis orci malesuada, euismod libero ut, volutpat arcu.</p><p>Nam eleifend orci et massa faucibus <strong>traitement des médias</strong> sed in <strong>programmation</strong>, euismod libero ut, volutpat arcu. Nam eleifend orci et massa faucibus, quis volutpat tellus tincidun.</p>', '9', '6', '9', '10', 'keven-samson-123456@hotmail.com', 'http://www.linkedin.com/in/keven-samson-1234abc56', ''),
(31, 'Gosselin', 'Antoine', '<p>Proin mattis dolor risus, nec blandit ante commodo fringilla. Curabitur viverra vehicula orci, sed suscipit arcu sagittis eu. Proin quis urna a tortor elementum fermentum <strong>programmation</strong> et l’<strong>intégration</strong>.</p><p>. Pellentesque eget ante diam. Vivamus posuere lacus enim, nec rhoncus erat auctor ac. Donec consequat, lorem vitae pretium facilisis, vitae consequat lectus risus a felis. Fusce diam metus, mollis ut ultricies nec, porta nec est. Cras non facilisis tellus, nec viverra magna.</p>', '4', '9', '9', '9', 'antoine-gosselin-1234567@gmail.com', 'http://www.linkedin.com/in/antoine-gosselin-12abd34567/', ''),
(32, 'Gilbert', 'Eliane', '<p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi sed lacinia ex, nec imperdiet augue. Mauris mattis semper euismod. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi sed lacinia ex, nec imperdiet augue. Mauris mattis semper euismod.  Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi sed lacinia ex, nec imperdiet augue. Mauris mattis semper euismod.  Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi sed lacinia ex, nec imperdiet augue. Mauris mattis semper euismod.  Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi sed lacinia ex, nec imperdiet augue. Mauris mattis semper euismod. </p>', '9', '8', '7', '7', 'elianegosselinabcdef@gmail.com', '', ''),
(33, 'Picard', 'Gabriel', '<p>Pellentesque scelerisque erat est. Etiam eget nisi non orci vestibulum porttitor. Vivamus ut felis non est facilisis auctor ac in dolor. </p><p>Pellentesque scelerisque erat est. Etiam eget nisi non orci vestibulum porttitor. Vivamus ut felis non est facilisis auctor ac in dolor.  Pellentesque scelerisque erat est. Etiam eget nisi non orci vestibulum <strong>solutions créatives</strong> ivamus ut felis non est facilisis auctor ac in dolor. </p> <p>Pellentesque scelerisque erat est. Etiam eget nisi non orci vestibulum porttitor <strong>expériences utilisateur fluides et percutantes</strong>. Pellentesque scelerisque erat est. Etiam eget nisi non orci vestibulum porttitor. Vivamus ut felis non est facilisis auctor ac in dolor. </p>\r\n', '8', '9', '7', '5', 'gpycard123456allo@gmail.com', 'www.linkedin.com/in/gpycard123456allo', 'https://dribbble.com/gpycard123456allo'),
(34, 'Millette', 'Hugues', '<p>Mauris mattis finibus mi, et egestas nunc ornare id. </p><p>Mauris mattis finibus mi, et egestas nunc ornare id <strong>Technique d’Intégration multimédias</strong>. Mauris mattis finibus mi, et egestas nunc ornare id, Mauris mattis finibus mi, et egestas nunc ornare id. Mauris mattis finibus mi, et egestas nunc ornare id. Mauris mattis finibus mi, et egestas nunc ornare id. Mauris mattis finibus mi, et egestas nunc ornare id. </p>', '6', '9', '10', '10', 'hugues.millette.123456@gmail.com', '', ''),
(35, 'Bilodeau', 'Alexandre', ' <p>Nullam at lectus at urna aliquet vehicula. Donec nisi ante, tempor eget sem ac, tincidunt malesuada nibh. Praesent blandit, magna id eleifend <strong>design d’interface</strong> sid <strong>Axure</strong>, ligula mi vestibulum magna, quis sollicitudin orci urna suscipit ligula. Ut nec est eget ante vulputate dapibus. Sed posuere luctus justo, eget euismod odio lacinia ut. Mauris sed tellus a mauris porttitor finibus vitae id diam. Fusce facilisis laoreet nulla, id sagittis turpis viverra sit amet.</p><p>Duis quis faucibus est, in posuere ante. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean tellus diam, sagittis a volutpat at, rhoncus in sapien. Pellentesque tincidunt ultricies suscipit. Suspendisse potenti. Vivamus dictum nulla vitae lacus viverra placerat. Donec vehicula ex nec ipsum bibendum placerat in pulvinar neque.</p>', '9', '10', '6', '2', 'alex-bibi-1234567@live.ca', '', ''),
(36, 'Gagnon', 'Léo', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dapibus consectetur tortor efficitur varius <strong>programmation</strong>,en <strong>intégration</strong> et en <strong>conception</strong>. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dapibus consectetur tortor efficitur varius. </p>', '10', '8', '9', '6', 'leo.gagnon.1234567890aa@gmail.com', '', ''),
(37, 'Padre', 'Josua', '<p>Quisque ultrices, orci ac rutrum hendrerit, augue arcu semper eros, quis consectetur diam sem et risus. Integer maximus dolor a quam porta sodales. Quisque bibendum velit ac felis ultrices luctus. Pellentesque vitae nulla eget odio feugiat viverra nec vitae urna. Quisque ultrices, orci ac rutrum hendrerit, augue arcu semper eros, quis consectetur diam sem et risus. Integer maximus dolor a quam porta sodales. Puisque ac felis ultrices luctus. Pellentesque eget odio feugiat viverra nec vitae urna. </p>', '10', '8', '9', '6', 'gilyann.padre@free.fr', 'https://www.linkedin.com/in/gilyann-padre-3048921b8/ ', 'https://gilyann.fr  '),
(38, 'Caron', 'Ariane', '<p>Pellentesque scelerisque erat est. Etiam eget nisi non orci vestibulum porttitor. Vivamus ut felis non est facilisis auctor ac in dolor. </p><p>Pellentesque scelerisque erat est. Etiam eget nisi non orci vestibulum porttitor. Vivamus ut felis non est facilisis auctor ac in dolor.  Pellentesque scelerisque erat est. Etiam eget nisi non orci vestibulum <strong>solutions créatives</strong> ivamus ut felis non est facilisis auctor ac in dolor. </p> <p>Pellentesque scelerisque erat est. Etiam eget nisi non orci vestibulum porttitor <strong>expériences utilisateur fluides et percutantes</strong>. Pellentesque scelerisque erat est. Etiam eget nisi non orci vestibulum porttitor. Vivamus ut felis non est facilisis auctor ac in dolor. </p>\r\n', '9', '7', '7', '9', 'caronaria123123123@hotmail.fr', '', ''),
(39, 'Lito', 'Gabino', '<p>Nullam at lectus at urna aliquet vehicula. Donec nisi ante, tempor eget sem ac, tincidunt malesuada nibh. Praesent blandit, magna id eleifend feugiat, ligula mi vestibulum magna. Mauris sed tellus a mauris porttitor finibus vitae id diam. Fusce facilisis laoreet nulla, id sagittis turpis viverra sit amet.</p>', '10', '8', '3', '2', 'gabino-el-lito1234567@gmail.com', 'https://www.linkedin.com/in/gabino-el-lito1234567/', 'https://gabinolito1234567.myportfolio.com/work'),
(40, 'Padres', 'Louis', '<p>Grâce onec porttitor libero nunc, nec convallis lacus molestie sed.Donec porttitor libero nunc, nec convallis lacus molestie sed.</p><p>Donec porttitor libero nunc <strong>intégration</strong> et la <strong>programmation</strong> onec porttitor libero nunc, nec convallis lacus molestie sed. La libero  <strong>back-end</strong> et <strong>front-end</strong> convallis, sime toter, tincidunt malesuada nibh. Tincidunt malesuada nibh.</p><p>Quisque ultrices, orci ac rutrum hendrerit, augue arcu semper eros, quis consectetur diam sem et risus.</p>', '9', '6', '9', '9', 'louis.padres-1234567@hotmail.ca', '', 'https://www.louispadrealola.ca/'),
(41, 'Picolareti', 'Jonathan', '<p>Pellentesque scelerisque erat est. Etiam eget nisi non orci vestibulum porttitor. Vivamus ut felis non est facilisis auctor ac in dolor. </p><p>Pellentesque scelerisque erat est. Etiam eget nisi non orci vestibulum porttitor. Vivamus ut felis non est facilisis auctor ac in dolor.  Pellentesque scelerisque erat est. Etiam eget nisi non orci vestibulum <strong>solutions créatives</strong> ivamus ut felis non est facilisis auctor ac in dolor. </p>\r\n', '8', '10', '8', '7', 'sajonathan-picolareti-123456@gmail.com', 'https://www.linkedin.com/in/sajonathan-picolareti-123456/', 'https://jonewcreat.wixsite.com/sajonathan-picolareti/portfolio'),
(42, 'Rinfret', 'Matéo', '<p>Donec quis interdum enim, a tincidunt tortor. Cras porttitor turpis justo, et consequat nulla aliquet in. Sed sit amet metus sed tellus finibus convallis. Aenean luctus venenatis viverra <strong>DUT MMI</strong> Donec quis interdum enim, a tincidunt tortor. Cras porttitor turpis justo, et consequat nulla aliquet in. Sed sit amet metus sed tellus finibus convallis. Aenean luctus venenatis viverra <strong><span lang=\"en\">Game Designer</span></strong>.</p>', '7', '8', '9', '9', 'mateorinfret-123456@gmail.com', 'https://www.linkedin.com/in/mateorinfret-123456/', 'https://www.mateorinfretallo.fr/'),
(43, 'Savoie', 'Nicolas', '<p>Etiam ac tortor sed purus semper lobortis sed id justo. Phasellus condimentum eros sed purus finibus, id placerat elit accumsan. Aenean hendrerit consequat turpis id porttitor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur congue turpis ut pellentesque auctor. Maecenas malesuada nulla est, a tincidunt odio rhoncus ac. Ut erat nulla, venenatis at lorem non, sollicitudin convallis massa. </p>', '5', '4', '8', '9', 'nicolassavoie123123456@hotmail.ca', 'https://www.linkedin.com/in/nicolas-savoie-123123456/', ''),
(44, 'Caprino', 'Michel', '<p>Etiam ac tortor sed purus semper lobortis sed id justo. Phasellus condimentum eros sed purus finibus, id placerat elit accumsan. Aenean hendrerit consequat turpis id porttitor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur congue turpis ut pellentesque auctor.  </p><p>Etiam ac tortor sed purus semper lobortis sed id justo. Phasellus condimentum eros sed purus finibus, id placerat elit accumsan. Aenean hendrerit consequat turpis id porttitor.  Maecenas malesuada nulla est, a tincidunt odio rhoncus ac. Ut erat nulla, venenatis at lorem non,  <abbr title=\"programmation\">\"prog\"</abbr>, a tincidunt odio rhoncus ac. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus <abbr title=\"Hypertext Preprocessor\">PHP</abbr>, VueJs, React, et NextJs.</p>\r\n', '5', '8', '8', '9', 'mcaprino1231234567@hotmail.com', 'https://www.linkedin.com/in/michel-caprino-123ab1234567/', ''),
(45, 'Caouette', 'Joséphine', '<p>Vestibulum ut nunc nec tortor ultrices ultricies. Morbi tincidunt tortor nisl, at gravida urna tincidunt pulvinar. Etiam tempus varius odio eu tincidunt <abbr title=\"User eXperience\">UX</abbr> et <abbr title=\"User Interface\">UI</abbr> Vestibulum ut nunc nec tortor ultrices ultricies. Morbi tincidunt tortor nisl, at gravida urna tincidunt pulvinar. Etiam tempus varius odio eu tincidunt. Vestibulum ut nunc nec tortor ultrices ultricies. Morbi tincidunt tortor nisl, at gravida urna tincidunt pulvinar. Etiam tempus varius odio eu tincidunt. </p>', '10', '6', '8', '7', 'josephine.caouette-123456@gmail.com', 'https://www.linkedin.com/in/josephine-caouette-123456/', ''),
(46, 'Desroches', 'Yves', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sagittis non nunc vitae scelerisque. Cras dui nibh, ullamcorper in libero non, fringilla <strong>conception</strong> et <strong>d’expérience utilisateur</strong>. Fusce ut nisl eget ex fringilla volutpat. Etiam et turpis imperdiet augue lobortis suscipit et ut tellus. Phasellus maximus leo at mi tempo <strong>d’accessibilité</strong> consequat lectus risus a felis!</p><p> Cras vulputate sed diam in posuere <strong>gestion de projet</strong>, sed imperdiet elit tempor quis. Maecenas quis orci malesuada, euismod libero ut, volutpat arcu. </p><p>Nam eleifend orci et massa faucibus <strong>traitement des médias</strong> sed in <strong>programmation</strong>, euismod libero ut, volutpat arcu. Nam eleifend orci et massa faucibus, quis volutpat tellus tincidun.</p>', '6', '6', '9', '10', '4237462398746@csfoy.ca', 'https://www.linkedin.com/in/yves-desroches-6b322ba3/', ''),
(47, 'Laurier', 'Rémi', '<p>Etiam ac tortor sed purus semper lobortis sed id justo. Phasellus condimentum eros sed purus finibus, id placerat elit accumsan. Aenean hendrerit consequat turpis id porttitor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur congue turpis ut pellentesque auctor. Maecenas malesuada nulla est, a tincidunt odio rhoncus ac. Ut erat nulla, venenatis at lorem non, sollicitudin convallis massa. Aenean ornare ullamcorper diam, eu laoreet risus dapibus in. Pellentesque dui turpis, pretium sit amet accumsan nec, egestas id ante. In viverra odio viverra risus feugiat scelerisque.</p>', '8', '6', '9', '5', 'remilaurier1231233456@hotmail.com', '', ''),
(48, 'Michaud', 'Anne', '<p>Pellentesque in sapien imperdiet, vehicula leo eget, bibendum enim. Quisque nisl ipsum, eleifend mollis enim a, facilisis rhoncus est.  </p><p> Nullam sed lorem pharetra, maximus nunc et, bibendum feli <abbr title=\" User Interface \">UI</abbr> sed lorem pharetra, maximus nunc et, bibendum felis <abbr title=\"Hypertext Markup Language\">HTML</abbr> et <abbr title=\"Cascading Style Sheets\">CSS</abbr>. Etiam rhoncus, dolor id tempor molestie, dolor nunc ultrices ante, id pulvinar erat justo eget sem. Sed id lacinia ante, a pellentesque leo.</p>', '10', '8', '9', '8', 'anne-michaud123456@hotmail.com', '', ''),
(49, 'Caron', 'Cynthia', '<p>Aenean metus mauris, egestas at maximus ac, tempor non purus. Ut vehicula scelerisque gravida. Etiam a dui eros. In vulputate eleifend orci. Aenean ut vulputate purus. Integer aliquam dictum nibh. Pellentesque semper leo mollis tortor dignissim pretium. Sed tristique ligula non ligula suscipit ullamcorper. </p>', '9', '10', '9', '9', 'cynthia.caron-12345@gmail.com', 'https://www.linkedin.com/in/caroncyn12345/', 'https://caroncyn12345.ca'),
(50, 'Dion', 'Léa', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquet sit amet lacus nec eleifend. Fusce eget enim at nunc euismod accumsan id varius sapien <strong>développeur de jeux vidéo</strong>, sed lorem pharetra, maximus nunc et, bibendum felis.</p><p>J’ai découvert <strong>la programmation Web</strong>. Etiam rhoncus, dolor id tempor molestie, dolor nunc ultrices ante, id pulvinar erat justo eget sem. </p><p>Maecenas tempor pharetra quam at posuere. Maecenas tempor pharetra quam at posuere. </p>', '7', '6', '9', '10', 'dionlea123456@gmail.com', '', ''),
(51, 'Cohan', 'David', '<p>Duis volutpat metus ut orci venenatis, ac ultricies erat mollis. Nulla facilisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit  <span lang=\"en\">back-end</span>.</p><p>In ut sagittis leo. Maecenas tempor pharetra quam at posuere. In ut sagittis leo. Maecenas tempor pharetra quam at posuere. In ut sagittis leo. Maecenas tempor pharetra quam at posuere. </p><p>In ut sagittis leo. Maecenas tempor pharetra quam at posuere. In ut sagittis leo. Maecenas tempor pharetra quam at posuere. In ut sagittis leo. Maecenas tempor pharetra quam at posuere. In ut sagittis leo. Maecenas tempor pharetra quam at posuere. </p>\r\n', '8', '6', '6', '9', 'davidcohan123456@yahoo.com', 'https://www.linkedin.com/in/davidcohan-1232b301194', ''),
(52, 'Hubert', 'Pierre-Michel', '<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis id mauris id metus finibus tristique.  Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis id mauris id metus finibus tristique. </p><p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis id mauris id metus finibus tristique. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis id mauris id metus finibus tristique. </p>\r\n', '8', '7', '7', '9', 'pierre_michel123456@live.ca', 'https://www.linkedin.com/in/pierre_michel123456/', ''),
(53, 'Lambert', 'Jasmin', '<p>Cras ac ornare felis. Duis a enim commodo nisi consectetur sollicitudin.Cras ac ornare felis. Duis a enim commodo nisi consectetur sollicitudin. Cras ac ornare felis. Duis a enim commodo nisi consectetur sollicitudin.</p><p>Cras ac ornare felis. Duis a enim commodo nisi consectetur sollicitudin <span lang=\"en\" >front-end</span>. Cras ac ornare felis. Duis a enim commodo nisi consectetur sollicitudin.Cras ac ornare felis. Duis a enim commodo nisi consectetur sollicitudin.</p>\r\n', '8', '6', '9', '9', 'jasminlambert123456@gmail.com', '', ''),
(54, 'Simard', 'David', '<p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.  </p><p> Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed accumsan commodo finibus. Ut ornare urna sit amet tellus hendrerit venenatis <strong>Intégration</strong> et en <strong>Programmation</strong>.</p><p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed accumsan commodo finibus <strong> gestion de projet et d’équipe</strong>. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed accumsan commodo finibus.</p>', '7', '5', '9', '8', 'david.simard.123456@gmail.com', 'https://www.linkedin.com/in/david-simard-12345/', ''),
(55, 'Melicivic', 'Laurent', '<p>Etiam rhoncus, dolor id tempor molestie, dolor nunc ultrices ante, id pulvinar erat justo eget sem. Sed id lacinia ante, a pellentesque leo. </p><p>Etiam rhoncus, dolor id tempor molestie, dolor nunc ultrices ante, id pulvinar erat justo eget sem. </p><p>Cras rutrum lobortis semper l\'<strong>intégration</strong> et aux <strong>langage de développement</strong>. Cras rutrum lobortis semper <strong>front-end</strong> et <strong>back-end!</strong> Cras rutrum lobortis semper. Cras rutrum lobortis semper. </p><p>Le <strong>JavaScript</strong> et le <strong>SQL</strong> Cras rutrum lobortis semper. Cras rutrum lobortis semper. </p>', '4', '3', '9', '10', 'laurent.melicivic.123456@outlook.com', 'https://www.linkedin.com/in/laurent-melicivic-a1b23456/', ''),
(56, 'Layton', 'Esma', '<p>Cras ac ornare felis. Duis a enim commodo nisi consectetur sollicitudin. Cras ac ornare felis. Duis a enim commodo nisi consectetur sollicitudin.Cras ac ornare felis. Duis a enim commodo nisi consectetur sollicitudin. L’<strong>UX design</strong> et le <strong>développement web</strong> cras ac ornare felis. Duis a enim commodo nisi consectetur sollicitudin. Cras ac ornare felis. Duis a enim commodo nisi consectetur sollicitudin. Cras ac ornare felis. Duis a enim commodo nisi consectetur sollicitudin.</p>', '6', '8', '10', '9', 'esma_layton1234567@gmail.com', 'https://www.linkedin.com/in/esma_layton1234567/', 'https://www.esma_layton2023.fr'),
(57, 'Smith', 'Gabrielle', '<p>Nullam sed lorem pharetra, maximus nunc et, bibendum felis. Pellentesque in sapien imperdiet, vehicula leo eget, bibendum enim. Quisque nisl ipsum, eleifend mollis enim a, facilisis rhoncus est. Duis volutpat metus ut orci venenatis, ac ultricies erat mollis. Nulla facilisi. Lorem ipsum dolor sit.</p><p>Pellentesque in sapien imperdiet, vehicula leo eget, bibendum enim. Quisque nisl ipsum, eleifend mollis enim a, facilisis rhoncus est. Duis volutpat metus ut orci venenatis, ac ultricies erat mollis. Nulla facilisi. Lorem ipsum dolor sit</p>', '10', '9', '7', '5', 'gabrielle.smith123456@gmail.com', '', 'https://gabrielle-smith-123456.myportfolio.com/about'),
(58, 'Perron', 'Isabelle', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquet sit amet lacus nec eleifend. Fusce eget enim at nunc euismod accumsan id varius sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquet sit amet lacus nec eleifend. Fusce eget enim at nunc euismod accumsan id varius sapien. </p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquet sit amet lacus nec eleifend. Fusce eget enim at nunc euismod accumsan id varius sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquet sit amet lacus nec eleifend. Fusce eget enim at nunc euismod accumsan id varius sapien. </p>', '10', '8', '10', '2', 'isabelle-perron-123456@hotmail.com', 'https://www.linkedin.com/in/isabelle-perron-123bd456/', 'https://isabelle-perron-123456.wixsite.com/perron');

-- --------------------------------------------------------

--
-- Structure de la table `etapes`
--

CREATE TABLE `etapes` (
  `id` int(11) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ordre` int(11) NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `projet_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `etapes`
--

INSERT INTO `etapes` (`id`, `nom`, `ordre`, `description`, `projet_id`) VALUES
(1, 'Étape 1 de mon projet', 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum, odio vel convallis aliquet, velit felis elementum purus, at facilisis risus justo nec justo. Integer vitae tristique ex. Sed tincidunt, urna vitae dictum condimentum, nunc odio fringilla tortor, eu facilisis nisl felis eu sem. Ut gravida efficitur felis, nec ultricies risus scelerisque a. Vestibulum vel tortor vitae est tristique hendrerit sit amet ac justo. Proin accumsan, eros et mattis rhoncus, leo sapien auctor neque, non fermentum odio nisi et lectus. Maecenas a dolor urna. Duis non velit quis enim convallis rhoncus ac at leo. Fusce a efficitur justo. Aliquam fringilla, massa ac luctus malesuada, enim metus cursus leo, eu suscipit arcu nisl sit amet elit. Sed malesuada id risus nec blandit. In hac habitasse platea dictumst.', 3),
(2, 'Étape 2 de mon projet', 0, ' Nullam eleifend sagittis bibendum. In tincidunt fermentum arcu, eget tincidunt orci interdum ut. Sed vel dolor vel sapien cursus ultrices. Sed varius urna vel efficitur volutpat. Vivamus efficitur neque id justo varius, ut efficitur odio gravida. Integer vel quam at libero fringilla fringilla eu eu turpis. Curabitur sed neque massa. In hac habitasse platea dictumst. Suspendisse sit amet pharetra nisi. Fusce luctus, eros eu rutrum luctus, neque nisi tincidunt lacus, in ultricies elit elit eu sapien.', 3),
(3, 'Étape 3 ', 0, 'Am eleifend sagittis bibendum. In tincidunt fermentum arcu, eget tincidunt orci interdum ut. Sed vel dolor vel sapien cursus ultrices. Sed varius urna vel efficitur volutpat. Vivamus efficitur neque id justo varius, ut efficitur odio gravida. ', 3);

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) UNSIGNED NOT NULL COMMENT 'Clé primaire',
  `prenom_nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `courriel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `consentement` tinyint(1) NOT NULL,
  `sujet` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contenu` text COLLATE utf8_unicode_ci,
  `dateheure_creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `responsable_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `prenom_nom`, `courriel`, `telephone`, `consentement`, `sujet`, `contenu`, `dateheure_creation`, `responsable_id`) VALUES
(1, 'Camille Langevin', 'camillelange2012@hotmail.com', '418-444-5555', 1, 'Stages', 'Bonjour, \r\nJ\'aimerais connaître la durée du stage de fin d\'étude en entreprise ? \r\n\r\nJ\'airerais savoir aussi le nombre total de stages ?\r\n\r\nMerci et bonne journée !\r\n\r\nCamille =)', '2023-01-16 21:31:51', 3),
(2, 'Robert Dion', 'robert_dion123456haha@gmail.com', '(418) 444-5555 poste 2345', 0, 'Les stages 2023', 'Salut,\r\n\r\nEst-ce que les stages sont payés ?\r\n\r\nMerci,\r\n\r\nRobert', '2023-01-16 21:34:13', 3),
(3, 'Léa Miron', 'leamiron123456hoho@hotmail.com', '4184445555', 0, 'Étudiant d\'un jour', 'Bonjour Monsieur Frigon,\r\n\r\nJ\'aimerais savoir quant je peux participer à l\'activité étudiant d\'un jour ?\r\n\r\nAu plaisir,\r\n\r\nLéa', '2023-01-16 21:37:54', 4);

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

CREATE TABLE `projets` (
  `id` int(11) UNSIGNED NOT NULL,
  `titre` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `technologies` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `url` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diplome_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `cours_id` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`id`, `titre`, `technologies`, `description`, `url`, `diplome_id`, `cours_id`) VALUES
(1, 'Projet OFF ', '<abbr title =\" Structured Query Language\">MySQL</abbr>, <abbr title =\"Hypertext Preprocessor\">PHP</abbr>, <abbr title =\"Hypertext Markup Language\">HTML</abbr>, <abbr title =\"Cascading Style Sheet\">CSS</abbr>, jQuery', '<p>Maecenas malesuada augue et tempus viverra. In vel cursus eros. Proin eu mauris vitae orci fermentum rutrum vitae nec quam. Sed at augue est. Donec tincidunt placerat venenatis.</p>', '', 55, 17),
(2, 'La Pastèque', '<abbr title=\"Cascading Style Sheets\">CSS</abbr>, <abbr title=\"Hypertext Markup Language\">HTML</abbr>,  <abbr title=\"Hypertext Preprocessor\">PHP</abbr>, <abbr title=\"Structured Query Language\">SQL</abbr>, JavaScript, Figma et Axure. ', '<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel tincidunt diam. Vivamus mollis orci enim, vel sodales tortor dapibus sit amet. Vivamus sed quam varius, suscipit ex pretium, tincidunt sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel tincidunt diam. Vivamus mollis orci enim, vel sodales tortor dapibus sit amet. Vivamus sed quam varius, suscipit ex pretium, tincidunt sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel tincidunt diam. Vivamus mollis orci enim, vel sodales tortor dapibus sit amet. Vivamus sed quam varius, suscipit ex pretium, tincidunt sapien. </p>', '', 51, 19),
(3, 'Maquette de cheminement', 'Office 365, Axure et Figma', '<p>Duis felis diam, laoreet vel euismod at, ultrices eget risus. Integer velit nisl, tincidunt in luctus id, luctus id orci. Fusce lacus felis, molestie in bibendum quis, tempor sit amet nisi. Fusce eget tempor metus. Sed dictum, est at dictum venenatis, justo mauris ultricies sem, id mattis urna mi eu arcu. Curabitur viverra arcu ex, ac posuere tortor blandit quis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>', 'https://www.figma.com/file/nvjqPISOJz9yLurk1V4cNg/gr1_gilbertd_maquette', 51, 15),
(4, 'La brûlerie TIM', 'Figma', '<p>Morbi risus elit, mollis at lacus ac, viverra faucibus mauris. In cursus accumsan magna, ac maximus metus suscipit et. Donec varius urna non nibh euismod, ac eleifend felis faucibus. Praesent ultrices, elit eget suscipit dignissim, dui metus tristique diam, eu dapibus tortor quam sed velit. Quisque enim ante, faucibus eu velit ac, consequat mattis nisl. Donec in porta dui. Ut commodo placerat erat, sit amet fringilla massa maximus et. </p>', 'https://www.figma.com/file/8NhQwvCV6WHZfeV2QFMr6F/gr1_gilbertd_maquettepreliminaire', 51, 7),
(5, 'Projet Hexword', '<abbr title=\"Hypertext Markup Language\">HTML</abbr>, <abbr title=\"Cascading Style Sheets\">CSS</abbr>, JavaScript', '<p>Donec viverra lectus vitae molestie facilisis. Proin neque velit, dapibus id sapien nec, lobortis consectetur enim. Morbi malesuada metus nec dolor iaculis, sit amet sodales lorem scelerisque. Aenean id diam nec nulla tincidunt pharetra. Integer gravida vestibulum turpis nec mattis. Duis vel quam eros. </p>', 'https://estellelay.fr/hexword/', 56, 9),
(7, 'Mystère sur Québec', 'Figma', '<p>Nulla facilisi. In placerat imperdiet ante, at sodales turpis posuere et. Fusce congue arcu at augue venenatis mollis. In cursus ac risus id mollis. Maecenas augue turpis, venenatis in interdum eu, sodales ultricies nisl. Proin a magna vitae tellus consectetur ultricies. Nunc tincidunt lacus ut congue ultricies.</p> ', '', 47, 7),
(8, 'La Pastèque', '<abbr title =\"Structured Query Language\">MySQL</abbr>, <abbr title =\"Hypertext Preprocessor\">Php</abbr>, <abbr title =\"Hypertext Markup Language\">HTML</abbr>, <abbr title =\"Cascading Style Sheet\">CSS</abbr>, <abbr title =\"Model-View-Controller\">MVC</abbr>, JavaScript', '<p>Ut commodo placerat erat, sit amet fringilla massa maximus et. Proin eget commodo turpis. Curabitur vehicula vitae ante ut ullamcorper. Proin ante velit, luctus et ultricies quis, suscipit ac sem. Duis risus lorem, euismod eleifend porta sit amet, vulputate id tortor. Aliquam at sollicitudin sem. Nullam interdum tempor condimentum.</p><p>Ut commodo placerat erat, sit amet fringilla massa maximus et. Proin eget commodo turpis. Aliquam at sollicitudin sem. Nullam interdum tempor condimentum.</p>', '', 55, 23),
(9, 'Animation pour Taktik football', 'Adobe After Effect, Adobe Illustrator, Adobe Photoshop', '<p>Duis sit amet lorem id urna facilisis lacinia. Praesent odio sem, consectetur ut condimentum non, volutpat a libero. Sed placerat auctor lacus, dictum malesuada sapien semper eget. Suspendisse quis bibendum sapien. Donec at elit blandit, pellentesque sapien eget, lacinia massa. Proin a magna vitae tellus consectetur ultricies. Nunc tincidunt lacus ut congue ultricies.</p>', 'https://vimeo.com/669866807', 39, 24),
(10, 'Roadtrip', 'Figma, Illustrator', '<p>Sed dictum, est at dictum venenatis, justo mauris ultricies sem, id mattis urna mi eu arcu. Curabitur viverra arcu ex, ac posuere tortor blandit quis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.  Curabitur vehicula eu turpis nec vulputate. Curabitur viverra arcu ex, ac posuere tortor blandit quis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent in mi fringilla ante luctus convallis. Curabitur vehicula eu turpis nec vulputate. </p>', '', 36, 7),
(13, 'Mon Agence web - PixelDRY', '<abbr title=\"Hypertext Markup Language\">HTML</abbr>\r\n<abbr title=\"Cascading Style Sheets\">CSS</abbr>\r\nJavaScript\r\nWordPress', '<pAenean lobortis nisi nec felis accumsan porttitor. Maecenas iaculis sodales lacus, ac gravida quam consectetur in. In vel sapien at dui dignissim dictum. Phasellus eleifend tellus quis felis cursus, at luctus lectus egestas. Pellentesque condimentum et libero ut gravida. Nullam ligula justo, volutpat nec justo ac, consectetur vehicula mi. Aenean lobortis nisi nec felis accumsan porttitor. Maecenas iaculis sodales lacus, ac gravida quam consectetur in. In vel sapien at dui dignissim dictum. Mauris facilisis cursus ullamcorper. Nullam ligula justo, volutpat nec justo ac, consectetur vehicula mi. </p>', '', 47, 17),
(14, 'Tukoné', 'Figma', '<p>Vivamus ac mi et dolor porta placerat sit amet sit amet turpis. In hac habitasse platea dictumst. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam sed nulla odio. Suspendisse eu commodo nisl, molestie vulputate elit. Nunc condimentum interdum leo ut tempus. Vivamus ac mi et dolor porta placerat sit amet sit amet turpis. In hac habitasse platea dictumst. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam sed nulla odio. Suspendisse eu commodo nisl, molestie vulputate elit. Nunc condimentum interdum leo ut tempus. </p>', 'https://www.figma.com/proto/n5vHAPCIgHQ4XENpSL8zZM/Tukon%C3%A9?node-id=1%3A2&scaling=scale-down&page-id=0%3A1&starting-point-node-id=1%3A2', 56, 2),
(15, 'Projet Lyrics', '<abbr title=\"Hypertext Markup Language\">HTML</abbr>, <abbr title=\"Cascading Style Sheets\">CSS</abbr>, JavaScript', '<p>Vestibulum pharetra molestie lacus, ut interdum nulla rhoncus vitae. Sed sed nunc gravida, feugiat leo ut, vehicula tellus. Donec vulputate vehicula dui, non scelerisque dolor pellentesque a. Aenean eu orci eu mi ultrices rutrum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sagittis nunc a feugiat cursus. Aliquam erat volutpat.</p>', 'https://estellelay.fr/lyrics/', 56, 4),
(16, 'La Pastèque', '<abbr title=\"Hypertext Preprocessor\">PHP</abbr>, <abbr  title =\"Hypertext Markup Language\">HTML</abbr>, <abbr  title =\"Syntactically Awesome Style Sheets\">Sass</abbr>, <abbr title =\"Cascading Style Sheet\">CSS</abbr>, Axure, Figma, BladeOne et JavaScript', '<p>Aenean dapibus commodo magna vitae malesuada. Nunc dignissim accumsan nisl id cursus. Fusce at molestie nulla. Vivamus et massa quis purus sagittis elementum at ac diam. Duis diam odio, fringilla eget ligula vel, blandit consequat mauris. Suspendisse aliquet tincidunt neque at consectetur. Ut et varius purus. Sed quam massa, aliquam id nisi sed, volutpat efficitur urna. Curabitur justo neque, ultrices ac feugiat ut, commodo sed libero. Donec hendrerit ultricies gravida. Nulla vel feugiat lectus.</p>\r\n', '', 52, 19),
(17, 'Bodyshop', 'Adobe Illustrator, Figma', '<p>Donec ligula ligula, tincidunt ut lacus et, blandit elementum nisi. Aliquam erat volutpat. Sed porttitor ligula purus, vel rhoncus nisi ultrices ac. In posuere mollis consectetur. Donec ullamcorper venenatis porta. Mauris sollicitudin sollicitudin justo, nec fermentum enim sodales eu. Donec interdum cursus ex, sit amet finibus ex congue nec. </p>', 'https://www.figma.com/file/6A8sIumIjmbcFisZb6x90X/Untitled?node-id=0%3A1', 52, 2),
(18, 'La Pastèque', '<abbr title=\"Cascading Style Sheets\">CSS</abbr>, <abbr title=\"Hypertext Markup Language\">HTML</abbr>, <abbr title=\"Modèle-Vue-Contrôleur\">MVC</abbr >, <abbr title=\"Hypertext Preprocessor\">PHP</abbr>, PhpStorm, Figma, Axure', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ex enim, fermentum pharetra tellus ut, bibendum gravida sapien. Donec dictum ultrices ultrices. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam neque turpis, venenatis ac iaculis a, porta egestas nunc. </p>', '', 48, 23),
(19, 'Outil intégrateur', 'Figma, Axure', '<p>Ut sagittis id magna ut iaculis. Duis aliquam enim et commodo ultrices. Morbi eget risus aliquet, interdum lacus at, vestibulum erat. Aliquam vitae vehicula felis. Aenean sagittis sem id nibh maximus, nec bibendum ante rhoncus. Donec quis felis sit amet orci mattis vestibulum. Cras posuere imperdiet lacinia. Sed quis viverra dolor.</p>', 'https://www.figma.com/file/kjyzRlqHVjYs1Co4Lp4ZT1/gr02_hebertPa_outilIntegrateur?node-id=0%3A1', 52, 20),
(20, 'Ta-atouas', 'Figma, Axure, Illustrator, Photoshop', '<p>Sed ligula arcu, vehicula a imperdiet a, efficitur quis ligula. Morbi laoreet elit quis justo commodo, a lacinia tortor vehicula. Sed nec lacus egestas, pellentesque tortor a, mattis massa. Aliquam erat volutpat. Mauris pellentesque hendrerit elit ut placerat. Morbi rhoncus leo sem, vitae viverra ipsum lobortis et. Integer augue ipsum, egestas non fermentum quis, congue suscipit metus.</p>', 'https://www.figma.com/file/gqjoNhGLYqF1It09HLygO1/gr02_BourgaultA_Taatouas?node-id=0%3A1', 48, 15),
(21, 'Outil intégrateur', 'Figma, Axure', '<p>Ut vel risus a orci bibendum tempor. Quisque condimentum cursus iaculis. Etiam iaculis metus et orci iaculis pretium. Nunc placerat vestibulum auctor. Morbi at tincidunt dui. Vestibulum viverra nisl quam. In quis eros condimentum est iaculis luctus et non risus. Quisque fringilla luctus velit, fermentum condimentum augue gravida vel. Praesent mollis velit lobortis mauris dignissim dapibus. </p>', 'Progression_Questionnaire (axshare.com)', 48, 20),
(22, 'Animation d’un logo', 'Illustrator,\r\nAfter Effects\r\n', '<p>Nam sollicitudin vulputate efficitur. Etiam sapien diam, condimentum in maximus eget, ultrices et risus. Mauris placerat purus a orci hendrerit varius. Duis maximus ut purus a porttitor. Etiam pulvinar felis eget eros varius dignissim. </p> ', '', 48, 16),
(23, 'La pastèque', 'Axure, Figma, <abbr title =\"Hypertext Markup Language\">HTML</abbr>, <abbr title =\"Cascade Style Sheet\">CSS</abbr>, <abbr title =\"Syntactically Awesome Style Sheets\">Sass</abbr>, <abbr title =\"Hypertext Preprocessor\">PHP</abbr>, <abbr title =\"Model-View-Controller\">MVC</abbr>, BladeOne, Javascript.', '<p>Vestibulum venenatis viverra magna at rhoncus. Aliquam faucibus ante nisl, sit amet porttitor lacus lobortis id. Vivamus feugiat placerat scelerisque. Aliquam eu pharetra metus. Sed porta mi id risus aliquam, vel sodales libero finibus. Maecenas placerat elit at dolor scelerisque volutpat. Morbi pellentesque odio sed augue malesuada rhoncus. Morbi vitae commodo ipsum, id condimentum orci. Donec finibus neque ac tempus aliquet. Aliquam non tincidunt neque. </p>\r\n', '', 36, 19),
(24, 'Maquette web pour Pagaie Québec', 'Figma, Adobe Illustrator, Adobe Photoshop', '<p>Cras urna sapien, sodales in elementum a, fringilla vitae erat. Morbi velit lacus, ornare non metus et, dapibus imperdiet tellus. Ut blandit tincidunt odio ut pulvinar. Aliquam nec lacus pretium, sagittis sapien at, maximus sem. Etiam tincidunt enim leo, consectetur porta eros molestie eget.</p>', '', 39, 15),
(25, 'Festival OFF', 'Avec FIGMA, Photoshop, <abbr title=\"Hypertext Preprocessor\">HTML</abbr>, <abbr title=\"Hypertext Preprocessor\">CSS</abbr>, <abbr title=\"Hypertext Preprocessor\">PHP</abbr>, <abbr title=\"Hypertext Preprocessor\">SQL</abbr>, JavaScript', '<p>Aliquam in rhoncus nisi, at aliquam dui. Quisque metus libero, vehicula sit amet imperdiet ac, ullamcorper ut ante. Integer ut luctus nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec sagittis id justo eget ornare. Maecenas convallis accumsan felis ac rutrum. Phasellus a nisi vel nulla volutpat vehicula. Curabitur molestie tincidunt orci, id lacinia mauris sollicitudin vitae. </p>\r\n\r\n<p>Aliquam in rhoncus nisi, at aliquam dui. Donec sagittis id justo eget ornare. Maecenas convallis accumsan felis ac rutrum. Phasellus a nisi vel nulla volutpat vehicula. Curabitur molestie tincidunt orci, id lacinia mauris sollicitudin vitae. </p>', '', 57, 13),
(27, 'Pagaie Québec', 'Figma, Photoshop, Illustrator', '<p>Suspendisse aliquet aliquam convallis. Nam vel nibh ante. Nulla semper metus ut erat sagittis auctor. Mauris tellus erat, sollicitudin in efficitur sit amet, faucibus quis metus. Nam vehicula suscipit tincidunt. Sed semper sapien ac ante porttitor volutpat nec ut lorem. Nulla non nunc lorem. Maecenas iaculis urna eget nisl scelerisque consectetur. Etiam consectetur consectetur luctus. Morbi consequat finibus feugiat.Suspendisse aliquet aliquam convallis. Nam vel nibh ante. Nulla semper metus ut erat sagittis auctor. Mauris tellus erat, sollicitudin in efficitur sit amet, faucibus quis metus. Nam vehicula suscipit tincidunt. Sed semper sapien ac ante porttitor volutpat nec ut lorem. Nulla non nunc lorem. Maecenas iaculis urna eget nisl scelerisque consectetur. Etiam consectetur consectetur luctus. Morbi consequat finibus feugiat.</p>\r\n\r\n\r\n', '', 57, 15),
(28, 'La Pastèque', '<abbr title=\"Asynchronous Javascript and XML\">Ajax</abbr>, <abbr title=\"Cascading Style Sheets\">CSS</abbr>, <abbr title=\"Hypertext Markup Language\">HTML</abbr>\r\n<abbr title=\"Modèle-Vue-Contrôleur\">MVC</abbr>, <abbr title=\"Hypertext Preprocessor\">PHP</abbr>, <abbr title=\"Structured Query Language\">SQL</abbr>', '<p>Suspendisse aliquet aliquam convallis. Nam vel nibh ante. Nulla semper metus ut erat sagittis auctor. Mauris tellus erat, sollicitudin in efficitur sit amet, faucibus quis metus. Nam vehicula suscipit tincidunt. Sed semper sapien ac ante porttitor volutpat nec ut lorem. Nulla non nunc lorem. Maecenas iaculis urna eget nisl scelerisque consectetur. Etiam consectetur consectetur luctus. Morbi consequat finibus feugiat.</p>', '', 47, 19),
(29, 'La Pastèque', '<abbr title=\"Hypertext Markup Language\">HTML</abbr>, <abbr title=\"Cascading Style Sheet\">CSS</abbr>, <abbr title=\"Syntactically Awesome Style Sheet\">SASS</abbr>, <abbr title=\"Hypertext Preprocessor\">PHP</abbr>, Blade, JavaScript et TypeScript.', '<p>Sed dictum, est at dictum venenatis, justo mauris ultricies sem, id mattis urna mi eu arcu. Curabitur viverra arcu ex, ac posuere tortor blandit quis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.  Curabitur vehicula eu turpis nec vulputate. Curabitur viverra arcu ex, ac posuere tortor blandit quis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent in mi fringilla ante luctus convallis. Curabitur vehicula eu turpis nec vulputate. </p>', '', 50, 19),
(30, 'Agence Web - CubeStudio', '<abbr title=\"Cascading Style Sheets\">CSS</abbr>, <abbr title=\"Hypertext Markup Language\">HTML</abbr>, <abbr title=\"Hypertext Preprocessor\">PHP</abbr>, Figma, Axure, PhpStorm. ', '<p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras laoreet nec leo sit amet pellentesque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec convallis libero sed elementum malesuada. Aenean pulvinar nulla eget metus dictum vehicula. Quisque nec ipsum in leo vehicula pretium. Ut tristique tellus at ullamcorper venenatis. Curabitur laoreet quis leo sed vulputate. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>', '', 45, 17),
(31, 'La Pastèque', '<abbr title=\"Cascading Style Sheets\">CSS</abbr>, <abbr title=\"Hypertext Markup Language\">HTML</abbr>, <abbr title=\"Hypertext Preprocessor\">PHP</abbr>, <abbr title=\"Asynchronous Javascript and XML\">Ajax</abbr>, <abbr title=\"Structured Query Language\">SQL</abbr>, <abbr title=\"Modèle-Vue-Contrôleur\">MVC</abbr>,  Figma, Axure, PhpStorm, GitLab.', '<p>Pellentesque lacinia elementum neque, vel sagittis turpis egestas in. Maecenas bibendum egestas nisl id ullamcorper. Sed at dui id dolor elementum laoreet vel eget erat. Aenean quis imperdiet elit, ac vestibulum ante.</p>', '', 45, 19),
(32, 'Animation d’un logo – Cégep de Sainte-Foy', 'Adobe Illustrator, Adobe After Effects, Adobe Audition, Vimeo.', '<p>Duis nec imperdiet lorem. In pellentesque rutrum accumsan. Vivamus metus augue, cursus a justo et, egestas semper eros. Integer eu suscipit tellus. Nam mauris velit, elementum eu tellus non, lacinia convallis dolor. </p>', 'https://vimeo.com/manage/videos/525617244', 46, 16),
(33, 'Festival OFF', 'Figma, <abbr title=\"Hypertext Markup Language\">HTML</abbr>, <abbr title=\"Cascading Style Sheets\">CSS</abbr>, WordPress, JavaScript ', '<p>Fusce pellentesque a ipsum at condimentum. Donec facilisis arcu eu turpis dignissim, ac porta arcu porta. Cras eleifend augue metus, id commodo diam molestie ut. Sed interdum dictum sapien ac ultrices. Maecenas commodo ante in odio finibus, eget cursus ipsum convallis. Morbi ultricies arcu non convallis porttitor. Aliquam erat volutpat.</p>', '', 46, 13),
(34, 'Destination Roadtrip', 'Figma, Adobe Illustrator, Adobe Photoshop', '<p>Curabitur ut fringilla dui. Vestibulum blandit felis at urna viverra sollicitudin. Nam ut quam eget dolor elementum ultrices et et mi. Aliquam molestie ullamcorper ex, id finibus magna bibendum accumsan. Mauris in turpis at ipsum tristique tempor eu consectetur enim. Sed sollicitudin nisl eu venenatis porta. Nulla pulvinar id ex quis efficitur. Morbi ultricies, arcu non blandit tincidunt, turpis quam ullamcorper mauris, imperdiet maximus risus ipsum id orci.</p>', '', 58, 7),
(35, 'Alaïa', 'Figma, Adobe Illustrator, Adobe Photoshop', '<p>Phasellus mattis leo eget nisl posuere vestibulum. Vestibulum accumsan, ante ac commodo feugiat, dolor metus bibendum velit, eu vehicula lectus justo ac tortor. </p>', '', 58, 2),
(36, 'La Pastèque', '<abbr title=\"Hypertext Markup Language\">HTML</abbr>, <abbr title=\"Cascading Style Sheet\">CSS</abbr>, <abbr title=\"Hypertext Preprocessor\">PHP</abbr>, <abbr title=\"Modèle-Vue-Contrôleur\">MVC</abbr>, <abbr title=\"Structured Query Language\">SQL</abbr>, JavaScript', '<p>Pellentesque lacinia elementum neque, vel sagittis turpis egestas in. Maecenas bibendum egestas nisl id ullamcorper. Sed at dui id dolor elementum laoreet vel eget erat. Aenean quis imperdiet elit, ac vestibulum ante. Pellentesque lacinia elementum neque, vel sagittis turpis egestas in. Maecenas bibendum egestas nisl id ullamcorper. Sed at dui id dolor elementum laoreet vel eget erat. Aenean quis imperdiet elit, ac vestibulum ante.</p>', '', 53, 19),
(37, 'Team Astro – Agence Web', '<abbr title=\"Hypertext Markup Language\">HTML</abbr>, <abbr title=\"Cascading Style Sheet\">CSS</abbr>, <abbr title=\"Hypertext Preprocessor\">PHP</abbr>, JavaScript et WordPress', '<p>Vivamus pharetra imperdiet ex, id ultricies enim. Sed feugiat erat vitae rutrum tempus. Curabitur dapibus justo eu mauris consectetur laoreet. Sed sodales massa in lectus condimentum viverra. Morbi nec velit tellus. Nullam vitae nunc quis est viverra aliquet quis quis justo. Vestibulum mattis dui sed mauris efficitur dignissim. Nullam sit amet tellus tincidunt nisl imperdiet elementum eu at erat. Mauris purus urna, aliquam eu ante quis, varius pharetra magna.</p>\r\n', '', 53, 17),
(38, 'Ta-atouas', 'Figma.Axure', '<p>Fusce sit amet elit sed turpis sollicitudin vestibulum non eu dui. Etiam eget erat id urna porttitor ullamcorper sed ac ipsum. Mauris imperdiet aliquam cursus. Ut sodales lacus ut facilisis suscipit. In sit amet tortor tristique, rutrum augue quis, dictum neque. Nunc quis neque tincidunt, tincidunt augue eu, consectetur est.</p>', '', 53, 15),
(39, 'Alaia', 'Figma, Photoshop, Illustrator', '<p>Fusce pellentesque a ipsum at condimentum.</p>', '', 49, 7),
(40, 'Festival OFF', '<span lang=\"en\"><abbr title=\"Hypertext Markup Language\">HTML</abbr></span>, <span lang=\"en\"><abbr title=\"Cascading Style Sheets\">CSS</abbr></span>, <span lang=\"en\"><abbr title=\"Syntactically Awesome Style Sheets\">SASS</abbr></span>, <span lang=\"en\"><abbr title=\"Hypertext Preprocessor\">PHP</abbr></span>, <span lang=\"en\"><abbr title=\"Structured Query Language\">SQL</abbr></span>', '<p>Cras in neque sit amet velit malesuada fringilla. In vestibulum sollicitudin mi commodo tincidunt. Donec a dapibus urna, nec rutrum lectus. Aenean vehicula, dolor ut placerat blandit, neque ligula porta massa, nec dignissim leo odio in enim. </p>', '', 49, 13),
(41, 'Memorize', 'Swift, SwiftUI', '<p>Donec tempus mi non laoreet gravida. Aenean eleifend, dui at fringilla imperdiet, ante elit interdum libero, nec mattis eros mi id risus.</p>', '', 49, 22),
(42, 'Heartless', 'JavaScript, D3.js, <abbr title=\"Hypertext Markup Language\">HTML</abbr> et <abbr title=\"Cascading Style Sheet\">CSS</abbr>', '<p>Suspendisse potenti. Etiam egestas dignissim sem vitae fringilla. Suspendisse faucibus convallis dolor, a vehicula metus eleifend at. Aenean sit amet efficitur dolor, vitae interdum sem. Vivamus ultricies sapien vel sapien tincidunt imperdiet. In eget diam massa. Proin ac rhoncus diam, vestibulum auctor dui.Suspendisse potenti. Etiam egestas dignissim sem vitae fringilla. Suspendisse faucibus convallis dolor, a vehicula metus eleifend at. Aenean sit amet efficitur dolor, vitae interdum sem. Vivamus ultricies sapien vel sapien tincidunt imperdiet. In eget diam massa. Proin ac rhoncus diam, vestibulum auctor dui.</p>', 'https://heartless.mateosuslu.fr/', 42, 4),
(43, 'HexaWord', '<abbr title =\"Hypertext Markup Language\">HTML</abbr>, <abbr title =\"Cascading Style Sheet\">CSS</abbr> et jQuery.', '<p>Fusce dictum, urna ac egestas aliquam, urna lorem viverra enim, at sodales justo mauris eget ipsum. Pellentesque gravida ultrices leo. Pellentesque at nunc lorem. Cras gravida elit ut vestibulum porttitor. Donec varius mauris ut pulvinar aliquet. Donec sit amet ipsum ut erat consectetur molestie. Phasellus tellus nulla, aliquet a lacus et, scelerisque sollicitudin enim.</p>', 'https://hexaword.gilyann.fr/ ', 37, 4),
(44, 'Réserve ta place', 'Figma, Illustrator, Photoshop, Uxpressia, Draw.io ', '<p>Nam et aliquam mi. Proin dignissim cursus varius. Nunc a nunc eget risus finibus blandit. Nullam sed congue justo. Phasellus ligula sapien, egestas molestie venenatis non, feugiat vel lorem. Etiam placerat ipsum ac elementum sodales. Maecenas eros lectus, dapibus quis magna sit amet, congue rutrum risus. Maecenas viverra est eget mattis interdum. Nam faucibus purus eu tortor dapibus porttitor. Cras arcu tellus, rutrum sit amet urna sed, porta euismod ex. </p>\r\n', 'https://www.figma.com/file/njH6m1eJwLk8No3A0Cop1d/R%C3%A9serve-Ta-Place?node-id=0%3A1', 33, 20),
(45, 'Moosy', 'Avec le <abbr title=\"Content management system\">CMS</abbr> WordPress, mais également à l’aide de langages comme\r\n<abbr title =\"Hypertext Markup Language\">HTML</abbr>, <abbr title =\"Cascading Style Sheet\">CSS</abbr> et JavaScript.', '<p>Proin vehicula ligula neque, quis gravida libero cursus quis. Vestibulum sit amet tellus eleifend, ullamcorper erat id, convallis sapien. Etiam vestibulum posuere augue, et bibendum lectus. Curabitur vitae dictum mauris. Mauris tristique turpis non sapien malesuada, et eleifend augue convallis. Sed elementum commodo mauris, quis pulvinar mi venenatis et.Proin vehicula ligula neque, quis gravida libero cursus quis. Vestibulum sit amet tellus eleifend, ullamcorper erat id, convallis sapien. Etiam vestibulum posuere augue, et bibendum lectus. Curabitur vitae dictum mauris. Mauris tristique turpis non sapien malesuada, et eleifend augue convallis. Sed elementum commodo mauris, quis pulvinar mi venenatis et.</p>\r\n', 'https://moosy.fr/ ', 37, 4),
(46, 'Hexwords', 'jQuery, <abbr title =\"Hypertext Markup Language\">HTML</abbr> et <abbr title =\"Cascading Style Sheet\">CSS</abbr>', '</p>Vestibulum eu blandit ante, ut imperdiet ligula. Aenean euismod lectus urna, ut hendrerit libero pellentesque in. Praesent tincidunt efficitur molestie. Mauris eu ipsum sit amet lacus sagittis dictum sed dignissim nulla. Vivamus eleifend metus id dictum cursus. Vestibulum placerat urna in tellus posuere efficitur. </p>\r\n</p>Vestibulum eu blandit ante, ut imperdiet ligula. Aenean euismod lectus urna, ut hendrerit libero pellentesque in. Praesent tincidunt efficitur molestie. Mauris eu ipsum sit amet lacus sagittis dictum sed dignissim nulla. Vivamus eleifend metus id dictum cursus. Vestibulum placerat urna in tellus posuere efficitur. Cras ultricies condimentum ex in consequat.</p>\r\n', 'https://hexwords.mateosuslu.fr/', 42, 4),
(47, 'Portfolio', 'jQuery, <abbr title =\"Hypertext Markup Language\">HTML</abbr>, <abbr title =\"Cascading Style Sheet\">CSS</abbr>, <abbr title=\"Hypertext Preprocessor\">PHP</abbr> et <abbr title=\"Structured Query Language\">SQL</abbr>', '<p>Phasellus vitae sapien maximus, tincidunt leo id, viverra lectus. Duis mattis mauris nec urna volutpat pretium. Fusce vestibulum, mauris sit amet porttitor euismod, velit nisi volutpat elit, non pretium lorem ex sodales diam. Suspendisse luctus aliquet sapien eu ullamcorper. Praesent eleifend lobortis congue. </p>', 'https://hexwords.mateosuslu.fr/', 42, 4),
(48, 'Portfolio', 'Les technologies que j’ai utilisées pour la réalisation de mon portfolio sont <abbr title =\"Hypertext Markup Language\">HTML</abbr>, <abbr title =\"Cascading Style Sheet\">CSS</abbr> et JavaScript. Le site n’étant pour le moment pas entièrement fini, je prévois également d’utiliser <abbr title =\"Syntactically awesome stylesheets\">Sass</abbr> par la suite.', '<p>Cras ex eros, laoreet ac fringilla vel, porta vitae tortor. Suspendisse lacinia tellus eu congue blandit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>', 'https://gilyann.fr', 37, 4),
(49, 'Pagaie Québec', 'Figma, Illustrator, Photoshop, Uxpressia, Draw.io', '<p>Mauris feugiat, arcu vitae tincidunt finibus, nunc felis feugiat ante, quis euismod enim quam eget elit. Vivamus elit quam, volutpat auctor sem vitae, semper interdum massa. Quisque viverra sed nulla non faucibus. Phasellus lacus turpis, semper et consectetur in, interdum at nisi. Vestibulum nisl dui, tristique id dolor eu, placerat molestie velit. </p>', 'https://dribbble.com/shots/16970030-Interfaces-web-Pagaie-Qu-bec', 33, 15),
(50, 'Destination l’ouest canadien', 'Figma, Photoshop, Illustrator, Axure,', '<p>Integer ut libero in est semper vulputate. Integer id sapien sed arcu posuere condimentum. Pellentesque consectetur ultrices vulputate. Etiam vehicula turpis libero. Curabitur orci nibh, auctor ac tincidunt et, luctus vitae metus. Sed hendrerit odio sit amet tortor gravida, eu finibus justo posuere. </p>\r\n', 'https://www.figma.com/file/hTzFiPqhJ0XMPo21TFuVun/gr01_sagnardjsJonathan_Roadtrip?node-id=0%3A1', 41, 7),
(51, 'BrulerieTim', 'Figma,Photoshop,illustrator,', '<p>Donec in imperdiet diam, ac tincidunt nunc. Aliquam tincidunt dui ex. Vivamus sed consectetur tellus. Nullam vel finibus magna, nec placerat nisl. Quisque rutrum, dolor vitae rutrum sodales, elit nisl feugiat ex, eu ornare est odio sit amet enim. Quisque vulputate nisl lacus, nec fermentum dolor pretium feugiat. </p>\r\n', 'https://www.figma.com/file/um6xT2H2WYKpfwCD1PsYPP/gr1_SagnardJonathan_brulerie?node-id=54%3A156', 41, 2),
(52, 'La Pastèque', '<abbr title=\"Asynchronous Javascript and XML\">Ajax</abbr>, <abbr title=\"Cascading Style Sheets\">CSS</abbr>, <abbr title=\"Hypertext Markup Language\">HTML</abbr>, <abbr title=\"Hypertext Preprocessor\">PHP</abbr>, <abbr title=\"Structured Query Language\">SQL</abbr>, Figma, Axure, Photoshop,', '<p>Vestibulum hendrerit cursus magna, vel vestibulum nisl venenatis sed. Proin est dolor, eleifend quis velit nec, placerat eleifend metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; In aliquam felis vitae leo congue, nec aliquet nunc blandit. Praesent interdum tristique arcu, non pulvinar odio pellentesque ut. Vestibulum hendrerit cursus magna, vel vestibulum nisl venenatis sed. Proin est dolor, eleifend quis velit nec, placerat eleifend metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; In aliquam felis vitae leo congue, nec aliquet nunc blandit. Praesent interdum tristique arcu, non pulvinar odio pellentesque ut. </p>\r\n', 'https://www.figma.com/file/kzFHdD7nZeZfMaxKG5MXBj/team-groseilles?node-id=0%3A1', 41, 18),
(54, 'Logo animé', 'Adobe After Effect, Adobe Audition, Adobe Illustrator', '<p>Integer ac lectus lorem. Integer eu nisi sollicitudin, gravida velit et, pharetra est. Maecenas eu commodo mi. Morbi id erat accumsan, tristique lorem a, ultricies quam. </p>', 'https://vimeo.com/528309193', 38, 16),
(55, 'Webnet – Agence Web', 'Axure, Figma, <abbr title=\"Hypertext Markup Language\">HTML</abbr>, <abbr title=\"Cascading Style Sheet\">CSS</abbr>, <abbr title=\"Syntactically Awesome Style Sheets\">SASS</abbr>, <abbr title=\"Hypertext Preprocessor\">PHP</abbr>, WordPress et JavaScript', '<p>Nulla hendrerit scelerisque risus volutpat tristique. Ut pharetra fermentum risus a lobortis. Fusce gravida augue at felis gravida, non maximus enim suscipit. Nam non dui nunc. Donec cursus est nec diam porttitor tincidunt. Nunc vel diam ac urna maximus mattis nec sed sem. Mauris at placerat magna. Mauris a tincidunt nisi, sed tincidunt erat. Duis sem lorem, consequat sagittis mollis vitae, tempus a nisi. Ut in tellus malesuada, aliquam est at, pellentesque purus.</p>', '', 31, 17),
(56, 'Logo animé', 'Adobe Illustrator, Adobe After Effects, Adobe Audition', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi venenatis interdum ante, ut tincidunt tortor pulvinar ut. Duis euismod nisl in dapibus venenatis. Aliquam sit amet enim quis est volutpat interdum at quis massa. Suspendisse tincidunt pellentesque scelerisque. Cras egestas augue augue, vel efficitur nibh dictum sed. </p>\r\n', 'https://vimeo.com/527538994', 31, 16),
(57, 'Centre de documentation virtuel', 'Axure, Figma', '<p>Donec sit amet ante dui. Vestibulum massa velit, posuere fermentum nisi ac, imperdiet volutpat enim. Aliquam sed magna nec sem maximus finibus in eget lorem. Donec at arcu placerat, molestie augue sit amet, interdum eros. Donec eu porttitor dui. Fusce at interdum nibh. In sapien augue, pulvinar id libero nec, hendrerit lobortis orci. Maecenas finibus nisl in augue venenatis, a tincidunt urna tincidunt. Phasellus tincidunt accumsan ipsum nec condimentum. Mauris dapibus pulvinar malesuada.</p>', '', 31, 20),
(58, 'La Pastèque', '<abbr title=\"Hypertext Preprocessor\">PHP</abbr>, <abbr title=\"Hypertext Markup Language\">HTML</abbr>, TypeScript, JavaScript, Blade One, <abbr title=\"Cascading Style Sheet\">CSS</abbr>, <abbr title=\"Modèle-Vue-Contrôleur\">MVC</abbr>, <abbr title=\"Structured Query Language\">MySQL</abbr>,  <abbr title=\"Asynchronous Javascript and XML\">Ajax</abbr>, Figma, Axure, Adobe Photoshop, Adobe Illustrator.', '<p>Quisque sollicitudin urna purus, ut sodales sem euismod quis. Nam nec sagittis metus, nec luctus eros. Suspendisse eget faucibus quam. Curabitur vel nulla est. Proin scelerisque erat urna, eget pharetra lacus pharetra sit amet. Morbi sit amet semper lorem. Fusce a lobortis ex, at mollis lacus. Suspendisse nec eleifend nunc. Nulla facilisi. Sed at posuere ex, ac finibus turpis. Nulla dolor quam, dictum eu dolor non, dignissim lobortis elit.</p>', '', 43, 19),
(59, 'Roc Pointe sur le fleuve', '<abbr title=\"Hypertext Preprocessor\">PHP</abbr>, <abbr title=\"Hypertext Markup Language\">HTML</abbr>, JavaScript, <abbr title=\"Cascading Style Sheet\">CSS</abbr>, <abbr title=\"Structured Query Language\">MySQL</abbr>, Adobe Photoshop, Adobe Illustrator, Word Press.', '<p>Nam quis metus scelerisque, facilisis massa ut, consequat massa. Aenean ac sagittis nunc. Curabitur rhoncus ante at diam fringilla porttitor. Aenean dolor tortor, pretium sit amet mauris sit amet, posuere vulputate magna. Proin ligula mauris, sagittis in consequat dictum, pharetra non ipsum. Phasellus non mi sed ex commodo aliquam et a felis. Phasellus nec malesuada orci. Nam quis metus scelerisque, facilisis massa ut, consequat massa. Aenean ac sagittis nunc. Curabitur rhoncus ante at diam fringilla porttitor. Aenean dolor tortor, pretium sit amet mauris sit amet, posuere vulputate magna. Proin ligula mauris, sagittis in consequat dictum, pharetra non ipsum. Phasellus non mi sed ex commodo aliquam et a felis. Phasellus nec malesuada orci. </p>', 'https://rocpointesurlefleuve.com/ ', 43, 24),
(60, 'La pastèque', 'Axure, Figma, Photoshop, <abbr title=\"Cascading Style Sheets\">CSS</abbr>, <abbr title=\"Hypertext Markup Language\">HTML</abbr>, JavaScript, <abbr title=\"Hypertext Preprocessor\">PHP</abbr>, <abbr title=\"Modèle-Vue-Contrôleur\">MVC</abbr>, <abbr title=\"Structured Query Language\">SQL</abbr>', '<p>Fusce imperdiet lobortis hendrerit. Phasellus in dapibus est. Curabitur a turpis arcu. Suspendisse feugiat nunc volutpat laoreet iaculis. In ultricies nibh erat, quis lacinia leo eleifend vitae. Maecenas ac quam vel libero rhoncus sagittis tincidunt at massa. Duis et dolor non neque facilisis blandit. Donec ante quam, ullamcorper in enim tempus, auctor pellentesque nisl. </p> ', '', 38, 19),
(61, 'Image étranges et impossibles', 'Adobe Photoshop', '<p>Cras scelerisque, nisi nec rhoncus imperdiet, turpis enim eleifend metus, at commodo massa nulla a dui. Aliquam auctor, lacus id accumsan blandit, ex risus sodales neque, id imperdiet sapien nisi at velit. Nulla aliquet eleifend nulla, et ornare metus molestie porttitor. Quisque id mollis massa. Nunc tincidunt vitae quam sit amet gravida. Duis at urna porttitor, volutpat nulla eget, tincidunt erat. Mauris ullamcorper malesuada neque vitae tempus. Praesent ultrices sapien at risus porttitor, ut consequat mauris iaculis.</p>', '', 38, 2),
(62, 'Body Shop', 'Adobe Illustrator, Figma', '<p>Sed felis augue, tincidunt vitae elit non, mattis consequat neque. Donec eu lorem in magna ullamcorper condimentum. Duis non dui ligula. Sed leo magna, viverra quis fermentum dapibus, fermentum non nibh. Cras dapibus nunc sed justo egestas, laoreet varius lacus bibendum. Proin quis laoreet risus, vel tristique mi. Mauris consequat posuere tellus, id aliquam ligula maximus sed. Praesent et dignissim erat. Aenean at dui ac lacus sodales aliquet. Nulla ac sollicitudin sapien.</p>', '', 40, 2),
(63, 'La Pastèque', 'Axure, Figma, <abbr title=\"Hypertext Preprocessor\">PHP</abbr>, <abbr title=\"Modèle-Vue-Contrôleur\">MVC</abbr>, <abbr title=\"JavaScript\">JS</abbr>, <abbr title=\"Cascading Style Sheets\">CSS</abbr>, <abbr title=\"Syntactically Awesome Style Sheets\">SASS</abbr>, <abbr title=\"Asynchronous Javascript and XML\">AJAX</abbr>', '<p>Integer vestibulum, quam vitae molestie ultricies, arcu ante fringilla dui, eu sagittis augue nunc sit amet nibh. Aenean et suscipit ipsum, vel dapibus leo. Proin sed bibendum felis. Curabitur dignissim justo libero, sit amet blandit est ornare eu. Nunc a fringilla magna. Vivamus nibh felis, sodales vitae justo ut, suscipit luctus odio. Donec blandit id enim sed facilisis.Integer vestibulum, quam vitae molestie ultricies, arcu ante fringilla dui, eu sagittis augue nunc sit amet nibh. Aenean et suscipit ipsum, vel dapibus leo. Proin sed bibendum felis. Curabitur dignissim justo libero, sit amet blandit est ornare eu. Nunc a fringilla magna. Vivamus nibh felis, sodales vitae justo ut, suscipit luctus odio. Donec blandit id enim sed facilisis.</p>', '', 40, 19),
(64, 'Alaia : La culture du surf ', 'Figma, Photoshop, Illustrator ', '<p>Proin non erat sit amet est placerat faucibus. Mauris posuere, est non faucibus laoreet, leo sem tempor turpis, sit amet lacinia libero magna ut odio. Vivamus eget tellus nec purus fringilla consectetur. Integer at sapien bibendum, placerat ex non, aliquam tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam erat volutpat. Integer vestibulum libero quis risus vestibulum congue. Nam vitae fermentum diam, sit amet tempor massa.</p> ', '', 27, 7),
(65, 'Agence Web « Team Astro » ', 'Figma, Wordpress, <abbr title=\"Hypertext Preprocessor\">PHP</abbr>, <abbr title=\"Hypertext Markup Language\">HTML</abbr>, <abbr title=\"Cascading Style Sheets\">CSS</abbr>. ', '<p>Sed nunc purus, consectetur a sem sit amet, vestibulum fermentum quam. Mauris rhoncus lorem ac libero sollicitudin, sed malesuada tellus luctus. Nulla viverra convallis felis nec malesuada. Duis maximus posuere sem nec finibus. Nulla sollicitudin suscipit euismod. Etiam luctus nisi nulla, non mattis urna consectetur in. Donec faucibus nisl ipsum, eget fringilla erat sollicitudin a. Nunc facilisis, eros sit amet varius aliquet, turpis risus condimentum libero, eu pharetra quam massa ut quam. </p> ', '', 27, 17),
(66, 'La Pasteque Éditeur ', 'Figma, <abbr title=\"Hypertext Preprocessor\">PHP</abbr>, <abbr title=\"Hypertext Markup Language\">HTML</abbr>, <abbr title=\"Cascading Style Sheets\">CSS</abbr>, <abbr title=\"Modèle-Vue-Contrôleur\">MVC</abbr>, Javascript, <abbr title=\"Structured Query Language\">SQL</abbr>', '<p>Nam eget nunc sapien. In egestas tortor vitae accumsan consectetur. Pellentesque accumsan est elit, quis tincidunt sapien viverra non. Duis fermentum scelerisque maximus. Proin commodo ultricies sollicitudin. Fusce in tellus nisl. Donec in malesuada nisi. Etiam enim nisl, aliquam ullamcorper libero vel, rhoncus faucibus lacus.</p> ', '', 27, 19),
(67, 'Animation pour Honda Motocyclettes', 'Adobe After Effects, Adobe Audition, Adobe Illustrator', '<p>Integer auctor, mauris ac blandit dignissim, elit nisl gravida nibh, in convallis nisi est ac elit. Etiam at vulputate augue, in fringilla dui. Curabitur pretium lacus sit amet ante gravida varius. Nam convallis neque vitae lorem tempor vestibulum. Integer feugiat et arcu in vestibulum. Etiam aliquet vitae ligula eget vestibulum. Nunc fringilla dolor et diam tristique vulputate. Nam aliquet eros vitae massa luctus, consequat pretium urna luctus. Pellentesque viverra mi et sem mattis feugiat. Aenean malesuada metus nec imperdiet posuere. </p>', 'https://vimeo.com/527629832', 40, 16),
(68, 'Pagaie Québec', 'Axure, Figma, Draw.io', '<p>Morbi mattis leo quis lacus suscipit dapibus. Donec vulputate vel purus at finibus. Donec congue finibus mattis. Fusce mattis neque nibh, tristique congue justo elementum ut. Phasellus posuere orci eu lacinia tempus. Proin eu eros dictum, auctor odio id, vulputate ligula. Nam consequat lectus ut tristique hendrerit. Duis placerat tristique massa, vel accumsan nulla tincidunt id. Aenean cursus suscipit lobortis. Morbi dictum libero non mollis ultrices. In quis eleifend ligula.</p>', '', 28, 20),
(69, 'Projet Cafétéria', 'Axure, Figma', '<p>Maecenas consequat, elit at placerat varius, diam arcu imperdiet eros, ac dictum dolor nulla ut mauris. Vivamus mollis fermentum massa, at eleifend arcu tincidunt et. Pellentesque pulvinar arcu elit, ut laoreet dolor iaculis in. Cras sit amet odio ultrices, congue eros eget, efficitur felis. Fusce facilisis rhoncus tellus, vel porttitor turpis feugiat in.</p>\r\n\r\n', 'https://qu09oa.axshare.com', 35, 11),
(71, 'La Pastèque', '<abbr title=\"Hypertext Markup Language\">HTML</abbr>, <abbr title=\"Cascading Style Sheets\">CSS</abbr>, <abbr title=\"Modèle-Vue-Contrôleur\">MVC</abbr>, <abbr title=\"Hypertext Preprocessor\">PHP</abbr>, <abbr title=\"Structured Query Language\">SQL</abbr> ', '<p> Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent eleifend nibh et vehicula dignissim. Maecenas vestibulum lorem et arcu pretium fringilla id et nunc. Vivamus in auctor erat, sit amet pulvinar quam. Nam lacinia, tortor vel pulvinar imperdiet, odio nunc convallis est, et dictum nunc augue vel elit.  </p>\r\n\r\n<p> Vivamus tempor ligula sed ligula tincidunt, non accumsan nisl viverra. Vestibulum placerat pellentesque orci eu placerat. Morbi lacinia felis lobortis justo efficitur, id aliquet enim dictum.</p>', '', 54, 19),
(72, 'Body Shop', 'Adobe Illustrator', '<p> Curabitur gravida bibendum lorem tempus faucibus. Phasellus et nulla interdum, feugiat nunc in, commodo ligula. Integer convallis, purus in pulvinar ultrices, nisl tellus dignissim quam, at egestas enim odio pretium purus. In ut risus a arcu placerat congue ac sit amet diam. Integer id tortor magna. Praesent urna metus, fringilla vitae dui ac, accumsan imperdiet enim. Etiam porttitor, est in sodales egestas, dolor tortor convallis nisl, sit amet tempor dolor metus quis est.  </p>', '', 54, 2),
(73, 'Body Shop', 'Illustrator, Figma', '<p>Ut dictum semper orci. Curabitur a tortor ipsum. Nulla dignissim ultrices purus, eu volutpat arcu laoreet non. Fusce congue erat eu turpis efficitur pharetra. Fusce pretium lacus quis ipsum congue dapibus. Pellentesque faucibus, enim eu maximus pellentesque, sem eros rhoncus libero, ut tincidunt nisi arcu nec orci. Aliquam pharetra mauris et purus consectetur, id commodo augue luctus. Curabitur pellentesque bibendum erat, ut blandit neque.</p>', 'https://www.figma.com/proto/iw5lIagCXs07ADfj5sDuDZ/20190920075813_bodyshop?node-id=9%3A2&scaling=min-zoom&page-id=0%3A1', 35, 2),
(74, 'Animation publicitaire Sprint', 'Adobe After Effect, Adobe Audition.', '<p>Quisque eu justo ac quam efficitur sodales. Etiam fringilla consectetur dui, at interdum ante convallis id. Suspendisse potenti. Donec lacinia lobortis justo, id cursus odio aliquet a. Nunc varius vestibulum neque sed porta. Quisque quis lectus id mi sagittis sodales. Cras ullamcorper, erat in tempor volutpat, orci nisl sollicitudin sem, facilisis malesuada orci turpis sit amet diam. </p>', '', 32, 16),
(75, 'Projet Les Éditions La Pastèque', 'PhpStorm, MySQL, <abbr title=\"Structured Query Language\">SQL</abbr>, <abbr title=\"Asynchronous Javascript and XML\">AJAX</abbr>, <abbr title=\"Hypertext Markup Language 5\">HTML5</abbr>, <abbr title=\"Cascading Style Sheet\">CSS</abbr> (<abbr title=\"Sassy Cascading Style Sheets\">SCSS</abbr> - <abbr title=\"Syntactically Awesome Style Sheet\">SASS</abbr>), <abbr title=\"Hypertext Preprocessor\">PHP</abbr>, Blade(bladeOne), Axure, Figma, ECMAScript5(JavaScript, TypeScript), Adobe Photoshop', '<p>Donec quis suscipit nisi. Sed eu odio nec mauris auctor convallis. Nullam imperdiet, lectus sed efficitur finibus, dolor dolor lacinia ligula, a pretium nisi risus non est. Morbi congue est id ipsum malesuada rutrum. Aliquam finibus cursus sapien eu viverra. Ut egestas ex euismod, lacinia ipsum vitae, fermentum odio. Quisque sollicitudin nisl non aliquet consectetur. Donec ac ullamcorper metus. Curabitur quis libero diam. Praesent sagittis eros vitae lorem euismod, vel eleifend mauris lacinia. </p>', '', 32, 19),
(76, 'La Pastèque', 'Wordpress, <abbr title=\"Hypertext Markup Language\">HTML</abbr>, <abbr title=\"Cascading Style Sheets\">CSS</abbr>, Javascript, <abbr title=\"Asynchronous Javascript and XML\">Ajax</abbr>, <abbr title=\"Hypertext Preprocessor\">PHP</abbr>, <abbr title=\"Structured Query Language\">SQL</abbr>, <abbr title=\"Javascript Object Notation\">JSON</abbr>, <abbr title=\"Modèle-Vue-Contrôleur\">MVC</abbr>, Adobe Photoshop\r\n', '<p>Quisque vel pretium leo. Etiam laoreet turpis massa, ac sodales elit ornare a. Sed pretium justo at ultricies tristique. Suspendisse eget est neque. Praesent ut nisl non quam ullamcorper rutrum sed non metus. Donec accumsan accumsan metus vel mollis. Vivamus vestibulum neque eget quam dignissim, at elementum magna commodo. Ut elementum feugiat urna quis rhoncus.Quisque vel pretium leo. Etiam laoreet turpis massa, ac sodales elit ornare a. Sed pretium justo at ultricies tristique. Suspendisse eget est neque. Praesent ut nisl non quam ullamcorper rutrum sed non metus. Donec accumsan accumsan metus vel mollis. Vivamus vestibulum neque eget quam dignissim, at elementum magna commodo. Ut elementum feugiat urna quis rhoncus.</p>\r\n', '', 34, 19),
(77, 'Animations d\'un jeu 2D', 'Adobe Photoshop, Adobe Illustrator, Adobe Animate, <abbr title=\"ActionScript 3\">AS3</abbr>', '<p>Nulla facilisi. Morbi eget justo eget ante tristique aliquam. Curabitur consectetur, elit nec mattis ornare, sem dolor semper turpis, et molestie dui urna ac libero. Mauris leo tellus, gravida vitae sem nec, rutrum hendrerit felis. Nam eu odio nisi. Fusce non urna mauris. Proin sit amet tincidunt velit. Vivamus dolor odio, vulputate in libero et, iaculis pellentesque orci. </p>\r\n', '', 34, 16),
(79, 'Brûlerie TIM', 'Figma', '<p>Fusce eleifend ante dui, ac laoreet elit maximus ac. Nulla facilisi. Quisque dui ante, euismod ut felis ut, laoreet fringilla orci. Sed sit amet metus tempus, eleifend justo sit amet, dictum dui. Aenean molestie elit a urna dictum volutpat. Vivamus nunc nulla, suscipit non leo id, pretium malesuada nibh.</p>', '', 50, 11),
(80, 'Centre de documentation virtuel', 'Axure, Figma, Draw.io', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at fringilla tortor. Nam ex orci, tincidunt quis lacus at, consectetur pharetra erat. Maecenas ullamcorper dignissim lorem volutpat pellentesque. Donec mollis suscipit nunc, vitae vulputate lacus ultrices et. Morbi facilisis consectetur velit in dictum. </p>', '', 28, 20),
(81, 'La pastèque', '<abbr title=\"Hypertext Markup Language\">HTML</abbr>, <abbr title=\"Cascading Style Sheets\">CSS</abbr>, <abbr title=\"Hypertext Preprocessor\">PHP</abbr>, <abbr title=\"Modèle-Vue-Contrôleur\">MVC</abbr>, BladeOne, JavaScript, TypeScript, <abbr title=\"JavaScript Object Notation\">JSON</abbr>, <abbr title=\"Structured Query Language\">SQL</abbr>, <abbr title=\"Asynchronous Javascript and XML\">Ajax</abbr>, Figma, Axure, Adobe Photoshop, Adobe Illustrator', '<p>Donec odio eros, tempus et rutrum non, luctus ac risus. Nulla vel metus tincidunt, fermentum mauris non, tincidunt urna. Cras sapien velit, pharetra ut elementum in, blandit vel elit. In hac habitasse platea dictumst. Maecenas dictum mauris laoreet, tristique felis at, efficitur metus. Etiam dapibus ipsum felis, in maximus nisl lobortis at. Praesent mattis, felis a luctus tempor, felis leo scelerisque elit, non egestas odio nisi quis nisl. Nunc sit amet mi sed ligula egestas porta. </p>', '', 44, 19),
(82, 'Le festival OFF', '<abbr title=\"Hypertext Markup Language\">HTML</abbr>, <abbr title=\"Cascading Style Sheets\">CSS</abbr>, <abbr title=\"Hypertext Preprocessor\">PHP</abbr>, JavaScript, <abbr title=\"JavaScript Object Notation\">JSON</abbr>, <abbr title=\"Structured Query Language\">SQL</abbr>, Figma, Adobe Photoshop, Adobe Illustrator', '<p>Donec neque neque, semper vitae laoreet sed, posuere non ex. Mauris at erat congue, rhoncus augue vel, auctor urna. Etiam nec sapien nec velit lobortis hendrerit in eget lorem. Suspendisse maximus volutpat finibus. Pellentesque ac tincidunt magna, et malesuada justo. Sed sit amet malesuada sem. Nunc lacinia rhoncus libero, sit amet dignissim magna porttitor at. Pellentesque scelerisque at justo eget dictum. Donec et condimentum dui. Fusce hendrerit lacus non justo congue efficitur.</p>', '', 44, 10),
(83, 'La cafétaria', 'Axure, Figma', '<p>Maecenas pulvinar dolor efficitur purus pharetra interdum. Phasellus auctor vehicula elit, a cursus elit scelerisque non. Vestibulum imperdiet semper vulputate. Nam faucibus vulputate lacus, eget dapibus magna mattis non. Vestibulum pulvinar sem porttitor gravida congue. Vivamus porttitor tellus. </p>', '', 36, 11),
(93, 'Projet OFF ', '<abbr title =\" Structured Query Language\">MySQL</abbr>, <abbr title =\"Hypertext Preprocessor\">PHP</abbr>, <abbr title =\"Hypertext Markup Language\">HTML</abbr>, <abbr title =\"Cascading Style Sheet\">CSS</abbr>, jQuery', '<p>Maecenas ullamcorper ultricies tellus sed euismod. Phasellus congue metus odio, quis pretium lacus rhoncus condimentum. Nulla facilisi. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sollicitudin luctus tincidunt. Aliquam egestas aliquet mattis. In ut sem et nunc semper iaculis. Quisque eu consequat dui. Curabitur feugiat risus arcu, ac malesuada sem aliquet in. Sed tincidunt lobortis nulla vitae dignissim.</p>', '', 55, 17);
INSERT INTO `projets` (`id`, `titre`, `technologies`, `description`, `url`, `diplome_id`, `cours_id`) VALUES
(94, 'La Pastèque', '<abbr title=\"Cascading Style Sheets\">CSS</abbr>, <abbr title=\"Hypertext Markup Language\">HTML</abbr>,  <abbr title=\"Hypertext Preprocessor\">PHP</abbr>, <abbr title=\"Structured Query Language\">SQL</abbr>, JavaScript, Figma et Axure. ', '<p> Pellentesque molestie varius sapien, ut accumsan metus pretium sed. Mauris vel tortor ullamcorper, vehicula ipsum id, consequat lorem. Ut id sapien quam. Mauris vulputate velit at euismod lobortis. Maecenas orci ante, bibendum quis hendrerit a, bibendum quis justo. Donec orci augue, tempus eu tristique vel, fringilla faucibus dolor. Pellentesque molestie varius sapien, ut accumsan metus pretium sed. Mauris vel tortor ullamcorper, vehicula ipsum id, consequat lorem. Ut id sapien quam. Mauris vulputate velit at euismod lobortis. Maecenas orci ante, bibendum quis hendrerit a, bibendum quis justo. Donec orci augue, tempus eu tristique vel, fringilla faucibus dolor. </p>', '', 51, 19),
(95, 'Maquette de cheminement', 'Office 365, Axure et Figma', '<p>Nulla vel ligula a mauris dapibus finibus sit amet vitae urna. Nunc eleifend sapien augue, at porta magna lobortis et. Curabitur non orci venenatis, rhoncus est sed, efficitur elit. Fusce interdum nibh ac diam posuere luctus. Pellentesque aliquet dignissim venenatis. Proin ac bibendum tellus. Nulla et volutpat velit. Fusce in mollis enim. Nulla semper risus quis sapien semper, eu sodales libero ullamcorper. Donec orci orci, ullamcorper eget mattis at, porta sit amet lacus. Aliquam id metus rutrum, convallis ligula sit amet, fringilla ipsum. Nullam scelerisque mattis neque, et ornare mauris convallis eget.</p>', 'https://www.figma.com/file/nvjqPISOJz9yLurk1V4cNg/gr1_gilbertd_maquette', 51, 15);

-- --------------------------------------------------------

--
-- Structure de la table `responsables`
--

CREATE TABLE `responsables` (
  `id` int(11) UNSIGNED NOT NULL,
  `responsabilite` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `courriel` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenom` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nom` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telephone` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Coordination, webmestre...';

--
-- Déchargement des données de la table `responsables`
--

INSERT INTO `responsables` (`id`, `responsabilite`, `courriel`, `prenom`, `nom`, `telephone`) VALUES
(1, 'Coordonnateur départemental', 'techmultimedia@csfoy.ca', 'Sylvain', 'Lamoureux', '(418) 659-6600 poste 6662'),
(2, 'Webmestre', 'eve.fevrier@csfoy.ca', 'Ève', 'Février', '(418) 659-6600 poste 6655'),
(3, 'Responsable des stages', 'stages-tim@csfoy.ca', 'Pascal', 'Larose', '(418) 659-6600 poste 6653'),
(4, 'Responsable \"Étudiant d\'un jour\"', 'benoit.frigon@csfoy.ca', 'Benoît', 'Frigon', '(418) 659-6600 poste 6656');

-- --------------------------------------------------------

--
-- Structure de la table `temoignages`
--

CREATE TABLE `temoignages` (
  `id` int(11) UNSIGNED NOT NULL,
  `temoin` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `titre_poste` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `entreprise` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `url_entreprise` text COLLATE utf8_unicode_ci NOT NULL,
  `temoignage` text COLLATE utf8_unicode_ci NOT NULL,
  `annee_diplomation` varchar(4) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Témoignages-Professions des diplômés du programme';

--
-- Déchargement des données de la table `temoignages`
--

INSERT INTO `temoignages` (`id`, `temoin`, `titre_poste`, `entreprise`, `url_entreprise`, `temoignage`, `annee_diplomation`) VALUES
(22, 'Francis Chartrand', 'Développeur Web', 'Wazo Inc', 'https://wazo.io/', 'Lorsque j\'étais au secondaire, j\'ai découvert un intérêt pour la conception de sites Web, la vidéo et Photoshop. La décision d’aller en TIM avait été facile, car la technique me permettait d\'en apprendre davantage sur ce qui me passionnait et plus encore. Ce que je préfère le plus de mon métier est de travailler sur différents aspects d\'un projet, entre autres: l\'analyse, le design et la programmation. C\'est un domaine stimulant et il y a toujours de nouvelles connaissances à acquérir.', '2012'),
(23, 'Léo Renaud-Allaire', 'Co-fondateur / Développeur Web', 'Hookt Studios et Didacte', 'www.hooktstudios.com', 'J’ai toujours eu une intérêt pour les technologies, plus particulièrement pour le Web et les interfaces. La TIM était une suite tout à fait logique à mes études secondaires au programme PROTIC. Je n\'ai jamais regretté mon choix! En tant que développeur Web, la vitesse d\'évolution des technologies dans le domaine nous pousse à nous renouveler constamment, ce qui est très motivant. Le Web étant un outil utile dans toutes sortes de contextes, la diversité des projets sur lesquels on peut intervenir est pratiquement infinie et les défis toujours différents.', '2009'),
(24, 'Martin Audesse', 'Programmeur Web', 'Pigiste', 'https://www.linkedin.com/in/martin-audesse-2938a61a/', 'Les Techniques d\'intégration multimédia couvre une large partie du monde numérique et puisque je n\'étais pas certain dans quel domaine je voulais me spécialiser, c\'était un choix gagnant! À titre de développeur, j’adore le fait de construire des projets en équipe. J’aime créer l’image complète d’une entreprise qui est ensuite visible partout et disponible sur toutes les plateformes.', '2012'),
(25, 'Rémi Prévost', 'Partenaire- Directeur Technologies', 'Mirego', 'www.mirego.com/fr', 'J’hésitais à me diriger vers une formation spécialisée en graphisme ou en informatique — Techniques d\'intégration multimédia était le mélange parfait entre les deux! Maintenant, j’adore avoir l’opportunité de bâtir des projets qui peuvent faire une différence, aussi mineure soit-elle, dans la vie des gens.', '2007'),
(26, 'Richard Vacchino-Marceau', 'Directeur services Web et TI', 'Triomphe marketing 360', 'www.triomphe.ca', 'L’informatique a toujours été pour moi une passion alors il était logique d\'aller vers un domaine qui me permettait d\'exploiter à fond toutes mes passions. Graphisme, programmation, gestion de serveur, soutien technique, analyse, évaluation, intégration, gestion de projets, etc. Voilà ce qui définit tout ce qui m\'a attiré vers ce domaine. J\'aime le fait d’être en mesure de toucher à tous les aspects d\'un projet. Je m\'occupe de l\'analyse des besoins des clients, j\'élabore une prévision budgétaire selon les requêtes, je gère la mise en production et les échéanciers puis finalement je m\'occupe de toutes les étapes de la livraison du produit final. Voilà ce que j\'appelle la liberté.', '2010'),
(27, 'Mélina Déry', 'Chargée de projet Web ', 'Léonard', 'https://leonardagenceweb.com/equipe/', 'Ayant le profil multimédia au secondaire, je désirais poursuivre dans cette branche au niveau collégial. Ce domaine m’intéressait alors je souhaitais le découvrir davantage et l’approfondir pour en faire ma profession. Maintenant, ce que je préfère le plus dans la pratique de mon métier est le fait de ne pas avoir de routine établie! Chaque journée est différente et m’apporte de nouveaux défis.', '2011'),
(28, 'Alexandre Beaulieu', 'Président - directeur général', 'HériTech', 'https://heritech.dev/', 'La Techniques d’intégration multimédia est vraiment complète et permet d\'ouvrir de nombreuses portes vers le marché du travail. Elle permet de toucher à beaucoup de choses, ce qui rend les étudiants beaucoup plus versatiles. En tant que programmeur Web, j\'adore découvrir de nouvelles technologies. D\'ailleurs, dans ce métier, comme tout change rapidement, ça me permet de garder mon cerveau éveillé et d\'être en constante évolution.', '2012'),
(29, 'Hugo Landry-Hamel', 'Directeur marketing de personnalisation (CMO)', 'Enrich³', 'https://enrich3.com', 'Je me suis dirigé vers la Techniques d\'intégration multimédia pour toucher au Web plutôt qu\'à la programmation \"logiciel\" enseignée en Technique de l’informatique et pour apprendre dans un environnement qui stimule la créativité. Le fait de pouvoir être polyvalent et ainsi pouvoir choisir dans quelle branche je souhaite approfondir mes connaissances et me perfectionner sont ce que je préfère le plus dans la pratique de mon métier.', '2014'),
(30, 'Marie-Claude Lizotte', 'Conseillère en communication numérique', 'Ville de Québec', 'www.ville.quebec.qc.ca', 'Étant déjà diplômée dans un domaine similaire, je désirais approfondir mes connaissances en développement Web. Puisque j’étais ambivalente entre l’informatique et le graphisme, la Techniques d’intégration multimédia (TIM) rejoignait les côtés cartésien et artistique de ma personnalité. Cette technique est devenue pour moi une voie incontournable et m’a fait découvrir toutes les facettes du domaine en me permettant d’être extrêmement polyvalente et bien outillée. La routine n’existe pas dans ma profession, chaque jour est différent et empreint de défis stimulants. En collaboration avec plusieurs partenaires multidisciplinaires, j’ai la chance de contribuer à l’orientation, à l’analyse et à la réalisation de projets de petite et de grande envergure. Je sais que mon travail peut être un agent facilitant dans le quotidien des gens, c’est ma source de motivation. Mon équipe de travail réalise approximativement 300 demandes par mois et j’ai la chance de pouvoir compter sur trois intégrateurs de la TIM. Ils font la différence!', '2007'),
(31, 'Maxime G. Potvin', 'Designer UX mobile', 'Groupe Desjardins  Assurance générale', 'https://www.desjardinsassurancesgenerales.com', 'Passionné de design et de programmation, la Techniques d’intégration multimédia était le programme parfait pour m’épanouir. Aujourd’hui, ce que je préfère le plus de mon métier est le dynamisme et l\'évolution rapide des technologies et des tendances!', '2014'),
(33, 'Karl Lacroix', 'Directeur technologies de l\'information', 'Centraide Québec et Chaudière-Appalaches', 'https://www.centraide-quebec.com/', 'J’ai choisi les TIM parce que le design Web m\'intéressait déjà depuis quelques années; je réalisais des sites Web (pas nécessairement les plus beaux!) avec les connaissances acquises au fur et à mesure. Je voulais donc connaître les meilleures techniques et façons de faire pour réaliser de meilleurs sites Web. Ce que j’aime maintenant le plus est le renouveau constant nécessaire parce que la technologie ne cesse d\'évoluer. Pour être à l\'avant, il faut donc se renouveler constamment! De plus, j’ai le plaisir de travail en équipe avec un nombre impressionnant de personnes ayant des spécialisations variées pour la réalisation d\'un même site Web (du designer au rédacteur, du développeur au designer UX, etc.).', '2010'),
(34, 'Dinh-Tam Trinh', 'Programmeur Web', 'Cégep de Sainte-Foy', 'www.cegep-ste-foy.qc.ca', 'Ce qui m\'a tout d\'abord intéressé dans le multimédia est le nombre varié de disciplines. La spécialisation est très bien, mais avoir une connaissance globale de tous les aspects d\'un métier est très utile! Ce que j\'aime le plus est le développement d’une nouvelle application Web « from scratch » : un parfait mélange entre le design utilitaire et de code.\r\n', '2013'),
(35, 'Marie-Ève Tremblay', 'Webmestre', 'Sécurité publique du Québec (MSP)', 'https://www.securitepublique.gouv.qc.ca', 'J’ai vue dans dans la TIM la possibilité de marier mes passions, mes intérêts et d’ouvrir mes horizons sur les nouvelles technologies. La technique est complète, variée et elle assure un avenir dans un domaine motivant et en constante innovation. J’aime participer à l’analyse de la production Web et produire des sites dont la structure est solide. J’aime intégrer des visuels modulaires et récupérables. J’aime résoudre des problématiques et continuer à apprendre.\r\n', '2013'),
(37, 'Marc-Antoine Charest', 'Développeur Web', 'Leonard', 'www.leonarddg.com', 'Les bonnes perspectives d\'emploi ainsi que la constante mise en pratique des apprentissages sont des éléments qui m\'ont convaincu de me diriger en Techniques d\'intégration multimédia. La diversité des tâches à effectuer et les constants défis qu\'apportent les différents projets sur lesquels je travaille sont des aspects qui me plaisent le plus dans mon travail.\r\n', '2014'),
(38, 'Eddie Brodeur Durand', 'Chargé d\'équipe Développement côté client (Team Lead Front-End)', 'Poka Inc', 'https://www.poka.io/', 'J’ai décidé de me diriger en Techniques d\'intégration multimédia car on y abordait tous les éléments me permettant de pratiquer un travail relié au Web. Ce que je préfère de mon emploi est le fait de travailler dans un domaine qui change constamment ce qui me permet de toujours être motivé par les nouveaux projets.\r\n', '2012'),
(39, 'Stephanie Roy', 'Ingénieur logiciel senior', 'Iterative', 'https://iterative.ai/', 'J’ai choisi les Techniques d\'intégration multimédia car je voulais apprendre à faire des sites Web pour des projets personnels. J\'ai rapidement réalisé que le Web était devenu une passion bien au-delà de mes projets personnels. En tant que Développeur front-end, j’aime la diversité des tâches, des fois un peu plus associées au design d’interface et d\'autres fois un peu plus en lien avec la programmation. J\'aime bien aussi l\'évolution constante, il y a toujours quelque chose de nouveau à apprendre.\r\n', '2012'),
(40, 'Stéphanie Parcel', 'Chargée de projets', 'Connexence', 'https://connexence.com/', 'Je savais que je voulais créer à l\'aide d\'un ordinateur, mais je ne savais pas quoi. Le design m\'intéressait autant que la programmation. Les TIM ont donc été un excellent moyen de toucher à plusieurs facettes du domaine et ainsi trouver ma passion. Aujourd’hui, que ce soit d\'un client, d\'un patron ou d\'un collègue, entendre la phrase: « tu viens de me simplifier la vie », ça vaut de l\'or!\r\n', '2014'),
(41, 'Alexia B. Proulx', 'Développeur Web', 'PetalMD', 'www.petalmd.com', 'Je me suis d\'abord dirigée dans une formation en informatique mais j\'ai rapidement réalisé que le web correspondait plus à mon profil que le développement logiciel. Techniques d\'intégration multimédia m\'offrait non seulement de perfectionner mes connaissances mais aussi d\'aller plus loin que la programmation et de toucher à toutes les facettes du domaine. Ce que je préfère dans mon métier c\'est la portée de notre travail. Internet est aujourd\'hui la plus importante vitrine et les développeurs en sont en quelques sortes les artisans. Voir les projets sur lesquels j\'ai travaillé rencontrer un franc succès sur le net est une véritable fierté. ', '2013'),
(43, 'Frédérique Fortier ', 'Développeuse Web Front-End ', 'Spektrum Média', 'https://spektrummedia.com/', 'Surfant sur le web depuis toujours, j’ai choisi TIM pour son mélange de design et de programmation qui permet d’allier le côté créatif au côté logique. Mon choix s’est confirmé lors de mon premier cours de programmation, où j’ai eu la piqûre dès que j’ai vu mon code se transformer sous mes yeux en élément interactif ! J’adore la diversité des projets et des nouveaux défis qui se présentent chaque jour. Grâce à eux, mes connaissances sont constamment enrichies.', '2021'),
(44, 'Cohan Carpentier ', 'Dévelopeur Frontend Sénior ', 'Ava Labs ', 'https://www.avax.network/', 'C’est grâce aux TIM que j’ai enfin découvert ma vraie passion: le développement web. Je me suis toujours intéressé au vidéo et à l’animation, mais c’est finalement en terminant mon cours d’introduction au HTML que je me suis vraiment mis à “tripper”. Grâce à mon stage de 3e année, j’ai pu rencontrer un mentor qui a su m’amener à me dépasser et à participer à des projets d’envergure. Aujourd’hui, je jouis d’un emploi stimulant et à la fine pointe de la techno dans le domaine du “blockchain”.', '2017'),
(45, 'Émilie Viel', 'Développeuse', 'Desjardins', 'https://www.desjardins.com/', 'En cherchant une formation qui répondrait à ma passion pour le code et le design graphique, j\'ai trouvé les TIM qui réunissaient ces deux intérêts et plus encore. En TIM, on apprend des bases solides dans plusieurs aspects du web, ce qui permet d\'être polyvalent et de s\'adapter facilement au marché du travail. J\'ai beaucoup évolué dans le domaine du web et je peux dire que chacune des connaissances que j\'ai acquises au cours de ma formation m\'ont servi à un moment ou à un autre dans ma carrière!', '2017'),
(46, 'Claudie Dorval', 'Développeuse web', 'MEDIAL Services-Conseils SST', 'https://www.medial.ca/ ', 'J\'ai opté pour les Techniques d\'Intégration Multimédia (TIM) pour la panoplie de métiers et de possibles aventures qui en découlent. C\'est dans un environnement stimulant et à travers une foule de projets diversifiés que j\'ai acquis des compétences-clés qui me permettent aujourd\'hui de me démarquer sur le marché du travail. La priorisation de mes tâches, la gestion rigoureuse de mon temps, ainsi qu\'une solide capacité à m\'adapter aux imprévus, notamment! Parmi les multiples tâches qu\'un développeur web peut effectuer, celles que je préfère resteront toujours celles qui m\'enrichissent en tant qu\'individu.', '2019'),
(47, 'Vincent Brizard', 'Directeur de la création et de la relation client', 'Sudo agence numérique', 'https://www.agencesudo.com/', 'J’ai gradué de la TIM en 2016. Depuis, j’ai occupé différentes fonctions, passant de designer d’interfaces UI, spécialiste UX, développeur front-end et back-end pour finalement obtenir un poste à titre de Directeur créatif. Les forces du programme se situent à mon avis au niveau de l’offre très diversifiée des notions proposées, de la flexibilité que l’étudiant·e a de se spécialiser dans différents aspects du métier et de la disponibilité des différents intervenant·e·s. Mes études ont été remplies de nouvelles amitiés et porteuses d\'opportunités pour l’avenir. J’en serai toujours reconnaissant. ', '2016');

-- --------------------------------------------------------

--
-- Structure de la table `textes`
--

CREATE TABLE `textes` (
  `id` int(11) UNSIGNED NOT NULL,
  `titre` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `texte` text COLLATE utf8_unicode_ci,
  `epic` smallint(6) UNSIGNED NOT NULL COMMENT 'No epic associe au texte pour le développeur'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `textes`
--

INSERT INTO `textes` (`id`, `titre`, `texte`, `epic`) VALUES
(1, 'Logo du cégep Sainte-Foy', '<a href=\"http://www.csfoy.ca\">http://www.csfoy.ca</a>', 0),
(2, 'Page du programme TIM sur le site du cégep', '<a href=\"https://www.csfoy.ca/programmes/tous-les-programmes/programmes-techniques/techniques-dintegration-multimedia-web-et-apps/\">https://www.csfoy.ca/programmes/tous-les-programmes/programmes-techniques/techniques-dintegration-multimedia-web-et-apps/</a>', 0),
(3, 'Facebook', '<a href=\"https://www.facebook.com/timcsf\">https://www.facebook.com/timcsf</a>', 0),
(4, 'Linkedin', '<a href=\"https://www.linkedin.com/groups/2211970\">https://www.linkedin.com/groups/2211970</a>', 0),
(5, 'Instagram', '<a href=\"https://www.instagram.com/cegepsaintefoy/\">https://www.instagram.com/cegepsaintefoy/</a>', 0),
(6, 'Demande d’admission', '<p>Les demandes d\'admission au programme TIM sont reçues avant le 1er mars de chaque année (1er tour), le 1er mai (2e tour), le 1er juin (3e tour) et le 1er août (4e tour). </p><p>Tu es convaincu?</p><p><a href=\"https://www.csfoy.ca/programmes/admission/faire-une-demande-dadmission\">Faire une demande d’admission</a></p>', 4),
(7, 'Étudiantes et étudiants de l’international', '<p>Si tu es une étudiante ou un étudiant étranger, la TIM est accessible. Pour d’avantages de détails ou pour t’inscrire, visite le site du bureau international du cégep.</p><p><a href=\"https://www.csfoy.ca/programmes/admission/etudiantes-et-etudiants-de-linternational/\">Étudiantes et étudiants de l’international</a></p>', 4),
(8, 'Étudiante et étudiant d’un jour', '<p>Tu veux en apprendre plus sur le programme? Tu veux assister à un ou plusieurs cours? Viens passer une journée avec nous, en Techniques d\'intégration multimédia!</p><p>Contacter <a href=\"#\">Benoît Frigon</a> pour en savoir plus.</p>', 2),
(9, 'Des questions?', '<p>Tu as des questions et tu aimerais en apprendre plus sur notre programme? N’hésite pas à nous contacter pour obtenir des réponses.</p><p>Contacter <a href=\"#\">Sylvain Lamoureux</a>Pour en savoir plus.</p>', 2),
(10, 'Bourses perspective Québec', '<p>Obtiens des bourses de 1500$ par session, pour un total de 9000$.</p><p><a href=\"https://www.csfoy.ca/services-aux-etudiants/aide-financiere-et-bourses/\">Pour en savoir plus</a></p>', 4),
(11, 'Accroche', 'Tu t’intéresses à la conception et programmation de sites Web, d’applications mobiles et de produits interactifs ? Tu veux concevoir des interfaces visuelles, de la vidéo et des animations ? TIM, c’est ça !', 4),
(12, 'Formation', '<p>Conception, médias, intégration et programmation. Un seul but, former des techniciennes et des techniciens polyvalents, aptes à réaliser des sites et des applications Web de A à Z.</p>', 5),
(13, 'Formation - Conception 25%', 'Concevoir des interfaces efficientes et attrayantes selon les besoins des utilisateurs. Tester les fonctionnalités conçues. Réaliser un design inclusif (accessibilité).<ul><li>Design d’interfaces Web</li><li>Expérience utilisateur </li> <li> Utilisabilité </li> <li> Ergonomie </li> <li> Accessibilité </li> <li>Axure</li><li>Figma</li></ul>', 5),
(14, 'Formation - Médias 15%', 'Créer et traiter des médias tels que des images, des photos, des animations, des vidéos et des sons.<ul><li>Suite Adobe CC</li><li>Photomontages </li> <li>Tournage et montage vidéo</li><li>Effets spéciaux</li><li>Son</li> <li>Design cinétique</li></ul> ', 5),
(15, 'Formation - Intégration 25% ', 'Transposer les médias et le design en code sémantique et programmer l’interactivité du côté client (front-end). S’assurer de l’accessibilité de l’interface.<ul><li>HTML 5</li><li>SASS</li><li>CSS</li> <li>Flex et Grid</li> <li>JSON</li><li>JavaScript</li><li>Ajax</li> <li>TypeScript</li><li>Mobile first</li><li>Responsive Web</li></ul>', 5),
(16, 'Formation - Programmation 25%', 'Rendre fonctionnel un produit numérique interactif du côté serveur (back-end). Manipulation de bases de données pour l’affichage dynamique, le tout de façon sémantique dans un code documenté, portable et robuste. <ul> <li>PHP</li> <li>SQL / MySQL</li><li>Orienté objet</li><li>MVC</li><li>PhpStorm</li></ul>', 5),
(17, 'Formation - Autres 10%', 'Gérer des projets, réaliser des stages en milieu professionnel. Gestion Agile, outils de gestion de projet, réalisation de projets d’envergure. <ul><li>Gestion Agile/Scrum</li><li>Travail collaboratif: Git, Planner</li><li>Autonomie</li><li>Veille technologique</li><li>Stages</li></ul>', 5),
(18, 'Grille de cours', '<p>Pour avoir de l’information plus spécifique sur les cours, visite le site du Cégep de Sainte-Foy.<a href=\"https://www.csfoy.ca/programmes/tous-les-programmes/programmes-techniques/techniques-dintegration-multimedia-web-et-apps/\">https://www.csfoy.ca/programmes/tous-les-programmes/programmes-techniques/techniques-dintegration-multimedia-web-et-apps/</a></p><p>Pour télécharger la grille de cours du programme TIM (<a href=\"#\">mettre grille_cours_TIM.pdf en lien)</a></p>', 5),
(19, 'Profession – Intégrateur/Intégratrice', '<p>L’intégrateur/intégratrice est la personne en charge de traduire et de transposer les maquettes fournies par l’équipe graphique dans un langage informatique, ce qui permet d’avoir un rendu réel et manipulable du site dans un navigateur. Il ou elle s’occupe donc de la partie visible du site en créant une interface ergonomique et accessible.</p><p>Postes en lien: Intégrateur/Intégratrice multimédia, Développeur/Développeuse web, Développeur/Développeuse front-end, Webmestre, Et plus…</p>', 5),
(20, 'Profession – Programmeur/Programmeuse Web', '<p>Le programmeur/programmeuse Web se charge de la mise en place, de la configuration, du développement et de la maintenance du serveur, de la base de données et de l’application Web en général. En bref, il ou elle participe au développement de tous les éléments d’un projet Web qui sont ”invisibles” lorsque l’on navigue sur un site Internet.</p><p>Postes en lien: Développeur/Développeuse Web, Développeur/Développeuse back-end (côté serveur), Et plus…</p>', 5),
(21, 'Profession – Concepteur/Conceptrice', '<p>Le concepteur/conceptrice Web conçoit et réalise l’interface visuelle d’un site internet pour lequel il ou elle crée tous les éléments graphiques (illustrations, bannières, images, animations…) selon les objectifs du client, en fonction des besoins des utilisateurs et des contraintes techniques. Il ou elle analyse et imagine des solutions et des interfaces adaptées.</p><p>Postes en lien : Designer Web, Designer UI, Designer UX, Et plus…</p>', 5),
(22, 'Programmes universitaires', '<p>Certains étudiantes et étudiants choisissent de poursuivre leur formation à l’Université après leur DEC en Techniques d’intégration multimédia.</p><p><ul>Design<li>Baccalauréat en design graphique</li><li>Baccalauréat en art et science de l’animation</li><li>Baccalauréat en création numérique concentration cinéma, création 3D et création de jeux vidéo</li><li>Et plus…</li></ul></p><p><ul>Programmation<ul><li>Baccalauréat en informatique</li><li>Baccalauréat en génie informatique</li><li>Baccalauréat en génie logiciel</li><li>Et plus…</li></ul></p>', 5),
(23, 'Type d\'employeurs', '<ul><li>Agences Web et numériques</li><li>Entreprises en multimédia</li><li>Entreprises privées</li><li>Secteurs publics et parapublics</li></ul>', 5),
(24, 'Stages', '<p>Le programme TIM du Cégep de Sainte-Foy offre des stages en Alternance travail études (<abbr title=\"Alternance travail études\">ATE</abbr>) pendant l’été et un stage crédité à la session 6 qui peut être réalisé en France.</p<p>Contacter <a href=\"#\">Pascal Larose</a> pour en savoir plus.</p>', 1),
(25, 'Stages', '<p>Stage de fin d’études. Début le 17 mars 2025 pour une durée de 8 semaines. Les étudiantes et les étudiants seront ensuite disponibles à l\'emploi. Ces stages rémunérés sont admissibles à des crédits d\'impôt avantageux.</p><p>Stage Alternance travail-étude (ATE). Début à partir du 26 mai 2025 pour une durée minimum de 8 semaines. Ces stages rémunérés sont admissibles à des crédits d\'impôt avantageux.</p><p>Consultez le profil des compétences de nos étudiantes et étudiants (<a href=\"#\">mettre profilCompetences2025.pdf en lien)</a></p><p>Contactez <a href=\"#\">Pascal Larose</a>Pour en savoir plus. Téléphone : (418) 659-6600, poste 6663</p>', 1),
(26, 'Les stages Alternance travail-étude (ATE)', '<p>Les stages<abbr title=\"Alternance travail-étude\">ATE est une formule qui permet aux étudiants et aux étudiantes qui le désirent, dès la fin de la première année, de vivre une expérience de travail enrichissante, tout en étant encadré par une personne enseignante et superviseure dans un milieu de travail authentique. Cette expérience permettra à l’étudiant et à l’étudiante de vivre la réalité du marché du travail et de mettre ses nouveaux acquis à profit.</p><p>Pourquoi faire un stage ATE?<ul><li>Découvrir la dynamique d’un environnement de travail de professionnel</li><li>Faire de nouveaux apprentissages complémentaires au programme</li><li>Développer ses compétences professionnelles</li><li>Agrandir son réseau de contact dans le domaine</li></ul></p>', 1),
(27, 'Le stage de dernière session', 'La dernière session de la formation est divisée en deux parties. La première comporte des cours réalisés en mode intensif d’une durée de sept semaines. La seconde est entièrement consacrée à un stage rémunéré en entreprise.', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `axes`
--
ALTER TABLE `axes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `axes_cours`
--
ALTER TABLE `axes_cours`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `axe_id_2` (`axe_id`,`cours_id`),
  ADD KEY `axe_id` (`axe_id`),
  ADD KEY `cours_id` (`cours_id`);

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `diplomes`
--
ALTER TABLE `diplomes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etapes`
--
ALTER TABLE `etapes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projet_id` (`projet_id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `responsable_id` (`responsable_id`);

--
-- Index pour la table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `diplome_id` (`diplome_id`),
  ADD KEY `cours_id` (`cours_id`);

--
-- Index pour la table `responsables`
--
ALTER TABLE `responsables`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `temoignages`
--
ALTER TABLE `temoignages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `textes`
--
ALTER TABLE `textes`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `axes`
--
ALTER TABLE `axes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `axes_cours`
--
ALTER TABLE `axes_cours`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `diplomes`
--
ALTER TABLE `diplomes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT pour la table `etapes`
--
ALTER TABLE `etapes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Clé primaire', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `projets`
--
ALTER TABLE `projets`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT pour la table `responsables`
--
ALTER TABLE `responsables`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `temoignages`
--
ALTER TABLE `temoignages`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT pour la table `textes`
--
ALTER TABLE `textes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `axes_cours`
--
ALTER TABLE `axes_cours`
  ADD CONSTRAINT `axes_cours_ibfk_1` FOREIGN KEY (`cours_id`) REFERENCES `cours` (`id`),
  ADD CONSTRAINT `axes_cours_ibfk_2` FOREIGN KEY (`axe_id`) REFERENCES `axes` (`id`);

--
-- Contraintes pour la table `etapes`
--
ALTER TABLE `etapes`
  ADD CONSTRAINT `etapes_ibfk_1` FOREIGN KEY (`projet_id`) REFERENCES `projets` (`id`);

--
-- Contraintes pour la table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`responsable_id`) REFERENCES `responsables` (`id`);

--
-- Contraintes pour la table `projets`
--
ALTER TABLE `projets`
  ADD CONSTRAINT `projets_ibfk_1` FOREIGN KEY (`diplome_id`) REFERENCES `diplomes` (`id`),
  ADD CONSTRAINT `projets_ibfk_2` FOREIGN KEY (`cours_id`) REFERENCES `cours` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
