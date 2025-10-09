<?php

require_once __DIR__ . '/../models/songs.model.php';
require_once __DIR__ . '/../views/songs.view.php';


class SongController {


    function showSongs($id) {

        $songModel = new SongModel();
        $songs = $songModel->getSongs($id);
        $view = new SongView();
        $view->getSongsView($songs);
        

    }



}