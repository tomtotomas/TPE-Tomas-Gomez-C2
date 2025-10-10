<?php

require_once __DIR__ . '/../models/reviews.model.php';
require_once __DIR__ . '/../views/reviews.view.php';

class ReviewsController {

    function showReviews($id){

        $reviewsModel = new ReviewsModel();
        $reviews = $reviewsModel->getReviews($id);

        $view = new ReviewsView();
        $view->getReviewsView($reviews, $id);

    }

    function addReview($album_id){

        if (!empty ($_POST['review']) && !empty($_POST['rating'])){
            $review = $_POST['review'];
            $rating = $_POST['rating'];

            $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
        
            $reviewModel = new ReviewsModel();
            $reviewModel->insertReview($user_id, $album_id, $review, $rating);
        }

        header('Location: ' . BASE_URL . 'album/' . $album_id);
        exit();

    }





}