<?php


class ReviewsView {

    
    function getReviewsView($reviews) {

        echo '<h2>REVIEWS de usuarios:</h2>';

        foreach ($reviews as $review) {
            echo '  
                <h4>' . $review->username . '</h4>
                <p>' . $review->date . '</p>
                <p>' . $review->review . '</p>
                <p> Raiting: ' . $review->rating . ' </p>
            ';
        };


    }

}