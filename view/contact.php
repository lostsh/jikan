<!DOCTYPE html>
<html lang="EN">
<?php session_start(); ?>

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="author" content="lostsh ᓚᘏᗢ">
    <title>Jikan</title>
    <meta name="description" content="Welcome to Jikan. Tempus Fugit." />

    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="../assets/css/contact.css" />
</head>

<body>

    <header>
        <div><h2>時間</h2><h1>Jikan ↬</h1></div>
        <div id="img"><img src="../assets/img/globe.gif" alt="rotating globe"></div>
    </header>

    <nav id="menu">
        <a href="../index.php">Jikan</a>
        <?= $_SESSION['user']==null?"<a href='/view/login.php'>Login</a>":"<a href='/view/logout.php'>Logout</a>" ?>
        <hr>
        <a href="products.php?cat=birds">Self</a>
        <a href="products.php?cat=ghosts">Relative</a>
        <a href="products.php?cat=fruits">Intricated</a>
        <a href="contact.php">Contact</a>
    </nav>

    <main>
        <?php $_SESSION['prevPage'] = $_SERVER['PHP_SELF']; ?>
        <form action="mailto:time@jikan.com?subject=Time%20contac&body=" method="post" enctype="text/plain">
            <div>
                <label for="date">Current date</label>
                <input type="date" name="date" id="date" required="">
            </div>
            <div>
                <section>
                    <h2>Client informations</h2>
                    <div>
                        <!--<label for="surname">Name</label>-->
                        <input type="text" name="surname" id="surname" placeholder="First name" required="">
                    </div>
                    <div>
                        <!--<label for="firstname">Family name</label>-->
                        <input type="text" name="firstname" id="firstname" placeholder="Family name" required="">
                    </div>
                    <div>
                        <!--<label for="mail">e-mail</label>-->
                        <input type="email" name="mail" id="mail" placeholder="User@mail.com" required="">
                    </div>
                    <div>
                        <label>Gender:</label>
                        <p>
                            <input type="radio" id="gen1" name="gender" value="nonbinary" checked>
                            <label for="gen1">Non binary</label>
                        </p>
                        <p>
                            <input type="radio" id="gen2" name="gender" value="first">
                            <label for="gen2">First</label>
                        </p>
                        <p>
                            <input type="radio" id="gen3" name="gender" value="second">
                            <label for="gen3">Second</label>
                        </p>
                    </div>
                    <div>
                        <label for="birthDate">Birth date:</label>
                        <input type="date" name="birthDate" id="birthDate" required="">
                    </div>
                </section>
                <section>
                    <h2>Contact information</h2>
                    <div>
                        <label for="category">Product:</label>
                        <select id="category">
                            <optgroup label="Self">
                                <option>Chick</option>
                                <option>Chicken</option>
                                <option>Hen</option>
                                <option>Raven</option>
                                <option>Parrot</option>
                            </optgroup>
                            <optgroup label="Relative">
                                <option>Blue</option>
                                <option>Orange</option>
                                <option>Pink</option>
                                <option>Red</option>
                                <option>Chased</option>
                            </optgroup>
                            <optgroup label="Intricated">
                                <option>Apple</option>
                                <option>Cherry</option>
                                <option>Orange</option>
                                <option>Strawberry</option>
                                <option>Pac-man</option>
                            </optgroup>
                        </select>
                    </div>
                    <div>
                        <input type="text" name="subject" id="subject" placeholder="Contact subject" required="">
                    </div>
                    <div>
                        <textarea type="text" name="content" id="content" placeholder="Message" required="" rows="10" cols="66"></textarea>
                    </div>
                </section>
            </div>
            <div>
                <input type="submit" value="Send mail">
            </div>
        </form>
    </main>

    <footer>
        <p>lostsh © 2022-2023</p>
        <p><a href="about:blank" target="_blank">Don't Contact us</a></p>
    </footer>
</body>

</html>