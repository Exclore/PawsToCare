<?php
class Exotics {

    static function getById($exoticId){
        global $db;
        $q = $db->prepare('SELECT * FROM exotics WHERE id = ?');
        $q->bind_params("i", $exoticId);
        $q->execute();
        $q->bind_result($id, $name, $species, $sex, $neutered, $birthday);
        while($q->fetch()){
            return [$name, $species, $sex, $neutered, $birthday];
        }
    }
   

    // Gets all cats for a specific owner id
    static function getByOwner($ownerId){
        // Get a list of cat ids for the owner
        $exoticIds = [];
        $exotics = [];
        global $db;
        $q = $db->prepare('SELECT * FROM exoticOwners WHERE id = ?');
        $q->bind_params("i", $ownerId);
        $q->execute();
        $q->bind_result($id, $exoticsFk, $ownersFk);
        
        while($q->fetch()){
            array_push($exoticIds, $exoticsFk);
        }

        foreach($exoticIds as $exoticId) {
            array_push($exotics, Exotics::getById($exoticId));
        }

        return $exotics;

    }

    function getAll(){
        $data = [];
        global $db;
        $q = $db->prepare('SELECT * FROM exotics');
        $q->execute();
        $q->bind_result($id, $name, $species, $sex, $neutered, $birthday);
        while($q->fetch()){
            $tempArray = [ $name, $species, $sex, $neutered, $birthday];
            array_push($data, $tempArray);
        }
        return $data;
    }
}