CREATE TABLE `admin` (
	 `id` int(11) NOT NULL AUTO_INCREMENT,
	 `name` varchar(255) NOT NULL,
	 `password` varchar(255) NOT NULL,
	 `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	 `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO admin (name, password, created_at, updated_at)
VALUES ('Администратор', '$2y$10$e0MYzXyjpJS7Pd0RVvHwHeFxX6RQE5Hl5eEV3R6GrfUx1xY/3U8XO', NOW(), NOW());
