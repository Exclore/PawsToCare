
    <?php include "template/header.php"; ?>

        <!--Header-->
    <!--<header class="masthead" height="600">-->
    <div class="card border-0 mw-100 shadow">
        <img class="mw-100" src="images/Kittens.jpeg"/>
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
                    <?php if(isAdmin() && isLoggedIn()) : ?>
                        <div class=col-lg-3></div>
                        <div class="col-lg-2">
                            <div class="container">
                                <a href="/admin/dogs.php">
                                    <button type="button" class="btn btn-outline-light">Dogs</button>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="container">
                                <a href="/admin/cats.php">
                                    <button type="button" class="btn btn-outline-light">Cats</button>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="container">
                                <a href="/admin/exotics.php">
                                    <button type="button" class="btn btn-outline-light">Exotics</button>
                                </a>
                            </div>
                        </div>
                    <?php elseif(!isAdmin() && isLoggedIn()) : ?>
                        <div class="col-lg-5"></div>
                        <div class="col-lg-2">
                            <div class="container">
                                <a href="ownerPets.php">
                                    <button type="button" class="btn btn-outline-light">My Pets</button>
                                </a>
                            </div>
                        </div>
                    <?php else :?>
                        <div class=col-lg-4></div>
                        <div class="col-lg-2">
                            <div class="container">
                                <a href="about.php">
                                    <button type="button" class="btn btn-outline-light">About Us</button>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="container">
                                <a href="contact.php">
                                    <button type="button" class="btn btn-outline-light">Contact Us</button>
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>


                </div>
            </div>
        </div>
    </div>
    <!--</header>-->
    <!--Features List-->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 text-center mt-5">
                <i class="fas fa-users fa-5x"></i>
                <h3>Personal Login</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque quam non elit finibus cursus. Aliquam erat volutpat. Cras dapibus vel nulla et faucibus.</p>
            </div>
            <div class="col-lg-4 text-center mt-5">
                <i class="fas fa-syringe fa-5x"></i>
                <h3>Modern Techniques</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque quam non elit finibus cursus. Aliquam erat volutpat. Cras dapibus vel nulla et faucibus.</p>
            </div>
            <div class="col-lg-4 text-center mt-5">
                <i class="fas fa-paw fa-5x"></i>
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
  
    
    <?php include "template/footer.php"; ?>
