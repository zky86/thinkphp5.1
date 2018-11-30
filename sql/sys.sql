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
) ENGINE=MyISAM AUTO_INCREMENT=93 DEFAULT CHARSET=utf8;

/*Data for the table `comments` */

insert  into `comments`(`id`,`name`,`tel`,`content`,`timer`,`imgurl`) values (27,'小三','1345666666','这里是风妹啊  ','2018-11-16 16:18:02',NULL),(46,'郑康源','159','这里是测试内容','2018-11-19 10:07:56',NULL),(45,'万丈测试','134','5555555555','2018-11-16 18:18:18',NULL),(42,'happy哎哎哎','111','内容啊啊啊 ','2018-11-16 16:31:17',NULL),(43,'3','342','323','2018-11-16 16:39:19',NULL),(44,'t3','34t','54353','2018-11-16 16:39:35',NULL),(40,'测试','232','3232','2018-11-16 16:28:26',NULL),(38,'测试','24','最终测试','2018-11-16 16:27:22',NULL),(41,'测试','热武器','认为人','2018-11-16 16:28:48',NULL),(47,'测试翻页','12','测试法法师测试法法师测试法法师测试法法师测试法法师','2018-11-19 10:37:30',NULL),(91,'75555555','9','8','2018-11-21 14:20:30','20181121\\61bba4856dd15c5db54154c39c0d6b9e.png'),(90,'6','7','78','2018-11-21 14:19:49',''),(89,'66','77','888','2018-11-21 14:10:00','20181121\\396d3bd19fc6b70879f71486f893a453.png'),(92,'4','5','r','2018-11-21 19:52:19','20181121\\632c1801f6eb3bde54c75156a3fc3275.png');

/*Table structure for table `news` */

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL COMMENT '新闻标题',
  `des` varchar(130) DEFAULT NULL COMMENT '新闻简述',
  `content` varchar(10000) DEFAULT NULL COMMENT '新闻内容',
  `timer` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '发布时间',
  `type` int(11) DEFAULT NULL COMMENT '新闻类别',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

/*Data for the table `news` */

insert  into `news`(`id`,`title`,`des`,`content`,`timer`,`type`) values (1,'想偷歼-20的美军部队啥来头?扮假想敌 ','参考消息网11月21日报道美国海军学会网站近日发表了美海军格拉汉姆·斯卡布罗中校题为《解决美海军航空','文章称，目前担当美海航假想敌部队（又称“红军”）的人员大多是海军预备役（退役）飞行员，他们所使用的多是20世纪70年代就已服役的F/A-18A和F/A-18C“大黄蜂”战斗机，以及更古老一些（越战时期）的F-5N战斗机，同时少量装备着20世纪70年代服役的F-16N战斗机。而要让这些“老古董”保持最佳飞行状态，需要耗费大量的经费，还得不断升级配套航电系统。','2018-11-21 19:26:57',1),(2,'《无名之辈》发“不甘平凡”特辑 被赞年度','荒诞喜剧电影《无名之辈》自从上映之初口碑一路走高，从开始的豆瓣评分8.0一天上涨到8.4分，创同档期','视频开篇便出现戳心文案，“你是否有过，想放弃自己的时刻？”接着便展示了任素汐寻死的决心：“你有多想当大哥，我就有多想死；你有多想结婚，我就有多想死。”接下来这些“不想被别人看见的一面”如排山倒海般涌来：陈建斌被女儿辱骂，任素汐尿失禁，章宇的谎言被戳穿等等场景，将每个人苦苦支撑的面具完全撕下，把自以为是的自尊完全撕开，让每个人血淋淋的伤疤展现在观众面前。每个角色经历过误解、决裂、绝望之后，冷冻的心渐渐打开了心门，任何一种触及灵魂的深刻感情都是从理解对方的痛苦开始的。所以从这一刻开始他们从“毒舌残废女和憨批劫匪男”变成了“马嘉旗和胡广生”；陈建斌和自己的女儿学会了坐下和解；章宇潘斌龙为了自己的梦想奋力一搏……他们鼓起勇气拾回自尊，尽管他们面对的依旧是生活的惨淡，但是他们学会了在生活之中与痛苦和解，在绝望之中寻找坦然。看完这支视频观众大呼：“每个人物鲜活的出现在自己眼前，不甘平凡倔强生长的样子令人感动！','2018-11-21 19:27:53',2),(3,'视频开篇便出现戳心文案，“你是否有过，想','日，汪涵在综艺《野生厨房》中将“火箭少女”组合误称为“火车少女”，并将其歌曲《燃烧我的卡路里》记成小','作为七零后，汪涵与李诞林彦俊在流行文化上存在代沟，不仅将歌曲唱错，更是把“火箭少女”误称为“火车少女”。李诞随后解释了组合名字，并唱起《燃烧我的卡路里》，但汪涵随后说：“这不是小S唱的吗？”逗笑了后座的林彦俊。李诞对镜头解释：“涵哥这是开玩笑的。”但汪涵又说：“我不是开玩笑，我是真没想起来。”让李诞感慨：“哥你放我一条生路好不好？涵哥你是没微博不怕挨骂。','2018-11-21 19:28:51',3),(4,'333','44','444','2018-11-22 11:38:14',1),(5,'测试 ','123','322','2018-11-22 12:00:49',2),(6,'eew','rr','r4r','2018-11-22 12:02:18',2),(7,'34r','433','43','2018-11-22 16:05:13',4),(8,'5','5','<b><i><u><strike>tewtewewtewt<img src=\"http://tp.local/static/common/images/face/1.gif\" alt=\"[嘻嘻]\"><img src=\"http://tp.local/static/common/images/face/45.gif\" alt=\"[怒骂]\"><img src=\"http://tp.local/static/common/images/face/40.gif\" alt=\"[晕]\"><img src=\"http://tp.local/static/common/images/face/0.gif\" alt=\"[微笑]\"></strike></u></i></b>','2018-11-22 17:06:37',1),(9,'女安检员随后遭到投诉，并发文道歉，称：“致歉信大家好，我是一名普通安检员，由于我在微博艾特信，所发布','女安检员随后遭到投诉，并发文道歉，称：“致歉信大家好，我是一名普通安检员，由于我在微博艾特信，所发布的一些不恰当的微博内容，给信造成了身心伤害，也给单位的声誉形象造成了损害，这件事让单位和同事丢脸，也','<p><span style=\"text-align: justify;\">女安检员随后遭到投诉，并发文道歉，称：“致歉信大家好，我是一名普通安检员，由于我在微博艾特信，所发布的一些不恰当的微博内容，给信造成了身心伤害，也给单位的声誉形象造成了损害，这件事让单位和同事丢脸，也让外人对我们这一行感到质疑，工作就是工作，不能想着其他事情，不能做与岗位无关的事，对于自身的行为，我深感痛心与后悔，我应当遵循职业道德，不违反职业操守，不发表，不评论不和谐的微博内容，我愿意承担一切责任，接受单位及公众对我的监督，深刻</span></p>','2018-11-22 17:20:39',2),(10,'女安检员随后遭到投诉，并发文道歉，称：“致歉信大家好，我是一名普通安检员，由于我在微博艾特信，所发布','女安检员随后遭到投诉，并发文道歉，称：“致歉信大家好，我是一名普通安检员，由于我在微博艾特信，所发布的一些不恰当的微博内容，给信造成了身心伤害，也给单位的声誉形象造成了损害，这件事让单位和同事丢脸，也让外人对我们这一行感到质疑，工作就是工作，不能想着其他事情，','<p><span style=\"text-align: justify;\">女安检员随后遭到投诉，并发文道歉，称：“致歉信大家好，我是一名普通安检员，由于我在微博艾特信，所发布的一些不恰当的微博内容，给信造成了身心伤害，也给单位的声誉形象造成了损害，这件事让单位和同事丢脸，也让外人对我们这一行感到质疑，工作就是工作，不能想着其他事情，不能做与岗位无关的事，对于自身的行为，我深感痛心与后悔，我应当遵循职业道德，不违反职业操守，不发表，不评论不和谐的微博内容，我愿意承担一切责任，接受单位及公众对我的监督，深刻</span></p>','2018-11-22 17:21:17',4),(11,'女安检员随后遭到投诉，并发文道歉，称：“致歉信大家好，我是一名普通安检员，由于我在微博艾特信，所发布','女安检员随后遭到投诉，并发文道歉，称：“致歉信大家好，我是一名普通安检员，由于我在微博艾特信，所发布的一些不恰当的微博内容，给信造成了身心伤害，也给单位的声誉形象造成了损害，这件事让单位和同事丢脸，也让外人对我们这一行感到质疑，工作就是工作，不能想着其他事情，','<p><span style=\"text-align: justify;\">女安检员随后遭到投诉，并发文道歉，称：“致歉信大家好，我是一名普通安检员，由于我在微博艾特信，所发布的一些不恰当的微博内容，给信造成了身心伤害，也给单位的声誉形象造成了损害，这件事让单位和同事丢脸，也让外人对我们这一行感到质疑，工作就是工作，不能想着其他事情，不能做与岗位无关的事，对于自身的行为，我深感痛心与后悔，我应当遵循职业道德，不违反职业操守，不发表，不评论不和谐的微博内容，我愿意承担一切责任，接受单位及公众对我的监督，深刻<img src=\"http://tp.local/static/common/images/face/1.gif\" alt=\"[嘻嘻]\"></span></p>','2018-11-22 17:21:40',1),(12,'都','2323','单打独斗','2018-11-22 17:47:55',1),(13,'5','','<img src=\"http://tp.local/static/common/images/face/8.gif\" alt=\"[挤眼]\"><img src=\"http://tp.local/static/common/images/face/1.gif\" alt=\"[嘻嘻]\"><img src=\"http://tp.local/static/common/images/face/36.gif\" alt=\"[酷]\">','2018-11-22 18:33:19',1),(14,'w','w','w','2018-11-22 18:33:49',2),(15,'近平抵达布宜诺斯艾利斯 出席二十国集团领导人第十三次峰会 并对阿根廷共和国进行国事访问','新华社布宜诺斯艾利斯11月29日电 当地时间11月29日，国家主席习近平抵达布宜诺斯艾利斯，出席即将举行的二十国集团领导人第十三次峰会，并对阿根廷共和国进行国事访问。','<p style=\"text-align: justify;\"><img src=\"http://tp.local/static/common/images/face/0.gif\" alt=\"[微笑]\"><img src=\"http://tp.local/static/common/images/face/0.gif\" alt=\"[微笑]\">当地时间20时05分许，习近平乘坐的专机抵达布宜诺斯艾利斯埃塞伊萨国际机场。习近平和夫人彭丽媛受到阿根廷外交部长福列、胡胡伊省省长莫拉莱斯等热情迎接。仪仗队长趋前致敬，军乐团奏响雄劲有力的进行曲，习近平和彭丽媛沿红地毯前行，礼兵分列红地毯两侧，行注目礼。</p><p style=\"text-align: justify;\">习近平代表中国政府和中国人民，向阿根廷人民致以诚挚问候和良好祝愿。习近平指出，再次踏上阿根廷这片热土，见到热情友善的阿根廷朋友，我倍感亲切。中阿是真诚互信的好朋友、互惠互利的好伙伴。两国在各自发展道路上相互支持，深化友好合作，在国际和地区事务中加强协调和配合。我期待着同马克里总统以及阿方各界人士广泛交流，携手开创中阿全面战略伙伴关系新时代。</p><p style=\"text-align: justify;\">习近平指出，阿根廷是首个举办二十国集团领导人峰会的南美国家，今年又恰逢峰会启动10周年，具有重要意义。我愿同包括阿根廷在内的各方一道，秉持同舟共济的伙伴精神，引领世界经济的航船，从拉普拉塔河畔再次扬帆起航，驶向更加广阔的大海。我预祝并支持阿根廷成功举办本届二十国集团领导人峰会。</p><p style=\"text-align: justify;\">丁薛祥、刘鹤、杨洁篪、王毅、何立峰等陪同人员同机抵达。</p><p style=\"text-align: justify;\">中国驻阿根廷大使杨万明也到机场迎接。</p><p style=\"text-align: justify;\">习近平是在结束对西班牙的国事访问后抵达阿根廷的。离开马德里时，西班牙政府高级官员到机场送行。红地毯两侧，肃立的礼兵行注目礼。习近平和彭丽媛同送行的西方官员握手话别。专机离开西班牙领空前，2架西班牙空军战机升空护航。</p><p style=\"text-align: justify;\">在结束阿根廷之行后，习近平还将对巴拿马、葡萄牙进行国事访问</p>','2018-11-30 11:44:13',3);

/*Table structure for table `newstype` */

DROP TABLE IF EXISTS `newstype`;

CREATE TABLE `newstype` (
  `id` int(100) DEFAULT NULL COMMENT '新闻id',
  `name` varchar(500) DEFAULT NULL COMMENT '新闻名字',
  `timer` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '添加时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `newstype` */

insert  into `newstype`(`id`,`name`,`timer`) values (1,'娱乐新闻','2018-11-22 12:15:52'),(2,'体育新闻','2018-11-22 12:16:02'),(3,'时事新闻','2018-11-22 12:16:11'),(4,'财经新闻','2018-11-22 14:09:15');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '用户名',
  `password` varchar(255) DEFAULT NULL COMMENT '密码',
  `timer` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '注册时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

/*Data for the table `user` */

insert  into `user`(`id`,`name`,`password`,`timer`) values (1,'小三','123','2018-11-20 10:39:51'),(2,'小三','123','2018-11-20 17:59:53'),(3,'测试','123','2018-11-20 18:00:03'),(4,'小三','123','2018-11-20 18:04:51'),(5,'2','123','2018-11-20 18:05:07'),(6,'小三3','123','2018-11-20 18:06:58'),(7,'小三d','123','2018-11-20 18:13:35'),(8,'小三5','123','2018-11-20 18:13:38'),(9,'小三u7','8','2018-11-20 18:26:47'),(10,'测试444','123','2018-11-22 10:59:54'),(11,'测试55','123','2018-11-23 10:31:22'),(12,'测试rwerew','123','2018-11-23 11:03:02');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
