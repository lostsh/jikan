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
    <link rel="stylesheet" href="../assets/css/login.css"/>
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
      <h1>Log-in ↻</h1>
      <div class="login">
        <img src="../assets/img/profil.png" alt="profil pic">

        <form method="POST">
          <div>
            <input type="email" name="email" placeholder="User mail" required>
          </div>
          <div>
            <input type="password" name="password" placeholder="Password" autocomplete="current-password" required>
          </div>
          <!--<input type="hidden" name="_csrf_token" value="{{ csrf_token('authenticate') }}" >-->
          <div>
            <input type="submit" value="Log-in">
          </div>
        </form>

      </div>

      <?php
        if(isset($_POST['email']) && isset($_POST['password'])){
            // TODO: Implement security controller
            $_SESSION['user'] = "Henry";
        }
      ?>
    </main>

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