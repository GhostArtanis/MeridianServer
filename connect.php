<?php

    $connect = mysqli_connect('localhost','root','','meridian');

    if (!$connect) {
        die('Error connect to DataBase');
    }