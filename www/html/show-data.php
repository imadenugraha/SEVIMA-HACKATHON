<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple CRUD</title>
</head>
<body>
    <h3>Books List</h3>
    <nav>
        <a href="add-data.php">[+] Add New Book</a>
    </nav>

    <br>
    
    <table border="1">
        <tr>
            <th>Book's Id</th>
            <th>Book's Title</th>
            <th>Author Name</th>
            <th>User Email</th>
        </tr>
        <?php
            $sql = "SELECT * FROM book_table";
            $query = mysqli_query($db, $sql);

            while($books = mysqli_fetch_array($query)){
                echo "<tr>";

                echo "<td>".$books['id']."</td>";
                echo "<td>".$books['title']."</td>";
                echo "<td>".$books['author']."</td>";
                echo "<td>".$books['email']."</td>";

                echo "<td>";
                echo "<a href='edit.php?id=".$books['id']."'>Edit</a> | ";
                echo "<a href='delete.php?id=".$books['id']."'>Delete</a>";
                echo "</td>";

                echo "</tr>";
            }
        ?>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query); ?></p>
</body>
</html>
