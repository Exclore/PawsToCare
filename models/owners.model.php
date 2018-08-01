<?php

    class Owners {

        static $headers = ["First Name", "Last Name", "Address 1", "Address 2", "City", "Street", "Zip"];

        static function getById($ownerId){
            $data = [];
            global $db;
            $q = $db->prepare('SELECT * FROM owners WHERE id = ?');
            $q->bind_param("i", $ownerId);
            $q->execute();
            $q->bind_result($id, $fname, $lname, $add1, $add2, $city, $st, $zip, $neutered);
            while($q->fetch()){
                $tempArray = [ $fname, $lname, $add1, $add2, $city, $st, $zip ];
                array_push($data, $tempArray);
            }
            return $data;
        }

        static function getAll(){
            $data = [];
            global $db;
            $q = $db->prepare('SELECT * FROM owners');
            $q->execute();
            $q->bind_result($id, $fname, $lname, $add1, $add2, $city, $st, $zip, $neutered);
            while($q->fetch()){
                $tempArray = [ $fname, $lname, $add1, $add2, $city, $st, $zip ];
                array_push($data, $tempArray);
            }
            return $data;
        }
    }

?>