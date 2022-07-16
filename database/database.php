<?php

    $db_server = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "fullprofiile";

    $databaseconnect = mysqli_connect('localhost','root', '', 'fullprofile');

    if(!$databaseconnect){
        echo die("database connection error:" . mysqli_connect_errno());
    }