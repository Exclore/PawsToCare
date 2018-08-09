<!DOCTYPE html>
<html>
<head>
    <?php include "defaulthead.php"; ?>
    <?php loginRequired(); ?>
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
            <h3>Cats</h3>    
        </div>
        <div class="container mt-3">
            <!--Cats Table-->
                <table class="table shadow-sm" id="ownersTable">
                    <thead class="thead-dark">
                        <th>Name</th>
                        <th>Breed</th>
                        <th>Sex</th>
                        <th>Shots</th>
                        <th>Age</th>
                        <th>Declawed</th>
                        <th>Neutered</th>
                    </thead>
                    <tbody>
                    <?php $data = getcats();
                    foreach($data as $pet){
                        echo '<tr>';
                        foreach($pet as $key => $value){
                            echo '<td>';
                            if($key == "shots" || $key == "declawed" || $key == "neutered" || $key == "licensed"){
                                if($value == "yes"){
                                    echo '<i class="fas fa-check-circle"></i>';
                                }
                                else{
                                    echo '<i class="fas fa-times-circle"></i>';
                                }
                            }
                            else{
                                echo $value;
                            }
                            echo '</td>';
                        }
                        echo '</tr>';
                    }
                    ?>
                    <tbody>
                </table>
        </div>
        <div class="container mt-5">
            <h3>Dogs</h3>    
        </div>
        <div class="container mt-3">
            <!--Dogs Table-->
                <table class="table shadow-sm" id="ownersTable">
                    <thead class="thead-dark">
                        <th>Name</th>
                        <th>Breed</th>
                        <th>Sex</th>
                        <th>Shots</th>
                        <th>Age</th>
                        <th>Licensed</th>
                        <th>Neutered</th>
                    </thead>
                    <tbody>
                    <?php $data = getDogs();
                    foreach($data as $pet){
                        echo '<tr>';
                        foreach($pet as $key => $value){
                            echo '<td>';
                            if($key == "shots" || $key == "declawed" || $key == "neutered" || $key == "licensed"){
                                if($value == "yes"){
                                    echo '<i class="fas fa-check-circle"></i>';
                                }
                                else{
                                    echo '<i class="fas fa-times-circle"></i>';
                                }
                            }
                            else{
                                echo $value;
                            }
                            echo '</td>';
                        }
                        echo '</tr>';
                    }
                    ?>
                    <tbody>
                </table>
        </div>
        <div class="container mt-5">
            <h3>Exotics</h3>    
        </div>
        <div class="container mt-3">
            <!--ExoticsTable-->
                <table class="table shadow-sm" id="ownersTable">
                    <thead class="thead-dark">
                        <th>Name</th>
                        <th>Species</th>
                        <th>Sex</th>
                        <th>Neutered</th>
                        <th>Age</th>
                    </thead>
                    <tbody>
                    <?php $data = getExotics();
                    foreach($data as $pet){
                        echo '<tr>';
                        foreach($pet as $key => $value){
                            echo '<td>';
                            if($key == "shots" || $key == "declawed" || $key == "neutered" || $key == "licensed"){
                                if($value == "yes"){
                                    echo '<i class="fas fa-check-circle"></i>';
                                }
                                else{
                                    echo '<i class="fas fa-times-circle"></i>';
                                }
                            }
                            else{
                                echo $value;
                            }
                            echo '</td>';
                        }
                        echo '</tr>';
                    }
                    ?>
                    <tbody>
                </table>
        </div>
    </div>  


    <?php include "defaultscripts.php"; ?>
</body>
</html>