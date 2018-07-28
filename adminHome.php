<!DOCTYPE html>
<html>
<head>
    <?php include "defaulthead.php"; ?>
    <?php $isAdmin = true; ?>
    
</head>

<body>
    <?php include "navbar.php"; ?>
    <!--Header-->
    <!--<header class="masthead" height="600">-->
    <div class="card border-0 mw-100 shadow">
        <img class="mw-100" src="images/kittens.jpeg"/>
        <div class="container card-img-overlay" id="mainsplash">
            <div class="w-100">
                <div class="row text-center">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="site-heading" id="heading">
                            <h1 class="text-light display-2"><b>Paws to Care</b></h1>
                            <h2 class="subheading text-light display-">Enriching the Lives of Pets and People</h2>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row text-center">
                    <div class=col-lg-3></div>
                    <div class="col-lg-2">
                        <div class="container">
                            <a href="dogs.php">
                                <button type="button" class="btn btn-outline-light">Dogs</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="container">
                            <a href="cats.php">
                                <button type="button" class="btn btn-outline-light">Cats</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="container">
                            <a href="exotics.php">
                                <button type="button" class="btn btn-outline-light">Exotics</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--</header>-->

    <!--Features List-->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 text-center mt-5">
                <!--<i class="fas fa-users fa-5x"></i>-->
                <img src="images/login.PNG"/>
                <h3>Personal Login</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque quam non elit finibus cursus. Aliquam erat volutpat. Cras dapibus vel nulla et faucibus.</p>
            </div>
            <div class="col-lg-4 text-center mt-5">
                <!--<i class="fas fa-syringe fa-5x"></i>-->
                <img src="images/syringe.PNG"/>
                <h3>Modern Techniques</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque quam non elit finibus cursus. Aliquam erat volutpat. Cras dapibus vel nulla et faucibus.</p>
            </div>
            <div class="col-lg-4 text-center mt-5">
                <!--<i id="logo" class="fas fa-paw fa-5x"></i>-->
                <img src="images/bigpaw.png"/>
                <h3>Personalized Care</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque quam non elit finibus cursus. Aliquam erat volutpat. Cras dapibus vel nulla et faucibus.</p>
            </div>
        </div>
    </div>
    <!--Blurb + Map-->
    <div class="container mt-5 mb-5 border-top">
        <div class="row mt-5">
            <div class="col-lg-6">
                <h3>Local Experts, World Class Care</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque laoreet erat vel augue dictum gravida. Suspendisse arcu leo, congue vel congue eu, dignissim at mi. Praesent pretium diam non velit imperdiet convallis. Integer nec leo accumsan, aliquam lorem consectetur, vehicula enim. Nulla fermentum urna eget massa auctor consectetur. Aenean suscipit, nisl quis egestas finibus, libero erat dapibus libero, vel laoreet nulla massa nec enim. In viverra, lacus nec venenatis elementum, nisi augue sodales leo, id fermentum magna urna a nulla. Curabitur et iaculis elit. Suspendisse at porttitor diam.</p>
            </div>
            <div class="col-lg-6 text-right">
                <img class="img-fluid w-75 shadow-sm" src="images/DogHomePage.jpg">
            </div>
        </div>
    </div>
    <!--Footer 
    TODO: Force to bottom of page-->
    <footer class="page-footer font-small bg-dark pt-4">
        <div class="footer-copyright text-center py-3 text-light">© 2018 Copyright:
            <a href="index.html"> Paws to Care</a>
        </div>
    </footer>

    <?php include "defaultscripts.php"; ?>
</body>


</html>