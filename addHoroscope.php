<?php 
session_start();
require "./horoscopeList.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['dateOfBirth']) && !isset($_SESSION ['horoscope'])){
        updateHoroscope($_POST["dateOfBirth"], false);
        echo json_encode(array('sucess' => true));
    } else {
        echo json_encode(array ('sucess' => false));
    }
}
?>