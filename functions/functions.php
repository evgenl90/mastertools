<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '/conf.php');


function get_offers_all(){
    global $mysqli;
    $offers = [];
    $result = $mysqli->query("SELECT * FROM `offers`");
    while($row = $result->fetch_assoc()){
        $offers[$row['id']] = $row;
    }
    return $offers;
}