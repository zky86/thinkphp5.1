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
  `imgurl` varchar(1000) DEFAULT NULL COMMENT '上传图片路径',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=90 DEFAULT CHARSET=utf8;

/*Data for the table `comments` */

insert  into `comments`(`id`,`name`,`tel`,`content`,`timer`,`imgurl`) values (27,'小三','1345666666','这里是风妹啊  ','2018-11-16 16:18:02',NULL),(46,'郑康源','159','这里是测试内容','2018-11-19 10:07:56',NULL),(45,'万丈测试','134','5555555555','2018-11-16 18:18:18',NULL),(42,'happy哎哎哎','111','内容啊啊啊 ','2018-11-16 16:31:17',NULL),(43,'3','342','323','2018-11-16 16:39:19',NULL),(44,'t3','34t','54353','2018-11-16 16:39:35',NULL),(40,'测试','232','3232','2018-11-16 16:28:26',NULL),(38,'测试','24','最终测试','2018-11-16 16:27:22',NULL),(41,'测试','热武器','认为人','2018-11-16 16:28:48',NULL),(47,'测试翻页','12','测试法法师测试法法师测试法法师测试法法师测试法法师','2018-11-19 10:37:30',NULL),(89,'66','77','888','2018-11-21 14:10:00','20181121\\396d3bd19fc6b70879f71486f893a453.png');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '用户名',
  `password` varchar(255) DEFAULT NULL COMMENT '密码',
  `timer` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '注册时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `user` */

insert  into `user`(`id`,`name`,`password`,`timer`) values (1,'小三','123','2018-11-20 10:39:51'),(2,'小三','123','2018-11-20 17:59:53'),(3,'测试','123','2018-11-20 18:00:03'),(4,'小三','123','2018-11-20 18:04:51'),(5,'2','123','2018-11-20 18:05:07'),(6,'小三3','123','2018-11-20 18:06:58'),(7,'小三d','123','2018-11-20 18:13:35'),(8,'小三5','123','2018-11-20 18:13:38'),(9,'小三u7','8','2018-11-20 18:26:47');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
