
INSERT INTO `posts` (`id`, `slug`, `category_id`, `title`, `excerpt`, `body`, `created_at`, `updated_at`, `published_at`) VALUES (1, 'my-first-post', 1, 'Post 1', 'Post ett personal...', 'Post ett är personal bäst', '2022-09-11 13:54:43', '2022-09-11 13:54:44', NULL);
INSERT INTO `posts` (`id`, `slug`, `category_id`, `title`, `excerpt`, `body`, `created_at`, `updated_at`, `published_at`) VALUES (2, 'my-second-post', 2, 'Post 2', 'Post två work...', 'Post två work är bra', '2022-09-12 13:54:43', '2022-09-12 13:54:44', NULL);
INSERT INTO `posts` (`id`, `slug`, `category_id`, `title`, `excerpt`, `body`, `created_at`, `updated_at`, `published_at`) VALUES (3, 'my-third-post', 3, 'Post 3', 'Post två hobby...', 'Post två hobby är bra', '2022-09-12 13:54:43', '2022-09-12 13:54:44', NULL);
INSERT INTO `posts` (`id`, `slug`, `category_id`, `title`, `excerpt`, `body`, `created_at`, `updated_at`, `published_at`) VALUES (4, 'my-fourth-post', 1, 'Post 4', 'Post fyra personal...', 'Post fyra är personal bäst', '2022-09-11 13:54:43', '2022-09-11 13:54:44', NULL);

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES (1, 'Personal', 'personal', '2022-09-12 14:25:00', '2022-09-12 14:25:02');
INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES (2, 'Work', 'work', '2022-09-12 14:25:00', '2022-09-12 14:25:02');
INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES (3, 'Hobbies', 'hobbies', '2022-09-12 14:25:00', '2022-09-12 14:25:02');
