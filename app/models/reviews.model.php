<?php
require_once 'config.php';

class ReviewsModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB . ';charset=' . MYSQL_CHARSET,
                        MYSQL_USER,
                        MYSQL_PASS);
    }

    function getReviews($id){

        $query = $this->db->prepare("SELECT reviews.*, users.username, reviews.date AS reviewDate
                                    FROM reviews 
                                    LEFT JOIN users ON reviews.user_id = users.user_id
                                    WHERE reviews.album_id = ?
                                    ORDER BY reviews.date ASC");
        $query->execute([$id]);

        $reviews = $query->fetchAll(PDO::FETCH_OBJ);
        return $reviews;

    }

    function insertReview($user_id, $album_id, $review, $rating){

        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $date = date('Y-m-d');

        $query = $this->db->prepare("INSERT INTO reviews (user_id, album_id, review, rating, date) VALUES (?, ?, ?, ?, ?)");
        $query->execute([$user_id, $album_id, $review, $rating, $date]);
    }


}