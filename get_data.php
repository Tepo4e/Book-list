<?php
$books = $_POST["myBooks"];
$modifinedBooks = $books."<br>"."\n";

file_put_contents("db.txt", $modifinedBooks, FILE_APPEND);

$list = file_get_contents("db.txt");
echo $list;
echo "<a href='/'> Go back! </a>";
?>