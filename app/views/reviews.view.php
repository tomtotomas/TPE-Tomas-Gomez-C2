<?php


class ReviewsView {

    
    function getReviewsView($reviews, $album_id) {

        echo '<h2>REVIEWS de usuarios:</h2>';

        foreach ($reviews as $review) {
            echo '  
                <h4>' . ($review->username ?? 'ANON') . '</h4>
                <p>' . $review->reviewDate . '</p>
                <p>' . $review->review . '</p>
                <p> Raiting: ' . $review->rating . ' </p>
            ';
        };

        echo '
            <h3>Reseña el album:</h3>
            <form action="' . BASE_URL . 'addReview/' . $album_id .'" method="POST">
                <textarea name="review" placeholder="Escribi aca" required></textarea><br>
                <label>Raiting: </label>
                <input type="number" name="rating" min="1" max="5" required><br>
                <button type="submit">Enviar</button>
            </form>
        ';


    }

}