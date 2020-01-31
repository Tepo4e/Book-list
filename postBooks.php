<?php
    session_start();

    $bookName = $_POST['newBook'];
    array_push($_SESSION['WishList'], $bookName);

   
    header('Location: /Book-list');
?>