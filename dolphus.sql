-- MySQL dump 10.13  Distrib 5.7.14, for Win64 (x86_64)
--
-- Host: localhost    Database: dolphus
-- ------------------------------------------------------
-- Server version	5.7.14

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
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post` (
  `post_ID` mediumint(9) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `sources` varchar(255) DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`post_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` VALUES (10,'Sticky Footer with Flexbox','    <p>Today I learned how to create a footer that sticks to the bottom of your page using Flexbox. This is the same method I used when styling the footer of this site. It\'s super simple, and much less frustrating than fiddling with positioning and margins.</p>\r\n    <p>Check it out:</p>\r\n    <div class=\"code-html\">\r\n      <h1>HTML:</h1>\r\n      <pre class=\"prettyprint lang-html linenums\">\r\n<xmp><body>\r\n  <div class=\"content\">\r\n    <p>Content</p>\r\n  </div>\r\n  <footer class=\"footer\"></footer>\r\n</body></xmp></pre>\r\n    </div>\r\n    <div class=\"code-css\">\r\n      <h1>CSS:</h1>\r\n      <pre class=\"prettyprint lang-css linenums\">\r\nhtml {\r\n  height: 100%;\r\n}\r\n\r\nbody {\r\n  min-height: 100%;\r\n  display: flex;\r\n  flex-direction: column;\r\n}\r\n\r\n.content {\r\n  flex: 1;\r\n}</pre>\r\n    </div>','css, html, flexbox','https://css-tricks.com/couple-takes-sticky-footer/','2017-04-20 19:59:11','2017-04-20 19:59:11'),(18,'Test','Testing this htmlspecialchars().\r\n\r\n&lt;a href=&quot;#&quot;&gt;www.google.com&lt;/a&gt;\r\n&lt;div&gt;\r\n  &lt;h1&gt;Testing&lt;/h1&gt;\r\n&lt;/div&gt;','test','www.google.com','2017-04-21 18:47:57','2017-04-21 18:47:57'),(13,'PHP Echo Shorthand','<p>Today I learned a shorthand syntax for the PHP echo statement. It looks something like this:</p>\r\n\r\n<div class=\"code-php\">\r\n<h1>PHP:</h1>\r\n<pre class=\"prettyprint lang-php linenums\">\r\n// The long way\r\n&lt;?php echo $var; ?&gt;\r\n\r\n// The short way\r\n&lt;?= $var; ?&gt;\r\n</pre>\r\n\r\n</div>\r\n','php','','2017-04-21 17:13:35','2017-04-21 17:13:35');
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-21 16:53:40
