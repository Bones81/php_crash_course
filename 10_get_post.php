<?php

    if(isset($_POST['submit'])) {
        echo $_POST['name'];
        echo $_POST['age'];
    }

    echo $_GET['name'];
    echo $_GET['age'];
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Nate&age=41">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="number" name="age">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>