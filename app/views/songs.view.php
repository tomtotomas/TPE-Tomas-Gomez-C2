<?php


class SongView {

    
    function getSongsView($songs) {

        echo '<p>Canciones:</p>';

        echo '
        <table>
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Canción</th>
                    <th>Duración</th>
                </tr>
            </thead>
            <tbody>';

        foreach ($songs as $song) {
            echo '
                <tr>
                    <td>' . $song->song_number . '</td>
                    <td>' . $song->song_name . '</td>
                    <td>' . $song->duration . '</td>
                </tr>
            ';
        };
        
        echo '
            </tbody>
        </table>';
    }



}