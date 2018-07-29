<!DOCTYPE html>
<html>
<head>
    <?php include "defaulthead.php"; ?>
    <?php loginRequired(); ?>
    <?php adminRequired(); ?>
</head>

<body>
    <?php include "navbar.php"; ?>

    <!--Content-->
    <div id="body">
        <div class="container mt-5">
            <h3>Cats</h3>    
        </div>
        <div class="container mt-3">
            <!--Table-->
            <table class="table shadow-sm" id="petTable">
            </table>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
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

    
    <?php include "defaultscripts.php"; ?>
    <script>
        $(document).ready(function(){
            loadTable("cats", ["name", "breed", "sex", "shots", "age", "declawed", "neutered", "owners", "notes"]);
        });
    </script>
</body>


</html>