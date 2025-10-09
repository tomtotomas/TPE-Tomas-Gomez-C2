<?php


class ArtistView {

    
    function getArtistHomeView($artists) {

        echo '<h2>Artistas:</h2>';
        
        echo '<section>';
        
        foreach ($artists as $artist) {
            echo '
                <a><article class = "albums-home">
                    <img src=" ' . $artist->artist_image . '" width="300px" height="300px alt="' . $artist->artist_name . '">
                    <h3>' . $artist->artist_name . '</h3>
                </article></a>
            ';
        };

        echo '</section>';

    }

    function getArtist($artist){

        echo '
                <a><article class = "albums-home">
                    <img src=" ' . $artist->artist_image . '" width="300px" height="300px alt="' . $artist->artist_name . '">
                    <h3>' . $artist->artist_name . '</h3>
                    <p>' . $artist->artist_bio . '</p>
                </article></a>
            ';


    }


}