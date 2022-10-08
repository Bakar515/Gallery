<?php
    define("TITLE", "MENU | Bakar Gallery App");
    include('includes/header.php');
    if(isset($_GET['item'])){
        $menuItem = $_GET['item'];
        $dish = $menuItems[$menuItem]; 
    }
?>