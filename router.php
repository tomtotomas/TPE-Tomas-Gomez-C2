<?php

    include_once 'app/controllers/albums.controller.php';
    include_once 'app/controllers/artist.controller.php';
    include_once 'app/controllers/songs.controller.php';
    include_once 'app/controllers/page.controller.php';

    // TABLA DE RUTEO
    // home - showHome()
    // album/:id - showAlbum($id)
    // artista/:id - showArtist($id)

    require_once 'templates/header.phtml';

    if(!empty($_GET["action"])){
        $action = $_GET["action"];
    } else {
        $action = "home";
    }

    $params = explode("/", $action);

    switch ($params[0]){

        //hago un subruteo para no tener un chorizo de codigo aca
        case 'home':
        case 'album':
        case 'artist':
        case 'review':
            $pageController = new PageController();
            $pageController->route($params);
            break;


        default:
            echo "404 - Página no encontrada";
            break;
    }

    
    require_once 'templates/footer.phtml';
