SQL changes
    
    INSERT INTO `color_settings` (`id`, `customer_id`, `color1`, `color2`, `color3`, `color4`, `color5`, `language_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'am', 'b0', 'ck', 'dm', 'e1', 3, '2022-01-27 07:04:44', '2022-01-27 12:55:22', NULL);


CREATE TABLE `system_languages` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `language` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `system_languages` (`id`, `customer_id`, `language`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'English', '2022-01-27 11:21:47', '2022-01-27 20:44:20', NULL),
(2, 2, 'German', '2022-01-27 16:24:16', '2022-01-27 16:24:21', NULL);

ALTER TABLE `system_languages`
  ADD PRIMARY KEY (`id`);

  ALTER TABLE `system_languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;


