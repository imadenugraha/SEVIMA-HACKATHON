<?php
    include("config.php");

    if( !isset($_GET['id'] )){
        header('Location: show-data.php');
    }

    $id = $_GET['id'];

    $sql = "SELECT * FROM book_table WHERE id=$id";
    $query = mysqli_query($db, $sql);
    $books = mysqli_fetch_assoc($query);

    if( mysqli_num_rows($query) < 1 ){
        die("Data not found...");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple CRUD</title>
</head>
<body>
    <h3>Edit Information</h3>
    <form action="edit-process.php" method="post">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $books['id']; ?>" />

            <p>
                <label for="title">Book's Title: </label>
                <input type="text" name="title" placeholder="Harry Potter" value="<?php echo $books['title']; ?>" />
            </p>
            <p>
                <label for="author">Author Name: </label>
                <input type="text" name="author" placeholder="J. K. Rolling" value="<?php echo $books['author']; ?>" />
            </p>
            <p>
                <label for="email">Your Email: </label>
                <input type="email" name="email" placeholder="youremail@email.com" value="<?php echo $books['email']; ?>" />
            </p>
                <input type="submit" value="Submit" name="submit" />
        </fieldset>
    </form>
</body>
</html>