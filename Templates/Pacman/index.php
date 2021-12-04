
<html lang="EN">
<head>
    <meta charset="utf-8">
    <title>Choose your level</title>
    <link rel="stylesheet" href="css/pacman.css">
</head>
<body>

<nav>
    <div class="row">
        <div class="col-sm-12">
            <button class="homeButton-first">
                <a href="../home.php" class="nav-right">Home page</a>
            </button>
        </div>
    </div>
</nav>
<div class="homePage">
    <h1>Choose your players!</h1>
    <form method="post">
        <img src="img/pacman.jpg" alt="pacman" class="homeImage">
        <br>
        <button class="single button" name="single" value="single">
            Singleplayer
        </button>
        <br>
        <p class="control">controls</p><br>
        <p class="control">&#8593</p>
        <p class="control">&#8592 &#8595 &#8594 </p>
        <br>
        <button class="multi button" name="multi" value="multi">Multiplayer</button>
        <br>
        <p class="control">controls</p><br>
        <p class="controls">Pacman yellow</p>
        <p class="control">W</p>
        <p class="control">A S D</p>
        <br>
        <p class="controls">Pacman orange</p>
        <p class="control">8</p>
        <p class="control">4 5 6 </p>
    </form>
</div>
<?php 
    if (isset($_POST["single"])) {
        header("Location: level1");
    } else if (isset($_POST["multi"])) {
        header("Location: level2");
    }
        ?>
<script src="js/start.js"></script>
    
</body>
</html>