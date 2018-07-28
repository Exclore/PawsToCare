<!DOCTYPE html>
<html>
<head>
    <?php include "defaulthead.php"; ?>
    <?php $isAdmin = true; ?>
    
</head>

<body>
    <?php include "navbar.php"; ?>

        <!-- Contact Information-->
        <div class="container">
            <div class="row mt-5">
                <div id="contactInfo" class="col-6">
                    <h2>Contact Information</h2>
                    <p><b>Phone</b><br> 801-123-4567</p>
                    <p><b>Address</b><br> 123 Mulberry Lane<br>Orem, UT 84058</p>
                </div>
                <div id="contactInfo" class="col-6">
                    <h2>Hours of Operation</h2>
                    <p><b>Monday-Saturday</b><br>7AM-10PM<br><b>Sunday</b><br>Closed</p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="row col-6 ml-1">
                        <div id="googleMap" height="400" class="w-75"></div>
                </div>
                <div class="col-lg-6">
                    <h2>Contact Us</h2><br>
                    <form class="">
                        <div class="form-group col-12">
                            <label for="formEmail">Email Address</label>
                            <input type="email" class="form-control" id="formEmail" placeholder="email@example.com">
                        </div>
                        <div class="form-group col-12">
                            <label for="formTextBox">Message</label>
                            <textarea class="form-control" id="formTextBox" rows="5" placeholder="Please enter your message to us here."></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
        <!--Footer-->
    <footer class="page-footer font-small bg-dark pt-4 mt-4" hidden>
            <div class="footer-copyright text-center py-3">© 2018 Copyright:
                <a href="https://dummyaddress.com/"> Paws to Care</a>
            </div>
    </footer>
    <script>
        function myMap() {
            var mapProp= {
                center:new google.maps.LatLng(40.278830, -111.710787),
                zoom:16,
            };
            var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
            var marker = new google.maps.Marker({
                poition:{lat:"40.278830", lng:"-111.710787"},
                map:map,
            });
            var infowindow = new google.maps.InfoWindow({
            content: '<p>Marker Location:' + marker.getPosition() + '</p>'
            });

            google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map, marker);
            });
        }
    </script>            
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOSH6jd_8jT8EpFr8_nX6rQvwsvb6lqJg&callback=myMap"></script>
</body>
</html>