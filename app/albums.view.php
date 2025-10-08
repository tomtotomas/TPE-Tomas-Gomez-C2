<?php


class AlbumsView {

    
    function getHomeView($albums) {

        require_once 'templates/header.phtml';

        echo '<section>';

        foreach ($albums as $album) {
            echo '
                <a href="https://www.youtube.com/"><article>
                    <img src=" ' . $album->album_image . '" width="300px" height="300px alt="' . $album->album_name . '">
                    <h3>' . $album->album_name . '</h3>
                    <h4> ' . $album->artist_name . ' </h4>
                </article></a>
            ';
        };

        echo '</section>';

        require_once 'templates/footer.phtml';

    }



}