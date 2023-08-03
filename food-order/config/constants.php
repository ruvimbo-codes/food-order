<?php 
        // start session
        session_start();

        //create Con stants to store Non repeating Values
        define('SITEURL','http://localhost:8090/food-order/');
        define('LOCALHOST','localhost'); 
        define('DB_USERNAME','root');
        define('DB_PASSWORD','');
        define('DB_NAME','food');


        $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error($sql));// Database connection
        $db_select = mysqli_select_db( $conn, DB_NAME) or die(mysqli_error($conn)); //Selecting Database
