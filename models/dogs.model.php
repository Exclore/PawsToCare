<?php
class Dogs {

    static function getById($dogId){
        global $db;
        $q = $db->prepare('SELECT * FROM dogs WHERE id = ?');
        $q->bind_params("i", $dogId);
        $q->execute();
        $q->bind_result($id, $name, $breed, $sex, $shots, $licenses, $neutered, $birthday, $size);
        while($q->fetch()){
            return [$name, $breed, $sex, $shots, $licenses, $neutered, $birthday, $size];
        }
    }
   

    // Gets all cats for a specific owner id
    static function getByOwner($ownerId){
        // Get a list of cat ids for the owner
        $dogIds = [];
        $dogs = [];
        global $db;
        $q = $db->prepare('SELECT * FROM dogsOwners WHERE id = ?');
        $q->bind_params("i", $ownerId);
        $q->execute();
        $q->bind_result($id, $dogsFk, $ownersFk);
        
        while($q->fetch()){
            array_push($dogIds, $dogsFk);
        }

        foreach($dogIds as $dogId) {
            array_push($dogs, Dogs::getById($dogId));
        }

        return $cats;

    }

    function getAll(){
        $data = [];
        global $db;
        $q = $db->prepare('SELECT * FROM dogs');
        $q->execute();
        $q->bind_result($id, $name, $breed, $sex, $shots, $licenses, $neutered, $birthday, $size);
        while($q->fetch()){
            $tempArray = [$name, $breed, $sex, $shots, $licenses, $neutered, $birthday, $size];
            array_push($data, $tempArray);
        }
        return $data;
    }
}