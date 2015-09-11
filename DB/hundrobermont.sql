-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: localhost    Database: hundrobermont
-- ------------------------------------------------------
-- Server version	5.6.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(64) NOT NULL,
  `texte` text,
  `slug` varchar(64) NOT NULL,
  `rubriques_id` int(10) unsigned NOT NULL,
  `photo` varchar(64) DEFAULT NULL,
  `home` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Articles_Rubriques_idx` (`rubriques_id`),
  CONSTRAINT `fk_Articles_Rubriques` FOREIGN KEY (`rubriques_id`) REFERENCES `rubriques` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (2,'Notre méthode de travail 2','<p><span lang=\"\\\"FR\\\"\">Nous travaillons d’une manière positive, c’est-à-dire en privilégiant les récompenses plutôt que les sanctions. </span><span lang=\"\\\"FR\\\"\">Mais tout mauvais comportement tel que : agressivité, aboiements intempestifs… sera fermement réprimandé.</span></p><p><span lang=\"\\\"FR\\\"\">Nos objectifs sont l’éducation et l’apprentissage du programme d’obéissance reconnu par l’URCSH.</span></p><p class=\"\\\"MsoNormal\\\"\"><span lang=\"\\\"FR\\\"\">Mais attention, pas d’obéissance sans discipline ! Le maitre doit s’investir dans le travail. L’instructeur est là pour le guider dans sa démarche, pas pour le remplacer.</span></p>','notre-methode-de-travail',2,'',0,NULL,NULL),(3,'Nos installations','<ul><li>Accès facile</li><li>Parking aisé</li><li>Terrain spacieux clôturé</li><li>Local accueillant</li><li>Toilettes P.M.R.</li><li>Terrasse</li><li>Possibilité de promenade aux alentours</li></ul>','nos-installations',2,'nos-installations.jpg',0,NULL,NULL),(4,'Le comité','<ul><li><span lang=\"\\&quot;\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;FR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\&quot;\">Présidente :     Roland Chantal ( depuis le 16/10/2001)</span></li><li><span lang=\"\\&quot;\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;FR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\&quot;\">Secrétaire :      Deltour Nadine ( depuis 2004)</span></li><li><span lang=\"\\&quot;\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;FR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\&quot;\">Trésorière :      Matwitchouck Magali ( depuis le 14/12/2012)</span></li><li><span lang=\"\\&quot;\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;FR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\&quot;\">Vice-trésorier : Joly willy ( depuis le 27/10/2007)</span></li></ul>','le-comite',2,NULL,0,NULL,NULL),(5,'L\'historique de notre club','<p><span lang=\"\\&quot;\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;FR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\&quot;\">Le club a été fondé le 5 octobre 1922. Il est directement affilié à l’Union Royale Cynologique de la Saint-Hubert (URCSH), sous le matricule 0080 et appelé « Le Chien de Défense de Robermont »</span></p><p><span lang=\"\\&quot;\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;FR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\&quot;\">Ses activités ont débuté sur un terrain jouxtant le cimetière de Robermont, rue de Herve. En 1974, suite à l’extension de ce dernier, le club s’est établi rue Malvaux à Grivegnée, sur un terrain privé. Jusqu’à cette époque, on travaillait en « ring », ce qui explique la dénomination « Chien de Défense ». On y dressait des bergers allemands et des bergers malinois.</span></p><p><span lang=\"\\&quot;\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;FR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\&quot;\">En 1986, l’ancienne buvette est remplacée par un nouveau local, construit par l’équipe et inauguré le 30 janvier 1993.</span></p><p><span lang=\"\\&quot;\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;FR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\&quot;\">Suite à l’évolution et à la demande des amateurs, une section « obéissance » voit le jour le 6 septembre 1991. L’accroissement du nombre de membres nécessite un nouvel horaire d’entrainement. Il prend cours le 14 juillet 1992. A partir de ce moment, les entrainements en ring ont lieu les mardis et les jeudis et ceux des « compagnons » les mercredis et dimanches.</span></p><p><span lang=\"\\&quot;\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;FR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\&quot;\">Le 31 décembre 1996, la section « ring » est définitivement fermée. Plus aucun coucours 1B n’aura désormais lieu.</span></p><p><span lang=\"\\&quot;\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;FR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\&quot;\">En 1996, le club opte pour le statut d’ASBL. </span></p><p><span lang=\"\\&quot;\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;FR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\&quot;\">En aout 2007, suite à la vente du terrain rue Malvaux, l’ASBL est contrainte de chercher un nouvel emplacement.</span></p><p><span lang=\"\\&quot;\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;FR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\&quot;\">En mai 2012, le club s’installe sur un terrain communal, situé voie Mélotte à Grivegnée. Grâce à une équipe dynamique, le club ne cesse de prospérer.</span></p><p><span lang=\"\\&quot;\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;FR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\&quot;\">Le 3 aout 2012, l’URCSH accepte la nouvelle dénomination du club : </span><span lang=\"\\&quot;\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;FR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\&quot;\">EDUCATION CANINE « LE CHIEN DE ROBERMONT » ASBL</span></p><p><span lang=\"\\&quot;\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;FR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\&quot;\">Le comité actuel se compose de </span></p><p><span lang=\"\\&quot;\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;FR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\&quot;\">&#8211; Présidente :     Roland Chantal ( depuis le 16/10/2001)</span></p><p><span lang=\"\\&quot;\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;FR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\&quot;\">&#8211; Secrétaire :      Deltour Nadine ( depuis 2004)</span></p><p><span lang=\"\\&quot;\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;FR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\&quot;\">&#8211; Trésorière :      Matwitchouck Magali ( depuis le 14/12/2012)</span></p><p><span lang=\"\\&quot;\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;FR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\&quot;\">&#8211; Vice-trésorier : Joly willy ( depuis le 27/10/2007)</span></p>','l-histoire-de-notre-club',2,NULL,0,NULL,NULL),(6,'Horaire des cours','<h1>Puppies de 3 à 6 mois</h1><p>Mercredi: 17h30 – 18h00</p><p>Dimanche: 9h00 – 9h30</p><hr /><h1>Groupe + de 6 mois</h1><p>Mercredi: 18h30 – 19h30</p><p>Dimanche: 9h30 – 10h30</p><hr /><h1>Groupe 2 et 3</h1><p>Mercredi: 19h30 – 20h30</p><p>Dimanche: 10h30 – 11h30</p><hr /><h1>Groupe Concours</h1><p>Mercredi: 20h30 – 21h30</p><p>Dimanche: 11h30 – 12h30</p>','horaire-des-cours',6,'horaire-des-cours.jpg',1,'2015-09-10 16:08:50',NULL),(7,'Déroulement des cours','<p><span lang=\"\\&quot;\\\\&quot;FR\\\\&quot;\\&quot;\">Les cours ont lieu 2 fois par semaine : mercredi soir et dimanche matin.</span></p><p><span lang=\"\\&quot;\\\\&quot;FR\\\\&quot;\\&quot;\">Le montant de l’inscription est de 50 euros par an et par chien. </span><span lang=\"\\&quot;\\\\&quot;FR\\\\&quot;\\&quot;\">Pour les chiens supplémentaires de propriétaires vivant à la même adresse, il s’élève à 25 euros par an et par chien.</span></p><p><span lang=\"\\&quot;\\\\&quot;FR\\\\&quot;\\&quot;\">Les entrainements coutent 2 euros la séance. Ils seront payés spontanément au comptoir avant l’entrainement. ( 1 euro pour les chiens de 3 à 6 mois).</span></p><p><span lang=\"\\&quot;\\\\&quot;FR\\\\&quot;\\&quot;\">La première fois, munissez-vous </span></p><ul><li><span lang=\"\\&quot;\\\\&quot;FR\\\\&quot;\\&quot;\"> </span><span lang=\"\\&quot;\\\\&quot;FR\\\\&quot;\\&quot;\">du passeport du chien (carte de vaccination)</span></li><li><span lang=\"\\&quot;\\\\&quot;FR\\\\&quot;\\&quot;\"> </span><span lang=\"\\&quot;\\\\&quot;FR\\\\&quot;\\&quot;\">d’une laisse d’un mètre 20 plus ou moins</span></li><li><span lang=\"\\&quot;\\\\&quot;FR\\\\&quot;\\&quot;\"> </span><span lang=\"\\&quot;\\\\&quot;FR\\\\&quot;\\&quot;\">d’un collier (pas de harnais)</span></li><li><span lang=\"\\&quot;\\\\&quot;FR\\\\&quot;\\&quot;\"> </span><span lang=\"\\&quot;\\\\&quot;FR\\\\&quot;\\&quot;\">d’un jouet</span></li><li><span lang=\"\\&quot;\\\\&quot;FR\\\\&quot;\\&quot;\">de friandises.</span></li></ul><p><span lang=\"\\&quot;\\\\&quot;FR\\\\&quot;\\&quot;\">Vous réglez votre séance et si notre méthode de travail vous satisfait, vous payez le montant de l’affiliation au cours suivant. Vous pouvez vous affilier dès la première fois si votre décision est prise.</span></p>','deroulement-des-cours',3,NULL,0,NULL,NULL),(8,'Evenement 1','<p>Cras tortor lorem, imperdiet eget justo sed, tristique dictum lectus. Nullam ligula ex, blandit quis luctus nec, porta eu sem. Etiam rhoncus accumsan tellus. Phasellus tempor ante ac sapien suscipit faucibus.</p>','evenement-1',4,NULL,0,NULL,NULL),(15,'Gallerie photo',NULL,'gallerie-photo',5,NULL,0,NULL,NULL),(16,'hundetraining',NULL,'hundetraining',5,'hundetraining.jpg',0,NULL,NULL),(18,'Formulaire de contact',NULL,'formulaire-de-contact',6,NULL,0,NULL,NULL);
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rubriques`
--

DROP TABLE IF EXISTS `rubriques`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rubriques` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(64) NOT NULL,
  `texte` text,
  `slug` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rubriques`
--

LOCK TABLES `rubriques` WRITE;
/*!40000 ALTER TABLE `rubriques` DISABLE KEYS */;
INSERT INTO `rubriques` VALUES (1,'Accueil','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum dolor vel risus congue ornare. Donec tristique egestas nisi. Suspendisse porttitor eleifend finibus. Mauris venenatis vehicula ante, a ornare magna hendrerit quis. Integer arcu tellus, consequat vitae pretium at, finibus lobortis justo. Praesent ac turpis et nisi cursus convallis. Duis sed massa at risus luctus volutpat scelerisque eu arcu.','accueil'),(2,'A propos','Ut rhoncus imperdiet nulla id hendrerit. Maecenas pharetra, urna quis feugiat ornare, massa erat feugiat nisl, sit amet consequat neque urna non odio. Curabitur malesuada, quam nec ultrices semper, erat libero malesuada nisi, id varius massa quam eget ipsum. Morbi elit magna, placerat nec arcu at, ultricies dignissim massa. Aenean finibus, quam sit amet molestie facilisis, odio nibh laoreet risus, quis tincidunt mi magna vel turpis.','a-propos'),(3,'Les cours',' Morbi elit magna, placerat nec arcu at, ultricies dignissim massa. Aenean finibus, quam sit amet molestie facilisis, odio nibh laoreet risus, quis tincidunt mi magna vel turpis. Pellentesque tempus, ligula sed lobortis interdum, ante purus posuere diam, ac accumsan justo nisi mollis mauris. Donec eget gravida purus. Praesent viverra suscipit orci eu elementum. Vestibulum sit amet sollicitudin eros.','les-cours'),(4,'Agenda','Sed magna sapien, interdum ut fringilla vitae, efficitur non orci. Vestibulum lobortis, justo non rhoncus lobortis, ex odio laoreet lorem, sit amet venenatis lorem dolor maximus arcu. Donec felis elit, pharetra a rutrum sed, sodales vel purus. Aenean luctus cursus libero sed dignissim.','agenda'),(5,'Medias','Nunc tortor lorem, ullamcorper quis ligula vitae, scelerisque ultrices risus. Aliquam nulla elit, ornare vitae tellus ut, hendrerit laoreet risus. Nunc in purus lacinia, tristique erat at, molestie diam. Cras sollicitudin elit a neque ultrices luctus. Duis nec dui pellentesque, pretium leo sit amet, porttitor nibh. Nulla consectetur sem eget urna pretium fermentum.','medias'),(6,'Contacts','Integer lacinia viverra imperdiet. Sed sit amet sagittis magna. Fusce mattis in dolor accumsan accumsan. Vestibulum vel mi urna. Ut mi enim, hendrerit at sagittis ut, pulvinar eget lorem. Mauris eu lectus in libero suscipit convallis id ut tortor. Integer placerat nunc in sapien mollis, vitae egestas nunc placerat.','contacts');
/*!40000 ALTER TABLE `rubriques` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'$2y$10$IgHz5UXXyoDvT7EZ8Mr.l.HX9adTIcPluLvxulEJTvemahOmj1cW2','AvgsU4e6O0FKFQouVnDr0bA1hxBKAVGcGrSvj4hwC0Ua5eDFW6Do1sPzpBC8','2015-09-11 11:34:09','2015-09-11 12:57:30','Chanteux','nathanchanteux@gmail.com');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-09-11 17:01:38
