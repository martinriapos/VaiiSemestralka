DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
                         `id` int(11) NOT NULL AUTO_INCREMENT,
                         `username` varchar(100) NOT NULL,
                         `password` varchar(100) NOT NULL,
                         `email` varchar(100) NOT NULL,
                         PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
                                                                (5,	'janko',	'janko1',	'janko@gmail.com'),
                                                                (6,	'marek',	'marek1',	'marek@gmail.com'),
                                                                (7,	'ferko',	'ferko1',	'ferko@gmail.com');