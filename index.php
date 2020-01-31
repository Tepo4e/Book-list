<?php
    session_start();

    if (!isset($_SESSION['WishList'])) {
        $_SESSION['WishList'] = array();
    }
    if (!isset($_SESSION['bookList2'])) {
        $_SESSION['bookList2'] = array();
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
        <h2>Book to read</h2>
        <?php
            foreach ($_SESSION['WishList'] as $bookName) {
                echo "<li>
                         <form action=\"moveBookToAlreadyRead.php\" method=\"GET\">
                                $bookName
                                <button class=\"done-button\">done</button>
                                <input type=\"hidden\" name=\"book\" value=\"$bookName\">
                            </form>    
                        </li>";
            }
        ?>

    <div class="already-read">
        <h2>Already read books</h2>
       <?php
             foreach ($_SESSION['bookList2'] as $bookName2) {
                echo "<li>$bookName2</li>";
            }
        ?>
    </div>
</body>
</html>