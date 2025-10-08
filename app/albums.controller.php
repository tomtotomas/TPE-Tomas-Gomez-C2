<?php

include_once 'albums.model.php';
include_once 'albums.view.php';


class AlbumsController {


    function showAlbums() {

        $albumModel = new AlbumsModel();
        $albums = $albumModel->getAllAlbums();
        $view = new AlbumsView();
        $view->getHomeView($albums);

    }








}