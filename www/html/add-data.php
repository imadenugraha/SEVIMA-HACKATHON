<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple CRUD</title>
</head>
<body>
    <h3>Add New Book</h3>
    <form action="add-process.php" method="post">
        <fieldset>
            <p>
                <label for="title">Book's Title: </label>
                <input type="text" name="title" placeholder="Example: Harry Potter" />
            </p>
            <p>
                <label for="author">Book's Author: </label>
                <input type="text" name="author" placeholder="Example: J. K. Rowling" />
            </p>
            <p>
                <label for="email">Email: </label>
                <input type="email" name="email" placeholder="Example: youremail@email.com" />
            </p>
                <input type="submit" value="Submit" name="submit" />
        </fieldset>
    </form>
</body>
</html>