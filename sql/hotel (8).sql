CREATE DATABASE IF NOT EXISTS `hotel`;
USE `hotel`;

DROP TABLE IF EXISTS `64_clients`;
CREATE TABLE `64_clients` (
  `cliente_id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `tlf` int(11) NOT NULL,
  `dni` varchar(9) NOT NULL,
  `email` varchar(255) NOT NULL,
  `direccion` varchar(500) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `tipo_usuario` int(11) NOT NULL DEFAULT 2,
  `foto` varchar(500) NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
);

INSERT INTO `64_clients` (`cliente_id`, `nombre`, `apellido`, `tlf`, `dni`, `email`, `direccion`, `pwd`, `tipo_usuario`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Eduard', 'Gallardo Vidal', 647382912, '41682113X', 'dawbevidalgallardo@iesjoanramis.com', 'C/ Sa Sinia, 290', '12345', 1, '41682113X.jpeg', NULL, NULL),
(2, 'Edu', 'Gallardo Vidal', 654321978, '43123654D', 'dawbevidalgallardo@iesjoanramis.org', 'C/ Sa Sinia, 18', '1234', 2, '2.jpg', NULL, NULL),
(3, 'Jarrett', 'Hamill', 686154069, '54253777c', 'evan12@gmail.com', '751 Robel Loaf\nNew Charity, NH 19289', 'qV]UND', 2, '', '2022-03-10 18:32:34', '2022-03-10 18:32:34'),
(4, 'Abagail', 'Nienow', 620891333, '22157257h', 'arunolfsdottir@yahoo.com', '354 Lehner Turnpike\nWest Margaretttown, VA 71730-3571', 'Q9HZ7*Uz9^iSxP', 2, '', '2022-03-10 18:32:34', '2022-03-10 18:32:34'),
(5, 'Lewis', 'Deckow', 641773222, '05256775r', 'marcelle.schimmel@huels.com', '3311 Mosciski Meadows Suite 499\nLake Berthastad, AK 12815', '.A1=OA@y*zY#-UL7', 2, '', '2022-03-10 18:32:34', '2022-03-10 18:32:34'),
(6, 'Dariana', 'Jerde', 681309646, '05820329h', 'btillman@rolfson.com', '4015 Hand Divide Apt. 003\nLake Reanna, LA 84424', '>[;62yOv@', 2, '', '2022-03-10 18:32:34', '2022-03-10 18:32:34'),
(7, 'Stuart', 'Lang', 668631868, '46072535r', 'kertzmann.silas@yahoo.com', '24235 Daniel Lakes Suite 136\nGrimeschester, TX 14763', 'jiiVo.d#$r;\"', 2, '', '2022-03-10 18:32:34', '2022-03-10 18:32:34'),
(8, 'Jalen', 'Langosh', 628876755, '03091715t', 'gpollich@gorczany.org', '514 Johnson Summit\nEinomouth, ND 26796-5919', 'j}D>LVfAYn~Lm]r[XG', 2, '', '2022-03-10 18:32:34', '2022-03-10 18:32:34'),
(9, 'Ludie', 'Pfeffer', 670120333, '71598259c', 'jkirlin@cummerata.com', '789 Margarete Causeway\nNew Geovannyshire, MT 03258', 'Cf:;>iN_<2m,)7', 2, '', '2022-03-10 18:32:34', '2022-03-10 18:32:34'),
(10, 'Aditya', 'Effertz', 676587808, '96717981z', 'hahn.fernando@hotmail.com', '6010 Hilpert Villages Apt. 702\nEast Jude, NC 15459', 'wr+`l-YzCH!&', 2, '', '2022-03-10 18:32:34', '2022-03-10 18:32:34'),
(11, 'Giovani', 'Aufderhar', 692515388, '45303974f', 'windler.fay@kirlin.net', '734 Maybell Trafficway Suite 237\nHeathcotemouth, KS 84111', '4P\\M`9r^o1lRJZ', 2, '', '2022-03-10 18:32:34', '2022-03-10 18:32:34'),
(12, 'Marshall', 'Kuphal', 645770740, '32441348s', 'tbeatty@yahoo.com', '770 Schultz Cove\nLangshire, DE 97250-4744', 'FuhrKED44=asiP`Uk', 2, '', '2022-03-10 18:32:34', '2022-03-10 18:32:34'),
(13, 'Orlo', 'Wuckert', 628007769, '78177169h', 'leffler.lonzo@rohan.com', '6606 Holden Harbors\nWest Alison, DC 11311', '};W5Qj)4v8(6(X&b)wFC', 2, '', '2022-03-10 18:32:34', '2022-03-10 18:32:34'),
(14, 'Otis', 'Hansen', 609950415, '16545611l', 'piper.ortiz@yahoo.com', '9549 Gerhold Extension Suite 390\nNew Hudsonside, IA 98759-8181', '.NdSo)E|5AE.-q', 2, '', '2022-03-10 18:32:34', '2022-03-10 18:32:34'),
(15, 'Ransom', 'Davis', 608938448, '40462068w', 'bhauck@gmail.com', '9820 Keyshawn Plaza Apt. 882\nLake Deshawn, NC 38838', 'O`{%MC', 2, '', '2022-03-10 18:32:34', '2022-03-10 18:32:34'),
(16, 'Tyrel', 'Osinski', 638736344, '51064557n', 'imaggio@krajcik.com', '156 Kyler Haven Apt. 536\nFeestborough, WV 25898', '$q8Z:)D$-Ea#1]d{a', 2, '', '2022-03-10 18:32:34', '2022-03-10 18:32:34'),
(17, 'Nat', 'Cruickshank', 612440107, '23893804q', 'mrath@hotmail.com', '286 Eulah Square Apt. 478\nKozeymouth, SD 06337', 'LafK|-V<d&BxgQ}N4c', 2, '', '2022-03-10 18:32:34', '2022-03-10 18:32:34'),
(18, 'Valentina', 'Roberts', 630829775, '05849798f', 'ryan.mayra@dach.biz', '926 Wunsch Inlet Suite 512\nDonnellyton, ND 21248', '[SunY&}Kx6\\&5a`', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(19, 'Devan', 'Hettinger', 684013561, '08481729t', 'dion.sipes@fay.com', '5694 Turner Parkways Apt. 326\nLake Gonzalobury, SD 37495', '>676duMe)sRYb.x2a|v-', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(20, 'Mohamed', 'Cormier', 648690677, '64823901x', 'rdickens@hotmail.com', '578 Kaylie Crest\nMertzborough, UT 08770', 'A|16t<4u~VA', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(21, 'Elta', 'Graham', 664185884, '51021657d', 'marjolaine05@hotmail.com', '19956 Hodkiewicz Rapid Suite 168\nRueckerborough, VT 05275-0784', 'vS`).l?', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(22, 'Deontae', 'Stracke', 617301374, '50883724t', 'mwunsch@quitzon.net', '89377 Hettinger Avenue Suite 814\nSouth Elianeport, CA 88929-7541', 'N8u*=@vv9c(VZ=d', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(23, 'Sammy', 'Trantow', 633489291, '65621725h', 'mdoyle@hotmail.com', '402 Rahul Stravenue Suite 996\nNew Markusshire, MD 61307', 'mfmgH./4E', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(24, 'Dennis', 'Cormier', 690548634, '42783808l', 'rosalyn.moen@yahoo.com', '8213 Gennaro Run\nMillerport, ND 83323', '04`1(2;', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(25, 'Sibyl', 'Schamberger', 657732886, '48732339l', 'olabadie@gmail.com', '523 Metz Meadow\nNew Tristianview, CO 90914', 'i6GM8~~[X5,qMSNl', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(26, 'Modesta', 'Wehner', 604173751, '05636332v', 'taurean93@hotmail.com', '8205 Karen Lock Apt. 804\nOnieside, IL 98493-6257', 'e>%R?d', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(27, 'Bryana', 'OHara', 616995326, '34480173l', 'alda36@gmail.com', '3685 Larry Hollow\nLarrybury, NE 92603-0316', 'uYmW2Fo{,\\C>>,[', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(28, 'Emilia', 'Pfannerstill', 687668359, '42319427x', 'bradtke.roy@glover.com', '9892 Jayda Ports\nBrandonberg, MS 15082-6631', ')\\[|UtMA', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(29, 'Brandi', 'Kuphal', 629367851, '11214917f', 'kiara59@kiehn.biz', '66479 Rylan Streets Suite 335\nOKontown, KY 47823', '$3bUF1+l{Dl>XY=,../', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(30, 'Marshall', 'Fisher', 623176277, '46618733j', 'name.mraz@nicolas.org', '46723 Jacobi Villages\nZettachester, LA 60529', 'v6T/BV@@KB2dZ>M?', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(31, 'Shyanne', 'Orn', 683380203, '65971099w', 'altenwerth.vickie@hirthe.org', '99095 Lakin Hollow Apt. 382\nSchadenfurt, LA 67570', '_*0Z87<@:>D', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(32, 'Felipa', 'Keebler', 678638961, '36718429q', 'bradtke.cara@yahoo.com', '2363 Carmel Dale Apt. 223\nEast Jamir, CT 06485-7653', '[~Z8ihk', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(33, 'Brayan', 'Bosco', 633786589, '87566437k', 'robbie72@hotmail.com', '7763 Streich Mews\nNienowborough, NV 35254-1582', '2?2CW-N3ZEtJFaZJ', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(34, 'Coty', 'McKenzie', 671607929, '79705704j', 'yromaguera@hotmail.com', '10142 Prosacco Walks\nEverettehaven, LA 64623-8952', '\\W--g6Kh}tIqU0UK', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(35, 'Jamil', 'Muller', 695243987, '62629101f', 'madonna.blick@tillman.com', '3103 Carter Port\nKoeppport, NH 89635', 'QkYGN2\"a7,aA', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(36, 'Emanuel', 'Grant', 662432618, '70078446l', 'kristoffer.stark@yahoo.com', '1487 Hermiston Greens Apt. 432\nEast Ilene, MD 26325', 'y@?dH#?q1]S', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(37, 'Brian', 'Barton', 647302663, '87788171v', 'ikiehn@yahoo.com', '18983 Heather Landing\nAnkundingmouth, RI 12203-4779', 'Q/p9]5@;OB_,', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(38, 'Willie', 'Jakubowski', 665756619, '10079386p', 'rosa.schaefer@hotmail.com', '454 Wehner Dam Suite 595\nNorth Alec, KS 59784', 'Y!w/bpA)Zvv~<Ib/=Q[S', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(39, 'Nat', 'Mante', 642167819, '38580219p', 'ksporer@gmail.com', '3833 Berge Place Apt. 486\nNorth Jevon, SD 66258', 'g5R4>)Ktpt7V\"9Xop', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(40, 'Heidi', 'Carter', 676550116, '28925759k', 'stephanie57@gmail.com', '2445 Hessel Canyon\nPort Danyka, NJ 83498', '8n,ANr', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(41, 'Alec', 'Carter', 618958866, '28446210z', 'spowlowski@yahoo.com', '7522 Else Inlet\nPort Pearl, MD 30892', '05W#e8,I0l}}L}DBB+:', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(42, 'Everette', 'Jacobi', 604675620, '50910680v', 'meda.crooks@hotmail.com', '2247 Bashirian Overpass\nNorth Aisha, UT 73797-4511', 'N(wg{5-V', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(43, 'Chad', 'Zulauf', 617754012, '75004807e', 'katelin.hayes@okeefe.com', '32671 Swift Spurs Apt. 971\nEast Leonora, WV 81024-4366', '=dQC?', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(44, 'Lourdes', 'Gerlach', 601395135, '92933195f', 'cristian.huel@gulgowski.info', '9094 Blaze Court Suite 833\nEast Otto, TN 00423-7182', '=U5?ag][9u?g*aN[@<3', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(45, 'Jacinthe', 'Ward', 678017689, '13418828y', 'ejacobson@jacobi.com', '3270 Joanie Junction Apt. 536\nAllyton, WA 80788-9576', 'C&ZHgh,d@Okn~{\"', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(46, 'Coty', 'Dach', 692879867, '65061872m', 'oconner.rodger@kub.org', '966 Bernier Isle Apt. 991\nNorth Arieltown, RI 49084', 'X&m(#CnT?`pV', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(47, 'Elenora', 'Dooley', 672532856, '72496510z', 'haltenwerth@nikolaus.com', '90292 Jo Gateway\nAdamsfort, MO 04728', 'e#vl3wXcp*z', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(48, 'Blake', 'Nicolas', 661808694, '23227595s', 'sawayn.barrett@hotmail.com', '724 Labadie Lodge Apt. 477\nNorth Marvin, OH 22677-9262', ',lQL#', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(49, 'Monserrat', 'Davis', 606353196, '16838390j', 'hcollier@hotmail.com', '33234 Lessie Port\nGoyettestad, VT 47735-3381', '|-^!|70*9%{q1x@tit', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(50, 'Garett', 'Reichel', 620623957, '70759935c', 'kelton14@labadie.com', '8410 Ahmad Fords\nOceanemouth, SC 10734-3302', 'Y+8:mWF', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(51, 'Karlee', 'Funk', 604485999, '17731925t', 'aracely24@gmail.com', '381 Raynor Road\nLake Prudence, WV 89284', 'cl{D2B)cEF:a:ul{', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(52, 'Ova', 'Mertz', 600944371, '21409172y', 'abernathy.polly@pfeffer.com', '13241 Kuvalis Mission\nNorth Jaylin, MO 13982-2415', 'NE|ds', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(53, 'Edyth', 'Orn', 670052450, '98693011c', 'corrine76@yahoo.com', '2587 Mayert Brook Apt. 183\nWeimannport, AK 60155-9968', '=U$f;drPeAnzTY\"Rs', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(54, 'Deon', 'Deckow', 619796786, '85641613o', 'lane16@stanton.biz', '626 Yost Camp Suite 948\nNorth Felipeview, HI 16723-9878', 'YRo#c(<(=ZDhtbXP', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(55, 'Estelle', 'Hessel', 692311867, '48820193g', 'crooks.bonita@marquardt.com', '95414 West Ford Apt. 237\nWest Brayanberg, ND 63386-4133', 'tlBCZzE1z6Op,', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(56, 'Isadore', 'Kassulke', 692561359, '02113383m', 'qdaugherty@hotmail.com', '1293 Abraham Knoll Apt. 828\nLaurieton, CA 39697-5508', '%\"8p!,7M$^I+|w', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(57, 'Katlyn', 'Fisher', 666877304, '84280925x', 'mable32@yahoo.com', '3550 Rice Ports Apt. 362\nWest Pamelabury, NY 13741-4298', 'g^$VYOaD8c`cQt*;', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(58, 'Lionel', 'Kozey', 606522300, '18606098n', 'ywilderman@tromp.com', '3692 Wilma Fords Apt. 287\nEast Anabelleside, NH 39088-8276', '\"-J{?#a~#@dz:E+w', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(59, 'Adolfo', 'McClure', 604295088, '13644747e', 'elliot36@ondricka.org', '69187 Elaina Mills\nRoweborough, HI 49391', '\\sWOuub$6HYPnl', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(60, 'Alejandrin', 'Cole', 685817132, '71943100q', 'gabriel.mcdermott@gmail.com', '3993 Glover Plains\nGayborough, NV 52881', 'qo.vC]R', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(61, 'Maverick', 'Pouros', 671754947, '40271520y', 'alessandro90@yahoo.com', '9733 Schamberger Mews Apt. 516\nEast Francis, SD 30714-8637', 'A#EEsRTpcIC4', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(62, 'Alfonso', 'Frami', 688445964, '78793160p', 'uswift@gmail.com', '42807 Predovic Mountain Apt. 627\nShannonchester, MO 26050', '\"KIJJxaqeI', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(63, 'Izabella', 'Emard', 610260851, '67466891j', 'hamill.dina@connelly.com', '66058 Beryl Meadows\nMaximillianview, ID 10462', ']VSFS;_:zRl4Xy9Wd', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(64, 'Cecilia', 'Ullrich', 657017768, '43004675c', 'mateo25@corwin.com', '64475 Lowe Rest\nNorth Drew, ME 34267', '74fvB0u<@@K:#XLFl=q', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(65, 'Shaniya', 'Gutkowski', 667808643, '84589518p', 'mayra77@hickle.com', '597 Bogisich Oval Apt. 567\nEast Judahview, AR 28314', 'TEuPT|*%z', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(66, 'Charley', 'Yost', 644071191, '13847022w', 'zakary62@dach.net', '7021 Jordon Cape\nNew Leathaview, MD 46846', '`Yd(d@Wz=$n', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(67, 'Nora', 'Goldner', 691583332, '88086766f', 'destiny37@larkin.net', '832 Maggio Roads\nNorth Kasandramouth, GA 80826', 'NH=n5pRW\\GdrU]fFQgep', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(68, 'Baylee', 'Beahan', 601802717, '59924259n', 'vanessa.willms@hotmail.com', '8606 Buckridge Manor Suite 570\nWest Maybelleport, GA 05127-4974', 'lOYe)!\"L,8$py`CUGaX', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(69, 'Bria', 'Runolfsson', 617794282, '26871079g', 'beverly85@mann.org', '4779 Renner Cape Apt. 688\nHarberland, AL 13297-7030', 'y>~}*g{7!zh!_KEe^{', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(70, 'Adriana', 'Prohaska', 662036468, '34538723t', 'wgislason@wisozk.net', '70296 Heaney Centers Suite 267\nLake Arnold, NY 54810', 'oOo+q8szZwCv&-R', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(71, 'Etha', 'Barton', 619379698, '78885671l', 'vilma.rogahn@yahoo.com', '859 Hessel Prairie\nSouth Juniusmouth, CO 98574-0467', 'rk4lAmz!$sOqxFu`e_', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(72, 'Alejandra', 'Wehner', 665949440, '98629532i', 'hboyer@yahoo.com', '1157 Fay Route\nNew Aurelie, VA 76438', 'J<.npifKc$I\"kOx-{', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(73, 'Jacynthe', 'Price', 601972159, '60469468d', 'adam.kilback@sauer.com', '97984 Reid Course Apt. 215\nLake Sabryna, FL 72643', 'J&AqpfFAJoEQ{', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(74, 'Tabitha', 'Moore', 657031242, '87967124e', 'francesca.langworth@ondricka.com', '3134 Emmanuelle Meadow\nCummingsfort, FL 94497-7515', 'c}nF0(B7', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(75, 'Jade', 'Hodkiewicz', 685833429, '77193473s', 'lgoodwin@gmail.com', '4657 Kyra Locks\nGulgowskiland, OR 95970', 'IqIhx%#z=Fr=G8', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(76, 'Meda', 'Braun', 632307029, '94663185w', 'jaleel.auer@koelpin.com', '655 Koelpin Corner Suite 115\nGottliebhaven, AL 80087-6269', 'baboalb9M=)c:i', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(77, 'Barton', 'Von', 630298452, '88291873p', 'elias.wilkinson@hotmail.com', '3917 Schmitt Ville Suite 158\nNorth Jerelton, VA 65303-9029', 'jhz>]WMnv[', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(78, 'Tabitha', 'Dietrich', 690069367, '46601574m', 'ernesto.fritsch@yahoo.com', '662 Boyer Hill\nMosciskiland, MI 94403-8694', 'H%+!j!vw]no\\u89ke', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(79, 'Rhoda', 'Ferry', 656531429, '29473042w', 'cflatley@gmail.com', '70215 Erick Valleys Suite 463\nWest Jasen, VA 82274-3479', 'mu/s6)#c6n', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(80, 'Oma', 'Mosciski', 685417211, '84782726m', 'kaci89@murazik.com', '7300 Price Rapid Apt. 757\nWest Lynnview, MD 08678', 't/T<88+jr,;-8zH}', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(81, 'Dion', 'Ledner', 688448876, '06099694n', 'linnea.aufderhar@turner.net', '9089 Von Cliff\nPort Era, HI 76231', '`(WHRs<uB?Nqc}N', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(82, 'Hulda', 'Abbott', 622038026, '50016825y', 'norbert09@hotmail.com', '87327 Chet Turnpike Apt. 068\nBrianmouth, WY 63092', 'R#*xpb!s8*Py', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(83, 'Aniyah', 'Koepp', 613332175, '75067107d', 'jenkins.laverna@berge.com', '793 Korey Fall\nSouth Marina, UT 94636', 'RK\\-=y/Ql.OhNR', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(84, 'Alisa', 'OKon', 600688327, '61846329h', 'enid32@yahoo.com', '3888 OHara Prairie\nEast Angelita, NC 91107-1726', 's\\#BLy]R~41^?cn6|Ao', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(85, 'Lupe', 'Keebler', 608494354, '94193292r', 'carole.gulgowski@gmail.com', '341 Nellie Estate\nLake Horacio, OH 18688', 'W;nv!F|z$zLG)bVj7Ss', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(86, 'Jorge', 'Klein', 607530314, '15452982j', 'robbie.lesch@yahoo.com', '65070 Armando Lake\nWest Adalberto, CO 41717', 'uN%)9dAb5I979\\YsE-', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(87, 'Magnus', 'Cremin', 665882639, '62855381a', 'smertz@gmail.com', '1015 Seamus Rapids Apt. 005\nHyatthaven, PA 74230', 'zz(#A.nnCweeaD', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(88, 'Gregg', 'Williamson', 667741119, '23042908u', 'nina.marvin@reichert.biz', '26448 Deckow Prairie Apt. 508\nNew Kennafort, NJ 44183', '!tqC@4t3),', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(89, 'Greta', 'Mann', 626265888, '73856732o', 'kessler.bell@stokes.info', '3156 Marvin Orchard\nOletaland, NY 65916', '>q1KY}=-t(jRSfth', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(90, 'Josh', 'Cremin', 676625361, '16347892v', 'mollie.kertzmann@gusikowski.org', '2916 Christiansen Junctions\nHowellberg, WY 36331', '1P^V&;', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(91, 'Sim', 'Koch', 638884934, '63654907m', 'nia13@turcotte.org', '827 Kreiger Center Suite 733\nMabelland, ME 08693', '%}|z,uH\\7Y;YD)h', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(92, 'Amalia', 'Bayer', 668515079, '23209843e', 'flo21@hotmail.com', '2658 Kris Ramp Suite 970\nSouth Margretstad, RI 53535-2458', '\"l%n%C', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(93, 'Michele', 'Sanford', 646455708, '14398311t', 'taurean52@gmail.com', '269 Flatley Knolls\nRusselmouth, OR 34295', ';@`3>aF', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(94, 'Kris', 'Bechtelar', 618367089, '62206630v', 'dax.oconner@gmail.com', '92722 Runolfsson Cliffs\nLake Keith, DC 15790', '[?Iwv2OVugpC\"', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(95, 'Sabryna', 'McDermott', 657737175, '32512120k', 'pterry@hotmail.com', '3079 Ford Lane Suite 900\nNorth Miguelfort, MA 75611', '.-PJu*B;QL^C', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(96, 'Doris', 'Krajcik', 643034800, '65854593a', 'gerhold.bennett@yahoo.com', '5149 Miller Green Suite 095\nTreutelside, LA 78437', 'j9alB-', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(97, 'Alta', 'Schmeler', 658978562, '23328412g', 'lindgren.garnett@hotmail.com', '16056 Lempi Oval\nNorth Dorothy, NM 19093-3678', 'Y6WL4T3', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(98, 'Van', 'Hayes', 657520306, '95303007b', 'tristian.ward@hotmail.com', '73133 Muller Villages Apt. 094\nVonborough, AR 22212', 'E7`)BgD)v9%(v39[LG1', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(99, 'Elza', 'Russel', 693139193, '91263481l', 'enoch.nolan@torp.com', '166 Koepp Station Suite 265\nNorth Lenoreburgh, UT 21415-5107', '6A:%qM|Qd', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(100, 'Flossie', 'Stoltenberg', 611906229, '42309732r', 'camilla.dickens@yahoo.com', '9731 Dorcas Orchard Suite 298\nEast Karson, OK 37971-1175', 'g\\-Ne1\"kk', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(101, 'Gianni', 'Bartoletti', 687590424, '31763981y', 'bpouros@yahoo.com', '563 Olson Field\nDarefort, PA 97913-2318', 'a~g9q@!XeeDx\\8e^aP', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(102, 'Zita', 'Bartoletti', 680585908, '33850351j', 'cgrant@hilpert.com', '723 Chad Route\nPort Constantin, IA 91263-9728', '@`\\rj#^Vi!}+K', 2, '', '2022-03-10 18:32:35', '2022-03-10 18:32:35'),
(103, 'Ernest', 'Segui Gonzalez', 654987312, '65421987Q', 'dawbegonzalezsegui@iesjoanramis.org', 'C/ Mahon, 12', '123456', 2, '65421987Q.png', '2022-03-29 15:11:14', '2022-03-29 15:11:14'),
(104, 'Davit', 'Perez Florit', 654987144, '41485788L', 'dawbdfloritperez@iesjoanramis.org', 'C/ Mahon, 12', '12345', 2, '41485788L.gif', '2022-04-06 17:00:36', '2022-04-06 17:00:36');

DROP TABLE IF EXISTS `64_estat_reserva`;
CREATE TABLE `64_estat_reserva` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
);

INSERT INTO `64_estat_reserva` (`id`, `nom`) VALUES
(1, 'Reservada'),
(2, 'Check-in'),
(3, 'Check-out'),
(4, 'No-Show'),
(5, 'Cancelada');

DROP TABLE IF EXISTS `64_habitacio`;
CREATE TABLE `64_habitacio` (
  `id` int(11) NOT NULL,
  `tipo_habitacion` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `numerovar` varchar(255) DEFAULT NULL,
  `cerrada` tinyint(1) NOT NULL,
  `descripcion` varchar(400) NOT NULL,
  `observacions` varchar(400) DEFAULT NULL,
  `fotos` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
);

INSERT INTO `64_habitacio` (`id`, `tipo_habitacion`, `numero`, `numerovar`, `cerrada`, `descripcion`, `observacions`, `fotos`) VALUES
(23, 1, 12, '12-M', 1, 'Vistas al mar', 'asasasasas', '61zBDr1hUML._AC_SY355_.jpg,450_1000.jpg,'),
(24, 2, 12, '12-M', 0, 'huhuhuh', 'tftftftftft', '61zBDr1hUML._AC_SY355_.jpg,450_1000.jpg,'),
(25, 0, 12, '12-M', 1, 'lpllp', 'kokokokok', '61zBDr1hUML._AC_SY355_.jpg,450_1000.jpg,');

DROP TABLE IF EXISTS `64_pensio`;
CREATE TABLE `64_pensio` (
  `id` int(11) NOT NULL,
  `codi` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL
);

INSERT INTO `64_pensio` (`id`, `codi`, `nom`) VALUES
(1, 'SA', 'Solo Alojamiento'),
(2, 'AD', 'Alojamiento y Desayuno'),
(3, 'MP', 'Media Pension'),
(4, 'PC', 'Pension Completa'),
(5, 'TI', 'Todo Incluido');

DROP TABLE IF EXISTS `64_reserves`;
CREATE TABLE `64_reserves` (
  `reserva_id` int(11) NOT NULL,
  `cliente_id` int(11) DEFAULT NULL,
  `entrada` date NOT NULL,
  `salida` date NOT NULL,
  `habitacion_id` int(11) DEFAULT NULL,
  `estado_id` int(11) DEFAULT NULL,
  `noches` int(11) DEFAULT NULL,
  `precio` float(6,2) DEFAULT NULL,
  `pension_id` int(11) DEFAULT NULL
);

INSERT INTO `64_reserves` (`reserva_id`, `cliente_id`, `entrada`, `salida`, `habitacion_id`, `estado_id`, `noches`, `precio`, `pension_id`) VALUES
(1, 1, '2022-02-01', '2022-02-03', 23, 1, 2, 100.00, 4),
(2, 1, '2022-02-01', '2022-02-10', 23, 1, 9, 450.00, 4),
(3, 1, '2022-02-01', '2022-02-05', 23, 1, 4, 800.00, 3);

DROP VIEW IF EXISTS `64_reserves_view`;
CREATE TABLE `64_reserves_view` (
`ID` int(11)
,`Entrada` date
,`Salida` date
,`Nombre Completo Usuario` varchar(511)
,`Telefono` int(11)
,`DNI` varchar(9)
,`Email` varchar(255)
,`Tipus Habitacio` varchar(255)
,`ID Tipus Habitacio` int(11)
,`Número Habitación` int(11)
,`Estado Reserva` varchar(255)
,`Precio reserva` float(6,2)
,`Tipo Pensión` varchar(255)
);

DROP TABLE IF EXISTS `64_tipushabitacio`;
CREATE TABLE `64_tipushabitacio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `precio` float(6,2) NOT NULL,
  `descripcion` varchar(400) NOT NULL,
  `capacidad` int(11) NOT NULL,
  `capacidad_max` int(11) DEFAULT NULL,
  `codigo` varchar(255) NOT NULL,
  `foto` varchar(400) NOT NULL
);

INSERT INTO `64_tipushabitacio` (`id`, `nombre`, `precio`, `descripcion`, `capacidad`, `capacidad_max`, `codigo`, `foto`) VALUES
(0, 'Juegos', 469.00, 'Habitación para jugar', 8, 10, 'XXX420', 'https://ibizamotel.com.ec/wp-content/uploads/2019/04/Foto-Junior.jpg'),
(1, 'Triple', 200.00, 'Espejo en el techo', 3, 5, 'XYZ789', 'https://media-magazine.trivago.com/wp-content/uploads/2018/11/21130220/hoteles-sexis-pelirocco-cama-circular-con-espejo-en-el-techo.jpeg'),
(2, 'Doble', 50.00, 'Vistas al mar', 2, 4, 'ABC123', 'https://www.hotelcalipolis.com/content/imgsxml/galerias/panel_galeriahabitaciones/1/m-mar1414.jpg'),
(3, 'Prueba', 255.00, 'Holaaa', 7, 9, 'HGF423', 'https://ichef.bbci.co.uk/news/640/cpsprodpb/35F4/production/_116221831_mediaitem116221830.jpg'),
(4, 'Prueba', 169.00, 'Tipo de Prueba', 9, 11, '089PRV', 'https://blog.igus.de/wp-content/uploads/2019/07/m.jpg');

DROP TABLE IF EXISTS `64_tipus_usuari`;
CREATE TABLE `64_tipus_usuari` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
);

INSERT INTO `64_tipus_usuari` (`id`, `nom`) VALUES
(1, 'Administrador'),
(2, 'Cliente');



--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `64_clients`
--
ALTER TABLE `64_clients`
  MODIFY `cliente_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT de la tabla `64_habitacio`
--
ALTER TABLE `64_habitacio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `64_pensio`
--
ALTER TABLE `64_pensio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `64_reserves`
--
ALTER TABLE `64_reserves`
  MODIFY `reserva_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

