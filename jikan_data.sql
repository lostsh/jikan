USE jikan;

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'birds'),
(2, 'fruits'),
(3, 'ghosts');

INSERT INTO `products` (`id_category`, `description`, `image`, `prix`, `stock`) VALUES
(1, "One o'clock", 'https://lostsh.github.io/jikan-media/birds/normal/chick.gif', 200, 30),
(1, "Twelve o'clock", 'https://lostsh.github.io/jikan-media/birds/normal/chicken.gif', 200, 30),
(1, 'Twenty-four hours', 'https://lostsh.github.io/jikan-media/birds/normal/hen.gif', 200, 30),
(1, 'Forty eight hours', 'https://lostsh.github.io/jikan-media/birds/normal/raven.gif', 500, 30),
(1, 'One hundred and twenty eight hours', 'https://lostsh.github.io/jikan-media/birds/normal/parrot.gif', 666, 30),
(2, 'One interaction', 'https://lostsh.github.io/jikan-media/ghosts/normal/blue.gif', 17, 30),
(2, 'Two interactions', 'https://lostsh.github.io/jikan-media/ghosts/normal/orange.gif', 142, 30),
(2, 'Seven interactions', 'https://lostsh.github.io/jikan-media/ghosts/normal/pink.gif', 200, 30),
(2, 'Thirteen interactions', 'https://lostsh.github.io/jikan-media/ghosts/normal/red.gif', 500, 30),
(2, 'Time relative number of interactions.', 'https://lostsh.github.io/jikan-media/ghosts/normal/chase.gif', 666, 30),
(3, 'A day', 'https://lostsh.github.io/jikan-media/fruits/normal/apple.gif', 990, 30),
(3, 'One week', 'https://lostsh.github.io/jikan-media/fruits/normal/cherry.gif', 6, 30),
(3, 'A month', 'https://lostsh.github.io/jikan-media/fruits/normal/orange.gif', 27, 30),
(3, 'One year', 'https://lostsh.github.io/jikan-media/fruits/normal/strawberry.gif', 332, 30),
(3, 'You wake up when it suits you.', 'https://lostsh.github.io/jikan-media/fruits/normal/pac-man.gif', -666, 30);

-- pass is : 1234
INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES (NULL, 'red', 'str@wber.ry', '81dc9bdb52d04dc20036dbd8313ed055');
-- pass is : Pass Word
INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES (NULL, 'henry', 'henry@choum.su', '49283fc4fefdbbea56b0612f8ab8199a');
-- pass is : azerty
INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES (NULL, 'default', 'default@user.com', 'ab4f63f9ac65152575886860dde480a1') 