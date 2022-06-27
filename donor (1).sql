-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 27, 2022 at 06:08 AM
-- Server version: 5.7.36
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donor`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

DROP TABLE IF EXISTS `complaints`;
CREATE TABLE IF NOT EXISTS `complaints` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `detail` text NOT NULL,
  `date` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `project_id` (`project_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `project_id`, `name`, `location`, `detail`, `date`, `status`, `created_at`, `updated_at`) VALUES
(4, 1, NULL, 'Mirpur', 'Aut qui architecto f', '2017-06-28', 'processing', '2022-06-04 07:37:48', '2022-06-13 09:24:17'),
(5, 1, NULL, 'Earum laboris volupt', 'Assumenda officiis p', '1999-01-20', 'resolved', '2022-06-13 09:29:14', '2022-06-13 09:29:14');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

DROP TABLE IF EXISTS `maintenance`;
CREATE TABLE IF NOT EXISTS `maintenance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `location` text NOT NULL,
  `supervisor_id` int(11) NOT NULL,
  `operator_id` int(11) DEFAULT NULL,
  `coordinator_id` int(11) DEFAULT NULL,
  `water_tank` text,
  `lamps` text,
  `pressure_system` text,
  `sand` text,
  `carbon` text,
  `membrane` text,
  `microns` text,
  `panel` text,
  `feeding_pump` text,
  `backwash` text,
  `field_water` text,
  `final_water` text,
  `piping` text,
  `steel_coated` text,
  `thermopolis` text,
  `transparent` text,
  `floor_ceramic` text,
  `water_taps` text,
  `electricity` text,
  `water_supply` text,
  `light` text,
  `wiring` text,
  `banner` text,
  `ph` text,
  `turbidity` text,
  `tds` text,
  `odour` text,
  `taste` text,
  `colour` text,
  `back_washing` text,
  `jumbo_filter1` text,
  `jumbo_filter2` text,
  `wall_chalking` text,
  `poster` text,
  `cleening` text,
  `rubbish` text,
  `parking` text,
  `other` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `project_id` (`project_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maintenance`
--

INSERT INTO `maintenance` (`id`, `project_id`, `date`, `location`, `supervisor_id`, `operator_id`, `coordinator_id`, `water_tank`, `lamps`, `pressure_system`, `sand`, `carbon`, `membrane`, `microns`, `panel`, `feeding_pump`, `backwash`, `field_water`, `final_water`, `piping`, `steel_coated`, `thermopolis`, `transparent`, `floor_ceramic`, `water_taps`, `electricity`, `water_supply`, `light`, `wiring`, `banner`, `ph`, `turbidity`, `tds`, `odour`, `taste`, `colour`, `back_washing`, `jumbo_filter1`, `jumbo_filter2`, `wall_chalking`, `poster`, `cleening`, `rubbish`, `parking`, `other`, `updated_at`, `created_at`) VALUES
(1, 1, '2016-12-23', 'Animi voluptatum eu', 3, 4, 3, '{\"operatinal\":\"Fuga Beatae veritat\",\"clean\":\"Vel eius repellendus\",\"leakage\":\"Optio magna exercit\",\"damage\":\"Quia rerum iure inci\",\"require\":\"Tenetur Nam tenetur\",\"remarks\":\"Dolores consequuntur\"}', '{\"operatinal\":\"Quibusdam quasi hic\",\"clean\":\"Sint sit doloremque\",\"leakage\":\"Neque sunt pariatur\",\"damage\":\"At consequatur eius\",\"require\":\"Doloribus alias ut q\",\"remarks\":\"Numquam assumenda ni\"}', '{\"operatinal\":\"Dicta corporis vel u\",\"clean\":\"Alias eligendi molli\",\"leakage\":\"Labore eius a sint\",\"damage\":\"Ipsum nostrud fuga\",\"require\":\"Voluptas placeat ma\",\"remarks\":\"Qui voluptates autem\"}', '{\"operatinal\":\"Qui dolor magna dolo\",\"clean\":\"Sint neque proident\",\"leakage\":\"Harum quidem ipsa o\",\"damage\":\"Corrupti velit bla\",\"require\":\"Consectetur cum et\",\"remarks\":\"Non harum quia autem\"}', '{\"operatinal\":\"Autem quo non commod\",\"clean\":\"Iure quae maiores hi\",\"leakage\":\"Commodi unde cumque\",\"damage\":\"Numquam a est aperia\",\"require\":\"Non et eum dolor har\",\"remarks\":\"Consequatur error a\"}', '{\"operatinal\":\"Sit iste voluptas a\",\"clean\":\"Dolor adipisicing au\",\"leakage\":\"Lorem qui quae ea iu\",\"damage\":\"Et non enim incididu\",\"require\":\"Minima quibusdam eos\",\"remarks\":\"Qui quis expedita di\"}', '{\"operatinal\":\"Beatae nisi illo vol\",\"clean\":\"Non aut in nulla odi\",\"leakage\":\"Enim cumque eu non a\",\"damage\":\"Nobis iure perspicia\",\"require\":\"Mollitia cupidatat v\",\"remarks\":\"Fugit eum quis dolo\"}', '{\"operatinal\":\"Officia qui iste est\",\"clean\":\"Qui et delectus cum\",\"leakage\":\"Laboriosam architec\",\"damage\":\"Dolore rerum delenit\",\"require\":\"Exercitation rem dol\",\"remarks\":\"Molestiae dolor reru\"}', '{\"operatinal\":\"Vero corporis fuga\",\"clean\":\"Voluptatem dolor vol\",\"leakage\":\"Deserunt optio qui\",\"damage\":\"Ut magnam dolore vel\",\"require\":\"Dolorum quasi conseq\",\"remarks\":\"Dolores omnis culpa\"}', '{\"operatinal\":\"Ea laboris nisi cupi\",\"clean\":\"Voluptatem Dolorem\",\"leakage\":\"Id velit ea nesciunt\",\"damage\":\"Et ut voluptate dele\",\"require\":\"Qui sint aut repudia\",\"remarks\":\"Doloribus amet magn\"}', '{\"operatinal\":\"Sed est quam reicien\",\"clean\":\"Quos minim nulla rer\",\"leakage\":\"Corporis nisi lorem\",\"damage\":\"Minus aut pariatur\",\"require\":\"Doloribus ut et mini\",\"remarks\":\"Adipisci voluptate e\"}', '{\"operatinal\":\"Culpa ipsum doloribu\",\"clean\":\"Accusantium hic tota\",\"leakage\":\"Assumenda labore dol\",\"damage\":\"Culpa commodo ex ci\",\"require\":\"Fugit inventore do\",\"remarks\":\"Deserunt voluptas en\"}', '{\"operatinal\":\"Fuga Elit officiis\",\"clean\":\"Amet proident quid\",\"leakage\":\"Facilis doloremque o\",\"damage\":\"Cumque blanditiis qu\",\"require\":\"Eum laborum necessit\",\"remarks\":\"A impedit et quis v\"}', '{\"operatinal\":\"Iure eum totam natus\",\"clean\":\"In duis cum incidunt\",\"leakage\":\"Dolores et natus eos\",\"damage\":\"Necessitatibus qui c\",\"require\":\"Est non quos tempori\",\"remarks\":\"Sint sed inventore\"}', '{\"operatinal\":\"Sed velit repudianda\",\"clean\":\"Officia sunt quis n\",\"leakage\":\"In est ex sed maior\",\"damage\":\"Rerum esse dicta ve\",\"require\":\"Nobis consectetur d\",\"remarks\":\"Architecto sequi sap\"}', '{\"operatinal\":\"Sint qui dolore des\",\"clean\":\"Culpa ad excepturi\",\"leakage\":\"Debitis eu qui eiusm\",\"damage\":\"Ea cupidatat quia te\",\"require\":\"At deserunt velit e\",\"remarks\":\"Totam qui sequi offi\"}', '{\"operatinal\":\"Pariatur Id quibus\",\"clean\":\"Quasi incidunt quia\",\"leakage\":\"Cum autem inventore\",\"damage\":\"Rerum quis omnis ab\",\"require\":\"Cupiditate quo eiusm\",\"remarks\":\"Ut ut est maxime bea\"}', '{\"operatinal\":\"Qui quae dolore nemo\",\"clean\":\"Sit sed ut et quasi\",\"leakage\":\"Non elit ipsum fac\",\"damage\":\"Perferendis sit ut v\",\"require\":\"Voluptatem Accusant\",\"remarks\":\"Voluptas repudiandae\"}', '{\"operatinal\":\"At eum labore tempor\",\"clean\":\"Expedita distinctio\",\"leakage\":\"Sequi dolores nostru\",\"damage\":\"Natus aliquip quas e\",\"require\":\"Pariatur Ut nulla a\",\"remarks\":\"Rerum neque praesent\"}', '{\"operatinal\":\"Sunt id dolor atque\",\"clean\":\"Et aspernatur in exc\",\"leakage\":\"Voluptatem nisi sit\",\"damage\":\"Fugit labore ea dol\",\"require\":\"Beatae fugit ut ab\",\"remarks\":\"Consequatur Ullam u\"}', '{\"operatina\":\"Fugiat quod facilis\",\"clean\":\"Nemo aliqua Omnis e\",\"leakag\":\"Unde excepteur liber\",\"damag\":\"Aliquam ipsam quaera\",\"require\":\"Beatae necessitatibu\",\"remark\":\"Aute et commodo veli\"}', '{\"operatinal\":\"Soluta minima perfer\",\"clean\":\"At sunt et pariatur\",\"leakage\":\"Error rerum sed aliq\",\"damage\":\"Minim veniam dolore\",\"require\":\"Dignissimos aut inve\",\"remarks\":\"Consectetur asperna\"}', '{\"operatinal\":\"Reprehenderit labore\",\"clean\":\"Eu dolorem duis inci\",\"leakage\":\"Commodi in neque nem\",\"damage\":\"Porro consequat Com\",\"require\":\"Asperiores minim dol\",\"remarks\":\"Accusamus qui ut con\"}', '{\"reading\":\"Magni eum vitae temp\",\"reading_date\":\"1989-11-04\",\"remarks\":\"Ullam reprehenderit\"}', '{\"reading\":\"Eaque laborum aut no\",\"reading_date\":\"1987-01-22\",\"remarks\":\"Amet id odit cum qu\"}', '{\"reading\":\"Delectus deserunt i\",\"reading_date\":\"2003-07-20\",\"remarks\":\"Beatae et vel conseq\"}', '{\"reading\":\"Non a obcaecati cons\",\"reading_date\":\"2020-11-30\",\"remarks\":\"Ratione quasi ex nec\"}', '{\"reading\":\"Saepe corporis amet\",\"reading_date\":\"1993-08-15\",\"remarks\":\"Omnis voluptas enim\"}', '{\"reading\":\"Incidunt ut assumen\",\"reading_date\":\"2019-02-22\",\"remarks\":\"Assumenda sapiente a\"}', '{\"reading\":\"Esse vitae corrupti\",\"reading_date\":\"1987-07-16\",\"remarks\":\"Ut officia nemo aut\"}', '{\"reading\":\"Vitae voluptas neque\",\"reading_date\":\"1994-09-02\",\"remarks\":\"Accusamus fugiat fa\"}', '{\"reading\":\"Sit officia volupta\",\"reading_date\":\"1977-10-10\",\"remarks\":\"Aliquip molestias fa\"}', '{\"reading\":\"Corporis totam volup\",\"require\":\"Voluptate repellendu\"}', '{\"reading\":\"Sit facere autem qui\",\"require\":\"Veritatis minim sed\"}', '{\"reading\":\"Atque ut molestias v\",\"require\":\"Cillum temporibus im\"}', '{\"reading\":\"Voluptate commodi au\",\"require\":\"Error aut nulla ut v\"}', '{\"reading\":\"Non magnam culpa au\",\"require\":\"In consequatur esse\"}', '{\"reading\":\"Aliquam aut occaecat\",\"require\":\"Sunt qui quaerat eni\"}', '2022-06-14 08:11:25', '2022-06-02 10:50:25'),
(2, 1, '2020-05-19', 'Et do ipsam rem dign', 2, 4, 3, '{\"operatinal\":\"Consequatur Et dese\",\"clean\":\"Autem qui occaecat a\",\"leakage\":\"Deserunt numquam vol\",\"damage\":\"Expedita sint volupt\",\"require\":\"Rem aliqua Qui est\",\"remarks\":\"Laboriosam voluptat\"}', '{\"operatinal\":\"Et deserunt consequa\",\"clean\":\"Est incididunt sit m\",\"leakage\":\"Repellendus Obcaeca\",\"damage\":\"Sint illo dolor fug\",\"require\":\"Tempore consequatur\",\"remarks\":\"Nostrud saepe est pr\"}', '{\"operatinal\":\"Rem sunt lorem qui\",\"clean\":\"Commodi natus vero n\",\"leakage\":\"Sit libero magnam et\",\"damage\":\"Eum voluptatem inci\",\"require\":\"Iusto nisi quis repr\",\"remarks\":\"Excepteur modi dolor\"}', '{\"operatinal\":\"Eos distinctio Nih\",\"clean\":\"Atque do saepe hic e\",\"leakage\":\"Laudantium qui quo\",\"damage\":\"Ab velit non volupta\",\"require\":\"Voluptates beatae qu\",\"remarks\":\"Pariatur Exercitati\"}', '{\"operatinal\":\"Eu quo est magnam et\",\"clean\":\"Do ut dolorum distin\",\"leakage\":\"Quis aperiam tempor\",\"damage\":\"Aliquip sunt rerum i\",\"require\":\"Voluptatem enim cons\",\"remarks\":\"Reprehenderit molest\"}', '{\"operatinal\":\"Aliquam at quis moll\",\"clean\":\"Veniam fugiat eius\",\"leakage\":\"Voluptatem ab provid\",\"damage\":\"Id nobis ullam id m\",\"require\":\"Nisi eveniet nulla\",\"remarks\":\"Dolore praesentium a\"}', '{\"operatinal\":\"Dolores officia sunt\",\"clean\":\"Enim quisquam distin\",\"leakage\":\"Numquam distinctio\",\"damage\":\"Possimus est non ma\",\"require\":\"Qui adipisci incidid\",\"remarks\":\"Ex sit deserunt ex\"}', '{\"operatinal\":\"Aut aliquip hic assu\",\"clean\":\"Provident et volupt\",\"leakage\":\"Sint expedita quo v\",\"damage\":\"Lorem ut eius dolore\",\"require\":\"Doloremque ex culpa\",\"remarks\":\"Non dolor occaecat t\"}', '{\"operatinal\":\"Temporibus voluptate\",\"clean\":\"Cillum omnis ut non\",\"leakage\":\"Maiores debitis odit\",\"damage\":\"Ullam unde debitis a\",\"require\":\"Vero dolores illo mo\",\"remarks\":\"Quae commodo fuga Q\"}', '{\"operatinal\":\"Eum voluptate qui eo\",\"clean\":\"Error quo debitis am\",\"leakage\":\"Eum non quo tenetur\",\"damage\":\"Velit corporis conse\",\"require\":\"Autem est accusanti\",\"remarks\":\"Facilis commodo et c\"}', '{\"operatinal\":\"Voluptas veniam sit\",\"clean\":\"Recusandae In error\",\"leakage\":\"Odit minus minus vol\",\"damage\":\"Nisi eos maiores eu\",\"require\":\"Cum ut sapiente esse\",\"remarks\":\"Dolorem Nam nulla su\"}', '{\"operatinal\":\"Omnis sed mollit eiu\",\"clean\":\"Cillum corporis poss\",\"leakage\":\"Ut cupiditate molest\",\"damage\":\"Sit quisquam sed nih\",\"require\":\"Aut repudiandae cum\",\"remarks\":\"Voluptatem dolorem\"}', '{\"operatinal\":\"Deserunt reprehender\",\"clean\":\"Aut quo commodi obca\",\"leakage\":\"Reprehenderit asper\",\"damage\":\"Delectus alias amet\",\"require\":\"Eum ad vel dicta pro\",\"remarks\":\"Vel sunt quos soluta\"}', '{\"operatinal\":\"Vel corporis volupta\",\"clean\":\"Ratione assumenda au\",\"leakage\":\"Quae est et labore\",\"damage\":\"Cupidatat aperiam du\",\"require\":\"Aut rerum nihil labo\",\"remarks\":\"Vel nostrum nisi dol\"}', '{\"operatinal\":\"Doloremque aut debit\",\"clean\":\"Minim cum eligendi q\",\"leakage\":\"Nisi voluptatem quae\",\"damage\":\"Voluptate maxime dol\",\"require\":\"Dolor aut vitae reic\",\"remarks\":\"Mollit dicta eveniet\"}', '{\"operatinal\":\"Tempora perferendis\",\"clean\":\"Autem voluptatem arc\",\"leakage\":\"Ut nesciunt provide\",\"damage\":\"Modi dolorem dicta e\",\"require\":\"Et facilis cum et do\",\"remarks\":\"Ullam anim est alia\"}', '{\"operatinal\":\"Ea minim quos ad rei\",\"clean\":\"Ad amet veritatis s\",\"leakage\":\"Fugiat magna dolorem\",\"damage\":\"Quia animi ullam ni\",\"require\":\"Placeat amet archi\",\"remarks\":\"Velit duis distincti\"}', '{\"operatinal\":\"Autem eum voluptate\",\"clean\":\"Provident do explic\",\"leakage\":\"Cupidatat aperiam ex\",\"damage\":\"Cupidatat consequat\",\"require\":\"Libero eum sunt comm\",\"remarks\":\"Velit deserunt quis\"}', '{\"operatinal\":\"Aliquid ea qui elige\",\"clean\":\"Aperiam labore minus\",\"leakage\":\"Corporis dolores dol\",\"damage\":\"At consequatur Eu m\",\"require\":\"Ipsum veniam dolor\",\"remarks\":\"Ipsum recusandae N\"}', '{\"operatinal\":\"Aliquid vitae omnis\",\"clean\":\"Sapiente a quo persp\",\"leakage\":\"Non minim in ea numq\",\"damage\":\"Ea pariatur Minus i\",\"require\":\"Et praesentium nisi\",\"remarks\":\"Eum id culpa conse\"}', '{\"operatina\":\"Facere fuga Velit\",\"clean\":\"Quod velit ad verit\",\"leakag\":\"Doloribus numquam cu\",\"damag\":\"Id praesentium dolor\",\"require\":\"Eveniet sit eligend\",\"remark\":\"Minima laudantium v\"}', '{\"operatinal\":\"Aspernatur ut eos a\",\"clean\":\"Asperiores aspernatu\",\"leakage\":\"Aliquip quibusdam al\",\"damage\":\"Incidunt dignissimo\",\"require\":\"Sunt rem necessitati\",\"remarks\":\"Sit fugiat ut a iru\"}', '{\"operatinal\":\"Assumenda rem quidem\",\"clean\":\"Fugit illo velit ip\",\"leakage\":\"Deserunt neque aut c\",\"damage\":\"Quod doloremque ipsu\",\"require\":\"Minus nostrud possim\",\"remarks\":\"Laboriosam rem omni\"}', '{\"reading\":\"Laboriosam omnis eu\",\"reading_date\":\"2001-07-03\",\"remarks\":\"Omnis iusto magni ex\"}', '{\"reading\":\"Adipisicing eligendi\",\"reading_date\":\"2000-06-26\",\"remarks\":\"Corporis sequi cupid\"}', '{\"reading\":\"Et id nihil voluptat\",\"reading_date\":\"1992-09-28\",\"remarks\":\"Non dolores eiusmod\"}', '{\"reading\":\"Velit ut ad volupta\",\"reading_date\":\"2004-04-16\",\"remarks\":\"Velit vero in non p\"}', '{\"reading\":\"Perspiciatis occaec\",\"reading_date\":\"1976-05-18\",\"remarks\":\"Ea error aute suscip\"}', '{\"reading\":\"Et veniam dolor dig\",\"reading_date\":\"1995-04-04\",\"remarks\":\"Culpa voluptatem et\"}', '{\"reading\":\"Officia autem qui ut\",\"reading_date\":\"1983-05-28\",\"remarks\":\"Qui ut lorem commodo\"}', '{\"reading\":\"Eiusmod quaerat volu\",\"reading_date\":\"1976-03-22\",\"remarks\":\"Non officiis reicien\"}', '{\"reading\":\"Nam qui qui Nam ulla\",\"reading_date\":\"1972-07-08\",\"remarks\":\"Iste numquam rerum i\"}', '{\"reading\":\"Rem in labore conseq\",\"require\":\"Nisi tempora veniam\"}', '{\"reading\":\"Consequatur nulla d\",\"require\":\"Error vel nemo lorem\"}', '{\"reading\":\"Nihil quisquam illo\",\"require\":\"Et tempora mollit de\"}', '{\"reading\":\"Dolores assumenda re\",\"require\":\"Fugiat adipisicing v\"}', '{\"reading\":\"Debitis laboris exce\",\"require\":\"Enim id aperiam cons\"}', '{\"reading\":\"Autem ea sit consequ\",\"require\":\"Aut error aperiam ut\"}', '2022-06-14 08:10:25', '2022-06-02 10:51:15'),
(3, 1, '2006-02-09', 'Qui eiusmod dolor il', 3, 4, 3, '{\"operatinal\":\"Excepteur iure et au\",\"clean\":\"Quas accusamus vitae\",\"leakage\":\"Sed quod rem sint e\",\"damage\":\"Libero voluptatem la\",\"require\":\"In nisi odit ipsum\",\"remarks\":\"Sunt maxime qui assu\"}', '{\"operatinal\":\"Esse officia nihil n\",\"clean\":\"Temporibus ut dolore\",\"leakage\":\"Et non praesentium a\",\"damage\":\"Quasi quia aut omnis\",\"require\":\"Odit dolore dolorem\",\"remarks\":\"Iusto aut eiusmod qu\"}', '{\"operatinal\":\"Dolorem perferendis\",\"clean\":\"Do et voluptates min\",\"leakage\":\"Eu molestiae tempore\",\"damage\":\"Delectus quis culpa\",\"require\":\"Officia saepe lorem\",\"remarks\":\"Unde recusandae Tem\"}', '{\"operatinal\":\"Minim non facere in\",\"clean\":\"Nulla possimus cons\",\"leakage\":\"Minim consequat Ani\",\"damage\":\"Voluptatem id exped\",\"require\":\"Ipsum non labore mi\",\"remarks\":\"Sint autem quos nihi\"}', '{\"operatinal\":\"Eiusmod qui sit cul\",\"clean\":\"Dolor harum ipsa mo\",\"leakage\":\"Do et animi digniss\",\"damage\":\"Modi sunt earum aliq\",\"require\":\"Nihil quidem ut labo\",\"remarks\":\"Cupiditate quasi bla\"}', '{\"operatinal\":\"Odio ut voluptas eli\",\"clean\":\"Soluta repudiandae l\",\"leakage\":\"Autem eu dignissimos\",\"damage\":\"Doloremque cupiditat\",\"require\":\"Aliquip labore ut ut\",\"remarks\":\"Sed officia dolorem\"}', '{\"operatinal\":\"Facilis quia deserun\",\"clean\":\"Aliqua Irure debiti\",\"leakage\":\"Vel consequat Quasi\",\"damage\":\"Qui amet animi fac\",\"require\":\"Harum exercitation s\",\"remarks\":\"Voluptatem aut atque\"}', '{\"operatinal\":\"Facere sint in do do\",\"clean\":\"Facere consequatur\",\"leakage\":\"Atque omnis quam eli\",\"damage\":\"Recusandae Commodi\",\"require\":\"Cillum esse et nihi\",\"remarks\":\"Odio maiores quae pa\"}', '{\"operatinal\":\"Doloremque optio ev\",\"clean\":\"Et quis asperiores f\",\"leakage\":\"Eiusmod voluptas ab\",\"damage\":\"Minim dignissimos di\",\"require\":\"Necessitatibus est i\",\"remarks\":\"Do assumenda in labo\"}', '{\"operatinal\":\"Anim ut sapiente lab\",\"clean\":\"Eaque temporibus dol\",\"leakage\":\"Laboris cupiditate u\",\"damage\":\"Qui odit veniam nob\",\"require\":\"Quos tenetur ea veli\",\"remarks\":\"Quod numquam pariatu\"}', '{\"operatinal\":\"Nam in corporis magn\",\"clean\":\"Corrupti id tenetu\",\"leakage\":\"Nulla quis facilis v\",\"damage\":\"Optio aut incididun\",\"require\":\"Ullam in molestias l\",\"remarks\":\"Modi ex eligendi vol\"}', '{\"operatinal\":\"Sunt vel magni natu\",\"clean\":\"Sunt harum quae sequ\",\"leakage\":\"Quae officia eligend\",\"damage\":\"Ut nobis ipsum ut d\",\"require\":\"Neque beatae et qui\",\"remarks\":\"Est enim repellendu\"}', '{\"operatinal\":\"Qui voluptatem quide\",\"clean\":\"Dolore commodo offic\",\"leakage\":\"Incidunt dolore vol\",\"damage\":\"Est id iusto corrupt\",\"require\":\"Dolorem a praesentiu\",\"remarks\":\"Iure perspiciatis d\"}', '{\"operatinal\":\"Ut porro molestias f\",\"clean\":\"Culpa saepe ut inci\",\"leakage\":\"Voluptatum deleniti\",\"damage\":\"Nemo suscipit dignis\",\"require\":\"Labore molestiae vol\",\"remarks\":\"Nulla id duis magna\"}', '{\"operatinal\":\"Voluptates omnis at\",\"clean\":\"Et dolores nemo ipsa\",\"leakage\":\"Dolore aut labore ip\",\"damage\":\"Dolor veniam magni\",\"require\":\"Totam ut labore dele\",\"remarks\":\"Sunt illum duis eo\"}', '{\"operatinal\":\"Minus proident magn\",\"clean\":\"Pariatur Est provid\",\"leakage\":\"Tenetur expedita eni\",\"damage\":\"Quibusdam quia dolor\",\"require\":\"Illum sit consectet\",\"remarks\":\"Est quae natus non r\"}', '{\"operatinal\":\"Perferendis consequa\",\"clean\":\"Dolore culpa est sit\",\"leakage\":\"Explicabo Quod ut v\",\"damage\":\"Veniam ut praesenti\",\"require\":\"Aspernatur qui animi\",\"remarks\":\"Doloribus lorem veni\"}', '{\"operatinal\":\"Molestiae velit ulla\",\"clean\":\"Ea corporis dicta ad\",\"leakage\":\"Veniam nihil offici\",\"damage\":\"Quia asperiores aliq\",\"require\":\"Repudiandae magnam n\",\"remarks\":\"Doloribus a et ut et\"}', '{\"operatinal\":\"Vero pariatur Eum n\",\"clean\":\"Quibusdam est dolor\",\"leakage\":\"Mollit dolor quod la\",\"damage\":\"Aperiam sed et vel r\",\"require\":\"Sit rerum eu consequ\",\"remarks\":\"Officia repudiandae\"}', '{\"operatinal\":\"Beatae unde rem duis\",\"clean\":\"Eos deserunt volupta\",\"leakage\":\"Officia Nam mollit r\",\"damage\":\"Fugiat dolor minim c\",\"require\":\"Est enim accusamus u\",\"remarks\":\"Reiciendis explicabo\"}', '{\"operatina\":\"Quam molestiae sint\",\"clean\":\"Esse non quia cumque\",\"leakag\":\"Sapiente dolor eiusm\",\"damag\":\"Qui explicabo Et re\",\"require\":\"Aliquid dolorum dolo\",\"remark\":\"Nihil iste sint vol\"}', '{\"operatinal\":\"Sed incidunt conseq\",\"clean\":\"Quam eveniet pariat\",\"leakage\":\"Eaque quasi quos et\",\"damage\":\"Alias alias modi vol\",\"require\":\"Sit labore id et dol\",\"remarks\":\"Ducimus aut non ill\"}', '{\"operatinal\":\"Id est accusamus qu\",\"clean\":\"Commodo non quia non\",\"leakage\":\"Elit velit nisi vi\",\"damage\":\"Omnis consectetur d\",\"require\":\"Amet soluta similiq\",\"remarks\":\"Laudantium placeat\"}', '{\"reading\":\"Fuga Libero et cupi\",\"reading_date\":\"2009-11-06\",\"remarks\":\"At qui eius culpa q\"}', '{\"reading\":\"Inventore nobis face\",\"reading_date\":\"2013-09-30\",\"remarks\":\"Aute soluta consequa\"}', '{\"reading\":\"Praesentium impedit\",\"reading_date\":\"2000-04-11\",\"remarks\":\"Laborum Et dolores\"}', '{\"reading\":\"Consequatur aliqua\",\"reading_date\":\"1999-09-23\",\"remarks\":\"Doloribus eu explica\"}', '{\"reading\":\"Recusandae Earum qu\",\"reading_date\":\"1990-03-07\",\"remarks\":\"Dolorem necessitatib\"}', '{\"reading\":\"Rerum ipsum debitis\",\"reading_date\":\"1990-02-06\",\"remarks\":\"Ex modi sequi molest\"}', '{\"reading\":\"Adipisci animi eius\",\"reading_date\":\"1990-08-30\",\"remarks\":\"Recusandae Alias pe\"}', '{\"reading\":\"Libero qui mollit co\",\"reading_date\":\"1974-01-05\",\"remarks\":\"Minus magnam assumen\"}', '{\"reading\":\"Ipsa beatae iure vo\",\"reading_date\":\"2004-06-23\",\"remarks\":\"Laborum voluptatem e\"}', '{\"reading\":\"Atque placeat delec\",\"require\":\"Enim et dolorem et d\"}', '{\"reading\":\"Ut at Nam exercitati\",\"require\":\"Est sit voluptas rat\"}', '{\"reading\":\"Molestiae proident\",\"require\":\"Suscipit dolores ut\"}', '{\"reading\":\"Asperiores harum vol\",\"require\":\"Odit harum aspernatu\"}', '{\"reading\":\"Mollit est ipsum mo\",\"require\":\"Adipisicing quis qui\"}', '{\"reading\":\"Est officia aliqua\",\"require\":\"Temporibus sed et ma\"}', '2022-06-14 06:03:48', '2022-06-14 06:03:48'),
(4, 1, '2005-05-13', 'Lorem voluptate mini', 2, 4, 3, '{\"operatinal\":null,\"clean\":\"Id obcaecati omnis l\",\"leakage\":\"In aspernatur enim o\",\"damage\":\"Reiciendis et sunt\",\"require\":\"Incididunt veniam i\",\"remarks\":\"Quasi voluptate vero\"}', '{\"operatinal\":\"Facere corrupti et\",\"clean\":\"Unde vel dolore quis\",\"leakage\":\"Iusto nostrum et rat\",\"damage\":\"Placeat blanditiis\",\"require\":\"Iusto sapiente autem\",\"remarks\":\"Enim sapiente aspern\"}', '{\"operatinal\":\"Ut alias assumenda n\",\"clean\":\"Quam ut quibusdam do\",\"leakage\":\"Architecto ex quasi\",\"damage\":\"Consectetur rerum vo\",\"require\":\"Quia error quisquam\",\"remarks\":\"Fuga Sint fuga Sed\"}', '{\"operatinal\":\"Vitae debitis molest\",\"clean\":\"Velit hic id aut ve\",\"leakage\":\"Qui magnam minim adi\",\"damage\":\"Maxime praesentium c\",\"require\":\"Dolore placeat labo\",\"remarks\":\"Placeat non consequ\"}', '{\"operatinal\":\"Quo doloremque offic\",\"clean\":\"Consectetur adipisci\",\"leakage\":\"Corporis consequatur\",\"damage\":\"Consequatur quia ven\",\"require\":\"Ut ad incididunt ab\",\"remarks\":\"Distinctio Incidunt\"}', '{\"operatinal\":\"Nulla earum consecte\",\"clean\":\"Maiores voluptatem l\",\"leakage\":\"Voluptatem expedita\",\"damage\":\"Non dolor eiusmod mi\",\"require\":\"Molestiae consectetu\",\"remarks\":\"Id aliquip nesciunt\"}', '{\"operatinal\":\"Reprehenderit in non\",\"clean\":\"Et eaque et praesent\",\"leakage\":\"Est omnis ipsam quia\",\"damage\":\"Porro assumenda reru\",\"require\":\"Commodo amet nihil\",\"remarks\":\"Eos sapiente numqua\"}', '{\"operatinal\":\"Dolor quis aut exped\",\"clean\":\"Enim deserunt at tem\",\"leakage\":\"Omnis dolorem et tot\",\"damage\":\"Quis consectetur lab\",\"require\":\"Eaque exercitationem\",\"remarks\":\"Sequi officiis rerum\"}', '{\"operatinal\":\"Est omnis magnam si\",\"clean\":\"Facilis laborum et f\",\"leakage\":\"Laudantium quos quo\",\"damage\":\"Aut pariatur Ut con\",\"require\":\"Rerum rerum quia dol\",\"remarks\":\"Voluptate duis incid\"}', '{\"operatinal\":\"Dolorum nihil animi\",\"clean\":\"Rerum reprehenderit\",\"leakage\":\"Sunt ut qui et magn\",\"damage\":\"Inventore voluptas a\",\"require\":\"Magni aliquam quis i\",\"remarks\":\"Dolorem tempora dolo\"}', '{\"operatinal\":\"Inventore odio natus\",\"clean\":\"Voluptate molestiae\",\"leakage\":\"Sapiente facere arch\",\"damage\":\"Maiores et est dolor\",\"require\":\"Similique eligendi m\",\"remarks\":\"Officiis nisi aut au\"}', '{\"operatinal\":\"Consequuntur quam bl\",\"clean\":\"Reprehenderit conse\",\"leakage\":\"Sed voluptatem verit\",\"damage\":\"Dolor eiusmod aliqua\",\"require\":\"Nostrud eiusmod volu\",\"remarks\":\"Anim quod quo est qu\"}', '{\"operatinal\":\"Non dolore sunt aspe\",\"clean\":\"Aperiam natus error\",\"leakage\":\"Sint quaerat irure n\",\"damage\":\"Sunt excepturi delen\",\"require\":\"Asperiores mollitia\",\"remarks\":\"Rerum alias itaque q\"}', '{\"operatinal\":\"Laborum quas est an\",\"clean\":\"Vero irure quod volu\",\"leakage\":\"Quia aut perspiciati\",\"damage\":\"Qui lorem sint cupid\",\"require\":\"Vitae iste culpa re\",\"remarks\":\"Officia assumenda co\"}', '{\"operatinal\":\"Dolore anim incidunt\",\"clean\":\"Magni est lorem fuga\",\"leakage\":\"Minima alias non vol\",\"damage\":\"Nihil sint inventore\",\"require\":\"Amet fugit Nam qui\",\"remarks\":\"Aut consequatur omn\"}', '{\"operatinal\":\"Dolore aliquip expli\",\"clean\":\"Enim est maiores ali\",\"leakage\":\"Cum sint tempore e\",\"damage\":\"Est anim laborum Ma\",\"require\":\"Dolor esse aut qui\",\"remarks\":\"Magni aut alias maio\"}', '{\"operatinal\":\"Nisi sed totam quasi\",\"clean\":\"Qui a reiciendis dol\",\"leakage\":\"Architecto quo et re\",\"damage\":\"In sed nihil quia fu\",\"require\":\"Veniam aliquip duis\",\"remarks\":\"Ratione dolores ipsa\"}', '{\"operatinal\":\"Earum omnis voluptat\",\"clean\":\"Eos dolor ratione la\",\"leakage\":\"Laboris pariatur Co\",\"damage\":\"A neque Nam nihil qu\",\"require\":\"Consequatur non dolo\",\"remarks\":\"Quos aperiam et in v\"}', '{\"operatinal\":\"Officia accusamus et\",\"clean\":\"Laboriosam quidem e\",\"leakage\":\"Explicabo Tenetur f\",\"damage\":\"Sint corporis eu ad\",\"require\":\"Eius recusandae Ut\",\"remarks\":\"Ipsam cumque id aute\"}', '{\"operatinal\":\"Aliquam consectetur\",\"clean\":\"Cum impedit non vel\",\"leakage\":\"Itaque voluptates qu\",\"damage\":\"Fuga Asperiores sus\",\"require\":\"Duis et quis nemo as\",\"remarks\":\"Rerum perferendis om\"}', '{\"operatina\":\"Aliquip sit omnis re\",\"clean\":\"Error in voluptatem\",\"leakag\":\"Esse et adipisci qu\",\"damag\":\"Enim neque voluptate\",\"require\":\"Sed ut sed et fugiat\",\"remark\":\"Molestiae quisquam v\"}', '{\"operatinal\":\"Nulla ea necessitati\",\"clean\":\"Aliquid eligendi nat\",\"leakage\":\"Ipsum libero explic\",\"damage\":\"Quam sed exercitatio\",\"require\":\"Saepe ut adipisci id\",\"remarks\":\"Aut magna ut autem a\"}', '{\"operatinal\":\"Quaerat ut aliquid f\",\"clean\":\"In architecto quae i\",\"leakage\":\"Hic laboris ducimus\",\"damage\":\"Vitae earum est sunt\",\"require\":\"Consequatur nemo ill\",\"remarks\":\"Voluptas ducimus ip\"}', '{\"reading\":\"Exercitationem quam\",\"reading_date\":\"2015-08-26\",\"remarks\":\"Distinctio Tempore\"}', '{\"reading\":\"Quae recusandae Qua\",\"reading_date\":\"2014-02-07\",\"remarks\":\"Similique non commod\"}', '{\"reading\":\"Atque molestiae volu\",\"reading_date\":\"1983-10-06\",\"remarks\":\"Exercitationem culpa\"}', '{\"reading\":\"Sapiente pariatur E\",\"reading_date\":\"1974-11-10\",\"remarks\":\"Sed dolor dolorum to\"}', '{\"reading\":\"Quisquam cupidatat i\",\"reading_date\":\"2014-10-25\",\"remarks\":\"Enim ut accusamus eu\"}', '{\"reading\":\"Sint quia esse exerc\",\"reading_date\":\"1998-08-26\",\"remarks\":\"Porro temporibus omn\"}', '{\"reading\":\"Autem anim voluptati\",\"reading_date\":\"1986-01-31\",\"remarks\":\"Voluptate aut ullamc\"}', '{\"reading\":\"Delectus nemo nulla\",\"reading_date\":\"1970-07-17\",\"remarks\":\"Dicta eligendi fuga\"}', '{\"reading\":\"Provident impedit\",\"reading_date\":\"2006-01-04\",\"remarks\":\"Est id quas elit e\"}', '{\"reading\":\"Dolore quos quae dol\",\"require\":\"Inventore vel eaque\"}', '{\"reading\":\"Sed necessitatibus r\",\"require\":\"Qui sit sint magni t\"}', '{\"reading\":\"Esse quibusdam volu\",\"require\":\"Doloremque quia aut\"}', '{\"reading\":\"Aperiam in eos place\",\"require\":\"Sit autem illo exce\"}', '{\"reading\":\"Alias doloribus volu\",\"require\":\"Voluptas qui labore\"}', '{\"reading\":\"Esse elit in consec\",\"require\":\"Quaerat iusto vero q\"}', '2022-06-14 06:25:14', '2022-06-14 06:25:14'),
(5, 1, '1982-04-04', 'Vero ipsam quo quia', 2, 4, 3, '{\"operatinal\":\"Ut sint id debitis\",\"clean\":\"Reprehenderit volupt\",\"leakage\":\"Aut voluptate aut co\",\"damage\":\"In dignissimos repel\",\"require\":\"Eveniet explicabo\",\"remarks\":\"Vel ullam dolore mol\"}', '{\"operatinal\":\"Nobis et quos enim n\",\"clean\":\"Dolorem cum nihil do\",\"leakage\":\"Modi magnam dicta ip\",\"damage\":\"Sunt ex labore expe\",\"require\":\"Non debitis ullamco\",\"remarks\":\"Harum itaque illo in\"}', '{\"operatinal\":\"Fugiat amet quis m\",\"clean\":\"Voluptatem Dolore e\",\"leakage\":\"Quae consequatur Ci\",\"damage\":\"Vitae quod accusanti\",\"require\":\"Necessitatibus et el\",\"remarks\":\"Porro adipisicing au\"}', '{\"operatinal\":\"Iste amet molestias\",\"clean\":\"Ad similique vero ar\",\"leakage\":\"Perferendis magnam r\",\"damage\":\"Nemo saepe cupidatat\",\"require\":\"Mollit soluta sit i\",\"remarks\":\"Esse deserunt ipsa\"}', '{\"operatinal\":\"Est elit do vero m\",\"clean\":\"Elit ex do et alias\",\"leakage\":\"Nesciunt fugiat te\",\"damage\":\"Eum qui aut rerum cu\",\"require\":\"Sed rerum cupidatat\",\"remarks\":\"Ullamco voluptatem e\"}', '{\"operatinal\":\"Et recusandae Eu il\",\"clean\":\"Distinctio Veniam\",\"leakage\":\"Ea ut id itaque in\",\"damage\":\"Architecto aliquid p\",\"require\":\"Id dolor provident\",\"remarks\":\"Quis impedit quis s\"}', '{\"operatinal\":\"Qui repudiandae adip\",\"clean\":\"Rerum aliqua Ab mol\",\"leakage\":\"Qui rerum deserunt q\",\"damage\":\"Ex culpa quam labor\",\"require\":\"Culpa amet accusam\",\"remarks\":\"Nesciunt quia moles\"}', '{\"operatinal\":\"Proident culpa mole\",\"clean\":\"Ea aut quaerat conse\",\"leakage\":\"Est veniam anim qua\",\"damage\":\"Voluptatem aut et ad\",\"require\":\"Et adipisicing odio\",\"remarks\":\"Proident explicabo\"}', '{\"operatinal\":\"Laborum ut fugit ip\",\"clean\":\"Quasi ea minim sed e\",\"leakage\":\"Esse illo voluptate\",\"damage\":\"Quia qui eum ab enim\",\"require\":\"Voluptate quia aut m\",\"remarks\":\"Aut doloribus porro\"}', '{\"operatinal\":\"Saepe soluta sunt e\",\"clean\":\"Aut est sed fugiat\",\"leakage\":\"Elit dolor non modi\",\"damage\":\"Earum cupiditate qui\",\"require\":\"Facilis pariatur Al\",\"remarks\":\"Qui voluptate ab omn\"}', '{\"operatinal\":\"Et repellendus Repe\",\"clean\":\"Ut saepe quod volupt\",\"leakage\":\"Consequuntur exercit\",\"damage\":\"Ut quidem fugit con\",\"require\":\"Tempore cupidatat e\",\"remarks\":\"Minima rerum cupidit\"}', '{\"operatinal\":\"In dignissimos dolor\",\"clean\":\"Qui eum ut quo dolor\",\"leakage\":\"Quis vel tempor sed\",\"damage\":\"Placeat aut officii\",\"require\":\"Omnis quis maxime no\",\"remarks\":\"Molestias velit sun\"}', '{\"operatinal\":\"Optio molestiae sed\",\"clean\":\"Aliquid esse repreh\",\"leakage\":\"Ea sit velit adipis\",\"damage\":\"Distinctio Commodo\",\"require\":\"Veniam elit aut al\",\"remarks\":\"Aut pariatur Culpa\"}', '{\"operatinal\":\"Eos expedita sint ex\",\"clean\":\"Sit saepe hic occae\",\"leakage\":\"Sunt aperiam eveniet\",\"damage\":\"Magnam sapiente natu\",\"require\":\"Quibusdam consequat\",\"remarks\":\"Saepe maxime praesen\"}', '{\"operatinal\":\"Autem consequuntur d\",\"clean\":\"Esse officia ea dolo\",\"leakage\":\"Cumque quasi provide\",\"damage\":\"Nemo quis natus ea v\",\"require\":\"Excepteur esse est m\",\"remarks\":\"Odio dolorum magni q\"}', '{\"operatinal\":\"Omnis ut et sed labo\",\"clean\":\"Voluptas qui digniss\",\"leakage\":\"Aut rerum aliqua De\",\"damage\":\"Quis reiciendis volu\",\"require\":\"Proident iusto anim\",\"remarks\":\"Magna esse voluptat\"}', '{\"operatinal\":\"Perferendis providen\",\"clean\":\"Suscipit porro nobis\",\"leakage\":\"Sit possimus invent\",\"damage\":\"A quisquam modi volu\",\"require\":\"Sit adipisci asperio\",\"remarks\":\"Aut lorem sed conseq\"}', '{\"operatinal\":\"Fuga Non minim qui\",\"clean\":\"Dolorum est nulla ne\",\"leakage\":\"Non impedit sit vol\",\"damage\":\"Beatae dolor aut qui\",\"require\":\"Nemo duis est fugia\",\"remarks\":\"Hic dolor ab corpori\"}', '{\"operatinal\":\"Duis dolorem possimu\",\"clean\":\"Ipsam ratione atque\",\"leakage\":\"Expedita culpa ut na\",\"damage\":\"Quam voluptatibus qu\",\"require\":\"Deleniti illo velit\",\"remarks\":\"Irure placeat neque\"}', '{\"operatinal\":\"Officia voluptatem\",\"clean\":\"Veniam enim est eaq\",\"leakage\":\"Sunt vel et hic ten\",\"damage\":\"Ratione cillum dolor\",\"require\":\"Culpa vero quibusda\",\"remarks\":\"Consequatur Nostrum\"}', '{\"operatina\":\"Enim temporibus offi\",\"clean\":\"Amet nulla omnis qu\",\"leakag\":\"Quis rerum eum enim\",\"damag\":\"Nisi ut dolorum nobi\",\"require\":\"Cupidatat voluptate\",\"remark\":\"Consequuntur duis ex\"}', '{\"operatinal\":\"Non qui cupidatat ve\",\"clean\":\"Aut dicta elit nisi\",\"leakage\":\"Enim aut vel volupta\",\"damage\":\"Nisi repudiandae dic\",\"require\":\"Voluptate quas ullam\",\"remarks\":\"Amet facilis ullamc\"}', '{\"operatinal\":\"Iste dolore eaque et\",\"clean\":\"Rerum tempor fugiat\",\"leakage\":\"Ducimus inventore d\",\"damage\":\"Accusamus exercitati\",\"require\":\"Autem sed ad in labo\",\"remarks\":\"Nostrud blanditiis q\"}', '{\"reading\":\"Eligendi assumenda u\",\"reading_date\":\"2006-11-07\",\"remarks\":\"Est provident maior\"}', '{\"reading\":\"Adipisci voluptas ma\",\"reading_date\":\"2002-07-27\",\"remarks\":\"Natus aliquam conseq\"}', '{\"reading\":\"Pariatur Eum volupt\",\"reading_date\":\"1972-03-09\",\"remarks\":\"Eum excepturi quia i\"}', '{\"reading\":\"Culpa facilis dolor\",\"reading_date\":\"1977-06-04\",\"remarks\":\"Nostrum dolores sint\"}', '{\"reading\":\"Tempor rerum provide\",\"reading_date\":\"1991-09-16\",\"remarks\":\"Consequatur numquam\"}', '{\"reading\":\"Cumque id non except\",\"reading_date\":\"1998-04-20\",\"remarks\":\"Distinctio Aliqua\"}', '{\"reading\":\"Ab incidunt velit d\",\"reading_date\":\"1972-11-17\",\"remarks\":\"Et labore rem et ut\"}', '{\"reading\":\"Et dolore aut sed lo\",\"reading_date\":\"2018-09-26\",\"remarks\":\"Anim dolore est offi\"}', '{\"reading\":\"Nostrud nobis optio\",\"reading_date\":\"1979-07-13\",\"remarks\":\"Vel anim placeat cu\"}', '{\"reading\":\"Itaque beatae debiti\",\"require\":\"Mollitia provident\"}', '{\"reading\":\"Dolore dolor eum qua\",\"require\":\"Omnis quia culpa te\"}', '{\"reading\":\"Neque in dolor archi\",\"require\":\"Quibusdam et velit q\"}', '{\"reading\":\"Placeat nisi tempor\",\"require\":\"Explicabo Non in fu\"}', '{\"reading\":\"Aut ex ullam itaque\",\"require\":\"Voluptas accusantium\"}', '{\"reading\":\"Ea amet et sed susc\",\"require\":\"Nisi obcaecati aperi\"}', '2022-06-14 08:11:56', '2022-06-14 08:11:56'),
(6, 1, '2009-07-22', 'Quidem do dolorum no', 2, 4, 3, '{\"operatinal\":\"Qui deserunt Nam pro\",\"clean\":\"Ad molestias eos at\",\"leakage\":\"Dignissimos ut anim\",\"damage\":\"Repellendus Et nost\",\"require\":\"Amet praesentium mi\",\"remarks\":\"Officia temporibus b\"}', '{\"operatinal\":\"Temporibus nostrum i\",\"clean\":\"Aute reprehenderit\",\"leakage\":\"Et tempore a velit\",\"damage\":\"Molestiae in id ut e\",\"require\":\"Expedita nulla rerum\",\"remarks\":\"Minim vel neque sequ\"}', '{\"operatinal\":\"Non reprehenderit p\",\"clean\":\"Amet perspiciatis\",\"leakage\":\"Proident aut iusto\",\"damage\":\"Quae in quis similiq\",\"require\":\"Nesciunt sunt dolor\",\"remarks\":\"Tempora voluptatum n\"}', '{\"operatinal\":\"Atque eveniet sit\",\"clean\":\"Optio sit sequi ea\",\"leakage\":\"Sint non officia cul\",\"damage\":\"Ut fugit id numqua\",\"require\":\"Sint aute veniam au\",\"remarks\":\"Accusamus error est\"}', '{\"operatinal\":\"Aliquip odio quisqua\",\"clean\":\"Dolorem voluptatem a\",\"leakage\":\"Voluptatem expedita\",\"damage\":\"Commodo ut anim arch\",\"require\":\"Voluptatibus ea repr\",\"remarks\":\"Dolores aut quam bla\"}', '{\"operatinal\":\"Autem do quia quis n\",\"clean\":\"Amet ipsum quis aut\",\"leakage\":\"Aliquid voluptatem c\",\"damage\":\"Non veniam modi vel\",\"require\":\"Voluptas iure mollit\",\"remarks\":\"Aut voluptatem lorem\"}', '{\"operatinal\":\"Doloribus animi vol\",\"clean\":\"Et quibusdam iste te\",\"leakage\":\"Ad qui est architect\",\"damage\":\"Esse adipisci vel q\",\"require\":\"Vel aut quia lorem s\",\"remarks\":\"Sed dolore reprehend\"}', '{\"operatinal\":\"Adipisci quia asperi\",\"clean\":\"Eveniet et sit ex\",\"leakage\":\"Iste nisi nostrud mo\",\"damage\":\"Rerum aliquip et arc\",\"require\":\"Sapiente ut anim arc\",\"remarks\":\"Ullam sed labore et\"}', '{\"operatinal\":\"Ut in non enim fuga\",\"clean\":\"Rem quas odit unde v\",\"leakage\":\"Officiis dolor neces\",\"damage\":\"Sint irure iure Nam\",\"require\":\"Porro est nulla eius\",\"remarks\":\"Perferendis ut in ex\"}', '{\"operatinal\":\"Sit animi ut iusto\",\"clean\":\"Sunt in inventore u\",\"leakage\":\"In mollit voluptas s\",\"damage\":\"Dolores quibusdam od\",\"require\":\"Eius tempor consequu\",\"remarks\":\"Ea rerum sed deserun\"}', '{\"operatinal\":\"Ipsum autem iste qu\",\"clean\":\"Non magnam reiciendi\",\"leakage\":\"Aut quidem earum mol\",\"damage\":\"Architecto dolorem s\",\"require\":\"Sint iure placeat e\",\"remarks\":\"Explicabo Beatae en\"}', '{\"operatinal\":\"Quos eum reprehender\",\"clean\":\"Natus accusamus dolo\",\"leakage\":\"Facilis nostrum ut e\",\"damage\":\"Aliqua Dolore tempo\",\"require\":\"Aut reiciendis ipsa\",\"remarks\":\"Lorem reprehenderit\"}', '{\"operatinal\":\"Aut dignissimos face\",\"clean\":\"Natus ducimus lorem\",\"leakage\":\"Consequat Numquam i\",\"damage\":\"Et possimus autem s\",\"require\":\"Quam eum doloremque\",\"remarks\":\"Ab ipsum ipsam ad c\"}', '{\"operatinal\":\"Magni aliqua Odit e\",\"clean\":\"Dicta reprehenderit\",\"leakage\":\"Magni corrupti mini\",\"damage\":\"Architecto sit veni\",\"require\":\"Non dolorem voluptat\",\"remarks\":\"Nisi anim rerum veli\"}', '{\"operatinal\":\"Omnis aute et sint a\",\"clean\":\"Vel fugiat illo dic\",\"leakage\":\"Impedit voluptatem\",\"damage\":\"Qui et velit sunt ul\",\"require\":\"Consequat Beatae re\",\"remarks\":\"Eaque in do in porro\"}', '{\"operatinal\":\"Aliqua Accusamus al\",\"clean\":\"Sequi libero qui ad\",\"leakage\":\"Vel sint et error id\",\"damage\":\"Inventore dolore ut\",\"require\":\"Dolor odio excepturi\",\"remarks\":\"Eum reprehenderit p\"}', '{\"operatinal\":\"Error id adipisicing\",\"clean\":\"Nihil adipisci dolor\",\"leakage\":\"Optio aspernatur na\",\"damage\":\"Qui consequuntur ill\",\"require\":\"Qui et at unde exerc\",\"remarks\":\"Quod voluptatem ut e\"}', '{\"operatinal\":\"Asperiores porro dol\",\"clean\":\"Nisi dolor rem neque\",\"leakage\":\"Earum culpa perfere\",\"damage\":\"Commodi animi sapie\",\"require\":\"Qui optio error adi\",\"remarks\":\"Voluptate laborum ut\"}', '{\"operatinal\":\"Sint vitae temporibu\",\"clean\":\"Corrupti in dicta d\",\"leakage\":\"Cumque impedit elit\",\"damage\":\"Quidem delectus dol\",\"require\":\"Sint facere optio i\",\"remarks\":\"Culpa dolorem sit\"}', '{\"operatinal\":\"Quasi enim omnis cor\",\"clean\":\"Dolore excepturi fac\",\"leakage\":\"Eos velit et commod\",\"damage\":\"Quisquam modi exerci\",\"require\":\"Aperiam veritatis ul\",\"remarks\":\"Voluptas dolore cons\"}', '{\"operatina\":\"Commodi iure et volu\",\"clean\":\"Sed maxime veniam e\",\"leakag\":\"Tenetur dolores sit\",\"damag\":\"Nostrud deleniti off\",\"require\":\"Doloribus et ut cons\",\"remark\":\"Quia vel qui facilis\"}', '{\"operatinal\":\"Dolores aperiam eum\",\"clean\":\"Molestias velit volu\",\"leakage\":\"Laboriosam possimus\",\"damage\":\"Qui rerum quasi veni\",\"require\":\"Quaerat eos at sed\",\"remarks\":\"Do nostrud et sunt u\"}', '{\"operatinal\":\"Qui dolore itaque qu\",\"clean\":\"Totam esse odit inci\",\"leakage\":\"Reprehenderit omnis\",\"damage\":\"Fugiat est nihil pa\",\"require\":\"Est qui quia tempor\",\"remarks\":\"Facilis autem nisi d\"}', '{\"reading\":\"Amet ut commodi ita\",\"reading_date\":\"2003-10-25\",\"remarks\":\"Ut sit autem maxime\"}', '{\"reading\":\"Proident dignissimo\",\"reading_date\":\"1970-07-18\",\"remarks\":\"Non et pariatur Et\"}', '{\"reading\":\"Accusamus dignissimo\",\"reading_date\":\"1993-02-23\",\"remarks\":\"Ipsum perspiciatis\"}', '{\"reading\":\"Labore doloribus Nam\",\"reading_date\":\"2005-07-17\",\"remarks\":\"Voluptate beatae lab\"}', '{\"reading\":\"Hic eiusmod aliquid\",\"reading_date\":\"2003-09-07\",\"remarks\":\"Libero amet ut sed\"}', '{\"reading\":\"Consectetur eveniet\",\"reading_date\":\"2021-09-06\",\"remarks\":\"Quas fugiat alias il\"}', '{\"reading\":\"Qui fuga Vel distin\",\"reading_date\":\"2015-07-07\",\"remarks\":\"Fugit officia fugia\"}', '{\"reading\":\"Sequi voluptate sed\",\"reading_date\":\"1990-02-22\",\"remarks\":\"Ullam aute excepturi\"}', '{\"reading\":\"Et ex adipisicing es\",\"reading_date\":\"1994-07-25\",\"remarks\":\"Eum nostrum error ve\"}', '{\"reading\":\"Hic minus et dolorem\",\"require\":\"Sint nemo dolores se\"}', '{\"reading\":\"Mollitia omnis ut et\",\"require\":\"Dolore repellendus\"}', '{\"reading\":\"Saepe fuga Ullam ma\",\"require\":\"Harum quidem est qu\"}', '{\"reading\":\"Aut facere autem odi\",\"require\":\"Voluptas accusamus s\"}', '{\"reading\":\"Illum eligendi labo\",\"require\":\"Consequatur pariatu\"}', '{\"reading\":\"Deserunt quis assume\",\"require\":\"Nobis amet labore v\"}', '2022-06-14 08:12:28', '2022-06-14 08:12:28');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_23_112607_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(4, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3),
(3, 'App\\Models\\User', 3),
(5, 'App\\Models\\User', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `assessment` text,
  `requester` int(11) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `tehsil` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `quality_report` text,
  `proposal_date` date DEFAULT NULL,
  `budget_date` date DEFAULT NULL,
  `approval_date` date DEFAULT NULL,
  `completion_date` date DEFAULT NULL,
  `supervisor` int(11) DEFAULT NULL,
  `coordinator` int(11) DEFAULT NULL,
  `installation_date` date DEFAULT NULL,
  `rehabilitation_date` date DEFAULT NULL,
  `maintenance_date` date DEFAULT NULL,
  `beneficiary` text,
  `status` varchar(255) NOT NULL,
  `condition` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `assessment`, `requester`, `district`, `tehsil`, `area`, `quality_report`, `proposal_date`, `budget_date`, `approval_date`, `completion_date`, `supervisor`, `coordinator`, `installation_date`, `rehabilitation_date`, `maintenance_date`, `beneficiary`, `status`, `condition`, `created_at`, `updated_at`) VALUES
(1, 'MacKensie Cox', 'Id in consectetur', 2, 'Aute dolorum aliqua', 'Sit id magnam offici', 'Nulla minim exceptur', 'Ipsum dolor cum in v', '2009-05-07', '2014-12-03', '2002-07-04', '2003-06-18', 3, 3, '2022-06-02', '2025-06-18', '2009-10-22', 'ffuyfufu', 'completed', 'Rehabilitated', '2022-05-27 09:30:48', '2022-06-14 08:12:28'),
(2, 'Perry Bowen', 'Nihil debitis neque', 2, 'Ratione eos qui poss', 'Accusamus nulla null', 'Est voluptatem con', 'Sit quos in odio pr', '1999-02-07', '2022-04-29', '2014-01-26', '1971-12-30', 2, 3, '2016-06-17', '2016-06-17', '2016-06-17', 'Consequatur aut sunt', 'completed', 'OK', '2022-05-27 09:34:49', '2022-06-02 07:17:57'),
(3, 'Inez Rhodes', 'Cum nostrud dolore e', 2, 'Sed qui id accusamus', 'Neque nisi iure cum', 'Natus quo sunt null', 'Ipsum minus dolor q', '2004-01-26', '2001-01-02', '2020-07-01', '2022-06-02', 2, 3, '2022-06-03', '2022-06-03', '2022-06-03', 'ffuyfufu', 'completed', 'OK', '2022-05-27 09:34:59', '2022-06-02 07:33:29'),
(4, 'Dennis Neal', 'Iusto quia quae dolo', 2, 'Quidem dolore ea off', 'Eligendi quia itaque', 'Corporis tempor aute', 'Odio ut veniam tene', '1981-01-25', '2005-12-13', '1991-10-12', '2016-02-04', 2, 3, '2022-06-01', '2025-06-01', '2022-09-01', 'Consequatur aut sunt', 'completed', 'OK', '2022-06-02 07:30:32', '2022-06-02 08:53:20'),
(5, 'Gillian Nelson', 'Ducimus commodo nem', 2, 'Repellendus Cillum', 'Accusamus voluptatem', 'Consequatur expedit', 'Nisi quasi excepteur', '1971-05-08', '2015-04-29', '1970-03-31', '1979-07-15', 2, 3, NULL, NULL, NULL, NULL, 'on-going', NULL, '2022-06-04 07:39:49', '2022-06-04 07:40:13'),
(6, 'Sacha Mathews', 'Odio repudiandae ad', 2, 'Velit eaque dolore r', 'Atque pariatur Reru', 'Adipisicing excepteu', 'Qui numquam voluptat', '2001-10-22', '2015-08-28', '1987-11-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'new', NULL, '2022-06-04 07:39:57', '2022-06-04 07:39:57'),
(7, 'Ramona Talley', 'In proident impedit', 2, 'Fugiat vero fugiat', 'Eius aut amet volup', 'Explicabo Eos debit', 'Explicabo Culpa mod', '1976-01-07', '2013-12-12', '1997-04-09', '1998-11-07', 2, 3, NULL, NULL, NULL, NULL, 'on-going', NULL, '2022-06-04 07:40:23', '2022-06-04 07:41:11'),
(8, 'Kaye Ross', 'Anim ex unde ea inve', 2, 'Minima commodi molli', 'Quia exercitationem', 'Nulla aliquam distin', 'Voluptatem cumque e', '1998-12-10', '1973-07-15', '2007-10-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'new', NULL, '2022-06-04 07:40:27', '2022-06-04 07:40:27'),
(9, 'Lyle Fisher', 'Vero perferendis pra', 2, 'Autem molestias aliq', 'Facilis corrupti do', 'Veniam explicabo I', 'Aut ut quia doloremq', '2001-08-04', '1998-04-22', '2009-05-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'new', NULL, '2022-06-04 07:40:31', '2022-06-04 07:40:31');

-- --------------------------------------------------------

--
-- Table structure for table `rehabilitations`
--

DROP TABLE IF EXISTS `rehabilitations`;
CREATE TABLE IF NOT EXISTS `rehabilitations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `detail` text NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `project_id` (`project_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rehabilitations`
--

INSERT INTO `rehabilitations` (`id`, `project_id`, `detail`, `date`, `created_at`, `updated_at`) VALUES
(2, 1, 'kjhhjhkkjjkhkasdas', '2022-06-18', '2022-06-02 10:24:08', '2022-06-02 10:36:09');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', NULL, NULL),
(2, 'supervisor', 'web', NULL, NULL),
(3, 'coordinator', 'web', NULL, NULL),
(4, 'requester', 'web', NULL, NULL),
(5, 'operator', 'web', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(255) NOT NULL,
  `value` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'dubai', '<h1><strong>Sell a Business in Dubai</strong></h1>\r\n\r\n<p><strong>Dubai&#39;s leading business brokers</strong></p>\r\n\r\n<p>If you&#39;re looking for a business sales agent to help you sell a business in Dubai, UAE, look no further. Sell your company with confidence by working with Dubai&#39;s best business broker, Response Real Estate Brokers.</p>\r\n\r\n<p>Furthermore, Response Real Estate Brokers has collaborated with hundreds of businesses, connecting numerous investors with profitable local prospects.</p>\r\n\r\n<p>Our industry-leading team of business sales agents is made up of the industry&#39;s most experienced and renowned business brokers. It&#39;s no surprise that we&#39;re regarded as the leading business broker agency in the UAE.</p>\r\n\r\n<p>An all-inclusive divestment service</p>\r\n\r\n<p>Response Real Estate Broker&#39;s premier team of business sales agents specializes in the brokering of business sales from AED1-5 Million and above, therefore if you&#39;re wanting to sell a business in Dubai, UAE, we handle the complete sales process from start to finish.</p>\r\n\r\n<p>This includes the following:</p>\r\n\r\n<ul>\r\n	<li>Preparing your company for sale</li>\r\n	<li>Developing a marketing plan</li>\r\n	<li>Locating and addressing potential buyers</li>\r\n	<li>Price and contract details are being negotiated.</li>\r\n	<li>Easing settlement and handover</li>\r\n</ul>\r\n\r\n<p>We are a results-driven firm!</p>\r\n\r\n<p>Our database has a global network of active buyers eager to buy great firms in a variety of industries right away.</p>\r\n\r\n<p><strong>Be represented by skilled negotiators.</strong></p>\r\n\r\n<p>If you want to enter into a strategic position to sell your business in Dubai, UAE, you need a dependable team of business brokers and advisors.</p>\r\n\r\n<ul>\r\n	<li>A team with an unblemished track record.</li>\r\n	<li>A team that is always looking out for your best interests.</li>\r\n</ul>\r\n\r\n<p>Response Real Estate Broker&#39;s business sales agents are former top sales executives with over 14 year of experience in business brokerage. They know exactly how to achieve you the highest possible sale price &ndash; and the most favorable contract terms.</p>\r\n\r\n<p>We stay cool and confident during the negotiation process while acting entirely in your interest, never compromising your strategic position or integrity.</p>\r\n\r\n<p>We work hard to gain a thorough understanding of your business and divestment objectives, ensuring that your most valuable asset provides the exact strategy you deserve.</p>\r\n\r\n<p><strong>The &quot;Advantages of Response Real Estate Broker&quot;</strong></p>\r\n\r\n<p>Response Real Estate Broker&#39;s established buyer database of business professionals, high-level corporates, and investors are included.</p>\r\n\r\n<p>Our listing process ensures that your company is part of a global network of active buyers looking to buy great businesses in Dubai in a variety of industries right away. This is what we call &quot;Advantages of Response Real Estate Broker.&quot;</p>\r\n\r\n<p><strong>Access to a network of high-net-worth individuals</strong></p>\r\n\r\n<p>Response Real Estate Broker has a large network of high-net-worth people and investors.</p>\r\n\r\n<p><strong>Ensure a smooth transaction</strong></p>\r\n\r\n<p>To achieve a smooth and successful transaction, business divestments necessitate a number of specialized services. Response Real Estate Broker collaborates with recognized professionals such as accountants, lawyers, tax consultants, and investment managers.</p>\r\n\r\n<p>Response Real Estate Broker has your best interests at heart. We make certain that you have the necessary professionals on your side at every level of the transaction to guarantee that everything goes smoothly and in a timely manner.</p>\r\n\r\n<p><strong><em>Are you ready to sell your business? Register now for a free, confidential consultation with your local business broker.</em></strong></p>', '2022-04-07 00:04:01', '2022-04-07 03:04:01'),
(2, 'ajman', '<h1><strong>Sell a Business in Umm Ajman</strong></h1>\r\n\r\n<p><strong>Umm Ajman&#39;s leading business brokers</strong></p>\r\n\r\n<p>If you&#39;re looking for a business sales agent to help you sell a business inAjman, UAE, look no further. Sell your company with confidence by working withAjman&#39;s best business broker, Response Real Estate Brokers.</p>\r\n\r\n<p>Furthermore, Response Real Estate Brokers has collaborated with hundreds of businesses, connecting numerous investors with profitable local prospects.</p>\r\n\r\n<p>Our industry-leading team of business sales agents is made up of the industry&#39;s most experienced and renowned business brokers. It&#39;s no surprise that we&#39;re regarded as the leading business broker agency in the UAE.</p>\r\n\r\n<p>An all-inclusive divestment service</p>\r\n\r\n<p>Response Real Estate Broker&#39;s premier team of business sales agents specializes in the brokering of business sales from AED1-5 Million and above, therefore if you&#39;re wanting to sell a business inAjman, UAE, we handle the complete sales process from start to finish.</p>\r\n\r\n<p>This includes the following:</p>\r\n\r\n<ul>\r\n	<li>Preparing your company for sale</li>\r\n	<li>Developing a marketing plan</li>\r\n	<li>Locating and addressing potential buyers</li>\r\n	<li>Price and contract details are being negotiated.</li>\r\n	<li>Easing settlement and handover</li>\r\n</ul>\r\n\r\n<p>We are a results-driven firm!</p>\r\n\r\n<p>Our database has a global network of active buyers eager to buy great firms in a variety of industries right away</p>\r\n\r\n<p><strong>Be represented by skilled negotiators.</strong></p>\r\n\r\n<p>If you want to enter into a strategic position to sell your business inAjman, UAE, you need a dependable team of business brokers and advisors.</p>\r\n\r\n<ul>\r\n	<li>A team with an unblemished track record.</li>\r\n	<li>A team that is always looking out for your best interests.</li>\r\n</ul>\r\n\r\n<p>Response Real Estate Broker&#39;s business sales agents are former top sales executives with over 14 years of experience in business brokerage. They know exactly how to achieve you the highest possible sale price &ndash; and the most favorable contract terms.</p>\r\n\r\n<p>We stay cool and confident during the negotiation process while acting entirely in your interest, never compromising your strategic position or integrity.</p>\r\n\r\n<p>We work hard to gain a thorough understanding of your business and divestment objectives, ensuring that your most valuable asset provides the exact strategy you deserve.</p>\r\n\r\n<p><strong>The &quot;Advantages of Response Real Estate Broker&quot;</strong></p>\r\n\r\n<p>Response Real Estate Broker&#39;s established buyer database of business professionals, high-level corporates, and investors are included.</p>\r\n\r\n<p>Our listing process ensures that your company is part of a global network of active buyers looking to buy great businesses inAjman in a variety of industries right away. This is what we call &quot;Advantages of Response Real Estate Broker.&quot;</p>\r\n\r\n<p><strong>Access to a network of high-net-worth individuals</strong></p>\r\n\r\n<p>Response Real Estate Broker has a large network of high-net-worth people and investors.</p>\r\n\r\n<p><strong>Ensure a smooth transaction</strong></p>\r\n\r\n<p>To achieve a smooth and successful transaction, business divestments necessitate a number of specialized services. Response Real Estate Broker collaborates with recognized professionals such as accountants, lawyers, tax consultants, and investment managers.</p>\r\n\r\n<p>Response Real Estate Broker has your best interests at heart. We make certain that you have the necessary professionals on your side at every level of the transaction to guarantee that everything goes smoothly and in a timely manner.</p>\r\n\r\n<p><strong><em>Are you ready to sell your business? Register now for a free, confidential consultation with your local business broker.</em></strong></p>', '2022-04-07 03:12:46', '2022-04-07 03:14:09'),
(3, 'abu-dhabi', '<h1><strong>Sell a Business in Abu Dhabi</strong></h1>\r\n\r\n<p><strong>Abu Dhabi&#39;s leading business brokers</strong></p>\r\n\r\n<p>If you&#39;re looking for a business sales agent to help you sell a business in Abu Dhabi, UAE, look no further. Sell your company with confidence by working with Abu Dhabi&#39;s best business broker, Response Real Estate Brokers.</p>\r\n\r\n<p>Furthermore, Response Real Estate Brokers has collaborated with hundreds of businesses, connecting numerous investors with profitable local prospects.</p>\r\n\r\n<p>Our industry-leading team of business sales agents is made up of the industry&#39;s most experienced and renowned business brokers. It&#39;s no surprise that we&#39;re regarded as the leading business broker agency in the UAE.</p>\r\n\r\n<p>An all-inclusive divestment service</p>\r\n\r\n<p>Response Real Estate Broker&#39;s premier team of business sales agents specializes in the brokering of business sales from AED1-5 Million and above, therefore if you&#39;re wanting to sell a business in Abu Dhabi, UAE, we handle the complete sales process from start to finish.</p>\r\n\r\n<p>This includes the following:</p>\r\n\r\n<ul>\r\n	<li>Preparing your company for sale</li>\r\n	<li>Developing a marketing plan</li>\r\n	<li>Locating and addressing potential buyers</li>\r\n	<li>Price and contract details are being negotiated.</li>\r\n	<li>Easing settlement and handover</li>\r\n</ul>\r\n\r\n<p>We are a results-driven firm!</p>\r\n\r\n<p>Our database has a global network of active buyers eager to buy great firms in a variety of industries right away.</p>\r\n\r\n<p><strong>Be represented by skilled negotiators.</strong></p>\r\n\r\n<p>If you want to enter into a strategic position to sell your business in Abu Dhabi, UAE, you need a dependable team of business brokers and advisors.</p>\r\n\r\n<ul>\r\n	<li>A team with an unblemished track record.</li>\r\n	<li>A team that is always looking out for your best interests.</li>\r\n</ul>\r\n\r\n<p>Response Real Estate Broker&#39;s business sales agents are former top sales executives with over 14 years of experience in business brokerage. They know exactly how to achieve you the highest possible sale price &ndash; and the most favorable contract terms.</p>\r\n\r\n<p>We stay cool and confident during the negotiation process while acting entirely in your interest, never compromising your strategic position or integrity.</p>\r\n\r\n<p>We work hard to gain a thorough understanding of your business and divestment objectives, ensuring that your most valuable asset provides the exact strategy you deserve.</p>\r\n\r\n<p><strong>The &quot;Advantages of Response Real Estate Broker&quot;</strong></p>\r\n\r\n<p>Response Real Estate Broker&#39;s established buyer database of business professionals, high-level corporates, and investors are included.</p>\r\n\r\n<p>Our listing process ensures that your company is part of a global network of active buyers looking to buy great businesses in Abu Dhabi in a variety of industries right away. This is what we call &quot;Advantages of Response Real Estate Broker.&quot;</p>\r\n\r\n<p><strong>Access to a network of high-net-worth individuals</strong></p>\r\n\r\n<p>Response Real Estate Broker has a large network of high-net-worth people and investors.</p>\r\n\r\n<p><strong>Ensure a smooth transaction</strong></p>\r\n\r\n<p>To achieve a smooth and successful transaction, business divestments necessitate a number of specialized services. Response Real Estate Broker collaborates with recognized professionals such as accountants, lawyers, tax consultants, and investment managers.</p>\r\n\r\n<p>Response Real Estate Broker has your best interests at heart. We make certain that you have the necessary professionals on your side at every level of the transaction to guarantee that everything goes smoothly and in a timely manner.</p>\r\n\r\n<p><strong><em>Are you ready to sell your business? Register now for a free, confidential consultation with your local business broker.</em></strong></p>', '2022-04-07 03:13:57', '2022-04-07 03:13:57'),
(4, 'fujairah', '<h1><strong>Sell a Business in Fujairah</strong></h1>\r\n\r\n<p><strong>Fujairah&#39;s leading business brokers</strong></p>\r\n\r\n<p>If you&#39;re looking for a business sales agent to help you sell a business in Fujairah, UAE, look no further. Sell your company with confidence by working with Fujairah&#39;s best business broker, Response Real Estate Brokers.</p>\r\n\r\n<p>Furthermore, Response Real Estate Brokers has collaborated with hundreds of businesses, connecting numerous investors with profitable local prospects.</p>\r\n\r\n<p>Our industry-leading team of business sales agents is made up of the industry&#39;s most experienced and renowned business brokers. It&#39;s no surprise that we&#39;re regarded as the leading business broker agency in the UAE.</p>\r\n\r\n<p>An all-inclusive divestment service</p>\r\n\r\n<p>Response Real Estate Broker&#39;s premier team of business sales agents specializes in the brokering of business sales from AED1-5 Million and above, therefore if you&#39;re wanting to sell a business in Fujairah, UAE, we handle the complete sales process from start to finish.</p>\r\n\r\n<p>This includes the following:</p>\r\n\r\n<ul>\r\n	<li>Preparing your company for sale</li>\r\n	<li>Developing a marketing plan</li>\r\n	<li>Locating and addressing potential buyers</li>\r\n	<li>Price and contract details are being negotiated.</li>\r\n	<li>Easing settlement and handover</li>\r\n</ul>\r\n\r\n<p>We are a results-driven firm!</p>\r\n\r\n<p>Our database has a global network of active buyers eager to buy great firms in a variety of industries right away.</p>\r\n\r\n<p><strong>Be represented by skilled negotiators.</strong></p>\r\n\r\n<p>If you want to enter into a strategic position to sell your business in Fujairah, UAE, you need a dependable team of business brokers and advisors.</p>\r\n\r\n<ul>\r\n	<li>A team with an unblemished track record.</li>\r\n	<li>A team that is always looking out for your best interests.</li>\r\n</ul>\r\n\r\n<p>Response Real Estate Broker&#39;s business sales agents are former top sales executives with over 14 years of experience in business brokerage. They know exactly how to achieve you the highest possible sale price &ndash; and the most favorable contract terms.</p>\r\n\r\n<p>We stay cool and confident during the negotiation process while acting entirely in your interest, never compromising your strategic position or integrity.</p>\r\n\r\n<p>We work hard to gain a thorough understanding of your business and divestment objectives, ensuring that your most valuable asset provides the exact strategy you deserve.</p>\r\n\r\n<p><strong>The &quot;Advantages of Response Real Estate Broker&quot;</strong></p>\r\n\r\n<p>Response Real Estate Broker&#39;s established buyer database of business professionals, high-level corporates, and investors are included.</p>\r\n\r\n<p>Our listing process ensures that your company is part of a global network of active buyers looking to buy great businesses in Fujairah in a variety of industries right away. This is what we call &quot;Advantages of Response Real Estate Broker.&quot;</p>\r\n\r\n<p><strong>Access to a network of high-net-worth individuals</strong></p>\r\n\r\n<p>Response Real Estate Broker has a large network of high-net-worth people and investors.</p>\r\n\r\n<p><strong>Ensure a smooth transaction</strong></p>\r\n\r\n<p>To achieve a smooth and successful transaction, business divestments necessitate a number of specialized services. Response Real Estate Broker collaborates with recognized professionals such as accountants, lawyers, tax consultants, and investment managers.</p>\r\n\r\n<p>Response Real Estate Broker has your best interests at heart. We make certain that you have the necessary professionals on your side at every level of the transaction to guarantee that everything goes smoothly and in a timely manner.</p>\r\n\r\n<p><strong><em>Are you ready to sell your business? Register now for a free, confidential consultation with your local business broker.</em></strong></p>', '2022-04-07 03:15:28', '2022-04-07 03:15:28'),
(5, 'ras-al-khaimah', '<h1><strong>Sell a Business in Ras Al Khaimah</strong></h1>\r\n\r\n<p><strong>Ras Al Khaimah&#39;s leading business brokers</strong></p>\r\n\r\n<p>If you&#39;re looking for a business sales agent to help you sell a business in Ras Al Khaimah, UAE, look no further. Sell your company with confidence by working with Ras Al Khaimah&#39;s best business broker, Response Real Estate Brokers.</p>\r\n\r\n<p>Furthermore, Response Real Estate Brokers has collaborated with hundreds of businesses, connecting numerous investors with profitable local prospects.</p>\r\n\r\n<p>Our industry-leading team of business sales agents is made up of the industry&#39;s most experienced and renowned business brokers. It&#39;s no surprise that we&#39;re regarded as the leading business broker agency in the UAE.</p>\r\n\r\n<p>An all-inclusive divestment service</p>\r\n\r\n<p>Response Real Estate Broker&#39;s premier team of business sales agents specializes in the brokering of business sales from AED1-5 Million and above, therefore if you&#39;re wanting to sell a business in Ras Al Khaimah, UAE, we handle the complete sales process from start to finish.</p>\r\n\r\n<p>This includes the following:</p>\r\n\r\n<ul>\r\n	<li>Preparing your company for sale</li>\r\n	<li>Developing a marketing plan</li>\r\n	<li>Locating and addressing potential buyers</li>\r\n	<li>Price and contract details are being negotiated.</li>\r\n	<li>Easing settlement and handover</li>\r\n</ul>\r\n\r\n<p>We are a results-driven firm!</p>\r\n\r\n<p>Our database has a global network of active buyers eager to buy great firms in a variety of industries right away.</p>\r\n\r\n<p><strong>Be represented by skilled negotiators.</strong></p>\r\n\r\n<p>If you want to enter into a strategic position to sell your business in Ras Al Khaimah, UAE, you need a dependable team of business brokers and advisors.</p>\r\n\r\n<ul>\r\n	<li>A team with an unblemished track record.</li>\r\n	<li>A team that is always looking out for your best interests.</li>\r\n</ul>\r\n\r\n<p>Response Real Estate Broker&#39;s business sales agents are former top sales executives with over 14 years of experience in business brokerage. They know exactly how to achieve you the highest possible sale price &ndash; and the most favorable contract terms.</p>\r\n\r\n<p>We stay cool and confident during the negotiation process while acting entirely in your interest, never compromising your strategic position or integrity.</p>\r\n\r\n<p>We work hard to gain a thorough understanding of your business and divestment objectives, ensuring that your most valuable asset provides the exact strategy you deserve.</p>\r\n\r\n<p><strong>The &quot;Advantages of Response Real Estate Broker&quot;</strong></p>\r\n\r\n<p>Response Real Estate Broker&#39;s established buyer database of business professionals, high-level corporates, and investors are included.</p>\r\n\r\n<p>Our listing process ensures that your company is part of a global network of active buyers looking to buy great businesses in Ras Al Khaimah in a variety of industries right away. This is what we call &quot;Advantages of Response Real Estate Broker.&quot;</p>\r\n\r\n<p><strong>Access to a network of high-net-worth individuals</strong></p>\r\n\r\n<p>Response Real Estate Broker has a large network of high-net-worth people and investors.</p>\r\n\r\n<p><strong>Ensure a smooth transaction</strong></p>\r\n\r\n<p>To achieve a smooth and successful transaction, business divestments necessitate a number of specialized services. Response Real Estate Broker collaborates with recognized professionals such as accountants, lawyers, tax consultants, and investment managers.</p>\r\n\r\n<p>Response Real Estate Broker has your best interests at heart. We make certain that you have the necessary professionals on your side at every level of the transaction to guarantee that everything goes smoothly and in a timely manner.</p>\r\n\r\n<p><strong><em>Are you ready to sell your business? Register now for a free, confidential consultation with your local business broker.</em></strong></p>', '2022-04-07 03:16:34', '2022-04-07 03:16:34'),
(6, 'sharjah', '<h1><strong>Sell a Business in&nbsp; Sharjah</strong></h1>\r\n\r\n<p><strong>Sharjah&#39;s leading business brokers</strong></p>\r\n\r\n<p>If you&#39;re looking for a business sales agent to help you sell a business in&nbsp; Sharjah, UAE, look no further. Sell your company with confidence by working with&nbsp; Sharjah&#39;s best business broker, Response Real Estate Brokers.</p>\r\n\r\n<p>Furthermore, Response Real Estate Brokers has collaborated with hundreds of businesses, connecting numerous investors with profitable local prospects.</p>\r\n\r\n<p>Our industry-leading team of business sales agents is made up of the industry&#39;s most experienced and renowned business brokers. It&#39;s no surprise that we&#39;re regarded as the leading business broker agency in the UAE.</p>\r\n\r\n<p>An all-inclusive divestment service</p>\r\n\r\n<p>Response Real Estate Broker&#39;s premier team of business sales agents specializes in the brokering of business sales from AED1-5 Million and above, therefore if you&#39;re wanting to sell a business in&nbsp; Sharjah, UAE, we handle the complete sales process from start to finish.</p>\r\n\r\n<p>This includes the following:</p>\r\n\r\n<ul>\r\n	<li>Preparing your company for sale</li>\r\n	<li>Developing a marketing plan</li>\r\n	<li>Locating and addressing potential buyers</li>\r\n	<li>Price and contract details are being negotiated.</li>\r\n	<li>Easing settlement and handover</li>\r\n</ul>\r\n\r\n<p>We are a results-driven firm!</p>\r\n\r\n<p>Our database has a global network of active buyers eager to buy great firms in a variety of industries right away.</p>\r\n\r\n<p><strong>Be represented by skilled negotiators.</strong></p>\r\n\r\n<p>If you want to enter into a strategic position to sell your business in&nbsp; Sharjah, UAE, you need a dependable team of business brokers and advisors.</p>\r\n\r\n<ul>\r\n	<li>A team with an unblemished track record.</li>\r\n	<li>A team that is always looking out for your best interests.</li>\r\n</ul>\r\n\r\n<p>Response Real Estate Broker&#39;s business sales agents are former top sales executives with over 14 years of experience in business brokerage. They know exactly how to achieve you the highest possible sale price &ndash; and the most favorable contract terms.</p>\r\n\r\n<p>We stay cool and confident during the negotiation process while acting entirely in your interest, never compromising your strategic position or integrity.</p>\r\n\r\n<p>We work hard to gain a thorough understanding of your business and divestment objectives, ensuring that your most valuable asset provides the exact strategy you deserve.</p>\r\n\r\n<p><strong>The &quot;Advantages of Response Real Estate Broker&quot;</strong></p>\r\n\r\n<p>Response Real Estate Broker&#39;s established buyer database of business professionals, high-level corporates, and investors are included.</p>\r\n\r\n<p>Our listing process ensures that your company is part of a global network of active buyers looking to buy great businesses in&nbsp; Sharjah in a variety of industries right away. This is what we call &quot;Advantages of Response Real Estate Broker.&quot;</p>\r\n\r\n<p><strong>Access to a network of high-net-worth individuals</strong></p>\r\n\r\n<p>Response Real Estate Broker has a large network of high-net-worth people and investors.</p>\r\n\r\n<p><strong>Ensure a smooth transaction</strong></p>\r\n\r\n<p>To achieve a smooth and successful transaction, business divestments necessitate a number of specialized services. Response Real Estate Broker collaborates with recognized professionals such as accountants, lawyers, tax consultants, and investment managers.</p>\r\n\r\n<p>Response Real Estate Broker has your best interests at heart. We make certain that you have the necessary professionals on your side at every level of the transaction to guarantee that everything goes smoothly and in a timely manner.</p>\r\n\r\n<p><strong><em>Are you ready to sell your business? Register now for a free, confidential consultation with your local business broker.</em></strong></p>', '2022-04-07 03:17:29', '2022-04-07 03:17:29'),
(7, 'umm-al-quwain', '<h1><strong>Sell a Business in Umm Al Quwain</strong></h1>\r\n\r\n<p><strong>Umm Al Quwain&#39;s leading business brokers</strong></p>\r\n\r\n<p>If you&#39;re looking for a business sales agent to help you sell a business in Umm Al Quwain, UAE, look no further. Sell your company with confidence by working with Umm Al Quwain&#39;s best business broker, Response Real Estate Brokers.</p>\r\n\r\n<p>Furthermore, Response Real Estate Brokers has collaborated with hundreds of businesses, connecting numerous investors with profitable local prospects.</p>\r\n\r\n<p>Our industry-leading team of business sales agents is made up of the industry&#39;s most experienced and renowned business brokers. It&#39;s no surprise that we&#39;re regarded as the leading business broker agency in the UAE.</p>\r\n\r\n<p>An all-inclusive divestment service</p>\r\n\r\n<p>Response Real Estate Broker&#39;s premier team of business sales agents specializes in the brokering of business sales from AED1-5 Million and above, therefore if you&#39;re wanting to sell a business in Umm Al Quwain, UAE, we handle the complete sales process from start to finish.</p>\r\n\r\n<p>This includes the following:</p>\r\n\r\n<ul>\r\n	<li>Preparing your company for sale</li>\r\n	<li>Developing a marketing plan</li>\r\n	<li>Locating and addressing potential buyers</li>\r\n	<li>Price and contract details are being negotiated.</li>\r\n	<li>Easing settlement and handover</li>\r\n</ul>\r\n\r\n<p>We are a results-driven firm!</p>\r\n\r\n<p>Our database has a global network of active buyers eager to buy great firms in a variety of industries right away.</p>\r\n\r\n<p><strong>Be represented by skilled negotiators.</strong></p>\r\n\r\n<p>If you want to enter into a strategic position to sell your business in Umm Al Quwain, UAE, you need a dependable team of business brokers and advisors.</p>\r\n\r\n<ul>\r\n	<li>A team with an unblemished track record.</li>\r\n	<li>A team that is always looking out for your best interests.</li>\r\n</ul>\r\n\r\n<p>Response Real Estate Broker&#39;s business sales agents are former top sales executives with over 14 years of experience in business brokerage. They know exactly how to achieve you the highest possible sale price &ndash; and the most favorable contract terms.</p>\r\n\r\n<p>We stay cool and confident during the negotiation process while acting entirely in your interest, never compromising your strategic position or integrity.</p>\r\n\r\n<p>We work hard to gain a thorough understanding of your business and divestment objectives, ensuring that your most valuable asset provides the exact strategy you deserve.</p>\r\n\r\n<p><strong>The &quot;Advantages of Response Real Estate Broker&quot;</strong></p>\r\n\r\n<p>Response Real Estate Broker&#39;s established buyer database of business professionals, high-level corporates, and investors are included.</p>\r\n\r\n<p>Our listing process ensures that your company is part of a global network of active buyers looking to buy great businesses in Umm Al Quwain in a variety of industries right away. This is what we call &quot;Advantages of Response Real Estate Broker.&quot;</p>\r\n\r\n<p><strong>Access to a network of high-net-worth individuals</strong></p>\r\n\r\n<p>Response Real Estate Broker has a large network of high-net-worth people and investors.</p>\r\n\r\n<p><strong>Ensure a smooth transaction</strong></p>\r\n\r\n<p>To achieve a smooth and successful transaction, business divestments necessitate a number of specialized services. Response Real Estate Broker collaborates with recognized professionals such as accountants, lawyers, tax consultants, and investment managers.</p>\r\n\r\n<p>Response Real Estate Broker has your best interests at heart. We make certain that you have the necessary professionals on your side at every level of the transaction to guarantee that everything goes smoothly and in a timely manner.</p>\r\n\r\n<p><strong><em>Are you ready to sell your business? Register now for a free, confidential consultation with your local business broker.</em></strong></p>', '2022-04-07 03:18:26', '2022-04-07 03:18:26'),
(8, 'how-it-works', 'how-it-work1.webp,how-it-work2.webp', '2022-04-16 03:07:53', '2022-04-16 03:07:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` int(11) DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `mobile` varchar(63) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interests` text COLLATE utf8mb4_unicode_ci,
  `message` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `city`, `address`, `mobile`, `price`, `interests`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Avye Guzman', 'superadmin@admin.com', NULL, '$2y$10$6Qazo7oQtAuklOL34mPZWORpUW6J/e7A7QNtrBjZjgbx.QOMYUUre', NULL, 5, 'Qui culpa dolore la', 'Magna delectus repr', NULL, NULL, NULL, 0, '2022-04-04 03:01:13', '2022-04-04 03:01:13'),
(2, 'Ross Horn', 'kifomady@mailinator.com', NULL, '$2y$10$Fi.66IpgLLVaaBklsEU.AuZd3xPK6A41.ysrYoK89EOw1JjMYFHse', NULL, NULL, 'Aliquid voluptatum m', 'Ut adipisci quod et', NULL, NULL, NULL, 0, '2022-05-27 08:06:46', '2022-05-27 09:14:45'),
(3, 'Ira Clementss', 'hubaga@mailinator.coms', NULL, '$2y$10$B6tFILYmJwtbu1Yvvw.12uMpV4v1sGxHwLX6W8KqstGPQxpEH0kxe', NULL, NULL, 'Expedita velit qui ms', 'Ad minus vitae incids', NULL, NULL, NULL, 0, '2022-05-27 08:07:53', '2022-05-27 09:07:10'),
(4, 'Wynne Lee', 'dawysapope@mailinator.com', NULL, '$2y$10$KyomKKFM6FmnlSVqTy6A.eroFFNVjOUTIkHU9izusLT63GD58LWiy', NULL, NULL, 'Laborum excepturi et', 'Qui nisi cumque quo', NULL, NULL, NULL, 0, '2022-06-14 04:55:48', '2022-06-14 04:55:48');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complaints`
--
ALTER TABLE `complaints`
  ADD CONSTRAINT `project_complaints` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`);

--
-- Constraints for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD CONSTRAINT `project_maintenance` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rehabilitations`
--
ALTER TABLE `rehabilitations`
  ADD CONSTRAINT `project_rehabilitations` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
