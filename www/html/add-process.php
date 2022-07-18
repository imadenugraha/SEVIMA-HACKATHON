<?php

include ("config.php");

if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $author = $_POST['author'];
    $email = $_POST['email'];

    $sql = "INSERT INTO book_table (title, author, email) VALUE ('$title','$author','$email')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: index.php?status=success');
    } else {
        header('Location: index.php?status=failed');
    }

} else {
    die("Prohibited Access...");
}

?>