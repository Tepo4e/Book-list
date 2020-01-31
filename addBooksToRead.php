<?php
    session_start();

    if (!isset($_SESSION['WishList'])) {
        $_SESSION['WishList'] = array();
    }
?>
<!DOCTYPE html>
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
        <h1>Want to read</h1>
        <h2>Аdd a book you want to read </h2>
        <form action="postBooks.php" method="post"> 
            <label for="new-book-title">Book Title</label>
            <input type="text" name="newBook" id="new-book-title" placeholder="Inferno">
            <input type="submit" value="Add">
        </form>
    </div>
        <ul class="books-list">
             <?php
                foreach ($_SESSION['WishList'] as $bookName) {
                    echo "<li>$bookName</li>";
                }
            ?>
        </ul>
</body>
</html>