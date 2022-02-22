<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Home</title>
</head>
<?php include_once("defaults/head.php") ?>
<body class="myBody ">
<?php
    include_once('defaults/menu.php');   
?>
    <!--
        <div class="container">
  	<div class="p-5 my-4 bg-light rounded-3">
        <h1>Learn to Create Websites</h1>
        <p class="lead">In today's world internet is the most popular way of connecting with the people. At <a href="https://www.tutorialrepublic.com" class="text-success" target="_blank">tutorialrepublic.com</a> you will learn the essential web development technologies along with real life practice examples, so that you can create your own website to connect with the people around the world.</p>
        <p><a href="https://www.tutorialrepublic.com" target="_blank" class="btn btn-success btn-lg">Get started today</a></p>
    </div>-->

        <div class="container">
            <div class="p-5 my-4 bg-light rounded3 intro-info">
                <h2 class="lower-head headingThree">This is me</h2>
                <p class="about">
                    Hello, my name is Thierry, I am 25 years old. I am an enthousiastic webdesigner who works with HTML,
                    CSS, Javascript, PHP and C#. I am still in school and learning more (programming) languages. I am now
                    working on
                    front-end developing as you can see. So far, I worked on this website and some applications (with a little <br> back-end Javascript,
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
            $db = new PDO("mysql:host=localhost;dbname=portfolio", "root", ""); 
            if (isset($_POST['verzenden'])) {
                $naam = $_POST['naam'];
                $message = $_POST['bericht'];
                $mailadres = $_POST['gmail'];
                $query= $db->prepare("INSERT INTO messages(naam, bericht, gmail) 
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
                //mail($ontvanger, $onderwerp, $bericht, $header);
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
    <!--<img src="../public/img/me.jpg" class="rounded me">-->
            </div>
                
        </div>
    <br>
    <div class="row project projects">
            <h5>My projects</h5><br>
        </div>
    <div class="col-12">
    <div class="row carousel-row">
        <div id="photoshoot" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#photoshoot" data-slide-to="0" class="active"></li>
        <li data-target="#photoshoot" data-slide-to="1"></li>
        <li data-target="#photoshoot" data-slide-to="2"></li>
        <li data-target="#photoshoot" data-slide-to="3"></li>
        <li data-target="#photoshoot" data-slide-to="4"></li>
    </ul>
    <div class='carousel-inner'>
    <div class='carousel-item active'>
            <img src='../public/img/baby.jpg' class='rounded projectCoursel'>
            <div class='carousel-caption'>
            <div class='carousel-info'>
                    <h3>Calculator</h3>
                    <p>Thank you, Chicago!</p>
                </div>
            </div>
        </div>
    <?php
    try {
        $db = new PDO("mysql:host=localhost;dbname=portfolio", "root", "");
        $query = $db->prepare("SELECT * FROM projecten");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach($result as &$data) {
        
            echo "
                <div class='carousel-item'>
                    <img src='". $data['image'] . "' class='rounded projectCoursel'>
                    <div class='carousel-caption'>
                        <div class='carousel-info'>
                            <h3>" . $data["title"] .  "</h3>
                            <p> " . $data["description"] . "</p>
                            <a href=". $data["github-link"] .">Github</a>
                        </div>
                    </div>
                </div>";
                    
        }
        
    } catch (PDOException $e) {
        die("Error!: " . $e->getMessage());
    }
        ?>
        </div>
        <a class="carousel-control-prev" href="#photoshoot" data-slide="prev"><span class="carousel-control-prev-icon"></span>	
        </a>
        <a class="carousel-control-next" href="#photoshoot" data-slide="next"> <span class="carousel-control-next-icon"></span>	
        </a>
        </div>
        </div>
    </div>
    
       <h3 class="headingTwo">My other kind of projects</h3>

        <div class="row">
            <div class="col-5">
                <?php include_once("../Templates/defaults/calculator.php"); ?>
            </div>
        </div>
        <!--Overige opdracht (een quiz)-->
            <div class="row">
                <div class="col-7">
                <h3 class="projects-aside-head headingThree">My own quiz</h3>
                    <div class="game">
                        <p>
                            Here is a little game that I have made. It is a question game about a programming languages and things you can find 
                            on this website. Look around first and check then if you really paid attention to my website and check how much you know about 
                            some programming languages. There is a timer, so be quick enough.
                        </p>
                        <button class="score-button">
    
                        </button>
                        <button class="gameButton">
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
                </div>
    </main>
    <?php include_once("defaults/footer.php") ?>
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