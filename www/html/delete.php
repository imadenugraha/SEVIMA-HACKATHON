<?php
    include("config.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "DELETE FROM book_table WHERE id=$id";
        $query = mysqli_query($db, $sql);

        if( $query ){
            header('Location: show-data.php');
        } else {
            die("Delete failed...");
        }
    } else {
        die("Prohibited Access...");
    }
?>