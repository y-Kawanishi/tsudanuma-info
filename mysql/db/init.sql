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
  `tell` varchar(12) NOT NULL,
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