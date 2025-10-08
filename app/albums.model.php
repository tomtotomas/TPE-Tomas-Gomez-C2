<?php
require_once 'config.php';

class AlbumsModel {

    function getAllAlbums() {

        $db = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB . ';
                        charset=' . MYSQL_CHARSET,
                        MYSQL_USER,
                        MYSQL_PASS);
        $query = $db->query(" SELECT albums.*, artist.artist_name
                              FROM albums
                              JOIN artist ON albums.artist_id = artist.artist_id");
        $albums = $query->fetchAll(PDO::FETCH_OBJ);
        return $albums;

    }






}