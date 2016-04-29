CREATE TABLE `cars` (
  `car_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `user_name` varchar(45) DEFAULT NULL,
  `car_reg` varchar(45) DEFAULT NULL,
  `car_make` varchar(45) DEFAULT NULL,
  `car_from` varchar(45) DEFAULT NULL,
  `car_till` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`car_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

CREATE TABLE `teachers` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_type` varchar(45) DEFAULT NULL,
  `user_car` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;

CREATE TABLE `signed_out` (
  `user_id` int(11) DEFAULT NULL,
  `user_name` varchar(45) DEFAULT NULL,
  `user_registration` varchar(45) DEFAULT NULL,
  `user_date` varchar(45) DEFAULT NULL,
  `user_time` varchar(45) NOT NULL,
  PRIMARY KEY (`user_time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `signed_in` (
  `user_id` int(11) DEFAULT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_room` varchar(30) DEFAULT NULL,
  `user_registration` varchar(10) DEFAULT NULL,
  `user_date` varchar(20) DEFAULT NULL,
  `user_time` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `meeting` (
  `meet_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(45) DEFAULT NULL,
  `meet_room` varchar(45) DEFAULT NULL,
  `meet_memb` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`meet_id`),
  UNIQUE KEY `user_id_UNIQUE` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;
