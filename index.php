<?php
    session_start();

    if (!isset($_SESSION['booksList'])) {
        $_SESSION['booksList'] = array();
    }
    if (!isset($_SESSION['booksList2'])) {
        $_SESSION['booksList2'] = array();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book readers</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="content">
        <h1>Book lovers</h1>

        <a class="button" href="addBooksToRead.php">Add a book to read</a>
        <br>
        <a class="button" href="addBooksAlreadyRead.php">Add a book you already read</a>
    </div>
    <div class="to-read">
        <h1>Book to read</h1>
        <?php
                foreach ($_SESSION['booksList'] as $bookName) {
                    echo "<li>$bookName</li>";
                }
            ?>
       <div class="Already-read">
        <h1>Already read books</h1>
       <?php
                foreach ($_SESSION['booksList2'] as $bookName2) {
                    echo "<li>$bookName2</li>";
                }
            ?>
    </div>
</body>
</html>