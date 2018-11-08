-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 05-11-2018 a las 15:25:06
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aceites`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `t1` int(11) NOT NULL,
  `t2` int(11) NOT NULL,
  `t3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `telefono`, `correo`, `ciudad`, `direccion`, `t1`, `t2`, `t3`) VALUES
(1, 'LA CARRETA 680', '123', '123', '123', '123', 1, 0, 0),
(2, 'Samuel', '1-485-628-8610', 'ornare.lectus@dignissim.net', 'Louvain-la-Neuve', 'Apartado núm.: 877, 4654 Eget Av.', 10, 5, 2),
(3, 'Thor', '1-791-227-7540', 'magna.Suspendisse.tristique@ullamcorpereu.org', 'Padre Hurtado', '535-4640 Donec Avda.', 7, 7, 7),
(4, 'Benedict', '1-540-625-0116', 'sagittis@natoquepenatibus.com', 'Starachowice', '425-2100 Senectus Calle', 10, 1, 5),
(5, 'Garrett', '1-405-218-9569', 'a.tortor.Nunc@velvenenatisvel.ca', 'Nijmegen', 'Apdo.:768-1948 Faucibus Calle', 4, 2, 5),
(6, 'Chaim', '1-102-744-7688', 'eu.tellus@quismassaMauris.ca', 'Cape Breton Island', 'Apartado núm.: 814, 6310 Dui, Av.', 9, 5, 2),
(7, 'Malachi', '1-678-579-3972', 'erat@a.edu', 'Montignies-sur-Sambre', 'Apdo.:130-2384 Fusce Avda.', 5, 9, 5),
(8, 'Ferdinand', '1-448-800-1205', 'lacus.Ut.nec@elementumpurusaccumsan.edu', 'Silius', 'Apdo.:365-6903 Ac Ctra.', 5, 1, 1),
(9, 'Edan', '1-575-188-6820', 'non.bibendum@ipsum.net', 'Manisa', 'Apartado núm.: 159, 455 Neque Avda.', 3, 3, 1),
(10, 'Hall', '1-235-639-7302', 'sollicitudin.commodo.ipsum@Duiscursusdiam.org', 'San Valentino in Abruzzo Citeriore', 'Apdo.:874-7091 Diam. C/', 6, 1, 9),
(11, 'Grady', '1-153-832-3215', 'in.sodales@Curabitur.net', 'Curitiba', '636-9148 Sapien Carretera', 9, 2, 3),
(12, 'Mark', '1-155-898-2222', 'tellus@orciin.ca', 'Sint-Genesius-Rode', '1831 Vel ', 4, 5, 2),
(13, 'Mannix', '1-567-589-1547', 'libero.at@leo.ca', 'Velaine-sur-Sambre', '780-6957 Nullam Ctra.', 7, 7, 4),
(14, 'Steven', '1-502-926-5073', 'non@liberoProinmi.co.uk', 'Donstiennes', 'Apdo.:737-7582 Molestie C/', 3, 1, 3),
(15, 'Ezekiel', '1-430-483-5624', 'urna@turpisnec.ca', 'Roosendaal', 'Apdo.:686-9141 Placerat, Avda.', 2, 3, 4),
(16, 'Vance', '1-797-412-1386', 'massa@egestas.co.uk', 'Walhain-Saint-Paul', 'Apartado núm.: 539, 4960 Convallis Ctra.', 7, 4, 1),
(17, 'Jasper', '1-446-672-6892', 'Vivamus@velsapien.org', 'Warren', '246-9926 Ac Calle', 4, 8, 4),
(18, 'Preston', '1-460-262-4662', 'in.faucibus@arcu.com', 'Arica', 'Apartado núm.: 335, 7265 In Avenida', 1, 1, 9),
(19, 'Eagan', '1-152-924-4452', 'nec.ligula@aceleifend.edu', 'Detroit', 'Apartado núm.: 135, 4388 Ante, Carretera', 6, 2, 6),
(20, 'Micah', '1-259-852-9798', 'lacinia.Sed.congue@a.org', 'Capannori', 'Apdo.:676-8720 Non, Carretera', 5, 6, 8),
(21, 'Porter', '1-755-953-0479', 'quam@dignissimmagnaa.ca', 'Banff', 'Apdo.:607-210 Nunc ', 8, 10, 5),
(22, 'Bevis', '1-368-613-1167', 'facilisi@nonquam.com', 'Kurnool', '401-3393 Massa C/', 8, 7, 2),
(23, 'Jarrod', '1-856-494-1149', 'et.magnis@velitCras.net', 'Gentinnes', 'Apdo.:597-9397 Habitant Avda.', 1, 6, 9),
(24, 'Malcolm', '1-926-800-1718', 'et.lacinia.vitae@temporeratneque.net', 'Colchester', '6033 Eros. Av.', 9, 5, 4),
(25, 'Lucian', '1-374-153-0151', 'rhoncus@malesuadaInteger.edu', 'Teralfene', '329-5018 Feugiat Avenida', 1, 4, 6),
(26, 'Slade', '1-100-668-8725', 'metus@Duisgravida.org', 'São Luís', 'Apartado núm.: 490, 7554 Elementum Calle', 5, 7, 9),
(27, 'Alden', '1-721-475-2035', 'mi.enim@Duisami.net', 'Haguenau', '3963 Eu C/', 2, 2, 2),
(28, 'Drew', '1-348-617-8968', 'at.auctor.ullamcorper@magnisdis.com', 'Rapagnano', '1361 Nunc, Ctra.', 3, 2, 1),
(29, 'Emerson', '1-191-322-0678', 'Aliquam.rutrum@lobortisrisusIn.org', 'Springfield', 'Apartado núm.: 320, 8946 Odio, Ctra.', 10, 1, 5),
(30, 'Driscoll', '1-270-784-6386', 'Donec.vitae@semut.org', 'Draguignan', 'Apdo.:960-8086 Eget ', 4, 2, 4),
(31, 'Bevis', '1-908-544-4540', 'interdum.enim.non@sed.org', 'Ussassai', 'Apartado núm.: 890, 3953 Eget, C/', 10, 6, 1),
(32, 'Hiram', '1-170-532-7593', 'eget@urnaVivamusmolestie.edu', 'Tubeke Tubize', 'Apdo.:127-4557 Urna, ', 10, 1, 10),
(33, 'Isaac', '1-885-952-4670', 'non.lobortis@sedest.ca', 'Murdochville', '8987 Quam Avenida', 2, 8, 2),
(34, 'Benedict', '1-178-338-6780', 'Nunc@luctusCurabituregestas.net', 'Quinte West', 'Apdo.:850-4180 Odio, Avda.', 8, 7, 2),
(35, 'Brett', '1-626-728-5080', 'lacus.Mauris.non@imperdiet.ca', 'Río Verde', 'Apdo.:661-6771 Viverra. Av.', 4, 4, 2),
(36, 'Malcolm', '1-317-373-5413', 'magnis.dis.parturient@scelerisqueneque.org', 'Baden-Baden', 'Apdo.:516-3052 Volutpat. Calle', 1, 10, 2),
(37, 'Linus', '1-395-988-7847', 'Aliquam.ornare.libero@elitdictumeu.edu', 'Trivigno', 'Apartado núm.: 860, 9564 Ligula Av.', 8, 10, 9),
(38, 'Holmes', '1-911-702-4451', 'tincidunt@ametdiameu.edu', 'Wageningen', 'Apartado núm.: 447, 8111 Duis Ctra.', 2, 2, 7),
(39, 'Erasmus', '1-369-605-5903', 'massa@Suspendissealiquetsem.ca', 'Montemesola', 'Apdo.:290-1577 Dolor C.', 10, 9, 9),
(40, 'Kyle', '1-498-102-1931', 'netus.et.malesuada@atsemmolestie.org', 'Sars-la-Buissire', 'Apdo.:302-2837 Massa Ctra.', 2, 6, 9),
(41, 'Linus', '1-657-674-2817', 'turpis.vitae@Mauriseuturpis.com', 'Rewa', '410 Sapien Carretera', 3, 3, 5),
(42, 'Ray', '1-945-744-6543', 'ipsum.Curabitur.consequat@rutrumlorem.org', 'Valparaíso de Goiás', '3850 Consequat ', 8, 2, 7),
(43, 'Michael', '1-630-713-5276', 'Sed.nec@nibhvulputatemauris.com', 'Pessac', '594-4161 Porttitor C/', 3, 7, 5),
(44, 'Patrick', '1-563-545-1384', 'montes@adipiscing.ca', 'Galashiels', 'Apartado núm.: 140, 8709 Erat C/', 3, 5, 4),
(45, 'Kuame', '1-756-134-2672', 'urna.justo@tellusSuspendissesed.net', 'Grand Island', 'Apartado núm.: 500, 6625 Libero. C/', 1, 6, 7),
(46, 'Brendan', '1-606-211-6264', 'erat.eget.ipsum@Sed.net', 'Artena', 'Apdo.:954-5405 Lorem, Calle', 8, 9, 6),
(47, 'Garth', '1-682-570-0932', 'cubilia.Curae@anteipsum.net', 'Pordenone', '5948 Tristique C.', 5, 1, 9),
(48, 'Cade', '1-670-937-0184', 'id@necurnasuscipit.com', 'San Giuliano di Puglia', '8211 Proin Avda.', 1, 9, 1),
(49, 'Harlan', '1-164-792-2430', 'dui@magnaPhasellus.com', 'Isle-aux-Coudres', '755-6881 Nulla C.', 6, 5, 2),
(50, 'Cain', '1-902-634-3207', 'ac.mattis@Suspendisse.ca', 'Borghetto di Vara', 'Apartado núm.: 246, 4146 Tempus C.', 4, 8, 3),
(51, 'August', '1-309-220-0297', 'eget@tellus.ca', 'Gulfport', 'Apartado núm.: 665, 5238 Ligula. Calle', 4, 10, 6),
(52, 'Slade', '1-939-763-8275', 'mi.lacinia.mattis@lacusCras.ca', 'HŽlŽcine', 'Apartado núm.: 492, 3677 Donec C.', 3, 10, 9),
(53, 'Mohammad', '1-157-346-3474', 'blandit.viverra.Donec@velvulputateeu.edu', 'Rutland', '647-7307 Ullamcorper. C/', 10, 8, 9),
(54, 'Odysseus', '1-714-815-5027', 'molestie@arcu.edu', 'Bromyard', 'Apdo.:304-6733 Dui. Avda.', 2, 9, 6),
(55, 'Phillip', '1-683-633-0252', 'tempor@nonleo.co.uk', 'Nijlen', '2255 Purus, Avda.', 9, 3, 5),
(56, 'Barclay', '1-114-368-3546', 'ligula.Aenean.gravida@tempus.co.uk', 'B.S.D.', 'Apartado núm.: 806, 1242 Mattis Avenida', 9, 2, 9),
(57, 'Odysseus', '1-737-640-5650', 'magna.Ut.tincidunt@idnuncinterdum.ca', 'Mobile', '919-7701 Eleifend. Ctra.', 5, 8, 1),
(58, 'Jerome', '1-236-523-8678', 'ante@Donec.com', 'Diano Arentino', 'Apdo.:413-6283 Libero Calle', 10, 4, 3),
(59, 'Tyler', '1-516-434-2675', 'eu@nec.co.uk', 'Richmond Hill', '1422 Integer Ctra.', 8, 4, 9),
(60, 'Raphael', '1-282-657-2338', 'arcu@justonec.org', 'Drayton Valley', 'Apartado núm.: 503, 4389 Pede C/', 2, 5, 10),
(61, 'Brenden', '1-876-805-4584', 'rutrum.urna.nec@tellussemmollis.co.uk', 'Sierning', '544-9837 Integer ', 6, 6, 4),
(62, 'Noah', '1-268-615-8967', 'metus.In.lorem@ornareFusce.com', 'Chiari', '6683 Vitae Calle', 7, 10, 3),
(63, 'Carson', '1-766-977-7551', 'fringilla.Donec@nisi.co.uk', 'Cochrane', '6336 Iaculis Ctra.', 4, 5, 7),
(64, 'Igor', '1-180-857-3156', 'eu.turpis@elementumdui.net', 'Denbigh', '904-5326 Risus. C.', 2, 7, 6),
(65, 'Kermit', '1-430-567-8560', 'leo.elementum.sem@non.co.uk', 'Sherbrooke', 'Apartado núm.: 873, 7037 Risus Avda.', 8, 6, 8),
(66, 'Melvin', '1-763-184-7057', 'tellus.justo.sit@Nullam.ca', 'Pozo Almonte', 'Apartado núm.: 800, 7386 Diam Avenida', 5, 8, 2),
(67, 'Kyle', '1-591-695-1603', 'amet@euismodindolor.com', 'Haßloch', '223-8721 Et Avenida', 2, 8, 8),
(68, 'Tucker', '1-334-919-6538', 'fermentum.fermentum.arcu@pretiumaliquet.org', 'Valleyview', '413-3172 Erat. Carretera', 3, 5, 4),
(69, 'Hunter', '1-231-518-8018', 'ac.turpis.egestas@magna.org', 'Cornwall', 'Apdo.:498-1702 Mollis C.', 8, 3, 1),
(70, 'Hayden', '1-912-826-0286', 'tempor.arcu.Vestibulum@consectetueripsum.org', 'Nieuwegein', 'Apdo.:892-8580 Amet, Calle', 1, 6, 9),
(71, 'Patrick', '1-857-768-3448', 'eu@sociisnatoquepenatibus.ca', 'Saint-LŽger', 'Apartado núm.: 629, 9979 Purus C.', 7, 6, 6),
(72, 'Timothy', '1-452-259-6268', 'massa.Quisque@rutrum.net', 'Laakdal', 'Apdo.:685-1425 Sit Calle', 9, 1, 10),
(73, 'Elmo', '1-280-389-1901', 'sociis.natoque@erosnon.org', 'Bearberry', 'Apartado núm.: 375, 6879 Eu Avda.', 9, 3, 5),
(74, 'Charles', '1-891-169-6108', 'auctor.non.feugiat@et.edu', 'Villa Latina', 'Apdo.:309-8999 Urna Av.', 1, 9, 6),
(75, 'Cody', '1-897-858-2259', 'massa.Integer.vitae@inmagnaPhasellus.com', 'Colleretto Castelnuovo', 'Apartado núm.: 295, 8519 Metus Av.', 1, 2, 6),
(76, 'Sylvester', '1-569-801-2923', 'interdum.enim@dui.net', 'Uyo', 'Apdo.:709-8803 Felis. ', 2, 6, 3),
(77, 'Seth', '1-408-608-9810', 'Cras.vehicula.aliquet@Nullamsuscipitest.co.uk', 'Albacete', 'Apartado núm.: 637, 9977 Sed Carretera', 9, 3, 9),
(78, 'Declan', '1-662-612-2542', 'aliquam.iaculis@cursusa.co.uk', 'Norfolk County', 'Apartado núm.: 637, 2646 Nam Avda.', 2, 3, 7),
(79, 'Curran', '1-372-474-4412', 'Nunc.lectus@at.ca', 'Incourt', '230-7558 Lorem, Av.', 4, 6, 10),
(80, 'Curran', '1-136-360-0369', 'mattis@ipsumdolorsit.co.uk', 'Bhind', '926-1367 Luctus, Calle', 10, 8, 1),
(81, 'Hasad', '1-942-524-4091', 'metus.urna.convallis@dignissim.org', 'Bingen', 'Apdo.:610-9801 Ornare, Avenida', 7, 3, 8),
(82, 'Herrod', '1-347-130-4823', 'a.nunc.In@eleifendnondapibus.co.uk', 'San Polo d\'Enza', '4320 Odio. Av.', 7, 10, 5),
(83, 'Clark', '1-801-455-7184', 'Cum.sociis@imperdietdictum.org', 'Veere', 'Apartado núm.: 730, 3479 Primis C.', 1, 1, 6),
(84, 'Arsenio', '1-663-478-7458', 'Phasellus@arcuimperdiet.net', 'Iqaluit', '576-3373 Libero. Calle', 1, 2, 5),
(85, 'Zachary', '1-428-647-5674', 'elit.Curabitur.sed@metusurnaconvallis.ca', 'Bari', 'Apdo.:229-5892 Montes, Carretera', 7, 2, 10),
(86, 'Ezra', '1-737-220-3652', 'diam.lorem@nonbibendum.net', 'Narbonne', '345-3231 Rutrum C/', 2, 2, 1),
(87, 'Aquila', '1-698-932-2197', 'ut@purussapiengravida.net', 'Bexbach', 'Apartado núm.: 162, 7249 Metus. C/', 8, 4, 9),
(88, 'Harper', '1-325-702-7658', 'nisl@molestieintempus.ca', 'Acquasparta', '5014 Venenatis C.', 4, 9, 10),
(89, 'Christian', '1-944-736-5620', 'risus@massa.net', 'Eastbourne', '1728 Massa. Avenida', 3, 3, 4),
(90, 'Laith', '1-998-473-8811', 'sem@ornare.edu', 'Luckenwalde', '1769 Quis Ctra.', 2, 5, 6),
(91, 'Emery', '1-857-218-2203', 'ac.libero@scelerisquedui.com', 'Portsmouth', 'Apartado núm.: 960, 7773 Ut, Calle', 3, 10, 7),
(92, 'Griffin', '1-472-206-9232', 'pede@risus.org', 'Itzehoe', '8117 Metus C', 8, 2, 5),
(93, 'Bernard', '1-458-954-8123', 'nunc@sedleo.net', 'Tramonti di Sopra', '944-3726 Penatibus ', 1, 1, 9),
(94, 'Louis', '1-243-706-0928', 'consequat.dolor@Aliquamultricesiaculis.org', 'Grave', 'Apartado núm.: 741, 7945 Semper ', 4, 8, 8),
(95, 'Herman', '1-313-497-5828', 'convallis@necluctusfelis.co.uk', 'Ahmedabad', '4522 Semper C.', 1, 3, 5),
(96, 'Zeus', '1-196-306-3571', 'rutrum.magna.Cras@luctusutpellentesque.net', 'Nijlen', 'Apdo.:624-2215 Magnis Calle', 2, 9, 6),
(97, 'Coby', '1-936-312-0987', 'eu.metus.In@amet.com', 'Portsoy', 'Apdo.:102-255 Nulla ', 4, 5, 4),
(98, 'Kelly', '1-694-135-0738', 'vitae@sagittis.ca', 'Huara', 'Apdo.:445-4465 Magna. Carretera', 5, 4, 2),
(99, 'Judah', '1-486-291-9353', 'feugiat@Suspendissealiquet.net', 'Londrina', 'Apartado núm.: 159, 8277 Morbi Avenida', 6, 5, 5),
(100, 'Caleb', '1-311-272-9225', 'Ut.tincidunt@ametanteVivamus.com', 'Kempten', 'Apdo.:246-1136 Ultricies Avenida', 6, 3, 9),
(101, 'Phillip', '1-224-467-5571', 'tellus@pellentesqueafacilisis.com', 'Faizabad', 'Apdo.:773-3410 Imperdiet Carretera', 5, 4, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `retiro`
--

CREATE TABLE `retiro` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `kilos` int(11) NOT NULL,
  `fk_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `retiro`
--

INSERT INTO `retiro` (`id`, `fecha`, `kilos`, `fk_cliente`) VALUES
(1, '2018-10-19', 555, 1),
(1, '2018-07-17', 432, 1),
(3, '2018-08-25', 7, 1),
(4, '2018-02-07', 8, 7),
(5, '2018-07-01', 7, 5),
(6, '2018-12-01', 5, 4),
(7, '2018-06-03', 5, 6),
(8, '2019-08-01', 9, 6),
(9, '2018-09-17', 6, 10),
(10, '2019-03-29', 5, 6),
(11, '2018-02-25', 9, 1),
(12, '2017-10-30', 6, 4),
(13, '2019-01-10', 9, 1),
(14, '2018-09-01', 5, 2),
(15, '2018-02-05', 5, 10),
(16, '2019-03-05', 3, 1),
(17, '2019-10-05', 6, 9),
(18, '2017-11-02', 8, 6),
(19, '2018-06-26', 6, 3),
(20, '2019-06-25', 2, 6),
(21, '2018-12-08', 3, 8),
(22, '2018-07-17', 5, 5),
(23, '2017-12-09', 1, 1),
(24, '2018-01-14', 1, 4),
(25, '2019-09-06', 9, 5),
(26, '2018-11-17', 8, 3),
(27, '2019-01-21', 9, 7),
(28, '2019-07-02', 7, 4),
(29, '2018-12-10', 8, 5),
(30, '2019-07-28', 4, 8),
(31, '2019-04-02', 5, 10),
(32, '2018-03-04', 4, 2),
(33, '2019-09-05', 6, 6),
(34, '2018-05-26', 9, 7),
(35, '2018-07-24', 6, 8),
(36, '2018-08-29', 10, 9),
(37, '2019-03-12', 3, 8),
(38, '2018-11-06', 4, 9),
(39, '2019-06-01', 4, 3),
(40, '2017-12-03', 6, 5),
(41, '2019-03-30', 2, 3),
(42, '2018-01-13', 7, 10),
(43, '2018-04-29', 7, 7),
(44, '2017-11-09', 6, 9),
(45, '2019-09-23', 10, 9),
(46, '2019-04-16', 2, 2),
(47, '2018-03-27', 7, 4),
(48, '2019-01-15', 7, 5),
(49, '2019-01-29', 5, 7),
(50, '2019-04-06', 5, 8),
(51, '2018-04-27', 5, 7),
(52, '2019-07-01', 2, 10),
(53, '2017-12-09', 4, 3),
(54, '2019-09-01', 10, 2),
(55, '2019-02-14', 8, 4),
(56, '2019-10-16', 2, 8),
(57, '2018-03-22', 4, 3),
(58, '2018-11-05', 5, 10),
(59, '2018-05-16', 9, 3),
(60, '2018-01-24', 8, 10),
(61, '2018-06-21', 8, 10),
(62, '2018-03-28', 6, 2),
(63, '2019-02-11', 8, 10),
(64, '2018-03-02', 4, 3),
(65, '2019-06-07', 8, 7),
(66, '2018-07-30', 2, 10),
(67, '2019-06-19', 2, 9),
(68, '2019-09-01', 4, 4),
(69, '2018-03-17', 6, 8),
(70, '2018-09-11', 6, 3),
(71, '2019-05-04', 5, 9),
(72, '2018-05-06', 6, 7),
(73, '2018-07-28', 9, 3),
(74, '2019-08-15', 1, 4),
(75, '2017-12-18', 4, 1),
(76, '2018-12-14', 9, 4),
(77, '2018-08-02', 2, 2),
(78, '2018-08-12', 5, 8),
(79, '2019-09-07', 3, 6),
(80, '2017-11-26', 6, 9),
(81, '2019-10-09', 10, 6),
(82, '2018-05-12', 2, 3),
(83, '2018-01-15', 4, 3),
(84, '2018-03-05', 1, 2),
(85, '2018-09-11', 7, 9),
(86, '2017-12-14', 3, 6),
(87, '2018-08-19', 7, 5),
(88, '2019-04-28', 9, 8),
(89, '2018-09-30', 9, 3),
(90, '2018-04-23', 3, 6),
(91, '2018-01-26', 7, 3),
(92, '2018-07-14', 9, 9),
(93, '2018-08-21', 10, 4),
(94, '2018-03-18', 1, 9),
(95, '2018-01-27', 5, 3),
(96, '2019-01-15', 7, 5),
(97, '2018-09-20', 6, 9),
(98, '2017-12-18', 6, 3),
(99, '2018-10-07', 3, 2),
(100, '2019-10-13', 3, 10),
(101, '2019-04-30', 2, 4),
(102, '2019-05-23', 8, 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
