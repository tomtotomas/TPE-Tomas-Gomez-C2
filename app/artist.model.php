<?php

class ArtistModel {

    function getAllArtist() {

        $db = new PDO('mysql:host=localhost;'.'dbname=db_music;charset=utf8', 'root', '');
        $query = $db->query('SELECT * FROM artist');
        $artist = $query->fetchAll(PDO::FETCH_OBJ);
        return $artist;

    }






}