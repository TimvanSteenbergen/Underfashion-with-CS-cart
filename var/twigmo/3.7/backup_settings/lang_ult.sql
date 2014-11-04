
DROP TABLE IF EXISTS ?:ult_language_values;
CREATE TABLE `cscart_ult_language_values` (
  `lang_code` char(2) NOT NULL DEFAULT '',
  `name` varchar(128) NOT NULL DEFAULT '',
  `value` text NOT NULL,
  `company_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`lang_code`,`name`,`company_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

