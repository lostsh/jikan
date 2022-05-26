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