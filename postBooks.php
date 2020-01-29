<?php
    session_start();

    $bookName = $_POST['newBook'];

    array_push($_SESSION['booksList'], $bookName);

    header('Location: /Book-list');
?>