<?php
class Cats {

    static $headers = ["Name", "Breed", "Sex", "Shots", "Declawed", "Neutered", "Birthdate"];

    static function getById($catId){
        error_log("Getting cat with id: " . $catId);
        global $db;
        $q = $db->prepare('SELECT * FROM cats WHERE id = ?');
        $q->bind_param("i", $catId);
        $q->execute();
        $q->bind_result($id, $name, $breed, $sex, $shots, $declawed, $neutered, $birthday);
        while($q->fetch()){
            error_log("Adding cat: " . $name);
            return [$name, $breed, $sex, $shots, $declawed, $neutered, $birthday];
        }
    }
   

    // Gets all cats for a specific owner id
    static function getByOwner($ownerId){
        // Get a list of cat ids for the owner
        $catIds = [];
        $cats = [];
        global $db;
        $q = $db->prepare('SELECT * FROM catsOwners WHERE id = ?');
        $q->bind_param("i", $ownerId);
        $q->execute();
        $q->bind_result($id, $catsFk, $ownersFk);

        while($q->fetch()){
            array_push($catIds, $catsFk);
        }

        foreach($catIds as $catId) {
            array_push($cats, Cats::getById($catId));
        }
        //error_log(print_r($cats,true));

        return $cats;

    }

    static function getAll(){
        $data = [];
        global $db;
        $q = $db->prepare('SELECT * FROM cats');
        $q->execute();
        $q->bind_result($id, $name, $breed, $sex, $shots, $declawed, $neutered, $birthday);
        while($q->fetch()){
            $tempArray = [$name, $breed, $sex, $shots, $declawed, $neutered, $birthday];
            array_push($data, $tempArray);
        }
        return $data;
    }
}