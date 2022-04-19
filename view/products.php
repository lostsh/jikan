<!DOCTYPE php>
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
        <a href="../index.html">Jikan</a>
        <hr>
        <a href="birds.html">Self</a>
        <a href="ghosts.html">Relative</a>
        <a href="fruits.html">Intricated</a>
        <a href="contact.html">Contact</a>
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
                    foreach($c->getCurrentProducts() as $product){
                        echo($product);
                    }
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
            main();
        });
    </script>
</body>

</html>