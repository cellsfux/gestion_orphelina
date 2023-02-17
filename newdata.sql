

create database `app_noella`;
use `app_noella`;


CREATE TABLE `users` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY  NOT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `id_ecole` varchar(50) DEFAULT NULL,
  `genre` varchar(10) DEFAULT NULL,
  `date_naisse` varchar(30) DEFAULT NULL,
  `profilpic` varchar(255) DEFAULT NULL,
  `description_dont` text,
  `phone` varchar(140) DEFAULT null,
  `lieu_naissance` varchar(200),
  `email` varchar(100) DEFAULT NULL,
  `pass` varchar(150) NOT NULL,
  `roles` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


create TABLE `dont`(
  `id` int(11) AUTO_INCREMENT PRIMARY KEY  NOT NULL,
  `id_user` int,
  `amout` int,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp()
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `declaration`(
  `id` int(11) AUTO_INCREMENT PRIMARY KEY  NOT NULL,
  `id_user` int,
  `destcription` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp()
  )ENGINE=InnoDB DEFAULT CHARSET=utf8;