<?php 
require 'sql-config.php';

if(!empty($_GET['id'])) {
    $user_id = $_GET['id'];
    
    $sql = "DELETE FROM users WHERE id = $user_id;";
    $read = mysqli_query($conn, $sql);
    header('Location: index.php');
} else {
    header('Location: index.php');
}