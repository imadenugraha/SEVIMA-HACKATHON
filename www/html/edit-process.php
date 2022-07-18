<?php
    include("config.php");

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $title = $_POST['title'];
        $author = $_POST['author'];
        $email = $_POST['email'];

        $sql = "UPDATE book_table SET title='$title',author='$author',email='$email' WHERE id=$id";
        $query = mysqli_query($db, $sql);

        if( $query ){
            header('Location: show-data.php');
        } else {
            die("Editing information failed...");
        }
    } else {
        die("Prohibited access...");
    }
?>