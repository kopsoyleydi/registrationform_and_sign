<?php

    $connect = mysqli_connect('localhost', '3306', 'root', 'root');

    if (!$connect) {
        die('Error connect to DataBase');
    }
