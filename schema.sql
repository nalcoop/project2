DROP TABLE IF EXISTS `Survey`;
CREATE TABLE `Survey` (
  `Id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Name` text(255) COLLATE 'utf8_general_ci' NOT NULL,
  `Email` text(255) COLLATE 'utf8_general_ci' NOT NULL,
  `Message` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Datetime` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE='InnoDB' COLLATE 'utf8_general_ci';

