<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Intro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/styling.css">
    <!--

	Emmet een snelle manier van codes zoals ul>li.item$*5 waarbij je een ul met 5 li die item1 oplopend tot 5 heten.

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
-->
</head>
<body class="myBody ">
    <?php
    include_once('defaults/users/menu.php');
    
    ?>
    <header>
        <div class="row">
            <div class="col-sm">
                <h1 class="head">Hello, how nice of you taking a look at my website!</h1>
            </div>
        </div>
    </header>
    <aside>
    </aside>
    <main>
        <section class="part-one">
            <div class="row">
                <div class="col-sm-6">
                    <h2 class="lower-head headingThree">This is me</h2>
                    <p class="about">
                        Hello, my name is Thierry, I am 25 years old. I am an enthousiastic webdesigner who works with HTML, CSS, Javascript, PHP and C#. 
                        I am still in school and learning more (programming) languages. I am now working on front-end developing as you can see. 
                        So far, I worked on this website and some applications (with a little back-end Javascript, PHP and C#).

                        If you would like to contact me, please press the contact button or write a message with your contact 
                        information below.
                    </p>
                    <button class="contact" type="active">
                        <a href="mailto:thierry.broersma@gmail.com">Contact me</a>
                    </button>
                </div>
                <div class="col-sm-4">
                    <img src="../public/img/me.jpg" class="rounded me">
                </div>
            </div>
        </section>
        <section class="part-two">
            <div class="row project">
                <div class="col-sm-6">
                    <h3 class="headingThree">My projects</h3>
                    <p>
                        Here is a calculator that I have made. Since I wanted a little bit more in my calculator, 
                        so I a got a design from a teacher and added more functions and designed the way it fits together. 
                        I am proud of the design and how everything works together. It is a good thing to got a bit of code 
                        and to learn what it does by working with it.
                    </p>
                    <!--Rekenmachine-->
                    <div class="container computingBlock">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="displayValue">0</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-1 ">
                                <button class="buttons calculator_item" data-action="BMI">BMI - W/L</button>
                            </div>
                            <div class="col-xs-1 ">
                                <button class="buttons calculator_item" data-action="tax">Loan tax scale</button>
                            </div>
                            <div class="col-xs-1 ">
                                <button class="buttons calculator_item" data-action="bruto">Taxable income M</button>
                            </div>
                            <div class="col-xs-1 ">
                                <button class="buttons calculator_item" data-action="BTW">Inclusive BTW</button>
                            </div>
                            <div class="col-xs-1 ">
                                <button class="buttons calculator_item" data-action="N-BTW">Exclusive BTW</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-1 ">
                                <button class="buttons calculator_item" data-number="1">1</button>
                            </div>
                            <div class="col-xs-1 ">
                                <button class="buttons calculator_item" data-number="2">2</button>
                            </div>
                            <div class="col-xs-1 ">
                                <button class="buttons calculator_item" data-number="3">3</button>
                            </div>
                            <div class="col-xs-1 ">
                                <button class="buttons calculator_item" data-action="count">+</button>
                            </div>
                            <div class="col-xs-1 ">
                                <button class="buttons calculator_item" data-action="power">&sup2;</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-1 ">
                                <button class="buttons calculator_item" data-number="4">4</button>
                            </div>
                            <div class="col-xs-1 ">
                                <button class="buttons calculator_item" data-number="5">5</button>
                            </div>
                            <div class="col-xs-1 ">
                                <button class="buttons calculator_item" data-number="6">6</button>
                            </div>
                            <div class="col-xs-1 ">
                                <button class="buttons calculator_item" data-action="minus">-</button>
                            </div>
                            <div class="col-xs-1 ">
                                <button class="buttons calculator_item" data-action="root">&#8730;</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-1 ">
                                <button class="buttons calculator_item" data-number="7">7</button>
                            </div>
                            <div class="col-xs-1 ">
                                <button class="buttons calculator_item" data-number="8">8</button>
                            </div>
                            <div class="col-xs-1 ">
                                <button class="buttons calculator_item" data-number="9">9</button>
                            </div>
                            <div class="col-xs-1">
                                <button class="buttons calculator_item" data-action="multiply">x</button>
                            </div>
                            <div class="col-xs-1">
                                <button class="buttons calculator_item" data-number=".">.</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-1">
                                <button class="buttons calculator_item ac-button" data-action="reset">C</button>
                            </div>
                            <div class="col-xs-1">
                                <button class="buttons calculator_item" data-number="0">0</button>
                            </div>
                            <div class="col-xs-1">
                                <button class="buttons calculator_item" data-action="solution">=</button>
                            </div>
                            <div class="col-xs-1">
                                <button class="buttons calculator_item" data-action="divide">/</button>
                            </div>
                            <div class="col-xs-1">
                                <button class="buttons calculator_item" data-action="plusmin">+/-</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Overige projecten-->
                <div class="col-sm-6 higherLower">
                    <div class="card-columns projects-aside">
                        <div class="card bg-success">
                            <div class="card-body">
                                <p class="card-text">
                                    This was my first project. it is the higher lower game made in C#. 
                                    It was a basic school project, where I made a few extra options in the game to see what I was 
                                    capable of at that point.</p>
                                <a href="https://github.com/ROCMondriaanTIN/sd20-csharp-card-assignment-Thbroersma/tree/advanced"
                                    class="card-link">C# H/L game</a>
                                <img class="card-img" src="../public/img/high.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <h4 class="projects-aside-title">Interaction design</h4>
                    <div class="card-columns last-site">
                        <div class="card bg-success">
                            <div class="card-body">
                                <p class="card-text">
                                    This is one of my last projects. The object was to tackle a problem for students in the COVID times. 
                                    We looked into the problem of the loss of motivation of the students. We have had made a version 
                                    of Instagram with inspirational scenes and motivational quotes.
                                </p>
                                <a href="https://github.com/ROCMondriaanTIN/sd20-kd5029-interactiondesign-w-o-r-c"
                                    class="card-link">Motivation Website</a>
                                <img class="card-img" src="../public/img/site.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="projects-aside-head">Bootstrap project</h4>
                    <div class="card-columns projects-aside">
                        <div class="card bg-success">
                            <div class="card-body">
                                <p class="card-text">
                                    Sometimes it is good to test your speed in your work. This was a test that we had to take, 
                                    to see how good you are making a website in only 2 hours with only a little but information. 
                                    In this case, we had to make a website for a snackbar company. I am proud of the result that I made.
                                </p>
                                <a href="https://github.com/ROCMondriaanTIN/sd20-kd5029-interactiondesign-w-o-r-c"
                                    class="card-link">Snackbar</a>
                                <img class="card-img" src="../public/img/snack.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Overige opdracht (een quiz)-->
        <section class="part-one">
            <div class="row">
                <div class="col-12">
                    <div class="game">
                        <h4 class="projects-aside-head">But there are more things</h4>
                        <p>
                            Here is a little game that I have made. It is a question game about a programming 
                            languages and things you can find on this website. Look around first and check then 
                            if you really paid attention to my website and check how much you know about some 
                            programming languages. There is a timer, so be quick enough.
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
    <footer></footer>
    <!-- 
<a href="https://getbootstrap.com/docs/3.4/css/" class="btn btn-primary btn-lg active" role="button">Contact me</a>
-->
    <script src="../public/js/action.js"> </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>
</html>