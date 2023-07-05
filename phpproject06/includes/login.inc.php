<?php

   
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    createUser($conn, $email, $pwd);

    header("location: ../index.php");

