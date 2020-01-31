<?php
    session_start();

    $book = $_GET['book'];
    
    array_push($_SESSION['bookList2'], $book);

    $bookIndex = array_search($book, $_SESSION['WishList']);
    unset($_SESSION['WishList'][$bookIndex]);

    header('Location: /Book-list');
?>