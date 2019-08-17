-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 21 mars 2018 à 08:31
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ciud`
--

-- --------------------------------------------------------

--
-- Structure de la table `administration`
--

CREATE TABLE `administration` (
  `id` int(11) NOT NULL,
  `personnalite_statut` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `profil_photo` blob NOT NULL,
  `message` text NOT NULL,
  `matieres_dispenses` varchar(100) NOT NULL,
  `debut_enseignement` date NOT NULL,
  `dernier_diplome` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ciud_actualites`
--

CREATE TABLE `ciud_actualites` (
  `id` int(11) NOT NULL,
  `categorie` varchar(100) NOT NULL,
  `img_file` blob,
  `img_directory` varchar(100) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `date_pub` datetime NOT NULL,
  `publication_by` varchar(100) NOT NULL,
  `here_school` varchar(100) NOT NULL,
  `url_actu` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ciud_actualites`
--

INSERT INTO `ciud_actualites` (`id`, `categorie`, `img_file`, `img_directory`, `title`, `content`, `date_pub`, `publication_by`, `here_school`, `url_actu`) VALUES
(1, 'INFO', NULL, 'assets/app/images/slider/bg_alt_2.jpg', 'Excussion des membres du club informatique ud', 'fghcdug rg dfug drgdfy gfudhghu h ruvhdj gbdrjgbr vbr r vbgybr bbd bdn djbndtvnbdtjntj vbdvjbnt j bvht jvbhtjvbtj gy tbvj bv jhb vj ftbvj tnbt bnftj bntj nbjt fhbntuj hnbtjbnftjbntu kbnt kubntk bntfk bnftkubnft ubnk fnbftk u bnft ....', '2018-03-21 00:00:00', 'Bzile', 'Fac Science', 'Excussion-des-membres-du-club-informatique-ud'),
(2, 'Astuces', NULL, 'assets/app/images/img6.jpg', 'Retoucher une image avec photoshop', 'hurfhryrhybyrbrubrybtytbuybtruybtruyrbbvrybuyb uybuy butybv utbvuty btuvb utyb uty bv uvb tuyvb tu vb tv fr cft ed er dxgcyy v hfv fr cg fhvb hg vf cdf gc fgv hg vfv fg', '2018-03-06 00:00:00', 'Bzile', 'Fac science', 'Retoucher-une-image-avec-photoshop'),
(3, 'Sport', NULL, 'assets/app/images/img3.jpg', 'Lancement des jeux universitaire', 'tfy rèèytfyfytf yf yt tyrfty ftyftyfytfy t f tftyftyf ty fytfytfty fytf tyf tyf ytf uytfy tygtygytfggtyf uytfgtyfguytf gyt f yt fgytguy guyu gtyggy y tgy-t fty ftyf ty fgty fuygty fg uygtygty', '2018-03-27 00:00:00', 'Bzile', 'fac science', 'Lancement-des-jeux-universitaire'),
(4, 'culture', NULL, 'assets/app/images/img3.jpg', 'de quelle ethnie es-tu?', 'tfy rèèytfyfytf yf yt tyrfty ftyftyfytfy t f tftyftyf ty fytfytfty fytf tyf tyf ytf uytfy tygtygytfggtyf uytfgtyfguytf gyt f yt fgytguy guyu gtyggy y tgy-t fty ftyf ty fgty fuygty fg uygtygty', '2018-03-27 00:00:00', 'Bzile', 'fac science', 'mon-etnie'),
(5, 'cuisine', NULL, 'assets/app/images/img3.jpg', 'met traditionnel de louest?', 'tfy rèèytfyfytf yf yt tyrfty ftyftyfytfy t f tftyftyf ty fytfytfty fytf tyf tyf ytf uytfy tygtygytfggtyf uytfgtyfguytf gyt f yt fgytguy guyu gtyggy y tgyt fty ftyf ty fgty fuygty fg uygtygty', '2018-03-27 00:00:00', 'la_go_du_G21', 'fac science', 'mon-mets-traditionnel'),
(6, 'kongoss', NULL, 'assets/app/images/img3.jpg', 'quelle l enseignant qui t enerve le plus?', 'tfy rèèytfyfytf yf yt tyrfty ftyftyfytfy t f tftyftyf ty fytfytfty fytf tyf tyf ytf uytfy  MONSIEUR NDJE  f uytfgtyfguytf gyt f yt fgytguy guyu gtyggy y tgy-t fty ftyf ty fgty fuygty fg uygtygty', '2018-03-27 00:00:00', 'la_go_du_G21', 'fac science', 'kongoss-en-vrai');

-- --------------------------------------------------------

--
-- Structure de la table `ciud_admin`
--

CREATE TABLE `ciud_admin` (
  `id` int(11) NOT NULL,
  `identifiant` varchar(100) NOT NULL,
  `mot_passe` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `etablissement` varchar(50) NOT NULL,
  `filiere` varchar(20) NOT NULL,
  `domaine_acces` varchar(50) NOT NULL,
  `accces` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ciud_admin`
--

INSERT INTO `ciud_admin` (`id`, `identifiant`, `mot_passe`, `date`, `etablissement`, `filiere`, `domaine_acces`, `accces`) VALUES
(1, 'grfgt', 'hb hb ', '2018-03-27 00:00:00', 'hbh', 'hhvb', 'bhbhvb', 45),
(2, 'CINEMA', 'FGFHVBFHDGFGVGFHBVFGVFGVB', '2018-03-02 15:01:59', 'FACSCIENCE', 'pHYSIQUE', 'aCCES COMPLET', 0),
(3, '15S47049', 'CIUD', '2018-03-14 00:00:00', 'FAC SCIENCE', 'PAPP II', 'Total', 1);

-- --------------------------------------------------------

--
-- Structure de la table `ciud_anniversaire`
--

CREATE TABLE `ciud_anniversaire` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `img_file` longblob NOT NULL,
  `img_directory` varchar(100) NOT NULL,
  `date_naissance` datetime NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ciud_anniversaire`
--

INSERT INTO `ciud_anniversaire` (`id`, `id_user`, `img_file`, `img_directory`, `date_naissance`, `date`) VALUES
(1, 123, 0x677468, 'assets\\app\\images\\montage00.png', '2018-04-20 00:00:00', '2018-03-10 09:02:38');

-- --------------------------------------------------------

--
-- Structure de la table `ciud_annonces`
--

CREATE TABLE `ciud_annonces` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `infos_contact` varchar(100) NOT NULL,
  `img_description` longblob,
  `img_path` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `is_public` tinyint(1) NOT NULL DEFAULT '0',
  `date` datetime NOT NULL,
  `edit_by` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ciud_annonces`
--

INSERT INTO `ciud_annonces` (`id`, `title`, `description`, `infos_contact`, `img_description`, `img_path`, `location`, `is_public`, `date`, `edit_by`) VALUES
(1, 'Prepa-Concours', 'hbhrfhgfhgfhgfhgfhgf', '75654757576457', 0x66666766676766, 'assets/app/images/img4.jpg', 'Dakar, douala', 1, '2018-03-10 08:37:30', 'Ronaldo'),
(2, 'Cours de vacances', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '6758576867', NULL, 'assets/app/images/img5.jpg', 'Bonanjo, Douala ', 1, '2018-03-20 00:00:00', 'Bzile'),
(3, 'Formation professionnelle', 'description jhgrjhfgrhrhfghhh', '76768568575', 0x6465736372697074696f6e6a6867726a686667726872686667686868, 'assets/app/images/img4.jpg', 'IAI Cameroun', 1, '2018-03-09 19:04:49', 'Wilfried');

-- --------------------------------------------------------

--
-- Structure de la table `ciud_home`
--

CREATE TABLE `ciud_home` (
  `id` int(11) NOT NULL,
  `activity_name` varchar(20) NOT NULL,
  `activity_description` text NOT NULL,
  `date_edition` datetime NOT NULL,
  `ic_img` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ciud_home`
--

INSERT INTO `ciud_home` (`id`, `activity_name`, `activity_description`, `date_edition`, `ic_img`) VALUES
(1, 'Les ateliers', 'Les ateliers permettent à un petit groupe de membres de se réunir sur une base régulière pour approfondir un aspect de l’informatique comme le traitement de texte, le fonctionnement de l’ordinateur, la construction de site Web, etc.', '2018-03-27 00:00:00', '&#67;'),
(2, 'Seminaire', ' Des bénévoles du club offrent des seminaires de formation sur les outils de travail de l’ordinateur et Internet pour les débutants. Ces seminaires sont offerts dans les AMPHI de l\'université de Douala. Il n’est pas nécessaire d’être membre du club pour y assister.', '2018-03-05 00:00:00', '&#123;'),
(3, 'Suivis et Conseils', 'L’élément principal de la mission du club est le partage de connaissances. Le club a mis en place les activités décrites ci-après pour favoriser l’acquisition de nouvelles connaissances par ses membres.', '2018-03-26 00:00:00', '&#195;'),
(4, 'Projets', '  N\'oubliez pas qu\'en mettant toutes les chances de votre côté par la mise en œuvre d\'un projet professionnel clair et réaliste, le club informatique de l\'université de Douala(CIUD) par ses developpeur dynamiques offre de l\'aide technique et morale nécessaire pour favoriser la réalisaton des projets.', '2018-03-13 00:00:00', '&#114;'),
(5, 'Partage numerique', 'Les sessions de partage numerique sont des journées animées par des adherent du ciud. ', '2018-03-21 00:00:00', '&#114;'),
(6, 'Les tutoriels', ' Les tutoriels documentent de façon détaillée l’utilisation de certaines fonctions ou de certains logiciels.', '2018-03-19 00:00:00', '&#228;');

-- --------------------------------------------------------

--
-- Structure de la table `ciud_leaders`
--

CREATE TABLE `ciud_leaders` (
  `id` int(11) NOT NULL,
  `type_assoc` varchar(100) NOT NULL,
  `nom_assoc` varchar(100) NOT NULL,
  `sigle_assoc` varchar(20) NOT NULL,
  `year` datetime NOT NULL,
  `nom_president` varchar(255) NOT NULL,
  `nb_person_bureau` int(11) NOT NULL,
  `etablissement` varchar(100) NOT NULL,
  `img_file` longblob,
  `img_directory` varchar(100) NOT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ciud_leaders`
--

INSERT INTO `ciud_leaders` (`id`, `type_assoc`, `nom_assoc`, `sigle_assoc`, `year`, `nom_president`, `nb_person_bureau`, `etablissement`, `img_file`, `img_directory`, `url`) VALUES
(1, 'AE', 'Association des étudiants Faculté des sciences', 'AE-FS:UD', '2018-03-27 00:00:00', 'Seraphin', 20, 'FAC SCIENCES', NULL, 'assets/app/images/associations/manga_bell.jpg', 'faculte-des-sciences'),
(2, 'CLUB', 'Club informatique université de Douala', 'CIUD', '2018-03-27 00:00:00', 'Seffi Peguy', 20, 'CLUB INFORMATIQUE', NULL, 'assets/app/images/associations/manga_bell.jpg', 'club-informatique-universite-de-douala');

-- --------------------------------------------------------

--
-- Structure de la table `ciud_membres`
--

CREATE TABLE `ciud_membres` (
  `id` int(11) NOT NULL,
  `code_id` varchar(20) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `matricule` varchar(15) NOT NULL,
  `sexe` varchar(10) NOT NULL,
  `num_whatsapp` int(11) NOT NULL,
  `num_tel` int(11) NOT NULL,
  `etablissement` varchar(30) NOT NULL,
  `filiere` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `domaine_competence` varchar(50) NOT NULL,
  `date_register` varchar(20) NOT NULL,
  `added_by` varchar(50) NOT NULL,
  `complet` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ciud_membres`
--

INSERT INTO `ciud_membres` (`id`, `code_id`, `nom`, `prenom`, `matricule`, `sexe`, `num_whatsapp`, `num_tel`, `etablissement`, `filiere`, `date`, `domaine_competence`, `date_register`, `added_by`, `complet`) VALUES
(1, 'thgbth', 'hbhb', 'bhbh', 'hbh', 'hbh', 65656, 767, 'jbjjh', 'hbhb', '2018-03-20', 'bhvbgh', '', '', 1),
(2, 'code_id', 'nom', 'prenom', 'matricule', 'sexe', 745765675, 7464646, 'etablissement', 'filiere', '2018-03-04', 'domaine_competence', '', '', 1),
(3, '64CB54B21H', 'HBHYJ', 'HBHYJ', 'empty', 'empty', 5465, 465, ' FGI', ' Mécanique', '2018-03-15', 'empty', 'empty', '', 1),
(4, '53WG11A90A', 'feef', 'feef', 'empty', 'empty', 565, 5657, ' FGI', ' Mécanique', '2018-03-15', 'empty', 'empty', '', 1),
(5, '84MU24U36O', 'HBGH', 'HBGH', 'empty', 'empty', 5454, 54454, ' FGI', ' Mécanique', '2018-03-15', 'empty', 'empty', '', 1),
(6, '38YW21F44A', 'uhuh', 'uhuh', 'empty', 'empty', 6565, 65656, ' FGI', ' Mécanique', '2018-03-15', 'empty', 'empty', '', 1),
(7, '73FS10F32D', 'g', 'g', 'empty', 'empty', 5656556, 5656, ' FGI', ' Mécanique', '2018-03-15', 'empty', 'empty', '', 1),
(8, '70QS25C79B', 'YGYGYH', 'YGYGYH', 'empty', 'empty', 45678, 45678, ' FS ', ' Mécanique', '2018-03-15', 'empty', 'empty', '', 1),
(9, '12RP83B73X', 'GYTT', 'GYTT', 'empty', 'empty', 45678, 4567, ' FGI', ' Mécanique', '2018-03-15', 'empty', 'empty', '', 1),
(10, '93AR91B85O', 'FGVHY', 'FGVHY', 'empty', 'empty', 4567, 456, ' ENSET ', ' Mécanique', '2018-03-15', 'empty', 'empty', '', 1),
(11, '50GF39M83Q', 't-y-y-y', 't-y-y-y', 'empty', 'empty', 76543, 654, ' FGI', ' Mécanique', '2018-03-15', 'empty', 'empty', '', 1),
(12, '14WR46Y79H', 'DFTGYHUJI', 'DFTGYHUJI', 'empty', 'empty', 456789, 3456789, ' FGI', ' Mécanique', '2018-03-15', 'empty', 'empty', '', 1),
(13, '66EU98P26T', 'hyfggygy', 'hyfggygy', 'empty', 'empty', 456789, 4567890, ' FGI', ' Mécanique', '2018-03-16', 'empty', 'empty', '15S47049', 1),
(14, '90FX89Q18D', 'dfghj', 'dfghj', 'empty', 'empty', 85678, 4567, ' FGI', ' Topographie ', '2018-03-16', 'empty', 'empty', '15S47049', 1),
(15, '21CG99R45A', 'TFTGY', 'TFTGY', 'empty', 'empty', 45678, 456789, ' ENSET ', ' Mécanique', '2018-03-16', 'empty', 'empty', '15S47049', 1),
(16, '29AE23Z47Q', 'fgregrgree', 'fgregrgree', 'empty', 'empty', 567577, 4565465, ' FGI', ' Mécanique', '2018-03-16', 'empty', 'empty', '15S47049', 1),
(17, '79CT83I16Q', 'RGRGR', 'RGRGR', 'empty', 'empty', 666666666, 666666666, ' FGI', ' Mécanique', '2018-03-16', 'empty', 'empty', '15S47049', 1),
(18, '87AZ38W30F', 'GFGTFVT', 'GFGTFVT', 'empty', 'empty', 555555555, 555555555, ' FGI', ' Mécanique', '2018-03-16', 'empty', 'empty', '15S47049', 1),
(19, '24TI86M16T', 'ygyg', 'ygyg', 'empty', 'empty', 654445655, 654444445, 'gtgt', 'gtgtg', '2018-03-16', 'empty', 'empty', '15S47049', 1),
(20, '42MA30Y70P', 'rgrgrg', 'rgrgrg', 'empty', 'empty', 655555555, 655555555, 'grgf', 'frgrg', '2018-03-16', 'empty', 'empty', '15S47049', 1),
(21, '66OX38D64X', 'gdg', 'gdg', 'empty', 'empty', 655555555, 655555555, 'vgvg', 'vgbvgb', '2018-03-16', 'empty', 'empty', '15S47049', 1),
(22, '96OP37U45E', 'huug', '', 'empty', 'empty', 654379397, 654379397, 'hghygy', 'yghygy', '2018-03-17', 'empty', 'empty', '15S47049', 1),
(23, '65YI29S41S', 'yfyfhyfgy', '', 'empty', 'empty', 656666666, 656666666, 'hygy', 'ygyg', '2018-03-18', 'empty', 'empty', '15S47049', 1),
(24, '98GG94I62S', 'hbuybyb', '', 'empty', 'empty', 656666666, 656666666, 'ygyg', 'yghyg', '2018-03-18', 'empty', 'empty', '15S47049', 1),
(25, '67UG41C59Z', 'hrfbhyfgbry', '', 'empty', 'empty', 655555555, 655555555, 'yhbyg', 'ygb', '2018-03-18', 'empty', 'empty', '15S47049', 1),
(26, '50EF50C33F', 'FRYFGYGY11', '', 'empty', 'empty', 657777777, 657777777, 'TFGTF', 'FGT', '2018-03-18', 'empty', 'empty', '15S47049', 1),
(27, '26OC93U69W', 'huhgyghg', '', 'empty', 'empty', 656666666, 656666666, 'yghgg', 'hgyghy', '2018-03-18', 'empty', 'empty', '15S47049', 1),
(28, '71CW33A39F', 'ghyhy', '', 'empty', 'empty', 656666666, 656666666, 'juihu', 'hujhuj', '2018-03-18', 'empty', 'empty', '15S47049', 1),
(29, '50ES18P91A', 'tghyhy', '', 'empty', 'empty', 655555555, 655555555, 'vggt', 'gtgtgt', '2018-03-18', 'empty', 'empty', '15S47049', 1),
(30, '84YB51S35T', 'HUU', '', 'empty', 'empty', 655555555, 655555555, 'gygy', 'gygy', '2018-03-18', 'empty', 'empty', '15S47049', 1),
(31, '25FX53F11B', 'ugbntugu', '', 'empty', 'empty', 655555555, 655555555, 'ujhuj', 'hujh', '2018-03-18', 'empty', 'empty', '15S47049', 1),
(32, '93UH77R51H', 'mon nom', 'nom', 'empty', 'empty', 656566666, 656566666, 'fgi', 'meca', '2018-03-18', 'empty', '2018-03-16', '15S47049', 1),
(33, '25PB50U18O', 'BHG', '', 'empty', 'empty', 654379397, 654379397, 'YBYGY', 'GYGHYYG', '2018-03-18', 'empty', '2018-03-16', '15S47049', 1),
(34, '72OZ94O90U', 'MON NOM', 'NOM', 'empty', 'empty', 677777777, 677777777, 'ETABLISSEMENT', 'FILIERE', '2018-03-18', 'empty', '2018-03-16', '15S47049', 1),
(35, '98ET56T68X', 'bfbhfg', '', 'empty', 'empty', 675555555, 675555555, 'hbffgbh', 'bfchbfhfr', '2018-03-18', 'empty', '2018-03-20', '15S47049', 1),
(36, '36IR60C10C', 'mon nom', 'nom', 'empty', 'empty', 656666666, 656666666, 'etablissement', 'meca', '2018-03-18', 'empty', '2018-03-17', '15S47049', 1),
(37, '35OZ84Z59A', 'ton nom', 'nom', 'empty', 'empty', 656666666, 656666666, 'hug', 'ugugh', '2018-03-18', 'empty', '2018-03-16', '15S47049', 1),
(38, '35RY80E48Q', 'mon nom', 'nom', 'empty', 'empty', 656666666, 656666666, 'hhjgh', 'ughghg', '2018-03-18', 'empty', '2018-03-04', '15S47049', 1),
(39, '27OR29X95D', 'jnuuy', '', 'empty', 'empty', 655466666, 655466666, 'uhuyhu', 'huhuh', '2018-03-18', 'empty', '2018-03-30', '15S47049', 1),
(40, '24PQ46O70F', 'hfrhuh uhruhfu prenom', '', 'empty', 'empty', 655466666, 655466666, 'uhuh', 'uhujh', '2018-03-18', 'empty', '2018-03-30', '15S47049', 1),
(41, '45BG38Q56E', 'ghygy yyg', '', 'empty', 'empty', 655466666, 655466666, 'huh', 'uhu', '2018-03-18', 'empty', '2018-03-09', '15S47049', 1),
(42, '41ZC68O18U', 'bhh prenom', '', 'empty', 'empty', 654555555, 654555555, 'hbvh', 'vg', '2018-03-18', 'empty', '2018-03-30', '15S47049', 1),
(43, '80OA10Z21Y', 'BHHV prenom', 'prenom', 'empty', 'empty', 654555555, 654555555, 'gfgtfg', 'gghfgh', '2018-03-18', 'empty', '2018-03-14', '15S47049', 1),
(44, '44PM92C32S', 'fbyfyr byyg', 'byyg', 'empty', 'empty', 654555555, 654555555, 'yg', 'bvty', '2018-03-18', 'empty', '2018-03-24', '15S47049', 1),
(45, '36CC91Q90C', 'Yfguyfguyf', '', 'empty', 'empty', 654666666, 654666666, 'Yyvtyf', 'Ftyfgtyfg', '2018-03-18', 'empty', '2018-03-22', '15S47049', 1),
(46, '15XE26Z18Y', 'Hgyg Ghhg Hgyg Hjgh ', '', 'empty', 'empty', 654666666, 654666666, 'Hujh Hujh Jbj', 'Jhj Jbhj ', '2018-03-18', 'empty', '2018-03-23', '15S47049', 1),
(47, '75IF81P83Y', 'Ftftf Ggggg Gfghgh', 'Gfghgh', 'empty', 'empty', 654666666, 654666666, 'Hhg', 'Ygy', '2018-03-18', 'empty', '2018-03-22', '15S47049', 1),
(48, '47MS43F89A', 'Gh Hgbh Hbhg Hybggy Bhbhyh', 'Bhbhyh', 'empty', 'empty', 654666666, 654666666, 'Bhybh', 'Bbvyb', '2018-03-18', 'empty', '2018-03-23', '15S47049', 1),
(49, '39DC19Q49Z', 'Hbggygygy', '', 'empty', 'empty', 655555555, 655555555, 'Gygygygy', 'Gygygyg', '2018-03-18', 'empty', '2018-03-21', '15S47049', 1),
(50, '51YW47W41E', 'GYGYGY', '', 'empty', 'empty', 656666666, 656666666, 'Ygvhgfgt', 'Gbyhhg', '2018-03-18', 'empty', '2018-02-19', '15S47049', 1),
(51, '74UI13F49I', 'GGFGF', '', 'empty', 'empty', 656666666, 656666666, 'GVGFVGT', 'VFGVFG', '2018-03-18', 'empty', '2018-03-23', '15S47049', 1),
(52, '58SO91D53B', 'Bybybg', '', 'empty', 'empty', 674444444, 674444444, 'Hbhygb', 'Hybvh', '2018-03-18', 'empty', '2018-03-15', '15S47049', 1),
(53, '67PF40X16O', 'Hfurghfutghujtgh', '', 'empty', 'empty', 655555555, 655555555, 'Vghghj', 'Vhvhf', '2018-03-19', 'empty', '2018-03-11', '15S47049', 1),
(54, '96OQ32X58E', 'Yfghfgtfg', '', 'empty', 'empty', 655555555, 655555555, 'Gtgt', 'Bygty', '2018-03-20', 'empty', '2018-03-14', '15S47049', 1),
(55, '48QO36Z20U', 'Guhjbgubh', '', 'empty', 'empty', 656666666, 656666666, 'Yvgyv', 'Hyvbhyvyh', '2018-03-20', 'empty', '2018-03-21', '15S47049', 1),
(56, '30GC67Y72W', 'B HB HBH', 'HBH', 'empty', 'empty', 656666666, 656666666, 'HBHB', 'HBH', '2018-03-20', 'empty', '2018-03-23', '15S47049', 1),
(57, '54CT29X22G', 'VGVG', '', 'empty', 'empty', 656666666, 656666666, 'CFCFC', 'GV GV G', '2018-03-20', 'empty', '2018-03-22', '15S47049', 1),
(58, '53QB75S64U', 'VBFHGB', '', 'empty', 'empty', 656666666, 656666666, 'BYBVHG', 'BHVBHB', '2018-03-20', 'empty', '2018-03-31', '15S47049', 1),
(59, '57GY81G56D', 'HVBVH', '', 'empty', 'empty', 656666666, 656666666, 'VHV', 'VHV', '2018-03-20', 'empty', '2018-03-16', '15S47049', 1),
(60, '26BT48F23H', 'HVGH', '', 'empty', 'empty', 654555555, 654555555, 'VGV', 'GVG', '2018-03-20', 'empty', '2018-03-29', '15S47049', 1),
(61, '78IB50X98C', 'YFGYG', '', 'empty', 'empty', 654555555, 654555555, 'YGYGHY', 'GYFG', '2018-03-20', 'empty', '2018-03-30', '15S47049', 1),
(62, '36CI22D59Q', 'HVGD', 'D', 'empty', 'empty', 654555553, 654555553, 'HVHF', 'GVHFHF', '2018-03-20', 'empty', '2018-03-25', '15S47049', 1),
(63, '44IG48B52O', 'Bygyg', '63', 'empty', 'empty', 654555555, 654555555, 'Ygbygy', 'Ugyvg', '2018-03-20', 'empty', '2018-03-08', '15S47049', 1),
(64, '43FR51H41Z', 'Hbhyby Gygtyy', 'Gygtyy', 'empty', 'empty', 654555555, 654555555, 'Gbhybvhy', 'Gbhyvb', '2018-03-20', 'empty', '2018-03-15', '15S47049', 1),
(65, '44MT53X15R', 'Nom ', 'Ggg', 'empty', 'empty', 654555555, 654555555, 'Prenom', 'Hvhvhhb', '2018-03-20', 'empty', '2018-03-01', '15S47049', 1),
(66, '45IU88C89M', 'Aa Bb', 'Bb', 'empty', 'empty', 654444444, 654444444, 'Hghgh', 'Hghg', '2018-03-21', 'empty', '2018-03-23', '15S47049', 1),
(67, '92FW12C80T', 'AA Bb', 'Bbgh', 'empty', 'empty', 654444444, 654444444, 'Hygh', 'Hgygy', '2018-03-21', 'empty', '2018-03-23', '15S47049', 1),
(68, '57ZQ73P54I', 'Aa   ', 'BB', 'empty', 'empty', 654444444, 654444444, 'HJH', 'JHJH', '2018-03-21', 'empty', '2018-03-08', '15S47049', 1),
(69, '36UP33E54D', 'HYHYHHY  YYY', 'G', 'empty', 'empty', 654444444, 654444444, 'HBHB', 'HBHBV', '2018-03-21', 'empty', '2018-03-14', '15S47049', 1),
(70, '63IF54R86E', 'GhghHGH', '', 'empty', 'empty', 654444444, 654444444, 'Bhbhyb Hbh', 'Hbhyh Hgghgh', '2018-03-21', 'empty', '2018-03-08', '15S47049', 1),
(71, '10YS45O98Y', 'A F G Hhh', 'Ggg', 'empty', 'empty', 654666666, 654666666, 'Gygy', 'Ygyg', '2018-03-21', 'empty', '2018-03-09', '15S47049', 1),
(72, '85HH39G23A', 'Bbh', '', 'empty', 'empty', 654444444, 654444444, 'Bhbh', 'Bhb', '2018-03-21', 'empty', '2018-03-22', '15S47049', 0),
(73, '49EM24A97E', 'Hbvhfbvh FG', 'Tt', 'empty', 'empty', 654444444, 654444444, 'Hbhbh', 'Bhbh', '2018-03-21', 'empty', '2018-03-29', '15S47049', 1),
(74, '27FF56S49G', 'BHVH', '', 'empty', 'empty', 654444444, 654444444, 'VGVGH', 'VGHVGH', '2018-03-21', 'empty', '2018-03-30', '15S47049', 0),
(75, '89CD66O28A', 'HBHVB', '', 'empty', 'empty', 654666666, 654666666, 'GVBGHVB', 'GHVBGH', '2018-03-21', 'empty', '2018-03-23', '15S47049', 1),
(76, '95OC82C21G', 'Bhbhfbhrb', '', 'empty', 'empty', 654555555, 654555555, 'Hbhbh', 'Bhbhb', '2018-03-21', 'empty', '2018-03-22', '15S47049', 1),
(77, '96SA87Y30C', 'Yggt', '', 'empty', 'empty', 654444444, 654444444, 'Ftftrfr', 'Bhybhb', '2018-03-21', 'empty', '2018-03-23', '15S47049', 0),
(78, '40PE68I17P', 'Jnjbjhb', '', 'empty', 'empty', 655555555, 655555555, 'Bhbh', 'Bhbhb', '2018-03-21', 'empty', '2018-03-30', '15S47049', 1);

-- --------------------------------------------------------

--
-- Structure de la table `ciud_parametres`
--

CREATE TABLE `ciud_parametres` (
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ciud_partenaires`
--

CREATE TABLE `ciud_partenaires` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_sigle` varchar(20) NOT NULL,
  `logo` longblob,
  `logo_path` varchar(100) NOT NULL,
  `is_partner` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ciud_partenaires`
--

INSERT INTO `ciud_partenaires` (`id`, `name`, `name_sigle`, `logo`, `logo_path`, `is_partner`) VALUES
(1, 'Le club informatique de l\'universite de douala', 'CIUD', NULL, 'assets/app/images/logo-ciud.png', 1),
(2, 'L\'espace applicative de la plateforme apps lernen', 'ALSTORE', NULL, 'assets/app/images/alstore.png', 1),
(3, 'Un espace de professionnalisation', 'Betuu', NULL, 'assets/app/images/betuu.png', 1),
(4, 'La plate forme apps lernen', 'APPS LERNEN', NULL, 'assets/app/images/al.png', 1);

-- --------------------------------------------------------

--
-- Structure de la table `ciud_statistiques`
--

CREATE TABLE `ciud_statistiques` (
  `id` int(11) NOT NULL,
  `page` int(11) NOT NULL,
  `nbre_visite_jour` int(11) NOT NULL,
  `nbre_visite_mois` int(11) NOT NULL,
  `nbre_visite_ans` int(11) NOT NULL,
  `nbre_visite_heure` int(11) NOT NULL,
  `nbre_visite_semaine` int(11) NOT NULL,
  `temps_mis_page` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ciud_team`
--

CREATE TABLE `ciud_team` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `filiere` varchar(50) NOT NULL,
  `etablissement` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ciud_users`
--

CREATE TABLE `ciud_users` (
  `id` int(11) NOT NULL,
  `seminaire` varchar(50) NOT NULL,
  `code_identification` varchar(50) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ciud_users`
--

INSERT INTO `ciud_users` (`id`, `seminaire`, `code_identification`, `date`) VALUES
(1, 'bfhfbhfbfhgy', 'bgybthgbthygtg', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `ciud_visiteurs`
--

CREATE TABLE `ciud_visiteurs` (
  `id` int(11) NOT NULL,
  `user_agent` varchar(200) NOT NULL,
  `name_system` varchar(15) NOT NULL,
  `ip_adresse` varchar(20) NOT NULL,
  `port_connexion` mediumint(9) NOT NULL,
  `navigateur` varchar(15) NOT NULL,
  `date` datetime NOT NULL,
  `site_reference` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ciud_visiteurs`
--

INSERT INTO `ciud_visiteurs` (`id`, `user_agent`, `name_system`, `ip_adresse`, `port_connexion`, `navigateur`, `date`, `site_reference`) VALUES
(1, 'BH', 'BYBYB', 'BBH', 67, 'HBH', '2018-03-20 00:00:00', 'HBGBB'),
(2, 'user-agent', 'windows', 'C:\\fgfgfgfg', 56566, 'opera', '2018-03-04 08:35:50', 'fb.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administration`
--
ALTER TABLE `administration`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ciud_actualites`
--
ALTER TABLE `ciud_actualites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ciud_admin`
--
ALTER TABLE `ciud_admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ciud_anniversaire`
--
ALTER TABLE `ciud_anniversaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ciud_annonces`
--
ALTER TABLE `ciud_annonces`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ciud_home`
--
ALTER TABLE `ciud_home`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ciud_leaders`
--
ALTER TABLE `ciud_leaders`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ciud_membres`
--
ALTER TABLE `ciud_membres`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code_id` (`code_id`);

--
-- Index pour la table `ciud_parametres`
--
ALTER TABLE `ciud_parametres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ciud_partenaires`
--
ALTER TABLE `ciud_partenaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ciud_team`
--
ALTER TABLE `ciud_team`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ciud_users`
--
ALTER TABLE `ciud_users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ciud_visiteurs`
--
ALTER TABLE `ciud_visiteurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administration`
--
ALTER TABLE `administration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ciud_actualites`
--
ALTER TABLE `ciud_actualites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `ciud_admin`
--
ALTER TABLE `ciud_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `ciud_anniversaire`
--
ALTER TABLE `ciud_anniversaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `ciud_annonces`
--
ALTER TABLE `ciud_annonces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `ciud_home`
--
ALTER TABLE `ciud_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `ciud_leaders`
--
ALTER TABLE `ciud_leaders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `ciud_membres`
--
ALTER TABLE `ciud_membres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT pour la table `ciud_parametres`
--
ALTER TABLE `ciud_parametres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ciud_partenaires`
--
ALTER TABLE `ciud_partenaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `ciud_team`
--
ALTER TABLE `ciud_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ciud_users`
--
ALTER TABLE `ciud_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `ciud_visiteurs`
--
ALTER TABLE `ciud_visiteurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
