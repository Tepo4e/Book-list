<?php
    session_start();

    $bookName = $_POST['newBook'];

    array_push($_SESSION['booksList'], $bookName);


    $bookName2 = $_POST['newBook2'];

    array_push($_SESSION['booksList2'], $bookName2);
    header('Location: /Book-list');
?>