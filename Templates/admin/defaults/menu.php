<nav class="navbar navbar-expand-lg navbar-danger bg-danger">
    <div class="container-fluid">
        <a class="navbar-brand" href="/home">
            Sportcenter
        </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="/home">home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/categories">sportapparaat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">contact</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                
                    
                    <?php 
                        if ($_SESSION['login'] == true) {
                            echo "<li class='nav-item'>
                            <a class='nav-link' href= /account>account</a>
                            <li class='nav-item'>
                            <a class='nav-link' href= /uitloggen>uitloggen</a>";
                           
                        } else {
                            echo "<li class='nav-item'>
                                    <a class='nav-link'  href='/registreren'>aanmelden</a>
                                </li>
                                <li class='nav-item'>
                            <a class='nav-link' href= /inloggen>inloggen</a>";
                        }
                    ?>
                    <!--<a class='nav-link' href= /inloggen>inloggen</a>-->
                </li>
            </ul>
        </div>
    </div>
</nav>