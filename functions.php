<?php
session_start();
session_register_shutdown();
require_once ($_SERVER['DOCUMENT_ROOT'] . '/config.php');

function isLoggedIn(){
    return isset($_SESSION['username']);
}

function loginRequired(){
    if(!isLoggedIn()){
        header("Location: /login.php");
        die;
    }
}

function adminRequired(){
    if(!isAdmin()){
        header("Location: /login.php");
        die;
    }
}

function isAdmin(){
    if(isset($_SESSION['userType'])){
        return $_SESSION['userType'] == 'administrator' or $_SESSION['userType'] == 'vet';
    }
    return false;
}

function login($username, $password){
    global $db;
    $q = $db->prepare('SELECT users.id, users.username, users.pass, userType.type FROM users LEFT JOIN userType ON users.user_type_id = userType.id WHERE username LIKE ? LIMIT 1');
    $q->bind_param("s", $username);
    $q->execute();
    $q->store_result();
    $q->bind_result($userId, $dbUsername, $dbPassword, $dbUserType);
    $q->fetch();
    if(password_verify($password, $dbPassword)){
        $_SESSION['userId'] = $userId;
        $_SESSION["username"] = $dbUsername;
        $_SESSION["userType"] = $dbUserType;
        header("Location: /");
        die;
    }
    else{
        return null;
    }
}

function logout(){
    $_SESSION = array();
    header("Location: /");
    die;
}


function getmysql($tablename, $page = -1){
    global $db;
    
    if($tablename == "owners"){
        $qstring = 'SELECT owners.fname, owners.lname, owners.add1, owners.add2, owners.city, owners.st, owners.zip FROM owners'.($page>0?(" LIMIT 10 OFFSET ".(($page-1)*10)):"");
    }
    else if($tablename == "cats"){
        $qstring = 'SELECT cats.name, '.$tablename.'.breed, '.$tablename.'.sex, '.$tablename.'.shots, floor(datediff(curdate(),'.$tablename.'.birthdate) / 365), '.$tablename.'.declawed, '.$tablename.'.neutered, CONCAT(owners.fname, " ", owners.lname) AS "owner", CONCAT("[",GROUP_CONCAT(CONCAT(\'{"vet":"\',vetName,\'","date":"\',date,\'","note":"\',note,\'"}\') SEPARATOR ","),"]") AS notes FROM '.$tablename.' LEFT JOIN '.$tablename.'Owners on '.$tablename.'.id='.$tablename.'Owners.'.$tablename.'Fk LEFT JOIN owners on owners.id = '.$tablename.'Owners.ownersFk LEFT JOIN '.substr($tablename, 0, -1).'Notes on '.$tablename.'.id = '.substr($tablename, 0, -1).'Notes.'.$tablename.'Fk GROUP BY '.$tablename.'.id'.($page>0?(" LIMIT 10 OFFSET ".(($page-1)*10)):"");
    }
    else if($tablename == "dogs"){
        $qstring = 'SELECT dogs.name, '.$tablename.'.breed, '.$tablename.'.sex, '.$tablename.'.shots, floor(datediff(curdate(),'.$tablename.'.birthdate) / 365), '.$tablename.'.licensed, '.$tablename.'.neutered, '.$tablename.'.weight, CONCAT(owners.fname, " ", owners.lname) AS "owner", CONCAT("[",GROUP_CONCAT(CONCAT(\'{"vet":"\',vetName,\'","date":"\',date,\'","note":"\',note,\'"}\') SEPARATOR ","),"]") AS notes FROM '.$tablename.' LEFT JOIN '.$tablename.'Owners on '.$tablename.'.id='.$tablename.'Owners.'.$tablename.'Fk LEFT JOIN owners on owners.id = '.$tablename.'Owners.ownersFk LEFT JOIN '.substr($tablename, 0, -1).'Notes on '.$tablename.'.id = '.substr($tablename, 0, -1).'Notes.'.$tablename.'Fk GROUP BY '.$tablename.'.id'.($page>0?(" LIMIT 10 OFFSET ".(($page-1)*10)):"");
    }
    else{
        $qstring = 'SELECT exotics.name, '.$tablename.'.species, '.$tablename.'.sex, floor(datediff(curdate(),'.$tablename.'.birthdate) / 365), '.$tablename.'.neutered, CONCAT(owners.fname, " ", owners.lname) AS "owner", CONCAT("[",GROUP_CONCAT(CONCAT(\'{"vet":"\',vetName,\'","date":"\',date,\'","note":"\',note,\'"}\') SEPARATOR ","),"]") AS notes FROM '.$tablename.' LEFT JOIN '.$tablename.'Owners on '.$tablename.'.id='.$tablename.'Owners.'.$tablename.'Fk LEFT JOIN owners on owners.id = '.$tablename.'Owners.ownersFk LEFT JOIN '.substr($tablename, 0, -1).'Notes on '.$tablename.'.id = '.substr($tablename, 0, -1).'Notes.'.$tablename.'Fk GROUP BY '.$tablename.'.id'.($page>0?(" LIMIT 10 OFFSET ".(($page-1)*10)):"");
    }
    $q = $db->prepare($qstring);
    $q->execute();
    $q->store_result();

    $data = array();

    if($tablename == "cats"){
        $q->bind_result($name, $breed, $sex, $shots, $age, $declawed, $neutered, $owner, $notes);
        while (mysqli_stmt_fetch($q)){

            $data[] = array(
                "name"=>$name,
                "breed"=>$breed,
                "sex"=>$sex,
                "shots"=>$shots==1 ? "yes":"no",
                "age"=>$age,
                "declawed"=>$declawed==1 ? "yes":"no",
                "neutered"=>$neutered==1 ? "yes":"no",
                "owner"=>$owner,
                "notes"=>json_decode($notes)
            );
        }
    }
    else if($tablename == "dogs"){
        $q->bind_result($name, $breed, $sex, $shots, $age, $licensed, $neutered, $weight, $owner, $notes);
        while (mysqli_stmt_fetch($q)){
            $data[] = array(
                "name"=>$name,
                "breed"=>$breed,
                "sex"=>$sex,
                "shots"=>$shots==1 ? "yes":"no",
                "age"=>$age,
                "licensed"=>$licensed==1 ? "yes":"no",
                "neutered"=>$neutered==1 ? "yes":"no",
                "weight"=>$weight,
                "owner"=>$owner,
                "notes"=>json_decode($notes)
            );
        }
    }
    else if ($tablename == "exotics"){
        $q->bind_result($name, $species, $sex, $age, $neutered,  $owner, $notes);
        while (mysqli_stmt_fetch($q)){
            $data[] = array(
                "name"=>$name,
                "species"=>$species,
                "sex"=>$sex,
                "neutered"=>$neutered==1 ? "yes":"no",
                "age"=>$age,
                "owner"=>$owner,
                "notes"=>json_decode($notes)
            );
        }
    }
    else if($tablename == "owners"){
        $q->bind_result($fname, $lname, $add1, $add2, $city, $st, $zip, $notes);
        while (mysqli_stmt_fetch($q)){
            $data[] = array(
                "fname"=>$fname,
                "lname"=>$lname,
                "add1"=>$add1,
                "add2"=>$add2,
                "city"=>$city,
                "st"=>$st,
                "zip"=>$zip,
                "notes"=>json_decode($notes)
            );
        }
    }


    mysqli_stmt_close($q);
    return $data;
}

function mysqlToJson($tablename){
    $data = getmysql($tablename);
    
    echo '<script type="text/javascript">jsonObj = ';
    echo json_encode(array("data"=>$data), JSON_UNESCAPED_UNICODE);
    echo ";";
    echo 'pages = '.(count($data)/10).';';
    echo '</script>'; 
}

function mysqlOwners($page){
    return getmysql("owners", $page);
}//*/

function getCats(){
    global $db;
    $uname = $_SESSION['username'];
    $qstring = 'SELECT cats.name, cats.breed, cats.sex, cats.shots, floor(datediff(curdate(),cats.birthdate) / 365), cats.declawed, cats.neutered FROM cats LEFT JOIN catsOwners on cats.id=catsOwners.catsFk LEFT JOIN owners on owners.id = catsOwners.ownersFk LEFT JOIN users ON users.id = owners.id WHERE users.username=?';    
    $q = $db->prepare($qstring);
    $q->bind_param("s", $uname);
    $q->execute();
    $q->store_result();
    $data = array();
    $q->bind_result($name, $breed, $sex, $shots, $age, $declawed, $neutered);
    while (mysqli_stmt_fetch($q)){

        $data[] = array(
            "name"=>$name,
            "breed"=>$breed,
            "sex"=>$sex,
            "shots"=>$shots==1 ? "yes":"no",
            "age"=>$age,
            "declawed"=>$declawed==1 ? "yes":"no",
            "neutered"=>$neutered==1 ? "yes":"no"
        );
    }
    return $data;
}

function getDogs(){
    global $db;
    $uname = $_SESSION['username'];
    $qstring = 'SELECT dogs.name, dogs.breed, dogs.sex, dogs.shots, floor(datediff(curdate(),dogs.birthdate) / 365), dogs.licensed, dogs.neutered FROM dogs LEFT JOIN dogsOwners on dogs.id=dogsOwners.dogsFk LEFT JOIN owners on owners.id = dogsOwners.ownersFk LEFT JOIN users ON users.id = owners.id WHERE users.username=?';    
    $q = $db->prepare($qstring);
    $q->bind_param("s", $uname);
    $q->execute();
    $q->store_result();
    $data = array();
    $q->bind_result($name, $breed, $sex, $shots, $age, $licensed, $neutered);
    while (mysqli_stmt_fetch($q)){

        $data[] = array(
            "name"=>$name,
            "breed"=>$breed,
            "sex"=>$sex,
            "shots"=>$shots==1 ? "yes":"no",
            "age"=>$age,
            "licensed"=>$licensed==1 ? "yes":"no",
            "neutered"=>$neutered==1 ? "yes":"no"
        );
    }
    return $data;
}

function getExotics(){
    global $db;
    $uname = $_SESSION['username'];
    $qstring = 'SELECT exotics.name, exotics.species, exotics.sex, exotics.neutered, floor(datediff(curdate(),exotics.birthdate) / 365) FROM exotics LEFT JOIN exoticsOwners on exotics.id=exoticsOwners.exoticsFk LEFT JOIN owners on owners.id = exoticsOwners.ownersFk LEFT JOIN users ON users.id = owners.id WHERE users.username=?';    
    $q = $db->prepare($qstring);
    $q->bind_param("s", $uname);
    $q->execute();
    $q->store_result();
    $data = array();
    $q->bind_result($name, $species, $sex, $neutered, $age);
    while (mysqli_stmt_fetch($q)){

        $data[] = array(
            "name"=>$name,
            "species"=>$species,
            "sex"=>$sex,
            "neutered"=>$neutered==1 ? "yes":"no",
            "age"=>$age
        );
    }
    return $data;
}