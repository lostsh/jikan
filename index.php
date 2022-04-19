<!DOCTYPE html>
<html lang="EN">
<?php session_start(); ?>

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="author" content="lostsh ᓚᘏᗢ">
    <title>Jikan</title>
    <meta name="description" content="Welcome to Jikan. Tempus Fugit." />

    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/index.css" />
</head>

<body>

    <header>
        <div>
            <h2>時間</h2>
            <h1>Jikan ↬</h1>
        </div>
        <div id="img"><img src="assets/img/globe.gif" alt="rotating globe"></div>
    </header>

    <nav id="menu">
        <a href="index.php">Jikan</a>
        <hr>
        <a href="view/products.php?cat=birds">Self</a>
        <a href="view/products.php?cat=ghosts">Relative</a>
        <a href="view/products.php?cat=fruits">Intricated</a>
        <a href="view/contact.php">Contact</a>
    </nav>

    <main>
        <?php
            //include_once "controller/Controller.php";
            //$_SESSION["controller"] = Controller::getController('products.json');
        ?>
        <article>
            <h2>Tempus fugit.</h2>
            <div>
                <p>
                    Humanity's last coveted resource, which tends to stay out of reach, yet seems so attainable. 
                    <span class="bold grey">Time</span>, <span class="bold">irresistible force or immutable object</span>, thus goes the time since well before our advent, 
                    and until the borders of <span class="grey">eternity</span>.
                </p>
                <p>
                    It is in this context that we offer you our range of three plans, each adapted to your personal needs. 
                    Today finally, it is within your reach everyone can now have access to the last untapped resource. 
                    Take control, no longer let the short course of events decide for you, <span class="bold">today it is you who make the time</span>.
                </p>
                <p class="italic">
                    If necessary, our customer team is at your disposal via the contact form to help you make your choices, 
                    or to answer all your technical questions.
                </p>
            </div>
        </article>
        <article>
            <h2>Plans</h2>
            <div>
                <p>
                    To understand how our different offers work, 
                    you must first know that the concrete asset <span class="bold grey">you are about to acquire is akin to quantum entanglement</span>. 
                    Thus you can represent the different spatio-temporal planes in the form of superimposed sheets, 
                    in normal times they do not intersect and the world evolves on one of them.
                </p>
                <p class="bold">
                    The three plans we offer are as follows;
                </p>
                <p>
                    <span class="grey">The first</span> allows you to wear for the duration chosen on a plane parallel to ours, 
                    you will be totally unable to interact with our reality, 
                    on the other hand you will have your time for your personal development. 
                    <span class="bold">You stay on site, but you have the allotted time depending on the chosen offer, so our reality will seem distended to you</span>.
                </p>
                <p>
                    <span class="grey">The second</span> is similar in all respects to the first except that you will have the choice of the number of interactions you will have with the real world, 
                    indeed we will allow your time plane to collide with reality so that you can in a very limited way to interact with the world. 
                    <span class="bold">You will be in a flow, moved to the place of your choice, 
                    and the number and duration of interactions will be defined by the offer to which you subscribe</span>.
                </p>
                <p>
                    <span class="grey">The last</span>, allows you to completely superimpose the plan of your temporality with a real temporality of your choice, 
                    thus making <span class="bold">space-time travel</span> possible, 
                    provided you respect certain rules which will be explained to you beforehand by the agent who will be assigned to you personally.
                </p>
            </div>
            <div><p class="text-center">ᓚᘏᗢ</p></div>
        </article>
    </main>

    <footer>
        <p>lostsh © 2022-2023</p>
        <p><a href="about:blank" target="_blank">Don't Contact us</a></p>
    </footer>
</body>

</html>