<!DOCTYPE html>
<html>
<head>
    <?php include "defaulthead.php"; ?>
    <?php loginRequired(); ?>
    <?php adminRequired(); ?>
    <?php 
    $currentPage = 1;
    if(isset($_GET['p'])){
        $currentPage = $_GET['p'];
    }
    ?>
</head>

<body>
    <?php include "navbar.php"; ?>
    <div id="body">
        <div class="container mt-5">
            <h3>Owners</h3>    
        </div>
        <div class="container mt-3">
            <!--Table-->
                <table class="table shadow-sm" id="ownersTable">
                    <thead class="thead-dark">
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Address</th>
                        <th>Address Cont.</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Zip Code</th>
                    </thead>
                    <tbody>
                    <?php $data = mysqlOwners($currentPage); 
                    foreach($data as $owner){
                        echo '<tr>';
                        foreach($owner as $key => $value){
                            echo '<td>';
                            echo $value;
                            echo '</td>';
                        }
                        echo '</tr>';
                    }
                    ?>
                    <tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination d-flex justify-content-center">
                        <?php if($currentPage > 1) : ?>                        
                            <li class="page-item"><a class="page-link" href="?p=<?php echo $currentPage-1; ?>">Previous</a></li>
                        <?php endif; ?>
                            <li class="page-item"><a class="page-link" href="?p=<?php echo $currentPage+1; ?>">Next</a></li>

                    </ul>
                </nav>
        </div>
    </div>  


    <?php include "defaultscripts.php"; ?>
</body>
</html>