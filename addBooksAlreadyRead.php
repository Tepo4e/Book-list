
<?php
    session_start();

    if (!isset($_SESSION['booksList2'])) {
        $_SESSION['booksList2'] = array();
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add book</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="read">
        <h1>Already read</h1>
        <h2>Аdd a book you already read </h2>
        <form action="postBooks.php" method="post"> 
            <label for="new-book-title">Book Title</label>
            <input type="text" name="newBook2" id="new-book-title" placeholder="Game of Thrones">
            <input type="submit" value="Add">
        </form>
    </div>
    <?php
                foreach ($_SESSION['booksList2'] as $bookName2) {
                    echo "<li>$bookName2</li>";
                }
            ?>
    </body>
</html>