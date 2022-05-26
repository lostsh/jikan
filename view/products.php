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
    <link rel="stylesheet" href="../assets/css/table.css" />
    <script src="../assets/js/main.js"></script>
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
        
        <table>
            <thead>
                <tr>
                    <td colspan="3">Times plans</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    include_once "../controller/Controller.php";
                    $c = Controller::getController();

                    $cat = htmlspecialchars($_GET['cat']);
                    $c->setCategorie($cat!=null?$cat:"birds");

                    // display product rows
                    array_map(function($p){ echo($p); }, $c->getCurrentProducts());

                    //page history
                    $_SESSION['prevPage'] = $_SERVER['PHP_SELF']."?cat=".$cat;
                ?>
            </tbody>
        </table>

    </main>

    <popup-zoom></popup-zoom>

    <footer>
        <p>lostsh © 2022-2023</p>
        <p><a href="about:blank" target="_blank">Don't Contact us</a></p>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            //main();
        });
    </script>
</body>

</html>