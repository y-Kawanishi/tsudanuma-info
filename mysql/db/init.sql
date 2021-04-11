CREATE DATABASE tsudanuma_info;
use tsudanuma_info;


CREATE TABLE `user` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `email` varchar(256) NOT NULL,
  `pass` varchar(300) NOT NULL,
  `year` int(4) NOT NULL,
  `month` int(2) NOT NULL,
  `day` int(2) NOT NULL,
  `gender` varchar(3) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;


CREATE TABLE IF NOT EXISTS `apparel` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `access` varchar(255) NOT NULL,
  `time` varchar(11) NOT NULL,
  `tell` varchar(13) NOT NULL,
  `img` varchar(128) DEFAULT "0.gif",
  `map` varchar(512) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

INSERT INTO `apparel` (`brand`, `branch`, `address`, `access`, `time`, `tell`, `img`, `map`) VALUES
("ユニクロ", "ミーナ津田沼店", "志野市津田沼1-3-1 ミーナ津田沼店6F,7F", "新津田沼駅から徒歩3分", "10:00-21:00", "047-403-5281", "ユニクロ.jpg", "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.479231062751!2d140.0206044154804!3d35.68982288019225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6022802662119953%3A0xc72c1605f4bb3dba!2z44Om44OL44Kv44OtIOODn-ODvOODiua0peeUsOayvOW6lw!5e0!3m2!1sja!2sjp!4v1607613580351!5m2!1sja!2sjp"),
("GU", "津田沼PARCO店", "船橋市前原西2-18-1 津田沼PARCO B館 2F", "JR津田沼駅から徒歩2分", "10:00-21:00", "047-403-1671", "GU.jpg", "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.3856687958732!2d140.01978131548037!3d35.692125880191895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x602280213aa76abb%3A0xff05b0bfdb323e92!2z44K444O844Om44O8IOa0peeUsOayvOODkeODq-OCs-W6lw!5e0!3m2!1sja!2sjp!4v1607613478648!5m2!1sja!2sjp"),
("WEGO", "津田沼PARCO店", "船橋市前原西2-18-1 津田沼PARCO B館 4F", "JR津田沼駅から徒歩2分", "10:00-21:00", "047-470-5586", "WEGO.jpg", "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.376060389978!2d140.0199454154804!3d35.69236238019177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x602280213c05830f%3A0x4b111d904badfc7b!2zV0VHTyDmtKXnlLDmsrzjg5Hjg6vjgrPlupc!5e0!3m2!1sja!2sjp!4v1607615209294!5m2!1sja!2sjp"),
("しまむら", "津田沼PARCO店", "船橋市前原西2-18-1 津田沼PARCO B館 2F", "JR津田沼駅から徒歩2分", "10:00-21:00", "047-474-5510", "しまむら.jpg", "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.378351786505!2d140.0198592154802!3d35.69230598019171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x602280212dc9e401%3A0x914f12cffb6e73bf!2z44GX44G-44KA44KJIOa0peeUsOayvOODkeODq-OCs-W6lw!5e0!3m2!1sja!2sjp!4v1607615742396!5m2!1sja!2sjp"),
("Right-On", "津田沼PARCO店", "船橋市前原西2-18-1 津田沼PARCO A館 4F", "JR津田沼駅から徒歩2分", "10:00-21:00", "047-471-8617", "ライトオン.jpg", "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.393367668996!2d140.01930411548022!3d35.69193638019179!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x602280212887805d%3A0x1c28a7f6600eaf19!2z44Op44Kk44OI44Kq44OzIOa0peeUsOayvOODkeODq-OCs-W6lw!5e0!3m2!1sja!2sjp!4v1607615625613!5m2!1sja!2sjp"),
("GLOBAL WORK", "津田沼PARCO店", "船橋市前原西2-18-1 津田沼PARCO A館 1F", "JR津田沼駅から徒歩2分", "10:00-21:00", "047-477-5333", "グローバルワーク.jpg", "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.398710137956!2d140.01930471548016!3d35.69180488019182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6022810ebe4ebb97%3A0xcf8fcd1c727c3833!2zR0xPQkFMIFdPUksg5rSl55Sw5rK844OR44Or44Kz!5e0!3m2!1sja!2sjp!4v1607616055903!5m2!1sja!2sjp");
COMMIT;


CREATE TABLE IF NOT EXISTS `food` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `access` varchar(255) NOT NULL,
  `time` varchar(11) NOT NULL,
  `tell` varchar(13) NOT NULL,
  `img` varchar(128) DEFAULT "0.gif",
  `map` varchar(512) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

INSERT INTO `food` (`brand`, `branch`, `address`, `access`, `time`, `tell`, `img`, `map`) VALUES
("イオンモール", "津田沼", "習志野市津田沼1-23-1", "新津田沼駅から徒歩3分", "24時間営業", "047-455-6000", "イオン.jpg", "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.460750593954!2d140.02281131548034!3d35.69027778019226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60228024332470a5%3A0xe24f6d48be58cc73!2z44Kk44Kq44Oz44Oi44O844Or5rSl55Sw5rK8!5e0!3m2!1sja!2sjp!4v1607095120479!5m2!1sja!2sjp"),
("東武ストア", "津田沼店", "習志野市津田沼5-12-4", "京成津田沼駅から徒歩3分", "7:00-25:00", "047-408-9551", "東武ストア.jpg", "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.757022857714!2d140.02216581548007!3d35.6829843801938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6022802c05cb4865%3A0x3694802be7f628c3!2z5p2x5q2m44K544OI44Ki5rSl55Sw5rK85bqX!5e0!3m2!1sja!2sjp!4v1607095334445!5m2!1sja!2sjp"),
("ダイエー", "モリシア津田沼店", "習志野市谷津1-16-1", "JR津田沼駅から徒歩2分", "10:00-23:00", "047-470-5600", "ダイエー.jpg", "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.489155749879!2d140.01718801548026!3d35.68957858019234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x602280275c263d5f%3A0x1daf09d72cbc3121!2z44OA44Kk44Ko44O8IOODouODquOCt-OCoua0peeUsOayvOW6lyBBRU9OIEZPT0QgU1RZTEUgYnkgZGFpZWk!5e0!3m2!1sja!2sjp!4v1607095424115!5m2!1sja!2sjp"),
("業務スーパー河内屋酒版", "ミーナ津田沼店", "習志野市津田沼1-3-1", "新津田沼駅から徒歩1分", "10:00-22:00", "047-476-6151", "業務スーパー.jpg", "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.480307628056!2d140.0207605154802!3d35.68979638019234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x602280268a246217%3A0x34fa599bce6cbe18!2z5qWt5YuZ44K544O844OR44O85rKz5YaF5bGL6YWS6LKpIOODn-ODvOODiua0peeUsOayvOW6lw!5e0!3m2!1sja!2sjp!4v1607095484488!5m2!1sja!2sjp"),
("ベルク", "フォルテ津田沼店", "習志野市奏の杜2-1-1", "JR津田沼駅から徒歩7分", "9:00-24:00", "047-493-7100", "ベルク.jpg", "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.4913169919814!2d140.01352891548012!3d35.689525380192485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60187f8bd037ea49%3A0x58145e875522bf98!2z44OZ44Or44KvIOODleOCqeODq-ODhua0peeUsOayvOW6lw!5e0!3m2!1sja!2sjp!4v1607095555146!5m2!1sja!2sjp"),
("イトーヨーカドー", "津田沼店", "習志野市津田沼1-10-30", "新津田沼駅から徒歩1分", "10:00-22:00", "047-479-3111", "ヨーカドー.jpg", "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.480307628056!2d140.02155391548018!3d35.68979638019234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60228025d61384b9%3A0x9a071f6ca258c411!2z44Kk44OI44O844Oo44O844Kr44OJ44O8IOa0peeUsOayvOW6lw!5e0!3m2!1sja!2sjp!4v1607095623281!5m2!1sja!2sjp"),
("Loharu", "津田沼 食彩館", "習志野市谷津7-7-1", "JR津田沼駅から徒歩3分", "10:00-21:00", "047-405-2250", "食彩館.jpg", "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.4460887621444!2d140.0160786154803!3d35.6906386801922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60187f8a05772437%3A0x18b6499b9a653bf0!2zTG9oYXJ15rSl55Sw5rK8!5e0!3m2!1sja!2sjp!4v1607095686310!5m2!1sja!2sjp");
COMMIT;


CREATE TABLE IF NOT EXISTS `goods` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `access` varchar(255) NOT NULL,
  `time` varchar(11) NOT NULL,
  `tell` varchar(13) NOT NULL,
  `img` varchar(128) DEFAULT "0.gif",
  `map` varchar(512) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

INSERT INTO `goods` (`brand`, `branch`, `address`, `access`, `time`, `tell`, `img`, `map`) VALUES
("無印良品", "津田沼PARCO店", "船橋市前原西2-18-1 津田沼PARCO B館 5F", "JR津田沼駅から徒歩2分", "10:00-21:00", "047-479-5678", "無印良品.jpg", "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.3760603899705!2d140.0199454154804!3d35.69236238019177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60228021295d6edb%3A0x4eefa42a30fa319e!2z54Sh5Y2w6Imv5ZOBIOa0peeUsOayvOODkeODq-OCsw!5e0!3m2!1sja!2sjp!4v1607829395825!5m2!1sja!2sjp"),
("ニトリ", "イトーヨーカドー津田沼店", "習志野市津田沼1-10-30 イトーヨーカドー 津田沼", "新津田沼駅から徒歩1分", "10:00-21:00", "0120-014-210", "ニトリ.jpg", "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.481883880919!2d140.02172291548015!3d35.68975758019231!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60228025d6094329%3A0x8b072781d4358745!2z44OL44OI44OqIOOCpOODiOODvOODqOODvOOCq-ODieODvOa0peeUsOayvOW6lw!5e0!3m2!1sja!2sjp!4v1607829575114!5m2!1sja!2sjp"),
("ユザワヤ", "津田沼店", "習志野市谷津7-7-1 Loharu 津田沼店", "JR津田沼駅から徒歩2分", "10:00-20:00", "047-474-4141", "ユザワヤ.jpg", "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.452231390627!2d140.01594431548043!3d35.690487480192076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60187f8a06554c75%3A0xc0aa6dce3e386721!2z44Om44K244Ov44Ok5rSl55Sw5rK85bqX!5e0!3m2!1sja!2sjp!4v1607913502638!5m2!1sja!2sjp"),
("ワンズテラス", "津田沼PARCO店", "船橋市前原西2-18-1 津田沼PARCO 5F", "JR津田沼駅から徒歩2分", "10:00-21:00", "047-403-3900", "ワンズテラス.jpg", "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.3794568560447!2d140.01999021548033!3d35.692278780191764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x602280213b60fa49%3A0x188052b463446e79!2z44Ov44Oz44K644OG44Op44K5T25lJ3MgdGVycmFjZea0peeUsOayvOODkeODq-OCsw!5e0!3m2!1sja!2sjp!4v1607829956475!5m2!1sja!2sjp"),
("チャーミー", "モリシア津田沼店", "習志野市谷津1-16-1", "JR津田沼駅から徒歩2分", "10:00-21:00", "047-411-7207", "チャーミー.jpg", "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.492799797459!2d140.01714311548017!3d35.68948888019228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x602280275a12873f%3A0xe9d452b36284c2f1!2z44OB44Oj44O844Of44O8IOa0peeUsOayvOW6lw!5e0!3m2!1sja!2sjp!4v1607830222339!5m2!1sja!2sjp"),
("studio CLIP", "津田沼PARCO店", "船橋市前原西2-18-1 津田沼PARCO B館 1F", "JR津田沼駅から徒歩2分", "10:00-21:00", "047-477-5138", "CLIP.jpg", "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.384957816354!2d140.0198302154803!3d35.69214338019177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x602281c938f2720f%3A0x487c1be0ebf28b09!2zc3R1ZGlvIENMSVAg5rSl55Sw5rK844OR44Or44Kz!5e0!3m2!1sja!2sjp!4v1607830423249!5m2!1sja!2sjp"),
("ヴィレッジヴァンガード", "津田沼PARCO店", "船橋市前原西2-18-1 津田沼PARCO A館 5F", "JR津田沼駅から徒歩2分", "10:00-21:00", "047-403-7577", "ヴィレヴァン.jpg", "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.404869191255!2d140.0193636154802!3d35.69165328019187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x602280212dc9e401%3A0x67e319453c507d42!2z44O044Kj44Os44OD44K444O044Kh44Oz44Ks44O844OJ5rSl55Sw5rK844OR44Or44Kz5bqX!5e0!3m2!1sja!2sjp!4v1607833321314!5m2!1sja!2sjp");
COMMIT;