<?php


class AlbumsView {

    
    function getAlbumsHomeView($albums) {

        echo '<h2>Albums y EPS:</h2>';

        echo '<section>';

        foreach ($albums as $album) {
            echo '
                <a><article>
                    <img src=" ' . $album->album_image . '" width="300px" height="300px alt="' . $album->album_name . '">
                    <h3>' . $album->album_name . '</h3>
                    <h4> ' . $album->artist_name . ' </h4>
                </article></a>
            ';
        };

        echo '</section>';

    }

    function getAlbumView($album){
        echo '
            <img src=" ' . $album->album_image . '" width="500px" height="500px alt="' . $album->album_name . '">
            <h2>' . $album->album_name . '</h2>
            <p>' . $album->date . '</p>
        ';

    }

    function getArtistAlbumView($albums) {

        echo '<h2>Albums y EPS del artista:</h2>';

        foreach ($albums as $album) {
            echo '
                <a><article>
                    <img src=" ' . $album->album_image . '" width="300px" height="300px alt="' . $album->album_name . '">
                </article></a>
            ';
        };

    }



}