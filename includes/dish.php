<?php
    define("TITLE", "MENU | Bakar Gallery App");
    include('includes/header.php');

    //Learn more about preg_replace in php manual.

    function strip_bad_chars($input){
        $output = preg_replace( "/[^a-zA-z0-9_-]/", "", $input );
        return $output;
    }
    if(isset($_GET['item'])){
        $menuItem = strip_bad_chars( $_GET['item'] );
        $dish = $menuItems[$menuItem]; 
    }
?>