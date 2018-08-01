<?php
class Cats {

    static function getById($catId){
        global $db;
        $q = $db->prepare('SELECT * FROM cats WHERE id = ?');
        $q->bind_params("i", $catId);
        $q->execute();
        $q->bind_result($id, $name, $breed, $sex, $shots, $declawed, $neutered, $birthday);
        while($q->fetch()){
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
        $q->bind_params("i", $ownerId);
        $q->execute();
        $q->bind_result($id, $catsFk, $ownersFk);

        while($q->fetch()){
            array_push($catIds, $catsFk);
        }

        foreach($catIds as $catId) {
            array_push($cats, Cats::getById($catId));
        }

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