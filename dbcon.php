<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $link = mysqli_connect('localhost', 'demo', 'demo');
    if (!$link) {
        die('Could not connect: ' . mysqli_error());
    }

    $link->select_db ('Library');

?>