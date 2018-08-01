    <?php 

    $columnNames = array("cats"=>array("Name", "Breed", "Sex", "Shots", "Declawed", "Neutered", "Birthdate"),"dogs"=>array("Name", "Breed", "Sex", "Shots", "Licensed", "Neutered", "Birthdate", "Size"),"exotics"=>array("Name", "Species", "Sex", "Neutered", "Birthdate"));
    $descriptions = array(
        "Name"=>"Name of Pet",
        "Breed"=>"Breed of the Pet",
        "Sex"=>"Sex of the Pet, Male or Female",
        "Shots"=>"Current Vaccination Status",
        "Age"=>"Age in Years",
        "Size"=>"Large, Medium, or Small",
        "Licensed"=>"Current License Status",
        "Neutered"=>"Whether Pet is Neutered",
        "Owners"=>"Owner(s) of the Pet",
        "Notes"=>"Misc. Information and Notes",
        "Declawed"=>"Whether Cat is Declawed",
        "Species"=>"Species of the Pet",
        "Birthdate"=>"Pet's date of birth"
    );

    function generateTable($tableType){
        global $columnNames;
        global $descriptions;
        $innerHtml = '<thead class="thead-dark">';
        $fields = $columnNames[$tableType];

        foreach($fields as $field){
            $innerHtml .= '<th scope="col" class="text-capitalize pointer" data-key="' . $field . '" title="' . $descriptions[$field] . '"data-toggle="tooltip" data-placement="top">' . $field . '<span id="asc" class="d-none"> △</span><span id="desc" class="d-none"> ▽</span></th>'; 
        } 
        $innerHtml .= '</thead>';
        echo $innerHtml;
    }
    
    function getFields($tableType){
        global $db;
        $q = $db->prepare('SELECT users.username, users.pass, userType.type FROM users LEFT JOIN userType ON users.user_type_id = userType.id WHERE username LIKE ? LIMIT 1');
        $q->bind_param("s", $username);
        $q->execute();
        $q->store_result();
        $q->bind_result($dbUsername, $dbPassword, $dbUserType);
        $q->fetch();

    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    ?>