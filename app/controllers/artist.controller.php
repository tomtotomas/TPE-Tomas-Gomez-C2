<?php

require_once __DIR__ . '/../models/artist.model.php';
require_once __DIR__ . '/../views/artist.view.php';


class ArtistsController {


    function showArtists() {

        $artistModel = new ArtistModel();
        $artists = $artistModel->getAllArtist();
        $view = new ArtistView();
        $view->getArtistHomeView($artists);

    }

    function showArtistAlbum($id){

        $artistModel = new ArtistModel();
        $artist = $artistModel->getArtistAlbum($id);

        $view = new ArtistView();
        $view->getArtist($artist);

    }

    function showArtist($id){

        $artistModel = new ArtistModel();
        $artist = $artistModel->getArtist($id);

        if (!$artist) {
            echo "<p>Este artista no existe.</p>";
            return;
        }

        $view = new ArtistView();
        $view->getArtistSolo($artist);

    }






}