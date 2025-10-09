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

        $query = $this->db->prepare("SELECT reviews.*, users.username
                                    FROM reviews 
                                    JOIN users ON reviews.user_id = users.user_id
                                    WHERE reviews.album_id = ?");
        $query->execute([$id]);

        $reviews = $query->fetchAll(PDO::FETCH_OBJ);
        return $reviews;

    }


}