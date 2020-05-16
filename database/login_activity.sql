CREATE TABLE `login_activity` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8mb4_bin DEFAULT '',
  `password` varchar(100) COLLATE utf8mb4_bin DEFAULT '',
  `browser` varchar(255) COLLATE utf8mb4_bin NOT NULL DEFAULT '',
  `ip` varchar(100) COLLATE utf8mb4_bin NOT NULL DEFAULT '',
  `result` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
