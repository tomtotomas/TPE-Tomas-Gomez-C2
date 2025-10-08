<?php

    include_once 'app/albums.controller.php';

    // TABLA DE RUTEO
    // home - showHome()
    // album/:id - showAlbum($id)
    // artista/:id - showArtist($id)

    if(!empty($_GET["action"])){
        $action = $_GET["action"];
    } else {
        $action = "home";
    }

    $params = explode("/", $action);

    switch ($params[0]){
        case "home":
            $home = new AlbumsController();
            $home->showAlbums();
            break;
        case "album":
            if(isset($params[1])){
                showAlbum($params[1]);
            } else {
                showHome();
            }
            break;

        case "artist":
                showArtist($params[1]);
            break;
    }
