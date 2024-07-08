<?php

//// superglobals

// $_GET['name'], $_POST['name']

echo $_SERVER['SERVER_NAME'] . '</br>';
echo $_SERVER['REQUEST_METHOD'] . '</br>';
echo $_SERVER['SCRIPT_FILENAME'] . '</br>';
echo $_SERVER['PHP_SELF'] . '</br>';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <input type="text">
    </form>

</body>

</html>