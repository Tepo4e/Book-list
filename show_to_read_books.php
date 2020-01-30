<?php
$books = $_POST["myBooks"];
$modifinedBooks = $books."<br>"."\n";

file_put_contents("db.txt", $modifinedBooks, FILE_APPEND);


?>