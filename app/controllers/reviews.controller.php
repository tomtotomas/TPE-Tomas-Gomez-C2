<?php

require_once __DIR__ . '/../models/reviews.model.php';
require_once __DIR__ . '/../views/reviews.view.php';

class ReviewsController {

    function showReviews($id){

        $reviewsModel = new ReviewsModel();
        $reviews = $reviewsModel->getReviews($id);

        $view = new ReviewsView();
        $view->getReviewsView($reviews);

    }





}