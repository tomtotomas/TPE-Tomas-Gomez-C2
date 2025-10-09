<?php

require_once __DIR__ . '/../models/albums.model.php';
require_once __DIR__ . '/../views/albums.view.php';


class AlbumsController {


    function showAlbums() {

        $albumModel = new AlbumsModel();
        $albums = $albumModel->getAllAlbums();
        $view = new AlbumsView();
        $view->getAlbumsHomeView($albums);
        

    }

    function showAlbum($id) {

        $albumModel = new AlbumsModel();
        $album = $albumModel->getAlbum($id);

        if (!$album) {
            echo "<p>Este album no existe o no fue encontrado.</p>";
            return;
        }

        $view = new AlbumsView();
        $view->getAlbumView($album);


    }

    function showArtistAlbums($id){

        $albumModel = new AlbumsModel();
        $albums = $albumModel->getArtistAlbums($id);
        $view = new AlbumsView();
        $view->getArtistAlbumView($albums);

    }





}