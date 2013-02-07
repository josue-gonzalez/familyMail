--Tablas de la base de datos de Family Mail

CREATE TABLE `Users` (
  `id_user` int(8) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(64),
  `last_name_p` varchar(64),
  `last_name_m` varchar(64),
  `address` varchar(255),
  `city` int(8),
  `state_` int(8),
  `phone` varchar(20),
  `domain_name` int(255),
  `password` varchar(255),
  `cut_off_date` date,
  `status` int(8),
  PRIMARY KEY (`id_user`),
  FOREIGN KEY (`city`) REFERENCES Cities(`id_city`),
  FOREIGN KEY (`state_`) REFERENCES States(`id_state`),
  FOREIGN KEY (`status`) REFERENCES Status_types(`id_status`)
);

CREATE TABLE `States` (
  `id_state` int(8) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(255),
  PRIMARY KEY (`id_state`)
);

CREATE TABLE `Cities` (
  `id_city` int(8) NOT NULL AUTO_INCREMENT,
  `name_city` varchar(255),
  PRIMARY KEY (`id_city`)
);

CREATE TABLE `User_domain` (
  `id_user_domain` int(8) NOT NULL AUTO_INCREMENT,
  `id_user` int(8),
  `name_domain` varchar(255),
  `active` tinyint(1),
  PRIMARY KEY (`id_user_domain`),
  FOREIGN KEY (`id_user`) REFERENCES Users(`id_user`)
);

CREATE TABLE `User_emails` (
  `id_email_user` int(8) NOT NULL AUTO_INCREMENT,
  `id_user` int(8),
  `id_email` int(8),
  `id_email_type` int(8),
  `active` tinyint(1),
  PRIMARY KEY (`id_email_user`),
  FOREIGN KEY (`id_user`) REFERENCES Users(`id_user`),
  FOREIGN KEY (`id_email`) REFERENCES Emails(`id_email`),  FOREIGN KEY (`id_email_type`) REFERENCES Email_types(`id_email_type`)
);

CREATE TABLE `Emails` (
  `id_email` int(8) NOT NULL AUTO_INCREMENT,
  `email_name` varchar(255),
  `active` tinyint(1),
  PRIMARY KEY (`id_email`)
);

CREATE TABLE `Email_types` (
  `id_email_type` int(8) NOT NULL AUTO_INCREMENT,
  `email_type_name` varchar(16),
  PRIMARY KEY (`id_email_type`)
);

CREATE TABLE `Status_types` (
  `id_status_type` int(8) NOT NULL AUTO_INCREMENT,
  `status_type_name` varchar(16),
  PRIMARY KEY (`id_status_type`)
);