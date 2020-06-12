<?php

$conn = mysqli_connect('localhost', 'homestead', 'secret', 'crud_app');

if(!$conn) {
    die('Database connection error!');
}