<!DOCTYPE html>
<html>
<head>
    <?php include "defaulthead.php"; ?>
    <?php $isAdmin = true; ?>
    
</head>

<body>
    <?php include "navbar.php"; ?>

    <!--Description Blurb-->
    <div class="container">
        <div class="container mt-5">
            <h2>About Us</h2>
        </div>
        <div class="col-lg-12">
            <div id="homepageBlurb" >
                <div class="float-lg-right col-lg-5 d-inline-block ml-4 mb-4 ">
                    <img src="images/Veterinary_Office.JPG" class="img-fluid shadow"/>
                </div>
                <p> 
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur cursus odio eget enim egestas, ac blandit urna interdum. Proin enim nisi, commodo sed bibendum eget, ullamcorper quis eros. Nulla pellentesque elementum libero, eu congue dui varius ac. Vestibulum condimentum ligula non nisi sollicitudin vulputate. Vivamus iaculis ullamcorper elit in tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis interdum fermentum sollicitudin. Sed convallis dignissim ex, ac scelerisque risus eleifend et. Vivamus cursus dui vel enim ullamcorper mattis. 
                    <br><br>
                    Phasellus diam mi, euismod ut dapibus ac, efficitur ac diam. Phasellus id mi cursus, mollis massa eget, posuere risus. Donec in ligula tincidunt, eleifend nulla in, congue nibh. Aenean in mauris tellus. Duis quis tellus ac erat sagittis feugiat vel ac nisi. Quisque quis mattis massa, quis fringilla lectus. Quisque vel odio vel sem posuere egestas a ac ligula. Sed quis pulvinar nulla. Morbi pharetra mi ante, eu elementum lacus mollis sit amet. Aliquam aliquet rhoncus sapien in vestibulum. Fusce pretium quis mi nec molestie. 
                </p>
                
            </div>
           
        </div>

        <!--Staff Section-->
        <div class="container">
            <div class="mt-5">
                <h2>Meet Our Staff</h2>
            </div>
            <div class="row mt-2">
                <div class="col-lg-4  p-5 d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="mh-100 w-100 pl-5 pr-5 pb-2">
                            <img src="images/Cynthia.jpg" class="w-100 img-fluid shadow rounded"/>
                        </div>
                    </div>
                    <div class="row">
                        <h4>Cynthia Truska</h4>
                    </div>
                    <div class="row">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur cursus odio eget enim egestas, ac blandit urna interdum. Proin enim nisi, commodo sed bibendum eget.</p>
                    </div>
                </div>
                <div class="col-lg-4  p-5 d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="mh-100 w-100 pl-5 pr-5 pb-2">
                            <img src="images/Cynthia.jpg" class="w-100 img-fluid shadow rounded"/>
                        </div>
                    </div>
                    <div class="row">
                        <h4>John Truska</h4>
                    </div>
                    <div class="row">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur cursus odio eget enim egestas, ac blandit urna interdum. Proin enim nisi, commodo sed bibendum eget.</p>
                    </div>
                </div>
                <div class="col-lg-4  p-5 d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="mh-100 w-100 pl-5 pr-5 pb-2">
                            <img src="images/Cynthia.jpg" class="w-100 img-fluid shadow rounded"/>
                        </div>
                    </div>
                    <div class="row">
                        <h4>Shawn Smith</h4>
                    </div>
                    <div class="row">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur cursus odio eget enim egestas, ac blandit urna interdum. Proin enim nisi, commodo sed bibendum eget.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-2"></div>

            <div class="row mt-2 justify-content-center">
                <div class="col-lg-4  p-5 d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="mh-100 w-100 pl-5 pr-5 pb-2">
                            <img src="images/Cynthia.jpg" class="w-100 img-fluid shadow rounded"/>
                        </div>
                    </div>
                    <div class="row">
                        <h4>Julie Hammond</h4>
                    </div>
                    <div class="row">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur cursus odio eget enim egestas, ac blandit urna interdum. Proin enim nisi, commodo sed bibendum eget.</p>
                    </div>
                </div>

                <div class="col-lg-2"></div>

                <div class="col-lg-4  p-5 d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="mh-100 w-100 pl-5 pr-5 pb-2">
                                <img src="images/Cynthia.jpg" class="w-100 img-fluid shadow rounded"/>
                            </div>
                        </div>
                        <div class="row">
                            <h4>Christopher Wright</h4>
                        </div>
                        <div class="row">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur cursus odio eget enim egestas, ac blandit urna interdum. Proin enim nisi, commodo sed bibendum eget.</p>
                        </div>
                    </div>
                
            </div>
        </div>
    </div>

    <!--Footer 
    TODO: Force to bottom of page-->
    <footer class="page-footer font-small bg-dark pt-4 mt-4" hidden>
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href="https://dummyaddress.com/"> Paws to Care</a>
        </div>
    </footer>

    <!--Scripts-->
    <?php include "defaultscripts.php"; ?>
</body>


</html>