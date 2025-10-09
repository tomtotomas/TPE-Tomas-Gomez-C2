<?php
require_once 'config.php';

class ArtistModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB . ';charset=' . MYSQL_CHARSET,
                        MYSQL_USER,
                        MYSQL_PASS);
    }

    function getAllArtist() {

        $query = $this->db->query('SELECT * FROM artist');
        $query->execute();

        $artist = $query->fetchAll(PDO::FETCH_OBJ);
        return $artist;

    }

    function getArtist($id) {

        $query = $this->db->prepare("SELECT * FROM artist WHERE artist_id = ?");
        $query->execute([$id]);
        
        $artist = $query->fetch(PDO::FETCH_OBJ);
        return $artist;

    }






}