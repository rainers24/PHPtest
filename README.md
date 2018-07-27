# PHPtest

Es izmantoju MAMP serveri, lai varētu pirmkārt "pacelt" pašu Php projektu un arī tur izmantoju jau esošo Mysql datubāzi.

Vairāki faili pēc būtības ir vienādi tādēļ neveicu komentēšanu, kur tas atkārtojas.


1)Atveram database.php failu un nomainas attiecīgos mainīgos uz sev nepieciešamajaiem.

2) Pieslēdzamies datubāzei un attiecīgajā SQL query laukā iekopējam Tabulu izveides skriptus kā arī tabulu ievades skriptus, kas ir norādīti šeit mazliet zemāk.



CREATE TABLE `answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vards` text NOT NULL,
  `score` tinyint(4) NOT NULL DEFAULT '0',
  `total` tinyint(4) NOT NULL DEFAULT '0',
  `test` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

CREATE TABLE `choices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(4) NOT NULL DEFAULT '0',
  `choice` text CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

INSERT INTO `choices` (`id`, `question_number`, `is_correct`, `choice`)
VALUES
	(1, 1, 1, 'Apaļa'),
	(2, 1, 0, 'Šķidra'),
	(3, 1, 0, 'Ovāla'),
	(4, 1, 0, 'Sasalusi'),
	(5, 2, 0, 'Zivs'),
	(6, 2, 0, 'Rāpulis'),
	(7, 2, 1, 'Dzivnieks'),
	(8, 3, 0, 'Mozambikā'),
	(9, 3, 0, 'Āfrikā'),
	(10, 3, 1, 'Eiropā'),
	(11, 3, 0, 'Amerikā'),
	(12, 4, 1, 'Nē'),
	(13, 4, 0, 'Jā'),
	(14, 4, 1, 'Pēc Rudens !'),
	(15, 4, 1, 'Pirms pavasara ir ziema !'),
	(16, 4, 0, 'Kas ir ziema ? ? ? ? ');



CREATE TABLE `choices1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(4) NOT NULL DEFAULT '0',
  `choice` text CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;


INSERT INTO `choices1` (`id`, `question_number`, `is_correct`, `choice`)
VALUES
	(1, 1, 1, 'Ferrari'),
	(2, 1, 0, 'LADA'),
	(3, 1, 0, 'Great Wall'),
	(4, 1, 0, 'Toqota'),
	(5, 2, 0, 'ritens'),
	(6, 2, 1, 'Pagani Zonda F'),
	(7, 2, 0, 'Zirgs'),
	(8, 3, 0, 'Dodge Charger'),
	(9, 3, 0, 'Maserati Quatroporte'),
	(10, 3, 0, 'Nissan NV200'),
	(11, 3, 1, 'Tesla'),
	(12, 4, 1, 'AUDI'),
	(13, 4, 0, 'BMW'),
	(14, 4, 0, 'MERSIS');



CREATE TABLE `choices2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(4) NOT NULL DEFAULT '0',
  `choice` text COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

INSERT INTO `choices2` (`id`, `question_number`, `is_correct`, `choice`)
VALUES
	(12, 1, 1, 'USA'),
	(13, 1, 0, 'LV'),
	(14, 1, 0, 'Pakistan'),
	(15, 2, 0, 'Vista'),
	(16, 2, 1, 'Ola'),
	(17, 3, 0, 'LV'),
	(18, 3, 1, 'FR'),
	(19, 3, 0, 'RU'),
	(20, 3, 0, 'ESP'),
	(21, 3, 0, 'LT'),
	(22, 4, 0, 'Donalds Trumps'),
	(23, 4, 1, 'Vladimirs Putins'),
	(24, 5, 1, 'Ozols'),
	(25, 5, 0, 'Apse'),
	(26, 5, 0, 'Himalaju Priede'),
	(27, 6, 0, 'Pienenes'),
	(28, 6, 1, 'Zemenes'),
	(29, 6, 0, 'Avenes');


CREATE TABLE `questions` (
  `question_number` int(11) NOT NULL,
  `question` text CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`question_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `questions` (`question_number`, `question`)
VALUES
	(1, 'Bumba ir ? '),
	(2, 'Suns ir ? '),
	(3, 'Latvija atrodas ? '),
	(4, 'Vai ziema ir pēc vasaras ? ');


CREATE TABLE `questions1` (
  `question_number` int(11) NOT NULL,
  `question` text COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`question_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

INSERT INTO `questions1` (`question_number`, `question`)
VALUES
	(1, 'Kurš Auto ir ātrāks ?'),
	(2, 'Kas patērē vairāk degvielu ?'),
	(3, 'Kurš no šiem ir elektro auto ?'),
	(4, 'Viszagtākā automašīnas marka Latvijā ?');


CREATE TABLE `questions2` (
  `question_number` int(11) NOT NULL,
  `question` text COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`question_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;


INSERT INTO `questions2` (`question_number`, `question`)
VALUES
	(1, 'Lielākā Valsts pasaulē ? '),
	(2, 'Pirmā bija vista vai ola ?'),
	(3, 'Futbola pasaules kausa ieguvējs 2018 ?'),
	(4, 'Amerikas prezidents ?'),
	(5, 'Koks , kurš bija norādīts uz 5 latu banknotes ?'),
	(6, 'Grupas Apvadceļš populārākā dziesma ?');

