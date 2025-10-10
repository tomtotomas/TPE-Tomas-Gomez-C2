<?php

    require_once 'config.php';
    include_once 'app/controllers/albums.controller.php';
    include_once 'app/controllers/artist.controller.php';
    include_once 'app/controllers/songs.controller.php';
    include_once 'app/controllers/reviews.controller.php';

    // TABLA DE RUTEO
    // home - showHome()
    // album/:id - showAlbum($id)
    // artista/:id - showArtist($id)

    define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
    
    require_once 'templates/header.phtml';

    if(!empty($_GET["action"])){
        $action = $_GET["action"];
    } else {
        $action = "home";
    }

    $params = explode("/", $action);

    switch ($params[0]){

        case "auth":

            break;

        
        // visual
        case 'home': 
                $homeAlbums = new AlbumsController();
                $homeAlbums->showAlbums();
                
                $homeArtists = new ArtistsController();
                $homeArtists->showArtists();
                break;

        case 'albums':
                $homeAlbums = new AlbumsController();
                $homeAlbums->showAlbums();
                break;

        case 'album':
            if(isset($params[1])){
                $album = new AlbumsController();
                $album->showAlbum($params[1]);

                $songs = new SongController();
                $songs->showSongs($params[1]);

                $artist = new ArtistsController();
                $artist->showArtistAlbum($params[1]);

                $reviews = new ReviewsController();
                $reviews->showReviews($params[1]);
            } else {
                $homeAlbums = new AlbumsController();
                $homeAlbums->showAlbums();
                
                $homeArtists = new ArtistsController();
                $homeArtists->showArtists();
            }
            break;

        case 'artista':
            if (isset($params[1])) {
                $artist = new ArtistsController();
                $artist->showArtist($params[1]);
        
                $albums = new AlbumsController();
                $albums->showArtistAlbums($params[1]);
            } else {
                $homeAlbums = new AlbumsController();
                $homeAlbums->showAlbums();
                
                $homeArtists = new ArtistsController();
                $homeArtists->showArtists();
            }
            break;  

        case 'artistas':
            $homeArtists = new ArtistsController();
            $homeArtists->showArtists();
            break;


        // lo no tan visual
        case 'addReview':
            if(isset($params[1])) {
                $review = new ReviewsController();
                $review->addReview($params[1]);
            }
            break;

        default:
            echo "404 - Página no encontrada";
            break;
    }

    
    require_once 'templates/footer.phtml';
