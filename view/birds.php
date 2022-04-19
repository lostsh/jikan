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
                // Some tests : 
                    /*
                    require_once '../model/Product.php';
                    $q = new Product(["image" => "../", "description" => "Descrrr", "price" => 8]);
                    echo("q is : ");
                    echo($q);*/

                    include_once "../controller/Controller.php";
                    $c = Controller::getController();

                    //var_dump($c);
                    echo("<br>US->>");
                    //var_dump($c->products);
                    echo("<<-SU<br>");

                    $c->setCategorie("birds");

                    foreach($c->getCurrentProducts() as $product){
                        echo("<br>");
                        echo($product);
                    }
                ?>
                <tr>
                    <td><img src="https://lostsh.github.io/jikan-media/birds/normal/chick.gif" alt="Product figure"></td>
                    <!--<td><div class="buttons"><button>-</button><button>+</button></div></td>-->
                    <td>One o'clock</td>
                    <td>17 k$</td>
                    <!--<td class="order stock">0</td>-->
                </tr>
                <tr>
                    <td><img src="https://lostsh.github.io/jikan-media/birds/normal/chicken.gif" alt="Product figure"></td>
                    <td>Twelve o'clock</td>
                    <td>142 k$</td>
                </tr>
                <tr>
                    <td><img src="https://lostsh.github.io/jikan-media/birds/normal/hen.gif" alt="Product figure"></td>
                    <td>Twenty-four hours</td>
                    <td>200 k$</td>
                </tr>
                <tr>
                    <td><img src="https://lostsh.github.io/jikan-media/birds/normal/raven.gif" alt="Product figure"></td>
                    <td>Forty eight hours</td>
                    <td>500 k$</td>
                </tr>
                <tr>
                    <td><img src="https://lostsh.github.io/jikan-media/birds/normal/parrot.gif" alt="Product figure"></td>
                    <td>One hundred and twenty eight hours</td>
                    <td>666 k$</td>
                </tr>
            </tbody>
        </table>

    </main>


    <!--
    <div class="zoom-container">
        <div class="zoom-background"></div>
        <div class="zoom">
            <div id="close"><div></div></div>
            <img src="../assets/img/birds/normal/chicken.gif" alt="zoomed image">
        </div>
    </div>
    -->
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