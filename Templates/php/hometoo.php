<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Intro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styling.css">
    <!--

	Emmet een snelle manier van codes zoals ul>li.item$*5 waarbij je een ul met 5 li die item1 oplopend tot 5 heten.

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
-->
</head>
<body class="myBody ">

    <nav class="navbar-style">
        <div class="row">
            <div class="col-sm-12">
                <ul class="nav">
                    <button class="switchButton">
                        Switch up
                    </button>
                    <span><a href="index.html">😄</a></span>
                    <div class="navigation">
                        <a href="index.html" class="nav-right">Home</a>
                        <a href="mot.html" class="nav-right">Motivation</a>
                        <a href="over.html" class="nav-right">About myself</a>
                        <a href="Pacman/index.html" class="nav-right">Games</a>
                    </div>
            </div>
            </ul>
        </div>
    </nav>
    </div>
    </div>
    </nav>
    <header>
        <div class="row">
            <div class="col-sm">
                <h1 class="head">Hello, how nice of you looking at my website!</h1>
            </div>
        </div>
    </header>

    <main>


        <section class="part-one">
            <div class="row">
                <div class="col-sm-6 intro-info">
                    <h2 class="lower-head headingThree">This is me</h2>
                    <p class="about">
                        Hello, my name is Thierry, I am 25 years old. I am an enthousiastic webdesigner who works with HTML,
                        CSS, Javascript, PHP and C#. I am still in school and learning more (programming) languages. I am now
                        working on
                        front-end developing as you can see. So far, I worked on this website and some applications (with a little back-end Javascript,
                        PHP and C#). <br> <br>
                        
                        If you would like to contact me, please press the contact button or
                        write a message with your contact information below.
                    </p>
                    <button class="contact" type="active">
                        <a href="mailto:thierry.broersma@gmail.com">Contact me</a>
                    </button>
                    <br><br>
                    <?php 
            try {
                $db = new PDO("mysql:host=localhost;dbname=test", "root", ""); 
                if (isset($_POST['verzenden'])) {
                    $naam = $_POST['naam'];
                    $message = $_POST['bericht'];
                    $mailadres = $_POST['gmail'];
                    $query= $db->prepare("INSERT INTO berichten(naam, bericht, gmail) 
                                        VALUES (:naam, :bericht, :gmail)");    
                    $query->bindParam("naam", $naam);
                    $query->bindValue("bericht", $message);
                    $query->bindParam("gmail", $mailadres);
                    echo "The message is send!<br>";
                    echo "Name: " . $_POST['naam'] . "<br>";
                    echo "Message: " . $_POST['bericht'] . "<br>";
                    echo "<br>";
                    $ontvanger = "thierry.broersma@gmail.com";
                    $onderwerp = "Bericht van " . $naam . " voor contact";
                    $bericht = $message;
                    $header = "From:" . $mailadres;
                    
                    if ($query->execute()) {
                        echo "
                        <p class='registration'>Your message has been send to me!</p>";
                    } else {
                        echo "The message has not been send, there is een error.";
                    }
                    mail($ontvanger, $onderwerp, $bericht, $header);
                }
            }
            catch (PDOException $e) {
                die("Error!: " . $e->getMessage());
            }
        ?>
        <form method="post" action="#">
            <label>Name</label>
            <input type="text" name="naam" class="input-one">
            <br>
            <label>Message</label>
            <textarea name="bericht" class="input-two"></textarea>
            <br>
            <label>Mailaddress</label>
            <input type="email" name="gmail" class="input-three">
            <br>
            <input type="submit" name="verzenden" value="Send">
        </form>
                </div>
                <div class="col-sm-4">
                    <img src="img/me.jpg" class="rounded me">
                </div>
            </div>
        </section>
        <br>
       
        <h3 class="projects">My projects</h3>
                    <div class="row">
            
        <?php
        try {
            $db = new PDO("mysql:host=localhost;dbname=test", "root", "");
            $query = $db->prepare("SELECT * FROM project");
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach($result as &$data) {
            
                echo "
                        <div class='col-md-2.'>
                            <div class='card-body'>
                            <h4>" . $data["title"] .  "</h4>
                            <p> " . $data["description"] . "</p>
                            <a href=". $data["github-link"] .">Github</a>
                            <img class='card-img' src='". $data['img'] . "'>
                            </div>
                        </div>";
                    
            }
        } catch (PDOException $e) {
            die("Error!: " . $e->getMessage());
        }
        ?>
        </div>
        <!--Overige opdracht (een quiz)-->
        <section class="part-one">
            <div class="row">
                <div class="col-12">
                <h4 class="projects-aside-head">But, there are more things</h4>

                    <div class="game">
                        <p>
                            Here is a little game that I have made. It is a question game about a programming languages and things you can find 
                            on this website. Look around first and check then if you really paid attention to my website and check how much you know about 
                            some programming languages. There is a timer, so be quick enough.
                        </p>
                        <button class="score-button">
    
                        </button>
                        <button class="gameButton"">
                            Let the games begin!
                        </button>
                        <p class=" gamePlay">
    
                            </p>
                            <input type="text" class="answers"><br>
                            <button class="gameCheck button">
    
                            </button>
                            <button class="nextButton button">
    
                            </button>
                    </div>
                </div>
            </div>
        </section>
        
    </main>
    <!-- 
<a href="https://getbootstrap.com/docs/3.4/css/" class="btn btn-primary btn-lg active" role="button">Contact me</a>
-->
    <script src="js/action.js"> </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>
</html>