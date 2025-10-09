<?php

require_once 'config.php';

class SongModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB . ';charset=' . MYSQL_CHARSET,
                        MYSQL_USER,
                        MYSQL_PASS);
    }

    function getSongs($id){

        $query = $this->db->prepare("SELECT * FROM songs WHERE album_id = ?");
        $query->execute([$id]);
        $songs = $query->fetchAll(PDO::FETCH_OBJ);
        return $songs;

    }


}