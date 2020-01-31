<?php
    session_start();

    $bookName2 = $_POST['newBook2'];
    array_push($_SESSION['bookList2'], $bookName2);

    header('Location: /Book-list');
?>