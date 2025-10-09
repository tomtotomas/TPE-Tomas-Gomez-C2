<?php

include_once 'app/controllers/albums.controller.php';
include_once 'app/controllers/artist.controller.php';
include_once 'app/controllers/songs.controller.php';
include_once 'app/controllers/reviews.controller.php';

class PageController {

    function route($params){

        switch ($params[0]) {

            case 'home': 
                $homeAlbums = new AlbumsController();
                $homeAlbums->showAlbums();
                
                $homeArtists = new ArtistsController();
                $homeArtists->showArtists();
                break;

            case 'album':
                if(isset($params[1])){
                    $album = new AlbumsController();
                    $album->showAlbum($params[1]);

                    $songs = new SongController();
                    $songs->showSongs($params[1]);

                    $artist = new ArtistsController();
                    $artist->showArtist($params[1]);

                    $reviews = new ReviewsController();
                    $reviews->showReviews($params[1]);
                } else {
                    $homeAlbums = new AlbumsController();
                    $homeAlbums->showAlbums();
                    
                    $homeArtists = new ArtistsController();
                    $homeArtists->showArtists();
                }
                break;

            case 'artist':
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

        }

    }

}