/*
SQLyog Ultimate v11.27 (32 bit)
MySQL - 5.5.47 : Database - tp5
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`tp5` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `tp5`;

/*Table structure for table `comments` */

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(20) DEFAULT NULL COMMENT '姓名',
  `tel` varchar(20) DEFAULT NULL COMMENT '电话',
  `content` varchar(1000) DEFAULT NULL COMMENT '留言内容',
  `timer` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '时间戳',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

/*Data for the table `comments` */

insert  into `comments`(`id`,`name`,`tel`,`content`,`timer`) values (27,'小三','1345666666','这里是风妹啊  ','2018-11-16 16:18:02'),(46,'郑康源','159','这里是测试内容','2018-11-19 10:07:56'),(45,'万丈测试','134','5555555555','2018-11-16 18:18:18'),(42,'happy哎哎哎','111','内容啊啊啊 ','2018-11-16 16:31:17'),(43,'3','342','323','2018-11-16 16:39:19'),(44,'t3','34t','54353','2018-11-16 16:39:35'),(40,'测试','232','3232','2018-11-16 16:28:26'),(38,'测试','24','最终测试','2018-11-16 16:27:22'),(41,'测试','热武器','认为人','2018-11-16 16:28:48'),(47,'测试翻页','12','测试法法师测试法法师测试法法师测试法法师测试法法师','2018-11-19 10:37:30'),(48,'打发','32让',' 32','2018-11-19 10:40:10');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
