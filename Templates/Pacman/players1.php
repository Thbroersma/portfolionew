<html lang="EN">
  <head>
    <meta charset="utf-8" />
    <title>Pac-man singleplayer level 1</title>
    <link rel="stylesheet" href="css/pacman.css" />
  </head>
  <body>
    <p class="h3">Score: <span class="score">0</span></p>
    <button class="homeButton">
      <a href="index.html" class="nav-right">Play again</a>
    </button>
    <audio class="music">
      <source src="audio/mockey.mp3" type="audio/mpeg" />
    </audio>
    <div class="grid">
      <div class="the-end hidden">
        <button class="reload">
          Game over <br />
          Play again
        </button>
      </div>
    </div>

    <br />
    <script type="module" src="js/action.js"></script>
  </body>
</html>
