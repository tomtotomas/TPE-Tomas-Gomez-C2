<?php
require_once 'config.php';

class AlbumsModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB . ';charset=' . MYSQL_CHARSET,
                        MYSQL_USER,
                        MYSQL_PASS);
    }

    function getAllAlbums() {

        $query = $this->db->query(" SELECT albums.*, artist.artist_name
                              FROM albums
                              JOIN artist ON albums.artist_id = artist.artist_id");
        $albums = $query->fetchAll(PDO::FETCH_OBJ);
        return $albums;

    }

    function getAlbum($id){

        $query = $this->db->prepare(" SELECT albums.*, artist.artist_name 
                                FROM albums
                                JOIN artist ON albums.artist_id = artist.artist_id
                                WHERE albums.album_id = ?");
        $query->execute([$id]);
        $album = $query->fetch(PDO::FETCH_OBJ);
        return $album;

    }

    function getArtistAlbums($id){

        $query = $this->db->prepare(" SELECT albums.*, artist.artist_name 
                                FROM albums
                                JOIN artist ON albums.artist_id = artist.artist_id
                                WHERE artist.artist_id = ?");
        $query->execute([$id]);
        $albums = $query->fetchAll(PDO::FETCH_OBJ);
        return $albums;

    }




}