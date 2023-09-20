<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php
session_start();
session_regenerate_id();

$db = null;
$user = "admin";
$password = "admin";
$database= "printshop";

if (isset($_SESSION['tunnus']) {
        try {
        $db = new PDO("mysql:host=localhost;dbname=$database;charset=utf8, $user, $password");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }   catch (Exception $ex) {
            echo "<p>Errorin database connection</p>";   
        
    if (isset($_GET['delete'])) {
        unset($_SESSION['cart']);
    }
    
    if (isset($_GET['kuvanro'])) {
        $kuvanro = filter_input(INPUT_GET,'kuvanro',FILTER_SANITIZE_NUMBER_INT);
    }

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $tuote_id = filter_input(INPUT_POST,'id',FILTER_SANITIZE_NUMBER_INT);
        array_push($_SESSION['kori'],$tuote_id);
    }
?>

<h3>Shop</h3>

<div class="container" id="view-product">

    <div class="row">